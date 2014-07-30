<?php  namespace Epro360\Repos\Locations;

use Epro360\Forms\Locations\StatesForm;
use State;

class StatesRepository {


    protected $statesForm;

    function __construct(StatesForm $statesForm)
    {
        $this->statesForm = $statesForm;
    }

    public function getAll()
    {
        return State::with('country.continent')->get();
    }


    public function create($input)
    {

        $this->statesForm->validate($input);

        $country = new State;
        $country->name = $input['name'];
        $country->country_id = $input['country_id'];
        $country->abbreviation = $input['abbreviation'];
        $country->save();

    }

    public function findById($id)
    {
//        return  Administrator::with('profile')->findOrFail($id);
    }


    public function getListByCountryId($country_id)
    {
        return State::latest()->whereCountryId($country_id)->lists('name', 'id');
    }

} 