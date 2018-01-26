# WordPress Starter Plugin
All the fixings so I can spin up new WordPress plugins quickly and learn all the things.

# Usage
1. Download or clone this repo into the directory of your choice inside `wp-content/plugins`.
2. `cd` into the plugin directory and run `yarn` from the command line to install dependencies.
3. Edit the `Browsersync:Proxy` plugin settings within `webpack/webpack.dev.js` to point to your local domain.
4. This plugin utilizes `namespaces` so choose a namespace and update the `class` files inside the `class` directory. You will want to replace instances of `WPSP` with your chosen namespace.
5. Edit the `autoloader` function inside the `wp-plugin.php` file. There should be two locations in this function where you can swap out `WPSP` && `wpsp` with your chosen namespace.
6. Edit the plugin details at the top of `wp-plugin.php` with your details.
7. Rename the `wp-plugin.php` file to fit your plugin name.
8. Run `yarn dev` for development mode. Browsersync will be engaged. You should be able to visit `localhost:3000`.
9. Run `yarn build` for a production build.

# Adding a New Class
For learning purposes, I've chosen not to use `singletons` all over the place with this plugin. Instead, I'm going to use a form of dependency injection that I learned from the great Jeffrey Way over at [laracasts.com](http://laracasts.com).

1. Create a new class file inside the `class` directory. Be sure to prefix the name with `class-` and be sure to follow the format of `class-hyphenate-the-name.php`. This will ensure the class will be autoloaded.
2. Inside the `class/class-bootstrap.php` file, find the `init()` function. You will instantiate your class inside this function using `App::bind( 'your-key', new YourClassName() );

# JavaScript
This plugin is setup to use the latest and greatest JavaScript. The main entry point is located at `src/index.js`. Feel free to create whatever kind of folder structure you'd like. Just be sure to import your files inside of `src/index.js`.

# Styles
This plugin is setup to use `SCSS`. The entry point for `SCSS` files is located at `src/scss/index.scss`. Again, feel free to create whatever folder structure suits your needs. Just be sure to import them at the `SCSS` entry point.
