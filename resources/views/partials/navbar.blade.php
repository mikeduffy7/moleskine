<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <!-- Branding Image -->
    <a class="navbar-brand" href="{{ url('/') }}">
        {{ config('app.name', 'Moleskine') }}
    </a>

    <div class="collapse navbar-collapse" id="navbarNav">
        <!-- Left Side of Navbar -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="page">New Post</a>
            </li>
            <li>
                <a class="nav-link" href="journal">Journals</a>
            </li>
        </ul>
        <!-- Right Side Of Navbar -->
        <ul class="navbar-nav ml-auto">
            <!-- Authentication Links -->
            @guest
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('login') }}">Login</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('register') }}">Register</a>
                </li>
            @else
                <li class="nav-item dropdown">
                    <a href="#" 
                      class="nav-link dropdown-toggle" 
                      data-toggle="dropdown" 
                      role="button" 
                      aria-expanded="false" 
                      aria-haspopup="true" 
                      v-pre>
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>

                    <ul class="dropdown-menu">
                        <li class="nav-item">
                            <a class="nav-link"
                                href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                          document.getElementById('logout-form').submit();">
                                Logout
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </li>
                    </ul>
                </li>
            @endguest
        </ul>
    </div>
</nav>