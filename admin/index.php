<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="container-main">

        <div class="header">
            <div class="top-container">
                <div class="company-name">
                    <h1>News Website</h1>
                </div>
                <div class="top-menu">
                    <a href="">Logout</a>
                </div>
            </div>
        </div>
        <div class="aside">
            <div class="header-container">
                <div class="profile">
                    <div class="image-box">
                        <img src="https://picsum.photos/200" alt="lorem picsuim">
                    </div>
                    <div class="name-box">
                        <h3>Admin</h3>
                    </div>
                </div>
                <ul>
                    <li><a href="index.php">Dashboard</a></li>
                    <li><a href="add-users.php">Add User</a></li>
                    <li><a href="">Show Users</a></li>
                    <li><a href="">Manage Category</a></li>
                    <li><a href="">Add News</a></li>
                    <li><a href="">Show News</a></li>
                </ul>
            </div>
        </div>
        <div class="main">

            <?php
$uri = $_GET['uri'] ?? 'dashboard';
$uri = str_replace('.php','',$uri);
$title = ucfirst($uri);
$uri = $uri.'.php';

$pagePath ="pages/$uri";


if(file_exists($pagePath) && is_file($pagePath)){
    include $pagePath;
}else{
    include 'pages/404.php';
}
?>
        </div>
    </div>



</body>

</html>