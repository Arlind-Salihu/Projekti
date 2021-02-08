
 <?php
$perdoruesi = 'root';
$pass ='';
$db= 'A_V_projekti';
$db=new mysqli('localhost',$perdoruesi,$pass,$db) or die ("nuk mund të lidhet");
echo "Konektimi u krye me sukses";
?>