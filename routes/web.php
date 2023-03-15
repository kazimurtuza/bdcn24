<?php

use Illuminate\Support\Facades\Route;

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


Route::group(['namespace' => 'App\Http\Controllers'], function () {
    /*frontend route start*/
    Route::group(['namespace' => 'Frontend'], function () {
        Route::get('/', 'HomeController@index')->name('frontend.home');
        Route::get('post-details', 'ArticleController@showArticleDetails')->name('frontend.article.details');



        Route::get('category-page-demo', 'DemoPageController@showCategoriesPage')->name('frontend.pages.demo.category');
        Route::get('division-page-demo', 'DemoPageController@showDivisionPage')->name('frontend.pages.demo.division');
        Route::get('search-page-demo', 'DemoPageController@showSearchPage')->name('frontend.pages.demo.search');


        Route::get('ads', 'AdvertiseController@showAdvertisePage')->name('frontend.page.advertise');
    });
    /*frontend route end*/



    /*backend route start*/
    Route::group(['namespace' => 'Backend'], function () {
        /*authentication route start*/
        Route::group(['namespace' => 'Auth', 'prefix' => 'admin/auth'], function () {
            Route::get('login', 'LoginController@showLogin')->name('admin.auth.login');
            Route::post('login', 'LoginController@submitLogin')->name('admin.auth.login');
            Route::get('logout', 'LoginController@logout')->name('admin.logout');

            Route::get('phone/otp/send', 'LoginController@phoneOtpCodeSend')->name('admin.phone.otp.send');

            Route::get('forgot-password', 'ForgotPasswordController@showForgotPassword')->name('admin.auth.forgot-password');
            Route::post('forgot-password', 'ForgotPasswordController@submitForgotPassword')->name('admin.auth.forgot-password');
        });
        /*authentication route end*/

        /*admin route start*/

        Route::group(['namespace' => 'Admin', 'prefix' => 'admin', 'middleware' => 'adminCheck'], function () {
            Route::get('/', 'DashboardController@showDashboard')->name('admin.dashboard');
            Route::get('blank-page', 'DashboardController@showBlankPage')->name('admin.blank-page');

            //  reporter
            Route::get('reporter/type', 'ReporterTypeController@reporterType')->name('admin.reporter.type');
            Route::post('reporter/type/store', 'ReporterTypeController@store')->name('admin.reporter.type.store');
            Route::post('reporter/type/edit', 'ReporterTypeController@reporterTypeEdit')->name('admin.reporter.type.edit');
            Route::get('reporter/type/info/get', 'ReporterTypeController@reporterTypeInfoGet')->name('admin.reporter.type.info');


            Route::get('reporter/role/show', 'ReporterRoleController@index')->name('admin.reporter.role');
            Route::post('reporter/role/store', 'ReporterRoleController@store')->name('admin.reporter.role.store');
            Route::get('reporter/role/info/get', 'ReporterRoleController@roleInfoGet')->name('admin.reporter.role.info');
            Route::post('reporter/role/update', 'ReporterRoleController@update')->name('admin.reporter.role.update');
            Route::get('reporter/role/status/change', 'ReporterRoleController@statusUpdate')->name('admin.reporter.role.status.change');
            Route::get('reporter/registration', 'ReporterController@registration')->name('admin.reporter.registration');
            Route::get('reporter/src', 'ReporterController@reporterSrc')->name('admin.get.reporter.src');

            Route::get('district/list/get', 'ReporterController@getDistrict')->name('admin.district.get');
            Route::get('thana/list/get', 'ReporterController@getThana')->name('admin.thana.get');

            Route::post('reporter/store', 'ReporterController@reporterStore')->name('admin.reporter.store');
            Route::get('reporter/list', 'ReporterController@reporterList')->name('admin.reporter.list');
            Route::get('reporter/details', 'ReporterController@reporterDetails')->name('admin.reporter.details');

            Route::post('reporter/experience/add', 'ReporterExperienceController@reporterExperienceAdd')->name('admin.reporter.experience.add');
            Route::post('reporter/education-info/store', 'ReporterController@reporterEducationInfoStore')->name('admin.reporter.education.info.store');
            Route::post('reporter/achievement/store', 'ReporterController@reporterAchievementStore')->name('admin.reporter.achievement.store');
            Route::post('reporter/personal/info/edit', 'ReporterController@reporterPersonalInfoUpdate')->name('admin.reporter.personal.info.edit');
            Route::post('reporter/basic/info/edit', 'ReporterController@reporterBasicInfoUpdate')->name('admin.reporter.basic.info.edit');
            Route::post('reporter/info/update', 'ReporterController@reporterInfoUpdate')->name('admin.reporter.info.update');
            Route::post('reporter/skill/update', 'ReporterController@reporterSkillUpdate')->name('admin.skill.store');
            Route::post('reporter/attachment/upload', 'ReporterController@attachmentUpdate')->name('admin.upload.reporter.attachment');


            Route::get('upload/image/upload', 'UploadController@imageUploadView')->name('admin.upload.image');
            Route::post('upload/image/upload', 'UploadController@uploadImage')->name('admin.upload.image.view');
            Route::post('upload/image/upload/save', 'UploadController@imgSave')->name('admin.upload.image.save');
            Route::get('upload/image/info/get', 'UploadController@imgInfoGet')->name('admin.upload.image.info.get');
            Route::post('media/img/data/edit', 'UploadController@imgDataUpdate')->name('media.img.data.edit');

            Route::get('media/img/data/edit/ajax', 'UploadController@imgDataUpdateAjax')->name('admin.ajax.media.image.update');
            Route::get('media/img/data/delete/ajax', 'UploadController@imgDataDeleteAjax')->name('admin.ajax.media.image.delete');



            Route::get('media/img/delete', 'UploadController@mediaImgDelete')->name('media.img.delete');
            Route::get('media/img/src', 'UploadController@mediaImgSrcList')->name('media.img.src');

            Route::get('upload/resource/image', 'UploadController@resourceImageUpload')->name('admin.upload.resource.image');


            Route::get('get/upload/img/list', 'UploadController@getUploadList')->name('admin.upload.image');
            Route::get('get/resource/img/list', 'UploadController@getResourceList')->name('admin.resource.image');

//          post

            Route::get('post/category/show', 'PostController@postCategoryShow')->name('admin.post.category.show');
            Route::get('post/sub-category/show', 'PostController@postSubcategoryShow')->name('admin.post.subcategory.show');
            Route::get('post/child-category/show', 'PostController@postChildcategoryShow')->name('admin.post.childCategory.show');
            Route::post('post/category/add', 'PostController@postCategoryAdd')->name('admin.post.category.add');
            Route::post('post/Subcategory/add', 'PostController@postSubcategoryAdd')->name('admin.post.subcategory.add');
            Route::get('post/Subcategory/edit/view', 'PostController@postSubcategoryEditView')->name('admin.post.subcategory.edit.view');
            Route::get('post/childCategory/edit/view', 'PostController@postChildCategoryEditView')->name('admin.post.childCategory.edit.view');
            Route::post('get/Subcategory/edit', 'PostController@postSubcategoryEdit')->name('admin.post.subcategory.edit');
            Route::post('get/category/edit/store', 'PostController@postCategoryEditStore')->name('admin.reporter.category.edit.store');
            Route::get('get/post/category/edit/data', 'PostController@getPostEditData')->name('admin.get.category.edit.data');

            Route::get('get/category/list/by-language', 'PostController@getLanguageWiseCategoryList')->name('admin.get.category.list.by-language');
            Route::get('get/sub-category/list/by-language', 'PostController@getLanguageWiseSubcategoryList')->name('admin.get.sub-category.list.by-language');
            Route::get('get/child-category/list/by-language', 'PostController@getLanguageWiseChildcategoryList')->name('admin.get.child-category.list.by-language');


            Route::get('get.post.category.item', 'PostController@getPostCategoryJs')->name('admin.get.post.category.item');

            Route::get('get/post/subcategory/list', 'PostController@getPostSubCategoryJs')->name('admin.get.post.subcategory.list');
            Route::get('get/post/child/category/list', 'PostController@getPostChildCategoryJs')->name('admin.get.post.child.category.list');

            Route::post('post/child/category/add', 'PostController@getPostChildCategoryAdd')->name('admin.post.child.category.add');

            Route::post('post/child/category/edit/store', 'PostController@editChildCategoryStore')->name('admin.post.child.category.edit.store');


//           start post
            Route::get('post/add/view', 'PostController@postAddView')->name('admin.post.add.view');
            Route::post('post/add', 'PostController@postAdd')->name('admin.post.add');
            Route::get('post/draft/list', 'PostController@draftList')->name('post.draft.list');
            Route::get('post/edit', 'PostController@postEdit')->name('post.edit');
            Route::post('post/update', 'PostController@postUpdate')->name('admin.post.update');

            Route::get('post/publish-post/list', 'PostController@allPublishPostList')->name('admin.publish.post.list');
            Route::get('post/featured', 'PostController@featured')->name('admin.featured.post.list');
            Route::get('post/featured/right', 'PostController@featuredRight')->name('admin.featured.right.list');
            Route::get('post/featured/left', 'PostController@featuredLeft')->name('admin.featured.left.list');
            Route::get('post/breaking', 'PostController@breaking')->name('admin.featured.breaking.list');
            Route::get('post/unpublish/post/list', 'PostController@unPublishPostList')->name('admin.unpublish.post.list');
            Route::get('post/pending/post/list', 'PostController@pendingPostList')->name('admin.pending.post.list');
            Route::get('post/schedule/post/list', 'PostController@schedulePostList')->name('admin.schedule.post.list');


            Route::get('post/Request/to/publish', 'PostController@publishRequest')->name('admin.post.publish.request');
            Route::get('post/publish', 'PostController@postPublish')->name('admin.post.publish');

            Route::get('post/change-to/pending', 'PostController@postSetPending')->name('post.change-to.pending');
            Route::get('post/change-to/unpublish', 'PostController@postSetUnPublish')->name('post.change-to.unpublish');


            Route::get('post/search/post/list', 'PostController@searchPlacePostList')->name('admin.search.post.search-list');
            Route::get('post/postPreview', 'PostController@postPreview')->name('admin.search.post');
            Route::get('post/list/search/data/get', 'PostController@getSrcPostLIst')->name('admin.src.post.list.get');
//           end post

        });

        /*admin route end*/
    });

});
