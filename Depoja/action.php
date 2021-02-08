
<?php
	session_start();
	include 'config.php';

	$update=false;
	$id="";
	$emriProdukti="";
	$kodi="";
	$qmimi="";
	$sasia="";
	$image="";

	if(isset($_POST['add'])){
		$emriProdukti=$_POST['emriProdukti'];
		$kodi=$_POST['kodi'];
		$qmimi=$_POST['qmimi'];
		$sasia=$_POST['sasia'];
		$image=$_POST['image'];

		$image=$_FILES['image']['name'];
		$upload="".$image;

		$query="INSERT INTO tblprodukti(emriProdukti,kodi,qmimi,sasia,image)VALUES(?,?,?,?,?)";
		$stmt=$conn->prepare($query);
		$stmt->bind_param("sssss",$emriProdukti,$kodi,$qmimi,$sasia,$upload);
		$stmt->execute();
		move_uploaded_file($_FILES['image']['tmp_name'], $upload);

		header('location:index.php');
		$_SESSION['response']="U fut me sukses në bazën e të dhënave!";
		$_SESSION['res_type']="success";
	}
	if(isset($_GET['delete'])){
		$id=$_GET['delete'];

		$sql="SELECT image FROM tblprodukti WHERE id=?";
		$stmt2=$conn->prepare($sql);
		$stmt2->bind_param("i",$id);
		$stmt2->execute();
		$result2=$stmt2->get_result();
		$row=$result2->fetch_assoc();

		$imagepath=$row['image'];
		unlink($imagepath);

		$query="DELETE FROM tblprodukti WHERE id=?";
		$stmt=$conn->prepare($query);
		$stmt->bind_param("i",$id);
		$stmt->execute();

		header('location:index.php');
		$_SESSION['response']="Fshirja u krye me sukses!";
		$_SESSION['res_type']="danger";
	}
	if(isset($_GET['edit'])){
		$id=$_GET['edit'];

		$query="SELECT * FROM tblprodukti WHERE id=?";
		$stmt=$conn->prepare($query);
		$stmt->bind_param("i",$id);
		$stmt->execute();
		$result=$stmt->get_result();
		$row=$result->fetch_assoc();

		$id=$row['id'];
		$emriProdukti=$row['emriProdukti'];
		$kodi=$row['kodi'];
		$qmimi=$row['qmimi'];
		$sasia=$row['sasia'];
		$image=$row['image'];

		$update=true;
	}
	if(isset($_POST['update'])){
		$id=$_POST['id'];
		$emriProdukti=$_POST['emriProdukti'];
		$kodi=$_POST['kodi'];
		$qmimi=$_POST['qmimi'];
		$sasia=$_POST['sasia'];
		$oldimage=$_POST['oldimage'];

		if(isset($_FILES['image']['emriProdukti'])&&($_FILES['image']['emriProdukti']!="")){
			$newimage="image".$_FILES['image']['emriProdukti'];
			
			
			unlink($oldimage);
			move_uploaded_file($_FILES['image']['tmp_name'], $newimage);
		}
		else{
			$newimage=$oldimage;
		}
		$query="UPDATE tblprodukti SET emriProdukti=?,kodi=?,qmimi=?,sasia=?,image=? WHERE id=?";
		$stmt=$conn->prepare($query);
		$stmt->bind_param("sssssi",$emriProdukti,$kodi,$qmimi,$sasia,$newimage,$id);
		$stmt->execute();

		$_SESSION['response']="Përditësuar me sukses!";
		$_SESSION['res_type']="primary";
		header('location:index.php');
	}

	if(isset($_GET['details'])){
		$id=$_GET['details'];
		$query="SELECT * FROM tblprodukti WHERE id=?";
		$stmt=$conn->prepare($query);
		$stmt->bind_param("i",$id);
		$stmt->execute();
		$result=$stmt->get_result();
		$row=$result->fetch_assoc();

		$vid=$row['id'];
		$vname=$row['emriProdukti'];
		$vcode=$row['kodi'];
		$vprice=$row['qmimi'];
		$sasia=$row['sasia'];
		$vimage=$row['image'];
	}
?>
