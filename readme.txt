=== PLX Lead Reporting ===
Contributors: jmcgrory-plx,matt-plx,JadeSperrin-plx
Tags: gtm,google tag manager, tag manager,cf7,contact form 7,json
Requires at least: 3.5
Tested up to: 4.9
Requires PHP: 5.6
Stable tag: 1.0.3
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

Speeds up Google Tag Manager integration and provides dataLayer functions for Contact Form 7 integration.

== Description ==
Speeds up Google Tag Manager integration by providing customisable and importable GTM JSON and also setting up Javascript dataLayer functions for Contact Form 7 integration.

== Installation ==
1. Upload the plugin files to the `/wp-content/plugins/plx-reporting` directory, or install the plugin through the WordPress plugins screen directly.
2. Activate the plugin through the \'Plugins\' screen in WordPress.
3. After successful activation go to the Reporting screen and enter your Google Tag Manager and Analytics information.
4. Go to the JSON screen and select your JSON Export Settings and click \'Configure JSON\'
5. Copy the provided JSON into a .json file on your local computer and then import into your Google Tag Manager account

== Screenshots ==
1. Admin credentials for adding Google Tag Manager/Analytics IDs and inline scripts
2. Configuring JSON dynamically for import into Google Tag Manager
3. Exported JSON for use in Google Tag Manager

== Changelog ==
= 1.0.0 =
* Initial Release

= 1.0.1 =
* Added contributors

= 1.0.2 =
* Fixed issue with incorrect Analytics ID in JSON export
* Fixed validation for GTM Account IDs

= 1.0.3 =
* Added Form ID variable to the tag eventAction so it now outputs 'submission {{PLX - FORM ID}}'