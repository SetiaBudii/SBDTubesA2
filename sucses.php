<?php
    if(isset($_POST['uploadTanggal'])){
        echo $_POST['uploadTanggal'];
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form class="mt-5 mb-4" action="" method="post" enctype="multipart/form-data">
                                <label for="tgl">Tanggal Terbit</label>
                                <input type="date" class="form-control" id="uploadTanggal"  name="uploadTanggal">
                        <button type="submit" class="btn btn-primary text-center">Post</button>
                        </form>
</body>
</html>