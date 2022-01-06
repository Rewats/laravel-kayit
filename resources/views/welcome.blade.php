
<!DOCTYPE html>
<html lang="tr">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">


    <title>Domain Telekom - Domain Sorgulama</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="description" content="Domain Telekom üzerinden domain sorgulama yapın. İstediğiniz alan adını bulun ve domain satın alın. İnternette yerinizi bugün alın."/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300&display=swap" rel="stylesheet">

</head>
<body>



    



    <header>
   
            <div id="app">
                <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm pt-0">
                    <div class="container" >
                        <a class="navbar-brand" href="{{ url('/') }}" style="font-size: 20px">
                            {{ config('app.name', 'Laravel') }}
                        </a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                            <span class="navbar-toggler-icon"></span>
                        </button>
        
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <!-- Left Side Of Navbar -->
                            <ul class="navbar-nav me-auto">
        
                            </ul>
        
                            <!-- Right Side Of Navbar -->
                            <ul class="navbar-nav ms-auto">
                                <!-- Authentication Links -->
                                @guest
                                    @if (Route::has('login'))
                                        <li class="nav-item " >
                                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                        </li>
                                    @endif
        
                                    @if (Route::has('register'))
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                        </li>
                                    @endif
                                @else
                                    <li class="nav-item dropdown">
                                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                            {{ Auth::user()->name }}
                                        </a>
        
                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item" href="{{ route('logout') }}"
                                               onclick="event.preventDefault();
                                                             document.getElementById('logout-form').submit();">
                                                {{ __('Logout') }}
                                            </a>
        
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                @csrf
                                            </form>
                                        </div>
                                    </li>
                                @endguest
                            </ul>
                        </div>
                    </div>
                </nav>
        
                <main class="py-4">
                    @yield('content')
                </main>
            </div>
      
        
      </header>











<style type="text/css">

body {
    /* background:url('/public/img/wall.jpg') no-repeat; */
    background-attachment: fixed;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    background-size: cover;
    background-color: #FFF;
    font-family: 'Roboto Condensed', sans-serif;
}
a {
    color: #2F2F2F;
}
a:hover {
    color: #2F2F2F;
}
h1 {
    color: #000;
    font-size: 50px;
}
h4 {
    color: white;
}
h2 {
    font-size: 25px;
    color: #000;
}
.navbar-right {
    margin-right: 0;
    font-size: 18px;
}

.container {
    margin-top: 20px;
}

.navbar-brand {
    font-size: 34px;
}

#wrapper {
    min-height: 100%;
    height: auto !important;
    height: 100%;
    margin-bottom: -100px; //değeri footer yüksekliği kadar veriyoruz
}
.footer-ghost {
    height: 100px; //değeri footer yüksekliği kadar veriyoruz.
}
footer {
    text-align: center;
    font-family: Arial;
    font-size: 15px;
    color: #353535;
}

.navbar-toggle {
    background-color: #DDD;
}
.navbar-default .navbar-nav>li>a {
    color: #000;
}
.navbar-default .navbar-nav>li>a:focus {
    color:#000;
}
.navbar-default .navbar-nav>li>a:hover {
    color:#000;
}
.navbar-default .navbar-brand {
    color: #000;
}
.navbar-default .navbar-brand:hover {
    color: #000;
}


h4, .h4, h5, .h5, h6, .h6 {
    margin-top: 10px;
    margin-bottom: 0px;
}

.bg-light {
    --bs-bg-opacity: 1;
    background-color: white !important;
}

.form-control:focus {
    color: #212529;
    background-color: #fff;
    border-color: #198753;
    outline: 0;
    box-shadow: 0 0 0 0.25rem rgb(255 255 255 / 25%);
}
</style>














<div class="container">
    <div class="row">
        

 <h1 class="text-center"><span class="text-success">Domain</span>Telekom</h1>
 <p style="font-size:20px;" class="text-center">.com .net .org gibi siteleri sorgulayın ve tescil edin.</p>


 <div class="col-md-3"></div>
 <div class="col-md-6">

        <form action="index.php" method="get">
                                <div class="form-group">
                                    <input  type="text" name="domain" 
                                    class="form-control form-control-lg" value=""
                                    placeholder="Tescil edilecek alan adını yazın" autofocus required>
                                </div>
                                
                                
                                
                                <br>
                               
                                
                                    <button type="button" class="btn btn-success d-grid gap-2 col-3 mx-auto">Sorgula</button>
    
                                

                            </form>

                        </div>
 <div class="col-md-3"></div>

</div>


    <footer class="py-3 my-4">
      <ul class="nav justify-content-center border-bottom pb-3 mb-3">
        <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Hakkında</a></li>
        <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Bilgi Merkezi</a></li>
        <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">İletişim</a></li>
      </ul>
      <p class="text-center text-muted">© 2022 DomainTelekom</p>
    </footer>




    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>









</body>

</html>