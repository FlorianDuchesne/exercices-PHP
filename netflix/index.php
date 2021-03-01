<?php session_start(); /* On commence la session */

if(!isset($_SESSION['User'])){
    header ("location:login.php");
    exit;
}

?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href = "./css/style.css"> 
    <title>Netflix sans BDD</title>
</head>
<body>
    
<?php include("SRC/header.php");?>

<section>
    <div id="login-body">
    </div>
</section>

    Vous êtes connecté "<?= $_SESSION['User'] ?>" <a href="logout.php"><strong style ='color:red'>cliquez ici</strong></a>






<?php include("SRC/footer.php");?>

</body>
</html>