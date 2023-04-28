@include('layout.headerold')

<div class="disabled-filter"></div>
<div class="section-body ">

    <div id="section-header" class="sps sps--abv">

        <link rel="stylesheet" href="{{ asset('/css/style_c.css') }}">

        @include('layout.header_desktop')
        @include('layout.header_mobile')
        <img src="{{ asset('asset/image/banner/banner_1.png') }}" />
        <br>
        <div style="position: relative; background-color:transparent; ">
            <a id="customize-13594" class="targethash"
                style="display: block; position: relative; visibility: hidden; top: -45px;"></a>
            <div class="container">
            </div>
        </div>
        <div class="container my-5">
            <div class="container">
                <h2 class="text-center">news</h2>
                <div class="container mt-5">
                    @if ($news_detail)
                        <h2 class="text-center">{{ $news_detail->title }}</h2>
                        <div>
                            Description: {{ $news_detail->description }}
                        </div>
                        <div>
                            {!! $news_detail->body !!}
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
    @include('layout.footer')


    </body>

    </html>
