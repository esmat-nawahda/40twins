/**
 * Created by GeniuCode Pointer on 7/28/2015.
 */

//add new comment
$('body').on('click', '#addCommentBtn', function() {
    alert(last_post_id);
    var commentContent=document.getElementById("commentContent").value;

    if(commentContent===""){
        swal("Error!", "Fill the boxes to continue!", "error");
    }
    else{


        var data="commentContent="+commentContent+"&post_id="+last_post_id+"&todo=addNewComment";

        console.log(data);

        $.ajax({
            type: "POST",
            url: 'server/comment.php',
            data: data, // appears as $_GET['id'] @ ur backend side
            success: function (data) {
                //var result = (data);
                console.log(data);

                if(data!=="ERROR") {
                    var jsonData = JSON.parse(data);
                    console.log(jsonData);
                    swal({
                        title: "New Comment Had Been Added Successfully!",
                        text: "This Comment Will Be Seen Only By You & Your Twins",
                        type: "success"
                    });

                    var cmtId=jsonData.cmtId;
                    var user_id=jsonData.user_id;
                    var post_id=jsonData.post_id;
                    var content=jsonData.content;
                    var datetime=jsonData.datetime;
                    var fullname=jsonData.fullname;
                    var img_dir=jsonData.img_dir;

                    var comment_item=buildCommentItem(cmtId,user_id,post_id,content,datetime,fullname,img_dir);
                    //alert(comment_item);
                    $("#commentsCont").prepend(comment_item);


                    $("#commentContent").val("");






                }else{
                    swal({
                        title: "Comment Failed",
                        text: "ERROR",
                        type: "error"
                    });
                }
            }
        });

    }
});