<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
<title>@yield('subject')</title>

<style type="text/css">

    div, p, a, li, td { -webkit-text-size-adjust:none; }

    /* This is the Epro 360 color to change the green content:  #ef3d4a; */

    .ReadMsgBody
    {width: 100%; background-color: #ffffff;}
    .ExternalClass
    {width: 100%; background-color: #ffffff;}
    body
    {width: 100%; background-color: #ffffff; margin:0; padding:0; -webkit-font-smoothing: antialiased;}
    html
    {width: 100%; }

    table { font-size: 16px; font-family: Georgia, sans-serif; color: #222222; }
    a{color: #ef3d4a !important;}
    .ii a[href] {color: #ef3d4a !important;}
    small{text-align: center !important;}
    .im{color:#6b6b6b !important;}
    .imageTableFull img { border-radius: 3px!important; }

    @media only screen and (max-width: 900px)
    {
        td[class=headerBG] {width: 100%!important;
            background-size: 900px!important;
            background: no-repeat center!important;
        }
        td[class=mainBG] {width: 100%!important;
            background-size: 900px!important;
            background: no-repeat center !important;
        }

    }

    @media only screen and (max-width: 640px)
    {

        table[class=full] { width: 100%; clear: both; }
        table[class=mobile] { width: 100%; padding-left: 30px; padding-right: 30px; clear: both; }
        table[class=fullCenter] { width: 100%; text-align: center!important; }
        table[class=eraseForMobile] { display: none!important; }
        td[class=eraseForMobile] { display: none!important; }
        td[class=textCenter] { width: 100%; text-align: center!important; }
        td[class=pad1] { height: 30px!important; }
        td[class=pad2] { height: 10px!important; }
        table[class=imageTableFull] { width: 100%!important; clear: both; }
        .imageTableFull img { border-radius: 3px!important; }
        td[class=headerBG] {width: 100%!important;  background-repeat: no-repeat!important; background-size: 150%!important; background-position: center center!important;}
        td[class=mainBG] {width: 100%!important;  background-repeat: no-repeat!important; background-size: 800px!important; background-position: center center!important;}

    }

    @media only screen and (max-width: 479px)
    {
        img[class=fullImage] { width: 100%!important; height: auto!important; }
        td[class=fontSmall] { font-size: 28px!important; }
        .imageTableFull img { width: 100%!important; height: auto!important; border-radius: 3px!important; }

    }#220 {
  margin-top: 10px;
}#logo {
  margin-top: 10px;
  width: 220px;
  border: none;
}


</style>

<table width="100%" border="0" cellpadding="0" cellspacing="0" align="center" bgcolor="#ffffff" class="full">
    <tr>
        <td>

            <table width="600" border="0" cellpadding="0" cellspacing="0" align="center" class="mobile">
                <tr>
                    <td width="100%">

                        <table width="100%" border="0" cellpadding="0" cellspacing="0" align="center" class="full">
                            <tr>
                                <td width="100%" valign="middle">

                                    <table width="580" border="0" cellpadding="0" cellspacing="0" align="left" class="fullCenter">
                                        <tr>
                                            <td width="240" height="0" class="pad2"></td>
                                        </tr>
                                        <tr>
                                            <td  valign="middle" width="100%" style="text-align: center;" class="textCenter">
                                                <a target="_blank" href="http://www.epro360.com">
                                                <img id="logo" src="http://www.epro360.com/site/images/logo.png" alt="Epro 360" ></a>
                                            </td>
                                        </tr>
                                    </table>



                                </td>
                            </tr>
                            <tr>
                                <td width="100%" class="pad2"></td>
                            </tr>
                        </table>

                    </td>
                </tr>
            </table>

        </td>
    </tr>
</table>


<table width="100%" border="0" cellpadding="0" cellspacing="0" align="center" bgcolor="#ffffff" class="mobile">
    <tr>
        <td>

            <!-- Space -->
            <table width="100%" border="0" cellpadding="0" cellspacing="0" align="center" class="full">
                <tr>
                    <td width="100%" height="20">
                    </td>
                </tr>
            </table>

           @yield('content')

            <!-- Space -->
            <table width="100%" bgcolor="#ffffff" border="0" cellpadding="0" cellspacing="0" align="center" class="full">
                <tr>
                    <td width="100%" height="20">

                    </td>
                </tr>
            </table>

        </td>
    </tr>
</table><!-- End Wrapper 3 -->



<!-- Wrapper  (Footer) -->
<table width="100%" border="0" cellpadding="0" cellspacing="0" align="center" bgcolor="#ffffff" class="mobile">
    <tr>
        <td>

            <!--  Wrapper -->
            <table width="600" border="0" cellpadding="0" cellspacing="0" align="center" class="full">
                <tr>
                    <td width="100%">
                        <!-- Start Footer -->
                        <table width="100%" border="0" cellpadding="0" cellspacing="0" align="center" class="full">
                            <tr>
                                <td width="100%" valign="middle">
                                    <!-- Footer Nav -->
                                    <table width="500" border="0" cellpadding="0" cellspacing="0" align="center" style="font-size:14px;line-height: 22px; color: #696969; text-align: center  ; border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;" class="fullCenter">
                                        <tr>
                                            <td valign="middle" class="navTd" >
                                                <small> P.D. {{ $name }}, {{ trans('emails.subscribers.pd') }} </small>

                                                <br/> <br/>
                                                <a target="_blank" href="{{ trans('footer.social_links.facebook') }}">
                                                    <img src="http://www.epro360.com/site/email/128-facebook.png" alt="Facebook"/>
                                                </a>
                                                <a target="_blank" href="{{ trans('footer.social_links.google-plus') }}">
                                                <img src="http://www.epro360.com/site/email/128-googleplus.png" alt="Google Plus"/> </a>

                                                <a target="_blank" href="{{ trans('footer.social_links.twitter') }}">
                                                <img src="http://www.epro360.com/site/email/128-twitter.png" alt="Twitter"/> </a>

                                                <br/>
                                                <small>
                                                    {{ trans('emails.subscribers.footer.1') }} <br/>
                                                    {{ trans('emails.subscribers.footer.2') }} <br/>
                                                    {{ trans('emails.subscribers.footer.3') }} <br/>
                                                    {{ trans('emails.subscribers.footer.4') }}
                                                </small>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                        </table><!-- End Footer -->
                    </td>
                </tr>
            </table><!-- End Wrapper -->

            <!-- Space -->
            <table width="100%" border="0" cellpadding="0" cellspacing="0" align="center" class="full">
                <tr> <td width="100%" height="10" class="pad1"> </td> </tr>
            </table>

        </td>
    </tr>
</table><!-- End Wrapper 15 -->