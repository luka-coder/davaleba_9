<?php
    if(isset($_POST['insertbutton'])){
    $name = $_POST['name'];
    $amount = $_POST['amount'];
    $date = $_POST['date'];
    $vargisi = $_POST['vargisi'];
    $company = $_POST['company'];
    $weight = $_POST['weight'];
    $calory = $_POST['calory'];
    $fattyness = $_POST['fattyness'];
    $reg_date = $_POST['reg_date'];
    $sql = "INSERT INTO product (name, amount, date, vargisi, company, weight, calory, fattyness, reg_date)
    VALUES ('$name',
    '$amount',
    '$date',
    '$vargisi',
    '$company', 
    '$weight',
    '$calory',
    '$fattyness',
    '$reg_date')";

    mysqli_query($connection, $sql);
    header('Location: ?top=insert');
    }
?>
<article>
    <h1>INSERT</h1>
    <form action="" style = "padding:20px" method="post">
    saxeli
    <br>
    <input type="text" name="name">
    <br><br>
    quantity
    <br>
    <input type="number" name="amount">
    <br><br>
    release_date
    <br>
    <input type="date" name="date">
    <br><br>
    suitability
    <br>
    <input type="text" name="vargisi">
    <br><br>
    company name
    <br>
    <input type="text" name="company">
    <br><br>
    weight
    <br>
    <input type="number" name="weight">
    <br><br>
    calories
    <br>
    <input type="number" name="calory">
    <br><br>
    fat
    <br>
    <input type="number" name="fattyness">
    <br><br>
    register_date
    <br>
    <input type="date" name="reg_date">
    <br><br>
    <input type="submit" name="insertbutton" value="INSERT">
    </form>
</article>