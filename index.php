<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Portofolio Marco</title>
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/theme.css" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700,400italic,700italic" rel="stylesheet"
        type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
    <?php
    $route = isset($_GET['route']) ? $_GET['route'] : 'index';
    // Include halaman berdasarkan rute
    include 'navbar.php';

    switch ($route) {
        case 'index':
            include 'content.php';
            break;

        case 'about':
            include 'About.php';
            break;

        case 'projects':
            include 'project.php';
            break;

        case 'contact':
            include 'contact.php';
            break;

        default:
            include '404.php'; // Halaman untuk rute yang tidak ditemukan
            break;
    }
    // include 'footer.php';
    ?>
    <script src="js/jquery.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Plugin JavaScript -->
    <script src="js/jquery.easing.min.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="js/theme.js"></script>

</body>

</html>
<script>