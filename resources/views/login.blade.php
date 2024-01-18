
    
    @extends('layout/main')
    @section('title', 'login')
    @section('css')
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/owl.carousel.min.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/css/login.css">
    @endsection
      
    
  @section('container') 
  <div class="content">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <img style="border-radius: 30px 30px 30px 30px" src="https://plus.unsplash.com/premium_photo-1682125840276-f47b511bf58c?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Image" id="img-login" class="img-fluid">
        </div>

        <div class="col-md-6 contents">
          <div class="row justify-content-center">
            <div class="col-md-8">
              <div class="mb-4">
  
              <h3>Login</h3>
              <br>
              <p class="mb-4">Selamat datang di website sewa mobil.</p>
            </div>
            <form action="/login" method="POST">
              @csrf
              <div class="form-group first">
                <label for="username">Username</label>
                <input type="username" name="username" class="form-control @error('username') is-invalid @enderror"  id="username" required  >
                @error('username')
                      <div class="invalid-feedback" id="pesan-error">
                        {{$message}}
                      </div>
                    @enderror 
              </div>
              <div class="form-group last mb-2">
                <label for="password">Password</label>
                <input type="password" name="password" class="form-control" id="password" required>
              </div>
                <button class="btn btn-block btn-primary">Login</button>
                <p>Daftar disini <a href="{{url('/register')}}">Register!</a></p>
            </form>
            </div>
          </div>
          
        </div>
        
      </div>
    </div>
  </div>

  @endsection 
  @section('js')
  <script src="/js/jquery-3.3.1.min.js"></script>
  <script src="/js/popper.min.js"></script>
  <script src="/js/bootstrap.min.js"></script>
  <script src="/js/main.js"></script>
  <script src="/js/alertsession.js"></script>
  @endsection
{{--   
    <script src="/js/jquery-3.3.1.min.js"></script>
    <script src="/js/popper.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/main.js"></script>
    <script src="/js/alertsession.js"></script>
  </body>
</html> --}}



{{-- 
@section('container')
 <nav class="navbar fixed-top navbar-light bg-light">
    <div class="container">
        <h6 class="titleNav"><img class="gambar" src="/assets/img/imgLogo.jpeg" alt="voli">VOLLYBALL SUKARAJA</h6>
    </div>
    </nav>
    <div class="container-nav">
      <div class="allert-success">
        @if(session()->has('success'))
          <div class="alert alert-success alert-dismissible fade show" id="success-alert" role="alert">
            {{session('success')}}
             <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
          @endif
        </div>
      <div class="allert-failed">
        @if(session()->has('loginFailed'))
          <div class="alert alert-danger alert-dismissible fade show" id="danger-alert" role="alert">
            {{session('loginFailed')}}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
          @endif
      </div>      
        <div class="box">
            <h1 class="header-tittle">Log in</h1>
            <form action="/login" method="POST">
              @csrf
            <div class="user">
              <div class="form-floating">
                <input type="username" name="username" class="form-control @error('username') is-invalid @enderror"  id="username" placeholder="username" required  >
                @error('username')
                      <div class="invalid-feedback" id="pesan-error">
                        {{$message}}
                      </div>
                    @enderror 
                <label for="username">Username</label>
              </div>
              <div class="form-floating">
                <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
                <label for="password">Password</label>
              </div>
            </div>
                
            <p class="reset-password"><a href="" class="reset-link">Forgot password?</a></p>
            <div class="login-btn">
                <button class="btn">Login</button>
                <br>
                <p class="register">First time here? <a href="{{ url('/register') }}" class="register-link">Register!</a></p>
            </div>
          </form>
        </div>
    </div>
    @endsection --}}

{{-- <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                    <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                  </svg>                
                  <input 
                    type="text"
                    name="username"
                    id="username"
                    class="form-control"
                    autocomplete="off"
                    placeholder="username"
                /> 
                  <div class="password-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-unlock-fill" viewBox="0 0 16 16">
                        <path d="M11 1a2 2 0 0 0-2 2v4a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V9a2 2 0 0 1 2-2h5V3a3 3 0 0 1 6 0v4a.5.5 0 0 1-1 0V3a2 2 0 0 0-2-2z"/>
                      </svg>
                  <input 
                    type="password"
                    name="password"
                    class="form-control"
                    id="passord"
                    autocomplete="off"
                    placeholder="password"
                /></div> --}}
            