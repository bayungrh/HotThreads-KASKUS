
<!DOCTYPE html>
<html>
<head>
	<title>KASKUS Hot Threads</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

    <!-- CSS -->
		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<style type="text/css">
		body { margin:30px auto; }
		.head-title {color: #555555;border-left: solid 5px #D63D2C; padding-left: 17px; margin-bottom: 30px;}
		img { transition: all 0.9s; -webkit-filter: grayscale(90%); filter: grayscale(90%); }
		img:hover { transition: all 0.9s; -webkit-filter: grayscale(0%); filter: grayscale(0%); }
		.thumbnail {height: 350px;}
		#image { position: relative; left: 0;top: 0;}
		#text { z-index: 100; position: absolute; color: white; font-size: 24px; font-weight: bold; background: rgba(0,0,0,0.5); padding-left: 20px; left: 20px; font-size: 22pt; top: 40%; width: 50%; }
	</style>
	<!-- / -->
</head>
<body>

<div class="container">
	<h1 class="head-title">Hot Threads KASKUS</h1>
		<div class="row">
<?php
// ------------- DATA
	$get 	= 	file_get_contents("http://bayyu.cf/api/kaskus-hot-threads");
	$data 	= 	json_decode($get, true);
// ---------------------

	foreach ($data['hot_threads'] as $key => $HT) { 
		$posisi =	$HT['urutan'];
		$judul 	= 	$HT['judul'];
		$link 	= 	$HT['link'];
		$img 	= 	$HT['img'];
?>

  <div class="col-md-6">
  	<a href="<?php echo $link; ?>" target="_blank">
    	<div class="thumbnail">
      		<img id="image" src="<?php echo $img; ?>">
      		<p id="text"><?php echo '#' . $posisi; ?></p>

      		<div class="caption">
        		<h3><?php echo $judul; ?></h3>
        	</div>
    	</div>
  	</a>
  </div>

<?php
	}
?>
		</div> <!-- row -->
</div> <!-- container -->

<div class="footer">
	<div class="container"><p style="color:#A3A3A3;">by MBN</p></div>
</div>
</body>
</html>