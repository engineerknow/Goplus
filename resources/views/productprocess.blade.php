@include('layout.headerold')

<div class="disabled-filter"></div>
<div class="section-body ">

    <div id="section-header" class="sps sps--abv">

        <link rel="stylesheet" href="{{ asset('/css/style_c.css') }}">

        @include('layout.header_desktop')
        @include('layout.header_mobile')
        @include('layout.slide')
        <br>
        <div style="position: relative; background-color:transparent; ">
            <a id="customize-13594" class="targethash"
                style="display: block; position: relative; visibility: hidden; top: -45px;"></a>
            <div class="container">
            </div>
        </div>
        <div class="container my-5">
            <div class="container">
                <div class="container">
                    @if ($process)
                        
                        <div>
                            Description: {{ $process->description }}
                        </div>
                        <div>
                            {!! $process->body !!}
                        </div>
                    @endif
                    <hr>
                </div>

                <script type="text/javascript">
                    $(document).ready(function() {
                        $("img").addClass("img-fluid");
                    });
                </script>
            </div>
        </div>
    </div>

    <div class="header-process">
        <div class="d-flex justify-content-center">
            <div class="row">
                <div class="col-12">
                    <h2 style="color: #0f2a41;">{{ trans('message.header_process') }}</h2>
                </div>
            </div>
        </div>

    </div>

    <div id="section-content">
        <div class="container mb-5">
                <div class="row center mt-2" style="position:relative;">
                    <div class="col-6">
                        <img class="img-responsive mx-auto d-block" src="asset/consult_logo.png"
                         alt="image" title="image" style="height: 120px; height: 100px;">
                    </div>
                    <div class="col-6" >
                        <p style="text-align:left;  position: absolute;
                        top: 25%;
                        width: 100%;
                        font-size: 18px;">{{ trans('message.consult') }}</p>
                    </div>
                </div>

                <div class="row center mt-2" style="position:relative;">
                    <div class="col-6">
                        <img class="img-responsive mx-auto d-block" src="asset/searchandlearn_logo.png"
                         alt="image" title="image" style="height: 120px; height: 100px;">
                    </div>
                    <div class="col-6" >
                        <p style="text-align:left;  position: absolute;
                        top: 25%;
                        width: 100%;
                        font-size: 18px;">{{ trans('message.search_dev') }}</p>
                    </div>
                </div>

                <div class="row center mt-2" style="position:relative;">
                    <div class="col-6">
                        <img class="img-responsive mx-auto d-block" src="asset/note_logo.png"
                         alt="image" title="image" style="height: 120px; height: 100px;">
                    </div>
                    <div class="col-6" >
                        <p style="text-align:left;  position: absolute;
                        top: 25%;
                        width: 100%;
                        font-size: 18px;">{{ trans('message.register_ay') }}</p>
                    </div>
                </div>

                <div class="row center mt-2" style="position:relative;">
                    <div class="col-6">
                        <img class="img-responsive mx-auto d-block" src="asset/design_logo.png"
                         alt="image" title="image" style="height: 120px; height: 100px;">
                    </div>
                    <div class="col-6" style="position:relative;">
                        <p style="text-align:left;  position: absolute;
                        top: 25%;
                        width: 100%;
                        font-size: 18px;">{{ trans('message.packaging_design') }}</p>
                    </div>
                </div>

                <div class="row center mt-2" style="position:relative;">
                    <div class="col-6">
                        <img class="img-responsive mx-auto d-block" src="asset/processinput.png"
                         alt="image" title="image" style="height: 120px; height: 100px;">
                    </div>
                    <div class="col-6" >
                        <p style="text-align:left;  position: absolute;
                        top: 25%;
                        width: 100%;
                        font-size: 18px;">{{ trans('message.production_packing') }}</p>
                    </div>
                </div>

                <div class="row center mt-2" style="position:relative;">
                    <div class="col-6">
                        <img class="img-responsive mx-auto d-block" src="asset/box_logo.png"
                         alt="image" title="image" style="height: 120px; height: 100px;">
                    </div>
                    <div class="col-6" >
                        <p style="text-align:left;  position: absolute;
                        top: 25%;
                        width: 100%;
                        font-size: 18px;">{{ trans('message.deliver_customers') }}</p>
                    </div>
                </div>
        </div>
    </div>


    @include('layout.footer_about')


    </body>

    </html>
