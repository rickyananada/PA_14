<x-authLayout title="Login/Register">
    <div class="nk-wrap">
        <main class="nk-pages nk-pages-centered">
            <div class="ath-container">
                <div class="ath-body">
                    <h5 class="ath-heading title">SIGN IN ADMIN!<small class="tc-default"><img src="{{ asset('img/logo.jpg') }}" srcset="images/logo-full-white2x.png 2x" alt="logo" width="300px"></small></h5>
                    <form id="login-form">
                        <div class="field-item">
                            <div class="field-wrap">
                                <input type="text" class="input-bordered" name="email" placeholder="Your Email">
                            </div>
                        </div>
                        <div class="field-item">
                            <div class="field-wrap">
                                <input type="password" class="input-bordered" name="password" placeholder="Password">
                            </div>
                        </div>
                        <button type="button" class="btn btn-primary btn-block btn-md" id="login-button" onclick="authAdmin('#login-button','#login-form','{{route('admin.auth.login')}}','Login');">Sign In</button>
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
    </script>
    @endsection
</x-authLayout>
