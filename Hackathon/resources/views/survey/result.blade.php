<!doctype html>
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
    <div class="navbar-fixed">
      <nav>
        <div class="nav-wrapper green">
          <a href="#header" class="brand-logo"> <img src="{{asset('img/logo-app.png')}}" class="responsive-img nav-logo" style="padding-bottom: 10px"> </a>
          <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
          <ul class="right hide-on-med-and-down">
            <li><a href="{{route('index')}}">About</a></li>
            <li><a href="{{route('index')}}">Target</a></li>
            <li><a href="{{route('index')}}">Join</a></li>
            <li><a href="{{route('survey')}}">Survey</a></li>
          </ul>
        </div>
      </nav>
    </div>
    <ul class="side-nav" id="mobile-demo">
      <li><a href="{{route('index')}}">About</a></li>
      <li><a href="{{route('index')}}">Target</a></li>
      <li><a href="{{route('index')}}">Join</a></li>
      <li><a href="{{route('survey')}}">Survey</a></li>
    </ul>
  </header>
  <div class="parallax-container section scrollspy"  id="header" class="">
    <div class="parallax "><img src="{{asset('img/header.png')}}"></div>
    <div class="row">
      <div class="col l11 offset-l1">
        <h3 class="white-text" style="margin-top: 25%">
          Search, Find, Take Up <br> Everything You Want!
        </h3>
      </div>
    </div>
  </div>
  <!-- END HEADER -->

  {{-- START CONTENT --}}
  <div class="container-fluid green full-height">
    <div class="row">
      <div class="col l12 s12 center">
        <h3 class="white-text">Hasil Survey Show Up!</h3>
      </div>
    </div>
    <div class="row">
      <div class="col l12 s12 white">
        <h5>Daftar Koresponden</h5>
        <table class="bordered">
          <tr>
            {{-- <th>Email</th> --}}
            <th>Umur</th>
            <th>Alamat</th>
            <th>Pekerjaan</th>
            <th class="hide-on-small-only">Hobi</th>
            <th class="hide-on-small-only">Sosial Media</th>
            <th>Saran</th>
          </tr>
          @foreach ($data as $row)
            <tr>
              {{-- <td>{{$row->email}}</td> --}}
              <td>{{$row->age}}</td>
              <td>{{$row->address}}</td>
              <td>{{$row->job}}</td>
              <td class="hide-on-small-only">{{$row->hobby}}</td>
              <td class="hide-on-small-only">{{$row->socmed}}</td>
              <td>{{$row->suggestion}}</td>
            </tr>
          @endforeach
        </table>
      </div>
    </div>
    <div class="row">
      <div class="col l12 s12 white">
        <h5>Aspek Sistem</h5>
        <table class="bordered">
          <tr>
            <th>Pertanyaan</th>
            <th>Hasil</th>
          </tr>
          <tr>
            <td>Tampilan Show Up! mudah dikenali</td>
            <td>@if ($system->avg('interface') > 2)
              Sangat Setuju
            @elseif ($system->avg('interface') > 1)
              Setuju
            @else
              Tidak Setuju
            @endif </td>
          </tr>
          <tr>
            <td>Show Up! mudah dioperasikan</td>
            <td>
              @if ($system->avg('operation') > 2)
                Sangat Setuju
              @elseif ($system->avg('operation') > 1)
                Setuju
              @else
                Tidak Setuju
              @endif
            </td>
          </tr>
          <tr>
            <td>Warna pada Show Up! nyaman dilihat dan tidak membosankan</td>
            <td>
              @if ($system->avg('color') > 2)
                Sangat Setuju
              @elseif ($system->avg('color') > 1)
                Setuju
              @else
                Tidak Setuju
              @endif
            </td>
          </tr>
          <tr>
            <td>Penempatan menu pada Show Up! mudah dikenali</td>
            <td>
              @if ($system->avg('placement') > 2)
                Sangat Setuju
              @elseif ($system->avg('placement') > 1)
                Setuju
              @else
                Tidak Setuju
              @endif
            </td>
          </tr>
          <tr>
            <td>Adanya error pada Show Up!</td>
            <td>
              @if ($system->avg('error') > 2)
                Sangat Setuju
              @elseif ($system->avg('error') > 1)
                Setuju
              @else
                Tidak Setuju
              @endif
            </td>
          </tr>
        </table>
      </div>
    </div>
    <div class="row">
      <div class="col l12 s12 white">
        <h5>Aspek Pengguna</h5>
        <table class="bordered">
          <tr>
            <th>Pertanyaan</th>
            <th>Hasil</th>
          </tr>
          <tr>
            <td>Kesulitan mempromosikan barang</td>
            <td>
              @if ($user->avg('promotion') > 2)
                Sangat Setuju
              @elseif ($user->avg('promotion') > 1)
                Setuju
              @else
                Tidak Setuju
              @endif
            </td>
          </tr>
          <tr>
            <td>Simbol pada Show Up! mudah dipahami</td>
            <td>
              @if ($user->avg('symbol') > 2)
                Sangat Setuju
              @elseif ($user->avg('symbol') > 1)
                Setuju
              @else
                Tidak Setuju
              @endif
            </td>
          </tr>
          <tr>
            <td>Karakter pada Show Up! mudah dipahami</td>
            <td>
              @if ($user->avg('character') > 2)
                Sangat Setuju
              @elseif ($user->avg('character') > 1)
                Setuju
              @else
                Tidak Setuju
              @endif
            </td>
          </tr>
        </table>
      </div>
    </div>
    <div class="row">
      <div class="col l12 s12 white">
        <h5>Aspek Interaksi</h5>
        <table class="bordered">
          <tr>
            <th>Pertanyaan</th>
            <th>Hasil</th>
          </tr>
          <tr>
            <td>Reaksi pertama pengguna mengenai Show Up!</td>
            <td>
              @if ($interaction->avg('first_impression') > 2)
                Sangat Setuju
              @elseif ($interaction->avg('first_impression') > 1)
                Setuju
              @else
                Tidak Setuju
              @endif
            </td>
          </tr>
          <tr>
            <td>Menu dan animasi pada Show Up! merespon dengan cepat</td>
            <td>
              @if ($interaction->avg('animation') > 2)
                Sangat Setuju
              @elseif ($interaction->avg('animation') > 1)
                Setuju
              @else
                Tidak Setuju
              @endif
            </td>
          </tr>
          <tr>
            <td>Menurut pengguna seberapa besar pengaruh tampilan grafis dalam suatu aplikasi</td>
            <td>
              @if ($interaction->avg('graphic') > 2)
                Sangat Setuju
              @elseif ($interaction->avg('graphic') > 1)
                Setuju
              @else
                Tidak Setuju
              @endif
            </td>
          </tr>
          <tr>
            <td>Pengguna ingin menggunakan Show Up! kembali</td>
            <td>
              @if ($interaction->avg('come_back') > 2)
                Sangat Setuju
              @elseif ($interaction->avg('come_back') > 1)
                Setuju
              @else
                Tidak Setuju
              @endif
            </td>
          </tr>
        </table>
      </div>
    </div>
    <div class="row">
      <div class="col l12 s12 white">
        <h5>Aspek Kompetitor</h5>
        <table class="bordered">
          <tr>
            <th>Pertanyaan</th>
            <th>Show Up!</th>
            <th>Lainnya</th>
          </tr>
          <tr>
            <td>Portal lowongan kerja</td>
            <td>
              @if ($ShowUp->avg('job_vacancy') > 2)
                Sangat Setuju
              @elseif ($ShowUp->avg('job_vacancy') > 1)
                Setuju
              @else
                Tidak Setuju
              @endif
            </td>
            <td>
              @if ($others->avg('job_vacancy') > 2)
                Sangat Setuju
              @elseif ($others->avg('job_vacancy') > 1)
                Setuju
              @else
                Tidak Setuju
              @endif
            </td>
          </tr>
          <tr>
            <td>Data security</td>
            <td>
              {{-- $ShowUp->avg('data_security') --}}
              @if ($ShowUp->avg('data_security') > 2)
                Sangat Setuju
              @elseif ($ShowUp->avg('data_security') > 1)
                Setuju
              @else
                Tidak Setuju
              @endif
            </td>
            <td>
              {{-- $others->avg('data_security') --}}
              @if ($others->avg('data_security') > 2)
                Sangat Setuju
              @elseif ($others->avg('data_security') > 1)
                Setuju
              @else
                Tidak Setuju
              @endif
            </td>
          </tr>
          <tr>
            <td>Editing poster dan video untuk iklan</td>
            <td>
              {{-- $ShowUp->avg('editing') --}}
              @if ($ShowUp->avg('editing') > 2)
                Sangat Setuju
              @elseif ($ShowUp->avg('editing') > 1)
                Setuju
              @else
                Tidak Setuju
              @endif
            </td>
            <td>
              {{-- $others->avg('editing') --}}
              @if ($others->avg('editing') > 2)
                Sangat Setuju
              @elseif ($others->avg('editing') > 1)
                Setuju
              @else
                Tidak Setuju
              @endif
            </td>
          </tr>
          <tr>
            <td>Customer care 24 jam</td>
            <td>
              {{-- $ShowUp->avg('cs') --}}
              @if ($ShowUp->avg('cs') > 2)
                Sangat Setuju
              @elseif ($ShowUp->avg('cs') > 1)
                Setuju
              @else
                Tidak Setuju
              @endif
            </td>
            <td>
              {{-- $others->avg('cs') --}}
              @if ($others->avg('cs') > 2)
                Sangat Setuju
              @elseif ($others->avg('cs') > 1)
                Setuju
              @else
                Tidak Setuju
              @endif
            </td>
          </tr>
          <tr>
            <td>Harga terjangkau</td>
            <td>
              {{-- $ShowUp->avg('price') --}}
              @if ($ShowUp->avg('price') > 2)
                Sangat Setuju
              @elseif ($ShowUp->avg('price') > 1)
                Setuju
              @else
                Tidak Setuju
              @endif
            </td>
            <td>
              {{-- $others->avg('price') --}}
              @if ($others->avg('price') > 2)
                Sangat Setuju
              @elseif ($others->avg('price') > 1)
                Setuju
              @else
                Tidak Setuju
              @endif
            </td>
          </tr>
          <tr>
            <td>Penyesuaian lokasi pengguna</td>
            <td>
              {{-- $ShowUp->avg('location') --}}
              @if ($ShowUp->avg('location') > 2)
                Sangat Setuju
              @elseif ($ShowUp->avg('location') > 1)
                Setuju
              @else
                Tidak Setuju
              @endif
            </td>
            <td>
              {{-- $others->avg('location') --}}
              @if ($others->avg('location') > 2)
                Sangat Setuju
              @elseif ($others->avg('location') > 1)
                Setuju
              @else
                Tidak Setuju
              @endif
            </td>
          </tr>
        </table>
      </div>
    </div>
  </div>
  {{-- END CONTENT --}}

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
