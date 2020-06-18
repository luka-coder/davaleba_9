<article>
        <?php
            echo $_GET["cat"]." - name";
            $cat = $_GET["cat"];
            $query = "SELECT * FROM product WHERE name = '$cat'";
            $result = mysqli_query($connection, $query);
            $row = mysqli_fetch_assoc($result);
        ?>
        <div>
            <br><?=$row["amount"]?> - raodenoba
        </div>
        <div>
            <br><?=$row["date"]?> - gamoshvebis tarigi
        </div>
        <div>
            <br><?=$row["vargisi"]?> - vargisianoba
        </div>
        <div>
            <br><?=$row["company"]?> - kompaniis saxeli
        </div>
        <div>
            <br><?=$row["weight"]?> - wona
        </div>
        <div>
            <br><?=$row["calory"]?> - kaloriebi
        </div>
        <div>
            <br><?=$row["fattyness"]?> - cximianoba
        </div>
        <div>
            <br><?=$row["reg_date"]?> - bazashi chaweris tarigi
        </div>
    </article>