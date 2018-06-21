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

  <meta property="og:url"           content="http://boywigh.ga/" />
  <meta property="og:type"          content="website" />
  <meta property="og:title"         content="boywigh.ga : the site" />
  <meta property="og:description"   content="quotes by you for you" />
  <meta property="og:image"         content="http://boywigh.ga/images/log.png" />

  </head>
  <body>
	  	  <div class="fb-quote"></div>
	  <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.9&appId=1028922660494188";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

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
				</h1>
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
			<div class="alert alert-dismissable alert-danger">
				 
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">
					×
				</button>
				<h4>
					Alert!
				</h4> <strong>Warning!</strong> Ready for adventure..... <a href="http://quotes.boywigh.ga/" class="alert-link">check out</a>
			</div>
		</div>
		<div class="col-md-2">
		</div>
	</div>
	<div class="row">
		<div class="col-md-2">
		</div>
		<div class="col-md-8">
			<div class="jumbotron">
				<h2>
					Oh! Hello there,,
				</h2>
				<p>
					You really wanna read something then you're at the wrong place. I'm gonna tell you where to go, click on the Next button to start.
				</p>
				<p>
					<a class="btn btn-primary btn-large" href="http://quotes.boywigh.ga/">Next</a>
				</p>
			</div>
		</div>
		<div class="col-md-2">
		</div>
	</div>
	<div class="row">
		<div class="col-md-2">
		</div>
		<div class="col-md-8">
			<blockquote>
				<p><?php
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
?></cite></small>
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
