<?php

use Illuminate\Support\Facades\Route;
use TCG\Voyager\Facades\Voyager;

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::get('/', 'IndexController@index');
Route::prefix('{locale?}')->middleware('locale')->group(function() {
    Route::get('/', 'IndexController@showHomePage')->name('home');
    Route::get('privacy-policy', 'IndexController@showPrivacyPolicy')->name('show-privacy-policy');
    Route::get('cookie-policy', 'IndexController@showCookiePolicy')->name('show-cookie-policy');
    Route::get('404', 'IndexController@showNotFoundPage')->name('show-404');

    Route::get('company-profile', 'CompanyPageController@showProfilePage')->name('company-profile');
    Route::get('company-philosophy', 'CompanyPageController@showPhilosophyPage')->name('company-philosophy');
    Route::get('company-history', 'CompanyPageController@showHistoryPage')->name('company-history');
    Route::get('company-distribution/{country?}', 'CompanyPageController@showDistributionPage')->name('company-distribution');
    Route::get('company-distribution-europe/{country?}', 'CompanyPageController@showDistributionEuropePage')->name('company-distribution-europe');

    Route::get('categories/', 'CategoryController@index')->name('show-categories');
    Route::get('categories/{slug}', 'ProductController@showByCategory')->name('show-products-by-category');
    Route::get('categories/{slug}/products/{productId}', 'ProductController@show')->name('show-product');
    Route::get('brands/{brandId}/categories/{categorySlug}', 'ProductController@showByBrandAndCategory')->name('show-products-by-brand');
    Route::get('lines/{slug}', 'ProductController@showByLine')->name('show-products-by-line');
    Route::get('designers/{slug}', 'ProductController@showByDesigner')->name('show-products-by-designer');
    Route::any('search', 'ProductController@search')->name('search');

    Route::get('design-center/layouts', 'DesignCenterController@showLayouts')->name('show-salon-layouts');
    Route::get('design-center/pictures', 'DesignCenterController@showPictures')->name('show-salon-pictures');
    Route::get('design-center/showrooms', 'DesignCenterController@showShowrooms')->name('show-salon-showrooms');
    Route::get('design-center/planner', 'DesignCenterController@showPlanner')->name('show-planner');

    Route::get('news', 'NewsController@index')->name('show-news-list');
    Route::get('news/{newsId}', 'NewsController@show')->name('show-news');
    Route::get('news/categories/{newsCategoryId}', 'NewsController@showByCategory')->name('show-news-by-category');

    Route::get('contact/emails', 'ContactsPageController@showEmailsPage')->name('show-contact-emails');
    Route::get('contact/info', 'ContactsPageController@showInfoRequestPage')->name('show-info-form');
    Route::post('contact/info', 'ContactsPageController@handleInfoRequest')->name('handle-info-form');
    Route::get('contact/application', 'ContactsPageController@showSendApplicationPage')->name('show-application-form');
    Route::post('contact/application', 'ContactsPageController@handleSendApplication')->name('handle-send-application');
    Route::get('contact/catalog-request', 'ContactsPageController@showCatalogRequestPage')->name('show-catalog-request-form');
    Route::post('contact/catalog-request', 'ContactsPageController@handleCatalogRequest')->name('handle-catalog-request');

    //delete images table
    //change relations for manyToMany
    //material_category
});
