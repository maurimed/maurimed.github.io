<?php


use Epro360\Repos\Users\Ambassadors\AmbassadorRepository;

class PagesController extends BaseController {

    protected $ambassadorRepo;

    function __construct(AmbassadorRepository $ambassadorRepo)
    {
        $this->ambassadorRepo = $ambassadorRepo;
    }

    //    Home
    public function home()
    {
        return View::make('site.pages.home');
    }

    //    About
    public function about()
    {
        return View::make('site.pages.about.message');
    }

    public function aboutMessage()
    {
        return View::make('site.pages.about.message');
    }

    public function aboutMission()
    {
        return View::make('site.pages.about.mission');
    }

    public function aboutGlance()
    {
        return View::make('site.pages.about.glance');
    }

    public function aboutApart()
    {
        return View::make('site.pages.about.apart');
    }

    public function aboutTeam()
    {
        $ambassadors = $this->ambassadorRepo->getAll();

        return View::make('site.pages.about.team', compact('ambassadors'));
    }

    public function ambassadors($countryCode)
    {
        $ambassadors = $this->ambassadorRepo->getAmbassadorsByCountry($countryCode);

        return View::make('site.pages.ambassadors', compact('ambassadors'));
    }



    //  Network
    public function network()
    {
        return View::make('site.pages.network.index');
    }

    public function networkMentorship()
    {
        return View::make('site.pages.network.mentorship');
    }

    public function networkCoaching()
    {
        // Extract this eloquent things
        $tags = AcademicSchool::orderBy('name')->get(['name', 'slug']);
        $majors = Major::all();
        return View::make('site.pages.network.coaching', compact('tags', 'majors'));
    }






    //    Services
    public function services()
    {
        return View::make('site.pages.services.index');
    }

    public function servicesAcademic()
    {
        return View::make('site.pages.services.academic');
    }

    public function servicesAthletic()
    {
        return View::make('site.pages.services.athletic');
    }

    public function servicesEnglish()
    {
        return View::make('site.pages.services.english');
    }

    public function servicesMentors()
    {
        return View::make('site.pages.services.mentors');
    }

    public function servicesCoaching()
    {
        return View::make('site.pages.services.coaching');
    }

    public function servicesInternships()
    {
        return View::make('site.pages.services.internships');
    }

    public function servicesBonus()
    {
        return View::make('site.pages.services.bonus');
    }



    // News
    public function news()
    {
        return View::make('site.pages.news');
    }

    // Social Responsibility
    public function socialResponsibility()
    {
        return View::make('site.pages.responsibility');
    }

    // FAQ
    public function faq()
    {
        return View::make('site.pages.faq');
    }

    // Privacy Policy
    public function policy()
    {
        return View::make('site.pages.policy');
    }


    // Terms & Conditions
    public function terms()
    {
        return View::make('site.pages.terms');
    }

    // Epro 360 Backgrounder
    public function backgrounder()
    {
        return View::make('site.pages.backgrounder');
    }










}
