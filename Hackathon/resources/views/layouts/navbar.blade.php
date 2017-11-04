<nav class="green">
    <div class="nav-wrapper">
      <a href="{{route('welcome')}}" class="brand-logo"><img src="{{asset('img/logo-app.png')}}" class="responsive-img nav-logo" style="padding-bottom: 10px"></a>
      <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
      <ul class="right hide-on-med-and-down">
        <li><a href="{{route('advertisement.index')}}">Ads</a></li>
        <li><a href="{{route('login')}}">Login</a></li>
      </ul>
      <ul class="side-nav" id="mobile-demo">
        <li><a href="{{route('advertisement.index')}}">Ads</a></li>
        <li><a href="{{route('login')}}">Login</a></li>
      </ul>
    </div>
</nav>
