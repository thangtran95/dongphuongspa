<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/','Home\HomeController@Index');
Route::get('/ve-chung-toi.html','Home\HomeController@AboutUs');
Route::get('/san-pham.html','Home\HomeController@Product');
Route::get('/tin-tuc.html','Home\HomeController@News');
Route::get('/lien-he.html','Home\HomeController@Contact');
Route::get('/hoi-dap.html','Home\HomeController@QA');
Route::get('/khuyen-mai.html','Home\HomeController@Promotion');
Route::get('/bang-gia.html','Home\HomeController@ListPrice');

Route::get('/chi-tiet-san-pham.html','Home\HomeController@ProductDetail');
Route::get('/chi-tiet-tin-tuc.html','Home\HomeController@NewsDetail');
Route::get('/chi-tiet-khuyen-mai.html','Home\HomeController@PromotionDetail');
Route::get('/chi-tiet-phau-thuat.html','Home\HomeController@ServiceDetail');
//================== Admin routes ================================

Route::get('/admin/login.html','Admin\UserController@getLogin');
Route::get('/admin/logout.html','Admin\UserController@GetLogout');
Route::post('/admin/login.html','Admin\UserController@postLogin');
Route::group(['middleware'=>'not.login','prefix'=>'/admin'],function (){
    Route::get('/','Admin\HomeController@getHome');
    Route::get('/profile.html','Admin\UserController@Profile');
    Route::Post('/profile.html','Admin\UserController@PostProfile');
    Route::Post('/change-password.html','Admin\UserController@UpdatePassword');
    //user
    Route::get('/user/list-user.html','Admin\UserController@GetAllUser');
    Route::get('/user/create-user.html','Admin\UserController@CreateUser');
    Route::post('/user/create-user.html','Admin\UserController@PostCreateUser');
    Route::get('/user/detail-user/{id}.html','Admin\UserController@DetailUser');
    Route::post('/user/detail-user/{id}.html','Admin\UserController@PostDetailUser');
    Route::post('/user/change-password/{id}.html','Admin\UserController@ChangePasswordUser');
    Route::get('/user/remove-user/{id}.html','Admin\UserController@RemoveUser');
    Route::get('/user/delete-user/{id}.html','Admin\UserController@DeleteUser');
    //slide
    Route::get('/slide/list-slide.html','Admin\SlideController@GetAllSlide');
    Route::get('/slide/create-slide.html','Admin\SlideController@CreateSlide');
    Route::post('/slide/create-slide.html','Admin\SlideController@PostCreateSlide');
    Route::get('/slide/detail-slide/{id}.html','Admin\SlideController@DetailSlide');
    Route::post('/slide/detail-slide/{id}.html','Admin\SlideController@PostDetailSlide');
    Route::get('/slide/remove-slide/{id}.html','Admin\SlideController@RemoveSlide');
    Route::get('/slide/delete-slide/{id}.html','Admin\SlideController@DeleteSlide');
    //list price
    Route::get('/price/list-price.html','Admin\ListPriceController@GetAllPrice');
    Route::get('/price/create-price.html','Admin\ListPriceController@CreatePrice');
    Route::post('/price/create-price.html','Admin\ListPriceController@PostCreatePrice');
    Route::get('/price/detail-price/{id}.html','Admin\ListPriceController@DetailPrice');
    Route::post('/price/detail-price/{id}.html','Admin\ListPriceController@PostDetailPrice');
    Route::get('/price/remove-price/{id}.html','Admin\ListPriceController@RemovePrice');
    Route::get('/price/delete-price/{id}.html','Admin\ListPriceController@DeletePrice');

    //report
    Route::get('/report/list-report.html','Admin\HomeController@GetAllReport');
    Route::get('/report/detail-report/{id}.html','Admin\HomeController@DetailReport');
    Route::post('/report/detail-report/{id}.html','Admin\HomeController@PostDetailReport');
    //info
    Route::get('/info/list-info.html','Admin\HomeController@GetAllInfo');
    Route::get('/info/detail-info/{id}.html','Admin\HomeController@DetailInfo');
    Route::post('/info/detail-info/{id}.html','Admin\HomeController@PostDetailInfo');
    //work time
    Route::get('/work-time/list-work-time.html','Admin\HomeController@GetAllWorkTime');
    Route::get('/work-time/create-work-time.html','Admin\HomeController@CreateWorkTime');
    Route::post('/work-time/create-work-time.html','Admin\HomeController@PostCreateWorkTime');
    Route::get('/work-time/detail-work-time/{id}.html','Admin\HomeController@DetailWorkTime');
    Route::post('/work-time/detail-work-time/{id}.html','Admin\HomeController@PostDetailWorkTime');
    Route::get('/work-time/remove-work-time/{id}.html','Admin\HomeController@RemoveWorkTime');
    Route::get('/work-time/delete-work-time/{id}.html','Admin\HomeController@DeleteWorkTime');

    //product
    Route::get('/product/list-product.html','Admin\ProductController@GetAllProduct');
    Route::get('/product/create-product.html','Admin\ProductController@CreateProduct');
    Route::post('/product/create-product.html','Admin\ProductController@PostCreateProduct');
    Route::get('/product/detail-product/{id}.html','Admin\ProductController@DetailProduct');
    Route::post('/product/detail-product/{id}.html','Admin\ProductController@PostDetailProduct');
    Route::get('/product/remove-product/{id}.html','Admin\ProductController@RemoveProduct');
    Route::get('/product/delete-product/{id}.html','Admin\ProductController@DeleteProduct');
    //comment
    Route::get('/comment/list-comment.html','Admin\CommentController@GetAllComment');
    Route::get('/comment/create-comment.html','Admin\CommentController@CreateComment');
    Route::post('/comment/create-comment.html','Admin\CommentController@PostCreateComment');
    Route::get('/comment/detail-comment/{id}.html','Admin\CommentController@DetailComment');
    Route::post('/comment/detail-comment/{id}.html','Admin\CommentController@PostDetailComment');
    Route::get('/comment/remove-comment/{id}.html','Admin\CommentController@RemoveComment');
    Route::get('/comment/delete-comment/{id}.html','Admin\CommentController@DeleteComment');

    //about
    Route::get('/about/about.html','Admin\AboutController@GetAllAbout');
    Route::get('/about/detail-about.html','Admin\AboutController@DetailAbout');
    Route::post('/about/detail-about.html','Admin\AboutController@PostDetailAbout');
    //AQ
    Route::get('/qa/qa.html','Admin\AboutController@GetAllQA');
    Route::get('/qa/detail-qa.html','Admin\AboutController@DetailQA');
    Route::post('/qa/detail-qa.html','Admin\AboutController@PostDetailQA');

    //banner
    Route::get('/banner/list-banner.html','Admin\AboutController@GetAllBanner');
    Route::get('/banner/detail-banner/{id}.html','Admin\AboutController@DetailBanner');
    Route::post('/banner/detail-banner/{id}.html','Admin\AboutController@PostDetailBanner');

    //contact
    Route::get('/contact/list-contact.html','Admin\ContactController@GetAllContact');
    Route::get('/contact/detail-contact/{id}.html','Admin\ContactController@DetailContact');
    Route::post('/contact/detail-contact/{id}.html','Admin\ContactController@PostDetailContact');
    Route::get('/contact/remove-contact/{id}.html','Admin\ContactController@RemoveContact');
    Route::get('/contact/delete-contact/{id}.html','Admin\ContactController@DeleteContact');
    //subscribe
    Route::get('/subscribe/list-subscribe.html','Admin\ContactController@GetAllSubscribe');
    Route::get('/subscribe/detail-subscribe/{id}.html','Admin\ContactController@DetailSubscribe');
    Route::post('/subscribe/detail-subscribe/{id}.html','Admin\ContactController@PostDetailSubscribe');
    Route::get('/subscribe/remove-subscribe/{id}.html','Admin\ContactController@RemoveSubscribe');
    Route::get('/subscribe/delete-subscribe/{id}.html','Admin\ContactController@DeleteSubscribe');

    //team
    Route::get('/team/list-team.html','Admin\TeamController@GetAllTeam');
    Route::get('/team/create-team.html','Admin\TeamController@CreateTeam');
    Route::post('/team/create-team.html','Admin\TeamController@PostCreateTeam');
    Route::get('/team/detail-team/{id}.html','Admin\TeamController@DetailTeam');
    Route::post('/team/detail-team/{id}.html','Admin\TeamController@PostDetailTeam');
    Route::get('/team/remove-team/{id}.html','Admin\TeamController@RemoveTeam');
    Route::get('/team/delete-team/{id}.html','Admin\TeamController@DeleteTeam');

    //news
    Route::get('/news/list-news.html','Admin\NewsController@GetAllNews');
    Route::get('/news/create-news.html','Admin\NewsController@CreateNews');
    Route::post('/news/create-news.html','Admin\NewsController@PostCreateNews');
    Route::get('/news/detail-news/{id}.html','Admin\NewsController@DetailNews');
    Route::post('/news/detail-news/{id}.html','Admin\NewsController@PostDetailNews');
    Route::get('/news/remove-news/{id}.html','Admin\NewsController@RemoveNews');
    Route::get('/news/delete-news/{id}.html','Admin\NewsController@DeleteNews');

    //promotion
    Route::get('/promotion/list-promotion.html','Admin\PromotionController@GetAllPromotion');
    Route::get('/promotion/create-promotion.html','Admin\PromotionController@CreatePromotion');
    Route::post('/promotion/create-promotion.html','Admin\PromotionController@PostCreatePromotion');
    Route::get('/promotion/detail-promotion/{id}.html','Admin\PromotionController@DetailPromotion');
    Route::post('/promotion/detail-promotion/{id}.html','Admin\PromotionController@PostDetailPromotion');
    Route::get('/promotion/remove-promotion/{id}.html','Admin\PromotionController@RemovePromotion');
    Route::get('/promotion/delete-promotion/{id}.html','Admin\PromotionController@DeletePromotion');

    //menu
    Route::get('/menu/list-menu.html','Admin\MenuController@GetAllMenu');
    Route::get('/menu/detail-menu/{id}.html','Admin\MenuController@DetailMenu');
    Route::post('/menu/detail-menu/{id}.html','Admin\MenuController@PostDetailMenu');
    Route::get('/menu/remove-menu/{id}.html','Admin\MenuController@RemoveMenu');
    Route::get('/menu/delete-menu/{id}.html','Admin\MenuController@DeleteMenu');

    Route::get('/menu/create-sub-menu/{id}.html','Admin\MenuController@CreateSubMenu');
    Route::post('/menu/create-sub-menu/{id}.html','Admin\MenuController@PostCreateSubMenu');
    Route::get('/menu/detail-sub-menu/{id}.html','Admin\MenuController@DetailSubMenu');
    Route::post('/menu/detail-sub-menu/{id}.html','Admin\MenuController@PostDetailSubMenu');

    //service
    Route::get('/service/list-service.html','Admin\MenuController@GetAllService');
    Route::get('/service/create-service.html','Admin\MenuController@CreateService');
    Route::post('/service/create-service.html','Admin\MenuController@PostCreateService');
    Route::get('/service/detail-service/{id}.html','Admin\MenuController@DetailService');
    Route::post('/service/detail-service/{id}.html','Admin\MenuController@PostDetailService');
    Route::get('/service/remove-service/{id}.html','Admin\MenuController@RemoveService');
    Route::get('/service/delete-service/{id}.html','Admin\MenuController@DeleteService');
    //menu right
    Route::get('/menu-right/list-menu-right.html','Admin\MenuController@GetAllMenuRight');
    Route::get('/menu-right/detail-menu-right/{id}.html','Admin\MenuController@DetailMenuRight');
    Route::post('/menu-right/detail-menu-right/{id}.html','Admin\MenuController@PostDetailMenuRight');

    //config
    Route::get('/config/list-config.html','Admin\MenuController@GetAllConfig');
    Route::get('/config/detail-config/{id}.html','Admin\MenuController@DetailConfig');
    Route::post('/config/detail-config/{id}.html','Admin\MenuController@PostDetailConfig');

});


