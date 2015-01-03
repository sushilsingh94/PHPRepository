<?php theme_include('header'); ?>


		<div id="main">
			<div id="featured-main">
			<?php  $values =Post::get_posts() ; ?>
				<div class="main-story">
					<a
						href="http://addicted2success.com/success-advice/how-to-achieve-more-by-intentionally-doing-less/"
						rel="bookmark"><div class="main-story-shade">
							<img width="620" height="410"
								src="./Quotes   Motivation   Inspiration - Addicted 2 Success_files/Intentionally-Doing-Less-To-Achieve-More-In-Life.jpg"
								class="attachment-full wp-post-image"
								alt="Intentionally Doing Less To Achieve More In Life">
						</div>
						<div class="main-text">
						<?php echo $value = $values->current();?>
							<h1><?php echo $value->data['title'];?></h1>
							<span class="main-byline"><?php echo $value->data['author_name'];?></span>
							<div class="main-excerpt">
								<p><?php echo $value->data['html'];?>...</p>
							</div>
						</div>
						<div class="comment-bubble">
							<span class="comment-count"><?php echo $value->data['comments'];?></span>
						</div> </a>
				</div>
				<div class="sub-story">
					<a
						href="http://addicted2success.com/life/7-ludicrous-lies-you-keep-telling-yourself/"
						rel="bookmark"> <img width="240" height="225"
						src="./Quotes   Motivation   Inspiration - Addicted 2 Success_files/suit-business-man-success-240x225.jpg"
						class="attachment-square-thumb wp-post-image"
						alt="suit business man success">
						<div class="sub-text">
						<?php $values->next();?>
						<?php $value=$values->current();?>
							<h2><?php echo $value->data['title'];?></h2>
							<p><?php echo $value->data['html'];?>...</p>
						</div>
						<div class="comment-bubble">
							<span class="comment-count"><?php echo $value->data['comments'];?></span>
						</div>
					</a>
				</div>
				<div class="sub-story">
					<a
						href="http://addicted2success.com/success-advice/8-ways-to-become-a-best-selling-author-with-your-first-book/"
						rel="bookmark"> <img width="240" height="225"
						src="./Quotes   Motivation   Inspiration - Addicted 2 Success_files/Charlene-Barry-Self-Publishing-Best-Selling-Author-240x225.jpg"
						class="attachment-square-thumb wp-post-image"
						alt="Charlene Barry - Self Publishing Best Selling Author">
						<div class="sub-text">
						<?php $values->next();?>
						<?php $value=$values->current();?>
							<h2><?php echo $value->data['title'];?></h2>
							<p><?php echo $value->data['html'];?>...</p>
						</div>
						<div class="comment-bubble">
							<span class="comment-count"><?php echo $value->data['comments'];?></span>
						</div>
					</a>
				</div>
				<div class="sub-story">
					<a
						href="http://addicted2success.com/success-advice/7-transformational-lessons-from-the-philosophy-of-success/"
						rel="bookmark"> <img width="240" height="225"
						src="./Quotes   Motivation   Inspiration - Addicted 2 Success_files/Marcus-Aurelius-Stoicism-Philosophy-and-Success-240x225.jpeg"
						class="attachment-square-thumb wp-post-image"
						alt="Marcus Aurelius Stoicism Philosophy and Success">
						<div class="sub-text">
						<?php $values->next();?>
						<?php $value=$values->current();?>
							<h2><?php echo $value->data['title'];?></h2>
							<p><?php echo $value->data['html'];?>...</p>
						</div>
						<div class="comment-bubble">
							<span class="comment-count"><?php echo $value->data['comments'];?></span>
						</div>
					</a>
				</div>
				<div class="sub-story">
					<a
						href="http://addicted2success.com/quotes/50-of-the-worlds-best-quotes-for-you-to-live-by/"
						rel="bookmark"> <img width="240" height="225"
						src="./Quotes   Motivation   Inspiration - Addicted 2 Success_files/50-Best-Quotes-to-Live-By-240x225.jpg"
						class="attachment-square-thumb wp-post-image"
						alt="50 Best Quotes to Live By">
						<div class="sub-text">
						<?php $values->next();?>
						<?php $value=$values->current();?>
							<h2><?php echo $value->data['title'];?></h2>
							<p><?php echo $value->data['html'];?>...</p>
						</div>
						<div class="comment-bubble">
							<span class="comment-count"><?php echo $value->data['comments'];?></span>
						</div>
					</a>
				</div>
				<?php ?>
			</div>
			<div id="content-wrapper">
				<div id="home-main">
					<div id="home-left">
						<?php if(has_posts()): ?>
							<ul>

							<li class="home-widget"><span class="home-widget-header"><h3
										class="home-widget-header">Success Advice</h3></span>
								<div class="cat-light-bottom cat-light-links">

									<ul>
										<?php $i = 0; while(posts()): ?>
										<?php $bg = sprintf('background: hsl(215, 28%%, %d%%);', round(((++$i / posts_per_page()) * 20) + 20)); ?>
											<li><a href="<?php echo article_url(); ?>"><img width="85"
												height="54"
												src="./Quotes   Motivation   Inspiration - Addicted 2 Success_files/Intentionally-Doing-Less-To-Achieve-More-In-Life-85x54.jpg"
												class="attachment-small-thumb wp-post-image"
												alt="<?php echo article_title(); ?>"></a> <span
											class="list-byline"><a href="#"
												title="<?php echo article_author('real_name'); ?>"
												rel="author"><?php echo article_author('real_name'); ?></a>
												| August 14, 2014</span>
											<p>
												<a href="<?php echo article_url(); ?>"><?php echo article_title(); ?></a>
											</p></li>
												<?php endwhile; ?>
										</ul>

								</div></li>
							<li class="home-widget"><span class="home-widget-header"><h3
										class="home-widget-header">Quotes</h3></span>
								<div class="cat-light-bottom cat-light-links">
									<ul>
										<?php $i = 0; while(posts()): ?>
										<?php $bg = sprintf('background: hsl(215, 28%%, %d%%);', round(((++$i / posts_per_page()) * 20) + 20)); ?>
											<li><a href="<?php echo article_url(); ?>"><img width="85"
												height="54"
												src="./Quotes   Motivation   Inspiration - Addicted 2 Success_files/Intentionally-Doing-Less-To-Achieve-More-In-Life-85x54.jpg"
												class="attachment-small-thumb wp-post-image"
												alt="<?php echo article_title(); ?>"></a> <span
											class="list-byline"><a href="#"
												title="<?php echo article_author('real_name'); ?>"
												rel="author"><?php echo article_author('real_name'); ?></a>
												| August 14, 2014</span>
											<p>
												<a href="<?php echo article_url(); ?>"><?php echo article_title(); ?></a>
											</p></li>
												<?php endwhile; ?>
										</ul>
								</div></li>
							<li class="home-widget"><span class="home-widget-header"><h3
										class="home-widget-header">Motivation</h3></span>
								<div class="category-dark">
									<div class="cat-dark-top">
										<a
											href="http://addicted2success.com/motivation/8-ways-to-increase-your-mental-strength/">
											<img width="620" height="410"
											src="./Quotes   Motivation   Inspiration - Addicted 2 Success_files/spartan-strength-and-mental-toughness.jpg"
											class="attachment-full wp-post-image"
											alt="spartan strength and mental toughness">
											<div class="cat-dark-text">
												<span class="cat-dark-byline">By Joel Brown</span>
												<h2>8 Ways To Increase Your Mental Strength</h2>
												<p>Editor’s Note: Wanha from Reddit, shares his advice on
													what it takes to increase mental toughness. I’ve always
													been fascinated with mental toughness and athletes who
													possess it, and...</p>
											</div>
										</a>
									</div>
									<div class="cat-dark-bottom">
										<ul>
											<li><a
												href="http://addicted2success.com/motivation/why-kobe-bryants-work-ethic-is-so-untouchable/"><img
													width="85" height="54"
													src="./Quotes   Motivation   Inspiration - Addicted 2 Success_files/Kobe-Bryant-Hard-Work-and-Dedication-85x54.jpg"
													class="attachment-small-thumb wp-post-image"
													alt="Kobe Bryant Hard Work and Dedication"></a> <span
												class="list-byline"><a
													href="http://addicted2success.com/author/Joel/"
													title="Posts by Joel Brown" rel="author">Joel Brown</a> |
													July 24, 2014</span>
												<p>
													<a
														href="http://addicted2success.com/motivation/why-kobe-bryants-work-ethic-is-so-untouchable/">Why
														Kobe Bryant’s Work Ethic Is So Untouchable</a>
												</p></li>
											<li><a
												href="http://addicted2success.com/motivation/motivational-video-how-to-be-limitless/"><img
													width="85" height="54"
													src="./Quotes   Motivation   Inspiration - Addicted 2 Success_files/Be-Limitless-Motivational-Video-Gravity-85x54.jpg"
													class="attachment-small-thumb wp-post-image"
													alt="Be Limitless Motivational Video Gravity"></a> <span
												class="list-byline"><a
													href="http://addicted2success.com/author/Joel/"
													title="Posts by Joel Brown" rel="author">Joel Brown</a> |
													July 19, 2014</span>
												<p>
													<a
														href="http://addicted2success.com/motivation/motivational-video-how-to-be-limitless/">(Motivational
														Video) – How To Be Limitless!</a>
												</p></li>
											<li><a
												href="http://addicted2success.com/motivation/16-motivational-post-it-notes-on-trains/"><img
													width="85" height="54"
													src="./Quotes   Motivation   Inspiration - Addicted 2 Success_files/Awesome-Motivational-Saying-Post-it-Note-85x54.jpg"
													class="attachment-small-thumb wp-post-image"
													alt="Awesome Motivational Saying Post it Note"></a> <span
												class="list-byline"><a
													href="http://addicted2success.com/author/Joel/"
													title="Posts by Joel Brown" rel="author">Joel Brown</a> |
													July 11, 2014</span>
												<p>
													<a
														href="http://addicted2success.com/motivation/16-motivational-post-it-notes-on-trains/">16
														Motivational Post-It Notes On Trains</a>
												</p></li>
										</ul>
									</div>
								</div></li>
							<li class="home-widget"><span class="home-widget-header"><h3
										class="home-widget-header">Life</h3></span>
								<div class="cat-light-bottom cat-light-links">
									<ul>
										<li><a
											href="http://addicted2success.com/life/7-ludicrous-lies-you-keep-telling-yourself/"><img
												width="85" height="54"
												src="./Quotes   Motivation   Inspiration - Addicted 2 Success_files/suit-business-man-success-85x54.jpg"
												class="attachment-small-thumb wp-post-image"
												alt="suit business man success"></a> <span
											class="list-byline"><a
												href="http://addicted2success.com/author/maxineschiffmann/"
												title="Posts by maxine schiffmann" rel="author">maxine
													schiffmann</a> | August 12, 2014</span>
											<p>
												<a
													href="http://addicted2success.com/life/7-ludicrous-lies-you-keep-telling-yourself/">7
													Ludicrous Lies You Keep Telling Yourself</a>
											</p></li>
										<li><a
											href="http://addicted2success.com/life/are-you-tired-of-living-with-regret-here-are-5-fixes-that-work/"><img
												width="85" height="54"
												src="./Quotes   Motivation   Inspiration - Addicted 2 Success_files/Lve-Life-with-no-more-regrets-smile-and-change-your-life-with-inspiration-85x54.jpg"
												class="attachment-small-thumb wp-post-image"
												alt="Live Life with no more regrets smile and change your life with inspiration"></a>
											<span class="list-byline"><a
												href="http://addicted2success.com/author/tonyrobinson/"
												title="Posts by Tony Robinson" rel="author">Tony Robinson</a>
												| July 22, 2014</span>
											<p>
												<a
													href="http://addicted2success.com/life/are-you-tired-of-living-with-regret-here-are-5-fixes-that-work/">Are
													You Tired of Living with Regret? Here are 5 Fixes That Work</a>
											</p></li>
										<li><a
											href="http://addicted2success.com/news/6-reasons-why-lebron-james-letter-is-actually-a-success-manifesto/"><img
												width="85" height="54"
												src="./Quotes   Motivation   Inspiration - Addicted 2 Success_files/Lebron-James-Success-Manifesto-85x54.jpg"
												class="attachment-small-thumb wp-post-image"
												alt="Lebron James Success Manifesto"></a> <span
											class="list-byline"><a
												href="http://addicted2success.com/author/jaredkleinert/"
												title="Posts by Jared Kleinert" rel="author">Jared Kleinert</a>
												| July 14, 2014</span>
											<p>
												<a
													href="http://addicted2success.com/news/6-reasons-why-lebron-james-letter-is-actually-a-success-manifesto/">6
													Reasons Why Lebron James Letter is Actually a Success
													Manifesto</a>
											</p></li>
										<li><a
											href="http://addicted2success.com/life/this-is-how-far-a-100-bill-can-go/"><img
												width="85" height="54"
												src="./Quotes   Motivation   Inspiration - Addicted 2 Success_files/SImple-Pickup-Gratitude-100-Bill-85x54.jpg"
												class="attachment-small-thumb wp-post-image"
												alt="SImple Pickup Gratitude $100 Bill"></a> <span
											class="list-byline"><a
												href="http://addicted2success.com/author/Joel/"
												title="Posts by Joel Brown" rel="author">Joel Brown</a> |
												July 9, 2014</span>
											<p>
												<a
													href="http://addicted2success.com/life/this-is-how-far-a-100-bill-can-go/">This
													is How Far A $100 Bill Can Go</a>
											</p></li>
									</ul>
								</div></li>
							<li class="home-widget"><span class="home-widget-header"><h3
										class="home-widget-header">Videos</h3></span>
								<div class="category-light">
									<div class="cat-light-top">
										<a
											href="http://addicted2success.com/motivation/video-discovering-your-own-dreams-being-your-own-hero/"><img
											width="620" height="410"
											src="./Quotes   Motivation   Inspiration - Addicted 2 Success_files/Motivation-from-Mateusz-M.jpg"
											class="attachment-full wp-post-image"
											alt="Motivation from Mateusz M"></a>
										<h2>
											<a
												href="http://addicted2success.com/motivation/video-discovering-your-own-dreams-being-your-own-hero/">(Video)
												Discovering Your Own Dreams &amp; Being Your Own Hero</a>
										</h2>
										<span class="list-byline"><a
											href="http://addicted2success.com/author/Joel/"
											title="Posts by Joel Brown" rel="author">Joel Brown</a> |
											July 3, 2014</span>
										<p>This motivational video created by Mateusz M is a goldmine
											of inspiration for all of those who are struggling right now
											to find their greatness. To face their fears...</p>
										<div class="comment-bubble">
											<span class="comment-count">6</span>
										</div>
									</div>
								</div></li>
						</ul>
							<?php endif; ?>
						</div>
					<div id="sidebar-small-wrapper">
						<ul>
							<li class="sidebar-small-widget"><h3 class="widget-buzz-header">The
									Latest</h3>
								<ul class="widget-buzz">
									<li><span class="buzz-byline">July 24, 2014</span>
										<h2>
											<a
												href="http://addicted2success.com/motivation/why-kobe-bryants-work-ethic-is-so-untouchable/">Why
												Kobe Bryant’s Work Ethic Is So Untouchable</a>
										</h2></li>
									<li><span class="buzz-byline">July 14, 2014</span>
										<h2>
											<a
												href="http://addicted2success.com/news/6-reasons-why-lebron-james-letter-is-actually-a-success-manifesto/">6
												Reasons Why Lebron James Letter is Actually a Success
												Manifesto</a>
										</h2></li>
									<li><span class="buzz-byline">June 30, 2014</span>
										<h2>
											<a
												href="http://addicted2success.com/news/video-why-elon-musk-is-such-a-rockstar-entrepreneur/">(Video)
												Why Elon Musk Is Such A Rockstar Entrepreneur</a>
										</h2></li>
									<li><span class="buzz-byline">June 24, 2014</span>
										<h2>
											<a
												href="http://addicted2success.com/news/timothy-sykes-gives-you-a-tour-of-his-15000-a-night-hotel-in-bora-bora/">Timothy
												Sykes Gives You A Tour Of His $15,000 A Night Hotel In Bora
												Bora</a>
										</h2></li>
									<li><span class="buzz-byline">June 9, 2014</span>
										<h2>
											<a
												href="http://addicted2success.com/news/the-top-8-digital-media-influencers-under-30/">(Infographic)
												The Top 8 Digital Media Influencers Under 30</a>
										</h2></li>
									<li><span class="buzz-byline">May 10, 2014</span>
										<h2>
											<a
												href="http://addicted2success.com/news/dr-dre-confirms-that-apple-is-looking-at-acquiring-beats-by-dre-for-3-2-billion/">Dr.Dre
												Confirms That Apple Is Looking At Acquiring Beats
												Electronics for $3.2 Billion</a>
										</h2></li>
									<li><span class="buzz-byline">January 26, 2014</span>
										<h2>
											<a
												href="http://addicted2success.com/news/10-underdog-brands-that-became-very-successful/">10
												Underdog Brands That Became Very Successful</a>
										</h2></li>
									<li><span class="buzz-byline">January 12, 2014</span>
										<h2>
											<a
												href="http://addicted2success.com/news/the-top-10-uk-entrepreneurs-britains-richest-and-wealthiest-entrepreneurs/">The
												Top 10 UK Entrepreneurs</a>
										</h2></li>
									<li><span class="buzz-byline">December 29, 2013</span>
										<h2>
											<a
												href="http://addicted2success.com/news/drake-explains-why-he-is-addicted-to-success/">(Video)
												Drake Explains Why He Is Addicted To Success</a>
										</h2></li>
									<li><span class="buzz-byline">December 21, 2013</span>
										<h2>
											<a
												href="http://addicted2success.com/news/10-reasons-why-50-cent-is-such-a-highly-successful-entrepreneur/">10
												Reasons Why 50 Cent Is Such A Highly Successful Entrepreneur</a>
										</h2></li>
									<li><span class="buzz-byline">October 7, 2013</span>
										<h2>
											<a
												href="http://addicted2success.com/news/lorna-janes-amazing-story-of-success/">Lorna
												Jane’s Amazing Story of Success</a>
										</h2></li>
									<li><span class="buzz-byline">September 17, 2013</span>
										<h2>
											<a
												href="http://addicted2success.com/news/apples-process-of-creative-innovation/">(Video)
												Apple’s Process of Creative Innovation</a>
										</h2></li>
								</ul></li>
						</ul>
					</div>
				</div>
				<div id="sidebar-wrapper">
					<ul>
						<li id="search-14" class="sidebar-widget widget_search"><form
								method="get" id="searchform"
								action="./Quotes   Motivation   Inspiration - Addicted 2 Success_files/Quotes   Motivation   Inspiration - Addicted 2 Success.htm">
								<input type="text" name="s" id="s" value="Search"
									onfocus="if (this.value == &quot;Search&quot;) { this.value = &quot;&quot;; }"
									onblur="if (this.value == &quot;&quot;) { this.value = &quot;Search&quot;; }">
								<input type="hidden" id="search-button">
							</form></li>
						<li id="text-79" class="sidebar-widget widget_text"><div
								class="textwidget">
								<div style="display: block;">
									<center>
										<img class="size-full wp-image-23415"
											alt="50-Ways-To-Stay-Awesomely-Motivated-Banner"
											src="./Quotes   Motivation   Inspiration - Addicted 2 Success_files/50-Ways-To-Stay-Awesomely-Motivated-Banner.jpg"
											width="250" height="187">
									</center>
								</div>
								<div style="margin-top: 20px;">
									<script type="text/javascript"
										src="./Quotes   Motivation   Inspiration - Addicted 2 Success_files/1676730304.js"></script>

									<form method="post" class="af-form-wrapper"
										accept-charset="iso-8859-1"
										action="http://www.aweber.com/scripts/addlead.pl"
										target="_new">
										<div style="display: none;">
											<input type="hidden" name="meta_web_form_id"
												value="1676730304"><input type="hidden" name="meta_split_id"
												value=""><input type="hidden" name="listname"
												value="addicted2succes"><input type="hidden" name="redirect"
												value="http://addicted2success.com/thank-you-for-subscribing/"
												id="redirect_55b9804254bb568bf8651a64d343d92c"><input
												type="hidden" name="meta_adtracking"
												value="Addicted2Success"><input type="hidden"
												name="meta_message" value="1"><input type="hidden"
												name="meta_required" value="name,email"><input type="hidden"
												name="meta_tooltip" value="">
										</div>
										<div id="af-form-1676730304" class="af-form">
											<div id="af-body-1676730304" class="af-body af-standards">
												<div class="af-element">
													<label class="previewLabel" for="awf_field-61632800">Name:
													</label>
													<div class="af-textWrap">
														<input id="awf_field-61632800" type="text" name="name"
															class="text" value=""
															onfocus=" if (this.value == &#39;&#39;) { this.value = &#39;&#39;; }"
															onblur="if (this.value == &#39;&#39;) { this.value=&#39;&#39;;} "
															tabindex="500">
													</div>
													<div class="af-clear"></div>
												</div>
												<div class="af-element">
													<label class="previewLabel" for="awf_field-61632801">Email:
													</label>
													<div class="af-textWrap">
														<input class="text" id="awf_field-61632801" type="text"
															name="email" value="" tabindex="501"
															onfocus=" if (this.value == &#39;&#39;) { this.value = &#39;&#39;; }"
															onblur="if (this.value == &#39;&#39;) { this.value=&#39;&#39;;} ">
													</div>
													<div class="af-clear"></div>
												</div>
												<div class="af-element buttonContainer">
													<input name="submit" id="af-submit-image-1676730304"
														type="image" class="image"
														style="background: none; max-width: 100%;"
														alt="Submit Form"
														src="./Quotes   Motivation   Inspiration - Addicted 2 Success_files/button.png"
														tabindex="502">
													<div class="af-clear"></div>
												</div>
												<div class="af-element privacyPolicy"
													style="text-align: center">
													<p>
														We respect your <a title="Privacy Policy"
															href="http://www.aweber.com/permission.htm"
															target="_blank">email privacy</a>
													</p>
													<div class="af-clear"></div>
												</div>
											</div>
										</div>
									</form>
								</div>
							</div></li>
						<li id="ht_facebook_widget-2"
							class="sidebar-widget ht_facebook_widget"><span
							class="sidebar-widget-header"><h3 class="sidebar-widget-header">Facebook</h3></span>
							<iframe
								src="./Quotes   Motivation   Inspiration - Addicted 2 Success_files/likebox.htm"
								scrolling="no" frameborder="0"
								style="border: none; overflow: hidden; width: 300; height: 258px;"
								allowtransparency="true"></iframe></li>
						<li id="text-80" class="sidebar-widget widget_text"><div
								class="textwidget">
								<script async=""
									src="./Quotes   Motivation   Inspiration - Addicted 2 Success_files/adsbygoogle.js"></script>
								<ins class="adsbygoogle"
									style="display: inline-block; width: 300px; height: 250px"
									data-ad-client="ca-pub-2795807312413531"
									data-ad-slot="7460193921" data-adsbygoogle-status="done">
									<ins id="aswift_2_expand"
										style="display: inline-table; border: none; height: 250px; margin: 0; padding: 0; position: relative; visibility: visible; width: 300px; background-color: transparent">
										<ins id="aswift_2_anchor"
											style="display: block; border: none; height: 250px; margin: 0; padding: 0; position: relative; visibility: visible; width: 300px; background-color: transparent">
											<iframe width="300" height="250" frameborder="0"
												marginwidth="0" marginheight="0" vspace="0" hspace="0"
												allowtransparency="true" scrolling="no"
												allowfullscreen="true"
												onload="var i=this.id,s=window.google_iframe_oncopy,H=s&amp;&amp;s.handlers,h=H&amp;&amp;H[i],w=this.contentWindow,d;try{d=w.document}catch(e){}if(h&amp;&amp;d&amp;&amp;(!d.body||!d.body.firstChild)){if(h.call){setTimeout(h,0)}else if(h.match){try{h=s.upd(h,i)}catch(e){}w.location.replace(h)}}"
												id="aswift_2" name="aswift_2"
												style="left: 0; position: absolute; top: 0;"></iframe>
										</ins>
									</ins>
								</ins>
								<script>(adsbygoogle = window.adsbygoogle || []).push({});</script>
							</div></li>
						<li id="text-82" class="sidebar-widget widget_text"><div
								class="textwidget">
								<a href="http://addicted2success.com/write-for-us/"
									target="_blank"><img
									class="aligncenter size-full wp-image-24005"
									alt="Write for A2S"
									src="./Quotes   Motivation   Inspiration - Addicted 2 Success_files/Write-for-A2S.jpg"
									width="300" height="94"></a>
							</div></li>
						<li id="ht_tabs_widget-2" class="sidebar-widget ht_tabs_widget"><div
								class="tabber-container">
								<ul class="tabs tabber-widget">
									<li class="active"><h4>
											<a href="http://addicted2success.com/#tab1">Popular</a>
										</h4></li>
									<li><h4>
											<a href="http://addicted2success.com/#tab2">Latest</a>
										</h4></li>
									<li><h4>
											<a href="http://addicted2success.com/#tab3">Comments</a>
										</h4></li>
								</ul>
								<div id="tab1" class="tabber-content" style="display: block;">
									<div class="cat-light-bottom cat-light-links">
										<ul>
											<li><a
												href="http://addicted2success.com/quotes/37-inspirational-quotes-that-will-change-your-life/"><img
													width="48" height="54"
													src="./Quotes   Motivation   Inspiration - Addicted 2 Success_files/Inspirational-Quotes-Life-Changing-104x116.jpg"
													class="attachment-small-thumb wp-post-image"
													alt="Inspirational-Quotes-Life-Changing"></a> <span
												class="list-byline"><a
													href="http://addicted2success.com/author/Joel/"
													title="Posts by Joel Brown" rel="author">Joel Brown</a> |
													December 15, 2012</span>
												<p>
													<a
														href="http://addicted2success.com/quotes/37-inspirational-quotes-that-will-change-your-life/">37
														Inspirational Quotes That Will Change Your Life</a>
												</p></li>
											<li><a
												href="http://addicted2success.com/success-advice/10-creative-ways-to-make-money-online-right-now/"><img
													width="48" height="54"
													src="./Quotes   Motivation   Inspiration - Addicted 2 Success_files/Make-More-Money-Online-104x116.jpg"
													class="attachment-small-thumb wp-post-image"
													alt="Make More Money Online"></a> <span class="list-byline"><a
													href="http://addicted2success.com/author/Joel/"
													title="Posts by Joel Brown" rel="author">Joel Brown</a> |
													November 19, 2012</span>
												<p>
													<a
														href="http://addicted2success.com/success-advice/10-creative-ways-to-make-money-online-right-now/">10
														Creative Ways To Make Money Online</a>
												</p></li>
											<li><a
												href="http://addicted2success.com/success-advice/why-successful-people-leave-their-loser-friends-behind/"><img
													width="48" height="54"
													src="./Quotes   Motivation   Inspiration - Addicted 2 Success_files/Tony-Robbins-Marc-Benioff-Richard-Branson-Successful-Friends-104x116.jpg"
													class="attachment-small-thumb wp-post-image"
													alt="Tony Robbins Marc Benioff, Richard Branson Successful Friends"></a>
												<span class="list-byline"><a
													href="http://addicted2success.com/author/brentonweyi/"
													title="Posts by Brenton Weyi" rel="author">Brenton Weyi</a>
													| April 25, 2013</span>
												<p>
													<a
														href="http://addicted2success.com/success-advice/why-successful-people-leave-their-loser-friends-behind/">Why
														Successful People Leave Their Loser Friends Behind</a>
												</p></li>
											<li><a
												href="http://addicted2success.com/news/the-top-25-millionaires-billionaires-that-are-using-their-money-to-save-the-world/"><img
													width="48" height="54"
													src="./Quotes   Motivation   Inspiration - Addicted 2 Success_files/giving-money-back-104x116.jpg"
													class="attachment-small-thumb wp-post-image"
													alt="giving-money away"></a> <span class="list-byline"><a
													href="http://addicted2success.com/author/Joel/"
													title="Posts by Joel Brown" rel="author">Joel Brown</a> |
													November 2, 2011</span>
												<p>
													<a
														href="http://addicted2success.com/news/the-top-25-millionaires-billionaires-that-are-using-their-money-to-save-the-world/">The
														Top 25 Millionaires &amp; Billionaires That Are Using
														Their Money To Save The World</a>
												</p></li>
										</ul>
									</div>
								</div>
								<div id="tab2" class="tabber-content" style="display: none;">
									<div class="cat-light-bottom cat-light-links">
										<ul>
											<li><a
												href="http://addicted2success.com/success-advice/how-to-achieve-more-by-intentionally-doing-less/"><img
													width="85" height="54"
													src="./Quotes   Motivation   Inspiration - Addicted 2 Success_files/Intentionally-Doing-Less-To-Achieve-More-In-Life-85x54.jpg"
													class="attachment-small-thumb wp-post-image"
													alt="Intentionally Doing Less To Achieve More In Life"></a>
												<span class="list-byline"><a
													href="http://addicted2success.com/author/tonyrobinson/"
													title="Posts by Tony Robinson" rel="author">Tony Robinson</a>
													| August 14, 2014</span>
												<p>
													<a
														href="http://addicted2success.com/success-advice/how-to-achieve-more-by-intentionally-doing-less/">How
														to Achieve More by Intentionally Doing Less</a>
												</p></li>
											<li><a
												href="http://addicted2success.com/life/7-ludicrous-lies-you-keep-telling-yourself/"><img
													width="85" height="54"
													src="./Quotes   Motivation   Inspiration - Addicted 2 Success_files/suit-business-man-success-85x54.jpg"
													class="attachment-small-thumb wp-post-image"
													alt="suit business man success"></a> <span
												class="list-byline"><a
													href="http://addicted2success.com/author/maxineschiffmann/"
													title="Posts by maxine schiffmann" rel="author">maxine
														schiffmann</a> | August 12, 2014</span>
												<p>
													<a
														href="http://addicted2success.com/life/7-ludicrous-lies-you-keep-telling-yourself/">7
														Ludicrous Lies You Keep Telling Yourself</a>
												</p></li>
											<li><a
												href="http://addicted2success.com/success-advice/8-ways-to-become-a-best-selling-author-with-your-first-book/"><img
													width="85" height="54"
													src="./Quotes   Motivation   Inspiration - Addicted 2 Success_files/Charlene-Barry-Self-Publishing-Best-Selling-Author-85x54.jpg"
													class="attachment-small-thumb wp-post-image"
													alt="Charlene Barry - Self Publishing Best Selling Author"></a>
												<span class="list-byline"><a
													href="http://addicted2success.com/author/stephenguise/"
													title="Posts by Stephen Guise" rel="author">Stephen Guise</a>
													| August 10, 2014</span>
												<p>
													<a
														href="http://addicted2success.com/success-advice/8-ways-to-become-a-best-selling-author-with-your-first-book/">8
														Ways To Become A Best-Selling Author With Your First Book</a>
												</p></li>
											<li><a
												href="http://addicted2success.com/success-advice/7-transformational-lessons-from-the-philosophy-of-success/"><img
													width="85" height="54"
													src="./Quotes   Motivation   Inspiration - Addicted 2 Success_files/Marcus-Aurelius-Stoicism-Philosophy-and-Success-85x54.jpeg"
													class="attachment-small-thumb wp-post-image"
													alt="Marcus Aurelius Stoicism Philosophy and Success"></a>
												<span class="list-byline"><a
													href="http://addicted2success.com/author/thainguyen/"
													title="Posts by Thai Nguyen" rel="author">Thai Nguyen</a> |
													August 8, 2014</span>
												<p>
													<a
														href="http://addicted2success.com/success-advice/7-transformational-lessons-from-the-philosophy-of-success/">7
														Transformational Lessons From The Philosophy Of Success</a>
												</p></li>
										</ul>
									</div>
								</div>
								<div id="tab3" class="tabber-content" style="display: none;">
									<ul class="latest-comments">
										<li><div class="comment-image">
												<img alt=""
													src="./Quotes   Motivation   Inspiration - Addicted 2 Success_files/e3838539080d585f12cd4887dc529666"
													class="avatar avatar-50 photo" height="50" width="50">
											</div>
											<div class="comment-text">
												<span>Liv says:</span><br>
												<p>
													<a
														href="http://addicted2success.com/success-advice/how-to-achieve-more-by-intentionally-doing-less/#comment-85519"
														title="Liv on How to Achieve More by Intentionally Doing Less">well
														said !...</a>
												</p>
											</div></li>
										<li><div class="comment-image">
												<img alt=""
													src="./Quotes   Motivation   Inspiration - Addicted 2 Success_files/4fe09ec99df4fa1a62c964c90fe22214"
													class="avatar avatar-50 photo" height="50" width="50">
											</div>
											<div class="comment-text">
												<span>Tony says:</span><br>
												<p>
													<a
														href="http://addicted2success.com/success-advice/how-to-achieve-more-by-intentionally-doing-less/#comment-85516"
														title="Tony on How to Achieve More by Intentionally Doing Less">Hey
														Liv! Yeah, that's the main point I wanted...</a>
												</p>
											</div></li>
									</ul>
								</div>
							</div></li>
					</ul>
				</div>

			</div>
		</div>
	</div>
</div>

<?php theme_include('footer'); ?>