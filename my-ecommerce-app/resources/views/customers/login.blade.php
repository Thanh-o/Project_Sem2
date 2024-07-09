<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('Css/styles.css') }}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <div class="container">
        <div class="forms-container">
            <div class="signIn-signUp">
                <form method="POST" action="{{ route('customers.login.submit') }}" class="sign-in-form">
                    @csrf
                    <h2 class="title">Sign In</h2>
                    <div class="input-field">
                        <i class='bx bx-user'></i>
                        <input type="text" name="username" placeholder="Username" required>
                    </div>
                    <div class="input-field">
                        <i class='bx bx-lock-alt'></i>
                        <input id="passwordSignIn" type="password" name="password" placeholder="Password" required>
                        <i class="bx fa-fw bx-hide field-icon click-eye" toggle="#passwordSignIn"></i>
                    </div>
                    <input type="submit" value="Sign In" class="btn solid">
                    <p class="social-text">Or sign in with social platforms</p>
                    <div class="social-media">
                        <a href="#" class="social-icon"><i class="bx bxl-facebook"></i></a>
                        <a href="#" class="social-icon"><i class="bx bxl-twitter"></i></a>
                        <a href="#" class="social-icon"><i class="bx bxl-google"></i></a>
                        <a href="#" class="social-icon"><i class="bx bxl-linkedin"></i></a>
                    </div>
                </form>
                @if($errors->any())
                 <div>{{ $errors->first() }}</div>
                @endif
                <form method="POST" action="{{ route('customers.signup.submit') }}" class="sign-up-form">
                    @csrf
                    <h2 class="title">Sign Up</h2>
                    <div class="input-field">
                        <i class='bx bx-user'></i>
                        <input type="text" name="username" placeholder="Username" required>
                    </div>
                    <div class="input-field">
                        <i class='bx bx-envelope'></i>
                        <input type="email" name="email" placeholder="Email" required>
                    </div>
                    <div class="input-field">
                        <i class='bx bx-lock-alt'></i>
                        <input id="passwordSignUp" type="password" name="password" placeholder="Password" required>
                        <i class="bx fa-fw bx-hide field-icon click-eye" toggle="#passwordSignUp"></i>
                    </div>
                    <div class="input-field">
                        <i class='bx bx-lock-alt'></i>
                        <input id="passwordConfirmation" type="password" name="password_confirmation" placeholder="Confirm Password" required>
                        <i class="bx fa-fw bx-hide field-icon click-eye" toggle="#passwordConfirmation"></i>
                    </div>
                    <input type="submit" value="Sign Up" class="btn solid">
                    <p class="social-text">Or sign up with social platforms</p>
                    <div class="social-media">
                        <a href="#" class="social-icon"><i class="bx bxl-facebook"></i></a>
                        <a href="#" class="social-icon"><i class="bx bxl-twitter"></i></a>
                        <a href="#" class="social-icon"><i class="bx bxl-google"></i></a>
                        <a href="#" class="social-icon"><i class="bx bxl-linkedin"></i></a>
                    </div>
                </form>
                @if($errors->any())
                <div>{{ $errors->first() }}</div>
                @endif
            </div>
        </div>
        <div class="panels-container">
            <div class="panel left-panel">
                <div class="content">
                    <h3>New here?</h3>
                    <p>Welcome to our platform! Please enter your username and password to access your account. If you don't have an account, you can sign up for free.</p>
                    <button class="btn transparent" id="sign-up-btn">Sign Up</button>
                </div>
                <img src="./images/img_1.jpg" alt="" class="img">
            </div>
            <div class="panel right-panel">
                <div class="content">
                    <h3>One of us?</h3>
                    <p>If you already have an account, please sign in. We remember you!</p>
                    <button class="btn transparent" id="sign-in-btn">Sign In</button>
                </div>
                <img src="./images/img_2.jpg" alt="" class="img">
            </div>
        </div>
    </div>
    <div class="text-center p-t-70 txt2"></div>
    <script src="{{ asset('Js/script.js') }}"></script>
    <script>
        const loginRoute = '{{ route('customers.login') }}';
        const signupRoute = '{{ route('customers.signup') }}';
    </script>
</body>
</html>
