<?php
$target_dir = "uploaded/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
if(isset($_POST['read'])) {
if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded succesfully.";
} else {
        echo "Sorry, there was an error uploading your file.";
}
$file_handle=fopen($target_file, 'r')
or
die("can't open file\n");
echo "<p>".fread($file_handle, filesize($target_file))."</p>";
  }
?>