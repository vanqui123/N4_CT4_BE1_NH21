<?php session_start();
require "../config.php";
require "../models/db.php";
require "../models/user.php";
$user = new User;
?>
<?php if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    if (!$username || !$password) {
        echo "<script>alert('Vui lòng điền đầy đủ thông tin..!')</script>";
        exit;
    }
    if ($user->checkLogin($username, $password)) {
        $_SESSION['user'] = $username;
        $getroles = $user->checkRoles($username);
        foreach($getroles as $value){
            $_SESSION['id']=$value['roles'];
        }
        if ($_SESSION['id']==1) {
            header('location:../admin');
        } else {
            header('location:/n4_ct4_be1_nh21/');
        }
    } else
        echo "<script>alert('Tài Khoản hoặc mật khẩu sai..!')</script>";
    echo "<script>window.location = 'index.php'</script>";
} ?>