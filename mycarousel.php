<div id="myCarousel" class="carousel hidden-sm slide" data-interval="3000">

	<ol class="carousel-indicators">
		<?php
			require_once("connection.php");
			$query = "select *from carousel";
			$rs = mysql_query($query);
			$row = mysql_num_rows($rs);
			for($count = 0;$count < $row;$count++){
				if($count == 0){
					echo "<li data-target=\"#myCarousel\" data-slide-to=\"{$count}\" class=\"active\"></li>";
				}else{
					echo "<li data-target=\"#myCarousel\" data-slide-to=\"{$count}\"></li>";
				}
			}
			
		?>
	</ol><!-- carousel-indicators -->

	<section class="carousel-inner">
			<?php
			$query = "select *from carousel";
			$rs = mysql_query($query);
			$flag = true;
			while ($row=mysql_fetch_array($rs)) {
				if($flag==true){
					echo "<div class=\"active item\"><img src=\"uploads/carousel/{$row[0]}.jpg\" alt=\"IEEE Events\"></div>";
					$flag = false;
				}else{
					echo "<div class=\"item\"><img src=\"uploads/carousel/{$row[0]}.jpg\" alt=\"IEEE Events\"></div>";
				}
				# code...
			}
				
		?>
		
	</section><!-- carousel-inner -->

	<a href="#myCarousel" class="left carousel-control" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
	<a href="#myCarousel" class="right carousel-control" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
</div><!-- myCarousel -->