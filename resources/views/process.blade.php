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
                <h2 class="text-center">Article</h2>
                <div class="container mt-5">
                    @if ($process)
                        <h2 class="text-center">{{ $process->title }}</h2>
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
    
    @include('layout.footer')


    </body>

    </html>
