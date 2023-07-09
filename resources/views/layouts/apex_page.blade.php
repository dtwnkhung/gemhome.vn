<!DOCTYPE html>
<html lang="en-US">

<head>
  <meta charset="UTF-8" />
  <link rel="profile" href=https:"://gmpg.org/xfn/11" />
  <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=yes">
  <title>{{ isset($SEO) ? $SEO->title : config('app.name', 'Apex') }}</title>
  <meta name='robots' content='max-image-preview:large' />
  @isset($SEO)
        @isset($SEO->canonical)            
            <link rel="canonical" href="{{ $SEO->canonical }}">
        @else   
            <link rel="canonical" href="{{ url()->current() }}">
        @endisset
        @isset($SEO->title)            
            <meta property="og:title" content="{{ $SEO->title }}">
        @endisset
        @isset($SEO->description)            
            <meta property="og:description" content="{{ $SEO->description }}">
        @endisset        
        @isset($SEO->image)
            <meta property="og:image" content="{{ asset('storage/' . $SEO->image)  }}">
        @else
            <meta property="og:image" content="/backend/assets/img/brand/logo.svg">
        @endisset
    @else   
        <link rel="canonical" href="{{ url()->current() }}">
        <meta property="og:title" content="Apex">
        <meta property="og:description" content="">
        <meta property="og:image" content="/backend/assets/img/brand/logo.svg">
    @endisset

  <link rel='dns-prefetch' href='//export.g9ivn_com.com' />
  <link rel='dns-prefetch' href='//maps.googleapis.com' />
  <link rel='dns-prefetch' href='//static.zdassets.com' />
  <link rel='dns-prefetch' href='//fonts.googleapis.com' />
  <link rel='dns-prefetch' href='//s.w.org' />
  <link rel='stylesheet' id='wp-block-library-css'
    href='https://dor.qodeinteractive.com/wp-includes/css/dist/block-library/style.min.css?ver=5.8.3' type='text/css'
    media='all' />
  <link rel='stylesheet' id='wc-blocks-vendors-style-css'
    href='https://dor.qodeinteractive.com/wp-content/plugins/woocommerce/packages/woocommerce-blocks/build/wc-blocks-vendors-style.css?ver=6.5.2'
    type='text/css' media='all' />
  <link rel='stylesheet' id='ppress-select2-css'
    href='https://dor.qodeinteractive.com/wp-content/plugins/wp-user-avatar/assets/select2/select2.min.css?ver=5.8.3'
    type='text/css' media='all' />
  <link rel='stylesheet' id='swiper-css'
    href='https://dor.qodeinteractive.com/wp-content/plugins/qi-addons-for-elementor/assets/plugins/swiper/swiper.min.css?ver=5.8.3'
    type='text/css' media='all' />
  <link rel='stylesheet' id='qi-addons-for-elementor-grid-style-css'
    href='https://dor.qodeinteractive.com/wp-content/plugins/qi-addons-for-elementor/assets/css/grid.min.css?ver=5.8.3'
    type='text/css' media='all' />
  <link rel='stylesheet' id='qi-addons-for-elementor-helper-parts-style-css'
    href='https://dor.qodeinteractive.com/wp-content/plugins/qi-addons-for-elementor/assets/css/helper-parts.min.css?ver=5.8.3'
    type='text/css' media='all' />
  <link rel='stylesheet' id='qi-addons-for-elementor-style-css'
    href='https://dor.qodeinteractive.com/wp-content/plugins/qi-addons-for-elementor/assets/css/main.min.css?ver=5.8.3'
    type='text/css' media='all' />
  <link rel='stylesheet' id='dor-mikado-default-style-css' href='/wp-content/themes/dor/style.css?ver=5.8.3'
    type='text/css' media='all' />
  <link rel='stylesheet' id='dor-mikado-modules-css' href='/wp-content/themes/dor/assets/css/modules.min.css?ver=5.8.3'
    type='text/css' media='all' />
  <link rel='stylesheet' id='mkdf-dripicons-css'
    href='/wp-content/themes/dor/framework/lib/icons-pack/dripicons/dripicons.css?ver=5.8.3' type='text/css'
    media='all' />
  <link rel='stylesheet' id='mkdf-font_elegant-css'
    href='/wp-content/themes/dor/framework/lib/icons-pack/elegant-icons/style.min.css?ver=5.8.3' type='text/css'
    media='all' />
  <link rel='stylesheet' id='mkdf-font_awesome-css'
    href='/wp-content/themes/dor/framework/lib/icons-pack/font-awesome/css/fontawesome-all.min.css?ver=5.8.3'
    type='text/css' media='all' />
  <link rel='stylesheet' id='mkdf-ion_icons-css'
    href='/wp-content/themes/dor/framework/lib/icons-pack/ion-icons/css/ionicons.min.css?ver=5.8.3' type='text/css'
    media='all' />
  <link rel='stylesheet' id='mkdf-linea_icons-css'
    href='/wp-content/themes/dor/framework/lib/icons-pack/linea-icons/style.css?ver=5.8.3' type='text/css'
    media='all' />
  <link rel='stylesheet' id='mkdf-linear_icons-css'
    href='/wp-content/themes/dor/framework/lib/icons-pack/linear-icons/style.css?ver=5.8.3' type='text/css'
    media='all' />
  <link rel='stylesheet' id='mkdf-simple_line_icons-css'
    href='/wp-content/themes/dor/framework/lib/icons-pack/simple-line-icons/simple-line-icons.css?ver=5.8.3'
    type='text/css' media='all' />
  <link rel='stylesheet' id='mediaelement-css'
    href='https://dor.qodeinteractive.com/wp-includes/js/mediaelement/mediaelementplayer-legacy.min.css?ver=4.2.16'
    type='text/css' media='all' />
  <link rel='stylesheet' id='wp-mediaelement-css'
    href='https://dor.qodeinteractive.com/wp-includes/js/mediaelement/wp-mediaelement.min.css?ver=5.8.3' type='text/css'
    media='all' />
  <link rel='stylesheet' id='dor-mikado-woo-css' href='/wp-content/themes/dor/assets/css/woocommerce.min.css?ver=5.8.3'
    type='text/css' media='all' />
  <style id='dor-mikado-woo-inline-css' type='text/css'>
    .page-id-6 .mkdf-content .mkdf-content-inner>.mkdf-container>.mkdf-container-inner,
    .page-id-6 .mkdf-content .mkdf-content-inner>.mkdf-full-width>.mkdf-full-width-inner {
      padding: 0 0;
    }

    .page-id-6 .mkdf-content .mkdf-content-inner>.mkdf-container>.mkdf-container-inner,
    .page-id-6 .mkdf-content .mkdf-content-inner>.mkdf-full-width>.mkdf-full-width-inner {
      padding: 0 0;
    }

    .page-id-6 .mkdf-page-header .mkdf-menu-area {
      background-color: rgba(0, 0, 0, 0);
    }
  </style>
  <link rel='stylesheet' id='dor-mikado-woo-responsive-css'
    href='/wp-content/themes/dor/assets/css/woocommerce-responsive.min.css?ver=5.8.3' type='text/css' media='all' />
  <link rel='stylesheet' id='dor-mikado-style-dynamic-css'
    href='/wp-content/themes/dor/assets/css/style_dynamic.css?ver=1642768118' type='text/css' media='all' />
  <link rel='stylesheet' id='dor-mikado-modules-responsive-css'
    href='/wp-content/themes/dor/assets/css/modules-responsive.min.css?ver=5.8.3' type='text/css' media='all' />
  <link rel='stylesheet' id='dor-mikado-style-dynamic-responsive-css'
    href='/wp-content/themes/dor/assets/css/style_dynamic_responsive.css?ver=1642768118' type='text/css' media='all' />
  <style id="dor-mikado-google-fonts-css" media="all">
    /* cyrillic-ext */
    @font-face {
      font-family: 'Alegreya';
      font-style: italic;
      font-weight: 400;
      src: url(/fonts.gstatic.com/s/alegreya/v26/4UaHrEBBsBhlBjvfkSLk96fp56N1.woff2) format('woff2');
      unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
    }

    /* cyrillic */
    @font-face {
      font-family: 'Alegreya';
      font-style: italic;
      font-weight: 400;
      src: url(/fonts.gstatic.com/s/alegreya/v26/4UaHrEBBsBhlBjvfkSLk967p56N1.woff2) format('woff2');
      unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
    }

    /* greek-ext */
    @font-face {
      font-family: 'Alegreya';
      font-style: italic;
      font-weight: 400;
      src: url(/fonts.gstatic.com/s/alegreya/v26/4UaHrEBBsBhlBjvfkSLk96bp56N1.woff2) format('woff2');
      unicode-range: U+1F00-1FFF;
    }

    /* greek */
    @font-face {
      font-family: 'Alegreya';
      font-style: italic;
      font-weight: 400;
      src: url(/fonts.gstatic.com/s/alegreya/v26/4UaHrEBBsBhlBjvfkSLk96np56N1.woff2) format('woff2');
      unicode-range: U+0370-03FF;
    }

    /* vietnamese */
    @font-face {
      font-family: 'Alegreya';
      font-style: italic;
      font-weight: 400;
      src: url(/fonts.gstatic.com/s/alegreya/v26/4UaHrEBBsBhlBjvfkSLk96Xp56N1.woff2) format('woff2');
      unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
    }

    /* latin-ext */
    @font-face {
      font-family: 'Alegreya';
      font-style: italic;
      font-weight: 400;
      src: url(/fonts.gstatic.com/s/alegreya/v26/4UaHrEBBsBhlBjvfkSLk96Tp56N1.woff2) format('woff2');
      unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
    }

    /* latin */
    @font-face {
      font-family: 'Alegreya';
      font-style: italic;
      font-weight: 400;
      src: url(/fonts.gstatic.com/s/alegreya/v26/4UaHrEBBsBhlBjvfkSLk96rp5w.woff2) format('woff2');
      unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
    }

    /* cyrillic-ext */
    @font-face {
      font-family: 'Alegreya';
      font-style: italic;
      font-weight: 500;
      src: url(/fonts.gstatic.com/s/alegreya/v26/4UaHrEBBsBhlBjvfkSLk96fp56N1.woff2) format('woff2');
      unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
    }

    /* cyrillic */
    @font-face {
      font-family: 'Alegreya';
      font-style: italic;
      font-weight: 500;
      src: url(/fonts.gstatic.com/s/alegreya/v26/4UaHrEBBsBhlBjvfkSLk967p56N1.woff2) format('woff2');
      unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
    }

    /* greek-ext */
    @font-face {
      font-family: 'Alegreya';
      font-style: italic;
      font-weight: 500;
      src: url(/fonts.gstatic.com/s/alegreya/v26/4UaHrEBBsBhlBjvfkSLk96bp56N1.woff2) format('woff2');
      unicode-range: U+1F00-1FFF;
    }

    /* greek */
    @font-face {
      font-family: 'Alegreya';
      font-style: italic;
      font-weight: 500;
      src: url(/fonts.gstatic.com/s/alegreya/v26/4UaHrEBBsBhlBjvfkSLk96np56N1.woff2) format('woff2');
      unicode-range: U+0370-03FF;
    }

    /* vietnamese */
    @font-face {
      font-family: 'Alegreya';
      font-style: italic;
      font-weight: 500;
      src: url(/fonts.gstatic.com/s/alegreya/v26/4UaHrEBBsBhlBjvfkSLk96Xp56N1.woff2) format('woff2');
      unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
    }

    /* latin-ext */
    @font-face {
      font-family: 'Alegreya';
      font-style: italic;
      font-weight: 500;
      src: url(/fonts.gstatic.com/s/alegreya/v26/4UaHrEBBsBhlBjvfkSLk96Tp56N1.woff2) format('woff2');
      unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
    }

    /* latin */
    @font-face {
      font-family: 'Alegreya';
      font-style: italic;
      font-weight: 500;
      src: url(/fonts.gstatic.com/s/alegreya/v26/4UaHrEBBsBhlBjvfkSLk96rp5w.woff2) format('woff2');
      unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
    }

    /* cyrillic-ext */
    @font-face {
      font-family: 'Alegreya';
      font-style: italic;
      font-weight: 600;
      src: url(/fonts.gstatic.com/s/alegreya/v26/4UaHrEBBsBhlBjvfkSLk96fp56N1.woff2) format('woff2');
      unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
    }

    /* cyrillic */
    @font-face {
      font-family: 'Alegreya';
      font-style: italic;
      font-weight: 600;
      src: url(/fonts.gstatic.com/s/alegreya/v26/4UaHrEBBsBhlBjvfkSLk967p56N1.woff2) format('woff2');
      unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
    }

    /* greek-ext */
    @font-face {
      font-family: 'Alegreya';
      font-style: italic;
      font-weight: 600;
      src: url(/fonts.gstatic.com/s/alegreya/v26/4UaHrEBBsBhlBjvfkSLk96bp56N1.woff2) format('woff2');
      unicode-range: U+1F00-1FFF;
    }

    /* greek */
    @font-face {
      font-family: 'Alegreya';
      font-style: italic;
      font-weight: 600;
      src: url(/fonts.gstatic.com/s/alegreya/v26/4UaHrEBBsBhlBjvfkSLk96np56N1.woff2) format('woff2');
      unicode-range: U+0370-03FF;
    }

    /* vietnamese */
    @font-face {
      font-family: 'Alegreya';
      font-style: italic;
      font-weight: 600;
      src: url(/fonts.gstatic.com/s/alegreya/v26/4UaHrEBBsBhlBjvfkSLk96Xp56N1.woff2) format('woff2');
      unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
    }

    /* latin-ext */
    @font-face {
      font-family: 'Alegreya';
      font-style: italic;
      font-weight: 600;
      src: url(/fonts.gstatic.com/s/alegreya/v26/4UaHrEBBsBhlBjvfkSLk96Tp56N1.woff2) format('woff2');
      unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
    }

    /* latin */
    @font-face {
      font-family: 'Alegreya';
      font-style: italic;
      font-weight: 600;
      src: url(/fonts.gstatic.com/s/alegreya/v26/4UaHrEBBsBhlBjvfkSLk96rp5w.woff2) format('woff2');
      unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
    }

    /* cyrillic-ext */
    @font-face {
      font-family: 'Alegreya';
      font-style: italic;
      font-weight: 700;
      src: url(/fonts.gstatic.com/s/alegreya/v26/4UaHrEBBsBhlBjvfkSLk96fp56N1.woff2) format('woff2');
      unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
    }

    /* cyrillic */
    @font-face {
      font-family: 'Alegreya';
      font-style: italic;
      font-weight: 700;
      src: url(/fonts.gstatic.com/s/alegreya/v26/4UaHrEBBsBhlBjvfkSLk967p56N1.woff2) format('woff2');
      unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
    }

    /* greek-ext */
    @font-face {
      font-family: 'Alegreya';
      font-style: italic;
      font-weight: 700;
      src: url(/fonts.gstatic.com/s/alegreya/v26/4UaHrEBBsBhlBjvfkSLk96bp56N1.woff2) format('woff2');
      unicode-range: U+1F00-1FFF;
    }

    /* greek */
    @font-face {
      font-family: 'Alegreya';
      font-style: italic;
      font-weight: 700;
      src: url(/fonts.gstatic.com/s/alegreya/v26/4UaHrEBBsBhlBjvfkSLk96np56N1.woff2) format('woff2');
      unicode-range: U+0370-03FF;
    }

    /* vietnamese */
    @font-face {
      font-family: 'Alegreya';
      font-style: italic;
      font-weight: 700;
      src: url(/fonts.gstatic.com/s/alegreya/v26/4UaHrEBBsBhlBjvfkSLk96Xp56N1.woff2) format('woff2');
      unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
    }

    /* latin-ext */
    @font-face {
      font-family: 'Alegreya';
      font-style: italic;
      font-weight: 700;
      src: url(/fonts.gstatic.com/s/alegreya/v26/4UaHrEBBsBhlBjvfkSLk96Tp56N1.woff2) format('woff2');
      unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
    }

    /* latin */
    @font-face {
      font-family: 'Alegreya';
      font-style: italic;
      font-weight: 700;
      src: url(/fonts.gstatic.com/s/alegreya/v26/4UaHrEBBsBhlBjvfkSLk96rp5w.woff2) format('woff2');
      unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
    }

    /* cyrillic-ext */
    @font-face {
      font-family: 'Alegreya';
      font-style: normal;
      font-weight: 400;
      src: url(/fonts.gstatic.com/s/alegreya/v26/4UaBrEBBsBhlBjvfkSLsx6jx4w.woff2) format('woff2');
      unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
    }

    /* cyrillic */
    @font-face {
      font-family: 'Alegreya';
      font-style: normal;
      font-weight: 400;
      src: url(/fonts.gstatic.com/s/alegreya/v26/4UaBrEBBsBhlBjvfkSLlx6jx4w.woff2) format('woff2');
      unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
    }

    /* greek-ext */
    @font-face {
      font-family: 'Alegreya';
      font-style: normal;
      font-weight: 400;
      src: url(/fonts.gstatic.com/s/alegreya/v26/4UaBrEBBsBhlBjvfkSLtx6jx4w.woff2) format('woff2');
      unicode-range: U+1F00-1FFF;
    }

    /* greek */
    @font-face {
      font-family: 'Alegreya';
      font-style: normal;
      font-weight: 400;
      src: url(/fonts.gstatic.com/s/alegreya/v26/4UaBrEBBsBhlBjvfkSLix6jx4w.woff2) format('woff2');
      unicode-range: U+0370-03FF;
    }

    /* vietnamese */
    @font-face {
      font-family: 'Alegreya';
      font-style: normal;
      font-weight: 400;
      src: url(/fonts.gstatic.com/s/alegreya/v26/4UaBrEBBsBhlBjvfkSLux6jx4w.woff2) format('woff2');
      unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
    }

    /* latin-ext */
    @font-face {
      font-family: 'Alegreya';
      font-style: normal;
      font-weight: 400;
      src: url(/fonts.gstatic.com/s/alegreya/v26/4UaBrEBBsBhlBjvfkSLvx6jx4w.woff2) format('woff2');
      unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
    }

    /* latin */
    @font-face {
      font-family: 'Alegreya';
      font-style: normal;
      font-weight: 400;
      src: url(/fonts.gstatic.com/s/alegreya/v26/4UaBrEBBsBhlBjvfkSLhx6g.woff2) format('woff2');
      unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
    }

    /* cyrillic-ext */
    @font-face {
      font-family: 'Alegreya';
      font-style: normal;
      font-weight: 500;
      src: url(/fonts.gstatic.com/s/alegreya/v26/4UaBrEBBsBhlBjvfkSLsx6jx4w.woff2) format('woff2');
      unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
    }

    /* cyrillic */
    @font-face {
      font-family: 'Alegreya';
      font-style: normal;
      font-weight: 500;
      src: url(/fonts.gstatic.com/s/alegreya/v26/4UaBrEBBsBhlBjvfkSLlx6jx4w.woff2) format('woff2');
      unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
    }

    /* greek-ext */
    @font-face {
      font-family: 'Alegreya';
      font-style: normal;
      font-weight: 500;
      src: url(/fonts.gstatic.com/s/alegreya/v26/4UaBrEBBsBhlBjvfkSLtx6jx4w.woff2) format('woff2');
      unicode-range: U+1F00-1FFF;
    }

    /* greek */
    @font-face {
      font-family: 'Alegreya';
      font-style: normal;
      font-weight: 500;
      src: url(/fonts.gstatic.com/s/alegreya/v26/4UaBrEBBsBhlBjvfkSLix6jx4w.woff2) format('woff2');
      unicode-range: U+0370-03FF;
    }

    /* vietnamese */
    @font-face {
      font-family: 'Alegreya';
      font-style: normal;
      font-weight: 500;
      src: url(/fonts.gstatic.com/s/alegreya/v26/4UaBrEBBsBhlBjvfkSLux6jx4w.woff2) format('woff2');
      unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
    }

    /* latin-ext */
    @font-face {
      font-family: 'Alegreya';
      font-style: normal;
      font-weight: 500;
      src: url(/fonts.gstatic.com/s/alegreya/v26/4UaBrEBBsBhlBjvfkSLvx6jx4w.woff2) format('woff2');
      unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
    }

    /* latin */
    @font-face {
      font-family: 'Alegreya';
      font-style: normal;
      font-weight: 500;
      src: url(/fonts.gstatic.com/s/alegreya/v26/4UaBrEBBsBhlBjvfkSLhx6g.woff2) format('woff2');
      unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
    }

    /* cyrillic-ext */
    @font-face {
      font-family: 'Alegreya';
      font-style: normal;
      font-weight: 600;
      src: url(/fonts.gstatic.com/s/alegreya/v26/4UaBrEBBsBhlBjvfkSLsx6jx4w.woff2) format('woff2');
      unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
    }

    /* cyrillic */
    @font-face {
      font-family: 'Alegreya';
      font-style: normal;
      font-weight: 600;
      src: url(/fonts.gstatic.com/s/alegreya/v26/4UaBrEBBsBhlBjvfkSLlx6jx4w.woff2) format('woff2');
      unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
    }

    /* greek-ext */
    @font-face {
      font-family: 'Alegreya';
      font-style: normal;
      font-weight: 600;
      src: url(/fonts.gstatic.com/s/alegreya/v26/4UaBrEBBsBhlBjvfkSLtx6jx4w.woff2) format('woff2');
      unicode-range: U+1F00-1FFF;
    }

    /* greek */
    @font-face {
      font-family: 'Alegreya';
      font-style: normal;
      font-weight: 600;
      src: url(/fonts.gstatic.com/s/alegreya/v26/4UaBrEBBsBhlBjvfkSLix6jx4w.woff2) format('woff2');
      unicode-range: U+0370-03FF;
    }

    /* vietnamese */
    @font-face {
      font-family: 'Alegreya';
      font-style: normal;
      font-weight: 600;
      src: url(/fonts.gstatic.com/s/alegreya/v26/4UaBrEBBsBhlBjvfkSLux6jx4w.woff2) format('woff2');
      unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
    }

    /* latin-ext */
    @font-face {
      font-family: 'Alegreya';
      font-style: normal;
      font-weight: 600;
      src: url(/fonts.gstatic.com/s/alegreya/v26/4UaBrEBBsBhlBjvfkSLvx6jx4w.woff2) format('woff2');
      unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
    }

    /* latin */
    @font-face {
      font-family: 'Alegreya';
      font-style: normal;
      font-weight: 600;
      src: url(/fonts.gstatic.com/s/alegreya/v26/4UaBrEBBsBhlBjvfkSLhx6g.woff2) format('woff2');
      unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
    }

    /* cyrillic-ext */
    @font-face {
      font-family: 'Alegreya';
      font-style: normal;
      font-weight: 700;
      src: url(/fonts.gstatic.com/s/alegreya/v26/4UaBrEBBsBhlBjvfkSLsx6jx4w.woff2) format('woff2');
      unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
    }

    /* cyrillic */
    @font-face {
      font-family: 'Alegreya';
      font-style: normal;
      font-weight: 700;
      src: url(/fonts.gstatic.com/s/alegreya/v26/4UaBrEBBsBhlBjvfkSLlx6jx4w.woff2) format('woff2');
      unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
    }

    /* greek-ext */
    @font-face {
      font-family: 'Alegreya';
      font-style: normal;
      font-weight: 700;
      src: url(/fonts.gstatic.com/s/alegreya/v26/4UaBrEBBsBhlBjvfkSLtx6jx4w.woff2) format('woff2');
      unicode-range: U+1F00-1FFF;
    }

    /* greek */
    @font-face {
      font-family: 'Alegreya';
      font-style: normal;
      font-weight: 700;
      src: url(/fonts.gstatic.com/s/alegreya/v26/4UaBrEBBsBhlBjvfkSLix6jx4w.woff2) format('woff2');
      unicode-range: U+0370-03FF;
    }

    /* vietnamese */
    @font-face {
      font-family: 'Alegreya';
      font-style: normal;
      font-weight: 700;
      src: url(/fonts.gstatic.com/s/alegreya/v26/4UaBrEBBsBhlBjvfkSLux6jx4w.woff2) format('woff2');
      unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
    }

    /* latin-ext */
    @font-face {
      font-family: 'Alegreya';
      font-style: normal;
      font-weight: 700;
      src: url(/fonts.gstatic.com/s/alegreya/v26/4UaBrEBBsBhlBjvfkSLvx6jx4w.woff2) format('woff2');
      unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
    }

    /* latin */
    @font-face {
      font-family: 'Alegreya';
      font-style: normal;
      font-weight: 700;
      src: url(/fonts.gstatic.com/s/alegreya/v26/4UaBrEBBsBhlBjvfkSLhx6g.woff2) format('woff2');
      unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
    }

    /* cyrillic-ext */
    @font-face {
      font-family: 'Montserrat';
      font-style: italic;
      font-weight: 200;
      src: url(/fonts.gstatic.com/s/montserrat/v23/JTUQjIg1_i6t8kCHKm459WxRxC7mw9c.woff2) format('woff2');
      unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
    }

    /* cyrillic */
    @font-face {
      font-family: 'Montserrat';
      font-style: italic;
      font-weight: 200;
      src: url(/fonts.gstatic.com/s/montserrat/v23/JTUQjIg1_i6t8kCHKm459WxRzS7mw9c.woff2) format('woff2');
      unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
    }

    /* vietnamese */
    @font-face {
      font-family: 'Montserrat';
      font-style: italic;
      font-weight: 200;
      src: url(/fonts.gstatic.com/s/montserrat/v23/JTUQjIg1_i6t8kCHKm459WxRxi7mw9c.woff2) format('woff2');
      unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
    }

    /* latin-ext */
    @font-face {
      font-family: 'Montserrat';
      font-style: italic;
      font-weight: 200;
      src: url(/fonts.gstatic.com/s/montserrat/v23/JTUQjIg1_i6t8kCHKm459WxRxy7mw9c.woff2) format('woff2');
      unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
    }

    /* latin */
    @font-face {
      font-family: 'Montserrat';
      font-style: italic;
      font-weight: 200;
      src: url(/fonts.gstatic.com/s/montserrat/v23/JTUQjIg1_i6t8kCHKm459WxRyS7m.woff2) format('woff2');
      unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
    }

    /* cyrillic-ext */
    @font-face {
      font-family: 'Montserrat';
      font-style: italic;
      font-weight: 300;
      src: url(/fonts.gstatic.com/s/montserrat/v23/JTUQjIg1_i6t8kCHKm459WxRxC7mw9c.woff2) format('woff2');
      unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
    }

    /* cyrillic */
    @font-face {
      font-family: 'Montserrat';
      font-style: italic;
      font-weight: 300;
      src: url(/fonts.gstatic.com/s/montserrat/v23/JTUQjIg1_i6t8kCHKm459WxRzS7mw9c.woff2) format('woff2');
      unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
    }

    /* vietnamese */
    @font-face {
      font-family: 'Montserrat';
      font-style: italic;
      font-weight: 300;
      src: url(/fonts.gstatic.com/s/montserrat/v23/JTUQjIg1_i6t8kCHKm459WxRxi7mw9c.woff2) format('woff2');
      unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
    }

    /* latin-ext */
    @font-face {
      font-family: 'Montserrat';
      font-style: italic;
      font-weight: 300;
      src: url(/fonts.gstatic.com/s/montserrat/v23/JTUQjIg1_i6t8kCHKm459WxRxy7mw9c.woff2) format('woff2');
      unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
    }

    /* latin */
    @font-face {
      font-family: 'Montserrat';
      font-style: italic;
      font-weight: 300;
      src: url(/fonts.gstatic.com/s/montserrat/v23/JTUQjIg1_i6t8kCHKm459WxRyS7m.woff2) format('woff2');
      unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
    }

    /* cyrillic-ext */
    @font-face {
      font-family: 'Montserrat';
      font-style: italic;
      font-weight: 400;
      src: url(/fonts.gstatic.com/s/montserrat/v23/JTUQjIg1_i6t8kCHKm459WxRxC7mw9c.woff2) format('woff2');
      unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
    }

    /* cyrillic */
    @font-face {
      font-family: 'Montserrat';
      font-style: italic;
      font-weight: 400;
      src: url(/fonts.gstatic.com/s/montserrat/v23/JTUQjIg1_i6t8kCHKm459WxRzS7mw9c.woff2) format('woff2');
      unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
    }

    /* vietnamese */
    @font-face {
      font-family: 'Montserrat';
      font-style: italic;
      font-weight: 400;
      src: url(/fonts.gstatic.com/s/montserrat/v23/JTUQjIg1_i6t8kCHKm459WxRxi7mw9c.woff2) format('woff2');
      unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
    }

    /* latin-ext */
    @font-face {
      font-family: 'Montserrat';
      font-style: italic;
      font-weight: 400;
      src: url(/fonts.gstatic.com/s/montserrat/v23/JTUQjIg1_i6t8kCHKm459WxRxy7mw9c.woff2) format('woff2');
      unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
    }

    /* latin */
    @font-face {
      font-family: 'Montserrat';
      font-style: italic;
      font-weight: 400;
      src: url(/fonts.gstatic.com/s/montserrat/v23/JTUQjIg1_i6t8kCHKm459WxRyS7m.woff2) format('woff2');
      unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
    }

    /* cyrillic-ext */
    @font-face {
      font-family: 'Montserrat';
      font-style: italic;
      font-weight: 500;
      src: url(/fonts.gstatic.com/s/montserrat/v23/JTUQjIg1_i6t8kCHKm459WxRxC7mw9c.woff2) format('woff2');
      unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
    }

    /* cyrillic */
    @font-face {
      font-family: 'Montserrat';
      font-style: italic;
      font-weight: 500;
      src: url(/fonts.gstatic.com/s/montserrat/v23/JTUQjIg1_i6t8kCHKm459WxRzS7mw9c.woff2) format('woff2');
      unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
    }

    /* vietnamese */
    @font-face {
      font-family: 'Montserrat';
      font-style: italic;
      font-weight: 500;
      src: url(/fonts.gstatic.com/s/montserrat/v23/JTUQjIg1_i6t8kCHKm459WxRxi7mw9c.woff2) format('woff2');
      unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
    }

    /* latin-ext */
    @font-face {
      font-family: 'Montserrat';
      font-style: italic;
      font-weight: 500;
      src: url(/fonts.gstatic.com/s/montserrat/v23/JTUQjIg1_i6t8kCHKm459WxRxy7mw9c.woff2) format('woff2');
      unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
    }

    /* latin */
    @font-face {
      font-family: 'Montserrat';
      font-style: italic;
      font-weight: 500;
      src: url(/fonts.gstatic.com/s/montserrat/v23/JTUQjIg1_i6t8kCHKm459WxRyS7m.woff2) format('woff2');
      unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
    }

    /* cyrillic-ext */
    @font-face {
      font-family: 'Montserrat';
      font-style: italic;
      font-weight: 600;
      src: url(/fonts.gstatic.com/s/montserrat/v23/JTUQjIg1_i6t8kCHKm459WxRxC7mw9c.woff2) format('woff2');
      unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
    }

    /* cyrillic */
    @font-face {
      font-family: 'Montserrat';
      font-style: italic;
      font-weight: 600;
      src: url(/fonts.gstatic.com/s/montserrat/v23/JTUQjIg1_i6t8kCHKm459WxRzS7mw9c.woff2) format('woff2');
      unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
    }

    /* vietnamese */
    @font-face {
      font-family: 'Montserrat';
      font-style: italic;
      font-weight: 600;
      src: url(/fonts.gstatic.com/s/montserrat/v23/JTUQjIg1_i6t8kCHKm459WxRxi7mw9c.woff2) format('woff2');
      unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
    }

    /* latin-ext */
    @font-face {
      font-family: 'Montserrat';
      font-style: italic;
      font-weight: 600;
      src: url(/fonts.gstatic.com/s/montserrat/v23/JTUQjIg1_i6t8kCHKm459WxRxy7mw9c.woff2) format('woff2');
      unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
    }

    /* latin */
    @font-face {
      font-family: 'Montserrat';
      font-style: italic;
      font-weight: 600;
      src: url(/fonts.gstatic.com/s/montserrat/v23/JTUQjIg1_i6t8kCHKm459WxRyS7m.woff2) format('woff2');
      unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
    }

    /* cyrillic-ext */
    @font-face {
      font-family: 'Montserrat';
      font-style: italic;
      font-weight: 700;
      src: url(/fonts.gstatic.com/s/montserrat/v23/JTUQjIg1_i6t8kCHKm459WxRxC7mw9c.woff2) format('woff2');
      unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
    }

    /* cyrillic */
    @font-face {
      font-family: 'Montserrat';
      font-style: italic;
      font-weight: 700;
      src: url(/fonts.gstatic.com/s/montserrat/v23/JTUQjIg1_i6t8kCHKm459WxRzS7mw9c.woff2) format('woff2');
      unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
    }

    /* vietnamese */
    @font-face {
      font-family: 'Montserrat';
      font-style: italic;
      font-weight: 700;
      src: url(/fonts.gstatic.com/s/montserrat/v23/JTUQjIg1_i6t8kCHKm459WxRxi7mw9c.woff2) format('woff2');
      unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
    }

    /* latin-ext */
    @font-face {
      font-family: 'Montserrat';
      font-style: italic;
      font-weight: 700;
      src: url(/fonts.gstatic.com/s/montserrat/v23/JTUQjIg1_i6t8kCHKm459WxRxy7mw9c.woff2) format('woff2');
      unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
    }

    /* latin */
    @font-face {
      font-family: 'Montserrat';
      font-style: italic;
      font-weight: 700;
      src: url(/fonts.gstatic.com/s/montserrat/v23/JTUQjIg1_i6t8kCHKm459WxRyS7m.woff2) format('woff2');
      unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
    }

    /* cyrillic-ext */
    @font-face {
      font-family: 'Montserrat';
      font-style: normal;
      font-weight: 200;
      src: url(/fonts.gstatic.com/s/montserrat/v23/JTUSjIg1_i6t8kCHKm459WRhyzbi.woff2) format('woff2');
      unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
    }

    /* cyrillic */
    @font-face {
      font-family: 'Montserrat';
      font-style: normal;
      font-weight: 200;
      src: url(/fonts.gstatic.com/s/montserrat/v23/JTUSjIg1_i6t8kCHKm459W1hyzbi.woff2) format('woff2');
      unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
    }

    /* vietnamese */
    @font-face {
      font-family: 'Montserrat';
      font-style: normal;
      font-weight: 200;
      src: url(/fonts.gstatic.com/s/montserrat/v23/JTUSjIg1_i6t8kCHKm459WZhyzbi.woff2) format('woff2');
      unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
    }

    /* latin-ext */
    @font-face {
      font-family: 'Montserrat';
      font-style: normal;
      font-weight: 200;
      src: url(/fonts.gstatic.com/s/montserrat/v23/JTUSjIg1_i6t8kCHKm459Wdhyzbi.woff2) format('woff2');
      unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
    }

    /* latin */
    @font-face {
      font-family: 'Montserrat';
      font-style: normal;
      font-weight: 200;
      src: url(/fonts.gstatic.com/s/montserrat/v23/JTUSjIg1_i6t8kCHKm459Wlhyw.woff2) format('woff2');
      unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
    }

    /* cyrillic-ext */
    @font-face {
      font-family: 'Montserrat';
      font-style: normal;
      font-weight: 300;
      src: url(/fonts.gstatic.com/s/montserrat/v23/JTUSjIg1_i6t8kCHKm459WRhyzbi.woff2) format('woff2');
      unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
    }

    /* cyrillic */
    @font-face {
      font-family: 'Montserrat';
      font-style: normal;
      font-weight: 300;
      src: url(/fonts.gstatic.com/s/montserrat/v23/JTUSjIg1_i6t8kCHKm459W1hyzbi.woff2) format('woff2');
      unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
    }

    /* vietnamese */
    @font-face {
      font-family: 'Montserrat';
      font-style: normal;
      font-weight: 300;
      src: url(/fonts.gstatic.com/s/montserrat/v23/JTUSjIg1_i6t8kCHKm459WZhyzbi.woff2) format('woff2');
      unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
    }

    /* latin-ext */
    @font-face {
      font-family: 'Montserrat';
      font-style: normal;
      font-weight: 300;
      src: url(/fonts.gstatic.com/s/montserrat/v23/JTUSjIg1_i6t8kCHKm459Wdhyzbi.woff2) format('woff2');
      unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
    }

    /* latin */
    @font-face {
      font-family: 'Montserrat';
      font-style: normal;
      font-weight: 300;
      src: url(/fonts.gstatic.com/s/montserrat/v23/JTUSjIg1_i6t8kCHKm459Wlhyw.woff2) format('woff2');
      unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
    }

    /* cyrillic-ext */
    @font-face {
      font-family: 'Montserrat';
      font-style: normal;
      font-weight: 400;
      src: url(/fonts.gstatic.com/s/montserrat/v23/JTUSjIg1_i6t8kCHKm459WRhyzbi.woff2) format('woff2');
      unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
    }

    /* cyrillic */
    @font-face {
      font-family: 'Montserrat';
      font-style: normal;
      font-weight: 400;
      src: url(/fonts.gstatic.com/s/montserrat/v23/JTUSjIg1_i6t8kCHKm459W1hyzbi.woff2) format('woff2');
      unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
    }

    /* vietnamese */
    @font-face {
      font-family: 'Montserrat';
      font-style: normal;
      font-weight: 400;
      src: url(/fonts.gstatic.com/s/montserrat/v23/JTUSjIg1_i6t8kCHKm459WZhyzbi.woff2) format('woff2');
      unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
    }

    /* latin-ext */
    @font-face {
      font-family: 'Montserrat';
      font-style: normal;
      font-weight: 400;
      src: url(/fonts.gstatic.com/s/montserrat/v23/JTUSjIg1_i6t8kCHKm459Wdhyzbi.woff2) format('woff2');
      unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
    }

    /* latin */
    @font-face {
      font-family: 'Montserrat';
      font-style: normal;
      font-weight: 400;
      src: url(/fonts.gstatic.com/s/montserrat/v23/JTUSjIg1_i6t8kCHKm459Wlhyw.woff2) format('woff2');
      unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
    }

    /* cyrillic-ext */
    @font-face {
      font-family: 'Montserrat';
      font-style: normal;
      font-weight: 500;
      src: url(/fonts.gstatic.com/s/montserrat/v23/JTUSjIg1_i6t8kCHKm459WRhyzbi.woff2) format('woff2');
      unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
    }

    /* cyrillic */
    @font-face {
      font-family: 'Montserrat';
      font-style: normal;
      font-weight: 500;
      src: url(/fonts.gstatic.com/s/montserrat/v23/JTUSjIg1_i6t8kCHKm459W1hyzbi.woff2) format('woff2');
      unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
    }

    /* vietnamese */
    @font-face {
      font-family: 'Montserrat';
      font-style: normal;
      font-weight: 500;
      src: url(/fonts.gstatic.com/s/montserrat/v23/JTUSjIg1_i6t8kCHKm459WZhyzbi.woff2) format('woff2');
      unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
    }

    /* latin-ext */
    @font-face {
      font-family: 'Montserrat';
      font-style: normal;
      font-weight: 500;
      src: url(/fonts.gstatic.com/s/montserrat/v23/JTUSjIg1_i6t8kCHKm459Wdhyzbi.woff2) format('woff2');
      unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
    }

    /* latin */
    @font-face {
      font-family: 'Montserrat';
      font-style: normal;
      font-weight: 500;
      src: url(/fonts.gstatic.com/s/montserrat/v23/JTUSjIg1_i6t8kCHKm459Wlhyw.woff2) format('woff2');
      unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
    }

    /* cyrillic-ext */
    @font-face {
      font-family: 'Montserrat';
      font-style: normal;
      font-weight: 600;
      src: url(/fonts.gstatic.com/s/montserrat/v23/JTUSjIg1_i6t8kCHKm459WRhyzbi.woff2) format('woff2');
      unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
    }

    /* cyrillic */
    @font-face {
      font-family: 'Montserrat';
      font-style: normal;
      font-weight: 600;
      src: url(/fonts.gstatic.com/s/montserrat/v23/JTUSjIg1_i6t8kCHKm459W1hyzbi.woff2) format('woff2');
      unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
    }

    /* vietnamese */
    @font-face {
      font-family: 'Montserrat';
      font-style: normal;
      font-weight: 600;
      src: url(/fonts.gstatic.com/s/montserrat/v23/JTUSjIg1_i6t8kCHKm459WZhyzbi.woff2) format('woff2');
      unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
    }

    /* latin-ext */
    @font-face {
      font-family: 'Montserrat';
      font-style: normal;
      font-weight: 600;
      src: url(/fonts.gstatic.com/s/montserrat/v23/JTUSjIg1_i6t8kCHKm459Wdhyzbi.woff2) format('woff2');
      unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
    }

    /* latin */
    @font-face {
      font-family: 'Montserrat';
      font-style: normal;
      font-weight: 600;
      src: url(/fonts.gstatic.com/s/montserrat/v23/JTUSjIg1_i6t8kCHKm459Wlhyw.woff2) format('woff2');
      unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
    }

    /* cyrillic-ext */
    @font-face {
      font-family: 'Montserrat';
      font-style: normal;
      font-weight: 700;
      src: url(/fonts.gstatic.com/s/montserrat/v23/JTUSjIg1_i6t8kCHKm459WRhyzbi.woff2) format('woff2');
      unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
    }

    /* cyrillic */
    @font-face {
      font-family: 'Montserrat';
      font-style: normal;
      font-weight: 700;
      src: url(/fonts.gstatic.com/s/montserrat/v23/JTUSjIg1_i6t8kCHKm459W1hyzbi.woff2) format('woff2');
      unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
    }

    /* vietnamese */
    @font-face {
      font-family: 'Montserrat';
      font-style: normal;
      font-weight: 700;
      src: url(/fonts.gstatic.com/s/montserrat/v23/JTUSjIg1_i6t8kCHKm459WZhyzbi.woff2) format('woff2');
      unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
    }

    /* latin-ext */
    @font-face {
      font-family: 'Montserrat';
      font-style: normal;
      font-weight: 700;
      src: url(/fonts.gstatic.com/s/montserrat/v23/JTUSjIg1_i6t8kCHKm459Wdhyzbi.woff2) format('woff2');
      unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
    }

    /* latin */
    @font-face {
      font-family: 'Montserrat';
      font-style: normal;
      font-weight: 700;
      src: url(/fonts.gstatic.com/s/montserrat/v23/JTUSjIg1_i6t8kCHKm459Wlhyw.woff2) format('woff2');
      unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
    }

    /* cyrillic-ext */
    @font-face {
      font-family: 'Raleway';
      font-style: italic;
      font-weight: 200;
      src: url(/fonts.gstatic.com/s/raleway/v26/1Ptsg8zYS_SKggPNyCg4QIFqPfE.woff2) format('woff2');
      unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
    }

    /* cyrillic */
    @font-face {
      font-family: 'Raleway';
      font-style: italic;
      font-weight: 200;
      src: url(/fonts.gstatic.com/s/raleway/v26/1Ptsg8zYS_SKggPNyCg4SYFqPfE.woff2) format('woff2');
      unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
    }

    /* vietnamese */
    @font-face {
      font-family: 'Raleway';
      font-style: italic;
      font-weight: 200;
      src: url(/fonts.gstatic.com/s/raleway/v26/1Ptsg8zYS_SKggPNyCg4QoFqPfE.woff2) format('woff2');
      unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
    }

    /* latin-ext */
    @font-face {
      font-family: 'Raleway';
      font-style: italic;
      font-weight: 200;
      src: url(/fonts.gstatic.com/s/raleway/v26/1Ptsg8zYS_SKggPNyCg4Q4FqPfE.woff2) format('woff2');
      unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
    }

    /* latin */
    @font-face {
      font-family: 'Raleway';
      font-style: italic;
      font-weight: 200;
      src: url(/fonts.gstatic.com/s/raleway/v26/1Ptsg8zYS_SKggPNyCg4TYFq.woff2) format('woff2');
      unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
    }

    /* cyrillic-ext */
    @font-face {
      font-family: 'Raleway';
      font-style: italic;
      font-weight: 300;
      src: url(/fonts.gstatic.com/s/raleway/v26/1Ptsg8zYS_SKggPNyCg4QIFqPfE.woff2) format('woff2');
      unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
    }

    /* cyrillic */
    @font-face {
      font-family: 'Raleway';
      font-style: italic;
      font-weight: 300;
      src: url(/fonts.gstatic.com/s/raleway/v26/1Ptsg8zYS_SKggPNyCg4SYFqPfE.woff2) format('woff2');
      unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
    }

    /* vietnamese */
    @font-face {
      font-family: 'Raleway';
      font-style: italic;
      font-weight: 300;
      src: url(/fonts.gstatic.com/s/raleway/v26/1Ptsg8zYS_SKggPNyCg4QoFqPfE.woff2) format('woff2');
      unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
    }

    /* latin-ext */
    @font-face {
      font-family: 'Raleway';
      font-style: italic;
      font-weight: 300;
      src: url(/fonts.gstatic.com/s/raleway/v26/1Ptsg8zYS_SKggPNyCg4Q4FqPfE.woff2) format('woff2');
      unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
    }

    /* latin */
    @font-face {
      font-family: 'Raleway';
      font-style: italic;
      font-weight: 300;
      src: url(/fonts.gstatic.com/s/raleway/v26/1Ptsg8zYS_SKggPNyCg4TYFq.woff2) format('woff2');
      unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
    }

    /* cyrillic-ext */
    @font-face {
      font-family: 'Raleway';
      font-style: italic;
      font-weight: 400;
      src: url(/fonts.gstatic.com/s/raleway/v26/1Ptsg8zYS_SKggPNyCg4QIFqPfE.woff2) format('woff2');
      unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
    }

    /* cyrillic */
    @font-face {
      font-family: 'Raleway';
      font-style: italic;
      font-weight: 400;
      src: url(/fonts.gstatic.com/s/raleway/v26/1Ptsg8zYS_SKggPNyCg4SYFqPfE.woff2) format('woff2');
      unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
    }

    /* vietnamese */
    @font-face {
      font-family: 'Raleway';
      font-style: italic;
      font-weight: 400;
      src: url(/fonts.gstatic.com/s/raleway/v26/1Ptsg8zYS_SKggPNyCg4QoFqPfE.woff2) format('woff2');
      unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
    }

    /* latin-ext */
    @font-face {
      font-family: 'Raleway';
      font-style: italic;
      font-weight: 400;
      src: url(/fonts.gstatic.com/s/raleway/v26/1Ptsg8zYS_SKggPNyCg4Q4FqPfE.woff2) format('woff2');
      unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
    }

    /* latin */
    @font-face {
      font-family: 'Raleway';
      font-style: italic;
      font-weight: 400;
      src: url(/fonts.gstatic.com/s/raleway/v26/1Ptsg8zYS_SKggPNyCg4TYFq.woff2) format('woff2');
      unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
    }

    /* cyrillic-ext */
    @font-face {
      font-family: 'Raleway';
      font-style: italic;
      font-weight: 500;
      src: url(/fonts.gstatic.com/s/raleway/v26/1Ptsg8zYS_SKggPNyCg4QIFqPfE.woff2) format('woff2');
      unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
    }

    /* cyrillic */
    @font-face {
      font-family: 'Raleway';
      font-style: italic;
      font-weight: 500;
      src: url(/fonts.gstatic.com/s/raleway/v26/1Ptsg8zYS_SKggPNyCg4SYFqPfE.woff2) format('woff2');
      unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
    }

    /* vietnamese */
    @font-face {
      font-family: 'Raleway';
      font-style: italic;
      font-weight: 500;
      src: url(/fonts.gstatic.com/s/raleway/v26/1Ptsg8zYS_SKggPNyCg4QoFqPfE.woff2) format('woff2');
      unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
    }

    /* latin-ext */
    @font-face {
      font-family: 'Raleway';
      font-style: italic;
      font-weight: 500;
      src: url(/fonts.gstatic.com/s/raleway/v26/1Ptsg8zYS_SKggPNyCg4Q4FqPfE.woff2) format('woff2');
      unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
    }

    /* latin */
    @font-face {
      font-family: 'Raleway';
      font-style: italic;
      font-weight: 500;
      src: url(/fonts.gstatic.com/s/raleway/v26/1Ptsg8zYS_SKggPNyCg4TYFq.woff2) format('woff2');
      unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
    }

    /* cyrillic-ext */
    @font-face {
      font-family: 'Raleway';
      font-style: italic;
      font-weight: 600;
      src: url(/fonts.gstatic.com/s/raleway/v26/1Ptsg8zYS_SKggPNyCg4QIFqPfE.woff2) format('woff2');
      unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
    }

    /* cyrillic */
    @font-face {
      font-family: 'Raleway';
      font-style: italic;
      font-weight: 600;
      src: url(/fonts.gstatic.com/s/raleway/v26/1Ptsg8zYS_SKggPNyCg4SYFqPfE.woff2) format('woff2');
      unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
    }

    /* vietnamese */
    @font-face {
      font-family: 'Raleway';
      font-style: italic;
      font-weight: 600;
      src: url(/fonts.gstatic.com/s/raleway/v26/1Ptsg8zYS_SKggPNyCg4QoFqPfE.woff2) format('woff2');
      unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
    }

    /* latin-ext */
    @font-face {
      font-family: 'Raleway';
      font-style: italic;
      font-weight: 600;
      src: url(/fonts.gstatic.com/s/raleway/v26/1Ptsg8zYS_SKggPNyCg4Q4FqPfE.woff2) format('woff2');
      unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
    }

    /* latin */
    @font-face {
      font-family: 'Raleway';
      font-style: italic;
      font-weight: 600;
      src: url(/fonts.gstatic.com/s/raleway/v26/1Ptsg8zYS_SKggPNyCg4TYFq.woff2) format('woff2');
      unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
    }

    /* cyrillic-ext */
    @font-face {
      font-family: 'Raleway';
      font-style: italic;
      font-weight: 700;
      src: url(/fonts.gstatic.com/s/raleway/v26/1Ptsg8zYS_SKggPNyCg4QIFqPfE.woff2) format('woff2');
      unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
    }

    /* cyrillic */
    @font-face {
      font-family: 'Raleway';
      font-style: italic;
      font-weight: 700;
      src: url(/fonts.gstatic.com/s/raleway/v26/1Ptsg8zYS_SKggPNyCg4SYFqPfE.woff2) format('woff2');
      unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
    }

    /* vietnamese */
    @font-face {
      font-family: 'Raleway';
      font-style: italic;
      font-weight: 700;
      src: url(/fonts.gstatic.com/s/raleway/v26/1Ptsg8zYS_SKggPNyCg4QoFqPfE.woff2) format('woff2');
      unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
    }

    /* latin-ext */
    @font-face {
      font-family: 'Raleway';
      font-style: italic;
      font-weight: 700;
      src: url(/fonts.gstatic.com/s/raleway/v26/1Ptsg8zYS_SKggPNyCg4Q4FqPfE.woff2) format('woff2');
      unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
    }

    /* latin */
    @font-face {
      font-family: 'Raleway';
      font-style: italic;
      font-weight: 700;
      src: url(/fonts.gstatic.com/s/raleway/v26/1Ptsg8zYS_SKggPNyCg4TYFq.woff2) format('woff2');
      unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
    }

    /* cyrillic-ext */
    @font-face {
      font-family: 'Raleway';
      font-style: normal;
      font-weight: 200;
      src: url(/fonts.gstatic.com/s/raleway/v26/1Ptug8zYS_SKggPNyCAIT5lu.woff2) format('woff2');
      unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
    }

    /* cyrillic */
    @font-face {
      font-family: 'Raleway';
      font-style: normal;
      font-weight: 200;
      src: url(/fonts.gstatic.com/s/raleway/v26/1Ptug8zYS_SKggPNyCkIT5lu.woff2) format('woff2');
      unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
    }

    /* vietnamese */
    @font-face {
      font-family: 'Raleway';
      font-style: normal;
      font-weight: 200;
      src: url(/fonts.gstatic.com/s/raleway/v26/1Ptug8zYS_SKggPNyCIIT5lu.woff2) format('woff2');
      unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
    }

    /* latin-ext */
    @font-face {
      font-family: 'Raleway';
      font-style: normal;
      font-weight: 200;
      src: url(/fonts.gstatic.com/s/raleway/v26/1Ptug8zYS_SKggPNyCMIT5lu.woff2) format('woff2');
      unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
    }

    /* latin */
    @font-face {
      font-family: 'Raleway';
      font-style: normal;
      font-weight: 200;
      src: url(/fonts.gstatic.com/s/raleway/v26/1Ptug8zYS_SKggPNyC0ITw.woff2) format('woff2');
      unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
    }

    /* cyrillic-ext */
    @font-face {
      font-family: 'Raleway';
      font-style: normal;
      font-weight: 300;
      src: url(/fonts.gstatic.com/s/raleway/v26/1Ptug8zYS_SKggPNyCAIT5lu.woff2) format('woff2');
      unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
    }

    /* cyrillic */
    @font-face {
      font-family: 'Raleway';
      font-style: normal;
      font-weight: 300;
      src: url(/fonts.gstatic.com/s/raleway/v26/1Ptug8zYS_SKggPNyCkIT5lu.woff2) format('woff2');
      unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
    }

    /* vietnamese */
    @font-face {
      font-family: 'Raleway';
      font-style: normal;
      font-weight: 300;
      src: url(/fonts.gstatic.com/s/raleway/v26/1Ptug8zYS_SKggPNyCIIT5lu.woff2) format('woff2');
      unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
    }

    /* latin-ext */
    @font-face {
      font-family: 'Raleway';
      font-style: normal;
      font-weight: 300;
      src: url(/fonts.gstatic.com/s/raleway/v26/1Ptug8zYS_SKggPNyCMIT5lu.woff2) format('woff2');
      unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
    }

    /* latin */
    @font-face {
      font-family: 'Raleway';
      font-style: normal;
      font-weight: 300;
      src: url(/fonts.gstatic.com/s/raleway/v26/1Ptug8zYS_SKggPNyC0ITw.woff2) format('woff2');
      unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
    }

    /* cyrillic-ext */
    @font-face {
      font-family: 'Raleway';
      font-style: normal;
      font-weight: 400;
      src: url(/fonts.gstatic.com/s/raleway/v26/1Ptug8zYS_SKggPNyCAIT5lu.woff2) format('woff2');
      unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
    }

    /* cyrillic */
    @font-face {
      font-family: 'Raleway';
      font-style: normal;
      font-weight: 400;
      src: url(/fonts.gstatic.com/s/raleway/v26/1Ptug8zYS_SKggPNyCkIT5lu.woff2) format('woff2');
      unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
    }

    /* vietnamese */
    @font-face {
      font-family: 'Raleway';
      font-style: normal;
      font-weight: 400;
      src: url(/fonts.gstatic.com/s/raleway/v26/1Ptug8zYS_SKggPNyCIIT5lu.woff2) format('woff2');
      unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
    }

    /* latin-ext */
    @font-face {
      font-family: 'Raleway';
      font-style: normal;
      font-weight: 400;
      src: url(/fonts.gstatic.com/s/raleway/v26/1Ptug8zYS_SKggPNyCMIT5lu.woff2) format('woff2');
      unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
    }

    /* latin */
    @font-face {
      font-family: 'Raleway';
      font-style: normal;
      font-weight: 400;
      src: url(/fonts.gstatic.com/s/raleway/v26/1Ptug8zYS_SKggPNyC0ITw.woff2) format('woff2');
      unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
    }

    /* cyrillic-ext */
    @font-face {
      font-family: 'Raleway';
      font-style: normal;
      font-weight: 500;
      src: url(/fonts.gstatic.com/s/raleway/v26/1Ptug8zYS_SKggPNyCAIT5lu.woff2) format('woff2');
      unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
    }

    /* cyrillic */
    @font-face {
      font-family: 'Raleway';
      font-style: normal;
      font-weight: 500;
      src: url(/fonts.gstatic.com/s/raleway/v26/1Ptug8zYS_SKggPNyCkIT5lu.woff2) format('woff2');
      unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
    }

    /* vietnamese */
    @font-face {
      font-family: 'Raleway';
      font-style: normal;
      font-weight: 500;
      src: url(/fonts.gstatic.com/s/raleway/v26/1Ptug8zYS_SKggPNyCIIT5lu.woff2) format('woff2');
      unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
    }

    /* latin-ext */
    @font-face {
      font-family: 'Raleway';
      font-style: normal;
      font-weight: 500;
      src: url(/fonts.gstatic.com/s/raleway/v26/1Ptug8zYS_SKggPNyCMIT5lu.woff2) format('woff2');
      unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
    }

    /* latin */
    @font-face {
      font-family: 'Raleway';
      font-style: normal;
      font-weight: 500;
      src: url(/fonts.gstatic.com/s/raleway/v26/1Ptug8zYS_SKggPNyC0ITw.woff2) format('woff2');
      unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
    }

    /* cyrillic-ext */
    @font-face {
      font-family: 'Raleway';
      font-style: normal;
      font-weight: 600;
      src: url(/fonts.gstatic.com/s/raleway/v26/1Ptug8zYS_SKggPNyCAIT5lu.woff2) format('woff2');
      unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
    }

    /* cyrillic */
    @font-face {
      font-family: 'Raleway';
      font-style: normal;
      font-weight: 600;
      src: url(/fonts.gstatic.com/s/raleway/v26/1Ptug8zYS_SKggPNyCkIT5lu.woff2) format('woff2');
      unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
    }

    /* vietnamese */
    @font-face {
      font-family: 'Raleway';
      font-style: normal;
      font-weight: 600;
      src: url(/fonts.gstatic.com/s/raleway/v26/1Ptug8zYS_SKggPNyCIIT5lu.woff2) format('woff2');
      unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
    }

    /* latin-ext */
    @font-face {
      font-family: 'Raleway';
      font-style: normal;
      font-weight: 600;
      src: url(/fonts.gstatic.com/s/raleway/v26/1Ptug8zYS_SKggPNyCMIT5lu.woff2) format('woff2');
      unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
    }

    /* latin */
    @font-face {
      font-family: 'Raleway';
      font-style: normal;
      font-weight: 600;
      src: url(/fonts.gstatic.com/s/raleway/v26/1Ptug8zYS_SKggPNyC0ITw.woff2) format('woff2');
      unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
    }

    /* cyrillic-ext */
    @font-face {
      font-family: 'Raleway';
      font-style: normal;
      font-weight: 700;
      src: url(/fonts.gstatic.com/s/raleway/v26/1Ptug8zYS_SKggPNyCAIT5lu.woff2) format('woff2');
      unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
    }

    /* cyrillic */
    @font-face {
      font-family: 'Raleway';
      font-style: normal;
      font-weight: 700;
      src: url(/fonts.gstatic.com/s/raleway/v26/1Ptug8zYS_SKggPNyCkIT5lu.woff2) format('woff2');
      unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
    }

    /* vietnamese */
    @font-face {
      font-family: 'Raleway';
      font-style: normal;
      font-weight: 700;
      src: url(/fonts.gstatic.com/s/raleway/v26/1Ptug8zYS_SKggPNyCIIT5lu.woff2) format('woff2');
      unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
    }

    /* latin-ext */
    @font-face {
      font-family: 'Raleway';
      font-style: normal;
      font-weight: 700;
      src: url(/fonts.gstatic.com/s/raleway/v26/1Ptug8zYS_SKggPNyCMIT5lu.woff2) format('woff2');
      unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
    }

    /* latin */
    @font-face {
      font-family: 'Raleway';
      font-style: normal;
      font-weight: 700;
      src: url(/fonts.gstatic.com/s/raleway/v26/1Ptug8zYS_SKggPNyC0ITw.woff2) format('woff2');
      unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
    }

    /* cyrillic-ext */
    @font-face {
      font-family: 'Roboto';
      font-style: italic;
      font-weight: 300;
      src: url(/fonts.gstatic.com/s/roboto/v29/KFOjCnqEu92Fr1Mu51TjASc3CsTKlA.woff2) format('woff2');
      unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
    }

    /* cyrillic */
    @font-face {
      font-family: 'Roboto';
      font-style: italic;
      font-weight: 300;
      src: url(/fonts.gstatic.com/s/roboto/v29/KFOjCnqEu92Fr1Mu51TjASc-CsTKlA.woff2) format('woff2');
      unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
    }

    /* greek-ext */
    @font-face {
      font-family: 'Roboto';
      font-style: italic;
      font-weight: 300;
      src: url(/fonts.gstatic.com/s/roboto/v29/KFOjCnqEu92Fr1Mu51TjASc2CsTKlA.woff2) format('woff2');
      unicode-range: U+1F00-1FFF;
    }

    /* greek */
    @font-face {
      font-family: 'Roboto';
      font-style: italic;
      font-weight: 300;
      src: url(/fonts.gstatic.com/s/roboto/v29/KFOjCnqEu92Fr1Mu51TjASc5CsTKlA.woff2) format('woff2');
      unicode-range: U+0370-03FF;
    }

    /* vietnamese */
    @font-face {
      font-family: 'Roboto';
      font-style: italic;
      font-weight: 300;
      src: url(/fonts.gstatic.com/s/roboto/v29/KFOjCnqEu92Fr1Mu51TjASc1CsTKlA.woff2) format('woff2');
      unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
    }

    /* latin-ext */
    @font-face {
      font-family: 'Roboto';
      font-style: italic;
      font-weight: 300;
      src: url(/fonts.gstatic.com/s/roboto/v29/KFOjCnqEu92Fr1Mu51TjASc0CsTKlA.woff2) format('woff2');
      unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
    }

    /* latin */
    @font-face {
      font-family: 'Roboto';
      font-style: italic;
      font-weight: 300;
      src: url(/fonts.gstatic.com/s/roboto/v29/KFOjCnqEu92Fr1Mu51TjASc6CsQ.woff2) format('woff2');
      unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
    }

    /* cyrillic-ext */
    @font-face {
      font-family: 'Roboto';
      font-style: italic;
      font-weight: 400;
      src: url(/fonts.gstatic.com/s/roboto/v29/KFOkCnqEu92Fr1Mu51xFIzIFKw.woff2) format('woff2');
      unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
    }

    /* cyrillic */
    @font-face {
      font-family: 'Roboto';
      font-style: italic;
      font-weight: 400;
      src: url(/fonts.gstatic.com/s/roboto/v29/KFOkCnqEu92Fr1Mu51xMIzIFKw.woff2) format('woff2');
      unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
    }

    /* greek-ext */
    @font-face {
      font-family: 'Roboto';
      font-style: italic;
      font-weight: 400;
      src: url(/fonts.gstatic.com/s/roboto/v29/KFOkCnqEu92Fr1Mu51xEIzIFKw.woff2) format('woff2');
      unicode-range: U+1F00-1FFF;
    }

    /* greek */
    @font-face {
      font-family: 'Roboto';
      font-style: italic;
      font-weight: 400;
      src: url(/fonts.gstatic.com/s/roboto/v29/KFOkCnqEu92Fr1Mu51xLIzIFKw.woff2) format('woff2');
      unicode-range: U+0370-03FF;
    }

    /* vietnamese */
    @font-face {
      font-family: 'Roboto';
      font-style: italic;
      font-weight: 400;
      src: url(/fonts.gstatic.com/s/roboto/v29/KFOkCnqEu92Fr1Mu51xHIzIFKw.woff2) format('woff2');
      unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
    }

    /* latin-ext */
    @font-face {
      font-family: 'Roboto';
      font-style: italic;
      font-weight: 400;
      src: url(/fonts.gstatic.com/s/roboto/v29/KFOkCnqEu92Fr1Mu51xGIzIFKw.woff2) format('woff2');
      unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
    }

    /* latin */
    @font-face {
      font-family: 'Roboto';
      font-style: italic;
      font-weight: 400;
      src: url(/fonts.gstatic.com/s/roboto/v29/KFOkCnqEu92Fr1Mu51xIIzI.woff2) format('woff2');
      unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
    }

    /* cyrillic-ext */
    @font-face {
      font-family: 'Roboto';
      font-style: italic;
      font-weight: 500;
      src: url(/fonts.gstatic.com/s/roboto/v29/KFOjCnqEu92Fr1Mu51S7ACc3CsTKlA.woff2) format('woff2');
      unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
    }

    /* cyrillic */
    @font-face {
      font-family: 'Roboto';
      font-style: italic;
      font-weight: 500;
      src: url(/fonts.gstatic.com/s/roboto/v29/KFOjCnqEu92Fr1Mu51S7ACc-CsTKlA.woff2) format('woff2');
      unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
    }

    /* greek-ext */
    @font-face {
      font-family: 'Roboto';
      font-style: italic;
      font-weight: 500;
      src: url(/fonts.gstatic.com/s/roboto/v29/KFOjCnqEu92Fr1Mu51S7ACc2CsTKlA.woff2) format('woff2');
      unicode-range: U+1F00-1FFF;
    }

    /* greek */
    @font-face {
      font-family: 'Roboto';
      font-style: italic;
      font-weight: 500;
      src: url(/fonts.gstatic.com/s/roboto/v29/KFOjCnqEu92Fr1Mu51S7ACc5CsTKlA.woff2) format('woff2');
      unicode-range: U+0370-03FF;
    }

    /* vietnamese */
    @font-face {
      font-family: 'Roboto';
      font-style: italic;
      font-weight: 500;
      src: url(/fonts.gstatic.com/s/roboto/v29/KFOjCnqEu92Fr1Mu51S7ACc1CsTKlA.woff2) format('woff2');
      unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
    }

    /* latin-ext */
    @font-face {
      font-family: 'Roboto';
      font-style: italic;
      font-weight: 500;
      src: url(/fonts.gstatic.com/s/roboto/v29/KFOjCnqEu92Fr1Mu51S7ACc0CsTKlA.woff2) format('woff2');
      unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
    }

    /* latin */
    @font-face {
      font-family: 'Roboto';
      font-style: italic;
      font-weight: 500;
      src: url(/fonts.gstatic.com/s/roboto/v29/KFOjCnqEu92Fr1Mu51S7ACc6CsQ.woff2) format('woff2');
      unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
    }

    /* cyrillic-ext */
    @font-face {
      font-family: 'Roboto';
      font-style: italic;
      font-weight: 700;
      src: url(/fonts.gstatic.com/s/roboto/v29/KFOjCnqEu92Fr1Mu51TzBic3CsTKlA.woff2) format('woff2');
      unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
    }

    /* cyrillic */
    @font-face {
      font-family: 'Roboto';
      font-style: italic;
      font-weight: 700;
      src: url(/fonts.gstatic.com/s/roboto/v29/KFOjCnqEu92Fr1Mu51TzBic-CsTKlA.woff2) format('woff2');
      unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
    }

    /* greek-ext */
    @font-face {
      font-family: 'Roboto';
      font-style: italic;
      font-weight: 700;
      src: url(/fonts.gstatic.com/s/roboto/v29/KFOjCnqEu92Fr1Mu51TzBic2CsTKlA.woff2) format('woff2');
      unicode-range: U+1F00-1FFF;
    }

    /* greek */
    @font-face {
      font-family: 'Roboto';
      font-style: italic;
      font-weight: 700;
      src: url(/fonts.gstatic.com/s/roboto/v29/KFOjCnqEu92Fr1Mu51TzBic5CsTKlA.woff2) format('woff2');
      unicode-range: U+0370-03FF;
    }

    /* vietnamese */
    @font-face {
      font-family: 'Roboto';
      font-style: italic;
      font-weight: 700;
      src: url(/fonts.gstatic.com/s/roboto/v29/KFOjCnqEu92Fr1Mu51TzBic1CsTKlA.woff2) format('woff2');
      unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
    }

    /* latin-ext */
    @font-face {
      font-family: 'Roboto';
      font-style: italic;
      font-weight: 700;
      src: url(/fonts.gstatic.com/s/roboto/v29/KFOjCnqEu92Fr1Mu51TzBic0CsTKlA.woff2) format('woff2');
      unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
    }

    /* latin */
    @font-face {
      font-family: 'Roboto';
      font-style: italic;
      font-weight: 700;
      src: url(/fonts.gstatic.com/s/roboto/v29/KFOjCnqEu92Fr1Mu51TzBic6CsQ.woff2) format('woff2');
      unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
    }

    /* cyrillic-ext */
    @font-face {
      font-family: 'Roboto';
      font-style: normal;
      font-weight: 300;
      src: url(/fonts.gstatic.com/s/roboto/v29/KFOlCnqEu92Fr1MmSU5fCRc4EsA.woff2) format('woff2');
      unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
    }

    /* cyrillic */
    @font-face {
      font-family: 'Roboto';
      font-style: normal;
      font-weight: 300;
      src: url(/fonts.gstatic.com/s/roboto/v29/KFOlCnqEu92Fr1MmSU5fABc4EsA.woff2) format('woff2');
      unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
    }

    /* greek-ext */
    @font-face {
      font-family: 'Roboto';
      font-style: normal;
      font-weight: 300;
      src: url(/fonts.gstatic.com/s/roboto/v29/KFOlCnqEu92Fr1MmSU5fCBc4EsA.woff2) format('woff2');
      unicode-range: U+1F00-1FFF;
    }

    /* greek */
    @font-face {
      font-family: 'Roboto';
      font-style: normal;
      font-weight: 300;
      src: url(/fonts.gstatic.com/s/roboto/v29/KFOlCnqEu92Fr1MmSU5fBxc4EsA.woff2) format('woff2');
      unicode-range: U+0370-03FF;
    }

    /* vietnamese */
    @font-face {
      font-family: 'Roboto';
      font-style: normal;
      font-weight: 300;
      src: url(/fonts.gstatic.com/s/roboto/v29/KFOlCnqEu92Fr1MmSU5fCxc4EsA.woff2) format('woff2');
      unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
    }

    /* latin-ext */
    @font-face {
      font-family: 'Roboto';
      font-style: normal;
      font-weight: 300;
      src: url(/fonts.gstatic.com/s/roboto/v29/KFOlCnqEu92Fr1MmSU5fChc4EsA.woff2) format('woff2');
      unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
    }

    /* latin */
    @font-face {
      font-family: 'Roboto';
      font-style: normal;
      font-weight: 300;
      src: url(/fonts.gstatic.com/s/roboto/v29/KFOlCnqEu92Fr1MmSU5fBBc4.woff2) format('woff2');
      unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
    }

    /* cyrillic-ext */
    @font-face {
      font-family: 'Roboto';
      font-style: normal;
      font-weight: 400;
      src: url(/fonts.gstatic.com/s/roboto/v29/KFOmCnqEu92Fr1Mu72xKOzY.woff2) format('woff2');
      unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
    }

    /* cyrillic */
    @font-face {
      font-family: 'Roboto';
      font-style: normal;
      font-weight: 400;
      src: url(/fonts.gstatic.com/s/roboto/v29/KFOmCnqEu92Fr1Mu5mxKOzY.woff2) format('woff2');
      unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
    }

    /* greek-ext */
    @font-face {
      font-family: 'Roboto';
      font-style: normal;
      font-weight: 400;
      src: url(/fonts.gstatic.com/s/roboto/v29/KFOmCnqEu92Fr1Mu7mxKOzY.woff2) format('woff2');
      unicode-range: U+1F00-1FFF;
    }

    /* greek */
    @font-face {
      font-family: 'Roboto';
      font-style: normal;
      font-weight: 400;
      src: url(/fonts.gstatic.com/s/roboto/v29/KFOmCnqEu92Fr1Mu4WxKOzY.woff2) format('woff2');
      unicode-range: U+0370-03FF;
    }

    /* vietnamese */
    @font-face {
      font-family: 'Roboto';
      font-style: normal;
      font-weight: 400;
      src: url(/fonts.gstatic.com/s/roboto/v29/KFOmCnqEu92Fr1Mu7WxKOzY.woff2) format('woff2');
      unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
    }

    /* latin-ext */
    @font-face {
      font-family: 'Roboto';
      font-style: normal;
      font-weight: 400;
      src: url(/fonts.gstatic.com/s/roboto/v29/KFOmCnqEu92Fr1Mu7GxKOzY.woff2) format('woff2');
      unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
    }

    /* latin */
    @font-face {
      font-family: 'Roboto';
      font-style: normal;
      font-weight: 400;
      src: url(/fonts.gstatic.com/s/roboto/v29/KFOmCnqEu92Fr1Mu4mxK.woff2) format('woff2');
      unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
    }

    /* cyrillic-ext */
    @font-face {
      font-family: 'Roboto';
      font-style: normal;
      font-weight: 500;
      src: url(/fonts.gstatic.com/s/roboto/v29/KFOlCnqEu92Fr1MmEU9fCRc4EsA.woff2) format('woff2');
      unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
    }

    /* cyrillic */
    @font-face {
      font-family: 'Roboto';
      font-style: normal;
      font-weight: 500;
      src: url(/fonts.gstatic.com/s/roboto/v29/KFOlCnqEu92Fr1MmEU9fABc4EsA.woff2) format('woff2');
      unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
    }

    /* greek-ext */
    @font-face {
      font-family: 'Roboto';
      font-style: normal;
      font-weight: 500;
      src: url(/fonts.gstatic.com/s/roboto/v29/KFOlCnqEu92Fr1MmEU9fCBc4EsA.woff2) format('woff2');
      unicode-range: U+1F00-1FFF;
    }

    /* greek */
    @font-face {
      font-family: 'Roboto';
      font-style: normal;
      font-weight: 500;
      src: url(/fonts.gstatic.com/s/roboto/v29/KFOlCnqEu92Fr1MmEU9fBxc4EsA.woff2) format('woff2');
      unicode-range: U+0370-03FF;
    }

    /* vietnamese */
    @font-face {
      font-family: 'Roboto';
      font-style: normal;
      font-weight: 500;
      src: url(/fonts.gstatic.com/s/roboto/v29/KFOlCnqEu92Fr1MmEU9fCxc4EsA.woff2) format('woff2');
      unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
    }

    /* latin-ext */
    @font-face {
      font-family: 'Roboto';
      font-style: normal;
      font-weight: 500;
      src: url(/fonts.gstatic.com/s/roboto/v29/KFOlCnqEu92Fr1MmEU9fChc4EsA.woff2) format('woff2');
      unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
    }

    /* latin */
    @font-face {
      font-family: 'Roboto';
      font-style: normal;
      font-weight: 500;
      src: url(/fonts.gstatic.com/s/roboto/v29/KFOlCnqEu92Fr1MmEU9fBBc4.woff2) format('woff2');
      unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
    }

    /* cyrillic-ext */
    @font-face {
      font-family: 'Roboto';
      font-style: normal;
      font-weight: 700;
      src: url(/fonts.gstatic.com/s/roboto/v29/KFOlCnqEu92Fr1MmWUlfCRc4EsA.woff2) format('woff2');
      unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
    }

    /* cyrillic */
    @font-face {
      font-family: 'Roboto';
      font-style: normal;
      font-weight: 700;
      src: url(/fonts.gstatic.com/s/roboto/v29/KFOlCnqEu92Fr1MmWUlfABc4EsA.woff2) format('woff2');
      unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
    }

    /* greek-ext */
    @font-face {
      font-family: 'Roboto';
      font-style: normal;
      font-weight: 700;
      src: url(/fonts.gstatic.com/s/roboto/v29/KFOlCnqEu92Fr1MmWUlfCBc4EsA.woff2) format('woff2');
      unicode-range: U+1F00-1FFF;
    }

    /* greek */
    @font-face {
      font-family: 'Roboto';
      font-style: normal;
      font-weight: 700;
      src: url(/fonts.gstatic.com/s/roboto/v29/KFOlCnqEu92Fr1MmWUlfBxc4EsA.woff2) format('woff2');
      unicode-range: U+0370-03FF;
    }

    /* vietnamese */
    @font-face {
      font-family: 'Roboto';
      font-style: normal;
      font-weight: 700;
      src: url(/fonts.gstatic.com/s/roboto/v29/KFOlCnqEu92Fr1MmWUlfCxc4EsA.woff2) format('woff2');
      unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
    }

    /* latin-ext */
    @font-face {
      font-family: 'Roboto';
      font-style: normal;
      font-weight: 700;
      src: url(/fonts.gstatic.com/s/roboto/v29/KFOlCnqEu92Fr1MmWUlfChc4EsA.woff2) format('woff2');
      unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
    }

    /* latin */
    @font-face {
      font-family: 'Roboto';
      font-style: normal;
      font-weight: 700;
      src: url(/fonts.gstatic.com/s/roboto/v29/KFOlCnqEu92Fr1MmWUlfBBc4.woff2) format('woff2');
      unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
    }
  </style>
  <link rel='stylesheet' id='dor-core-dashboard-style-css'
    href='https://dor.qodeinteractive.com/wp-content/plugins/dor-core/core-dashboard/assets/css/core-dashboard.min.css?ver=5.8.3'
    type='text/css' media='all' />
  <link rel='stylesheet' id='js_composer_front-css'
    href='https://dor.qodeinteractive.com/wp-content/plugins/js_composer/assets/css/js_composer.min.css?ver=6.8.0'
    type='text/css' media='all' />
  <link rel='stylesheet' id='qode-zendesk-chat-css'
    href='https://dor.qodeinteractive.com/wp-content/plugins/qode-zendesk-chat//assets/main.css?ver=5.8.3'
    type='text/css' media='all' />
  <script type='text/javascript' src='https://dor.qodeinteractive.com/wp-includes/js/jquery/jquery.min.js?ver=3.6.0'
    id='jquery-core-js'></script>
  <script type='text/javascript'
    src='https://dor.qodeinteractive.com/wp-includes/js/jquery/jquery-migrate.min.js?ver=3.3.2'
    id='jquery-migrate-js'></script>
  <script type='text/javascript'
    src='https://dor.qodeinteractive.com/wp-content/plugins/revslider/public/assets/js/rbtools.min.js?ver=6.5.14' async
    id='tp-tools-js'></script>
  <script type='text/javascript'
    src='https://dor.qodeinteractive.com/wp-content/plugins/revslider/public/assets/js/rs6.min.js?ver=6.5.14' async
    id='revmin-js'></script>
  <script type='text/javascript'
    src='https://dor.qodeinteractive.com/wp-content/plugins/woocommerce/assets/js/jquery-blockui/jquery.blockUI.min.js?ver=2.7.0-wc.6.1.1'
    id='jquery-blockui-js'></script>
  <script type='text/javascript' id='wc-add-to-cart-js-extra'>
    /* <![CDATA[ */
    var wc_add_to_cart_params = { "ajax_url": "\/wp-admin\/admin-ajax.php", "wc_ajax_url": "\/?wc-ajax=%%endpoint%%", "i18n_view_cart": "View cart", "cart_url": "https:\/\/dor.qodeinteractive.com\/cart\/", "is_cart": "", "cart_redirect_after_add": "no" };
/* ]]> */
  </script>
  <script type='text/javascript'
    src='https://dor.qodeinteractive.com/wp-content/plugins/woocommerce/assets/js/frontend/add-to-cart.min.js?ver=6.1.1'
    id='wc-add-to-cart-js'></script>
  <script type='text/javascript'
    src='https://dor.qodeinteractive.com/wp-content/plugins/wp-user-avatar/assets/flatpickr/flatpickr.min.js?ver=5.8.3'
    id='ppress-flatpickr-js'></script>
  <script type='text/javascript'
    src='https://dor.qodeinteractive.com/wp-content/plugins/wp-user-avatar/assets/select2/select2.min.js?ver=5.8.3'
    id='ppress-select2-js'></script>
  <script type='text/javascript'
    src='https://dor.qodeinteractive.com/wp-content/plugins/js_composer/assets/js/vendors/woocommerce-add-to-cart.js?ver=6.8.0'
    id='vc_woocommerce-add-to-cart-js-js'></script>
  <link rel="https://api.w.org/" href="https://dor.qodeinteractive.com/wp-json/" />
  <link rel="alternate" type="application/json" href="https://dor.qodeinteractive.com/wp-json/wp/v2/pages/6" />
  <link rel="EditURI" type="application/rsd+xml" title="RSD" href="https://dor.qodeinteractive.com/xmlrpc.php?rsd" />
  <link rel="wlwmanifest" type="application/wlwmanifest+xml"
    href="https://dor.qodeinteractive.com/wp-includes/wlwmanifest.xml" />
  <meta name="generator" content="WordPress 5.8.3" />
  <meta name="generator" content="WooCommerce 6.1.1" />
  <link rel="canonical" href="https://dor.qodeinteractive.com/" />
  <link rel='shortlink' href='https://dor.qodeinteractive.com/' />
  <link rel="alternate" type="application/json+oembed"
    href="https://dor.qodeinteractive.com/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fdor.qodeinteractive.com%2F" />
  <link rel="alternate" type="text/xml+oembed"
    href="https://dor.qodeinteractive.com/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fdor.qodeinteractive.com%2F&#038;format=xml" />

  <script data-cfasync="false" data-pagespeed-no-defer>//<![CDATA[
    var dataLayer_content = { "pagePostType": "frontpage", "pagePostType2": "single-page", "pagePostAuthor": "admin" };
    dataLayer.push(dataLayer_content);//]]>
  </script>
  <script data-cfasync="false">//<![CDATA[
    (function (w, d, s, l, i) {
      w[l] = w[l] || []; w[l].push({
        'gtm.start':
          new Date().getTime(), event: 'gtm.js'
      }); var f = d.getElementsByTagName(s)[0],
        j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : ''; j.async = true; j.src =
          '//www.googletagmanager.com/gtm.' + 'js?id=' + i + dl; f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-KTQ2BTD');//]]>
  </script>

  <noscript>
    <style>
      .woocommerce-product-gallery {
        opacity: 1 !important;
      }
    </style>
  </noscript>
  <meta name="generator" content="Powered by WPBakery Page Builder - drag and drop page builder for WordPress." />
  <meta name="generator"
    content="Powered by Slider Revolution 6.5.14 - responsive, Mobile-Friendly Slider Plugin for WordPress with comfortable drag and drop interface." />
  <link rel="icon" href="/wp-content/uploads/2019/05/cropped-Dor-favicon-1-32x32.png" sizes="32x32" />
  <link rel="icon" href="/wp-content/uploads/2019/05/cropped-Dor-favicon-1-192x192.png" sizes="192x192" />
  <link rel="apple-touch-icon" href="/wp-content/uploads/2019/05/cropped-Dor-favicon-1-180x180.png" />
  <meta name="msapplication-TileImage" content="/wp-content/uploads/2019/05/cropped-Dor-favicon-1-270x270.png" />
  <script>function setREVStartSize(e) {
      //window.requestAnimationFrame(function() {
      window.RSIW = window.RSIW === undefined ? window.innerWidth : window.RSIW;
      window.RSIH = window.RSIH === undefined ? window.innerHeight : window.RSIH;
      try {
        var pw = document.getElementById(e.c).parentNode.offsetWidth,
          newh;
        pw = pw === 0 || isNaN(pw) ? window.RSIW : pw;
        e.tabw = e.tabw === undefined ? 0 : parseInt(e.tabw);
        e.thumbw = e.thumbw === undefined ? 0 : parseInt(e.thumbw);
        e.tabh = e.tabh === undefined ? 0 : parseInt(e.tabh);
        e.thumbh = e.thumbh === undefined ? 0 : parseInt(e.thumbh);
        e.tabhide = e.tabhide === undefined ? 0 : parseInt(e.tabhide);
        e.thumbhide = e.thumbhide === undefined ? 0 : parseInt(e.thumbhide);
        e.mh = e.mh === undefined || e.mh == "" || e.mh === "auto" ? 0 : parseInt(e.mh, 0);
        if (e.layout === "fullscreen" || e.l === "fullscreen")
          newh = Math.max(e.mh, window.RSIH);
        else {
          e.gw = Array.isArray(e.gw) ? e.gw : [e.gw];
          for (var i in e.rl) if (e.gw[i] === undefined || e.gw[i] === 0) e.gw[i] = e.gw[i - 1];
          e.gh = e.el === undefined || e.el === "" || (Array.isArray(e.el) && e.el.length == 0) ? e.gh : e.el;
          e.gh = Array.isArray(e.gh) ? e.gh : [e.gh];
          for (var i in e.rl) if (e.gh[i] === undefined || e.gh[i] === 0) e.gh[i] = e.gh[i - 1];

          var nl = new Array(e.rl.length),
            ix = 0,
            sl;
          e.tabw = e.tabhide >= pw ? 0 : e.tabw;
          e.thumbw = e.thumbhide >= pw ? 0 : e.thumbw;
          e.tabh = e.tabhide >= pw ? 0 : e.tabh;
          e.thumbh = e.thumbhide >= pw ? 0 : e.thumbh;
          for (var i in e.rl) nl[i] = e.rl[i] < window.RSIW ? 0 : e.rl[i];
          sl = nl[0];
          for (var i in nl) if (sl > nl[i] && nl[i] > 0) { sl = nl[i]; ix = i; }
          var m = pw > (e.gw[ix] + e.tabw + e.thumbw) ? 1 : (pw - (e.tabw + e.thumbw)) / (e.gw[ix]);
          newh = (e.gh[ix] * m) + (e.tabh + e.thumbh);
        }
        var el = document.getElementById(e.c);
        if (el !== null && el) el.style.height = newh + "px";
        el = document.getElementById(e.c + "_wrapper");
        if (el !== null && el) {
          el.style.height = newh + "px";
          el.style.display = "block";
        }
      } catch (e) {
        console.log("Failure at Presize of Slider:" + e)
      }
      //});
    };</script>
  <style type="text/css" id="wp-custom-css">
    .mkdf-parallax-row-holder {
      background-size: cover;
    }

    .mkdf-fullscreen-menu-holder {
      background-size: cover;
    }

    /* 2560 screen fixes start */
    @media only screen and (min-width: 1921px) {
      .mkdf-title-holder.mkdf-has-bg-image {
        background-size: cover;
      }

      .mkdf-portfolio-list-holder.mkdf-pl-fullscreen-slide-info.mkdf-one-columns .mkdf-list-is-slider .mkdf-item-space {
        width: 100% !important;
      }
    }

    @media screen and (min-width: 2560px) {
      .mkdf-video-button-holder .mkdf-video-button-image img {
        width: 100vw;
      }
    }

    /* 2560 screen fixes end */
  </style>
  <style type="text/css" data-type="vc_custom-css">
    @media only screen and (max-width: 1024px) {
      .mkdf-pl-holder .mkdf-pli-text-wrapper {
        position: absolute;
      }
    }
  </style>
  <style type="text/css" data-type="vc_shortcodes-custom-css">
    .vc_custom_1551867590443 {
      padding-bottom: 100px !important;
    }

    .vc_custom_1558349290495 {
      padding-top: 25px !important;
    }

    .vc_custom_1558349682038 {
      padding-top: 93px !important;
      padding-bottom: 140px !important;
    }

    .vc_custom_1558350184023 {
      padding-top: 125px !important;
    }

    .vc_custom_1558351056441 {
      padding-bottom: 140px !important;
    }

    .vc_custom_1553868966484 {
      padding-top: 133px !important;
      padding-bottom: 95px !important;
    }

    .vc_custom_1558351479632 {
      padding-top: 140px !important;
      padding-bottom: 140px !important;
    }

    .vc_custom_1553010580875 {
      padding-top: 105px !important;
      padding-bottom: 150px !important;
    }

    .vc_custom_1553010625321 {
      padding-top: 126px !important;
      padding-bottom: 140px !important;
    }

    .vc_custom_1553010674414 {
      padding-top: 130px !important;
      padding-bottom: 130px !important;
    }
  </style><noscript>
    <style>
      .wpb_animate_when_almost_visible {
        opacity: 1;
      }
    </style>
  </noscript>

  <!-- style page about us -->
  <style type="text/css" data-type="vc_shortcodes-custom-css">
    .vc_custom_1558356976110 {
      margin-right: 4.4% !important;
      margin-left: 4.4% !important;
    }

    .vc_custom_1554192470334 {
      padding-top: 150px !important;
      padding-bottom: 0px !important;
    }

    .vc_custom_1555068285429 {
      padding-top: 70px !important;
      padding-bottom: 142px !important;
    }

    .vc_custom_1551778636105 {
      padding-top: 150px !important;
      padding-bottom: 150px !important;
    }

    .vc_custom_1554194948379 {
      padding-right: 0px !important;
    }
  </style>
  <!-- end style page about us -->
</head>

<body
  class="page-template page-template-full-width page-template-full-width-php page page-id-994 theme-dor dor-core-2.1 woocommerce-js qodef-qi--no-touch qi-addons-for-elementor-1.5.1 dor-ver-2.2.1 mkdf-grid-1300 mkdf-wide-dropdown-menu-content-in-grid mkdf-sticky-header-on-scroll-down-up mkdf-dropdown-animate-height mkdf-header-standard mkdf-menu-area-shadow-disable mkdf-menu-area-in-grid-shadow-disable mkdf-menu-area-border-disable mkdf-menu-area-in-grid-border-disable mkdf-logo-area-border-disable mkdf-logo-area-in-grid-border-disable mkdf-header-vertical-shadow-disable mkdf-header-vertical-border-disable mkdf-side-menu-slide-from-right mkdf-woocommerce-columns-3 mkdf-woo-normal-space mkdf-woo-pl-info-below-image mkdf-woo-single-thumb-below-image mkdf-woo-single-has-pretty-photo mkdf-default-mobile-header mkdf-sticky-up-mobile-header wpb-js-composer js-comp-ver-6.8.0 vc_responsive elementor-default elementor-kit-4291 mkdf-chrome"
  itemscope itemtype="https://schema.org/WebPage">
  <div class="mkdf-wrapper">
    <div class="mkdf-wrapper-inner">
      <header class="mkdf-page-header">
        <div class="mkdf-menu-area mkdf-menu-left">
          <div class="mkdf-vertical-align-containers">
            <div class="mkdf-position-left">
              <div class="mkdf-position-left-inner">
                <div class="mkdf-logo-wrapper mkdf-text-logo">
                  <a itemprop="url" href="/">
                    <span class="mkdf-text-logo-left-wrap">
                      <span class="mkdf-text-logo-left" data-logo="APEX">
                      </span>
                    </span>
                  </a>
                </div>

                <nav class="mkdf-main-menu mkdf-drop-down mkdf-default-nav">
                  <!--[main_menu]-->
                </nav>
                
              </div>
            </div>
            <div class="mkdf-position-right">
              <div class="mkdf-position-right-inner">
                <!--[socials_link]-->
              </div>
            </div>
          </div>
        </div>
        <div class="mkdf-sticky-header">
          <div class="mkdf-sticky-holder mkdf-menu-left">
            <div class="mkdf-vertical-align-containers">
              <div class="mkdf-position-left">
                <div class="mkdf-position-left-inner">
                  <div class="mkdf-logo-wrapper mkdf-text-logo">
                    <a itemprop="url" href="/">
                      <span class="mkdf-text-logo-left-wrap">
                        <span class="mkdf-text-logo-left" data-logo="APEX">
                        </span>
                      </span>
                    </a>
                  </div>
                  <nav class="mkdf-main-menu mkdf-drop-down mkdf-sticky-nav">
                    <!--[main_menu]-->
                  </nav>
                </div>
              </div>
              <div class="mkdf-position-right">
                <div class="mkdf-position-right-inner">
                  <!--[socials_link]-->
                </div>
              </div>
            </div>
          </div>
        </div>
      </header>
      <header class="mkdf-mobile-header">
        <div class="mkdf-mobile-header-inner">
          <div class="mkdf-mobile-header-holder">
            <div class="mkdf-grid">
              <div class="mkdf-vertical-align-containers">
                <div class="mkdf-vertical-align-containers">
                  <div class="mkdf-position-left">
                    <div class="mkdf-position-left-inner">
                      <div class="mkdf-mobile-logo-wrapper mkdf-text-logo">
                        <a itemprop="url" href="/">
                          <span class="mkdf-text-logo-left">
                            GEM</span>
                        </a>
                      </div>
                    </div>
                  </div>
                  <div class="mkdf-position-right">
                    <div class="mkdf-position-right-inner">
                      <div class="mkdf-mobile-menu-opener mkdf-mobile-menu-opener-predefined">
                        <a href="javascript:void(0)">
                          <span class="mkdf-mobile-menu-icon">
                            <span class="mkdf-hm-lines"><span class="mkdf-hm-line mkdf-line-1"></span><span
                                class="mkdf-hm-line mkdf-line-2"></span><span
                                class="mkdf-hm-line mkdf-line-3"></span></span> </span>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <nav class="mkdf-mobile-nav" aria-label="Mobile Menu">
            <div class="mkdf-grid">
              <!--[main_menu]-->
            </div>
          </nav>
        </div>
      </header>
      <a id='mkdf-back-to-top' href='#'>
        <span class="mkdf-icon-stack">
          <svg xmlns="https://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
            width="11px" height="18px" viewBox="0 0 11 18" enable-background="new 0 0 11 18" xml:space="preserve">
            <line fill="#FFFFFF" stroke="#FFFFFF" stroke-miterlimit="10" x1="5.515" y1="1.379" x2="5.515" y2="17.155" />
            <line fill="#FFFFFF" stroke="#FFFFFF" stroke-miterlimit="10" x1="5.285" y1="0.844" x2="9.764" y2="5.324" />
            <line fill="#FFFFFF" stroke="#FFFFFF" stroke-miterlimit="10" x1="5.715" y1="0.854" x2="1.236" y2="5.333" />
          </svg> </span>
      </a>
      <!-- content page -->

      @if (session('status') || session('success') || session('error') || $errors->any())
        <div class="col-12 error-panel">
            @include('commons.sessionMessages')
            @include('commons.errors')
        </div>
    @endif
    @yield('content')

    
    <!-- end content page -->
    @isset($footer_content)
        {!! $footer_content !!}
    @endisset  

    </div>
  </div>
  <section class="mkdf-side-menu">
    <a class="mkdf-close-side-menu mkdf-close-side-menu-svg-path" href="#">
      <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="16px"
        height="16px" viewBox="0 0 16 16" enable-background="new 0 0 16 16" xml:space="preserve">
        <rect x="-2.629" y="7.5" transform="matrix(0.7071 0.7071 -0.7071 0.7071 8 -3.3137)" fill="#FFFFFF"
          width="21.257" height="1" />
        <rect x="-2.629" y="7.5" transform="matrix(0.7071 -0.7071 0.7071 0.7071 -3.3137 8)" fill="#FFFFFF"
          width="21.257" height="1" />
      </svg> </a>
    <div id="media_image-2" class="widget mkdf-sidearea widget_media_image"><a href="https://g9ivn.com/"><img
          width="315" height="24" src="/wp-content/uploads/2019/03/sidearea-logo.png"
          class="image wp-image-1929  attachment-full size-full" alt="d" loading="lazy"
          style="max-width: 100%; height: auto;"
          srcset="/wp-content/uploads/2019/03/sidearea-logo.png 315w, /wp-content/uploads/2019/03/sidearea-logo-300x23.png 300w"
          sizes="(max-width: 315px) 100vw, 315px" /></a></div>
    <div id="text-3" class="widget mkdf-sidearea widget_text">
      <div class="textwidget">
        <h6 style="color:#9b9b9b; font-size:23px; line-height:27px; text-align: center; margin: 31px 0px -11px;">Sed ut
          perspiclatis unde olnis iste errorbe ccusantium lorem ipsum dolor</h6>
      </div>
    </div>
    <div class="widget mkdf-separator-widget">
      <div class="mkdf-separator-holder clearfix  mkdf-separator-center mkdf-separator-normal">
        <div class="mkdf-separator" style="border-style: solid;margin-top: 8px"></div>
      </div>
    </div>
    <div class="widget mkdf-social-icons-group-widget text-align-center"> 
      <!--[socials_link]-->
    </div>
    <div class="widget mkdf-separator-widget">
      <div class="mkdf-separator-holder clearfix  mkdf-separator-center mkdf-separator-normal">
        <div class="mkdf-separator" style="border-style: solid;margin-bottom: 5px"></div>
      </div>
    </div>
    <div id="mkdf_instagram_widget-8" class="widget mkdf-sidearea widget_mkdf_instagram_widget">
      <ul class="mkdf-instagram-feed clearfix mkdf-col-3 mkdf-instagram-gallery mkdf-micro-space">
        <li>
          <a href="https://www.instagram.com/p/CKBx37An4z0/" target="_blank">
            <span class="mkdf-instagram-icon"><i class="social_instagram"></i></span>
            <img
              src="https://scontent.cdninstagram.com/v/t51.29350-15/138243568_499488721446096_4137107453554567621_n.jpg?_nc_cat=106&amp;ccb=1-3&amp;_nc_sid=8ae9d6&amp;_nc_ohc=-RQRShVWW78AX-SCCgX&amp;_nc_ht=scontent.cdninstagram.com&amp;oh=a2f043d6211b229cf150ac778ff853fc&amp;oe=60CF459B"
              alt="" /> </a>
        </li>
        <li>
          <a href="https://www.instagram.com/p/CKBx2MHHgj5/" target="_blank">
            <span class="mkdf-instagram-icon"><i class="social_instagram"></i></span>
            <img
              src="https://scontent.cdninstagram.com/v/t51.29350-15/137667897_147001067190096_2568379185050029836_n.jpg?_nc_cat=107&amp;ccb=1-3&amp;_nc_sid=8ae9d6&amp;_nc_ohc=hm9cMr8nYkEAX_smAOQ&amp;_nc_ht=scontent.cdninstagram.com&amp;oh=87a47ebcf03981bebada9fbb7a7794fc&amp;oe=60D0CF2C"
              alt="" /> </a>
        </li>
        <li>
          <a href="https://www.instagram.com/p/CKBx0chH1YN/" target="_blank">
            <span class="mkdf-instagram-icon"><i class="social_instagram"></i></span>
            <img
              src="https://scontent.cdninstagram.com/v/t51.29350-15/137628506_980630399010123_4648227975835610687_n.jpg?_nc_cat=109&amp;ccb=1-3&amp;_nc_sid=8ae9d6&amp;_nc_ohc=UMZOYJNPlo4AX-1cwII&amp;_nc_ht=scontent.cdninstagram.com&amp;oh=35423dad03dc0149814af48538a1819e&amp;oe=60CFD242"
              alt="" /> </a>
        </li>
        <li>
          <a href="https://www.instagram.com/p/CKBxyY5nn1m/" target="_blank">
            <span class="mkdf-instagram-icon"><i class="social_instagram"></i></span>
            <img
              src="https://scontent.cdninstagram.com/v/t51.29350-15/138744010_386037989360687_8020920644699658747_n.jpg?_nc_cat=108&amp;ccb=1-3&amp;_nc_sid=8ae9d6&amp;_nc_ohc=rFWBcGDXDMEAX_-hPuX&amp;_nc_ht=scontent.cdninstagram.com&amp;oh=aedee349b0335783ebd27059125f6234&amp;oe=60D056C4"
              alt="" /> </a>
        </li>
        <li>
          <a href="https://www.instagram.com/p/CKBxwRtHnT3/" target="_blank">
            <span class="mkdf-instagram-icon"><i class="social_instagram"></i></span>
            <img
              src="https://scontent.cdninstagram.com/v/t51.29350-15/138306002_2791380017794789_2513887769963748584_n.jpg?_nc_cat=106&amp;ccb=1-3&amp;_nc_sid=8ae9d6&amp;_nc_ohc=-JtTdGnIxk4AX_XXSfN&amp;_nc_ht=scontent.cdninstagram.com&amp;oh=41c569099b5ebd4308f25318395ed734&amp;oe=60D0EDA4"
              alt="" /> </a>
        </li>
        <li>
          <a href="https://www.instagram.com/p/CKBxuJ1n_PH/" target="_blank">
            <span class="mkdf-instagram-icon"><i class="social_instagram"></i></span>
            <img
              src="https://scontent.cdninstagram.com/v/t51.29350-15/138316065_100841928636413_5898805384940415574_n.jpg?_nc_cat=106&amp;ccb=1-3&amp;_nc_sid=8ae9d6&amp;_nc_ohc=kqtgzmpQHtEAX-DMZjJ&amp;_nc_ht=scontent.cdninstagram.com&amp;oh=12c79b7044effd8063c2db899ed29297&amp;oe=60D063D3"
              alt="" /> </a>
        </li>
      </ul>
    </div>
    <div class="widget mkdf-separator-widget">
      <div class="mkdf-separator-holder clearfix  mkdf-separator-center mkdf-separator-normal">
        <div class="mkdf-separator" style="border-style: solid;margin-top: 5px"></div>
      </div>
    </div>
    <div id="text-4" class="widget mkdf-sidearea widget_text">
      <div class="textwidget">
        <div>
          <div class="vc_row wpb_row vc_row-fluid">
            <div class="wpb_column vc_column_container vc_col-sm-12">
              <div class="vc_column-inner">
                <div class="wpb_wrapper">
                  <div class="mkdf-iwt clearfix  mkdf-iwt-full-width-layout mkdf-iwt-icon-left mkdf-iwt-icon-medium">
                    <div class="mkdf-iwt-icon">
                      <a itemprop="url" href="https://goo.gl/maps/N5MzWwNe9oT2" target="_blank" rel="noopener">
                        <img width="22" height="22" src="/wp-content/uploads/2019/03/vcard-icon-1.png"
                          class="attachment-full size-full" alt="d" loading="lazy" /> </a>
                    </div>
                    <div class="mkdf-iwt-content">
                      <p class="mkdf-iwt-title">
                        <a itemprop="url" href="https://goo.gl/maps/N5MzWwNe9oT2" target="_blank" rel="noopener">
                          <span class="mkdf-iwt-title-text">Black Street 175 / New York</span>
                        </a>
                      </p>
                    </div>
                  </div>
                  <div class="vc_empty_space" style="height: 12px"><span class="vc_empty_space_inner"></span></div>
                  <div class="mkdf-iwt clearfix  mkdf-iwt-full-width-layout mkdf-iwt-icon-left mkdf-iwt-icon-medium">
                    <div class="mkdf-iwt-icon">
                      <a itemprop="url" href="/cdn-cgi/l/email-protection#50343f22103528313d203c357e333f3d"
                        target="_blank" rel="noopener">
                        <img width="19" height="19" src="/wp-content/uploads/2019/03/vcard-icon-2.png"
                          class="attachment-full size-full" alt="d" loading="lazy" /> </a>
                    </div>
                    <div class="mkdf-iwt-content">
                      <p class="mkdf-iwt-title" style="padding: 0 0 0 3px">
                        <a itemprop="url" href="/cdn-cgi/l/email-protection#bcd8d3cefcd9c4ddd1ccd0d992dfd3d1"
                          target="_blank" rel="noopener">
                          <span class="mkdf-iwt-title-text"><span class="__cf_email__"
                              data-cfemail="b8dcd7caf8ddc0d9d5c8d4dd96dbd7d5">[email&#160;protected]</span></span>
                        </a>
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="vc_row wpb_row vc_row-fluid vc_custom_1553511627247">
            <div class="wpb_column vc_column_container vc_col-sm-12">
              <div class="vc_column-inner">
                <div class="wpb_wrapper"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="widget mkdf-separator-widget">
      <div class="mkdf-separator-holder clearfix  mkdf-separator-center mkdf-separator-normal">
        <div class="mkdf-separator" style="border-style: solid;margin-bottom: 9px"></div>
      </div>
    </div>
    <div id="search-4" class="widget mkdf-sidearea widget_search">
      <form role="search" method="get" class="mkdf-searchform searchform" id="searchform-172"
        action="https://dor.qodeinteractive.com/">
        <label class="screen-reader-text">Search for:</label>
        <div class="input-holder clearfix">
          <input type="search" class="search-field" placeholder="Search..." value="" name="s" title="Search for:" />
          <button type="submit" class="mkdf-search-submit"><svg xmlns="https://www.w3.org/2000/svg"
              xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="42px" height="42px" viewBox="0 0 42 42"
              enable-background="new 0 0 42 42" xml:space="preserve">
              <g>
                <g>
                  <g>
                    <g>
                      <path fill="#FFFFFF" stroke="#FFFFFF" stroke-width="0.5" stroke-miterlimit="10" d="M13.475,25.668
										c-3.142,0-6.284-1.197-8.673-3.59c-4.785-4.782-4.785-12.564,0-17.347c4.78-4.783,12.563-4.786,17.346,0
										c3.62,3.615,4.609,9.167,2.467,13.812c-0.174,0.383-0.626,0.549-1.014,0.377c-0.382-0.182-0.548-0.633-0.37-1.018
										c1.872-4.065,1.005-8.928-2.161-12.093c-4.191-4.188-11.003-4.186-15.191,0c-4.186,4.188-4.186,11.002,0,15.19
										c4.19,4.187,11,4.188,15.191,0c0.297-0.298,0.781-0.298,1.078,0c0.301,0.296,0.301,0.782,0,1.078
										C19.757,24.471,16.615,25.668,13.475,25.668z" />
                    </g>
                  </g>
                </g>
                <g>
                  <g>
                    <g>
                      <path fill="#FFFFFF" stroke="#FFFFFF" stroke-width="0.5" stroke-miterlimit="10"
                        d="M36.989,40.856
										c-1.05,0-2.035-0.41-2.78-1.151l-8.489-8.491c-0.297-0.295-0.297-0.782,0-1.079c0.3-0.301,0.783-0.301,1.082,0l8.487,8.484
										c0.907,0.911,2.493,0.915,3.402,0c0.454-0.452,0.707-1.053,0.707-1.7c0-0.641-0.253-1.244-0.707-1.696l-8.487-8.492
										c-0.939-0.936-2.465-0.936-3.403,0c-0.299,0.302-0.782,0.302-1.082,0l-4.65-4.652c-0.3-0.296-0.3-0.782,0-1.078
										c0.297-0.298,0.781-0.298,1.078,0l4.165,4.163c1.528-1.022,3.624-0.859,4.972,0.489l8.489,8.486
										c0.742,0.745,1.151,1.732,1.151,2.78c0,1.051-0.409,2.038-1.151,2.786C39.03,40.446,38.042,40.856,36.989,40.856z" />
                    </g>
                  </g>
                </g>
              </g>
            </svg></button>
        </div>
      </form>
    </div>
  </section>
  <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
  <script>
    window.RS_MODULES = window.RS_MODULES || {};
    window.RS_MODULES.modules = window.RS_MODULES.modules || {};
    window.RS_MODULES.waiting = window.RS_MODULES.waiting || [];
    window.RS_MODULES.defered = false;
    window.RS_MODULES.moduleWaiting = window.RS_MODULES.moduleWaiting || {};
    window.RS_MODULES.type = 'compiled';
  </script>
  <div class="rbt-toolbar" data-theme="Dør" data-featured="" data-button-position="30%" data-button-horizontal="right"
    data-button-alt="no"></div>

  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KTQ2BTD" height="0" width="0"
      style="display:none;visibility:hidden" aria-hidden="true"></iframe></noscript>
  <script type="text/html" id="wpb-modifications"></script>
  <style id="" media="all">
    /* cyrillic-ext */
    @font-face {
      font-family: 'Alegreya';
      font-style: italic;
      font-weight: 400;
      font-display: swap;
      src: url(/fonts.gstatic.com/s/alegreya/v26/4UaSrEBBsBhlBjvfkSLk3abBFkvpkARTPlbgv5qsmSW1rw.woff2) format('woff2');
      unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
    }

    /* cyrillic */
    @font-face {
      font-family: 'Alegreya';
      font-style: italic;
      font-weight: 400;
      font-display: swap;
      src: url(/fonts.gstatic.com/s/alegreya/v26/4UaSrEBBsBhlBjvfkSLk3abBFkvpkARTPlbgv5qlmSW1rw.woff2) format('woff2');
      unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
    }

    /* greek-ext */
    @font-face {
      font-family: 'Alegreya';
      font-style: italic;
      font-weight: 400;
      font-display: swap;
      src: url(/fonts.gstatic.com/s/alegreya/v26/4UaSrEBBsBhlBjvfkSLk3abBFkvpkARTPlbgv5qtmSW1rw.woff2) format('woff2');
      unicode-range: U+1F00-1FFF;
    }

    /* greek */
    @font-face {
      font-family: 'Alegreya';
      font-style: italic;
      font-weight: 400;
      font-display: swap;
      src: url(/fonts.gstatic.com/s/alegreya/v26/4UaSrEBBsBhlBjvfkSLk3abBFkvpkARTPlbgv5qimSW1rw.woff2) format('woff2');
      unicode-range: U+0370-03FF;
    }

    /* vietnamese */
    @font-face {
      font-family: 'Alegreya';
      font-style: italic;
      font-weight: 400;
      font-display: swap;
      src: url(/fonts.gstatic.com/s/alegreya/v26/4UaSrEBBsBhlBjvfkSLk3abBFkvpkARTPlbgv5qumSW1rw.woff2) format('woff2');
      unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
    }

    /* latin-ext */
    @font-face {
      font-family: 'Alegreya';
      font-style: italic;
      font-weight: 400;
      font-display: swap;
      src: url(/fonts.gstatic.com/s/alegreya/v26/4UaSrEBBsBhlBjvfkSLk3abBFkvpkARTPlbgv5qvmSW1rw.woff2) format('woff2');
      unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
    }

    /* latin */
    @font-face {
      font-family: 'Alegreya';
      font-style: italic;
      font-weight: 400;
      font-display: swap;
      src: url(/fonts.gstatic.com/s/alegreya/v26/4UaSrEBBsBhlBjvfkSLk3abBFkvpkARTPlbgv5qhmSU.woff2) format('woff2');
      unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
    }

    /* cyrillic-ext */
    @font-face {
      font-family: 'Montserrat';
      font-style: normal;
      font-weight: 300;
      font-display: swap;
      src: url(/fonts.gstatic.com/s/montserrat/v23/JTUSjIg1_i6t8kCHKm459WRhyzbi.woff2) format('woff2');
      unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
    }

    /* cyrillic */
    @font-face {
      font-family: 'Montserrat';
      font-style: normal;
      font-weight: 300;
      font-display: swap;
      src: url(/fonts.gstatic.com/s/montserrat/v23/JTUSjIg1_i6t8kCHKm459W1hyzbi.woff2) format('woff2');
      unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
    }

    /* vietnamese */
    @font-face {
      font-family: 'Montserrat';
      font-style: normal;
      font-weight: 300;
      font-display: swap;
      src: url(/fonts.gstatic.com/s/montserrat/v23/JTUSjIg1_i6t8kCHKm459WZhyzbi.woff2) format('woff2');
      unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
    }

    /* latin-ext */
    @font-face {
      font-family: 'Montserrat';
      font-style: normal;
      font-weight: 300;
      font-display: swap;
      src: url(/fonts.gstatic.com/s/montserrat/v23/JTUSjIg1_i6t8kCHKm459Wdhyzbi.woff2) format('woff2');
      unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
    }

    /* latin */
    @font-face {
      font-family: 'Montserrat';
      font-style: normal;
      font-weight: 300;
      font-display: swap;
      src: url(/fonts.gstatic.com/s/montserrat/v23/JTUSjIg1_i6t8kCHKm459Wlhyw.woff2) format('woff2');
      unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
    }

    /* cyrillic-ext */
    @font-face {
      font-family: 'Montserrat';
      font-style: normal;
      font-weight: 400;
      font-display: swap;
      src: url(/fonts.gstatic.com/s/montserrat/v23/JTUSjIg1_i6t8kCHKm459WRhyzbi.woff2) format('woff2');
      unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
    }

    /* cyrillic */
    @font-face {
      font-family: 'Montserrat';
      font-style: normal;
      font-weight: 400;
      font-display: swap;
      src: url(/fonts.gstatic.com/s/montserrat/v23/JTUSjIg1_i6t8kCHKm459W1hyzbi.woff2) format('woff2');
      unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
    }

    /* vietnamese */
    @font-face {
      font-family: 'Montserrat';
      font-style: normal;
      font-weight: 400;
      font-display: swap;
      src: url(/fonts.gstatic.com/s/montserrat/v23/JTUSjIg1_i6t8kCHKm459WZhyzbi.woff2) format('woff2');
      unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
    }

    /* latin-ext */
    @font-face {
      font-family: 'Montserrat';
      font-style: normal;
      font-weight: 400;
      font-display: swap;
      src: url(/fonts.gstatic.com/s/montserrat/v23/JTUSjIg1_i6t8kCHKm459Wdhyzbi.woff2) format('woff2');
      unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
    }

    /* latin */
    @font-face {
      font-family: 'Montserrat';
      font-style: normal;
      font-weight: 400;
      font-display: swap;
      src: url(/fonts.gstatic.com/s/montserrat/v23/JTUSjIg1_i6t8kCHKm459Wlhyw.woff2) format('woff2');
      unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
    }

    /* cyrillic-ext */
    @font-face {
      font-family: 'Roboto';
      font-style: normal;
      font-weight: 400;
      font-display: swap;
      src: url(/fonts.gstatic.com/s/roboto/v29/KFOmCnqEu92Fr1Mu72xKOzY.woff2) format('woff2');
      unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
    }

    /* cyrillic */
    @font-face {
      font-family: 'Roboto';
      font-style: normal;
      font-weight: 400;
      font-display: swap;
      src: url(/fonts.gstatic.com/s/roboto/v29/KFOmCnqEu92Fr1Mu5mxKOzY.woff2) format('woff2');
      unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
    }

    /* greek-ext */
    @font-face {
      font-family: 'Roboto';
      font-style: normal;
      font-weight: 400;
      font-display: swap;
      src: url(/fonts.gstatic.com/s/roboto/v29/KFOmCnqEu92Fr1Mu7mxKOzY.woff2) format('woff2');
      unicode-range: U+1F00-1FFF;
    }

    /* greek */
    @font-face {
      font-family: 'Roboto';
      font-style: normal;
      font-weight: 400;
      font-display: swap;
      src: url(/fonts.gstatic.com/s/roboto/v29/KFOmCnqEu92Fr1Mu4WxKOzY.woff2) format('woff2');
      unicode-range: U+0370-03FF;
    }

    /* vietnamese */
    @font-face {
      font-family: 'Roboto';
      font-style: normal;
      font-weight: 400;
      font-display: swap;
      src: url(/fonts.gstatic.com/s/roboto/v29/KFOmCnqEu92Fr1Mu7WxKOzY.woff2) format('woff2');
      unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
    }

    /* latin-ext */
    @font-face {
      font-family: 'Roboto';
      font-style: normal;
      font-weight: 400;
      font-display: swap;
      src: url(/fonts.gstatic.com/s/roboto/v29/KFOmCnqEu92Fr1Mu7GxKOzY.woff2) format('woff2');
      unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
    }

    /* latin */
    @font-face {
      font-family: 'Roboto';
      font-style: normal;
      font-weight: 400;
      font-display: swap;
      src: url(/fonts.gstatic.com/s/roboto/v29/KFOmCnqEu92Fr1Mu4mxK.woff2) format('woff2');
      unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
    }
  </style>
  <script type="text/javascript">
    (function () {
      var c = document.body.className;
      c = c.replace(/woocommerce-no-js/, 'woocommerce-js');
      document.body.className = c;
    })();
  </script>
  <script>
    if (typeof revslider_showDoubleJqueryError === "undefined") { function revslider_showDoubleJqueryError(sliderID) { console.log("You have some jquery.js library include that comes after the Slider Revolution files js inclusion."); console.log("To fix this, you can:"); console.log("1. Set 'Module General Options' -> 'Advanced' -> 'jQuery & OutPut Filters' -> 'Put JS to Body' to on"); console.log("2. Find the double jQuery.js inclusion and remove it"); return "Double Included jQuery Library"; } }
  </script>
  <link rel='stylesheet' id='rs-plugin-settings-css'
    href='https://dor.qodeinteractive.com/wp-content/plugins/revslider/public/assets/css/rs6.css?ver=6.5.14'
    type='text/css' media='all' />
  <style id='rs-plugin-settings-inline-css' type='text/css'>
    .dor-styles.tp-bullets {
      top: 100%;
      left: 50%;
      opacity: 0;
      animation: fadeIn 1s 1s forwards
    }

    #rev_slider_1_1_wrapper .dor-styles.tparrows {
      width: auto;
      height: auto;
      padding: 0;
      margin: 0;
      color: #fff;
      background-color: transparent;
      border: 0;
      border-radius: 0;
      outline: none;
      -webkit-appearance: none;
      -webkit-transition: color .2s ease-out;
      -ms-transition: color .2s ease-out;
      transition: color .2s ease-out
    }

    #rev_slider_1_1_wrapper .dor-styles.tparrows.rs-touchhover {
      color: #fff
    }

    #rev_slider_1_1_wrapper .dor-styles.tparrows:before {
      display: none
    }

    #rev_slider_1_1_wrapper .dor-styles.tparrows>span {
      position: relative;
      display: inline-block;
      vertical-align: middle;
      font-family: 'Ionicons';
      font-size: 38px;
      line-height: 1
    }

    #rev_slider_1_1_wrapper .dor-styles.tparrows>span:before {
      display: block;
      line-height: inherit
    }

    #rev_slider_1_1_wrapper .dor-styles.tparrows.tp-leftarrow>span:before {
      content: "\f3d5"
    }

    #rev_slider_1_1_wrapper .dor-styles.tparrows .mkdf-nav-arrow {
      transition: transform .2s
    }

    #rev_slider_1_1_wrapper .dor-styles.tparrows.tp-leftarrow.rs-touchhover .mkdf-nav-arrow {
      transform: translateX(-5px)
    }

    #rev_slider_1_1_wrapper .dor-styles.tparrows.tp-rightarrow.rs-touchhover .mkdf-nav-arrow {
      transform: translateX(5px)
    }

    #rev_slider_1_1_wrapper .dor-styles.tparrows.tp-rightarrow>span:before {
      content: "\f3d6"
    }

    #rev_slider_1_1_wrapper .dor-styles.tp-bullets {
      counter-reset: counter;
      -webkit-transition: all 0.3s ease-in-out;
      -ms-transition: all 0.3s ease-in-out;
      transition: all 0.3s ease-in-out;
      box-sizing: content-box
    }

    #rev_slider_1_1_wrapper .dor-styles .tp-bullet {
      box-sizing: content-box;
      display: inline-block;
      width: 13px;
      height: 19px;
      vertical-align: middle;
      margin: 0;
      padding: 4px 18px;
      background: none;
      border: 0;
      border-radius: 0;
      outline: none;
      -webkit-appearance: none;
      border-bottom: 1px solid #8b8b8b;
      -webkit-transition: all 0.3s ease-in-out;
      -ms-transition: all 0.3s ease-in-out;
      transition: all 0.3s ease-in-out
    }

    #rev_slider_1_1_wrapper .dor-styles .tp-bullet:first-child:after,
    #rev_slider_1_1_wrapper .dor-styles .tp-bullet:last-child:after {
      content: '';
      position: absolute;
      display: block;
      top: 50%;
      width: 21px;
      height: 100%;
      border-bottom: 1px solid #8b8b8b;
      -webkit-transform: translateY(-50%);
      -ms-transform: translateY(-50%);
      transform: translateY(-50%);
      -webkit-transition: all 0.3s ease-in-out;
      -ms-transition: all 0.3s ease-in-out;
      transition: all 0.3s ease-in-out
    }

    #rev_slider_1_1_wrapper .dor-styles .tp-bullet:first-child:after {
      left: -21px
    }

    #rev_slider_1_1_wrapper .dor-styles .tp-bullet:last-child:after {
      right: -21px
    }

    #rev_slider_1_1_wrapper .dor-styles .tp-bullet:before {
      position: relative;
      display: inline-block;
      width: 6px;
      font-size: 15px;
      font-family: 'Montserrat', sans-serif;
      font-weight: 600;
      top: 0;
      left: 50%;
      color: #8b8b8b;
      counter-increment: counter;
      content: counter(counter);
      -webkit-transform: translateX(-50%);
      -ms-transform: translateX(-50%);
      transform: translateX(-50%);
      -webkit-transition: all .3s ease-in-out;
      -ms-transition: all .3s ease-in-out;
      transition: all .3s ease-in-out
    }

    #rev_slider_1_1_wrapper .dor-styles .tp-bullet:after {
      display: none
    }

    #rev_slider_1_1_wrapper .dor-styles .tp-bullet span {
      position: relative
    }

    #rev_slider_1_1_wrapper .dor-styles .tp-bullet:first-child span:before {
      content: '|';
      position: absolute;
      display: block;
      margin: 0;
      top: 7px;
      right: 26px;
      width: 0;
      font-size: 19px;
      -webkit-transform: rotate(39deg);
      -ms-transform: rotate(39deg);
      transform: rotate(39deg);
      color: #8b8b8b
    }

    #rev_slider_1_1_wrapper .dor-styles .tp-bullet span:after {
      content: '|';
      position: absolute;
      display: block;
      margin: 0;
      top: 7px;
      left: 23px;
      width: 0;
      font-size: 19px;
      -webkit-transform: rotate(39deg);
      -ms-transform: rotate(39deg);
      transform: rotate(39deg);
      color: #8b8b8b
    }

    #rev_slider_1_1_wrapper .dor-styles .tp-bullet.rs-touchhover,
    #rev_slider_1_1_wrapper .dor-styles .tp-bullet.selected {
      border-bottom: 1px solid #fff
    }

    #rev_slider_1_1_wrapper .dor-styles .tp-bullet.rs-touchhover:before,
    #rev_slider_1_1_wrapper .dor-styles .tp-bullet.selected:before {
      color: #fff
    }

    #rev_slider_1_1_wrapper .dor-styles.vertical.tp-bullets {
      width: 30px
    }

    #rev_slider_1_1_wrapper .dor-styles.vertical .tp-bullet {
      display: block;
      position: static;
      width: auto;
      height: 54px;
      border-bottom: none;
      border-left: 1px solid #8b8b8b;
      padding: 12px 9px;
      box-sizing: border-box
    }

    #rev_slider_1_1_wrapper .dor-styles.vertical .tp-bullet:first-child:after,
    #rev_slider_1_1_wrapper .dor-styles.vertical .tp-bullet:last-child:after {
      top: auto;
      left: 0;
      width: 100%;
      height: 21px;
      border-bottom: none;
      border-left: 1px solid #8b8b8b
    }

    #rev_slider_1_1_wrapper .dor-styles.vertical .tp-bullet:first-child:after {
      top: -10px
    }

    #rev_slider_1_1_wrapper .dor-styles.vertical .tp-bullet:last-child:after {
      bottom: -32px
    }

    #rev_slider_1_1_wrapper .dor-styles.vertical .tp-bullet:before {
      width: 9px
    }

    #rev_slider_1_1_wrapper .dor-styles.vertical .tp-bullet:first-child span:before {
      top: -26px;
      right: auto;
      left: -21px;
      transform: rotate(-39deg)
    }

    #rev_slider_1_1_wrapper .dor-styles.vertical .tp-bullet span:after {
      top: 27px;
      left: -21px;
      transform: rotate(-39deg)
    }

    #rev_slider_1_1_wrapper .dor-styles.vertical .tp-bullet.rs-touchhover,
    #rev_slider_1_1_wrapper .dor-styles.vertical .tp-bullet.selected {
      border-bottom: none;
      border-left: 1px solid #fff
    }
  </style>
  <script type='text/javascript'
    src='https://dor.qodeinteractive.com/wp-includes/js/dist/vendor/regenerator-runtime.min.js?ver=0.13.7'
    id='regenerator-runtime-js'></script>
  <script type='text/javascript'
    src='https://dor.qodeinteractive.com/wp-includes/js/dist/vendor/wp-polyfill.min.js?ver=3.15.0'
    id='wp-polyfill-js'></script>
  <script type='text/javascript' src='https://export.g9ivn_com.com/_toolbar/assets/js/rbt-modules.js?ver=5.8.3'
    id='rabbit_js-js'></script>
  <script type='text/javascript'
    src='https://dor.qodeinteractive.com/wp-content/plugins/woocommerce/assets/js/js-cookie/js.cookie.min.js?ver=2.1.4-wc.6.1.1'
    id='js-cookie-js'></script>
  <script type='text/javascript' id='woocommerce-js-extra'>
    /* <![CDATA[ */
    var woocommerce_params = { "ajax_url": "\/wp-admin\/admin-ajax.php", "wc_ajax_url": "\/?wc-ajax=%%endpoint%%" };
/* ]]> */
  </script>
  <script type='text/javascript'
    src='https://dor.qodeinteractive.com/wp-content/plugins/woocommerce/assets/js/frontend/woocommerce.min.js?ver=6.1.1'
    id='woocommerce-js'></script>
  <script type='text/javascript' id='wc-cart-fragments-js-extra'>
    /* <![CDATA[ */
    var wc_cart_fragments_params = { "ajax_url": "\/wp-admin\/admin-ajax.php", "wc_ajax_url": "\/?wc-ajax=%%endpoint%%", "cart_hash_key": "wc_cart_hash_383a8623181d0d82c834576a75e4004f", "fragment_name": "wc_fragments_383a8623181d0d82c834576a75e4004f", "request_timeout": "5000" };
/* ]]> */
  </script>
  <script type='text/javascript'
    src='https://dor.qodeinteractive.com/wp-content/plugins/woocommerce/assets/js/frontend/cart-fragments.min.js?ver=6.1.1'
    id='wc-cart-fragments-js'></script>
  <script type='text/javascript' id='ppress-frontend-script-js-extra'>
    /* <![CDATA[ */
    var pp_ajax_form = { "ajaxurl": "https:\/\/dor.qodeinteractive.com\/wp-admin\/admin-ajax.php", "confirm_delete": "Are you sure?", "deleting_text": "Deleting...", "deleting_error": "An error occurred. Please try again.", "nonce": "d8141cf689", "disable_ajax_form": "false" };
/* ]]> */
  </script>
  <script type='text/javascript'
    src='https://dor.qodeinteractive.com/wp-content/plugins/wp-user-avatar/assets/js/frontend.min.js?ver=3.2.6'
    id='ppress-frontend-script-js'></script>
  <script type='text/javascript' src='https://dor.qodeinteractive.com/wp-includes/js/jquery/ui/core.min.js?ver=1.12.1'
    id='jquery-ui-core-js'></script>
  <script type='text/javascript' id='qi-addons-for-elementor-script-js-extra'>
    /* <![CDATA[ */
    var qodefQiAddonsGlobal = { "vars": { "adminBarHeight": 0, "iconArrowLeft": "<svg  xmlns=\"http:\/\/www.w3.org\/2000\/svg\" xmlns:xlink=\"http:\/\/www.w3.org\/1999\/xlink\" x=\"0px\" y=\"0px\" viewBox=\"0 0 34.2 32.3\" xml:space=\"preserve\" style=\"stroke-width: 2;\"><line x1=\"0.5\" y1=\"16\" x2=\"33.5\" y2=\"16\"\/><line x1=\"0.3\" y1=\"16.5\" x2=\"16.2\" y2=\"0.7\"\/><line x1=\"0\" y1=\"15.4\" x2=\"16.2\" y2=\"31.6\"\/><\/svg>", "iconArrowRight": "<svg  xmlns=\"http:\/\/www.w3.org\/2000\/svg\" xmlns:xlink=\"http:\/\/www.w3.org\/1999\/xlink\" x=\"0px\" y=\"0px\" viewBox=\"0 0 34.2 32.3\" xml:space=\"preserve\" style=\"stroke-width: 2;\"><line x1=\"0\" y1=\"16\" x2=\"33\" y2=\"16\"\/><line x1=\"17.3\" y1=\"0.7\" x2=\"33.2\" y2=\"16.5\"\/><line x1=\"17.3\" y1=\"31.6\" x2=\"33.5\" y2=\"15.4\"\/><\/svg>", "iconClose": "<svg  xmlns=\"http:\/\/www.w3.org\/2000\/svg\" xmlns:xlink=\"http:\/\/www.w3.org\/1999\/xlink\" x=\"0px\" y=\"0px\" viewBox=\"0 0 9.1 9.1\" xml:space=\"preserve\"><g><path d=\"M8.5,0L9,0.6L5.1,4.5L9,8.5L8.5,9L4.5,5.1L0.6,9L0,8.5L4,4.5L0,0.6L0.6,0L4.5,4L8.5,0z\"\/><\/g><\/svg>" } };
/* ]]> */
  </script>
  <script type='text/javascript'
    src='https://dor.qodeinteractive.com/wp-content/plugins/qi-addons-for-elementor/assets/js/main.min.js?ver=5.8.3'
    id='qi-addons-for-elementor-script-js'></script>
  <script type='text/javascript' src='https://dor.qodeinteractive.com/wp-includes/js/jquery/ui/tabs.min.js?ver=1.12.1'
    id='jquery-ui-tabs-js'></script>
  <script type='text/javascript' id='mediaelement-core-js-before'>
    var mejsL10n = { "language": "en", "strings": { "mejs.download-file": "Download File", "mejs.install-flash": "You are using a browser that does not have Flash player enabled or installed. Please turn on your Flash player plugin or download the latest version from https:\/\/get.adobe.com\/flashplayer\/", "mejs.fullscreen": "Fullscreen", "mejs.play": "Play", "mejs.pause": "Pause", "mejs.time-slider": "Time Slider", "mejs.time-help-text": "Use Left\/Right Arrow keys to advance one second, Up\/Down arrows to advance ten seconds.", "mejs.live-broadcast": "Live Broadcast", "mejs.volume-help-text": "Use Up\/Down Arrow keys to increase or decrease volume.", "mejs.unmute": "Unmute", "mejs.mute": "Mute", "mejs.volume-slider": "Volume Slider", "mejs.video-player": "Video Player", "mejs.audio-player": "Audio Player", "mejs.captions-subtitles": "Captions\/Subtitles", "mejs.captions-chapters": "Chapters", "mejs.none": "None", "mejs.afrikaans": "Afrikaans", "mejs.albanian": "Albanian", "mejs.arabic": "Arabic", "mejs.belarusian": "Belarusian", "mejs.bulgarian": "Bulgarian", "mejs.catalan": "Catalan", "mejs.chinese": "Chinese", "mejs.chinese-simplified": "Chinese (Simplified)", "mejs.chinese-traditional": "Chinese (Traditional)", "mejs.croatian": "Croatian", "mejs.czech": "Czech", "mejs.danish": "Danish", "mejs.dutch": "Dutch", "mejs.english": "English", "mejs.estonian": "Estonian", "mejs.filipino": "Filipino", "mejs.finnish": "Finnish", "mejs.french": "French", "mejs.galician": "Galician", "mejs.german": "German", "mejs.greek": "Greek", "mejs.haitian-creole": "Haitian Creole", "mejs.hebrew": "Hebrew", "mejs.hindi": "Hindi", "mejs.hungarian": "Hungarian", "mejs.icelandic": "Icelandic", "mejs.indonesian": "Indonesian", "mejs.irish": "Irish", "mejs.italian": "Italian", "mejs.japanese": "Japanese", "mejs.korean": "Korean", "mejs.latvian": "Latvian", "mejs.lithuanian": "Lithuanian", "mejs.macedonian": "Macedonian", "mejs.malay": "Malay", "mejs.maltese": "Maltese", "mejs.norwegian": "Norwegian", "mejs.persian": "Persian", "mejs.polish": "Polish", "mejs.portuguese": "Portuguese", "mejs.romanian": "Romanian", "mejs.russian": "Russian", "mejs.serbian": "Serbian", "mejs.slovak": "Slovak", "mejs.slovenian": "Slovenian", "mejs.spanish": "Spanish", "mejs.swahili": "Swahili", "mejs.swedish": "Swedish", "mejs.tagalog": "Tagalog", "mejs.thai": "Thai", "mejs.turkish": "Turkish", "mejs.ukrainian": "Ukrainian", "mejs.vietnamese": "Vietnamese", "mejs.welsh": "Welsh", "mejs.yiddish": "Yiddish" } };
  </script>
  <script type='text/javascript'
    src='https://dor.qodeinteractive.com/wp-includes/js/mediaelement/mediaelement-and-player.min.js?ver=4.2.16'
    id='mediaelement-core-js'></script>
  <script type='text/javascript'
    src='https://dor.qodeinteractive.com/wp-includes/js/mediaelement/mediaelement-migrate.min.js?ver=5.8.3'
    id='mediaelement-migrate-js'></script>
  <script type='text/javascript' id='mediaelement-js-extra'>
    /* <![CDATA[ */
    var _wpmejsSettings = { "pluginPath": "\/wp-includes\/js\/mediaelement\/", "classPrefix": "mejs-", "stretching": "responsive" };
/* ]]> */
  </script>
  <script type='text/javascript'
    src='https://dor.qodeinteractive.com/wp-includes/js/mediaelement/wp-mediaelement.min.js?ver=5.8.3'
    id='wp-mediaelement-js'></script>
  <script type='text/javascript' src='/wp-content/themes/dor/assets/js/modules/plugins/jquery.appear.js?ver=5.8.3'
    id='jquery-appear-js'></script>
  <script type='text/javascript' src='/wp-content/themes/dor/assets/js/modules/plugins/modernizr.min.js?ver=5.8.3'
    id='modernizr-js'></script>
  <script type='text/javascript' src='https://dor.qodeinteractive.com/wp-includes/js/hoverIntent.min.js?ver=1.10.1'
    id='hoverIntent-js'></script>
  <script type='text/javascript' src='/wp-content/themes/dor/assets/js/modules/plugins/jquery.plugin.js?ver=5.8.3'
    id='jquery-plugin-js'></script>
  <script type='text/javascript' src='/wp-content/themes/dor/assets/js/modules/plugins/owl.carousel.min.js?ver=5.8.3'
    id='owl-carousel-js'></script>
  <script type='text/javascript'
    src='/wp-content/themes/dor/assets/js/modules/plugins/jquery.waypoints.min.js?ver=5.8.3' id='waypoints-js'></script>
  <script type='text/javascript'
    src='/wp-content/themes/dor/assets/js/modules/plugins/jquery.nicescroll.min.js?ver=5.8.3'
    id='nicescroll-js'></script>
  <script type='text/javascript' src='/wp-content/themes/dor/assets/js/modules/plugins/fluidvids.min.js?ver=5.8.3'
    id='fluidvids-js'></script>
  <script type='text/javascript'
    src='/wp-content/themes/dor/assets/js/modules/plugins/perfect-scrollbar.jquery.min.js?ver=5.8.3'
    id='perfect-scrollbar-js'></script>
  <script type='text/javascript' src='/wp-content/themes/dor/assets/js/modules/plugins/ScrollToPlugin.min.js?ver=5.8.3'
    id='scroll-to-plugin-js'></script>
  <script type='text/javascript' src='/wp-content/themes/dor/assets/js/modules/plugins/parallax.min.js?ver=5.8.3'
    id='parallax-js'></script>
  <script type='text/javascript'
    src='/wp-content/themes/dor/assets/js/modules/plugins/jquery.waitforimages.js?ver=5.8.3'
    id='jquery-waitforimages-js'></script>
  <script type='text/javascript' src='/wp-content/themes/dor/assets/js/modules/plugins/jquery.prettyPhoto.js?ver=5.8.3'
    id='jquery-prettyphoto-js'></script>
  <script type='text/javascript' src='/wp-content/themes/dor/assets/js/modules/plugins/jquery.easing.1.3.js?ver=5.8.3'
    id='jquery-easing-1.3-js'></script>
  <script type='text/javascript'
    src='https://dor.qodeinteractive.com/wp-content/plugins/js_composer/assets/lib/bower/isotope/dist/isotope.pkgd.min.js?ver=6.8.0'
    id='isotope-js'></script>
  <script type='text/javascript'
    src='https://dor.qodeinteractive.com/wp-content/plugins/qi-addons-for-elementor/inc/masonry/assets/js/plugins/packery-mode.pkgd.min.js?ver=5.8.3'
    id='packery-js'></script>
  <script type='text/javascript'
    src='https://dor.qodeinteractive.com/wp-content/plugins/elementor/assets/lib/swiper/swiper.min.js?ver=5.3.6'
    id='swiper-js'></script>
  <script type='text/javascript'
    src='/wp-content/themes/dor/assets/js/modules/plugins/jquery.parallax-scroll.js?ver=5.8.3'
    id='jquery-parallax-scroll-js'></script>
  <script type='text/javascript' src='/wp-content/themes/dor/assets/js/modules/plugins/jquery.prettyPhoto.js?ver=5.8.3'
    id='prettyphoto-js'></script>
  <script type='text/javascript'
    src='https://dor.qodeinteractive.com/wp-content/plugins/woocommerce/assets/js/select2/select2.full.min.js?ver=4.0.3-wc.6.1.1'
    id='select2-js'></script>
  <script type='text/javascript'
    src='//maps.googleapis.com/maps/api/js?key=AIzaSyAfofkLAEG01m6VSX3Ps3kJr5olFHZGUGw&#038;ver=5.8.3'
    id='dor-mikado-google-map-api-js'></script>
  <script type='text/javascript' id='dor-mikado-modules-js-extra'>
    /* <![CDATA[ */
    var mkdfGlobalVars = { "vars": { "mkdfAddForAdminBar": 0, "mkdfElementAppearAmount": -100, "mkdfAjaxUrl": "https:\/\/dor.qodeinteractive.com\/wp-admin\/admin-ajax.php", "sliderNavPrevArrow": "ion-ios-arrow-thin-left", "sliderNavNextArrow": "ion-ios-arrow-thin-right", "ppExpand": "Expand the image", "ppNext": "Next", "ppPrev": "Previous", "ppClose": "Close", "mkdfStickyHeaderHeight": 70, "mkdfStickyHeaderTransparencyHeight": 70, "mkdfTopBarHeight": 0, "mkdfLogoAreaHeight": 0, "mkdfMenuAreaHeight": 102, "mkdfMobileHeaderHeight": 70 } };
    var mkdfPerPageVars = { "vars": { "mkdfMobileHeaderHeight": 70, "mkdfStickyScrollAmount": 0, "mkdfHeaderTransparencyHeight": 0, "mkdfHeaderVerticalWidth": 0 } };
/* ]]> */
  </script>
  <script type='text/javascript' src='/wp-content/themes/dor/assets/js/modules.min.js?ver=5.8.3'
    id='dor-mikado-modules-js'></script>
  
  <script type='text/javascript' src='https://dor.qodeinteractive.com/wp-includes/js/wp-embed.min.js?ver=5.8.3'
    id='wp-embed-js'></script>
  <script type='text/javascript'
    src='https://dor.qodeinteractive.com/wp-content/plugins/js_composer/assets/js/dist/js_composer_front.min.js?ver=6.8.0'
    id='wpb_composer_front_js-js'></script>
  <script type='text/javascript'
    src='https://dor.qodeinteractive.com/wp-content/plugins/dor-core/shortcodes/counter/assets/js/plugins/counter.js?ver=5.8.3'
    id='counter-js'></script>
  <script id="rs-initialisation-scripts">
    var tpj = jQuery;

    var revapi1;

    if (window.RS_MODULES === undefined) window.RS_MODULES = {};
    if (RS_MODULES.modules === undefined) RS_MODULES.modules = {};
    RS_MODULES.modules["revslider11"] = {
      once: RS_MODULES.modules["revslider11"] !== undefined ? RS_MODULES.modules["revslider11"].once : undefined, init: function () {
        window.revapi1 = window.revapi1 === undefined || window.revapi1 === null || window.revapi1.length === 0 ? document.getElementById("rev_slider_1_1") : window.revapi1;
        if (window.revapi1 === null || window.revapi1 === undefined || window.revapi1.length == 0) { window.revapi1initTry = window.revapi1initTry === undefined ? 0 : window.revapi1initTry + 1; if (window.revapi1initTry < 20) requestAnimationFrame(function () { RS_MODULES.modules["revslider11"].init() }); return; }
        window.revapi1 = jQuery(window.revapi1);
        if (window.revapi1.revolution == undefined) { revslider_showDoubleJqueryError("rev_slider_1_1"); return; }
        revapi1.revolutionInit({
          revapi: "revapi1",
          DPR: "dpr",
          sliderLayout: "fullscreen",
          duration: 4500,
          visibilityLevels: "1920,1601,1025,680",
          gridwidth: "1100,800,700,400",
          gridheight: "840,768,960,720",
          lazyType: "smart",
          perspective: 600,
          perspectiveType: "local",
          editorheight: "840,768,960,720",
          responsiveLevels: "1920,1601,1025,680",
          progressBar: { disableProgressBar: true },
          navigation: {
            mouseScrollNavigation: false,
            wheelCallDelay: 1000,
            onHoverStop: false,
            arrows: {
              enable: true,
              tmp: "<span class=\"mkdf-nav-arrow\"></span>",
              style: "dor-styles",
              hide_onmobile: true,
              hide_under: 777,
              left: {
                h_offset: 80
              },
              right: {
                h_offset: 80
              }
            },
            bullets: {
              enable: true,
              tmp: "<span class=\"tp-bullet-inner\"></span>",
              style: "dor-styles",
              hide_onmobile: true,
              hide_under: 570,
              v_offset: 40,
              space: 0
            }
          },
          parallax: {
            levels: [5, 10, 15, 20, 25, 30, 35, 40, 45, 46, 47, 48, 49, 50, 51, 55],
            type: "mouse"
          },
          fanim: {
            in: { "o": 0 },
            out: { "a": false },
            speed: 300
          },
          viewPort: {
            global: true,
            globalDist: "-200px",
            enable: false,
            visible_area: "20%"
          },
          fallbacks: {
            allowHTML5AutoPlayOnAndroid: true
          },
        });

      }
    } // End of RevInitScript

    if (window.RS_MODULES.checkMinimal !== undefined) { window.RS_MODULES.checkMinimal(); };
  </script>
  <style>
    .mkdf-logo-wrapper.mkdf-text-logo .mkdf-text-logo-left-wrap .mkdf-text-logo-left {
      display: inline-block;
      width: 101px;
      height: 50px;
      background: transparent url(/wp-content/uploads/2019/03/logo_apex.png) no-repeat center top / 100%;
    }
  </style>
</body>

</html>