<nav class="green">
    <div class="nav-wrapper">
      <a href="{{route('home')}}" class="brand-logo"><img src="{{asset('img/logo-app.png')}}" class="responsive-img nav-logo" style="padding-bottom: 10px"></a>
      <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
      <ul class="right hide-on-med-and-down">
        <li><a class="dropdown-button" href="#!" data-activates="ads">Ads <i class="material-icons right">arrow_drop_down</i></a></li>
        <li>
          <a href="{{ route('logout') }}"
              onclick="event.preventDefault();
                       document.getElementById('logout-form').submit();">
              Logout  <i class="material-icons right">exit_to_app</i>
          </a>

          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              {{ csrf_field() }}
          </form>
        </li>
      </ul>
      <ul class="side-nav" id="mobile-demo">
        <li><a href="sass.html">Ads</a></li>
        <li>
          <a href="{{ route('logout') }}"
              onclick="event.preventDefault();
                       document.getElementById('logout-form').submit();">
              Logout
          </a>

          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              {{ csrf_field() }}
          </form>
        </li>
      </ul>
    </div>
</nav>
{{-- START DROPDOWN ADS --}}
<ul id="ads" class="dropdown-content">
  <li><a href="{{route('advertisement.create')}}">Create Ads</a></li>
  <li><a href="{{route('advertisement.mine')}}">My Ads</a></li>
  <li><a href="{{route('advertisement.index')}}">Looking for Ads</a></li>
</ul>
{{-- END DROPDOWN ADS --}}
