<?php  namespace Epro360\Composers; 

use Epro360\Repos\Locations\CountriesRepository;
use Epro360\Repos\Users\Ambassadors\AmbassadorRepository;

class AmbassadorsComposer {

    protected $ambassadorsRepo;
    /**
     * @var CountriesRepository
     */
    protected $countriesRepo;

    /**
     * @param AmbassadorRepository $ambassadorsRepo
     * @param CountriesRepository $countriesRepo
     */
    function __construct(AmbassadorRepository $ambassadorsRepo, CountriesRepository $countriesRepo)
    {
        $this->ambassadorsRepo = $ambassadorsRepo;
        $this->countriesRepo = $countriesRepo;
    }


    public function compose($view)
    {
        $countries = $this->countriesRepo->getCountriesThatHasAmbassadors();
        $ambassadors = $this->ambassadorsRepo->getAll();

        $view->with('ambassadors', $ambassadors)->with('countries', $countries);
    }


} 