# PageSpeed Optimization — what changed (2026-06-23)

Work done to lift the homepage from Mobile 52 / Desktop 68 toward the 95–100 green zone,
based on the PageSpeed Insights Desktop & Mobile reports.

## Global (benefits every page)
- **`.htaccess`** added: GZIP/Brotli text compression, 1-year cache headers for static
  assets (`Cache-Control: immutable`), security headers, and **automatic WebP delivery**
  (if a `.webp` twin exists next to a `.png/.jpg`, Apache serves it to supporting browsers —
  no markup change needed). Fixes "Use efficient cache lifetimes" (~1.5 MB) and text compression.
- **Images optimized**: all 300+ raster images downscaled (longest edge capped at 1600px)
  and a `.webp` twin generated for each. Image payload dropped **43 MB → 3.5 MB (-92%)**.
  The LCP hero `banner.png`: 845 KB → **51 KB** WebP. Originals are preserved in git history.
- **`Navigation bar.php`** (included on every page): removed Bootstrap 4 (CSS+JS) and jQuery —
  now standardized on **Bootstrap 5.3.3 only**, scripts deferred, duplicate Font Awesome removed,
  desktop dropdown switched to pure CSS hover, logo given a real `alt` + dimensions.
- **`footer.php`**: removed the third duplicate copy of Bootstrap / Font Awesome / site CSS.

## Homepage (`index.php`)
- **`<head>` rebuilt**: one Bootstrap 5.3.3 (was 5.0.2 duplicate), CDN `preconnect`s,
  `preload` + `fetchpriority="high"` on the LCP image, and Font Awesome / AOS / Owl CSS
  switched to non-blocking load (`media="print" onload`). Fixes "render-blocking requests".
- **Scripts deduped**: was jQuery ×3 + Bootstrap ×5 (all render-blocking) → now one jQuery,
  one Owl, one AOS, all `defer`. Inline init moved to `init.js`. Fixes "duplicated/unused JS",
  lowers Total Blocking Time. Duplicate Google Analytics tag removed.
- **CLS fixed**: intrinsic `width`/`height` added to ~150 images, `loading="lazy"` +
  `decoding="async"` on below-the-fold images.
- **Accessibility/SEO**: all form fields given `aria-label`, carousel arrows given names,
  non-crawlable `href="#"` dropdown converted to a `<button>`, nav logo `alt` added.

## Optional follow-up (not required for the homepage score)
The ~20 service/inner pages still load their own duplicate Bootstrap/Owl/jQuery in their
`<head>` and end-of-body. They already benefit from the global fixes above, but applying the
same head/script cleanup per page would push their individual scores up too. The pattern to
copy is in `index.php`. The unused `header.php` file is not referenced anywhere and can be deleted.
