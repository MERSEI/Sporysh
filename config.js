/**
 * SPORYSH — Configuration
 * WordPress-compatible config structure for easy migration
 *
 * Migration hint for WordPress:
 * Move these values to WordPress theme options (theme customizer)
 * or store in theme settings
 */

const SPORYSH_CONFIG = {
  // Site identity
  siteName: 'SPORYSH',
  siteSlogan: 'Premium Herbal Raw Materials',

  // Contact information
  contacts: {
    phone: '+380 97 496 4423',
    email: 'info@sporysh.com',
    phoneLink: 'tel:+380974964423',
    emailLink: 'mailto:info@sporysh.com',
  },

  // Hero section
  hero: {
    videoUrl: 'https://www.youtube.com/embed/tMYQR8c29G4?autoplay=1&mute=1&loop=1&playlist=tMYQR8c29G4&controls=0&modestbranding=1&rel=0',
    videoTitle: 'SPORYSH - Premium Herbal Raw Materials',
  },

  // Navigation links
  navigation: {
    home: '#home',
    products: '#products',
    about: '#about',
    contacts: '#contacts',
    categories: '#categories',
  },

  // Language settings
  languages: {
    default: 'en',
    available: ['en', 'ua'],
  },
};

// Export for use in other scripts
if (typeof module !== 'undefined' && module.exports) {
  module.exports = SPORYSH_CONFIG;
}
