<?php
//Route::get('/', function()
//{
//    return View::make('site.pages.home');
//});

Route::group(
   array(
       'prefix' => LaravelLocalization::setLocale(),
   ),
   function()
   {
       /** ADD ALL LOCALIZED ROUTES INSIDE THIS GROUP **/
       Route::get('/', function()
   {
       return View::make('site.pages.home');
   });

       Route::get('/test', function()
       {
           return View::make('site.pages.home') ;
       });

   });

/** OTHER PAGES THAT SHOULD NOT BE LOCALIZED **/