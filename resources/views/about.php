<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.column {
  float: left;
  width: 33.3%;
  margin-bottom: 16px;
  padding: 0 8px;
}

@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
}

.container {
  padding: 0 16px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button:hover {
  background-color: #555;
}
h1{
  color: blue;
}
</style>
</head>
<body>
 <h1>Meet the Team Member :-</h1>

<div class="row">
  <div class="column">
    <div class="card">
      <img src="https://ae01.alicdn.com/kf/Hd37c4eea5ce64624b3b329f092b2a01dt.jpg" style="width:150px" "height:150px;">
      <div class="container">
        <h2>Rahul Jha</h2>
        <p class="title">CEO & Founder</p>
        <p>Some text that describes me lorem ipsum ipsum lorem.</p>
        <p>example@example.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="https://image.ebdcdn.com/image/upload/f_auto,q_auto:good/v1/static/images/discover/frames/colors-05.jpg" style="width:150px" "height:150px;">
      <div class="container">
        <h2>Sonika Soni</h2>
        <p class="title">Art Director</p>
        <p>Some text that describes me lorem ipsum ipsum lorem.</p>
        <p>example@example.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
      <img src="https://image.ebdcdn.com/image/upload/f_auto,q_auto:good/v1/static/images/discover/frames/purple-eyeglass.jpg" style="width:150px" "height:150px;">
      <div class="container">
        <h2>Princee Chandra</h2>
        <p class="title">Designer</p>
        <p>Some text that describes me lorem ipsum ipsum lorem.</p>
        <p>example@example.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>

  </div>
    <div class="column">
    <div class="card">
      <img src="https://cdn.shopify.com/s/files/1/0879/4406/products/paige_striped-maple_girls-glasses-for-kids_jonas-paul-eyewear_250x.jpg?v=1603129895" style="width:150px" "height:150px;">
      <div class="container">
        <h2>Shakshi Shukla</h2>
        <p class="title">CEO & Founder</p>
        <p>Some text that describes me lorem ipsum ipsum lorem.</p>
        <p>example@example.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>


</div>

</body>
</html>
