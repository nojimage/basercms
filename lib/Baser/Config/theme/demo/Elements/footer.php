<?php
/**
 * フッター
 */
?>

<div id="footer">
	<div id="footerInner">
		<?php $this->bcBaser->element('global_menu') ?>
		<p id="copyright"> Copyright(C)
			<?php $this->bcBaser->copyYear(2008) ?>
			baserCMS All rights Reserved. <a href="http://basercms.net/" target="_blank"><?php echo $this->html->image('baser.power.gif', array('alt'=> 'baserCMS : Based Website Development Project', 'border'=> "0")); ?></a>&nbsp; <a href="http://cakephp.org/" target="_blank"><?php echo $this->html->image('cake.power.gif', array('alt'=> 'CakePHP(tm) : Rapid Development Framework', 'border'=> "0")); ?></a> </p>
	</div>
</div>
