<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Exercice 4-Partie 2</title>
</head>
<body>
 <?php 
    $magnitude = rand(1,90)/10; ?>
    <p><?=$magnitude." ";?></p>
<?php
switch(true) {
        case $magnitude <= 1.9 : ?> <p>Micro tremblement de terre, non ressenti.</p>
 <?php break;
        case $magnitude >=2 && $magnitude <=2.9 : ?> <p>Généralement non ressenti mais détecté/enregistré.</p>
 <?php break;
        case $magnitude >=3 && $magnitude <=3.9 : ?> <p>Souvent ressenti sans causer de dommages.</p>
 <?php break;
        case $magnitude >=4 && $magnitude <=4.9 : ?> <p>Secousses notables d'objets à l'intérieur des maisons, bruits d'entrechoquement. Les dommages restent très légers.</p>
 <?php break;
        case $magnitude >=5 && $magnitude <=5.9 : ?> <p>Peut causer des dommages significatifs à des édifices mal conçus dans des zones restreintes. Pas de dommages aux édifices bien construits.</p>
 <?php break;
        case $magnitude >=6 && $magnitude <=6.9 : ?> <p>Peut provoquer des dommages sérieux sur plusieurs dizaines de kilomètres. Seuls les édifices adaptés résistent près du centre.</p>
 <?php break;
        case $magnitude >=7 && $magnitude <=7.9 : ?> <p>Peut provoquer des dommages sévères dans de vastes zones ; tous les édifices sont touchés près du centre</p>
 <?php break;
        case $magnitude >=8 && $magnitude <=8.9 : ?> <p>Peut causer des dommages très sévères dans des zones à des centaines de kilomètres à la ronde. Dommages majeurs sur tous les édifices, y compris à des dizaines de kilomètres du centre.</p>
 <?php break;
        case $magnitude >9 : ?> <p>Dévaste des zones sur des centaines de kilomètres à la ronde. Dommages sur plus de 1 000 kilomètres à la ronde.</p>
 <?php break;
        default : ?> <p>Désolé, je n'ai pas de message à afficher pour cette magnitude.</p>
 <?php
    }
  ?>

</body>
</html>