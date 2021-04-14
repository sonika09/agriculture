<!doctype html>
<html>
<head>
 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="{{ url('css/login.css') }}">
<script src="jquery.js"></script>
<script src="/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="{{ url('css/bootstrap.min.css') }}">           
<script type="text/javascript" src="/bootstrap-datepicker.js"></script>
<link rel="stylesheet" href="{{ url('css/datepicker.css') }}">
<link rel="stylesheet" type="text/css" href="{{ url('css/login.css') }}">
<script src="/js/validation.js"></script>
</head>
<style>
  .register-photo {
    background:Rgba(156,156,156,0.13);
    margin:auto;
    padding: 10px;
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
    width: 300px;
    background: url("/img/sign.png");
    background-size: cover;

}
.register-photo .form-container {
    display: table;
    max-width: 1500px;
    width:1200px;
    margin: 0 auto;
    box-shadow: 1px 1px 5px rgba(0, 0, 0, 0.1)
    font-family: roboto;
}

.register-photo form {
    display: table-cell;
    width: 300px;
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
.btn-pink {
    border-radius: 50px;
    background-color:rgba(167,200,213,1);
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
    linear-gradient(to bottom, rgba(245, 246, 252, 0.52), rgba(167,200,213,1)),
    url("https://miro.medium.com/max/1024/0*yDMvxPc4ZMM7SdVg.png");
    background-size: cover;
} 
.close{
  margin-top:3%;
  width:10%;
}
.btn .btn-sm{
  width:20%;
}


</style>
<body>

  <div class="register-photo">
    <div class="form-container">
        <div id="grad1">
        <div class="image-holder"></div>
</div>
        <form>
            <h2 class="text-center"><strong>Sign</strong> Up</h2>

                        <div class="form-group"> First Name</div>
<input class="form-control" id="first_name" type="text" name="first_name"  onblur="checkFirstName()" onkeyup="checkFirstName()"  required><br>

            <div class="form-group"> Last Name </div>
<input class="form-control" type="text" id="last_name" name="last_name"  onblur="checkLastName()" onkeyup="checkLastName()"required>
         
<br>
 <div class="form-group"> Email </div>
<input class="form-control" type="email" id="email" name="email" onkeyup="checkEmail()" onblur="checkEmail()"required><br>

 <div class="form-group"> Contact </div>
<input class="form-control" type="text" id="contact" name="contact" onblur="checkContact()" onkeyup="checkContact()"required><br>

 <div class="form-group"> DD/MM/YYYY </div>
<input class="form-control" type="text" id="dateofbirth" name="dateofbirth" onblur="checkDateOfBirth()" onkeyup="checkDateOfBirth()" required><br>

 <label class="radio-inline">
      <input type="radio" name="optradio" value="Male"onkeyup="checkGenderStatus()" onblur="checkGenderStatus()" checked>Male
    </label>
    
    <label class="radio-inline">
      <input type="radio" name="optradio" value="Female" onkeyup="checkGenderStatus()" onblur="checkGenderStatus()">Female
    </label>
<br>


 <div class="form-group">Password</div>
<input class="form-control" type="password" id="password" name="password" onblur="checkPasswordStrength()" onkeyup="checkPasswordStrength()" required><br>


 <div class="form-group"> Confirm Password </div>
<input class="form-control" type="password" id="confirm_password" name="confirm_password" onblur="checkConfirmPassword()" onkeyup="checkConfirmPassword()" required><br>
 <div class="form-group">
                <div class="form-check"><label class="form-check-label"><input class="form-check-input" type="checkbox">I agree to the license terms.</label></div>
            </div>
<br>
            <div class="form-group">
<button class="btn btn-pink">Sign Up</button></div><br>


<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog modal-sm">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
       <!--- <h4 class="modal-title">Enter Otp</h4>--->
      </div>
      <div class="modal-body">
        <div class="input-group">
    <span class="input-group-addon"><i class="glyphicon glyphicon-th"></i></span>
    <input id="otp" type="text" class="form-control" name="otp" placeholder="Enter OTP">
  </div>    </div>
      <div class="modal-footer">
    <button type="button" class="btn btn-default " style="width:25%" id="submit_otp" >Submit</button>
        <button type="button" class="btn btn-default " data-dismiss="modal" style="width:25%" >Close</button>
      </div>
    </div>

  </div>
</div>




        </form>
    </div>
</div>
</body>
</html>