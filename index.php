<?php 

/**
 * Plugin Name: Tarte Au Citron (RGPD)
 * Plugin URI: https://tarteaucitron.io/fr/install/
 * Description: Plug-in ajout du script Tarte au Citron JS, pour la réglementation RGPD
 * Version: 1.2
 * Author: E.Blin
 * Author URI: https://b-link.xyz
 * License: GPL-2.0+
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 */




function tarteAuCitron() {
   ?>
   <!-- Add Cookie Compliance with TarteauxcitronJS  -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/tarteaucitronjs/1.11.0/tarteaucitron.js" integrity="sha512-bDyrKjNycnlzdeKsBI4TOHhiDmAx9LtNkZo/IfdLZGlzYTREqmAdvgHy876IOBfZ7UUq7mIz4t4ZHoG8w/xTdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

      <script type="text/javascript">
        tarteaucitron.init({
    	  "privacyUrl": "", /* Privacy policy url */
          "bodyPosition": "bottom", /* or top to bring it as first element for accessibility */

    	  "hashtag": "#tarteaucitron", /* Open the panel with this hashtag */
    	  "cookieName": "tarteaucitron", /* Cookie name */
    
    	  "orientation": "middle", /* Banner position (top - bottom) */
       
          "groupServices": false, /* Group services by category */
          "serviceDefaultState": "wait", /* Default state (true - wait - false) */
                           
    	  "showAlertSmall": false, /* Show the small banner on bottom right */
    	  "cookieslist": false, /* Show the cookie list */
                           
          "closePopup": false, /* Show a close X on the banner */

          "showIcon": true, /* Show cookie icon to manage cookies */
          //"iconSrc": "", /* Optionnal: URL or base64 encoded image */
          "iconPosition": "BottomRight", /* BottomRight, BottomLeft, TopRight and TopLeft */

    	  "adblocker": false, /* Show a Warning if an adblocker is detected */
                           
          "DenyAllCta" : true, /* Show the deny all button */
          "AcceptAllCta" : true, /* Show the accept all button when highPrivacy on */
          "highPrivacy": true, /* HIGHLY RECOMMANDED Disable auto consent */
                           
    	  "handleBrowserDNTRequest": false, /* If Do Not Track == 1, disallow all */

    	  "removeCredit": false, /* Remove credit link */
    	  "moreInfoLink": true, /* Show more info link */

          "useExternalCss": false, /* If false, the tarteaucitron.css file will be loaded */
          "useExternalJs": false, /* If false, the tarteaucitron.js file will be loaded */

    	  //"cookieDomain": ".my-multisite-domaine.fr", /* Shared cookie for multisite */
                          
          "readmoreLink": "", /* Change the default readmore link */

          "mandatory": true, /* Show a message about mandatory cookies */
          "mandatoryCta": true /* Show the disabled accept button when mandatory on */
        });
    

      //   Recaptcha
              tarteaucitron.user.recaptchaapi = 'XXXXX';
        (tarteaucitron.job = tarteaucitron.job || []).push('recaptcha');

      //   Google maps 
            tarteaucitron.user.googlemapsKey = 'API KEY';
        (tarteaucitron.job = tarteaucitron.job || []).push('googlemaps');

      // Google Tag Manager
        tarteaucitron.user.googletagmanagerId = 'GTM-XXXX';
        (tarteaucitron.job = tarteaucitron.job || []).push('googletagmanager');

      // Google Analytics GA4
        tarteaucitron.user.gtagUa = 'G-XXXXXXXXX';
        // tarteaucitron.user.gtagCrossdomain = ['example.com', 'example2.com'];
        tarteaucitron.user.gtagMore = function () { /* add here your optionnal gtag() */ };
        (tarteaucitron.job = tarteaucitron.job || []).push('gtag');

        // Facebook Like Box 
        (tarteaucitron.job = tarteaucitron.job || []).push('facebooklikebox');

        // Facebook Pixel
        tarteaucitron.user.facebookpixelId = 'YOUR-ID'; tarteaucitron.user.facebookpixelMore = function () { /* add here your optionnal facebook pixel function */ };
        (tarteaucitron.job = tarteaucitron.job || []).push('facebookpixel');

        // Facebook 
        (tarteaucitron.job = tarteaucitron.job || []).push('facebook');
        
        //Matomo 
        tarteaucitron.user.matomoId = SITE_ID;
        (tarteaucitron.job = tarteaucitron.job || []).push('matomocloud');
        
        tarteaucitron.user.matomoHost = 'YOUR_MATOMO_URL';tarteaucitron.user.matomoCustomJSPath = 'JS_PATH';
        </script>
   
   
   <?php 
}

add_action('wp_head', 'tarteAuCitron');
?>
