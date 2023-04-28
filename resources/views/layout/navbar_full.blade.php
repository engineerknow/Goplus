<div class="topwidget-menu">
    <ul class="navbar-nav navbar-topmenu public-topmenu">
        <div class="topwidget-menu">
            <ul class="navbar-nav navbar-topmenu public-topmenu">
                <li class="nav-item ">
                    <a class="nav-link abl1" 
                        id="{{ Request::path() == '/' ? 'topmenuonpage' : '' }}"
                        data-onhome="home" href="{{ route('home') }}"
                        target="_self">{{ trans('message.Home') }}</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link abl1" 
                    id="{{ Request::path() == 'About' ? 'topmenuonpage' : '' }}"
                    href="{{ route('about') }}" target="_self">{{ trans('message.About') }}</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link abl1"
                    id="{{ Request::path() == 'Service' ? 'topmenuonpage' : '' }}"
                    href="{{ route('Service') }}" target="_self">{{ trans('message.Service') }}</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link abl1" 
                    id="{{ Request::path() == 'Productprocess' ? 'topmenuonpage' : '' }}"
                    href="{{ route('Productprocess') }}" target="_self">{{ trans('message.Productprocess') }}</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link abl1" 
                        id="{{ Request::path() == 'Product' ? 'topmenuonpage' : '' }}"
                        href="{{ route('Product') }}" target="_self"
                        style="position: relative;">{{ trans('message.Product') }}
                    </a>
                <li class="nav-item ">
                    <a class="nav-link abl1 dropdown-item" 
                    id="{{ Request::path() == 'Article' ? 'topmenuonpage' : '' }}"
                    href="{{ route('Article') }}" target="_self">{{ trans('message.Article') }}</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link abl1 dropdown-item" 
                    id="{{ Request::path() == 'News' ? 'topmenuonpage' : '' }}"
                    href="{{ route('news') }}" target="_self">{{ trans('message.news') }}</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link abl1 dropdown-item"  
                    id="{{ Request::path() == 'contactus' ? 'topmenuonpage' : '' }}"
                            
                    href="{{ route('contactus') }}" target="_self">{{ trans('message.Contact') }}</a>
                </li>
            </ul>
           
        </div>

        </a>
    </ul>
</div>