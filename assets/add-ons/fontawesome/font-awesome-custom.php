<?php
/**
 * Custom Icons and List Shortcodes
 * Plugin URI: http://uiux.cc/wp-plugins/uix-shortcodes/
 * Author: UIUX Lab
 * Author URI: http://uiux.cc
 * License: GPLv2 or later

 */
 
 

?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<link rel="stylesheet" href="../sweetalert/sweetalert.css?ver=1.0.0" type="text/css" media="screen" />
<link rel="stylesheet" href="font-awesome.css?ver=4.4.0" type="text/css" media="screen" />
<link rel="stylesheet" href="../rollbar/jquery.rollbar.css" type="text/css" media="screen" />

<style>
html,body{
	margin:0;
	padding:0;
	color:#666;
}

</style>
</head>

<body ondragstart="window.event.returnValue=false" oncontextmenu="window.event.returnValue=false" onselectstart="event.returnValue=false">

<?php
$pushinputID = '';
$position = '';
$type = '';

if ( isset( $_GET['pushinputID'] ) ) $pushinputID = $_GET['pushinputID'];
if ( isset( $_GET['p'] ) ) $position = $_GET['p'];
if ( isset( $_GET['type'] ) ) $type = $_GET['type'];

$social_icons = '
<a href="javascript:" class="b"><i class="fa fa-twitter"></i></a>
<a href="javascript:" class="b"><i class="fa fa-twitter-square"></i></a>
<a href="javascript:" class="b"><i class="fa fa-facebook"></i></a>
<a href="javascript:" class="b"><i class="fa fa-facebook-official"></i></a>
<a href="javascript:" class="b"><i class="fa fa-facebook-square"></i></a>
<a href="javascript:" class="b"><i class="fa fa-flickr"></i></a>
<a href="javascript:" class="b"><i class="fa fa-git"></i></a>
<a href="javascript:" class="b"><i class="fa fa-git-square"></i></a>
<a href="javascript:" class="b"><i class="fa fa-github"></i></a>
<a href="javascript:" class="b"><i class="fa fa-github-alt"></i></a>
<a href="javascript:" class="b"><i class="fa fa-github-square"></i></a>
<a href="javascript:" class="b"><i class="fa fa-gittip"></i></a>
<a href="javascript:" class="b"><i class="fa fa-google"></i></a>
<a href="javascript:" class="b"><i class="fa fa-google-plus"></i></a>
<a href="javascript:" class="b"><i class="fa fa-google-plus-square"></i></a>
<a href="javascript:" class="b"><i class="fa fa-linkedin"></i></a>
<a href="javascript:" class="b"><i class="fa fa-linkedin-square"></i></a>
<a href="javascript:" class="b"><i class="fa fa-pinterest"></i></a>
<a href="javascript:" class="b"><i class="fa fa-pinterest-p"></i></a>
<a href="javascript:" class="b"><i class="fa fa-pinterest-square"></i></a>
<a href="javascript:" class="b"><i class="fa fa-deviantart"></i></a>
<a href="javascript:" class="b"><i class="fa fa-digg"></i></a>
<a href="javascript:" class="b"><i class="fa fa-dribbble"></i></a>
<a href="javascript:" class="b"><i class="fa fa-instagram"></i></a>
<a href="javascript:" class="b"><i class="fa fa-behance"></i></a>
<a href="javascript:" class="b"><i class="fa fa-behance-square"></i></a>
<a href="javascript:" class="b"><i class="fa fa-vimeo"></i></a>
<a href="javascript:" class="b"><i class="fa fa-vimeo-square"></i></a>
<a href="javascript:" class="b"><i class="fa fa-youtube"></i></a>
<a href="javascript:" class="b"><i class="fa fa-youtube-play"></i></a>
<a href="javascript:" class="b"><i class="fa fa-youtube-square"></i></a>
<a href="javascript:" class="b"><i class="fa fa-reddit"></i></a>
<a href="javascript:" class="b"><i class="fa fa-reddit-square"></i></a>
<a href="javascript:" class="b"><i class="fa fa-codepen"></i></a>
<a href="javascript:" class="b"><i class="fa fa-qq"></i></a>
<a href="javascript:" class="b"><i class="fa fa-skype"></i></a>
<a href="javascript:" class="b"><i class="fa fa-tumblr"></i></a>
<a href="javascript:" class="b"><i class="fa fa-tumblr-square"></i></a>
<a href="javascript:" class="b"><i class="fa fa-wechat"></i></a>
<a href="javascript:" class="b"><i class="fa fa-weibo"></i></a>
<a href="javascript:" class="b"><i class="fa fa-weixin"></i></a>
<a href="javascript:" class="b"><i class="fa fa-renren"></i></a>
<a href="javascript:" class="b"><i class="fa fa-adn"></i></a>
<a href="javascript:" class="b"><i class="fa fa-android"></i></a>
<a href="javascript:" class="b"><i class="fa fa-angellist"></i></a>
<a href="javascript:" class="b"><i class="fa fa-apple"></i></a>
<a href="javascript:" class="b"><i class="fa fa-bitbucket"></i></a>
<a href="javascript:" class="b"><i class="fa fa-bitbucket-square"></i></a>
<a href="javascript:" class="b"><i class="fa fa-bitcoin"></i></a>
<a href="javascript:" class="b"><i class="fa fa-btc"></i></a>
<a href="javascript:" class="b"><i class="fa fa-buysellads"></i></a>
<a href="javascript:" class="b"><i class="fa fa-twitch"></i></a>
<a href="javascript:" class="b"><i class="fa fa-connectdevelop"></i></a>
<a href="javascript:" class="b"><i class="fa fa-css3"></i></a>
<a href="javascript:" class="b"><i class="fa fa-dashcube"></i></a>
<a href="javascript:" class="b"><i class="fa fa-delicious"></i></a>
<a href="javascript:" class="b"><i class="fa fa-dropbox"></i></a>
<a href="javascript:" class="b"><i class="fa fa-drupal"></i></a>
<a href="javascript:" class="b"><i class="fa fa-empire"></i></a>
<a href="javascript:" class="b"><i class="fa fa-forumbee"></i></a>
<a href="javascript:" class="b"><i class="fa fa-foursquare"></i></a>
<a href="javascript:" class="b"><i class="fa fa-ge"></i></a>
<a href="javascript:" class="b"><i class="fa fa-gratipay"></i></a>
<a href="javascript:" class="b"><i class="fa fa-hacker-news"></i></a>
<a href="javascript:" class="b"><i class="fa fa-html5"></i></a>
<a href="javascript:" class="b"><i class="fa fa-ioxhost"></i></a>
<a href="javascript:" class="b"><i class="fa fa-joomla"></i></a>
<a href="javascript:" class="b"><i class="fa fa-jsfiddle"></i></a>
<a href="javascript:" class="b"><i class="fa fa-lastfm"></i></a>
<a href="javascript:" class="b"><i class="fa fa-lastfm-square"></i></a>
<a href="javascript:" class="b"><i class="fa fa-leanpub"></i></a>
<a href="javascript:" class="b"><i class="fa fa-linux"></i></a>
<a href="javascript:" class="b"><i class="fa fa-maxcdn"></i></a>
<a href="javascript:" class="b"><i class="fa fa-meanpath"></i></a>
<a href="javascript:" class="b"><i class="fa fa-medium"></i></a>
<a href="javascript:" class="b"><i class="fa fa-openid"></i></a>
<a href="javascript:" class="b"><i class="fa fa-pagelines"></i></a>
<a href="javascript:" class="b"><i class="fa fa-paypal"></i></a>
<a href="javascript:" class="b"><i class="fa fa-pied-piper"></i></a>
<a href="javascript:" class="b"><i class="fa fa-pied-piper-alt"></i></a>
<a href="javascript:" class="b"><i class="fa fa-ra"></i></a>
<a href="javascript:" class="b"><i class="fa fa-rebel"></i></a>
<a href="javascript:" class="b"><i class="fa fa-sellsy"></i></a>
<a href="javascript:" class="b"><i class="fa fa-share-alt"></i></a>
<a href="javascript:" class="b"><i class="fa fa-share-alt-square"></i></a>
<a href="javascript:" class="b"><i class="fa fa-shirtsinbulk"></i></a>
<a href="javascript:" class="b"><i class="fa fa-simplybuilt"></i></a>
<a href="javascript:" class="b"><i class="fa fa-skyatlas"></i></a>
<a href="javascript:" class="b"><i class="fa fa-slack"></i></a>
<a href="javascript:" class="b"><i class="fa fa-slideshare"></i></a>
<a href="javascript:" class="b"><i class="fa fa-soundcloud"></i></a>
<a href="javascript:" class="b"><i class="fa fa-spotify"></i></a>
<a href="javascript:" class="b"><i class="fa fa-stack-exchange"></i></a>
<a href="javascript:" class="b"><i class="fa fa-stack-overflow"></i></a>
<a href="javascript:" class="b"><i class="fa fa-steam"></i></a>
<a href="javascript:" class="b"><i class="fa fa-steam-square"></i></a>
<a href="javascript:" class="b"><i class="fa fa-stumbleupon"></i></a>
<a href="javascript:" class="b"><i class="fa fa-stumbleupon-circle"></i></a>
<a href="javascript:" class="b"><i class="fa fa-tencent-weibo"></i></a>
<a href="javascript:" class="b"><i class="fa fa-trello"></i></a>
<a href="javascript:" class="b"><i class="fa fa-viacoin"></i></a>
<a href="javascript:" class="b"><i class="fa fa-vine"></i></a>
<a href="javascript:" class="b"><i class="fa fa-vk"></i></a>
<a href="javascript:" class="b"><i class="fa fa-whatsapp"></i></a>
<a href="javascript:" class="b"><i class="fa fa-windows"></i></a>
<a href="javascript:" class="b"><i class="fa fa-wordpress"></i></a>
<a href="javascript:" class="b"><i class="fa fa-xing"></i></a>
<a href="javascript:" class="b"><i class="fa fa-xing-square"></i></a>
<a href="javascript:" class="b"><i class="fa fa-yahoo"></i></a>
<a href="javascript:" class="b"><i class="fa fa-yelp"></i></a>
	';


$icons_show = '
<a href="javascript:" class="b"><i class="fa fa-adjust"></i></a>
<a href="javascript:" class="b"><i class="fa fa-anchor"></i></a>
<a href="javascript:" class="b"><i class="fa fa-archive"></i></a>
<a href="javascript:" class="b"><i class="fa fa-area-chart"></i></a>
<a href="javascript:" class="b"><i class="fa fa-arrows"></i></a>
<a href="javascript:" class="b"><i class="fa fa-arrows-h"></i></a>
<a href="javascript:" class="b"><i class="fa fa-arrows-v"></i></a>
<a href="javascript:" class="b"><i class="fa fa-asterisk"></i></a>
<a href="javascript:" class="b"><i class="fa fa-at"></i></a>
<a href="javascript:" class="b"><i class="fa fa-link"></i></a>
<a href="javascript:" class="b"><i class="fa fa-chain-broken"></i></a>
<a href="javascript:" class="b"><i class="fa fa-repeat"></i></a>
<a href="javascript:" class="b"><i class="fa fa-list-ul"></i></a>
<a href="javascript:" class="b"><i class="fa fa-scissors"></i></a>
<a href="javascript:" class="b"><i class="fa fa-automobile"></i></a>
<a href="javascript:" class="b"><i class="fa fa-ban"></i></a>
<a href="javascript:" class="b"><i class="fa fa-bank"></i></a>
<a href="javascript:" class="b"><i class="fa fa-bar-chart"></i></a>
<a href="javascript:" class="b"><i class="fa fa-bar-chart-o"></i></a>
<a href="javascript:" class="b"><i class="fa fa-barcode"></i></a>
<a href="javascript:" class="b"><i class="fa fa-bars"></i></a>
<a href="javascript:" class="b"><i class="fa fa-bed"></i></a>
<a href="javascript:" class="b"><i class="fa fa-beer"></i></a>
<a href="javascript:" class="b"><i class="fa fa-bell"></i></a>
<a href="javascript:" class="b"><i class="fa fa-bell-o"></i></a>
<a href="javascript:" class="b"><i class="fa fa-bell-slash"></i></a>
<a href="javascript:" class="b"><i class="fa fa-bell-slash-o"></i></a>
<a href="javascript:" class="b"><i class="fa fa-bicycle"></i></a>
<a href="javascript:" class="b"><i class="fa fa-binoculars"></i></a>
<a href="javascript:" class="b"><i class="fa fa-birthday-cake"></i></a>
<a href="javascript:" class="b"><i class="fa fa-bolt"></i></a>
<a href="javascript:" class="b"><i class="fa fa-bomb"></i></a>
<a href="javascript:" class="b"><i class="fa fa-book"></i></a>
<a href="javascript:" class="b"><i class="fa fa-bookmark"></i></a>
<a href="javascript:" class="b"><i class="fa fa-bookmark-o"></i></a>
<a href="javascript:" class="b"><i class="fa fa-briefcase"></i></a>
<a href="javascript:" class="b"><i class="fa fa-bug"></i></a>
<a href="javascript:" class="b"><i class="fa fa-building"></i></a>
<a href="javascript:" class="b"><i class="fa fa-building-o"></i></a>
<a href="javascript:" class="b"><i class="fa fa-bullhorn"></i></a>
<a href="javascript:" class="b"><i class="fa fa-bullseye"></i></a>
<a href="javascript:" class="b"><i class="fa fa-bus"></i></a>
<a href="javascript:" class="b"><i class="fa fa-cab"></i></a>
<a href="javascript:" class="b"><i class="fa fa-calculator"></i></a>
<a href="javascript:" class="b"><i class="fa fa-calendar"></i></a>
<a href="javascript:" class="b"><i class="fa fa-calendar-o"></i></a>
<a href="javascript:" class="b"><i class="fa fa-camera"></i></a>
<a href="javascript:" class="b"><i class="fa fa-camera-retro"></i></a>
<a href="javascript:" class="b"><i class="fa fa-car"></i></a>
<a href="javascript:" class="b"><i class="fa fa-caret-square-o-down"></i></a>
<a href="javascript:" class="b"><i class="fa fa-caret-square-o-left"></i></a>
<a href="javascript:" class="b"><i class="fa fa-caret-square-o-right"></i></a>
<a href="javascript:" class="b"><i class="fa fa-caret-square-o-up"></i></a>
<a href="javascript:" class="b"><i class="fa fa-cart-arrow-down"></i></a>
<a href="javascript:" class="b"><i class="fa fa-cart-plus"></i></a>
<a href="javascript:" class="b"><i class="fa fa-cc"></i></a>
<a href="javascript:" class="b"><i class="fa fa-certificate"></i></a>
<a href="javascript:" class="b"><i class="fa fa-check"></i></a>
<a href="javascript:" class="b"><i class="fa fa-check-circle"></i></a>
<a href="javascript:" class="b"><i class="fa fa-check-circle-o"></i></a>
<a href="javascript:" class="b"><i class="fa fa-check-square"></i></a>
<a href="javascript:" class="b"><i class="fa fa-check-square-o"></i></a>
<a href="javascript:" class="b"><i class="fa fa-child"></i></a>
<a href="javascript:" class="b"><i class="fa fa-circle"></i></a>
<a href="javascript:" class="b"><i class="fa fa-circle-o"></i></a>
<a href="javascript:" class="b"><i class="fa fa-circle-o-notch"></i></a>
<a href="javascript:" class="b"><i class="fa fa-circle-thin"></i></a>
<a href="javascript:" class="b"><i class="fa fa-clock-o"></i></a>
<a href="javascript:" class="b"><i class="fa fa-close"></i></a>
<a href="javascript:" class="b"><i class="fa fa-cloud"></i></a>
<a href="javascript:" class="b"><i class="fa fa-cloud-download"></i></a>
<a href="javascript:" class="b"><i class="fa fa-cloud-upload"></i></a>
<a href="javascript:" class="b"><i class="fa fa-code"></i></a>
<a href="javascript:" class="b"><i class="fa fa-code-fork"></i></a>
<a href="javascript:" class="b"><i class="fa fa-coffee"></i></a>
<a href="javascript:" class="b"><i class="fa fa-cog"></i></a>
<a href="javascript:" class="b"><i class="fa fa-cogs"></i></a>
<a href="javascript:" class="b"><i class="fa fa-comment"></i></a>
<a href="javascript:" class="b"><i class="fa fa-comment-o"></i></a>
<a href="javascript:" class="b"><i class="fa fa-comments"></i></a>
<a href="javascript:" class="b"><i class="fa fa-comments-o"></i></a>
<a href="javascript:" class="b"><i class="fa fa-compass"></i></a>
<a href="javascript:" class="b"><i class="fa fa-copyright"></i></a>
<a href="javascript:" class="b"><i class="fa fa-credit-card"></i></a>
<a href="javascript:" class="b"><i class="fa fa-crop"></i></a>
<a href="javascript:" class="b"><i class="fa fa-crosshairs"></i></a>
<a href="javascript:" class="b"><i class="fa fa-cube"></i></a>
<a href="javascript:" class="b"><i class="fa fa-cubes"></i></a>
<a href="javascript:" class="b"><i class="fa fa-cutlery"></i></a>
<a href="javascript:" class="b"><i class="fa fa-dashboard"></i></a>
<a href="javascript:" class="b"><i class="fa fa-database"></i></a>
<a href="javascript:" class="b"><i class="fa fa-desktop"></i></a>
<a href="javascript:" class="b"><i class="fa fa-diamond"></i></a>
<a href="javascript:" class="b"><i class="fa fa-dot-circle-o"></i></a>
<a href="javascript:" class="b"><i class="fa fa-download"></i></a>
<a href="javascript:" class="b"><i class="fa fa-edit"></i></a>
<a href="javascript:" class="b"><i class="fa fa-ellipsis-h"></i></a>
<a href="javascript:" class="b"><i class="fa fa-ellipsis-v"></i></a>
<a href="javascript:" class="b"><i class="fa fa-envelope"></i></a>
<a href="javascript:" class="b"><i class="fa fa-envelope-o"></i></a>
<a href="javascript:" class="b"><i class="fa fa-envelope-square"></i></a>
<a href="javascript:" class="b"><i class="fa fa-eraser"></i></a>
<a href="javascript:" class="b"><i class="fa fa-exchange"></i></a>
<a href="javascript:" class="b"><i class="fa fa-exclamation"></i></a>
<a href="javascript:" class="b"><i class="fa fa-exclamation-circle"></i></a>
<a href="javascript:" class="b"><i class="fa fa-exclamation-triangle"></i></a>
<a href="javascript:" class="b"><i class="fa fa-external-link"></i></a>
<a href="javascript:" class="b"><i class="fa fa-external-link-square"></i></a>
<a href="javascript:" class="b"><i class="fa fa-eye"></i></a>
<a href="javascript:" class="b"><i class="fa fa-eye-slash"></i></a>
<a href="javascript:" class="b"><i class="fa fa-eyedropper"></i></a>
<a href="javascript:" class="b"><i class="fa fa-fax"></i></a>
<a href="javascript:" class="b"><i class="fa fa-female"></i></a>
<a href="javascript:" class="b"><i class="fa fa-fighter-jet"></i></a>
<a href="javascript:" class="b"><i class="fa fa-file-archive-o"></i></a>
<a href="javascript:" class="b"><i class="fa fa-file-audio-o"></i></a>
<a href="javascript:" class="b"><i class="fa fa-file-code-o"></i></a>
<a href="javascript:" class="b"><i class="fa fa-file-excel-o"></i></a>
<a href="javascript:" class="b"><i class="fa fa-file-image-o"></i></a>
<a href="javascript:" class="b"><i class="fa fa-file-movie-o"></i></a>
<a href="javascript:" class="b"><i class="fa fa-file-pdf-o"></i></a>
<a href="javascript:" class="b"><i class="fa fa-file-photo-o"></i></a>
<a href="javascript:" class="b"><i class="fa fa-file-picture-o"></i></a>
<a href="javascript:" class="b"><i class="fa fa-file-powerpoint-o"></i></a>
<a href="javascript:" class="b"><i class="fa fa-file-sound-o"></i></a>
<a href="javascript:" class="b"><i class="fa fa-file-video-o"></i></a>
<a href="javascript:" class="b"><i class="fa fa-file-word-o"></i></a>
<a href="javascript:" class="b"><i class="fa fa-file-zip-o"></i></a>
<a href="javascript:" class="b"><i class="fa fa-film"></i></a>
<a href="javascript:" class="b"><i class="fa fa-filter"></i></a>
<a href="javascript:" class="b"><i class="fa fa-fire"></i></a>
<a href="javascript:" class="b"><i class="fa fa-fire-extinguisher"></i></a>
<a href="javascript:" class="b"><i class="fa fa-flag"></i></a>
<a href="javascript:" class="b"><i class="fa fa-flag-checkered"></i></a>
<a href="javascript:" class="b"><i class="fa fa-flag-o"></i></a>
<a href="javascript:" class="b"><i class="fa fa-flash"></i></a>
<a href="javascript:" class="b"><i class="fa fa-flask"></i></a>
<a href="javascript:" class="b"><i class="fa fa-folder"></i></a>
<a href="javascript:" class="b"><i class="fa fa-folder-o"></i></a>
<a href="javascript:" class="b"><i class="fa fa-folder-open"></i></a>
<a href="javascript:" class="b"><i class="fa fa-folder-open-o"></i></a>
<a href="javascript:" class="b"><i class="fa fa-frown-o"></i></a>
<a href="javascript:" class="b"><i class="fa fa-futbol-o"></i></a>
<a href="javascript:" class="b"><i class="fa fa-gamepad"></i></a>
<a href="javascript:" class="b"><i class="fa fa-gavel"></i></a>
<a href="javascript:" class="b"><i class="fa fa-gear"></i></a>
<a href="javascript:" class="b"><i class="fa fa-gears"></i></a>
<a href="javascript:" class="b"><i class="fa fa-gift"></i></a>
<a href="javascript:" class="b"><i class="fa fa-glass"></i></a>
<a href="javascript:" class="b"><i class="fa fa-globe"></i></a>
<a href="javascript:" class="b"><i class="fa fa-graduation-cap"></i></a>
<a href="javascript:" class="b"><i class="fa fa-group"></i></a>
<a href="javascript:" class="b"><i class="fa fa-hdd-o"></i></a>
<a href="javascript:" class="b"><i class="fa fa-headphones"></i></a>
<a href="javascript:" class="b"><i class="fa fa-heart"></i></a>
<a href="javascript:" class="b"><i class="fa fa-heart-o"></i></a>
<a href="javascript:" class="b"><i class="fa fa-heartbeat"></i></a>
<a href="javascript:" class="b"><i class="fa fa-history"></i></a>
<a href="javascript:" class="b"><i class="fa fa-home"></i></a>
<a href="javascript:" class="b"><i class="fa fa-hotel"></i></a>
<a href="javascript:" class="b"><i class="fa fa-image"></i></a>
<a href="javascript:" class="b"><i class="fa fa-inbox"></i></a>
<a href="javascript:" class="b"><i class="fa fa-info"></i></a>
<a href="javascript:" class="b"><i class="fa fa-info-circle"></i></a>
<a href="javascript:" class="b"><i class="fa fa-institution"></i></a>
<a href="javascript:" class="b"><i class="fa fa-key"></i></a>
<a href="javascript:" class="b"><i class="fa fa-keyboard-o"></i></a>
<a href="javascript:" class="b"><i class="fa fa-language"></i></a>
<a href="javascript:" class="b"><i class="fa fa-laptop"></i></a>
<a href="javascript:" class="b"><i class="fa fa-leaf"></i></a>
<a href="javascript:" class="b"><i class="fa fa-legal"></i></a>
<a href="javascript:" class="b"><i class="fa fa-lemon-o"></i></a>
<a href="javascript:" class="b"><i class="fa fa-level-down"></i></a>
<a href="javascript:" class="b"><i class="fa fa-level-up"></i></a>
<a href="javascript:" class="b"><i class="fa fa-life-bouy"></i></a>
<a href="javascript:" class="b"><i class="fa fa-life-buoy"></i></a>
<a href="javascript:" class="b"><i class="fa fa-life-ring"></i></a>
<a href="javascript:" class="b"><i class="fa fa-life-saver"></i></a>
<a href="javascript:" class="b"><i class="fa fa-lightbulb-o"></i></a>
<a href="javascript:" class="b"><i class="fa fa-line-chart"></i></a>
<a href="javascript:" class="b"><i class="fa fa-location-arrow"></i></a>
<a href="javascript:" class="b"><i class="fa fa-lock"></i></a>
<a href="javascript:" class="b"><i class="fa fa-magic"></i></a>
<a href="javascript:" class="b"><i class="fa fa-magnet"></i></a>
<a href="javascript:" class="b"><i class="fa fa-mail-forward"></i></a>
<a href="javascript:" class="b"><i class="fa fa-mail-reply"></i></a>
<a href="javascript:" class="b"><i class="fa fa-mail-reply-all"></i></a>
<a href="javascript:" class="b"><i class="fa fa-male"></i></a>
<a href="javascript:" class="b"><i class="fa fa-map-marker"></i></a>
<a href="javascript:" class="b"><i class="fa fa-meh-o"></i></a>
<a href="javascript:" class="b"><i class="fa fa-microphone"></i></a>
<a href="javascript:" class="b"><i class="fa fa-microphone-slash"></i></a>
<a href="javascript:" class="b"><i class="fa fa-minus"></i></a>
<a href="javascript:" class="b"><i class="fa fa-minus-circle"></i></a>
<a href="javascript:" class="b"><i class="fa fa-minus-square"></i></a>
<a href="javascript:" class="b"><i class="fa fa-minus-square-o"></i></a>
<a href="javascript:" class="b"><i class="fa fa-mobile"></i></a>
<a href="javascript:" class="b"><i class="fa fa-mobile-phone"></i></a>
<a href="javascript:" class="b"><i class="fa fa-money"></i></a>
<a href="javascript:" class="b"><i class="fa fa-moon-o"></i></a>
<a href="javascript:" class="b"><i class="fa fa-mortar-board"></i></a>
<a href="javascript:" class="b"><i class="fa fa-motorcycle"></i></a>
<a href="javascript:" class="b"><i class="fa fa-music"></i></a>
<a href="javascript:" class="b"><i class="fa fa-navicon"></i></a>
<a href="javascript:" class="b"><i class="fa fa-newspaper-o"></i></a>
<a href="javascript:" class="b"><i class="fa fa-paint-brush"></i></a>
<a href="javascript:" class="b"><i class="fa fa-paper-plane"></i></a>
<a href="javascript:" class="b"><i class="fa fa-paper-plane-o"></i></a>
<a href="javascript:" class="b"><i class="fa fa-paw"></i></a>
<a href="javascript:" class="b"><i class="fa fa-pencil"></i></a>
<a href="javascript:" class="b"><i class="fa fa-pencil-square"></i></a>
<a href="javascript:" class="b"><i class="fa fa-pencil-square-o"></i></a>
<a href="javascript:" class="b"><i class="fa fa-phone"></i></a>
<a href="javascript:" class="b"><i class="fa fa-phone-square"></i></a>
<a href="javascript:" class="b"><i class="fa fa-photo"></i></a>
<a href="javascript:" class="b"><i class="fa fa-picture-o"></i></a>
<a href="javascript:" class="b"><i class="fa fa-pie-chart"></i></a>
<a href="javascript:" class="b"><i class="fa fa-plane"></i></a>
<a href="javascript:" class="b"><i class="fa fa-plug"></i></a>
<a href="javascript:" class="b"><i class="fa fa-plus"></i></a>
<a href="javascript:" class="b"><i class="fa fa-plus-circle"></i></a>
<a href="javascript:" class="b"><i class="fa fa-plus-square"></i></a>
<a href="javascript:" class="b"><i class="fa fa-plus-square-o"></i></a>
<a href="javascript:" class="b"><i class="fa fa-power-off"></i></a>
<a href="javascript:" class="b"><i class="fa fa-print"></i></a>
<a href="javascript:" class="b"><i class="fa fa-puzzle-piece"></i></a>
<a href="javascript:" class="b"><i class="fa fa-qrcode"></i></a>
<a href="javascript:" class="b"><i class="fa fa-question"></i></a>
<a href="javascript:" class="b"><i class="fa fa-question-circle"></i></a>
<a href="javascript:" class="b"><i class="fa fa-quote-left"></i></a>
<a href="javascript:" class="b"><i class="fa fa-quote-right"></i></a>
<a href="javascript:" class="b"><i class="fa fa-random"></i></a>
<a href="javascript:" class="b"><i class="fa fa-recycle"></i></a>
<a href="javascript:" class="b"><i class="fa fa-refresh"></i></a>
<a href="javascript:" class="b"><i class="fa fa-remove"></i></a>
<a href="javascript:" class="b"><i class="fa fa-reorder"></i></a>
<a href="javascript:" class="b"><i class="fa fa-reply"></i></a>
<a href="javascript:" class="b"><i class="fa fa-reply-all"></i></a>
<a href="javascript:" class="b"><i class="fa fa-retweet"></i></a>
<a href="javascript:" class="b"><i class="fa fa-road"></i></a>
<a href="javascript:" class="b"><i class="fa fa-rocket"></i></a>
<a href="javascript:" class="b"><i class="fa fa-rss"></i></a>
<a href="javascript:" class="b"><i class="fa fa-rss-square"></i></a>
<a href="javascript:" class="b"><i class="fa fa-search"></i></a>
<a href="javascript:" class="b"><i class="fa fa-search-minus"></i></a>
<a href="javascript:" class="b"><i class="fa fa-search-plus"></i></a>
<a href="javascript:" class="b"><i class="fa fa-server"></i></a>
<a href="javascript:" class="b"><i class="fa fa-share"></i></a>
<a href="javascript:" class="b"><i class="fa fa-share-alt"></i></a>
<a href="javascript:" class="b"><i class="fa fa-share-alt-square"></i></a>
<a href="javascript:" class="b"><i class="fa fa-share-square"></i></a>
<a href="javascript:" class="b"><i class="fa fa-share-square-o"></i></a>
<a href="javascript:" class="b"><i class="fa fa-shield"></i></a>
<a href="javascript:" class="b"><i class="fa fa-ship"></i></a>
<a href="javascript:" class="b"><i class="fa fa-shopping-cart"></i></a>
<a href="javascript:" class="b"><i class="fa fa-sign-in"></i></a>
<a href="javascript:" class="b"><i class="fa fa-sign-out"></i></a>
<a href="javascript:" class="b"><i class="fa fa-signal"></i></a>
<a href="javascript:" class="b"><i class="fa fa-sitemap"></i></a>
<a href="javascript:" class="b"><i class="fa fa-sliders"></i></a>
<a href="javascript:" class="b"><i class="fa fa-smile-o"></i></a>
<a href="javascript:" class="b"><i class="fa fa-soccer-ball-o"></i></a>
<a href="javascript:" class="b"><i class="fa fa-sort"></i></a>
<a href="javascript:" class="b"><i class="fa fa-sort-alpha-asc"></i></a>
<a href="javascript:" class="b"><i class="fa fa-sort-alpha-desc"></i></a>
<a href="javascript:" class="b"><i class="fa fa-sort-amount-asc"></i></a>
<a href="javascript:" class="b"><i class="fa fa-sort-amount-desc"></i></a>
<a href="javascript:" class="b"><i class="fa fa-sort-asc"></i></a>
<a href="javascript:" class="b"><i class="fa fa-sort-desc"></i></a>
<a href="javascript:" class="b"><i class="fa fa-sort-down"></i></a>
<a href="javascript:" class="b"><i class="fa fa-sort-numeric-asc"></i></a>
<a href="javascript:" class="b"><i class="fa fa-sort-numeric-desc"></i></a>
<a href="javascript:" class="b"><i class="fa fa-sort-up"></i></a>
<a href="javascript:" class="b"><i class="fa fa-space-shuttle"></i></a>
<a href="javascript:" class="b"><i class="fa fa-spinner"></i></a>
<a href="javascript:" class="b"><i class="fa fa-spoon"></i></a>
<a href="javascript:" class="b"><i class="fa fa-square"></i></a>
<a href="javascript:" class="b"><i class="fa fa-square-o"></i></a>
<a href="javascript:" class="b"><i class="fa fa-star"></i></a>
<a href="javascript:" class="b"><i class="fa fa-star-half"></i></a>
<a href="javascript:" class="b"><i class="fa fa-star-half-empty"></i></a>
<a href="javascript:" class="b"><i class="fa fa-star-half-full"></i></a>
<a href="javascript:" class="b"><i class="fa fa-star-half-o"></i></a>
<a href="javascript:" class="b"><i class="fa fa-star-o"></i></a>
<a href="javascript:" class="b"><i class="fa fa-street-view"></i></a>
<a href="javascript:" class="b"><i class="fa fa-suitcase"></i></a>
<a href="javascript:" class="b"><i class="fa fa-sun-o"></i></a>
<a href="javascript:" class="b"><i class="fa fa-support"></i></a>
<a href="javascript:" class="b"><i class="fa fa-tablet"></i></a>
<a href="javascript:" class="b"><i class="fa fa-tachometer"></i></a>
<a href="javascript:" class="b"><i class="fa fa-tag"></i></a>
<a href="javascript:" class="b"><i class="fa fa-tags"></i></a>
<a href="javascript:" class="b"><i class="fa fa-tasks"></i></a>
<a href="javascript:" class="b"><i class="fa fa-taxi"></i></a>
<a href="javascript:" class="b"><i class="fa fa-terminal"></i></a>
<a href="javascript:" class="b"><i class="fa fa-thumb-tack"></i></a>
<a href="javascript:" class="b"><i class="fa fa-thumbs-down"></i></a>
<a href="javascript:" class="b"><i class="fa fa-thumbs-o-down"></i></a>
<a href="javascript:" class="b"><i class="fa fa-thumbs-o-up"></i></a>
<a href="javascript:" class="b"><i class="fa fa-thumbs-up"></i></a>
<a href="javascript:" class="b"><i class="fa fa-ticket"></i></a>
<a href="javascript:" class="b"><i class="fa fa-times"></i></a>
<a href="javascript:" class="b"><i class="fa fa-times-circle"></i></a>
<a href="javascript:" class="b"><i class="fa fa-times-circle-o"></i></a>
<a href="javascript:" class="b"><i class="fa fa-tint"></i></a>
<a href="javascript:" class="b"><i class="fa fa-toggle-down"></i></a>
<a href="javascript:" class="b"><i class="fa fa-toggle-left"></i></a>
<a href="javascript:" class="b"><i class="fa fa-toggle-off"></i></a>
<a href="javascript:" class="b"><i class="fa fa-toggle-on"></i></a>
<a href="javascript:" class="b"><i class="fa fa-toggle-right"></i></a>
<a href="javascript:" class="b"><i class="fa fa-toggle-up"></i></a>
<a href="javascript:" class="b"><i class="fa fa-trash"></i></a>
<a href="javascript:" class="b"><i class="fa fa-trash-o"></i></a>
<a href="javascript:" class="b"><i class="fa fa-tree"></i></a>
<a href="javascript:" class="b"><i class="fa fa-trophy"></i></a>
<a href="javascript:" class="b"><i class="fa fa-truck"></i></a>
<a href="javascript:" class="b"><i class="fa fa-tty"></i></a>
<a href="javascript:" class="b"><i class="fa fa-umbrella"></i></a>
<a href="javascript:" class="b"><i class="fa fa-university"></i></a>
<a href="javascript:" class="b"><i class="fa fa-unlock"></i></a>
<a href="javascript:" class="b"><i class="fa fa-unlock-alt"></i></a>
<a href="javascript:" class="b"><i class="fa fa-unsorted"></i></a>
<a href="javascript:" class="b"><i class="fa fa-upload"></i></a>
<a href="javascript:" class="b"><i class="fa fa-user"></i></a>
<a href="javascript:" class="b"><i class="fa fa-user-plus"></i></a>
<a href="javascript:" class="b"><i class="fa fa-user-secret"></i></a>
<a href="javascript:" class="b"><i class="fa fa-user-times"></i></a>
<a href="javascript:" class="b"><i class="fa fa-users"></i></a>
<a href="javascript:" class="b"><i class="fa fa-video-camera"></i></a>
<a href="javascript:" class="b"><i class="fa fa-volume-down"></i></a>
<a href="javascript:" class="b"><i class="fa fa-volume-off"></i></a>
<a href="javascript:" class="b"><i class="fa fa-volume-up"></i></a>
<a href="javascript:" class="b"><i class="fa fa-warning"></i></a>
<a href="javascript:" class="b"><i class="fa fa-wheelchair"></i></a>
<a href="javascript:" class="b"><i class="fa fa-wifi"></i></a>
<a href="javascript:" class="b"><i class="fa fa-wrench"></i></a>
<a href="javascript:" class="b"><i class="fa fa-cc-jcb"></i></a>
<a href="javascript:" class="b"><i class="fa fa-cc-mastercard"></i></a>
<a href="javascript:" class="b"><i class="fa fa-cc-paypal"></i></a>
<a href="javascript:" class="b"><i class="fa fa-cc-visa"></i></a>


<strong>Social:</strong>
'.$social_icons.'
';


//Social

if ($type == 'social'){
	$icons_show = $social_icons;
}

$container_s = '';

if ($type == 'social') $container_s = '-s';

if ($position == 1 || $type == 'social'){
	echo '
	<div class="sweet-icon-selector-container'.$container_s.'">
		<div class="sweet-icon-selector" id="sweet-icon-scroller">
			'.$icons_show.'
		</div>

	</div>

	';
}else{
	echo '
    <div class="sweet-icon-selector" id="sweet-icon-scroller">
        '.$icons_show.'
    </div>

	';
}

?>


<script src="../../js/jquery.min.js"></script>
<script src="../../js/jquery.migrate.min.js"></script>
<script src="../../js/jquery.mousewheel.js"></script>
<script src="../rollbar/jquery.rollbar.min.js"></script>

<script type="text/javascript">

( function($) {
    

	$( document ).ready( function() {

		//scroller
		$("#sweet-icon-scroller").rollbar({
			scroll: 'vertical',
			zIndex:80,
			pathPadding: '0'
		}); 
		
		//Icon type
		$(".b").click(function(){
			var _v = $(this).find(".fa").attr("class");
			$(".b").removeClass('active');
			$(this).addClass('active');
			
			
			_v = _v.replace('fa fa-','');
			$("#<?php echo $pushinputID;?>",window.parent.document).val(_v);
			$("#<?php echo $pushinputID;?>-preview",window.parent.document).html('<i class="fa fa-'+_v+'"></i>');
			
			
			
		});

	} ); 

	
	
} ) ( jQuery );



</script>

</body>
</html>
