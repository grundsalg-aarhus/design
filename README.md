# Design

##Usage
To make a new page take a look at the testpage in the examples folder:

* Copy and rename the `testpage` to the `templates` folder

##Twig
The twig setup supports `{% include %}` and `{% extend %}` etc. so you can structure your template setup as you wish :-)

For debugging you can `<pre>{{ dump(users)}}</pre>`a variable.

##Faker
The setup also includes the [fzaninotto/Faker](https://github.com/fzaninotto/Faker) library to create realistic random content.

To use this look at the example in [/fakerpage](http://localhost:8000/fakerpage) and see the [faker documentaion](https://github.com/fzaninotto/Faker#basic-usage) for availiable options.
