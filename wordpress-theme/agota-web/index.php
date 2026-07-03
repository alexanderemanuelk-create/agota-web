<?php get_header(); ?>

<section class="hero" id="domov">
  <div class="hero-copy">
    <span class="eyebrow">Profesionálna estetika</span>
    <h1>Originálny a minimalistický web</h1>
    <p>Priestranné rozloženie, silné farby a čistý vizuál pre modernú prezentačnú stránku.</p>
    <div class="hero-actions">
      <a href="#rezervacia" class="hero-cta">Rezervujte teraz</a>
      <a href="#galeria" class="hero-secondary">Pozrieť galériu</a>
    </div>
  </div>
  <div class="hero-panel">
    <div class="hero-card">
      <h3>Agota</h3>
      <p>Perfektný priestor pre klientov, ktorí hľadajú pôsobivý digitálny zážitok.</p>
      <span>Web dizajn, branding, prezentácia</span>
    </div>
  </div>
</section>

<section class="section" id="menu">
  <div class="section-header">
    <div>
      <span class="section-label">Menu</span>
      <h2>Prehľad služieb a ponuky</h2>
    </div>
    <p>Vybrané kategórie s jasnou štruktúrou, navrhnuté tak, aby zákazník rýchlo našiel to, čo potrebuje.</p>
  </div>
  <div class="menu-grid">
    <article class="menu-card"><h3>Predjedlá</h3><p>Čerstvé a kvalitné začiatky pre prvý dojem.</p></article>
    <article class="menu-card"><h3>Hlavné jedlá</h3><p>Starostlivo vybrané klasiky a moderné kombinácie chutí.</p></article>
    <article class="menu-card"><h3>Dezerty</h3><p>Elegantné zakončenie spokojného zážitku.</p></article>
    <article class="menu-card"><h3>Nápoje</h3><p>Osvieženie s dôrazom na dizajn a vyváženú ponuku.</p></article>
  </div>
</section>

<section class="section section-alt" id="onas">
  <div class="section-split">
    <div>
      <span class="section-label">O nás</span>
      <h2>Váš partner pre čistý a prepracovaný dizajn</h2>
      <p>Pomáhame budovať prezentácie, ktoré vyzerajú profesionálne a zanechávajú dojem jednoduchosti. Pracujeme s farbami, ktoré podporujú dôveru a silný vizuálny charakter.</p>
    </div>
    <div class="stats-grid">
      <div class="stat-card"><span>12+</span><p>Rokov skúseností</p></div>
      <div class="stat-card"><span>150+</span><p>Spokojných klientov</p></div>
      <div class="stat-card"><span>24/7</span><p>Dostupnosť a podpora</p></div>
    </div>
  </div>
</section>

<section class="section" id="galeria">
  <div class="section-header">
    <div>
      <span class="section-label">Galéria</span>
      <h2>Ukážka atmosféry a detailov</h2>
    </div>
    <p>Výber vizuálnych konceptov, ktoré zvýrazňujú váš obsah bez rušivých prvkov.</p>
  </div>
  <div class="gallery-grid">
    <div class="gallery-item gallery-tall"></div>
    <div class="gallery-item"></div>
    <div class="gallery-item"></div>
    <div class="gallery-item gallery-wide"></div>
  </div>
</section>

<section class="section section-alt" id="rezervacia">
  <div class="section-header">
    <div>
      <span class="section-label">Rezervácia / Objednať</span>
      <h2>Rezervujte si svoje miesto alebo službu</h2>
    </div>
    <p>Rýchly a čistý formulár, ktorý uľahčí zákazníkom objednať alebo rezervovať presne to, čo potrebujú.</p>
  </div>
  <div class="form-panel">
    <form class="contact-form">
      <div class="form-grid">
        <label>Meno<input type="text" name="name" placeholder="Vaše meno" required></label>
        <label>Email<input type="email" name="email" placeholder="kontakt@example.com" required></label>
        <label>Dátum<input type="date" name="date" required></label>
        <label>Počet osôb<input type="number" name="people" min="1" placeholder="2" required></label>
      </div>
      <label>Poznámka<textarea name="message" rows="5" placeholder="Vaša správa alebo požiadavka"></textarea></label>
      <button type="submit" class="hero-cta">Odoslať rezerváciu</button>
      <p class="form-message" aria-live="polite"></p>
    </form>
  </div>
</section>

<section class="section" id="kontakt">
  <div class="section-split contact-split">
    <div>
      <span class="section-label">Kontakt</span>
      <h2>Sme pripravení odpovedať</h2>
      <p>Ak máte otázky alebo chcete prediskutovať detaily, radi sa ozveme čo najskôr.</p>
      <div class="contact-details">
        <div><strong>Telefón</strong><p>+421 900 123 456</p></div>
        <div><strong>Email</strong><p>info@agota-web.sk</p></div>
        <div><strong>Adresa</strong><p>Bratislavská 12, 821 08 Bratislava</p></div>
      </div>
    </div>
    <div class="contact-card">
      <p>Máte otázku k menu, galérii alebo rezervácii? Pošlite správu a my sa vám ozveme do 24 hodín.</p>
    </div>
  </div>
</section>

<?php get_footer(); ?>
