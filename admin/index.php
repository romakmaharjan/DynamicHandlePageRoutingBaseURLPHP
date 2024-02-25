<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="container">
        <div class="header"></div>
        <div class="aside"></div>
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