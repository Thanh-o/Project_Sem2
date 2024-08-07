<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" 
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" 
    integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" 
    crossorigin="anonymous" 
    referrerpolicy="no-referrer" />
    <title>Admin Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(to bottom, #007bff 50%, #ffffff 50%);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }


        .form-login {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
        }

        .container {
            padding: 70px;
            display: flex;
            flex-direction: row;
            overflow: hidden;
        }

        .login-pic img {
            max-width: 80%;
            height: auto;
        }

        .login-content {
            padding: 40px;
            display: flex;
            flex-direction: column;
            width: 50%;
        }

        .login-header {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 20px;
            text-align: center;
        }

        .form-group {
            margin-bottom: 10px;
            position: relative;
        }

        .form-group i {
            position: absolute;
            top: 50%;
            left: 20px;
            transform: translateY(-50%);
            pointer-events: none;
        }

        .form-control {
            width: 100%;
            padding: 14px;
            box-sizing: border-box;
            border-radius: 8px;
            border: 1px solid #ccc;
            padding-left: 60px;
            padding-right: 40px;
            background-color: #f5f5f5;
            
        }

        .form-control:focus {
            background-color: #ffffff; 
            outline: none; 
            border-color: #888; 
        }

        .toggle-password {
            position: absolute;
            right: 10px;
            top: 50%;
            transform: translateY(-50%);
            cursor: pointer;
            color: #999; 
        }

        .btn-login {
            margin-top: 20px;
            background-color: red; 
            color: #fff;
            padding: 15px 20px;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            font-size: 16px;
            font-weight: bold;
            width: 100%;
        }

        .btn-login:hover {
            background-color: rgb(209, 14, 14);
        }

        .footer {
            text-align: center;
            font-size: 14px;
            color: #000;
            margin-bottom: 30px;
            font-weight: bold;
        }

        @media (max-width: 850px) {
            .form-login {
                width: 100%;
            }
            .login-pic {
                display: none;
            }
            .login-content {
                width: 100%;
            }
            .form-control {
                width: 100%;
            }
            .form-login {
                padding: 20px 0px 20px 0px;
            }
        }
    </style>
</head>
<body>
  <div class="form-login">
    <div class="container">
      <div class="login-pic">
          <img src="{{ asset('images/team.jpg') }}" alt="IMG">
      </div>
      <div class="login-content">
          <div class="login-header">Admin</div>
          <form method="POST" action="{{ route('admin.login.submit') }}">
            @csrf
              <div class="form-group">
                <i class="fa-solid fa-user"></i>
                <input type="text" name="username" id="username" class="form-control" placeholder="Username" required>
              </div>
              <div class="form-group">
                <i class="fa-solid fa-lock"></i>
                <input type="password" name="password" id="password" class="form-control" placeholder="Password" required>
                <span class="toggle-password" onclick="togglePassword()">👁️</span>
              </div>              
              <button type="submit" class="btn-login">Login</button>
          </form>
      </div>
  </div>
  <div class="footer">
    Sales management software <i class="far fa-copyright"></i>
      <script type="text/javascript">document.write(new Date().getFullYear());</script> 
  </div>
  </div>
<script>
  function togglePassword() {
    var passwordInput = document.getElementById('password');
    var passwordType = passwordInput.getAttribute('type');
    if (passwordType === 'password') {
        passwordInput.setAttribute('type', 'text');
    } else {
        passwordInput.setAttribute('type', 'password');
    }
  }
</script>
</body>
</html>
