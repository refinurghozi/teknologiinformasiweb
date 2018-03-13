/* Create Database and Table */
create database crud_db2;
 
use crud_db2;
 
CREATE TABLE `users` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(100),
  `subject` varchar(50),
  `komentar` varchar(140),
  PRIMARY KEY  (`id`)
);
