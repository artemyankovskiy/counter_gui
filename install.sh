#!/bin/sh
chmod 777 cache
chmod 777 log

echo -n "Database name[db]: "
read dbname

echo -n "Database user[root]: "
read dbuser

echo -n "Database password[Password]: "
read dbpassword

echo -n "Mysql socket path[/var/run/mysql/mysql.sock]: "
read mysqlsock

if test -z $dbname
then
    dbname=db
fi

if test -z $dbuser
then
    dbuser=root
fi

if test -z $password
then
    dbpassword=Password
fi

if test -z $mysqlsock
then
    mysqlsock=/var/run/mysql/mysql.sock
fi


echo "DROP DATABASE IF EXISTS $dbname" | mysql -u$dbuser -p$dbpassword
echo "CREATE SCHEMA $dbname DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci" | mysql -u$dbuser -p$dbpassword
./symfony cache:clear
./symfony configure:database "mysql:unix_socket=$mysqlsock;dbname=$dbname" $dbuser $dbpassword
echo y | ./symfony doctrine:build --all --and-load
