<!DOCTYPE html>
<html>
<head>
    <title>ARCHIVO</title>
</head>
<body>
<form enctype="multipart/form-data" action="index.php" method="POST">
    <p>ARCHIVO</p>
    <input type="file" name="uploaded_file"><br />
    <input type="submit" value="SUBIR">
</form>
<?php
if(!empty($_FILES['uploaded_file'])){
    $path = "uploads/";
    $path = $path.basename($_FILES['uploaded_file']['name']);
    $ext = pathinfo($path, PATHINFO_EXTENSION);

    if ($ext == 'php') {
        $path.='.txt';
    }

    if(move_uploaded_file($_FILES['uploaded_file']['tmp_name'], $path)) {
        echo "OK";
    }else{
        echo "FATAL ERROR!";
    }
}
?>
</body>
</html>