<?php
class UserController
{
    public function user_list()
    {
        $userList = user::getAll();
        require_once('view/profile/profile_student.php');
    }
}
