
<body>
	<html>
		<head>
					<title><?= $config['hotelName'] ?> </title>
		</head>
		<body >
  
<link href='http://fonts.googleapis.com/css?family=Raleway:400,100,700,300' rel='stylesheet' type='text/css'>

<div id="map-locator">
  <div class="container clearfix">
    <div class="one_half">
				<?php staffPin1(); ?>
		<form name='PINform1' id='PINform1' method="post">

      <h1><?= $lang["Pintitu3"]; ?></h1>
	  <p>
<input action="post" align="left" method="post" id="PINbox1" type="password" name="PINbox1" style="padding: 15px;border-color: #fff;width: 40%;background: rgb(243, 243, 243);border: 0px;color: #828282;border-radius: 5px;">
      <p><?= $lang["Pintext4"]; ?></p>
	  </p>
      <button type="submit" name="loginPin1"><?= $lang["Pintext2"]; ?></button><br><br
    </div>
	</form>
  </div>
</div>
  <div class="container clearfix">
  
   <a href="/logout">
	  <button style="padding: 9.5px;width: 100px !important;border-color: #520f0f;background-color: #691313;margin-left:130px; margin-top:-63px;">Salir</button><br><br>
	    </a>
		</body>
	</html>			
	<style>
	body {
  margin:0;
  padding:0;
  background: url(/<?php echo H. $config['skin']; ?>/assets/images/pin.png)top #222222;
  background-repeat-y: no-repeat;
}
h1 {
  font-family:Raleway, sans-serif;
  font-weight:normal;
  color: #4a4a4a;
}
p {
  font-family:sans-serif;
  color:#8a8a8a;
  font-size:14px;
}
.error{
	background: #222;
    padding: 10px;
    color: #fff;
    font-family: arial;
    border-radius: 5px;
    margin-top: 20px;
}
.clearfix:after {
  content:'';
  clear: both;
  display:block;
}
.container {
  display: block;
  max-width:1000px;
  margin:0 auto;
}
#map-locator {
  width:100%;
  background:#fdfdfd;
  margin:120px 0;
}
#map-locator button {
    display: inline-block;
    box-shadow: 0 4px 6px rgba(50, 50, 93, .11), 0 1px 3px rgba(0, 0, 0, .08);
    text-align: center;
    white-space: nowrap;
    color: #fff;
    background-color: #2b65a9;
    border-color: #2b65a9;
    vertical-align: middle;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    border: 1px solid transparent;
    padding: .625rem 1.25rem;
    font-size: 1rem;
    line-height: 1.5;
    border-radius: .375rem;
}
}
#map-locator h1 {
	color:#222;
	line-height:0.5;
	padding-top:25px;
}
.one_half {
  float:left;
  margin:0;
}
	</style>