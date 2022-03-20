<?php
class manageController
{
    public function manage_student_list()
    {
        
        require_once('view/manage/manage_student.php');
    }

    public function manage_teacher_list()
    {
        require_once('view/manage/manage_teacher.php');
    }

    public function manage_officer_list()
    {
        require_once('view/manage/manage_officer.php');
    }

    public function edit_manage_teacher_list()
    {
        require_once('view/manage/edit_manage_teacher.php');
    }
    
    public function edit_manage_officer_list()
    {
        require_once('view/manage/edit_manage_officer.php');
    }


    
}
?>
