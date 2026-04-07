<?php
/**
 * Template part: Contacts section (#contacts)
 */
?>
<!-- ==================== CONTACTS ==================== -->
<section class="contacts" id="contacts">
  <div class="container">
    <div class="section-header">
      <span class="section-tag"><?php echo esc_html( sporysh_t( 'section-tag-contact', 'Get in Touch' ) ); ?></span>
      <h2 class="section-title"><?php echo esc_html( sporysh_t( 'section-title-contacts', 'Contacts' ) ); ?></h2>
      <p class="section-desc"><?php echo esc_html( sporysh_t( 'section-desc-contacts', 'Reach out to our export department for inquiries, pricing, and partnership opportunities.' ) ); ?></p>
    </div>
    <div class="contacts__layout">
      <div class="contacts__info">
        <div class="contact-block">
          <h3><?php echo esc_html( sporysh_t( 'contact-export-dept', 'Export Department' ) ); ?></h3>
          <div class="contact-item">
            <i data-lucide="mail"></i>
            <a href="mailto:info@sporysh.com" target="_blank" rel="noopener noreferrer">info@sporysh.com</a>
          </div>
          <div class="contact-item">
            <i data-lucide="phone"></i>
            <a href="tel:+380974964423">+380 97 496 4423</a>
          </div>
          <div class="contact-item">
            <i data-lucide="phone"></i>
            <a href="tel:+080023367811">+0800 2336 7811</a>
          </div>
        </div>
        <div class="contact-block">
          <h3><?php echo esc_html( sporysh_t( 'contact-address-label', 'Address' ) ); ?></h3>
          <div class="contact-item">
            <i data-lucide="map-pin"></i>
            <span><?php echo wp_kses_post( sporysh_t( 'contact-address-text', 'Prospekt Nezalezhnosti 106-b,<br>Zhytomyr, Ukraine, 10029' ) ); ?></span>
          </div>
        </div>
        <div class="contact-block">
          <h3><?php echo esc_html( sporysh_t( 'contact-follow', 'Follow Us' ) ); ?></h3>
          <div class="contacts__social">
            <a href="https://www.instagram.com/sporysh_tm" target="_blank" rel="noopener noreferrer" aria-label="Instagram" class="social-link">
              <svg viewBox="0 0 24 24" width="20" height="20" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="2" width="20" height="20" rx="5"/><circle cx="12" cy="12" r="5"/><circle cx="17.5" cy="6.5" r="1.5" fill="currentColor" stroke="none"/></svg>
            </a>
            <a href="https://www.facebook.com/share/1MCBSfD9iV/" target="_blank" rel="noopener noreferrer" aria-label="Facebook" class="social-link">
              <svg viewBox="0 0 24 24" width="20" height="20" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"/></svg>
            </a>
            <a href="https://www.linkedin.com/company/sporysh" target="_blank" rel="noopener noreferrer" aria-label="LinkedIn" class="social-link">
              <svg viewBox="0 0 24 24" width="20" height="20" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"/><rect x="2" y="9" width="4" height="12"/><circle cx="4" cy="4" r="2"/></svg>
            </a>
          </div>
        </div>
      </div>
      <div class="contacts__map">
        <iframe
          src="https://maps.google.com/maps?q=%D0%BC.%20%D0%96%D0%B8%D1%82%D0%BE%D0%BC%D0%B8%D1%80%2C%20%D0%A3%D0%BA%D1%80%D0%B0%D1%97%D0%BD%D0%B0%2C%2010029%20%D0%9F%D1%80%D0%BE%D1%81%D0%BF%D0%B5%D0%BA%D1%82%20%D0%9D%D0%B5%D0%B7%D0%B0%D0%BB%D0%B5%D0%B6%D0%BD%D0%BE%D1%81%D1%82%D1%96%20106-%D0%B1&t=m&z=13&output=embed&iwloc=near"
          width="100%" height="100%" style="border:0; border-radius: 12px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" title="SPORYSH location on map">
        </iframe>
      </div>
    </div>

    <!-- Managers Grid -->
    <div class="managers-grid">
      <div class="manager-card manager-card--head">
        <div class="manager-card__role-badge">Head of International Sales</div>
        <div class="manager-card__avatar">NI</div>
        <h3 class="manager-card__name">Nick Ischenko</h3>
        <div class="manager-card__contacts">
          <a href="tel:+380971813631" class="manager-card__link">
            <i data-lucide="phone"></i>+380 97 181 3631
          </a>
          <a href="mailto:export@sporysh.com.ua" class="manager-card__link">
            <i data-lucide="mail"></i>export@sporysh.com.ua
          </a>
        </div>
      </div>
      <div class="manager-card">
        <div class="manager-card__role-badge">Export Manager</div>
        <div class="manager-card__avatar">AK</div>
        <h3 class="manager-card__name">Anna Kosovets</h3>
        <div class="manager-card__contacts">
          <a href="tel:+380638664158" class="manager-card__link">
            <i data-lucide="phone"></i>+380 63 866 4158
          </a>
          <a href="mailto:a.kosovets@sporysh.com.ua" class="manager-card__link">
            <i data-lucide="mail"></i>a.kosovets@sporysh.com.ua
          </a>
        </div>
      </div>
      <div class="manager-card">
        <div class="manager-card__role-badge">Export Manager</div>
        <div class="manager-card__avatar">SY</div>
        <h3 class="manager-card__name">Sofia Yakymenko</h3>
        <div class="manager-card__contacts">
          <a href="tel:+380983368238" class="manager-card__link">
            <i data-lucide="phone"></i>+380 98 336 8238
          </a>
          <a href="mailto:s.yakymenko@sporysh.com.ua" class="manager-card__link">
            <i data-lucide="mail"></i>s.yakymenko@sporysh.com.ua
          </a>
        </div>
      </div>
      <div class="manager-card">
        <div class="manager-card__role-badge">Export Manager</div>
        <div class="manager-card__avatar">AR</div>
        <h3 class="manager-card__name">Anastasia Romanchuk</h3>
        <div class="manager-card__contacts">
          <a href="tel:+380967930614" class="manager-card__link">
            <i data-lucide="phone"></i>+380 96 793 0614
          </a>
          <a href="mailto:a.romanchuk@sporysh.com.ua" class="manager-card__link">
            <i data-lucide="mail"></i>a.romanchuk@sporysh.com.ua
          </a>
        </div>
      </div>
    </div>
  </div>
</section>
