<?php
include('connect.php');
if (isset($_GET['id'])) {
    $query_select = mysqli_query($con, "SELECT * FROM transaction where id = ".$_GET['id']);
    $res = mysqli_fetch_assoc($query_select);
    extract($res);
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>STAFF PRICE</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background-image: url('bg.jpg');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1 class="page-header text-center">Booking</h1>

        <br><br>
        <p>Name : <?php echo $name ?></p><p>Email : <?php echo $email ?></p><p>Contact : <?php echo $contact ?></p>
        <div class="row">
            <ul class="list-group">
                <li class="list-group-item">USD<div style="float:right;"><?php echo $usd; ?></div></li>
                <li class="list-group-item">EUR<div style="float:right;"><?php echo $eur; ?></div></li>
                <li class="list-group-item">SGD<div style="float:right;"><?php echo $sgd; ?></div></li>
                <li class="list-group-item">AUD<div style="float:right;"><?php echo $aud; ?></div></li>
                <li class="list-group-item">IDR<div style="float:right;"><?php echo $idr; ?></div></li>
                <li class="list-group-item">BDT<div style="float:right;"><?php echo $bdt; ?></div></li>
                <li class="list-group-item">JPY<div style="float:right;"><?php echo $jpy; ?></div></li>
                <li class="list-group-item">CNY<div style="float:right;"><?php echo $cny; ?></div></li>
                <li class="list-group-item">HKD<div style="float:right;"><?php echo $hkd; ?></div></li>
                <li class="list-group-item">KRW<div style="float:right;"><?php echo $krw; ?></div></li>
            </ul>
        </div>

        <center><a href="../index.php" class="btn btn-success" name="submit">Back</a></center>
        </form>
</body>

</html>