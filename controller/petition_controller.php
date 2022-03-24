<?php
class PetitionController
{
    public function petition_list()
    {
        $petitionList = petition::getAll();
        $petitionStuList = student::getStudent();
        require_once('view/petition/petition_teacher.php');
    }

    public function PetAdmin_list()
    {
        $petitionStuList = user::getAllUser();
        require_once('view/petition/petition_admin.php');
    }

    public function update_petition()
    {

        $ArrApprove = $_GET['ArrApprove'];
        $ArrDisApprove = $_GET['ArrDisApprove'];
        petition::update($ArrApprove, $ArrDisApprove);
        PetitionController::petition_list();
    }

    public function search_teacher()
    {
        $key = $_GET['key'];
        if($key != NULL){
            $petitionStuList = student::search($key);
            require_once('view/petition/petition_teacher.php');
        }
        else {
            $petitionList = petition::getAll();
            $petitionStuList = student::getStudent();
            require_once('view/petition/petition_teacher.php');
        }
    }

    public function search_admin()
    {
        $key = $_GET['key'];
        if($key != NULL){
            $petitionStuList = student::search($key);
            require_once('view/petition/petition_admin.php');
        }
        else {
            $petitionStuList = user::getAllUser();
            require_once('view/petition/petition_admin.php');
        }
    }
}
?>