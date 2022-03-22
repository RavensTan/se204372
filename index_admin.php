<?php
session_start();
include('connection.php');

if(!isset($_SESSION['user_id'])) {
    header('location: login.php');
}

$user_id = $_SESSION['user_id'];
$name = $_SESSION['name'];
$lastname = $_SESSION['lastname'];
$ID = $_SESSION['ID'];
$year = $_SESSION['year'];
$train_status = $_SESSION['train_status'];
$advisor = $_SESSION['advisor'];
$type_id = $_SESSION['type_id'];
$petition_id = $_SESSION['petition_id'];

if (isset($_GET['controller']) && isset($_GET['action'])) {
    $controller = $_GET['controller'];
    $action = $_GET['action'];
} else {
    $controller = 'pages';
    $action = 'home';
}

if($type_id!='3'){
    header('location: logout.php');
}

?>
<html>
<header class="p-3 bg-dark text-white">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4 d-flex flex-wrap align-items-center justify-content-lg-start">
                <h3>ระบบจัดการการฝึกงานและสหกิจแบบออนไลน์</h3>

                <!-- <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">

                <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap">
                    <use xlink:href="#bootstrap"></use>
                </svg>
            </a> -->
            </div>
            <div class="col-md-8">
                <ul class="nav col-12 col-lg-auto me-lg-auto mb-2  mb-md-0">
                    <li><a href="?controller=pages&action=home" class="nav-link px-2 text-white">หน้าหลัก</a></li>
                    <li><a href="?controller=user&action=admin_list" class="nav-link px-2 text-white">บัญชีผู้ใช้</a></li>
                    <li><a href="?controller=petition&action=PetAdmin_list" class="nav-link px-2 text-white">คำร้องนิสิต</a></li>
                    <li><a href="?controller=manage&action=manage_officer_list" class="nav-link px-2 text-white">จัดการเอกสาร</a></li>
                    <li><a href="?controller=issueB&action=issueB_of" class="nav-link px-2 text-white">ออกหนังสือ</a></li>
                    <li><a href="?controller=company&action=company_list" class="nav-link px-2 text-white">สถานประกอบการ</a></li>
                    <li><a href="?controller=history&action=history_list" class="nav-link px-2 text-white">ประวัติการฝึกงาน</a></li>
                    <li><a href="logout.php" class="nav-link px-2 text-white" >ออกจากระบบ</a></li>
                    <!-- <li><a href="?controller=petition&action=petition_list" class="nav-link px-2 text-white">petition</a></li>
                <li><a href="?controller=petition&action=PetAdmin_list" class="nav-link px-2 text-white">petition_ad</a></li> -->
                    <!-- <li><a href="?controller=quataion&action=index" class="nav-link px-2 text-white">Quatation</a></li>
                <li><a href="?controller=quationdetail&action=index" class="nav-link px-2 text-white">QuatationDetail</a></li>
                <li><a href="?controller=ProductDetail&action=index" class="nav-link px-2 text-white">ProductDetail</a></li> -->


                <!-- <form action="logout.php">
                    <input type="submit" value="ออกจากระบบ">
	            </form>  -->

                
                </ul>
            </div>
        </div>

    </div>
</header>

<body>
    <?php require_once("routes.php"); ?>
</body>

</html>