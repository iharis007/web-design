<div id="myCarousel" class="carousel hidden-sm slide" data-interval="3000">

	<ol class="carousel-indicators">
		<?php
			require_once("connection.php");
			$query = "select *from carousel";
			$rs = mysql_query($query);
			while($row = mysql_fetch_array($rs)){
				if($row[0] == 1){
					echo "<li data-target=\"#myCarousel\" data-slide-to=\"{$row[0]}\" class=\"active\"></li>";
				}else{
					echo "<li data-target=\"#myCarousel\" data-slide-to=\"{$row[0]}\"></li>";
				}
			}
		?>
	</ol><!-- carousel-indicators -->

	<section class="carousel-inner">
		<?php
			$query = "select *from carousel";
			$rs = mysql_query($query);
			while($row = mysql_fetch_array($rs)){
				if($row[0] == 1){
					echo "<div class=\"item active\"><img src=\"../../../uploads/carousel/{$row[0]}.jpg\" alt="IEEE Events">
		</div>"
				}else{
					echo "<div class=\"item\"><img src=\"../../../uploads/carousel/{$row[0]}.jpg\" alt="IEEE Events"></div>";
				}
			}
		?>
		
	</section><!-- carousel-inner -->

	<a href="#myCarousel" class="left carousel-control" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
	<a href="#myCarousel" class="right carousel-control" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
</div><!-- myCarousel -->