=== Enhanced SQL Portal Bridge ===
Contributors: eliacom
Donate Link: http://www.eliacom.com/mysql-gui-buy.php
Tags: database,sql,phpMyAdmin,mysql,database administration,DBA,query,database management,forms,table,adminer,heidiSQL
Requires at least: 2.8 or higher
Tested up to: 4.3.alpha-32456
Stable Tag: 1.0.0
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

ESP Bridge links WordPress to the Enhanced SQL Portal, giving you the ability to manage your database and create forms without a database login.

== Description ==

This bridge plugin automatically logs you into your database with the Enhanced SQL Portal (ESP). You can either login to your WordPress database with 1 click or go to the login screen and login to a different database on your server. ESP is a database management GUI that makes it easier to:

* Manage Tables
  * **Organize tables** into folders and easily search for tables to manage large databases
  * Quickly **create/copy and delete tables**, with or without data.
  * **Create and manage indexes on tables**, using an easy-to-use graphical interface
  * **Create and manage foreign keys** between tables. Never get an error 150 ever again, since we check for almost every cause before attempting to create a foreign key


* See Results of Custom Queries
  * **Automatically saves a history of queries** that you have performed so you can go back without retyping. These persist between sessions. 
  * With two clicks, **turn any query into a MySQL view**, which then becomes available in the Table Manager with all of its benefits.
  * **Organize and save queries** for later use. You can organize queries for later use using the searchable organizer tree. 

[My website](http://www.eliacom.com/mysql-gui-demo.php) has a demo that you can test to get a feel for the system.

== Installation ==

###Installation from WordPress.org
1. Download Enhanced SQL Portal Bridge
2. Go to Plugins menu
3. Click 'Add New'
4. Click 'Upload Plugin'
5. Choose the downloaded file
6. Activate with your Plugins page

###Installation from Wordpress Dashboard
1. Go to Plugins menu
2. Click 'Add New'
3. Search Enhanced SQL Portal Bridge
4. Click 'Install Now'
5. Activate with your plugins page

== Frequently Asked Questions ==

= What is the Enhanced SQL Portal(ESP)? =

ESP is a database management systme that extends the capabilities of MySQL, giving anyone the ability to manage a database. Using the system's Table Manager, tables can easily be created, modified, including adding indexes and foreign keys. The system's Query Browser will allow you to create custom queries. 

You can create forms using various built-in field types such as drop-downs, number fields, text fields,date and date-time fields, google location and direction fields, and code fields (for editing code like HTML, javascript, etc.). You can change the layout of the forms using a built-in HTML editor.

The Query Browser allows you to execute and command or query on your databases, and will save your queries for you as well as allow you to turn any query into a MySQL view, which can then be used in the Table Manager.

That Admin Manager allows you to export single or multiple databases or single or multiple tables within a database using mysqldump.

Beyond that, ESP has several other apps that can be added to your system to add functionality.

= What are the system requirements to use this bridge and/or ESP? = 

The Enhanced SQL Portal is well tested on linux servers with MySQL 5.x, and PHP 5.x (greater than 5.3). IT requires PHP PDO_MySQL or PHP MySQLi. While not well tested, it should work with Windows-type servers such as WAMP.

= How can I access a different database with the ESP system =

On the ESP Bridge page there is a button labeled 'Login into Other Database'. Clicking that will take you to the ESP login page, where you can specify database and user.

= How can I create a new database? = 

There are two ways to create a new database. The first is to click the 'Login into WP Database button'. Once there, you can use the Admin Manager, click on the Database Setup section, and click on Create New Database. <br>

You can also click the 'Login into Other Database button.' When you are at the login page, you  can type the name of your new database into the database box. If the database doesn't exist, upon login, it will ask you if you want to create the database.

= How can I create a new table = 

Go the Table Manager app and click 'File', then 'New', and then 'Table.' This will pop up a form where you can choose the table name and enter other information, and the table will be created.

= How can I add columns to a table = 

Find the table in the table manager in the tree on the left. Click on it. A tab that says "Format" will appear when the table is selected. You can manage the columns from that tab. Click on "Add" at the bottom to create a new column. By changing the validation, you can choose what kind of field that column will be represented by; there are various other options there for column definitions as well.

= How can I add a foreign key to a table = 

Find the table in the table manager in the tree on the left. Click on it. A tab that says "Foreign Keys" will appear when the table is selected. You can manage the foreign keys from that tab. Click on "Add" at the bottom to create a new foreign key.

= How can I add an index to a table = 

Find the table in the table manager in the tree on the left. Click on it. A tab that says "Indexes" will appear when the table is selected. You can manage the indexes from that tab. Click on "Add" at the bottom to create a new index.

== Screenshots ==

1. WordPress DashBoard->ESP Bridge Page to Login to ESP
2. Enhanced SQL Portal->Home Page
3. Enhanced SQL Portal->Login Screen
4. Enhanced SQL Portal->Table Manager
5. Enhanced SQL Portal->Example Form to Add Row to Table
6. Enhanced SQL Portal->Query Browser
7. Enhanced SQL Portal->Function to Dump Database
8. Enhanced SQL Portal->Function to Dump Current Database Tables

== Changelog ==

= 1.0.0 (2015/6/29) =
*First Version of Enhanced SQL Portal Bridge

== Upgrade Notice == 

= 1.0.0 =

First version of the ESP Bridge
