<div class="topwidget-menu">
    <ul class="navbar-nav navbar-topmenu public-topmenu">
        <li class="nav-item ">
            <a class="nav-link abl1" id="topmenuonpage" data-onhome="home" href="{{ route('home') }}"
                        target="_self">{{ trans('message.Home') }}</a>
        </li>
        <li class="nav-item ">
            <a class="nav-link abl1" href="{{ route('about') }}" target="_self">{{ trans('message.About') }}</a>
        </li>
        <li class="nav-item ">
            <a class="nav-link abl1" href="{{ route('Service') }}" target="_self">{{ trans('message.Service') }}</a>
        </li>
        <li class="nav-item ">
            <a class="nav-link abl1" href="{{ route('Productprocess') }}" target="_self">{{ trans('message.Productprocess') }}</a>
        </li>
        <li class="nav-item dropdown ">
            <a class="nav-link abl1" href="{{ route('Product') }}" target="_self"
                style="position: relative;">{{ trans('message.Product') }}
            </a>
        </li>
        <li class="nav-item ">
            <a class="nav-link abl1 dropdown-item" href="{{ route('Article') }}" target="_self">{{ trans('message.Article') }}</a>
        </li>
        <li class="nav-item ">
            <a class="nav-link abl1 dropdown-item" href="{{ route('news') }}" target="_self">{{ trans('message.news') }}</a>
        </li>
        <li class="nav-item ">
            <a class="nav-link abl1 dropdown-item" href="{{ route('contactus') }}" target="_self">{{ trans('message.Contact') }}</a>
        </li>
    </ul>
</div>
<div class="d-md-none theme-td-border my-0"></div>
<div class="topwidget-menu">
    <ul class="navbar-nav navbar-topmenu">
        <li class="nav-item dropdown li-smooth-lang">
            <a data-toggle="dropdown" class="dropdown-toggle aLanguage nav-link" id="chooseLanguage" href="{{ URL::to('change/th') }}">
                <i class="flag-icon flag-icon-th"></i>
                {{ Config::get('app.locale') }}
                <svg class="svg-inline--fa fa-chevron-down fa-w-14" id="arrowLanguage" aria-hidden="true" data-prefix="fal" data-icon="chevron-down" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                    <path fill="currentColor" d="M443.5 162.6l-7.1-7.1c-4.7-4.7-12.3-4.7-17 0L224 351 28.5 155.5c-4.7-4.7-12.3-4.7-17 0l-7.1 7.1c-4.7 4.7-4.7 12.3 0 17l211 211.1c4.7 4.7 12.3 4.7 17 0l211-211.1c4.8-4.7 4.8-12.3.1-17z">

                    </path>
                </svg><!-- <i class="fal fa-chevron-down" id="arrowLanguage"></i> --> </a>
            {{-- <ul class="dropdown-menu dropdown-menu-right smooth-lang">
                <li>
                    <a class="dropdown-item nav-link" style="padding:10px 15px 10px 15px;" href="{{ URL::to('change/en') }}">
                        <i class="flag-icon flag-icon-en"></i>&nbsp;&nbsp;EN 
                        <input type="hidden" class="languageCodeSetting" value="2019">
                    </a>
                </li>
            </ul> --}}
            <ul class="dropdown-menu dropdown-menu-right dropdown-chooselang" style="width: 40px;">
                <li>
                    <a class="dropdown-item nav-link" href="{{ URL::to('change/th') }}">
                        {{-- <i class="flag-icon flag-icon-en"></i>&nbsp;&nbsp; --}}TH
                        <input type="hidden" class="languageCodeSetting" value="2019">
                    </a>
                    <a class="dropdown-item nav-link" href="{{ URL::to('change/en') }}">
                        {{-- <i class="flag-icon flag-icon-en"></i>&nbsp;&nbsp; --}}EN
                        <input type="hidden" class="languageCodeSetting" value="2019">
                    </a>
                </li>
            </ul>
        </li>
    </ul>
</div>