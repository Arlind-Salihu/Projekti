<?php
if (($_FILES['my_file']['name']!="")){
// Where the file is going to be stored
	$target_dir = "product-images/";
	$file = $_FILES['my_file']['name'];
	$path = pathinfo($file);
	$filename = $path['filename'];
	$ext = $path['extension'];
	$temp_name = $_FILES['my_file']['tmp_name'];
	$path_filename_ext = $target_dir.$filename.".".$ext;
 
// Check if file already exists
if (file_exists($path_filename_ext)) {
	echo "Fotoja-imazhi me këtë emër tashma ekziston!.";
		}else{
		move_uploaded_file($temp_name,$path_filename_ext);
	echo "Fotoja-imazhi u ruajt në skedarin: product-images.";
 }
}    
?>
<div
        <li class="nav-item">
        <a class="nav-link" href="index.php">Kthehu ne fillim</a>
        </li>
</div>
