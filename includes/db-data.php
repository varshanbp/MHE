<?php


# This file is used for installation of SQL database.
# Developers JSSV recommend to use MYSQL 5.5 and above. This was made based on PHP 7.
# Please define the values for database.
# Delete the INSTALL folder after installation for safety purposes.
#
# Examples - Change the Values Below
# DBHOST - is the Database Host URL.
# define('DBHOST', 'SPECIFY YOU HOST URL HERE');
# Tip : Use the DBHOST from provider. Mostly it is 'localhost' or website address like 'EXAMPLE.COM'
#
# DBUNAME - is the Name of the database user/admin.
# define('DBUNAME', 'SPECIFY YOU DATABASE USER NAME HERE');
# Tip : Use name as short as possible. It is mostly 'ROOT'
#
# DBPASS - is the Password of Database.
# define('DBPASS', 'SPECIFY YOU DATABASE PASSWORD HERE');
# Tip : Use Password as Complicated as possible.
#
# DBNAME - is the Name of the database. Specify Name which does not exist.
# define('DBNAME', 'SPECIFY YOU DATABASE NAME HERE WHICH DOES NOT EXIST');
# Tip : Use name as short as possible. Remcommended is less than or equal to 5 lines
#
# END OF DOCUMENTATION


define('DBHOST', 'localhost');
define('DBUNAME', 'test');
define('DBPASS', '');

# PREDEFINED VALUES, DO NOT CHANGE UNLESS TABLE OR DATABASE EXIST WITH SAME NAME
#
# DATABASE NAME VALUES
define('DBNAME1', 'login');
define('DBNAME2', 'assets');

# TABLE NAME VALUES
define('TBNAME1','auth');
define('TBNAME2','stulist');

 ?>
