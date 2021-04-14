<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

</head>
<style>
body, html {
  height: 100%;
margin:0;
font-family: Arial, Helvetica, sans-serif;
}

.bg {
  /* The image used */
  background-image: url("https://cdn.pixabay.com/photo/2018/03/16/20/14/tiefenscharfe-3232353_960_720.jpg");

  /* Full height */
  height:100%; 

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
.page-header{
  color:red;
  
}
img{
width:80px;
height:60px;
float: right;
}
#mySidenav a {
  position: absolute;
  left: -80px;
  transition: 0.3s;
  padding: 15px;
  width: 165px;
  text-decoration: none;
  font-size: 20px;
  color: white;
  border-radius: 0 5px 5px 0;
}

#mySidenav a:hover {
  left: 0;
}

#wheat {
  top: 100px;
  background-color: #4CAF50;

}

#tomato {
  top: 180px;
  background-color: #2196F3;
}

#rice {
  top: 260px;
  background-color: #f44336;
}

#potato {
  top: 340px;
  background-color: #555
}
.content {
  max-width: 500px;
  margin: auto;
  background: white;
  padding: 10px;
}
</style>
<body>


	<div class="bg">
		<div class="container">
  <div class="page-header">
    <h1>Crop Prediction<img src="https://png.pngtree.com/png-clipart/20190516/original/pngtree-human-character-with-green-tree-logo.-png-image_3732560.jpg"></h1>   
         </div> 
         
  </div> 

<div id="mySidenav" class="sidenav">
  <a href="#" id="wheat"><img src="https://5.imimg.com/data5/ST/QW/MY-38700875/fresh-wheat-crop-500x500.jpg" style="width:60px;
height:40px;">wheat</a>
  <a href="#" id="tomato"><img src="https://www.thermofisher.com/blog/wp-content/uploads/2014/08/tomatoes.jpg" style="width:60px;
height:40px;">tomato</a>
  <a href="#" id="rice"><img src="https://previews.123rf.com/images/natalyka/natalyka1310/natalyka131000107/23172398-uncooked-long-grain-rice-in-a-wooden-spoon.jpg" style="width:60px;
height:40px;">rice</a>
  <a href="#" id="potato"><img src="https://npr.brightspotcdn.com/dims4/default/9f6e228/2147483647/strip/true/crop/1000x525+0+14/resize/1200x630!/quality/90/?url=http%3A%2F%2Fnpr-brightspot.s3.amazonaws.com%2Flegacy%2Fsites%2Fkera%2Ffiles%2F201707%2FPotatoes.jpg" style="width:60px;
height:40px;">Potato</a>
</div>

<div class="content">
<p>Multiple Linear Regression is used by the system to predict the crop. The prediction is based on past production data of crops i.e.: identifying the tangible weather and soil parameters and comparing it with current conditions which will predict the crop more accurately and in a practical manner.I developed “🌿Cotton Plant Disease Prediction & Get Cure App” using Artificial Intelligence especially Deep learning. As Farmer, I know Farmer can’t solve Farm’s complex and even small problems due to lack of perfect education. So as AI enthusiastic I decided to solve this problem using the latest technology like AI.

I just took baby step and start to collect lots of images of cotton crop plants from my farm. To collect accurate data we need expertise in that domain and as a farmer it help me a lot.

Then I decide which algorithm is best to solve this problem and I select as usual you know “Convolution Neural Network” (CNN). I create my own CNN architecture and it works well on the training and as well as testing dataset.
</p>
</div>

   





	</div>

</body>
</html>