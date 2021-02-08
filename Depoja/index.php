<?php
  include 'action.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="author" content="Sahil Kumar">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>A&V WEB</title>
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <!-- Popper JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <!-- Latest compiled JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.18/datatables.min.css" />

  <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.18/datatables.min.js"></script>
</head>

<body >
  <nav class="navbar navbar-expand-md bg-dark navbar-dark">
    <!-- Brand -->
    <a class="navbar-brand" href="#">A&V WEB</a>
    <!-- Toggler/collapsibe Button -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <!-- Navbar links -->
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
     <<li class="nav-item">
      <a class="nav-link" href="http://localhost/A_V_projekti/Depoja/index.php"style="color:red;">Menaxho Depon</a>
      </li>
      <li class="nav-item">
      <a class="nav-link" href="http://localhost/A_V_projekti/admin/azhuro_perdoruesit.php">Menaxho perdoruesit</a>
      </li>
	  <li class="nav-item">
      <a class="nav-link" href="http://localhost/A_V_projekti/home.php">Home</a>
      </li>
       
    </ul>
    </div>
    <form class="form-inline" action="/action_page.php">
    
	   <li class="nav-item">
          <a class="btn btn-primary" href="export.php">Exporto në exel</a>
        </li>
	  
    </form>
  </nav>
  <div class="container-fluid">
    <div class="row justify-content-center">
      <div class="col-md-10">
        <h5 class="text-center text-dark mt-2">Lista e mallrave  për shitje online</h5>
        <hr>
        <?php if (isset($_SESSION['response'])) { ?>
        <div class="alert alert-<?= $_SESSION['res_type']; ?> alert-dismissible text-center">
          <button type="button" class="close" data-dismiss="alert">&times;</button>
          <b><?= $_SESSION['response']; ?></b>
        </div>
        <?php } unset($_SESSION['response']); ?>
      </div>
    </div>
    <div class="row">
      <div class="col-md-4">
        <h3 class="text-center text-info">Add Regjistro</h3>
        <form action="action.php" method="post" enctype="multipart/form-data">
          <input type="hidden" name="id" value="<?= $id; ?>">
          <div class="form-group">
            <input type="text" name="emriProdukti" value="<?= $emriProdukti; ?>" class="form-control" placeholder="Shkruaje emrin" required>
          </div>
          <div class="form-group">
            <input type="code" name="kodi" value="<?= $kodi; ?>" class="form-control" placeholder="Shkruaje kodin" required>
          </div>
		  <div class="form-group">
            <input type="qmimi" name="qmimi" value="<?= $qmimi; ?>" class="form-control" placeholder="Shkruaje qmimin" required>
          </div>
		  <div class="form-group">
            <input type="sasia" name="sasia" value="<?= $sasia; ?>" class="form-control" placeholder="Shkruaje sasin" required>
          </div>
          <div class="form-group">
            <input type="image" name="image" value="<?= $image; ?>" class="form-control">
		
          </div>
          <div class="form-group">
            <input type="hidden" name="oldimage" value="<?= $image; ?>">
            <input type="file" name="image" class="custom-file">

    
		
          </div>
          <div class="form-group">
            <?php if ($update == true) { ?>
            <input type="submit" name="update" class="btn btn-success btn-block" value="Azhuro">
            <?php } else { ?>
            <input type="submit" name="add" class="btn btn-primary btn-block" value="Add Regjistro">
            <?php } ?>
          </div>
        </form>
      </div>
      <div class="col-md-8">
        <?php
          $query = 'SELECT * FROM tblprodukti';
          $stmt = $conn->prepare($query);
          $stmt->execute();
          $result = $stmt->get_result();
        ?>
        <h3 class="text-center text-info">Lista e mallrave ne Depo</h3>
        <table class="table table-hover" id="data-table">
          <thead>
            <tr>
              <th>#</th>
              <th>Foto</th>
              <th>Emri</th>
              <th>Kodi</th>
              <th>Qmimi</th>
			  <th>Sasia</th>
              <th>Veprimi</th>
            </tr>
          </thead>
          <tbody>
            <?php while ($row = $result->fetch_assoc()) { ?>
            <tr>
              <td><?= $row['id']; ?></td>
              <td><img src="<?= $row['image']; ?>" class="cart-item-image" width="30" height="30" ></td>
			      
              <td><?= $row['emriProdukti']; ?></td>
			  <td><?= $row['kodi']; ?></td>
  			  <td><?= $row['qmimi']; ?></td>
			  <td><?= $row['sasia']; ?></td>
              
              <td>
                <a href="details.php?details=<?= $row['id']; ?>" class="badge badge-primary p-2">Detalet</a> |
                <a href="action.php?delete=<?= $row['id']; ?>" class="badge badge-danger p-2" onclick="return confirm('Dëshironi ta fshini këtë regjistrim?');">Fshie</a> |
                <a href="index.php?edit=<?= $row['id']; ?>" class="badge badge-success p-2">Edito</a>
              </td>
            </tr>
            <?php } ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
  <script type="text/javascript">
  $(document).ready(function() {
    $('#data-table').DataTable({
      paging: true
    });
  });
  </script>
</body>

</html>