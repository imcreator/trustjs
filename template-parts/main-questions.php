<div id="questions">
	
	<header>
		<h1>Ostatnie:</h1>
		<button>Dodaj pytanie</button>
	</header>

	<?php while ( have_posts() ) : the_post(); ?>

		<div class="question">
			<h3>
				<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
			</h3>
			
			<?php
				$tags = wp_get_post_tags( $post->ID );
				$html = '<div class="post_tags">';
				foreach ( $tags as $tag ) {
					if( $tags ) {
						$tag_link = get_tag_link( $tag->term_id );
								
						$html .= "<a href='{$tag_link}' title='{$tag->name} Tag' class='{$tag->slug}'>";
						$html .= "{$tag->name}</a>";
					}
				}
				$html .= '</div>';
				echo $html;
			?>
			
			<div class="info">
				<span class="author">Zapytane przez: <a href=""><?php the_author(); ?></a>
				<span class="data">Dodano: <a href=""><?php echo human_time_diff( get_the_time('U'), current_time('timestamp') ) . ' temu'; ?></a></span>
			</div>
		</div>

	<?php endwhile; ?>

</div>