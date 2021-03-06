<div id="container">
	<header>
		<nav>
			<div class="row">
				<div class="l2 m3 s12">
					<?php if ($page['logo']): ?>
			            <?php print render($page['logo']); ?>
			        <?php endif; ?>
				</div>	
				<div class="l10 m9 s12">
					<?php if ($page['navigation']): ?>
			            <?php print render($page['navigation']); ?>
			        <?php endif; ?>
				</div>
			</div>
		</nav>
		<div id="banner" class="banner-container">
			<div class="row">
				<div class="l12 m12 s12 no-padding">
					<?php if ($page['banner']): ?>
			         <?php print render($page['banner']); ?>
		 	        <?php endif; ?>
		 	    </div>
			</div>
		</div>	
</header>

	<div id="banner-bottom">
		<div class="row">
			<div class="l12 m12 s12">
			    <div id="banner_bottom">
					<?php if ($page['banner_bottom']): ?>
			            <?php print render($page['banner_bottom']); ?>
			        <?php endif; ?>
			    </div>
			</div>
		</div>
	</div>

	<main>
		<div class="row">
			<div class="l12 m12 s12">
				<?php if ($messages): ?>
	   				<div id="messages"><div class="section clearfix">
	     			<?php print $messages; ?>
	   				</div></div>
	 			 <?php endif; ?>
		         <div id="content">
					<?php if ($tabs): ?>
						<div class="tabs">
							<?php print render($tabs); ?>
						</div>
					<?php endif; ?>
					<?php print render($page['content']); ?>
		        </div>
		        <div class="l12 m12 s12">
			        <div id="main_content_second">
						<?php if ($page['main_content_second']): ?>
			               	<?php print render($page['main_content_second']); ?>
			            <?php endif; ?>
			        </div>
				</div>
			</div>
		</div>
	</main>

	<footer>
		<div class="row">
			<div class="l12 m12 s12">
	            <div id="footer_firstrow">
					<?php if ($page['footer_firstrow']): ?>
	                	<?php print render($page['footer_firstrow']); ?>
	                <?php endif; ?>
	            </div>
			</div>
		</div>
		<div class="row">
			<div class="l12 m12 s12">
	            <div id="footer_bottom">
					<?php if ($page['footer_bottom']): ?>
	                	<?php print render($page['footer_bottom']); ?>
	                <?php endif; ?>
	            </div>
			</div>
		</div>
	</footer>
</div>