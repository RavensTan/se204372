<?php
$controllers = array(
    'pages' => ['home', 'error'],
    'user' => ['user_list','teacher_list','admin_list'],
    'petition' => ['petition_list', 'update_petition','PetAdmin_list', 'search_teacher','search_admin'],
    'relatedDocument' => ['relatedDocument'],
    'issueB' => ['issueB_teacher','issueB_of'],
    'referralL' => ['referralL_teacher','referralL_of'],
    'apprenticeshipL' => ['apprenticeshipL_teacher','apprenticeshipL_of'],
    'manage' => ['manage_student_list','manage_teacher_list','manage_officer_list','edit_manage_teacher_list','edit_manage_office_list'],
    'company' =>['company_list'],
    'history' =>['history_list']
);

function call($controller, $action)
{
    // echo "routes to " . $controller . "-" . $action . "<br>";
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
        case "relatedDocument":
            $controller = new relatedDocumentController();
            break;
        case "issueB":
            $controller = new issueBController();
            break;
        case "referralL":
            $controller = new referralLController();
            break;
        case "apprenticeshipL":
            $controller = new apprenticeshipLController();
            break;
        case "manage":
            $controller = new manageController();
            break;
        case "company":
            $controller = new companyController();
            break;
        case "history":
            $controller = new historyController();
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