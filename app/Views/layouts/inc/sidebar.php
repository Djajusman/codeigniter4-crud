<!doctype html>
<html lang="en">


<style>
    @import url('https://fonts.googleapis.com/css?family=Roboto:300,400,400i,500');

    body {
        overflow-x: hidden;
        font-family: 'Roboto', sans-serif;
        font-size: 16px;
    }

    /* Toggle Styles */

    #viewport {
        padding-left: 250px;
        -webkit-transition: all 0.5s ease;
        -moz-transition: all 0.5s ease;
        -o-transition: all 0.5s ease;
        transition: all 0.5s ease;
    }

    #content {
        width: 100%;
        position: relative;
        margin-right: 0;
    }

    /* Sidebar Styles */

    #sidebar {
        z-index: 1000;
        position: fixed;
        left: 250px;
        width: 250px;
        height: 100%;
        margin-left: -250px;
        overflow-y: auto;
        background: #37474F;
        -webkit-transition: all 0.5s ease;
        -moz-transition: all 0.5s ease;
        -o-transition: all 0.5s ease;
        transition: all 0.5s ease;
    }

    #sidebar header {
        background-color: #263238;
        font-size: 20px;
        line-height: 52px;
        text-align: center;
    }

    #sidebar header a {
        color: #fff;
        display: block;
        text-decoration: none;
    }

    #sidebar header a:hover {
        color: #fff;
    }

    #sidebar .nav {}

    #sidebar .nav a {
        background: none;
        border-bottom: 1px solid #455A64;
        color: #CFD8DC;
        font-size: 14px;
        padding: 16px 24px;
    }

    #sidebar .nav a:hover {
        background: none;
        color: #ECEFF1;
    }

    #sidebar .nav a i {
        margin-right: 16px;
    }
</style>

<body>
    <div id="viewport">
        <!-- Sidebar -->
        <div id="sidebar">
            <header>
                <a href="#">My App</a>
            </header>
            <!-- <ul class="nav">
                <li>
                    <a href="#">
                        <i class="zmdi zmdi-view-dashboard"></i> Dashboard
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="zmdi zmdi-link"></i> Shortcuts
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="zmdi zmdi-widgets"></i> Overview
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="zmdi zmdi-calendar"></i> Events
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="zmdi zmdi-info-outline"></i> About
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="zmdi zmdi-settings"></i> Services
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="zmdi zmdi-comment-more"></i> Contact
                    </a>
                </li>
            </ul> -->
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="<?= base_url('/') ?>">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('/students') ?>">Students</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Dropdown
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled">Disabled</a>
                </li>
            </ul>
        </div>
        <!-- Content -->
        <div id="content">
            <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="#"><i class="zmdi zmdi-notifications text-danger"></i>
                            </a>
                        </li>
                        <li><a href="#">Test User</a></li>
                    </ul>
                </div>
            </nav>
            <div class="container-fluid">
                <h1>Simple Sidebar</h1>
                <p>
                    Make sure to keep all page content within the
                    <code>#content</code>.
                </p>
            </div>
        </div>
    </div>
</body>



</html>