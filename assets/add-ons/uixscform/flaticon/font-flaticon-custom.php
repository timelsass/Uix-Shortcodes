<?php
$iconName = isset( $_POST['iconName'] ) ? $_POST[ 'iconName' ] : ''; //default value with ajax
$g        = 'class="b flaticon"';
$icons    = [
'<span '.$g.'><i class="flaticon flaticon-add"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-add-1"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-add-2"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-add-3"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-agenda"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-alarm"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-alarm-1"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-alarm-clock"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-alarm-clock-1"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-albums"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-app"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-archive"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-archive-1"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-archive-2"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-archive-3"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-attachment"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-back"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-battery"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-battery-1"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-battery-2"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-battery-3"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-battery-4"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-battery-5"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-battery-6"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-battery-7"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-battery-8"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-battery-9"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-binoculars"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-blueprint"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-bluetooth"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-bluetooth-1"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-bookmark"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-bookmark-1"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-briefcase"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-broken-link"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-calculator"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-calculator-1"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-calendar"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-calendar-1"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-calendar-2"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-calendar-3"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-calendar-4"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-calendar-5"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-calendar-6"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-calendar-7"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-checked"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-checked-1"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-clock"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-clock-1"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-close"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-cloud"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-cloud-computing"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-cloud-computing-1"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-cloud-computing-2"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-cloud-computing-3"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-cloud-computing-4"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-cloud-computing-5"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-command"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-compact-disc"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-compact-disc-1"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-compact-disc-2"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-compass"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-compose"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-controls"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-controls-1"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-controls-2"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-controls-3"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-controls-4"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-controls-5"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-controls-6"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-controls-7"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-controls-8"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-controls-9"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-database"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-database-1"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-database-2"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-database-3"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-diamond"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-diploma"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-dislike"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-dislike-1"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-divide"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-divide-1"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-division"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-document"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-download"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-edit"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-edit-1"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-eject"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-eject-1"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-equal"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-equal-1"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-equal-2"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-error"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-exit"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-exit-1"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-exit-2"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-eyeglasses"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-fast-forward"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-fast-forward-1"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-fax"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-file"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-file-1"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-file-2"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-film"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-fingerprint"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-flag"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-flag-1"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-flag-2"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-flag-3"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-flag-4"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-focus"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-folder"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-folder-1"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-folder-10"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-folder-11"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-folder-12"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-folder-13"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-folder-14"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-folder-15"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-folder-16"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-folder-17"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-folder-18"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-folder-19"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-folder-2"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-folder-3"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-folder-4"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-folder-5"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-folder-6"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-folder-7"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-folder-8"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-folder-9"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-forbidden"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-funnel"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-garbage"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-garbage-1"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-garbage-2"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-gift"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-help"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-hide"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-hold"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-home"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-home-1"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-home-2"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-hourglass"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-hourglass-1"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-hourglass-2"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-hourglass-3"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-house"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-id-card"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-id-card-1"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-id-card-2"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-id-card-3"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-id-card-4"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-id-card-5"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-idea"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-incoming"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-infinity"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-info"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-internet"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-key"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-lamp"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-layers"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-layers-1"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-like"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-like-1"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-like-2"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-link"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-list"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-list-1"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-lock"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-lock-1"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-locked"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-locked-1"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-locked-2"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-locked-3"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-locked-4"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-locked-5"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-locked-6"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-login"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-magic-wand"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-magnet"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-magnet-1"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-magnet-2"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-map"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-map-1"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-map-2"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-map-location"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-megaphone"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-megaphone-1"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-menu"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-menu-1"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-menu-2"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-menu-3"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-menu-4"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-microphone"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-microphone-1"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-minus"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-minus-1"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-more"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-more-1"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-more-2"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-multiply"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-multiply-1"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-music-player"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-music-player-1"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-music-player-2"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-music-player-3"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-mute"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-muted"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-navigation"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-navigation-1"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-network"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-newspaper"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-next"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-note"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-notebook"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-notebook-1"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-notebook-2"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-notebook-3"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-notebook-4"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-notebook-5"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-notepad"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-notepad-1"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-notepad-2"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-notification"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-paper-plane"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-paper-plane-1"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-pause"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-pause-1"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-percent"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-percent-1"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-perspective"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-photo-camera"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-photo-camera-1"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-photos"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-picture"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-picture-1"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-picture-2"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-pin"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-placeholder"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-placeholder-1"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-placeholder-2"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-placeholder-3"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-placeholders"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-play-button"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-play-button-1"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-plus"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-power"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-previous"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-price-tag"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-print"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-push-pin"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-radar"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-reading"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-record"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-repeat"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-repeat-1"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-restart"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-resume"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-rewind"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-rewind-1"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-route"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-save"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-search"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-search-1"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-send"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-server"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-server-1"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-server-2"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-server-3"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-settings"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-settings-1"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-settings-2"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-settings-3"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-settings-4"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-settings-5"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-settings-6"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-settings-7"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-settings-8"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-settings-9"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-share"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-share-1"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-share-2"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-shuffle"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-shuffle-1"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-shutdown"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-sign"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-sign-1"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-skip"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-smartphone"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-smartphone-1"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-smartphone-10"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-smartphone-11"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-smartphone-2"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-smartphone-3"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-smartphone-4"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-smartphone-5"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-smartphone-6"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-smartphone-7"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-smartphone-8"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-smartphone-9"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-speaker"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-speaker-1"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-speaker-2"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-speaker-3"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-speaker-4"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-speaker-5"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-speaker-6"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-speaker-7"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-speaker-8"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-spotlight"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-star"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-star-1"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-stop"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-stop-1"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-stopwatch"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-stopwatch-1"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-stopwatch-2"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-stopwatch-3"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-stopwatch-4"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-street"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-street-1"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-substract"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-substract-1"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-success"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-switch"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-switch-1"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-switch-2"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-switch-3"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-switch-4"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-switch-5"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-switch-6"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-switch-7"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-tabs"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-tabs-1"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-target"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-television"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-television-1"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-time"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-trash"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-umbrella"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-unlink"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-unlocked"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-unlocked-1"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-unlocked-2"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-upload"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-user"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-user-1"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-user-2"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-user-3"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-user-4"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-user-5"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-user-6"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-user-7"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-users"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-users-1"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-video-camera"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-video-camera-1"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-video-player"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-video-player-1"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-video-player-2"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-view"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-view-1"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-view-2"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-volume-control"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-volume-control-1"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-warning"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-wifi"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-wifi-1"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-windows"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-windows-1"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-windows-2"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-windows-3"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-windows-4"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-wireless-internet"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-worldwide"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-worldwide-1"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-zoom-in"></i></span>',
'<span '.$g.'><i class="flaticon flaticon-zoom-out"></i></span>',
];

echo '<div class="uixscform-icon-selector">';
foreach ( $icons as $value ) {
	$v = str_replace( '"></i></span>', '', str_replace( '<span '.$g.'><i class="flaticon flaticon-', '', $value ) );
	if ( $v == $iconName ) {
		echo str_replace( 'class="b flaticon"', 'class="b flaticon active"', $value );
	} else {
		echo $value;
	}
}	
echo '</div>';