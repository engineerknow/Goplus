@include('layout.headerold')

<style>
    .media-body{
        margin: 20px;
    }
    b{
       color:rgb(255, 182, 87);
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
            <br>
            <div style="position: relative; background-color:transparent; ">

                <section class="call-to-action">
                    <div class="container aos-init aos-animate" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1500">
                        <div class="row">
                            <div class="col-md-12">
            
                              <h2><font style="color: #FFE423;"><b>บริการของเรา (OUR SERVICE)</b></font></h2><h2>
                                  <font style="color: #6E6E6E;">
                                  <h4><p>GOPLUS HEALTHY เป็นโรงงานผลิตอาหารเสริมครบวงจร
                                    (ONE STOP SERVICE)ด้วยนวัตกรรมและเทคโนโลยีที่ทันสมัย 
                                    ขยายมาตรฐานและกำลังการผลิตอย่างต่อเนื่อง รองรับการผลิตสินค้าครบทุกรูปแบบ
                                    มีความมุ่งมั่นที่จะผลิต คิดค้น พัฒนาสูตรผลิตภัณฑ์ เพื่อตอบสนองความต้องการของลูกค้า
                                    </p></h4>
                                </font>
                                <br>
                                 {{--  <a href="#contact" class="page-scroll btn btn-primary animated1"><font style="color: black;">ติดต่อเราเลย !!</font></a> --}}
                                <!-- <button type="#contact" class="btn btn-primary">ติดต่อเราเลย !!</button>*/ -->
                            </h2>
                        </div>
                        </div>
                      </div>
                </section>
            </div>
            <section id="service" class="services-section aos-init aos-animate" data-aos="fade-down">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="section-title text-center">
                                <h1><b>ทำไมต้องผลิตอาหารเสริมกับ Go Plus Healthy</b></h1>
                              <br>
                            </div>
                            <br>
                            <br>
                        </div>
                    </div>
                    <div class="row">
                      
                        <div class="col-md-6 col-sm-6 col-xs-11 aos-init aos-animate" data-aos="zoom-out-down">
                            <div class="feature-2">
                                <div class="media">
                                    <div class="pull-left">
                                      
                                        <img style="height: 100px; width: 100px;" src="asset/man_.png">
                                        
                                    </div>
                                    <div class="media-body">
                                        <h4 class="media-heading"><b>รองรับธุรกิจของผู้เริ่มสร้างแบรนด์</b></h4>
                                        <p>รองรับการเป็นเจ้าของธุรกิจ สำหรับผู้ที่ต้องการสร้างสินค้าที่ดีเยี่ยม</p>
                                    </div>
                                </div>
                            </div>
                        </div><!-- /.col-md-4 -->
                      
                        <div class="col-md-6 col-sm-6 col-xs-11 aos-init aos-animate" data-aos="zoom-out-down">
                            <div class="feature-2">
                                <div class="media">
                                    <div class="pull-left">
                                      
                                        <img style="height: 100px; width: 100px;" src="asset/man_0.png">
                                        
                                    </div>
                                    <div class="media-body">
                                        <h4 class="media-heading"><b>คิดค้นและพัฒนาสูตรผลิตภัณฑ์</b></h4>
                                        <p>เราพร้อมคิดสูตรผลิตภัณฑ์ใหม่ๆ พร้อมรองรับความต้องการของลูกค้า</p>
                                    </div>
                                </div>
                            </div>
                        </div><!-- /.col-md-4 -->
                      
                      
                        <div class="col-md-6 col-sm-6 col-xs-11 aos-init aos-animate" data-aos="zoom-out-down">
                            <div class="feature-2">
                                <div class="media">
                                    <div class="pull-left">
                                      
                                        <img style="height: 100px; width: 100px;" src="asset/man_7.png">
                                        
                                    </div>
                                    <div class="media-body">
                                        <h4 class="media-heading"><b>คัดสรรวัตถุดิบ (HIGH QUALITY)</b></h4>
                                        <p>เราใส่ใจคัดสรรวัตถุดิบคุณภาพดี เพราะวัตถุดิบที่มีคุณภาพ ย่อมทำให้เกิดผลิตภัณฑ์ที่มีคุณภาพ</p>
                                    </div>
                                </div>
                            </div>
                        </div><!-- /.col-md-4 -->
                      
                        <div class="col-md-6 col-sm-6 col-xs-11 aos-init aos-animate" data-aos="zoom-out-down">
                            <div class="feature-2">
                                <div class="media">
                                    <div class="pull-left">
                                      
                                        <img style="height: 100px; width: 100px;" src="asset/man_8.png">
                                        
                                    </div>
                                    <div class="media-body">
                                        <h4 class="media-heading"><b>ได้รับการรับรองมาตรฐาน</b></h4>
                                        <p>GMP/HACCP/HALAL</p>
                                    </div>
                                </div>
                            </div>
                        </div><!-- /.col-md-4 -->
    
                    </div><!-- /.row -->
    
                </div><!-- /.container -->
            </section>
        @include('layout.footer')


        </body>

        </html>
