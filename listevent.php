<?php require_once("constants.php"); ?>
<?php require_once("connection.php"); ?>
<section class="artistlist">
	<div id="artistindex" class="row">
		
		<section class="scrollspy clearfix col col-lg-4 hidden-sm">
			<ul class="nav nav-list affix">
			<?php
			$query = "select *from events";
			$rs = mysql_query($query);
				while($row = mysql_fetch_array($rs)){
					echo "<li><a href=\"#"."{$row[0]}\"><span class=\"glyphicon glyphicon-user\"></span>"."{$row[1]}"."</a></li>";
				}
			?>
			</ul><!-- nav-list -->
		</section><!-- scrollspy -->
<section class="artistinfo col col-lg-8">
	<?php
		$query = "select *from events";
		$rs = mysql_query($query);
				while($row = mysql_fetch_array($rs)){
					echo "<article id=\"{$row[0]}\" class=\"media\">"
						."<h2>{$row[1]}</h2>"
						."<img class=\"pull-left img-rounded\" src=\"uploads/events/{$row[0]}.jpg\" alt=\"Photo of {$row[1]}\">"
						."<div class=\"media-body\">"
						."<p>{$row[2]}</p>"
						."</div>"
						."</article>";
				}
			?>
			
		</section><!-- artistinfo -->
	</div><!-- artistindex -->
</section><!-- artistlist -->