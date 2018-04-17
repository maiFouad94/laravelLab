<!DOCTYPE html>
<html>

<nav class="navbar navbar-default navbar-fixed-top navbar-absolute navbar-transparent">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="logo logo-small" href="http://www.tutise/" tabindex="-1" rel="home"></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li class="learning-btn"><a href="">Library</a></li>
                @if ( Auth::guest() )
                    <li class="signup-btn"><a href="">Sign Up</a></li>
                    <li class="login-btn"><a href="">Log In</a></li>
                @endif
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>


<body>

@yield('bootsrtap')

</body>

</html>