<?php
/*--------------------------------------------------------------
	GET WORDPRESS THEME INFORMATION
--------------------------------------------------------------*/
$theme = wp_get_theme();

// Theme name
echo $theme->name; 

// Theme title
echo $theme->title;

// Theme version
echo $theme->version;

// Get parent theme name
echo $theme->parent_theme;

// Get the path to the template directory
echo $theme->template_dir;

// Get the path to the stylesheet
echo $theme->stylesheet_dir;

// Get the template directory name
echo $theme->template;

// Get the stylesheet directory name
echo $theme->stylesheet;

// Return the URL to the screenshot
echo $theme->screenshot;

// Get the theme description
echo $theme->description;

// Get the theme author name
echo $theme->author;

// Get the theme tags
echo $theme->tags;