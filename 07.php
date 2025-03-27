<?php
var_dump($_FILES);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Post Method</title>
</head>

<body>
    <form method="post" enctype="multipart/form-data">
        Select image to upload:
        <input type="file" name="fileUpload" id="fileToUpload">
        <br>
        <input type="submit" value="Upload Image" name="submit">
    </form>
</body>

</html>