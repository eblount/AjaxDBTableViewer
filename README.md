AjaxDBTableViewer
=================

A quick and easy ajax database table viewer, using jQuery Datatables, with search, pagination, column selection, and per page count.

It uses Twitter Bootstrap for the template, and Michael Morgan's Datatables module for the Kohana framework.

The data is loaded via AJAX from one table in your database. At this time, that's all it is designed to do. However, if you are familiar with PHP and Kohana framework, you should be able to modify it to join database tables.

To use:
For the most basic setup, just edit the values in the config.php file in the main directory.
Set up the database info, the table you want to display, and the columns of the table as noted in the config file.

If you want to make changes to the page or layout:
The overall template is in application/views/template.php
The index page template is in application/views/welcome/index.php

References:
[Michael Morgan](https://github.com/morgan "Michael Morgan") (DataTables and Paginate Kohana modules)
[Twitter Bootstrap](http://twitter.github.com/bootstrap/ "Twitter Bootstrap")
[jQuery Datatables](http://datatables.net/ "jQuery Datatables")
