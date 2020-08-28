<!DOCTYPE html>
<html>
    <head></head>
        <title>Toothy</title>
    </head>



<!-- debut du body de l'acceuil (visuel html) -->
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
              <a  id="commande" href="commander.php">
                Commander 
              </a>
              
              <! -- bouton qui permet d'afficher la gamme de produit -->
              <a id="gamme" href="gamme.php">Notre gamme</a> 
              
        </div>
        </div>
        
<div id="page-acceuil">

          <!--  case d'introduction -->
       <div id="case1">
           <div id="présentation">
             <div id="textepresentation">

              <!-- phrase d'introduction -->
               <center >
                 D&eacutegustez vos viennoiseries pr&eacutef&eacuter&eacutees
               </center>
              </div>
            </div>
        </div>

        <!-- espace de séparation  -->
      <div id="espace"></div>

      <!--  Présentation du service-->
    <div id="but">
      <img class="but-picture"src="IMG\vien.png"> <div id="text-but-picture"><h2>Qui sommes-nous ?</h2><br>Nous vous proposons un service de r&eacuteservation de vos viennoiseries pr&eacutef&eacuter&eacutees confectionn&eacutees quelques heures avant votre venue par notre boulanger.</div>
    </div>
  </div>
     
  <!-- espace de séparation -->
  <div id="espace2"></div>

<!-- compteur pour page d'acceuil-->
<?php
$monfichier = fopen('compteur.txt', 'r+');
 
$pages_vues = fgets($monfichier); // On lit la première ligne (nombre de pages vues)
$pages_vues += 1; // On augmente de 1 ce nombre de pages vues
fseek($monfichier, 0); // On remet le curseur au début du fichier
fputs($monfichier, $pages_vues); // On écrit le nouveau nombre de pages vues
 
fclose($monfichier);
 
echo '<p>Cette page a été vue ' . $pages_vues . ' fois !</p>';
?>

    </body>

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
    <!--le css crops-->
    <style>
        body{
            margin:0;
            padding:0;
        }
        #case1{
   
   margin-left: 0%;
   height: 40em;
   width: 100%;
   
   background-color:white;
}
#textecase1{
   margin-top: 1em;
   font-size: 300%;
   font-family: 'MV Boli';
}
#textepresentation{
   color:white;
   filter: none;
   
}
#présentation {
   
   font-family:  "PT Sans","Segoe UI","Roboto","Oxygen","Ubuntu","Cantarell","Fira Sans","Droid Sans","Helvetica Neue",sans-serif;
   letter-spacing: normal;
   line-height: 1;
   margin-top: 32px;
   margin-bottom: 32px;
   font-size:3em;
  font-weight: bold;
   
   padding-top:4.5em;
  
   opacity: 0.9;
   position:absolute;
   box-sizing: inherit;
   margin-top: 0em;
   width: 100%;
   background-color:rgb(228, 165, 83);
   height: 6.1em;
   
}
#but{
   margin-left:50%;
   transform: translate(-50%,0);
width: 50em;
height: 20em;

}
.but-picture{
   
   width: 22em;
  float: left;
}
#text-but-picture{
   line-height:32px;
   font-family:  "PT Sans","Segoe UI","Roboto","Oxygen","Ubuntu","Cantarell","Fira Sans","Droid Sans","Helvetica Neue",sans-serif;
   width: 300px;
   font-size:1.3em;
   text-align: center;
  
   float:left;
   padding-left:2em;

}
#corps{
   padding-top: 2em;
   color: darkgray;
}

#pied{
  
   color: chocolate;
}
        #espace{
    background: white;

    width: 100%;
}
#espace2{
    background: white;
    height:5em;
    width: 100%;
}
    </style>
</html>
