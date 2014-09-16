<?php  namespace Epro360\Repos\Users;

use Epro360\Mailers\UserMailer;
use Epro360\Repos\Users\Administrators\AdministratorRepository;
use Epro360\Repos\Users\Ambassadors\AmbassadorRepository;
use Epro360\Repos\Users\Directors\DirectorRepository;
use Epro360\Repos\Users\Students\StudentRepository;
use Epro360\Services\ImageService;
use Hash;
use Laracasts\Validation\FormValidationException;
use Epro360\Forms\ProfileEditForm as ProfileForm;
use Input, Redirect, Str;
use User;

class UserRepository {

    protected $profileForm;

    protected $imageService;

    protected $userMailer;

    protected $administratorRepo;

    protected $studentRepo;

    protected $directorRepo;

    protected $ambassadorRepo;

    function __construct(
        ProfileForm $profileForm,
        ImageService $imageService,
        UserMailer $userMailer,
        AdministratorRepository $administratorRepo,
        StudentRepository $studentRepo,
        DirectorRepository $directorRepo,
        AmbassadorRepository $ambassadorRepo
    )
    {

        $this->profileForm = $profileForm;

        $this->imageService = $imageService;

        $this->userMailer = $userMailer;

        $this->administratorRepo = $administratorRepo;

        $this->studentRepo = $studentRepo;

        $this->directorRepo = $directorRepo;

        $this->ambassadorRepo = $ambassadorRepo;
    }


    /**
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     */
    public function getAll()
    {
        return User::with('userable')->get();
    }

    /**
     * @param $id
     * @return \Illuminate\Database\Eloquent\Collection|\Illuminate\Database\Eloquent\Model|static
     */
    public function findById($id)
    {
        return User::with('userable')->findOrFail($id);
    }


    /**
     * @param $username
     * @return mixed
     */
    public function findByUsername($username)
    {
        return $user = User::whereUsername($username)->with(['userable'])->firstOrFail();
    }


    /**
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     */
    public function getAdmins()
    {
        return $this->administratorRepo->getAll();
    }

    /**
     * @param $adminId
     * @return \Illuminate\Database\Eloquent\Collection|\Illuminate\Database\Eloquent\Model|static
     */
    public function findByAdminId($adminId)
    {
        return $this->administratorRepo->findById($adminId);

    }

    /**
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     */
    public function getStudents()
    {
        return $this->studentRepo->getAll();
    }

    /**
     * @param $studentId
     * @return \Illuminate\Database\Eloquent\Collection|\Illuminate\Database\Eloquent\Model|static
     */
    public function findByStudentId($studentId)
    {
        return $this->studentRepo->findById($studentId);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     */
    public function getAmbassadors()
    {
        return $this->ambassadorRepo->getAll();
    }

    /**
     * @param $ambassadorId
     * @return \Illuminate\Database\Eloquent\Collection|\Illuminate\Database\Eloquent\Model|static
     */
    public function findByAmbassadorId($ambassadorId)
    {
        return $this->ambassadorRepo->findById($ambassadorId);

    }


    /**
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     */
    public function getDirectors()
    {
        return $this->directorRepo->getAll();
    }

    /**
     * @param $id
     * @param $input
     * @throws FormValidationException
     * @return \Epro360\Repos\Users\UserRepository|\Illuminate\Database\Eloquent\Collection|\Illuminate\Database\Eloquent\Model|static
     */
    public function updateUser($id, $input)
    {
        $user = $this->findById($id);


        $changePassword = $this->checkPassword($input, $user->password);

        if($changePassword) $user->password = $input['password'];

        $user->username = $input['username'];
        $user->email = $input['email'];

        $user->save();


        return $user;
    }

    /**
     * @param $input
     * @param $userId
     * @return \Illuminate\Database\Eloquent\Collection|\Illuminate\Database\Eloquent\Model|static
     */
    public function update($input, $userId)
    {


        $user = $this->findById($userId);

        $input = $this->makeUsername($input, $user);

        $this->makePassword($input, $user);

        $this->validate($input);

        if (Input::has('city'))
        {
            $user->userable->city_id = $input['city'];
            $user->userable->country_code = $input['country'];

        }
        $user->userable->firstname = $input['firstname'];
        $user->userable->lastname = $input['lastname'];

        if (Input::hasFile('image'))
            $this->imageService->profileImage($input, $user);

        $user->userable->update($input);
        $user->save();

        return $user;
    }


    public function create($email, $password) {
        $user = [
            'password' => $password,
            'email'    => $email,
            'username' => Str::slug($email)
        ];

        return User::create($user);
    }


    public function createOld($modelInfo, $userInfo, $model) {
        // Create user
        $user = User::create($userInfo);

        // Create model
        $userType = new $model;
        $userType->firstname = $modelInfo['firstname'];
        $userType->lastname = $modelInfo['lastname'];
        $userType->created_by = \Auth::user()->id;
        $userType->save();

        // Link the model to an user profile
        $user->userable_id = $userType->id;
        $user->userable_type = $model;
        $user->email = $userInfo['email'];
        $user->username = Str::slug($userInfo['email']);
        $user->password = $password;

        // Save the user profile
        $user->save();

        $this->userMailer->accountCreated($user, strtolower($model), $password);

        return $userType;

    }

    /**
     * @param $user
     * @return mixed
     */
    public function delete($user)
    {
        $user->profile->delete();

        return $user->delete();
    }


    /**
     * @param $input
     * @param $user
     * @return array
     */
    private function makeUsername($input, $user)
    {
        if ($user->username == $input['username'])
        {
            $input = array_except($input, ['username']);

            return $input;
        } else
        {
            $user->username = $input['username'];

            return $input;
        }
    }

    /**
     * @param $input
     * @param $user
     */
    private function makePassword($input, $user)
    {
        if ($input['password'] != '')
        {
            $user->password = $input['password'];

            return $input;

        }

        return $input;
    }


    /**
     * @param $input
     */
    private function validate($input)
    {
        try
        {
            $this->profileForm->validate($input);

        } catch (FormValidationException $e)
        {
            return Redirect::back()->withInput()->withErrors($e->getErrors())->withDangerMessage('There were validation errors');
        }
    }

    /**
     * @param $input
     * @param $oldPassword
     * @throws FormValidationException
     */
    private function checkPassword($input, $oldPassword)
    {
        if (Hash::check($input['old_password'], $oldPassword) )
        {
            return  true;
        }

        elseif($input['old_password'] == '')
        {
            return false;
        }

        elseif($input['password'] == '')
        {
            return false;
        }

        else
        {
            throw new FormValidationException('Validation failed', 'This is not your old password, please try again');
        }
    }


}