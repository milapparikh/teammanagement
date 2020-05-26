<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    <meta name="HandheldFriendly" content="true"/>
    <meta name="apple-mobile-web-app-capable" content="yes"/>
    <title>Esfaria</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">    
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">   
</head>

<body class="body" data-step="1" data-sequence="1">
    <main class="page-bg">
    <div id="app">
        @include('flash-message')


        @yield('content')
    </div>

      <footer class="footer">
        <section class="">
          <div class="container">
            <div class="row">
              <div class="col-12 col-sm-12 col-md-8 col-lg-8 col-xl-8">
                <div class="widget widget-links">
                  <div class="widget-body">
                    <ul>
                      <li><a href="#">Terms and Conditions</a></li>
                      <li><a href="#">Privacy Policy</a></li>
                      <li><a href="#">About Us</a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                <div class="copyright">&copy;  2019, All Rights Reserved</div>
              </div>
            </div>
          </div>
        </section>
      </footer>

    <!-- Scripts -->
    <script src="{{ asset('/js/jquery.min.js') }}"></script>  
    <script src="{{ asset('/js/jquery.min.js') }}"></script>  
    <script src="{{ asset('/js/jquery.min.js') }}"></script>  
    <script src="{{ asset('/js/jquery.min.js') }}"></script>  
    <script src="{{ asset('/js/jquery.min.js') }}"></script> 
    </main>
</body>
</html>