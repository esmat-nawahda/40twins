/**
 * Created by GeniuCode Pointer on 6/26/2015.
 */


function getMyInfo(){
    var data="todo=getMyInfo";
    //console.log(data);
    $.ajax({
        type: "POST",
        url: 'server/studio.php',
        data: data, // appears as $_GET['id'] @ ur backend side
        success: function (data) {
            var jsonData = JSON.parse(data);
            console.log(jsonData);
            if(data!=="ERROR") {
                $("#twitter_link_up").val(jsonData.twitter);
                $('#go_my_twitter').attr('href',"http://"+jsonData.twitter);
                $("#my_phone_up").val(jsonData.phoneno);

                // $("#admin_img_up").val(jsonData.img);

            }else{
                swal({
                    title: "Failed",
                    text: "Can't Return Your Personal Information",
                    type: "error"
                });
            }
        }
    });
}




$('body').on('click', '#twitter_btn_up', function() {
    //alert("hh");
    var twitter_link_up=document.getElementById("twitter_link_up").value;


    var data="twitter_link_up="+twitter_link_up+"&todo=twitter_up";

    $.ajax({
        type: "POST",
        url: 'server/studio.php',
        data: data, // appears as $_GET['id'] @ ur backend side
        success: function (data) {
            //var result = (data);
            console.log(data);

            if(data!=="ERROR") {
                var jsonData = JSON.parse(data);
                console.log(jsonData);


                $('#go_my_twitter').attr('href',"http://"+twitter_link_up);


            }else{
                swal({
                    title: "Editing Failed",
                    text: "ERROR",
                    type: "error"
                });
            }
        }
    });

});




$('body').on('click', '#phone_btn_up', function() {
    //alert("hh");
    var my_phone_up=document.getElementById("my_phone_up").value;


    var data="my_phone_up="+my_phone_up+"&todo=phone_up";

    $.ajax({
        type: "POST",
        url: 'server/studio.php',
        data: data, // appears as $_GET['id'] @ ur backend side
        success: function (data) {
            //var result = (data);
            console.log(data);

            if(data!=="ERROR") {
                var jsonData = JSON.parse(data);
                console.log(jsonData);



            }else{
                swal({
                    title: "Editing Failed",
                    text: "ERROR",
                    type: "error"
                });
            }
        }
    });

});
