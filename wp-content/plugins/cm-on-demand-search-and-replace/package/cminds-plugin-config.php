<?php

$cminds_plugin_config = array(
	'plugin-is-pro'				 => false,
	'plugin-version'			 => '1.1.4',
	'plugin-abbrev'				 => 'cmodsar',
	'plugin-short-slug'			 => 'search-and-replace',
	'plugin-parent-short-slug'	 => '',
	'plugin-file'				 => CMODSAR_PLUGIN_FILE,
    'plugin-affiliate'               => '',
    'plugin-redirect-after-install'  => admin_url( 'admin.php?page=cmodsar_settings' ),
    'plugin-show-guide'              => TRUE,
    'plugin-guide-text'              => '    <div style="display:block">
        <ol>
         <li>This plugin allows you to setup the search & replace rules for the content of your site.</li>
        <li>You can set a <strong>textual string or HTML</strong> which should be found and the string/HTML that should be placed instead.</li>
        <li> You may also decide only to remove without replacing it (just leave the "To String" empty).</li>
        <li>This plugin and replacment tules <strong>does not change the content on the database</strong>. Instead it changes the content right before it is displayed.</li>
        <li><strong>Example:</strong>Create a rule, in the From String field type: "test" in the To String field: "passed"</li>
        <li>Create a new page, add some title (any), and write the "test" in the content</li>
        <li>Save the page and view it</li>
        <li>You should see the string "passed" in the content</li>
        <li>If there is still "test" displayed - it may mean that your theme is not using "the_content" filter.</li>
        </ol>
    </div>',
    'plugin-guide-video-height'          => 240,
    'plugin-guide-videos'            => array(
        array( 'title' => 'Installation tutorial', 'video_id' => '157541752' ),
    ),
	'plugin-dir-path'			 => plugin_dir_path( CMODSAR_PLUGIN_FILE ),
	'plugin-dir-url'			 => plugin_dir_url( CMODSAR_PLUGIN_FILE ),
	'plugin-basename'			 => plugin_basename( CMODSAR_PLUGIN_FILE ),
	'plugin-icon'				 => '',
	'plugin-name'				 => CMODSAR_NAME,
	'plugin-license-name'		 => CMODSAR_CANONICAL_NAME,
	'plugin-slug'				 => '',
	'plugin-menu-item'			 => CMODSAR_SETTINGS_OPTION,
	'plugin-textdomain'			 => CMODSAR_SLUG_NAME,
	'plugin-userguide-key'		 => '282-cm-search-and-replace',
	'plugin-store-url'			 => 'https://www.cminds.com/wordpress-plugins-library/purchase-cm-on-demand-search-and-replace-plugin-for-wordpress/',
	'plugin-support-url'		 => 'https://wordpress.org/support/plugin/cm-on-demand-search-and-replace',
	'plugin-review-url'			 => 'https://wordpress.org/support/view/plugin-reviews/cm-on-demand-search-and-replace',
	'plugin-changelog-url'		 => CMODSAR_RELEASE_NOTES,
	'plugin-licensing-aliases'	 => array( CMODSAR_LICENSE_NAME ),
	'plugin-compare-table'	 => '<div class="pricing-table" id="pricing-table">
                <ul>
                    <li class="heading">Current Edition</li>
                    <li class="price">$0.00</li>
                    <li class="noaction"><span>Free Download</span></li>
                     <li>Define find and replace rules</li>
                    <li>Supports posts and pages</li>
                    <li>X</li>
                     <li>X</li>
                     <li>X</li>
                     <li>X</li>
                     <li>X</li>
                     <li>X</li>
                     <li>X</li>
                     <li>X</li>
                     <li>X</li>
                     <li>X</li>
                     <li>X</li>
                     <li>X</li>
                     <li>X</li>
                     <li>X</li>
                  <li class="price">$0.00</li>
                    <li class="noaction"><span>Free Download</span></li>
                </ul>

                <ul>
                    <li class="heading">Pro</li>
                    <li class="price">$29.00</li>
                    <li class="action"><a href="https://www.cminds.com/wordpress-plugins-library/purchase-cm-on-demand-search-and-replace-plugin-for-wordpress/" style="background-color:darkblue;" target="_blank">More Info</a> &nbsp;&nbsp;<a href="https://www.cminds.com/?edd_action=add_to_cart&download_id=33640&wp_referrer=https://www.cminds.com/checkout/&edd_options[price_id]=1" target="_blank">Buy Now</a></li>
                    <li>Define find and replace rules</li>
                    <li>Supports post and pages</li>
                    <li>Supports text and html</li>
                    <li>Supports case sensitive content</li>
                    <li>Supports custom posts</li>
                    <li>Supports timeframes</li>
                    <li>Supports Regex</li>
                    <li>Supports titles, comments and excerpts</li>
                    <li>Supports Advanced Custom Fields content</li>
                    <li>Supports specific rules per specific content</li>
                    <li>Frontend Control widget</li>
                    <li>Access Control</li>
                    <li>Import and export rules</li>
                    <li>Search within rules</li>
                    <li>Suports BBpress content</li>
                    <li>Suports WooCommerce content</li>
                   <li class="price">$29.00</li>
                   <li class="action"><a href="https://www.cminds.com/wordpress-plugins-library/purchase-cm-on-demand-search-and-replace-plugin-for-wordpress/" style="background-color:darkblue;" target="_blank">More Info</a> &nbsp;&nbsp;<a href="https://www.cminds.com/?edd_action=add_to_cart&download_id=33640&wp_referrer=https://www.cminds.com/checkout/&edd_options[price_id]=1" target="_blank">Buy Now</a></li>
                </ul>




            </div>',
);
