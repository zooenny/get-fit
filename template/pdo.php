






 

 <?php

try {

   $mysqlConnection = new PDO('mysql:host=localhost;dbname=get_fit', 'root', ''); 

} catch (PDOException $PDOException) {
      echo 'Connexion à la base de données impossible';
    }
    
    ?>