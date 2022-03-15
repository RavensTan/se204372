<?php
class petition
{
    public $petition_id, $type, $date,$status;
    public function __construct($petition_id, $type, $date,$status)
    {
        $this->petition_id = $petition_id;
        $this->type = $type;
        $this->date = $date;
        $this->status = $status;
    }

    public static  function getAll()
    {
        $petitonList = [];
        require("connection.php");
        $sql = "SELECT * FROM `petition`";
        
        $result = $conn->query($sql);

        while ($my_row = $result->fetch_assoc()) {
            $petition_id = $my_row["petition_id"];
            $type = $my_row["type"];
            $date = $my_row["date"];
            $status = $my_row["status"];
            $petitionList[] = new petition($petition_id, $type, $date,$status);
        }

        $conn->close();
        return $petitionList;
    }

    public static function update($ArrApp, $ArrDisApp)
    {
        $arrApprove = explode (",", $ArrApp);
        $arrDisApprove = explode (",", $ArrDisApp);
        
        print_r($arrApprove);
        print_r($arrDisApprove);

        require("connection.php");

        foreach($arrApprove as $item){
            $sql =   "UPDATE `petition` SET `status`='อนุมัติ' WHERE `petition_id`='$item'";

            $conn->query($sql);
        }
        
        foreach($arrDisApprove as $item){
            $sql =   "UPDATE `petition` SET `status`='ไม่อนุมัติ' WHERE `petition_id`='$item'";

            $conn->query($sql);
        }

        $conn->close();
        return "update success";
    }
}
