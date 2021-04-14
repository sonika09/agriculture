<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="{{ url('css/loginpage.css') }}">
</head>
<style>
  .register-photo {
        background:Rgba(156,156,156,0.13);
        padding: 23px 0;
    }

    @media (max-width: 576px) {
        .register-photo .image-holder {
            display: table-cell;
            width: auto;
            background-size: cover;
            display: none;
        }
    }

    .register-photo .image-holder {
        display: table-cell;
        width: 800px;
      background-image:url("https://www.mirrorreview.com/wp-content/uploads/2019/08/How-Smart-Farming-Is-Renovating-Traditional-Farming-Methods-And-Tools.jpg");
        background-size: cover;

    }
    .register-photo .form-container {
        display: table;
        max-width: 900px;
        width:90%;
        margin: 0 auto;
        box-shadow: 1px 1px 5px rgba(0, 0, 0, 0.1);
        font-family:roboto;
        height:300px;
    }

    .register-photo form {
        display: table-cell;
        width: 350px;
        background-color: #ffffff;
        padding:60px 40px;
        color: #505e6c;
        height:350px;
        font-family: cursive;


    }

    @media (max-width:991px) {
        .register-photo form {
            padding: 40px
        }
    }

    .register-photo form h2 {
        font-size: 24px;
        line-height: 1.5;
        margin-bottom: 30px
    }

    .register-photo form .form-control {
        background: transparent;
        border: none;
        border-bottom: 1px solid #dfe7f1;
        border-radius: 0;
        box-shadow: none;
        outline: none;
        color: inherit;
        text-indent: 6px;
        height: 20px;
        width:300px;
    }

    .register-photo form .form-check {
        font-size: 16px;
        line-height: 20px
    }
.btn-gray {
        border-radius: 50px;
        color: #fff;
        background-color:rgba(167,200,213,1);
        padding: 8px 40px;
    font-weight:bold;
    font-family: cursive;
    color:black;
    }
    .btn-pink {
        border-radius: 50px;
        color: rgba(167,200,213,1);
        background-color:white;
        padding: 8px 40px;
    font-weight:bold;
    font-family: cursive;
    color:black;
    }

    .btn-gray:hover {
        color: #fff;
        background-color: gray;
    }
    .btn-pink:hover {
        color: #fff;
        background-color: gray;
    }

    #grad1 {
        display: table-cell;
       background-image:
        linear-gradient(to bottom, rgba(245, 246, 252, 0.52), rgba(167,200,203,1)),
        url("https://miro.medium.com/max/1024/0*yDMvxPc4ZMM7SdVg.png");
        width: 560px;
        height: 520px;
        background-size: cover;

    }
  </style>
<body>

<div class="register-photo">
    <div class="form-container">
<div id="grad1">
        <div class="image-holder"></div>
</div>
        <form>
            <h2 class="text-center"><strong>Sign</strong> In</h2>
            <div class="form-group"> Email</div>
<input class="form-control" id="email" type="email" name="email" required>
<br>
            <div class="form-group"> Password </div>
<input class="form-control" type="password" id="password" name="password" required>
<br>
           <input type="checkbox" onclick="myFunction()">Show Password

<script>
function myFunction() {
  var x = document.getElementById("myInput");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>
<br>
<br>

<label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
        </label>
<br>
 <div class="form-group">
                <div class="form-check"><label class="form-check-label"><input class="form-check-input" type="checkbox">I agree to the license terms.</label></div>
            </div>
<br>
            <div class="form-group">
 <button class="btn btn-gray">Sign In</button>
<button class="btn btn-pink">Sign Up</button></div><br>




        </form>
    </div>
</div>
</body>
</html>
