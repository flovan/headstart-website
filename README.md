# [Headstart Website](http://headstart.io)

This repo contains the entire [Headstart](http://headstart.io) website.
Uses Laravel as a back-end and has a front-end that is, of course, based on the default boilerplate.

To build this project on your local machine:

1. Clone the repo into a folder (probably where your localhost keeps its files) and `cd` into it.
2. Run `composer.phar install` to generate the `./vendor` folder. More on this on the [Laravel website](http://laravel.com/docs/4.2/installation#install-composer).
3. `cd` into the `./private` folder and run `hs build` to generate the views and asset files.
4. Visit the location of the project through your browser (don't forget to add `/public` to the url).

Licensed under MIT.