<!-- header begin -->
<header class="header-dark">

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <!-- logo begin -->
                <div id="logo">
                    <a href="#wrapper">
                        <img class="logo-main" src="{{asset('images/LogoMakr_2AljaL.png')}}" alt="">
                    </a>
                </div>
                <!-- logo close -->

                <!-- small button begin -->
                <span id="menu-btn"></span>
                <!-- small button close -->

                <!-- mainmenu begin -->
                <nav>
                    <ul id="mainmenu">
                        <li><a class="active" href="{{route('home.index')}}">Home<span></span></a></li>                               <li><a href="#section-about">About<span></span></a></li>
                        {{--                                <li><a href="#section-services">Services<span></span></a></li>--}}
                        {{--                                <li><a href="#section-portfolio">Portfolio<span></span></a></li>--}}
                        {{--                                <li><a href="#section-experiences">Culture<span></span></a></li>--}}
                        <li><a href="{{route('accounts.find')}}">Accounts<span></span></a></li>
                        <li><a href="{{route('persons.find')}}">Persons<span></span></a></li>
                        <li><a href="{{route('transactions.find')}}">Transactions<span></span></a></li>
                        <li><a href="#section-contact">Contact Us<span></span></a></li>
                    </ul>
                </nav>

            </div>
            <!-- mainmenu close -->

        </div>
    </div>
</header>
<!-- header close -->
