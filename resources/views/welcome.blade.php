<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body, html {
  height: 100%;
margin: 0;
}

.bg {
  /* The image used */
  background-image: url("https://giffiles.alphacoders.com/101/10178.gif");

  /* Full height */
  height:all; 

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
h1 {
  color:white;
  text-align: center;
  font-size:35px;

}
.center {
  margin:auto;
  width:30%;
  padding: 100px;
}
a{
  color:transparent;
}
p{
  color:black;
  font-style: italic;
  font-weight: bold;
  font-size: 25px;
  text-align: center;
  
}



/* Float four columns side by side */
.column {
  float: left;
  width:20%;
  padding:13px;
  margin:20px;

}

.row {margin: 0px 4px;}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive columns */
@media screen and (max-width: 600px) {
  .column {
    width: 100%;
    display: block;
    margin-bottom: 20px;
    column-gap:5px;
  }
}

/* Style the counter cards */
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  padding:16px;
  text-align: center;
  background-color: #444;
  color: white;
}
</style>
</head> 
<body>

<div class="bg">
  <div class="center">
<h1>The Future of Agro innovation</h1>
<a href="/f1"><p>"click here to next page"</p></a>
</div>



<div class="row">
  <div class="column">
    <div class="card">
      <p><i class="fa fa-user"></i></p>
      <h3>11+</h3>
      <p>Partners</p>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <p><i class="fa fa-check"></i></p>
      <h3>55+</h3>
      <p>Projects</p>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
      <p><i class="fa fa-smile-o"></i></p>
      <h3>100+</h3>
      <p>Happy Clients</p>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
      <p><i class="fa fa-coffee"></i></p>
      <h3>100+</h3>
      <p>Meetings</p>
    </div>
  </div>
</div>


</div>


</body>
</html>