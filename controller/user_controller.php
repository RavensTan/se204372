<?php
class UserController
{
    public function user_list()
    {
        $userList = user::getUser();
        require_once('view/profile/profile_student.php');
    }
}
?>