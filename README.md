AutoLoadBenchmark
=================
A simple benchmark to compare autoloaders:
1. Composer
2. Composer with --optimized option
3. ApcClassLoader on top of Composer
4. ApcClassLoader on top of Composer with --optimized option
5. LazyApcClassLoader on top of Composer
6. LazyApcClassLoader on top of Composer with --optimized option

The amount of work is done in every request is:

1. Initialize a class loader
2. Create an instance of Request class using the autoloader

[Benchmark results](https://docs.google.com/spreadsheets/d/1Wb8Dh4C5kfTlC2dWlSYHYZSX7Mm7o_gd34DFRZTze3A/edit?usp=sharing)

![Benchmark results](https://docs.google.com/spreadsheets/d/1Wb8Dh4C5kfTlC2dWlSYHYZSX7Mm7o_gd34DFRZTze3A/pubchart?oid=2059297480&format=image)
