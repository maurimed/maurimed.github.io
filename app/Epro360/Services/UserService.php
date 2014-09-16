<?php  namespace Epro360\Services;

use Epro360\Repos\Users\UserRepository;

use Input;

class UserService {

    protected $userRepo;

    function __construct(UserRepository $userRepo)
    {
        $this->userRepo = $userRepo;
    }

    public function subscribe($events)
    {
        $events->listen('user.*.created', 'Epro360\Services\UserService@attachUser');

    }

    /**
     * @param $userData
     */
    public function attachUser($userData)
    {
        $user = $this->userRepo->create($userData['email'], $userData['password']);

        $User = $userData->profile()->save($user);
    }

} 