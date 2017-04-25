jQuery(document).ready(function() {			
			// Create the dropdown base to switch out navigation with drop down menu on small screens
			jQuery("<select />").appendTo("#main-navigation");
			
			// Create default option "Go to..."
			jQuery("<option />", {
			   "selected": "selected",
			   "value"   : "",
			   "text"    : "Go to..."
			}).appendTo("#main-navigation select");

			// this adds a space and dash to submenu list items		
			jQuery( "#main-navigation ul.sub-menu li a" ).prepend( "<span> &nbsp; &nbsp;- </span>" );

			// Populate dropdown with menu items
			jQuery("#main-navigation li a").each(function() {
			 var el = jQuery(this);
				jQuery("<option />", {
				 "value"   : el.attr("href"),
				 "text"    : el.text()
			 }).appendTo("#main-navigation select");
			});

			// Make it actually do something
			jQuery("#main-navigation select").change(function() {
			  window.location = jQuery(this).find("option:selected").val();
			});		
		});