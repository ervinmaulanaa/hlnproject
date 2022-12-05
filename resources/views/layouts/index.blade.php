<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>

    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
    <link rel="stylesheet" href="{{ asset('plugins/bootstrap/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/lineAwesome/line-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

</head>
<body>
<nav id="famdaynav-container" class="famdaynav">
            <div class="famdaynav__inner">
                <div class="famdaynav__top-content scrollable-content pb-5">
                    <div class="famdaynav__profile mt-3 d-flex3">
                        <div class="mt-2 d-mn-max"></div>
                        <div class="mininav-toggle text-center py-2">
                            <img class="famdaynav__logo img-md rounded-circle " src="{{ asset('img/logo.png') }}"
                                alt="Logo Picture">
                        </div>
                    </div>

                    <div class="famdaynav__categoriy py-3">
                        <ul class="famdaynav__menu nav flex-column">
                            <li class="nav-item has-sub">
                                <a href="#" class="mininav-toggle nav-link collapsed"><i
                                        class="la la-th-large fs-5 me-2 mtnk1r"></i>
                                    <span class="nav-label ms-1">Dashboard</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="la la-calendar fs-5 me-2 mtnk1r"></i>
                                    <span class="nav-label ms-1">Events</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="../../widgets/" class="nav-link mininav-toggle"><i
                                        class="la la-user fs-5 me-2 mtnk1r"></i>
                                    <span class="nav-label mininav-content ms-1">Daftar User</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="famdaynav__bottom-content border-top pb-2">
                    <ul id="famdaynav" class="famdaynav__menu nav flex-column">
                        <li class="nav-item ">
                            <a href="login" class="nav-link" aria-expanded="false">
                                <i class="la la-lock fs-5 me-2"></i>
                                <span class="nav-label ms-1">Logout</span>
                            </a>
                        </li>
                    </ul>                    
                </div>
            </div>
        </nav>

    <script src="{{ asset('plugins/jquery/jquery-3.6.1.min.js') }}"></script>
    <script src="{{ asset('plugins/bootstrap/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('plugins/validate/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('plugins/validate/additional-methods.min.js') }}"></script>
    
    </body>
</html>