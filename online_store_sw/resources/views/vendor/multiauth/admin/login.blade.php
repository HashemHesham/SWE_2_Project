<title>Login | Admin</title>
@include('multiauth::_includes.head')
<body>
    <div class="home-btn d-none d-sm-block">
        <a href="#" class="text-white">
            <i class="fas fa-home h2"></i>
        </a>
    </div>
    <div class="wrapper-page">
        <div class="card overflow-hidden account-card mx-3">
            <div class="bg-primary p-4 text-white text-center position-relative">
                <h4 class="font-20 m-b-5">Welcome Back !</h4>
                <p class="text-white-50 mb-4">Sign in to continue to Dashboard.</p>
                <a href="#" class="logo logo-admin">
                    <img src="#" style="width: 200px; height: 70px;" alt="logo">
                </a>
            </div>
            <div class="account-card-content">
                <form class="form-horizontal m-t-30" method="POST" action="{{ route('admin.login') }}">
                    @csrf
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" id="email" placeholder="Enter email" name="email">
                        @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="userpassword">Password</label>
                        <input type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" id="userpassword" placeholder="Enter password" name="password">
                        @if ($errors->has('password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                        @endif
                    </div>
                    <div class="form-group row m-t-20">
                        <div class="col-sm-6">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customControlInline" >
                                <label class="custom-control-label" for="customControlInline" name="remember" id="remember"
                                        {{ old( 'remember') ? 'checked' : '' }}>Remember me</label>
                            </div>
                        </div>
                        <div class="col-sm-6 text-right">
                            <button class="btn btn-primary w-md waves-effect waves-light" type="submit">Log In</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="m-t-40 text-center">
            <p>© 2020. Crafted with <i class="mdi mdi-heart text-danger"></i> by FCI Team</p>
        </div>
    </div>
    <!-- end wrapper-page -->
    <!-- jQuery  -->
    <script src="{{ asset('assets/back/assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/back/assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/back/assets/js/metisMenu.min.js') }}"></script>
    <script src="{{ asset('assets/back/assets/js/jquery.slimscroll.js') }}"></script>
    <script src="{{ asset('assets/back/assets/js/waves.min.js') }}"></script>
    <!-- App js -->
    <script src="{{ asset('assets/back/assets/js/app.js') }}"></script>
</body>