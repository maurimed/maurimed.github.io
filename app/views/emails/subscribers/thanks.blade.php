@extends('emails.layouts.simple')

@section('subject')
{{ trans('emails.subscribers.subject') }}
@stop


@section('content')
<table width="600" border="0" cellpadding="0" cellspacing="0" align="center" class="full">
    <tr>
        <td align="center"
            style="font-size: 24px; font-family: Myriad Pro, helvetica, Arial, sans-serif; color: #464646; font-weight: 600; line-height: 28px;">
            {{ trans('emails.subscribers.subject') }}
        </td>
    </tr>
    <tr>
        <td height="28"></td>
    </tr>
    <tr>
        <td color="#6b6b6b" align="left"
            style="font-size: 14px; font-family: Myriad Pro, helvetica, Arial, sans-serif; color: #6b6b6b!important; line-height: 24px; font-weight: 400; clear: both;text-align: justify;">
            {{ trans('emails.subscribers.greeting') }} {{ $name }},
            <br/> <br/>

            {{ trans('emails.subscribers.p1') }}
            <br/> <br/>

            {{ trans('emails.subscribers.p2') }}
            <br/> <br/>


            {{ trans('emails.subscribers.p3') }}
            <br/> <br/>

            {{ trans('emails.subscribers.list_title') }}
            <br/>

            <ol>
                <li>{{ trans('emails.subscribers.li1') }}</li>
                <li>{{ trans('emails.subscribers.li2') }}
                    <ol>
                        <li><a target="_blank" style="color: #47784a"
                               href="{{ Lang::get('footer.social_links.facebook') }}">Facebook</a></li>
                        <li><a target="_blank" style="color: #47784a"
                               href="{{ Lang::get('footer.social_links.twitter') }}"> Twitter </a></li>
                        <li><a target="_blank" style="color: #47784a" href="http://www.epro360.com/news">{{
                                Lang::get('menu.news') }}</a></li>
                    </ol>
                </li>
                <li>{{ trans('emails.subscribers.li3') }}</li>
            </ol>
            <br/>
            {{ trans('emails.subscribers.p4') }}
            <br/>
            <br/>
            <strong> {{ trans('emails.subscribers.phone') }} </strong> {{ Lang::get('contacts.phone') }} <br/>
            <strong> {{ trans('emails.subscribers.email') }} </strong> {{ Lang::get('contacts.email') }} <br/>

            <br/>
            <span style="color:#868686;font-style:italic">

            {{ trans('emails.subscribers.footer') }}
            <br/> <br/>
            </span>

            P.S. {{ $name }}, {{ trans('emails.subscribers.ps') }}


        </td>
    </tr>
</table>
@stop
