<!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="{{asset('css/materialize.min.css')}}"  media="screen,projection"/>
      <link rel="stylesheet" href="{{asset('css/style.css')}}">
      <title>Up Everything You Want!</title>
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <body>
      <!-- START HEADER -->
      <header>
        @guest
          @include('layouts.navbar')
        @endguest
        @auth
          @include('layouts.navbar-auth')
        @endauth
      </header>
      <div class="parallax-container section scrollspy"  id="header" class="">
        <div class="parallax "><img src="{{asset('img/header.png')}}"></div>
        <div class="row">
          <div class="col l11 offset-l1">
            <h3 class="white-text" style="margin-top: 25%">
              Search, Find, Take Up <br> Everything You Want!
            </h3>
            <p><a href="{{route('survey')}}" class="yellow-text">Help us to improve our services. Take the survey ...</a></p>
          </div>
        </div>
      </div>
      <!-- END HEADER -->

      <!-- START CONTENT -->
      <div class="container full-height valign-wrapper">
        <div class="row">
          <div class="col l5">
            <img src="{{asset('img/landing-page/Picture2.png')}}" class="responsive-img">
          </div>
          <div class="col l7">
            <p>As usual when a new business gets trouble in marketing. In fact, marketing is the most important thing in a business where good marketing can market their products. Besides that, there are Instagram users who have a lot of followers but don't utilize it for right things. In fact, have many followers can provide income for the owner of the account. With Show Up! we will benefit both of them.
</p>
          </div>
        </div>
      </div>

      <div id="about" class="container-fluid full-height green valign-wrapper section scrollspy">
        <div class="row">
          <div class="col l6 offset-l3 center">
            <img src="{{asset('img/white-logo.png')}}" class="responsive-img">
            <p class="white-text">Show Up! is headquartered in Indonesia where the Co-Founder Taufan, Yusuf, Niken are the pioneer of Show Up!.
               Show Up! was founded to help people advertise and promote everything they want to.
                Besides that, Show Up! come with a unique concepts and appearances to get their goals.</p>
          </div>
        </div>
      </div>

      <div class="container-fluid full-height center">
        <div class="row green-text">
          <div class="col l3 s6">
            <h3>Our Services</h3>
            <hr>
          </div>
          <div class="col l3 s6">
            <img src="{{asset('img/landing-page/services/branding.png')}}" class="responsive-img">
          </div>
          <div class="col l3 s6">
            <img src="{{asset('img/landing-page/services/editvideo.png')}}" class="responsive-img">
          </div>
          <div class="col l3 s6">
            <img src="{{asset('img/landing-page/services/portal.png')}}" class="responsive-img">
          </div>
          <div class="col l3 s6">
            <img src="{{asset('img/landing-page/services/postads.png')}}" class="responsive-img">
          </div>
          <div class="col l3 s6">
            <img src="{{asset('img/landing-page/services/editposter.png')}}" class="responsive-img">
          </div>
          <div class="col l3 s6">
            <img src="{{asset('img/landing-page/services/profit.png')}}" class="responsive-img">
          </div>
          <div class="col l3 s6">
            <img src="{{asset('img/landing-page/services/escrow.png')}}" class="responsive-img">
          </div>
        </div>
      </div>

      <div class="container-fluid full-height center">
        <div class="row">
          <div class="col l12 s12 green-text">
            <h3>Our Clients</h3>
            <hr>
          </div>
        </div>
        <div class="row">
          <div class="col l3 s12">
            <img src="{{asset('img/landing-page/clients/business.png')}}" class="responsive-img">
          </div>
          <div class="col l3 s12">
            <img src="{{asset('img/landing-page/clients/event.png')}}" class="responsive-img">
          </div>
          <div class="col l3 s12">
            <img src="{{asset('img/landing-page/clients/instagram.png')}}" class="responsive-img">
          </div>
          <div class="col l3 s12">
            <img src="{{asset('img/landing-page/clients/publicfigure.png')}}" class="responsive-img">
          </div>
        </div>
      </div>

      <div class="container-fluid full-height center">
        <div class="row">
          <div class="col l12 green-text">
            <h3>How we works</h3>
            <hr>
          </div>
        </div>
        <div class="row">
          <div class="col l4 s12">
            <img src="{{asset('img/landing-page/works/1.png')}}" class="responsive-img">
          </div>
          <div class="col l4 s12">
            <img src="{{asset('img/landing-page/works/2.png')}}" class="responsive-img">
          </div>
          <div class="col l4 s12">
            <img src="{{asset('img/landing-page/works/3.png')}}" class="responsive-img">
          </div>
          </div>
          <div class="row">
            <div class="col l4 s12">
              <img src="{{asset('img/landing-page/works/4.png')}}" class="responsive-img">
            </div>
            <div class="col l4 s12">
              <img src="{{asset('img/landing-page/works/5.png')}}" class="responsive-img">
            </div>
            <div class="col l4 s12">
              <img src="{{asset('img/landing-page/works/6.png')}}" class="responsive-img">
            </div>
            </div>
        </div>
      </div>
      <div id="join" class="container-fluid green section scrollspy">
        <div class="row">
          <div class="col l12 s12 center" style="margin-top: 20px">
            <a href="{{route('login')}}"><button class="btn btn-large amber">Start now for free</button></a>
          </div>
        </div>
      </div>
      <!-- END CONTENT -->

      <!-- START FOOTER -->
      <footer class="page-footer grey darken-3">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text">Show Up!</h5>
                <p class="grey-text text-lighten-4">Up Everything You Want!</p>
              </div>
              <div class="col l4 offset-l2 s12">
                <h5 class="white-text">Contact Us</h5>
                <ul>
                  <li><a class="grey-text text-lighten-3" href="#!"><i class="tiny material-icons">email</i></a> public.relation@showup.id</li>
                  <li><a class="grey-text text-lighten-3" href="https://www.instagram.com/showup.official/" target="_blank"><i class="tiny material-icons">photo_camera</i> @showup.official</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container">
            © 2017 Show Up!
            <!-- <a class="grey-text text-lighten-4 right" href="#!">More Links</a> -->
            </div>
          </div>
        </footer>
      <!-- END FOOTER -->
      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
      <script type="text/javascript" src="{{asset('js/materialize.min.js')}}"></script>
      <script type="text/javascript">
      $(document).ready(function(){
        $(".button-collapse").sideNav();
        $('.parallax').parallax();
        $('.scrollspy').scrollSpy({
          scrollOffset : 30
        });
      });
      </script>
    </body>
  </html>
