@extends('layout.master', [($bodyClass = 'nk-body bg-lighter npc-default has-sidebar')])
@section('pageName')
    Senatorial Result
@endsection

@section('content')
    <div class="nk-content-body">
        <div class="components-preview wide-md mx-auto">


            <div class="nk-block nk-block-lg">
                <div class="nk-block-head">
                    <div class="nk-block-head-content">
                        <h4 class="nk-block-title">Sokoto State House of Rep Poll Data</h4>
                    </div>
                </div>
                <div class="card card-bordered card-preview">
                    <div class="card-inner">
                        <table class="datatable-init-export nowrap table" data-export-title="Export">
                            <thead>
                                <tr>
                                    <th>LGA</th>
                                    <th>Ward</th>
                                    <th>Polling Unit</th>
                                    <th>Registered Vote</th>
                                    <th>Accredited Vote</th>
                                    <th>Vote Casted</th>
                                    <th>APC</th>
                                    <th>PDP</th>
                                    <th>OTHER PARTIES</th>
                                    <th>STATUS</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($reps as $result)
                                    <tr>
                                        <td>{{ $result->lga }}</td>
                                        <td>{{ $result->ward }}</td>
                                        <td>{{ $result->pu_name }}</td>
                                        <td>{{ $result->vt_reg }}</td>
                                        <td>{{ $result->vt_acc }}</td>
                                        <td>
                                            @php
                                                $cast = $result->apc + $result->pdp + $result->nnpp + $result->lp + $result->others;
                                                echo $cast;
                                            @endphp
                                        </td>

                                        <td>{{ $result->apc }}</td>
                                        <td>{{ $result->pdp }}</td>
                                        <td>
                                            @php
                                                $others = $result->nnpp + $result->lp + $result->others;
                                                echo $others;
                                            @endphp
                                        </td>
                                        <td>
                                            @php
                                                if ($cast > $result->vt_acc) {
                                                    echo '<a href="#" class="btn btn-danger btn-sm" role="button">CHECK</a>';
                                                } else {
                                                    echo '<a href="#" class="btn btn-info btn-sm" role="button">NORMAL</a>';
                                                }
                                            @endphp

                                        </td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
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
    <script src="{{ asset('assets/js/libs/datatable-btns0226.js?ver=3.1.2') }}"></script>
@endpush
