# main.js
The **`main.js`** file is where all the JS is minified and concatenated.  

### Do not edit `main.js` file, or your changes may be overwritten the next time `gulp` is run

# src/js

The source JS files that are concatenated into main.js are found in src/js.

In order to add js files to be packaged, you need to edit the `scripts` task of `gulpfile.js`.

If there comes a time when you don't want to minify and concatenate the js, just copy these files to the theme js directory, and enqueue them separately.
# theme.js

The theme.js file is where the base theme functions live that are provided as part of the starter theme.  We recommend adding any new JS to the src/js/custom.js file.

# custom.js

### This is where you should add your JS for your project, and during maintenance.

# Other Files

Feel free to add other JS libraries in this directory if you like.  If you run `gulp`, all the js in this directory will be uglified, minified, and contactenated into the main.js file, and enqueued.

# boostrap.bundls.js vs bootstrap.js

Only one of these should be included in main.js.  bootstrap.bundle.js only includes the base bootstrap JS, and bootstrap.js includes popper.js.  This is something that was added by the understrap parent theme.