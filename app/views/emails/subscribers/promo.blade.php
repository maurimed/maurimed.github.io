@extends('emails.layouts.simple')

@section('subject')
{{ trans('emails.promo.subject') }}
@stop


@section('content')
<table width="600" border="0" cellpadding="0" cellspacing="0" align="center" class="full">
    <tr>
        <td align="center"
            style="font-size: 24px; font-family: Myriad Pro, helvetica, Arial, sans-serif; color: #464646; font-weight: 600; line-height: 28px;">
            {{ trans('emails.promo.subject') }}
        </td>
    </tr>
    <tr>
        <td height="28"></td>
    </tr>
    <tr>
        <td color="#222222" align="left"
            style="font-size: 14px; font-family: Georgia, sans-serif; color: #1f1f1f!important; line-height: 24px; font-weight: 400; clear: both;text-align: justify;">
            {{ trans('emails.promo.greetings') }} {{ $name }},
            <br/> <br/>

            {{ trans('emails.promo.p1') }}
            <br/> <br/>

            {{ trans('emails.promo.p2') }} <a href="http://www.epro360.com/services">{{ trans('emails.promo.here') }}</a>.
            {{ trans('emails.promo.p3') }} <a href="http://www.epro360.dreamapply.com/">{{ trans('emails.promo.here') }}</a>.
            {{ trans('emails.promo.p4') }} <a href="http://www.epro360.com/about/epro-360-team">{{ trans('emails.promo.ambassador') }}</a> {{ trans('emails.promo.here') }} <a href="mailto:info@epro360.com">info@epro360.com</a>

            <br/><br/>
            {{ trans('emails.promo.p7') }}<br/>
            {{ trans('emails.promo.p8') }}


            <br/> <br/>
            <div class="small">
            <span style="font-size: .9em;">{{ trans('emails.promo.additional_notes') }}</span> <br/>
            <ol style="font-size: .9em;">
                <li>{{ trans('emails.promo.li1') }}</li>
                <li>{{ trans('emails.promo.li2') }}<a href="http://www.epro360.dreamapply.com/">{{ trans('emails.promo.platform') }}</a>.</li>
                <li>{{ trans('emails.promo.li3') }}</li>
                <li>{{ trans('emails.promo.li4') }}</li>
                <li>{{ trans('emails.promo.li5') }}</li>
            </ol>
            </div>
            <br/>
            
            {{ trans('emails.promo.visit') }}<a href="http://www.epro360.com/">www.epro360.com</a>{{ trans('emails.promo.for_info') }}

        </td>

    </tr>
</table>
@stop
