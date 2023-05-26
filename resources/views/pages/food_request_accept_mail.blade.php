<!doctype html>
<html>
  <head>
    <meta name="viewport" content="width=device-width" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Simple Responsive HTML Email With Button</title>
  </head>
  <body class="" style="background-color: #ffffff;font-family: sans-serif; -webkit-font-smoothing: antialiased; font-size: 14px;line-height: 14;margin: 0;padding: 0; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%; ">
    <table role="presentation" border="0" cellpadding="0" cellspacing="0" class="body" style="border-collapse: separate;mso-table-lspace: 0pt;
    mso-table-rspace: 0pt;min-width: 100%;width: 100%; background-color: #eaebed;width: 100%; @media only screen and (max-width: 620px) {font-size: 28px !important;
    margin-bottom: 10px !important;}">
      <tr>
        <td>&nbsp;</td>
        <td class="container" style=" display: block;Margin: 0 auto !important;max-width: 580px; padding: 35px;width: 580px;padding: 0 !important;
        width: 100% !important;">
          <div class="header" style="padding: 20px 0;">
            <table role="presentation" border="0" cellpadding="0" cellspacing="0" width="100%">
              <tr>
           
                <td class="align-center" width="100%" style="font-family: sans-serif;font-size: 14px;vertical-align: top; 
                text-align: center;line-height:1">
                  <a href="#" style="color: #ec0867;text-decoration: underline;">
                    <img src="http://localhost:8000/logo/output-onlinepngtools.png" height="auto" width="120px" alt="Postdrop" style="border: none;-ms-interpolation-mode: bicubic;max-width: 100%; margin-left: 365px;">
                </a>
                </td>
              </tr>
            </table>
          </div>
          <div class="content" style="box-sizing: border-box;display: block;Margin: 0 auto; max-width: 580px; padding: 10px;padding: 0 !important; 
          ">

            <!-- START CENTERED WHITE CONTAINER -->
            <span class="preheader" style=" color: transparent;display: none;height: 0;max-height: 0;max-width: 0;opacity: 0;overflow: hidden;
            mso-hide: all;visibility: hidden;width: 0; ">This is preheader text. Some clients will show this text as a preview.</span>
            <table role="presentation" class="main" style="background: #ffffff; border-radius: 3px; width: 100%;border-left-width: 0 !important;margin-left: 193px;border-radius: 0 !important;border-right-width: 0 !important; ">

              <!-- START MAIN CONTENT AREA -->
              <tr>
                <td class="wrapper" style="box-sizing: border-box; padding: 20px;padding: 23px !important;line-height: 2">
                  <table role="presentation" border="0" cellpadding="0" cellspacing="0">
                    <tr>
                      <td>
                        <p style="font-family: sans-serif;font-size: 14px;font-weight: normal;margin: 0;margin-bottom: 15px;"><b>Hello {{$data->name}}!</b></p>
                        <p style=" font-family: sans-serif;font-size: 14px;font-weight: normal;margin: 0;margin-bottom: 15px;">You are receiving this email because we accept your food request.</p>                   
                       
                      </td>
                    </tr>
                  </table>
                </td>  
              </tr>

            <!-- END MAIN CONTENT AREA -->
            </table>

            <!-- START FOOTER -->
            <div class="footer" style=" clear: both;Margin-top: -23px;text-align: center;width: 100%;">
              <table role="presentation" border="0" cellpadding="0" cellspacing="0">
                <tr>
                  <td class="content-block" style="padding-bottom: 10px;padding-top: 10px; color: #9a9ea6;font-size: 12px;text-align: center;line-height: 4;">
                    <span class="apple-link" style="color: #9a9ea6;font-size: 12px;text-align: center;margin-left: 197px; 

                    ">© <script>document.write(new Date().getFullYear())</script> Food Care Management System.</span>
                  </td>
                </tr>
              </table>
            </div>
            <!-- END FOOTER -->

          <!-- END CENTERED WHITE CONTAINER -->
          </div>
        </td>
        <td>&nbsp;</td>
      </tr>
    </table>
  </body>
</html>