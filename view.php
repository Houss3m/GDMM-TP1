<?php
        error_reporting(-1);
        ini_set('display_errors', 'On');
        include("config.php");
        if (isset($_GET['id'])) {
            $id = intval($_GET['id']);
            include("config.php");
            $req = "SELECT img_id,img_nom,img_type,img_blob FROM images WHERE img_id=" . $id . "";
            $result = $cnx->query($req);
            if (!$result) {
                echo "echec de requete";
                print_r($cnx->errorInfo());
            } else {
                $col = $result->fetch();

                if (!$col[0]) {
                    echo "Id d'image inconnu";
                } else {
                   echo "<span class='img_nom'>".$col[1]."</span>";
              echo '<img class="sh-img" src="data:image/jpeg;base64,' . base64_encode($col[3]) . '"/>';
			
			//echo base64_encode($col[3]);
			  }
            } // else if result
        } else {
            echo "Mauvais id d'image";
        }
        ?>