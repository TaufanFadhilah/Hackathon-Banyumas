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
    @include('layouts.navbar')
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
  <div id="survey" class="container section scrollspy">
    <div class="row">
      <div class="col l12 center">
        <h3>Bantu kami untuk mengisi survey ini!</h3>
        @if (session('status'))
            <h4>Terima Kasih</h4><br>
            {{ session('status') }}
        @endif
        <form class="col s12" action="{{route('survey')}}" method="post">
          {{ csrf_field() }}
          <div class="row">
            <div class="input-field col l6 s12">
              <input name="email" type="email" class="validate" required>
              <label for="icon_prefix">Email</label>
            </div>
            <div class="input-field col l6 s12">
              <input name="age" type="number" class="validate" required>
              <label for="icon_prefix">Umur</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col l6 s12">
              <input name="address" type="text" class="validate" required>
              <label for="icon_prefix">Kota</label>
            </div>
            <div class="input-field col l6 s12">
              <input name="job" type="text" class="validate" required>
              <label for="icon_prefix">Pekerjaan</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col l6 s12">
              <input name="hobi" type="text" class="validate" required>
              <label for="icon_prefix">Hobi</label>
            </div>
            {{-- <div class="input-field col l6 s12"> --}}
              <p>Sosial Media</p>
              <p>
                <input id="cb1" type="checkbox" value="LINE" name="socmed[]"/>
                <label for="cb1">LINE</label>
                <input id="cb2" type="checkbox" value="Instagram" name="socmed[]"/>
                <label for="cb2">Instagram</label>
                <input id="cb3" type="checkbox" value="Facebook" name="socmed[]"/>
                <label for="cb3">Facebook</label>
                <input id="cb4" type="checkbox" value="Others" name="socmed[]"/>
                <label for="cb4">Lainnya</label>
              </p>
              {{-- <p>
                <input id="interface4" name="systemInterface" type="radio" value='1'/>
                <label for="interface4">Kurang Setuju</label>
                <input id="interface5"name="systemInterface" type="radio" value='2'/>
                <label for="interface5">Setuju</label>
                <input id="interface6" name="systemInterface" type="radio" value='3'/>
                <label for="interface6">Sangat Setuju</label>
              </p> --}}
            {{-- </div> --}}
          </div>
          <div class="row">
            <div class="col l12 s12">
              <ul class="collapsible" data-collapsible="accordion">
                <li>
                  <div class="collapsible-header">Aspek Sistem</div>
                  <div class="collapsible-body">
                    <table class="table">
                      <tr>
                        <th>Pertanyaan</th>
                        <th>Jawaban</th>
                      </tr>
                      <tr>
                        <td>Tampilan Show Up! mudah dikenali</td>
                        <td>
                          <p>
                            <input id="interface1" name="systemInterface" type="radio" value='1'/>
                            <label for="interface1">Kurang Setuju</label>
                            <input id="interface2"name="systemInterface" type="radio" value='2'/>
                            <label for="interface2">Setuju</label>
                            <input id="interface3" name="systemInterface" type="radio" value='3'/>
                            <label for="interface3">Sangat Setuju</label>
                          </p>
                        </td>
                      </tr>
                      <tr>
                        <td>Show Up! mudah dioperasikan</td>
                        <td>
                          <p>
                            <input id="Operation1" name="systemOperation" type="radio" value='1'/>
                            <label for="Operation1">Kurang Setuju</label>
                            <input id="Operation2"name="systemOperation" type="radio" value='2'/>
                            <label for="Operation2">Setuju</label>
                            <input id="Operation3" name="systemOperation" type="radio" value='3'/>
                            <label for="Operation3">Sangat Setuju</label>
                          </p>
                        </td>
                      </tr>
                      <tr>
                        <td>Warna pada Show Up! nyaman dilihat dan tidak membosankan</td>
                        <td>
                          <p>
                            <input id="Color1" name="systemColor" type="radio" value='1'/>
                            <label for="Color1">Kurang Setuju</label>
                            <input id="Color2"name="systemColor" type="radio" value='2'/>
                            <label for="Color2">Setuju</label>
                            <input id="Color3" name="systemColor" type="radio" value='3'/>
                            <label for="Color3">Sangat Setuju</label>
                          </p>
                        </td>
                      </tr>
                      <tr>
                        <td>Penempatan menu pada Show Up! mudah dikenali</td>
                        <td>
                          <p>
                            <input id="Placement1" name="systemPlacement" type="radio" value='1'/>
                            <label for="Placement1">Kurang Setuju</label>
                            <input id="Placement2"name="systemPlacement" type="radio" value='2'/>
                            <label for="Placement2">Setuju</label>
                            <input id="Placement3" name="systemPlacement" type="radio" value='3'/>
                            <label for="Placement3">Sangat Setuju</label>
                          </p>
                        </td>
                      </tr>
                      <tr>
                        <td>Adanya error pada Show Up!</td>
                        <td>
                          <p>
                            <input id="Error1" name="systemError" type="radio" value='1'/>
                            <label for="Error1">Kurang Setuju</label>
                            <input id="Error2"name="systemError" type="radio" value='2'/>
                            <label for="Error2">Setuju</label>
                            <input id="Error3" name="systemError" type="radio" value='3'/>
                            <label for="Error3">Sangat Setuju</label>
                          </p>
                        </td>
                      </tr>
                    </table>
                  </div>
                </li>
                <li>
                  <div class="collapsible-header">Aspek Pengguna</div>
                  <div class="collapsible-body">
                    <table class="table">
                      <tr>
                        <th>Pertanyaan</th>
                        <th>Jawaban</th>
                      </tr>
                      <tr>
                        <td>Kesulitan mempromosikan barang</td>
                        <td>
                          <p>
                            <input id="Promotion1" name="userPromotion" type="radio" value='1'/>
                            <label for="Promotion1">Kurang Setuju</label>
                            <input id="Promotion2"name="userPromotion" type="radio" value='2'/>
                            <label for="Promotion2">Setuju</label>
                            <input id="Promotion3" name="userPromotion" type="radio" value='3'/>
                            <label for="Promotion3">Sangat Setuju</label>
                          </p>
                        </td>
                      </tr>
                      <tr>
                        <td>Simbol pada Show Up! mudah dipahami</td>
                        <td>
                          <p>
                            <input id="Symbol1" name="userSymbol" type="radio" value='1'/>
                            <label for="Symbol1">Kurang Setuju</label>
                            <input id="Symbol2"name="userSymbol" type="radio" value='2'/>
                            <label for="Symbol2">Setuju</label>
                            <input id="Symbol3" name="userSymbol" type="radio" value='3'/>
                            <label for="Symbol3">Sangat Setuju</label>
                          </p>
                        </td>
                      </tr>
                      <tr>
                        <td>Karakter pada Show Up! mudah dipahami</td>
                        <td>
                          <p>
                            <input id="Character1" name="userCharacter" type="radio" value='1'/>
                            <label for="Character1">Kurang Setuju</label>
                            <input id="Character2"name="userCharacter" type="radio" value='2'/>
                            <label for="Character2">Setuju</label>
                            <input id="Character3" name="userCharacter" type="radio" value='3'/>
                            <label for="Character3">Sangat Setuju</label>
                          </p>
                        </td>
                      </tr>
                    </table>
                  </div>
                </li>
                <li>
                  <div class="collapsible-header">Aspek Interaksi</div>
                  <div class="collapsible-body">
                    <table class="table">
                      <tr>
                        <th>Pertanyaan</th>
                        <th>Jawaban</th>
                      </tr>
                      <tr>
                        <td>Reaksi pertama pengguna mengenai Show Up!</td>
                        <td>
                          <p>
                            <input id="FirstImpression1" name="interactionFirstImpression" type="radio" value='1'/>
                            <label for="FirstImpression1">Kurang Bagus</label>
                            <input id="FirstImpression2"name="interactionFirstImpression" type="radio" value='2'/>
                            <label for="FirstImpression2">Bagus</label>
                            <input id="FirstImpression3" name="interactionFirstImpression" type="radio" value='3'/>
                            <label for="FirstImpression3">Sangat Bagus</label>
                          </p>
                        </td>
                      </tr>
                      <tr>
                        <td>Menu dan animasi pada Show Up! merespon dengan cepat</td>
                        <td>
                          <p>
                            <input id="Animation1" name="interactionAnimation" type="radio" value='1'/>
                            <label for="Animation1">Kurang Bagus</label>
                            <input id="Animation2"name="interactionAnimation" type="radio" value='2'/>
                            <label for="Animation2">Bagus</label>
                            <input id="Animation3" name="interactionAnimation" type="radio" value='3'/>
                            <label for="Animation3">Sangat Bagus</label>
                          </p>
                        </td>
                      </tr>
                      <tr>
                        <td>Menurut pengguna seberapa besar pengaruh tampilan grafis dalam suatu aplikasi</td>
                        <td>
                          <p>
                            <input id="interactionGraphic1" name="interactionGraphic" type="radio" value='1'/>
                            <label for="interactionGraphic1">Kurang Bagus</label>
                            <input id="interactionGraphic2"name="interactionGraphic" type="radio" value='2'/>
                            <label for="interactionGraphic2">Bagus</label>
                            <input id="interactionGraphic3" name="interactionGraphic" type="radio" value='3'/>
                            <label for="interactionGraphic3">Sangat Bagus</label>
                          </p>
                        </td>
                      </tr>
                      <tr>
                        <td>Pengguna ingin menggunakan Show Up! kembali</td>
                        <td>
                          <p>
                            <input id="interactionComeBack1" name="interactionComeBack" type="radio" value='1'/>
                            <label for="interactionComeBack1">Kurang Bagus</label>
                            <input id="interactionComeBack2"name="interactionComeBack" type="radio" value='2'/>
                            <label for="interactionComeBack2">Bagus</label>
                            <input id="interactionComeBack3" name="interactionComeBack" type="radio" value='3'/>
                            <label for="interactionComeBack3">Sangat Bagus</label>
                          </p>
                        </td>
                      </tr>
                    </table>
                  </div>
                </li>
                <li>
                  <div class="collapsible-header">Aspek Kompetitor</div>
                  <div class="collapsible-body">
                    <table class="table">
                      <tr>
                        <th>Pertanyaan</th>
                        <th>Jawaban</th>
                      </tr>
                      {{-- SHOW UP --}}
                      <tr>
                        <td colspan="2"> <b>Show up!</b> </td>
                      </tr>
                      <tr>
                        <td>Portal lowongan kerja</td>
                        <td>
                          <p>
                            <input id="SUJobVacancy1" name="SUJobVacancy" type="radio" value='1'/>
                            <label for="SUJobVacancy1">Kurang Bagus</label>
                            <input id="SUJobVacancy2"name="SUJobVacancy" type="radio" value='2'/>
                            <label for="SUJobVacancy2">Bagus</label>
                            <input id="SUJobVacancy3" name="SUJobVacancy" type="radio" value='3'/>
                            <label for="SUJobVacancy3">Sangat Bagus</label>
                          </p>
                        </td>
                      </tr>
                      <tr>
                        <td>Data security</td>
                        <td>
                          <p>
                            <input id="SUDataSecurity1" name="SUDataSecurity" type="radio" value='1'/>
                            <label for="SUDataSecurity1">Kurang Bagus</label>
                            <input id="SUDataSecurity2"name="SUDataSecurity" type="radio" value='2'/>
                            <label for="SUDataSecurity2">Bagus</label>
                            <input id="SUDataSecurity3" name="SUDataSecurity" type="radio" value='3'/>
                            <label for="SUDataSecurity3">Sangat Bagus</label>
                          </p>
                        </td>
                      </tr>
                      <tr>
                        <td>Editing poster dan video untuk iklan</td>
                        <td>
                          <p>
                            <input id="SUEditing1" name="SUEditing" type="radio" value='1'/>
                            <label for="SUEditing1">Kurang Bagus</label>
                            <input id="SUEditing2"name="SUEditing" type="radio" value='2'/>
                            <label for="SUEditing2">Bagus</label>
                            <input id="SUEditing3" name="SUEditing" type="radio" value='3'/>
                            <label for="SUEditing3">Sangat Bagus</label>
                          </p>
                        </td>
                      </tr>
                      <tr>
                        <td>Customer care 24 jam</td>
                        <td>
                          <p>
                            <input id="SUCS1" name="SUCS" type="radio" value='1'/>
                            <label for="SUCS1">Kurang Bagus</label>
                            <input id="SUCS2"name="SUCS" type="radio" value='2'/>
                            <label for="SUCS2">Bagus</label>
                            <input id="SUCS3" name="SUCS" type="radio" value='3'/>
                            <label for="SUCS3">Sangat Bagus</label>
                          </p>
                        </td>
                      </tr>
                      <tr>
                        <td>Harga terjangkau</td>
                        <td>
                          <p>
                            <input id="SUPrice1" name="SUPrice" type="radio" value='1'/>
                            <label for="SUPrice1">Kurang Bagus</label>
                            <input id="SUPrice2"name="SUPrice" type="radio" value='2'/>
                            <label for="SUPrice2">Bagus</label>
                            <input id="SUPrice3" name="SUPrice" type="radio" value='3'/>
                            <label for="SUPrice3">Sangat Bagus</label>
                          </p>
                        </td>
                      </tr>
                      <tr>
                        <td>Penyesuaian lokasi pengguna</td>
                        <td>
                          <p>
                            <input id="SULocation1" name="SULocation" type="radio" value='1'/>
                            <label for="SULocation1">Kurang Bagus</label>
                            <input id="SULocation2"name="SULocation" type="radio" value='2'/>
                            <label for="SULocation2">Bagus</label>
                            <input id="SULocation3" name="SULocation" type="radio" value='3'/>
                            <label for="SULocation3">Sangat Bagus</label>
                          </p>
                        </td>
                      </tr>
                      {{-- SOCMED --}}
                      <tr>
                        <td colspan="2"> <b>Media Sosial Lainnya</b> </td>
                      </tr>
                      <tr>
                        <td>Portal lowongan kerja</td>
                        <td>
                          <p>
                            <input id="OJobVacancy1" name="OJobVacancy" type="radio" value='1'/>
                            <label for="OJobVacancy1">Kurang Bagus</label>
                            <input id="OJobVacancy2"name="OJobVacancy" type="radio" value='2'/>
                            <label for="OJobVacancy2">Bagus</label>
                            <input id="OJobVacancy3" name="OJobVacancy" type="radio" value='3'/>
                            <label for="OJobVacancy3">Sangat Bagus</label>
                          </p>
                        </td>
                      </tr>
                      <tr>
                        <td>Data security</td>
                        <td>
                          <p>
                            <input id="ODataSecurity1" name="ODataSecurity" type="radio" value='1'/>
                            <label for="ODataSecurity1">Kurang Bagus</label>
                            <input id="ODataSecurity2"name="ODataSecurity" type="radio" value='2'/>
                            <label for="ODataSecurity2">Bagus</label>
                            <input id="ODataSecurity3" name="ODataSecurity" type="radio" value='3'/>
                            <label for="ODataSecurity3">Sangat Bagus</label>
                          </p>
                        </td>
                      </tr>
                      <tr>
                        <td>Editing poster dan video untuk iklan</td>
                        <td>
                          <p>
                            <input id="OEditing1" name="OEditing" type="radio" value='1'/>
                            <label for="OEditing1">Kurang Bagus</label>
                            <input id="OEditing2"name="OEditing" type="radio" value='2'/>
                            <label for="OEditing2">Bagus</label>
                            <input id="OEditing3" name="OEditing" type="radio" value='3'/>
                            <label for="OEditing3">Sangat Bagus</label>
                          </p>
                        </td>
                      </tr>
                      <tr>
                        <td>Customer care 24 jam</td>
                        <td>
                          <p>
                            <input id="OCS1" name="OCS" type="radio" value='1'/>
                            <label for="OCS1">Kurang Bagus</label>
                            <input id="OCS2"name="OCS" type="radio" value='2'/>
                            <label for="OCS2">Bagus</label>
                            <input id="OCS3" name="OCS" type="radio" value='3'/>
                            <label for="OCS3">Sangat Bagus</label>
                          </p>
                        </td>
                      </tr>
                      <tr>
                        <td>Harga terjangkau</td>
                        <td>
                          <p>
                            <input id="OPrice1" name="OPrice" type="radio" value='1'/>
                            <label for="OPrice1">Kurang Bagus</label>
                            <input id="OPrice2"name="OPrice" type="radio" value='2'/>
                            <label for="OPrice2">Bagus</label>
                            <input id="OPrice3" name="OPrice" type="radio" value='3'/>
                            <label for="OPrice3">Sangat Bagus</label>
                          </p>
                        </td>
                      </tr>
                      <tr>
                        <td>Penyesuaian lokasi pengguna</td>
                        <td>
                          <p>
                            <input id="OLocation1" name="OLocation" type="radio" value='1'/>
                            <label for="OLocation1">Kurang Bagus</label>
                            <input id="OLocation2"name="OLocation" type="radio" value='2'/>
                            <label for="OLocation2">Bagus</label>
                            <input id="OLocation3" name="OLocation" type="radio" value='3'/>
                            <label for="OLocation3">Sangat Bagus</label>
                          </p>
                        </td>
                      </tr>
                    </table>
                  </div>
                </li>
              </ul>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12">
              <textarea id="textarea1" class="materialize-textarea" name="suggestion"></textarea>
              <label for="textarea1">Saran</label>
            </div>
          </div>
          <div class="row">
            <div class="col l12">
              <button type="submit" class="btn amber">Kirim</button>
            </div>
          </div>
        </form>
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
    $('.collapsible').collapsible();
    $(".button-collapse").sideNav();
    $('.parallax').parallax();
    $('.scrollspy').scrollSpy({
      scrollOffset : 30
    });
  });
  </script>
</body>
</html>
