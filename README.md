# Grundsalg Aarhus design

This is the repository for the design of the Grundsalg Aarhus project.

##Usage
To make a new page take a look at the testpage in the examples folder:

* Copy and rename the `testpage` to the `templates` folder

##Twig
The twig setup supports `{% include %}` and `{% extend %}` etc. so you can structure your template setup as you wish.

For debugging you can `<pre>{{ dump(users)}}</pre>`a variable.

## Gulp and Sass
Compile Sass using gulp:
* gulp (compile once)
* gulp watch (compile and watch for changes)
* gulp watch -s (compile, watch for changes and use browser reload (make sure to use http://grundsalg-design:3000)

##Faker
The setup also includes the [fzaninotto/Faker](https://github.com/fzaninotto/Faker) library to create realistic random content.

To use this look at the example in [/fakerpage](http://grundsalg-design:3000) and see the [faker documentaion](https://github.com/fzaninotto/Faker#basic-usage) for availiable options.
