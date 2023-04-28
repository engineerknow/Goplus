<div id="top-area">
    <div id="top-sticky">
        <div class="">
            <div class="row no-gutters">
                <div class="col pl-1 col-lg-auto d-lg-inline-flex brandingBox position-relative" style="display: flex;flex-direction: column; justify-content: center; width: 20%;">
                    <a class="navbar-brand position-absolute" href="/" style="display: flex;flex-direction: column; justify-content: center;">

                        <style>
                            .logotextmobile {
                                display: inline-block;
                                max-width: 200px;
                                height: 1.5em;
                                overflow: hidden;
                                text-overflow: ellipsis;
                                white-space: nowrap;
                                color: #000;
                            }

                            .logotextmobile span {
                                /* font-size: 30px !important; */
                                line-height: 40px !important;
                            }

                            @media (max-width: 364.98px) {
                                .logotextmobile {
                                    max-width: 150px;
                                }
                            }

                            @media (min-width: 365px) and (max-width: 575.98px) {
                                .logotextmobile {
                                    max-width: 200px;
                                }
                            }

                            @media (min-width: 576px) and (max-width: 767.98px) {
                                .logotextmobile {
                                    min-width: calc(400px + 4vw);
                                    max-width: 500px;
                                }
                            }

                            @media (min-width: 768px) and (max-width: 991.98px) {
                                .logotextmobile {
                                    max-width: 600px;
                                }
                            }

                            @media (min-width: 992px) {
                                .logotextmobile {
                                    max-width: 800px;
                                }
                            }
                        </style>

                        <img src="{{ asset('customer/logo.png') }}" alt="logo" title="logo" class="d-inline-block img-logo">
                    </a>
                </div>
                <div class="col-12 col-lg d-lg-inline-flex orderingMenu">
                    <div class="collapse navbar-collapse pb-1" id="navbarNavDropdown">
                        <style type="text/css">
                            .headerMobile .topwidget-menu .navbar-nav .dropdown-menu {
                                padding: 0;
                                margin: 0;
                            }

                            /*PC hack to hover*/
                            @media (min-width: 1025px) {
                                .headerMobile ul.navbar-topmenu.navbar-nav>li.nav-item:hover>.dropdown-menu {
                                    display: block !important;
                                }

                                .headerMobile ul.navbar-topmenu.navbar-nav>li.nav-item>ul.dropdown-menu li:hover>.dropdown-menu {
                                    display: block !important;
                                }

                                .headerMobile ul.navbar-topmenu.navbar-nav ul {
                                    box-shadow: 0 6px 12px rgba(0, 0, 0, 0.175);
                                }

                                .headerMobile .topwidget-menu {
                                    margin: 10px;
                                }

                                .headerMobile ul.dropdown-menu.dropdown-menu-right {
                                    left: unset;
                                    right: 0;
                                }

                                .headerMobile .dropdownfix-menu-right {
                                    right: 100% !important;
                                    left: auto !important;
                                }

                                .headerMobile .public-topmenu .dropdown-menu-right .fa-chevron-right {
                                    transform: rotate(180deg);
                                    left: 0;
                                    position: absolute;
                                    top: 12px;
                                }

                                .headerMobile .public-topmenu .dropdown-menu-right .fa-chevron-down {
                                    transform: rotate(90deg);
                                    left: 0;
                                    position: absolute;
                                    top: 12px;
                                }

                                .headerMobile .more.hidden {
                                    display: none;
                                }

                                .headerMobile .public-topmenu .dropdown-menu:not(.dropdown-menu-right) .fa-chevron-down {
                                    transform: rotate(-90deg);
                                }

                                .headerMobile ul.navbar-topmenu.navbar-nav>li.nav-item ul {
                                    position: absolute;
                                }

                                .headerMobile .public-topmenu .topmenuLg {
                                    border-right: none !important;
                                }
                            }

                            /* tablet*/
                            @media only screen and (min-width: 768px) and (max-width: 1112px) {
                                .headerMobile ul.navbar-topmenu.navbar-nav ul {
                                    box-shadow: none;
                                }

                                /*.topwidget-menu {
margin: 10px;
}*/
                            }

                            /*mobile tablet*/
                            @media only screen and (max-width: 1024px) {
                                .headerMobile ul.navbar-topmenu.navbar-nav a {
                                    text-align: left !important;
                                    white-space: normal;
                                }

                                .headerMobile ul.navbar-topmenu.navbar-nav .fa-chevron-down {
                                    transition: all .3s ease 0s;
                                    -ms-transition: all .3s ease 0s;
                                    -webkit-transition: all .3s ease 0s;
                                    -moz-transition: all .3s ease 0s;

                                }

                                .headerMobile ul.navbar-topmenu.navbar-nav .fa-chevron-right {
                                    transform: rotate(90deg);
                                    transition: all .3s ease 0s;
                                    -ms-transition: all .3s ease 0s;
                                    -webkit-transition: all .3s ease 0s;
                                    -moz-transition: all .3s ease 0s;
                                }

                                .headerMobile ul.navbar-topmenu.navbar-nav span.arrowCollapse>.fa-chevron-right {
                                    right: 12px;
                                    top: 27%;
                                }

                                .headerMobile ul.navbar-topmenu.navbar-nav a {
                                    word-wrap: break-word;
                                }

                                .headerMobile ul.navbar-topmenu.navbar-nav .more {
                                    display: none !important;
                                }

                                .headerMobile .public-topmenu .dropdown.show>a>.arrowCollapse {
                                    transform: rotate(180deg);
                                    -ms-transform: rotate(180deg);
                                    -webkit-transform: rotate(180deg);
                                    -moz-transform: rotate(180deg);
                                }

                                .headerMobile .public-topmenu li.show:not(.dropdown)>a>.arrowCollapse>svg {
                                    transform: rotate(270deg);
                                    -ms-transform: rotate(270deg);
                                    -webkit-transform: rotate(270deg);
                                    -moz-transform: rotate(270deg);
                                }

                                .headerMobile ul.navbar-topmenu.navbar-nav>li>ul>li>a {
                                    padding-left: 30px !important;
                                }

                                .headerMobile ul.navbar-topmenu.navbar-nav ul ul a {
                                    padding-left: 45px !important;
                                }

                                .headerMobile ul.navbar-topmenu.navbar-nav ul ul ul a {
                                    padding-left: 60px !important;
                                }
                            }
                        </style>

                        @include('layout.navbar_mobile')

                        <script>
                            $('.li-smooth-lang').on('show.bs.dropdown', function() {
                                $(this).find('.dropdown-menu').first().stop(true, true).slideDown();
                            });

                            $('.li-smooth-lang').on('hide.bs.dropdown', function() {
                                $(this).find('.dropdown-menu').first().stop(true, true).slideUp();
                            });
                        </script>
                    </div>
                </div>
                <div class="col-auto pr-1 col-lg-auto text-right order-6 d-inline-flex align-items-center">
                    <button class="navbar-toggler hamburger hamburger--squeeze" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="hamburger-box">
                            <span class="hamburger-inner"></span>
                        </span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
</nav>
</div>
<script>
    jQuery('.widgetCartNumber').hide();
    jQuery(document).ready(function() {
        jQuery('.navbar-topmenu.public-topmenu a[data-onpage-link]').click(function(event) {
            // event.preventDefault();
            jQuery(this).blur();
            if (jQuery(this).attr('class') == 'abl1') {
                jQuery(this).attr('id', 'topmenuonpage');
            } else if (jQuery(this).attr('class') == 'abl2') {
                jQuery(this).attr('id', 'topmenusubonpage');
            }
        });

        jQuery('a').click(function(e) {
            var targetSelector = this.hash
            if (targetSelector) {
                e.stopImmediatePropagation();

                var $target = $(targetSelector);
                // Animate the scroll to the destination...
                $('html, body').animate({
                    scrollTop: $target.offset().top // Scroll to this location.
                }, {
                    // Set the duration long enough to allow time
                    // to lazy load the elements.
                    duration: 1000,

                    // At each animation step, check whether the target has moved.
                    step: function(now, fx) {

                        // Where is the target now located on the page?
                        // i.e. its location will change as images etc. are lazy loaded
                        var newOffset = $target.offset().top - 70;

                        // If where we were originally planning to scroll to is not
                        // the same as the new offset (newOffset) then change where
                        // the animation is scrolling to (fx.end).
                        if (fx.end !== newOffset)
                            fx.end = newOffset;
                    }
                });
            }
        })

        jQuery('.navbar-topmenu.public-topmenu a[data-onhome]').click(function(event) {
            if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
                $('html,body').animate({
                    scrollTop: 0
                }, 1800);
                return false;
            }
        });
        var aChildren = jQuery('.navbar-topmenu.public-topmenu a[data-onpage-link]');
        var highlinow = jQuery('.navbar-topmenu.public-topmenu a#topmenuonpage');
        var highlinowLv2 = jQuery('.navbar-topmenu.public-topmenu a#topmenusubonpage');
        var stickyHeaderhi = jQuery('#menutop').height() + 75;

        var aArray = [];
        for (var i = 0; i < aChildren.length; i++) {
            var aChild = aChildren[i];
            var ahref = jQuery(aChild).attr('href');
            var res = ahref.split("#");
            var last_hash = res[res.length - 1];
            aArray.push(last_hash);
        }

        jQuery('.widgetCartNumber').show();

        jQuery(window).scroll(function() {
            var windowPos = jQuery(window).scrollTop();
            var windowHeight = jQuery(window).height();
            var docHeight = jQuery(document).height();
            for (var i = 0; i < aArray.length; i++) {
                var theID = aArray[i];
                if (jQuery('#' + theID).length > 0) {
                    if (jQuery('#' + theID).data('orderbox') == 'onest') {
                        /* if firstbox */
                        var divPos = jQuery('#' + theID).offset().top - stickyHeaderhi;
                        var divHeight = jQuery('#' + theID).height();
                    } else {
                        /* if non first */
                        var divPos = jQuery('#' + theID).parent().offset().top - stickyHeaderhi;
                        var divHeight = jQuery('#' + theID).parent().height();
                    }
                    if (windowPos >= divPos && windowPos < (divPos + divHeight)) {
                        highlinow.removeAttr('id');
                        highlinowLv2.removeAttr('id');
                        if (jQuery("a.abl1[data-onpage-link='" + theID + "']").length > 0) {
                            jQuery("a.abl1[data-onpage-link='" + theID + "']").attr('id', 'topmenuonpage');
                        }
                        if (jQuery("a.abl2[data-onpage-link='" + theID + "']").length > 0) {
                            jQuery("a.abl2[data-onpage-link='" + theID + "']").attr('id', 'topmenusubonpage');
                        }
                    } else {
                        jQuery("a.abl1[data-onpage-link='" + theID + "']").removeAttr('id');
                        jQuery("a.abl2[data-onpage-link='" + theID + "']").removeAttr('id');
                        if (jQuery("a[data-onpage-link][id='topmenuonpage']").length < 1 && jQuery("a[data-onpage-link][id='topmenusubonpage']").length < 1) {
                            if (highlinow.length > 0) {
                                highlinow.attr('id', 'topmenuonpage');
                            }
                            if (highlinowLv2.length > 0) {
                                highlinowLv2.attr('id', 'topmenusubonpage');
                            }
                        }
                    }
                }
            }
            if (windowPos + windowHeight == docHeight) {
                /* last position */
                var lastsectionl1 = jQuery("a.targethash").parent().parent('#section-content').find('div:not(.insadsbygoogle) > a').last().attr('id');
                //L1
                if (jQuery("a.abl1[data-onpage-link='" + lastsectionl1 + "']").length > 0) {
                    highlinow.removeAttr('id');
                    jQuery('a.abl1#topmenuonpage').removeAttr('id');
                    jQuery("a.abl1[data-onpage-link='" + lastsectionl1 + "']").attr('id', 'topmenuonpage');
                }
                //L2 L3
                if (jQuery("a.abl2[data-onpage-link='" + lastsectionl1 + "']").length > 0) {
                    highlinowLv2.removeAttr('id');
                    jQuery('a.abl2#topmenusubonpage').removeAttr('id');
                    jQuery("a.abl2[data-onpage-link='" + lastsectionl1 + "']").attr('id', 'topmenusubonpage');
                }
            }
        });

    });

    //!navigator.userAgent.match(/(iPad)|(iPhone)|(iPod)|(android)|(webOS)/i) &&
    if (screen.width > 1024) { // is desktop
        var isSubmenuLv2Overflow = 0;
        var isSubmenuLv3Overflow = 0;
        var elem_headerDesktop = document.getElementsByClassName("headerDesktop")[0];
        var elem_topmenu = elem_headerDesktop.getElementsByClassName("navbar-topmenu")[0];
        var sectionHeader = document.getElementById("section-header");
        var arr_li_lv1 = elem_topmenu.getElementsByClassName("nav-item dropdown"); // li (Lv1) (has submenu)
        if (arr_li_lv1.length > 0) {
            // console.log(arr_li_lv1);
            for (i = 0; i < arr_li_lv1.length; i++) {
                var li_lv1 = arr_li_lv1[i];
                var arr_child_li_lv1 = li_lv1.children; // a, ui.dropdown-menu
                if (arr_child_li_lv1.length > 0) {

                    for (j = 0; j < arr_child_li_lv1.length; j++) {
                        if (arr_child_li_lv1[j].classList.contains('dropdown-menu')) { // ui.dropdown-menu
                            var ui_lv2 = arr_child_li_lv1[j];
                            var arr_li_lv2 = ui_lv2.children; // li (Lv2)
                            var length_li_lv2 = arr_li_lv2.length;

                            if (screen.height >= 1440 && screen.height < 2880 && length_li_lv2 > 34) { // w:2k
                                isSubmenuLv2Overflow += 1;

                            } else if (screen.height >= 1080 && screen.height < 1440 && length_li_lv2 > 20) { // w:1960
                                isSubmenuLv2Overflow += 1;

                            } else if (screen.height >= 768 && screen.height < 1080 && length_li_lv2 > 14) { // w:1366
                                isSubmenuLv2Overflow += 1;

                            } else if (screen.height >= 500 && screen.height < 768 && length_li_lv2 > 10) { // w:768
                                isSubmenuLv2Overflow += 1;
                            }

                            //LV 3 LIMITED EDITION
                            if (arr_li_lv2.length > 0) {
                                for (k = 0; k < arr_li_lv2.length; k++) {
                                    if (arr_li_lv2[k].children.length > 1) {
                                        if (arr_li_lv2[k].children[1].classList.contains('dropdown-menu')) { // ui.dropdown-menu
                                            //k = ตำแหน่งที่มี ul
                                            var posiUllv3 = k;
                                            var arr_li_lv3 = arr_li_lv2[k].children[1]; // li (Lv2)
                                            var obj_li_lv3 = arr_li_lv3.children;
                                            var length_li_lv3 = obj_li_lv3.length;
                                            var limiLv3High = length_li_lv3 + k;

                                            if (screen.height >= 1440 && screen.height < 2880 && limiLv3High > 34) { // height:1440
                                                isSubmenuLv3Overflow += 1;
                                            } else if (screen.height >= 1080 && screen.height < 1440 && limiLv3High > 20) { // height:1080
                                                isSubmenuLv3Overflow += 1;
                                            } else if (screen.height >= 768 && screen.height < 1080 && limiLv3High > 14) { // height:768
                                                isSubmenuLv3Overflow += 1;
                                            } else if (screen.height >= 500 && screen.height < 768 && limiLv3High > 10) { // w:768
                                                isSubmenuLv3Overflow += 1;
                                            }

                                        }
                                    }
                                }
                            }


                        }
                    }
                }

            }
        }

        if (isSubmenuLv2Overflow > 0) { // no stricky
            sectionHeader.classList.remove('sps');
            sectionHeader.classList.remove('sps--abv');
            sectionHeader.classList.remove('sps--blw');
        }
        //if lavel 3 is Too Damn High
        if (isSubmenuLv3Overflow > 0) { // no stricky
            sectionHeader.classList.remove('sps');
            sectionHeader.classList.remove('sps--abv');
            sectionHeader.classList.remove('sps--blw');
        }

        //if screen height not than 1080 disable
        jQuery(window).ready(function() {
            setTimeout(() => {
                if ($(window).height() > jQuery('#section-content').height() + jQuery('#section-footer').height()) {
                    sectionHeader.classList.remove('sps');
                    sectionHeader.classList.remove('sps--abv');
                    sectionHeader.classList.remove('sps--blw');
                }
            }, 200);
        });
    }
</script>