<?php


use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;
use Illuminate\Database\Eloquent\SoftDeletingTrait;


class User extends Eloquent implements UserInterface, RemindableInterface {

    use UserTrait, RemindableTrait, SoftDeletingTrait;

    protected $fillable = ['username', 'email', 'password'];

    protected $appends = ['image'];


    /**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

    /**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password', 'remember_token');

    public function userable()
    {
        return $this->morphTo('userable');
    }

    public function hasAccess($userTypes)
    {
        $userTypes = explode('|', $userTypes);

        foreach ($userTypes as $userType)
        {
            if($this->userable_type == $userType) return true;
        }

        return false;
    }

    public function setPasswordAttribute($password)
    {
        $this->attributes["password"] = Hash::make($password);
    }

    public function getImageAttribute()
    {
        return $this->morphTo('userable')->getResults()->image;
    }
}
