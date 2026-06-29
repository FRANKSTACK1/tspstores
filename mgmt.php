<?php

require 'db.php';

if(isset($_POST['save'])){

    $premium_price=$_POST['premium_price'];
    $premium_link=$_POST['premium_link'];

    $standard_price=$_POST['standard_price'];
    $standard_link=$_POST['standard_link'];

    mysqli_query($conn,"
        UPDATE package_pricing
        SET
        price='$premium_price',
        paystack_link='$premium_link'
        WHERE package_name='premium'
    ");

    mysqli_query($conn,"
        UPDATE package_pricing
        SET
        price='$standard_price',
        paystack_link='$standard_link'
        WHERE package_name='standard'
    ");

    header("Location: mgmt.php?success=1");
    exit;
}

$packages=[];

$result=mysqli_query($conn,"SELECT * FROM package_pricing");

while($row=mysqli_fetch_assoc($result)){
    $packages[$row['package_name']]=$row;
}

$premium=$packages['premium'];
$standard=$packages['standard'];

?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Package Management</title>

<style>

body{

font-family:Arial;
background:#f5f5f5;

}

.container{

width:700px;
margin:40px auto;
background:#fff;
padding:30px;
border-radius:10px;

}

input{

width:100%;
padding:12px;
margin-bottom:20px;

}

button{

padding:14px 30px;
background:#000;
color:#fff;
border:none;
cursor:pointer;

}

.success{

color:green;
margin-bottom:20px;

}

</style>

</head>

<body>

<div class="container">

<h2>Package Pricing Management</h2>

<?php
if(isset($_GET['success'])){
echo "<p class='success'>Prices Updated Successfully.</p>";
}
?>

<form method="POST">

<h3>Premium Package</h3>

<label>Price</label>

<input
type="number"
name="premium_price"
value="<?= $premium['price'] ?>"
required>

<label>Paystack Link</label>

<input
type="text"
name="premium_link"
value="<?= htmlspecialchars($premium['paystack_link']) ?>"
required>

<hr>

<h3>Standard Package</h3>

<label>Price</label>

<input
type="number"
name="standard_price"
value="<?= $standard['price'] ?>"
required>

<label>Paystack Link</label>

<input
type="text"
name="standard_link"
value="<?= htmlspecialchars($standard['paystack_link']) ?>"
required>

<button name="save">

Save Changes

</button>

</form>

</div>

</body>

</html>
