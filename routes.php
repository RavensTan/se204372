<?php
$controllers = array(
    'pages' => ['home', 'error'],
    'user' => ['user_list',],
    'petition' => ['petition_list', 'update_petition','PetAdmin_list'],
);

function call($controller, $action)
{
    echo "routes to " . $controller . "-" . $action . "<br>";
    require_once("controller/" . $controller . "_controller.php");
    switch ($controller) {
        case "pages":
            $controller = new PagesController();
            break;
        case "user":
            require_once("models/userModel.php");
            $controller = new UserController();
            break;
        case "petition":
            require_once("models/petitionModel.php");
            require_once("models/studentModel.php");
            require_once("models/userModel.php");
            $controller = new PetitionController();
            break;
            // case "ProductDetail":
            //     require_once("models/ProductDetailModel.php");
            //     $controller = new ProductDetailController();
            //     break;
            // case "quationdetail":
            //     require_once("models/quatationModel.php");
            //     require_once("models/quationdetailModel.php");
            //     $controller = new QuationDetailController();
    }
    $controller->{$action}();
}
if (array_key_exists($controller, $controllers)) {
    if (in_array($action, $controllers[$controller])) {
        call($controller, $action);
    } else {
        call('pages', 'error');
    }
} else {
    call('pages', 'error');
}
