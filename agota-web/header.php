<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<header class="site-header">
  <a class="brand" href="<?php echo esc_url(home_url('/')); ?>">
    <div class="brand-mark"></div>
    <span>Agota</span>
  </a>
  <button class="nav-toggle" aria-controls="primary-navigation" aria-expanded="false" type="button">
    <span class="sr-only">Otvoriť menu</span>
    <span></span>
    <span></span>
    <span></span>
  </button>
  <nav class="site-nav" id="primary-navigation" data-visible="false">
    <a href="#domov">Domov</a>
    <a href="#menu">Menu</a>
    <a href="#onas">O nás</a>
    <a href="#galeria">Galéria</a>
    <a href="#rezervacia">Rezervácia / Objednať</a>
    <a href="#kontakt" class="contact-link">Kontakt</a>
  </nav>
</header>
<main>
