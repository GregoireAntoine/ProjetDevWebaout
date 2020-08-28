<!DOCTYPE html>
<html>
<body > 


<!-- page inscription-->
<div id="connexionlapage">
 <div id="titreconnexion">
     <div id="letitrecon">
 Toothy<div id="textetitreconnexion">inscription</div> </div>
 </div>
 
 <div id="connexionclient">
  
     <form id="connexionclientform" action=# onSubmit=''>
     
             <! -- prenom -->
             <center>  <label id="formprenom">prenom </label><br>
             <input id="prenom" name="prenom"  required><br><br>
             
             
             <! -- nom -->
             <label id="formnom">nom </label><br>
             <input id="nom" name="nom"   required><br><br>

             <! -- addressemail -->
             <label id="foraddressemail">e-mail </label><br>
             <input id="mail" name="mail" type="email"   required><br><br>

             <! -- mot de passe -->
             <label id="motdepasse">mot de passe </label><br>
             <input id="mdp" name="mdp" type="password"   required><br><br></center>
 
             
             <br>
             <! -- Bouton de soumission du formulaire -->
             <center><input id="submit" type="submit" value="valider"></center>
             <center><a id="inscri" href="login.php">Retour</a></center>
         </fieldset>
       </form>
 </div></div>
 
</body>
<style>
        body{
    margin: 0em;
    
}
a {text-decoration: none;
color:grey;
font-family:  "PT Sans","Segoe UI","Roboto","Oxygen","Ubuntu","Cantarell","Fira Sans","Droid Sans","Helvetica Neue",sans-serif;
}
#titreconnexion{
    margin-left:50%;
    transform: translate(-50%,0);
    color:white;
    padding-bottom:20px;;
    background:rgb(228, 165, 83);
    box-shadow:  0px 0px 10px rgb(121, 120, 120);
    width:100%;
    font-weight: 700;
    font-size: 4em;
    font-family:  "PT Sans","Segoe UI","Roboto","Oxygen","Ubuntu","Cantarell","Fira Sans","Droid Sans","Helvetica Neue",sans-serif;
}
#tritre1{
    float:left;
}
#connexionclient,#connexclient{
    margin-left:50%;
    transform: translate(-50%,0);
    box-shadow:  0px 5px 10px rgb(121, 120, 120);
    width: 25rem;
    height: 28rem;
    margin-top:2em;
    border-radius: 2em;
    padding-top: 1em;
    background-color:rgb(255, 255, 255);
}
#connexclient{
    margin-top:6em;
    height: 19rem;
}
#connexionclient label,#connexclient label{
    
    font-family:  "PT Sans","Segoe UI","Roboto","Oxygen","Ubuntu","Cantarell","Fira Sans","Droid Sans","Helvetica Neue",sans-serif;
    font-weight: 600;
}

#connexionclient input,#connexclient input{
    border:1px solid rgb(165, 165, 165);
    border-radius: 2em;
    box-shadow: inset 0px 0px 2px rgb(121, 120, 120);
   
}
#connexionclient #submit,#connexclient #submit{
    border:none;
    box-shadow:  0px 0px 0px rgb(255, 255, 255);
    color:rgb(107, 107, 107);
}
#textetitreconnexion{
    float:left;
    font-size: 13px;
}
#letitrecon{
    margin-left:50%;
    transform: translate(-25%,0);
}



#connexlapage #inscri,#connexionlapage #retourcon{
    font-size: 13px;
color:rgb(156, 156, 156);
border:none;
box-shadow:  0px 0px 0px rgb(121, 120, 120);
}

fieldset{
    padding-top: 1em;
    border:1px solid rgb(230, 227, 227);
    border-radius: 2em;
    box-shadow:  0px 5px 15px rgb(121, 120, 120);
}
legend{
   padding-top: 2.5em; 
}
#mdp, #mail{
    width:20em;
    height:2em;
}
#submit,#reset,input{

border: none;

background-color: white;
font-family:  "PT Sans","Segoe UI","Roboto","Oxygen","Ubuntu","Cantarell","Fira Sans","Droid Sans","Helvetica Neue",sans-serif;
    letter-spacing: normal;
    line-height: 1;
    color: black;
    height: 2.5em;
    text-align: center;
    font-weight:bold;
   
    background-color: white;
    font-size: 1em;}
    input:hover{
        cursor: pointer;
    }
    #submit:hover,#reset:hover{
        cursor: pointer;
        color: rgb(228, 165, 83);
    }

        </style>
        <?php

$bdd = new PDO('mysql:host=localhost;port=3307;dbname=toothy;charset=utf8', 'root', 'root');

$requete = $bdd->prepare('INSERT INTO login(Nom, Prenom, mail, mdp) VALUES (?,?,?,?)');
$requete->execute(array($_GET['nom'],$_GET['prenom'],$_GET['mail'],$_GET['mdp']));
if (isset($_GET['mdp']) && isset($_GET['prenom']) && isset($_GET['nom']) && isset($_GET['mail'])) {
 

header('Location: http://localhost:8888/ProjetAout/Acceuil.php');
  exit();
  }
?>


</html>