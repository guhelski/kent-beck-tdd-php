kent-beck-tdd-php
=================

[![Build Status](https://travis-ci.org/guhelski/kent-beck-tdd-php.png)](https://travis-ci.org/guhelski/kent-beck-tdd-php)

Now you don't have more excuses to not read the [classic](http://www.amazon.com/Test-Driven-Development-By-Example/dp/0321146530/).

*Important note: This is a work in progress, chapters will be added as I work on them.*

How to use
----------
The code contained here represents finished chapters, meaning that at the end of Chapter 1 of the book, the PHP equivalent would be in the respective chapter folders (in this case [src/TDD/Chapter1](src/TDD/Chapter1) and [tests/TDD/Chapter1](tests/TDD/Chapter1)).

You should use it for comparison reasons only. Write your own version, try again and again. Go for a walk, try once more, go for a run, try again. Still no luck? Do the following:

How to install
--------------
Clone the repo to your local machine:
```
git clone git@github.com:guhelski/kent-beck-tdd-php.git
```
Get [Composer](http://getcomposer.org/download/) and run this in your terminal in the project folder:
```
php composer.phar install
```
This will download and set up [PHPUnit](https://github.com/sebastianbergmann/phpunit/) and you should be ready to run the tests with:
```
vendor/bin/phpunit
```
How to contribute
-----------------
1. Fork the project to your own account.
2. Clone the repo to your local machine.
3. Create your chapter branch (git checkout -b chapter15).
4. Commit your chapter or changes to existing ones (git commit -am 'Add Chapter 15').
5. Push your chapter branch to your fork.
6. Create a new Pull Request.
