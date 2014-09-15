# ACA WP Docs

This is the documentation for ACA’s base Wordpress theme.

## General

For the most part this theme is built entirely on native Wordpress functionality. The exception is two plugins – *[Advanced Custom Fields](http://www.advancedcustomfields.com/)* and *[WP Blade](https://github.com/MikaelMattsson/blade)* – which augment Wordpress’ default functionality and on which we rely heavily. The former is used to extend and customize the Wordpress backend.

### WP Blade

WP Blade is a port of [Laravel's](http://laravel.com/) templating engine wrapped up in a Wordpress plugin. Blade extends PHP’s default capabilities with useful templating concepts like extensible layouts and quicker syntax for basic control structures. It essentially supercharges Wordpress’ default [template functions](http://codex.wordpress.org/Template_Tags)

- Layouts
- Partials
- Quick Echo
- Simplified Syntax
- WP Query control (specific to *WP Blade.*)
- Loop control (specific to *WP Blade.*)

#### Layouts

Layouts live in the **`layouts`** directory.

#### Sections

A `section` refers to a named sapce in a template which can be dynamically populated with content. (Note that sections should *always be defined in Blade* `layout` *file.*) The syntax to create a section is a simple yield statement: **`@yield('section-name')`**.

To sum it up, sections are useful ways to write manatainable templates because you can define the order of your **`@yield`** sections and wrap them in HTML tags you are able to define consistent, easily replicable structures. (And actually force yourself to use them!) For example, imagine you always wanted your content to be wrapped in an `<article>` tag to improve SEO and general accessability: `<article> @yield('content') </article>`. Here's a more complex example:

```php
	<main>
		<article>
			 @yield('content')
		</article>
		<aside>
			@yield('sidebar')
		</aside>
	</main>
```

By default, the ACA theme layouts define the following sections. Feel free to use these or add more.

| Name            | Wrapper Tag     | Description                                                |
|:----------------|:----------------|:-----------------------------------------------------------|
| Notify          |`<section>      `| An area contextual information, updates, or notifications. |
| Main            |`<main>         `| An area for all the main content of a document.            |
| Side            |`^ <aside>      `| Space for a sidebar (within the main element.)             |
| Breakout        |`<section>      `| Bottom section before the footer for banners, ads, etc.    |

If you decide to modify the default names please push these changes in a **SEPARATE, WELL COMMENTED COMMITT** so that they won't be mixed in to the master. Also, rememeber to change any uses or references elsewhere in the theme or else things'll start breaking!

## License

[**ACA WP Theme**](https://github.com/rafegoldberg/ACA-WP-Theme/) &copy; [Rafe Goldberg](https://github.com/rafegoldberg/). Full license availble [here](http://creativecommons.org/licenses/by-nc-nd/4.0/).

![](http://i.creativecommons.org/l/by-nc-nd/4.0/88x31.png)
