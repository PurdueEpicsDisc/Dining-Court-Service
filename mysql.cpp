#include <iostream>
#include <stdlib.h> //"exit(), EXIT_FAILURE"
#include "mysql.h"

Database::Database() {
  //Print current instance
  cout << endl << "Database::Database()" << endl;

  //Store default database parameters
  server = "mysql.ecn.purdue.edu";
  user = "epics_dining";
  password = "raspberry";
  database = "epics_dining";

  //Connect to MySQL database
  cout << "mysql_init" << endl;
  connection_pointer = mysql_init(NULL);

  if(!connection_pointer){
    cout << "MySQL Initialization failed";
    exit(EXIT_FAILURE);
  }

  connection_pointer = mysql_real_connect(connection_pointer, server, user, password, database, 0, NULL, 0);

  if(!connection_pointer){
    cout << "Error connecting to " << database << " database" << endl;
    cout << mysql_error(connection_pointer) << endl;
    exit(EXIT_FAILURE);
  }else{
    cout << "Connection to " << database << " database succeeded!" << endl;
  }
  
}

Database::~Database(){
  //Print current instance
  cout << endl << "Database::~Database()" << endl;

  //Close connection to MySQL database
  cout << "mysql_close" << endl;

  if(connection_pointer){
    mysql_close(connection_pointer);
    cout << "Connection to " << database << " database is closed!" << endl << endl;
  }
}

void Database::Select_from_tables(){
  int query_status = 1;
 
  //query_status is zero if query succeeded
  query_status = mysql_query(connection_pointer, "SELECT * FROM User;"); 

  if(query_status){ //query failed
    cout << endl << "'SELECT *' query failed" << endl;
    cout << mysql_error(connection_pointer) << endl;
  }else{ //query succeeded
    
    unsigned long *lengths;
    result = mysql_store_result(connection_pointer);
    num_fields = mysql_num_fields(result);
    
    while((row = mysql_fetch_row(result))){
      lengths = mysql_fetch_lengths(result);
      cout << endl;
      for(i = 0; i < num_fields; i++){
    	cout.width(lengths[i]);
    	cout << (row[i] ? row[i] : "NULL") << '\t';

      }
    }
    cout << endl;
    mysql_free_result(result);
  }
  
}
