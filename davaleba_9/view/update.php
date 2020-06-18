<article>
<h1>update</h1> <br>
<nav>
    <table>
    <?php
        $query = "SELECT * FROM product";
        $result = mysqli_query($connection, $query);
        if(!$result){
            die("Error!");
        }else{

            while($row = mysqli_fetch_assoc($result)){
                echo "<tr>
                      <td>".$row["name"]."</td>
                      <td><a href='?ID=".$row["ID"]."'><button>EDIT</button></a></td>
                     </tr>";
            }
            
        }
    ?>
    </table>
</nav>
</article>