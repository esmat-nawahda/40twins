/**
 * Created by GeniuCode Pointer on 7/5/2015.
 */

function getMyTwins(){
    var data="todo=getMyTwins";
    console.log(data);
    $.ajax({
        type: "POST",
        url: 'server/myTwins.php',
        data: data, // appears as $_GET['id'] @ ur backend side
        success: function (data) {
            var jsonData = JSON.parse(data);
            console.log(jsonData);
            var total='';



            for(var i=0;i<jsonData.length;i++){
                var id=jsonData[i].id;
                var email=jsonData[i].email;
                var birthdate=jsonData[i].birthdate;
                var country=jsonData[i].country;
                var instagram=jsonData[i].instagram;
                var fb=jsonData[i].fb;
                var twitter=jsonData[i].twitter;
                var gender=jsonData[i].gender;
                var fullname=jsonData[i].fullname;
                var img_dir=jsonData[i].img_dir;

                var myTwin_item=buildMyTwinItem(id,email,birthdate,country,instagram,fb,twitter,gender,fullname,img_dir);
                //alert(post_item);
                $("#myTwinsCont").append(myTwin_item);

            }

        }
    });
}





var last_id=0;
//get user information
function getTwinInfo(id) {
    last_id=id;
    //alert(last_id);
    var data = "user_id=" + id + "&todo=getTwinInfo";
    //console.log(data);
    $.ajax({
        type: "POST",
        url: 'server/myTwins.php',
        data: data, // appears as $_GET['id'] @ ur backend side
        success: function (data) {
            var jsonData = JSON.parse(data);
            console.log(jsonData);
            if (data !== "ERROR") {
                $('#twinTwitter').attr('href',"http://"+jsonData.twitter);



                // $("#admin_img_up").val(jsonData.img);

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