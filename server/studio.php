<?php
/**
 * Created by PhpStorm.
 * User: GeniuCode Pointer
 * Date: 6/26/2015
 * Time: 12:52 PM
 */
include_once("DB.php");
$GLOBALS['db']=new DB($host,$username,$password,$database);


class studio extends DB {
    private $todo;

    public function __construct(){
        $this->todo=$_POST['todo'];
        $this->dispatcher($this->todo);
    }

    public function dispatcher($todo){
        switch($todo){
            case "getMyInfo":
                $this->getMyInfo();
                break;
            case "twitter_up":
                $this->twitter_up();
                break;
            case "phone_up":
                $this->phone_up();
                break;

        }
    }

    protected function getMyInfo(){
        $user_id=htmlspecialchars(stripslashes($_SESSION['user_id']));
        $sql='select * from tuser where id='.$user_id;
        $result=$GLOBALS['db']->db_query($sql);
        $row = $GLOBALS['db']->db_assoc($result);

        print(json_encode($row));
    }

    protected function twitter_up(){
        $user_id=htmlspecialchars(stripslashes($_SESSION['user_id']));
        $twitter_link_up=htmlspecialchars(stripslashes($_POST['twitter_link_up']));
        $sql='update tuser set twitter="'.$twitter_link_up.'" where id='.$user_id;
        $result=$GLOBALS['db']->db_query($sql);

        print(json_encode($result));
    }

    protected function phone_up(){
        $user_id=htmlspecialchars(stripslashes($_SESSION['user_id']));
        $my_phone_up=htmlspecialchars(stripslashes($_POST['my_phone_up']));
        $sql='update tuser set phoneno="'.$my_phone_up.'" where id='.$user_id;
        $result=$GLOBALS['db']->db_query($sql);

        print(json_encode($result));
    }

    



}


$studio_ob=new studio();


?>