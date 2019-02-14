<?php
$target_dir = "uploaded/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$newfile="uploaded/text.txt";
if(isset($_POST['copy'])) {
if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded succesfully.";
} else {
        echo "Sorry, there was an error uploading your file.";
}
if(copy($target_file,$newfile)){
 echo 'The file was copied successfully';
 }else{
 echo 'An error occurred during copying the file';}

}
?>