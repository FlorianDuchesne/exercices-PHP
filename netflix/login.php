<?php session_start();

// On va vérifier si notre formulaire est soumis

if (isset($_POST['Submit'])){

    //Définir l'identifiant (username) et le mot de passe associé pour 3 utilisateur fictifs

    $logins = array('test@test.fr' => 'test', 'truc@truc.fr' => 'test', 'bidule@bidule.fr' => 'test');

    // Je vérifie et j'assigne le username et mdp soumis à une variable

    $username = isset($_POST['Email'])? $_POST['Email'] : '';
    // Si email déclaré et non null, alors username = email tapé par l'utilisateur, sinon rien.
    
    $password = isset($_POST['Password'])? $_POST['Password'] : '';
    // Si mot de passe déclaré et non null, alors password = mot de passe tapé par l'utilisateur, sinon rien.

    // On va vérifier si le username et le password existent dans mon tableau d'utilisateurs (fictifs en l'occurrence)

    if(isset($logins[$username]) && $logins[$username] == $password){

        // On lui set les variables en sessions et on le redirige vers une autre page

        $_SESSION['User'] = $logins[$username];

        header ('location: index.php');
        exit();
    } else {

        // Si la vérification a échoué, on set un message d'erreur

        $message ="<span style='color : red'> Identifiant invalide</span>";
    }

}


?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>Netflix sans BDD</title>
</head>
<body>
    
    <?php include("src/header.php");?>

        <section>
            <div id="login-body">

                <h1>Connectez-vous</h1>

                <form action="login.php" method="post" name="Login_form">
                
                
                
                <?php if(isset($message)){ ?>
                    
                    <p><?php echo $message; ?> </p>

                <?php } ?>    
                
                <!-- attribut action va permettre de définir l'emplacement d'une URL où seront envoyées les données récoltées par le formulaire. -->
                
                <!-- attribut method définit la méthode HTTP utilisée pour envoyer les données du formulaire -->
                
                    <table class="Table">
                        <tr>
                            <td>Email</td>
                            <td><input type="email" class="Input" name="Email"></td>
                        </tr>
                        <tr>
                            <td>Mot de passe</td>
                            <td><input type="password" name="Password" class="Input"></td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td><input type="submit" name="Submit" value="Login" class="button"></td>
                        </tr>
                    </table>

                    <label id="option"><input type="checkbox" name="auto" checked>Se souvenir de moi</label>

                </form>

            </div>        
        
        </section>

    <?php include("src/footer.php");?>

</body>
</html>