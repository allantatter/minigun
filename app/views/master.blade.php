<!doctype html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7 {{ $html_class }}" {{ $html_attr }} ng-class="htmlClass"> <![endif]-->
<!--[if IE 7]> <html class="no-js lt-ie9 lt-ie8 {{ $html_class }}" {{ $html_attr }} ng-class="htmlClass"> <![endif]-->
<!--[if IE 8]> <html class="no-js lt-ie9 {{ $html_class }}" {{ $html_attr }} ng-class="htmlClass"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js {{$html_class}}" {{$html_attr}} ng-class="htmlClass" lang="{{$page_lang}}"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta http-equiv="X-Frame-Options" content="ALLOW-FROM https://apps.facebook.com">
        <title ng-bind="$root.pageTitle+'TribeLotto'">{{$page_title}}</title>
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1" />
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-title" content="TribeLotto">
        <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
        <!-- build:css(public) /dist/styles/vendor.css -->
        <!-- bower:css -->
        <link rel="stylesheet" href="/bower_components/normalize-css/normalize.css" />
        <link rel="stylesheet" href="/bower_components/angular-loading-bar/build/loading-bar.css" />
        <link rel="stylesheet" href="/bower_components/add-to-homescreen/style/addtohomescreen.css" />
        <!-- endbower -->
        <!-- endbuild -->
        <!-- build:css(public) /dist/styles/main.css -->
        <link rel="stylesheet" href="/.tmp/styles/main.css">
        <!-- endbuild -->
        <!--[if lt IE 9]>
            <script src="/bower_components/html5shiv/dist/html5shiv.min.js"></script>
        <![endif]-->

        <!-- For Chrome for Android: -->
        <link rel="icon" sizes="192x192" href="/assets/misc/touch-icons/touch-icon-192x192.png">
        <!-- For iPhone 6 Plus with @3Ã— display: -->
        <link rel="apple-touch-icon-precomposed" sizes="180x180" href="/assets/misc/touch-icons/apple-touch-icon-180x180-precomposed.png">
        <!-- For iPad with @2Ã— display running iOS â‰¥ 7: -->
        <link rel="apple-touch-icon-precomposed" sizes="152x152" href="/assets/misc/touch-icons/apple-touch-icon-152x152-precomposed.png">
        <!-- For iPad with @2Ã— display running iOS â‰¤ 6: -->
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="/assets/misc/touch-icons/apple-touch-icon-144x144-precomposed.png">
        <!-- For iPhone with @2Ã— display running iOS â‰¥ 7: -->
        <link rel="apple-touch-icon-precomposed" sizes="120x120" href="/assets/misc/touch-icons/apple-touch-icon-120x120-precomposed.png">
        <!-- For iPhone with @2Ã— display running iOS â‰¤ 6: -->
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="/assets/misc/touch-icons/apple-touch-icon-114x114-precomposed.png">
        <!-- For the iPad mini and the first- and second-generation iPad (@1Ã— display) on iOS â‰¥ 7: -->
        <link rel="apple-touch-icon-precomposed" sizes="76x76" href="/assets/misc/touch-icons/apple-touch-icon-76x76-precomposed.png">
        <!-- For the iPad mini and the first- and second-generation iPad (@1Ã— display) on iOS â‰¤ 6: -->
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="/assets/misc/touch-icons/apple-touch-icon-72x72-precomposed.png">
        <!-- For non-Retina iPhone, iPod Touch, and Android 2.1+ devices: -->
        <link rel="apple-touch-icon-precomposed" href="/assets/misc/touch-icons/apple-touch-icon-precomposed.png"><!-- 57Ã—57px -->

        <!-- OG meta tags -->
        <meta property="og:title" content="Tribelotto - A new way of playing LOTTO">
        <meta property="og:description" content="Get people together, pick one line and play with thousands." />
        <meta property="og:image" content="https://www.tribelotto.com/assets/misc/share.png">

        <!--Twitter meta tags -->
        <meta name="twitter:title" content="Tribelotto - A new way of playing LOTTO">
        <meta name="twitter:description" content="Get people together, pick one line and play with thousands.">
        <meta name="twitter:image" content="https://www.tribelotto.com/assets/misc/share.png">

        <!--Basic meta tags -->
        <meta name="title" content="Tribelotto - A new way of playing LOTTO">
        <meta name="description" content="Get people together, pick one line and play with thousands.">
        <link rel="image_src" href="https://www.tribelotto.com/assets/misc/share.png">
        <style id="antiClickjack">body{display:none !important;}</style>
    </head>
    <body>

        <noscript>
        <style>
        body, html {
            background-color: #554983 !important;
            overflow: hidden;
        }
        body {
            background-image: url(assets/misc/404_picture.png);
            background-position: center;
        }
        .sticky-container {
            display: none;
        }
        </style>
        <p style="text-align: center;"> We detected that JavaScript is disabled!
This application requires JavaScript to be enabled. Here are the instructions to enable JavaScript in your web browser. (link: <a href="http://www.enable-javascript.com/">http://www.enable-javascript.com/</a>)</p>
        </noscript>
        <div id="fb-root"></div>

        <script type="text/javascript">
            window.fbAsyncInit = function() {
                FB.init({
                    appId: '1499360236979357', //production--->1418470345068347 //demo-->1499360236979357
                    cookie: true,
                    status: true,
                    oauth: true,
                    version: 'v2.0',
                    xfbml: true
                });
            };

            (function(d, s, id){
                var js, fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id)) {return;}
                js = d.createElement(s); js.id = id;
                js.src = "//connect.facebook.net/en_US/sdk.js";
                //js.src = 'http://connect.facebook.net/en_US/all.js';
                fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));
        </script>

        @yield('main')

        <!-- build:js(public) /dist/scripts/vendor.js -->
        <!-- bower:js -->
        <script src="/bower_components/modernizr/modernizr.js"></script>
        <script src="/bower_components/jquery/jquery.js"></script>
        <script src="/bower_components/lodash/dist/lodash.compat.js"></script>
        <script src="/bower_components/angular/angular.js"></script>
        <script src="/bower_components/velocity/velocity.js"></script>
        <script src="/bower_components/angular-gettext/dist/angular-gettext.js"></script>
        <script src="/bower_components/angular-ui-router/release/angular-ui-router.js"></script>
        <script src="/bower_components/restangular/dist/restangular.js"></script>
        <script src="/bower_components/angular-loading-bar/build/loading-bar.js"></script>
        <script src="/bower_components/angular-animate/angular-animate.js"></script>
        <script src="/bower_components/cropper/dist/cropper.js"></script>
        <script src="/bower_components/angular-google-analytics/dist/angular-google-analytics.min.js"></script>
        <script src="/bower_components/moment/moment.js"></script>
        <script src="/bower_components/angular-touch/angular-touch.js"></script>
        <script src="/bower_components/venturocket-angular-slider/build/angular-slider.js"></script>
        <script src="/bower_components/fastclick/lib/fastclick.js"></script>
        <script src="/bower_components/add-to-homescreen/src/addtohomescreen.min.js"></script>
        <script src="/bower_components/angular-mocks/angular-mocks.js"></script>
        <!-- endbower -->
        <!-- endbuild -->

        <!-- build:js(public) /dist/scripts/main.js -->
        <script src="/consolidator/consolidator/consolidator.js"></script>
        <script src="/assets/scripts/snippets.js"></script>
        <script src="/assets/scripts/snippets/detectStandalone.js"></script>
        <script src="/assets/scripts/snippets/stringFirstUppercase.js"></script>
        <script src="/assets/scripts/snippets/lottoNumbersSelectToSquare.js"></script>

        <script src="/assets/scripts/app.js"></script>

        <!-- minigun:filters -->
        <script src="/assets/scripts/filters/range.js"></script>
        <!-- end minigun:filters -->

        <!-- minigun:models -->
        <script src="/assets/scripts/models/Tribe.js"></script>
        <script src="/assets/scripts/models/User.js"></script>
        <!-- end minigun:models -->

        <!-- minigun:services -->
        <script src="/assets/scripts/services/loaders/GlobalLoader.js"></script>
        <script src="/assets/scripts/services/Auth.js"></script>
        <script src="/assets/scripts/services/Backdrop.js"></script>
        <script src="/assets/scripts/services/Popup.js"></script>
        <script src="/assets/scripts/services/Redirect.js"></script>
        <script src="/assets/scripts/services/Scroll.js"></script>
        <!-- end minigun:services -->

        <!-- minigun:validators -->
        <script src="/assets/scripts/validators/BaseValidator.js"></script>
        <script src="/assets/scripts/validators/UiFormValidator.js"></script>
        <script src="/assets/scripts/validators/LoginFormValidator.js"></script>
        <script src="/assets/scripts/validators/OpenAccountValidator.js"></script>
        <!-- end minigun:validators -->

        <!-- minigun:directives -->
        <script src="/assets/scripts/directives/input/confirmation.js"></script>
        <script src="/assets/scripts/directives/input/expiryDate.js"></script>
        <script src="/assets/scripts/directives/input/datepickerFallback.js"></script>
        <script src="/assets/scripts/directives/input/floatlabel.js"></script>
        <script src="/assets/scripts/directives/input/inputOnlyNumbers.js"></script>
        <script src="/assets/scripts/directives/input/inputDate.js"></script>
        <script src="/assets/scripts/directives/form/customSubmit.js"></script>
        <script src="/assets/scripts/directives/form/errors.js"></script>
        <script src="/assets/scripts/directives/languageDropdown.js"></script>
        <script src="/assets/scripts/directives/horizontalScrollBox.js"></script>
        <script src="/assets/scripts/directives/tabItem.js"></script>
        <script src="/assets/scripts/directives/tooltip.js"></script>
        <script src="/assets/scripts/directives/lotto/lottoNumbersTableSquare.js"></script>
        <script src="/assets/scripts/directives/lotto/limitAmountOfChecks.js"></script>
        <script src="/assets/scripts/directives/input.js"></script>
        <script src="/assets/scripts/directives/form/errors.js"></script>
        <!-- end minigun:directives -->

        <!-- minigun:controllers -->
        <script src="/assets/scripts/controllers/pages/UIController.js"></script>
        <script src="/assets/scripts/controllers/pages/StartController.js"></script>
        <script src="/assets/scripts/controllers/pages/PlaylottoController.js"></script>
        <script src="/assets/scripts/controllers/pages/PlayLottoNumberSelectionController.js"></script>
        <script src="/assets/scripts/controllers/pages/LoginController.js"></script>
        <script src="/assets/scripts/controllers/pages/IntroVideoController.js"></script>
        <script src="/assets/scripts/controllers/pages/OpenAccountController.js"></script>
        <script src="/assets/scripts/controllers/pages/OpenAccount2Controller.js"></script>
        <script src="/assets/scripts/controllers/pages/OpenAccount3Controller.js"></script>
        <script src="/assets/scripts/controllers/general/HeaderController.js"></script>
        <script src="/assets/scripts/controllers/general/LanguageSwitcherController.js"></script>
        <script src="/assets/scripts/controllers/general/NavController.js"></script>
        <script src="/assets/scripts/controllers/popup/PopupController.js"></script>
        <!-- end minigun:controllers -->

        <!-- endbuild -->

        <!-- Vkontakte snippet -->
        <script type="text/javascript" src="//vkontakte.ru/js/api/share.js?9" charset="windows-1251" async></script>

        <!-- Google client library and the API -->
        <!-- https://developers.google.com/api-client-library/javascript/dev/dev_jscript#LoadingtheclientlibraryandtheAPI-->
        <script src="https://apis.google.com/js/client.js?onload=OnLoadCallback" async></script>
        <script src="https://apis.google.com/js/platform.js" async defer></script>

        <!-- Anti click jack thingy -->
        <script type="text/javascript">
            function isFacebook() {
                var fullUrl = document.referrer;
                var ref = fullUrl.match(/:\/\/(.[^/]+)/)[1];

                if (ref === 'apps.facebook.com') {
                    return true;
                }

                return false;
            }

            if (self === top || isFacebook()) {
                var a = document.getElementById("antiClickjack");
                a.parentNode.removeChild(a);
            } else {
                top.location = self.location;
            }
        </script>
    </body>
</html>