<nav class="navbar has-shadow">
                <div class="container">
                    <div class="navbar-brand">
                        <a class="nav-item" href="{{route('home')}}">
                            <img src="{{asset('images/morris.png')}}" alt="Morris Web Development">
                        </a>
                        <a href="/create" class="navbar-item is-tab is-hidden-mobile m-l-10">Create</a>
                        <a href="/share" class="navbar-item is-tab is-hidden-mobile">Share</a>
                        <a href="/post" class="navbar-item is-tab is-hidden-mobile">Blog</a>
                        <a href="/about" class="navbar-item is-tab is-hidden-mobile">About</a>
                        <a href="/contact" class="navbar-item is-tab is-hidden-mobile">Contact</a>
                    </div>
                    <div class="navbar-end nav-menu">
                        @if(Auth::guest())
                            <a href="{{route('login')}}" class="navbar-item is-tab">Login</a>
                            <a href="{{route('register')}} " class="navbar-item is-tab">Register To Join In</a>
                        @else
                            <button class="dropdown is-aligned-right nav-item is-tab"><span class="user">Hey {{Auth::user()->name}}</span>
                                <span class="icon"><i class="fa fa-caret-down"></i></span>

                                <ul class="dropdown-menu" style="overflow: visable;">
                                    <li><a href=""><span class="icon">
                          <i class="fa fa-fw fa-user-circle-o m-r-5"></i>
                        </span> Profile</a></li>
                                    <li><a href=""><span class="icon">
                          <i class="fa fa-fw fa-bell m-r-5"></i>
                        </span>Notifications</a></li>
                                    <li><a href=""><span class="icon">
                          <i class="fa fa-fw fa-cog m-r-5"></i>
                        </span>Settings</a></li>
                        <li><a href="{{route('manage.dashboard')}}"><span class="icon"><i class="fa fa-fw fa-cog m-r-5"></i></span>
                            Manage
                        </a></li>
                                    <li class="seperator"></li>
                                    <li><a href="{{route('logout')}}" onclick="event.preventDefault();
                     document.getElementById('logout-form').submit();">
                  <span class="icon">
                    <i class="fa fa-fw fa-sign-out m-r-5"></i>
                  </span>Logout</a>
                @include('_includes.forms.logout')
            </li>
                                </ul>
                            </button>
                        @endif
                    </div>
                </div>
            </nav>
