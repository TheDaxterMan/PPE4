<?php
  if (isset($_POST['login']))
  {
    $email = $_POST['emailPHP'];
    $mdp = $_POST['mdpPHP'];

    exit($email . " = " . $mdp);
  }
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Test JQuery</title>
  </head>
  <body>
    <form class="" action="testform.php" method="post">
      <input type="text" id="email" placeholder="email..."><br>
      <input type="password" id="mdp" placeholder="MDP..."><br>
      <input type="button" value="Login" id="login">

      <script src="http://code.jquery.com/jquery-3.3.1.min.js" onkeyup="" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
      <script type="text/javascript">
        $(document).ready(function(){
          $("#login").on('click', function () {
             var email = $("#email").val();
             var mdp = $("#mdp").val();

             if (email == ""  ||  mdp == "")
             {
                alert('Please check your inputs');
             }
             else
             {
               $.ajax(
                 {
                   url: 'testform.php',
                   data: {
                       login: 1,
                       emailPHP: email,
                       mdpPHP: mdp
                   },
                   success: function (response) {
                       console.log(response);
                   },
                   dataType: 'Text'
                 }
               );
             }
          });
        });
      </script>
    </form>
  </body>
</html>
