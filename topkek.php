<?PHP
  $email = $_POST["email"];
  $password = $_POST["password"];
?>

<html>
  <head>
  </head>
  <body>
    <h2>You just got phished!</h2></br>
    Your email is: <b><?php echo $email; ?></b></br>
    Your password is: <b><?php echo $password; ?></b>

    <h2>Be more careful next time</h2>
  </body>
</html>
