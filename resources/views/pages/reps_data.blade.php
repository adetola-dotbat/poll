@extends('layout.master', [($bodyClass = 'nk-body bg-lighter npc-default has-sidebar')])
@section('pageName')
    Federal House of Represenatative Result
@endsection

@section('content')
    <div class="nk-content-body">
        <div class="nk-block-head nk-block-head-sm">
            <div class="nk-block-between">
                <div class="nk-block-head-content">
                    <h3 class="nk-block-title page-title">Federal House of Rep. Result Display</h3>
                    <div class="nk-block-des text-soft">
                        <p>Sokoto State</p>
                    </div>
                </div>

            </div>
        </div>
        <div class="nk-block">
            <div class="row g-gs">
                <div class="col-sm-6 col-lg-4 col-xxl-3">
                    <div class="card h-100">
                        <div class="card-inner">
                            <div class="project">
                                <div class="project-head"><a href="apps-kanban.html" class="project-title">
                                        <div class="user-avatar sq bg-warning">
                                            <span>BS</span>
                                        </div>
                                        <div class="project-info">
                                            <h6 class="title">BINJI/SILAME
                                            </h6><span class="sub-text">House of Rep</span>
                                        </div>
                                    </a>

                                </div>

                                <div class="project-progress">
                                    <div class="project-progress-details">
                                        <div class="project-progress-task"><em
                                                class="icon ni ni-check-round-cut"></em><span>
                                                APC ---- {{ $binji_report->sum('apc') }} Votes</span></div>
                                        <div class="project-progress-percent">
                                            {{ $binji_report->sum('apc') }}%</div>
                                    </div>
                                    <div class="progress progress-pill progress-md bg-light">
                                        <div class="progress-bar" data-progress="{{ $binji_report->sum('apc') }}"></div>
                                    </div>
                                </div>
                                <div class="project-progress">
                                    <div class="project-progress-details">
                                        <div class="project-progress-task"><em
                                                class="icon ni ni-check-round-cut"></em><span>
                                                PDP ---- {{ $binji_report->sum('pdp') }} Votes</span></div>
                                        <div class="project-progress-percent">
                                            {{ $binji_report->sum('pdp') }}%</div>
                                    </div>
                                    <div class="progress progress-pill progress-md bg-light">
                                        <div class="progress-bar" data-progress="{{ $binji_report->sum('pdp') }}"></div>
                                    </div>
                                </div>
                                <div class="project-progress">
                                    <div class="project-progress-details">
                                        <div class="project-progress-task"><em
                                                class="icon ni ni-check-round-cut"></em><span>
                                                LP ---- {{ $binji_report->sum('lp') }} Votes</span></div>
                                        <div class="project-progress-percent">
                                            {{ $binji_report->sum('lp') }}%</div>
                                    </div>
                                    <div class="progress progress-pill progress-md bg-light">
                                        <div class="progress-bar" data-progress="{{ $binji_report->sum('lp') }}"></div>
                                    </div>
                                </div>
                                <div class="project-progress">
                                    <div class="project-progress-details">
                                        <div class="project-progress-task"><em
                                                class="icon ni ni-check-round-cut"></em><span>
                                                OTHERS ---- {{ $binji_report->sum('others') }} Votes </span></div>
                                        <div class="project-progress-percent">
                                            {{ $binji_report->sum('others') }}%</div>
                                    </div>
                                    <div class="progress progress-pill progress-md bg-light">
                                        <div class="progress-bar" data-progress="{{ $binji_report->sum('others') }}"></div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4 col-xxl-3">
                    <div class="card h-100">
                        <div class="card-inner">
                            <div class="project">
                                <div class="project-head"><a href="apps-kanban.html" class="project-title">
                                        <div class="user-avatar sq bg-warning">
                                            <span>DBT</span>
                                        </div>
                                        <div class="project-info">
                                            <h6 class="title">DANGE / BODINGA /TURETA
                                            </h6><span class="sub-text">House of Rep</span>
                                        </div>
                                    </a>

                                </div>

                                <div class="project-progress">
                                    <div class="project-progress-details">
                                        <div class="project-progress-task"><em
                                                class="icon ni ni-check-round-cut"></em><span>
                                                APC ---- {{ $dange_report->sum('apc') }} Votes</span></div>
                                        <div class="project-progress-percent">
                                            {{ $dange_report->sum('apc') }}%</div>
                                    </div>
                                    <div class="progress progress-pill progress-md bg-light">
                                        <div class="progress-bar" data-progress="{{ $dange_report->sum('apc') }}"></div>
                                    </div>
                                </div>
                                <div class="project-progress">
                                    <div class="project-progress-details">
                                        <div class="project-progress-task"><em
                                                class="icon ni ni-check-round-cut"></em><span>
                                                PDP ---- {{ $dange_report->sum('pdp') }} Votes</span></div>
                                        <div class="project-progress-percent">
                                            {{ $dange_report->sum('pdp') }}%</div>
                                    </div>
                                    <div class="progress progress-pill progress-md bg-light">
                                        <div class="progress-bar" data-progress="{{ $dange_report->sum('pdp') }}"></div>
                                    </div>
                                </div>
                                <div class="project-progress">
                                    <div class="project-progress-details">
                                        <div class="project-progress-task"><em
                                                class="icon ni ni-check-round-cut"></em><span>
                                                LP ---- {{ $dange_report->sum('lp') }} Votes</span></div>
                                        <div class="project-progress-percent">
                                            {{ $dange_report->sum('lp') }}%</div>
                                    </div>
                                    <div class="progress progress-pill progress-md bg-light">
                                        <div class="progress-bar" data-progress="{{ $dange_report->sum('lp') }}"></div>
                                    </div>
                                </div>
                                <div class="project-progress">
                                    <div class="project-progress-details">
                                        <div class="project-progress-task"><em
                                                class="icon ni ni-check-round-cut"></em><span>
                                                OTHERS ---- {{ $dange_report->sum('others') }} Votes </span></div>
                                        <div class="project-progress-percent">
                                            {{ $dange_report->sum('others') }}%</div>
                                    </div>
                                    <div class="progress progress-pill progress-md bg-light">
                                        <div class="progress-bar" data-progress="{{ $dange_report->sum('others') }}"></div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4 col-xxl-3">
                    <div class="card h-100">
                        <div class="card-inner">
                            <div class="project">
                                <div class="project-head"><a href="apps-kanban.html" class="project-title">
                                        <div class="user-avatar sq bg-warning">
                                            <span>GG</span>
                                        </div>
                                        <div class="project-info">
                                            <h6 class="title">GORONYO/GADA
                                            </h6><span class="sub-text">House of Rep</span>
                                        </div>
                                    </a>

                                </div>

                                <div class="project-progress">
                                    <div class="project-progress-details">
                                        <div class="project-progress-task"><em
                                                class="icon ni ni-check-round-cut"></em><span>
                                                APC ---- {{ $goronyo_report->sum('apc') }} Votes</span></div>
                                        <div class="project-progress-percent">
                                            {{ $goronyo_report->sum('apc') }}%</div>
                                    </div>
                                    <div class="progress progress-pill progress-md bg-light">
                                        <div class="progress-bar" data-progress="{{ $goronyo_report->sum('apc') }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="project-progress">
                                    <div class="project-progress-details">
                                        <div class="project-progress-task"><em
                                                class="icon ni ni-check-round-cut"></em><span>
                                                PDP ---- {{ $goronyo_report->sum('pdp') }} Votes</span></div>
                                        <div class="project-progress-percent">
                                            {{ $goronyo_report->sum('pdp') }}%</div>
                                    </div>
                                    <div class="progress progress-pill progress-md bg-light">
                                        <div class="progress-bar" data-progress="{{ $goronyo_report->sum('pdp') }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="project-progress">
                                    <div class="project-progress-details">
                                        <div class="project-progress-task"><em
                                                class="icon ni ni-check-round-cut"></em><span>
                                                LP ---- {{ $goronyo_report->sum('lp') }} Votes</span></div>
                                        <div class="project-progress-percent">
                                            {{ $goronyo_report->sum('lp') }}%</div>
                                    </div>
                                    <div class="progress progress-pill progress-md bg-light">
                                        <div class="progress-bar" data-progress="{{ $goronyo_report->sum('lp') }}"></div>
                                    </div>
                                </div>
                                <div class="project-progress">
                                    <div class="project-progress-details">
                                        <div class="project-progress-task"><em
                                                class="icon ni ni-check-round-cut"></em><span>
                                                OTHERS ---- {{ $goronyo_report->sum('others') }} Votes </span></div>
                                        <div class="project-progress-percent">
                                            {{ $goronyo_report->sum('others') }}%</div>
                                    </div>
                                    <div class="progress progress-pill progress-md bg-light">
                                        <div class="progress-bar" data-progress="{{ $goronyo_report->sum('others') }}">
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4 col-xxl-3">
                    <div class="card h-100">
                        <div class="card-inner">
                            <div class="project">
                                <div class="project-head"><a href="apps-kanban.html" class="project-title">
                                        <div class="user-avatar sq bg-warning">
                                            <span>IG</span>
                                        </div>
                                        <div class="project-info">
                                            <h6 class="title">ILLELA/GWADABAWA
                                            </h6><span class="sub-text">House of Rep</span>
                                        </div>
                                    </a>

                                </div>

                                <div class="project-progress">
                                    <div class="project-progress-details">
                                        <div class="project-progress-task"><em
                                                class="icon ni ni-check-round-cut"></em><span>
                                                APC ---- {{ $illela_report->sum('apc') }} Votes</span></div>
                                        <div class="project-progress-percent">
                                            {{ $illela_report->sum('apc') }}%</div>
                                    </div>
                                    <div class="progress progress-pill progress-md bg-light">
                                        <div class="progress-bar" data-progress="{{ $illela_report->sum('apc') }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="project-progress">
                                    <div class="project-progress-details">
                                        <div class="project-progress-task"><em
                                                class="icon ni ni-check-round-cut"></em><span>
                                                PDP ---- {{ $illela_report->sum('pdp') }} Votes</span></div>
                                        <div class="project-progress-percent">
                                            {{ $illela_report->sum('pdp') }}%</div>
                                    </div>
                                    <div class="progress progress-pill progress-md bg-light">
                                        <div class="progress-bar" data-progress="{{ $illela_report->sum('pdp') }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="project-progress">
                                    <div class="project-progress-details">
                                        <div class="project-progress-task"><em
                                                class="icon ni ni-check-round-cut"></em><span>
                                                LP ---- {{ $illela_report->sum('lp') }} Votes</span></div>
                                        <div class="project-progress-percent">
                                            {{ $illela_report->sum('lp') }}%</div>
                                    </div>
                                    <div class="progress progress-pill progress-md bg-light">
                                        <div class="progress-bar" data-progress="{{ $illela_report->sum('lp') }}"></div>
                                    </div>
                                </div>
                                <div class="project-progress">
                                    <div class="project-progress-details">
                                        <div class="project-progress-task"><em
                                                class="icon ni ni-check-round-cut"></em><span>
                                                OTHERS ---- {{ $illela_report->sum('others') }} Votes </span></div>
                                        <div class="project-progress-percent">
                                            {{ $illela_report->sum('others') }}%</div>
                                    </div>
                                    <div class="progress progress-pill progress-md bg-light">
                                        <div class="progress-bar" data-progress="{{ $illela_report->sum('others') }}">
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4 col-xxl-3">
                    <div class="card h-100">
                        <div class="card-inner">
                            <div class="project">
                                <div class="project-head"><a href="apps-kanban.html" class="project-title">
                                        <div class="user-avatar sq bg-warning">
                                            <span>KW</span>
                                        </div>
                                        <div class="project-info">
                                            <h6 class="title">KWARE/WAMAKKO
                                            </h6><span class="sub-text">House of Rep</span>
                                        </div>
                                    </a>

                                </div>

                                <div class="project-progress">
                                    <div class="project-progress-details">
                                        <div class="project-progress-task"><em
                                                class="icon ni ni-check-round-cut"></em><span>
                                                APC ---- {{ $kware_report->sum('apc') }} Votes</span></div>
                                        <div class="project-progress-percent">
                                            {{ $kware_report->sum('apc') }}%</div>
                                    </div>
                                    <div class="progress progress-pill progress-md bg-light">
                                        <div class="progress-bar" data-progress="{{ $kware_report->sum('apc') }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="project-progress">
                                    <div class="project-progress-details">
                                        <div class="project-progress-task"><em
                                                class="icon ni ni-check-round-cut"></em><span>
                                                PDP ---- {{ $kware_report->sum('pdp') }} Votes</span></div>
                                        <div class="project-progress-percent">
                                            {{ $kware_report->sum('pdp') }}%</div>
                                    </div>
                                    <div class="progress progress-pill progress-md bg-light">
                                        <div class="progress-bar" data-progress="{{ $kware_report->sum('pdp') }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="project-progress">
                                    <div class="project-progress-details">
                                        <div class="project-progress-task"><em
                                                class="icon ni ni-check-round-cut"></em><span>
                                                LP ---- {{ $kware_report->sum('lp') }} Votes</span></div>
                                        <div class="project-progress-percent">
                                            {{ $kware_report->sum('lp') }}%</div>
                                    </div>
                                    <div class="progress progress-pill progress-md bg-light">
                                        <div class="progress-bar" data-progress="{{ $kware_report->sum('lp') }}"></div>
                                    </div>
                                </div>
                                <div class="project-progress">
                                    <div class="project-progress-details">
                                        <div class="project-progress-task"><em
                                                class="icon ni ni-check-round-cut"></em><span>
                                                OTHERS ---- {{ $kware_report->sum('others') }} Votes </span></div>
                                        <div class="project-progress-percent">
                                            {{ $kware_report->sum('others') }}%</div>
                                    </div>
                                    <div class="progress progress-pill progress-md bg-light">
                                        <div class="progress-bar" data-progress="{{ $kware_report->sum('others') }}">
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4 col-xxl-3">
                    <div class="card h-100">
                        <div class="card-inner">
                            <div class="project">
                                <div class="project-head"><a href="apps-kanban.html" class="project-title">
                                        <div class="user-avatar sq bg-warning">
                                            <span>WR</span>
                                        </div>
                                        <div class="project-info">
                                            <h6 class="title">WURNO/RABAH
                                            </h6><span class="sub-text">House of Rep</span>
                                        </div>
                                    </a>

                                </div>

                                <div class="project-progress">
                                    <div class="project-progress-details">
                                        <div class="project-progress-task"><em
                                                class="icon ni ni-check-round-cut"></em><span>
                                                APC ---- {{ $wurno_report->sum('apc') }} Votes</span></div>
                                        <div class="project-progress-percent">
                                            {{ $wurno_report->sum('apc') }}%</div>
                                    </div>
                                    <div class="progress progress-pill progress-md bg-light">
                                        <div class="progress-bar" data-progress="{{ $wurno_report->sum('apc') }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="project-progress">
                                    <div class="project-progress-details">
                                        <div class="project-progress-task"><em
                                                class="icon ni ni-check-round-cut"></em><span>
                                                PDP ---- {{ $wurno_report->sum('pdp') }} Votes</span></div>
                                        <div class="project-progress-percent">
                                            {{ $wurno_report->sum('pdp') }}%</div>
                                    </div>
                                    <div class="progress progress-pill progress-md bg-light">
                                        <div class="progress-bar" data-progress="{{ $wurno_report->sum('pdp') }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="project-progress">
                                    <div class="project-progress-details">
                                        <div class="project-progress-task"><em
                                                class="icon ni ni-check-round-cut"></em><span>
                                                LP ---- {{ $wurno_report->sum('lp') }} Votes</span></div>
                                        <div class="project-progress-percent">
                                            {{ $wurno_report->sum('lp') }}%</div>
                                    </div>
                                    <div class="progress progress-pill progress-md bg-light">
                                        <div class="progress-bar" data-progress="{{ $wurno_report->sum('lp') }}"></div>
                                    </div>
                                </div>
                                <div class="project-progress">
                                    <div class="project-progress-details">
                                        <div class="project-progress-task"><em
                                                class="icon ni ni-check-round-cut"></em><span>
                                                OTHERS ---- {{ $wurno_report->sum('others') }} Votes </span></div>
                                        <div class="project-progress-percent">
                                            {{ $wurno_report->sum('others') }}%</div>
                                    </div>
                                    <div class="progress progress-pill progress-md bg-light">
                                        <div class="progress-bar" data-progress="{{ $wurno_report->sum('others') }}">
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4 col-xxl-3">
                    <div class="card h-100">
                        <div class="card-inner">
                            <div class="project">
                                <div class="project-head"><a href="apps-kanban.html" class="project-title">
                                        <div class="user-avatar sq bg-warning">
                                            <span>IS</span>
                                        </div>
                                        <div class="project-info">
                                            <h6 class="title">ISAH / SABON BIRNI
                                            </h6><span class="sub-text">House of Rep</span>
                                        </div>
                                    </a>

                                </div>

                                <div class="project-progress">
                                    <div class="project-progress-details">
                                        <div class="project-progress-task"><em
                                                class="icon ni ni-check-round-cut"></em><span>
                                                APC ---- {{ $isah_report->sum('apc') }} Votes</span></div>
                                        <div class="project-progress-percent">
                                            {{ $isah_report->sum('apc') }}%</div>
                                    </div>
                                    <div class="progress progress-pill progress-md bg-light">
                                        <div class="progress-bar" data-progress="{{ $isah_report->sum('apc') }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="project-progress">
                                    <div class="project-progress-details">
                                        <div class="project-progress-task"><em
                                                class="icon ni ni-check-round-cut"></em><span>
                                                PDP ---- {{ $isah_report->sum('pdp') }} Votes</span></div>
                                        <div class="project-progress-percent">
                                            {{ $isah_report->sum('pdp') }}%</div>
                                    </div>
                                    <div class="progress progress-pill progress-md bg-light">
                                        <div class="progress-bar" data-progress="{{ $isah_report->sum('pdp') }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="project-progress">
                                    <div class="project-progress-details">
                                        <div class="project-progress-task"><em
                                                class="icon ni ni-check-round-cut"></em><span>
                                                LP ---- {{ $isah_report->sum('lp') }} Votes</span></div>
                                        <div class="project-progress-percent">
                                            {{ $isah_report->sum('lp') }}%</div>
                                    </div>
                                    <div class="progress progress-pill progress-md bg-light">
                                        <div class="progress-bar" data-progress="{{ $isah_report->sum('lp') }}"></div>
                                    </div>
                                </div>
                                <div class="project-progress">
                                    <div class="project-progress-details">
                                        <div class="project-progress-task"><em
                                                class="icon ni ni-check-round-cut"></em><span>
                                                OTHERS ---- {{ $isah_report->sum('others') }} Votes </span></div>
                                        <div class="project-progress-percent">
                                            {{ $isah_report->sum('others') }}%</div>
                                    </div>
                                    <div class="progress progress-pill progress-md bg-light">
                                        <div class="progress-bar" data-progress="{{ $isah_report->sum('others') }}">
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4 col-xxl-3">
                    <div class="card h-100">
                        <div class="card-inner">
                            <div class="project">
                                <div class="project-head"><a href="apps-kanban.html" class="project-title">
                                        <div class="user-avatar sq bg-warning">
                                            <span>KT</span>
                                        </div>
                                        <div class="project-info">
                                            <h6 class="title">KEBBE / TAMBUWAL
                                            </h6><span class="sub-text">House of Rep</span>
                                        </div>
                                    </a>

                                </div>

                                <div class="project-progress">
                                    <div class="project-progress-details">
                                        <div class="project-progress-task"><em
                                                class="icon ni ni-check-round-cut"></em><span>
                                                APC ---- {{ $kebbe_report->sum('apc') }} Votes</span></div>
                                        <div class="project-progress-percent">
                                            {{ $kebbe_report->sum('apc') }}%</div>
                                    </div>
                                    <div class="progress progress-pill progress-md bg-light">
                                        <div class="progress-bar" data-progress="{{ $kebbe_report->sum('apc') }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="project-progress">
                                    <div class="project-progress-details">
                                        <div class="project-progress-task"><em
                                                class="icon ni ni-check-round-cut"></em><span>
                                                PDP ---- {{ $kebbe_report->sum('pdp') }} Votes</span></div>
                                        <div class="project-progress-percent">
                                            {{ $kebbe_report->sum('pdp') }}%</div>
                                    </div>
                                    <div class="progress progress-pill progress-md bg-light">
                                        <div class="progress-bar" data-progress="{{ $kebbe_report->sum('pdp') }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="project-progress">
                                    <div class="project-progress-details">
                                        <div class="project-progress-task"><em
                                                class="icon ni ni-check-round-cut"></em><span>
                                                LP ---- {{ $kebbe_report->sum('lp') }} Votes</span></div>
                                        <div class="project-progress-percent">
                                            {{ $kebbe_report->sum('lp') }}%</div>
                                    </div>
                                    <div class="progress progress-pill progress-md bg-light">
                                        <div class="progress-bar" data-progress="{{ $kebbe_report->sum('lp') }}"></div>
                                    </div>
                                </div>
                                <div class="project-progress">
                                    <div class="project-progress-details">
                                        <div class="project-progress-task"><em
                                                class="icon ni ni-check-round-cut"></em><span>
                                                OTHERS ---- {{ $kebbe_report->sum('others') }} Votes </span></div>
                                        <div class="project-progress-percent">
                                            {{ $kebbe_report->sum('others') }}%</div>
                                    </div>
                                    <div class="progress progress-pill progress-md bg-light">
                                        <div class="progress-bar" data-progress="{{ $kebbe_report->sum('others') }}">
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4 col-xxl-3">
                    <div class="card h-100">
                        <div class="card-inner">
                            <div class="project">
                                <div class="project-head"><a href="apps-kanban.html" class="project-title">
                                        <div class="user-avatar sq bg-warning">
                                            <span>SS</span>
                                        </div>
                                        <div class="project-info">
                                            <h6 class="title">S.NORTH/ S.SOUTH
                                            </h6><span class="sub-text">House of Rep</span>
                                        </div>
                                    </a>

                                </div>

                                <div class="project-progress">
                                    <div class="project-progress-details">
                                        <div class="project-progress-task"><em
                                                class="icon ni ni-check-round-cut"></em><span>
                                                APC ---- {{ $snorth_report->sum('apc') }} Votes</span></div>
                                        <div class="project-progress-percent">
                                            {{ $snorth_report->sum('apc') }}%</div>
                                    </div>
                                    <div class="progress progress-pill progress-md bg-light">
                                        <div class="progress-bar" data-progress="{{ $snorth_report->sum('apc') }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="project-progress">
                                    <div class="project-progress-details">
                                        <div class="project-progress-task"><em
                                                class="icon ni ni-check-round-cut"></em><span>
                                                PDP ---- {{ $snorth_report->sum('pdp') }} Votes</span></div>
                                        <div class="project-progress-percent">
                                            {{ $snorth_report->sum('pdp') }}%</div>
                                    </div>
                                    <div class="progress progress-pill progress-md bg-light">
                                        <div class="progress-bar" data-progress="{{ $snorth_report->sum('pdp') }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="project-progress">
                                    <div class="project-progress-details">
                                        <div class="project-progress-task"><em
                                                class="icon ni ni-check-round-cut"></em><span>
                                                LP ---- {{ $snorth_report->sum('lp') }} Votes</span></div>
                                        <div class="project-progress-percent">
                                            {{ $snorth_report->sum('lp') }}%</div>
                                    </div>
                                    <div class="progress progress-pill progress-md bg-light">
                                        <div class="progress-bar" data-progress="{{ $snorth_report->sum('lp') }}"></div>
                                    </div>
                                </div>
                                <div class="project-progress">
                                    <div class="project-progress-details">
                                        <div class="project-progress-task"><em
                                                class="icon ni ni-check-round-cut"></em><span>
                                                OTHERS ---- {{ $snorth_report->sum('others') }} Votes </span></div>
                                        <div class="project-progress-percent">
                                            {{ $snorth_report->sum('others') }}%</div>
                                    </div>
                                    <div class="progress progress-pill progress-md bg-light">
                                        <div class="progress-bar" data-progress="{{ $snorth_report->sum('others') }}">
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4 col-xxl-3">
                    <div class="card h-100">
                        <div class="card-inner">
                            <div class="project">
                                <div class="project-head"><a href="apps-kanban.html" class="project-title">
                                        <div class="user-avatar sq bg-warning">
                                            <span>TG</span>
                                        </div>
                                        <div class="project-info">
                                            <h6 class="title">TANGAZA/GUDU
                                            </h6><span class="sub-text">House of Rep</span>
                                        </div>
                                    </a>

                                </div>

                                <div class="project-progress">
                                    <div class="project-progress-details">
                                        <div class="project-progress-task"><em
                                                class="icon ni ni-check-round-cut"></em><span>
                                                APC ---- {{ $tangaza_report->sum('apc') }} Votes</span></div>
                                        <div class="project-progress-percent">
                                            {{ $tangaza_report->sum('apc') }}%</div>
                                    </div>
                                    <div class="progress progress-pill progress-md bg-light">
                                        <div class="progress-bar" data-progress="{{ $tangaza_report->sum('apc') }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="project-progress">
                                    <div class="project-progress-details">
                                        <div class="project-progress-task"><em
                                                class="icon ni ni-check-round-cut"></em><span>
                                                PDP ---- {{ $tangaza_report->sum('pdp') }} Votes</span></div>
                                        <div class="project-progress-percent">
                                            {{ $tangaza_report->sum('pdp') }}%</div>
                                    </div>
                                    <div class="progress progress-pill progress-md bg-light">
                                        <div class="progress-bar" data-progress="{{ $tangaza_report->sum('pdp') }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="project-progress">
                                    <div class="project-progress-details">
                                        <div class="project-progress-task"><em
                                                class="icon ni ni-check-round-cut"></em><span>
                                                LP ---- {{ $tangaza_report->sum('lp') }} Votes</span></div>
                                        <div class="project-progress-percent">
                                            {{ $tangaza_report->sum('lp') }}%</div>
                                    </div>
                                    <div class="progress progress-pill progress-md bg-light">
                                        <div class="progress-bar" data-progress="{{ $tangaza_report->sum('lp') }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="project-progress">
                                    <div class="project-progress-details">
                                        <div class="project-progress-task"><em
                                                class="icon ni ni-check-round-cut"></em><span>
                                                OTHERS ---- {{ $tangaza_report->sum('others') }} Votes </span></div>
                                        <div class="project-progress-percent">
                                            {{ $tangaza_report->sum('others') }}%</div>
                                    </div>
                                    <div class="progress progress-pill progress-md bg-light">
                                        <div class="progress-bar" data-progress="{{ $tangaza_report->sum('others') }}">
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4 col-xxl-3">
                    <div class="card h-100">
                        <div class="card-inner">
                            <div class="project">
                                <div class="project-head"><a href="apps-kanban.html" class="project-title">
                                        <div class="user-avatar sq bg-warning">
                                            <span>YS</span>
                                        </div>
                                        <div class="project-info">
                                            <h6 class="title">YABO/SHAGARI
                                            </h6><span class="sub-text">House of Rep</span>
                                        </div>
                                    </a>

                                </div>

                                <div class="project-progress">
                                    <div class="project-progress-details">
                                        <div class="project-progress-task"><em
                                                class="icon ni ni-check-round-cut"></em><span>
                                                APC ---- {{ $tangaza_report->sum('apc') }} Votes</span></div>
                                        <div class="project-progress-percent">
                                            {{ $tangaza_report->sum('apc') }}%</div>
                                    </div>
                                    <div class="progress progress-pill progress-md bg-light">
                                        <div class="progress-bar" data-progress="{{ $tangaza_report->sum('apc') }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="project-progress">
                                    <div class="project-progress-details">
                                        <div class="project-progress-task"><em
                                                class="icon ni ni-check-round-cut"></em><span>
                                                PDP ---- {{ $tangaza_report->sum('pdp') }} Votes</span></div>
                                        <div class="project-progress-percent">
                                            {{ $tangaza_report->sum('pdp') }}%</div>
                                    </div>
                                    <div class="progress progress-pill progress-md bg-light">
                                        <div class="progress-bar" data-progress="{{ $tangaza_report->sum('pdp') }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="project-progress">
                                    <div class="project-progress-details">
                                        <div class="project-progress-task"><em
                                                class="icon ni ni-check-round-cut"></em><span>
                                                LP ---- {{ $tangaza_report->sum('lp') }} Votes</span></div>
                                        <div class="project-progress-percent">
                                            {{ $tangaza_report->sum('lp') }}%</div>
                                    </div>
                                    <div class="progress progress-pill progress-md bg-light">
                                        <div class="progress-bar" data-progress="{{ $tangaza_report->sum('lp') }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="project-progress">
                                    <div class="project-progress-details">
                                        <div class="project-progress-task"><em
                                                class="icon ni ni-check-round-cut"></em><span>
                                                OTHERS ---- {{ $tangaza_report->sum('others') }} Votes </span></div>
                                        <div class="project-progress-percent">
                                            {{ $tangaza_report->sum('others') }}%</div>
                                    </div>
                                    <div class="progress progress-pill progress-md bg-light">
                                        <div class="progress-bar" data-progress="{{ $tangaza_report->sum('others') }}">
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('script')
    <script src="{{ asset('assets/js/bundle0226.js?ver=3.1.2') }}"></script>
    <script src="{{ asset('assets/js/scripts0226.js?ver=3.1.2') }}"></script>
    <script src="{{ asset('assets/js/demo-settings0226.js?ver=3.1.2') }}"></script>
@endpush


{{-- <!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>

<body>
    <style>

    </style>

    <div class="container">
        <h2 style="font-size:30px; font-weight:bolder; color: green; text-align:center;">Federal House of Represenatative
            Result Display</h2>
        <h2 style="font-size:25px; font-weight:bolder; color: red; text-align:center;">Sokoto State</h2>
    </div>

    <div class="container"><a style="margin-below:40px;" href="#" class="btn btn-success btn-sm" role="button">Main
            Page</a>
        <div class="row">
            <div class="col-4">
                <div class="card border-primary mb-4">
                    <div class="card-body ">
                        <h5 class="card-title text-success">BINJI / SILAME</h5>

                        <table class="table table-hover ">
                            <tbody>
                                <tr>
                                    <td style="font-weight:bold; font-size: 15px;">APC</td>
                                    <td style="font-weight:bold; font-size: 15px; color:red;">
                                        {{ $binji_report->sum('apc') }}
                                    </td>
                                </tr>
                                <tr>
                                    <td style="font-weight:bold; font-size: 15px;">PDP</td>
                                    <td style="font-weight:bolder; font-size: 15px; color:blue;">
                                        {{ $binji_report->sum('pdp') }}
                                    </td>
                                </tr>
                                <tr>
                                    <td style="font-weight:bold; font-size: 15px;">OTHERS</td>
                                    <td style="font-weight:bold; font-size: 15px; color:black;">
                                        @php
                                            $total = $binji_report->sum('nnpp') + $binji_report->sum('lp') + $binji_report->sum('others');
                                            echo $total;
                                        @endphp
                                    </td>
                                </tr>
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card border-secondary mb-4">
                    <div class="card-body text-secondary">
                        <h5 class="card-title text-success">DANGE / BODINGA /TURETA</h5>

                        <table class="table table-hover ">
                            <tbody>

                                <tr>
                                    <td style="font-weight:bold; font-size: 15px;">APC</td>
                                    <td style="font-weight:bold; font-size: 15px; color:red;">
                                        {{ $dange_report->sum('apc') }}
                                    </td>
                                </tr>
                                <tr>
                                    <td style="font-weight:bold; font-size: 15px;">PDP</td>
                                    <td style="font-weight:bolder; font-size: 15px; color:blue;">
                                        {{ $dange_report->sum('pdp') }}
                                    </td>
                                </tr>
                                <tr>
                                    <td style="font-weight:bold; font-size: 15px;">OTHERS</td>
                                    <td style="font-weight:bold; font-size: 15px; color:black;">
                                        @php
                                            $total = $dange_report->sum('nnpp') + $dange_report->sum('lp') + $dange_report->sum('others');
                                            echo $total;
                                        @endphp
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="col-4">
                <div class="card border-success mb-4">
                    <div class="card-body text-success">

                        <h5 class="card-title text-success">GORONYO / GADA</h5>

                        <table class="table table-hover ">
                            <tbody>
                                <tr>
                                    <td style="font-weight:bold; font-size: 15px;">APC</td>
                                    <td style="font-weight:bold; font-size: 15px; color:red;">
                                        {{ $goronyo_report->sum('apc') }}
                                    </td>
                                </tr>
                                <tr>
                                    <td style="font-weight:bold; font-size: 15px;">PDP</td>
                                    <td style="font-weight:bolder; font-size: 15px; color:blue;">
                                        {{ $goronyo_report->sum('pdp') }}
                                    </td>
                                </tr>
                                <tr>
                                    <td style="font-weight:bold; font-size: 15px;">OTHERS</td>
                                    <td style="font-weight:bold; font-size: 15px; color:black;">
                                        @php
                                            $total = $goronyo_report->sum('nnpp') + $goronyo_report->sum('lp') + $goronyo_report->sum('others');
                                            echo $total;
                                        @endphp
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>

        </DIV>
        <div class="row">
            <div class="col-4">
                <div class="card border-primary mb-4">
                    <div class="card-body text-primary">
                        <h5 class="card-title text-success">ILLELA / GWADABAWA</h5>

                        <table class="table table-hover ">
                            <tbody>
                                <tr>
                                    <td style="font-weight:bold; font-size: 15px;">APC</td>
                                    <td style="font-weight:bold; font-size: 15px; color:red;">
                                        {{ $illela_report->sum('apc') }}
                                    </td>
                                </tr>
                                <tr>
                                    <td style="font-weight:bold; font-size: 15px;">PDP</td>
                                    <td style="font-weight:bolder; font-size: 15px; color:blue;">
                                        {{ $illela_report->sum('pdp') }}
                                    </td>
                                </tr>
                                <tr>
                                    <td style="font-weight:bold; font-size: 15px;">OTHERS</td>
                                    <td style="font-weight:bold; font-size: 15px; color:black;">
                                        @php
                                            $total = $illela_report->sum('nnpp') + $illela_report->sum('lp') + $illela_report->sum('others');
                                            echo $total;
                                        @endphp
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card border-secondary mb-4">
                    <div class="card-body text-secondary">
                        <h5 class="card-title text-success">ISAH / SABON BIRNI</h5>

                        <table class="table table-hover ">
                            <tbody>
                                <tr>
                                    <td style="font-weight:bold; font-size: 15px;">APC</td>
                                    <td style="font-weight:bold; font-size: 15px; color:red;">
                                        {{ $isah_report->sum('apc') }}
                                    </td>
                                </tr>
                                <tr>
                                    <td style="font-weight:bold; font-size: 15px;">PDP</td>
                                    <td style="font-weight:bolder; font-size: 15px; color:blue;">
                                        {{ $isah_report->sum('pdp') }}
                                    </td>
                                </tr>
                                <tr>
                                    <td style="font-weight:bold; font-size: 15px;">OTHERS</td>
                                    <td style="font-weight:bold; font-size: 15px; color:black;">
                                        @php
                                            $total = $isah_report->sum('nnpp') + $isah_report->sum('lp') + $isah_report->sum('others');
                                            echo $total;
                                        @endphp
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card border-success mb-4">
                    <div class="card-body text-success">
                        <h5 class="card-title text-success">KEBBE / TAMBUWAL</h5>

                        <table class="table table-hover ">
                            <tbody>
                                <tr>
                                    <td style="font-weight:bold; font-size: 15px;">APC</td>
                                    <td style="font-weight:bold; font-size: 15px; color:red;">
                                        {{ $kebbe_report->sum('apc') }}
                                    </td>
                                </tr>
                                <tr>
                                    <td style="font-weight:bold; font-size: 15px;">PDP</td>
                                    <td style="font-weight:bolder; font-size: 15px; color:blue;">
                                        {{ $kebbe_report->sum('pdp') }}
                                    </td>
                                </tr>
                                <tr>
                                    <td style="font-weight:bold; font-size: 15px;">OTHERS</td>
                                    <td style="font-weight:bold; font-size: 15px; color:black;">
                                        @php
                                            $total = $kebbe_report->sum('nnpp') + $kebbe_report->sum('lp') + $kebbe_report->sum('others');
                                            echo $total;
                                        @endphp
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>


        </div>
        <div class="row">
            <div class="col-4">
                <div class="card border-primary mb-4">
                    <div class="card-body text-primary">
                        <h5 class="card-title text-success">KWARE / WAMAKKO</h5>

                        <table class="table table-hover ">
                            <tbody>
                                <tr>
                                    <td style="font-weight:bold; font-size: 15px;">APC</td>
                                    <td style="font-weight:bold; font-size: 15px; color:red;">
                                        {{ $kware_report->sum('apc') }}
                                    </td>
                                </tr>
                                <tr>
                                    <td style="font-weight:bold; font-size: 15px;">PDP</td>
                                    <td style="font-weight:bolder; font-size: 15px; color:blue;">
                                        {{ $kware_report->sum('pdp') }}
                                    </td>
                                </tr>
                                <tr>
                                    <td style="font-weight:bold; font-size: 15px;">OTHERS</td>
                                    <td style="font-weight:bold; font-size: 15px; color:black;">
                                        @php
                                            $total = $kware_report->sum('nnpp') + $kware_report->sum('lp') + $kware_report->sum('others');
                                            echo $total;
                                        @endphp
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card border-secondary mb-4">
                    <div class="card-body text-secondary">
                        <h5 class="card-title text-success">S.NORTH/ S.SOUTH</h5>

                        <table class="table table-hover ">
                            <tbody>
                                <tr>
                                    <td style="font-weight:bold; font-size: 15px;">APC</td>
                                    <td style="font-weight:bold; font-size: 15px; color:red;">
                                        {{ $snorth_report->sum('apc') }}
                                    </td>
                                </tr>
                                <tr>
                                    <td style="font-weight:bold; font-size: 15px;">PDP</td>
                                    <td style="font-weight:bolder; font-size: 15px; color:blue;">
                                        {{ $snorth_report->sum('pdp') }}
                                    </td>
                                </tr>
                                <tr>
                                    <td style="font-weight:bold; font-size: 15px;">OTHERS</td>
                                    <td style="font-weight:bold; font-size: 15px; color:black;">
                                        @php
                                            $total = $snorth_report->sum('nnpp') + $snorth_report->sum('lp') + $snorth_report->sum('others');
                                            echo $total;
                                        @endphp
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card border-success mb-4">
                    <div class="card-body text-success">
                        <h5 class="card-title text-success">TANGAZA/ GUDU</h5>

                        <table class="table table-hover ">
                            <tbody>
                                <tr>
                                    <td style="font-weight:bold; font-size: 15px;">APC</td>
                                    <td style="font-weight:bold; font-size: 15px; color:red;">
                                        {{ $tangaza_report->sum('apc') }}
                                    </td>
                                </tr>
                                <tr>
                                    <td style="font-weight:bold; font-size: 15px;">PDP</td>
                                    <td style="font-weight:bolder; font-size: 15px; color:blue;">
                                        {{ $tangaza_report->sum('pdp') }}
                                    </td>
                                </tr>
                                <tr>
                                    <td style="font-weight:bold; font-size: 15px;">OTHERS</td>
                                    <td style="font-weight:bold; font-size: 15px; color:black;">
                                        @php
                                            $total = $tangaza_report->sum('nnpp') + $tangaza_report->sum('lp') + $tangaza_report->sum('others');
                                            echo $total;
                                        @endphp
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-4">
                <div class="card border-primary mb-4">
                    <div class="card-body text-primary">
                        <h5 class="card-title text-success">WURNO / RABAH</h5>

                        <table class="table table-hover ">
                            <tbody>
                                <tr>
                                    <td style="font-weight:bold; font-size: 15px;">APC</td>
                                    <td style="font-weight:bold; font-size: 15px; color:red;">
                                        {{ $wurno_report->sum('apc') }}
                                    </td>
                                </tr>
                                <tr>
                                    <td style="font-weight:bold; font-size: 15px;">PDP</td>
                                    <td style="font-weight:bolder; font-size: 15px; color:blue;">
                                        {{ $wurno_report->sum('pdp') }}
                                    </td>
                                </tr>
                                <tr>
                                    <td style="font-weight:bold; font-size: 15px;">OTHERS</td>
                                    <td style="font-weight:bold; font-size: 15px; color:black;">
                                        @php
                                            $total = $wurno_report->sum('nnpp') + $wurno_report->sum('lp') + $wurno_report->sum('others');
                                            echo $total;
                                        @endphp
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card border-secondary mb-4">
                    <div class="card-body text-secondary">
                        <h5 class="card-title text-success">YABO / SHAGARI</h5>

                        <table class="table table-hover ">
                            <tbody>
                                <tr>
                                    <td style="font-weight:bold; font-size: 15px;">APC</td>
                                    <td style="font-weight:bold; font-size: 15px; color:red;">
                                        {{ $yabo_report->sum('apc') }}
                                    </td>
                                </tr>
                                <tr>
                                    <td style="font-weight:bold; font-size: 15px;">PDP</td>
                                    <td style="font-weight:bolder; font-size: 15px; color:blue;">
                                        {{ $yabo_report->sum('pdp') }}
                                    </td>
                                </tr>
                                <tr>
                                    <td style="font-weight:bold; font-size: 15px;">OTHERS</td>
                                    <td style="font-weight:bold; font-size: 15px; color:black;">
                                        @php
                                            $total = $yabo_report->sum('nnpp') + $yabo_report->sum('lp') + $yabo_report->sum('others');
                                            echo $total;
                                        @endphp
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card border-secondary mb-4">
                    <div class="card-body text-secondary"></div>
                </div>
            </div>
        </div>

    </div>

</body>

</html> --}}
