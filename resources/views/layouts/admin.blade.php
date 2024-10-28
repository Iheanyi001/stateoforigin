<html lang="en"><head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Osun State of origin certificate system">

    <title>User Dashboard</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="icon" href="{{asset('assets/rivers-logo.png')}}" type="image/x-icon">
    <!-- vendor css -->
    <link href="{{asset('lib/font-awesome/css/font-awesome.css')}}" rel="stylesheet">
    <link href="{{asset('lib/Ionicons/css/ionicons.css')}}" rel="stylesheet">

    <!-- Bracket CSS -->
    <link rel="stylesheet" href="{{asset('css/steps.css')}}">
    <link rel="stylesheet" href="{{asset('css/bracket.css')}}">
    <link href="https://apply.stateoforigin.osunstate.gov.ng/backend/lib/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet">
    <link href="https://apply.stateoforigin.osunstate.gov.ng/backend/lib/jquery-switchbutton/jquery.switchButton.css" rel="stylesheet">
    <!-- Styles -->
    <link rel="stylesheet" href="{{asset('libs/toastr/toastr.css')}}">
    @livewireStyles
    <!-- Bracket CSS -->

<script type="text/javascript" class="flasher-js">(function() {    var rootScript = 'https://cdn.jsdelivr.net/npm/@flasher/flasher@1.3.2/dist/flasher.min.js';    var FLASHER_FLASH_BAG_PLACE_HOLDER = {};    var options = mergeOptions([], FLASHER_FLASH_BAG_PLACE_HOLDER);    function mergeOptions(first, second) {        return {            context: merge(first.context || {}, second.context || {}),            envelopes: merge(first.envelopes || [], second.envelopes || []),            options: merge(first.options || {}, second.options || {}),            scripts: merge(first.scripts || [], second.scripts || []),            styles: merge(first.styles || [], second.styles || []),        };    }    function merge(first, second) {        if (Array.isArray(first) && Array.isArray(second)) {            return first.concat(second).filter(function(item, index, array) {                return array.indexOf(item) === index;            });        }        return Object.assign({}, first, second);    }    function renderOptions(options) {        if(!window.hasOwnProperty('flasher')) {            console.error('Flasher is not loaded');            return;        }        requestAnimationFrame(function () {            window.flasher.render(options);        });    }    function render(options) {        if ('loading' !== document.readyState) {            renderOptions(options);            return;        }        document.addEventListener('DOMContentLoaded', function() {            renderOptions(options);        });    }    if (1 === document.querySelectorAll('script.flasher-js').length) {        document.addEventListener('flasher:render', function (event) {            render(event.detail);        });        document.addEventListener('livewire:navigating', function () {    var elements = document.querySelectorAll('.fl-no-cache');    for (var i = 0; i < elements.length; i++) {        elements[i].remove();    }});    }    if (window.hasOwnProperty('flasher') || !rootScript || document.querySelector('script[src="' + rootScript + '"]')) {        render(options);    } else {        var tag = document.createElement('script');        tag.setAttribute('src', rootScript);        tag.setAttribute('type', 'text/javascript');        tag.onload = function () {            render(options);        };        document.head.appendChild(tag);    }})();</script><script src="chrome-extension://idnnbdplmphpflfnlkomgpfbpcgelopg/inpage.js" id="xverse-wallet-provider" data-is-priority="true"></script><script src="https://cdn.jsdelivr.net/npm/@flasher/flasher@1.3.2/dist/flasher.min.js" type="text/javascript"></script>
</head>

  <body>

    <!-- ########## START: LEFT PANEL ########## -->
    <div class="br-logo"><a href="default.htm" data-bcup-haslogintext="no"><span>RCOOS</span></a></div>
    <div class="br-sideleft overflow-y-auto ps ps--theme_default" data-ps-id="6a031c45-3687-32fe-3167-3c0a404c7b2e">
      <label class="sidebar-label pd-x-15 mg-t-20">Navigation</label>
      <div class="br-sideleft-menu">
            <a href="{{route('admin.dashboard')}}" class="br-menu-link {{request()->routeIs('admin.dashboard') ? 'active' : ''}}" data-bcup-haslogintext="no">
                <div class="br-menu-item">
                <i class="menu-item-icon fa fa-home tx-20"></i>
                <span class="menu-item-label">Dashboard</span>
                </div><!-- menu-item -->
            </a><!-- br-menu-link -->



            <a href="{{route('admin.application.view')}}" class="br-menu-link {{request()->routeIs('admin.application.view') ? 'active' : ''}}" data-bcup-haslogintext="no">
                <div class="br-menu-item">
                <i class="menu-item-icon icon fa fa-eye tx-20"></i>
                <span class="menu-item-label">View Applications</span>
                </div><!-- menu-item -->
            </a><!-- br-menu-link -->

            <a href="#" class="br-menu-link" data-bcup-haslogintext="no">
                <div class="br-menu-item">
                  <i class="menu-item-icon fa fa-certificate tx-20"></i>
                  <span class="menu-item-label">Payment Management</span>
                  <i class="menu-item-arrow fa fa-angle-down"></i>
                </div><!-- menu-item -->
            </a><!-- br-menu-link -->
            <ul class="br-menu-sub nav flex-column">
                <li class="nav-item  "><a href="#" class="nav-link" data-bcup-haslogintext="no">All Payments</a></li>
                <li class="nav-item  "><a href="#" class="nav-link" data-bcup-haslogintext="no">Paystack</a></li>
                <li class="nav-item  "><a href="#" class="nav-link" data-bcup-haslogintext="no">Flutterwave</a></li>
            </ul>
        </div><!-- br-sideleft-menu -->
      <br>
<div class="ps__scrollbar-x-rail" style="left: 0px; bottom: 0px;"><div class="ps__scrollbar-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__scrollbar-y-rail" style="top: 0px; right: 0px;"><div class="ps__scrollbar-y" tabindex="0" style="top: 0px; height: 0px;"></div></div></div><!-- br-sideleft -->
    <!-- ########## END: LEFT PANEL ########## -->

    <!-- ########## START: HEAD PANEL ########## -->
    <div class="br-header">
    <div class="br-header-left">
      <div class="navicon-left hidden-md-down"><a id="btnLeftMenu" href="" data-bcup-haslogintext="no"><i class="fa fa-bars"></i></a></div>
      <div class="navicon-left hidden-lg-up"><a id="btnLeftMenuMobile" href="" data-bcup-haslogintext="no"><i class="fa fa-bars"></i></a></div>

    </div><!-- br-header-left -->
    <div class="br-header-right">
      <nav class="nav">

        <div class="dropdown">
          <a href="default.htm" class="nav-link nav-link-profile" data-toggle="dropdown" data-bcup-haslogintext="no">
            <span class="logged-name">{{Auth::user()->first_name}} {{Auth::user()->last_name}}</span>
          </a>
          <div class="dropdown-menu dropdown-menu-header wd-200">
            <ul class="list-unstyled user-profile-nav">
                    <li>
                        <a href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit()" data-bcup-haslogintext="no">
                            <i class="fa fa-sign-out" style="margin: 0 7px"></i> Sign Out</a>
                    </li>
                    <form id="logout-form" action="{{route('logout')}}" method="POST" style="display: none;">
                        @csrf
                    </form>
            </ul>
          </div><!-- dropdown-menu -->
        </div><!-- dropdown -->
      </nav>
    </div><!-- br-header-right -->
  </div><!-- br-header -->
    <!-- ########## END: HEAD PANEL ########## -->
    @yield('content')


    <script src="http://cdn.bootcss.com/jquery/2.2.4/jquery.min.js"></script>
    <script src="https://apply.stateoforigin.osunstate.gov.ng/backend/lib/popper.js/popper.js"></script>
    <script src="https://apply.stateoforigin.osunstate.gov.ng/backend/lib/bootstrap/bootstrap.js"></script>
    <script src="https://apply.stateoforigin.osunstate.gov.ng/backend/lib/perfect-scrollbar/js/perfect-scrollbar.jquery.js"></script>
    <script src="https://apply.stateoforigin.osunstate.gov.ng/backend/lib/moment/moment.js"></script>
    <script src="https://apply.stateoforigin.osunstate.gov.ng/backend/lib/jquery-ui/jquery-ui.js"></script>
    <script src="https://apply.stateoforigin.osunstate.gov.ng/backend/lib/jquery-switchbutton/jquery.switchButton.js"></script>
    <script src="https://apply.stateoforigin.osunstate.gov.ng/backend/lib/peity/jquery.peity.js"></script>

    <script src="https://apply.stateoforigin.osunstate.gov.ng/backend/js/bracket.js"></script>

    <script src="{{asset('libs/toastr/toastr.js')}}"></script>
    @livewireScripts
    <script>
        function handleAlert(param) {

            if (!window.alertShown) {
                window.alertShown = true;
                showToastrMessage(param[0]['type'], param[0]['message']);
            }

        }

        Livewire.on('alert', handleAlert);

                function showToastrMessage(type, message, title = '') {
                    toastr.options = {
                        "closeButton": true,
                        "progressBar": true,
                        "positionClass": "toast-top-right",
                        "timeOut": "5000",
                    };

                    if (type === 'success') {
                        toastr.success(message, title);
                    } else if (type === 'error') {
                        toastr.error(message, title);
                    } else if (type === 'warning') {
                        toastr.warning(message, title);
                    } else if (type === 'info') {
                        toastr.info(message, title);
                    }
                }

        </script>


</body>
</html>
