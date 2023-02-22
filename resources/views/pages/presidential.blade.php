@extends('layout.master', [($bodyClass = 'nk-body bg-lighter npc-default has-sidebar')])
@section('pageName')
    Presidential Polling
@endsection

@section('content')
    <div class="nk-content-body">
        <div class="components-preview wide-md mx-auto">
            <div class="nk-block-head nk-block-head-lg wide-sm">
                <div class="nk-block-head-content">
                </div>
            </div>
            <div class="nk-block nk-block-lg">

                <div class="row g-gs">
                    <div class="col-lg-2"></div>
                    <div class="col-lg-8">
                        <div class="card h-100">
                            <div class="card-inner">
                                <div class="card-head">
                                    <h5 class="card-title">Presidential Polling</h5>
                                </div>
                                <form action="{{ route('president.store') }}" method="post">
                                    @csrf
                                    @method('post')
                                    <input type="hidden" name="user" value="{{ session('loginUser') }}">
                                    <div class="form-group"><label class="form-label" for="apc">APC</label>
                                        <div class="form-control-wrap"><input type="text" class="form-control"
                                                name="apc" id="apc"></div>
                                    </div>
                                    <div class="form-group"><label class="form-label" for="pdp">PDP</label>
                                        <div class="form-control-wrap"><input type="text" class="form-control"
                                                name="pdp" id="pdp"></div>
                                    </div>
                                    <div class="form-group"><label class="form-label" for="lp">LP</label>
                                        <div class="form-control-wrap"><input type="text" name="lp"
                                                class="form-control" id="lp"></div>
                                    </div>

                                    <div class="form-group"><label class="form-label" for="nnpp">NNPP</label>
                                        <div class="form-control-wrap"><input type="text" name="nnpp"
                                                class="form-control" id="nnpp"></div>
                                    </div>

                                    <div class="form-group"><label class="form-label" for="others">Others</label>
                                        <div class="form-control-wrap"><input type="text" name="others"
                                                class="form-control" id="others"></div>
                                    </div>

                                    <div class="form-group"><button type="submit" class="btn btn-lg btn-primary">Upload
                                            Result</button></div>
                                </form>
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
