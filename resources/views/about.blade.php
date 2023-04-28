@include('layout.headerold')
<style>
    .navbar-text a, .navbar-text a:focus, .navbar-text a:hover {
    color: white;
}
.container ,h3,p{
    color: #6c757d;
}
</style>
<div class="disabled-filter"></div>
<div class="section-body ">

    <div id="section-header" class="sps sps--abv">

        <link rel="stylesheet" href="css/style_c.css">
        @include('layout.header_desktop')
        @include('layout.header_mobile')
        @include('layout.slide')
        <br>

        <div style="position: relative; background-color:transparent; ">
            <br>
            <div class="container mt-">
                <section id="about-us" class="about-us-section-1">
                    <!-- Start Call to Action Section -->

                    <!-- End Call to Action Section -->


                    <br>
                    
                    <!-- Start About Us Section -->
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 col-sm-12">
                                <div class="section-title text-center aos-init aos-animate" data-aos="zoom-in">
                                    <h3>{{ trans('message.about_biz') }}</h3>
                                    <p>{{ trans('message.about_bizdetail') }}</p>
                                </div>
                            </div> 
                        </div><br>
                        <div class="row">
                            <div class="col-md-6 aos-init aos-animate" data-aos="flip-up">
                                <div class="welcome-section text-center">
                                    <img src="asset/about_1.jpg" class="img-responsive" alt=".."><br>
                                    <p></p>
                                    <h4>{{ trans('message.history') }}</h4>
                                    <div class="border"></div>
                                    <p></p>
                                    <p>{{ trans('message.history_detail') }}</p>
                                    <p></p>
                                </div>
                            </div>
                            <div class="col-md-6 aos-init aos-animate" data-aos="flip-up">
                                <div class="welcome-section text-center">
                                    <img src="asset/about_2.png" class="img-responsive" alt=".."><br>
                                    <p></p>
                                    <h4>{{ trans('message.team_experiend') }}</h4>
                                    <div class="border"></div>
                                    <p></p>
                                    <p>>{{ trans('message.team_detail') }}</p>
                                    <p></p>
                                </div>
                            </div>


                        </div><!-- /.row -->
                       
                    </div><!-- /.container -->
                   
                    
                </section>
                <section>
                </section>
            </div>
            <br>
            <div class="container mt-">
                <h3 style="color:rgb(255, 182, 87)">{{ trans('message.vision_title') }}</h3>
                <p style="color: rgb(43, 43, 43)">{{ trans('message.vision_detail') }}</p>1
                <br>



                <h3 style="color:rgb(255, 182, 87)">{{ trans('message.mission_title') }}</h3>
                <ul class="mission-list" style="color: rgb(43, 43, 43)">
                    <li>{{ trans('message.mission_detail') }}</li>
                    <li>{{ trans('message.mission_detail-1') }}</li>
                    <li>{{ trans('message.mission_detail-2') }}</li>
                    <li>{{ trans('message.mission_detail-3') }}</li>
                </ul>

                <br>
                <h3 style="color:rgb(255, 182, 87)">{{ trans('message.tradition_title') }}</h3>
                <p style="color: rgb(43, 43, 43)">{{ trans('message.tradition_detail') }}</p>

                <br>
            </div>
            
            <div class="container mb-5">
                    <div class="policy-bg">
                        <img id="plicy-img" src="asset/policy-down.jpg" >
                        <div class="policy-detail">
                            <p>{{ trans('message.policy_detail') }}</p>
                        </div>
                    </div>
            </div>

            <div class="container">
                <div class="award-bg">
                    <h1>{{ trans('message.Awards_Achievement')}}</h1>
                    <div class="row center">
                        <div class="col-4 md-3">
                            <img src="award/1.jpg" height="330px"/>
                            <p>Top Customer Award in thailand 2021 | Medinutrex </p>
                        </div>
                        <div class="col-4 md-3">
                            <img src="award/2.jpg" height="330px"/>
                            <p>TOP AWARD FOR USING " ORYZA CERAMIDE" 2020 | ORYZA</p>
                        </div>
                        <div class="col-4 md-3">
                            <img src="award/3.jpg" height="330px">
                            <p>TOP AWARD FOR USING " ORYZA CERAMIDE" 2022 | ORYZA </p>
                        </div>
                    </div>

                    <div class="row center">
                        <div class="col-4 md-3">
                            <img src="award/4.jpg" height="330px"/>
                            <p>Performance Award 2022 | Pure chemicals </p>
                        </div>
                        <div class="col-4 md-3">
                            <img src="award/5.jpg" height="330px"/>
                            <p>AEC QUALITY AWARDS 2020 </p>
                        </div>
                        <div class="col-4 md-3">
                            <img src="award/6.jpg" height="330px"/>
                            <p>CERTIFICATE 2022 | Wellnex</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        @include('layout.footer')


        </body>

        </html>
