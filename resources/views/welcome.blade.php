@include('layout.headerold')

<div id="fb-root" class="">

</div>
<a href="javascript:void(0);" id="toTop" class="back-to-top" style="display: none; width: 45px !important; height: 45px !important; z-index: 55;">
    <span class="fa-stack" style="font-size: 22px;">
        <svg class="svg-inline--fa fa-circle fa-w-16 fa-stack-2x" style="color: #2b2a2a;" aria-hidden="true" data-prefix="fas" data-icon="circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
            <path fill="currentColor" d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8z"></path>
        </svg><!-- <i class="fas fa-circle fa-stack-2x" style="color: #2b2a2a;"></i> -->
        <svg class="svg-inline--fa fa-arrow-up fa-w-14 fa-stack-1x fa-inverse" style="color: #ffffff;" aria-hidden="true" data-prefix="fas" data-icon="arrow-up" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
            <path fill="currentColor" d="M34.9 289.5l-22.2-22.2c-9.4-9.4-9.4-24.6 0-33.9L207 39c9.4-9.4 24.6-9.4 33.9 0l194.3 194.3c9.4 9.4 9.4 24.6 0 33.9L413 289.4c-9.5 9.5-25 9.3-34.3-.4L264 168.6V456c0 13.3-10.7 24-24 24h-32c-13.3 0-24-10.7-24-24V168.6L69.2 289.1c-9.3 9.8-24.8 10-34.3.4z"></path>
        </svg><!-- <i class="fas fa-arrow-up fa-stack-1x fa-inverse" style="color: #ffffff;"></i> -->
    </span>
</a>

<div class="section-container">
    <!-- BoxLoading -->
    <div class="boxLoading" id="boxLoading">
        <div class="loader">
            <svg class="circular" viewBox="25 25 50 50">
                <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="3" stroke-miterlimit="10"></circle>
            </svg>
        </div>
    </div>

    <div class="modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" id="modal_standard"></div>
    <div class="modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" id="modal_popup"></div>

    <script type="text/javascript">
        function showModalBS(isClose, path, size) {
            if (size == 'small') {
                var siz = 'sm';
            } else if (size == 'medium') {
                var siz = 'md';
            } else if (size == 'large') {
                var siz = 'lg';
            } else if (size == 'full') {
                var siz = 'full';
            } else if (size == 'cartlogin') {
                var siz = 'modalCartLogin';
            } else if (size === 'addToCartGroupProduct') {
                var siz = 'groupProduct modal-dialog-centered'
            } else if (size === 'addToCart') {
                var siz = 'addToCart modal-dialog-centered'
            } else {
                var siz = 'md';
            }

            if (isClose == 1) {
                var backdrop = true;
            } else if (isClose == 0) {
                var backdrop = 'static';
            } else {
                var backdrop = true;
            }
            jQuery('#modal_standard').html('<div class="modal-dialog modal-' + siz + '"><div class="modal-content"><div class="modal-loading text-center"><i class="fas fa-circle-notch fa-spin fa-3x"></i></div></div></div>');
            jQuery('#modal_standard').modal({
                backdrop: backdrop,
                // remote: path,
                show: true,
                keyboard: true
            });
            jQuery('#modal_standard').find('.modal-content').load(path, function(responseText, textStatus, XMLHttpRequest) {});
        }

        function showModalPopup(isClose, path) {
            if (isClose == 1) {
                var backdrop = true;
            } else if (isClose == 0) {
                var backdrop = 'static';
            } else {
                var backdrop = true;
            }
            jQuery('#modal_popup').html('<div class="modal-dialog modal-lg"><div class="modal-content"><div class="modal-loading text-center"><i class="fas fa-circle-notch fa-spin fa-3x"></i></div></div></div>');
            jQuery('#modal_popup').modal({
                backdrop: backdrop,
                // remote: path,
                show: true,
                keyboard: true
            });
            jQuery('#modal_popup').find('.modal-content').load(path, function(responseText, textStatus, XMLHttpRequest) {});
        }
    </script>

<style type="text/css">
    @media (min-width: 1025px) {
        .navbar-brand {
            font-size: 24px !important;
            border: none !important;
            padding: 0;
            margin: auto;
        }

        .navbar-text {
            min-height: 24px;
        }

        .text-truncate {
            width: 100%;
        }

        .text-truncate p {
            margin-bottom: 0 !important;
            line-height: 24px;
        }

        #menutop {
            margin: 10px 10px 10px 0 !important;
        }

        .topwidget-menu {
            margin: 0 !important;
        }

        .sps--abv .row-display-justify {
            -webkit-box-pack: center !important;
            -ms-flex-pack: center !important;
            justify-content: center !important;
        }

        .sps--blw .row-display-justify {
            -webkit-box-pack: flex-start !important;
            -ms-flex-pack: flex-start !important;
            justify-content: flex-start !important;
        }

        #top-area #logotop {
            margin: 10px 0px 0px 0px;
        }

        .navbar-brand .img-logo {
            max-width: 100%;
            min-width: 1px;
            min-height: 1px;
            max-height: 100%;
        }

        #top-sticky #cart2 {
            display: none !important;
        }

        .sps--blw #top-sticky #cart2 {
            display: inline-flex !important;

        }
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
        <!-- <div id="section-content" style=""> -->
            @include('homecontent')
            @include('layout.footer')



</body>

</html>