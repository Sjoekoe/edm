<nav class="navbar-default navbar" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            {{ link_to_route('home', 'EDM-School', null, ['class' => 'navbar-brand']) }}
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">Link</a></li>
                <li><a href="#">Link</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                @if ( ! $currentUser)
                <li>{{ link_to_route('join', 'Register') }}</li>
                <li>{{ link_to_route('sessions.create', 'Log In') }}</li>
                @else
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">{{ $currentUser->username }} <span class="caret"></span></a>
                    <ul class="dropdown-menu dropdown-with-icons" role="menu">
                        <li>
                            <a href="{{ route('users.show', $currentUser->username) }}">
                                <i class="fa fa-eye fa-fw"></i>
                                Profile
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-fw fa-pencil"></i>
                                Favorites
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-fw fa-heart"></i>
                                Favorites
                            </a>
                        </li>
                        <li class="divider"></li>
                        @if ($currentUser->hasRole('Administrator'))
                        <li>
                            <a href="{{ route('admin.index') }}">
                                <i class="fa fa-fw fa-lock"></i>
                                Admin Panel
                            </a>
                        </li>
                        @endif
                        <li>
                            <a href="{{ route('sessions.destroy') }}">
                                <i class="fa fa-fw fa-sign-out"></i>
                                Log Out
                            </a>
                        </li>
                    </ul>
                </li>
                @endif
            </ul>
        </div>
    </div>
</nav>