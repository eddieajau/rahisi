# Rahisi Joomla - Easy Joomla

## About Rahisi

Well, first off, "rahisi" is Swahili for "easy" or "simple". Thus, the goal of this project is to provide a web publishing tool that's easy to use and not overly complicated (more or less like WordPress, but we aren't aiming to clone WordPress, just the idea that it's simple to use).

However, we want to do this smart and this means there will likely be some significant architectural divergence from what you might be familiar with as a developer using the Joomla CMS. Essentially this is a sandbox to experiment with new code and new ideas. The long term goals are roughly as follows (and in no particular order):

* The application needs to be designed with the intention of building out all the functionality as RESTful web services.
* We want to minimise the files that absolutely need to be available to the web server.
* We want to lean heavily on the latest "adaptive content" thinking.
* You should be able to install one copy of the PHP "stuff" on a server to support multiple sites (preferably just a single phar).
* We don't want to use any legacy code.
* The end-user docs should be written as we go (see `/docs`).
* The developer docs should be written as we go (see the `README.md` files).
* And, we want to have fun and learn new things as we go.

## Installation

This obviously need to get really easy, but for now it is what it is.

Clone the repository [Rahisi](https://github.com/eddieajau/rahisi) repository.

It's best to set up a virtual host and just sym-link the `index.php` into your doc-root and also copy `/www/htaccess.txt` to `.htaccess`. You could cheat and just clone the repo under your doc-root but in doing so you will need to fiddle with the `RewriteBase /` line in the `.htaccess` to get the SEF URL's to work.

## Testing

Make sure you have PHPUnit installed. For more information on that, refer to the
[PHPUnit Manual](http://www.phpunit.de/manual/3.6/en/installation.html). Copy the `phpunit.dist.xml` file to `phpunit.xml` (no changes are necessary yet, but they may be in the future). Then just run PHPUnit from the command line.

```bash
$ phpunit
PHPUnit 3.7.8 by Sebastian Bergmann.

Configuration read from phpunit.xml

.

Time: 1 second, Memory: 10.00Mb

OK (1 test, 1 assertion)

Generating code coverage report in Clover XML format ... done

Generating code coverage report in HTML format ... done
$
```