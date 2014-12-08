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
            <p> {{ trans('emails.administrator.greeting') }} {{ $name }}, </p>

            <p> {{ trans('emails.administrator.p1') }} </p>
            <p> {{ trans('emails.administrator.p2') }} </p>
            <p> {{ trans('emails.administrator.username') }}: &nbsp; {{$email}} </p>
            <p> {{ trans('emails.administrator.password') }}: &nbsp; {{$password}} </p>

            <p> {{ trans('emails.administrator.p3') }} &nbsp; <a target="_blank" href="http://www.epro360.com/login">http://www.epro360.com/login</a> </p>

            <p> {{ trans('emails.administrator.p4') }}: <br/> <a target="_blank" href="http://www.epro360.com/about/epro-360-team">http://www.epro360.com/about/epro-360-team</a> </p>

            <p> {{ trans('emails.administrator.p5') }} </p>

            <hr/>

            <p> {{ trans('emails.administrator.p6') }} </p>

            <p> {{ trans('emails.administrator.thanks') }} <br/></p>
            <p> {{ trans('emails.administrator.epro_team') }} </p>

        </td>
    </tr>
</table>
@stop
