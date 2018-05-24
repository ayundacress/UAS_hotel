@include('layouts.header')

@include('layouts.sidebar')

    <div class="content-container wrap" style="background:#3E4651!important;">
        <nav class="navbar navbar-default">
            <div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#"> Ayunda Hotel</a>
                    </div>
                    <ul class="nav navbar-nav navbar-right">

                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-user"></i> Ayunda</a>
                        </li>
                        <li class="dropdown">
                            <a href="{{ url('logout') }}" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Logout</a>
                        </li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container-fluid -->
        </nav>
        <div class="container-fluid" style="background:#3E4651!important;">
            
            @yield('content')


        </div>
    </div>
@include('layouts.footer')