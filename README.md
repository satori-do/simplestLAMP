# Simplest LAMP:
##Auto deploy templates:

- Clone web repository
- Clone devops repository
- Preparing credentials
- Running docker-compose up -d

##Creating and dumping DB:

- Preparing mysql client:
```
$ apt-get update
$ apt-get install mysql-client

$ mysql -h 172.18.0.2 -P 3306 -uroot -pmy_secret_pw_shh
```
```
> show databases;
> use test_db;

> CREATE TABLE Inventory (id INT, name NVARCHAR(50), quantity INT);

> INSERT INTO Inventory VALUES (1, 'banana', 150);
> INSERT INTO Inventory VALUES (2, 'orange', 154);
> INSERT INTO Inventory VALUES (3, 'ananas', 152);
> INSERT INTO Inventory VALUES (2, 'kivi', 158);
> SELECT * FROM Inventory WHERE quantity > 152;

> show tables;
> SELECT * FROM Inventory;
> quit;
```
```
$ mysqldump --all-databases -h 172.18.0.2 -P 3306 -uroot -pmy_secret_pw_shh > all_db_dump_file.sql
$ mysqldump --all-databases -h 172.18.0.2 -P 3306 -uroot -pmy_secret_pw_shh > all_db_dump_file_$(date +%Y%m%d).sql
```

```
$ mysqld  database_name < file.sql
$ mysqld  test_db < all_db_dump_file.sql
```
