<?php
   class MyDB extends SQLite3 {
      function __construct() {
         $this->open('boywigh.quote');
      }
   }
   
   $db = new MyDB();
   if(!$db){
      echo $db->lastErrorMsg();
   } else {
      echo "Opened database successfully<br>";
   }
   
   $tablename="BOYWIGH_QUOTES";
   
   if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["quote"])) {
	$quote = test_input($_POST["quote"]);
	$qby = test_input($_POST["qby"]);
	$qsource = test_input($_POST["qsource"]);
	$qtags = test_input($_POST["qtags"]);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

   $sql =<<<EOF
      INSERT INTO $tablename (QUOTES,QBY,QSOURCE,QTAGS)
      VALUES ('$quote', '$qby', '$qsource', '$qtags' );
EOF;

   $ret = $db->exec($sql);
   if(!$ret) {
      echo $db->lastErrorMsg();
   } else {
      echo "Records created successfully\n";
   }
   $db->close();
   header('Location: index.php');
?>
