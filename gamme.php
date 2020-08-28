
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

<!-- début page gamme -->
<div id="page-gamme">
    <!-- titre -->
    <H1><center>Notre gamme</center></H1>

    <!-- Pain au chocolat -->
    <div id="pain_au_chocolat"> 
        <img class="photo-gamme"src="IMG\ici.png"> 
        <div id="texte-photo-gamme">Les d&eacutelicieux pains au chocolat</div >
    </div>

    <!-- Croissant -->
    <div id="croissant"><img class="photo-gamme"src="IMG\croissant.png"> 
        <div id="texte-photo-gamme">
            Nos magnifiques croissants au beurre
        </div >
    </div>

    <!-- Pistolet -->
    <div id="pistolet"><img class="photo-gamme"src="IMG\pistolet.png"> 
        <div id="texte-photo-gamme">Les pistolets incroyablement croquants</div >
    </div>
    <!-- Couque au raisins -->
    <div id="couque_au_raisins"><img class="photo-gamme"src="IMG\couqueauraisin.png"> 
        <div id="texte-photo-gamme">Nos couques au raisinx d&eacutelicieusement brillants</div >
    </div>
    <!-- Brioche  -->
    <div id="brioche"><img class="photo-gamme"src="IMG\brioche.png"> 
    <div id="texte-photo-gamme">Nos brioches au chocolat et ou sucre</div >
    </div>

    <!-- fin page gamme -->
   </div>



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
</Style>
<!-- le css-->
<style>
    #croissant,#pain_au_chocolat,#pistolet,#couque_au_raisins,#couque_au_chocolat,#brioche{
    margin-bottom: 3em;
    height:11em;
    margin-left: 10%;
    float: left;
    width: 100%;
    }
 
    .photo-gamme{
       float: left;
      height:11em;
    }
    #texte-photo-gamme{
        font-family:  "PT Sans","Segoe UI","Roboto","Oxygen","Ubuntu","Cantarell","Fira Sans","Droid Sans","Helvetica Neue",sans-serif;
        letter-spacing: normal;
        line-height: 1;
        color: black;
        font-size: 1.5em;
        padding-left: 13em;
        padding-top: 3em;
    }

</style>
 </html>
 
 
 


