<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login Page</title>
    <link href="css/style.css" rel="stylesheet" />
    <style>
      .text-danger{
        color: red;
      }

    </style>
  </head>
  <body>
    <div class="container">
        <div class="center">
            <h1>Login</h1>
        
            <form action="{{url('/')}}/login" method="post">
              @csrf
          
              <div class="textfield">
                
                    <input type="email" name="email" placeholder="Username" value="{{old('email')}}">
                  
                </div>  <span class="text-danger">@error('email'){{$message}}@enderror</span>
              <div class="textfield">
                <input type="passsword" name="password" placeholder="Password">
                
                </div><span class="text-danger">@error('password'){{$message}}@enderror</span>
              <div class="pass"><b>Forgot Password?</b></div>
              <input type="submit" name="submit" value="Login">
              <div class="signuplink">Not a Member? <a href="{{url('/')}}/register">SignUp</a>
            </div>
            </form>
        </div>
     </div>

  </body>
</html>
