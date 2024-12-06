<?php
$currentRoute = $_GET['route'] ?? 'index';
// echo
?>
<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand page-scroll" href="index">
                MARCO GUNAWAN </a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
            <ul class="nav navbar-nav">
                <li class="<?= $currentRoute == 'index' ? 'active' : '' ?>">
                    <a href="index">Home</a>
                </li>
                <li class="<?= $currentRoute == 'about' ? 'active' : '' ?>">
                    <a href="about">About</a>
                </li>
                <li class="<?= $currentRoute == 'projects' ? 'active' : '' ?>">
                    <a href="projects">Projects</a>
                </li>
                <li class="<?= $currentRoute == 'contact' ? 'active' : '' ?>">
                    <a href="contact">Contact</a>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>