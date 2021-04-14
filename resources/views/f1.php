<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<style>
body, html {
  height: 100%;
  margin: 0;
}

.bg {
  /* The image used */
  background-image: url("https://img.freepik.com/free-vector/natural-green-template_1308-16499.jpg?size=626&ext=jpg");

  /* Full height */
  height: 100%; 
  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
.page-header{
  color:red;
}
p{
  font-style: italic;
  font-size: 15px;
  color: white;
  font-weight: bold;
}

* {box-sizing: border-box;}

body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  background-color: #e9e9e9;
}

.topnav a {
  float: left;
  display: block;
  color: black;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #2196F3;
  color: white;
}

.topnav .search-container {
  float: right;

}

.topnav input[type=text] {
  padding: 6px;
  margin-top: 8px;
  font-size: 17px;
  border: none;
width:350px;
}

.topnav .search-container button {
  float: right;
  padding: 6px 16px;
  margin-top: 8px;
  margin-right: 50px;
  background: #ddd;
  font-size: 17px;
  border: none;
  cursor: pointer;
}

.topnav .search-container button:hover {
  background: #ccc;
}

@media screen and (max-width: 600px) {
  .topnav .search-container {
    float: none;
  }
  .topnav a, .topnav input[type=text], .topnav .search-container button {
    float: none;
    display: block;
    text-align: left;
    width: 100%;
    margin: 0;
    padding: 14px;
  }
  .topnav input[type=text] {
    border: 1px solid #ccc;  
  }
}



/* 100% Image Width on Smaller Screens */
@media only screen and (max-width: 700px){
  .modal-content {
    width: 100%;
  }
}
.grid-container {
  display: grid;
  grid-gap: 50px;
  grid-template-columns: auto auto auto;
  background-color: green;
  padding: 10px;
}

.grid-item {
  background-color: transparent;
  border:transparent;
  padding: 20px;
  font-size: 30px;
  text-align: center;
}




</style>
</head>
<body>

<div class="bg">
  
<div class="container">
  <div class="page-header">
    <h1>Agriculture Services</h1>   
          
  </div>  
  <p> Agriculture is the foundation of manufactures, since the productions of nature are the materials of art.
</p>
</div>

<div class="topnav">
  <a class="active" href="/">Home</a>
  <a href="/about"> About Us</a>

  <a href="/blog">Blog</a>
  <a href="/log">Login</a>
  <a href=""></a>
  <div class="search-container">
    <form action="/action_page.php">
      <input type="text" placeholder="Search..." name="search">
      <button type="submit">submit</i></button>
    </form>
  </div>
</div>
<br>





<div class="grid-container">
  <div class="grid-item"><a href="/p1"> <img src="https://cdn-a.william-reed.com/var/wrbm_gb_food_pharma/storage/images/9/9/8/0/2610899-1-eng-GB/USDA-report-offers-baseline-prediction-for-US-feed-growth-market.jpg" style="width: 200px" "height:200px;" ></a>
<p>Crop Yield Prediction</p>

  </div>
  <div class="grid-item"> <a href=""><img src="https://www.disruptordaily.com/wp-content/uploads/2019/08/123949773_m.jpg" style="width: 200px" "height:200px;" ></a>
<p>Detect Diseases</p>
  </div>
  <div class="grid-item"><a href=""> <img src="https://geographyandyou.com/wp-content/uploads/2016/06/Soil-testing-download-e1500557003761.jpg" style="width: 200px" "height:200px;" ></a>

<p>Soil Quality Analysis</p>
  </div>  
  <div class="grid-item"><a href=""> <img src="https://www.edumilestones.com/crm/images/CC%20LOGO%20.png" style="width: 200px" "height:200px;" ></a>
<p>Crop Recommendiction</p>

  </div>
  <div class="grid-item"> <a href=""><img src="https://www.whataventure.com/wp-content/uploads/2017/08/Agribot-logo-300x100.jpg" style="width: 200px" "height:200px;" ></a>

<p>Agribot</p>

  </div>
  <div class="grid-item"><a href=""> <img src="https://www.foodandfarmconference.com/wp-content/uploads/2018/11/AgTech-Logo.png" style="width: 200px" "height:200px;" ></a>
   <p>Extra Services</p>


  </div>
</div>
</div>
</body>
</html>