<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>boywigh.ml : the site</title>

    <meta name="description" content="boywigh.ml is the site of the boywigh">
    <meta name="author" content="boywigh">

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
<link rel="apple-touch-icon" sizes="57x57" href="images/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="images/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="images/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="images/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="images/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="images/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="images/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="images/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="images/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="images/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="images/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="images/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="images/favicon-16x16.png">
<link rel="manifest" href="/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="images/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">

  </head>
  <body>
	  <br>
	  <br>
    <div class="container-fluid">
	<div class="row">
		<div class="col-md-2">
		</div>
		<div class="col-md-2">
			<img alt="rorschach the boywigh's logo" src="images/log.png" height=140 width=140 class="img-circle">
		</div>
		<div class="col-md-6">
			<div class="page-header">
				<h1>
					boywigh.ml <small>the site</small>
				</h1><a class="btn btn-primary btn-large pull-right" href="index.php">Home</a>
			</div>
		</div>
		<div class="col-md-2">
		</div>
	</div>
	<br>
	<div class="row">
		<div class="col-md-2">
		</div>
		<div class="col-md-8">
			<form class="form-horizontal" action="qadd.php" method="post">
<fieldset>

<!-- Form Name -->
<legend>Add New</legend>

<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="quote">Quote *</label>
  <div class="col-md-4">                     
    <textarea class="form-control" id="quote" name="quote" maxlength="120" placeholder="quote" required=""></textarea>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="qby">By *</label>  
  <div class="col-md-4">
  <input id="qby" name="qby" type="text" placeholder="your name" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="qsource">Source *</label>  
  <div class="col-md-4">
  <input id="qsource" name="qsource" type="text" placeholder="source" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="qtags">Tags *</label>  
  <div class="col-md-4">
  <input id="qtags" name="qtags" type="text" placeholder="tags" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="submit"></label>
  <div class="col-md-4">
    <button id="submit" name="submit" class="btn btn-primary">Submit</button>
  </div>
</div>

</fieldset>
</form>

		</div>
		<div class="col-md-2">
		</div>
	</div>
	<div class="row">
		<div class="col-md-2">
		</div>
		<div class="col-md-8">
			<blockquote>
				<p>
					
					
					<?php
   class MyDB extends SQLite3 {
      function __construct() {
         $this->open('boywigh.quote');
      }
   }
   
   $db = new MyDB();
   if(!$db){
      echo $db->lastErrorMsg();
   }
   
 $sql =<<<EOF
      SELECT * from BOYWIGH_QUOTES;
EOF;

   $ret = $db->query($sql);
  $row = $ret->fetchArray(SQLITE3_ASSOC);
      echo $row['QUOTES'].'</p> <small>'.$row['QBY'].' <cite>Source Title : '.$row['QSOURCE'];
       $db->close();
?>
					
					
					
				</cite></small>
			</blockquote>
		</div>
		<div class="col-md-2">
		</div>
	</div>
</div>

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
  </body>
</html>
