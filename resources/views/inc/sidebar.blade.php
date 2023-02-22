<div class="nk-sidebar-element nk-sidebar-head">
    <div class="nk-sidebar-brand"><a href="index.html" class="logo-link nk-sidebar-logo"><img class="logo-light logo-img"
                src="images/logo.png" srcset="/demo2/images/logo2x.png 2x" alt="logo"><img class="logo-dark logo-img"
                src="images/logo-dark.png" srcset="/demo2/images/logo-dark2x.png 2x" alt="logo-dark"><img
                class="logo-small logo-img logo-img-small" src="images/logo-small.png"
                srcset="/demo2/images/logo-small2x.png 2x" alt="logo-small"></a></div>
    <div class="nk-menu-trigger me-n2"><a href="#" class="nk-nav-toggle nk-quick-nav-icon d-xl-none"
            data-target="sidebarMenu"><em class="icon ni ni-arrow-left"></em></a><a href="#"
            class="nk-nav-compact nk-quick-nav-icon d-none d-xl-inline-flex" data-target="sidebarMenu"><em
                class="icon ni ni-menu"></em></a></div>
</div>
<div class="nk-sidebar-element">
    <div class="nk-sidebar-content">
        <div class="nk-sidebar-menu" data-simplebar>
            <ul class="nk-menu">

                <li class="nk-menu-heading">
                    <h6 class="overline-title text-primary-alt">Menu</h6>
                </li>

                <li class="nk-menu-item"><a href="{{ route('dashboard') }}" class="nk-menu-link"><span
                            class="nk-menu-icon"><em class="icon ni ni-growth-fill"></em></span><span
                            class="nk-menu-text">Dashboard</span></a></li>

                <li class="nk-menu-item has-sub"><a href="#" class="nk-menu-link nk-menu-toggle"><span
                            class="nk-menu-icon"><em class="icon ni ni-tile-thumb-fill"></em></span><span
                            class="nk-menu-text">Uploads</span></a>
                    <ul class="nk-menu-sub">
                        <li class="nk-menu-item"><a href="{{ route('president') }}" class="nk-menu-link"><span
                                    class="nk-menu-text">Presidential
                                    upload</span></a></li>
                        <li class="nk-menu-item"><a href="{{ route('senate') }}" class="nk-menu-link"><span
                                    class="nk-menu-text">Senatorial</span></a>
                        </li>
                        <li class="nk-menu-item"><a href="{{ route('rep') }}" class="nk-menu-link"><span
                                    class="nk-menu-text">House of
                                    Representative</span></a></li>
                    </ul>
                </li>
                <li class="nk-menu-item has-sub"><a href="#" class="nk-menu-link nk-menu-toggle"><span
                            class="nk-menu-icon"><em class="icon ni ni-card-view"></em></span><span
                            class="nk-menu-text">Election Result</span></a>
                    <ul class="nk-menu-sub">
                        <li class="nk-menu-item"><a href="{{ route('presidential.poll') }}" class="nk-menu-link"><span
                                    class="nk-menu-text">Presidential
                                    Polls</span></a></li>
                        <li class="nk-menu-item"><a href="{{ route('senatorial.poll') }}" class="nk-menu-link"><span
                                    class="nk-menu-text">Senatorial Polls</span></a></li>
                        <li class="nk-menu-item"><a href="{{ route('reps.data') }}" class="nk-menu-link"><span
                                    class="nk-menu-text">House of
                                    Representative Polls</span></a></li>
                    </ul>
                </li>

                <li class="nk-menu-item has-sub"><a href="#" class="nk-menu-link nk-menu-toggle"><span
                            class="nk-menu-icon"><em class="icon ni ni-file-docs"></em></span><span
                            class="nk-menu-text">Poll Result Records</span></a>
                    <ul class="nk-menu-sub">
                        <li class="nk-menu-item"><a href="{{ route('presidential.result') }}" class="nk-menu-link"><span
                                    class="nk-menu-text">Presidential</span></a></li>
                        <li class="nk-menu-item"><a href="{{ route('senatorial.result') }}" class="nk-menu-link"><span
                                    class="nk-menu-text">Senatorial</span></a>
                        </li>
                        <li class="nk-menu-item"><a href="{{ route('reps.result') }}" class="nk-menu-link"><span
                                    class="nk-menu-text">House of
                                    Representative</span></a></li>
                    </ul>
                </li>

            </ul>
        </div>
    </div>
</div>
