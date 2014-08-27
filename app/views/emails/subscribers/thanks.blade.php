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
        <td color="#222222" align="left"
            style="font-size: 14px; font-family: Georgia, sans-serif; color: #1f1f1f!important; line-height: 24px; font-weight: 400; clear: both;text-align: justify;">
            {{ trans('emails.subscribers.greeting') }} {{ $name }},
            <br/> <br/>

            {{ trans('emails.subscribers.p1') }}
            <br/> <br/>

            {{ trans('emails.subscribers.p2') }}

            <a target='_blank' href='http://www.epro360.com/network'>{{ trans('emails.subscribers.link1') }} </a>
            <br/> <br/>

            {{ trans('emails.subscribers.list_title') }}
            <br/>

            <ol>
                <li>
                    {{ trans('emails.subscribers.li1') }}
                    <a target='_blank' href='{{trans('emails.subscribers.form-path')}}'>{{trans('emails.subscribers.form-text')}}</a>.
                </li>
                <li>
                <a href="http://www.epro360.com" target="_blank">{{ trans('emails.subscribers.li2')}}</a>{{ trans('emails.subscribers.li2-2') }}
                    <ul>
                        <li><strong> {{ trans('emails.subscribers.email') }} </strong><a target="_blank"  href="mailto:{{ Lang::get('contacts.email') }}">{{ Lang::get('contacts.email') }}</a></li>
                        <li><strong> {{ trans('emails.subscribers.phone') }} </strong>{{ Lang::get('contacts.phone') }}</li>
                    </ul>
                </li>
                <li>
                    {{ trans('emails.subscribers.li3') }}
                    <a target = '_blank' href='{{ trans('emails.subscribers.doc-path') }}' > {{ trans('emails.subscribers.doc-text') }}</a >
                    {{ trans('emails.subscribers.li3-2') }}

                </li>
            </ol>
            <br/>
            {{ trans('emails.subscribers.p3') }}
            <br/>

            <br/>
            <span style="color:#868686;font-style:italic">

            {{ trans('emails.subscribers.sign') }}
            <br/>
            <a href="http://www.epro360.com">www.epro360.com</a>
            <br/>
            <br/>
            </span>



        </td>

    </tr>
</table>
@stop
