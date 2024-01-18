
@extends('layout/main')
@section('title', 'Register')
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
          <img style="border-radius: 30px 30px 30px 30px" src="https://images.unsplash.com/photo-1592840062661-a5a7f78e2056?q=80&w=1932&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Image" class="img-fluid">
        </div>

        <div class="col-md-6 contents">
          <div class="row justify-content-center">
            <div class="col-md-8">
              <div class="mb-4">

              <h3>Register</h3>
              <br>
              <p class="mb-4">Selamat datang di website sewa mobil.</p>
            </div>
            <form action="/register" method="POST">
              @csrf
              <div class="form-group first">
                <label for="name">Name</label>
                <input 
                      type="text"
                      name="name" class="form-control @error('name') is-invalid @enderror"
                      id="name"
                      required
                      value="{{old('name')}}"
                      >
                      @error('name')
                      <div class="invalid-feedback" id="pesan-error">
                        {{$message}}
                      </div>
                    @enderror
              </div>
              <div class="form-group">
                <label for="username" id="username-js">Username</label>
                <input 
                type="text"
                name="username" class="form-control @error('username') is-invalid @enderror"
                id="username"
                required
                value="{{old('username')}}"
                >
                @error('username')
                  <div class="invalid-feedback">
                    {{$message}}
                  </div>
                @enderror              
              </div>
              <div class="form-group">
                <label for="email">Email</label>
                <input 
                type="email"
                name="email" class=" form-control @error('email') is-invalid @enderror"
                id="email"
                required
                value="{{old('email')}}"
                >
                @error('email')
                  <div class="invalid-feedback">
                    {{$message}}
                  </div>
                @enderror             
            </div>
              <div class="form-group">
                <label for="alamat">address</label>
                <input 
                type="text"
                name="address" class=" form-control @error('address') is-invalid @enderror"
                id="address"
                required
                value="{{old('address')}}"
                >
                @error('address')
                  <div class="invalid-feedback">
                    {{$message}}
                  </div>
                @enderror             
            </div>
              <div class="form-group">
                <label for="alamat">No. handphone</label>
                <input 
                type="number"
                name="no_handphone" class=" form-control @error('no_handphone') is-invalid @enderror"
                id="no_handphone"
                required
                value="{{old('no_handphone')}}"
                >
                @error('no_handphone')
                  <div class="invalid-feedback">
                    {{$message}}
                  </div>
                @enderror             
            </div>
              <div class="form-group">
                <label for="nosim">No. SIM</label>
                <input 
                type="number"
                name="no_sim" class=" form-control @error('no_sim') is-invalid @enderror"
                id="no_sim"
                required
                value="{{old('nos_im')}}"
                >
                @error('no_sim')
                  <div class="invalid-feedback">
                    {{$message}}
                  </div>
                @enderror             
            </div>
              <div class="form-group">
                <label for="password">Password</label>
                <input 
                type="password"
                name="password" class=" form-control @error('password') is-invalid @enderror"
                id="password"
                required
                >
            @error('password')
              <div class="invalid-feedback" id="passwordnotmatch">
                {{$message}}
              </div>
            @enderror      
          </div>
          <div class="form-group last mb-2">
            <label for="password">Confirm Password</label>
            <input 
                type="password"
                name="password_confirmation" class="form-control @error('password_confirmation') is-invalid @enderror"
                id="password"
                required autocomplete="current-password"
                >
                @error('password_confirmation')
                <div class="invalid-feedback" id="passwordnotmatch">
                {{$message}}
                </div>
                 @enderror    
            </div>
            <button class="btn btn-block btn-primary">Register</button>
                <p>Sudah punya akun?<a href="{{url('/login')}}">Login!</a></p>
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
  {{-- <script src="/js/alertsession.js"></script> --}}
  @endsection
  
    {{-- <script src="/js/jquery-3.3.1.min.js"></script>
    <script src="/js/popper.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/main.js"></script>
    <script src="/js/alertsession.js"></script>
  </body>
</html> --}}




{{-- @extends('layout/main')
@section('title', 'Register')
@section('css')
<link rel="stylesheet" type="text/css" href="/css/register.css">
@endsection

@section('container')
  <nav class="navbar fixed-top navbar-light bg-light">
    <div class="container">
        <h6 class="titleNav"><img class="gambar" src="/assets/img/imgLogo.jpeg" alt="voli">VOLLYBALL SUKARAJA</h6>
    </div>
    </nav>
        <div class="container-nav">
            <div class="box">
                <h1 class="header-tittle">Register</h1>
                <form action="/register" method="POST">
                  @csrf
                  <div class="user">
                    <div class="form-floating">
                      <input 
                      type="text"
                      name="name" class="form-control rounded-top @error('name') is-invalid @enderror"
                      id="name"
                      placeholder="name" required
                      value="{{old('name')}}"
                      >
                      @error('name')
                      <div class="invalid-feedback" id="pesan-error">
                        {{$message}}
                      </div>
                    @enderror
                      <label for="name">Name</label>
                    </div>
                    <div class="form-floating">
                      <input 
                    type="text"
                    name="username" class="form-control rounded-top @error('username') is-invalid @enderror"
                    id="username"
                    placeholder="username" required
                    value="{{old('username')}}"
                    >
                    @error('username')
                      <div class="invalid-feedback" id="pesan-error">
                        {{$message}}
                      </div>
                    @enderror
                      <label for="password">Username</label>
                    </div>
                    <div class="form-floating">
                      <input 
                      type="email"
                      name="email" class=" form-control @error('email') is-invalid @enderror"
                      id="email"
                      placeholder="email" required
                      value="{{old('email')}}"
                      >
                    @error('email')
                      <div class="invalid-feedback" id="pesan-error">
                        {{$message}}
                      </div>
                    @enderror
                      <label for="password">Email</label>
                    </div>
                    <div class="form-floating">
                      <input 
                        type="password"
                        name="password" class=" form-control @error('password') is-invalid @enderror"
                        id="password"
                        placeholder="password" required
                        >
                    @error('password')
                      <div class="invalid-feedback" id="pesan-error">
                        {{$message}}
                      </div>
                    @enderror
                      <label for="password">Password</label>
                    </div>
                    <div class="form-floating">
                      <input 
                        type="password"
                        name="password_confirmation" class="form-control @error('password_confirmation') is-invalid @enderror"
                        id="password"
                        placeholder="confirm password" required autocomplete="current-password"
                        >
                    @error('password_confirmation')
                      <div class="invalid-feedback" id="pesan-error">
                        {{$message}}
                      </div>
                    @enderror
                      <label for="password">Confirm Password</label>
                    </div>

                  </div> --}}
                  
                {{-- <div class="user">
                  <div>
                    <input 
                    type="text"
                    name="name" class="form-control rounded-top @error('name') is-invalid @enderror"
                    id="name"
                    placeholder="name" required
                    value="{{old('name')}}"
                    >
                    @error('username')
                      <div class="invalid-feedback" id="pesan-error">
                        {{$message}}
                      </div>
                    @enderror
                    </div>
                  <div>
                    <input 
                    type="text"
                    name="username" class="form-control rounded-top @error('username') is-invalid @enderror"
                    id="username"
                    placeholder="username" required
                    value="{{old('username')}}"
                    >
                    @error('username')
                      <div class="invalid-feedback" id="pesan-error">
                        {{$message}}
                      </div>
                    @enderror
                    </div>
                    <div class="email">
                        <input 
                        type="email"
                        name="email" class=" form-control @error('email') is-invalid @enderror"
                        id="email"
                        placeholder="email" required
                        value="{{old('email')}}"
                        >
                      @error('email')
                        <div class="invalid-feedback" id="pesan-error">
                          {{$message}}
                        </div>
                      @enderror
                    </div>
                    
                    <div class="password">
                        <input 
                        type="password"
                        name="password" class=" form-control @error('password') is-invalid @enderror"
                        id="password"
                        placeholder="password" required
                        >
                    @error('password')
                      <div class="invalid-feedback" id="pesan-error">
                        {{$message}}
                      </div>
                    @enderror
                    </div>
                    
                    <div class="password">
                        <input 
                        type="password"
                        name="password_confirmation" class="form-control @error('password_confirmation') is-invalid @enderror"
                        id="password"
                        placeholder="confirm password" required autocomplete="current-password"
                        >
                    @error('password_confirmation')
                      <div class="invalid-feedback" id="pesan-error">
                        {{$message}}
                      </div>
                    @enderror
                    </div>
                </div> --}}
                {{-- <div class="login-btn">
                    <button class="btn">Register</button><br>
                    <p class="login">Already have an account? <a href="{{ url('/login') }}" class="login-link">Log in</a></p>
                </div>
              </form>
            </div>
        </div>
      

        @endsection --}}