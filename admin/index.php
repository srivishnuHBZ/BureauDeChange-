<?php
include('connect.php');
$query1 = mysqli_query($con, "SELECT * FROM availability where currency_code = 'usd'");
$res1 = mysqli_fetch_assoc($query1);
$query2 = mysqli_query($con, "SELECT * FROM availability where currency_code = 'eur'");
$res2 = mysqli_fetch_assoc($query2);

$query3 = mysqli_query($con, "SELECT * FROM availability where currency_code = 'sgd'");
$res3 = mysqli_fetch_assoc($query3);

$query4 = mysqli_query($con, "SELECT * FROM availability where currency_code = 'aud'");
$res4 = mysqli_fetch_assoc($query4);

$query5 = mysqli_query($con, "SELECT * FROM availability where currency_code = 'idr'");
$res5 = mysqli_fetch_assoc($query5);


$query6 = mysqli_query($con, "SELECT * FROM availability where currency_code = 'bdt'");
$res6 = mysqli_fetch_assoc($query6);

$query7 = mysqli_query($con, "SELECT * FROM availability where currency_code = 'jpy'");
$res7 = mysqli_fetch_assoc($query7);

$query8 = mysqli_query($con, "SELECT * FROM availability where currency_code = 'cny'");
$res8 = mysqli_fetch_assoc($query8);


$query9 = mysqli_query($con, "SELECT * FROM availability where currency_code = 'hkd'");
$res9 = mysqli_fetch_assoc($query9);

$query10 = mysqli_query($con, "SELECT * FROM availability where currency_code = 'krw'");
$res10 = mysqli_fetch_assoc($query10);

if (isset($_POST['submit'])) {
    // print_r($_POST);

    // extract($_POST);

    // $query_update = mysqli_query($con, "UPDATE available set ")
    $c = 0;
    foreach ($_POST as $key => $value) {
        $$key = $value;
        if ($c > 0) {
            $query = mysqli_query($con, "UPDATE availability SET qtt = '$value' where currency_code = '$key'");
        }
        $c++;
    }
        echo "<script>alert('Updated');window.location.href='index.php'</script>";
}
?>
<html>

<head>
    <title>BANK BUMIRAKYAT</title>
    <meta charset="utf-8">
    <meta name="description" content="Table Responsive" />
    <meta name="keywords" content="table, responsive" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link href="../styles.css" media="screen" type="text/css" rel="stylesheet" />
</head>

<body>
    <center>
        <h1><span class="blue"></span>Bank<span class="blue"></span> <span class="yellow">Bumirakyat</span>&nbsp;&nbsp;<img src="../logo.png" alt="HTML5 Icon" style="width:45px;height:45px;"></h1>
        <h2>Created with by <a href="https://www.instagram.com/srivishnu_hbz/" target="_blank"><i>Sri Vishnu</i></a></h2>
        <form method="post" action="">
            <button type="submit" name="submit" style=" background-color: #4CAF50;border: none; color: white; padding: 15px 32px; text-align: center; font-size: 16px; ">Submit Availability</button>
            <table class="container">
                <thead>
                    <tr>
                        <th width="40%">
                            <h1><strong>Foreign Currency Units</strong></h1>
                        </th>
                        <th width="13%">
                            <h1><strong>Buying</strong></h1>
                        </th>
                        <th width="14%">
                            <h1>Selling</h1>
                        </th>
                        <th width="15%">
                            <h1>Median Rate (Staff)</h1>
                        </th>
                        <th width="19%">
                            <h1>Availability</h1>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1 US Dollar (USD)</td>
                        <td>4.0900</td>
                        <td>4.2150</td>
                        <td>4.1525</td>
                        <td style="all:unset;">
                            <div style="text-align: center;padding-top:4%"><input type="number" min="0" name="usd" value="<?php echo $res1['qtt'] ?>" /></div>
                        </td>
                    </tr>
                    <tr>
                        <td>1 Europe Euro (EUR)</td>
                        <td>4.8800</td>
                        <td>5.0430</td>
                        <td>4.9615</td>
                        <td style="all:unset;">
                            <div style="text-align: center;padding-top:4%"><input type="number" min="0" name="eur" value="<?php echo $res2['qtt'] ?>" /></div>
                        </td>
                    </tr>
                    <tr>
                        <td>1 Singapore Dollar (SGD)</td>
                        <td>3.0510</td>
                        <td>3.1420</td>
                        <td>3.0965</td>
                        <td style="all:unset;">
                            <div style="text-align: center;padding-top:4%"><input type="number" min="0" name="sgd" value="<?php echo $res3['qtt'] ?>" /></div>
                        </td>
                    </tr>
                    <tr>
                        <td>1 Australia Dollar (AUD)</td>
                        <td>3.0940</td>
                        <td>3.2210</td>
                        <td>3.1575</td>
                        <td style="all:unset;">
                            <div style="text-align: center;padding-top:4%"><input type="number" min="0" name="aud" value="<?php echo $res4['qtt'] ?>" /></div>
                        </td>
                    </tr>
                    <tr>
                        <td>100 Indonesia Rupiah (IDR)</td>
                        <td>0.0274</td>
                        <td>0.0302</td>
                        <td>0.0288</td>
                        <td style="all:unset;">
                            <div style="text-align: center;padding-top:4%"><input type="number" min="0" name="idr" value="<?php echo $res5['qtt'] ?>" /></div>
                        </td>
                    </tr>
                    <tr>
                        <td>100 Bangladesh Taka (BDT)</td>
                        <td>4.7410</td>
                        <td>5.0770</td>
                        <td>4.909</td>
                        <td style="all:unset;">
                            <div style="text-align: center;padding-top:4%"><input type="number" min="0" name="bdt" value="<?php echo $res6['qtt'] ?>" /></div>
                        </td>
                    </tr>
                    <tr>
                        <td>100 Japan Yen (JPY)</td>
                        <td>3.6900</td>
                        <td>3.8090</td>
                        <td>3.7495</td>
                        <td style="all:unset;">
                            <div style="text-align: center;padding-top:4%"><input type="number" min="0" name="jpy" value="<?php echo $res7['qtt'] ?>" /></div>
                        </td>
                    </tr>
                    <tr>
                        <td>100 China Yuan (CNY)</td>
                        <td>62.800</td>
                        <td>65.300</td>
                        <td>64.05</td>
                        <td style="all:unset;">
                            <div style="text-align: center;padding-top:4%"><input type="number" min="0" name="cny" value="<?php echo $res8['qtt'] ?>" /></div>
                        </td>
                    </tr>
                    <tr>
                        <td>100 Hong Kong Dollar (HKD)</td>
                        <td>52.230</td>
                        <td>54.960</td>
                        <td>53.595</td>
                        <td style="all:unset;">
                            <div style="text-align: center;padding-top:4%"><input type="number" min="0" name="hkd" value="<?php echo $res9['qtt'] ?>" /></div>
                        </td>
                    </tr>
                    <tr>
                        <td>100 South Korea Won (KRW)</td>
                        <td>0.3560</td>
                        <td>0.3700</td>
                        <td>0.3630</td>
                        <td style="all:unset;">
                            <div style="text-align: center;padding-top:4%"><input type="number" min="0" name="krw" value="<?php echo $res10['qtt'] ?>" /></div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </form>
    </center>
</body>

</html>