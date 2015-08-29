<?php
/**
 * Created by PhpStorm.
 * User: GeniuCode Pointer
 * Date: 7/5/2015
 * Time: 3:06 PM
 */


include_once("DB.php");
$GLOBALS['db']=new DB($host,$username,$password,$database);


class myTwins  extends DB {
    private $todo;

    public function __construct(){
        $this->todo=$_POST['todo'];
        $this->dispatcher($this->todo);
    }

    public function dispatcher($todo){
        switch($todo){
            case "getMyTwins":
                $this->getMyTwins();
                break;
            case "getTwinInfo":
                $this->getTwinInfo();
                break;


        }
    }

    protected function getMyTwins(){
        $sql='select * from tuser where group_id='.$_SESSION['group_id'].' order by fullname';

        $result=$GLOBALS['db']->db_query($sql);
        $total=array();
        while($row = $GLOBALS['db']->db_assoc($result)){
            array_push($total, $row);
        }
        print(json_encode($total));
    }


    protected function getTwinInfo(){
        $user_id=htmlspecialchars(stripslashes($_POST['user_id']));
        $sql='select * from tuser where id='.$user_id;

        $result=$GLOBALS['db']->db_query($sql);
        $row = $GLOBALS['db']->db_assoc($result);

        print(json_encode($row));
    }




}


$myTwins_ob=new myTwins();