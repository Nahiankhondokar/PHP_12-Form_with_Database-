<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/style.css">
	<title>Class 49</title>
</head>
<body>





	<?php 


	$way = new mysqli('localhost','root','','awd61');


	if ( isset($_POST['payment'])) {

		$name = $_POST['name'];
		$amount = $_POST['amount'];
		$email = $_POST['email'];
		$cell = $_POST['cell'];
		$batch = $_POST['batch'];






		if ( empty($name) || empty($amount) || empty($email) || empty($cell) || empty($batch) ) {

		$msg = "<p class=\"text-danger pt-2 ml-5\">All feilds are required !</p>";

	}else{

		$sql = "INSERT INTO payment_book (name, amount, email, cell, batch) VALUES ('$name','$amount','$email','$cell','$batch')";

		$way -> query($sql);

	}

	}



	 ?>



	 <div class="container top ">
	 	<div class="row shadow">
	 		<div class="col-lg-4">
	 			<div class="box m-auto">
	 				<h1 class="pt-3 text-white">Payment Book</h1>

	 				<?php 

	 					if (isset($msg)) {
	 						echo $msg;
	 					}

	 				 ?>

	 				<form action="" class="px-5" method="POST">
	 					<input name="name" type="text" placeholder="name" class="w-100 p-1">
	 					<input name="amount" type="text" placeholder="amount" class="w-100 p-1">
	 					<input name="email" type="text" placeholder="email" class="w-100 p-1">
	 					<input name="cell" type="text" placeholder="cell" class="w-100 p-1">
	 					<input name="batch" type="text" placeholder="batch" class="w-100 p-1">
	 					<input name="payment" type="submit" value="Submit Now" class="w-100 p-1">
	 				</form>
	 			</div>
	 		</div>


	 		<div class="col-lg-8">
	 			<div class="table m-auto pt-3 pb-3">
	 				<h1 class="text-white">All Members</h1>
	 				<table class="text-white border border-white">

	 					<tr>
	 						<th class="">Id</th>
	 						<th>Name</th>
	 						<th>Amount</th>
	 						<th>Email</th>
	 						<th>Cell</th>
	 						<th>Batch</th>
	 					</tr>

	 					<?php 

	 					$sql = "SELECT * FROM payment_book";

	 					$data = $way -> query($sql);

	 					while( $all_data = $data -> fetch_assoc() ) {


	 					 ?>

	 					<tr>
	 						<td><?php echo $all_data['id'] ?></td>
	 						<td><?php echo $all_data['name'] ?></td>
	 						<td><?php echo $all_data['amount'] ?></td>
	 						<td><?php echo $all_data['email'] ?></td>
	 						<td><?php echo $all_data['cell'] ?></td>
	 						<td><?php echo $all_data['batch'] ?></td>
	 					</tr>

	 					<?php } ?>

	 				</table>
	 			</div>
	 		</div>
	 	</div>
	 </div>









	<script src="assets/js/jquery-3.5.1.slim.min.js"></script>
	<script src="assets/js/popper.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script>
		


	</script>


	
</body>
</html> 



