<?php
// 获取POST请求中的用户名和密码
$username = $_POST['username'];
$password = $_POST['password'];

// 在这里进行用户名和密码的验证，假设验证成功
if ($username === 'magic' && $password === 'sunxinyi80613') {
    // 设置一个名为 'auth' 的 cookie，包含用户身份验证信息
    setcookie('auth', '114514', time() + 3600, '/');
    http_response_code(200); // 返回成功状态码
} else {
    http_response_code(401); // 返回未授权状态码
}
?>
