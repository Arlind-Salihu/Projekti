<?php
	//session_start();

    const DBHOST = 'localhost';
	const DBUSER = 'root';
	const DBPASS = '';
	const DBNAME = 'a_v_projekti';

	$conn = new mysqli(DBHOST, DBUSER, DBPASS, DBNAME);

	if ($conn->connect_error) {
	  die('Could not connect to the database!' . $conn->connect_error);
	}

session_start();
	$update=false;
	$id="";
	$emri="";
	$email="";
	$flk="";
	$data_azhurimi="";
	

	if(isset($_POST['add'])){
		$emri=$_POST['emri'];
		$email=$_POST['email'];
		$flk=$_POST['flk'];
		$data_azhurimi=$_POST['data_azhurimi'];
	


		$query="INSERT INTO perdoruesi(emri,email,flk,data_azhurimi)VALUES(?,?,?,?)";
		$stmt=$conn->prepare($query);
		$stmt->bind_param("ssss",$emri,$email,$flk,$data_azhurimi);
		$stmt->execute();
	

		header('location:azhuro_perdoruesit.php');
		$_SESSION['response']="U fut me sukses në bazën e të dhënave!";
		$_SESSION['res_type']="success";
	}
	if(isset($_GET['delete'])){
		$id=$_GET['delete'];

		

		$query="DELETE FROM perdoruesi WHERE id=?";
		$stmt=$conn->prepare($query);
		$stmt->bind_param("i",$id);
		$stmt->execute();

		header('location:azhuro_perdoruesit.php');
		$_SESSION['response']="Fshirja u krye me sukses!";
		$_SESSION['res_type']="danger";
	}
	if(isset($_GET['edit'])){
		$id=$_GET['edit'];

		$query="SELECT `emri`, `email`, `flk`, `data_azhurimi` FROM `perdoruesi` WHERE id=?";
		$stmt=$conn->prepare($query);
		$stmt->bind_param("i",$id);
		$stmt->execute();
		$result=$stmt->get_result();
		$row=$result->fetch_assoc();

	//	$id=$row['id'];
		$emri=$row['emri'];
		$email=$row['email'];
		$flk=$row['flk'];
		$data_azhurimi=$row['data_azhurimi'];
	

		$update=true;
	}
	if(isset($_POST['update'])){
		$id=$_POST['id'];
		$emri=$_POST['emri'];
		$email=$_POST['email'];
		$flk=$_POST['flk'];
		$data_azhurimi=$_POST['data_azhurimi'];
		

	
		$query="UPDATE perdoruesi SET emri=?,email=?,flk=?,data_azhurimi=? WHERE id=?";
		$stmt=$conn->prepare($query);
		$stmt->bind_param("ssssi",$emri,$email,$flk,$data_azhurimi,$id);
		$stmt->execute();

		$_SESSION['response']="Përditësuar me sukses!";
		$_SESSION['res_type']="primary";
		header('location:azhuro_perdoruesit.php');
	}

	if(isset($_GET['details'])){
		$id=$_GET['details'];
		$query="SELECT * FROM perdoruesi WHERE id=?";
		$stmt=$conn->prepare($query);
		$stmt->bind_param("i",$id);
		$stmt->execute();
		$result=$stmt->get_result();
		$row=$result->fetch_assoc();

		$vid=$row['id'];
		$vemri=$row['emri'];
		$vemail=$row['email'];
		$vflk=$row['flk'];
		$data_azhurimi=$row['data_azhurimi'];
		
	}
?>
