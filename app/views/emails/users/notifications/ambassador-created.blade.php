@extends('emails.layouts.simple')


@section('content')
<table width="600" border="0" cellpadding="0" cellspacing="0" align="center" class="full">
    <tr>
        <td align="center"
            style="font-size: 24px; font-family: Myriad Pro, helvetica, Arial, sans-serif; color: #464646; font-weight: 600; line-height: 28px;">
        </td>
    </tr>
    <tr>
        <td height="28"></td>
    </tr>
    <tr>
        <td color="#222222" align="left"
            style="font-size: 14px; font-family: Georgia, sans-serif; color: #1f1f1f!important; line-height: 24px; font-weight: 400; clear: both;text-align: justify;">
            <p> {{ trans('emails.ambassador.greeting') }} {{ $name }}, </p>

            <p> {{ trans('emails.ambassador.p1') }} </p>
            <p> {{ trans('emails.ambassador.p2') }} </p>
            <p> {{ trans('emails.ambassador.username') }}: &nbsp; {{$email}} </p>
            <p> {{ trans('emails.ambassador.password') }}: &nbsp; {{$password}} </p>

            <p> {{ trans('emails.ambassador.p3') }} &nbsp; <a target="_blank" href="http://www.epro360.com/login">http://www.epro360.com/login</a> </p>

            <p> {{ trans('emails.ambassador.p4') }}: <br/> <a target="_blank" href="http://www.epro360.com/about/epro-360-team">http://www.epro360.com/about/epro-360-team</a> </p>

            <p> {{ trans('emails.ambassador.p5') }} </p>

            <hr/>

            <p> {{ trans('emails.ambassador.p6') }} </p>

            <p> {{ trans('emails.ambassador.thanks') }} <br/></p>
            <p> {{ trans('emails.ambassador.epro_team') }} </p>

        </td>
    </tr>
</table>
@stop
