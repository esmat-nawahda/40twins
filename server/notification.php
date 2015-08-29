<?php
/**
 * Created by PhpStorm.
 * User: esmatn
 * Date: 8/23/2015
 * Time: 4:14 PM
 */
include_once("DB.php");
$GLOBALS['db']=new DB($host,$username,$password,$database);

class notification  extends DB {
    private $todo;

    public function __construct(){
        $this->todo=$_POST['todo'];
        $this->dispatcher($this->todo);
    }

    public function dispatcher($todo){
        switch($todo){
            case "getNonSeenNotifications":
                $this->getNonSeenNotifications();
                break;
            case "setNotiAsSeen":
                $this->setNotiAsSeen();
                break;


        }
    }


    protected function getNonSeenNotifications(){
        $sql='select * from notification where user_id='.$_SESSION['user_id'].' and seen=0';

        $result=$GLOBALS['db']->db_query($sql);
        $total=array();
        while($row = $GLOBALS['db']->db_assoc($result)){
            array_push($total, $row);
        }
        print(json_encode($total));
    }

    protected function setNotiAsSeen(){
        $notId=htmlspecialchars(stripslashes($_POST['notId']));
        $sql='update notification set seen=1 where notId='.$notId;

        $result=$GLOBALS['db']->db_query($sql);
        if(!$result)
            print("ERROR");
        else
            print(json_encode("SUCCESS"));
    }


}


$noti_ob=new notification();