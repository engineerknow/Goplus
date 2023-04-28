@include('layout.headerold')

<div class="disabled-filter"></div>
<div class="section-body ">

    <div id="section-header" class="sps sps--abv">

        <link rel="stylesheet" href="{{ asset('css/style_c.css') }}">
       
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
                <h2 class="text-center">{{ trans('message.Article') }}</h2>
                <hr>
                <div class="row">
                    @foreach ($article as $item)
                        <div class="col-md-6 col-12">
                            <a href="Article_detail/{{ $item->id }}">
                                <div id="myimg">
                                    <img style="width:500px; height:500px;" class="img-fluid img-thumbnail" src="{{ asset('image/tinymce/'.$item->image) }}">
                                </div>
                                <div class="text-center">
                                    <b>{{ $item->title }}</b>
                                    <p>{{ $item->description }}</p>
                                </div>
                            </a>
                            <hr>
                        </div>
                    @endforeach
                    
                </div>
                </div>
                
            </div>
            </div>
        @include('layout.footer')


        </body>

        </html>
