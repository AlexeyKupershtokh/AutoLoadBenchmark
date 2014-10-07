AutoLoadBenchmark
=================
A simple benchmark to compare autoloaders:
 1. [Composer](https://getcomposer.org/doc/01-basic-usage.md#autoloading)
 2. Composer with --optimized option
 3. [ApcClassLoader](http://symfony.com/doc/current/components/class_loader/cache_class_loader.html) on top of Composer
 4. ApcClassLoader on top of Composer with --optimized option
 5. [LazyApcClassLoader](https://github.com/AlexeyKupershtokh/LazyApcClassLoader) on top of Composer
 6. LazyApcClassLoader on top of Composer with --optimized option

The amount of work is done in every request is:

 1. Initialize a class loader (with symfony/symfony package is a requirement in composer.json)
 2. Create an instance of Request class using the autoloader

[Benchmark results](https://docs.google.com/spreadsheets/d/1Wb8Dh4C5kfTlC2dWlSYHYZSX7Mm7o_gd34DFRZTze3A/edit?usp=sharing)

![Benchmark results](https://docs.google.com/spreadsheets/d/1Wb8Dh4C5kfTlC2dWlSYHYZSX7Mm7o_gd34DFRZTze3A/pubchart?oid=2059297480&format=image)
