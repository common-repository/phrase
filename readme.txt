=== Phrase Strings ===
Contributors: phrasewp
Tags: translation, languages, multilingual
Requires at least: 5.4
Tested up to: 6.0
Requires PHP: 7.2
Stable tag: 1.2.5
License: LGPLv3
License URI: https://www.gnu.org/licenses/lgpl-3.0.html

Phrase WordPress Integration. Phrase is a translation management platform for software projects. You can collaborate on language file translation with your team or order translations through our platform. Build a bridge between Marketing, Copy, and Translation teams.

== Description ==

This plugin allows you to send page or post content to your Phrase projects, directly from within WordPress. Once translations are done, send them back to WordPress and easily publish multilingual sites.

== Installation ==

This section describes how to install the plugin and get it working.

- Create a phrase.com account
- Install the zip file via WordPress Plugin Directory
- Upload zip file
- Activate plugin
- Add API Token from https://app.phrase.com/settings/oauth_access_tokens
- Access plugin functionalities in the sidebar when editing posts or pages

== Frequently Asked Questions ==

= Will Phrase further improve the plugin? =
Yes. This is the first version of the plugin and we will continue to improve it. For instance, we will tweak the user experience of working with multilang plugins and the type of content that can be synced.

= Can I also translate categories, tags etc.? =
Version 1 of the Phrase WordPress plugin can solely handle header and content. This will be improved in the next version.

= Can I use the plugin together with Multilang plugins? =
Yes, the plugin can be easily used with Polylang and WPML, as described above. For now, our plugin does not yet work with MultilingualPress, due to the plugin only running in a multisite.

= Which WordPress version do I need? =
Version 5.5 or higher.

= Does the plugin support the Classic Editor? =
No, the plugin solely runs on the WordPress block editor.

== Changelog ==

= 1.2.5 =

* Increase translations fetch page size to 100

= 1.2.4 =

* Disable plugin on non-supported post types

= 1.2.3 =

* Retrieve translations in chunks

= 1.2.2 =

* Fix broken admin posts table layout
* Updated JS libs

= 1.2.1 =

* Fixed bug which caused not all translation keys from the post to be pulled from Phrase Strings.

= 1.2.0 =

* Updated plugin name and icon to reflect new branding.

= 1.1.0 =

* Improve compatibility with WordPress 5.8.
* Improve the way how content is replaced on pull action.

= 1.0.0 =

* Initial version.
