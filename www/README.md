# /www

This is where all the web action is. We don't want to expose all our code to the web server root (you'll see a distinct lack of the typical `defined or die` lines in the PHP files) so we make sure it is quite separate from the entry points and supporting files the web server needs access to.

## index.php

So, this is our web entry point.

For now, we are maxing out the PHP error reporting but later on that should be made configurable.

A number of constants are set up (still early days on those).

We load the Joomla Platform phar (otherwise nothing else will happen) and then we open a try-catch block in which to run the application.

`import.php` is included to bootstrap the application classes and then we instantiate the web application object. We then execute the application.

In the event that a thrown exception makes it back to this file, we just send out a '500' header and exit with the message.