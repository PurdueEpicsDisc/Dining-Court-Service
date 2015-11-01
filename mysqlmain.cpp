#include "mysql.h"
#include <stdlib.h>
#include <iostream>

using namespace std;

int main(int argc, char **argv){
  Database database;
  database.Select_from_tables();
  return EXIT_SUCCESS;
}
