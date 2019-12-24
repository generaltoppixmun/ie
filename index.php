<?php
$GLOBALS['_ta_campaign_key'] = 'b4139e33d506890472044baad2d293a7';
$GLOBALS['_ta_debug_mode'] = false; //To enable debug mode, set to true or load this script with a '?debug_key=b4139e33d506890472044baad2d293a7' parameter

require 'bootloader.php';

$campaign_id = 'ob84d0';

$ta = new TALoader($campaign_id);


if ($ta->suppress_response()) {//Do not send any output when hybrid mode is enabled and a visitor is being filtered (after hybrid page was generated)
    exit;
}

$response = $ta->get_response();
$visitor = $ta->get_visitor();

/*
 * Advanced users: uncomment lines below during development to expose variables you may want to use in your custom code:
 */
//print_r($response);
//print_r($visitor);
//exit;
/*
 * Don't forget to re-comment the lines above before sending live traffic
 */

/*
Note: when using hybrid mode, please use one of our built-in functions as your final step when routing your visitors:
    print header_redirect("http://url.com"); //performs a 302 header redirect (or a window.location=xxx in JS)
    print load_fullscreen_iframe("http://url.com"); //Loads a fullscreen iframe of the specified URL
    print paste_html("http://url.com"); //Downloads HTML in specified URL and outputs it to the screen (uses JS to insert the HTML in hybrid mode)
(These functions will automatically output either regular HTML or JS code depending on what the visitor's browser is expecting)
*/

switch ($response['action']) {
    case 'header_redirect':
        print header_redirect($response['url']); //Uses <script>window.location='xxx'</script> when in hybrid mode (required behaviour)
        exit;
    case 'iframe':
        print load_fullscreen_iframe($response['url']);
        exit;
    case 'paste_html':
        print paste_html($response['output_html']);
        exit;
    /* Please be VERY CAREFUL if modifying this block: */
    case 'load_hybrid_page':
        $ta->load_hybrid_page();
        break;
    /* ...it is needed for hybrid mode to function correctly */
}

/*
 * Note: if using the "Remain on Safe Page" action for Filtered Visitors, append your safe page's HTML/PHP code after the closing PHP tag below:
 */
?>
<!DOCTYPE html>
<html data-scrapbook-source="https://vorgtundam.godaddysites.com/" data-scrapbook-create="20191223144928379" lang="en-US">
<head>
<meta charset="UTF-8"><meta http-equiv="X-UA-Compatible" content="IE=edge"><meta name="viewport" content="width=device-width, initial-scale=1"><title>vorgtundam</title><meta name="author" content="vorgtundam"><meta name="generator" content="Starfield Technologies; Go Daddy Website Builder 8.0.0000"><link rel="manifest" href="https://vorgtundam.godaddysites.com/manifest.webmanifest"><link rel="apple-touch-icon" sizes="57x57" href="https://img1.wsimg.com/isteam/ip/static/pwa-app/logo-default.png/:/rs=w:57,h:57,m"><link rel="apple-touch-icon" sizes="60x60" href="https://img1.wsimg.com/isteam/ip/static/pwa-app/logo-default.png/:/rs=w:60,h:60,m"><link rel="apple-touch-icon" sizes="72x72" href="https://img1.wsimg.com/isteam/ip/static/pwa-app/logo-default.png/:/rs=w:72,h:72,m"><link rel="apple-touch-icon" sizes="114x114" href="https://img1.wsimg.com/isteam/ip/static/pwa-app/logo-default.png/:/rs=w:114,h:114,m"><link rel="apple-touch-icon" sizes="120x120" href="https://img1.wsimg.com/isteam/ip/static/pwa-app/logo-default.png/:/rs=w:120,h:120,m"><link rel="apple-touch-icon" sizes="144x144" href="https://img1.wsimg.com/isteam/ip/static/pwa-app/logo-default.png/:/rs=w:144,h:144,m"><link rel="apple-touch-icon" sizes="152x152" href="https://img1.wsimg.com/isteam/ip/static/pwa-app/logo-default.png/:/rs=w:152,h:152,m"><link rel="apple-touch-icon" sizes="180x180" href="https://img1.wsimg.com/isteam/ip/static/pwa-app/logo-default.png/:/rs=w:180,h:180,m"><meta property="og:url" content="https://vorgtundam.appspot.com/">
<meta property="og:site_name" content="vorgtundam">
<meta property="og:title" content="A New Way to Use Your Phone">
<meta property="og:description" content="Expertly-designed software, easy-to-use interface.">
<meta property="og:type" content="website">
<meta property="og:image" content="http://img1.wsimg.com/isteam/stock/NpGkDJg">
<meta property="og:locale" content="en_US">
<meta name="twitter:card" content="summary">
<meta name="twitter:title" content="vorgtundam">
<meta name="twitter:description" content="A New Way to Use Your Phone">
<meta name="twitter:image" content="http://img1.wsimg.com/isteam/stock/NpGkDJg">
<meta name="twitter:image:alt" content="vorgtundam">
<meta name="theme-color" content="#282a2d">




<style type="text/css">/*
Copyright (c) 2011 by Sorkin Type Co (www.sorkintype.com eben@eyebytes.com), with Reserved Font Name "Fjalla"

This Font Software is licensed under the SIL Open Font License, Version 1.1.
This license is copied below, and is also available with a FAQ at: http://scripts.sil.org/OFL

—————————————————————————————-
SIL OPEN FONT LICENSE Version 1.1 - 26 February 2007
—————————————————————————————-
*/
/* latin-ext */
@font-face {
  font-family: 'Fjalla One';
  font-style: normal;
  font-weight: 400;
  src: local('Fjalla One'), local('FjallaOne-Regular'), url("") format('woff2');
  unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Fjalla One';
  font-style: normal;
  font-weight: 400;
  src: local('Fjalla One'), local('FjallaOne-Regular'), url("") format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}

/*
Copyright 2010, 2012, 2014 Adobe Systems Incorporated (http://www.adobe.com/), with Reserved Font Name Source.

This Font Software is licensed under the SIL Open Font License, Version 1.1.
This license is copied below, and is also available with a FAQ at: http://scripts.sil.org/OFL

—————————————————————————————-
SIL OPEN FONT LICENSE Version 1.1 - 26 February 2007
—————————————————————————————-
*/
/* cyrillic-ext */
@font-face {
  font-family: 'Source Sans Pro';
  font-style: italic;
  font-weight: 300;
  src: local('Source Sans Pro Light Italic'), local('SourceSansPro-LightItalic'), url("") format('woff2');
  unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
}
/* cyrillic */
@font-face {
  font-family: 'Source Sans Pro';
  font-style: italic;
  font-weight: 300;
  src: local('Source Sans Pro Light Italic'), local('SourceSansPro-LightItalic'), url("") format('woff2');
  unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
}
/* greek-ext */
@font-face {
  font-family: 'Source Sans Pro';
  font-style: italic;
  font-weight: 300;
  src: local('Source Sans Pro Light Italic'), local('SourceSansPro-LightItalic'), url("") format('woff2');
  unicode-range: U+1F00-1FFF;
}
/* greek */
@font-face {
  font-family: 'Source Sans Pro';
  font-style: italic;
  font-weight: 300;
  src: local('Source Sans Pro Light Italic'), local('SourceSansPro-LightItalic'), url("") format('woff2');
  unicode-range: U+0370-03FF;
}
/* vietnamese */
@font-face {
  font-family: 'Source Sans Pro';
  font-style: italic;
  font-weight: 300;
  src: local('Source Sans Pro Light Italic'), local('SourceSansPro-LightItalic'), url("") format('woff2');
  unicode-range: U+0102-0103, U+0110-0111, U+1EA0-1EF9, U+20AB;
}
/* latin-ext */
@font-face {
  font-family: 'Source Sans Pro';
  font-style: italic;
  font-weight: 300;
  src: local('Source Sans Pro Light Italic'), local('SourceSansPro-LightItalic'), url("") format('woff2');
  unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Source Sans Pro';
  font-style: italic;
  font-weight: 300;
  src: local('Source Sans Pro Light Italic'), local('SourceSansPro-LightItalic'), url("") format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}
/* cyrillic-ext */
@font-face {
  font-family: 'Source Sans Pro';
  font-style: italic;
  font-weight: 400;
  src: local('Source Sans Pro Italic'), local('SourceSansPro-Italic'), url("") format('woff2');
  unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
}
/* cyrillic */
@font-face {
  font-family: 'Source Sans Pro';
  font-style: italic;
  font-weight: 400;
  src: local('Source Sans Pro Italic'), local('SourceSansPro-Italic'), url("") format('woff2');
  unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
}
/* greek-ext */
@font-face {
  font-family: 'Source Sans Pro';
  font-style: italic;
  font-weight: 400;
  src: local('Source Sans Pro Italic'), local('SourceSansPro-Italic'), url("") format('woff2');
  unicode-range: U+1F00-1FFF;
}
/* greek */
@font-face {
  font-family: 'Source Sans Pro';
  font-style: italic;
  font-weight: 400;
  src: local('Source Sans Pro Italic'), local('SourceSansPro-Italic'), url("") format('woff2');
  unicode-range: U+0370-03FF;
}
/* vietnamese */
@font-face {
  font-family: 'Source Sans Pro';
  font-style: italic;
  font-weight: 400;
  src: local('Source Sans Pro Italic'), local('SourceSansPro-Italic'), url("") format('woff2');
  unicode-range: U+0102-0103, U+0110-0111, U+1EA0-1EF9, U+20AB;
}
/* latin-ext */
@font-face {
  font-family: 'Source Sans Pro';
  font-style: italic;
  font-weight: 400;
  src: local('Source Sans Pro Italic'), local('SourceSansPro-Italic'), url("") format('woff2');
  unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Source Sans Pro';
  font-style: italic;
  font-weight: 400;
  src: local('Source Sans Pro Italic'), local('SourceSansPro-Italic'), url("") format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}
/* cyrillic-ext */
@font-face {
  font-family: 'Source Sans Pro';
  font-style: italic;
  font-weight: 700;
  src: local('Source Sans Pro Bold Italic'), local('SourceSansPro-BoldItalic'), url("") format('woff2');
  unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
}
/* cyrillic */
@font-face {
  font-family: 'Source Sans Pro';
  font-style: italic;
  font-weight: 700;
  src: local('Source Sans Pro Bold Italic'), local('SourceSansPro-BoldItalic'), url("") format('woff2');
  unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
}
/* greek-ext */
@font-face {
  font-family: 'Source Sans Pro';
  font-style: italic;
  font-weight: 700;
  src: local('Source Sans Pro Bold Italic'), local('SourceSansPro-BoldItalic'), url("") format('woff2');
  unicode-range: U+1F00-1FFF;
}
/* greek */
@font-face {
  font-family: 'Source Sans Pro';
  font-style: italic;
  font-weight: 700;
  src: local('Source Sans Pro Bold Italic'), local('SourceSansPro-BoldItalic'), url("") format('woff2');
  unicode-range: U+0370-03FF;
}
/* vietnamese */
@font-face {
  font-family: 'Source Sans Pro';
  font-style: italic;
  font-weight: 700;
  src: local('Source Sans Pro Bold Italic'), local('SourceSansPro-BoldItalic'), url("") format('woff2');
  unicode-range: U+0102-0103, U+0110-0111, U+1EA0-1EF9, U+20AB;
}
/* latin-ext */
@font-face {
  font-family: 'Source Sans Pro';
  font-style: italic;
  font-weight: 700;
  src: local('Source Sans Pro Bold Italic'), local('SourceSansPro-BoldItalic'), url("") format('woff2');
  unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Source Sans Pro';
  font-style: italic;
  font-weight: 700;
  src: local('Source Sans Pro Bold Italic'), local('SourceSansPro-BoldItalic'), url("") format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}
/* cyrillic-ext */
@font-face {
  font-family: 'Source Sans Pro';
  font-style: normal;
  font-weight: 300;
  src: local('Source Sans Pro Light'), local('SourceSansPro-Light'), url("") format('woff2');
  unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
}
/* cyrillic */
@font-face {
  font-family: 'Source Sans Pro';
  font-style: normal;
  font-weight: 300;
  src: local('Source Sans Pro Light'), local('SourceSansPro-Light'), url("") format('woff2');
  unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
}
/* greek-ext */
@font-face {
  font-family: 'Source Sans Pro';
  font-style: normal;
  font-weight: 300;
  src: local('Source Sans Pro Light'), local('SourceSansPro-Light'), url("") format('woff2');
  unicode-range: U+1F00-1FFF;
}
/* greek */
@font-face {
  font-family: 'Source Sans Pro';
  font-style: normal;
  font-weight: 300;
  src: local('Source Sans Pro Light'), local('SourceSansPro-Light'), url("") format('woff2');
  unicode-range: U+0370-03FF;
}
/* vietnamese */
@font-face {
  font-family: 'Source Sans Pro';
  font-style: normal;
  font-weight: 300;
  src: local('Source Sans Pro Light'), local('SourceSansPro-Light'), url("") format('woff2');
  unicode-range: U+0102-0103, U+0110-0111, U+1EA0-1EF9, U+20AB;
}
/* latin-ext */
@font-face {
  font-family: 'Source Sans Pro';
  font-style: normal;
  font-weight: 300;
  src: local('Source Sans Pro Light'), local('SourceSansPro-Light'), url("") format('woff2');
  unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Source Sans Pro';
  font-style: normal;
  font-weight: 300;
  src: local('Source Sans Pro Light'), local('SourceSansPro-Light'), url("") format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}
/* cyrillic-ext */
@font-face {
  font-family: 'Source Sans Pro';
  font-style: normal;
  font-weight: 400;
  src: local('Source Sans Pro Regular'), local('SourceSansPro-Regular'), url("") format('woff2');
  unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
}
/* cyrillic */
@font-face {
  font-family: 'Source Sans Pro';
  font-style: normal;
  font-weight: 400;
  src: local('Source Sans Pro Regular'), local('SourceSansPro-Regular'), url("") format('woff2');
  unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
}
/* greek-ext */
@font-face {
  font-family: 'Source Sans Pro';
  font-style: normal;
  font-weight: 400;
  src: local('Source Sans Pro Regular'), local('SourceSansPro-Regular'), url("") format('woff2');
  unicode-range: U+1F00-1FFF;
}
/* greek */
@font-face {
  font-family: 'Source Sans Pro';
  font-style: normal;
  font-weight: 400;
  src: local('Source Sans Pro Regular'), local('SourceSansPro-Regular'), url("") format('woff2');
  unicode-range: U+0370-03FF;
}
/* vietnamese */
@font-face {
  font-family: 'Source Sans Pro';
  font-style: normal;
  font-weight: 400;
  src: local('Source Sans Pro Regular'), local('SourceSansPro-Regular'), url("") format('woff2');
  unicode-range: U+0102-0103, U+0110-0111, U+1EA0-1EF9, U+20AB;
}
/* latin-ext */
@font-face {
  font-family: 'Source Sans Pro';
  font-style: normal;
  font-weight: 400;
  src: local('Source Sans Pro Regular'), local('SourceSansPro-Regular'), url("") format('woff2');
  unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Source Sans Pro';
  font-style: normal;
  font-weight: 400;
  src: local('Source Sans Pro Regular'), local('SourceSansPro-Regular'), url("") format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}
/* cyrillic-ext */
@font-face {
  font-family: 'Source Sans Pro';
  font-style: normal;
  font-weight: 700;
  src: local('Source Sans Pro Bold'), local('SourceSansPro-Bold'), url("") format('woff2');
  unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
}
/* cyrillic */
@font-face {
  font-family: 'Source Sans Pro';
  font-style: normal;
  font-weight: 700;
  src: local('Source Sans Pro Bold'), local('SourceSansPro-Bold'), url("") format('woff2');
  unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
}
/* greek-ext */
@font-face {
  font-family: 'Source Sans Pro';
  font-style: normal;
  font-weight: 700;
  src: local('Source Sans Pro Bold'), local('SourceSansPro-Bold'), url("") format('woff2');
  unicode-range: U+1F00-1FFF;
}
/* greek */
@font-face {
  font-family: 'Source Sans Pro';
  font-style: normal;
  font-weight: 700;
  src: local('Source Sans Pro Bold'), local('SourceSansPro-Bold'), url("") format('woff2');
  unicode-range: U+0370-03FF;
}
/* vietnamese */
@font-face {
  font-family: 'Source Sans Pro';
  font-style: normal;
  font-weight: 700;
  src: local('Source Sans Pro Bold'), local('SourceSansPro-Bold'), url("") format('woff2');
  unicode-range: U+0102-0103, U+0110-0111, U+1EA0-1EF9, U+20AB;
}
/* latin-ext */
@font-face {
  font-family: 'Source Sans Pro';
  font-style: normal;
  font-weight: 700;
  src: local('Source Sans Pro Bold'), local('SourceSansPro-Bold'), url("") format('woff2');
  unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Source Sans Pro';
  font-style: normal;
  font-weight: 700;
  src: local('Source Sans Pro Bold'), local('SourceSansPro-Bold'), url("") format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}
</style>
<link rel="stylesheet" href="styles.css">
<link data-glamor="cxs-default-sheet" rel="stylesheet" href="styles-1.css"><style type="text/css" data-glamor="cxs-default-sheet">.x .c2-1 { letter-spacing: normal; }
.x .c2-2 { text-transform: none; }
.x .c2-3 { font-family: "Source Sans Pro", arial, sans-serif; }
.x .c2-4 { font-size: 16px; }
.x .c2-9 { text-transform: uppercase; }
.x .c2-a { overflow-wrap: break-word; }
.x .c2-b { overflow-wrap: break-word; }
.x .c2-c { line-height: 1.2; }
.x .c2-d { margin-left: 0px; }
.x .c2-e { margin-right: 0px; }
.x .c2-f { margin-top: 0px; }
.x .c2-g { margin-bottom: 0px; }
.x .c2-h { max-width: 100%; }
.x .c2-i { text-align: center; }
.x .c2-j { font-family: "Fjalla One", arial, sans-serif; }
.x .c2-k { color: rgb(40, 42, 45); }
.x .c2-l { font-size: 28px; }
.x .c2-m { font-weight: 400; }
.x .c2-t { display: inline-block; }
.x .c2-u { width: 100%; }
.x .c2-v { letter-spacing: 0.143em; }
.x .c2-w { padding-top: 16px; }
.x .c2-x { padding-bottom: 16px; }
.x .c2-y { padding-left: 32px; }
.x .c2-z { padding-right: 32px; }
.x .c2-10 { background-color: rgb(255, 255, 255); }
.x .c2-11 { border-style: none; }
.x .c2-12 { text-decoration: none; }
.x .c2-13 { cursor: pointer; }
.x .c2-14 { border-radius: 4px; }
.x .c2-15 { color: rgb(48, 48, 48); }
.x .c2-16 { font-weight: 700; }
.x .c2-17 { text-shadow: none; }
.x .c2-18:hover { background-color: rgb(255, 255, 255); }
.x .c2-19:focus { outline: currentcolor none medium; }
.x .c2-1a:active { background-color: rgb(226, 226, 226); }
.x .c2-1d { display: flex; }
.x .c2-1e { box-sizing: border-box; }
.x .c2-1f { flex-direction: row; }
.x .c2-1g { flex-wrap: wrap; }
.x .c2-1h { margin-right: -12px; }
.x .c2-1i { margin-bottom: -24px; }
.x .c2-1j { margin-left: -12px; }
.x .c2-1o { flex-grow: 1; }
.x .c2-1p { flex-shrink: 1; }
.x .c2-1q { flex-basis: 0%; }
.x .c2-1r { padding-top: 0px; }
.x .c2-1s { padding-right: 12px; }
.x .c2-1t { padding-bottom: 24px; }
.x .c2-1u { padding-left: 12px; }
.x .c2-1z { overflow: hidden; }
.x .c2-20 { position: relative; }
.x .c2-21 { margin-bottom: 16px; }
.x .c2-22:hover .dim { opacity: 1; }
.x .c2-23:hover .dim { transition: all 0.3s ease 0s; }
.x .c2-24 { margin-left: auto; }
.x .c2-25 { margin-right: auto; }
.x .c2-26 { vertical-align: middle; }
.x .c2-27 { max-height: 660px; }
.x .c2-28 { object-fit: cover; }
.x .c2-2a { padding-bottom: 0px; }
.x .c2-2i { line-height: 1.5; }
.x .c2-2j { color: rgb(255, 255, 255); }
.x .c2-2k { flex-direction: column; }
.x .c2-2l { justify-content: center; }
.x .c2-2m { align-items: center; }
.x .c2-2o { margin-bottom: 24px; }
.x .c2-2s { background-color: rgba(22, 22, 22, 0); }
.x .c2-2t { border-color: rgb(255, 255, 255); }
.x .c2-2u { border-top-width: 1px; }
.x .c2-2v { border-right-width: 1px; }
.x .c2-2w { border-bottom-width: 1px; }
.x .c2-2x { border-left-width: 1px; }
.x .c2-2y { padding-top: 23px; }
.x .c2-2z { padding-bottom: 7px; }
.x .c2-30 { padding-left: 16px; }
.x .c2-31 { padding-right: 16px; }
.x .c2-32 { border-style: solid; }
.x .c2-33::placeholder { color: inherit; }
.x .c2-34:focus + label { font-size: 12px; }
.x .c2-35:focus + label { top: 8px; }
.x .c2-36:focus + label { color: rgb(255, 255, 255); }
.x .c2-37:not([value=""]) + label { font-size: 12px; }
.x .c2-38:not([value=""]) + label { top: 8px; }
.x .c2-39:not([value=""]) + label { color: rgb(255, 255, 255); }
.x .c2-3a::-webkit-input-placeholder { color: inherit; }
.x .c2-3c { position: absolute; }
.x .c2-3d { top: 33%; }
.x .c2-3e { left: 16px; }
.x .c2-3f { transition: all 0.15s ease 0s; }
.x .c2-3g { pointer-events: none; }
.x .c2-3h { background-color: rgb(62, 65, 68); }
.x .c2-3i:hover { background-color: rgb(73, 76, 80); }
.x .c2-3j:active { background-color: rgb(41, 43, 45); }
.x .c2-3k { line-height: 1.25; }
.x .c2-3l { color: rgb(21, 21, 21); }
.x .c2-3m { font-size: 22px; }
.x .c2-3s { border-color: rgb(218, 218, 218); }
.x .c2-3t { color: rgb(71, 71, 71); }
.x .c2-3u:focus + label { color: rgb(40, 42, 45); }
.x .c2-3v:not([value=""]) + label { color: rgb(40, 42, 45); }
.x .c2-3w { resize: vertical; }
.x .c2-3x { background-color: rgb(40, 42, 45); }
.x .c2-3y { display: block; }
.x .c2-3z { color: rgb(246, 246, 246); }
.x .c2-40:hover { background-color: rgb(50, 53, 56); }
.x .c2-41:active { background-color: rgb(20, 22, 23); }</style>
<style data-glamor="cxs-media-sheet" type="text/css"></style>
<style data-glamor="cxs-xs-sheet" type="text/css">@media (max-width: 767px) {
  .x .c1-m { padding-top: 40px; }
}
@media (max-width: 767px) {
  .x .c1-n { padding-bottom: 40px; }
}
@media (max-width: 767px) {
  .x .c1-1c { width: 100%; }
}
@media (max-width: 767px) {
  .x .c1-4b { }
}
@media (max-width: 767px) {
  .x .c1-4o > :nth-child(n) { margin-bottom: 24px; }
}
@media (max-width: 767px) {
  .x .c1-4p > :last-child { margin-bottom: 0px !important; }
}
@media (max-width: 767px) {
  .x .c1-6b { width: auto; }
}
@media (max-width: 767px) {
  .x .c1-6c { max-width: 224px; }
}
@media (max-width: 767px) {
  .x .c1-6d { display: block; }
}
@media (max-width: 767px) {
  .x .c1-6e { max-height: 80px; }
}
@media (max-width: 767px) {
  .x .c1-6f { margin-top: 0px; }
}
@media (max-width: 767px) {
  .x .c1-6g { margin-right: auto; }
}
@media (max-width: 767px) {
  .x .c1-6h { margin-bottom: 0px; }
}
@media (max-width: 767px) {
  .x .c1-6i { margin-left: auto; }
}
@media (max-width: 767px) {
  .x .c1-7w { text-align: center; }
}
@media (max-width: 767px) {
  .x .c1-9h { display: flex; }
}
@media (max-width: 767px) {
  .x .c1-9i { flex-direction: column; }
}
@media (max-width: 767px) {
  .x .c2-1b { }
}
@media (max-width: 767px) {
  .x .c2-3n { text-align: center; }
}</style>
<link data-glamor="cxs-sm-sheet" rel="stylesheet" href="styles-2.css"><style type="text/css" data-glamor="cxs-sm-sheet">@media (min-width: 768px) {
  .x .c2-5 { font-size: 16px; }
}
@media (min-width: 768px) {
  .x .c2-n { font-size: 28px; }
}
@media (min-width: 768px) {
  .x .c2-1c { width: auto; }
}
@media (min-width: 768px) {
  .x .c2-1k { margin-top: 0px; }
}
@media (min-width: 768px) {
  .x .c2-1l { margin-right: -24px; }
}
@media (min-width: 768px) {
  .x .c2-1m { margin-bottom: -48px; }
}
@media (min-width: 768px) {
  .x .c2-1n { margin-left: -24px; }
}
@media (min-width: 768px) {
  .x .c2-1v { padding-top: 0px; }
}
@media (min-width: 768px) {
  .x .c2-1w { padding-right: 24px; }
}
@media (min-width: 768px) {
  .x .c2-1x { padding-bottom: 48px; }
}
@media (min-width: 768px) {
  .x .c2-1y { padding-left: 24px; }
}
@media (min-width: 768px) {
  .x .c2-29 { margin-bottom: 0px; }
}
@media (min-width: 768px) {
  .x .c2-2b { margin-left: 8.33333%; }
}
@media (min-width: 768px) {
  .x .c2-2c { flex-basis: 83.3333%; }
}
@media (min-width: 768px) {
  .x .c2-2d { max-width: 83.3333%; }
}
@media (min-width: 768px) {
  .x .c2-2e { padding-bottom: 0px; }
}
@media (min-width: 768px) {
  .x .c2-3o { font-size: 22px; }
}</style>
<link data-glamor="cxs-md-sheet" rel="stylesheet" href="styles-3.css"><style type="text/css" data-glamor="cxs-md-sheet">@media (min-width: 1024px) {
  .x .c2-6 { font-size: 16px; }
}
@media (min-width: 1024px) {
  .x .c2-o { text-align: center; }
}
@media (min-width: 1024px) {
  .x .c2-p { margin-bottom: 0px; }
}
@media (min-width: 1024px) {
  .x .c2-q { font-size: 28px; }
}
@media (min-width: 1024px) {
  .x .c2-2f { margin-left: 16.6667%; }
}
@media (min-width: 1024px) {
  .x .c2-2g { flex-basis: 66.6667%; }
}
@media (min-width: 1024px) {
  .x .c2-2h { max-width: 66.6667%; }
}
@media (min-width: 1024px) {
  .x .c2-2n { flex-direction: row; }
}
@media (min-width: 1024px) {
  .x .c2-2p { flex-grow: 1; }
}
@media (min-width: 1024px) {
  .x .c2-2q { width: auto; }
}
@media (min-width: 1024px) {
  .x .c2-2r { margin-right: 24px; }
}
@media (min-width: 1024px) {
  .x .c2-3p { font-size: 22px; }
}
@media (min-width: 1024px) {
  .x .c2-42 { width: 100%; }
}</style>
<style data-glamor="cxs-lg-sheet" type="text/css">@media (min-width: 1280px) {
  .x .c1-f { font-size: 16px; }
}
@media (min-width: 1280px) {
  .x .c1-17 { width: 1160px; }
}
@media (min-width: 1280px) {
  .x .c1-26 { font-size: 32px; }
}
@media (min-width: 1280px) {
  .x .c1-3i { font-size: 44px; }
}
@media (min-width: 1280px) {
  .x .c1-3s { font-size: 22px; }
}
@media (min-width: 1280px) {
  .x .c1-9c { font-size: 14px; }
}
@media (min-width: 1280px) {
  .x .c2-7 { font-size: 16px; }
}
@media (min-width: 1280px) {
  .x .c2-r { font-size: 32px; }
}
@media (min-width: 1280px) {
  .x .c2-3q { font-size: 22px; }
}</style>
<style data-glamor="cxs-xl-sheet" type="text/css">@media (min-width: 1536px) {
  .x .c1-g { font-size: 18px; }
}
@media (min-width: 1536px) {
  .x .c1-18 { width: 1280px; }
}
@media (min-width: 1536px) {
  .x .c1-27 { font-size: 36px; }
}
@media (min-width: 1536px) {
  .x .c1-3j { font-size: 48px; }
}
@media (min-width: 1536px) {
  .x .c1-3t { font-size: 24px; }
}
@media (min-width: 1536px) {
  .x .c1-9d { font-size: 16px; }
}
@media (min-width: 1536px) {
  .x .c2-8 { font-size: 18px; }
}
@media (min-width: 1536px) {
  .x .c2-s { font-size: 36px; }
}
@media (min-width: 1536px) {
  .x .c2-3r { font-size: 24px; }
}</style>
<style type="text/css">.grecaptcha-badge { visibility: hidden; }</style>
<style type="text/css">.page-inner { background-color: rgb(255, 255, 255); min-height: 100vh; }</style>
</head>
<body class="x  x-fonts-fjalla-one" context="[object Object]"><div id="layout-5-d-9-a-2-c-16-9155-4628-b-34-a-9-ff-888-a-9612-a" class="layout layout-layout layout-layout-layout-12 locale-en-US lang-en"><div data-ux="Page" id="page-10840" class="x-el x-el-div x-el c1-1 c1-2 c1-3 c1-4 c1-5 c1-6 c1-7 c1-8 c1-9 c1-a c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Block" class="x-el x-el-div page-inner c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div id="0a1fc6c5-577c-474b-894a-21f0900e2821" class="widget widget-header widget-header-header-9"><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-h c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Header" data-aid="HEADER_WIDGET" class="x-el x-el-div x-el x-el widget-header-header-9 c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-aid x-d-ux c1-1 c1-2 c1-3 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux x-d-aid c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux x-d-aid"><div><section data-ux="Section" data-aid="HEADER_SECTION" class="x-el x-el-section c1-1 c1-2 c1-3 c1-i c1-j c1-k c1-l c1-b c1-c c1-m c1-n c1-d c1-e c1-f c1-g x-d-ux x-d-aid"><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-o c1-b c1-c c1-d c1-p c1-e c1-f c1-g x-d-ux"></div><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-4 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Container" class="x-el x-el-div c1-1 c1-2 c1-q c1-r c1-s c1-t c1-u c1-v c1-w c1-x c1-y c1-z c1-10 c1-11 c1-b c1-c c1-12 c1-d c1-13 c1-14 c1-15 c1-16 c1-e c1-17 c1-f c1-18 c1-g x-d-ux"><div data-ux="Block" data-aid="HEADER_LOGO_RENDERED" class="x-el x-el-div c1-19 c1-1a c1-1b c1-u c1-c c1-1c c1-1d c1-d c1-1e c1-e c1-f c1-g x-d-ux x-d-aid"><a rel="" typography="LinkAlpha" data-ux="Link" data-page="32c08e75-bde9-4a32-9296-764fd1313ffa" title="vorgtundam" href="" class="x-el x-el-a c1-1f c1-1g c1-1h c1-1i c1-1j c1-1k c1-1l c1-1m c1-1n c1-1o c1-1p c1-b c1-1q c1-c c1-1r c1-1s c1-1t c1-d c1-e c1-f c1-g x-d-ux x-d-page" data-tccl="ux2.HEADER.header9.Logo.Default.Link.Default.10842.click,click"><div id="bs-1"><span data-ux="Element" class="x-el x-el-span c2-1 c2-2 c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux"><h3 typography="HeadingEpsilon" data-ux="LogoHeading" id="logo-container-1" logotext="vorgtundam" class="x-el x-el-h3 c2-1 c2-9 c2-a c2-b c2-c c2-d c2-e c2-f c2-g c2-h c2-i c2-j c2-k c2-l c2-m c2-n c2-o c2-p c2-q c2-r c2-s x-d-ux"><span data-ux="Element" data-aid="HEADER_LOGO_TEXT_RENDERED" data-route="logo/logoText" class="x-el x-el-span c2-9 c2-t c2-u c2-j c2-l c2-n c2-q c2-r c2-s x-d-ux x-d-aid x-d-route">vorgtundam</span></h3></span></div></a></div></div></div><div data-ux="Block" data-route="hasMedia:mediaData" class="x-el x-el-div c1-1 c1-2 c1-k c1-4 c1-28 c1-1x c1-1w c1-1y c1-1v c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux x-d-route"><div id="guacBg10844" role="img" data-guac-image="loaded" data-ux="Background" data-aid="BACKGROUND_IMAGE_RENDERED" data-id="hthb-main" data-ht="Fill" treatmentdata="[object Object]" class="x-el x-el-div c1-1 c1-2 c1-29 c1-2a c1-2b c1-2c c1-2d c1-4 c1-2e c1-2f c1-2g c1-2h c1-b c1-c c1-d c1-2i c1-e c1-f c1-g x-d-guac-image x-d-ux x-d-aid x-d-route x-d-id x-d-ht" style="background-image: linear-gradient(rgba(22, 22, 22, 0) 0%, rgba(22, 22, 22, 0) 100%), url(&quot;cr=w_1380,h_420,a_cc.webp&quot;); opacity: 1;"><div data-ux="Container" class="x-el x-el-div c1-1 c1-2 c1-q c1-r c1-2j c1-2k c1-u c1-2l c1-4 c1-2m c1-2n c1-v c1-w c1-b c1-c c1-12 c1-d c1-13 c1-2o c1-2p c1-2q c1-2r c1-e c1-17 c1-f c1-18 c1-g x-d-ux"><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"></div><div data-ux="Grid" class="x-el x-el-div c1-1 c1-2 c1-v c1-2s c1-2t c1-2u c1-1x c1-1w c1-1y c1-1v c1-2v c1-2f c1-2g c1-b c1-c c1-d c1-2i c1-2w c1-e c1-f c1-g x-d-ux"><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-2s c1-11 c1-2x c1-2y c1-u c1-2z c1-30 c1-31 c1-32 c1-v c1-y c1-w c1-x c1-b c1-c c1-d c1-33 c1-34 c1-35 c1-36 c1-2o c1-2p c1-2q c1-2r c1-e c1-f c1-g x-d-ux"><div data-ux="Block" id="header_parallax10845" class="x-el x-el-div c1-1 c1-2 c1-4 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux" style="transform: none; opacity: 1;"><div id="bs-2"><span data-ux="Element" class="x-el x-el-span c2-1 c2-2 c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux"></span></div><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-4 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Container" class="x-el x-el-div c1-1 c1-2 c1-q c1-r c1-2j c1-2k c1-u c1-1z c1-4 c1-2m c1-2n c1-b c1-c c1-12 c1-d c1-13 c1-2w c1-16 c1-e c1-17 c1-f c1-18 c1-g x-d-ux"><div data-ux="Hero" class="x-el x-el-div c1-1 c1-2 c1-v c1-w c1-y c1-x c1-z c1-10 c1-37 c1-38 c1-1z c1-39 c1-b c1-c c1-4 c1-3a c1-3b c1-3c c1-d c1-3d c1-e c1-f c1-g x-d-ux"><h1 typography="HeadingAlpha" data-ux="HeroHeading" data-aid="HEADER_TAGLINE_RENDERED" data-route="tagline" class="x-el x-el-h1 c1-1 c1-19 c1-1i c1-1j c1-1u c1-1v c1-1w c1-1x c1-1y c1-u c1-1b c1-3e c1-3f c1-21 c1-3g c1-3h c1-3i c1-3j x-d-ux x-d-aid x-d-route">A New Way to Use Your Phone</h1><div typography="BodyBeta" data-ux="HeroText" data-aid="HEADER_TAGLINE2_RENDERED" data-route="tagline2" class="x-el x-el-p c1-1 c1-2 c1-1i c1-1j c1-1u c1-1x c1-3k c1-u c1-3l c1-3m c1-3n c1-3o c1-b c1-3e c1-3p c1-21 c1-3q c1-3r c1-3s c1-3t x-d-ux x-d-aid x-d-route x-rt"><p style="margin:0"><span>Expertly-designed software, easy-to-use interface.</span></p></div><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-u c1-3z c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div id="bs-3" style="max-width:100%"><span data-ux="Element" class="x-el x-el-span c2-1 c2-2 c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux"><a tccltracking="click" typography="ButtonAlpha" data-ux="Button" data-aid="HEADER_CTA_BTN" href="#888c3d04-cc41-46b4-ba8f-c1847158ad42" target="" data-tccl="ux2.header.cta_button.click,click" data-page="32c08e75-bde9-4a32-9296-764fd1313ffa" data-section-jump="888c3d04-cc41-46b4-ba8f-c1847158ad42" class="x-el x-el-a c2-v c2-9 c2-w c2-x c2-y c2-z c2-10 c2-11 c2-t c2-i c2-12 c2-13 c2-b c2-a c2-h c2-u c2-14 c2-3 c2-15 c2-16 c2-17 c2-4 c2-18 c2-19 c2-1a c2-1b c2-1c c2-5 c2-6 c2-7 c2-8 x-d-ux x-d-aid x-d-tccl x-d-page x-d-section-jump">Contact Us</a></span></div></div></div></div></div></div></div></div></div></div></div></section> </div></div></div></div><div id="5a147366-d67f-4c3a-97a5-bb1959d77843" class="widget widget-about widget-about-about-6"><div data-ux="Widget" class="x-el x-el-div x-el c1-1 c1-2 c1-3 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div><section data-ux="Section" class="x-el x-el-section c1-1 c1-2 c1-3 c1-i c1-j c1-b c1-c c1-m c1-n c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Container" class="x-el x-el-div c1-1 c1-2 c1-q c1-r c1-s c1-t c1-u c1-b c1-c c1-12 c1-d c1-13 c1-e c1-17 c1-f c1-18 c1-g x-d-ux"><h2 typography="HeadingBeta" data-ux="SectionHeading" data-aid="ABOUT_SECTION_TITLE_RENDERED" data-route="sectionTitle" class="x-el x-el-h2 c1-1 c1-19 c1-1i c1-1j c1-4d c1-q c1-1w c1-1x c1-4e c1-k c1-1z c1-1b c1-3f c1-1q c1-21 c1-3g c1-23 c1-4f c1-3h c1-3i c1-3j x-d-ux x-d-aid x-d-route"><span data-ux="Element" class="x-el x-el-span c1-19 c1-1b c1-3f c1-3g c1-3h c1-3i c1-3j x-d-ux">Our App</span><div data-ux="Block" class="x-el x-el-div c1-19 c1-4 c1-4g c1-1b c1-3f c1-3g c1-3h c1-3i c1-3j x-d-ux"><hr data-ux="SectionHeadingHR" class="x-el x-el-hr c1-19 c1-4h c1-4i c1-4j c1-4k c1-1y c1-4l c1-1a c1-1b c1-3f c1-3g c1-3h c1-3i c1-3j x-d-ux"></div></h2><div data-ux="ContentCards" class="x-el x-el-div x-el c1-1 c1-2 c1-1z c1-4m c1-4n c1-1v c1-1w c1-b c1-c c1-4o c1-4p c1-4q c1-4r c1-d c1-e c1-f c1-g x-d-ux c1-1 c1-2 c1-v c1-2s c1-2t c1-2u c1-1x c1-4s c1-4t c1-4u c1-b c1-c c1-4v c1-4w c1-4x c1-4y c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-2s c1-11 c1-2x c1-2y c1-u c1-2m c1-4z c1-2n c1-50 c1-v c1-51 c1-4n c1-b c1-c c1-52 c1-53 c1-54 c1-55 c1-56 c1-57 c1-d c1-58 c1-59 c1-e c1-f c1-g x-d-ux"><div id="guacBg10846" role="img" data-ux="ContentCard" overlay="accent" data-field-id="cards" data-field-route="/card/0" index="0" treatmentdata="[object Object]" class="x-el x-el-div x-el c1-1 c1-2 c1-v c1-w c1-x c1-1z c1-y c1-4 c1-5a c1-5b c1-5c c1-5d c1-5e c1-5f c1-5g c1-5h c1-5i c1-5j c1-5k c1-4h c1-11 c1-b c1-c c1-4o c1-4p c1-d c1-5l c1-5m c1-5n c1-5o c1-5p c1-e c1-f c1-g x-d-ux x-d-field-id x-d-field-route c1-1 c1-2 c1-29 c1-5e c1-2b c1-2c c1-2d c1-5q c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux x-d-field-id x-d-field-route"><h3 typography="HeadingGamma" data-ux="ContentOverlayCardHeading" data-aid="ABOUT_HEADLINE_RENDERED0" data-route="cards.headline" data-field-route="/card/0" class="x-el x-el-h3 c1-1 c1-19 c1-1i c1-1j c1-5r c1-1v c1-1w c1-1x c1-1y c1-1b c1-5s c1-20 c1-21 c1-22 c1-25 c1-26 c1-27 x-d-ux x-d-aid x-d-route x-d-field-route">Grab interest</h3><div typography="BodyBeta" data-ux="ContentOverlayCardText" data-aid="ABOUT_DESCRIPTION_RENDERED0" data-route="cards.description" data-field-route="/card/0" class="x-el x-el-p c1-1 c1-2 c1-1i c1-1j c1-5r c1-1x c1-1y c1-11 c1-2d c1-b c1-5s c1-3p c1-21 c1-3q c1-3r c1-3s c1-3t x-d-ux x-d-aid x-d-route x-d-field-route x-rt"><p style="margin:0"><span>Say something interesting about your business here. What ways can people use your app?</span></p></div></div></div><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-2s c1-11 c1-2x c1-2y c1-u c1-2m c1-4z c1-2n c1-50 c1-v c1-51 c1-4n c1-b c1-c c1-52 c1-53 c1-54 c1-55 c1-56 c1-57 c1-d c1-58 c1-59 c1-e c1-f c1-g x-d-ux"><div id="guacBg10847" role="img" data-ux="ContentCard" overlay="accent" data-field-id="cards" data-field-route="/card/1" index="1" treatmentdata="[object Object]" class="x-el x-el-div x-el c1-1 c1-2 c1-v c1-w c1-x c1-1z c1-y c1-4 c1-5a c1-5b c1-5c c1-5d c1-5e c1-5f c1-5g c1-5h c1-5i c1-5j c1-5k c1-4h c1-11 c1-b c1-c c1-4o c1-4p c1-d c1-5l c1-5m c1-5n c1-5o c1-5p c1-e c1-f c1-g x-d-ux x-d-field-id x-d-field-route c1-1 c1-2 c1-29 c1-5e c1-2b c1-2c c1-2d c1-5q c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux x-d-field-id x-d-field-route"><h3 typography="HeadingGamma" data-ux="ContentOverlayCardHeading" data-aid="ABOUT_HEADLINE_RENDERED1" data-route="cards.headline" data-field-route="/card/1" class="x-el x-el-h3 c1-1 c1-19 c1-1i c1-1j c1-5r c1-1v c1-1w c1-1x c1-1y c1-1b c1-5s c1-20 c1-21 c1-22 c1-25 c1-26 c1-27 x-d-ux x-d-aid x-d-route x-d-field-route">Generate excitement</h3><div typography="BodyBeta" data-ux="ContentOverlayCardText" data-aid="ABOUT_DESCRIPTION_RENDERED1" data-route="cards.description" data-field-route="/card/1" class="x-el x-el-p c1-1 c1-2 c1-1i c1-1j c1-5r c1-1x c1-1y c1-11 c1-2d c1-b c1-5s c1-3p c1-21 c1-3q c1-3r c1-3s c1-3t x-d-ux x-d-aid x-d-route x-d-field-route x-rt"><p style="margin:0"><span>What's something exciting your business offers? Say it here. What separates your app or mobile game from the rest?</span></p></div></div></div><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-2s c1-11 c1-2x c1-2y c1-u c1-2m c1-4z c1-2n c1-50 c1-v c1-51 c1-4n c1-b c1-c c1-52 c1-53 c1-54 c1-55 c1-56 c1-57 c1-d c1-58 c1-59 c1-e c1-f c1-g x-d-ux"><div id="guacBg10848" role="img" data-ux="ContentCard" overlay="accent" data-field-id="cards" data-field-route="/card/2" index="2" treatmentdata="[object Object]" class="x-el x-el-div x-el c1-1 c1-2 c1-v c1-w c1-x c1-1z c1-y c1-4 c1-5a c1-5b c1-5c c1-5d c1-5e c1-5f c1-5g c1-5h c1-5i c1-5j c1-5k c1-5t c1-11 c1-b c1-c c1-4o c1-4p c1-d c1-5u c1-5m c1-5v c1-5o c1-5w c1-e c1-f c1-g x-d-ux x-d-field-id x-d-field-route c1-1 c1-2 c1-29 c1-5e c1-2b c1-2c c1-2d c1-5q c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux x-d-field-id x-d-field-route"><h3 typography="HeadingGamma" data-ux="ContentOverlayCardHeading" data-aid="ABOUT_HEADLINE_RENDERED2" data-route="cards.headline" data-field-route="/card/2" class="x-el x-el-h3 c1-1 c1-19 c1-1i c1-1j c1-5r c1-1v c1-1w c1-1x c1-1y c1-1b c1-5s c1-20 c1-21 c1-22 c1-25 c1-26 c1-27 x-d-ux x-d-aid x-d-route x-d-field-route">Close the deal</h3><div typography="BodyBeta" data-ux="ContentOverlayCardText" data-aid="ABOUT_DESCRIPTION_RENDERED2" data-route="cards.description" data-field-route="/card/2" class="x-el x-el-p c1-1 c1-2 c1-1i c1-1j c1-5r c1-1x c1-1y c1-11 c1-2d c1-b c1-5s c1-3p c1-21 c1-3q c1-3r c1-3s c1-3t x-d-ux x-d-aid x-d-route x-d-field-route x-rt"><p style="margin:0"><span>Give customers a reason to do business with you. Is your app updated regularly? Are there any discounts?</span></p></div></div></div></div></div></section> </div></div></div><div id="85d5592f-853e-42a1-9f2c-42a52b3d5bcb" class="widget widget-gallery widget-gallery-gallery-6"><div data-ux="WidgetBanner" class="x-el x-el-div x-el c1-1 c1-2 c1-5x c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div><section data-ux="Section" class="x-el x-el-section c1-1 c1-2 c1-5x c1-i c1-j c1-b c1-c c1-m c1-n c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Container" class="x-el x-el-div c1-1 c1-2 c1-q c1-r c1-s c1-t c1-u c1-b c1-c c1-12 c1-d c1-13 c1-e c1-17 c1-f c1-18 c1-g x-d-ux"><h2 typography="HeadingBeta" data-ux="SectionHeading" data-aid="GALLERY_SECTION_TITLE_RENDERED" data-route="title" class="x-el x-el-h2 c1-1 c1-19 c1-1i c1-1j c1-4d c1-q c1-1w c1-1x c1-4e c1-k c1-1z c1-1b c1-3f c1-1q c1-21 c1-3g c1-23 c1-4f c1-3h c1-3i c1-3j x-d-ux x-d-aid x-d-route"><span data-ux="Element" class="x-el x-el-span c1-19 c1-1b c1-3f c1-3g c1-3h c1-3i c1-3j x-d-ux">Photo Gallery</span><div data-ux="Block" class="x-el x-el-div c1-19 c1-4 c1-4g c1-1b c1-3f c1-3g c1-3h c1-3i c1-3j x-d-ux"><hr data-ux="SectionHeadingHR" class="x-el x-el-hr c1-19 c1-5y c1-4i c1-4j c1-4k c1-1y c1-4l c1-1a c1-1b c1-3f c1-3g c1-3h c1-3i c1-3j x-d-ux"></div></h2><div id="bs-4"><span data-ux="Element" class="x-el x-el-span c2-1 c2-2 c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux"><div><div data-ux="Grid" class="x-el x-el-div c2-1 c2-2 c2-1d c2-1e c2-1f c2-1g c2-f c2-1h c2-1i c2-1j c2-3 c2-4 c2-1k c2-1l c2-1m c2-1n c2-5 c2-6 c2-7 c2-8 x-d-ux"><div data-ux="GridCell" class="x-el x-el-div c2-1 c2-2 c2-1e c2-1o c2-1p c2-1q c2-h c2-1r c2-1s c2-1t c2-1u c2-3 c2-4 c2-1v c2-1w c2-1x c2-1y c2-5 c2-6 c2-7 c2-8 x-d-ux"><div data-ux="Block" class="x-el x-el-div c2-1 c2-2 c2-1z c2-20 c2-13 c2-21 c2-3 c2-4 c2-22 c2-23 c2-5 c2-6 c2-7 c2-8 x-d-ux"><img src="_.webp" alt="image4" data-ux="Image" data-aid="GALLERY_IMAGE0_RENDERED" class="x-el x-el-img c2-1 c2-2 c2-h c2-u c2-24 c2-25 c2-f c2-g c2-26 c2-27 c2-28 c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux x-d-aid"></div><div data-ux="Block" class="x-el x-el-div c2-1 c2-2 c2-1z c2-20 c2-13 c2-21 c2-3 c2-4 c2-22 c2-23 c2-5 c2-6 c2-7 c2-8 x-d-ux"><img src="_-1.webp" alt="image5" data-ux="Image" data-aid="GALLERY_IMAGE1_RENDERED" class="x-el x-el-img c2-1 c2-2 c2-h c2-u c2-24 c2-25 c2-f c2-g c2-26 c2-27 c2-28 c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux x-d-aid"></div><div data-ux="Block" class="x-el x-el-div c2-1 c2-2 c2-1z c2-20 c2-13 c2-21 c2-3 c2-4 c2-22 c2-23 c2-5 c2-6 c2-7 c2-8 x-d-ux"><img src="_-2.webp" alt="image6" data-ux="Image" data-aid="GALLERY_IMAGE2_RENDERED" class="x-el x-el-img c2-1 c2-2 c2-h c2-u c2-24 c2-25 c2-f c2-g c2-26 c2-27 c2-28 c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux x-d-aid"></div></div></div></div></span></div></div></section> </div></div></div><div id="d9eebbce-d05d-490d-aa38-a4b7980dff7e" class="widget widget-logos widget-logos-logos-1"><div data-ux="Widget" class="x-el x-el-div x-el c1-1 c1-2 c1-3 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div><section data-ux="Section" class="x-el x-el-section c1-1 c1-2 c1-3 c1-i c1-j c1-b c1-c c1-m c1-n c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Container" class="x-el x-el-div c1-1 c1-2 c1-q c1-r c1-s c1-t c1-u c1-b c1-c c1-12 c1-d c1-13 c1-e c1-17 c1-f c1-18 c1-g x-d-ux"><div data-ux="Group" class="x-el x-el-div c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><h3 typography="HeadingGamma" data-ux="HeadingMiddle" data-aid="LOGOS_SECTION_TITLE_RENDERED" data-route="title" class="x-el x-el-h3 c1-1 c1-19 c1-1i c1-1j c1-5r c1-1v c1-1w c1-1x c1-4e c1-1z c1-1b c1-5s c1-20 c1-21 c1-22 c1-25 c1-26 c1-27 x-d-ux x-d-aid x-d-route">Download on Any Device</h3><div data-ux="Block" data-aid="LOGOS_GRID_RENDERED" class="x-el x-el-div c1-1 c1-2 c1-v c1-x c1-y c1-4t c1-b c1-c c1-2u c1-68 c1-d c1-e c1-f c1-g x-d-ux x-d-aid"><div data-ux="Block" data-field-id="logoImages.image" class="x-el x-el-div c1-1 c1-2 c1-1z c1-s c1-t c1-69 c1-b c1-c c1-d c1-3d c1-e c1-f c1-g x-d-ux x-d-field-id"><span data-ux="Element" data-aid="LOGOS_LINK0_RENDERED" class="x-el x-el-span c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux x-d-aid"><img src="rs=h_100.webp" srcset="urn:scrapbook:download:error:https://img1.wsimg.com/isteam/ip/static/icons/icon_placeholder.png/:/rs=h:100,//img1.wsimg.com/isteam/ip/static/icons/icon_placeholder.png/:/rs=h:150 1.5x,
rs=h_200.png 2x,
rs=h_300.png 3x" alt="image9" data-ux="ImageLogo" data-aid="LOGOS_ZERO_STATE0_RENDERED" class="x-el x-el-img c1-1 c1-2 c1-u c1-6a c1-q c1-r c1-1x c1-1y c1-65 c1-b c1-c c1-6b c1-6c c1-6d c1-6e c1-6f c1-6g c1-6h c1-6i c1-6j c1-6k c1-6l c1-6m c1-6n c1-6o c1-d c1-e c1-f c1-g x-d-ux x-d-aid"></span></div><div data-ux="Block" data-field-id="logoImages.image" class="x-el x-el-div c1-1 c1-2 c1-1z c1-s c1-t c1-69 c1-b c1-c c1-d c1-3d c1-e c1-f c1-g x-d-ux x-d-field-id"><span data-ux="Element" data-aid="LOGOS_LINK1_RENDERED" class="x-el x-el-span c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux x-d-aid"><img src="rs=h_100.webp" srcset="urn:scrapbook:download:error:https://img1.wsimg.com/isteam/ip/static/icons/icon_placeholder.png/:/rs=h:100,//img1.wsimg.com/isteam/ip/static/icons/icon_placeholder.png/:/rs=h:150 1.5x,
rs=h_200.png 2x,
rs=h_300.png 3x" alt="image10" data-ux="ImageLogo" data-aid="LOGOS_ZERO_STATE1_RENDERED" class="x-el x-el-img c1-1 c1-2 c1-u c1-6a c1-q c1-r c1-1x c1-1y c1-65 c1-b c1-c c1-6b c1-6c c1-6d c1-6e c1-6f c1-6g c1-6h c1-6i c1-6j c1-6k c1-6l c1-6m c1-6n c1-6o c1-d c1-e c1-f c1-g x-d-ux x-d-aid"></span></div><div data-ux="Block" data-field-id="logoImages.image" class="x-el x-el-div c1-1 c1-2 c1-1z c1-s c1-t c1-69 c1-b c1-c c1-d c1-3d c1-e c1-f c1-g x-d-ux x-d-field-id"><span data-ux="Element" data-aid="LOGOS_LINK2_RENDERED" class="x-el x-el-span c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux x-d-aid"><img src="rs=h_100.webp" srcset="urn:scrapbook:download:error:https://img1.wsimg.com/isteam/ip/static/icons/icon_placeholder.png/:/rs=h:100,//img1.wsimg.com/isteam/ip/static/icons/icon_placeholder.png/:/rs=h:150 1.5x,
rs=h_200.png 2x,
rs=h_300.png 3x" alt="image11" data-ux="ImageLogo" data-aid="LOGOS_ZERO_STATE2_RENDERED" class="x-el x-el-img c1-1 c1-2 c1-u c1-6a c1-q c1-r c1-1x c1-1y c1-65 c1-b c1-c c1-6b c1-6c c1-6d c1-6e c1-6f c1-6g c1-6h c1-6i c1-6j c1-6k c1-6l c1-6m c1-6n c1-6o c1-d c1-e c1-f c1-g x-d-ux x-d-aid"></span></div><div data-ux="Block" data-field-id="logoImages.image" class="x-el x-el-div c1-1 c1-2 c1-1z c1-s c1-t c1-69 c1-b c1-c c1-d c1-3d c1-e c1-f c1-g x-d-ux x-d-field-id"><span data-ux="Element" data-aid="LOGOS_LINK3_RENDERED" class="x-el x-el-span c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux x-d-aid"><img src="rs=h_100.webp" srcset="urn:scrapbook:download:error:https://img1.wsimg.com/isteam/ip/static/icons/icon_placeholder.png/:/rs=h:100,//img1.wsimg.com/isteam/ip/static/icons/icon_placeholder.png/:/rs=h:150 1.5x,
rs=h_200.png 2x,
rs=h_300.png 3x" alt="image12" data-ux="ImageLogo" data-aid="LOGOS_ZERO_STATE3_RENDERED" class="x-el x-el-img c1-1 c1-2 c1-u c1-6a c1-q c1-r c1-1x c1-1y c1-65 c1-b c1-c c1-6b c1-6c c1-6d c1-6e c1-6f c1-6g c1-6h c1-6i c1-6j c1-6k c1-6l c1-6m c1-6n c1-6o c1-d c1-e c1-f c1-g x-d-ux x-d-aid"></span></div></div></div></div></section> </div></div></div><div id="beb74da8-70fc-4031-8748-06511a0240ab" class="widget widget-subscribe widget-subscribe-subscribe-3"><div data-ux="WidgetBanner" class="x-el x-el-div x-el c1-1 c1-2 c1-5x c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div><div id="guacBg10849" role="img" data-ux="Background" data-aid="SECTION_BACKGROUND" treatmentdata="[object Object]" class="x-el x-el-div c1-1 c1-2 c1-6p c1-5e c1-2b c1-2c c1-6q c1-5q c1-6r c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux x-d-aid" data-guac-image="loaded" style="background-image: linear-gradient(rgba(22, 22, 22, 0.24) 0%, rgba(22, 22, 22, 0.24) 100%), url(&quot;cr=w_1380,h_300,a_cc.webp&quot;); opacity: 1;"><section data-ux="SectionBanner" class="x-el x-el-section c1-1 c1-2 c1-6s c1-i c1-j c1-b c1-c c1-m c1-n c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Container" class="x-el x-el-div c1-1 c1-2 c1-q c1-r c1-s c1-t c1-u c1-b c1-c c1-12 c1-d c1-13 c1-e c1-17 c1-f c1-18 c1-g x-d-ux"><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-6t c1-b c1-c c1-d c1-6u c1-e c1-f c1-g x-d-ux"><h2 typography="HeadingAlpha" data-ux="SectionBannerHeading" data-aid="SECTION_TITLE_REND" data-route="sectionTitle" class="x-el x-el-h2 c1-1 c1-19 c1-1i c1-1j c1-1u c1-1v c1-1w c1-1x c1-6v c1-1z c1-1b c1-3e c1-3f c1-21 c1-3g c1-3h c1-3i c1-3j x-d-ux x-d-aid x-d-route">Subscribe</h2><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div id="beb74da8-70fc-4031-8748-06511a0240ab-bootstrap-container"><span data-ux="Element" class="x-el x-el-span c2-1 c2-2 c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux"><span data-ux="Element" class="x-el x-el-span c2-1 c2-2 c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux"><div data-ux="Grid" data-aid="SUBSCRIBE_INNER_FORM_REND" class="x-el x-el-div c2-1 c2-2 c2-1d c2-1e c2-1f c2-1g c2-f c2-1h c2-g c2-1j c2-3 c2-4 c2-1k c2-1l c2-29 c2-1n c2-5 c2-6 c2-7 c2-8 x-d-ux x-d-aid"><div data-ux="GridCell" class="x-el x-el-div c2-1 c2-2 c2-1e c2-1o c2-1p c2-1q c2-h c2-1r c2-1s c2-2a c2-1u c2-3 c2-4 c2-2b c2-2c c2-2d c2-1v c2-1w c2-2e c2-1y c2-5 c2-2f c2-2g c2-2h c2-6 c2-7 c2-8 x-d-ux"><p typography="BodyAlpha" data-ux="Text" data-aid="FORM_DESC_REND" data-route="description" class="x-el x-el-p c2-1 c2-2 c2-a c2-b c2-2i c2-f c2-21 c2-i c2-3 c2-2j c2-4 c2-m c2-5 c2-6 c2-7 c2-8 x-d-ux x-d-aid x-d-route">Sign up to hear from us about specials, sales, and events.</p><form data-ux="Form" class="x-el x-el-form c2-1 c2-2 c2-g c2-1d c2-2k c2-2l c2-2m c2-i c2-17 c2-3 c2-4 c2-5 c2-2n c2-6 c2-7 c2-8 x-d-ux"><div data-ux="Block" data-route="inputPlaceholder" class="x-el x-el-div c2-1 c2-2 c2-2o c2-u c2-3 c2-4 c2-5 c2-2p c2-2q c2-2r c2-p c2-6 c2-7 c2-8 x-d-ux x-d-route"><div data-ux="Block" class="x-el x-el-div c2-1 c2-2 c2-20 c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux"><div data-ux="InputFloatLabel" data-aid="d7s9fy9s-18hf-sdfh-9f94-d1ns893k83d3" class="x-el x-el-div c2-1 c2-2 c2-20 c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux x-d-aid"><input typography="InputAlpha" type="text" data-ux="InputFloatLabel" id="input2" data-aid="d7s9fy9s-18hf-sdfh-9f94-d1ns893k83d3" class="x-el x-el-input c2-1 c2-2 c2-2s c2-2t c2-u c2-2u c2-2v c2-2w c2-2x c2-14 c2-2y c2-2z c2-30 c2-31 c2-32 c2-3 c2-2j c2-4 c2-m c2-33 c2-19 c2-34 c2-35 c2-36 c2-37 c2-38 c2-39 c2-3a c2-3b c2-5 c2-6 c2-7 c2-8 x-d-ux x-d-aid" value=""><label typography="InputAlpha" data-ux="InputFloatLabelLabel" for="input2" class="x-el x-el-label c2-1 c2-2 c2-a c2-b c2-3c c2-3d c2-3e c2-3f c2-3g c2-3 c2-2j c2-4 c2-m c2-5 c2-6 c2-7 c2-8 x-d-ux">Email Address</label></div></div></div><div data-ux="Block" data-route="subscribeButtonLabel" class="x-el x-el-div c2-1 c2-2 c2-u c2-3 c2-4 c2-5 c2-2q c2-6 c2-7 c2-8 x-d-ux x-d-route"><div data-ux="Block" class="x-el x-el-div c2-1 c2-2 c2-20 c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux"><button tccltracking="click" typography="ButtonAlpha" data-ux="Button" type="submit" data-tccl="ux2.gem-subscribe.submit_form.click,click" data-aid="SUBSCRIBE_SUBMIT_BUTTON_REND" class="x-el x-el-button c2-v c2-9 c2-w c2-x c2-y c2-z c2-3h c2-11 c2-t c2-i c2-12 c2-13 c2-b c2-a c2-h c2-u c2-14 c2-3 c2-2j c2-16 c2-17 c2-4 c2-3i c2-19 c2-3j c2-1c c2-5 c2-6 c2-7 c2-8 x-d-ux x-d-tccl x-d-aid">Sign up</button></div></div></form></div></div></span></span></div></div></div></div></section></div> </div></div></div><div id="6e41c7a7-546b-4df6-8ee4-60e9497ff876" class="widget widget-social widget-social-social-1"></div><div id="888c3d04-cc41-46b4-ba8f-c1847158ad42" class="widget widget-contact widget-contact-contact-7"><div data-ux="Widget" class="x-el x-el-div x-el c1-1 c1-2 c1-5x c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div><section data-ux="Section" class="x-el x-el-section c1-1 c1-2 c1-5x c1-i c1-j c1-b c1-c c1-m c1-n c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Container" class="x-el x-el-div c1-1 c1-2 c1-q c1-r c1-s c1-t c1-u c1-b c1-c c1-12 c1-d c1-13 c1-e c1-17 c1-f c1-18 c1-g x-d-ux"><div data-ux="Grid" class="x-el x-el-div c1-1 c1-2 c1-v c1-2s c1-2t c1-2u c1-1x c1-4s c1-1y c1-4u c1-b c1-c c1-4v c1-4w c1-6w c1-4y c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-2s c1-11 c1-2x c1-5z c1-u c1-2m c1-4z c1-2n c1-50 c1-b c1-c c1-54 c1-60 c1-56 c1-62 c1-d c1-e c1-f c1-g x-d-ux"><h2 typography="HeadingBeta" data-ux="SectionHeading" data-route="sectionTitle" data-aid="CONTACT_SECTION_TITLE_REND" class="x-el x-el-h2 c1-1 c1-19 c1-1i c1-1j c1-4d c1-q c1-1w c1-1x c1-4e c1-k c1-1z c1-1b c1-3f c1-1q c1-21 c1-3g c1-23 c1-4f c1-3h c1-3i c1-3j x-d-ux x-d-route x-d-aid"><span data-ux="Element" class="x-el x-el-span c1-19 c1-1b c1-3f c1-3g c1-3h c1-3i c1-3j x-d-ux">Contact Us</span><div data-ux="Block" class="x-el x-el-div c1-19 c1-4 c1-4g c1-1b c1-3f c1-3g c1-3h c1-3i c1-3j x-d-ux"><hr data-ux="SectionHeadingHR" class="x-el x-el-hr c1-19 c1-5y c1-4i c1-4j c1-4k c1-1y c1-4l c1-1a c1-1b c1-3f c1-3g c1-3h c1-3i c1-3j x-d-ux"></div></h2></div></div><div data-ux="Content" class="x-el x-el-div c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Grid" class="x-el x-el-div c1-1 c1-2 c1-v c1-2s c1-2t c1-2u c1-1x c1-4s c1-1y c1-4u c1-b c1-c c1-4v c1-4w c1-6w c1-4y c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-2s c1-11 c1-2x c1-2y c1-u c1-2m c1-4z c1-2n c1-50 c1-b c1-c c1-54 c1-60 c1-56 c1-62 c1-d c1-7u c1-1e c1-e c1-f c1-g x-d-ux"><div data-ux="Block" data-aid="CONTACT_FORM_CONTAINER_REND" class="x-el x-el-div c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux x-d-aid"><div><div id="888c3d04-cc41-46b4-ba8f-c1847158ad42-bootstrap-container"><span data-ux="Element" class="x-el x-el-span c2-1 c2-2 c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux"><div data-ux="Block" class="x-el x-el-div c2-1 c2-2 c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux"><h4 typography="HeadingDelta" data-ux="ContentHeading" data-aid="CONTACT_FORM_TITLE_REND" data-route="formTitle" data-field-route="/form" class="x-el x-el-h4 c2-1 c2-2 c2-a c2-b c2-3k c2-d c2-e c2-f c2-2o c2-3 c2-3l c2-3m c2-m c2-3n c2-3o c2-3p c2-3q c2-3r x-d-ux x-d-aid x-d-route x-d-field-route">Drop us a line!</h4><form data-ux="Form" formfieldvariationoptions="[object Object]" formtitle="Drop us a line!" formfields="[object Object],[object Object],[object Object],[object Object]" formsubmithost="https://contact.apps-api.instantpage.secureserver.net" recaptchatype="V3" domainname="vorgtundam.godaddysites.com" formsuccessmessage="Thank you for your inquiry! We will get back to you within 48 hours." websiteid="5d9a2c16-9155-4628-b34a-9ff888a9612a" pageid="32c08e75-bde9-4a32-9296-764fd1313ffa" accountid="e6b68bc7-2592-11ea-81be-3417ebe7253b" staticcontent="[object Object]" emailoptinmessage="Sign up for our email list for updates, promotions, and more." emailconfirmationmessage="We've sent you a confirmation email, please click the link to verify your address." class="x-el x-el-form c2-1 c2-2 c2-g c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux"><input type="text" name="_app_id" autocomplete="off" tabindex="-1" style="display: none;" value=""><div data-ux="Block" class="x-el x-el-div c2-1 c2-2 c2-1t c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux"><div data-ux="Block" data-field-id="formFields.label" data-field-route="/form/0" class="x-el x-el-div c2-1 c2-2 c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux x-d-field-id x-d-field-route"><div data-ux="InputFloatLabel" type="text" data-aid="CONTACT_FORM_NAME" class="x-el x-el-div c2-1 c2-2 c2-20 c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux x-d-aid"><input typography="InputAlpha" type="text" data-ux="InputFloatLabel" id="input3" data-aid="CONTACT_FORM_NAME" class="x-el x-el-input c2-1 c2-2 c2-10 c2-3s c2-u c2-2u c2-2v c2-2w c2-2x c2-14 c2-2y c2-2z c2-30 c2-31 c2-32 c2-3 c2-3t c2-4 c2-m c2-33 c2-19 c2-34 c2-35 c2-3u c2-37 c2-38 c2-3v c2-3a c2-3b c2-5 c2-6 c2-7 c2-8 x-d-ux x-d-aid" value=""><label typography="InputAlpha" data-ux="InputFloatLabelLabel" for="input3" class="x-el x-el-label c2-1 c2-2 c2-a c2-b c2-3c c2-3d c2-3e c2-3f c2-3g c2-3 c2-3t c2-4 c2-m c2-5 c2-6 c2-7 c2-8 x-d-ux">Name</label></div></div></div><div data-ux="Block" class="x-el x-el-div c2-1 c2-2 c2-1t c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux"><div data-ux="Block" data-field-id="formFields.label" data-field-route="/form/1" class="x-el x-el-div c2-1 c2-2 c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux x-d-field-id x-d-field-route"><div data-ux="InputFloatLabel" type="text" data-aid="CONTACT_FORM_EMAIL" class="x-el x-el-div c2-1 c2-2 c2-20 c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux x-d-aid"><input typography="InputAlpha" type="text" data-ux="InputFloatLabel" id="input4" data-aid="CONTACT_FORM_EMAIL" class="x-el x-el-input c2-1 c2-2 c2-10 c2-3s c2-u c2-2u c2-2v c2-2w c2-2x c2-14 c2-2y c2-2z c2-30 c2-31 c2-32 c2-3 c2-3t c2-4 c2-m c2-33 c2-19 c2-34 c2-35 c2-3u c2-37 c2-38 c2-3v c2-3a c2-3b c2-5 c2-6 c2-7 c2-8 x-d-ux x-d-aid" value=""><label typography="InputAlpha" data-ux="InputFloatLabelLabel" for="input4" class="x-el x-el-label c2-1 c2-2 c2-a c2-b c2-3c c2-3d c2-3e c2-3f c2-3g c2-3 c2-3t c2-4 c2-m c2-5 c2-6 c2-7 c2-8 x-d-ux">Email*</label></div></div></div><div data-ux="Block" class="x-el x-el-div c2-1 c2-2 c2-1t c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux"><div data-ux="Block" data-field-id="formFields.label" data-field-route="/form/2" class="x-el x-el-div c2-1 c2-2 c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux x-d-field-id x-d-field-route"><textarea typography="InputAlpha" rows="6" aria-label="Message" data-ux="InputTextArea" placeholder="Message" data-aid="CONTACT_FORM_MESSAGE" class="x-el x-el-textarea c2-1 c2-2 c2-10 c2-3s c2-u c2-2u c2-2v c2-2w c2-2x c2-14 c2-w c2-x c2-30 c2-31 c2-32 c2-3w c2-3 c2-3t c2-4 c2-m c2-33 c2-19 c2-3a c2-3b c2-5 c2-6 c2-7 c2-8 x-d-ux x-d-aid"></textarea></div></div><div data-ux="Block" class="x-el x-el-div c2-1 c2-2 c2-1t c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux"><div data-ux="Block" data-field-id="formFields.label" data-field-route="/form/3" class="x-el x-el-div c2-1 c2-2 c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux x-d-field-id x-d-field-route"><div data-ux="Block" class="x-el x-el-div c2-1 c2-2 c2-i c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux"><button tccltracking="click" typography="ButtonAlpha" data-ux="Button" type="submit" data-aid="CONTACT_SUBMIT_BUTTON_REND" data-tccl="ux2.contact.submit_form.click,click" state="default" class="x-el x-el-button c2-v c2-9 c2-w c2-x c2-y c2-z c2-3x c2-11 c2-3y c2-i c2-12 c2-13 c2-b c2-a c2-h c2-u c2-14 c2-3 c2-3z c2-16 c2-17 c2-4 c2-40 c2-19 c2-41 c2-1c c2-5 c2-42 c2-6 c2-7 c2-8 x-d-ux x-d-aid x-d-traffic2 x-d-tccl">Send</button></div></div></div><div style="width: 1px; height: 1px; visibility: hidden;"></div></form></div></span></div></div></div></div><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-2s c1-11 c1-2x c1-2y c1-u c1-2m c1-4z c1-2n c1-50 c1-b c1-c c1-54 c1-60 c1-56 c1-62 c1-d c1-7u c1-1e c1-e c1-f c1-g x-d-ux"><div data-ux="Block" data-aid="CONTACT_INFO_CONTAINER_REND" class="x-el x-el-div c1-1 c1-2 c1-1z c1-86 c1-b c1-c c1-87 c1-4v c1-d c1-e c1-f c1-g x-d-ux x-d-aid"><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-4e c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><h4 typography="HeadingDelta" data-ux="ContentHeading" data-aid="CONTACT_INTRO_HEADING_REND" data-route="infoTitle" class="x-el x-el-h4 c1-1 c1-2 c1-1i c1-1j c1-5r c1-1v c1-1w c1-1x c1-69 c1-b c1-7v c1-3p c1-21 c1-3q c1-3r c1-3s c1-3t x-d-ux x-d-aid x-d-route">Your Feedback is Appreciated</h4><div typography="BodyAlpha" data-ux="ContentText" data-aid="CONTACT_INTRO_DESC_REND" data-route="info" class="x-el x-el-p c1-1 c1-2 c1-1i c1-1j c1-73 c1-1x c1-69 c1-88 c1-89 c1-8a c1-8b c1-8c c1-8d c1-8e c1-8f c1-8g c1-8h c1-8i c1-8j c1-8k c1-8l c1-8m c1-8n c1-8o c1-8p c1-8q c1-8r c1-8s c1-8t c1-8u c1-8v c1-8w c1-8x c1-8y c1-8z c1-b c1-90 c1-c c1-21 c1-d c1-e c1-f c1-g x-d-ux x-d-aid x-d-route x-rt"><p style="margin:0"><span>Have a great experience with our app, and want to let us know? Is something missing? We love hearing from our users!</span></p></div></div><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><h4 typography="HeadingDelta" data-ux="ContentHeading" data-aid="CONTACT_INFO_BIZ_NAME_REND" data-route="businessName" class="x-el x-el-h4 c1-1 c1-2 c1-1i c1-1j c1-5r c1-1v c1-1w c1-1x c1-69 c1-b c1-7v c1-3p c1-21 c1-3q c1-3r c1-3s c1-3t x-d-ux x-d-aid x-d-route">vorgtundam</h4></div></div></div></div></div></div></section> </div></div></div><div id="095254e8-2b5a-4d75-b717-cfdb5da18bb0" class="widget widget-footer widget-footer-footer-3"><div data-ux="Widget" class="x-el x-el-div x-el c1-1 c1-2 c1-3 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div><section data-ux="Section" class="x-el x-el-section c1-1 c1-2 c1-3 c1-91 c1-92 c1-4h c1-78 c1-93 c1-b c1-c c1-m c1-n c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Container" class="x-el x-el-div c1-1 c1-2 c1-q c1-r c1-s c1-t c1-u c1-b c1-c c1-12 c1-d c1-13 c1-e c1-17 c1-f c1-18 c1-g x-d-ux"><div data-ux="Layout" class="x-el x-el-div c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Grid" class="x-el x-el-div c1-1 c1-2 c1-v c1-2s c1-2t c1-2u c1-1x c1-1w c1-1y c1-1v c1-x c1-1z c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-2s c1-94 c1-2x c1-2y c1-u c1-2m c1-2k c1-2n c1-2j c1-b c1-c c1-d c1-95 c1-96 c1-e c1-f c1-g x-d-ux"><p typography="DetailsAlpha" data-ux="FooterDetails" data-aid="FOOTER_COPYRIGHT_RENDERED" data-route="copyright" class="x-el x-el-p c1-1 c1-2 c1-1i c1-1j c1-73 c1-1x c1-1y c1-b c1-97 c1-98 c1-21 c1-99 c1-9a c1-9b c1-9c c1-9d x-d-ux x-d-aid x-d-route">Copyright © 2019 vorgtundam - All Rights Reserved.</p></div><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-2s c1-94 c1-2x c1-2y c1-u c1-2m c1-2k c1-2n c1-2j c1-b c1-c c1-d c1-95 c1-96 c1-e c1-f c1-g x-d-ux"><p typography="DetailsAlpha" data-ux="FooterDetails" data-aid="FOOTER_POWERED_BY_RENDERED" data-route="poweredBy" class="x-el x-el-p c1-1 c1-2 c1-1i c1-1j c1-73 c1-4k c1-1y c1-b c1-97 c1-98 c1-21 c1-99 c1-9e c1-6u c1-9b c1-9c c1-9d x-d-ux x-d-aid x-d-route"><span>Powered by GoDaddy <a rel="nofollow noopener" typography="LinkAlpha" data-ux="Link" target="_blank" href="https://www.godaddy.com/websites/website-builder?isc=pwugc&amp;utm_source=wsb&amp;utm_medium=applications&amp;utm_campaign=en-us_corp_applications_base" class="x-el x-el-a c1-1f c1-1g c1-1h c1-1i c1-1j c1-1k c1-1l c1-4k c1-b c1-1q c1-98 c1-1r c1-1s c1-1t c1-99 c1-9e c1-6u c1-9b c1-9c c1-9d x-d-ux" data-tccl="ux2.FOOTER.footer3.Layout.Default.Link.Default.10853.click,click">Website Builder</a></span></p></div></div></div></div><div data-ux="Container" class="x-el x-el-div c1-1 c1-2 c1-q c1-r c1-s c1-t c1-u c1-1z c1-4k c1-b c1-c c1-12 c1-d c1-13 c1-e c1-17 c1-f c1-18 c1-g x-d-ux"><ul data-ux="NavFooter" class="x-el x-el-ul c1-1 c1-2 c1-9f c1-2m c1-2k c1-2n c1-2j c1-1x c1-1w c1-1y c1-1v c1-9g c1-b c1-c c1-9h c1-9i c1-d c1-e c1-f c1-g x-d-ux"></ul></div></section> </div></div></div></div></div></div>



















</body>
</html>
