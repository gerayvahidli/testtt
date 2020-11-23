<!doctype html>
<html  lang="{{app()->getLocale()}}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" ></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('font-awesome/css/font-awesome.min.css')}}">

</head>
<body>
        <a href="#top" class="page-scroll" id="topBtn" title="Go to top"><i class="fa fa-angle-up"></i></a>

        <!-- Full Page Image Header with Vertically Centered Content -->
        <header class="masthead">

            <!-- mobile menu start -->
            <nav class="navbar navbar-expand-lg fixed-top py-3 p-0 d-md-none d-xs-block" id="mainNav">
                <div class="container-fluid">
                    <a href="{{url('/')}}" class="navbar-brand"><img src=" {{asset('img/logo2.png')}} " width="100" height="30" alt=""></a>
                    <button type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler navbar-toggler-right"><i class="fa fa-bars"></i></button>
                    <div id="navbarSupportedContent" class="collapse navbar-collapse">
                        <ul class="nav" id="langs-mobile">
                            <li><a href="{{ url('locale/Az') }}" class="{{app()->getLocale() == 'Az' ? 'active' : ''}}">AZ</a></li>
                            <li><a href="{{ url('locale/En') }}" class="{{app()->getLocale() == 'En' ? 'active' : ''}}">EN</a></li>
                            <li><a href="{{ url('locale/Ru') }}" class="{{app()->getLocale() == 'Ru' ? 'active' : ''}}">RU</a></li>
                        </ul>
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item {{Request::is('/') ? 'active' : ''}} "><a href="{{url('/')}}" class="nav-link">{!! __('content.main_page') !!} <span class="sr-only">(current)</span></a></li>
                            <li class="nav-item {{Request::is('from-editor-in-chief') ? 'active' : ''}}"><a href="{{route('editorInChief')}}" class="nav-link">{{__('content.from_editor_in_chief')}}</a></li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    {!! __('content.journal') !!}
                                </a>

                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="{{route('aboutJournal')}}">{{__('content.about_journal')}}</a>
                                    <a class="dropdown-item" href="{{route('journal.archive')}}">{{__('content.archive')}}</a>
                                    <a class="dropdown-item" href="{{route('editorialStaff')}}">{{__('content.editorial_staff')}}</a>
                                    <a class="dropdown-item" href="{{route('editorialCouncil')}}">{{__('content.editorial_council')}}</a>
                                    <a class="dropdown-item" href="{{route('founders')}}">{{__('content.founders')}}</a>
                                    <a class="dropdown-item" href="{{route('advertisement')}}">{{__('content.editorial_council')}}</a>
                                    <a class="dropdown-item" href="{{route('journal.number',$last_number -> id)}}">{{__('content.advertisement_in_journal')}}</a>
                                    <a class="dropdown-item" href="{{route('subscribe')}}">{{__('content.subscribe')}}</a>
                                    <a class="dropdown-item" href="{{route('articleAcceptance')}}">{!!  __('content.articleAcceptance')!!}</a>
                                </div>

                            </li>
                            <li class="nav-item"><a href="{{route('contact')}}" class="nav-link {{Request::is('contact') ? 'active' : ''}}">{!! __('content.contact') !!}</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- mobile menu end -->


            <a href="{{url('/')}}"><img src="{{asset('img/logo2.png')}}" id="headerLogo" class="d-none d-md-block"></a>
            <div class="d-none d-md-block" style="width: 15%;float:right;padding: 1em 2em;">
                <ul class="nav nav-pills nav-fill">
                    <li class="nav-item">
                        <a class="langs {{app()->getLocale() == 'Az' ? 'active' : ''}}" href="{{ url('locale/Az') }}">AZ</a>
                    </li>
                    <li class="nav-item">
                        <a class="langs  {{app()->getLocale() == 'En' ? 'active' : ''}}" href="{{ url('locale/En') }}">EN</a>
                    </li>
                    <li class="nav-item">
                        <a class="langs  {{app()->getLocale() == 'Ru' ? 'active' : ''}}" href="{{ url('locale/Ru') }}">RU</a>
                    </li>
                </ul>
            </div>
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <div class="col-12 text-center">
                        <img class="d-none d-md-block" style="width:75%;margin-top:1em;margin: auto;" src="{{asset('img/title.png')}}">
                        <img class="d-md-none img-fluid" style="margin-top:1em;" src="{{asset('img/title_m.png')}}">
                        <!-- <input type="search" name="mainSearch" placeholder="Açar sözləri daxil edin" id="searchInput"> -->
                        <!-- <input type="button" name="mainSearchButton" id="mainSearchButton"> -->
                        <!-- <button id="mainSearchButton"><i class="fa fa-search"></i></button> -->
                        <!-- <i class="fa fa-search" aria-hidden="true"></i> -->

                        <!-- Another variation with a button -->
                        <form action="{{route('search')}}" method="POST" >

                        <div class="input-group" style="margin: 0 auto;" id="header-search">
                                {{csrf_field()}}
                            <input required name="q" type="text" class="form-control" placeholder=" {!! __('content.enter_keywords') !!}" style="border-radius: 3px;">
                            <div class="input-group-append">
                                <button  class="btn btn-secondary" id="mainSearchButton" type="submit">
                                    <i class="fa fa-search"></i>
                                </button>
                            </div>

                        </div>
                        </form>
                        <br>

                        <div class="d-none d-md-block" style="width: 100%;float: left;margin-left: auto;margin-right: auto;display: block;">
                            <a name="header_button_left" @if(app()->getLocale() != 'Az') style= "width: 160px !important" @endif class="btn headerSideButtons" href="{{route('articleAcceptance')}}" >{!! __('content.articleAcceptance') !!}</a>
                            <a  name="header_button_middle" class="btn headerMiddleButton" href="{{route('aboutJournal')}}">{{__('content.about_journal')}}</a>
                            <a  name="header_button_right" class="btn headerSideButtons" href="{{route('journal.archive')}}" >{{__('content.archive')}}</a>
                        </div>

                    </div>
                </div>
            </div>
        </header>
        <nav class="navbar navbar-expand-sm navbar-dark shadow-sm p-2 bg-white d-none d-md-block">
            <!-- Links -->
            <ul class="navbar-nav" style="padding: 0 2em;">
                <li class="nav-item" style="padding: 0 1em;">
                    <a class="nav-link {{Request::is('/') ? 'active' : ''}}" href="{{url('/')}}"> {{__('content.main_page')}}</a>
                </li>
                <li class="nav-item" style="padding: 0 1em;">
                    <a class="nav-link {{Request::is('from-editor-in-chief') ? 'active' : ''}}" href="{{route('editorInChief')}}">{{__('content.from_editor_in_chief')}}</a>
                </li>

                <!-- Dropdown -->
                <li class="nav-item dropdown" style="padding: 0 1em;">
                    <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                        {{__('content.journal')}}
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="{{route('aboutJournal')}}">{{__('content.about_journal')}}</a>
                        <a class="dropdown-item" href="{{route('journal.archive')}}">{{__('content.archive')}}</a>
                        <a class="dropdown-item" href="{{route('editorialStaff')}}">{{__('content.editorial_staff')}}</a>
                        <a class="dropdown-item" href="{{route('editorialCouncil')}}">{{__('content.editorial_council')}}</a>
                        <a class="dropdown-item" href="{{route('founders')}}">{{__('content.founders')}}</a>
                        <a class="dropdown-item" href="{{route('advertisement')}}">{{__('content.advertisement_in_journal')}}</a>
                        <a class="dropdown-item" href="{{route('journal.number',$last_number -> id)}}">{{__('content.last_number')}}</a>
                        <a class="dropdown-item" href="{{route('subscribe')}}">{{__('content.subscribe')}}</a>
                        <a class="dropdown-item" href="{{route('articleAcceptance')}}">{!!__('content.articleAcceptance')!!}</a>
                    </div>
                </li>

                <li class="nav-item" style="padding: 0 1em;">
                    <a class="nav-link {{Request::is('contact') ? 'active' : ''}}" href="{{route('contact')}}">{{__('content.contact')}}</a>
                </li>
            </ul>
        </nav>

        <div class="container-fluid">
            <section class="row p-md-4 p-2">
            @yield('content')


            <!-- Sidebar -->
            <section class="py-md-5 col-md-3">
                <div class="ant-div-small text-center bg-white">
                    <img class="img-fluid" src="{{asset('img/casp.png')}}" style="border: 0.5px solid;">
                </div>
                <div class="ant-div-small bg-white">
                    <h4 class="font-weight-medium" style="letter-spacing: 1.2px; font: normal normal bold 18px/28px Arial;">{!! __('content.links') !!}</h4>
                    <hr align="left" style="width: 5em;border-bottom: 1px solid black; margin-top: 0.5rem !important;">

                    <a target="_blank" href="http://heydar-aliyev.org"><img class="link-img img-fluid" src="{{asset('img/logo_links/links1.jpg')}}"></a>
                    <a target="_blank"  href="http://socar.az"><img class="link-img img-fluid" src="{{asset('img/logo_links/links2.png')}}"></a>
                    <a target="_blank"  href="https://ikisahil.com/"><img class="link-img img-fluid" src="{{asset('img/logo_links/links3.png')}}"></a>
                    <a target="_blank"  href="http://ww1.vyshka.com/"><img class="link-img img-fluid" src="{{asset('img/logo_links/links4.png')}}"></a>
                    <a target="_blank"  href="https://www.kulevioilterminal.com/"><img class="link-img img-fluid" src="{{asset('img/logo_links/links5.jpg')}}"></a>
                </div>
            </section>
            </section>
        </div>



        <!-- Footer -->
        <footer class="page-footer font-small stylish-color-dark pt-4" style="background-color: #030E22; color: white;">
            <br>
            <!-- Footer Links -->
            <div class="container text-md-left ml-0" id="globalFooter">

                <!-- Grid row -->
                <div class="row p-md-4 p-2">

                    <!-- Grid column -->
                    <div class="col-md-5">

                        <!-- Content -->
                        <img src="{{asset('img/logo2.png')}}" id="footerLogo">
                        <p class="text-color-custom">{!! __('content.journal_name') !!}</p>

                    </div>
                    <!-- Grid column -->

                    <hr class="clearfix w-100 d-md-none">

                    <!-- Grid column -->
                    <div class="col-md-2">

                        <ul class="list-unstyled">
                            <li class="footer-links">
                                <a href="{{url('/')}}">{{__('content.main_page')}}</a>
                            </li>
                            <li class="footer-links">
                                <a href="{{route('editorInChief')}}">{{__('content.from_editor_in_chief')}}</a>
                            </li>
                            <li class="footer-links">
                                <a href="{{route('aboutJournal')}}">{{__('content.about_journal')}}</a>
                            </li>
                            <li class="footer-links">
                                <a href="{{route('articleAcceptance')}}">{!!__('content.articleAcceptance')!!}</a>
                            </li>
                            <li class="footer-links">
                                <a href="{{route('contact')}}">{{__('content.contact')}}</a>
                            </li>
                        </ul>

                    </div>
                    <!-- Grid column -->

                    <hr class="clearfix w-100 d-md-none">

                    <!-- Grid column -->
                    <div class="col-md-2">

                        <ul class="list-unstyled">
                            <li class="footer-links">
                                <a href="{{route('journal.number',$last_number -> id)}}">{{__('content.last_number')}}</a>
                            </li>
                            <li class="footer-links">
                                <a href="{{route('journal.archive')}}">{{__('content.archive')}}</a>
                            </li>
                            <li class="footer-links">
                                <a href="{{route('editorialStaff')}}">{{__('content.editorial_staff')}}</a>
                            </li>
                            <li class="footer-links">
                                <a href="{{route('founders')}}">{{__('content.founders')}}</a>
                            </li>
                            <li class="footer-links">
                                <a href="{{route('advertisement')}}">{{__('content.advertisement_in_journal')}}</a>
                            </li>
                        </ul>

                    </div>
                    <!-- Grid column -->

                    <hr class="clearfix w-100 d-md-none">

                    <!-- Grid column -->
                    <div class="col-md-3">

                        <ul class="list-unstyled">
                            <li class="footer-links">
                                <i class="fa fa-map-marker"></i>
                                <a href="#!">{!! $contact -> address !!}</a>
                            </li>
                            <li class="footer-links">
                                <i class="fa fa-phone" aria-hidden="true"></i>
                                <a href="#!">&nbsp;{!! $contact -> phones !!}</a>
                            </li>
                            <li class="footer-links">
                                <i class="fa fa-envelope" aria-hidden="true"></i>
                                <a href="#!">{!! $contact -> email !!}</a>
                            </li>
                        </ul>

                    </div>
                    <!-- Grid column -->

                </div>
                <!-- Grid row -->

            </div>
            <!-- Social buttons -->
            <hr style="background-color: white;height: 1px;opacity: 0.3;border-top: 0 !important;">
            <!-- Copyright -->
            <div class="footer-copyright text-left text-color-custom" style="padding: 0 1.5em 1em 1.5em;">©  {!! __('content.copyright') !!} <a href="https://caspianic.com/">Caspian Innvation Center LLC</a> 2020.
            </div>
            <!-- Copyright -->

        </footer>
        <!-- Footer -->


        <script>

            $(function () {
                $(window).on('scroll', function () {
                    if ( $(window).scrollTop() > 10 ) {
                        $('.navbar').addClass('active');
                    } else {
                        $('.navbar').removeClass('active');
                    }
                });
            });

        </script>

        <script>

            var topbutton = document.getElementById("topBtn");

            // When the user scrolls down 20px from the top of the document, show the button
            window.onscroll = function() {scrollFunction()};

            function scrollFunction() {
                if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                    topbutton.style.display = "block";
                } else {
                    topbutton.style.display = "none";
                }
            }

            // When the user clicks on the button, scroll to the top of the document
            function topFunction() {
                document.body.scrollTop = 0;
                document.documentElement.scrollTop = 0;
            }

        </script>

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

@yield('footer.scripts')


</body>
</html>
