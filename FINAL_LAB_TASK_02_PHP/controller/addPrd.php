<?php
	require_once('../model/prdModel.php');

	if(isset($_POST['submit'])){

		$name 		= $_POST['name'];
		$bPrice 	= $_POST['bprice'];
		$sPrice 	= $_POST['sprice'];
		
		$product = [
						'name'		=>$name, 
						'buying price'	=>$bPrice, 
						'selling price'	=>$sPrice,
			
				];

				//print_r($product);
						
				$status = insertProduct($product);
				print_r($status);
				if($status){
					header('location: ../view/home.html');
				}else{
					echo "Db error";
				}
	}

?>