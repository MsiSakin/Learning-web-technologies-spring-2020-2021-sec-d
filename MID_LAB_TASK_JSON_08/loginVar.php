<?php
  
if ( isset ( $_POST [ 'submit' ] ) ) {

	$uname =  $_POST [ 'uname' ]   ;
	$uname_length = strlen($uname);
	$pass =   $_POST [ 'pass' ]  ;
	$pass_length = strlen($pass);

	$myfile = fopen('users.json', 'r');
	$data 	= fread($myfile, filesize('users.json'));	
	$json 	= json_decode($data, true);
	
   	if ($uname == $json[0]['name']  ) {
       
          echo "login Successfull";
    
          

        }
    else
    {
		echo "Fill All the file Correctly";
	}
}





?>