<?php
	require 'reseller_manager.php';
	$warning = '';
	$message = '';
	if(isset($_POST['submit'])){
		if(isset($_POST['name'])&&isset($_POST['address'])&&
			isset($_POST['email'])&&isset($_POST['contact_no'])){
			$mngr = new reseller_manager();
			$name = $_POST['name'];
			$address = $_POST['address'];
			if(isset($_POST['email'])){
				$email = $_POST['email'];
			}
			else{
				$email = '';
			}
			$phone_no = $_POST['phone_no'];
			echo 'Got Values';
		}
		else{
			$warning = '</br><span style="color:red">You Have To Fill This Field</span>';
		}
	}
?>

<form action='' method='post'>
	<div class = 'form_block'>
		<div class = 'feild_row'>
			<span class = 'label_row'>
				<lable for='name'>Name Of The Reseller :</lable>
			</span><!--End Of The lable_row-->
			<span class = 'input_row'>
				<input type='text' maxlength='60' name = 'name' required>
			</span><?php echo $warning?></br><!--End Of The input_row-->
		</div><!--End Of The feild_row-->

		<div class = 'feild_row'>
			<span class = 'label_row'>
				<lable for='address'>Address :</lable>
			</span><!--End Of The lable_row-->
			<span class = 'input_row'>
				<input type='text' maxlength='200' name = 'address' required>
			</span><?php echo $warning?></br><!--End Of The input_row-->
		</div><!--End Of The feild_row-->
		<div class = 'feild_row'>
			<span class = 'label_row'>
				<lable for='email'>Email Of The Reseller :</lable>
			</span><!--End Of The lable_row-->
			<span class = 'input_row'>
				<input type='text' maxlength='100' name = 'email'>
			</span></br><!--End Of The input_row-->
		</div><!--End Of The feild_row-->
		<div class = 'feild_row'>
			<span class = 'label_row'>
				<lable for='name'>Contact_no :</lable>
			</span><!--End Of The lable_row-->
			<span class = 'input_row'>
				<input type='text' maxlength='60' name = 'contact_no' required>
			</span><?php echo $warning?></br><!--End Of The input_row-->
		</div><!--End Of The feild_row-->
		<div class = 'feild_row'>
			<span class = 'submit_row'>
				<input type='submit' maxlength='60' name = 'submit' required>
			</span><?php echo $warning?></br><!--End Of The input_row-->
		</div><!--End Of The feild_row-->
	</div><!--End Of The form_block-->
</form>

