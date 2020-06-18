<?php
  $query = "SELECT ID, name FROM product";
  $result = mysqli_query($connection, $query);
  if(isset($_GET['remove'])){
     $remove = $_GET['remove'];
     $delete_query = "DELETE FROM product WHERE ID='$remove'";
     mysqli_query($connection,  $delete_query);

    header('Location: ?top=delete');
    }
?>
<article>
    <h1>DELETE</h1>
    <?php
        while($row = mysqli_fetch_assoc($result)){
            if($row["name"]==""){
                $row["name"] = "delete me!!!";
             }
           echo "<p><a href='?top=delete&remove=".$row["ID"]."'>".$row["name"]."</a></p>";
        }
    ?>
</article>