
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <button type="button" id="sidebarCollapse" class="btn btn-info">
                    <i class="fas fa-align-left"></i>
                    <span></span>
                </button>
                <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-align-justify"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="nav navbar-nav ml-auto">
                        @auth
                        <li class="nav-item mr-2">
                            <button class="nav-link btn btn-sm btn-info text-white">
                                {{auth()->user()->name}}
                                <i class="fas fa-user"></i>
                            </button>
                        </li>
                        <li class="nav-item">
                            <form class="inline" action="/logout" method="POST">
                                @csrf
                                <button type="submit" class="nav-link btn btn-sm btn-danger text-white">
                                    Logout
                                </button>
                            </form>
                        </li>
                        @else
                        <li class="nav-item active">
                            <a class="nav-link" href="/login">Log In</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/register">Register</a>
                        </li>
                        @endauth
                    </ul>
                </div>
            </div>
        </nav>
