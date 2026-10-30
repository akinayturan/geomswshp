# GEOMSWSHP

Static archive of the Geochronology and Mass Spectrometry Workshop 2022 website.

Production URL: https://geomswshp.sub.fyi

## Hosting

GitHub Pages serves the repository root on the `master` branch. `CNAME` sets the custom domain; its DNS must point to `akinayturan.github.io`.

All public PHP pages have been converted to HTML with their shared content inlined. No PHP runtime or build step is needed. Assets and documents come from the supplied server backup. The backup itself and server configuration are excluded.

`404.html` redirects known legacy `.php` URLs to their HTML equivalents and preserves query strings and fragments. This is a browser redirect following an HTTP 404, not an HTTP 301. For search-engine migration, configure 301 redirects at a proxy such as Cloudflare.

## Preview

```sh
python3 -m http.server 8001
```

Open http://localhost:8001. The Python server does not automatically serve the custom 404 page; legacy URL behavior is provided by GitHub Pages.

The unused `about.php` theme demo now redirects to the actual workshop invitation rather than exposing sample ticket, login, and shop links.
