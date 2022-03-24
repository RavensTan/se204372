<?php
class user
{
    public $user_id, $name, $lastname, $ID,$year,$train_status,$advisor,$type_id,$petition_status;
    public function __construct($user_id, $name, $lastname, $ID,$year,$train_status,$advisor,$type_id,$petition_status)
    {
        $this->user_id = $user_id;
        $this->name = $name;
        $this->lastname = $lastname;
        $this->ID = $ID;
        $this->year = $year;
        $this->train_status = $train_status;
        $this->advisor = $advisor;
        $this->type_id = $type_id;
        $this->petition_status = $petition_status;
    }

    public static  function getUser()
    {
        $userList = [];
        require("connection.php");
        $sql = "SELECT * FROM `user` LEFT JOIN `petition` ON `user`.`petition_id` = `petition`.`petition_id`  WHERE `user_id` = 1";
        
        $result = $conn->query($sql);

        while ($my_row = $result->fetch_assoc()) {
            $user_id = $my_row["user_id"];
            $name = $my_row["name"];
            $lastname = $my_row["lastname"];
            $ID = $my_row["ID"];
            $year = $my_row["year"];
            $train_status = $my_row["train_status"];
            $advisor = $my_row["advisor"];
            $type_id = $my_row["type_id"];
            $petition_status = $my_row["status"];


            $userList[] = new user($user_id, $name, $lastname, $ID,$year,$train_status,$advisor,$type_id,$petition_status);
        }

        $conn->close();
        return $userList;
    }

    public static  function getAllUser()
    {
        $userList = [];
        require("connection.php");
        $sql = "SELECT * FROM `user` LEFT JOIN `petition` ON `user`.`petition_id` = `petition`.`petition_id`  WHERE `type_id` = 1";
        
        $result = $conn->query($sql);

        while ($my_row = $result->fetch_assoc()) {
            $user_id = $my_row["user_id"];
            $name = $my_row["name"];
            $lastname = $my_row["lastname"];
            $ID = $my_row["ID"];
            $year = $my_row["year"];
            $train_status = $my_row["train_status"];
            $advisor = $my_row["advisor"];
            $type_id = $my_row["type_id"];
            $petition_status = $my_row["status"];


            $userList[] = new user($user_id, $name, $lastname, $ID,$year,$train_status,$advisor,$type_id,$petition_status);
        }

        $conn->close();
        return $userList;
    }

    

    public static  function getAll()
    {
        $userList = [];
        require("connection.php");
        $sql = "SELECT * FROM `user`";
        
        $result = $conn->query($sql);

        while ($my_row = $result->fetch_assoc()) {
            $user_id = $my_row["user_id"];
            $name = $my_row["name"];
            $lastname = $my_row["lastname"];
            $ID = $my_row["ID"];
            $year = $my_row["year"];
            $train_status = $my_row["train_status"];
            $advisor = $my_row["advisor"];
            $type_id = $my_row["type_id"];
            $petition_status = $my_row["petition_id"];


            $userList[] = new user($user_id, $name, $lastname, $ID,$year,$train_status,$advisor,$type_id,$petition_status);
        }

        $conn->close();
        return $userList;
    }

}
