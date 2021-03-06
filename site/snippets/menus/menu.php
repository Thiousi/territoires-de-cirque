<nav role="navigation">
	
	<div id="logo-tdc"><a href="<?= $site->url() ?>"><img src="<?= $site->url() ?>/assets/images/logo.svg"></a></div>

  <ul class="menu nav-font cf">
		<!--<li><a href="#"><img src="<?= $site->url() ?>/assets/images/home.svg" /></a></li>-->
		<?php
		foreach($site->children()->visible() as $rubrique): 
		?>
		<li><a <?= (string)$rubrique->isOpen() ? ' class="active"' : '' ?> href="<?= $rubrique->url() ?>"><?= $rubrique->title() ?></a></li>
		<?php
		endforeach;
		?>
		<li>
			<div class="lang-switcher">
				<?php foreach($site->languages() as $language): ?>
					<?php if ($site->language() != $language): ?>
					<a href="<?php echo $page->url($language->code()) ?>">
						<?php echo html($language->code()) ?>
					</a>
					<?php else : ?>
						<span class="active"><?php echo html($language->code()) ?></span>
					<?php endif; ?>
				<?php endforeach ?>
			</div>
		</li>
		<li><a href="#" class="btn-menu-plus"><img src="<?= $site->url() ?>/assets/images/plus.svg" alt="Suivre" title="Suivre" /></a></li>
  </ul>
	
	<div id="menu-plus">
		<div class="columns columns-3">
			<div class="column">
				<a class="noborder" href="#"><img src="<?= $site->url() ?>/assets/images/F_icon.svg"></a>
			</div><div class="column">
			<a class="noborder" href="#"><img src="<?= $site->url() ?>/assets/images/T_icon.svg"></a>
			</div><div class="column">
				 <form action="<?= $page->url() ?>">
					 <h2>Newsletter</h2>
					<input type="text" name="mail" placeholder="territoires@cirque.fr"><br>
					<input type="submit" value="Inscription">
				</form> 
			</div>
		</div>
	</div>
	
</nav>
