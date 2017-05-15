<?php
include "koneksi.php";

$username = $_POST['username'];
$pass     = $_POST['password'];

$login = mysqli_query($connect, "SELECT * FROM login WHERE username = '$username' AND password='$pass'");
$row=mysqli_fetch_array($login);
if ($row['username'] == $username AND $row['password'] == $pass)
{
    session_start();
    $_SESSION['username'] = $row['username'];
    $_SESSION['password'] = $row['password'];
    header('location:admin.php');
}
else
{
    ?>
   <script>
       alert('Username atau Password tidak sesuai');
       document.location='login.php';
</script>
<?php

}
?>