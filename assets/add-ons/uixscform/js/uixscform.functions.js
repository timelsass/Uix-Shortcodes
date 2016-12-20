/*! 
 * ************************************
 * Initialize Global
 *************************************
 */	
jQuery( document ).ready( function() {
	
	
	/*! 
	 * 
	 * Buttons without tinyMCE 
	 * ---------------------------------------------------
	 */
	jQuery( document ).on( 'mouseenter', '.custom-button', function( e ) {
		e.preventDefault();
		var c = jQuery( this ).attr( 'class' );
		if ( c.indexOf( '-widget_btn' ) >= 0 && c.indexOf( 'mce-' ) < 0 ) {
			var n = c.replace( /uix_sc_/g,'mce-uix_sc_' );
			jQuery( this ).attr( 'class', n );
		}	
	});
	
	
    /*! 
	 * 
	 * Toggle of unidirectional display
	 * ---------------------------------------------------
	 */
	 
	jQuery( document ).on( 'click', '.uixscform_btn_trigger-toggleshow', function( e ) {
		e.preventDefault();
		
		var cur_targetID       = jQuery( this ).attr( "data-targetid" ),
			cur_targetCloneID  = jQuery( this ).attr( "data-targetid-clone" ),
			cur_list           = jQuery( this ).attr( "data-list" );
			
		//Dynamic button id
		if ( cur_targetCloneID != '{multID}' && cur_targetCloneID != '' ) {
			cur_targetID = cur_targetCloneID;
		}
		
		if ( cur_list == 1 ) {
			
			//Dynamic elements
			jQuery( this ).parent().parent( '.toggle-btn' ).hide();
			jQuery( cur_targetID ).parent().parent( '.toggle-row' ).show();
			jQuery( cur_targetID ).parent().parent( '.toggle-row' ).find( '.uixscform-box' ).show();
			jQuery( cur_targetID ).addClass( 'active' );

		} else {
			jQuery( this ).parent( '.uixscform-box' ).parent().parent( 'tr' ).hide();
			jQuery( cur_targetID ).show();
			jQuery( cur_targetID ).find( 'th' ).find( 'label' ).show();
			jQuery( cur_targetID ).find( 'td' ).find( '.uixscform-box' ).show();
			jQuery( cur_targetID ).addClass( 'active' );

		}

		
	} );	
	//if IE
	if ( navigator.userAgent.indexOf('MSIE') >= 0 ) {
		jQuery( document ).off( 'click', '.uixscform_btn_trigger-toggleshow' );
	}
	
	
    /*! 
	 * 
	 * Toggle of switch with radio
	 * ---------------------------------------------------
	 */
	jQuery( document ).on( 'click', '.uixscform_btn_trigger-toggleswitch_radio', function( e ) {
		e.preventDefault();
		
		var cur_targetID          = jQuery( this ).attr( "data-targetid" ),
		    cur_removeID          = jQuery( this ).attr( "data-remove" ),
			cur_targetCloneID     = jQuery( this ).attr( "data-targetid-clone" ),
			cur_list              = jQuery( this ).attr( "data-list" );
			
		//Dynamic button id
		if ( cur_targetCloneID != '{multID}' && cur_targetCloneID != '' ) {
			cur_targetID = cur_targetCloneID;
		}
		
		
		if ( cur_list == 1 ) {
			//Dynamic elements
			
			jQuery( cur_targetID ).parent().parent( '.toggle-row' ).show();
			jQuery( cur_targetID ).parent().parent( '.toggle-row' ).find( '.uixscform-box' ).show();
			
			jQuery( cur_removeID ).parent().parent( '.toggle-row' ).hide();
			jQuery( cur_removeID ).parent().parent( '.toggle-row' ).find( '.uixscform-box' ).hide();		
			

		} else {
			
			jQuery( cur_targetID ).show();
			jQuery( cur_targetID ).find( 'th' ).find( 'label' ).show();
			jQuery( cur_targetID ).find( 'td' ).find( '.uixscform-box' ).show();
			
			jQuery( cur_removeID ).hide();
			jQuery( cur_removeID ).find( 'th' ).find( 'label' ).hide();
			jQuery( cur_removeID ).find( 'td' ).find( '.uixscform-box' ).hide();
	
		}
		
		
		
		
	} );	
	//if IE
	if ( navigator.userAgent.indexOf('MSIE') >= 0 ) {
		jQuery( document ).off( 'click', '.uixscform_btn_trigger-toggleswitch_radio' );
	}
	
    /*! 
	 * 
	 * Toggle of switch with checkbox
	 * ---------------------------------------------------
	 */
	 jQuery( document ).uixscform_toggleSwitchCheckbox( { btnID: '.uixscform_btn_trigger-toggleswitch_checkbox' } );
	 


	/*! 
	 * 
	 * Dynamic Adding Input
	 * ---------------------------------------------------
	 */
	jQuery( document ).on( 'click', '.uixscform_btn_trigger-clone', function( e ) {
		e.preventDefault();
		
		var cur_targetID        = '#' + jQuery( this ).attr( "data-targetid" ),
			cur_appendID        = '#' + jQuery( this ).attr( "data-appendid" ),
			cur_removeClass     = jQuery( this ).attr( "data-removeclass" ),
			cur_cloneContent    = jQuery( this ).attr( "data-clonecontent" ),
			cur_max             = jQuery( this ).attr( "data-max" ),
			cur_toggleTargetID  = jQuery( this ).attr( "data-toggle-targetid" ),
			cur_prop            = jQuery( this ).parent().attr( "data-prop" );
		
		var show_count    = cur_max,
			clone_content = eval( cur_cloneContent );

		clone_content = '<span class="dynamic-row dynamic-addnow">' + clone_content + '<div class="delrow-container"><a href="javascript:" class="delrow '+cur_removeClass+'">&times;</a></div></span>';
		clone_content = clone_content
		               .replace( /toggle-row/g, 'toggle-row toggle-row-clone-list' )
					   .replace( /data-list="0"/g, 'data-list="1"' );
		
			
		var btnINdex = parseFloat( jQuery( this ).attr( 'data-index' ) );
		
		if ( btnINdex <= show_count ) {
			
			var cloneCode           = clone_content,
			    cur_toggleTargetID  = cur_toggleTargetID.replace( /{dataID}/g, ''+btnINdex+'-' );
			cloneCode = cloneCode.replace( /data-id=\"/g, 'id="'+btnINdex+'-' );
			cloneCode = cloneCode.replace( /{dataID}/g, ''+btnINdex+'-' ); 
			cloneCode = cloneCode.replace( /{multID}/g, cur_toggleTargetID );
			
			jQuery( cur_appendID ).after( cloneCode );
			jQuery( this ).attr( 'data-index',btnINdex+1 );
	
		}
		
		
		if ( btnINdex == show_count ) {
			jQuery( this ).addClass( 'disable' );
		}
		

		//Icon list
		jQuery( '.icon-selector' ).uixscform_iconSelector();
			  
		 
		//focus
		var srow = '.uixscform-form-container .dynamic-row';
		jQuery( srow ).mouseenter(function() {
			jQuery( srow ).removeClass( 'hover' );
			jQuery( this ).addClass( 'hover' );
		});
		jQuery( srow ).mouseleave(function() {
			jQuery( srow ).removeClass( 'hover' );
		});
		
		//color picker
		jQuery( '.wp-color-input' ).wpColorPicker();
		
			
		
		 //remove input
		 if ( cur_removeClass ){
			 
			 jQuery( document ).on( 'click', '.' + cur_removeClass, function( e ) {
				e.preventDefault();
	
				var  cur_thisBTN = jQuery( this ).closest( 'table' ).find( '.uixscform_btn_trigger-clone' ),
				     btnINdex = parseFloat( cur_thisBTN.attr( 'data-index' ) );
		
				if ( btnINdex > 1 ) {
					jQuery( this ).closest( '.dynamic-addnow' ).remove();
					cur_thisBTN.attr( 'data-index',btnINdex-1 );							
				}
				
				cur_thisBTN.removeClass( 'disable' );
				
				
			} );		

		 }	
		 

		
	} );	


	/*! 
	 * 
	 * Radio Selector
	 * ---------------------------------------------------
	 */
	jQuery( document ).on( 'click', '.uixscform_btn_trigger-radio span', function( e ) {
		e.preventDefault();
		
		var cur_targetID    = '#' + jQuery( this ).parent().attr( "data-targetid" ),
			cur_prop        = jQuery( this ).parent().attr( "data-prop" );
		
		var _curValue = jQuery( this ).attr( 'data-value' );
		jQuery( this ).parent().find( 'span' ).removeClass( 'active' );
		jQuery( cur_targetID ).val( _curValue );
		jQuery( this ).addClass( 'active' );
	} );	
	
	
    /*! 
	 * 
	 * Multiple Selector
	 * ---------------------------------------------------
	 */
	jQuery( document ).on( 'click', '.uixscform_btn_trigger-multradio span', function( e ) {
		e.preventDefault();
		
		var cur_targetID    = '#' + jQuery( this ).parent().attr( "data-targetid" ),
			cur_prop        = jQuery( this ).parent().attr( "data-prop" );
		
		var _curValue = jQuery( this ).attr( 'data-value' ),
			_tarValue = jQuery( cur_targetID ).val() + ',',
			_result;
					
		jQuery( this ).toggleClass( 'active' );
		
		if ( _tarValue.indexOf( _curValue + ',' ) < 0 ) {
			_result = _tarValue + _curValue + ',';
		} else {
			_result = _tarValue.replace( _curValue + ',', '' );
		}

		jQuery( cur_targetID ).val( _result.substring( 0, _result.length-1 ) );		
		
	} );	
	
	
	
	
	/*! 
	 * 
	 * Insert media 
	 * ---------------------------------------------------
	 */
	jQuery( document ).on( 'click', '.uixscform_btn_trigger-upload', function( e ) {
		e.preventDefault();

		var cur_btnID       = '#' + jQuery( this ).attr( "data-btnid" ),
			cur_closebtnID  = '#' + jQuery( this ).attr( "data-closebtnid" ),
			cur_targetID    = '#' + jQuery( this ).attr( "data-targetid" ),
			cur_prop        = jQuery( this ).attr( "data-prop" );
		
		var upload_frame,
			value_id,
			propIDPrefix = cur_btnID.replace( '#', '' );
			
			
		/*-- Open upload window --*/
		var _targetImgContainer = jQuery( this ).attr( "data-insert-img" );
		var _targetPreviewContainer = jQuery( this ).attr( "data-insert-preview" );
		
		value_id =jQuery( this ).attr( 'id' );
		event.preventDefault();
		
		if( upload_frame ){
			upload_frame.open();
			return;
		}
		upload_frame = wp.media( {
			title: 'Select Files',
			button: {
			text: 'Insert into post',
		},
			multiple: false
		} );
		upload_frame.on( 'select',function(){
			attachment = upload_frame.state().get( 'selection' ).first().toJSON();
			jQuery( "#" + _targetImgContainer ).val( attachment.url );
			jQuery( "#" + _targetPreviewContainer ).find( 'img' ).attr( "src",attachment.url );//image preview
			jQuery( "#" + _targetPreviewContainer ).show();
			
			//Upload container
			if ( _targetPreviewContainer != '' && _targetPreviewContainer != 'none' ) {
				jQuery( cur_btnID ).parent( '.uixscform-upbtn-container' ).css( 'height','150px' );
			}
			
			
			if ( cur_closebtnID ){
				jQuery( cur_closebtnID ).show().css( { 'display': 'block' } );
			}	
			
			//Show image properties
			if ( cur_prop ) {
				jQuery( "." + propIDPrefix + '_repeat' ).show();
				jQuery( "." + propIDPrefix + '_position' ).show();
				jQuery( "." + propIDPrefix + '_attachment' ).show();
				jQuery( "." + propIDPrefix + '_size' ).show();
			
		
			}
		
			
			
		} );
		 
		upload_frame.open();
			
		/*-- Delete current picture --*/
		 if ( cur_closebtnID ){
			jQuery( document ).on( 'click', cur_closebtnID, function( e ) {
				e.preventDefault();
				var _targetImgContainer = jQuery( this ).attr( "data-insert-img" );
				var _targetPreviewContainer = jQuery( this ).attr( "data-insert-preview" );
				
				jQuery( "#" + _targetImgContainer ).val( '' );
				jQuery( "#" + _targetPreviewContainer ).find( 'img' ).attr( "src",'' );
				jQuery( "#" + _targetPreviewContainer ).hide();
				
				//Upload container
				if ( _targetPreviewContainer != '' && _targetPreviewContainer != 'none' ) {
					jQuery( cur_btnID ).parent( '.uixscform-upbtn-container' ).css( 'height','40px' );
				}
				
				
				jQuery( this ).hide();
				
				//Hide image properties
				if ( cur_prop ) {
					jQuery( "." + propIDPrefix + '_repeat' ).hide();
					jQuery( "." + propIDPrefix + '_position' ).hide();
					jQuery( "." + propIDPrefix + '_attachment' ).hide();
					jQuery( "." + propIDPrefix + '_size' ).hide();
				}
				
				
			} );		
		
		 }	

	
	});
		
});


/*! 
 * ************************************
 * Toggle of switch with checkbox
 *************************************
 */	
 ( function( $ ) {
  jQuery.fn.uixscform_toggleSwitchCheckbox = function( options ) {
		var settings=$.extend( {
			'btnID' : '.uixscform_btn_trigger-toggleswitch_checkbox'
		}
		,options );
		return this.each( function() {
	        
			jQuery( document ).on( 'click', settings.btnID , function( e ) {
				e.preventDefault();
	
				var cur_targetID          = jQuery( this ).attr( "data-targetid" ),
					cur_linkedNoToggleID  = jQuery( this ).attr( "data-linked-no-toggleid" ),
					cur_targetCloneID     = jQuery( this ).attr( "data-targetid-clone" ),
					cur_list              = jQuery( this ).attr( "data-list" );
					
				//Dynamic button id
				if ( cur_targetCloneID != '{multID}' && cur_targetCloneID != '' ) {
					cur_targetID = cur_targetCloneID;
				}
				
				if ( cur_list == 1 ) {
					//Dynamic elements
					
					var trid = jQuery( cur_targetID ).parent().parent( '.toggle-row' );
					
					if ( trid.css( 'display' ) == 'none' ) {
						
						trid.show();
						trid.find( '.uixscform-box' ).show();
						jQuery( cur_targetID ).addClass( 'active' );
						jQuery( this ).addClass( 'checked' );
						
					} else {
						
						trid.hide();
						trid.find( '.uixscform-box' ).hide();
						jQuery( this ).removeClass( 'checked' );
						
					}
		
		
				} else {
					
					var trid = jQuery( cur_targetID );
					
					if ( trid.css( 'display' ) == 'none' ) {
						
						trid.show();
						trid.find( 'th' ).find( 'label' ).show();
						trid.find( 'td' ).find( '.uixscform-box' ).show();
						jQuery( this ).addClass( 'checked' );	
						
		
					} else {
						
						trid.hide();
						trid.find( 'th' ).find( 'label' ).hide();
						trid.find( 'td' ).find( '.uixscform-box' ).hide();
						jQuery( this ).removeClass( 'checked' );	
		
					}
		
		
				}
		
		
				//if this toggle contains another toggle, please specifies "toggle_not_class" in order that default hiding form is still valid
				if ( cur_linkedNoToggleID != '' ) {
					jQuery( cur_linkedNoToggleID ).hide();
				}

			
			
			} );	
			
			//if IE
			if ( navigator.userAgent.indexOf('MSIE') >= 0 ) {
				jQuery( document ).off( 'click', '.uixscform_btn_trigger-toggleswitch_checkbox' );
			}

 
		} );
	
  };
} )( jQuery );


/*! 
 * ************************************
 * Icon Selector
 *************************************
 */	
( function( $ ) {
  jQuery.fn.uixscform_iconSelector = function( options ) {
	
		return this.each( function() {
			
			var $this           = $( this ),
			    containerID     = '#' + $this.attr( 'contain-id' ),
				iconURL         = $this.attr( 'list-url' ),
				targetID        = '#' + $this.attr( 'target-id' ),
				previewID       = '#' + $this.attr( 'preview-id' ),
				listContainerID = 'icon-list-' + $this.attr( 'target-id' ),
				defaultIconName =  jQuery( targetID ).val(),
				$formContainer   = jQuery( previewID ).closest( '.uixscform-box' );
				
			
			/*-- Icon list with the jQuery AJAX method. --*/
			jQuery.ajax({
				url       : ajaxurl,
				type      : 'POST',
				data: {
					action      : 'uixscform_ajax_iconlist',
					iconName    : defaultIconName,
					iconURL     : iconURL
				},
				success   : function( result ){
					jQuery( containerID ).html( '<div id="' + listContainerID + '">' + result + '</div>' );
					jQuery( '.uixscform-loading.icon' ).hide();
					
				},
				beforeSend: function() {
					jQuery( '.uixscform-loading.icon' ).css( 'visibility', 'visible' );

				}
			});
			
			
			
			/*-- Click event for icon type: Font Awesome --*/
			jQuery( document ).on( 'click', '#' + listContainerID + ' .b.fontawesome', function( e ) {
				e.preventDefault();
				var _v = jQuery(this).find( '.fa' ).attr( 'class' );
				jQuery( '.b.fontawesome' ).removeClass('active');
				jQuery( this ).addClass( 'active' );
				
				
				_v = _v.replace( 'fa fa-', '' );
				jQuery( targetID ).val(_v);
				jQuery( previewID ).html( '<i class="fa fa-'+_v+'"></i>' );
				
				//remove button
				$formContainer.find( '.uixscform-icon-clear' ).css( 'display', 'inline-block' );	
				
			});
			
		    
			/*-- Click event for icon type: Flaticon --*/
			jQuery( document ).on( 'click', '#' + listContainerID + ' .b.flaticon', function( e ) {
				e.preventDefault();
				var _v = jQuery(this).find( '.flaticon' ).attr( 'class' );
				jQuery( '.b.flaticon' ).removeClass( 'active' );
				jQuery( this ).addClass( 'active' );
				
				
				_v = _v.replace( 'flaticon ', '' );
				jQuery( targetID ).val( _v );
				jQuery( previewID ).html( '<i class="flaticon '+_v+'"></i>' );
				
				//remove button
				$formContainer.find( '.uixscform-icon-clear' ).css( 'display', 'inline-block' );	
			
			});	
			
			
			/*-- Remove --*/
			jQuery( document ).on( 'click', '.uixscform-icon-clear', function( e ) {
				e.preventDefault();
				
				jQuery( this ).css( 'display', 'none' );
				$formContainer.find( 'input' ).val( '' );
				$formContainer.find( '.uixscform-icon-selector a' ).removeClass( 'active' );
				$formContainer.find( '.uixscform-icon-selector-icon-preview' ).html( '' );
				
			});
			
	
 
		} );
	
  };
} )( jQuery );

/*! 
 * ************************************
 * Format Content from Textarea 
 *************************************
 */	
function uixscform_formatTextarea( str ) {
	
	//checking for "undefined" in replace-regexp
	if ( str != undefined ) {
		str = uixscform_getHTML( str );
		str = str.toString().replace(/\s/g," ").replace(/\"/g, '&quot;' ).replace(/\'/g, '&apos;' );
		str = str.replace(/<br\w*\/*>/g,"[br]");
		str = str.replace(/<p>/g,"[p]");
		str = str.replace(/<\/p>/g,"[\/p]");
		
	}
	
	return str;

}


function uixscform_getHTML( str ) {

    var v = str;
    v = v.replace(/\r?\n/gm, '<br/>');
    v = v.replace(/(?!<br\/>)(.{5})<br\/><br\/>(?!<br\/>)/gi, '$1</p><p>');
    if (v.indexOf("<p>") > v.indexOf("</p>")) v = "<p>" + v;
    if (v.lastIndexOf("</p>") < v.lastIndexOf("<p>")) v += "</p>";
    if (v.length > 1 && v.indexOf("<p>") == -1) v = "<p>" + v + "</p>";


	return v;

}


/*! 
 * ************************************
 * HTML Encode
 *************************************
 */	
function uixscform_htmlencodeFormat( str ) {
	
	return (typeof str != "string") ? str :
	  str.replace(/'/g,'"').replace(/“/g,'"').replace(/<|>/g,
				function($0){
					var c = $0.charCodeAt(0), r = ["&#"];
					c = (c == 0x20) ? 0xA0 : c;
					r.push(c); r.push(";");
					return r.join("");
				});


}

/*! 
 * ************************************
 * HTML5 Range
 *************************************
 */	
function uixscform_rangeSlider(sliderid, outputid, cusunits) {
        var x = document.getElementById( sliderid ).value;  
		document.getElementById( outputid ).innerHTML = x + cusunits;
        
};



/*! 
 * ************************************
 * Color transform
 *************************************
 */	
function uixscform_colorTran( value ) {
	
	switch( value ) {
		case '#a2bf2f':
		    return 'green';
		
		  break;
		case '#d59a3e':
		    return 'yellow';
		
		  break;
		  
		case '#DD514C':
		    return 'red';	 
		  break;
		  
		case '#FA9ADF':
		    return 'pink';	
		 
		  break;
		  
		case '#4BB1CF':
		    return 'blue'; 
		  break;
		  
		case '#0E90D2':
		    return 'darkblue'; 
		  break;	  
		  
		  
		case '#5F9EA0':
		    return 'cadetblue';
		  break;
		  
		case '#473f3f':
		    return 'black';
		  break;
	
		  
		case '#bebebe':
		    return 'gray';
		  break;       
		  
		  
		default:

	}
			
};


/*! 
 * ************************************
 * HTML tags like "<li>","<ul>","<ol>" transform
 *************************************
 */	
function uixscform_html_listTran( str, type ) {
	
	
	var newStr = '';
	
	if ( str != '' ) {
		
		if ( str != undefined ) {
			str = str.toString().replace(/(\r)*\n/g, '<br>' );
		}


		if ( str.indexOf( '<br>' ) >= 0 ) {

			var strarr = str.split( '<br>' );	

			for (var i = 0, len = strarr.length; i < len; i++ ) {
				
				if ( strarr[i].indexOf( '['+type+']' ) >= 0 ) {
					newStr += strarr[i];
				} else {
					newStr += '['+type+']'+strarr[i]+'[/'+type+']';
				}
				
				
			}	

		} else {
            
			if ( str.indexOf( '['+type+']' ) >= 0 ) {
				newStr = str;
			} else {
				newStr = '['+type+']'+str+'[/'+type+']';
			}
			
		}	
		
	}
	
	newStr = newStr.replace(/\[li\]\[\/li\]/g, '' );

	return newStr;
	
};




/*! 
 * ************************************
 * HTML Encode form textarea
 *************************************
 */	
function uixscform_htmlEncode( s ) {
	
      return (typeof s != "string") ? s :  
          s.replace(/"|&|'|<|>|[\x00-\x20]|[\x7F-\xFF]|[\u0100-\u2700]/g,  
                    function($0){  
                        var c = $0.charCodeAt(0), r = ["&#"];  
                        c = (c == 0x20) ? 0xA0 : c;  
                        r.push(c); r.push(";");  
                        return r.join("");  
                    });  
};


/*! 
 * ************************************
 * Insert value to textarea
 *************************************
 */	
function uixscform_insertToTextarea( s ) {
      return (typeof s != "string") ? s :  
          s.replace(/<br\s*[\/]?>/gi, '\n' );
};


/*! 
 * ************************************
 * Insert shortcodes code
 *************************************
 */	
function uixscform_insertCodes( content, conid ) {
	
	if ( conid == 'content' ) {
		window.send_to_editor( content );
		uixscform_closeWin();
	} else {
		( function( $ ) {
		"use strict";
			$( function() {
				$( '#' + conid ).val( $( '#' + conid ).val() + uixscform_insertToTextarea( content ) );
				uixscform_closeWin();
			} );
			
		} ) ( jQuery );
		
	}  
	
	//Synchronize other plug-ins
	if(typeof save == 'function'){
		UixSCFormSCDataSave();
	}
	
	

};

/*! 
 * ************************************
 * Close the form window
 *************************************
 */	
function uixscform_closeWin() {
	( function( $ ) {
	"use strict";
		$( function() {
			$( '.uixscform-modal-box' ).removeClass( 'active' );
			$( '.uixscform-modal-mask' ).fadeOut( 'fast' );
			$( 'html' ).css( 'overflow-y', 'auto' );
		} );
		
	} ) ( jQuery );
};


