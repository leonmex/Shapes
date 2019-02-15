A Simple Shapes Creation 
========================

This is a simple example for the Urban Sport Test.

Getting Started
---------------

Clone this repository and then run Composer:-

```
composer install
```

You will then be able to run the unit tests using:-

```
.bin/phpunit tests/ShapeTest.php - TDD
```
```
.bin/behat  - BDD
```

Pattern architecture
---------------

This Factory pattern is ideal for this kind of projects with images for the simple reason that we can 
include caches for reuse image's objects.
