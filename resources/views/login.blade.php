@extends('evamedia.app-evamedia')
@section('title', 'Login page')
@section('css_after')
    <link href="https://fonts.cdnfonts.com/css/manrope" rel="stylesheet">
    <style>
        .login-page {
            background-color: #FFFEEC !important;
            padding: 10%;
        }


        .eyeicon {
            position: absolute !important;
            top: 420px !important;
            left: 974px !important;
            width: 20px;
            
        }
        #password, #email {
            border-radius:10px !important;
            background: #EBF0ED !important;
            border:1px solid #FAFAFA;
        }
    </style>
@endsection
@section('content')
    <section class="login-page">
        <div class="col-lg-12 d-flex justify-content-center">
            <div class="container d-flex" style="background: #FFF; padding: 5%; border-radius: 10px; width: 70vh; height: 90vh">
                <center><img src="{{ asset('goodeva-media/logoodeva.png') }}" alt=""></center>
                <center>
                    <h4 class="mt-5"
                        style="color: #18120F; font-size: 32px; font-weight: 700; font-family: 'Manrope', sans-serif !important;">
                        Sign In</h4>
                </center>
                <center>
                    <p style="color: #6B6B6B; font-size: 14px; font-weight: 400; line-height: normal">Berita terkini dan
                        terupdate dari berbagai <br> narasumber terpercaya</p>
                </center>
                <form action="#" method="post">
                    <div class="form-group mt-4">
                        <label for="email" style="color: #6B6B6B;font-size: 13px;font-weight: 400;font-family: 'Manrope', sans-serif !important;">EMAIL</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="form-group mt-4">
                        <label for="password" style="color: #6B6B6B;font-size: 13px;font-weight: 400;font-family: 'Manrope', sans-serif !important;">PASSWORD</label>
                        <input type="password" class="form-control" id="password" name="password" stt required>
                        <span><a href="#" class="eyeicon" onclick="togglePassword()"><img id="passwordToggleIcon"
                                     src="{{ asset('goodeva-media/Hide.png') }}" style="color:grey"
                                    alt=""></a></span>
                    </div>
                    <button type="submit" class="btn btn-primary mt-4" style="background: #329FAF;font-family: 'Manrope', sans-serif !important;border-radius:10px;border:0;width:100%;font-weight:500 !important;font-size: 15px !important;height:100%">Sign In</button>
                </form>
                <p style="margin-top:50%;color: #6B6B6B;font-size: 14px;font-weight: 400;text-align:center">Already Have An Account? <a href="#" style="font-size: 15px;font-weight: 600;color: #329FAF;text-align:center">Sign up</a></p>
            </div>
        </div>
    </section>
@endsection
@section('js_after')
    <script>
        function myFunction() {
            var x = document.getElementById("password");
            if (x.type === "password") {
                x.type = "text";
            } else {
                x.type = "password";
            }
        }

        function togglePassword() {
            var passwordInput = document.getElementById("password");
            var passwordToggleIcon = document.getElementById("passwordToggleIcon");

            if (passwordInput.type === "password") {
                passwordInput.type = "text";
                passwordToggleIcon.src = "{{ asset('goodeva-media/view.png') }}";
            } else {
                passwordInput.type = "password";
                passwordToggleIcon.src = "{{ asset('goodeva-media/hide.png') }}";
            }
        }
    </script>
@endsection
