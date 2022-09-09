<?php
  session_start();
  
  echo "<h1>Hasta pronto " . $_SESSION['user'] . "</h1> Cerrando sesión...<i class='fa-solid fa-sync fa-spin'></i>";

  // cerramos sesión y volvemos a index.php
  session_destroy();
  // 3 segundos de delay para volver a index.php
  echo "<script>
          setTimeout(() => window.location = '../index.php',3000);
       </script>";
  
?>  

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bienvenido <?php $name?></title>
  <!-- fontawesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>

</body>
</html>


  


