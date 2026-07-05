const { spawn } = require('child_process');
const net = require('net');
const path = require('path');

function findFreePort(start = 8000, end = 8100) {
  let current = start;

  return new Promise((resolve, reject) => {
    const tryPort = () => {
      if (current > end) {
        resolve(0);
        return;
      }

      const server = net.createServer();
      server.unref();
      server.on('error', () => {
        current += 1;
        tryPort();
      });
      server.listen(current, '127.0.0.1', () => {
        const port = current;
        server.close(() => resolve(port));
      });
    };

    tryPort();
  });
}

(async () => {
  const port = await findFreePort();
  const args = ['./', '-p', String(port), '--silent', '-o', '-c-1'];

  // On Windows the executable shim is http-server.cmd; avoid using a shell so
  // paths with spaces are handled correctly.
  let cmd;
  const spawnOpts = { stdio: 'inherit', shell: false };

  if (process.platform === 'win32') {
    // Use cmd.exe to run the .cmd shim so Windows handles it correctly,
    // and include the full path as an argument to cmd.exe.
    const cmdShim = path.join(__dirname, 'node_modules', '.bin', 'http-server.cmd');
    cmd = process.env.comspec || 'cmd.exe';
    args.unshift(cmdShim);
    args.unshift('/c');
  } else {
    cmd = path.join(__dirname, 'node_modules', '.bin', 'http-server');
  }

  console.log(`Starting local server on http://localhost:${port}`);

  const child = spawn(cmd, args, spawnOpts);

  child.on('error', (error) => {
    console.error('Failed to start http-server:', error.message);
    process.exit(1);
  });

  child.on('exit', (code) => {
    process.exit(code);
  });
})();
