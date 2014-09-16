@extends('emails.layouts.notifications')

@section('subject')
{{ $subject }}
@stop


@section('content')
<table width="600" border="0" cellpadding="0" cellspacing="0" align="center" class="full">
    <tr>
        <td align="center"
            style="font-size: 24px; font-family: Myriad Pro, helvetica, Arial, sans-serif; color: #464646; font-weight: 600; line-height: 28px;">
            Welcome to our Epro 360 Educational Institution Network Administration
        </td>
    </tr>
    <tr>
        <td height="28"></td>
    </tr>
    <tr>
        <td color="#222222" align="left"
            style="font-size: 14px; font-family: Georgia, sans-serif; color: #1f1f1f!important; line-height: 24px; font-weight: 400; clear: both;text-align: justify;">
            Dear Mr. / Mrs.  {{ $name }}
            <br/> <br/>

            We would like to welcome you to the Epro 360 Educational Institution Network Administration. <br/>
            We are very excited to have you using this system that we have developed looking forward to improving the efficiency in our process to recruit the most qualified international students for your institution. <br/><br/>
            All the information that you kindly provide will be safely and confidentially stored. <br/>
            This database will allow our team members to instant access to the most accurate and update information, which will translate in faster and more precise responses to our prospect international students interested in institutions like yours. <br/>
            As you know, we are more than happy to promote your institution. <br/><br/>
            We would really appreciate if you could have the information pertained to your institution as much updated as possible in order to achieve the best recruitment goals. <br/>
            We definitely share the same vision for the next generation of international students and we really look forward to continuing our relationship for many years ahead. <br/><br/>

            Please see below you username and password: <br/><br/>

            <strong>Username: </strong> {{$email}}<br/>
            <strong>Password: </strong> {{$password}}<br/>
            <strong> Access your profile: </strong> <a target="_blank" href="//www.epro360.com/dashboard/managers/{{$username}}/edit">www.epro360.com/dashboard/managers/{{$username}}/edit</a> <br/><br/>

            As soon as you log in, change your account password for security reasons. <br/><br/>

            Please send us an email to <a href="mailto:info@epro360.com"> info@epro360.com</a> in case you have any questions or you experience any issues while using this system. <br/><br/>

            Thanks again for your time and your willingness to collaborate,<br/>

            The Epro 360 Team

        </td>

    </tr>
</table>
@stop
