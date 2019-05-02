<?php
$result = exec("sudo -u ubuntu bash get_photo.sh");
$file_name = substr($result, 44, 12);
$dest=$_GET['dest'];
$result = exec("sudo -u ubuntu bash copy_photo.sh $file_name $dest");
echo $file_name;
?>
