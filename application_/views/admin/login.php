<?php



$Password = 'MM123'; // Set your password here



/******************************************************************************/
   if (isset($_POST['submit_pwd'])){
      $pass = isset($_POST['passwd']) ? $_POST['passwd'] : '';
      
      if ($pass != $Password) {
         showForm("Wrong password");
         exit();     
      }
   } else {
      showForm();
      exit();
   }
   
function showForm($error="LOGIN"){
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "DTD/xhtml1-transitional.dtd">
<html>
<head>
   <title>Admin-Login</title>
   <link href="resources/login_style/style.css" rel="stylesheet" type="text/css" />
</head>
<body>
    <div id="main">
      <div class="caption"><?php echo $error; ?></div>
      <div id="icon">&nbsp;</div>
      <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" name="pwd">
        Password:
        <table>
          <tr><td><input class="text" name="passwd" type="password"/></td></tr>
          <tr><td align="center"><br/>
             <input class="text" type="submit" name="submit_pwd" value="Login"/>
          </td></tr>
        </table>  
      </form>
      <div id="source">Login</div>
   </div>
</body>       

<?php   
}
?>