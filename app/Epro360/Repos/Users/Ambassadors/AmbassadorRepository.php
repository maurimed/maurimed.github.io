<?php  namespace Epro360\Repos\Users\Ambassadors;

use Epro360\Services\ImageService;
use Ambassador;
use Auth;

class AmbassadorRepository {

    protected $imageService;

    function __construct(ImageService $imageService)
    {
        $this->imageService = $imageService;
    }

    public function getAll()
    {

        return Ambassador::with(['profile', 'creator', 'city.state.country'])->get();
    }


    public function findById($id)
    {
        return Ambassador::with('profile', 'creator', 'city.state.country')->findOrFail($id);
    }

    public function getAmbassadorsByCountry($countryCode)
    {
        return Ambassador::with(['profile','city'])->whereCountryCode($countryCode)->get();

    }

    public function create($input)
    {

        $ambassador = new Ambassador;

        $ambassador->firstname = $input["firstname"];

        $ambassador->lastname = $input["lastname"];

        $ambassador->created_by = Auth::user()->id;

        $ambassador->city_id = 1;

        $ambassador->director_id = 1;

        $ambassador->save();

        return $ambassador;
    }

    public function update($input, $ambassadorId)
    {

        $ambassador = $this->findById($ambassadorId);

        if (!is_null($input['image']))
        {
            $imageName = $this->imageService->profileImage($input, $ambassador);
            $ambassador->image = $imageName;
        }


        $ambassador->firstname = $input['firstname'];
        $ambassador->lastname = $input['lastname'];
        $ambassador->personal_email = $input['personal_email'];
        $ambassador->personal_phone = $input['personal_phone'];
        $ambassador->city_id = $input['cities'];
        $ambassador->address = $input['address'];
        $ambassador->about_me = $input['about_me'];
        $ambassador->save();

        return $ambassador;
    }

}