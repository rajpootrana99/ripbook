<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="{{ asset('asset/css/style.css')}}" />

    <!-- Jquery Scripts -->
    <script src="https://code.jquery.com/jquery-3.6.0.slim.js" integrity="sha256-HwWONEZrpuoh951cQD1ov2HUK5zA5DwJ1DNUXaM6FsY=" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <title>Rip Book | Login</title>
  </head>
  <body>
    <div class="container">
      <div class="forms-container">
        <div class="signin-signup">
          <form class="sign-in-form" id="sign_in_form">
            @csrf
            <h2 class="title">Sign in</h2>
            <div class="input-field">
              <i class="fas fa-envelope"></i>
              <input type="email" placeholder="Email"  name="email" id="login_email"/>
            </div>
            <span class="email_error" style="color:#ff0000"></span>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Password" name="password" id="login_passwod" />
            </div>
            <span class="password_error" style="color:#ff0000"></span>
            <input type="submit" value="Login" class="btn solid" />
          </form>
          <form class="sign-up-form" id="sign_up_form">
            @csrf
            <h2 class="title">Sign up</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" placeholder="Name" name="name" id="signup_name"/>
            </div>
            <span class="signup_name_error" style="color:#ff0000"></span>
            <div class="input-field">
              <i class="fas fa-envelope"></i>
              <input type="email" placeholder="Email" name="email" id="signup_email"/>
            </div>
            <span class="signup_email_error" style="color:#ff0000"></span>
            <div class="input-field">
              <i class="fas fa-phone"></i>
              <input type="text" placeholder="Phone Number" name="phone" id="signup_phone"/>
            </div>
            <span class="signup_phone_error" style="color:#ff0000"></span>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Password" name="password" id="signup_password"/>
            </div>
            <span class="signup_password_error" style="color:#ff0000"></span>
            <input type="submit" class="btn" value="Sign up" />
          </form>
        </div>
      </div>

      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h3>New here ?</h3>
            <p>
              Lorem ipsum, dolor sit amet consectetur adipisicing elit. Debitis,
              ex ratione. Aliquid!
            </p>
            <button class="btn transparent" id="sign-up-btn">Sign up</button>
          </div>
          <img src="{{ asset('asset/img/log.svg')}}" class="image" alt="" />
        </div>
        <div class="panel right-panel">
          <div class="content">
            <h3>One of us ?</h3>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum
              laboriosam ad deleniti.
            </p>
            <button class="btn transparent" id="sign-in-btn">Sign in</button>
          </div>
          <img src="{{ asset('asset/img/register.svg')}}" class="image" alt="" />
        </div>
      </div>
    </div>

    <script src="{{ asset('asset/js/app.js')}}"></script>

    <script>
    $(document).ready(function() {

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $(document).on('submit', '#sign_in_form', function(e) {
            e.preventDefault();
            let formDate = new FormData($('#sign_in_form')[0]);
            $.ajax({
                type: "post",
                url: "login",
                data: formDate,
                contentType: false,
                processData: false,
                beforeSend: function() {
                    $(document).find('span.error-text').text('');
                },
                success: function(response) {
                    $('#sign_in_form')[0].reset();
                    location.reload();
                },
                error: function(error) {
                    $.each(error.responseJSON.errors, function(prefix, val) {
                        $('span.' + prefix + '_error').text(val[0]);
                    });
                }
            });
        });

        $(document).on('submit', '#sign_up_form', function(e) {
            e.preventDefault();
            let formDate = new FormData($('#sign_up_form')[0]);
            $.ajax({
                type: "post",
                url: "register",
                data: formDate,
                contentType: false,
                processData: false,
                beforeSend: function() {
                    $(document).find('span.error-text').text('');
                },
                success: function(response) {
                    $('#sign_up_form')[0].reset();
                    location.reload();
                },
                error: function(error) {
                    $.each(error.responseJSON.errors, function(prefix, val) {
                        $('span.signup_' + prefix + '_error').text(val[0]);
                    });
                }
            });
        });
    });
</script>
  </body>
</html>
