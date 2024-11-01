=== WPUBG===
Contributors: janbpunkt
Donate link: https://www.paypal.me/janbeuth
Tags: pubg, playerunknowns, battlegrounds, statistik, stats, statistics
Requires at least: 5.0
Tested up to:  5.3.2
Stable tag: trunk
Requires PHP: 5.2.4
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

Display your PUBG stats of the current season as a widget.

== Description ==
WPUBG is a plugin for WordPress which contacts the PUBG-API to get some basic statistics about a player and present those as a widget.

== IMPORTANT ==
This plugin contacts https://api.pubg.com with every visitor to get the needed data.
Keep this in mind regarding GDPR/DSGVO.

PUBG API Website
https://developer.pubg.com

PUBG API Privacy Policy
https://developer.pubg.com/privacy_policy

PUBG API TOS
https://developer.pubg.com/tos?locale=en


== What do you need to use it? ==
1. a working WordPress installation
2. a working API key from https://developer.pubg.com
3.  your in-game nickname

== Installation ==
1. upload zip to your plugin-folder or install it from the WordPress Library
2. activate the plugin
3. go to the widgets area and place the widget where you want it to show up
4. fill out all fields
5. save

== Screenshots ==
1. That's how it will look live
2. The backend

== Changelog ==

= 0.8 =
 * finally fixed the division by zero error when new season starts. plugin will show 0 for everything in that case
 * added unranked when no rounds were played in new season
 * added season-id below ingamename

= 0.7 =
 * fixed a bug that makes it impossible to show specialist icon

= 0.6 =
* switched from RP to SP since PUBG switched its rank system (again)

= 0.5 =
* first version of caching (there shouldn't be any API timeout from now on)

= 0.41 =
* bugfixes

= 0.4 = 
* first version of error catching

= 0.3 =
* added regions (you must select your region immediately after updating the plugin)

 = 0.2 =
* added screenshots to readme.txt
* The field "gamemode" now shows the last saved value
 
= 0.1 =
* first deploy of the plugin
