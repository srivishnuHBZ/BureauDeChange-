<?php
include('connect.php');
if(isset($_POST['submit'])){
    $data = "";
    $c = 0;
    foreach( $_POST as $key => $value ) { 
        $$key = $value;
        if($c <= 0 && $key != "submit"){
            $data .= "$key = '$value'";
            $update = mysqli_query($con, "UPDATE availability set qtt = qtt - '$value' where currency_code = '$key' ");
        }elseif($c > 0 && $key != "submit"){
            $data .= ",$key = '$value'";
            $update = mysqli_query($con, "UPDATE availability set qtt = qtt - '$value' where currency_code = '$key' ");
        }
        $c ++;
       
   }
   $query = mysqli_query($con,"INSERT INTO transaction set $data");
   if($query){
    $last_id = $con->insert_id;
    echo "<script>alert('Successful');window.location.href='receipt.php?id=$last_id';</script>";
   }
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
        <div class="row">
            <form method="POST" action="">
                <div class="col-sm-4">
                    <label>Name</label>
                    <input name="name" class="form-control" type="text" required/>
                    <br />
                </div>
                <div class="col-sm-4">
                    <label>Email</label>
                    <input name="email" class="form-control" type="email" required/>
                    <br />
                </div>
                <div class="col-sm-4">
                    <label>Contact</label>
                    <input name="contact" class="form-control" type="text" required/>
                    <br />
                </div>

                <div class="col-sm-4">
                    <?php
                    $query = mysqli_query($con, "SELECT * FROM availability where currency_code = 'usd'");
                    $res = mysqli_fetch_assoc($query);
                    ?>
                    <label>USD : </label>
                    <input type="number" class="form-control" name="usd" max="<?php echo $res['qtt'] ?>" value="">
                    <i>Available <?php echo $res['qtt'] ?></i>
                    <br /><br />
                    <?php
                    $query = mysqli_query($con, "SELECT * FROM availability where currency_code = 'eur'");
                    $res = mysqli_fetch_assoc($query);
                    ?>
                    <label>EUR : </label>
                    <input type="number" class="form-control" name="eur" max="<?php echo $res['qtt'] ?>" value="">
                    <i>Available <?php echo $res['qtt'] ?></i>
                    <br /><br />
                </div>
                <div class="col-sm-4">
                    <?php
                    $query = mysqli_query($con, "SELECT * FROM availability where currency_code = 'sgd'");
                    $res = mysqli_fetch_assoc($query);
                    ?>
                    <label>SGD : </label>
                    <input type="number" class="form-control" name="sgd" max="<?php echo $res['qtt'] ?>" value="">
                    <i>Available <?php echo $res['qtt'] ?></i>
                    <br /><br />
                    <?php
                    $query = mysqli_query($con, "SELECT * FROM availability where currency_code = 'aud'");
                    $res = mysqli_fetch_assoc($query);
                    ?>
                    <label>AUD : </label>
                    <input type="number" class="form-control" name="aud" max="<?php echo $res['qtt'] ?>" value="">
                    <i>Available <?php echo $res['qtt'] ?></i>
                    <br /><br />
                </div>
                <div class="col-sm-4">
                    <?php
                    $query = mysqli_query($con, "SELECT * FROM availability where currency_code = 'idr'");
                    $res = mysqli_fetch_assoc($query);
                    ?>
                    <label>IDR : </label>
                    <input type="number" class="form-control" name="idr" max="<?php echo $res['qtt'] ?>" value="">
                    <i>Available <?php echo $res['qtt'] ?></i>
                    <br /><br />
                    <?php
                    $query = mysqli_query($con, "SELECT * FROM availability where currency_code = 'bdt'");
                    $res = mysqli_fetch_assoc($query);
                    ?>
                    <label>BDT : </label>
                    <input type="number" class="form-control" name="bdt" max="<?php echo $res['qtt'] ?>" value="">
                    <i>Available <?php echo $res['qtt'] ?></i>
                    <br /><br />
                </div>
                <div class="col-sm-4">
                    <?php
                    $query = mysqli_query($con, "SELECT * FROM availability where currency_code = 'jpy'");
                    $res = mysqli_fetch_assoc($query);
                    ?>
                    <label>JPY : </label>
                    <input type="number" class="form-control" name="jpy" max="<?php echo $res['qtt'] ?>" value="">
                    <i>Available <?php echo $res['qtt'] ?></i>
                    <br /><br />
                    <?php
                    $query = mysqli_query($con, "SELECT * FROM availability where currency_code = 'cny'");
                    $res = mysqli_fetch_assoc($query);
                    ?>
                    <label>CNY : </label>
                    <input type="number" class="form-control" name="cny" max="<?php echo $res['qtt'] ?>" value="">
                    <i>Available <?php echo $res['qtt'] ?></i>
                    <br /><br />
                </div>
                <div class="col-sm-4">
                    <?php
                    $query = mysqli_query($con, "SELECT * FROM availability where currency_code = 'hkd'");
                    $res = mysqli_fetch_assoc($query);
                    ?>
                    <label>HKD : </label>
                    <input type="number" class="form-control" name="hkd" max="<?php echo $res['qtt'] ?>" value="">
                    <i>Available <?php echo $res['qtt'] ?></i>
                    <br /><br />
                    <?php
                    $query = mysqli_query($con, "SELECT * FROM availability where currency_code = 'krw'");
                    $res = mysqli_fetch_assoc($query);
                    ?>
                    <label>KRW : </label>
                    <input type="number" class="form-control" name="krw" max="<?php echo $res['qtt'] ?>" value="">
                    <i>Available <?php echo $res['qtt'] ?></i>
                    <br /><br />
                </div><br /><br />

            
        </div>

        <center><button type="submit" class="btn btn-success" name="submit">Submit</button></center>
        </form>
</body>

</html>