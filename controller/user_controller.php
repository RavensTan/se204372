<?php
class UserController
{
    public function user_list()
    {
        $userList = user::getUser();
        require_once('view/profile/profile_student.php');
    }

    public function teacher_list()
    {
        $userList = user::getUser();
        require_once('view/profile/profile_teacher.php');
    }

    public function admin_list()
    {
        $userList = user::getUser();
        require_once('view/profile/profile_admin.php');
    }
}
?>