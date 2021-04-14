<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing:border-box;
}

body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}
.bg {
  /* The image used */
  background-image: url("https://png.pngtree.com/thumb_back/fw800/background/20200303/pngtree-spring-texture-blur-background-image_330620.jpg");

  /* Full height */
  height: 100%; 
  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}




.container {
  padding: 64px;
}

.row:after {
  content: "";
  display: table;
  clear: both
}

.column-66 {
  float: left;
  width: 66.66666%;
  padding: 20px;
}

.column-33 {
  float: left;
  width: 33.33333%;
  padding: 20px;
}

.large-font {
  font-size: 48px;
}

.xlarge-font {
  font-size: 64px
}

.button {
  border: none;
  color: white;
  padding: 14px 28px;
  font-size: 16px;
  cursor: pointer;
  background-color: #4CAF50;
}

img {
  display: block;
  height: auto;
  max-width: 100%;
}

@media screen and (max-width: 1000px) {
  .column-66,
  .column-33 {
    width: 100%;
    text-align: center;
  }
  img {
    margin: auto;
  }
}
span{
  font-weight: bold;
  font-size:18px;
}
</style>
</head>
<body>
<div class="bg">
<div style="text-align:center">
  <h2>Let's Know More About the features</h2>
  <p>Farming with technological advancements</p>
</div>

<!-- The App Section -->
<div class="container">
  <div class="row">
    <div class="column-66">
      <h1 class="xlarge-font"><b></b></h1>
      <h1 class="large-font" style="color:MediumSeaGreen;"><b></b></h1>
      <p> <span style="font-weight:bold">1. Crop Yield Prediction model.<br> 2. Using Deep Learning for Image-Based Plant Dideases Detection.<br> 3. Soil Quality Analysis for Fertility Assessment. <br> 4. Agribot (Smartbot).<br> 5. Crop Recommendition based on Machine learning.
      </p>
      <p>The aim of this Project is to provide Machine Learning based model to help in pre-production of crop and vegetables.Various aspect of machine learning like Computer Vision ,Ensemble rediction on parameter and nltk are used. </p>
    </div>
    <div class="column-33">
        <img src="https://cdn.shortpixel.ai/client/q_glossy,ret_img/https://pertsol.com/wp-content/themes/pertsol/assets/data/images/smart-farming.jpg" width="335" height="471">
    </div>
  </div>
</div>

<!-- Clarity Section -->
<div class="container" style="background-color:#f1f1f1">
  <div class="row">
    <div class="column-33">
      <img src="https://cdn-a.william-reed.com/var/wrbm_gb_food_pharma/storage/images/9/9/8/0/2610899-1-eng-GB/USDA-report-offers-baseline-prediction-for-US-feed-growth-market.jpg" width="335" height="471">
    </div>
    <div class="column-66">
      <h1 class="xlarge-font"></h1>
      <h1 class="large-font" style="color:red;"></h1>
      <p><span style="font-size:14px"> 1. Crop Yield Production </span><br>Crop Yield Production is an important agricultural problem.The agriculture yield primarily depends on weather conditions(rain,temperature etc),pesticides.Accurate information about history of crop yield is important for making decision releated to agricultural risk managementand future prediction.Based on weather parameter and soil content such as Rainfall.Temperature,Humidity,and pH.The system takes the required input from the farmers to predict a continuous value ,regressions model are used.It is supervised technique .The coefficient are preprocessed and fit into the trained data during training and construction the regression model.The main focus here is to reduce the cost function by finding the best fit-line.The output function facilitates in error measurement.During training period ,error between the predicted and actual valueis reduced in order to minimize error function. </p>
      <button class="button" style="background-color:red">Read More</button>
    </div>
  </div>
</div>

<!-- The App Section -->
<div class="container">
  <div class="row">
    <div class="column-66">
      <h1 class="xlarge-font"></h1>
      <h1 class="large-font" style="color:MediumSeaGreen;"></h1>
      <p><span style="font-size:14px" "font-weight: bold"> 2.Deep Learning for Image-Based Plant Disease Detection</span><br>
The combination of increasing global smartphone penetration and recent advances
in computer vision made possible by deep learning has paved the way for
smartphone-assisted disease diagnosis.
The dataset of any crop and vegetable could be easily found with the help of internet and also
various public dataset are available for the approach.We train a deep convolutional neural
network to identify pattern in the image.The trained model achieves an accuracy of on a
held-out test set, demonstrating the feasibility of this approach.
Overall, the approach of training deep learning models on increasingly large and
publicly available image datasets presents a clear path toward smartphone-assisted.</p>
    <button class="button" style="background-color:red">Read More</button>
    </div> 
    <div class="column-33">
        <img src="https://www.disruptordaily.com/wp-content/uploads/2019/08/123949773_m.jpg" width="335" height="471" >
    </div>
  </div>
</div>


<div class="container" style="background-color:#f1f1f1">
  <div class="row">
    <div class="column-33">
      <img src="https://geographyandyou.com/wp-content/uploads/2016/06/Soil-testing-download-e1500557003761.jpg" width="335" height="471">
    </div>
    <div class="column-66">
      <h1 class="xlarge-font"></h1>
      <h1 class="large-font" style="color:red;"></h1>
      <p><span style="font-size:14px" "font-weight: bold"> 3. Soil Quality Analysis and Fertility Assessment</span><br>
Soil’s physical and chemical properties plays a dominant role to assess the soil
quality and soil fertility.The fertilizers like Phosphorous, Potassium and micro-nutrients
of the soil are incumbent for the development and productiveness of the soil and plants.
We have to distinguish the structures, features and characteristics of soil to improve the
accuracy of crop fertility prediction. Machine learning algorithms are useful to achieve
the better accuracy in soil quality prediction and assessment. This approach describes the
machine learning models with regression and classification technique in python and
compare different supervised algorithm to evaluate and recommended suitable crop using
accuracy of the aspect.</p>
      <button class="button" style="background-color:red">Read More</button>
    </div>
  </div>
</div>

<div class="container">
  <div class="row">
    <div class="column-66">
      <h1 class="xlarge-font"></h1>
      <h1 class="large-font" style="color:MediumSeaGreen;"></h1>
      <p><span style="font-size:14px" "font-weight: bold"> 4.Crop Recommendation using Machine Learning</span><br>
In order to mitigate the agrarian crisis in the current status quo,there is a need
for better recommendation systems to alleviate the crisis by helping the farmers to
make an informed decision before starting the cultivation of crops.</p>
    <button class="button" style="background-color:red">Read More</button>
    </div> 
    <div class="column-33">
        <img src="https://www.edumilestones.com/crm/images/CC%20LOGO%20.png" width="335" height="471" >
    </div>
  </div>
</div>



<div class="container" style="background-color:#f1f1f1">
  <div class="row">
    <div class="column-33">
      <img src="https://www.whataventure.com/wp-content/uploads/2017/08/Agribot-logo-300x100.jpg" width="335" height="471">
    </div>
    <div class="column-66">
      <h1 class="xlarge-font"></h1>
      <h1 class="large-font" style="color:red;"></h1>
      <p><span style="font-size:14px" "font-weight: bold">5.Agribot</span><br>
A special bot trained to solve various problem related to agriculture sector.With the help
of cloud based model such as IBM,AWS and Azure.It could be accordingly trained and
employed on whatsapp ,fb and home screen.</p>
      <button class="button" style="background-color:red">Read More</button>
    </div>
  </div>
</div>


</div>
</body>
</html>
