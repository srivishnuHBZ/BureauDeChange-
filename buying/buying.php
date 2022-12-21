<?php

session_start();

include_once('Converter.php');

$converter = new Converter();

$rates = $converter->getRates();

?>
<!DOCTYPE html>
<html>
<head>
	<title>BUYING</title>
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
	<h1 class="page-header text-center">Buying of Bureau De Change</h1>
	
	<br><br>
  <div class="row">
		<div class="col-sm-4 col-sm-offset-4">
			<form method="POST" action="getconvert.php">
				<div class="form-group">
					<label>Amount:</label>
					<input type="text" class="form-control" name="amount">
				</div>
				<div class="form-group">
					<label>From:</label>
					<select class="form-control" name="currency_from" value="MYR">
						<option>Malaysian Ringgit (MYR)</option>
					</select>
				</div>
				<div class="form-group">
					<label>To:</label>
					<select class="form-control" name="currency_to">
						<?php
							foreach ($rates as $key => $currency){
								?>
								<option value="<?php echo $key; ?>"><?php echo $key ?></option>
								<?php
							}

						?>
					</select>	</div><br>				
			<center><button type="submit" name="convert" class="btn btn-primary">Convert</button></center>
			</form>

			<?php
				if(isset($_SESSION['value'])){
					?>
					<div class="alert alert-info text-center" style="margin-top:40px;">
						<?php 
							echo $_SESSION['value']['amount'].' '.$_SESSION['value']['from'].' is equal to '.$_SESSION['value']['result'].' '.$_SESSION['value']['to']; 
						?>
					</div>
					<?php
					unset($_SESSION['value']);
				}
			?>
		</div>
	</div>
</div>
</body>
</html>