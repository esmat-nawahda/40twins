$.routes.add('/', homeModule.goHome);



$.routes.add('/studio', studioModule.myProfile);
$.routes.add('/twins', twinsModule.myTwins);
$.routes.add('/users/{id:int}/', twinsModule.twinProfile);

$.routes.add('/newsfeed/{id:int}/', newsfeedModule.singlePost);
//$.routes.add('/profile/update', userModule.update);
//
//$.routes.add('/users/list', userModule.list);
//$.routes.add('/users/{id:int}/', userModule.userinfo);
//
//$.routes.add('/users/insert/', userModule.addReports);
//
//$.routes.add('/contact/', siteModule.contact);