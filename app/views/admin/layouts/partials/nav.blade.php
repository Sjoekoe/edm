<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="{{ route('home') }}" class="navbar-brand">EDM-School</a>
        </div>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
                <li>{{ link_to_route('admin.index', 'Dashboard') }}</li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">{{ $currentUser->username }} <span
                            class="caret"></span></a>
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
                        <li>
                            <a href="{{ route('home') }}">
                                <i class="fa fa-fw fa-home"></i>
                                Site
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('sessions.destroy') }}">
                                <i class="fa fa-fw fa-sign-out"></i>
                                Log Out
                            </a>
                        </li>
                    </ul>
                </li>
        </div>
    </div>
</div>