<!DOCTYPE html>
<html lang="zxx" class="js">
<!-- Mirrored from dashlite.net/demo2/pages/auths/auth-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 21 Feb 2023 13:01:04 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
    <meta charset="utf-8">
    <meta name="author" content="Softnio">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description"
        content="A powerful and conceptual apps base dashboard template that especially build for developers and programmers.">
    <link rel="shortcut icon" href="{{ asset('images/favicon.png') }}">
    <title>Login | DashLite Admin Template</title>
    <link rel="stylesheet" href="{{ asset('assets/css/dashlite0226.css?ver=3.1.2') }}">
    <link id="skin-default" rel="stylesheet" href="{{ asset('assets/css/theme0226.css?ver=3.1.2') }}">
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-91615293-4"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'UA-91615293-4');
    </script>
</head>

<body class="nk-body bg-white npc-default pg-auth">
    <div class="nk-app-root">
        <div class="nk-main ">
            <div class="nk-wrap nk-wrap-nosidebar">
                <div class="nk-content ">
                    <div class="nk-split nk-split-page nk-split-lg">
                        <div class="nk-split-content nk-block-area nk-block-area-column nk-auth-container bg-white">
                            <div class="absolute-top-right d-lg-none p-3 p-sm-5"><a href="#"
                                    class="toggle btn-white btn btn-icon btn-light" data-target="athPromo"><em
                                        class="icon ni ni-info"></em></a></div>
                            <div class="nk-block nk-block-middle nk-auth-body">
                                <div class="brand-logo pb-5"><a href="../../index.html" class="logo-link"><img
                                            class="logo-light logo-img logo-img-lg" src="{{ asset('images/logo.png') }}"
                                            srcset="/demo2/images/logo2x.png 2x" alt="logo"><img
                                            class="logo-dark logo-img logo-img-lg"
                                            src="{{ asset('images/logo-dark.png') }}"
                                            srcset="/demo2/images/logo-dark2x.png 2x" alt="logo-dark"></a>
                                </div>
                                <div class="nk-block-head">
                                    <div class="nk-block-head-content">
                                        <h5 class="nk-block-title">Sign-In</h5>
                                        <!-- <div class="nk-block-des">
                                                       <p>Access the DashLite panel using your email and passcode.</p>
                                                  </div> -->
                                    </div>
                                </div>
                                <form action="{{ route('login') }}" method="post" class="form-validate is-alter"
                                    autocomplete="off">
                                    @csrf
                                    <div class="form-group">
                                        <div class="form-label-group"><label class="form-label"
                                                for="username">Username</label></div>
                                        <div class="form-control-wrap"><input autocomplete="off" type="text"
                                                class="form-control form-control-lg" required id="username"
                                                name="username" placeholder="Enter your username"></div>
                                    </div>
                                    <div class="form-group"><button class="btn btn-lg btn-primary btn-block">Sign
                                            in</button></div>
                                </form>
                            </div>
                        </div>
                        <div class="nk-split-content nk-split-stretch bg-lighter d-flex toggle-break-lg toggle-slide toggle-slide-right"
                            data-toggle-body="true" data-content="athPromo" data-toggle-screen="lg"
                            data-toggle-overlay="true">
                            <div class="slider-wrap w-100 w-max-550px p-3 p-sm-5 m-auto">
                                <div class="slider-init" data-slick='{"dots":true, "arrows":false}'>
                                    <div class="slider-item">
                                        <div class="nk-feature nk-feature-center">
                                            <div class="nk-feature-img"><img class="round"
                                                    src="{{ asset('images/election.jpg') }}"
                                                    srcset="/demo2/images/slides/promo-a2x.png 2x" alt="">
                                            </div>
                                            <div class="nk-feature-content py-4 p-sm-5">
                                                <h4>Dashlite</h4>
                                                <p>You can start to create your products easily with its
                                                    user-friendly design & most completed responsive
                                                    layout.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="slider-item">
                                        <div class="nk-feature nk-feature-center">
                                            <div class="nk-feature-img"><img class="round"
                                                    src="{{ asset('images/slides/promo-b.png') }}"
                                                    srcset="/demo2/images/slides/promo-b2x.png 2x" alt="">
                                            </div>
                                            <div class="nk-feature-content py-4 p-sm-5">
                                                <h4>Dashlite</h4>
                                                <p>You can start to create your products easily with its
                                                    user-friendly design & most completed responsive
                                                    layout.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="slider-item">
                                        <div class="nk-feature nk-feature-center">
                                            <div class="nk-feature-img"><img class="round"
                                                    src="{{ asset('images/slides/promo-c.png') }}"
                                                    srcset="/demo2/images/slides/promo-c2x.png 2x" alt="">
                                            </div>
                                            <div class="nk-feature-content py-4 p-sm-5">
                                                <h4>Dashlite</h4>
                                                <p>You can start to create your products easily with its
                                                    user-friendly design & most completed responsive
                                                    layout.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="slider-dots"></div>
                                <div class="slider-arrows"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <script src="{{ asset('assets/js/bundle0226.js?ver=3.1.2') }}"></script>
    <script src="{{ asset('assets/js/scripts0226.js?ver=3.1.2') }}"></script>
    <script src="{{ asset('assets/js/demo-settings0226.js?ver=3.1.2') }}"></script>

    <!-- Mirrored from dashlite.net/demo2/pages/auths/auth-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 21 Feb 2023 13:01:05 GMT -->

</html>
