<?php theme_include('header'); ?>

<div id="home-main">
	<div id="post-area"
		class="post-25462 post type-post status-publish format-standard has-post-thumbnail hentry category-quotes tag-dr-wayne-w-dyer tag-inspirational-quotes tag-wayne-dyer tag-wayne-dyer-quotes tag-wayne-quotes tag-wayne-w-dyer">
		<div id="content-area">
			<div class="post-image">
				<img width="620" height="410"
					src="http://addicted2success.com/wp-content/uploads/2014/07/Wayne-Dyer-Quotes.jpg"
					class="attachment-full wp-post-image" alt="Wayne Dyer Quotes" />
				<h1><?php echo article_title(); ?></h1>

				<article>
				<?php echo article_markdown(); ?>
			</article>

				<section class="footnote">
					<!-- Unfortunately, CSS means everything's got to be inline. -->
					<p>This article is my <?php echo numeral(total_articles()); ?> oldest. It is <?php echo count_words(article_markdown()); ?> words long<?php if(comments_open()): ?>, and it’s got <?php echo total_comments() . pluralise(total_comments(), ' comment'); ?> for now.<?php endif; ?> <?php echo article_custom_field('attribution'); ?></p>
				</section>


			</div>
		</div>
		<?php if(comments_open()): ?>
		<div class="home-widget" style="margin: 40px 0px 10px 40px;">
			<span class="home-widget-header"><h3 class="home-widget-header">Post
					Comments</h3></span>
		</div>
		<div id="respond" class="us_wrapper">
		<?php if(has_comments()): ?>
			<ul class="commentlist">
				<?php $i = 0; while(comments()): $i++; ?>
				<li class="comment" id="comment-<?php echo comment_id(); ?>">
					<div class="comment_list">
					<img alt="" src="../../images/comment_profile.jpg" style="float: left;">
						<h2><strong><?php echo comment_name(); ?></strong></h2>
						<p><time><?php echo relative_time(comment_time()); ?></time></p>

						<div class="content"><P>
							<?php echo comment_text(); ?></P>
						</div>
					</div>
				</li>
				<?php endwhile; ?>
			</ul>
			<?php endif; ?>
			<form id="comment" class="commentform" method="post"
				action="<?php echo comment_form_url(); ?>#comment">
				<?php echo comment_form_notifications(); ?>

				<p class="name">
					<?php echo comment_form_input_name('placeholder="Your name"'); ?>
				</p>

				<p class="email">
					<?php echo comment_form_input_email('placeholder="Your email (won’t be published)"'); ?>
				</p>

				<p class="textarea">
					<?php echo comment_form_input_text('placeholder="Your comment"'); ?>
				</p>

				<p class="submit">
					<?php echo comment_form_button(); ?>
				</p>
			</form>

		</div>
		<?php endif;?>
	</div>

</div>




<?php theme_include('footer'); ?>