<!doctype html>
<html lang="ja">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>

    <title>自己紹介サイト</title>
    <style type="text/css">
      
  * {
  color: white;
  box-sizing: border-box;
}

body {
  background-image:url("images/iikana.jpg");
  margin: 0;
  padding: 0;
  border: 0;
      background-position: top center;
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: cover;
}

.title {
  width: 500px;
  margin:auto;
  font-family: 'Damion', cursive;
  font-size:80px;
  top:70px;
  position: relative;
  text-shadow: 3px 3px 0px #2c3e50;
  text-align: center;
  padding-top: 30vh;
}

.menu {
  position: fixed;
  height: 100%;
  width: 65px;
  background: #151515;
  transition:width 1s;
  overflow: hidden;
  font-family: 'Michroma', sans-serif;
  z-index: 99;
}

.menu:hover {
  width: 220px;
}

.menuItem span {
  position: absolute;
  left:80px;
  top:20px;
  transition:color 1s;
  color:rgba(255,255,255,0);
}

.menu:hover .menuItem  span {
 color:rgba(255,255,255,1);
}

.menuItem {
  position: relative;
  padding: 20px;
  transition:border .5s, background .2s;  
}

.menuItem:hover {
  background: #34495e;
  cursor: pointer;
}

.uno {
  border-left:5px solid #16a085;
}

.uno:hover{
  border-left:20px solid #16a085;
}

.dos {
 border-left:5px solid #2980b9;
}

.dos:hover {
 border-left:20px solid #2980b9;
}

.tres {
  border-left:5px solid #8e44ad;
}

.tres:hover {
  border-left:20px solid #8e44ad;
}

.cuatro {
  border-left:5px solid #e67e22;
}

.cuatro:hover {
  border-left:20px solid #e67e22;
}

.cinco {
 border-left:5px solid #e74c3c;
}

.cinco:hover {
 border-left:20px solid #e74c3c;
}

.nav{
    float: right;
    display:inline-block;
}
.nav a{
    color: white;
     padding-right: 12px;
}


    </style>
  </head>
  
  <body>
      
   
  
       <div class="nav">
        @if (Route::has('login'))
            
                @auth
                    <a href="{{ url('/home') }}">Home</a>
                                    <a  href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                @else
                    <a href="{{ route('login') }}">Login</a>
                    <a href="{{ route('register') }}">Register</a>
                @endauth
            </div>
        @endif
  
   
  
    <link href='https://fonts.googleapis.com/css?family=Michroma' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Damion' rel='stylesheet' type='text/css'>

<div class="menu">
  <div class="menuItem uno">1<a href="kadai-html.blade.php"><span>about Manatee</span></a></div>
  <div class="menuItem dos">2<a href="rakuma.blade.php"><span>about Rakuma</span></a></div>
  <div class="menuItem tres">3<a href=""><span>reference</span></a></div>
  <div class="menuItem cuatro">4<a href=""><span>history</span></a></div>
  <div class="menuItem cinco">5<a href="mailto:kymmmana@gmail.com"><span>Contact us</span></a></div>
</div>
  
<div class="title">
  生き急ぐなよ
</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
   
  </body>
</html>
