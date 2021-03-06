<nav class="navbar navbar-default navbar-fixed-top navbar-inverse" role="navigation">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{ Auth::check() ? route('statuses_path') : route('home') }}">Larabook</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li>{{ link_to_route('statuses_path', 'Statuses') }}</li>
                <li>{{ link_to_route('users_path', 'Browse Users') }}</li>
            </ul>


            <ul class="nav navbar-nav navbar-right">
                @if ( $currentUser )
                <li class="dropdown">

                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <img src="{{ $currentUser->present()->gravatar }}" class="nav-gravatar" alt="{{ $currentUser->username }}">
                        {{ $currentUser->username }} <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu" role="menu">
                        <li>{{ link_to_route('profile_path', 'Your Profile', $currentUser->username) }}</li>
                        <li><a href="#">Another action</a></li>
                        <li class="divider"></li>
                        <li>{{ link_to_route('logout_path', 'Log out') }}</li>
                    </ul>
                </li>
                @else
                    <li>{{ link_to_route('register_path', 'Register') }}</li>
                    <li>{{ link_to_route('login_path', 'Log in') }}</li>
                @endif
            </ul>

        </div>
    </div>
</nav>