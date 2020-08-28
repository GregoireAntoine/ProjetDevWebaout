<!DOCTYPE html>
<html>
    <head></head>
        <title>Toothy</title>
    </head>


    <body> 
   



    <div id="en-tête">
            <div id="titre"> 

              <! -- Bouton pour acceder à la page d'acceuil -->
              <a id="tete"  href="Acceuil.php">Toothy</a>

               <a id="prenom_client"></a>
               <a id="nom_client"></a>

              <! --  lien cliquable qui permet d'afficher ma commande-->
              <a  id="commande" href="macommande.php">
                Ma commande
              </a>

              
              <! -- lien cliquable qui permet d'afficher le formulaire de commande -->
              <a  id="commande"  href="commander.php">
                Commander 
              </a>
              
              <! -- bouton qui permet d'afficher la gamme de produit -->
              <a id="gamme" href="gamme.php">Notre gamme</a> 
              
        </div>
        </div>









<!-- page et formulaire de commande  -->

<div id="page-commande">
    <form id="commandeclient" action=# onSubmit=''>
      <fieldset>

        <!-- titre -->
          <legend><h2>Commande</h2></legend>


          <!-- adresse -->
          <label id="formadresse">Prenom </label><br>
          <input id="adresse" name="prenom" placeholder="saint-martin" required><br><br>

          <!-- adresse -->
          <label id="formadresse">Nom </label><br>
          <input id="adresse" name="nom" placeholder="saint-martin" required><br><br>


          <!-- pain au chocolat -->
          <label id="0">Pain au chocolat </label>
          <input id="apc" name="pac" type="number" min="0" max="15" step="1" value="0" placeholder="0"required><br><br>


          <!-- croissant -->
          <label id="1">Croissant </label>
          <input id="apc" name="croissant" type="number" min="0" max="15" step="1"value="0" placeholder="0" required><br><br>


          <!-- Pistolet -->
          <label id="2">Pistolet </label>
          <input id="apc" name="pistolet" type="number" min="0" max="15" step="1" value="0" placeholder="0"required><br><br>


          <!-- Coqueu aux raisin -->
          <label id="3"> Couque au raisin</label>
          <input id="apc" name="couque" type="number" min="0" max="15" step="1" value="0" placeholder="0"required><br><br>


          <!-- Brioche -->
          <label id="4"> Brioche </label>
          <input id="apc" name="brioche" type="number" min="0" max="15" step="1" value="0" placeholder="0"required><br><br>

<br><br>
          
          <!-- Bouton de soumission du formulaire -->
          <a href="Acceuil.php"><input id="submit" type="submit" value="Envoyer commande" >

          <!-- Bouton de réinisialisation des réponses du formulaire -->
          <input id="reset"type="reset">
      </fieldset>
    </form>
    <!--Fin du formulaire  -->






<!-- css titre-->
<style>
   a {text-decoration: none;}
    #tete{

font-family:  "PT Sans","Segoe UI","Roboto","Oxygen","Ubuntu","Cantarell","Fira Sans","Droid Sans","Helvetica Neue",sans-serif;
font-weight:bold;
letter-spacing: normal;
line-height: 1;
color: black;
border:none;
font-size: 0.9em;
background:white;
height: 2em;
padding-bottom:0.5em;
}
#tete:hover{
color: rgb(228, 165, 83);
cursor:pointer;
}
#titre {
font-size: 0.6em;
padding-left: 2.5em;
font-family:  "PT Sans","Segoe UI","Roboto","Oxygen","Ubuntu","Cantarell","Fira Sans","Droid Sans","Helvetica Neue",sans-serif;
font-weight:bold;
letter-spacing: normal;
line-height: 1;
color: black;
border:none;
padding-top:0.4em ;
}

#en-tête{
border: none;

font-family:  "PT Sans","Segoe UI","Roboto","Oxygen","Ubuntu","Cantarell","Fira Sans","Droid Sans","Helvetica Neue",sans-serif;
letter-spacing: normal;
line-height: 1;
color: black;

margin-top: 0;

font-size: 4em;
background-color: white;
height: 1.4em;
}
#gamme{
margin-top:0.4rem;
}
#ajout{
font-size:0.48em;
margin-top:1rem;
}
#commande, #gamme, #ajout{
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
float:right;
margin-right:2.5em;


}
#nom_client,#prenom_client{
float:right;
font-size:15px;
margin-top:1.33em;
font-weight: 400;
padding-right:10px;
}
#prenom_client{
padding-right:18px;
}
#gamme{
padding-top:0.7em;
font-size:0.49em;
}
#commande{
padding-top:1em;
font-size:0.49em;
}
#commande:hover, #gamme:hover, #ajout:hover{
cursor: pointer;
font-size:0.5em;
color: rgb(228, 165, 83);
background: white;
}
</style>

<!-- css commander-->
        <style>
#page-commande{
    margin-left:50%;
    transform: translate(-50%,0);
width: 50em;


font-family:  "PT Sans","Segoe UI","Roboto","Oxygen","Ubuntu","Cantarell","Fira Sans","Droid Sans","Helvetica Neue",sans-serif;
width: 500px;
font-size: 1.2em;
text-align: center;

float:left;
padding-left:2em;

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

        </body>













        <!--php pour la récup des données -->



<?php

$bdd = new PDO('mysql:host=localhost;port=3307;dbname=toothy;charset=utf8', 'root', 'root');

$requete = $bdd->prepare('INSERT INTO commande(nom, prenom, pac, croissant, pistolet, couque, brioche) VALUES (?,?,?,?,?,?,?)');
$requete->execute(array($_GET['nom'],$_GET['prenom'],$_GET['pac'],$_GET['croissant'],$_GET['pistolet'],$_GET['couque'],$_GET['brioche']));


?>














        </html>