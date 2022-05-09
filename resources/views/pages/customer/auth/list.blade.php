<x-authLayout>
    <div class="nk-wrap">
        <main class="nk-pages nk-pages-centered">
            <div class="ath-container">
                <div class="ath-body">
                    <h5 class="ath-heading title">REGISTER <small class="tc-default"><img src="{{ asset('img/logo.jpg') }}" srcset="images/logo-full-white2x.png 2x" alt="logo" width="300px"></small></h5>
                    <form id="register-form">
                        <div class="field-item">
                            <div class="field-wrap">
                                <input type="text" name="name" class="input-bordered" placeholder="Nama">
                            </div>
                        </div>
                        <div class="field-item">
                            <div class="field-wrap">
                                <input type="text" name="email" class="input-bordered" placeholder="Email@email.com">
                            </div>
                        </div>
                        <div class="field-item">
                            <div class="field-wrap">
                                <input type="text" name="username" class="input-bordered" placeholder="Username">
                            </div>
                        </div>
                        <div class="field-item">
                            <div class="field-wrap">
                                <input type="text" name="phone" class="input-bordered" placeholder="No.Hp">
                            </div>
                        </div>
                        <div class="field-item">
                            <div class="field-wrap">
                                <input type="password" name="password" class="input-bordered" placeholder="Password">
                            </div>
                        </div>
                        <div class="field-item">
                            <div class="field-wrap">
                                <input type="password" name="repassword" class="input-bordered" placeholder="Confirm Passoword">
                            </div>
                        </div>
                        <div class="forget-link fz-6">
                            Login ?<a href="{{ route('user.auth.index') }}"> <strong>Click Here!</strong></a>
                        </div>
                        <br>
                        <button type="button" class="btn btn-primary btn-block btn-md" id="register-button" onclick="auth('#register-button','#register-form','{{route('user.auth.register')}}','Register');">Register Now</button>
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