<?php
/**
 * Created by PhpStorm.
 * User: GeniuCode Pointer
 * Date: 6/15/2015
 * Time: 10:09 PM
 */

include_once("DB.php");
$GLOBALS['db']=new DB($host,$username,$password,$database);


class post extends DB {
    private $todo;

    public function __construct(){
        $this->todo=$_POST['todo'];
        $this->dispatcher($this->todo);
    }

    public function dispatcher($todo){
        switch($todo){
            case "addNewPost":
                $this->addNewPost();
                break;
            case "getPostsByGroup":
                $this->getPostsByGroup();
                break;
            case "getCommentsByPostID":
                $this->getCommentsByPostID();
                break;
            case "getPostInfo":
                $this->getPostInfo();
                break;
            case "deletePost":
                $this->deletePost();
                break;
            case "updatePost":
                $this->updatePost();
                break;

        }
    }

    protected function addNewPost(){
        $post_title=htmlspecialchars(stripslashes($_POST['post_title']));
        $post_body=htmlspecialchars(stripslashes($_POST['post_body']));

        $sql='';
        $post_img='';
        $post_youtube='';
        if(isset($_POST['post_img'])&&isset($_POST['post_youtube'])){
            $post_img=$_POST['post_img'];
            $post_youtube=htmlspecialchars(stripslashes($_POST['post_youtube']));
            $sql='insert into posts(group_id,user_id,title,content,datetime,img,youtube_url) values('.$_SESSION['group_id'].','.$_SESSION['user_id'].',"'.$post_title.'","'.$post_body.'","'.date("Y-m-d H:i:s").'","'.$post_img.'","'.$post_youtube.'")';
        }
        else if(isset($_POST['post_img'])){
            $post_img=$_POST['post_img'];
            $sql='insert into posts(group_id,user_id,title,content,datetime,img) values('.$_SESSION['group_id'].','.$_SESSION['user_id'].',"'.$post_title.'","'.$post_body.'","'.date("Y-m-d H:i:s").'","'.$post_img.'")';
        }
        else if(isset($_POST['post_youtube'])){
            $post_youtube=htmlspecialchars(stripslashes($_POST['post_youtube']));
            $sql='insert into posts(group_id,user_id,title,content,datetime,youtube_url) values('.$_SESSION['group_id'].','.$_SESSION['user_id'].',"'.$post_title.'","'.$post_body.'","'.date("Y-m-d H:i:s").'","'.$post_youtube.'")';
        }
        else {
            $sql='insert into posts(group_id,user_id,title,content,datetime) values('.$_SESSION['group_id'].','.$_SESSION['user_id'].',"'.$post_title.'","'.$post_body.'","'.date("Y-m-d H:i:s").'")';
        }
//        var_dump($sql);
        $GLOBALS['db']->db_query($sql);

        $last_id=$GLOBALS['db']->db_insid();

        $user_id=htmlspecialchars(stripslashes($_SESSION['user_id']));
        $sql='select * from tuser where id='.$user_id;
        $result=$GLOBALS['db']->db_query($sql);
        $row = $GLOBALS['db']->db_assoc($result);

        $newPost = array('pid'=>$last_id,'group_id' => $_SESSION['group_id'],'user_id' => $_SESSION['user_id'],'datetime'=>date("Y-m-d H:i:s"), 'title'=>$post_title,'content'=>$post_body,'img'=>$post_img,'youtube_url'=>$post_youtube,'fullname'=>$row['fullname'],'img_dir'=>$row['img_dir']);
        print (json_encode($newPost));

        $sql='select * from tuser where group_id='.$_SESSION['group_id'];
        $users=$GLOBALS['db']->db_query($sql);


        $msg="New Post";
        while($row = $GLOBALS['db']->db_assoc($users)) {
            $user_id=$row['id'];
            $sql = 'insert into notification(content,datetime,user_id,group_id,post_id) values("' . $msg . '","' . date("Y-m-d H:i:s") . '",' . $user_id . ',' . $_SESSION['group_id'] . ',' . $last_id . ')';
            $GLOBALS['db']->db_query($sql);
        }

    }



    protected function getPostsByGroup(){
        if(isset($_POST['page'])){
            $pageNum=$_POST['page'];
            $pageNum=abs(intval($pageNum)-1);
            $offset=$pageNum*10;
        }
        else{
            $offset=0;
        }
        $sql='select * from posts,tuser where posts.group_id='.$_SESSION['group_id'].' and  posts.user_id=tuser.id order by posts.pid desc limit 10 offset '.$offset;



        $result=$GLOBALS['db']->db_query($sql);
        $total=array();
        while($row = $GLOBALS['db']->db_assoc($result)){
            array_push($total, $row);
        }
        print(json_encode($total));
    }




    protected function getCommentsByPostID(){
        $post_id=htmlspecialchars(stripslashes($_POST['post_id']));
        $sql='select * from comment,tuser where comment.post_id='.$post_id.' and  comment.user_id=tuser.id order by comment.cmtId desc';

        $result=$GLOBALS['db']->db_query($sql);
        $total=array();
        while($row = $GLOBALS['db']->db_assoc($result)){
            array_push($total, $row);
        }
        print(json_encode($total));
    }



    protected function getPostInfo(){
        $post_id=htmlspecialchars(stripslashes($_POST['post_id']));
        $sql='select * from posts,tuser where posts.pid='.$post_id.' and  posts.user_id=tuser.id';

        $result=$GLOBALS['db']->db_query($sql);
        $row = $GLOBALS['db']->db_assoc($result);

        print(json_encode($row));
    }


    protected function deletePost(){
        $post_id=htmlspecialchars(stripslashes($_POST['post_id']));
        $sql='delete from posts where pid='.$post_id;

        $result=$GLOBALS['db']->db_query($sql);
        if(!$result)
            print("ERROR");
        else
            print(json_encode("SUCCESS"));
    }


    protected function updatePost(){
        $post_id=htmlspecialchars(stripslashes($_POST['post_id']));
        $title=htmlspecialchars(stripslashes($_POST['title']));
        $content=htmlspecialchars(stripslashes($_POST['content']));
        $youtube_url=htmlspecialchars(stripslashes($_POST['youtube_url']));
        $sql="";
        if(isset($_POST['post_img'])){
            $post_img=htmlspecialchars(stripslashes($_POST['post_img']));
            $sql='update posts set title="'.$title.'",content="'.$content.'",youtube_url="'.$youtube_url.'",img="'.$post_img.'" where pid='.$post_id;
        }
        else{
            $sql='update posts set title="'.$title.'",content="'.$content.'",youtube_url="'.$youtube_url.'" where pid='.$post_id;
        }


        $result=$GLOBALS['db']->db_query($sql);
        if(!$result)
            print("ERROR");
        else
            print(json_encode("SUCCESS"));
    }



    private function getUsersByGroupID(){
        $sql='select * from tuser where group_id='.$_SESSION['group_id'];
        $result=$GLOBALS['db']->db_query($sql);
        return $result;
    }

    private function sendNotificationByGroupID($group_id,$result,$msg,$post_id){

        while($row = $GLOBALS['db']->db_assoc($result)){
            $user_id=$row['user_id'];
            $sql='insert into notification(content,datetime,user_id,group_id,post_id) values("'.$msg.'","'.date("Y-m-d H:i:s").'",'.$user_id.','.$_SESSION['group_id'].','.$post_id.')';
            $qurey=$GLOBALS['db']->db_query($sql);
        }

    }





}

$post_ob=new post();