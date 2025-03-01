<?php
/*
Plugin Name: Ads Before Redirect
Description: Menampilkan iklan sebelum redirect ke link tujuan.
Version: 1.0
Author: Dedi Ir
Url Author: https://abjad.eu.org
*/

if( !defined( 'YOURLS_ABSPATH' ) ) die();

yourls_add_action( 'pre_redirect', 'ads_before_redirect' );

function ads_before_redirect( $args ) {
    $url = $args[0];

    echo "<html>
         <head>
             <meta http-equiv='refresh' content='5;url=$url'>
             <title>Tunggu Sebentar...</title>
             <script>
                 setTimeout(function() {
                     window.location.href = '$url';
                 }, 7000);
             </script>
         </head>
         <body style='text-align: center; font-family: Arial, sans-serif;'>
             <h1>Mohon Tunggu...</h1>
             <p>Anda akan dialihkan dalam <span id='countdown'>5</span> detik.</p>

             <div id='ads-container' style='text-align: center; margin-top: 20px;'>
                 <!-- Iklan 1 -->
                 <div id='ad1'>
                     <script type='text/javascript'>
                         atOptions = {
                             'key': 'f0b7960e86f7aac1f68b1bf9ded91e9d',
                             'format': 'iframe',
                             'height': 250,
                             'width': 300,
                             'params': {}
                         };
                     </script>
                     <script type='text/javascript' src='//elegantimpose.com/f0b7960e86f7aac1f68b1bf9ded91e9d/invoke.js'></script>
                 </div>
<!-- iklan 1111 -->

<script>
    setTimeout(function() {
        window.open('https://elegantimpose.com/jut8g3m5f?key=b1224cd43c3081249549f4383f9f6250', '_blank');
    }, 5000); // 7000ms = 7 detik
</script>
                 <!-- Iklan 2 -->
                 <div id='ad2' style='display: none;'>
                     <script type='text/javascript'>
                         atOptions = {
                             'key': 'b94eb0e38c887550604d067aafb292bf',
                             'format': 'iframe',
                             'height': 600,
                             'width': 160,
                             'params': {}
                         };
                     </script>
                     <script type='text/javascript' src='//elegantimpose.com/b94eb0e38c887550604d067aafb292bf/invoke.js'></script>
                 </div>

                 <!-- Iklan 3 -->
                 <div id='ad3' style='display: none;'>
                     <script type='text/javascript'>
                         atOptions = {
                             'key': '5e1afe1530b9c1fe9244a0999f2bf587',
                             'format': 'iframe',
                             'height': 60,
                             'width': 468,
                             'params': {}
                         };
                     </script>
                     <script type='text/javascript' src='//elegantimpose.com/5e1afe1530b9c1fe9244a0999f2bf587/invoke.js'></script>
                 </div>

                 <!-- Iklan 4 -->
                 <div id='ad4' style='display: none;'>
                     <script type='text/javascript'>
                         atOptions = {
                             'key': '4f836233ae77ac9d3f646672df997829',
                             'format': 'iframe',
                             'height': 300,
                             'width': 160,
                             'params': {}
                         };
                     </script>
                     <script type='text/javascript' src='//elegantimpose.com/4f836233ae77ac9d3f646672df997829/invoke.js'></script>
                 </div>
             </div>

             <script>
                 let currentAd = 1;
                 const totalAds = 4;
                 setInterval(() => {
                     for (let i = 1; i <= totalAds; i++) {
                         const ad = document.getElementById(`ad${i}`);
                         if (i === currentAd) {
                             ad.style.display = 'block';
                         } else {
                             ad.style.display = 'none';
                         }
                     }
                     currentAd = currentAd < totalAds ? currentAd + 1 : 1;
                 }, 3000);

                 var seconds = 5;
                 var countdown = document.getElementById('countdown');
                 setInterval(function() {
                     seconds--;
                     countdown.textContent = seconds;
                 }, 1000);
             </script>
         </body>
         </html>";
    exit();
}
?>
