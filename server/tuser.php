<?php
include_once("DB.php");
$GLOBALS['db']=new DB($host,$username,$password,$database);


class tuser extends DB {
    private $todo;

    public function __construct(){
        $this->todo=$_POST['todo'];
        $this->dispatcher($this->todo);
    }

    public function dispatcher($todo){
        switch($todo){
            case "user_reg":
                $this->register();
                break;
            case "login":
                $this->userLogin();
                break;
            case "logout":
                $this->userLogout();
                break;
            case "getMyData":
                $this->getMyData();
                break;
            case "update":
                $this->updateMyData();
                break;
            case "uploadReps":
                $this->uploadReps();
                break;
            case "getReps":
                $this->getReps();
                break;
            case "getAllRequests":
                $this->getAllRequests();
                break;
            case "getUserInfo":
                $this->getUserInfo();
                break;
            case "updateResult":
                $this->updateResult();
                break;
            case "uploadRepsb":
                $this->uploadRepsb();
                break;
            case "expLogin":
                $this->expLogin();
                break;


            case "checkAuth":
                $this->checkAuth();
                break;
        }
    }

    protected function register(){
        $fullname_reg=htmlspecialchars(stripslashes($_POST['fullname_reg']));
        $username_reg=htmlspecialchars(stripslashes($_POST['username_reg']));
        $password_reg=htmlspecialchars(stripslashes($_POST['password_reg']));
        $img_reg=htmlspecialchars(stripslashes($_POST['img_reg']));



        $img=$_POST['img'];
        $sql='insert into tuser(fullname,username,password,img_dir) values("'.$fullname_reg.'","'.$username_reg.'","'.$password_reg.'","'.$img_reg.'")';
//        var_dump($sql);
        $GLOBALS['db']->db_query($sql);

        print (json_encode($fullname_reg));
    }

    protected function userLogin(){
        $username=htmlspecialchars(stripslashes($_POST['username']));
        $password=htmlspecialchars(stripslashes($_POST['password']));
        $sql='select * from tuser where username="'.$username.'" and password="'.$password.'"';

        $result=$GLOBALS['db']->db_query($sql);


        if($GLOBALS['db']->db_query_rowsnum($result)>0) {
            $row = $GLOBALS['db']->db_assoc($result);
            $_SESSION['user_id']=$row["id"];

            $_SESSION['username']=$row["username"];
            $_SESSION['group_id']=$row["group_id"];
//            $_SESSION['user_type']="user";

            print(json_encode($row));
        }
        else{
            print(json_encode("ERROR"));
        }
    }

    protected function userLogout(){
        unset($_SESSION['user_id']);
        unset($_SESSION['username']);
    }


    protected function getMyData(){
        $user_id=htmlspecialchars(stripslashes($_SESSION['user_id']));
        $sql='select * from tuser where id='.$user_id;
        $result=$GLOBALS['db']->db_query($sql);
        $row = $GLOBALS['db']->db_assoc($result);

        print(json_encode($row));
    }

    protected function updateMyData(){
        $user_id=$_SESSION['user_id'];

        $username=htmlspecialchars(stripslashes($_POST['username']));
        $password=htmlspecialchars(stripslashes($_POST['password']));
        $husbandname=htmlspecialchars(stripslashes($_POST['husbandname']));

        $wifename=htmlspecialchars(stripslashes($_POST['wifename']));
        $husbandage=htmlspecialchars(stripslashes($_POST['husbandage']));
        $wifeage=htmlspecialchars(stripslashes($_POST['wifeage']));
        $email=htmlspecialchars(stripslashes($_POST['email']));

        $address=htmlspecialchars(stripslashes($_POST['address']));
        $city=htmlspecialchars(stripslashes($_POST['city']));

        $sql='update hwuser set username="'.$username.'",password="'.$password.'",husbandname="'.$husbandname.'",wifename="'.$wifename.'",husbandage="'.$husbandage.'",wifeage="'.$wifeage.'",email="'.$email.'",address="'.$address.'",city="'.$city.'" where id='.$user_id;

        $result=$GLOBALS['db']->db_query($sql);
        if($result) {
            print("SUCCESS");
        }else{
            print("ERROR");
        }
    }

    protected function getAllAdmins(){
        if(isset($_POST['page'])){
            $pageNum=$_POST['page'];
            $pageNum=abs(intval($pageNum)-1);
            $offset=$pageNum*12;
        }
        else{
            $offset=0;
        }
        $sql='select * from '.$GLOBALS['admin_table'].'  order by id desc limit 12 offset '.$offset;
        $result=$GLOBALS['db']->db_query($sql);
        $total=array();
        while($row = $GLOBALS['db']->db_assoc($result)){
            array_push($total, $row);
        }
        print(json_encode($total));
    }


    protected function uploadReps(){
        $user_id=$_SESSION['user_id'];
        $sql='';
        if(isset($_POST['file1'])){
            $file1=$_POST['file1'];

            $sql='update reports set file1="'.$file1.'" where user_id='.$user_id;
            $result=$GLOBALS['db']->db_query(stripslashes($sql));
        }

        if(isset($_POST['file2'])){
            $file2=$_POST['file2'];

            $sql='update reports set file2="'.$file2.'" where user_id='.$user_id;
            $result=$GLOBALS['db']->db_query(stripslashes($sql));
        }

        if(isset($_POST['file3'])){
            $file3=$_POST['file3'];

            $sql='update reports set file3="'.$file3.'" where user_id='.$user_id;
            $result=$GLOBALS['db']->db_query(stripslashes($sql));
        }

        if(isset($_POST['file4'])){
            $file4=$_POST['file4'];

            $sql='update reports set file4="'.$file4.'" where user_id='.$user_id;
            $result=$GLOBALS['db']->db_query(stripslashes($sql));
        }

        if(isset($_POST['file5'])){
            $file5=$_POST['file5'];

            $sql='update reports set file5="'.$file5.'" where user_id='.$user_id;
            $result=$GLOBALS['db']->db_query(stripslashes($sql));
        }

        if(isset($_POST['file6'])){
            $file6=$_POST['file6'];

            $sql='update reports set file6="'.$file6.'" where user_id='.$user_id;
            $result=$GLOBALS['db']->db_query(stripslashes($sql));
        }


//        var_dump($sql);



        if(!$result){
            print(json_encode("ERROR"));
        }else{
            print(json_encode("SUCCESS"));
        }
    }

    protected function checkAuth(){
        $page=$_POST['page'];
        if($_SESSION['user_type']=="1") {
            if($page==="ads"||$page==="students"||$page==="books")
                print(json_encode(array("can" => true)));
            else print(json_encode(array("can"=>false)));
        }else{
            if($page==="students")
                print(json_encode(array("can" => false)));
            else print(json_encode(array("can"=>true)));
        }


    }


    protected function getReps(){
        $user_id=htmlspecialchars(stripslashes($_SESSION['user_id']));
        $sql='select * from reports where user_id='.$user_id;
        $result=$GLOBALS['db']->db_query($sql);
        $row = $GLOBALS['db']->db_assoc($result);

        print(json_encode($row));
    }


    protected function getAllRequests(){
        $user_id=htmlspecialchars(stripslashes($_SESSION['user_id']));
        $sql='select * from hwuser order by id desc';
        $result=$GLOBALS['db']->db_query($sql);
        $total=array();
        while($row = $GLOBALS['db']->db_assoc($result)){
            array_push($total, $row);
        }
        print(json_encode($total));
    }


    protected function getUserInfo(){
        $user_id=htmlspecialchars(stripslashes($_POST['id']));
        $sql='select * from hwuser,reports where id='.$user_id.' and hwuser.id=reports.user_id';
        $result=$GLOBALS['db']->db_query($sql);
        $row = $GLOBALS['db']->db_assoc($result);

        print(json_encode($row));
    }


    protected function updateResult()
    {
        $user_id =  $_POST['id'];
        $fresult =  $_POST['result'];

        $sql = 'update reports set result="' . $fresult . '" where user_id=' . $user_id;
        $result = $GLOBALS['db']->db_query(stripslashes($sql));



        $sql='select * from hwuser,reports where id='.$user_id.' and hwuser.id=reports.user_id';
        $result=$GLOBALS['db']->db_query($sql);
        $row = $GLOBALS['db']->db_assoc($result);
        $to =$row['email'];
        $subject = "Your Result On Our PSS Site";
        $txt = $row['result'];
        $headers = "From: info@pss.com" . "\r\n" .
            "CC: job@pss.com";

        mail($to,$subject,$txt,$headers);


        print(json_encode("SUCCESS"));
    }




    protected function uploadRepsb(){
        $user_id=$_POST['id'];
        $sql='';
        if(isset($_POST['file1'])){
            $file1=$_POST['file1'];

            $sql='update reports set file1="'.$file1.'" where user_id='.$user_id;
            $result=$GLOBALS['db']->db_query(stripslashes($sql));
        }

        if(isset($_POST['file2'])){
            $file2=$_POST['file2'];

            $sql='update reports set file2="'.$file2.'" where user_id='.$user_id;
            $result=$GLOBALS['db']->db_query(stripslashes($sql));
        }

        if(isset($_POST['file3'])){
            $file3=$_POST['file3'];

            $sql='update reports set file3="'.$file3.'" where user_id='.$user_id;
            $result=$GLOBALS['db']->db_query(stripslashes($sql));
        }

        if(isset($_POST['file4'])){
            $file4=$_POST['file4'];

            $sql='update reports set file4="'.$file4.'" where user_id='.$user_id;
            $result=$GLOBALS['db']->db_query(stripslashes($sql));
        }

        if(isset($_POST['file5'])){
            $file5=$_POST['file5'];

            $sql='update reports set file5="'.$file5.'" where user_id='.$user_id;
            $result=$GLOBALS['db']->db_query(stripslashes($sql));
        }

        if(isset($_POST['file6'])){
            $file6=$_POST['file6'];

            $sql='update reports set file6="'.$file6.'" where user_id='.$user_id;
            $result=$GLOBALS['db']->db_query(stripslashes($sql));
        }


//        var_dump($sql);



        if(!$result){
            print(json_encode("ERROR"));
        }else{
            print(json_encode("SUCCESS"));
        }
    }




    protected function expLogin(){
        $username=htmlspecialchars(stripslashes($_POST['username']));
        $password=htmlspecialchars(stripslashes($_POST['password']));
        $sql='select * from experts where username="'.$username.'" and password="'.$password.'"';

        $result=$GLOBALS['db']->db_query($sql);


        if($GLOBALS['db']->db_query_rowsnum($result)>0) {
            $row = $GLOBALS['db']->db_assoc($result);
            $_SESSION['exp_id']=$row["id"];

            $_SESSION['username']=$row["username"];
            $_SESSION['user_type']="exp";

            print(json_encode($row));
        }
        else{
            print(json_encode("ERROR"));
        }
    }
}


$tuser_ob=new tuser();


?>