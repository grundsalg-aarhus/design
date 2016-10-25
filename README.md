# Grundsalg Aarhus design

This is the repository for the design of the Grundsalg Aarhus project.

## Setup

```
git clone git@github.com:grundsalg-Aarhus/design.git
cd design
composer install
php -S localhost:8000
```
The site is now accessible at [localhost:8000](http://localhost:8000) where you can see a list of example pages. This list auto-updates when you make new pages.

An example template is located at [/jsonpage](http://localhost:8000/jsonpage)

##Usage
To make a new page follow the structure for the jsonpage example:

* Copy and rename the `jsonpage` directory
* Edit `vars.json` to reflect the content of your page
* In `index.php` update the line `echo $twig->render('jsonpage/jsonpage.html.twig', $vars);` to with your pagename
* Under `/templates` copy and rename the `jsonpage` directory and the `jsonpage.html.twig` template
* Alter the template as you wish

##Twig
The twig setup supports `{% include %}` and `{% extend %}` etc. so you can structure your template setup as you wish :-)

For debugging you can `<pre>{{ dump(users)}}</pre>`a variable.

##Faker
The setup also includes the [fzaninotto/Faker](https://github.com/fzaninotto/Faker) library to create realistic random content.

To use this look at the example in [/fakerpage](http://localhost:8000/fakerpage) and see the [faker documentaion](https://github.com/fzaninotto/Faker#basic-usage) for availiable options.
