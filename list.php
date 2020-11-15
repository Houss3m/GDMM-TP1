<html>
 <head>
 <title>Stock d'images</title>
 </head>
 <body>
 <h1>Liste des images</h1>
 <?php
 error_reporting(-1);
 ini_set('display_errors', 'On');
 include ("config.php");
 $req = "SELECT img_nom, img_id " .
 "FROM images ORDER BY img_nom";
 $result = $cnx->query($req);
 if(!$result)
 {
 echo "echec de requete";
 print_r($cnx->errorInfo());
 }
 while ( $col = $result->fetch() )
 {

 echo "<a href=\"view.php?id=" . $col[1] . "\">" . $col[0] . "</a><br />";
 
}
 ?>
 </body>
 </html>
