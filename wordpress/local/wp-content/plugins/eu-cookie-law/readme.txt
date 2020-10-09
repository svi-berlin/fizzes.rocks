﻿=== EU Cookie Law for GDPR/CCPA ===
Contributors: Milmor, alexmoss
Version:	3.1.5
Donate link: https://www.paypal.me/milesimarco
Stable tag:	trunk
Author:		Marco Milesi, Alex Moss
Author URI:   https://profiles.wordpress.org/milmor/
Tags: GDPR, cookie law, notice, cookie, cookie consent, cookies, analytics, european, italia, garante, privacy, eu cookie law, italy, consent, europe
Requires at least: 4.4
Tested up to: 5.5
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

GDPR compliant solution to inform users that your site uses cookies, with the option to lock scripts before consent. Light & Customizable.

== Description ==

EU Cookie Law is a **light, elegant and powerful** solution to comply with European cookie law, **GDPR** and **CCPA**, with popup and options to lock scripts before acceptance.

Various customizations included to perfectly fit your website and keep cookies under control (before and after the consent).

Simply install the plugin and follow the instructions on the Settings page.

https://www.youtube.com/watch?v=6f2qxC3GZJ8

Demo: [www.sanpellegrinoterme.gov.it](http://www.sanpellegrinoterme.gov.it)

= Features =
* 🇪🇺 **GDPR** compliant
* ✏ **Customizable banner** (color, position, strings)
* 🤏 Consent by **Clicking, Scrolling and Navigation**
* 🗃 Set your page, popup or custom URL for Cookie Policy
* 📅 Set cookie expiry
* ✂ Shortcode to **revoke cookie consent**
* 📝 Shortcode to show a list of cookies
* 📱 **Responsive** design
* 🌍 Certified for **WPML** and compatible with various **multilanguage** plugins
* 🤹 Compatible with Disqus and Jetpack InfiniteScroll

= Advanced Features =
* **Automatic block of iframes, embeds, scripts and objects** before cookie consent, with overlay alert
* Complete set of shortcodes, PHP filters and functions

You can prevent cookies using `[cookie]` and `[/cookie]` shortcodes in posts, pages and widgets, or play with php:

`if ( function_exists(‘cookie_accepted’) && cookie_accepted() ) {
    // Your code
}`

**Shortcodes parameters, PHP filters and functions are available [in our faqs](//wordpress.org/plugins/eu-cookie-law/faq/).**

= Translations =
You can add your translations here: [translate.wordpress.org](https://translate.wordpress.org/projects/wp-plugins/eu-cookie-law) 

= Contributions =

* Plugin promoted from 2015 by [WPGov.it](http://www.wpgov.it), open-source solutions developed for Italian government websites
* Italian community [Porte Aperte sul Web](http://www.porteapertesulweb.it)
* This plugin was originally developed by [Peadig](http://peadig.com/wordpress-plugins/eu-cookie-law/) in 2012.

== Installation ==

This section describes how to install the plugin and get it working.

1. Upload `eu-cookie-law` directory to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress
3. Go to the EU Cookie settings page
4. Go through the steps and hit update!

== Frequently Asked Questions ==

= Shortcodes available =

You can block code in posts, pages and widget by wrapping it with these shortcode:
`[cookie] ... [/cookie]`
Parameters:
`[cookie height="100px" width="100%" text="Hi <b>WordPress</b>"] //My code [/cookie]`

To display the button to revoke consent (if cookies accepted) or accept cookies:
`[cookie-control]`

You can also revoke consent by adding **?nocookie=1** parameter to your url.
Ex. wordpress.org/**?nocookie=1** or wordpress.org/something/**?nocookie=1**

To display a list of active cookies on user client:
`[cookie-list]`

= PHP Functions available =
You can check the consent with:
`if ( function_exists('cookie_accepted') && cookie_accepted() ) {
    // Your code
}`

If you want to display the cookie-block message:
`generate_cookie_notice($height, $width);
generate_cookie_notice_text($height, $width, $text);

if ( function_exists('cookie_accepted') && cookie_accepted() ) {
    // Your code
} else {
	generate_cookie_notice($height, $width);
}`

Please note that **cookie_accepted** returns true if you disable it in the settings panel, if you excluded the current page or if you are a search engine :)

If you think that we should enhance something let us know in the [forum](https://wordpress.org/support/plugin/eu-cookie-law).

= Javascript Filters =
Sometimes it could be useful to trigger custom actions on cookie consent, so we added useful filters.

If you want to play, just download our [sample plugin](https://plugins.svn.wordpress.org/eu-cookie-law/assets/eu-cookie-law-filter.zip) and start coding!


= Auto block =
The plugin offers an exclusive function that allows you to block **iframes, embeds, objects, and scripts** in posts, pages, and widgets. This can be activated in the plugin options panel because it is disabled by default.

To exclude a page from the filter set a custom post field **eucookielaw_exclude** to **1**. Just enable "Custom Fields" in "Screen Options" and in the "Custom Fields" box type the name, the value, and hit "Add Custom Field".

If you want to exclude a script, you can type between `<script>` and `</script>` the string **eucookielaw_exclude**.
Ex. add **class="eucookielaw_exclude"** or a comment.

= Cache =
We are working to improve cache compatibility. As for now, conflicts may occur.

**WP Super Cache** (sperimental*): open the file wp-content/advanced-cache.php and add the following immediately after <?php opening:
`if ( !isset( $_COOKIE['euCookie'] ) ){ return; }`

So that you have:
`<?php
if ( !isset( $_COOKIE['euCookie'] ) ){ return; }

function wpcache_broken_message() {`

= WPML =
This plugin is officially certified for WPML. You can translate every string with WPML's String Translation module.

WPML’s String Translation module is part of the Multilingual CMS package. To enable it, you first need to download and install it from your WPML.org account > Downloads section.

Then, go to **WPML->String Translation** and use the display filter, at the top of the String Translation page, to determine which strings to display.

Click on the translations link to open the translation editor and adjust the strings as you want. Be sure to click on "translation is complete"" after you translate. Incomplete translations will not appear on the site.

== Screenshots ==

1. Banner example - [www.icscarpa.it](http://www.icscarpa.gov.it)
2. Autoblock feature (no consent) - [www.comune.carassai.ap.it](http://www.comune.carassai.ap.it)
3. Autoblock feature (no consent) - [www.sanpellegrinoterme.gov.it](http://www.sanpellegrinoterme.gov.it)
4. Autoblock feature (cookies accepted) - [www.sanpellegrinoterme.gov.it](http://www.sanpellegrinoterme.gov.it)
5. Banner example
6. Autoblock feature (iframe, embed, Google Maps, Disqus,...)
7. `[cookie-control]` shortcode
8. Options screen
9. Fully customizable

== Changelog ==

= 3.1.5 20200916 =
* Improved accessibility (thanks B. Németh)

= 3.1.4 20200629 =
* Fixed backward compatibility with popup message

= 3.1.3 20200623 =
* Minor bugfixes
* ReadMe changes

= 3.1.2 20200501 =
* Compatibility check
* Minor improvements

= 3.1.1 20200211 =
* Compatiblity check and readme improvements

= 3.1 19.10.2019 =
* Removed ability to serve inline scripts in the banner - Security fix for CVE: "By exploiting the documented vulnerability, an authenticated attacker with high privileges (admin) can execute JavaScript code in a victim's browser."
* Some personal thoughts about the CVE:
* EU Cookie Law allows for free HTML editing of the banner via the admin area to give better customization. This can be done only by a user with **manage_options** (=**admin** rights).
* Please note that this vulnerability had to be used by an **admin**.
* This update was released to reassure our users: we work to keep this plugin secure and efficient!
* Personal thoughts by Marco Milesi

= 3.0.6 21.05.2019 =
* Tested up to WP 5.2

= 3.0.5 10.06.2018 =
* Various **bug fixes**

= 3.0.2 09.06.2018 =
* **Improved** caching compatibility by adding plugin version as "?123" parameter on scripts.js enqueue
* **Added** another layer to check if cookies are accepted, so that the banner should disappear - it didn't in some configurations (provide feedback, thanks)
* **Better** .click detection on banner click - By @pelzi
* **Added** version 2.13 in tags, so that in case of v3.x conflicts you can rollback

= 3.0.1 26.05.2018 =
* **Fixed** critical bug with some browsers (for example Internet Explorer) that killed "Accept" button

= 3.0 24.05.2018 - First GDPR release =
Hello! This is our first GDPR release and I hope you'll like it. Some functions have changed, so report bugs in our support forum to discuss them.
Also, if you don't use technical cookies only, we suggest turning the AutoBlock function ON.

* **Added** option to exclude script block: useful if you only want to block iframe/embeds, but not scripts. Scripts (like Google Analytics) can be always be blocked with our placeholders
* **Added** more javascript-oriented logic to increase cache compatibility
* **SCROLL CONSENT** and **NAVIGATION CONSENT** automatically disabled if you use AutoBlock
* **Added** developer filter in Javascript for consent. Take a look at our FAQ or directly head to download our [sample plugin download](https://plugins.svn.wordpress.org/eu-cookie-law/assets/eu-cookie-law-filter.zip) to start coding!
* **Improved** [cookie-control] shortcode style to revoke consent
* **Added** 10px in style.css for blocked cookies banner
* Some code cleanup for faster performances

= 2.13 24.04.2018 =
* **Fixed** bug with WordPress default Youtube embeds. Thanks to @rfmcomposer + @bitmed
* **Added** better php check to block cookies in our faq - improvement by @rfmcomposer

= 2.12 23.04.2018 =
* **GDPR**: we are working to give You the best plugin to comply with GDPR. Expect news soon! Please note that we already have a shortcode you can use to let users revoke the consent (see faq) and the accept button could already be considered as an "active consent" with 1) cookie block enabled 2) scroll and navigation consent disabled
* **Fixed** typo

= 2.11 24.11.2017 =
* Checked and confirmed WP 4.9 compatibility

= 2.10 05.01.2017 =
* **Added** filter eu_cookie_law_frontend_banner to change banner design with WordPress actions
* **Added** filter eu_cookie_law_frontend_popup to change popup box design with WordPress actions
* **Fixed** problem with "nocookie" url parameter in cookie-control shortcode causing bugs in accept/revoke (#reported by Carlo Di Somma, Web Napoli Agency)
* **Enhanced** performance

= 2.9.4 18.12.2016 =
* Minor changes and WP 4.7 compatibility check

= 2.9.3 06.07.2016 =
* Minor changes and WP 4.6 compatibility check

= 2.9.2 03.04.2016 =
* Merged ac1d558 6937c2a daca37c thanks to [@stephenharris](https://profiles.wordpress.org/stephenharris/) on [git](https://github.com/WPGov/eu-cookie-law)
* Updated wpml-config.xml

= 2.9.1 31.01.2016 =
* Added custom filter to exclude Jetpack InfiniteScroll

= 2.9 30.01.2016 =
* Improved autoblock system
* Better exclusion of search engines from the block
* Better cache compatibility
* Performance improvements

= 2.8.5 31.12.2015 =
* Full switch to translate.wordpress.org
* That's all for 2015. Thank you everyone for using EU Cookie Law and Happy New Year from Peadig and WPGov!

= 2.8.4 16.11.2015 =
* Prevent bot from cookie exclude (beta) - includes mshot screenshot previews
* Minor changes (typos)

= 2.8.2 11.11.2015 =
* Removed fr_FR and nl_NL (now automatically bundled by translate.wordpress.org)
 
= 2.8.1 27.10.2015 =
* Added option to exclude manually a script. See our faqs
* Readme changes

= 2.8 17.10.2015 =
* Added **Top Center** and **Bottom Center** for banner position
* Added **target="_blank" option for cookie policy link
* Removed **ITALIAN** and **DEUTSCH** languages. They are now bundled by WordPress. After some minutes you update to this version, you will get a notice to update translations in your dashboard. Other languages will come soon.
* Minor changes

= 2.7.3 15.10.2015 =
* Minor change for translate.wordpress.org translation system

= 2.7.2 01.10.2015 =
* Minor change for translate.wordpress.org translation system

= 2.7.1 28.09.2015 =
* jQuery fix - thanks @dukessa and @froussette

= 2.7 25.09.2015 =
* **Added** option to define custom URL for cookie page
* Fixed bug in Firefox - Thanks @gandalfthegrey
* Added Polish - Thanks Mariusz Kołacz
* Fixed some missing admin-side translations - Thanks Mariusz Kołacz
* Minor changes and performance improvements

= 2.6.3 26.08.2015 =
* Added Catalan (ca) by [Núria Nadal](http://cherrycreative.es)

= 2.6.2 21.08.2015 =
* Fixed incompatibility with some plugins (eg. Ultimate Tag Cloud Widget)
* Improved performances

= 2.6.1 19.08.2015 =
* Fixed Cookie Control bugs in some servers
* Fixed wrong domain when set cookie in some servers
* Added German (de_DE) by [Karsten Höfner](http://www.mister-mx.de)
* Added Spanish (es_ES) by [Núria Nadal](http://cherrycreative.es)

= 2.6 14.08.2015 =
* Better navigation consent
* Fixed occasional bugs with "headers already sent"
* Added **cookie-list** shortcode (usage in FAQS)
* Added allowed "0" value to cookie lenght (for SESSION)

= 2.5.9 05.08.2015 =
* Improved cache compatibility
* Added WPML instructions in FAQS
* Added cookie-control shortcode strings for customization+translations
* Minor changes

= 2.5.8 02.08.2015 =
* Removed refresh if autoBlock not enabled
* Improved autoBlock

= 2.5.7 02.08.2015 =
* **eucookielaw_exclude** field now applies to content only
* Performance improvements
* Minor changes

= 2.5.6 20.07.2015 =
* Improved translation system
* Improved compatibility with WPML
* Fixed some missing strings in admin panel
* Added es_ES, fr_FR, de_DE translation files (blank)

= 2.5.5 19.07.2015 =
* Added Dutch (nl_NL) by [Gerard Weijer](http://gerardweijer.nl)

= 2.5.4 17.07.2015 =
* Minor changes
* Added WP Super Cache tips in faqs (sperimental)
* Added Revoke Consent Link in faqs
* Improved faqs
* New banner

= 2.5.3 15.07.2015 =
* Improved navigation consent (now it doesn't reload the page)
* Improved performance (load twice faster than 2.5.2)
* Added parameter to allow you to create links to revoke cookie consent (experimental)

= 2.5.2 05.07.2015 =
* Improved autoblock

= 2.5.1 03.07.2015 =
* Compatible with **WPML**
* Better AutoBlock function (Disqus block included!)
* Now scripts block doesn't generate the message (limited for iframe, object and embed)		
* Minor changes			

= 2.5 24.06.2015 =
* Removed acceptance on scroll while in cookie page
* Added Continue Navigation acceptance (beta)
* Added Multisite Support (beta)

= 2.4.2 11.06.2015 =
* Fixed occasional wrong date when setting cookies

= 2.4.1 10.06.2015 =
* Solved a conflict with "Register Plus Redux"
* Minor changes

= 2.4 09.06.2015 =
* Added `<objects>` to auto block feature
* Added ability to exclude pages from auto block feature (see our faqs) (beta)
* Added option to consider scrolling as acceptation (disabled by default)
* Improved style.css
* Remove inline javascript in favor of WordPress enqueue

= 2.3.1 08.06.2015 =
* Removed "hours" in expiration (it caused bugs with internationalization).
* **Please re-save the field. It will be considered as "days" while calculating the expiration date of cookies.**

= 2.3 08.06.2015 =
* **Added automatic block of iframes, embeds, scripts** (beta)
* **Added** option to enable/disable tinymce button
* Performance improvements
* Minor changes

= 2.2.2 08.06.2015 =
* **Fixed** conflict with the_content filter

= 2.2.1 08.06.2015 =
* **Fixed** expire date bug
* **Fixed** shortcodes in widgets
* Minor improvements 

= 2.2 05.06.2015 =
* **Added** customization options (ex. background+font color)
* Added multilanguage support
* Added italian language
* Better UI for options panel
* Minor bugfixes

= 2.1.1 + 2.1.2 04.06.2015 =
* Fixed shortcodes in `[cookie]...[/cookie]` not being correctly rendered
* Best tinymce icon with windowmanager
* New and enhanced developer functions

= 2.1 03.06.2015 =
* Added option to link directly to a page instead of popup
* Added ability to change default cookie-lock message
* Added `[cookie-control]` shortcode
* Minor changes + bugfixes

= 2.0.3 + 2.0.4 + 2.0.5 - 03.06.2015 =
* Fixed cookie storing caused by wrong iso date
* Better css for small screens
* Fixed jquery enqueue 

= 2.0 + 2.0.1 + 2.0.2 - 02.06.2015 =
* Plugin reload

= 1.2 =
* Fixed cookie storing bug in Firefox

= 1.1 =
* Fixed cookie storing bug
* Added in CSS support for IE