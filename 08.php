<?php
if (isset($_POST["submit"])) {
    $dir = "uploads/";
    $name  = $_FILES["fileToUpload"]["name"];
    $check = move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $dir . $name);
    if ($check) {
        echo "$name is uploaded.";
    } else {
        echo "$name is  not uploaded.";
    }
}
?>
<!DOCTYPE html>

<body>
    <form method="post" enctype="multipart/form-data">
        Select image to upload:
        <input type="file" name="fileToUpload" id="fileToUpload">
        <br>
        <input type="submit" value="Upload Image" name="submit">
    </form>
</body>

</html>