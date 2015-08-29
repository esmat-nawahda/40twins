<?php
/**
 * Created by PhpStorm.
 * User: GeniuCode Pointer
 * Date: 7/28/2015
 * Time: 8:45 AM
 */
include_once("DB.php");
$GLOBALS['db']=new DB($host,$username,$password,$database);

class comment  extends DB {
    private $todo;

    public function __construct(){
        $this->todo=$_POST['todo'];
        $this->dispatcher($this->todo);
    }

    public function dispatcher($todo){
        switch($todo){
            case "addNewComment":
                $this->addNewComment();
                break;


        }
    }


    protected function addNewComment(){
        $commentContent=htmlspecialchars(stripslashes($_POST['commentContent']));
        $post_id=htmlspecialchars(stripslashes($_POST['post_id']));

        $sql='';

        $sql='insert into comment(post_id,user_id,content,datetime) values('.$post_id.','.$_SESSION['user_id'].',"'.$commentContent.'","'.date("Y-m-d H:i:s").'")';
        $GLOBALS['db']->db_query($sql);

        $last_id=$GLOBALS['db']->db_insid();

        $user_id=htmlspecialchars(stripslashes($_SESSION['user_id']));
        $sql='select * from tuser where id='.$user_id;
        $result=$GLOBALS['db']->db_query($sql);
        $row = $GLOBALS['db']->db_assoc($result);
        $newComment = array('cmtId'=>$last_id,'user_id' => $_SESSION['user_id'],'post_id'=>$post_id,'datetime'=>date("Y-m-d H:i:s"),'content'=>$commentContent,'fullname'=>$row['fullname'],'img_dir'=>$row['img_dir']);
        print (json_encode($newComment));


        //  Notification side
        $sql='select * from tuser where group_id='.$_SESSION['group_id'];
        $users=$GLOBALS['db']->db_query($sql);


        $msg="New Comment";
        while($row = $GLOBALS['db']->db_assoc($users)) {
            $user_id=$row['id'];
            $sql = 'insert into notification(content,datetime,user_id,group_id,post_id) values("' . $msg . '","' . date("Y-m-d H:i:s") . '",' . $user_id . ',' . $_SESSION['group_id'] . ',' . $post_id . ')';
            $GLOBALS['db']->db_query($sql);
        }
    }



}

$cmt_ob=new comment();