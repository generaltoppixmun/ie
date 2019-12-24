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
<html data-scrapbook-source="https://kvelsaonger.godaddysites.com/" data-scrapbook-create="20191224150944599" lang="en-US">
<head>
<meta charset="UTF-8"><meta http-equiv="X-UA-Compatible" content="IE=edge"><meta name="viewport" content="width=device-width, initial-scale=1"><title>kvelsaonger</title><meta name="author" content="kvelsaonger"><meta name="generator" content="Starfield Technologies; Go Daddy Website Builder 8.0.0000"><link rel="manifest" href="https://kvelsaonger.godaddysites.com/manifest.webmanifest"><link rel="apple-touch-icon" sizes="57x57" href="https://img1.wsimg.com/isteam/ip/static/pwa-app/logo-default.png/:/rs=w:57,h:57,m"><link rel="apple-touch-icon" sizes="60x60" href="https://img1.wsimg.com/isteam/ip/static/pwa-app/logo-default.png/:/rs=w:60,h:60,m"><link rel="apple-touch-icon" sizes="72x72" href="https://img1.wsimg.com/isteam/ip/static/pwa-app/logo-default.png/:/rs=w:72,h:72,m"><link rel="apple-touch-icon" sizes="114x114" href="https://img1.wsimg.com/isteam/ip/static/pwa-app/logo-default.png/:/rs=w:114,h:114,m"><link rel="apple-touch-icon" sizes="120x120" href="https://img1.wsimg.com/isteam/ip/static/pwa-app/logo-default.png/:/rs=w:120,h:120,m"><link rel="apple-touch-icon" sizes="144x144" href="https://img1.wsimg.com/isteam/ip/static/pwa-app/logo-default.png/:/rs=w:144,h:144,m"><link rel="apple-touch-icon" sizes="152x152" href="https://img1.wsimg.com/isteam/ip/static/pwa-app/logo-default.png/:/rs=w:152,h:152,m"><link rel="apple-touch-icon" sizes="180x180" href="https://img1.wsimg.com/isteam/ip/static/pwa-app/logo-default.png/:/rs=w:180,h:180,m"><meta property="og:url" content="https://kvelsaonger.appspot.com/">
<meta property="og:site_name" content="kvelsaonger">
<meta property="og:title" content="A New Way to Use Your Phone">
<meta property="og:description" content="Expertly-designed software, easy-to-use interface.">
<meta property="og:type" content="website">
<meta property="og:image" content="http://img1.wsimg.com/isteam/stock/y6lGJBp">
<meta property="og:locale" content="en_US">
<meta name="twitter:card" content="summary">
<meta name="twitter:title" content="kvelsaonger">
<meta name="twitter:description" content="A New Way to Use Your Phone">
<meta name="twitter:image" content="http://img1.wsimg.com/isteam/stock/y6lGJBp">
<meta name="twitter:image:alt" content="kvelsaonger">
<meta name="theme-color" content="#6a456a"><script type="text/javascript" src="https://img1.wsimg.com/poly/v2/polyfill.min.js?unknown=polyfill&amp;flags=gated&amp;features=default%2Cfetch%2CArray.prototype.%40%40iterator%2CArray.prototype.find%2CArray.prototype.findIndex%2CFunction.name%2CNumber.isFinite%2CPromise%2CString.prototype.repeat%2CMath.sign%2CMath.trunc%2CArray.prototype.includes%2CObject.entries%2CObject.values%2CIntersectionObserver%2CIntl.~locale.en-US"></script>
<script type="text/javascript" src="https://img1.wsimg.com/blobby/go/gpub/e645c3e6fe995b50/script.js"></script>
<script type="text/javascript">"undefined"===typeof _trfq&&(window._trfq=[]);"undefined"==typeof _trfd&&(window._trfd=[]);</script>
<script type="text/javascript">function logTcclEvent(){var t=this.getAttribute("data-tccl");if(window._trfq&&t)try{for(var e=t.split(","),r=e[0],d=e[1],n=e.splice(2),c=[],o=0;o<n.length;o+=2)c.push([n[o],n[o+1]]);window._trfq.push(["cmdLogEvent",d,r,c])}catch(e){window._trfq.push(["cmdLogEvent","gc_published_site_error","tccl.published.log",[["error",e.toString()],["data",t]]])}}"undefined"!=typeof window&&"undefined"!=typeof document&&window.addEventListener("DOMContentLoaded",function(){for(var t=document.querySelectorAll("[data-tccl]"),e=0;e<t.length;e++)try{var r=t[e].getAttribute("data-tccl").split(",");t[e].addEventListener(r[1],logTcclEvent)}catch(t){window._trfq.push(["cmdLogEvent","gc_published_site_error","tccl.published.add",[["error",t.toString()]]])}});</script>
<script type="text/javascript">"use strict";

if ('serviceWorker' in navigator) {
  window.addEventListener('load', function () {
    navigator.serviceWorker.register('/sw.js').then(function () {
      console.log('sw: registration complete');
    }).catch(function (err) {
      console.log(err);
    });
  });
}</script>
<style type="text/css">/*
Copyright 2011 The Montserrat Project Authors (https://github.com/JulietaUla/Montserrat)

This Font Software is licensed under the SIL Open Font License, Version 1.1.
This license is copied below, and is also available with a FAQ at: http://scripts.sil.org/OFL

—————————————————————————————-
SIL OPEN FONT LICENSE Version 1.1 - 26 February 2007
—————————————————————————————-
*/
/* cyrillic-ext */
@font-face {
  font-family: 'Montserrat';
  font-style: normal;
  font-weight: 600;
  src: local('Montserrat SemiBold'), local('Montserrat-SemiBold'), url("https://img1.wsimg.com/gfonts/s/montserrat/v14/JTURjIg1_i6t8kCHKm45_bZF3gTD_vx3rCubqg.woff2") format('woff2');
  unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
}
/* cyrillic */
@font-face {
  font-family: 'Montserrat';
  font-style: normal;
  font-weight: 600;
  src: local('Montserrat SemiBold'), local('Montserrat-SemiBold'), url("https://img1.wsimg.com/gfonts/s/montserrat/v14/JTURjIg1_i6t8kCHKm45_bZF3g3D_vx3rCubqg.woff2") format('woff2');
  unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
}
/* vietnamese */
@font-face {
  font-family: 'Montserrat';
  font-style: normal;
  font-weight: 600;
  src: local('Montserrat SemiBold'), local('Montserrat-SemiBold'), url("https://img1.wsimg.com/gfonts/s/montserrat/v14/JTURjIg1_i6t8kCHKm45_bZF3gbD_vx3rCubqg.woff2") format('woff2');
  unicode-range: U+0102-0103, U+0110-0111, U+1EA0-1EF9, U+20AB;
}
/* latin-ext */
@font-face {
  font-family: 'Montserrat';
  font-style: normal;
  font-weight: 600;
  src: local('Montserrat SemiBold'), local('Montserrat-SemiBold'), url("https://img1.wsimg.com/gfonts/s/montserrat/v14/JTURjIg1_i6t8kCHKm45_bZF3gfD_vx3rCubqg.woff2") format('woff2');
  unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Montserrat';
  font-style: normal;
  font-weight: 600;
  src: local('Montserrat SemiBold'), local('Montserrat-SemiBold'), url("https://img1.wsimg.com/gfonts/s/montserrat/v14/JTURjIg1_i6t8kCHKm45_bZF3gnD_vx3rCs.woff2") format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}
/* cyrillic-ext */
@font-face {
  font-family: 'Montserrat';
  font-style: normal;
  font-weight: 700;
  src: local('Montserrat Bold'), local('Montserrat-Bold'), url("https://img1.wsimg.com/gfonts/s/montserrat/v14/JTURjIg1_i6t8kCHKm45_dJE3gTD_vx3rCubqg.woff2") format('woff2');
  unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
}
/* cyrillic */
@font-face {
  font-family: 'Montserrat';
  font-style: normal;
  font-weight: 700;
  src: local('Montserrat Bold'), local('Montserrat-Bold'), url("https://img1.wsimg.com/gfonts/s/montserrat/v14/JTURjIg1_i6t8kCHKm45_dJE3g3D_vx3rCubqg.woff2") format('woff2');
  unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
}
/* vietnamese */
@font-face {
  font-family: 'Montserrat';
  font-style: normal;
  font-weight: 700;
  src: local('Montserrat Bold'), local('Montserrat-Bold'), url("https://img1.wsimg.com/gfonts/s/montserrat/v14/JTURjIg1_i6t8kCHKm45_dJE3gbD_vx3rCubqg.woff2") format('woff2');
  unicode-range: U+0102-0103, U+0110-0111, U+1EA0-1EF9, U+20AB;
}
/* latin-ext */
@font-face {
  font-family: 'Montserrat';
  font-style: normal;
  font-weight: 700;
  src: local('Montserrat Bold'), local('Montserrat-Bold'), url("https://img1.wsimg.com/gfonts/s/montserrat/v14/JTURjIg1_i6t8kCHKm45_dJE3gfD_vx3rCubqg.woff2") format('woff2');
  unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Montserrat';
  font-style: normal;
  font-weight: 700;
  src: local('Montserrat Bold'), local('Montserrat-Bold'), url("https://img1.wsimg.com/gfonts/s/montserrat/v14/JTURjIg1_i6t8kCHKm45_dJE3gnD_vx3rCs.woff2") format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}

/*
Copyright 2011 Google Inc. All Rights Reserved.

Licensed under the Apache License, Version 2.0 (the "License");
you may not use this file except in compliance with the License.
You may obtain a copy of the License at

    http://www.apache.org/licenses/LICENSE-2.0

Unless required by applicable law or agreed to in writing, software
distributed under the License is distributed on an "AS IS" BASIS,
WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
See the License for the specific language governing permissions and
limitations under the License.
*/
/* cyrillic-ext */
@font-face {
  font-family: 'Roboto';
  font-style: italic;
  font-weight: 300;
  src: local('Roboto Light Italic'), local('Roboto-LightItalic'), url("https://img1.wsimg.com/gfonts/s/roboto/v20/KFOjCnqEu92Fr1Mu51TjASc3CsTYl4BOQ3o.woff2") format('woff2');
  unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
}
/* cyrillic */
@font-face {
  font-family: 'Roboto';
  font-style: italic;
  font-weight: 300;
  src: local('Roboto Light Italic'), local('Roboto-LightItalic'), url("https://img1.wsimg.com/gfonts/s/roboto/v20/KFOjCnqEu92Fr1Mu51TjASc-CsTYl4BOQ3o.woff2") format('woff2');
  unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
}
/* greek-ext */
@font-face {
  font-family: 'Roboto';
  font-style: italic;
  font-weight: 300;
  src: local('Roboto Light Italic'), local('Roboto-LightItalic'), url("https://img1.wsimg.com/gfonts/s/roboto/v20/KFOjCnqEu92Fr1Mu51TjASc2CsTYl4BOQ3o.woff2") format('woff2');
  unicode-range: U+1F00-1FFF;
}
/* greek */
@font-face {
  font-family: 'Roboto';
  font-style: italic;
  font-weight: 300;
  src: local('Roboto Light Italic'), local('Roboto-LightItalic'), url("https://img1.wsimg.com/gfonts/s/roboto/v20/KFOjCnqEu92Fr1Mu51TjASc5CsTYl4BOQ3o.woff2") format('woff2');
  unicode-range: U+0370-03FF;
}
/* vietnamese */
@font-face {
  font-family: 'Roboto';
  font-style: italic;
  font-weight: 300;
  src: local('Roboto Light Italic'), local('Roboto-LightItalic'), url("https://img1.wsimg.com/gfonts/s/roboto/v20/KFOjCnqEu92Fr1Mu51TjASc1CsTYl4BOQ3o.woff2") format('woff2');
  unicode-range: U+0102-0103, U+0110-0111, U+1EA0-1EF9, U+20AB;
}
/* latin-ext */
@font-face {
  font-family: 'Roboto';
  font-style: italic;
  font-weight: 300;
  src: local('Roboto Light Italic'), local('Roboto-LightItalic'), url("https://img1.wsimg.com/gfonts/s/roboto/v20/KFOjCnqEu92Fr1Mu51TjASc0CsTYl4BOQ3o.woff2") format('woff2');
  unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Roboto';
  font-style: italic;
  font-weight: 300;
  src: local('Roboto Light Italic'), local('Roboto-LightItalic'), url("https://img1.wsimg.com/gfonts/s/roboto/v20/KFOjCnqEu92Fr1Mu51TjASc6CsTYl4BO.woff2") format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}
/* cyrillic-ext */
@font-face {
  font-family: 'Roboto';
  font-style: italic;
  font-weight: 400;
  src: local('Roboto Italic'), local('Roboto-Italic'), url("https://img1.wsimg.com/gfonts/s/roboto/v20/KFOkCnqEu92Fr1Mu51xFIzIXKMnyrYk.woff2") format('woff2');
  unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
}
/* cyrillic */
@font-face {
  font-family: 'Roboto';
  font-style: italic;
  font-weight: 400;
  src: local('Roboto Italic'), local('Roboto-Italic'), url("https://img1.wsimg.com/gfonts/s/roboto/v20/KFOkCnqEu92Fr1Mu51xMIzIXKMnyrYk.woff2") format('woff2');
  unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
}
/* greek-ext */
@font-face {
  font-family: 'Roboto';
  font-style: italic;
  font-weight: 400;
  src: local('Roboto Italic'), local('Roboto-Italic'), url("https://img1.wsimg.com/gfonts/s/roboto/v20/KFOkCnqEu92Fr1Mu51xEIzIXKMnyrYk.woff2") format('woff2');
  unicode-range: U+1F00-1FFF;
}
/* greek */
@font-face {
  font-family: 'Roboto';
  font-style: italic;
  font-weight: 400;
  src: local('Roboto Italic'), local('Roboto-Italic'), url("https://img1.wsimg.com/gfonts/s/roboto/v20/KFOkCnqEu92Fr1Mu51xLIzIXKMnyrYk.woff2") format('woff2');
  unicode-range: U+0370-03FF;
}
/* vietnamese */
@font-face {
  font-family: 'Roboto';
  font-style: italic;
  font-weight: 400;
  src: local('Roboto Italic'), local('Roboto-Italic'), url("https://img1.wsimg.com/gfonts/s/roboto/v20/KFOkCnqEu92Fr1Mu51xHIzIXKMnyrYk.woff2") format('woff2');
  unicode-range: U+0102-0103, U+0110-0111, U+1EA0-1EF9, U+20AB;
}
/* latin-ext */
@font-face {
  font-family: 'Roboto';
  font-style: italic;
  font-weight: 400;
  src: local('Roboto Italic'), local('Roboto-Italic'), url("https://img1.wsimg.com/gfonts/s/roboto/v20/KFOkCnqEu92Fr1Mu51xGIzIXKMnyrYk.woff2") format('woff2');
  unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Roboto';
  font-style: italic;
  font-weight: 400;
  src: local('Roboto Italic'), local('Roboto-Italic'), url("https://img1.wsimg.com/gfonts/s/roboto/v20/KFOkCnqEu92Fr1Mu51xIIzIXKMny.woff2") format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}
/* cyrillic-ext */
@font-face {
  font-family: 'Roboto';
  font-style: italic;
  font-weight: 700;
  src: local('Roboto Bold Italic'), local('Roboto-BoldItalic'), url("https://img1.wsimg.com/gfonts/s/roboto/v20/KFOjCnqEu92Fr1Mu51TzBic3CsTYl4BOQ3o.woff2") format('woff2');
  unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
}
/* cyrillic */
@font-face {
  font-family: 'Roboto';
  font-style: italic;
  font-weight: 700;
  src: local('Roboto Bold Italic'), local('Roboto-BoldItalic'), url("https://img1.wsimg.com/gfonts/s/roboto/v20/KFOjCnqEu92Fr1Mu51TzBic-CsTYl4BOQ3o.woff2") format('woff2');
  unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
}
/* greek-ext */
@font-face {
  font-family: 'Roboto';
  font-style: italic;
  font-weight: 700;
  src: local('Roboto Bold Italic'), local('Roboto-BoldItalic'), url("https://img1.wsimg.com/gfonts/s/roboto/v20/KFOjCnqEu92Fr1Mu51TzBic2CsTYl4BOQ3o.woff2") format('woff2');
  unicode-range: U+1F00-1FFF;
}
/* greek */
@font-face {
  font-family: 'Roboto';
  font-style: italic;
  font-weight: 700;
  src: local('Roboto Bold Italic'), local('Roboto-BoldItalic'), url("https://img1.wsimg.com/gfonts/s/roboto/v20/KFOjCnqEu92Fr1Mu51TzBic5CsTYl4BOQ3o.woff2") format('woff2');
  unicode-range: U+0370-03FF;
}
/* vietnamese */
@font-face {
  font-family: 'Roboto';
  font-style: italic;
  font-weight: 700;
  src: local('Roboto Bold Italic'), local('Roboto-BoldItalic'), url("https://img1.wsimg.com/gfonts/s/roboto/v20/KFOjCnqEu92Fr1Mu51TzBic1CsTYl4BOQ3o.woff2") format('woff2');
  unicode-range: U+0102-0103, U+0110-0111, U+1EA0-1EF9, U+20AB;
}
/* latin-ext */
@font-face {
  font-family: 'Roboto';
  font-style: italic;
  font-weight: 700;
  src: local('Roboto Bold Italic'), local('Roboto-BoldItalic'), url("https://img1.wsimg.com/gfonts/s/roboto/v20/KFOjCnqEu92Fr1Mu51TzBic0CsTYl4BOQ3o.woff2") format('woff2');
  unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Roboto';
  font-style: italic;
  font-weight: 700;
  src: local('Roboto Bold Italic'), local('Roboto-BoldItalic'), url("https://img1.wsimg.com/gfonts/s/roboto/v20/KFOjCnqEu92Fr1Mu51TzBic6CsTYl4BO.woff2") format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}
/* cyrillic-ext */
@font-face {
  font-family: 'Roboto';
  font-style: normal;
  font-weight: 100;
  src: local('Roboto Thin'), local('Roboto-Thin'), url("https://img1.wsimg.com/gfonts/s/roboto/v20/KFOkCnqEu92Fr1MmgVxFIzIXKMnyrYk.woff2") format('woff2');
  unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
}
/* cyrillic */
@font-face {
  font-family: 'Roboto';
  font-style: normal;
  font-weight: 100;
  src: local('Roboto Thin'), local('Roboto-Thin'), url("https://img1.wsimg.com/gfonts/s/roboto/v20/KFOkCnqEu92Fr1MmgVxMIzIXKMnyrYk.woff2") format('woff2');
  unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
}
/* greek-ext */
@font-face {
  font-family: 'Roboto';
  font-style: normal;
  font-weight: 100;
  src: local('Roboto Thin'), local('Roboto-Thin'), url("https://img1.wsimg.com/gfonts/s/roboto/v20/KFOkCnqEu92Fr1MmgVxEIzIXKMnyrYk.woff2") format('woff2');
  unicode-range: U+1F00-1FFF;
}
/* greek */
@font-face {
  font-family: 'Roboto';
  font-style: normal;
  font-weight: 100;
  src: local('Roboto Thin'), local('Roboto-Thin'), url("https://img1.wsimg.com/gfonts/s/roboto/v20/KFOkCnqEu92Fr1MmgVxLIzIXKMnyrYk.woff2") format('woff2');
  unicode-range: U+0370-03FF;
}
/* vietnamese */
@font-face {
  font-family: 'Roboto';
  font-style: normal;
  font-weight: 100;
  src: local('Roboto Thin'), local('Roboto-Thin'), url("https://img1.wsimg.com/gfonts/s/roboto/v20/KFOkCnqEu92Fr1MmgVxHIzIXKMnyrYk.woff2") format('woff2');
  unicode-range: U+0102-0103, U+0110-0111, U+1EA0-1EF9, U+20AB;
}
/* latin-ext */
@font-face {
  font-family: 'Roboto';
  font-style: normal;
  font-weight: 100;
  src: local('Roboto Thin'), local('Roboto-Thin'), url("https://img1.wsimg.com/gfonts/s/roboto/v20/KFOkCnqEu92Fr1MmgVxGIzIXKMnyrYk.woff2") format('woff2');
  unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Roboto';
  font-style: normal;
  font-weight: 100;
  src: local('Roboto Thin'), local('Roboto-Thin'), url("https://img1.wsimg.com/gfonts/s/roboto/v20/KFOkCnqEu92Fr1MmgVxIIzIXKMny.woff2") format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}
/* cyrillic-ext */
@font-face {
  font-family: 'Roboto';
  font-style: normal;
  font-weight: 300;
  src: local('Roboto Light'), local('Roboto-Light'), url("https://img1.wsimg.com/gfonts/s/roboto/v20/KFOlCnqEu92Fr1MmSU5fCRc4AMP6lbBP.woff2") format('woff2');
  unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
}
/* cyrillic */
@font-face {
  font-family: 'Roboto';
  font-style: normal;
  font-weight: 300;
  src: local('Roboto Light'), local('Roboto-Light'), url("https://img1.wsimg.com/gfonts/s/roboto/v20/KFOlCnqEu92Fr1MmSU5fABc4AMP6lbBP.woff2") format('woff2');
  unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
}
/* greek-ext */
@font-face {
  font-family: 'Roboto';
  font-style: normal;
  font-weight: 300;
  src: local('Roboto Light'), local('Roboto-Light'), url("https://img1.wsimg.com/gfonts/s/roboto/v20/KFOlCnqEu92Fr1MmSU5fCBc4AMP6lbBP.woff2") format('woff2');
  unicode-range: U+1F00-1FFF;
}
/* greek */
@font-face {
  font-family: 'Roboto';
  font-style: normal;
  font-weight: 300;
  src: local('Roboto Light'), local('Roboto-Light'), url("https://img1.wsimg.com/gfonts/s/roboto/v20/KFOlCnqEu92Fr1MmSU5fBxc4AMP6lbBP.woff2") format('woff2');
  unicode-range: U+0370-03FF;
}
/* vietnamese */
@font-face {
  font-family: 'Roboto';
  font-style: normal;
  font-weight: 300;
  src: local('Roboto Light'), local('Roboto-Light'), url("https://img1.wsimg.com/gfonts/s/roboto/v20/KFOlCnqEu92Fr1MmSU5fCxc4AMP6lbBP.woff2") format('woff2');
  unicode-range: U+0102-0103, U+0110-0111, U+1EA0-1EF9, U+20AB;
}
/* latin-ext */
@font-face {
  font-family: 'Roboto';
  font-style: normal;
  font-weight: 300;
  src: local('Roboto Light'), local('Roboto-Light'), url("https://img1.wsimg.com/gfonts/s/roboto/v20/KFOlCnqEu92Fr1MmSU5fChc4AMP6lbBP.woff2") format('woff2');
  unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Roboto';
  font-style: normal;
  font-weight: 300;
  src: local('Roboto Light'), local('Roboto-Light'), url("https://img1.wsimg.com/gfonts/s/roboto/v20/KFOlCnqEu92Fr1MmSU5fBBc4AMP6lQ.woff2") format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}
/* cyrillic-ext */
@font-face {
  font-family: 'Roboto';
  font-style: normal;
  font-weight: 400;
  src: local('Roboto'), local('Roboto-Regular'), url("https://img1.wsimg.com/gfonts/s/roboto/v20/KFOmCnqEu92Fr1Mu72xKKTU1Kvnz.woff2") format('woff2');
  unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
}
/* cyrillic */
@font-face {
  font-family: 'Roboto';
  font-style: normal;
  font-weight: 400;
  src: local('Roboto'), local('Roboto-Regular'), url("https://img1.wsimg.com/gfonts/s/roboto/v20/KFOmCnqEu92Fr1Mu5mxKKTU1Kvnz.woff2") format('woff2');
  unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
}
/* greek-ext */
@font-face {
  font-family: 'Roboto';
  font-style: normal;
  font-weight: 400;
  src: local('Roboto'), local('Roboto-Regular'), url("https://img1.wsimg.com/gfonts/s/roboto/v20/KFOmCnqEu92Fr1Mu7mxKKTU1Kvnz.woff2") format('woff2');
  unicode-range: U+1F00-1FFF;
}
/* greek */
@font-face {
  font-family: 'Roboto';
  font-style: normal;
  font-weight: 400;
  src: local('Roboto'), local('Roboto-Regular'), url("https://img1.wsimg.com/gfonts/s/roboto/v20/KFOmCnqEu92Fr1Mu4WxKKTU1Kvnz.woff2") format('woff2');
  unicode-range: U+0370-03FF;
}
/* vietnamese */
@font-face {
  font-family: 'Roboto';
  font-style: normal;
  font-weight: 400;
  src: local('Roboto'), local('Roboto-Regular'), url("https://img1.wsimg.com/gfonts/s/roboto/v20/KFOmCnqEu92Fr1Mu7WxKKTU1Kvnz.woff2") format('woff2');
  unicode-range: U+0102-0103, U+0110-0111, U+1EA0-1EF9, U+20AB;
}
/* latin-ext */
@font-face {
  font-family: 'Roboto';
  font-style: normal;
  font-weight: 400;
  src: local('Roboto'), local('Roboto-Regular'), url("https://img1.wsimg.com/gfonts/s/roboto/v20/KFOmCnqEu92Fr1Mu7GxKKTU1Kvnz.woff2") format('woff2');
  unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Roboto';
  font-style: normal;
  font-weight: 400;
  src: local('Roboto'), local('Roboto-Regular'), url("https://img1.wsimg.com/gfonts/s/roboto/v20/KFOmCnqEu92Fr1Mu4mxKKTU1Kg.woff2") format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}
/* cyrillic-ext */
@font-face {
  font-family: 'Roboto';
  font-style: normal;
  font-weight: 700;
  src: local('Roboto Bold'), local('Roboto-Bold'), url("https://img1.wsimg.com/gfonts/s/roboto/v20/KFOlCnqEu92Fr1MmWUlfCRc4AMP6lbBP.woff2") format('woff2');
  unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
}
/* cyrillic */
@font-face {
  font-family: 'Roboto';
  font-style: normal;
  font-weight: 700;
  src: local('Roboto Bold'), local('Roboto-Bold'), url("https://img1.wsimg.com/gfonts/s/roboto/v20/KFOlCnqEu92Fr1MmWUlfABc4AMP6lbBP.woff2") format('woff2');
  unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
}
/* greek-ext */
@font-face {
  font-family: 'Roboto';
  font-style: normal;
  font-weight: 700;
  src: local('Roboto Bold'), local('Roboto-Bold'), url("https://img1.wsimg.com/gfonts/s/roboto/v20/KFOlCnqEu92Fr1MmWUlfCBc4AMP6lbBP.woff2") format('woff2');
  unicode-range: U+1F00-1FFF;
}
/* greek */
@font-face {
  font-family: 'Roboto';
  font-style: normal;
  font-weight: 700;
  src: local('Roboto Bold'), local('Roboto-Bold'), url("https://img1.wsimg.com/gfonts/s/roboto/v20/KFOlCnqEu92Fr1MmWUlfBxc4AMP6lbBP.woff2") format('woff2');
  unicode-range: U+0370-03FF;
}
/* vietnamese */
@font-face {
  font-family: 'Roboto';
  font-style: normal;
  font-weight: 700;
  src: local('Roboto Bold'), local('Roboto-Bold'), url("https://img1.wsimg.com/gfonts/s/roboto/v20/KFOlCnqEu92Fr1MmWUlfCxc4AMP6lbBP.woff2") format('woff2');
  unicode-range: U+0102-0103, U+0110-0111, U+1EA0-1EF9, U+20AB;
}
/* latin-ext */
@font-face {
  font-family: 'Roboto';
  font-style: normal;
  font-weight: 700;
  src: local('Roboto Bold'), local('Roboto-Bold'), url("https://img1.wsimg.com/gfonts/s/roboto/v20/KFOlCnqEu92Fr1MmWUlfChc4AMP6lbBP.woff2") format('woff2');
  unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Roboto';
  font-style: normal;
  font-weight: 700;
  src: local('Roboto Bold'), local('Roboto-Bold'), url("https://img1.wsimg.com/gfonts/s/roboto/v20/KFOlCnqEu92Fr1MmWUlfBBc4AMP6lQ.woff2") format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}
/* cyrillic-ext */
@font-face {
  font-family: 'Roboto';
  font-style: normal;
  font-weight: 900;
  src: local('Roboto Black'), local('Roboto-Black'), url("https://img1.wsimg.com/gfonts/s/roboto/v20/KFOlCnqEu92Fr1MmYUtfCRc4AMP6lbBP.woff2") format('woff2');
  unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
}
/* cyrillic */
@font-face {
  font-family: 'Roboto';
  font-style: normal;
  font-weight: 900;
  src: local('Roboto Black'), local('Roboto-Black'), url("https://img1.wsimg.com/gfonts/s/roboto/v20/KFOlCnqEu92Fr1MmYUtfABc4AMP6lbBP.woff2") format('woff2');
  unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
}
/* greek-ext */
@font-face {
  font-family: 'Roboto';
  font-style: normal;
  font-weight: 900;
  src: local('Roboto Black'), local('Roboto-Black'), url("https://img1.wsimg.com/gfonts/s/roboto/v20/KFOlCnqEu92Fr1MmYUtfCBc4AMP6lbBP.woff2") format('woff2');
  unicode-range: U+1F00-1FFF;
}
/* greek */
@font-face {
  font-family: 'Roboto';
  font-style: normal;
  font-weight: 900;
  src: local('Roboto Black'), local('Roboto-Black'), url("https://img1.wsimg.com/gfonts/s/roboto/v20/KFOlCnqEu92Fr1MmYUtfBxc4AMP6lbBP.woff2") format('woff2');
  unicode-range: U+0370-03FF;
}
/* vietnamese */
@font-face {
  font-family: 'Roboto';
  font-style: normal;
  font-weight: 900;
  src: local('Roboto Black'), local('Roboto-Black'), url("https://img1.wsimg.com/gfonts/s/roboto/v20/KFOlCnqEu92Fr1MmYUtfCxc4AMP6lbBP.woff2") format('woff2');
  unicode-range: U+0102-0103, U+0110-0111, U+1EA0-1EF9, U+20AB;
}
/* latin-ext */
@font-face {
  font-family: 'Roboto';
  font-style: normal;
  font-weight: 900;
  src: local('Roboto Black'), local('Roboto-Black'), url("https://img1.wsimg.com/gfonts/s/roboto/v20/KFOlCnqEu92Fr1MmYUtfChc4AMP6lbBP.woff2") format('woff2');
  unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Roboto';
  font-style: normal;
  font-weight: 900;
  src: local('Roboto Black'), local('Roboto-Black'), url("https://img1.wsimg.com/gfonts/s/roboto/v20/KFOlCnqEu92Fr1MmYUtfBBc4AMP6lQ.woff2") format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}
</style>
<link rel="stylesheet" href="https://img1.wsimg.com/blobby/go/786c35c0-41c6-4a94-90b1-5db94d83ad89/gpub/4ce1a7c86682e5e8/styles.css">
<link data-glamor="cxs-default-sheet" rel="stylesheet" href="https://img1.wsimg.com/blobby/go/786c35c0-41c6-4a94-90b1-5db94d83ad89/gpub/e20eb209cfa1baef/styles.css"><style type="text/css" data-glamor="cxs-default-sheet">.x .c2-1 { letter-spacing: normal; }
.x .c2-2 { text-transform: none; }
.x .c2-3 { font-family: "Roboto", arial, sans-serif; }
.x .c2-4 { font-size: 16px; }
.x .c2-9 { overflow-wrap: break-word; }
.x .c2-a { overflow-wrap: break-word; }
.x .c2-b { line-height: 1.2; }
.x .c2-c { margin-left: 0px; }
.x .c2-d { margin-right: 0px; }
.x .c2-e { margin-top: 0px; }
.x .c2-f { margin-bottom: 0px; }
.x .c2-g { max-width: 100%; }
.x .c2-h { font-family: "Montserrat", sans-serif; }
.x .c2-i { color: rgb(106, 69, 106); }
.x .c2-j { font-size: 24px; }
.x .c2-k { font-weight: 600; }
.x .c2-p { display: inline-block; }
.x .c2-q { width: 100%; }
.x .c2-r { padding-top: 16px; }
.x .c2-s { padding-bottom: 16px; }
.x .c2-t { padding-left: 32px; }
.x .c2-u { padding-right: 32px; }
.x .c2-v { background-color: rgb(106, 69, 106); }
.x .c2-w { border-style: none; }
.x .c2-x { text-align: center; }
.x .c2-y { text-decoration: none; }
.x .c2-z { cursor: pointer; }
.x .c2-10 { border-radius: 4px; }
.x .c2-11 { margin-top: 4px; }
.x .c2-12 { margin-bottom: 4px; }
.x .c2-13 { color: rgb(255, 255, 255); }
.x .c2-14 { font-weight: 700; }
.x .c2-15 { text-shadow: none; }
.x .c2-16 { font-size: 18px; }
.x .c2-17:hover { background-color: rgb(121, 79, 121); }
.x .c2-18:focus { outline: currentcolor none medium; }
.x .c2-19:active { background-color: rgb(77, 49, 77); }
.x .c2-1f { display: flex; }
.x .c2-1g { box-sizing: border-box; }
.x .c2-1h { flex-direction: row; }
.x .c2-1i { flex-wrap: wrap; }
.x .c2-1j { margin-right: -12px; }
.x .c2-1k { margin-bottom: 16px; }
.x .c2-1l { margin-left: -12px; }
.x .c2-1s { flex-grow: 1; }
.x .c2-1t { flex-shrink: 1; }
.x .c2-1u { flex-basis: 100%; }
.x .c2-1v { padding-top: 0px; }
.x .c2-1w { padding-right: 12px; }
.x .c2-1x { padding-bottom: 0px; }
.x .c2-1y { padding-left: 12px; }
.x .c2-25 { width: auto; }
.x .c2-26 { margin-left: auto; }
.x .c2-27 { margin-right: auto; }
.x .c2-28 { vertical-align: middle; }
.x .c2-29 { flex-basis: 0%; }
.x .c2-2e { line-height: 1.8; }
.x .c2-2f { color: rgb(94, 94, 94); }
.x .c2-2g { font-weight: 400; }
.x .c2-2h { flex-direction: column; }
.x .c2-2i { justify-content: center; }
.x .c2-2j { align-items: center; }
.x .c2-2l { margin-bottom: 24px; }
.x .c2-2q { position: relative; }
.x .c2-2r { background-color: rgb(241, 241, 241); }
.x .c2-2s { border-color: transparent; }
.x .c2-2t { border-top-width: 1px; }
.x .c2-2u { border-right-width: 1px; }
.x .c2-2v { border-bottom-width: 1px; }
.x .c2-2w { border-left-width: 1px; }
.x .c2-2x { padding-top: 23px; }
.x .c2-2y { padding-bottom: 7px; }
.x .c2-2z { padding-left: 16px; }
.x .c2-30 { padding-right: 16px; }
.x .c2-31 { border-style: solid; }
.x .c2-32 { border-radius: 0px; }
.x .c2-33 { color: rgb(59, 59, 59); }
.x .c2-34::placeholder { color: inherit; }
.x .c2-35:focus + label { font-size: 12px; }
.x .c2-36:focus + label { top: 5px; }
.x .c2-37:focus + label { color: rgb(106, 69, 106); }
.x .c2-38:not([value=""]) + label { font-size: 12px; }
.x .c2-39:not([value=""]) + label { top: 8px; }
.x .c2-3a:not([value=""]) + label { color: rgb(106, 69, 106); }
.x .c2-3b::-webkit-input-placeholder { color: inherit; }
.x .c2-3d { position: absolute; }
.x .c2-3e { top: 33%; }
.x .c2-3f { left: 16px; }
.x .c2-3g { transition: all 0.15s ease 0s; }
.x .c2-3h { pointer-events: none; }
.x .c2-3j { display: block; }
.x .c2-3l { margin-top: 40px; }
.x .c2-3m { display: none; }
.x .c2-3n { height: inherit; }
.x .c2-3p { height: 100%; }
.x .c2-3q { left: 0px; }
.x .c2-3r { top: 0px; }
.x .c2-3s { z-index: 3; }
.x .c2-3t { padding-top: 56px; }
.x .c2-3u { padding-bottom: 56px; }
.x .c2-3v { transform: translate3d(-120%, 0px, 0px); }
.x .c2-3w { opacity: 0; }
.x .c2-3x { transition: transform 0.8s ease 0s, opacity 0.1s ease 0s; }
.x .c2-3y { background-color: rgb(255, 255, 255); }
.x .c2-3z { padding-left: 24px; }
.x .c2-40 { padding-right: 24px; }
.x .c2-41 { padding-bottom: 24px; }
.x .c2-42 { max-width: 600px; }
.x .c2-43 { line-height: 1.25; }
.x .c2-44 { resize: vertical; }
.x .c2-45 { padding-top: 24px; }
.x .c2-46 { }
.x .c2-47 { text-decoration: underline; }
.x .c2-48 { display: inline; }
.x .c2-49 { margin-left: 20px; }
.x .c2-4a:hover { cursor: pointer; }</style>
<style data-glamor="cxs-media-sheet" type="text/css"></style>
<style data-glamor="cxs-xs-sheet" type="text/css">@media (max-width: 767px){.x .c1-l{padding-top:24px}}@media (max-width: 767px){.x .c1-m{padding-bottom:24px}}@media (max-width: 767px){.x .c1-20{width:100%}}@media (max-width: 767px){.x .c1-3d{padding-top:40px}}@media (max-width: 767px){.x .c1-5c > :nth-child(n){margin-bottom:24px}}@media (max-width: 767px){.x .c1-5d  > :last-child{margin-bottom:0 !important}}@media (max-width: 767px){.x .c1-6p{width:auto}}@media (max-width: 767px){.x .c1-6q{max-width:224px}}@media (max-width: 767px){.x .c1-6r{display:block}}@media (max-width: 767px){.x .c1-6s{max-height:80px}}@media (max-width: 767px){.x .c1-6t{margin-top:0}}@media (max-width: 767px){.x .c1-6u{margin-right:0}}@media (max-width: 767px){.x .c1-6v{margin-bottom:0}}@media (max-width: 767px){.x .c1-6w{margin-left:0}}@media (max-width: 767px){.x .c1-a1{display:flex}}@media (max-width: 767px){.x .c1-a2{flex-direction:column}}</style>
<link data-glamor="cxs-sm-sheet" rel="stylesheet" href="https://img1.wsimg.com/blobby/go/786c35c0-41c6-4a94-90b1-5db94d83ad89/gpub/21e323c30f4723d6/styles.css"><style type="text/css" data-glamor="cxs-sm-sheet">@media (min-width: 768px) {
  .x .c2-5 { font-size: 16px; }
}
@media (min-width: 768px) {
  .x .c2-l { font-size: 28px; }
}
@media (min-width: 768px) {
  .x .c2-1a { width: auto; }
}
@media (min-width: 768px) {
  .x .c2-1b { font-size: 18px; }
}
@media (min-width: 768px) {
  .x .c2-1m { margin-top: 0px; }
}
@media (min-width: 768px) {
  .x .c2-1n { margin-right: -24px; }
}
@media (min-width: 768px) {
  .x .c2-1o { margin-bottom: 0px; }
}
@media (min-width: 768px) {
  .x .c2-1p { margin-left: -24px; }
}
@media (min-width: 768px) {
  .x .c2-1z { padding-top: 0px; }
}
@media (min-width: 768px) {
  .x .c2-20 { padding-right: 24px; }
}
@media (min-width: 768px) {
  .x .c2-21 { padding-bottom: 0px; }
}
@media (min-width: 768px) {
  .x .c2-22 { padding-left: 24px; }
}
@media (min-width: 768px) {
  .x .c2-2a { margin-left: 8.33333%; }
}
@media (min-width: 768px) {
  .x .c2-2b { flex-basis: 83.3333%; }
}
@media (min-width: 768px) {
  .x .c2-2c { max-width: 83.3333%; }
}</style>
<link data-glamor="cxs-md-sheet" rel="stylesheet" href="https://img1.wsimg.com/blobby/go/786c35c0-41c6-4a94-90b1-5db94d83ad89/gpub/d2bbd37f8dac467f/styles.css"><style type="text/css" data-glamor="cxs-md-sheet">@media (min-width: 1024px) {
  .x .c2-6 { font-size: 16px; }
}
@media (min-width: 1024px) {
  .x .c2-m { font-size: 28px; }
}
@media (min-width: 1024px) {
  .x .c2-1c { font-size: 18px; }
}
@media (min-width: 1024px) {
  .x .c2-1q { margin-bottom: 16px; }
}
@media (min-width: 1024px) {
  .x .c2-1r { flex-direction: row-reverse; }
}
@media (min-width: 1024px) {
  .x .c2-23 { flex-basis: 66.6667%; }
}
@media (min-width: 1024px) {
  .x .c2-24 { max-width: 66.6667%; }
}
@media (min-width: 1024px) {
  .x .c2-2d { margin-left: 16.6667%; }
}
@media (min-width: 1024px) {
  .x .c2-2k { flex-direction: row; }
}
@media (min-width: 1024px) {
  .x .c2-2m { flex-grow: 1; }
}
@media (min-width: 1024px) {
  .x .c2-2n { width: auto; }
}
@media (min-width: 1024px) {
  .x .c2-2o { margin-right: 24px; }
}
@media (min-width: 1024px) {
  .x .c2-2p { margin-bottom: 0px; }
}
@media (min-width: 1024px) {
  .x .c2-3i { position: static; }
}
@media (min-width: 1024px) {
  .x .c2-3k { display: none; }
}
@media (min-width: 1024px) {
  .x .c2-3o { display: block; }
}</style>
<style data-glamor="cxs-lg-sheet" type="text/css">@media (min-width: 1280px) {
  .x .c1-f { font-size: 16px; }
}
@media (min-width: 1280px) {
  .x .c1-14 { width: 1160px; }
}
@media (min-width: 1280px) {
  .x .c1-2o { font-size: 30px; }
}
@media (min-width: 1280px) {
  .x .c1-49 { font-size: 18px; }
}
@media (min-width: 1280px) {
  .x .c1-4d > div { max-width: 1160px; }
}
@media (min-width: 1280px) {
  .x .c1-67 { font-size: 22px; }
}
@media (min-width: 1280px) {
  .x .c1-79 { font-size: 44px; }
}
@media (min-width: 1280px) {
  .x .c2-7 { font-size: 16px; }
}
@media (min-width: 1280px) {
  .x .c2-n { font-size: 30px; }
}
@media (min-width: 1280px) {
  .x .c2-1d { font-size: 18px; }
}</style>
<style data-glamor="cxs-xl-sheet" type="text/css">@media (min-width: 1536px) {
  .x .c1-g { font-size: 18px; }
}
@media (min-width: 1536px) {
  .x .c1-15 { width: 1280px; }
}
@media (min-width: 1536px) {
  .x .c1-2p { font-size: 36px; }
}
@media (min-width: 1536px) {
  .x .c1-4a { font-size: 20px; }
}
@media (min-width: 1536px) {
  .x .c1-68 { font-size: 24px; }
}
@media (min-width: 1536px) {
  .x .c1-7a { font-size: 48px; }
}
@media (min-width: 1536px) {
  .x .c2-8 { font-size: 18px; }
}
@media (min-width: 1536px) {
  .x .c2-o { font-size: 36px; }
}
@media (min-width: 1536px) {
  .x .c2-1e { font-size: 20px; }
}</style>
<style type="text/css">.grecaptcha-badge { visibility: hidden; }</style>
<style type="text/css">.page-inner { background-color: rgb(246, 246, 246); min-height: 100vh; }</style>
</head>
<body class="x  x-fonts-montserrat" context="[object Object]"><div id="layout-786-c-35-c-0-41-c-6-4-a-94-90-b-1-5-db-94-d-83-ad-89" class="layout layout-layout layout-layout-layout-25 locale-en-US lang-en"><div data-ux="Page" id="page-2784" class="x-el x-el-div x-el c1-1 c1-2 c1-3 c1-4 c1-5 c1-6 c1-7 c1-8 c1-9 c1-a c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Block" class="x-el x-el-div page-inner c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div id="0a1fc6c5-577c-474b-894a-21f0900e2821" class="widget widget-header widget-header-header-9"><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-h c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Header" data-aid="HEADER_WIDGET" class="x-el x-el-div x-el x-el widget-header-header-9 c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-aid x-d-ux c1-1 c1-2 c1-3 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux x-d-aid c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux x-d-aid"><div><section data-ux="Section" data-aid="HEADER_SECTION" class="x-el x-el-section c1-1 c1-2 c1-3 c1-i c1-j c1-k c1-b c1-c c1-l c1-m c1-d c1-e c1-f c1-g x-d-ux x-d-aid"><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-n c1-b c1-c c1-d c1-o c1-e c1-f c1-g x-d-ux"></div><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-3 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><nav data-ux="Block" class="x-el x-el-nav c1-1 c1-2 c1-p c1-q c1-r c1-s c1-b c1-c c1-d c1-t c1-u c1-e c1-f c1-g x-d-ux"><div data-ux="Container" class="x-el x-el-div c1-1 c1-2 c1-v c1-w c1-x c1-y c1-z c1-10 c1-11 c1-b c1-c c1-12 c1-d c1-13 c1-e c1-14 c1-f c1-15 c1-g x-d-ux"><div data-ux="Grid" class="x-el x-el-div c1-1 c1-2 c1-16 c1-17 c1-18 c1-19 c1-1a c1-1b c1-1c c1-1d c1-1e c1-1f c1-b c1-c c1-1g c1-1h c1-1i c1-1j c1-d c1-1k c1-e c1-f c1-g x-d-ux"><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-17 c1-1l c1-1m c1-1n c1-z c1-1o c1-1p c1-1q c1-1r c1-16 c1-1s c1-1t c1-b c1-c c1-1u c1-1v c1-1w c1-1x c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Block" data-aid="HEADER_LOGO_RENDERED" class="x-el x-el-div c1-1y c1-1z c1-z c1-c c1-20 c1-21 c1-d c1-e c1-f c1-g x-d-ux x-d-aid"><a rel="" typography="LinkAlpha" data-ux="Link" data-page="32c08e75-bde9-4a32-9296-764fd1313ffa" title="kvelsaonger" href="" class="x-el x-el-a c1-22 c1-23 c1-24 c1-25 c1-26 c1-27 c1-28 c1-29 c1-2a c1-2b c1-2c c1-b c1-2d c1-c c1-2e c1-2f c1-2g c1-d c1-e c1-f c1-g x-d-ux x-d-page" data-tccl="ux2.HEADER.header9.Logo.Default.Link.Default.2788.click,click"><div id="bs-1"><span data-ux="Element" class="x-el x-el-span c2-1 c2-2 c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux"><h3 typography="HeadingGamma" data-ux="LogoHeading" id="logo-container-1" logotext="kvelsaonger" class="x-el x-el-h3 c2-1 c2-2 c2-9 c2-a c2-b c2-c c2-d c2-e c2-f c2-g c2-h c2-i c2-j c2-k c2-l c2-m c2-n c2-o x-d-ux"><span data-ux="Element" data-aid="HEADER_LOGO_TEXT_RENDERED" data-route="logo/logoText" class="x-el x-el-span c2-p c2-q c2-h c2-j c2-l c2-m c2-n c2-o x-d-ux x-d-aid x-d-route">kvelsaonger</span></h3></span></div></a></div></div></div><div data-ux="Grid" id="n-27852791-navBarId" class="x-el x-el-div c1-1 c1-2 c1-2q c1-17 c1-18 c1-2r c1-1a c1-1b c1-1c c1-1d c1-b c1-c c1-1g c1-1h c1-1i c1-1j c1-d c1-2s c1-2t c1-2u c1-2v c1-2w c1-2x c1-e c1-f c1-g x-d-ux"><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-17 c1-2y c1-1m c1-1n c1-2z c1-1o c1-1p c1-1q c1-1r c1-16 c1-1f c1-1e c1-1s c1-b c1-c c1-1u c1-1v c1-1w c1-1x c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Block" data-aid="HEADER_LOGO_RENDERED" class="x-el x-el-div c1-1y c1-1z c1-z c1-c c1-20 c1-21 c1-d c1-e c1-f c1-g x-d-ux x-d-aid"><a rel="" typography="LinkAlpha" data-ux="Link" data-page="32c08e75-bde9-4a32-9296-764fd1313ffa" title="kvelsaonger" href="" class="x-el x-el-a c1-22 c1-23 c1-24 c1-25 c1-26 c1-27 c1-28 c1-29 c1-2a c1-2b c1-2c c1-b c1-2d c1-c c1-2e c1-2f c1-2g c1-d c1-e c1-f c1-g x-d-ux x-d-page" data-tccl="ux2.HEADER.header9.Logo.Default.Link.Default.2792.click,click"><div id="bs-2"><span data-ux="Element" class="x-el x-el-span c2-1 c2-2 c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux"><h3 typography="HeadingGamma" data-ux="LogoHeading" id="logo-container-2" logotext="kvelsaonger" class="x-el x-el-h3 c2-1 c2-2 c2-9 c2-a c2-b c2-c c2-d c2-e c2-f c2-g c2-h c2-i c2-j c2-k c2-l c2-m c2-n c2-o x-d-ux"><span data-ux="Element" data-aid="HEADER_LOGO_TEXT_RENDERED" data-route="logo/logoText" class="x-el x-el-span c2-p c2-q c2-h c2-j c2-l c2-m c2-n c2-o x-d-ux x-d-aid x-d-route">kvelsaonger</span></h3></span></div></a></div></div></div></div></nav></div><div data-ux="Container" class="x-el x-el-div c1-1 c1-2 c1-v c1-w c1-x c1-y c1-z c1-p c1-b c1-c c1-12 c1-d c1-13 c1-e c1-14 c1-f c1-15 c1-g x-d-ux"><div id="guacBg2794" role="img" data-guac-image="loaded" data-ux="Background" data-ht="Fill" data-aid="BACKGROUND_IMAGE_RENDERED" data-route="hasMedia:mediaData" treatmentdata="[object Object]" class="x-el x-el-div c1-1 c1-2 c1-30 c1-31 c1-32 c1-33 c1-34 c1-p c1-4 c1-35 c1-36 c1-37 c1-b c1-c c1-d c1-38 c1-e c1-f c1-g x-d-guac-image x-d-ux x-d-ht x-d-aid x-d-route" style="background-image: linear-gradient(rgba(22, 22, 22, 0) 0%, rgba(22, 22, 22, 0) 100%), url(&quot;https://img1.wsimg.com/isteam/stock/y6lGJBp/:/rs=w:2240,h:1000,cg:true,m/cr=w:2240,h:1000,a:cc&quot;); opacity: 1;"><script>Number(window.vctElements)||(window.vctElements=0),window.vctElements++;new guacImage('//img1.wsimg.com/isteam/stock/y6lGJBp/:/rs=w:{width},h:{height},cg:true,m/cr=w:{width},h:{height},a:cc',document.getElementById('guacBg2794'),{"useTreatmentData":true,"backgroundLayers":["linear-gradient(to bottom, rgba(22, 22, 22, 0) 0%, rgba(22, 22, 22, 0) 100%)"],"shouldMarkVisuallyComplete":true})</script></div><div data-ux="Container" class="x-el x-el-div c1-1 c1-2 c1-v c1-w c1-x c1-y c1-z c1-b c1-c c1-12 c1-d c1-13 c1-e c1-14 c1-f c1-15 c1-g x-d-ux"><div data-ux="Hero" class="x-el x-el-div c1-1 c1-2 c1-16 c1-1e c1-1f c1-39 c1-i c1-3a c1-4 c1-3b c1-3c c1-b c1-c c1-3d c1-m c1-d c1-e c1-f c1-g x-d-ux"><h1 typography="HeadingGamma" data-ux="HeroHeading" data-aid="HEADER_TAGLINE_RENDERED" data-route="tagline" class="x-el x-el-h1 c1-1 c1-2 c1-25 c1-26 c1-3e c1-2i c1-2j c1-1a c1-1c c1-1s c1-z c1-1z c1-2d c1-2k c1-2l c1-2m c1-2n c1-2o c1-2p x-d-ux x-d-aid x-d-route">A New Way to Use Your Phone</h1><div typography="BodyAlpha" data-ux="HeroText" data-aid="HEADER_TAGLINE2_RENDERED" data-route="tagline2" class="x-el x-el-p c1-1 c1-2 c1-25 c1-26 c1-3f c1-1a c1-1c c1-1s c1-3g c1-3h c1-3i c1-3j c1-z c1-b c1-3k c1-c c1-3l c1-d c1-3m c1-e c1-f c1-g x-d-ux x-d-aid x-d-route x-rt"><p style="margin:0"><span>Expertly-designed software, easy-to-use interface.</span></p></div><div id="bs-3" style="max-width:100%"><span data-ux="Element" class="x-el x-el-span c2-1 c2-2 c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux"><a tccltracking="click" typography="ButtonAlpha" data-ux="Button" data-aid="HEADER_CTA_BTN" href="#888c3d04-cc41-46b4-ba8f-c1847158ad42" target="" data-tccl="ux2.header.cta_button.click,click" data-page="32c08e75-bde9-4a32-9296-764fd1313ffa" data-section-jump="888c3d04-cc41-46b4-ba8f-c1847158ad42" class="x-el x-el-a c2-1 c2-2 c2-r c2-s c2-t c2-u c2-v c2-w c2-p c2-x c2-y c2-z c2-a c2-9 c2-g c2-q c2-10 c2-11 c2-12 c2-3 c2-13 c2-14 c2-15 c2-16 c2-17 c2-18 c2-19 c2-1a c2-1b c2-1c c2-1d c2-1e x-d-ux x-d-aid x-d-tccl x-d-page x-d-section-jump">Contact Us</a></span></div></div></div></div></section> </div></div></div></div><div id="5a147366-d67f-4c3a-97a5-bb1959d77843" class="widget widget-about widget-about-about-6"><div data-ux="Widget" class="x-el x-el-div x-el c1-1 c1-2 c1-3 c1-5 c1-6 c1-7 c1-8 c1-9 c1-a c1-4b c1-4c c1-4d c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div><section data-ux="Section" class="x-el x-el-section c1-1 c1-2 c1-3 c1-4e c1-3a c1-b c1-c c1-l c1-m c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Container" class="x-el x-el-div c1-1 c1-2 c1-v c1-w c1-x c1-y c1-z c1-b c1-c c1-12 c1-d c1-13 c1-e c1-14 c1-f c1-15 c1-g x-d-ux"><h2 typography="HeadingBeta" data-ux="SectionHeading" data-aid="ABOUT_SECTION_TITLE_RENDERED" data-route="sectionTitle" class="x-el x-el-h2 c1-1 c1-2 c1-25 c1-26 c1-4f c1-v c1-2j c1-1a c1-4g c1-4h c1-1s c1-4i c1-4j c1-b c1-c c1-4k c1-3l c1-d c1-4l c1-4m c1-4n c1-e c1-f c1-g x-d-ux x-d-aid x-d-route"><span data-ux="Element" class="x-el x-el-span c1-1 c1-2 c1-1y c1-p c1-4o c1-4p c1-b c1-c c1-4q c1-4r c1-4s c1-4t c1-4u c1-4v c1-4w c1-4x c1-4y c1-4z c1-50 c1-51 c1-52 c1-53 c1-54 c1-55 c1-56 c1-57 c1-58 c1-59 c1-d c1-e c1-f c1-g x-d-ux">Our App</span></h2><div data-ux="ContentCards" class="x-el x-el-div x-el c1-1 c1-2 c1-1s c1-5a c1-5b c1-2i c1-2j c1-b c1-c c1-5c c1-5d c1-5e c1-5f c1-d c1-e c1-f c1-g x-d-ux c1-1 c1-2 c1-16 c1-17 c1-18 c1-2r c1-1a c1-1b c1-5g c1-1d c1-b c1-c c1-1g c1-1h c1-5h c1-1j c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-17 c1-1l c1-1m c1-5i c1-z c1-1o c1-1p c1-1q c1-1r c1-16 c1-5j c1-5b c1-b c1-c c1-5k c1-5l c1-1u c1-5m c1-1w c1-5n c1-d c1-5o c1-5p c1-e c1-f c1-g x-d-ux"><div id="guacBg2795" role="img" data-ux="ContentCard" overlay="accent" data-field-id="cards" data-field-route="/card/0" index="0" treatmentdata="[object Object]" class="x-el x-el-div x-el c1-1 c1-2 c1-16 c1-39 c1-1f c1-1s c1-1e c1-4 c1-5q c1-3b c1-3c c1-5r c1-31 c1-5s c1-5t c1-5u c1-5v c1-5w c1-5x c1-5y c1-1l c1-b c1-c c1-5c c1-5d c1-d c1-5z c1-60 c1-61 c1-62 c1-63 c1-e c1-f c1-g x-d-ux x-d-field-id x-d-field-route c1-1 c1-2 c1-30 c1-31 c1-32 c1-33 c1-34 c1-36 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux x-d-field-id x-d-field-route"><h3 typography="HeadingGamma" data-ux="ContentOverlayCardHeading" data-aid="ABOUT_HEADLINE_RENDERED0" data-route="cards.headline" data-field-route="/card/0" class="x-el x-el-h3 c1-1 c1-2 c1-25 c1-26 c1-3e c1-2i c1-2j c1-1a c1-1c c1-1z c1-2d c1-2k c1-2l c1-2m c1-2n c1-2o c1-2p x-d-ux x-d-aid x-d-route x-d-field-route">Grab interest</h3><div typography="BodyBeta" data-ux="ContentOverlayCardText" data-aid="ABOUT_DESCRIPTION_RENDERED0" data-route="cards.description" data-field-route="/card/0" class="x-el x-el-p c1-1 c1-2 c1-25 c1-26 c1-3e c1-1a c1-1c c1-1l c1-34 c1-b c1-4k c1-64 c1-3l c1-65 c1-66 c1-67 c1-68 x-d-ux x-d-aid x-d-route x-d-field-route x-rt"><p style="margin:0"><span>Say something interesting about your business here. What ways can people use your app?</span></p></div></div></div><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-17 c1-1l c1-1m c1-5i c1-z c1-1o c1-1p c1-1q c1-1r c1-16 c1-5j c1-5b c1-b c1-c c1-5k c1-5l c1-1u c1-5m c1-1w c1-5n c1-d c1-5o c1-5p c1-e c1-f c1-g x-d-ux"><div id="guacBg2796" role="img" data-ux="ContentCard" overlay="accent" data-field-id="cards" data-field-route="/card/1" index="1" treatmentdata="[object Object]" class="x-el x-el-div x-el c1-1 c1-2 c1-16 c1-39 c1-1f c1-1s c1-1e c1-4 c1-5q c1-3b c1-3c c1-5r c1-31 c1-5s c1-5t c1-5u c1-5v c1-5w c1-5x c1-5y c1-1l c1-b c1-c c1-5c c1-5d c1-d c1-5z c1-60 c1-61 c1-62 c1-63 c1-e c1-f c1-g x-d-ux x-d-field-id x-d-field-route c1-1 c1-2 c1-30 c1-31 c1-32 c1-33 c1-34 c1-36 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux x-d-field-id x-d-field-route"><h3 typography="HeadingGamma" data-ux="ContentOverlayCardHeading" data-aid="ABOUT_HEADLINE_RENDERED1" data-route="cards.headline" data-field-route="/card/1" class="x-el x-el-h3 c1-1 c1-2 c1-25 c1-26 c1-3e c1-2i c1-2j c1-1a c1-1c c1-1z c1-2d c1-2k c1-2l c1-2m c1-2n c1-2o c1-2p x-d-ux x-d-aid x-d-route x-d-field-route">Generate excitement</h3><div typography="BodyBeta" data-ux="ContentOverlayCardText" data-aid="ABOUT_DESCRIPTION_RENDERED1" data-route="cards.description" data-field-route="/card/1" class="x-el x-el-p c1-1 c1-2 c1-25 c1-26 c1-3e c1-1a c1-1c c1-1l c1-34 c1-b c1-4k c1-64 c1-3l c1-65 c1-66 c1-67 c1-68 x-d-ux x-d-aid x-d-route x-d-field-route x-rt"><p style="margin:0"><span>What's something exciting your business offers? Say it here. What separates your app or mobile game from the rest?</span></p></div></div></div><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-17 c1-1l c1-1m c1-5i c1-z c1-1o c1-1p c1-1q c1-1r c1-16 c1-5j c1-5b c1-b c1-c c1-5k c1-5l c1-1u c1-5m c1-1w c1-5n c1-d c1-5o c1-5p c1-e c1-f c1-g x-d-ux"><div id="guacBg2797" role="img" data-ux="ContentCard" overlay="accent" data-field-id="cards" data-field-route="/card/2" index="2" treatmentdata="[object Object]" class="x-el x-el-div x-el c1-1 c1-2 c1-16 c1-39 c1-1f c1-1s c1-1e c1-4 c1-5q c1-3b c1-3c c1-5r c1-31 c1-5s c1-5t c1-5u c1-5v c1-5w c1-5x c1-69 c1-1l c1-b c1-c c1-5c c1-5d c1-d c1-6a c1-60 c1-6b c1-62 c1-6c c1-e c1-f c1-g x-d-ux x-d-field-id x-d-field-route c1-1 c1-2 c1-30 c1-31 c1-32 c1-33 c1-34 c1-36 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux x-d-field-id x-d-field-route"><h3 typography="HeadingGamma" data-ux="ContentOverlayCardHeading" data-aid="ABOUT_HEADLINE_RENDERED2" data-route="cards.headline" data-field-route="/card/2" class="x-el x-el-h3 c1-1 c1-2 c1-25 c1-26 c1-3e c1-2i c1-2j c1-1a c1-1c c1-1z c1-2d c1-2k c1-2l c1-2m c1-2n c1-2o c1-2p x-d-ux x-d-aid x-d-route x-d-field-route">Close the deal</h3><div typography="BodyBeta" data-ux="ContentOverlayCardText" data-aid="ABOUT_DESCRIPTION_RENDERED2" data-route="cards.description" data-field-route="/card/2" class="x-el x-el-p c1-1 c1-2 c1-25 c1-26 c1-3e c1-1a c1-1c c1-1l c1-34 c1-b c1-4k c1-64 c1-3l c1-65 c1-66 c1-67 c1-68 x-d-ux x-d-aid x-d-route x-d-field-route x-rt"><p style="margin:0"><span>Give customers a reason to do business with you. Is your app updated regularly? Are there any discounts?</span></p></div></div></div></div></div></section> </div></div></div><div id="85d5592f-853e-42a1-9f2c-42a52b3d5bcb" class="widget widget-gallery widget-gallery-gallery-7"><div data-ux="WidgetBanner" class="x-el x-el-div x-el c1-1 c1-2 c1-3 c1-5 c1-6 c1-7 c1-8 c1-9 c1-a c1-6d c1-6e c1-4b c1-4c c1-4d c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div><section data-ux="Section" class="x-el x-el-section c1-1 c1-2 c1-3 c1-4e c1-3a c1-b c1-c c1-l c1-m c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Container" class="x-el x-el-div c1-1 c1-2 c1-v c1-w c1-x c1-y c1-z c1-b c1-c c1-12 c1-d c1-13 c1-e c1-14 c1-f c1-15 c1-g x-d-ux"><h2 typography="HeadingBeta" data-ux="SectionHeading" data-aid="GALLERY_SECTION_TITLE_RENDERED" data-route="title" class="x-el x-el-h2 c1-1 c1-2 c1-25 c1-26 c1-4f c1-v c1-2j c1-1a c1-4g c1-4h c1-1s c1-4i c1-4j c1-b c1-c c1-4k c1-3l c1-d c1-4l c1-4m c1-4n c1-e c1-f c1-g x-d-ux x-d-aid x-d-route"><span data-ux="Element" class="x-el x-el-span c1-1 c1-2 c1-1y c1-p c1-4o c1-4p c1-b c1-c c1-4q c1-4r c1-4s c1-4t c1-4u c1-4v c1-4w c1-4x c1-4y c1-4z c1-50 c1-51 c1-52 c1-53 c1-54 c1-55 c1-56 c1-57 c1-58 c1-59 c1-d c1-e c1-f c1-g x-d-ux">Photo Gallery</span></h2><div id="bs-4"><span data-ux="Element" class="x-el x-el-span c2-1 c2-2 c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux"><div><div data-ux="Grid" class="x-el x-el-div c2-1 c2-2 c2-1f c2-1g c2-1h c2-1i c2-e c2-1j c2-1k c2-1l c2-3 c2-4 c2-1m c2-1n c2-1o c2-1p c2-5 c2-1q c2-1r c2-6 c2-7 c2-8 x-d-ux"><div data-ux="GridCell" class="x-el x-el-div c2-1 c2-2 c2-1g c2-1s c2-1t c2-1u c2-g c2-1v c2-1w c2-1x c2-1y c2-3 c2-4 c2-1z c2-20 c2-21 c2-22 c2-5 c2-23 c2-24 c2-6 c2-7 c2-8 x-d-ux"><img src="https://img1.wsimg.com/isteam/stock/QzRD3E1/:/" alt="image25" data-ux="Image" data-aid="GALLERY_IMAGE0_RENDERED" class="x-el x-el-img c2-1 c2-2 c2-g c2-25 c2-26 c2-27 c2-e c2-f c2-28 c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux x-d-aid"></div></div><div data-ux="Grid" class="x-el x-el-div c2-1 c2-2 c2-1f c2-1g c2-1h c2-1i c2-e c2-1j c2-1k c2-1l c2-3 c2-4 c2-1m c2-1n c2-1o c2-1p c2-5 c2-1q c2-1r c2-6 c2-7 c2-8 x-d-ux"><div data-ux="GridCell" class="x-el x-el-div c2-1 c2-2 c2-1g c2-1s c2-1t c2-1u c2-g c2-1v c2-1w c2-1x c2-1y c2-3 c2-4 c2-1z c2-20 c2-21 c2-22 c2-5 c2-23 c2-24 c2-6 c2-7 c2-8 x-d-ux"><img src="https://img1.wsimg.com/isteam/stock/yrnrO9R/:/" alt="image26" data-ux="Image" data-aid="GALLERY_IMAGE1_RENDERED" class="x-el x-el-img c2-1 c2-2 c2-g c2-25 c2-26 c2-27 c2-e c2-f c2-28 c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux x-d-aid"></div></div><div data-ux="Grid" class="x-el x-el-div c2-1 c2-2 c2-1f c2-1g c2-1h c2-1i c2-e c2-1j c2-1k c2-1l c2-3 c2-4 c2-1m c2-1n c2-1o c2-1p c2-5 c2-1q c2-1r c2-6 c2-7 c2-8 x-d-ux"><div data-ux="GridCell" class="x-el x-el-div c2-1 c2-2 c2-1g c2-1s c2-1t c2-1u c2-g c2-1v c2-1w c2-1x c2-1y c2-3 c2-4 c2-1z c2-20 c2-21 c2-22 c2-5 c2-23 c2-24 c2-6 c2-7 c2-8 x-d-ux"><img src="https://img1.wsimg.com/isteam/stock/ka6pG8G/:/" alt="image27" data-ux="Image" data-aid="GALLERY_IMAGE2_RENDERED" class="x-el x-el-img c2-1 c2-2 c2-g c2-25 c2-26 c2-27 c2-e c2-f c2-28 c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux x-d-aid"></div></div></div></span></div></div></section> </div></div></div><div id="d9eebbce-d05d-490d-aa38-a4b7980dff7e" class="widget widget-logos widget-logos-logos-1"><div data-ux="Widget" class="x-el x-el-div x-el c1-1 c1-2 c1-3 c1-5 c1-6 c1-7 c1-8 c1-9 c1-a c1-4b c1-4c c1-4d c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div><section data-ux="Section" class="x-el x-el-section c1-1 c1-2 c1-3 c1-4e c1-3a c1-b c1-c c1-l c1-m c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Container" class="x-el x-el-div c1-1 c1-2 c1-v c1-w c1-x c1-y c1-z c1-b c1-c c1-12 c1-d c1-13 c1-e c1-14 c1-f c1-15 c1-g x-d-ux"><div data-ux="Group" class="x-el x-el-div c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><h3 typography="HeadingGamma" data-ux="HeadingMiddle" data-aid="LOGOS_SECTION_TITLE_RENDERED" data-route="title" class="x-el x-el-h3 c1-1 c1-2 c1-25 c1-26 c1-3e c1-2i c1-2j c1-1a c1-6m c1-1s c1-1z c1-2d c1-2k c1-2l c1-2m c1-2n c1-2o c1-2p x-d-ux x-d-aid x-d-route">Download on Any Device</h3><div data-ux="Block" data-aid="LOGOS_GRID_RENDERED" class="x-el x-el-div c1-1 c1-2 c1-16 c1-1f c1-1e c1-5g c1-b c1-c c1-2r c1-6n c1-d c1-e c1-f c1-g x-d-ux x-d-aid"><div data-ux="Block" data-field-id="logoImages.image" class="x-el x-el-div c1-1 c1-2 c1-1s c1-x c1-y c1-4g c1-b c1-c c1-d c1-6o c1-e c1-f c1-g x-d-ux x-d-field-id"><span data-ux="Element" data-aid="LOGOS_LINK0_RENDERED" class="x-el x-el-span c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux x-d-aid"><img src="https://img1.wsimg.com/isteam/ip/static/icons/icon_placeholder.png/:/rs=h:100" srcset="https://img1.wsimg.com/isteam/ip/static/icons/icon_placeholder.png/:/rs=h:100,//img1.wsimg.com/isteam/ip/static/icons/icon_placeholder.png/:/rs=h:150 1.5x,
https://img1.wsimg.com/isteam/ip/static/icons/icon_placeholder.png/:/rs=h:200 2x,
https://img1.wsimg.com/isteam/ip/static/icons/icon_placeholder.png/:/rs=h:300 3x" alt="image5" data-ux="ImageLogo" data-aid="LOGOS_ZERO_STATE0_RENDERED" class="x-el x-el-img c1-1 c1-2 c1-z c1-6k c1-v c1-w c1-1a c1-1c c1-6l c1-b c1-c c1-6p c1-6q c1-6r c1-6s c1-6t c1-6u c1-6v c1-6w c1-6x c1-6y c1-6z c1-70 c1-71 c1-72 c1-d c1-e c1-f c1-g x-d-ux x-d-aid"></span></div><div data-ux="Block" data-field-id="logoImages.image" class="x-el x-el-div c1-1 c1-2 c1-1s c1-x c1-y c1-4g c1-b c1-c c1-d c1-6o c1-e c1-f c1-g x-d-ux x-d-field-id"><span data-ux="Element" data-aid="LOGOS_LINK1_RENDERED" class="x-el x-el-span c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux x-d-aid"><img src="https://img1.wsimg.com/isteam/ip/static/icons/icon_placeholder.png/:/rs=h:100" srcset="https://img1.wsimg.com/isteam/ip/static/icons/icon_placeholder.png/:/rs=h:100,//img1.wsimg.com/isteam/ip/static/icons/icon_placeholder.png/:/rs=h:150 1.5x,
https://img1.wsimg.com/isteam/ip/static/icons/icon_placeholder.png/:/rs=h:200 2x,
https://img1.wsimg.com/isteam/ip/static/icons/icon_placeholder.png/:/rs=h:300 3x" alt="image6" data-ux="ImageLogo" data-aid="LOGOS_ZERO_STATE1_RENDERED" class="x-el x-el-img c1-1 c1-2 c1-z c1-6k c1-v c1-w c1-1a c1-1c c1-6l c1-b c1-c c1-6p c1-6q c1-6r c1-6s c1-6t c1-6u c1-6v c1-6w c1-6x c1-6y c1-6z c1-70 c1-71 c1-72 c1-d c1-e c1-f c1-g x-d-ux x-d-aid"></span></div><div data-ux="Block" data-field-id="logoImages.image" class="x-el x-el-div c1-1 c1-2 c1-1s c1-x c1-y c1-4g c1-b c1-c c1-d c1-6o c1-e c1-f c1-g x-d-ux x-d-field-id"><span data-ux="Element" data-aid="LOGOS_LINK2_RENDERED" class="x-el x-el-span c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux x-d-aid"><img src="https://img1.wsimg.com/isteam/ip/static/icons/icon_placeholder.png/:/rs=h:100" srcset="https://img1.wsimg.com/isteam/ip/static/icons/icon_placeholder.png/:/rs=h:100,//img1.wsimg.com/isteam/ip/static/icons/icon_placeholder.png/:/rs=h:150 1.5x,
https://img1.wsimg.com/isteam/ip/static/icons/icon_placeholder.png/:/rs=h:200 2x,
https://img1.wsimg.com/isteam/ip/static/icons/icon_placeholder.png/:/rs=h:300 3x" alt="image7" data-ux="ImageLogo" data-aid="LOGOS_ZERO_STATE2_RENDERED" class="x-el x-el-img c1-1 c1-2 c1-z c1-6k c1-v c1-w c1-1a c1-1c c1-6l c1-b c1-c c1-6p c1-6q c1-6r c1-6s c1-6t c1-6u c1-6v c1-6w c1-6x c1-6y c1-6z c1-70 c1-71 c1-72 c1-d c1-e c1-f c1-g x-d-ux x-d-aid"></span></div><div data-ux="Block" data-field-id="logoImages.image" class="x-el x-el-div c1-1 c1-2 c1-1s c1-x c1-y c1-4g c1-b c1-c c1-d c1-6o c1-e c1-f c1-g x-d-ux x-d-field-id"><span data-ux="Element" data-aid="LOGOS_LINK3_RENDERED" class="x-el x-el-span c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux x-d-aid"><img src="https://img1.wsimg.com/isteam/ip/static/icons/icon_placeholder.png/:/rs=h:100" srcset="https://img1.wsimg.com/isteam/ip/static/icons/icon_placeholder.png/:/rs=h:100,//img1.wsimg.com/isteam/ip/static/icons/icon_placeholder.png/:/rs=h:150 1.5x,
https://img1.wsimg.com/isteam/ip/static/icons/icon_placeholder.png/:/rs=h:200 2x,
https://img1.wsimg.com/isteam/ip/static/icons/icon_placeholder.png/:/rs=h:300 3x" alt="image8" data-ux="ImageLogo" data-aid="LOGOS_ZERO_STATE3_RENDERED" class="x-el x-el-img c1-1 c1-2 c1-z c1-6k c1-v c1-w c1-1a c1-1c c1-6l c1-b c1-c c1-6p c1-6q c1-6r c1-6s c1-6t c1-6u c1-6v c1-6w c1-6x c1-6y c1-6z c1-70 c1-71 c1-72 c1-d c1-e c1-f c1-g x-d-ux x-d-aid"></span></div></div></div></div></section> </div></div></div><div id="beb74da8-70fc-4031-8748-06511a0240ab" class="widget widget-subscribe widget-subscribe-subscribe-1"><div data-ux="Widget" class="x-el x-el-div x-el c1-1 c1-2 c1-3 c1-5 c1-6 c1-7 c1-8 c1-9 c1-a c1-4b c1-4c c1-4d c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div><section data-ux="Section" class="x-el x-el-section c1-1 c1-2 c1-3 c1-4e c1-3a c1-b c1-c c1-l c1-m c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Container" class="x-el x-el-div c1-1 c1-2 c1-v c1-w c1-x c1-y c1-z c1-b c1-c c1-12 c1-d c1-13 c1-e c1-14 c1-f c1-15 c1-g x-d-ux"><h2 typography="HeadingAlpha" data-ux="SectionBannerHeading" data-aid="SECTION_TITLE_REND" data-route="sectionTitle" class="x-el x-el-h2 c1-1 c1-2 c1-25 c1-26 c1-2h c1-2i c1-2j c1-73 c1-74 c1-1s c1-1z c1-2d c1-75 c1-2l c1-76 c1-77 c1-78 c1-79 c1-7a x-d-ux x-d-aid x-d-route">Subscribe</h2><div><div id="beb74da8-70fc-4031-8748-06511a0240ab-bootstrap-container"><span data-ux="Element" class="x-el x-el-span c2-1 c2-2 c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux"><span data-ux="Element" class="x-el x-el-span c2-1 c2-2 c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux"><div data-ux="Grid" data-aid="SUBSCRIBE_INNER_FORM_REND" class="x-el x-el-div c2-1 c2-2 c2-1f c2-1g c2-1h c2-1i c2-e c2-1j c2-f c2-1l c2-3 c2-4 c2-1m c2-1n c2-1o c2-1p c2-5 c2-6 c2-7 c2-8 x-d-ux x-d-aid"><div data-ux="GridCell" class="x-el x-el-div c2-1 c2-2 c2-1g c2-1s c2-1t c2-29 c2-g c2-1v c2-1w c2-1x c2-1y c2-3 c2-4 c2-2a c2-2b c2-2c c2-1z c2-20 c2-21 c2-22 c2-5 c2-2d c2-23 c2-24 c2-6 c2-7 c2-8 x-d-ux"><p typography="BodyAlpha" data-ux="Text" data-aid="FORM_DESC_REND" data-route="description" class="x-el x-el-p c2-1 c2-2 c2-9 c2-a c2-2e c2-e c2-1k c2-x c2-3 c2-2f c2-4 c2-2g c2-5 c2-6 c2-7 c2-8 x-d-ux x-d-aid x-d-route">Sign up to hear from us about specials, sales, and events.</p><form data-ux="Form" class="x-el x-el-form c2-1 c2-2 c2-f c2-1f c2-2h c2-2i c2-2j c2-x c2-15 c2-3 c2-4 c2-5 c2-2k c2-6 c2-7 c2-8 x-d-ux"><div data-ux="Block" data-route="inputPlaceholder" class="x-el x-el-div c2-1 c2-2 c2-2l c2-q c2-3 c2-4 c2-5 c2-2m c2-2n c2-2o c2-2p c2-6 c2-7 c2-8 x-d-ux x-d-route"><div data-ux="Block" class="x-el x-el-div c2-1 c2-2 c2-2q c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux"><div data-ux="InputFloatLabel" data-aid="d7s9fy9s-18hf-sdfh-9f94-d1ns893k83d3" class="x-el x-el-div c2-1 c2-2 c2-2q c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux x-d-aid"><input typography="InputAlpha" type="text" data-ux="InputFloatLabel" id="input3" data-aid="d7s9fy9s-18hf-sdfh-9f94-d1ns893k83d3" class="x-el x-el-input c2-1 c2-2 c2-2r c2-2s c2-q c2-2t c2-2u c2-2v c2-2w c2-2x c2-2y c2-2z c2-30 c2-31 c2-32 c2-3 c2-33 c2-4 c2-2g c2-34 c2-18 c2-35 c2-36 c2-37 c2-38 c2-39 c2-3a c2-3b c2-3c c2-5 c2-6 c2-7 c2-8 x-d-ux x-d-aid" value=""><label typography="InputAlpha" data-ux="InputFloatLabelLabel" for="input3" class="x-el x-el-label c2-1 c2-2 c2-9 c2-a c2-3d c2-3e c2-3f c2-3g c2-3h c2-3 c2-33 c2-4 c2-2g c2-5 c2-6 c2-7 c2-8 x-d-ux">Email Address</label></div></div></div><div data-ux="Block" data-route="subscribeButtonLabel" class="x-el x-el-div c2-1 c2-2 c2-q c2-3 c2-4 c2-5 c2-2n c2-6 c2-7 c2-8 x-d-ux x-d-route"><div data-ux="Block" class="x-el x-el-div c2-1 c2-2 c2-2q c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux"><button tccltracking="click" typography="ButtonAlpha" data-ux="Button" type="submit" data-tccl="ux2.gem-subscribe.submit_form.click,click" data-aid="SUBSCRIBE_SUBMIT_BUTTON_REND" class="x-el x-el-button c2-1 c2-2 c2-r c2-s c2-t c2-u c2-v c2-w c2-p c2-x c2-y c2-z c2-a c2-9 c2-g c2-q c2-10 c2-11 c2-12 c2-3 c2-13 c2-14 c2-15 c2-16 c2-17 c2-18 c2-19 c2-1a c2-1b c2-1c c2-1d c2-1e x-d-ux x-d-tccl x-d-aid">Sign up</button></div></div></form></div></div></span></span></div></div></div></section> </div></div></div><div id="6e41c7a7-546b-4df6-8ee4-60e9497ff876" class="widget widget-social widget-social-social-1"></div><div id="888c3d04-cc41-46b4-ba8f-c1847158ad42" class="widget widget-contact widget-contact-contact-4"><div data-ux="WidgetSplit" class="x-el x-el-div x-el c1-1 c1-2 c1-3 c1-5 c1-6 c1-7 c1-8 c1-9 c1-a c1-6d c1-6e c1-4b c1-4c c1-4d c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div><div data-ux="ContainerSplit" class="x-el x-el-div c1-1 c1-2 c1-2i c1-2j c1-89 c1-8a c1-z c1-16 c1-39 c1-p c1-3 c1-8b c1-b c1-c c1-d c1-2v c1-7g c1-8c c1-e c1-f c1-g x-d-ux"><div data-ux="SplitItem" class="x-el x-el-div c1-1 c1-2 c1-16 c1-1l c1-8d c1-z c1-p c1-b c1-c c1-8e c1-8f c1-8g c1-d c1-8h c1-8i c1-2t c1-8j c1-e c1-8k c1-8l c1-8m c1-8n c1-f c1-g x-d-ux"><section data-ux="SectionSplit" data-aid="CONTACT_INFO_CONTAINER_REND" class="x-el x-el-section c1-1 c1-2 c1-3 c1-4e c1-3a c1-4 c1-b c1-c c1-l c1-m c1-d c1-e c1-f c1-g x-d-ux x-d-aid"><div data-ux="SectionSplitContainer" class="x-el x-el-div c1-1 c1-2 c1-v c1-w c1-89 c1-8a c1-z c1-b c1-c c1-12 c1-d c1-13 c1-e c1-14 c1-f c1-15 c1-g x-d-ux"><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-4 c1-b c1-c c1-d c1-77 c1-8o c1-7j c1-4m c1-e c1-f c1-g x-d-ux"><h2 typography="HeadingBeta" data-ux="SectionSplitHeading" data-aid="CONTACT_SECTION_TITLE_REND" data-route="sectionTitle" class="x-el x-el-h2 c1-1 c1-2 c1-25 c1-26 c1-4f c1-v c1-2j c1-1a c1-4g c1-4h c1-8p c1-4i c1-4j c1-b c1-c c1-4k c1-3l c1-d c1-8q c1-4m c1-4n c1-e c1-f c1-g x-d-ux x-d-aid x-d-route"><span data-ux="Element" class="x-el x-el-span c1-1 c1-2 c1-1y c1-p c1-4o c1-4p c1-b c1-c c1-4q c1-4r c1-4s c1-4t c1-4u c1-4v c1-4w c1-4x c1-4y c1-4z c1-50 c1-51 c1-52 c1-53 c1-54 c1-55 c1-56 c1-57 c1-58 c1-59 c1-d c1-e c1-f c1-g x-d-ux">Contact Us</span></h2><div data-ux="Content" class="x-el x-el-div c1-1 c1-2 c1-1s c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-6m c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><h4 typography="HeadingDelta" data-ux="ContentHeading" data-aid="CONTACT_INTRO_HEADING_REND" data-route="infoTitle" class="x-el x-el-h4 c1-1 c1-2 c1-25 c1-26 c1-3e c1-2i c1-2j c1-1a c1-4g c1-1z c1-2d c1-2k c1-2l c1-2m c1-2n c1-2o c1-2p x-d-ux x-d-aid x-d-route">Your Feedback is Appreciated</h4><div typography="BodyAlpha" data-ux="ContentText" data-aid="CONTACT_INTRO_DESC_REND" data-route="info" class="x-el x-el-p c1-1 c1-2 c1-25 c1-26 c1-3f c1-1a c1-4g c1-8r c1-8s c1-8t c1-8u c1-8v c1-8w c1-8x c1-8y c1-8z c1-90 c1-91 c1-92 c1-93 c1-94 c1-95 c1-96 c1-97 c1-98 c1-99 c1-9a c1-9b c1-9c c1-9d c1-9e c1-9f c1-9g c1-9h c1-9i c1-b c1-3k c1-c c1-3l c1-d c1-e c1-f c1-g x-d-ux x-d-aid x-d-route x-rt"><p style="margin:0"><span>Have a great experience with our app, and want to let us know? Is something missing? We love hearing from our users!</span></p></div></div><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><h4 typography="HeadingDelta" data-ux="ContentHeading" data-aid="CONTACT_INFO_BIZ_NAME_REND" data-route="businessName" class="x-el x-el-h4 c1-1 c1-2 c1-25 c1-26 c1-3e c1-2i c1-2j c1-1a c1-4g c1-1z c1-2d c1-2k c1-2l c1-2m c1-2n c1-2o c1-2p x-d-ux x-d-aid x-d-route">kvelsaonger</h4></div><div><div id="888c3d04-cc41-46b4-ba8f-c1847158ad42-bootstrap-container"><span data-ux="Element" class="x-el x-el-span c2-1 c2-2 c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux"><div data-ux="Block" class="x-el x-el-div c2-1 c2-2 c2-2q c2-3 c2-4 c2-5 c2-3i c2-6 c2-7 c2-8 x-d-ux"><div data-ux="Block" data-aid="CONTACT_FORM_CONTAINER_MOBILE" class="x-el x-el-div c2-1 c2-2 c2-3j c2-3 c2-4 c2-5 c2-3k c2-6 c2-7 c2-8 x-d-ux x-d-aid"><button typography="ButtonAlpha" data-ux="Button" data-aid="CONTACT_FORM_REVEAL_BUTTON_REND" data-route="formTitle" data-field-route="/form" class="x-el x-el-button c2-1 c2-2 c2-r c2-s c2-t c2-u c2-v c2-w c2-p c2-x c2-y c2-z c2-a c2-9 c2-g c2-q c2-10 c2-3l c2-12 c2-3 c2-13 c2-14 c2-15 c2-16 c2-17 c2-18 c2-19 c2-1a c2-1b c2-1c c2-1d c2-1e x-d-ux x-d-aid x-d-route x-d-field-route" data-tccl="ux2.CONTACT.contact4.Content.Default.Button.Default.5.click,click">Drop us a line!</button></div><div data-ux="Block" data-aid="CONTACT_FORM_CONTAINER_DESKTOP" class="x-el x-el-div c2-1 c2-2 c2-3m c2-3n c2-3 c2-4 c2-5 c2-3o c2-6 c2-7 c2-8 x-d-ux x-d-aid"><div><div data-ux="Block" data-aid="CONTACT_FORM_CONTAINER_DESKTOP_REND" class="x-el x-el-div c2-1 c2-2 c2-3d c2-3p c2-3q c2-3r c2-3s c2-3t c2-3u c2-3v c2-3w c2-3x c2-q c2-3y c2-1f c2-2i c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux x-d-aid"><div data-ux="Block" class="x-el x-el-div c2-1 c2-2 c2-q c2-3y c2-3z c2-40 c2-41 c2-42 c2-2q c2-1f c2-2h c2-2i c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux"><h4 typography="HeadingDelta" data-ux="ContentHeading" data-aid="CONTACT_FORM_TITLE_REND" data-route="formTitle" data-field-route="/form" class="x-el x-el-h4 c2-1 c2-2 c2-9 c2-a c2-43 c2-c c2-d c2-e c2-2l c2-h c2-i c2-j c2-k c2-l c2-m c2-n c2-o x-d-ux x-d-aid x-d-route x-d-field-route">Drop us a line!</h4><form data-ux="Form" id="contact-form6" formfieldvariationoptions="[object Object]" formtitle="Drop us a line!" formfields="[object Object],[object Object],[object Object],[object Object]" formsubmithost="https://contact.apps-api.instantpage.secureserver.net" recaptchatype="V3" domainname="kvelsaonger.godaddysites.com" formsuccessmessage="Thank you for your inquiry! We will get back to you within 48 hours." websiteid="786c35c0-41c6-4a94-90b1-5db94d83ad89" pageid="32c08e75-bde9-4a32-9296-764fd1313ffa" accountid="a4be7615-2598-11ea-81b6-3417ebe73f0e" staticcontent="[object Object]" emailoptinmessage="Sign up for our email list for updates, promotions, and more." emailconfirmationmessage="We've sent you a confirmation email, please click the link to verify your address." infotitle="Your Feedback is Appreciated" info="{&quot;blocks&quot;:[{&quot;key&quot;:&quot;asud7&quot;,&quot;text&quot;:&quot;Have a great experience with our app, and want to let us know? Is something missing? We love hearing from our users!&quot;,&quot;type&quot;:&quot;unstyled&quot;,&quot;depth&quot;:0,&quot;inlineStyleRanges&quot;:[],&quot;entityRanges&quot;:[],&quot;data&quot;:{}}],&quot;entityMap&quot;:{}}" class="x-el x-el-form c2-1 c2-2 c2-f c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux"><input type="text" name="_app_id" autocomplete="off" tabindex="-1" style="display: none;" value=""><div data-ux="Block" class="x-el x-el-div c2-1 c2-2 c2-3y c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux"><div data-ux="Grid" class="x-el x-el-div c2-1 c2-2 c2-1f c2-1g c2-1h c2-1i c2-e c2-1j c2-f c2-1l c2-3 c2-4 c2-1m c2-1n c2-1o c2-1p c2-5 c2-6 c2-7 c2-8 x-d-ux"><div data-ux="GridCell" data-aid="CONTACT_FORM_COL1" class="x-el x-el-div c2-1 c2-2 c2-1g c2-1s c2-1t c2-1u c2-g c2-1v c2-1w c2-1x c2-1y c2-3 c2-4 c2-1z c2-20 c2-21 c2-22 c2-5 c2-6 c2-7 c2-8 x-d-ux x-d-aid"><div data-ux="Block" class="x-el x-el-div c2-1 c2-2 c2-41 c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux"><div data-ux="Block" data-field-id="formFields.label" data-field-route="/form/0" class="x-el x-el-div c2-1 c2-2 c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux x-d-field-id x-d-field-route"><div data-ux="InputFloatLabel" type="text" data-aid="CONTACT_FORM_NAME" class="x-el x-el-div c2-1 c2-2 c2-2q c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux x-d-aid"><input typography="InputAlpha" type="text" data-ux="InputFloatLabel" id="input7" data-aid="CONTACT_FORM_NAME" class="x-el x-el-input c2-1 c2-2 c2-2r c2-2s c2-q c2-2t c2-2u c2-2v c2-2w c2-2x c2-2y c2-2z c2-30 c2-31 c2-32 c2-3 c2-33 c2-4 c2-2g c2-34 c2-18 c2-35 c2-36 c2-37 c2-38 c2-39 c2-3a c2-3b c2-3c c2-5 c2-6 c2-7 c2-8 x-d-ux x-d-aid" value=""><label typography="InputAlpha" data-ux="InputFloatLabelLabel" for="input7" class="x-el x-el-label c2-1 c2-2 c2-9 c2-a c2-3d c2-3e c2-3f c2-3g c2-3h c2-3 c2-33 c2-4 c2-2g c2-5 c2-6 c2-7 c2-8 x-d-ux">Name</label></div></div></div><div data-ux="Block" class="x-el x-el-div c2-1 c2-2 c2-41 c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux"><div data-ux="Block" data-field-id="formFields.label" data-field-route="/form/1" class="x-el x-el-div c2-1 c2-2 c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux x-d-field-id x-d-field-route"><div data-ux="InputFloatLabel" type="text" data-aid="CONTACT_FORM_EMAIL" class="x-el x-el-div c2-1 c2-2 c2-2q c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux x-d-aid"><input typography="InputAlpha" type="text" data-ux="InputFloatLabel" id="input8" data-aid="CONTACT_FORM_EMAIL" class="x-el x-el-input c2-1 c2-2 c2-2r c2-2s c2-q c2-2t c2-2u c2-2v c2-2w c2-2x c2-2y c2-2z c2-30 c2-31 c2-32 c2-3 c2-33 c2-4 c2-2g c2-34 c2-18 c2-35 c2-36 c2-37 c2-38 c2-39 c2-3a c2-3b c2-3c c2-5 c2-6 c2-7 c2-8 x-d-ux x-d-aid" value=""><label typography="InputAlpha" data-ux="InputFloatLabelLabel" for="input8" class="x-el x-el-label c2-1 c2-2 c2-9 c2-a c2-3d c2-3e c2-3f c2-3g c2-3h c2-3 c2-33 c2-4 c2-2g c2-5 c2-6 c2-7 c2-8 x-d-ux">Email*</label></div></div></div><div data-ux="Block" class="x-el x-el-div c2-1 c2-2 c2-41 c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux"><div data-ux="Block" data-field-id="formFields.label" data-field-route="/form/2" class="x-el x-el-div c2-1 c2-2 c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux x-d-field-id x-d-field-route"><textarea typography="InputAlpha" rows="6" aria-label="Message" data-ux="InputTextArea" placeholder="Message" data-aid="CONTACT_FORM_MESSAGE" class="x-el x-el-textarea c2-1 c2-2 c2-2r c2-2s c2-q c2-2t c2-2u c2-2v c2-2w c2-r c2-s c2-2z c2-30 c2-31 c2-32 c2-44 c2-3 c2-33 c2-4 c2-2g c2-34 c2-18 c2-3b c2-3c c2-5 c2-6 c2-7 c2-8 x-d-ux x-d-aid"></textarea></div></div></div></div><div data-ux="Block" class="x-el x-el-div c2-1 c2-2 c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux"><div data-ux="Block" data-aid="CONTACT_FORM_CONTROLS" class="x-el x-el-div controls c2-1 c2-2 c2-45 c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux x-d-aid"><button tccltracking="click" typography="ButtonAlpha" data-ux="Button" type="submit" data-aid="CONTACT_SUBMIT_BUTTON_REND" data-tccl="ux2.contact.submit_form.click,click" state="default" class="x-el x-el-button c2-1 c2-2 c2-r c2-s c2-t c2-u c2-v c2-w c2-p c2-x c2-y c2-z c2-a c2-9 c2-g c2-q c2-10 c2-11 c2-12 c2-3 c2-13 c2-14 c2-15 c2-16 c2-17 c2-18 c2-19 c2-1a c2-1b c2-1c c2-1d c2-1e x-d-ux x-d-aid x-d-traffic2 x-d-tccl">Send</button><span typography="BodyAlpha" data-ux="Text" data-aid="CONTACT_CANCEL_BUTTON_REND" class="x-el x-el-span c2-1 c2-2 c2-9 c2-a c2-2e c2-e c2-f c2-46 c2-47 c2-i c2-x c2-48 c2-d c2-49 c2-3 c2-4 c2-2g c2-4a c2-5 c2-6 c2-7 c2-8 x-d-ux x-d-aid">Cancel</span></div></div></div><div style="width: 1px; height: 1px; visibility: hidden;"></div></form></div></div><div data-ux="Block" class="x-el x-el-div c2-1 c2-2 c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux"><button typography="ButtonAlpha" data-ux="Button" data-aid="CONTACT_FORM_REVEAL_BUTTON_REND" data-route="formTitle" data-field-route="/form" class="x-el x-el-button c2-1 c2-2 c2-r c2-s c2-t c2-u c2-v c2-w c2-p c2-x c2-y c2-z c2-a c2-9 c2-g c2-q c2-10 c2-3l c2-12 c2-3 c2-13 c2-14 c2-15 c2-16 c2-17 c2-18 c2-19 c2-1a c2-1b c2-1c c2-1d c2-1e x-d-ux x-d-aid x-d-route x-d-field-route" data-tccl="ux2.CONTACT.contact4.Content.Default.Button.Default.9.click,click">Drop us a line!</button></div></div></div></div></span></div></div></div></div></div></section></div></div> </div></div></div><div id="095254e8-2b5a-4d75-b717-cfdb5da18bb0" class="widget widget-footer widget-footer-footer-1"><div data-ux="Widget" class="x-el x-el-div x-el c1-1 c1-2 c1-9w c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div><section data-ux="Section" class="x-el x-el-section c1-1 c1-2 c1-9w c1-i c1-j c1-b c1-c c1-l c1-m c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Container" class="x-el x-el-div c1-1 c1-2 c1-v c1-w c1-x c1-y c1-z c1-b c1-c c1-12 c1-d c1-13 c1-e c1-14 c1-f c1-15 c1-g x-d-ux"><div data-ux="Layout" class="x-el x-el-div c1-1 c1-2 c1-1s c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><p typography="DetailsAlpha" data-ux="FooterDetails" data-aid="FOOTER_COPYRIGHT_RENDERED" data-route="copyright" class="x-el x-el-p c1-1 c1-2 c1-25 c1-26 c1-3f c1-1a c1-4g c1-b c1-9x c1-c c1-3l c1-d c1-e c1-f c1-g x-d-ux x-d-aid x-d-route">Copyright © 2019 kvelsaonger - All Rights Reserved.</p><div data-ux="Container" class="x-el x-el-div c1-1 c1-2 c1-v c1-w c1-x c1-y c1-z c1-1s c1-9y c1-b c1-c c1-12 c1-d c1-13 c1-e c1-14 c1-f c1-15 c1-g x-d-ux"><ul data-ux="NavFooter" class="x-el x-el-ul c1-1 c1-2 c1-9z c1-1o c1-8a c1-1q c1-89 c1-1a c1-2j c1-1c c1-2i c1-a0 c1-b c1-c c1-a1 c1-a2 c1-d c1-e c1-f c1-g x-d-ux"></ul></div><hr data-ux="HR" class="x-el x-el-hr c1-1 c1-2 c1-a3 c1-5x c1-7s c1-1a c1-4g c1-a4 c1-v c1-w c1-a5 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><p typography="DetailsAlpha" data-ux="FooterDetails" data-aid="FOOTER_POWERED_BY_RENDERED" data-route="poweredBy" class="x-el x-el-p c1-1 c1-2 c1-25 c1-26 c1-3f c1-1a c1-1c c1-b c1-9x c1-c c1-3l c1-d c1-e c1-f c1-g x-d-ux x-d-aid x-d-route"><span>Powered by GoDaddy <a rel="nofollow noopener" typography="LinkAlpha" data-ux="Link" target="_blank" href="https://www.godaddy.com/websites/website-builder?isc=pwugc&amp;utm_source=wsb&amp;utm_medium=applications&amp;utm_campaign=en-us_corp_applications_base" class="x-el x-el-a c1-22 c1-23 c1-24 c1-25 c1-26 c1-27 c1-28 c1-b c1-2d c1-c c1-2e c1-2f c1-2g c1-d c1-e c1-f c1-g x-d-ux" data-tccl="ux2.FOOTER.footer1.Layout.Default.Link.Default.2805.click,click">Website Builder</a></span></p></div></div></section> </div></div></div></div></div></div>
<script type="text/javascript" src="https://img1.wsimg.com/ceph-p3-01/website-builder-data-prod/static/widgets/UX.3.55.37.js"></script>
<script type="text/javascript">window.cxs && window.cxs.setOptions({ prefix: "c2-" });</script>
<script type="text/javascript" src="https://img1.wsimg.com/blobby/go/gpub/538b4cc67b18960c/script.js"></script>
<script type="text/javascript" src="https://img1.wsimg.com/blobby/go/gpub/70fa198bc69fb4f8/script.js"></script>
<script type="text/javascript">window.wsb['context-bs-1'] = {"renderMode":"PUBLISH","viewDevice":"TABLET_RENDER_DEVICE","fonts":["montserrat","default",""],"colors":["#6a456a"],"fontScale":"medium","locale":"en-US","language":"en","internalLinks":{},"isHomepage":true,"navigationMap":{"32c08e75-bde9-4a32-9296-764fd1313ffa":{"isFlyoutMenu":false,"active":true,"pageId":"32c08e75-bde9-4a32-9296-764fd1313ffa","name":"Home","href":"\u002F","target":"","visible":true,"requiresAuth":false,"rel":"","type":"page","showInFooter":false}},"theme":"Theme25"};</script>
<script type="text/javascript">(function(props,context) {
  Core.utils.renderBootstrap({elId:'bs-1',componentName:'LogoText',props:props,context:context,contextKey:'context-bs-1'});
})({"logo":{"logoText":"kvelsaonger"},"fontPackLogoId":null,"widgetId":"0a1fc6c5-577c-474b-894a-21f0900e2821","section":"default","category":"neutral","locale":"en-US","renderMode":"PUBLISH","viewDevice":"TABLET_RENDER_DEVICE"},{"widgetId":"0a1fc6c5-577c-474b-894a-21f0900e2821","widgetType":"HEADER","widgetPreset":"header9","section":"default","category":"neutral","fontSize":"medium","fontFamily":"alternate","group":"Logo","groupType":"Default"});</script>
<script type="text/javascript">(function(props,context) {
  Core.utils.renderBootstrap({elId:'bs-2',componentName:'LogoText',props:props,context:context,contextKey:'context-bs-1'});
})({"logo":{"logoText":"kvelsaonger"},"fontPackLogoId":null,"widgetId":"0a1fc6c5-577c-474b-894a-21f0900e2821","section":"default","category":"neutral","locale":"en-US","renderMode":"PUBLISH","viewDevice":"TABLET_RENDER_DEVICE"},{"widgetId":"0a1fc6c5-577c-474b-894a-21f0900e2821","widgetType":"HEADER","widgetPreset":"header9","section":"default","category":"neutral","fontSize":"medium","fontFamily":"alternate","group":"Logo","groupType":"Default"});</script>
<script type="text/javascript">!function(n){var t={};function o(e){if(t[e])return t[e].exports;var r=t[e]={i:e,l:!1,exports:{}};return n[e].call(r.exports,r,r.exports,o),r.l=!0,r.exports}o.m=n,o.c=t,o.d=function(n,t,e){o.o(n,t)||Object.defineProperty(n,t,{configurable:!1,enumerable:!0,get:e})},o.n=function(n){var t=n&&n.__esModule?function(){return n.default}:function(){return n};return o.d(t,"a",t),t},o.o=function(n,t){return Object.prototype.hasOwnProperty.call(n,t)},o.p="",o(o.s=0)}([function(n,t,o){"use strict";window.wsb=window.wsb||{},window.wsb.CTAButton=window.wsb.CTAButton||o(1).components.CTAButton},function(n,t){n.exports=Core}]);</script>
<script type="text/javascript">(function(props,context) {
  Core.utils.renderBootstrap({elId:'bs-3',componentName:'CTAButton',props:props,context:context,contextKey:'context-bs-1'});
})({"ctaButton":{"enabled":true,"label":"Contact Us","pageId":"32c08e75-bde9-4a32-9296-764fd1313ffa","widgetId":"888c3d04-cc41-46b4-ba8f-c1847158ad42"},"data-aid":"HEADER_CTA_BTN","data-tccl":"ux2.header.cta_button.click,click","widgetId":"0a1fc6c5-577c-474b-894a-21f0900e2821","section":"default","category":"neutral","locale":"en-US","renderMode":"PUBLISH","viewDevice":"TABLET_RENDER_DEVICE"},{"widgetId":"0a1fc6c5-577c-474b-894a-21f0900e2821","widgetType":"HEADER","widgetPreset":"header9","section":"default","category":"neutral","fontSize":"medium","fontFamily":"alternate","group":"Hero","groupType":"Center"});</script>
<script type="text/javascript">Number(window.vctElements)||(window.vctElements=0),window.vctElements++,window.markVisuallyComplete();</script>
<script type="text/javascript" src="https://img1.wsimg.com/blobby/go/gpub/d61ffb5290ecb7dc/script.js"></script>
<script type="text/javascript">window.wsb['context-bs-4'] = {"renderMode":"PUBLISH","fonts":["montserrat","default",""],"colors":["#6a456a"],"fontScale":"medium","locale":"en-US","language":"en","internalLinks":{},"isHomepage":true,"navigationMap":{"32c08e75-bde9-4a32-9296-764fd1313ffa":{"isFlyoutMenu":false,"active":true,"pageId":"32c08e75-bde9-4a32-9296-764fd1313ffa","name":"Home","href":"\u002F","target":"","visible":true,"requiresAuth":false,"rel":"","type":"page","showInFooter":false}},"theme":"Theme25"};</script>
<script type="text/javascript" src="https://img1.wsimg.com/blobby/go/786c35c0-41c6-4a94-90b1-5db94d83ad89/gpub/683c396f5cdeb6d5/script.js"></script>
<script type="text/javascript" src="https://img1.wsimg.com/blobby/go/gpub/b258a796f8969ea5/script.js"></script>
<script type="text/javascript" src="https://img1.wsimg.com/blobby/go/786c35c0-41c6-4a94-90b1-5db94d83ad89/gpub/4bf70d2cd753e19/script.js"></script>
<script type="text/javascript" src="https://img1.wsimg.com/blobby/go/gpub/261649e036f2ab86/script.js"></script>
<script type="text/javascript" src="https://img1.wsimg.com/blobby/go/786c35c0-41c6-4a94-90b1-5db94d83ad89/gpub/da02d672ab8cd435/script.js"></script>
<script type="text/javascript">document.getElementById('page-2784').addEventListener('click', function() {}, false);</script>
<script type="text/javascript">function tccl_dpsid(){for(var t="dps_site_id=",i=document.cookie.split(";"),e=0;e<i.length;e++){for(var n=i[e];" "==n.charAt(0);)n=n.substring(1);if(0==n.indexOf(t))return n.substring(t.length,n.length)}return null}_trfd.push({"tccl.baseHost":"secureserver.net"}),_trfd.push({"websiteId":"786c35c0-41c6-4a94-90b1-5db94d83ad89"}),_trfd.push({"pd":"2019-12-23T15:31:48.653Z"}),_trfd.push({ap:"IPv2",ds:tccl_dpsid()||"-1"});function addTccl(){if(Number(window.vctElements)&&!window.VISUAL_COMPLETE)setTimeout(addTccl,500);else{var t=document.createElement("script");t.setAttribute("src","//img1.wsimg.com/tcc/tcc_l.combined.1.0.6.min.js"),document.body.appendChild(t)}}addTccl();</script><script src="https://img1.wsimg.com/tcc/tcc_l.combined.1.0.6.min.js"></script></body>
</html>
