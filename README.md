# MESH-Starter-Theme

This theme is the starting point for new MESH Wordpress projects.

Tools
---------------

This theme uses Sass for precompiling and generating CSS. Before starting a project, install Grunt:

* Navigate to the root of the theme
* Run "npm install grunt"
* Then run, "npm install" to install remaining dependencies

Getting Started
---------------

When styling, start here:

**/sass/utilities/_config.scss**

* Colors
* Link colors
* Fonts
* Font sizes

**/sass/grid/_config.scss**

* Breakpoints
* Grid sizes

Layout
---------------

The template layouts are built using the Skeleton grid framework.

We use containers, which hold rows, which have columns.

    <div class="container">
      <div class="row">
        <div class="twelve columns">
          ...
        </div>
      </div>
    </div>

Most sites are built on a twelve column grid, but you can choose a different number of columns in the grid config file.
