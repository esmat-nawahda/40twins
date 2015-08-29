/**
 * Created by GeniuCode Pointer on 6/15/2015.
 */



//add new post
$('body').on('click', '#post_add_btn', function() {
    //alert("hh");
    var post_title=document.getElementById("post_title").value;
    var post_body=document.getElementById("post_body").value;
    var post_youtube=document.getElementById("post_youtube").value;
    var post_img=document.getElementById("post_img_add").value.replace(/C:\\fakepath\\/i, '');


    if(post_title===""||post_body===""){
        swal("Error!", "Fill the boxes to continue!", "error");
    }
    else{


            var data="post_title="+post_title+"&post_body="+post_body+"&todo=addNewPost";
            if(post_img!="") data+="&post_img="+post_img;
            if(post_youtube!="") data+="&post_youtube="+post_youtube;
            console.log(data);

            $.ajax({
                type: "POST",
                url: 'server/post.php',
                data: data, // appears as $_GET['id'] @ ur backend side
                success: function (data) {
                    //var result = (data);
                    console.log(data);

                    if(data!=="ERROR") {
                        var jsonData = JSON.parse(data);
                        console.log(jsonData);
                        swal({
                            title: "New Post Had Been Added Successfully!",
                            text: "This Post Will Be Seen Only By You & Your Twins",
                            type: "success"
                        });

                        var pid=jsonData.pid;
                        var group_id=jsonData.group_id;
                        var user_id=jsonData.user_id;
                        var title=jsonData.title;
                        var content=jsonData.content;
                        var datetime=jsonData.datetime;
                        var img=jsonData.img;
                        var youtube_url=jsonData.youtube_url;
                        var fullname=jsonData.fullname;
                        var img_dir=jsonData.img_dir;

                        var post_item=buildPostItem(pid,group_id,user_id,title,content,datetime,img,youtube_url,fullname,img_dir);
                        //alert(post_item);
                        $("#newsfeed_cont").prepend(post_item);

                        $("#post_title").val("");
                        $("#post_body").val("");

                        $("#post_youtube").val("");
                        $('.img_post').attr('src', "");
                        //get last id and send it to img upload


                        //file to be uploaded
                        var file_data = $('#post_img_add').prop('files')[0];
                        var form_data = new FormData();
                        form_data.append('file', file_data)

                        $.ajax({
                            url : 'upload.php?f1=posts', // point to server-side PHP script
                            dataType : 'text', // what to expect back from the PHP script, if anything
                            cache : false,
                            contentType : false,
                            processData : false,
                            data : form_data,
                            type : 'post',
                            success : function(php_script_response) {

                            }
                        });

                        $("#post_img_add").val("");
                        fbShare('http://geniucode.com/40twins', 'New Post Added', 'Had Added New Post, Come on & Share Us', 'http://goo.gl/dS52U', 520, 350);


                    }else{
                        swal({
                            title: "Registration Failed",
                            text: "ERROR",
                            type: "error"
                        });
                    }
                }
            });

    }
});


function getPostsByGroup1st(){

    pageNo=1;
    var data="page="+1+"&todo=getPostsByGroup";
    console.log(data);
    $("#newsfeed_cont").html("");
    $.ajax({
        type: "POST",
        url: 'server/post.php',
        data: data, // appears as $_GET['id'] @ ur backend side
        success: function (data) {
            var jsonData = JSON.parse(data);
            console.log(jsonData);
            var total='';

            //Notifications
            var data="todo=getNonSeenNotifications";
            $.ajax({
                type: "POST",
                url: 'server/notification.php',
                data: data, // appears as $_GET['id'] @ ur backend side
                success: function (data) {
                    var result = JSON.parse(data);
                    $(".noti_num").text(result.length);

                    $("#notiList").html("");
                    for(var i=0;i<result.length;i++){
                        var notId=result[i].notId;
                        var post_id=result[i].post_id;
                        var content=result[i].content;
                        var datetime=result[i].datetime;


                        var notiItem=buildNotificationItem(notId,post_id,content,datetime);
                        //alert(post_item);
                        //alert(post_item);
                        $("#notiList").append(notiItem);

                    }


                    console.log(result);
                }
            });

            for(var i=0;i<jsonData.length;i++){
                var pid=jsonData[i].pid;
                var group_id=jsonData[i].group_id;
                var user_id=jsonData[i].user_id;
                var title=jsonData[i].title;
                var content=jsonData[i].content;
                var datetime=jsonData[i].datetime;
                var img=jsonData[i].img;
                var youtube_url=jsonData[i].youtube_url;
                var fullname=jsonData[i].fullname;
                var img_dir=jsonData[i].img_dir;

                var post_item=buildPostItem(pid,group_id,user_id,title,content,datetime,img,youtube_url,fullname,img_dir);
                //alert(post_item);
                //alert(post_item);
                $("#newsfeed_cont").append(post_item);

            }





        }
    });




}


function getPostsByGroup(){

    pageNo=pageNo+1;
    var data="page="+pageNo+"&todo=getPostsByGroup";
    console.log(data);
    $.ajax({
        type: "POST",
        url: 'server/post.php',
        data: data, // appears as $_GET['id'] @ ur backend side
        success: function (data) {
            var jsonData = JSON.parse(data);
            console.log(jsonData);
            var total='';



            for(var i=0;i<jsonData.length;i++){
                var pid=jsonData[i].pid;
                var group_id=jsonData[i].group_id;
                var user_id=jsonData[i].user_id;
                var title=jsonData[i].title;
                var content=jsonData[i].content;
                var datetime=jsonData[i].datetime;
                var img=jsonData[i].img;
                var youtube_url=jsonData[i].youtube_url;
                var fullname=jsonData[i].fullname;
                var img_dir=jsonData[i].img_dir;

                var post_item=buildPostItem(pid,group_id,user_id,title,content,datetime,img,youtube_url,fullname,img_dir);
                //alert(post_item);
                $("#newsfeed_cont").append(post_item);

            }

        }
    });

}






function showAddPost(){
    $('#addNewPost').toggle('slow');
}




var last_post_id=0;

var img_src="";
//get user information
function getSinglePost(id) {
    last_post_id=id;
    //alert(last_id);
    var data = "post_id=" + id + "&todo=getPostInfo";
    //console.log(data);
    $.ajax({
        type: "POST",
        url: 'server/post.php',
        data: data, // appears as $_GET['id'] @ ur backend side
        success: function (data) {
            var jsonData = JSON.parse(data);
            console.log(jsonData);
            if (data !== "ERROR") {


                //alert(jsonData.fullname);

                $("#singlePostFullname").text(jsonData.fullname);
                $("#singlePostTitle").text(jsonData.title);
                $("#singlePostDate").text(jsonData.datetime);
                $("#singlePostContent").text(jsonData.content);
                $('#singlePostProfileImg').attr('src', "uploads/users/"+jsonData.img_dir);
                $('#singlePostProfileImg2').attr('src', "uploads/users/"+jsonData.img_dir);
                $('#user_id_single_post').prop('href', "#/users/"+jsonData.user_id+"/");

                if(jsonData.img==null||jsonData.img=="") {

                    $('#img_single_post').hide();
                }else{
                    img_src = "uploads/posts/" + jsonData.img;
                    $("#img_single_post").attr('src',img_src);
                }

                if(jsonData.youtube_url==null||jsonData.youtube_url==""){
                    $('#youtube_single_post').hide();
                }
                else{
                    $("#youtube_post").attr('src',jsonData.youtube_url.replace("watch?v=", "embed/"));
                }



                //
                //if (jsonData.file1 == null) $('#file1_ui').prop("href", "#");
                //else $('#file1_ui').prop("href", "uploads/" + jsonData.file1);
                //
                //if (jsonData.file2 == null) $('#file2_ui').prop("href", "#");
                //else $('#file2_ui').prop("href", "uploads/" + jsonData.file2);
                //
                //if (jsonData.file3 == null) $('#file3_ui').prop("href", "#");
                //else $('#file3_ui').prop("href", "uploads/" + jsonData.file3);
                //
                //if (jsonData.file4 == null) $('#file4_ui').prop("href", "#");
                //else $('#file4_ui').prop("href", "uploads/" + jsonData.file4);
                //
                //if (jsonData.file5 == null) $('#file5_ui').prop("href", "#");
                //else $('#file5_ui').prop("href", "uploads/" + jsonData.file5);
                //
                //if (jsonData.file6 == null) $('#file6_ui').prop("href", "#");
                //else $('#file6_ui').prop("href", "uploads/" + jsonData.file6);

            } else {
                swal({
                    title: "Failed",
                    text: "Can't Return Your Personal Information",
                    type: "error"
                });
            }
        }
    });

}





function getCommentsByPostID(post_id){

    pageNo=1;
    var data="post_id="+post_id+"&todo=getCommentsByPostID";
    console.log(data);
    $("#commentsCont").html("");
    $.ajax({
        type: "POST",
        url: 'server/post.php',
        data: data, // appears as $_GET['id'] @ ur backend side
        success: function (data) {
            var jsonData = JSON.parse(data);
            console.log(jsonData);
            var total='';



            for(var i=0;i<jsonData.length;i++){
                var cmtId=jsonData[i].cmtId;
                var post_id=jsonData[i].post_id;
                var user_id=jsonData[i].user_id;
                var content=jsonData[i].content;
                var datetime=jsonData[i].datetime;
                var fullname=jsonData[i].fullname;
                var img_dir=jsonData[i].img_dir;

                var comment_item=buildCommentItem(cmtId,user_id,post_id,content,datetime,fullname,img_dir);
                //alert(post_item);
                //alert(post_item);
                $("#commentsCont").append(comment_item);

            }

        }
    });
}





//add new post
$('body').on('click', '#deletePostFromSinglePostBtn', function() {
    //alert("hh");
    swal({
            title: "Are you sure?",
            text: "Delete!",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Yes, delete!",
            closeOnConfirm: false },
        function(){

            var data="post_id="+last_post_id+"&todo=deletePost";

            console.log(data);

            $.ajax({
                type: "POST",
                url: 'server/post.php',
                data: data, // appears as $_GET['id'] @ ur backend side
                success: function (data) {
                    //var result = (data);
                    console.log(data);

                    if(data!=="ERROR") {
                        var jsonData = JSON.parse(data);
                        console.log(jsonData);
                        swal({
                            title: "Post Had Been Deleted Successfully!",
                            text: "This Post Had Been Deleted Permenantly",
                            type: "success"
                        });

                        setTimeout(function(){window.location="index.php#/"},2000);

                    }else{
                        swal({
                            title: "Delete Post Failed",
                            text: "ERROR",
                            type: "error"
                        });
                    }
                }
            });
        }
    );
});




$('body').on('click', '#update_post_id', function() {

    //alert(last_id);
    var data = "post_id=" + last_post_id + "&todo=getPostInfo";
    //console.log(data);
    $.ajax({
        type: "POST",
        url: 'server/post.php',
        data: data, // appears as $_GET['id'] @ ur backend side
        success: function (data) {
            var jsonData = JSON.parse(data);
            console.log(jsonData);
            if (data !== "ERROR") {



                $("#post_title_update").val(jsonData.title);
                $("#post_desc_up").text(jsonData.content);
                $("#youtube_url_up").val(jsonData.youtube_url);


            } else {
                swal({
                    title: "Failed",
                    text: "Can't Return Your Personal Information",
                    type: "error"
                });
            }
        }
    });
});




$('body').on('click', '#post_up', function() {

    //alert(last_id);

    var title=$("#post_title_update").val();
    var content=$("#post_desc_up").val();
    var post_img=$("#post_img_up").val().replace(/C:\\fakepath\\/i, '');
    var youtube_url=$("#youtube_url_up").val();

    var data = "post_id=" + last_post_id+"&title="+title+"&content="+content+"&youtube_url="+youtube_url + "&todo=updatePost";
    console.log(data);
    if(post_img!=""){
        data+="&post_img="+post_img;
    }
    $.ajax({
        type: "POST",
        url: 'server/post.php',
        data: data, // appears as $_GET['id'] @ ur backend side
        success: function (data) {
            var jsonData = JSON.parse(data);
            console.log(jsonData);
            if (data !== "ERROR") {

                $("#singlePostTitle").text(title);
                $("#singlePostContent").text(content);
                //$('#singlePostProfileImg').attr('src', "uploads/users/"+jsonData.img_dir);



                if(post_img!="") {
                    //file to be uploaded
                    var file_data = $('#post_img_up').prop('files')[0];
                    var form_data = new FormData();
                    form_data.append('file', file_data)

                    $.ajax({
                        url: 'upload.php?f1=posts', // point to server-side PHP script
                        dataType: 'text', // what to expect back from the PHP script, if anything
                        cache: false,
                        contentType: false,
                        processData: false,
                        data: form_data,
                        type: 'post',
                        success: function (php_script_response) {

                        }
                    });
                }

                $("#update_post").modal('toggle');
                swal({
                    title: "Post Had Been Updated Successfully!",
                    text: "This Post Will Be Seen Only By You & Your Twins",
                    type: "success"
                });

            } else {
                swal({
                    title: "Failed",
                    text: "Can't Return Your Personal Information",
                    type: "error"
                });
            }
        }
    });
});



$('body').on('click', '#img_single_post_modal', function(e) {
    $('#galleryModal img').attr('src',img_src);
});