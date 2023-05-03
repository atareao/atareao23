# About atareao23

A theme for atareao.es derived from Blockbase


## Building

atareao23 uses SCSS to compile the CSS used to ponyfill Gutenberg.  Building Blockbase isn't necessary to use it - either as a theme or as a parent theme - but making changes does require the .scss file to be recompiled.
The easiest way to do so is to use `node` to install and run the necessary dependencies via `npm install`. 
Then after making changes to the *.scss files run `npm run build` to compile.
You can use `npm start` and it will be in 'watch mode' recompiling the .scss files any time any changes are made.
