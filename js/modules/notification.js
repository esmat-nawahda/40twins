/**
 * Created by esmatn on 8/23/2015.
 */


$('body').on('click', '.notiItem', function() {
    //alert("hh");
    var notId=$('.notiItem').attr('id')

            var data="notId="+notId+"&todo=setNotiAsSeen";

            console.log(data);

            $.ajax({
                type: "POST",
                url: 'server/notification.php',
                data: data, // appears as $_GET['id'] @ ur backend side
                success: function (data) {
                    //var result = (data);
                    console.log(data);

                    if(data!=="ERROR") {
                        var jsonData = JSON.parse(data);
                        console.log(jsonData);



                    }else{
                        swal({
                            title: "ERROR",
                            text: "X",
                            type: "error"
                        });
                    }
                }
            });


});