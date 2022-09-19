<?php
if (User::userData('slopt_pin') == 0) {
  header('Location: /me');
}
?>

<body>
  <html>

  <head>
    <link rel="stylesheet" type="text/css" href="/templates/<?= $config['skin'] ?>/assets/css/index.css?<?= $hotel['cache']; ?>">
    <title><?= $config['hotelName'] ?> </title>
  </head>

  <body>

    <link href='https://fonts.googleapis.com/css?family=Raleway:400,100,700,300' rel='stylesheet' type='text/css'>

    <div id="map-locator">
      <div class="container clearfix">
        <div class="one_half">
          <?php staffPin(); ?>
          <form name='PINform' id='PINform' method="post">

            <h1><?= $lang["Pintitu1"]; ?></h1>
            <p>
              <input action="post" align="left" method="post" id="PINbox" type="password" name="PINbox" style="padding: 15px;border-color: #fff;width: 40%;background: rgb(243, 243, 243);border: 0px;color: #828282;border-radius: 5px;">
            <p><?= $lang["Pintext1"]; ?></p>
            </p>
            <button type="submit" name="loginPin"><?= $lang["Pintext2"]; ?></button><br><br>
        </div>
        </form>
      </div>
    </div>
  </body>

  </html>
  <style>
    body {
      margin: 0;
      padding: 0;
      background: url(/<?php echo H . $config['skin']; ?>/assets/images/bg.png)top #222222;
      background-repeat-y: no-repeat;
    }

    h1 {
      font-family: Raleway, sans-serif;
      font-weight: normal;
      color: #4a4a4a;
    }

    form#PINform {
      margin-top: 20px;
    }

    p {
      font-family: sans-serif;
      color: #8a8a8a;
      font-size: 14px;
    }

    .error {
      background: #222;
      padding: 10px;
      color: #fff;
      font-family: arial;
      border-radius: 5px;
      margin-top: 20px;
      margin-left: 0px;
      position: inherit;
    }

    .clearfix:after {
      content: '';
      clear: both;
      display: block;
    }

    .container {
      display: block;
      max-width: 1000px;
      margin: 0 auto;
    }

    #map-locator {
      width: 100%;
      background: #fdfdfd;
      margin: 120px 0;
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
      color: #222;
      line-height: 0.5;
      padding-top: 25px;
    }

    .one_half {
      float: left;
      margin: 0;
    }
  </style>