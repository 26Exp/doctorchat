<!doctype html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="utf-8">

    <?php
      switch (get_current_blog_id()){
        case 1:
          echo '<link rel="alternate" href="https://doctorchat.md/ru/" hreflang="ru" />';
          echo '<link rel="alternate" href="https://doctorchat.ro/" hreflang="ro-ro" />';
          break;
        case 2:
          echo '<link rel="alternate" href="https://doctorchat.md/" hreflang="ro-md" />';
          echo '<link rel="alternate" href="https://doctorchat.ro/" hreflang="ro-ro" />';
          break;
        default:
          if (str_contains($_SERVER['REQUEST_URI'], 'doctorchat.ro')) {
            echo '<link rel="alternate" href="https://doctorchat.md/" hreflang="ro-md" />';
            echo '<link rel="alternate" href="https://doctorchat.md/ru/" hreflang="ru" />';
          }
          break;
      }
      ?>


    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" sizes="180x180" href="/wp-content/themes/doctorchat/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/wp-content/themes/doctorchat/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/wp-content/themes/doctorchat/favicon/favicon-16x16.png">
    <link rel="manifest" href="/wp-content/themes/doctorchat/favicon/site.webmanifest">
    <link rel="mask-icon" href="/wp-content/themes/doctorchat/favicon/safari-pinned-tab.svg" color="#79d8d5">
    <meta name="msapplication-TileColor" content="#79d8d5">
    <meta name="theme-color" content="#79d8d5">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js" defer></script>
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
          new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
      })(window,document,'script','dataLayer','GTM-W5ZWSFM');</script>
    <!-- End Google Tag Manager -->
    <?php wp_head(); ?>
  </head>

  <body <?php body_class(); ?>>
  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-W5ZWSFM"
                    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->
    <?php wp_body_open(); ?>
    <?php do_action('get_header'); ?>

    <div id="app">
      <?php echo view(app('sage.view'), app('sage.data'))->render(); ?>
    </div>

    <?php do_action('get_footer'); ?>
    <?php wp_footer(); ?>
  </body>
</html>
