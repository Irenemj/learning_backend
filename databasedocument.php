student@student-HP-14-Notebook-PC:~$ mysql -u root -p
Enter password: 
Welcome to the MySQL monitor.  Commands end with ; or \g.
Your MySQL connection id is 50
Server version: 5.5.43-0ubuntu0.14.04.1 (Ubuntu)

Copyright (c) 2000, 2015, Oracle and/or its affiliates. All rights reserved.

Oracle is a registered trademark of Oracle Corporation and/or its
affiliates. Other names may be trademarks of their respective
owners.

Type 'help;' or '\h' for help. Type '\c' to clear the current input statement.

mysql> show databases;
+--------------------+
| Database           |
+--------------------+
| information_schema |
| mysql              |
| performance_schema |
| shop               |
| test_app           |
+--------------------+
5 rows in set (0.00 sec)

mysql> CREATE DATABASE shop;
ERROR 1007 (HY000): Can't create database 'shop'; database exists
mysql> GRANT ALL PRIVILEGES ON shop.*
    -> TO 'shop_user'@'localhost'
    -> IDENTIFIED BY 'shop_secret';
Query OK, 0 rows affected (0.00 sec)

mysql> ^CCtrl-C -- exit!
Aborted
student@student-HP-14-Notebook-PC:~$ mysql -u shop_user -p shop
Enter password: 
Welcome to the MySQL monitor.  Commands end with ; or \g.
Your MySQL connection id is 51
Server version: 5.5.43-0ubuntu0.14.04.1 (Ubuntu)

Copyright (c) 2000, 2015, Oracle and/or its affiliates. All rights reserved.

Oracle is a registered trademark of Oracle Corporation and/or its
affiliates. Other names may be trademarks of their respective
owners.

Type 'help;' or '\h' for help. Type '\c' to clear the current input statement.

mysql> SHOW TABLES;
Empty set (0.00 sec)

mysql> CREATE TABLE `products` (
    ->  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
    ->  `item` varchar(255) NOT NULL DEFAULT '',
    ->  `price` varchar(255) NOT NULL DEFAULT '',
    ->  `created` date NOT NULL DEFAULT '0000-00-00',
    ->  PRIMARY KEY (`id`)
    -> ) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
Query OK, 0 rows affected (0.12 sec)

mysql> show columns from products;
+---------+------------------+------+-----+------------+----------------+
| Field   | Type             | Null | Key | Default    | Extra          |
+---------+------------------+------+-----+------------+----------------+
| id      | int(10) unsigned | NO   | PRI | NULL       | auto_increment |
| item    | varchar(255)     | NO   |     |            |                |
| price   | varchar(255)     | NO   |     |            |                |
| created | date             | NO   |     | 0000-00-00 |                |
+---------+------------------+------+-----+------------+----------------+
4 rows in set (0.00 sec)

mysql> INSERT INTO`products` (`id`,`item`, `price`,`created`) VALUES
    -> (1, 'mirror', 'kshs3000', '2015-06-26');
Query OK, 1 row affected (0.04 sec)

mysql> INSERT INTO`products` (`id`, `item`, `price`, `created`) VALUES
    -> (2, 'shoe', 'kshs4000', '2015-06-26');
Query OK, 1 row affected (0.04 sec)

mysql> INSERT INTO`products` (`id`, `item`, `price`, `created`) VALUES
    -> (3, 'TV', 'kshs25000', '2015-06-26');
Query OK, 1 row affected (0.06 sec)

mysql> select * FROM users;
ERROR 1146 (42S02): Table 'shop.users' doesn't exist
mysql> select * FROM products;
+----+--------+-----------+------------+
| id | item   | price     | created    |
+----+--------+-----------+------------+
|  1 | mirror | kshs3000  | 2015-06-26 |
|  2 | shoe   | kshs4000  | 2015-06-26 |
|  3 | TV     | kshs25000 | 2015-06-26 |
+----+--------+-----------+------------+
3 rows in set (0.00 sec)

mysql> select * FROM products ORDER BY id DESC;
+----+--------+-----------+------------+
| id | item   | price     | created    |
+----+--------+-----------+------------+
|  3 | TV     | kshs25000 | 2015-06-26 |
|  2 | shoe   | kshs4000  | 2015-06-26 |
|  1 | mirror | kshs3000  | 2015-06-26 |
+----+--------+-----------+------------+
3 rows in set (0.00 sec)

mysql> 

