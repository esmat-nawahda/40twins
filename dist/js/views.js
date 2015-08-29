
function buildPostItem(pid,group_id,user_id,title,content,datetime,img,youtube_url,fullname,img_dir){

    //var trimedDesc=trimString(bdesc);
    var html='<div id="'+pid+'" class="col-sm-12">'
        +'<div>'
        +'<ul class="timeline">'

            //<!-- timeline time label -->
        +'<li class="time-label">'
        +'<span style="background-color: #00517e">'
        +'<a href="#/" style="color: white"><img class=" profile-pic" style="height: 60px; width: 60px;" src="uploads/users/'+img_dir+'" /></a>'
        +'</span>'
        +'<span style="background-color: transparent">'
        +'<a href="#/users/'+user_id+'/" style="color: white; font-size: x-large">'+fullname+'</a>'
        +'</span>'
        +'</li>'
            //<!-- /.timeline-label -->
        +'<!-- timeline item -->'
        +'<li    >'
        +'<i class="fa fa-comment-o bg-blue"></i>'
        +'<div class="timeline-item">'
        +'<span class="time"><i class="fa fa-clock-o"></i> '+datetime+'</span>'
        +'<h3 class="timeline-header"><a href="#/newsfeed/'+pid+'/">'+title+'</a></h3>'
        +'<div class="timeline-body"  style="white-space: pre-line">'

        +content
        +'</div>'
        +'<div class="timeline-body"  style="white-space: pre-line">';

            if(img!=null&&img!=""){
                html+='<a href="#galleryModal" data-toggle="modal" data-img-url="uploads/posts/'+img+'" class="gallery"><img class="img_post" height="100px" width="100px" src="uploads/posts/'+img+'"></a><br>';
            }

        if(youtube_url!=null&&youtube_url!=""){
            html+='<div><div style="clear: both;">&nbsp;</div>'
                //+'<a href="#galleryModal" data-toggle="modal" data-img-url="uploads/posts/'+img+'" class="btn btn-primary gallery"><i class="fa fa-picture-o"></i>Show Image</a><br>'
            +'<a class="btn icon-btn btn-primary youtube"  href="#youtubeModal" data-toggle="modal" id="'+youtube_url+'"><span class="glyphicon btn-glyphicon  fa fa-youtube img-circle text-info"></span>Video</a>'
                //+'<a href="#youtubeModal" data-toggle="modal" id="'+youtube_url+'" class="btn btn-primary youtube"><i class=" fa fa-youtube"></i> Video</a>'
            +'</div>';
        }

        html+='</div>'


        //+'<div class="timeline-footer">'
        //+'<a class="btn icon-btn btn-success" href="#"><span class="glyphicon btn-glyphicon fa fa-comments-o img-circle text-success"></span>View Comments</a>'
        //+'<a class="btn icon-btn btn-danger" href="#"><span class="glyphicon btn-glyphicon fa fa-times img-circle text-danger"></span>Delete</a>'
        //+'</div>'
        +'</div>'
        +'</li>'




        +'<li>'
        +'<i class="fa fa-clock-o bg-gray"></i>'
        +'</li>'
        +'</ul>'
        +'<div>&nbsp</div>'
        +'</div>';
    return html;
}



function buildMyTwinItem(id,email,birthdate,country,instagram,fb,twitter,gender,fullname,img_dir){
    var html='<div class="col-lg-3 col-sm-6">'

        +'<div class="card hovercard">'
        +'<div class="cardheader">'

        +'</div>'
        +'<div class="avatar">'
        +'<img alt=""  src="uploads/users/'+img_dir+'">'
        +'</div>'
        +'<div class="info">'
        +'<div class="title">'
        +'<a href="#/users/'+id+'/">'+fullname+'</a>'
        +'</div>'
        if(country!==null) {
            html+='<div class="desc">' + country + '</div>'
        }
        if(birthdate!==null) {
            html += '<div class="desc">' + birthdate + '</div>'
        }
        if(gender!==null) {
            html +='<div class="desc">' + gender + '</div>'
        }
        html +='</div>'
        +'<div class="bottom">'
        +'<a class="btn btn-primary btn-twitter btn-sm" href="'+twitter+'">'
        +'<i class="fa fa-twitter"></i>'
        +' </a>'
        +'<a class="btn btn-danger btn-sm" rel="publisher"'
        +'href="'+email+'">'
        +' <i class="fa fa-google-plus"></i>'
        +' </a>'
        +' <a class="btn btn-primary btn-sm" rel="publisher"'
        +' href="'+fb+'">'
        +'    <i class="fa fa-facebook"></i>'
        +' </a>'
        +' <a class="btn btn-warning btn-sm" rel="publisher" href="'+instagram+'">'
        +'      <i class="fa fa-instagram"></i>'
        +'   </a>'
        +' </div>'
        +'</div>'



        +'</div>';
    return html;
}


function buildCommentItem(cmtId,user_id,post_id,content,datetime,fullname,img_dir){
    var html='<article class="row" id="'+cmtId+'">'
        +'<div class="col-md-2 col-sm-2 hidden-xs">'
        +'<figure class="thumbnail">'
        +'<img style="height:88px; width:80px;" id="singleCmtUserImg" class="img-responsive" src="uploads/users/'+img_dir+'" />'
            //+'<figcaption class="text-center" id="singleCmtFullname">'+fullname+'</figcaption>'
        +'</figure>'
        +'</div>'
        +'<div class="col-md-10 col-sm-10">'
        +'<div class="panel panel-default arrow left">'
        +'<div class="panel-body">'
        +' <header class="text-left">'
        +'<a href="#/users/'+user_id+'/"><h3>'+fullname+'</h3></a>'
        +'<time class="comment-date" datetime="16-12-2014 01:05"><i class="fa fa-clock-o"></i> '+datetime+'</time>'
        +'</header>'
        +'<div class="comment-post">'
        +'<p id="singlePostContent">'
        +content
        +'</p>'
        +'</div>'
            //+'<p class="text-right"><a href="#" class="btn btn-default btn-sm"><i class="fa fa-reply"></i> reply</a></p>'
        +'</div>'
        +'</div>'
        +'</div>'
        +'</article>';

    return html;
}




function buildNotificationItem(notId,post_id,content,datetime){
    var html='<li class="notiItem" id="'+notId+'"><a href="#/newsfeed/'+post_id+'/"> <span class="timeline-body" style="font-size: 12px;">'+content+" - "+datetime+'</span><br></a></li>'

        +'</article>';

    return html;
}

































function buildAdminPaginationItem(num){

    var html='<li class="page_click';
    if(num==1){
        html=html+' active';
    }
    html=html+'" id="'+num+'" ><a href="#/admins/list/">'+num+'</a></li>';
//alert(html);
    return html;
}


function buildAdItem(id,title,content,img,due_date){

    var trimedDesc=trimString(content);
    var html='<div id="'+id+'" class="col-sm-4">'
        +'<div class="product-image-wrapper">'
        +'<div class="single-products">'
        +'<div class="productinfo text-center">'
        +'<img class="book_img" src="ads_imgs/'+img+'" alt="" />'
        +'<h2>'+title+'</h2>'
        +'<p>'+trimedDesc+'</p>'
        +'<a href="#infoModal"  data-toggle="modal"  class="btn btn-default add-to-cart ad_info" id="'+id+'"><i class="fa fa-info-circle"></i>'+vars.desc+'</a>'
        +'</div>'
        +'<div class="product-overlay">'
        +'<div class="overlay-content">'
        +'<h2>'+title+'</h2>'
        +'<p>'+trimedDesc+'</p>'
        +'<a href="#infoModal"  data-toggle="modal"  class="btn btn-default add-to-cart ad_info" id="'+id+'"><i class="fa fa-info-circle"></i>'+vars.desc+'</a><br>'
        +'<a href="#galleryModal" data-toggle="modal" data-img-url="ads_imgs/'+img+'" class="btn btn-default add-to-cart ad_info gallery"><i class="fa fa-picture-o"></i>'+vars.show_img+'</a>'
        +'</div>'
        +'</div>'
        +'</div>'
        +'<div class="choose text-center">'
        + '<span>'+vars.due_date+' : '+due_date+'</span>'
        +'</div>'
        +'</div>'
        +'</div>';
    return html;
}

function buildAdPaginationItem(num){

    var html='<li class="ads_page_click';
    if(num==1){
        html=html+' active';
    }
    html=html+'" id="'+num+'" ><a href="#/ads/list/">'+num+'</a></li>';
//alert(html);
    return html;
}

function buildUserPaginationItem(num){

    var html='<li class="users_page_click';
    if(num==1){
        html=html+' active';
    }
    html=html+'" id="'+num+'" ><a href="#/users/list/">'+num+'</a></li>';
//alert(html);
    return html;
}


function buildAdminListRow(id,username,husbandname,wifename,husbandage,wifeage,address,city,email){
	var html='<tr id='+id+'>'
        +'<td>'+husbandname+" | "+husbandage+'</td>'
        +'<td>'+wifename+" | "+wifeage+'</td>'

	     +'<td>'+address+'</td>'
        +'<td>'+city+'</td>'
        +'<td>'+'<a href="#/users/'+id+'/" class="btn btn-info">Press</a>'+'</td>'
	+'</tr>';
	
	return html;
}

function buildBookListRow(id,title,bdesc,bfile,bimg){
    var html='<tr id='+id+'>'
        +'<td>'+title+'</td>'
        +'<td>'+nl2br(trimString(bdesc))+'</td>'
        +'<td><a href="#galleryModal" data-toggle="modal" data-img-url="'+upload_dir+'books/imgs/'+bimg+'" class="gallery">Image</a></td>'
        +'<td><a href="'+upload_dir+'books/files/'+bfile+'">Download</a></td>'
        +'<td><a href="#/books/list/" id='+id+' class="btn btn-danger btn-flat delete_book">Delete</a></td>'
        +'<td><a href="#book_updateModal" role="button" data-toggle="modal" class="btn btn-default btn-flat get_book_data" id='+id+'>Edit</a></td>'

        +'</tr>';

    return html;
}

function buildAdListRow(id,title,content,img,pub_date,due_date){
    var html='<tr id='+id+'>'
        +'<td>'+title+'</td>'
        +'<td>'+nl2br(trimString(content))+'</td>'
        +'<td>'+pub_date+'</td>'
        +'<td>'+due_date+'</td>'
        +'<td><a href="#galleryModal" data-toggle="modal" data-img-url="'+upload_dir+'ads/imgs/'+img+'" class="gallery">Image</a></td>'

        +'<td><a href="#/ads/list/" id='+id+' class="btn btn-danger btn-flat delete_ad">Delete</a></td>'
        +'<td><a href="#ad_updateModal" role="button" data-toggle="modal" class="btn btn-default btn-flat get_ad_data" id='+id+'>Edit</a></td>'

        +'</tr>';

    return html;
}


function buildUserListRow(id,username,firstname,lastname,password,bdate,phone,email,type,dept){
    var html='<tr id='+id+'>'
        +'<td>'+username+'</td>'
        +'<td>'+firstname+'</td>'
        +'<td>'+lastname+'</td>'
        +'<td>'+password+'</td>'
        +'<td>'+bdate+'</td>'
        +'<td>'+phone+'</td>'
        +'<td>'+email+'</td>'
        +'<td>'+type+'</td>'
        +'<td>'+dept+'</td>'

        +'<td><a href="#/users/list/" id='+id+' class="btn btn-danger btn-flat delete_user">Delete</a></td>'
        +'<td><a href="#user_updateModal" role="button" data-toggle="modal" class="btn btn-default btn-flat get_user_data" id='+id+'>Edit</a></td>'

        +'</tr>';

    return html;
}


function buildDeptListItem(dept_id,dept_name){
    var html='<option value="'+dept_id+'">'+dept_name+'</option>';

    return html;
}


function buildDeptListRow(dept_id,d_title,dept_name,d_desc,d_boss){
    var html='<tr id='+dept_id+'>'
        +'<td>'+d_title+'</td>'
        +'<td>'+dept_name+'</td>'
        +'<td>'+d_desc+'</td>'
        +'<td>'+d_boss+'</td>'


        +'<td><a href="#/depts/list/" id='+dept_id+' class="btn btn-danger btn-flat delete_dept">Delete</a></td>'
        +'<td><a href="#dept_updateModal" role="button" data-toggle="modal" class="btn btn-default btn-flat get_dept_data" id='+dept_id+'>Edit</a></td>'

        +'</tr>';

    return html;
}



function buildActListRow(id,title,content,afile,pub_date){
    var html='<tr id='+id+'>'
        +'<td>'+title+'</td>'
        +'<td>'+nl2br(trimString(content))+'</td>'
        +'<td>'+pub_date+'</td>'
        +'<td><a href="#galleryModal" data-toggle="modal" data-img-url="'+upload_dir+'acts/imgs/'+afile+'" class="gallery">Image</a></td>'

        +'<td><a href="#/acts/list/" id='+id+' class="btn btn-danger btn-flat delete_act">Delete</a></td>'
        +'<td><a href="#act_updateModal" role="button" data-toggle="modal" class="btn btn-default btn-flat get_act_data" id='+id+'>Edit</a></td>'

        +'</tr>';

    return html;
}


function buildActPaginationItem(num){

    var html='<li class="acts_page_click';
    if(num==1){
        html=html+' active';
    }
    html=html+'" id="'+num+'" ><a href="#/acts/list/">'+num+'</a></li>';
//alert(html);
    return html;
}



function buildPlanListRow(id,title,content,pfile,dept_id){
    var html='<tr id='+id+'>'
        +'<td>'+title+'</td>'
        +'<td>'+nl2br(trimString(content))+'</td>'

        +'<td><a href="#galleryModal" data-toggle="modal" data-img-url="'+upload_dir+'plans/imgs/'+pfile+'" class="gallery">Image</a></td>'
        +'<td>'+dept_id+'</td>'
        +'<td><a href="#/plans/list/" id='+id+' class="btn btn-danger btn-flat delete_plan">Delete</a></td>'
        +'<td><a href="#plan_updateModal" role="button" data-toggle="modal" class="btn btn-default btn-flat get_plan_data" id='+id+'>Edit</a></td>'

        +'</tr>';

    return html;
}


function buildPlanPaginationItem(num){

    var html='<li class="plans_page_click';
    if(num==1){
        html=html+' active';
    }
    html=html+'" id="'+num+'" ><a href="#/plans/list/">'+num+'</a></li>';
//alert(html);
    return html;
}




////Exams

function buildExamListRow(id,title,content,pfile,dept_id){
    var html='<tr id='+id+'>'
        +'<td>'+title+'</td>'
        +'<td>'+nl2br(trimString(content))+'</td>'

        +'<td><a href="#galleryModal" data-toggle="modal" data-img-url="'+upload_dir+'exams/imgs/'+pfile+'" class="gallery">Image</a></td>'
        +'<td>'+dept_id+'</td>'
        +'<td><a href="#/exams/list/" id='+id+' class="btn btn-danger btn-flat delete_exam">Delete</a></td>'
        +'<td><a href="#exam_updateModal" role="button" data-toggle="modal" class="btn btn-default btn-flat get_exam_data" id='+id+'>Edit</a></td>'

        +'</tr>';

    return html;
}


function buildExamPaginationItem(num){

    var html='<li class="exams_page_click';
    if(num==1){
        html=html+' active';
    }
    html=html+'" id="'+num+'" ><a href="#/exams/list/">'+num+'</a></li>';
//alert(html);
    return html;
}


////Courses

function buildCourseListRow(id,title,content,pfile,dept_id){
    var html='<tr id='+id+'>'
        +'<td>'+title+'</td>'
        +'<td>'+nl2br(trimString(content))+'</td>'

        +'<td><a href="#galleryModal" data-toggle="modal" data-img-url="'+upload_dir+'courses/imgs/'+pfile+'" class="gallery">Image</a></td>'
        +'<td>'+dept_id+'</td>'
        +'<td><a href="#/courses/list/" id='+id+' class="btn btn-danger btn-flat delete_course">Delete</a></td>'
        +'<td><a href="#course_updateModal" role="button" data-toggle="modal" class="btn btn-default btn-flat get_course_data" id='+id+'>Edit</a></td>'

        +'</tr>';

    return html;
}


function buildCoursePaginationItem(num){

    var html='<li class="courses_page_click';
    if(num==1){
        html=html+' active';
    }
    html=html+'" id="'+num+'" ><a href="#/courses/list/">'+num+'</a></li>';
//alert(html);
    return html;
}



////Seniors

function buildSeniorListRow(id,sname,sdesc,sby,sdate,slink,dept_id){
    var html='<tr id='+id+'>'
        +'<td>'+sname+'</td>'
        +'<td>'+nl2br(trimString(sdesc))+'</td>'
        +'<td>'+sdate+'</td>'

        +'<td><a href="'+upload_dir+'seniors/files/'+slink+'">Download</a></td>'
        +'<td>'+dept_id+'</td>'
        +'<td><a href="#/seniors/list/" id='+id+' class="btn btn-danger btn-flat delete_senior">Delete</a></td>'
        +'<td><a href="#senior_updateModal" role="button" data-toggle="modal" class="btn btn-default btn-flat get_senior_data" id='+id+'>Edit</a></td>'

        +'</tr>';

    return html;
}


function buildSeniorPaginationItem(num){

    var html='<li class="seniors_page_click';
    if(num==1){
        html=html+' active';
    }
    html=html+'" id="'+num+'" ><a href="#/seniors/list/">'+num+'</a></li>';
//alert(html);
    return html;
}




///Student
function buildStudentListRow(id,username,firstname,lastname,password,bdate,phone,email,type,dept){
    var html='<tr id='+id+'>'
        +'<td>'+username+'</td>'
        +'<td>'+firstname+'</td>'
        +'<td>'+lastname+'</td>'
        +'<td>'+bdate+'</td>'
        +'<td>'+phone+'</td>'
        +'<td>'+email+'</td>'
        +'<td>'+dept+'</td>'

        +'<td><a href="#chatModal" role="button" data-toggle="modal" id='+id+' class="btn btn-default btn-flat chat_student">Chat With Me!</a></td>'

        +'</tr>';

    return html;
}

function buildStudentPaginationItem(num){

    var html='<li class="students_page_click';
    if(num==1){
        html=html+' active';
    }
    html=html+'" id="'+num+'" ><a href="#/students/list/">'+num+'</a></li>';
//alert(html);
    return html;
}


function buildMsgListRow(id,mfrom,mto,mcontent,mdate,mtime,mseen,inst_id){

    var html='<li>';
    html+='<span class="';
    if(inst_id==mto) html+='right';
    else html+='left';

    html+='" alt="'+mdate+" "+mtime+'">'+mcontent+'</span>';
    html+='<div class="clear"></div>';
    html+='</li>';

//alert(html);
    return html;
}




function bulidMsgItem(id,to_id,from_id,content){
    html='<li>';
    html+='<a href="#/students/list/" id="'+id+'" class="delete_noti">';
    //html+='<div class="pull-left">';
    //html+='<img src="dist/img/user3-128x128.jpg" class="img-circle" alt="user image"/>';
    //html+='</div>';
    //html+='<h4>';
    //html+='<small><i class="fa fa-clock-o"></i> Yesterday</small>';
    //html+='</h4>';
    html+='<p>'+content+'</p>';
    html+='</a>';
    html+='</li>';

    return html;
}



function buildNotiListRow(id,to_id,from_id,content){

    var html='<tr id="'+id+'" class="delete_noti"><a href="#/students/list" style="cursor: hand;"/>'
        +'<td>'+content+'</td>'

        +'</a></tr>';

    return html;
}