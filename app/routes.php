<?php

Event::listen('illuminate.query', function($sql)
{
//    Log::error($sql);
//    var_dump($sql);
});


Route::get('test',function(){

        return Country::with('continent')->get();
//        return City::groupBy('name')->with('state')->get()->take(100);
//    return LaravelLocalization::getSupportedLocales();
//    return University::with(['zip', 'zip.city', 'zip.city.state', 'zip.city.state.country', 'zip.city.state.country.continent'])->first();


});

Route::when('dashboard*', 'csrf', ['post', 'put', 'patch']);

Route::group(['prefix' => LaravelLocalization::setLocale()], function()
{
    
    //    Home routes
    Route::get('/', ['as' => 'home', 'uses' => 'PagesController@home']);


    //    About routes
    Route::get('about', ['as' => 'about', 'uses' => 'PagesController@about']);
    Route::get('about/message-from-co-founders', ['as' => 'about.message', 'uses' => 'PagesController@aboutMessage']);
    Route::get('about/mission-and-vision', ['as' => 'about.mission', 'uses' => 'PagesController@aboutMission']);
    Route::get('about/epro-360-at-a-glance', ['as' => 'about.glance', 'uses' => 'PagesController@aboutGlance']);
    Route::get('about/what-set-us-apart', ['as' => 'about.apart', 'uses' => 'PagesController@aboutApart']);
    Route::get('about/epro-360-team', ['as' => 'about.team', 'uses' => 'PagesController@aboutTeam']);


    //    Epro 360 Network routes
    Route::get('network', ['as' => 'network', 'uses' => 'PagesController@network']);
    Route::get('network/educational-mentorship', ['as' => 'network.mentorship', 'uses' => 'PagesController@networkMentorship']);
    Route::get('network/career-coaching', ['as' => 'network.coaching', 'uses' => 'PagesController@networkCoaching']);
    Route::get('network/academic-schools', ['as' => 'network.academic-schools', 'uses' => 'PagesController@networkAcademicSchools']);


    //    Services
    Route::get('services', ['as' => 'services', 'uses' => 'PagesController@services']);
    Route::get('services/academic-scholarships', ['as' => 'services.academic', 'uses' => 'PagesController@servicesAcademic']);
    Route::get('services/athletic-scholarships', ['as' => 'services.athletic', 'uses' => 'PagesController@servicesAthletic']);
    Route::get('services/english-courses-esl', ['as' => 'services.english', 'uses' => 'PagesController@servicesEnglish']);
    Route::get('services/educational-mentors', ['as' => 'services.mentors', 'uses' => 'PagesController@servicesMentors']);
    Route::get('services/career-coaching', ['as' => 'services.coaching', 'uses' => 'PagesController@servicesCoaching']);
    Route::get('services/internships', ['as' => 'services.internships', 'uses' => 'PagesController@servicesInternships']);
    Route::get('services/bonus-semester-at-sea', ['as' => 'services.bonus', 'uses' => 'PagesController@servicesBonus']);

    //News
    Route::get('news', ['as' => 'news', 'uses' => 'PagesController@news']);

    //Social Responsibility
    Route::get('social-responsibility', ['as' => 'social-responsibility', 'uses' => 'PagesController@socialResponsibility']);

    // FAQ
    Route::get('frequently-asked-questions', ['as' => 'faq', 'uses' => 'PagesController@faq']);

    // Privacy Policy
    Route::get('privacy-policy', ['as' => 'policy', 'uses' => 'PagesController@policy']);

    // Terms and Contitions
    Route::get('terms-and-conditions', ['as' => 'terms', 'uses' => 'PagesController@terms']);

    // Backgrounder
    Route::get('backgrounder', ['as' => 'backgrounder', 'uses' => 'PagesController@backgrounder']);

    // Ambassadors
    Route::get('ambassadors/{country}', ['as' => 'ambassadors', 'uses' => 'PagesController@ambassadors']);


    // Blog
    Route::get('blog', ['as' => 'posts.index', 'uses' => 'PostsController@index']);
    Route::get('blog/{slug}', ['as' => 'posts.show', 'uses' => 'PostsController@show']);
});


Route::group(['prefix' => 'dashboard', 'before' => 'auth', 'namespace' => 'Epro360\Admin\Controllers'], function()
{

    Route::get('/', ['as' => 'dashboard', 'uses' => 'DashboardController@index']);

    Route::resource('administrators', 'AdministratorsController');
    Route::resource('students', 'StudentsController');
    Route::resource('representatives', 'RepresentativesController');
    Route::resource('ambassadors', 'AmbassadorsController');
    Route::resource('directors', 'DirectorsController');

    Route::get('users/{username}/profile', ['as' => 'dashboard.administrators.profile', 'uses' => 'ProfilesController@show']);
    Route::get('users/{username}/profile/edit', ['as' => 'dashboard.administrators.profile.edit', 'uses' => 'ProfilesController@edit']);
    Route::put('users/{username}/profile', ['as' => 'dashboard.administrators.profile.update', 'uses' => 'ProfilesController@update']);

    Route::resource('posts', 'PostsController');
    Route::resource('countries', 'CountriesController');
    Route::resource('states', 'StatesController');
    Route::resource('cities', 'CitiesController');
    Route::resource('universities', 'UniversitiesController');

    Route::resource('requirements', 'RequirementsController');




//    Route::get('checkUsername', 'Epro360\Admin\Controllers\ProfilesController@checkUsername');

});
Route::group(['prefix' => 'api', 'before' => 'auth', 'namespace' => 'Epro360\Admin\Controllers'], function()
{
    Route::get('cities', 'CitiesController@ajax');

});

Route::get('login', ['as' => 'login', 'uses' => 'SessionsController@create']);
Route::get('logout', ['as' => 'logout', 'uses' => 'SessionsController@destroy']);
Route::resource('sessions', 'SessionsController', ['only' => ['create', 'store', 'destroy']]);

Route::post('subscribers', ['as' => 'subscribers.store', 'uses' => 'SubscribersController@store']);