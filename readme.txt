=== No Chinese Simplified Visit ===
Contributors: eflyjason
Donate link: http://www.arefly.com/donate/
Tags: Visitor, No SPAM
Requires at least: 3.0
Tested up to: 3.8
Stable tag: trunk
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Disallow Chinese Simplified Visitors in Your Blog. 在你的部落格中禁止簡體中文的訪客

== Description ==

Disallow Chinese Simplified (Browser Language) Visitors in Your Blog.

在你的部落格中禁止瀏覽器語言為簡體中文的訪客

= Translators =

* Chinese, Simplified (zh_CN) - [Arefly](http://www.arefly.com/)
* Chinese, Traditional (zh_TW) - [Arefly](http://www.arefly.com)
* English (en_US) - [Arefly](http://www.arefly.com)

If you have created your own language pack, or have an update of an existing one, you can send [gettext PO and MO files](http://codex.wordpress.org/Translating_WordPress) to [Arefly](http://www.arefly.com/about/) so that I can bundle it into No Chinese Simplified Visit. You can download the latest [POT file](http://plugins.svn.wordpress.org/no-chinese-simplified-visit/trunk/lang/no-chinese-simplified-visit.pot).

== Installation ==

###Updgrading From A Previous Version###

To upgrade from a previous version of this plugin, delete the entire folder and files from the previous version of the plugin and then follow the installation instructions below.

###Installing The Plugin###

Extract all files from the ZIP file, making sure to keep the file structure intact, and then upload it to `/wp-content/plugins/`.

This should result in the following file structure:

`- wp-content
    - plugins
        - no-chinese-simplified-visit
            - lang
                | no-chinese-simplified-visit-zh_CN.mo
                | no-chinese-simplified-visit-zh_CN.po
                | no-chinese-simplified-visit-zh_TW.mo
                | no-chinese-simplified-visit-zh_TW.po
                | no-chinese-simplified-visit.pot
                | readme.txt
            | LICENSE
            | license.txt
            | no-chinese-simplified-visit.php
            | options.php
            | readme.txt`

Then just visit your admin area and activate the plugin.

**See Also:** ["Installing Plugins" article on the WP Codex](http://codex.wordpress.org/Managing_Plugins#Installing_Plugins)

== Frequently Asked Questions ==

= I cannot active this plugin, what can i do? =

You may post on the [support forum of this plugin](http://wordpress.org/support/plugin/no-chinese-simplified-visit/) to ask for help.

= I love this plugin! Can I donate to you? =

YES! I do this in my free time and I appreciate all donations that I get. It makes me want to continue to update this plugin. You can find more details on [About Me Page](http://www.arefly.com/about/).

== Changelog == 

**Version 1.1.2**

* Remove All Remote Load File.

**Version 1.1 to 1.1.1**

* Fix Bug of `define`. (Thanks to cmhello)

**Version 1.0.9**

* Add Plugin Language Text Domain Information.

**Version 1.0.7 to 1.0.8**

* Update Readme File.

**Version 1.0.6**

* Now you can visit admin panel and login page even your language is zh_CN.

**Version 1.0.5**

* Fix Bugs.

**Version 1.0.3 to 1.0.4**

* Add WARNING for Admin in zh_CN when they are active plugin.

**Version 1.0.1 to 1.0.2**

* Fix Bugs.

**Version 1.0**

* Initial release.

== Upgrade Notice ==

See Changelog.