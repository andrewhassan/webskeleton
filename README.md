webskeleton
===========

This is my first (quick) attempt at creating a PHP web skeleton that can be used for making a simple website. 

The way it works is essentially there are page frames that use bootstrap for display and each sub page is HTML code that is put into that frame (it can use bootstrap, can be plain HTML, or even a direct link to an external page). The HTML for each page is generated using the Smarty templating engine, which works by creating template HTML files with placeholders.

In an attempt to keep track of the main pages that you would probably link to, I have created a `locations.json` file. This is a plain text file that stores the name and actual location of the pages in JSON format. If you are creating a "MainPage", then it will read that file to generate the navbar links at the top. 
