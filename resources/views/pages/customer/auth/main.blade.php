<x-authLayout>
    <div class="nk-wrap">
            <main class="nk-pages nk-pages-centered">
                <div class="ath-container">
                    <div class="ath-body">
                        <h5 class="ath-heading title">SIGN IN <small class="tc-default"><img src="{{ asset('img/logo.jpg') }}" srcset="images/logo-full-white2x.png 2x" alt="logo" width="300px"></small></h5>
                        <form id="login-form">
                            <div class="field-item">
                                <div class="field-wrap">
                                    <input type="text" name="email" class="input-bordered" placeholder="Your Email">
                                </div>
                            </div>
                            <div class="field-item">
                                <div class="field-wrap">
                                    <input type="password" name="password" class="input-bordered" placeholder="Password">
                                </div>
                            </div>
                            <div class="forget-link fz-6">
                                Don’t have an account? <a href="{{ route('user.auth.register') }}"> <strong>Sign up here</strong></a>
                            </div>
                            <div class="forget-link fz-6">
                                Back?<a href="{{ route('home') }}"> <strong>Click Here!</strong></a>
                            </div>
                            <br>
                            <button type="button" class="btn btn-primary btn-block btn-md" id="login-button" onclick="auth('#login-button','#login-form','{{route('user.auth.login')}}','Login');">Sign In</button>
                        </form>
                    </div>
                </div>
            </main>
	</div>
	<div class="preloader"><span class="spinner spinner-round"></span></div>
    @section('custom_js')
    <script type="text/javascript">
        $("#email_login").focus();
        number_only('phone');
        load_list(1);
    </script>
    @endsection
</x-authLayout>    