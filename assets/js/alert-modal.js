//
// AlertModal - jQuery plugin
//
(function ( $ ) {
	 $.fn.AlertModal = function(options) {
	 		var plugin = this;
	 		var okbutton;
	 		var cancelbutton;

			var setupButtonHandlers = function() {
				okbutton = document.getElementById(ok_id);
				if (okbutton != null) {
					okbutton.onclick = function() {
						plugin.hide();
						if (plugin.options !== "undefined") {
							if (plugin.options.dismiss_callback !== "undefined") {
								if (plugin.options.tags !== "undefined") {
									plugin.options.dismiss_callback('ok', plugin.options.tags);
								} else {
									plugin.options.dismiss_callback('ok');
								}
							}
						}
					};
				}

				cancel_button = document.getElementById(cancel_id);
				if (cancel_button != null) {
					cancel_button.onclick = function() {
						plugin.hide();
						if (plugin.options !== "undefined") {
							if (plugin.options.dismiss_callback !== "undefined") {
								if (plugin.options.tags !== "undefined") {
									plugin.options.dismiss_callback('cancel', plugin.options.tags);
								} else {
									plugin.options.dismiss_callback('cancel');
								}
							}
						}
					};
				}
			}

			var handleOptions = function(options) {
				if (typeof options !== "undefined") {
					plugin.options = options;
	        if (typeof options.alert_class !== "undefined") {
	        	 document.getElementById(c_id).className = "alert-modal-content "+options.alert_class;
	        }
	        if (typeof options.content !== "undefined" && typeof options.content.html != "undefined") {
	        	document.getElementById(p_id).innerHTML = options.content.html;
	        }
	        if (typeof options.content !== "undefined" && typeof options.content.classname != "undefined") {
	        	document.getElementById(p_id).className = "alert-modal-text " + options.content.classname;
	        } else {
	        	document.getElementById(p_id).className = "alert-modal-text"
	        }
	        var button_content = ""
	        if (typeof options.buttons !== "undefined" && typeof options.buttons.ok_button != "undefined") {
	        	button_content += "<input type='button' class='btn btn_primary' id='"+ok_id+"' style='margin-right:5px' value="+options.buttons.ok_button+" />"
	        } 
	        if (typeof options.buttons !== "undefined" && typeof options.buttons.cancel_button !== "undefined") {
	        	button_content += "<input type='button' class='btn btn_primary' id='"+cancel_id+"' value="+options.buttons.cancel_button+" />"
	        }

	        document.getElementById(b_id).innerHTML = button_content;
	        if (button_content !== "") {
	        	setupButtonHandlers()
	        }
	      }
			};

			plugin.hide = function () {
				theElem.style.display = "none";
				return this;
			};

			plugin.show = function (options) {
				handleOptions(options)
				theElem.style.display = "block";
				return this;
			};

			plugin.html =	function (alert_content) {
				document.getElementById(p_id).innerHTML = alert_content;
				return this;
			};

			plugin.config = function(alert_class) {
				document.getElementById(c_id).className = "alert-modal-content "+alert_class;
		  };

			plugin.tags = function(tags) {
				if (typeof tags !== "undefined") {
						this._tags = tags;
				}
				return this._tags;
			};

			plugin.options = null;
	 		var id = this.selector;
			var rv = Math.random();
			var p_id = id+"_p_"+rv
			var b_id = id+"_bu_"+rv
			var c_id = id+"_can_"+rv
			var ok_id = id+"_ok_"+rv
			var cancel_id = id+"_c_"+rv
			var cb_id = id+"_cb_"+rv
			$('#'+id).html('<div id="'+c_id+'" class="alert-modal-content"><span id="'+cb_id+'" class="alert-modal-close">×</span><p id="'+p_id+'" class="alert-modal-text"></p><div class="alert-modal-buttons" id="'+b_id+'" align="center"></div></div>');
			var theElem = document.getElementById(id);

			var closebutton = document.getElementById(cb_id);
			closebutton.onclick = function() {
				plugin.hide();
				if (typeof plugin.options !== "undefined") {
					if (typeof plugin.options.dismiss_callback !== "undefined") {
						if (plugin.options.tags !== "undefined") {
							plugin.options.dismiss_callback('close', plugin.options.tags);
						} else {
							plugin.options.dismiss_callback('close');
						}
					}
				}
			};


			handleOptions(options);
			return this;
	};

}( jQuery ));
