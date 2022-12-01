<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Comptible" content="">
        <meta name="viewport" content="">
        <title>Document</title> 
        <style>
        @import url(style.css);
        </style>

</head>
<body>
<form action="data/traitement.php" method="POST">
    <h1>S'enregistrer</h1>
        <div>
        <input type="text" placeholder="Nom complet"  class="non">
        </div>
        <div>
        <input type="email" placeholder="Adresse email"  class="email">
        </div>
        <div>
        <input type="text" placeholder="Username" class="user" id=""/>
        </div>
        <div>
        <input type="password" placeholder="Password" class="pass" >
        </div>
        <div>
        <input type="submit" value="Créer un compte"  class="in" >
        </div><div class="moi" > 
        <span>Déjà membre?</span>
        <a href="index.php">Connectez-vous!</a>
        </div>
    