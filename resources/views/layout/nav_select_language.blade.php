<div class="topwidget-lang">
    <ul class="navbar-nav">
        <li class="nav-item dropdown">
            <a class="dropdown-toggle" id="dropdownLang" data-toggle="dropdown">
                {{ Config::get('app.locale') }}
                <span class="caret"></span>
            </a>
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
