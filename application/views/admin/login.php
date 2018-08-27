<!--
author: W3layouts
author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">
<head>
<title>Event Registration Form Widget Flat Responsive Widget Template :: w3layouts</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<link href="<?= base_url('resources/login/css/style.css') ?>" rel="stylesheet" type="text/css" media="all" />

<script type="text/javascript" src="<?= base_url('resources/login/js/jquery-2.1.4.min.js') ?>"></script>

<link href='//fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>
</head>
<body>
<!-- banner -->
  <div class="center-container">
    <div class="main">
      <h1 class="w3layouts_head">MRG Login</h1>
        <div class="w3layouts_main_grid">
          <form action="<?= base_url('Auth/login') ?>" method="post" class="w3_form_post">
            <div class="w3_agileits_main_grid w3l_main_grid">
              <span class="agileits_grid">
                <label>Password </label>
                <input type="password" name="password" placeholder="Your Password" required="">
              </span>
            </div>


          <div class="w3_main_grid">
            <div class="w3_main_grid_right">
              <input type="submit" value="Submit">
            </div>
          </div>
        </form>
      </div>


    </div>
  </div>
<!-- //footer -->
</body>
</html>