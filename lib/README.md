# /lib

This is where external libraries live (and that includes the Joomla Platform itself), usually in phar format.

## Joomla Platform

There are two phar files for the Joomla Platform.  `joomla.phar` is the file that is included in the application. `joomla-test.phar` is nearly the same as `joomla.phar` except that it also includes classes that support the unit test (like `TestReflection`, etc).

These phar files are built using Louis Landry's [Packager](https://github.com/louislandry/packager).

Last update: 2012-11-20 19:35 +1000

## Mustache

Mustache is currently included because that's what I reckon I'll use as the templating engine. It also gives me practice at phar-ing up a third-party library to use in the application.

### Updating the `mustache.phar` file.

```
git clone git://github.com/bobthecow/mustache.php.git
cd mustache.php.git
phar pack -f mustache.phar src/
phar compress -f mustache.phar -c gzip
echo "<?php Phar::interceptFileFuncs(); __HALT_COMPILER();?>" | phar stub-set -f mustache.phar
```

Copy the `mustache.phar` file to this repository and push a change.