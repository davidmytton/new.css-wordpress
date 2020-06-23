=== new.css ===
Contributors: davidmytton
Requires at least: 5.4
Tested up to: 5.4
Requires PHP: 7.0
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/old-licenses/gpl-2.0.html

A lightweight, minimalist WordPress theme based on [new.css](https://newcss.net). Autodetects and updates to light/dark mode based on the user setting.

== Description ==
A lightweight, minimalist WordPress theme based on [new.css](https://newcss.net). Autodetects and updates to light/dark mode based on the user setting. The stylesheet is slightly modified for readability on a blog. The modifications are implemented by overriding the CSS in [style.css](/style.css).

== Example ==
[My blog](https://davidmytton.blog) is running this theme.

== Developer Installation ==
If working on this theme:

1. `npm install`
2. `mkdir assets`
3. `mkdir assets/css/`
4. `cp node_modules/\@exampledev/new.css/new.css assets/css/`

== Changelog ==

=== 1.0.2 (2020-06-23) ===
* Added "updated" date when viewing a post if the post has been modified since publishing.
* Fixed [various issues in the WordPress theme review process](https://themes.trac.wordpress.org/ticket/84352#comment:2).

=== 1.0.1 (2020-05-21) ===
* Set iframe max-width to resolve scaling issue on mobile e.g. when embedding YouTube videos

=== 1.0.0 (2020-05-20) ===
* Update to [new.css 1.1.3](https://github.com/xz/new.css/releases/tag/v1.1.3).
* WordPress Theme Directory compatible release.

=== 0.9.0 (2020-05-19) ===
* Initial version based on https://newcss.net/ but not WordPress Theme directory compatible.

== Resources ==

* [new.css](https://newcss.net) (C) 2020, MIT