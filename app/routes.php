<?php

Route::when('dashboard*', 'csrf', ['post', 'put', 'patch', 'delete']);

Route::group(['prefix' => LaravelLocalization::setLocale()], function ()
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

    // underground-application
    Route::get('underground-application', 'ApplyController@undergroundApplication');

    // Files
    Route::get('downloads/{file}', function ($file)
    {
        $path = public_path() . 'site/docs/';

        return Response::download($path . $file . '.pdf');
    });
});

Route::group(['prefix' => 'dashboard', 'before' => 'auth|accessibleBy:Administrator', 'namespace' => 'Epro360\Dashboard\Controllers'], function ()
{

//    Route::group(['before' => 'accessibleBy:Any'], function ()
//    {
        Route::get('/', ['as' => 'dashboard', 'uses' => 'DashboardController@index']);
//        Route::get('users/{username}/profile', ['as' => 'dashboard.users.profile', 'uses' => 'ProfilesController@show']);
//        Route::get('users/{username}/profile/edit', ['as' => 'dashboard.users.profile.edit', 'uses' => 'ProfilesController@edit']);
//        Route::put('users/{username}/profile', ['as' => 'dashboard.users.profile.update', 'uses' => 'ProfilesController@update']);
//    });

    Route::resource('users', 'UsersController');
    Route::resource('administrators', 'AdministratorsController');
    Route::resource('directors', 'DirectorsController');
    Route::resource('ambassadors', 'AmbassadorsController');
    Route::resource('students', 'StudentsController');
    Route::resource('parents', 'RepresentativesController');
    Route::resource('managers', 'ManagersController');
    Route::resource('posts', 'PostsController');
    Route::resource('countries', 'CountriesController');
    Route::resource('states', 'StatesController');
    Route::resource('cities', 'CitiesController');
    Route::resource('universities', 'UniversitiesController');
    Route::resource('subscribers', 'SubscribersController', ['only' => ['index', 'update', 'destroy']]);
//
//    Route::group(['before' => 'accessibleBy:Manager'], function ()
//    {
//        Route::get('universities/{$id}/edit', 'UniversitiesManagersController@edit');
//    });
//
//    Route::resource('requirements', 'RequirementsController');
//
//    Route::resource('students.requirements', 'StudentsRequirementsController');
//
//    Route::resource('directors.ambassadors', 'DirectorsAmbassadorsController');
//    Route::resource('directors.students', 'DirectorsStudentsController');

//    Route::get('checkUsername', 'Epro360\Dashboard\Controllers\ProfilesController@checkUsername');

});

Route::group(['prefix' => 'api', 'namespace' => 'Epro360\Dashboard\Controllers'], function ()
{
    Route::get('states', 'StatesController@lists');
    Route::get('cities', 'CitiesController@lists');
    Route::get('ipinfo', 'SubscribersController@getIp');
    Route::get('universities', 'UniversitiesController@table');

    Route::get('universities/countries', 'UniversitiesController@countriesList');
    Route::get('universities/states', 'UniversitiesController@statesList');
    Route::get('universities/cities', 'UniversitiesController@citiesList');
    Route::get('universities/universities', 'UniversitiesController@lists');

    Route::get('subscribers/states', 'StatesController@lists');

    Route::get('countries', 'CountriesController@lists');
    Route::get('states', 'StatesController@jsonLists');
    Route::get('cities', 'CitiesController@jsonLists');
});

Route::get('login', ['as' => 'login', 'uses' => 'SessionsController@create']);
Route::get('logout', ['as' => 'logout', 'uses' => 'SessionsController@destroy']);
Route::resource('sessions', 'SessionsController', ['only' => ['create', 'store', 'destroy']]);
//
Route::post('subscribers', ['as' => 'subscribers.store', 'uses' => 'SubscribersController@store']);
