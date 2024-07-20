<?php
// 这个密码应该存储在更安全的地方，例如数据库中，并进行加密处理。
$correct_password_hash = password_hash("Gzh!54088", PASSWORD_DEFAULT);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $password = $_POST['password'];

    if (password_verify($password, $correct_password_hash)) {
        echo "<script>alert('密码正确!'); window.location.href = 'image.html';</script>";
    } else {
        echo "<script>alert('密码错误!'); history.go(-1);</script>";
    }
} else {
    echo "非法访问";
}
?>
