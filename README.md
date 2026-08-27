# Sporysh

Client project — product catalogue site for a herbal raw-materials supplier.

**Live:** https://sporysh.vercel.app · production: sporysh.pp.ua

The repo holds two builds of the same site:

- **root** (`index.html`, `products.html`, `app.js`, `style.css`, `assets/`) — the static
  build deployed to Vercel.
- **`wp-content/themes/sporysh/`** — the WordPress theme the static build was derived
  from. `index.php` renders `index.html`, so the markup stays in one place instead of
  being ported into PHP templates twice.

## Static build

No build step and no dependencies — plain HTML/CSS/JS. Serve the root directory:

```bash
npx serve .
```

`config.js` holds the catalogue data driving `products.html`; `vercel.json` handles
routing and headers.

## WordPress theme

Deployed by uploading a theme zip. Rebuild it from the tracked sources:

```bash
zip -r sporysh-theme.zip wp-content/themes/sporysh
```

Then upload via **Appearance → Themes → Add New → Upload Theme**. The archive is
generated rather than tracked, so the theme has a single source of truth.
