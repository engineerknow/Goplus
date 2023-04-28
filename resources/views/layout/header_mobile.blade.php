<div class="headerMobile">
    <style type="text/css">
        nav .orderingMenu {
            order: 1;
        }

        .navbar-nav .dropdown-menu .dropdown-item {
            padding: 6px 20px;
        }

        @media (max-width: 1024px) {
            .navbar-toggler {
                padding: 9px 10px !important;
                margin-left: 3px !important;
                margin-top: 6px;
                margin-right: 0px;
                margin-bottom: 6px;
                font-size: 16px !important;
                height: 44px;
            }

            nav>#top-area>.row {
                margin: 0 6px;
            }

            .navbar-nav .dropdown-menu {
                position: relative !important;
                transform: translate3d(0px, 0px, 0px) !important;
                -webkit-transform: translate3d(0px, 0px, 0px) !important;
                top: auto !important;
                left: auto !important;
                padding: 0;
                margin: 0;
            }

            .navbar-nav .dropdown-menu .dropdown-item {
                padding: 9px 40px 9px 15px;
            }

            .navbar-text {
                margin: 0 auto;
            }

            .navbar-brand {
                padding: 4px 8px !important;
                font-size: 24px !important;
                line-height: 40px !important;
                border: none !important;
                margin: 0px 4px !important;
            }

            .navbar-brand span {
                line-height: 40px;
            }

            .navbar-brand img {
                /*max-height: 48px;*/
                max-height: 44px;
                max-width: 100%;
            }

            nav .navbar-link {
                min-width: 40px;
            }

            nav #top-area {
                transition: all 300ms ease;
                -webkit-transition: all 300ms ease;
                -moz-transition: all 300ms ease;
                -o-transition: all 300ms ease;
            }

            /* widget */
            nav #socialnetwork,
            nav #linewidget {
                min-height: 34px;
            }

            nav .orderingMenu {
                order: 12;
                flex-basis: auto;
            }

            nav .brandingBox {
                flex-basis: 0;
                flex-grow: 1;
                max-width: 100%;
            }

            .navbar-link.cart-nav {
                font-size: 22px;
            }

            .navbar-link.aOpenSearchIcon,
            .navbar-link.cart-nav {
                margin-left: 0px;
                margin-top: 0px;
                margin-bottom: 0px;
                padding: 0px;
            }

            .widgetCartNumber {
                top: -11px;
            }

            .navbar-nav.member-nav .nav-item {
                width: 100%;
                text-align: left !important;
            }

            .navbar-nav.member-nav {
                height: auto;
                margin: 0px 5px;
                text-align: left !important;
            }

            .topwidget-lang ul.dropdown-menu.dropdown-menu-right.show {
                background: transparent;
                border: none;
            }

            .topwidget-lang ul.dropdown-menu.dropdown-menu-right.show a:hover {
                background-color: transparent;
            }
        }

        @media (max-width: 350px) {
            nav>#top-bar {
                padding-left: 5px;
                padding-right: 5px;
            }
        }

        /*lang*/
        .topwidget-lang {
            margin: 0px 5px;
        }

        .topwidget-lang a {
            padding-left: 10px !important;
            padding-right: 10px !important;
        }

        #section-header.sps--blw .headerMobile .navbar-collapse {
            max-height: 79vh;
            overflow-y: scroll;
            position: relative;
            -webkit-overflow-scrolling: touch;
        }

        #section-header.sps--abv .headerMobile .navbar-collapse {
            max-height: 73vh;
            overflow-y: scroll;
            -webkit-overflow-scrolling: touch;
        }
    </style>
    <nav id="topZone" class="navbar-expand-xl airry">
        @include('layout.navbar_mini')
    </div>
       @include('layout.navbar_logo_mini')
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
</div>