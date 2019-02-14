<?php
$target_dir = "uploaded/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
if(isset($_POST['delete'])) {
if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded succesfully.";
} else {
        echo "Sorry, there was an error uploading your file.";
}
if(unlink($target_file)){
 echo sprintf("The file %s deleted successfully",$target_file);
}else{
 echo sprintf("An error occurred deleting the file %s",$target_file);
}
}
?>