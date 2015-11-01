all:
	g++ -Wall -Wshadow -g -o mysql mysql.cpp mysqlmain.cpp -L/usr/include/mysql -lmysqlclient -I/usr/include/mysql
