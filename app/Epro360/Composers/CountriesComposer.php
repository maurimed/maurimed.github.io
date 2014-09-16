<?php  namespace Epro360\Composers;

use Epro360\Repos\Locations\CountriesRepository;

class CountriesComposer {

    /**
     * @var CountriesRepository
     */
    protected $countriesRepo;

    /**
     * @param CountriesRepository $countriesRepo
     */
    function __construct(CountriesRepository $countriesRepo)
    {
        $this->countriesRepo = $countriesRepo;
    }


    public function compose($view)
    {
        $countries = $this->countriesRepo->countriesList();

        $view->with('countries', $countries);
    }


} 