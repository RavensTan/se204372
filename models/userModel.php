<?php
class user
{
    public $user_id, $name, $lastname, $ID,$year,$train_status,$advisor,$type_id,$petition_id;
    public function __construct($user_id, $name, $lastname, $ID,$year,$train_status,$advisor,$type_id,$petition_id)
    {
        $this->user_id = $user_id;
        $this->name = $name;
        $this->lastname = $lastname;
        $this->ID = $ID;
        $this->year = $year;
        $this->train_status = $train_status;
        $this->advisor = $advisor;
        $this->type_id = $type_id;
        $this->petition_id = $petition_id;
    }
    public static  function getAll()
    {
        $userList = [];
        require("connection.php");
        $sql = "SELECT * FROM `user`";
        $result = $conn->query($sql);
        
        while ($row = $result->fetch_assoc()) {
            printf("%s (%s)\n", $row["user_id"], $row["name"]);
        }
        //     $user_id = $my_row["user_id"];
        //     $name = $my_row["name"];
        //     $lastname = $my_row["lastname"];
        //     $ID = $my_row["ID"];
        //     $year = $my_row["year"];
        //     $train_status = $my_row["train_status"];
        //     $advisor = $my_row["advisor"];
        //     $type_id = $my_row["type_id"];
        //     $petition_id = $my_row["petition_id"];


        //     $userList[] = new user($user_id, $name, $lastname, $ID,$year,$train_status,$advisor,$type_id,$petition_id);
        // }
        //     // echo $sql;
        // require("connection_close.php");
        return $result;
    }
}
?>
