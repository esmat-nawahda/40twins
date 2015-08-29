/*price range*/



//View image in gallery when clicked
$('body').on('click', '.gallery', function(e) {
    $('#galleryModal img').attr('src', $(this).attr('data-img-url'));
});


$('body').on('click', '.youtube', function(e) {
    var yout_vid=$(this).attr('id').replace("watch?v=", "v/");
    $('#youtube_post').attr('src', yout_vid);
});



function loadMore()
{
    console.log("More loaded");
    $("#books_list").append("<div>");
    $(window).bind('scroll', bindScroll);
}

function bindScroll(){
    if($(window).scrollTop() + $(window).height() > $(document).height() - 100) {
        $(window).unbind('scroll');
        loadMore();
    }
}

$(window).scroll(bindScroll);



//FB share
function fbShare(url, title, descr, image, winWidth, winHeight) {
    var winTop = (screen.height / 2) - (winHeight / 2);
    var winLeft = (screen.width / 2) - (winWidth / 2);
    window.open('http://www.facebook.com/sharer.php?s=100&p[title]=' + title + '&p[summary]=' + descr + '&p[url]=' + url + '&p[images][0]=' + image, 'sharer', 'top=' + winTop + ',left=' + winLeft + ',toolbar=0,status=0,width=' + winWidth + ',height=' + winHeight);
    }
