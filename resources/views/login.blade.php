<!DOCTYPE html>
<html>
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
      <span class="section-background section-background-1"></span>
      <span class="section-background section-background-2"></span>
      <span class="location-background"></span>

      <div class="parent-sections">
        <section class="section section-1 rounded-section full-page-register to-column align-to-middle align-to-center">
          <div class="container-gridded">
            <div class="container">
              <div class="row">
                <div class="col-1 col-sm-1 col-md-1 col-lg-1 col-xl-1"></div>
                <div class="col-1 col-sm-1 col-md-1 col-lg-1 col-xl-1"></div>
                <div class="col-1 col-sm-1 col-md-1 col-lg-1 col-xl-1"></div>
                <div class="col-1 col-sm-1 col-md-1 col-lg-1 col-xl-1"></div>
                <div class="col-1 col-sm-1 col-md-1 col-lg-1 col-xl-1"></div>
                <div class="col-1 col-sm-1 col-md-1 col-lg-1 col-xl-1"></div>
                <div class="col-1 col-sm-1 col-md-1 col-lg-1 col-xl-1"></div>
                <div class="col-1 col-sm-1 col-md-1 col-lg-1 col-xl-1"></div>
                <div class="col-1 col-sm-1 col-md-1 col-lg-1 col-xl-1"></div>
                <div class="col-1 col-sm-1 col-md-1 col-lg-1 col-xl-1"></div>
                <div class="col-1 col-sm-1 col-md-1 col-lg-1 col-xl-1"></div>
                <div class="col-1 col-sm-1 col-md-1 col-lg-1 col-xl-1"></div>
              </div>
            </div>
          </div>
        
          <div class="container">
            <div class="row ">
              <div class="col-12 col-sm-12 col-md-10 col-lg-8 col-xl-6 special-col">
                <div class="rounded-content">
                  <div class="rounded-content-inner">
                    <div class="register-content">
                      <div class="form-logo">
                        <div class="title">Welcome to</div>
                        </a>
                      </div>
                      <form action="{{url('post-login')}}" method="POST" id="logForm">
                        {{ csrf_field() }}
                        <div class="row">
                          <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                            <div class="form-line">
                              <input type="email" class="form-item" name="email" placeholder="*Email" class="form-control">
                              @if ($errors->has('email'))
                                <span class="error">{{ $errors->first('email') }}</span>
                              @endif  
                            </div>
                          </div>
                          <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                            <div class="form-line">
                              <input type="password" class="form-item" name="password" placeholder="*Password" class="form-control">
                              @if ($errors->has('password'))
                              <span class="error">{{ $errors->first('password') }}</span>
                              @endif  
                            </div>
                          </div>
                          <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                            <div class="form-line form-line-submit buttons">
                              <button class="btn" type="submit" value="Submit">Log In <span
                                  class="icon icomoon icon-arrow-right4"></span></button>
                            </div>
                          </div>
                          <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                            <p class="account-question">Don‘t have an account? <a href="{{url('registration')}}" class="link go-to-register">Register</a>!</p>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
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
    </main>

    <script src="{{ asset('/js/jquery.min.js') }}"></script>  
    <script src="{{ asset('/js/jquery.min.js') }}"></script>  
    <script src="{{ asset('/js/jquery.min.js') }}"></script>  
    <script src="{{ asset('/js/jquery.min.js') }}"></script>  
    <script src="{{ asset('/js/jquery.min.js') }}"></script>  
  </body>
</html>


