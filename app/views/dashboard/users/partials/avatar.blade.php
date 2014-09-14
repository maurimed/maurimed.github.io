@if($user->image === "default" )
   <img class="img-responsive"
        src="/backend/images/profiles/default.jpg"
        alt="{{ $user->username }}" />
@else
    <img class="img-responsive"
         src="/backend/images/profiles/{{ $userFolder }}/{{ $size }}-{{ $user->image }}"
         alt="{{ $user->username }}">
@endif
