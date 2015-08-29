/**
 * Created by GeniuCode Pointer on 2/24/2015.
 */
//    When a href clicked
$('a').click(function(e){

    var href = this.href;  // get href from link
    e.preventDefault();  // don't follow the link
    //alert(href);
    document.location = href;  // redirect browser to link

});
//return my data
//getMyData();

//Modules
var homeModule = {
    goHome: function() {
        $('#main_container').load('pages/newsfeed.php').show();
        getPostsByGroup1st();
    }
};

var studioModule = {
    myProfile: function() {
        $('#main_container').html("");
        $('#main_container').load('pages/studio.php').show();
        getMyInfo();
    }
};

var twinsModule = {
    myTwins: function() {
        $('#main_container').html("");
        $('#main_container').load('pages/myTwins.php').show();
        getMyTwins();
    },
    twinProfile: function() {
        $('#main_container').html("");
        $('#main_container').load('pages/twinStudio.php?id='+this.id).show();
        getTwinInfo(this.id);
    }
};



var newsfeedModule = {
    singlePost: function() {
        $('#main_container').html("");
        $('#main_container').load('pages/singlePost.php?id='+this.id).show();
        getSinglePost(this.id);
        getCommentsByPostID(this.id);
    }
};


