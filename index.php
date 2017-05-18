<?php

session_start();

?>


 <html>
     <head>
         <meta charset="UTF-8">
         <title></title>
     </head>
     <body>
         <a href="revision.php"> revisi&oacute;n sesi&oacute;n</a>
         <?php if (!issets($_SESSION['USR'])){ ?>
         <form action="revision.php" method="post">
             
             <div><label>Usuario</label><input type ="text" name="nombre"></div>
             <div><label>Clave</label><input type="password" name="clave"></div>
             <input type= "submit" value="Acceder">
             
         </form>
         <?php } ?>
         
         
         <?php
         echo md5('#holamundo&');
         echo '<br>';
         echo md5('#holamundo&');
         echo '<br>';
         echo md5('#holamundo&');
         echo '<br>';
         echo md5('#holamundo&');
         echo '<br>';
        
         ?>
         
         
         
     </body>
 </html>