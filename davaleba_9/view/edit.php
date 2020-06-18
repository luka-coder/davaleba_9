<?php
    if(isset($_GET['ID'])){
    $ID = $_GET['ID'];
    $sql_edit = "SELECT * FROM product WHERE ID=$ID";
    $result = mysqli_query($connection, $sql_edit);
    $row = mysqli_fetch_assoc($result);
    }
    if(isset($_POST['updatebutton'])){
        $id= $_POST['ID'];
        $saxeli = $_POST['name'];
        $quantity = $_POST['amount'];
        $release_date = $_POST['date'];
        $suitability = $_POST['vargisi'];
        $company_name = $_POST['company'];
        $weight = $_POST['weight'];
        $calories = $_POST['calory'];
        $fat = $_POST['fattyness'];
        $register_date = $_POST['reg_date'];
        $sql_update = "UPDATE product SET  name = '$name',
                                        amount = '$amount',
                                        date = '$date',
                                        vargisi = '$vargisi',
                                        company='$company',
                                        weight='$weight',
                                        calory='$calory',
                                        fattyness='$fattyness',
                                        reg_date='$reg_date'
        WHERE ID='$ID'";
    mysqli_query($connection, $sql_update);
    header('Location: index.php?top=update');
    }
?>
<article>
    <h1>EDIT ITEM</h1>
    <form action="" style = "padding:20px" method="post">
    saxeli
    <br>
    <input type="text" name="name" value="<?=$row['name']?>">
    <br><br>
    quantity
    <br>
    <input type="number" name="amount" value="<?=$row['amount']?>">
    <br><br>
    release_date
    <br>
    <input type="date" name="date" value="<?=$row['date']?>">
    <br><br>
    suitability
    <br>
    <input type="text" name="vargisi" value="<?=$row['vargisi']?>">
    <br><br>
    company name
    <br>
    <input type="text" name="company" value="<?=$row['company']?>">
    <br><br>
    weight
    <br>
    <input type="number" name="weight" value="<?=$row['weight']?>">
    <br><br>
    calories
    <br>
    <input type="number" name="calory" value="<?=$row['calory']?>">
    <br><br>
    fat
    <br>
    <input type="number" name="fattyness" value="<?=$row['fattyness']?>">
    <br><br>
    register_date
    <br>
    <input type="date" name="reg_date" value="<?=$row['reg_date']?>">
    <br><br>
    <input type="hidden" name="id" value=<?=$row['ID']?>>
    <input type="submit" name="updatebutton" value="UPDATE">
    </form>
</article>