<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />

    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title')</title>
    <meta name="Description" content="{{ __('vocabulary.metaDescription') }}" />
    <meta name="p:domain_verify" content="f1dea5a7a0ce4103097283fc39d15d66" >

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}">

    <!-- Web Fonts -->
    <link href='{{ asset('/css/fonts.css') }}' rel='stylesheet' type='text/css'>

    <!-- CSS Global Compulsory -->
    <link rel="stylesheet" href="{{ asset('/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">

    <!-- CSS Implementing Plugins -->
    <link rel="stylesheet" href="{{ asset('/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/settings.css') }}" type="text/css" media="screen">
    <link rel="stylesheet" href="{{ asset('/css/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/jquery.fancybox.css') }}">
    <link type="text/css" href="../../assets/css/atooltip.css" rel="stylesheet"  media="screen" />
    <script type="text/javascript" src="../../assets/js/jquery.atooltip.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript">
        $(function(){ $('a.normalTip').aToolTip();});
        $(function(){ $('area.mapTip').aToolTip();});
    </script>
    <!--[if lt IE 9]><link rel="stylesheet" href="{{ asset('css/settings-ie8.css') }}" type="text/css" media="screen"><![endif]-->
    <script data-skip-moving="true">
        (function (w, d, u, b) {
            s = d.createElement('script');
            r = (Date.now() / 1000 | 0);
            s.async = 1;
            s.src = u + '?' + r;
            h = d.getElementsByTagName('script')[0];
            h.parentNode.insertBefore(s, h);
        })(window, document, 'https://cdn.bitrix24.ua/b2874427/crm/site_button/loader_2_j1osbo.js');
    </script>
    <style>
        .b24-widget-button-popup {
            border: 0;
        }
        .b24-widget-button-crmform {
            order: 2;
        }
        .b24-widget-button-popup-triangle {
            border: 0;
        }
        .b24-widget-button-position-top-right .b24-widget-button-popup-triangle {
            right: -4px;
        }
    </style>
</head>
