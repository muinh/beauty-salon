let cookiePolicy = '<div id="iubenda-cs-banner" style="background-color: black; top: 0px !important; left: 0px !important; position: fixed !important; width: 100% !important; z-index: 99999998 !important;">\n' +
    '        <div class="iubenda-cs-content" style="display:block; margin:0 auto; padding: 20px; width:auto; font-family: Helvetica,Arial,FreeSans,sans-serif!important;font-size:14px !important;background:#000;color:#fff;">\n' +
    '            <div class="iubenda-cs-rationale" style="max-width: 900px; position:relative; margin: 0 auto;">\n' +
    '                <a class="iubenda-cs-close-btn" style="margin:0 !important; text-decoration:none !important; font-size: 20px !important; color:#fff !important; position: absolute !important; top: 0 !important; right: 0 !important; border: none !important;" href="javascript:void(0)">×</a>\n' +
    '                <div class="iubenda-banner-content">\n' +
    '                    <p>Notice</p>\n' +
    '                    <p>This website or its third-party tools use cookies, which are necessary to its functioning and required to achieve the purposes illustrated in the cookie policy. If you want to know more or withdraw your consent to all or some of the cookies, please refer to the <a style="text-decoration:underline; color:#fff;  font-size:14px; font-weight:normal; " href="/cookie-policy" class="iubenda-cs-cookie-policy-lnk">cookie policy</a>.<br>By closing this banner, scrolling this page, clicking a link or continuing to browse otherwise, you agree to the use of cookies.</p>\n' +
    '                </div>\n' +
    '            </div>\n' +
    '        </div>\n' +
    '    </div>';

if (!localStorage.getItem('readPolicy')) {
    $('body').prepend(cookiePolicy);
}

$('.iubenda-cs-close-btn').on('click', function() {
    localStorage.setItem('readPolicy', 'true');
    $(this).parent().parent().hide();
});
