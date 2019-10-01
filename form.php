
<html>
    <head>
        <meta charset="UTF-8">
    
    </head>


    <body>
        <form action="index.php" method="get">  
            <label>Identifiant</label>
            <input type="submit">
        </form>

        <?php
            if (isset($_GET['shortname'])) {
                $shortname = $_GET['shortname'];
                print  $shortname;
            }

        ?>
    </body>
 </html>
