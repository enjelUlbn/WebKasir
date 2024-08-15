<?php
function update($data){
    global $koneksi;

    $curPass  = trim(mysqli_real_escape_string($koneksi, $_POST['curPass']));
    $newPass  = trim(mysqli_real_escape_string($koneksi, $_POST['newPass']));
    $confPass  = trim(mysqli_real_escape_string($koneksi, $_POST['confPass']));

    $userActive = userLogin()['username'];

 if ($newPass !== $confPass){
    echo "<script> alert('Password gagal diperbaharui..');
    document.location='change-password.php?msg=err1';
    </script>";
    return false;
 }

if(!password_verify($curPass, userLogin()['password'])){

    echo "<script> alert('Password gagal diperbaharui..');
    document.location='change-password.php?msg=err2';
    </script>";

    return false;

} else {
    $pass =password_hash($newPass, PASSWORD_DEFAULT);
    mysqli_query($koneksi, "UPDATE tbl_user SET password = '$pass' WHERE username = '$userActive'");
    return mysqli_affected_rows($koneksi);
}

}

?>