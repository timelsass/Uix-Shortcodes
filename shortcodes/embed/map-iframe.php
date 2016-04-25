<?php
/**
 * Google Map
 * Plugin URI: https://uiux.cc/wp-plugins/uix-shortcodes/
 * Author: UIUX Lab
 * Author URI: https://uiux.cc
 * License: GPLv2 or later

 */


//Map root path
$map_rootpath = ( isset( $_GET[ 'rootpath' ] ) && !empty( $_GET[ 'rootpath' ] ) ) ? $_GET[ 'rootpath' ] : '../../';

//Map style
$map_style = ( isset( $_GET[ 'style' ] ) && !empty( $_GET[ 'style' ] ) ) ? $_GET[ 'style' ] : 'normal';
				

//Map latitude
$map_latitude = ( isset( $_GET[ 'latitude' ] ) && !empty( $_GET[ 'latitude' ] ) ) ? $_GET[ 'latitude' ] : '37.7770776';
				

//Map longitude
$map_longitude = ( isset( $_GET[ 'longitude' ] ) && !empty( $_GET[ 'longitude' ] ) ) ? $_GET[ 'longitude' ] : '-122.4414289';
				

//Map zoom
$map_zoom = ( isset( $_GET[ 'zoom' ] ) && !empty( $_GET[ 'zoom' ] ) ) ? $_GET[ 'zoom' ] : '14';	
				
			
//Map place name
$map_name = ( isset( $_GET[ 'name' ] ) && !empty( $_GET[ 'name' ] ) ) ? $_GET[ 'name' ] : 'SEO San Francisco, CA, Gough Street, San Francisco, CA';	
				
				
//Map height
$map_height = ( isset( $_GET[ 'height' ] ) && !empty( $_GET[ 'height' ] ) ) ? $_GET[ 'height' ] : '285';	
if ( isset( $_GET[ 'cusheight' ] ) && !empty( $_GET[ 'cusheight' ] ) && $_GET[ 'cusheight' ] != 0 ) $map_height  = 	$_GET[ 'cusheight' ];		


//Map marker
$map_marker = ( isset( $_GET[ 'marker' ] ) && !empty( $_GET[ 'marker' ] ) ) ? $_GET[ 'marker' ] : $map_rootpath.'assets/images/map/map-location.png';
					


?>

<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<meta name="robots" content="nofollow">
<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<script src="<?php echo $map_rootpath; ?>assets/js/jquery.min.js"></script>
<script src="<?php echo $map_rootpath; ?>assets/js/jquery.migrate.min.js"></script>

<title></title>

    <style>
	    html,body{
			height:100%;
			
		}
		body{
			margin:0;
			padding:0;
			background-color:transparent;
		}
		
		#google-map-zoom-in, #google-map-zoom-out {
		  height: 32px;
		  width: 32px;
		  cursor: pointer;
		  margin-left: 10px;
		  background-repeat: no-repeat;
		  background-size: 32px 64px;
		  opacity:.7;
		  z-index:3;
		  font-size:30px;
		  color:#fff;
		}
		.no-touch #google-map-zoom-in:hover, .no-touch #google-map-zoom-out:hover {
		  opacity:1;
		}
		#google-map-zoom-in:hover, #google-map-zoom-out:hover {
		  opacity:1;
		}
		@media only screen and (min-width: 768px) {
		  #google-map-zoom-in, #google-map-zoom-out {
			margin-left: 50px;
		  }
		}
		#google-map-zoom-in {
		  margin-top: 50px;
		  margin-bottom: 1px;
		}
	

	</style>
    
</head>

<body>

	<div id="google-map">
		<div id="google-container" style="position: relative;width: 100%;height: <?php echo $map_height;?>px;"></div>
		<div id="google-map-zoom-in">+</div>
		<div id="google-map-zoom-out">-</div>
	</div>	

	<script type="text/javascript">
		(function($) { "use strict"

			//set your google maps parameters
			jQuery(document).ready(function($){
				var latitude = <?php echo $map_latitude;?>,
					longitude = <?php echo $map_longitude;?>,
					map_zoom = <?php echo $map_zoom;?>;
					
					
					<?php if ( $map_height == '100%' ) { ?>
					$( '#google-container' ).css( 'height', $( document.body ).height() + 'px' );
					<?php } ?>
					
					


				//google map custom marker icon - .png fallback for IE11
				var is_internetExplorer11= navigator.userAgent.toLowerCase().indexOf('trident') > -1;
				var marker_url = '<?php echo $map_marker;?>';

				//define the basic color of your map, plus a value for saturation and brightness
				var	main_color = '#e67e22',
					saturation_value= -50,
					brightness_value= 14;

				//we define here the style of the map
				<?php if ( $map_style == 'normal'){ ?>
				var style= '';
				<?php } ?>
				
				<?php if ( $map_style == 'gray'){ ?>
	
var style=[{"featureType":"all","elementType":"labels.text.fill","stylers":[{"saturation":36},{"color":"#ffffff"},{"lightness":40}]},{"featureType":"all","elementType":"labels.text.stroke","stylers":[{"visibility":"on"},{"color":"#333333"},{"lightness":16}]},{"featureType":"all","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"administrative","elementType":"geometry.fill","stylers":[{"color":"#C9C9C9"},{"lightness":20}]},{"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"color":"#C9C9C9"},{"lightness":17},{"weight":1.2}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#C9C9C9"},{"lightness":20}]},{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#333333"},{"lightness":21}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#333333"},{"lightness":17}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#333333"},{"lightness":29},{"weight":0.2}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#333333"},{"lightness":18}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#333333"},{"lightness":16}]},{"featureType":"transit","elementType":"geometry","stylers":[{"color":"#333333"},{"lightness":19}]},{"featureType":"water","elementType":"geometry","stylers":[{"color":"#333333"},{"lightness":17}]}];
				
				
				<?php } ?>
				
				<?php if ( $map_style == 'black'){ ?>
				

var style=[{"featureType":"all","elementType":"labels.text.fill","stylers":[{"saturation":36},{"color":"#000000"},{"lightness":40}]},{"featureType":"all","elementType":"labels.text.stroke","stylers":[{"visibility":"on"},{"color":"#000000"},{"lightness":16}]},{"featureType":"all","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"administrative","elementType":"geometry.fill","stylers":[{"color":"#000000"},{"lightness":20}]},{"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"color":"#000000"},{"lightness":17},{"weight":1.2}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":20}]},{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":21}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#000000"},{"lightness":17}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#000000"},{"lightness":29},{"weight":0.2}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":18}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":16}]},{"featureType":"transit","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":19}]},{"featureType":"water","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":17}]}];				
				
				<?php } ?>
				
				<?php if ( $map_style == 'real'){ ?>
				var style= '';
				<?php } ?>
				
				<?php if ( $map_style == 'terrain'){ ?>
				var style= '';
				<?php } ?>
								
				<?php if ( $map_style == 'white'){ ?>
	
var style=[{"featureType":"all","elementType":"labels.text.fill","stylers":[{"saturation":36},{"color":"#333333"},{"lightness":40}]},{"featureType":"all","elementType":"labels.text.stroke","stylers":[{"visibility":"on"},{"color":"#ffffff"},{"lightness":7}]},{"featureType":"all","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"administrative","elementType":"geometry.fill","stylers":[{"color":"#eeeeee"},{"lightness":20}]},{"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"color":"#d1d1d1"},{"lightness":17},{"weight":1.2}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#eeeeee"},{"lightness":20}]},{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#b3b3b3"},{"lightness":21}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#d1d1d1"},{"lightness":17}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#d1d1d1"},{"lightness":29},{"weight":0.2}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#d1d1d1"},{"lightness":18}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#d1d1d1"},{"lightness":16}]},{"featureType":"transit","elementType":"geometry","stylers":[{"color":"#d1d1d1"},{"lightness":19}]},{"featureType":"water","elementType":"geometry","stylers":[{"color":"#d1d1d1"},{"lightness":17}]}];
				
				<?php } ?>
								

                
				<?php if ( $map_style == 'dark-blue'){ ?>
                

var style=[{"featureType":"water","elementType":"geometry","stylers":[{"color":"#193341"}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#2c5a71"}]},{"featureType":"road","elementType":"geometry","stylers":[{"color":"#29768a"},{"lightness":-37}]},{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#406d80"}]},{"featureType":"transit","elementType":"geometry","stylers":[{"color":"#406d80"}]},{"elementType":"labels.text.stroke","stylers":[{"visibility":"on"},{"color":"#3e606f"},{"weight":2},{"gamma":0.84}]},{"elementType":"labels.text.fill","stylers":[{"color":"#ffffff"}]},{"featureType":"administrative","elementType":"geometry","stylers":[{"weight":0.6},{"color":"#1a3541"}]},{"elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"poi.park","elementType":"geometry","stylers":[{"color":"#2c5a71"}]}];
                    
                    
                    <?php } ?> 
				
                
			<?php if ( $map_style == 'dark-blue-2'){ ?>
                

var style=[{"featureType":"water","stylers":[{"color":"#021019"}]},{"featureType":"landscape","stylers":[{"color":"#08304b"}]},{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#0c4152"},{"lightness":5}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#000000"}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#0b434f"},{"lightness":25}]},{"featureType":"road.arterial","elementType":"geometry.fill","stylers":[{"color":"#000000"}]},{"featureType":"road.arterial","elementType":"geometry.stroke","stylers":[{"color":"#0b3d51"},{"lightness":16}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#000000"}]},{"elementType":"labels.text.fill","stylers":[{"color":"#ffffff"}]},{"elementType":"labels.text.stroke","stylers":[{"color":"#000000"},{"lightness":13}]},{"featureType":"transit","stylers":[{"color":"#146474"}]},{"featureType":"administrative","elementType":"geometry.fill","stylers":[{"color":"#000000"}]},{"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"color":"#144b53"},{"lightness":14},{"weight":1.4}]}];
                        
				<?php } ?>
                						
			<?php if ( $map_style == 'blue'){ ?>

var style=
[{"featureType":"administrative","elementType":"labels.text.fill","stylers":[{"color":"#444444"}]},{"featureType":"landscape","elementType":"all","stylers":[{"color":"#f2f2f2"}]},{"featureType":"poi","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"road","elementType":"all","stylers":[{"saturation":-100},{"lightness":45}]},{"featureType":"road.highway","elementType":"all","stylers":[{"visibility":"simplified"}]},{"featureType":"road.arterial","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"water","elementType":"all","stylers":[{"color":"#46bcec"},{"visibility":"on"}]}];
                        
				<?php } ?>
				
			<?php if ( $map_style == 'flat'){ ?>

var style=
[{"elementType":"geometry","stylers":[{"hue":"#ff4400"},{"saturation":-68},{"lightness":-4},{"gamma":0.72}]},{"featureType":"road","elementType":"labels.icon"},{"featureType":"landscape.man_made","elementType":"geometry","stylers":[{"hue":"#0077ff"},{"gamma":3.1}]},{"featureType":"water","stylers":[{"hue":"#00ccff"},{"gamma":0.44},{"saturation":-33}]},{"featureType":"poi.park","stylers":[{"hue":"#44ff00"},{"saturation":-23}]},{"featureType":"water","elementType":"labels.text.fill","stylers":[{"hue":"#007fff"},{"gamma":0.77},{"saturation":65},{"lightness":99}]},{"featureType":"water","elementType":"labels.text.stroke","stylers":[{"gamma":0.11},{"weight":5.6},{"saturation":99},{"hue":"#0091ff"},{"lightness":-86}]},{"featureType":"transit.line","elementType":"geometry","stylers":[{"lightness":-48},{"hue":"#ff5e00"},{"gamma":1.2},{"saturation":-23}]},{"featureType":"transit","elementType":"labels.text.stroke","stylers":[{"saturation":-64},{"hue":"#ff9100"},{"lightness":16},{"gamma":0.47},{"weight":2.7}]}];
                        
				<?php } ?>				
				
				
				

                
				//set google map options
				var map_options = {
					center: new google.maps.LatLng(latitude, longitude),
					zoom: map_zoom,
					panControl: false,
					zoomControl: false,
					mapTypeControl: false,
					streetViewControl: false,
					
					//SATELLITE,ROADMAP,HYBRID,TERRAIN
					<?php if ( $map_style == 'normal' ||  $map_style == 'gray' ||  $map_style == 'black' ||  $map_style == 'white' ||  $map_style == 'dark-blue' ||  $map_style == 'dark-blue-2' ||  $map_style == 'blue' ||  $map_style == 'flat'){ ?>
					mapTypeId: google.maps.MapTypeId.ROADMAP, 
					<?php } ?>
					
					<?php if ( $map_style == 'real'){ ?>
					mapTypeId: google.maps.MapTypeId.HYBRID, 
					<?php } ?>
					
					<?php if ( $map_style == 'terrain'){ ?>
					mapTypeId: google.maps.MapTypeId.TERRAIN, 
					<?php } ?>
	
					scrollwheel: false,
					styles: style,
				}

				//inizialize the map
				var map = new google.maps.Map(document.getElementById('google-container'), map_options);
				//add a custom marker to the map				
				var marker = new google.maps.Marker({
					position: new google.maps.LatLng(latitude, longitude),
					map: map,
					visible: true,
					icon: marker_url,
				});



				//add custom buttons for the zoom-in/zoom-out on the map
				function CustomZoomControl(controlDiv, map) {
					//grap the zoom elements from the DOM and insert them in the map 
					var controlUIzoomIn= document.getElementById('google-map-zoom-in'),
						controlUIzoomOut= document.getElementById('google-map-zoom-out');
					    controlDiv.appendChild(controlUIzoomIn);
					    controlDiv.appendChild(controlUIzoomOut);


					// Setup the click event listeners and zoom-in or out according to the clicked element
					google.maps.event.addDomListener(controlUIzoomIn, 'click', function() {
						map.setZoom(map.getZoom()+1)
					});

					google.maps.event.addDomListener(controlUIzoomOut, 'click', function() {
						map.setZoom(map.getZoom()-1)
					});

				}



				var zoomControlDiv = document.createElement('div');
				var zoomControl = new CustomZoomControl(zoomControlDiv, map);

				//insert the zoom div on the top left of the map
				map.controls[google.maps.ControlPosition.LEFT_TOP].push(zoomControlDiv);
			});

		})(jQuery);



	</script>
    <script type='text/javascript' src='//maps.googleapis.com/maps/api/js?key=AIzaSyA0kxSY0g5flUWptO4ggXpjhVB-ycdqsDk'></script>

</body>
</html>
