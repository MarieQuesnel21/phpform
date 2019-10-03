
<html>
    <head>
        <meta charset="UTF-8">
    
    </head>


    <body>
        <form action="form.php">  
            <label>Identifiant</label>
            <input type="text" name="shortname" size="10">
        </form>

        <?php
        if(isset($_GET['shortname'])){
           $shortname = $_GET['shortname'];
        }
           $host ="localhost";
           $username="root";
           $passwd = "";
           $dbname="slamquiz";


           $IdConnexion = new MySQLI($host,$username,$passwd,$dbname);
           if ($IdConnexion) {
                $result = $IdConnexion->query("SELECT * FROM categorie where shortname Like '%".$shortname."%';");

                if ($result){
                   

                    
                    echo('<table border="1"><tr>');
                    echo('<th>Id</th>');
                    echo('<th>Identifiant</th>');
                    echo('<th>Nom de categories</th>');
                    echo('</tr>');

                    while ($ligne = mysqli_fetch_array($result,MYSQLI_ASSOC)){
 
                            echo('<tr>');
                            echo('<th>'.$ligne['id'].'</th>');
                            echo('<th>'.$ligne['shortname'].'</th>');
                            echo('<th>'.$ligne['longname'].'</th>');
                           
                    }
                    
                    echo('</tr></table>');

                } else {
                    echo("Imposible d'executer la requete");
                }
                $IdConnexion->close();
           } else {
            echo("Imposible d'executer la BDD");
           }


        ?>
        <hr>
        <a href="ajout.php">Ajouter une categorie</a>
    </body>
 </html>
