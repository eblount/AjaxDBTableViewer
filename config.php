<?php

/* Set up database connection information */
define('DBHOST', 'localhost');
define('DBUSER', 'youruser');
define('DBPASS', 'yourpass');
define('DBNAME', 'yourdb');

/* Which table to display */
define('DBTABLE', 'yourtable');

/* The following two lists are required */
define('DBCOLUMNNAMES', 'Artist,Title,CD Name,Track'); // Comma separated list of HTML table column names
define('DBCOLUMNS', 'artist,title,cd,track');     // Comma separated list of database table column names

/* Template page titles */
define('PAGE_TITLE', 'Table Display');    // The page subject (the browser tab name)
define('HEADER_TITLE', 'Table Display'); // The header title (the white text in the black bar in the page)
