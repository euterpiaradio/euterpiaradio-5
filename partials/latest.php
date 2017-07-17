<div id="latest" class="container">
	<div class="row">
		<div class=" col-xs-12">
			<div class="image" style="background-image: url('<?php the_post_thumbnail_url(); ?>'); ">

			</div>
		</div>
		<div class="col-xs-12">
			<article>
				<header><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></header>
				<div class="content">
					<?php the_content(); ?>
				</div>
			</article>
		</div>
	</div>
</div>