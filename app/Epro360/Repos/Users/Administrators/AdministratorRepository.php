<?php  namespace Epro360\Repos\Users\Administrators;

use Epro360\Services\ImageService;
use Administrator;
use Auth;

class AdministratorRepository {

    protected $imageService;

    function __construct(ImageService $imageService)
    {
        $this->imageService = $imageService;
    }

    public function getAll()
    {
        return Administrator::with(['profile', 'creator', 'city.state.country'])->get();
    }


    public function findById($id)
    {
        return Administrator::with('profile', 'creator', 'city.state.country')->findOrFail($id);
    }

    public function create($input)
    {

        $admin = new Administrator;

        $admin->firstname = $input["firstname"];

        $admin->lastname = $input["lastname"];

        $admin->city_id = 1;

        $admin->created_by = Auth::user()->id;

        $admin->save();

        /** @var array $admin */

        return array_add($admin, 'password', str_random(15));
    }

    public function update($input, $administratorId)
    {

        $administrator = $this->findById($administratorId);

        if (!is_null($input['image']))
        {
            $imageName = $this->imageService->profileImage($input, $administrator);
            $administrator->image = $imageName;
        }


        $administrator->firstname = $input['firstname'];
        $administrator->lastname = $input['lastname'];
        $administrator->personal_email = $input['personal_email'];
        $administrator->personal_phone = $input['personal_phone'];
        $administrator->city_id = $input['cities'];
        $administrator->address = $input['address'];
        $administrator->about_me = $input['about_me'];
        $administrator->save();

        return $administrator;
    }
    
}