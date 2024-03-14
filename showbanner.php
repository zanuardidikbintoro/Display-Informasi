<?
include "koneksi.php";
$sql=mysql_query("select * from gambar order by id asc");
//$gambar=mysql_fetch_array($sql);
//echo "gambar=$gambar[3]";
?>
		<link rel="stylesheet" href="demo.css" type="text/css"/>
		
		<script src="src/fastclick.js"></script>
		<script src="jquery.js"></script>
		<script src="src/jquery.easyfader.js"></script>
		<script src="src/jquery.easyfader.slide.js"></script>
		<script src="src/jquery.easyfader.carousel.js"></script>
		<script src="src/jquery.easyfader.swipe.js"></script>
		<script>
			$(function(){
				FastClick.attach(document.body);
				
				$('#Carousel').easyFader({
					effect: 'carousel',
					effectDur: 10
				});
				$('#Fader').easyFader({
					autoCycle: true,
					
				});
				$('#Slider').easyFader({
					effect: 'slide',
					autoCycle: true
				});
			});
		</script>
	</head>
	<body>
	
		<div id="Fader" class="fader">
			<div class="wrapper">
				<? while($gambar=mysql_fetch_array($sql)){
					
					
					?>
                
                <img class="slide" src="banner/<?=$gambar[2];?>"/>
				<? } ?>
            </div>
		   
		</div>
	</body>
</html>