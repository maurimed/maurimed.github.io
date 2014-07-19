<?php


function setActive($path)
{
    if($path == 'dashboard'  )
    {
        return Request::is('dashboard') ? 'active': '';
    }

    if($path == Request::segment(1) or $path == Request::segment(2))
    {
        return 'active';
    }

    if($path == 'home'  )
    {
        return Request::is('/') ? 'active': '';
    }


};

function get_profile_image($user, $size = 'thumb')
{
    if($user->image === "default" )
    {
        return '<img class="img-responsive" src="/admin/images/profiles/default.jpg" alt="'. $user->username .'" />';
    }
    else
    {
        return '<img class="img-responsive"  src="/admin/images/profiles/'. folder_path($user) .'/'. $size . '-' . $user->image .'" alt="'. $user->username .'">';
    }
}

/**
 * @param $user
 * @return string
 */
function folder_path($user)
{
    return strtolower(str_plural($user->userable_type));
}

function link_to_edit_profile($user)
{
    return '<a id="edit-profile" href="/dashboard/users/'. $user->username .'/profile/edit" class="pull-right btn txt-color-white bg-color-green btn-sm"><i class="fa fa-pencil"></i> Edit Profile</a>';
}

/**
 * @return bool
 */
function is_admin()
{
    return Auth::user()->userable_type == 'Administrator';
}

/**
 * @return bool
 */
function is_student()
{
    return Auth::user()->userable_type == 'Student';
}

/**
 * @return bool
 */
function is_ambassador()
{
    return Auth::user()->userable_type == 'Ambassador';
}

/**
 * @return bool
 */
function is_parent()
{
    return Auth::user()->userable_type == 'Representative';
}


/**
 * @return bool
 */
function is_director()
{
    return Auth::user()->userable_type == 'Director';
}

/**
 * @return bool
 */
function is_manager()
{
    return Auth::user()->userable_type == 'Manager';
}


function errors_for($attr, $errors)
{
    $errors->first($attr, '<span class="alert-danger">:message</span>');
}


function canSeeStudent($studentId)
{
    if (Auth::user()->userable_type == 'Student' && $studentId != Auth::user()->userable_id)
        return false;

    return true;
}

function canSeeDirector($directorId)
{
    if (Auth::user()->userable_type == 'Director' && $directorId != Auth::user()->userable_id)
        return false;

    return true;
}