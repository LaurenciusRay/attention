@if(Auth::guard('eouser')->check())
<li class="nav-item dropdown">
    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
        {{ Auth::guard('eouser')->user()->name }} <span class="caret"></span>
    </a>
    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
        <a href="" class="dropdown-item">Dashboard</a>
        <a class="dropdown-item" href="#" onclick="event.preventDefault();document.querySelector('#logout-form').submit();">
            Logout
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
    </div>
</li>
@else
<li class="nav-item">
    <a class="nav-link" href="{{ route('login') }}">Login</a>
</li>
<li class="nav-item">
    <a class="nav-link" href="{{ route('register') }}">Register</a>
</li>
@endif
@if(Auth::guard('tenantuser')->check())
<li class="nav-item dropdown">
    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
        {{ Auth::guard('tenantuser')->user()->name }} <span class="caret"></span>
    </a>
    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
        <a href="" class="dropdown-item">Dashboard</a>
        <a class="dropdown-item" href="#" onclick="event.preventDefault();document.querySelector('#logout-form').submit();">
            Logout
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
    </div>
</li>
@else
<li class="nav-item">
    <a class="nav-link" href="{{ route('login') }}">Login</a>
</li>
<li class="nav-item">
    <a class="nav-link" href="{{ route('register') }}">Register</a>
</li>
@endif