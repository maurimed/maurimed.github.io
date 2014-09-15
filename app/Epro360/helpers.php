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

    return '';

}


/**
 * @param $user
 * @return string
 */
function path($user)
{
    return strtolower(str_plural($user->userable_type));
}

function pluralUserType($user)
{
    return str_plural($user->userable_type);
}

function link_to_edit_profile($user)
{
    return '<a id="edit-profile" href="/dashboard/users/'. $user->username .'/profile/edit" class="pull-right btn txt-color-white bg-color-red btn-sm"><i class="fa fa-pencil"></i> Edit Profile</a>';
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
function get_profile_image_for_background($user, $size = 'sm')
{
    if($user->image === "default" )
    {
        return '<img width="100" src="/backend/images/profiles/default.jpg" alt="'. $user->username .'" />';
    }
    else
    {
        return '<img width="100" src="/backend/images/profiles/'. path($user) .'/'. $size . '-' . $user->image .'" alt="'. $user->username .'">';
    }
}
