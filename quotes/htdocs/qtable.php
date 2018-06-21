<?php
   class MyDB extends SQLite3 {
      function __construct() {
         $this->open('boywigh.quote');
      }
   }
   $db = new MyDB();
   if(!$db) {
      echo $db->lastErrorMsg();
   } else {
      echo "Opened database successfully\n";
   }
   
   $tablename="BOYWIGH_QUOTES";

   $sql =<<<EOF
      CREATE TABLE $tablename
      (ID INTEGER PRIMARY KEY AUTOINCREMENT,
      QUOTES          CHAR(120)    NOT NULL,
      QBY            CHAR(25)    NOT NULL,
      QSOURCE        CHAR(25),
      QTAGS         CHAR(25),
      UNIQUE (QUOTES COLLATE NOCASE));
EOF;

   $ret = $db->exec($sql);
   if(!$ret){
      echo $db->lastErrorMsg();
   } else {
      echo "Table created successfully\n";
   }
   $db->close();
?>
