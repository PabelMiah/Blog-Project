<header id="header">

    <div id="nav">

        <div id="nav-fixed">
            <div class="container">

                <div class="nav-logo">
                    <a href="{{ route('home') }}" class="logo"><img src="{{ asset('/') }}front-assets/img/xlogo.png.pagespeed.ic.s-UgktC5Y3.png" alt=""></a>
                </div>

                <div class="nav-btns">
                    <button class="aside-btn"><i class="fa fa-bars"></i></button>
                </div>

            </div>
        </div>

       @include('front.includes.right-bar-menu')

    </div>

</header>
