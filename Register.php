<?php
	$noktp = $_POST['noktp'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$nama = $_POST['nama'];
	$nohp = $_POST['nohp'];
	$alamat = $_POST['alamat'];
	$con = mysqli_connect("localhost","root","","dbrentalsepeda");
	$sql = "INSERT INTO tbuser (email  , password , nama , nohp , alamat , noktp, roleuser) VALUES ('$email', '$password', '$nama', '$nohp', '$alamat' ,'$noktp', '2')";
	$json["hasil"]=array();
    if($con->query($sql) === TRUE) {
		$json["hasil"]["respon"]=true;
	}else{
		$json["hasil"]["respon"]=false;
	}
	echo json_encode($json);
?>