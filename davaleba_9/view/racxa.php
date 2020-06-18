<article>
    <?php
    $query = "SELECT * FROM product";
    $result = mysqli_query($connection, $query);


        echo "<br>"."<table border = '2'>
        <tr>
        <th>name</th>
        <th>company</th>
        <th>weight</th>
        <th>srulad</th>
        </tr>";
        while($rows = mysqli_fetch_assoc($result)){
            echo "<tr>";
            echo "<td>" . $rows['name'] ."</td>";
            echo "<td>" . $rows['company'] . "</td>";
            echo "<td>" . $rows['weight'] . "</td>";
            echo "<td><a href='?cat=".$rows["name"]."'><button>Srulad</button></a></td>";
            echo "</tr>";
        }
            echo "</table>";
    ?>
</article>