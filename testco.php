<?php
    $database = "projet_piscine";
    $db_handle = mysqli_connect('localhost', 'root', '');
    $db_found = mysqli_select_db($db_handle, $database);
    if ($db_found) {
        $sql = "INSERT INTO client (ID_client, ID_panier, Nom, Prenom, Mail, Mdp) VALUES('5', '1', 'nom', 'prenom', 'mail@mail', 'mdp')";
        $result = mysqli_query($db_handle, $sql);
        echo $sql;

            /*if(mysqli_query($db_handle, $sql)){
               echo "ok";
            }
            else{
                echo "failed<br>";
                echo $sql;
            }*/
    }
?>