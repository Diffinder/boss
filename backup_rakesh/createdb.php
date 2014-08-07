<?php
//connect to MySQL; note we’ve used our own parameters- you should use
//your own for hostname, user, and password
$con = mysql_connect("localhost", "root", "abc") or
die ("Check your server connection.");
//create the main database if it doesn’t already exist
$create = mysql_query("CREATE DATABASE IF NOT EXISTS bikeservice")
or die(mysql_error());
//make sure our recently created database is the active one
mysql_select_db("bikeservice");
//create "movie" table
//changed
$user = "CREATE TABLE user (
U_id int(100) NOT NULL AUTO_INCREMENT,
name varchar(255),
area varchar(255),
pwd varchar(255) NOT NULL,
phone BIGINT(10),
mobile BIGINT(10) Unique NOT NULL,
email varchar(255) NOT NULL,
address varchar(255),
PRIMARY KEY (U_id)
)";
$results = mysql_query($user)
or die (mysql_error());

$service_center = "CREATE TABLE `serv_center` (
 `S_id` int(100) NOT NULL AUTO_INCREMENT,
 `S_name` varchar(255) NOT NULL,
 `pwd` varchar(255) NOT NULL,
 `address` varchar(255) NOT NULL,
 `area` varchar(255) NOT NULL,
 `lati` float(9,6) NOT NULL,
 `longi` float(9,6) NOT NULL,
 PRIMARY KEY (`S_id`),
 UNIQUE KEY `S_name` (`S_name`)
)";
$results = mysql_query($service_center)
or die (mysql_error());

$contacts = "CREATE TABLE contacts (
S_id varchar(100) NOT NULL,
phone BIGINT(100) Unique NOT NULL,
dscrption varchar(100) NOT NULL,
PRIMARY KEY (phone)
)";
$results = mysql_query($contacts)
or die(mysql_error());


$amenity = "CREATE TABLE Amenities (
S_id int(100) NOT NULL,
amenity varchar(255) NOT NULL,
description varchar(255) NOT NULL,
Primary Key(S_id,amenity)
)";
$results = mysql_query($amenity)
or die(mysql_error());


$vendor_order = "CREATE TABLE `vendor_order` (
 `U_id` bigint(100) NOT NULL,
 `S_id` bigint(100) NOT NULL,
 `Ven_Oid` bigint(100) NOT NULL AUTO_INCREMENT,
 `order_contact` bigint(10) NOT NULL,
 `Bike` varchar(255) NOT NULL,
 `exp_aapt_dt` datetime NOT NULL,
 `order_time` datetime NOT NULL,
 `final_aapt_dt` datetime NOT NULL,
 `view_status` tinyint(1) NOT NULL DEFAULT '1',
 `o_stat` varchar(255) NOT NULL,
 `email` varchar(255) NOT NULL,
 `serv_adv` varchar(255) DEFAULT 'No Advice!!',
 `inv_url` varchar(100) DEFAULT 'not_uploaded.html',
 `area` varchar(100) NOT NULL,
 PRIMARY KEY (`Ven_Oid`)
)";

$results = mysql_query($vendor_order) or die (mysql_error());

$order_det = "CREATE TABLE order_det (
O_id int(100) NOT NULL,
Ven_oid int(100) NOT NULL,
order_cat varchar(255) NOT NULL,
order_desc varchar(255) NOT NULL, 
req_det varchar(255) NOT NULL,
Primary Key(O_id)
)";
$results = mysql_query($order_det)
or die(mysql_error());


$prices = "CREATE TABLE prices (
S_id int(100) NOT NULL,
item_name varchar(255) NOT NULL,
price int(100) NOT NULL,
Primary Key(S_id,item_name)
)";
$results = mysql_query($prices)
or die(mysql_error());

$area = "CREATE TABLE area (
area varchar(255) NOT NULL Unique,
lati FLOAT(9,6) NOT NULL,
longi FLOAT(9,6) NOT NULL,
Primary Key(area)
)";
$results = mysql_query($area)
or die(mysql_error());

$rating = "CREATE TABLE rating (
S_id varchar(255) NOT NULL Unique,
rate_1 int(100) NOT NULL,
rate_2 int(100) NOT NULL,
rate_3 int(100) NOT NULL,
rate_4 int(100) NOT NULL,
rate_5 int(100) NOT NULL,
rate_avg int(100) NOT NULL,
Primary Key(S_id)
)";
$results = mysql_query($rating)
or die(mysql_error());





echo "Database successfully created!";
?>
