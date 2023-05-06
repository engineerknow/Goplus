@include('layout.headerold')

<div class="disabled-filter"></div>
<div class="section-body ">

    <div id="section-header" class="sps sps--abv">

        <link rel="stylesheet" href="css/style_c.css">
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
                    <h2 class="text-center main-font">{{ trans('message.product_title') }}</h2>
                    <div class="container mt-5">
                        <div style="position: relative; background-color:transparent; ">
                            <a id="customize-13592" class="targethash"
                                style="display: block; position: relative; visibility: hidden; top: -45px;"></a>
                            <div class="container-fluid">

                                <div style="padding-top: 40px; padding-bottom: 40px;">
                                    <div>
                                        {{-- <style>
                                            #newcustomize19_13592 .textLayout_6681 {
                                                top: 0;
                                                bottom: 0;
                                                left: 0;
                                                right: 0;
                                                height: 100%;
                                                width: 100%;
                                                opacity: 1;
                                                transition: .3s ease;
                                                background: transparent;
                                                position: absolute;
                                            }

                                            #newcustomize19_13592 .textLayout_6681 .captionText {
                                                position: absolute;
                                                top: 50%;
                                                left: 50%;
                                                -webkit-transform: translate(-50%, -50%);
                                                -ms-transform: translate(-50%, -50%);
                                                transform: translate(-50%, -50%);
                                                /*text-align: center;*/
                                                width: 100%;
                                                /* display: inline-table;*/
                                                cursor: default;
                                                max-width: 100%;
                                                word-wrap: break-word;
                                            }

                                            #newcustomize19_13592 a.captionLayout_6681 .captionText {
                                                cursor: pointer;
                                            }

                                            #newcustomize19_13592 .texthoverContext p {
                                                margin: 0px;
                                            }

                                            @media only screen and (max-width: 992px) {

                                                #newcustomize19_13592 .textLayout_6681 .captionText [data-font-size="60"] {
                                                    font-size: 60px !important;
                                                }

                                                #newcustomize19_13592 .captionLayout_6681 .captionText [data-font-size="60"] {
                                                    font-size: 60px !important;
                                                }

                                                #newcustomize19_13592 .textLayout_6681 .captionText [data-font-size="66"] {
                                                    font-size: 60px !important;
                                                }

                                                #newcustomize19_13592 .captionLayout_6681 .captionText [data-font-size="66"] {
                                                    font-size: 60px !important;
                                                }

                                                #newcustomize19_13592 .textLayout_6681 .captionText [data-font-size="72"] {
                                                    font-size: 60px !important;
                                                }

                                                #newcustomize19_13592 .captionLayout_6681 .captionText [data-font-size="72"] {
                                                    font-size: 60px !important;
                                                }

                                                #newcustomize19_13592 .textLayout_6681 .captionText [data-font-size="80"] {
                                                    font-size: 60px !important;
                                                }

                                                #newcustomize19_13592 .captionLayout_6681 .captionText [data-font-size="80"] {
                                                    font-size: 60px !important;
                                                }

                                                #newcustomize19_13592 .textLayout_6681 .captionText [data-font-size="100"] {
                                                    font-size: 60px !important;
                                                }

                                                #newcustomize19_13592 .captionLayout_6681 .captionText [data-font-size="100"] {
                                                    font-size: 60px !important;
                                                }
                                            }

                                            #newcustomize19_13592 .imgportfolio {
                                                object-fit: cover;
                                            }

                                            #newcustomize19_13592 .captionLayout_6681 {
                                                top: 0;
                                                bottom: 0;
                                                left: 0;
                                                right: 0;
                                                height: 100%;
                                                width: 100%;
                                                opacity: 0;
                                                transition: .3s ease;
                                                position: absolute;
                                            }

                                            #newcustomize19_13592 .captionLayout_6681 .captionText {
                                                position: absolute;
                                                top: 50%;
                                                left: 50%;
                                                -webkit-transform: translate(-50%, -50%);
                                                -ms-transform: translate(-50%, -50%);
                                                transform: translate(-50%, -50%);
                                                /*text-align: center;*/
                                                width: 100%;
                                                cursor: default;
                                            }

                                            @media only screen and (min-width: 1025px) {
                                                #newcustomize19_13592 .img-interactive6681:hover .textLayout_6681 {
                                                    opacity: 0;
                                                }

                                                #newcustomize19_13592 .img-interactive6681 .imgportfolio {
                                                    transition: .5s ease;
                                                }

                                                #newcustomize19_13592 .img-interactive6681:hover .imgportfolio {
                                                    transform: scale(1.1);
                                                    -moz-transform: scale(1.1);
                                                    -webkit-transform: scale(1.1);
                                                    -o-transform: scale(1.1);
                                                }

                                                #newcustomize19_13592 .captionLayout_6681:hover {
                                                    opacity: 1;
                                                }
                                            }
                                        </style> --}}
                                       {{--  <style>
                                            @media only screen and (min-width: 1025px) {
                                                #newcustomize19_13592 .normalbar .imgportfolio {
                                                    width: 100%;
                                                    height: calc(((100vw / 3)* (2/3)) - 4px);
                                                }
                                            }

                                            @media only screen and (min-width: 993px) and (max-width: 1024px) {
                                                #newcustomize19_13592 .normalbar .imgportfolio {
                                                    width: 100%;
                                                    height: calc((100vw /3)* (2/3));
                                                }
                                            }

                                            @media only screen and (min-width: 768px) and (max-width: 992px) {
                                                #newcustomize19_13592 .normalbar .imgportfolio {
                                                    width: 100%;
                                                    height: calc((100vw)* (2/3));
                                                }
                                            }

                                            @media only screen and (max-width: 767px) {
                                                #newcustomize19_13592 .normalbar .imgportfolio {
                                                    width: 100%;
                                                    height: calc((100vw)* (2/3));
                                                }
                                            }
                                        </style> --}}
                                        <div id="newcustomize19_13592" class="row justify-content-center d-flex ">
                                            {{-- <div
                                                class="itemWithoutText col-12 col-sm-12 col-md-12 col-lg-4 p-0 normalbar box-not-overflow img-interactive6681">
                                                <div class="contentImage">
                                                    <div>
                                                        <a href="customer/ads11.jpg" target="_self">
                                                            <img style="height:100%; width:100%" class="img-responsive imgportfolio lazy"
                                                                src="customer/ads11.jpg"
                                                                data-src="customer/ads11.jpg"
                                                                alt="image" title="image">
                                                        </a>
                                                    </div>
                                                </div>

                                                <div class="textLayout_6681">
                                                    <div class="captionText p">
                                                    </div>
                                                </div>


                                                <a href="asset/image/gummy.png" target="_self"
                                                    class="captionLayout_6681">
                                                    <div class="captionText p">
                                                    </div>
                                                </a>
                                            </div>
                                            <div
                                                class="itemWithoutText col-12 col-sm-12 col-md-12 col-lg-4 p-0 normalbar box-not-overflow img-interactive6681">
                                                <div class="contentImage">
                                                    <div>
                                                        <a href="customer/ads3.jpg" target="_self">
                                                            <img style="height:100%; width:100%"  class="img-responsive imgportfolio lazy"
                                                                src="customer/ads3.jpg"
                                                                data-src="customer/ads3.jpg"
                                                                alt="image" title="image">
                                                        </a>
                                                    </div>
                                                </div>

                                                <div class="textLayout_6681">
                                                    <div class="captionText p">
                                                    </div>
                                                </div>


                                                <a href="https://www.goplushealthy.com/category/2434/caviar" target="_self"
                                                    class="captionLayout_6681">
                                                    <div class="captionText p">
                                                    </div>
                                                </a>
                                            </div>
                                            <div
                                                class="itemWithoutText col-12 col-sm-12 col-md-12 col-lg-4 p-0 normalbar box-not-overflow img-interactive6681">
                                                <div class="contentImage">
                                                    <div>
                                                        <a href="customer/ads12.jpg" target="_self">
                                                            <img style="height:100%; width:100%"  class="img-responsive imgportfolio lazy"
                                                                src="customer/ads12.jpg"
                                                                data-src="customer/ads12.jpg"
                                                                alt="image" title="image">
                                                        </a>
                                                    </div>
                                                </div>

                                                <div class="textLayout_6681">
                                                    <div class="captionText p">
                                                    </div>
                                                </div>


                                                <a href="https://www.goplushealthy.com/category/2435/sashimi" target="_self"
                                                    class="captionLayout_6681">
                                                    <div class="captionText p">
                                                    </div>
                                                </a>
                                            </div> --}}
                                            <div
                                                class="itemWithoutText col-12 col-sm-12 col-md-12 col-lg-4 p-0 normalbar box-not-overflow img-interactive6681">
                                                <div class="contentImage">
                                                    <div>
                                                        <a href="customer/1gummy.png" target="_self">
                                                            <img style="height:100%; width:100%" class="img-responsive imgportfolio lazy"
                                                                src="customer/1gummy.png"
                                                                data-src="customer/1gummy.png"
                                                                alt="image" title="image">
                                                        </a>
                                                    </div>
                                                </div>

                                                <div class="textLayout_6681">
                                                    <div class="captionText p">
                                                    </div>
                                                </div>


                                                <a href="asset/image/gummy.png" target="_self"
                                                    class="captionLayout_6681">
                                                    <div class="captionText p">
                                                    </div>
                                                </a>
                                            </div>
                                            <div
                                                class="itemWithoutText col-12 col-sm-12 col-md-12 col-lg-4 p-0 normalbar box-not-overflow img-interactive6681">
                                                <div class="contentImage">
                                                    <div>
                                                        <a href="customer/2powder.png" target="_self">
                                                            <img style="height:100%; width:100%"  class="img-responsive imgportfolio lazy"
                                                                src="customer/2powder.png"
                                                                data-src="customer/2powder.png"
                                                                alt="image" title="image">
                                                        </a>
                                                    </div>
                                                </div>

                                                <div class="textLayout_6681">
                                                    <div class="captionText p">
                                                    </div>
                                                </div>


                                                <a href="https://www.goplushealthy.com/category/2434/caviar" target="_self"
                                                    class="captionLayout_6681">
                                                    <div class="captionText p">
                                                    </div>
                                                </a>
                                            </div>
                                            <div
                                                class="itemWithoutText col-12 col-sm-12 col-md-12 col-lg-4 p-0 normalbar box-not-overflow img-interactive6681">
                                                <div class="contentImage">
                                                    <div>
                                                        <a href="customer/3TABLTE.png" target="_self">
                                                            <img style="height:100%; width:100%"  class="img-responsive imgportfolio lazy"
                                                                src="customer/3TABLTE.png"
                                                                data-src="customer/3TABLTE.png"
                                                                alt="image" title="image">
                                                        </a>
                                                    </div>
                                                </div>

                                                <div class="textLayout_6681">
                                                    <div class="captionText p">
                                                    </div>
                                                </div>


                                                <a href="https://www.goplushealthy.com/category/2435/sashimi" target="_self"
                                                    class="captionLayout_6681">
                                                    <div class="captionText p">
                                                    </div>
                                                </a>
                                            </div>
                                            <div
                                                class="itemWithoutText col-12 col-sm-12 col-md-12 col-lg-4 p-0 normalbar box-not-overflow img-interactive6681">
                                                <div class="contentImage">
                                                    <div>
                                                        <a href="customer/9soft gel.png" target="_self">
                                                            <img style="height:100%; width:100%"  class="img-responsive imgportfolio lazy"
                                                                src="customer/9soft gel.png"
                                                                data-src="customer/9soft gel.png"
                                                                alt="image" title="image">
                                                        </a>
                                                    </div>
                                                </div>

                                                <div class="textLayout_6681">
                                                    <div class="captionText p">
                                                    </div>
                                                </div>


                                                <a href="https://www.goplushealthy.com/category/2438/special-set-menu" target="_self"
                                                    class="captionLayout_6681">
                                                    <div class="captionText p">
                                                    </div>
                                                </a>
                                            </div>
                                            <div
                                                class="itemWithoutText col-12 col-sm-12 col-md-12 col-lg-4 p-0 normalbar box-not-overflow img-interactive6681">
                                                <div class="contentImage">
                                                    <div>
                                                        <a href="customer/4capsule.png" target="_self">
                                                            <img style="height:100%; width:100%"  class="img-responsive imgportfolio lazy"
                                                                src="customer/4capsule.png"
                                                                data-src="customer/4capsule.png"
                                                                alt="image" title="image">
                                                        </a>
                                                    </div>
                                                </div>

                                                <div class="textLayout_6681">
                                                    <div class="captionText p">
                                                    </div>
                                                </div>


                                                <a href="https://www.goplushealthy.com/category/2436/donburi" target="_self"
                                                    class="captionLayout_6681">
                                                    <div class="captionText p">
                                                    </div>
                                                </a>
                                            </div>
                                            <div
                                                class="itemWithoutText col-12 col-sm-12 col-md-12 col-lg-4 p-0 normalbar box-not-overflow img-interactive6681">
                                                <div class="contentImage">
                                                   <div>
                                                    <a href="customer/5jelly stick.png" target="_self">
                                                        <img style="height:100%; width:100%" class="img-responsive imgportfolio lazy"
                                                            src="customer/5jelly stick.png"
                                                            data-src="customer/5jelly stick.png"
                                                            alt="image" title="image">
                                                    </a>
                                                    </div>
                                                </div>

                                                <div class="textLayout_6681">
                                                    <div class="captionText p">
                                                    </div>
                                                </div>


                                                <a href="https://www.goplushealthy.com/category/2439/extra-menu" target="_self"
                                                    class="captionLayout_6681">
                                                    <div class="captionText p">
                                                    </div>
                                                </a>
                                            </div>
                                            <div
                                                class="itemWithoutText col-12 col-sm-12 col-md-12 col-lg-4 p-0 normalbar box-not-overflow img-interactive6681">
                                                <div class="contentImage">
                                                   <div>
                                                    <a href="customer/6coffee.png" target="_self">
                                                        <img style="height:100%; width:100%" class="img-responsive imgportfolio lazy"
                                                            src="customer/6coffee.png"
                                                            data-src="customer/6coffee.png"
                                                            alt="image" title="image">
                                                    </a>
                                                    </div>
                                                </div>

                                                <div class="textLayout_6681">
                                                    <div class="captionText p">
                                                    </div>
                                                </div>


                                                <a href="https://www.goplushealthy.com/category/2439/extra-menu" target="_self"
                                                    class="captionLayout_6681">
                                                    <div class="captionText p">
                                                    </div>
                                                </a>
                                            </div>
                                            <div
                                                class="itemWithoutText col-12 col-sm-12 col-md-12 col-lg-4 p-0 normalbar box-not-overflow img-interactive6681">
                                                <div class="contentImage">
                                                   <div>
                                                    <a href="customer/7herble tea.png" target="_self">
                                                        <img style="height:100%; width:100%" class="img-responsive imgportfolio lazy"
                                                            src="customer/7herble tea.png"
                                                            data-src="customer/7herble tea.png"
                                                            alt="image" title="image">
                                                    </a>
                                                    </div>
                                                </div>

                                                <div class="textLayout_6681">
                                                    <div class="captionText p">
                                                    </div>
                                                </div>


                                                <a href="https://www.goplushealthy.com/category/2439/extra-menu" target="_self"
                                                    class="captionLayout_6681">
                                                    <div class="captionText p">
                                                    </div>
                                                </a>
                                            </div>
                                            <div
                                                class="itemWithoutText col-12 col-sm-12 col-md-12 col-lg-4 p-0 normalbar box-not-overflow img-interactive6681">
                                                <div class="contentImage">
                                                   <div>
                                                    <a href="customer/8powder drink.png" target="_self">
                                                        <img style="height:100%; width:100%" class="img-responsive imgportfolio lazy"
                                                            src="customer/8powder drink.png"
                                                            data-src="customer/8powder drink.png"
                                                            alt="image" title="image">
                                                    </a>
                                                    </div>
                                                </div>

                                                <div class="textLayout_6681">
                                                    <div class="captionText p">
                                                    </div>
                                                </div>


                                                <a href="https://www.goplushealthy.com/category/2439/extra-menu" target="_self"
                                                    class="captionLayout_6681">
                                                    <div class="captionText p">
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                    </div>

                </div>

            </div>
        @include('layout.footer')


        </body>

        </html>
