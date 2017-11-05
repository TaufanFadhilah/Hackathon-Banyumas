<nav class="green">
    <div class="nav-wrapper">
      <a href="{{route('home')}}" class="brand-logo"><img src="{{asset('img/logo-app.png')}}" class="responsive-img nav-logo" style="padding-bottom: 10px"></a>
      <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
      <ul class="right hide-on-med-and-down">
        <li><a class="dropdown-button" href="#!" data-activates="ads">Ads <i class="material-icons right">arrow_drop_down</i></a></li>
        <li><a class="dropdown-button" href="#!" data-activates="bids">Bids <i class="material-icons right">arrow_drop_down</i></a></li>
        <li><a class="dropdown-button" href="#!" data-activates="transaction">Transaction <i class="material-icons right">arrow_drop_down</i></a></li>
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
        <li><a href="{{route('user.edit')}}"><i class="material-icons">person</i></a></li>
      </ul>
      <ul class="side-nav" id="mobile-demo">
        <li><a href="{{route('advertisement.create')}}">Create Ads</a></li>
        <li><a href="{{route('advertisement.mine')}}">My Ads</a></li>
        <li><a href="{{route('advertisement.index')}}">Looking for Ads</a></li>
        <li><div class="divider"></div></li>
        <li><a href="{{route('bid.mine')}}">Bids</a></li>
        <li><a href="{{route('bid.choosen')}}">Choosen Bids</a></li>
        <li><div class="divider"></div></li>
        <li><a href="{{route('bid.ongoing')}}">On going task</a></li>
        <li><a href="{{route('bid.done')}}">Done task</a></li>
        <li><a href="{{route('bid.confirmation')}}">Accepted Task</a></li>
        <li><div class="divider"></div></li>
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
{{-- START DROPDOWN BID --}}
<ul id="bids" class="dropdown-content">
  <li><a href="{{route('bid.mine')}}">Bids</a></li>
  <li><a href="{{route('bid.choosen')}}">Choosen Bids</a></li>
  <li><a href="{{route('bid.ongoing')}}">On going task</a></li>
  <li><a href="{{route('bid.done')}}">Done task</a></li>
</ul>
{{-- END DROPDOWN BID --}}
{{-- START DROPDOWN TRANSACTION --}}
<ul id="transaction" class="dropdown-content">
  <li><a href="{{route('bid.confirmation')}}">Accepted Task</a></li>
</ul>
{{-- END DROPDOWN TRANSACTION --}}
