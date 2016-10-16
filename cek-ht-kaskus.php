<?php
	$get  = file_get_contents("http://bayyu.cf/api/kaskus-hot-threads");
	$data = json_decode($get, true);

?>

<!DOCTYPE html>
<html>
<head>
	<title>KASKUS Hot Threads</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

    <!-- CSS -->
		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="style.css">
	<!-- / -->
</head>
<body>
    <div class="container">
    	<h1 class="head-title">Hot Threads KASKUS</h1>
    	<div class="row"> 
        <?php foreach ($data['hot_threads'] as $key => $HT) : ?>
             <?php $posisi =	$HT['urutan'] ?>
             <?php $judul  =	$HT['judul'] ?>
             <?php $link   =	$HT['link'] ?>
             <?php $img    =	$HT['img'] ?>
             <div class="col-md-6">
                 <a href="<?php echo $link; ?>" target="_blank">
                  	<div class="thumbnail">
                    	<img id="image" src="<?php echo $img ?>">
                    	<p id="text"><?php echo '#' . $posisi ?></p>
                         <div class="caption">
                      		<h3><?php echo $judul ?></h3>
                      	</div>
                  	</div>
                </a>
            </div>
        <?php endforeach ?>
    	</div> <!-- row -->
    </div> <!-- container --> 
    <div class="footer">
    	<div class="container"><p style="color:#A3A3A3;">by MBN</p></div>
    </div>
</body>
</html>
