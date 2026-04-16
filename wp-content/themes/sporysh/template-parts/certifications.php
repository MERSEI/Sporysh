<?php
/**
 * Template part: Certifications section (#certifications)
 */
?>
<!-- ==================== CERTIFICATIONS ==================== -->
<section class="certifications" id="certifications">
  <div class="container">
    <div class="section-header">
      <span class="section-tag"><?php echo esc_html( sporysh_t( 'section-tag-quality', 'Quality Assurance' ) ); ?></span>
      <h2 class="section-title"><?php echo esc_html( sporysh_t( 'section-title-certs', 'Our Certifications' ) ); ?></h2>
      <p class="section-desc"><?php echo esc_html( sporysh_t( 'section-desc-certs', 'We comply with international standards to ensure the highest quality of our products for the European market.' ) ); ?></p>
    </div>
    <div class="certifications__grid">

      <!-- ISO 22000 -->
      <div class="cert-card">
        <div class="cert-card__badge">
          <svg viewBox="0 0 160 160" xmlns="http://www.w3.org/2000/svg">
            <circle cx="80" cy="80" r="76" fill="none" stroke="#111827" stroke-width="3"/>
            <circle cx="80" cy="80" r="68" fill="none" stroke="#111827" stroke-width="1.5"/>
            <rect x="18" y="65" width="124" height="30" fill="#111827" rx="2"/>
            <text x="80" y="85" text-anchor="middle" font-family="Arial Black,sans-serif" font-weight="900" font-size="20" fill="white" letter-spacing="1">ISO 22000</text>
            <path id="iso-top" d="M 20,80 A 60,60 0 0,1 140,80" fill="none"/>
            <text font-family="Arial,sans-serif" font-weight="700" font-size="12" fill="#111827" letter-spacing="3">
              <textPath href="#iso-top" startOffset="15%">CERTIFIED</textPath>
            </text>
            <path id="iso-bot" d="M 20,80 A 60,60 0 0,0 140,80" fill="none"/>
            <text font-family="Arial,sans-serif" font-weight="700" font-size="12" fill="#111827" letter-spacing="3">
              <textPath href="#iso-bot" startOffset="15%">CERTIFIED</textPath>
            </text>
            <text x="80" y="42" text-anchor="middle" font-size="11" fill="#111827">&#9733; &#9733; &#9733; &#9733; &#9733;</text>
            <text x="80" y="128" text-anchor="middle" font-size="11" fill="#111827">&#9733; &#9733; &#9733; &#9733; &#9733;</text>
          </svg>
        </div>
        <h3>ISO 22000</h3>
        <p>Food Safety Management System</p>
      </div>

      <!-- Organic Standard -->
      <div class="cert-card cert-card--organic">
        <div class="cert-card__badge cert-card__badge--organic">
          <div class="cert-organic__icon">
            <svg viewBox="0 0 100 120" xmlns="http://www.w3.org/2000/svg">
              <ellipse cx="50" cy="60" rx="48" ry="58" fill="#4A5568"/>
              <ellipse cx="50" cy="60" rx="42" ry="52" fill="none" stroke="#9CA3AF" stroke-width="2"/>
              <path d="M50,105 L50,72 L42,85 L50,72 L58,85 L50,72" stroke="white" stroke-width="2.5" fill="none" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M50,105 C44,108 38,112 32,110 M50,105 C56,108 62,112 68,110" stroke="white" stroke-width="2" fill="none" stroke-linecap="round"/>
              <path d="M50,72 C45,65 36,60 30,52 C38,56 46,64 50,72Z" fill="white"/>
              <path d="M50,72 C55,65 64,60 70,52 C62,56 54,64 50,72Z" fill="white"/>
              <path d="M50,60 C43,53 35,47 32,38 C40,44 47,55 50,60Z" fill="white"/>
              <path d="M50,60 C57,53 65,47 68,38 C60,44 53,55 50,60Z" fill="white"/>
              <path d="M50,48 C45,41 41,33 44,25 C47,33 49,42 50,48Z" fill="white"/>
              <path d="M50,48 C55,41 59,33 56,25 C53,33 51,42 50,48Z" fill="white"/>
              <ellipse cx="50" cy="22" rx="5" ry="7" fill="white"/>
            </svg>
          </div>
          <div class="cert-organic__text">
            <span>Organic</span>
            <span>Standard</span>
          </div>
        </div>
        <h3>Organic Standard</h3>
        <p>Certified Organic Production</p>
      </div>

      <!-- FDA Approved -->
      <div class="cert-card">
        <div class="cert-card__badge">
          <svg viewBox="0 0 160 160" xmlns="http://www.w3.org/2000/svg">
            <circle cx="80" cy="80" r="76" fill="none" stroke="#111827" stroke-width="3"/>
            <circle cx="80" cy="80" r="68" fill="none" stroke="#111827" stroke-width="1.5"/>
            <circle cx="18" cy="80" r="5" fill="#111827"/>
            <circle cx="142" cy="80" r="5" fill="#111827"/>
            <text x="80" y="92" text-anchor="middle" font-family="Arial Black,sans-serif" font-weight="900" font-size="38" fill="#111827" letter-spacing="-1">FDA</text>
            <text x="80" y="92" text-anchor="middle" font-family="Arial Black,sans-serif" font-weight="900" font-size="38" fill="none" stroke="white" stroke-width="1.5" letter-spacing="-1">FDA</text>
            <path id="fda-top" d="M 22,80 A 58,58 0 0,1 138,80" fill="none"/>
            <text font-family="Arial,sans-serif" font-weight="700" font-size="12" fill="#111827" letter-spacing="4">
              <textPath href="#fda-top" startOffset="12%">APPROVED</textPath>
            </text>
            <path id="fda-bot" d="M 22,80 A 58,58 0 0,0 138,80" fill="none"/>
            <text font-family="Arial,sans-serif" font-weight="700" font-size="12" fill="#111827" letter-spacing="4">
              <textPath href="#fda-bot" startOffset="12%">APPROVED</textPath>
            </text>
          </svg>
        </div>
        <h3>FDA Approved</h3>
        <p>Food &amp; Drug Administration Standards</p>
      </div>

    </div>
  </div>
</section>
