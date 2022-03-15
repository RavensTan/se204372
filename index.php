<?php
if (isset($_GET['controller']) && isset($_GET['action'])) {
    $controller = $_GET['controller'];
    $action = $_GET['action'];
} else {
    $controller = 'pages';
    $action = 'home';
}
?>
<html>
<header class="p-3 bg-dark text-white">

    <div class="container-fluid">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
            <h3>ระบบจัดการการฝึกงานและสหกิจแบบออนไลน์</h3>

            <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">

                <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap">
                    <use xlink:href="#bootstrap"></use>
                </svg>
            </a>

            <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                <li><a href="?controller=user&action=user_list" class="nav-link px-2 text-white">student</a></li>
                <li><a href="?controller=petition&action=petition_list" class="nav-link px-2 text-white">petition</a></li>
                <li><a href="?controller=petition&action=PetAdmin_list" class="nav-link px-2 text-white">petition_ad</a></li>
                <!-- <li><a href="?controller=quataion&action=index" class="nav-link px-2 text-white">Quatation</a></li>
                <li><a href="?controller=quationdetail&action=index" class="nav-link px-2 text-white">QuatationDetail</a></li>
                <li><a href="?controller=ProductDetail&action=index" class="nav-link px-2 text-white">ProductDetail</a></li> -->
 
            </ul>




        </div>
    </div>
</header>

<body>
    <?php require_once("routes.php"); ?>
</body>

</html>