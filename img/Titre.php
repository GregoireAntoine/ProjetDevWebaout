<!DOCTYPE html>
<html>
    <head></head>
        <title>Toothy</title>
    </head>

    
    <body> 

        <div id="en-tête">
            <div id="titre"> 

              <! -- Bouton pour acceder à la page d'acceuil -->
              <a id="tete" href="Acceuil.php">Toothy</a>

               <a id="prenom_client"></a>
               <a id="nom_client"></a>

              <! --  lien cliquable qui permet d'afficher ma commande-->
              <a  id="commande" onclick="monpanier()">
                Ma commande
              </a>

              
              <! -- lien cliquable qui permet d'afficher le formulaire de commande -->
              <a  id="commande" onclick="commande_client()">
                Commander 
              </a>
              
              <! -- bouton qui permet d'afficher la gamme de produit -->
              <a id="gamme" href="gamme.php">Notre gamme</a> 
              
        </div>
        </div>

    
    </body>

    <!-- le css-->
    <style>
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
#page-gamme{
display:none;
}
    </style>
</html>
