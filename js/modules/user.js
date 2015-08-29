/**
 * Created by GeniuCode Pointer on 6/9/2015.
 */


//register new admin
$('body').on('click', '#signupBtn_reg', function() {
    //alert("hh");
    var fullname_reg=document.getElementById("fullname_reg").value;
    var username_reg=document.getElementById("username_reg").value;
    var password_reg=document.getElementById("password_reg").value;
    var repassword_reg=document.getElementById("repassword_reg").value;
    var img_reg=document.getElementById("img_reg").value.replace(/C:\\fakepath\\/i, '');


    if(fullname_reg===""||username_reg===""||password_reg===""||repassword_reg===""||img_reg===""){
        swal("Error!", "Fill the boxes to continue!", "error");
    }
    else{

        if(password_reg!==repassword_reg){
            swal("Passwords Mismatch!", "Passwords are not equals!", "error");
        }
        else{
            var data="fullname_reg="+fullname_reg+"&username_reg="+username_reg+"&password_reg="+password_reg+"&img_reg="+img_reg+"&todo=user_reg";
            console.log(data);
            $.ajax({
                type: "POST",
                url: 'server/tuser.php',
                data: data, // appears as $_GET['id'] @ ur backend side
                success: function (data) {
                    //var result = (data);
                    console.log(data);

                    if(data!=="ERROR") {
                        swal({
                            title: "Hey "+fullname_reg+" .. Congrats!",
                            text: "We Will Do The Best To Find Your Twins As Speed As Possible",
                            type: "success"
                        });

                        //get last id and send it to img upload


                        //file to be uploaded
                        var file_data = $('#img_reg').prop('files')[0];
                        var form_data = new FormData();
                        form_data.append('file', file_data)

                        $.ajax({
                            url : 'upload.php?f1=users', // point to server-side PHP script
                            dataType : 'text', // what to expect back from the PHP script, if anything
                            cache : false,
                            contentType : false,
                            processData : false,
                            data : form_data,
                            type : 'post',
                            success : function(php_script_response) {

                            }
                        });

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
    }
});




//login to the system
$('body').on('click', '#loginBtn_log', function() {

    var username=document.getElementById("username_log").value;
    var password=document.getElementById("password_log").value;
    //alert(username+" "+password);


    if(username===""||password===""){
        swal("Error!", "Fill the boxes to continue!", "error");
    }
    else{
        var data="username="+username+"&password="+password+"&todo=login";
        //console.log(data);
        $.ajax({
            type: "POST",
            url: 'server/tuser.php',
            data: data, // appears as $_GET['id'] @ ur backend side
            success: function (data) {
                var result = JSON.parse(data);
                //my_type=result.type;
                console.log(result);
                //alert(data);
//                    var result = $.parseJSON(data);
                // data is ur summary
//                        $('#Edit').html(data);
                if(result!=="ERROR") {
                    swal({
                        title: "Login successfully",
                        text: "Welcome Again " + username+ " - Please, don't forget to make some fun before leaving",
                        type: "success",
                        timer: 2000
                    });


                    localStorage.setItem("username",username);
                    localStorage.setItem("fullname",result.fullname);
                    localStorage.setItem("user_id",result.id);
                    localStorage.setItem("group_id",result.group_id);


                    setTimeout(function(){window.location="index.php#/"},2000);
                }else{
                    swal({
                        title: "Login Failed",
                        text: "Error in username or password",
                        type: "error"
                    });
                }
            }
        });
    }
});


//logout from the system
$('body').on('click', '#user_logout', function() {
    swal({
            title: "Are you sure?",
            text: "Logout!",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Yes, logout!",
            closeOnConfirm: false },
        function(){
            var data="todo=logout";
            $.ajax({
                type: "POST",
                url: 'server/tuser.php',
                data: data, // appears as $_GET['id'] @ ur backend side
                success: function (data) {
                    // data is ur summary
                    //                        $('#Edit').html(data);

                    //
                    localStorage.removeItem("username");
                    localStorage.removeItem("fullname");
                    localStorage.removeItem("user_id");
                    localStorage.removeItem("group_id");


                    swal("Done!", "Your have been logout from your account successfully.", "success");
                    window.location="login.php";


                }
            });
        }
    );
});