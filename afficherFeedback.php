<?php

include_once("connection.php");


$query = "SELECT * FROM commentaires";
$result = mysqli_query($conn,$query);
while ($row = mysqli_fetch_assoc($result)) { ?>
        <div style="border: 1px solid black; margin: 10px;">
       <h2 style="color: aqua;"><?php echo $row["nom"] ?></h1>
       <h3><?php echo $row["message"] ?></h3>
       <p><?php echo $row["horodatage"] ?></p>
</div>
    

    <?php }

?>