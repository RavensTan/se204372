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

}
?>