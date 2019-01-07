<?php get_header(); ?>

			<?php // home-find-block ?>

			<section class="home-find-block">
				<div class="wrap">
					<div class="home-find-main-text-wrap">
						<h1 class="home-find-main-text">Find My Next CoLiving Space</h1>
						<h2 class="home-find-sub-text">All the world's coliving in one place</h2>
					</div>
					<div class="home-find-main-form-wrap">
						<form role="search" method="get" id="searchform" class="searchform" action="<?php echo home_url( '/' ); ?>">
					    <div>
					        <div class="input-wrap"><input type="search" id="s" name="s" value="" /></div>

					        <button type="submit" id="searchsubmit" ><?php _e('Search','bonestheme'); ?></button>
					    </div>
					</div>
				</div>
</form>
			</section>

			<?php // home-featured-block ?>


			<section class="home-featured-block">

				<div class="wrap cf">
					<div class="wrap">
						<div class="row">
							<div class="col-md-4">
								<div class="featured-card">
									<div class="img-wrap">
										<img src="http://localhost:8888/wp-content/uploads/2019/01/test.jpeg">
									</div>
									<div class="description">
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="featured-card">
									<div class="img-wrap">
										<img src="http://localhost:8888/wp-content/uploads/2019/01/test.jpeg">
									</div>
									<div class="description">
									</div>
								</div>

							</div>
							<div class="col-md-4">
								<div class="featured-card">
									<div class="img-wrap">
										<img src="http://localhost:8888/wp-content/uploads/2019/01/test.jpeg">
									</div>
									<div class="description">
										<div class="city">Cali, Colombia</div>
										<div class="name"><h6>Cali's Coliving</h6></div>
										<div class="rating"><i class="fas fa-star"></i></div>
										<div class="text">
											Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ipsum urna, mattis sit amet urna eu, hendrerit suscipit dui. Nam luctus odio nibh, ut auctor erat consectetur a. Fusce convallis ligula in sagittis suscipit. Phasellus euismod ante mattis arcu facilisis, ac malesuada urna rutrum. Praesent non mollis libero.
										</div>
										<div class="button">
											<button>Read More</button>
										</div>


									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

			</section>




<?php get_footer(); ?>
