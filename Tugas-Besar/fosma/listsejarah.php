<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Lihat Sejarah</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="ckeditor/ckeditor.js"></script>
</head>
<body>
<div class="container">
    <h2><center> Sejarah Fosma</center></h2>
        <?php
        require("Sejarah.php");
        $history = new Sejarah();
        $show = $history->showSejarah();
        while($data = $show->fetch(PDO::FETCH_OBJ)){
            echo "
$data->title
$data->deskripsi";
echo "
<br>
<a class='btn btn-danger' href='listsejarah.php?delete=$data->title' onclick='return confirm(\"Apakah anda yakin ingin menghapus?\")'>Delete</a>
<a class='btn btn-info' href='editsejarah.php?title=$data->title'>Edit</a>
";
        };
        ?>

</div>
</body>
</html>

<?php
if(isset($_GET['delete'])){
    $del = $history->deleteSejarah($_GET['delete']);

}
?>
