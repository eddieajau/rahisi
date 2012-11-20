# /src

This folder is where all the action is. All the custom code that drives the application lives in here.

## /src/joomla

This is a folder where we put "J" classes that either override the Joomla Platform core classes (for example, if we wanted to override `JDate`, we could copy that into `/src/joomla/date/date.php` and then modify it for our own purposes), or we can include classes that we are experimenting with that may one day join the Joomla Platform itself.

## /src/language

This is where the language files will live. They'll be in the normal ".ini" format that is used by the Joomla CMS and follow the same folder convention (for example, `language/en-GB` for the Queen's English).

## /src/rahisi

This is where all the custom classes for the Rahisi application live. They are all prefixed with "R".

## import.php

This is the file that sets up the extended platform on which the Rahisi application will run. Note that it assumes that the Joomla Platform has already been loaded (we do that in an entry-point file like `/www/index.php` or `/tests/bootstrap`), so we test that `JLoader` exists.

It's then going to register a few prefixes against some library paths. The order is important. We want `JLoader` to look for "R"-classes in `/src/rahisi` first. Next, we want the loader to look for "J"-classes in `/src/joomla` first, then in the platform (the phar file in `/etc`). This is done so we can override the core platform classes if we need to.