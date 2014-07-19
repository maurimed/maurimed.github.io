<?php


Form::macro('delete',function($model, $id){

    return  Form::open([ 'url' => 'dashboard/'.$model.'/'. $id, 'method' => 'DELETE']) .

    Form::submit('Delete', ['class' => 'btn btn-xs btn-danger', 'style' => 'float:left;margin-right:5px']) .

    Form::close();

});

Form::macro('editModal',function($model, $id){

    return '<a href="/dashboard/'.$model.'/'.$id.'/edit" class="btn btn-xs btn-info" data-toggle="modal" data-target="#myModal">Edit </a>';


});


Form::macro('edit',function($model, $id){

    return '<a href="/dashboard/'.$model.'/'.$id.'/edit" class="btn btn-xs btn-info">Edit </a>';

});

Form::macro('editProfile',function($username){

    return '<a href="/dashboard/users/' . $username . '/profile/edit" class="btn btn-xs btn-info">Edit </a>';

});
