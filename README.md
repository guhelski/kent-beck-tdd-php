kent-beck-tdd-php
=================

[![Build Status](https://travis-ci.org/guhelski/kent-beck-tdd-php.png)](https://travis-ci.org/guhelski/kent-beck-tdd-php)

Now you don't have more excuses to not read the [classic](http://www.amazon.com/Test-Driven-Development-By-Example/dp/0321146530/).

*Important: This is a work in progress, chapters will be added as I work on them.*

How to use
----------
The code contained herein represents a finished chapter, this means that at the end of Chapter 1, the PHP equivalent would look like what is present in the respective chapter folders (in this case [src/TDD/Chapter1](src/TDD/Chapter1) and [tests/TDD/Chapter1](tests/TDD/Chapter1)).

You should use it for comparison reasons only, no copy and paste. Write your own version, try again and again and again, go for a walk, try once more, go for a run, try again, still no luck? Do the following:

How to install
-------------
Get [Composer](http://getcomposer.org/download/) and run this in your terminal in the project folder:
```
php composer.phar install
```
This will download and set up [PHPUnit](https://github.com/sebastianbergmann/phpunit/) and you should be ready to run the tests with:
```
vendor/bin/phpunit
```
