<?php
/* SVN FILE: $Id$ */
/**
 * [ADMIN] ユーザーグループ登録/編集フォーム
 *
 * PHP versions 5
 *
 * baserCMS :  Based Website Development Project <http://basercms.net>
 * Copyright 2008 - 2012, baserCMS Users Community <http://sites.google.com/site/baserusers/>
 *
 * @copyright		Copyright 2008 - 2012, baserCMS Users Community
 * @link			http://basercms.net baserCMS Project
 * @package			baser.views
 * @since			baserCMS v 0.1.0
 * @version			$Revision$
 * @modifiedby		$LastChangedBy$
 * @lastmodified	$Date$
 * @license			http://basercms.net/license/index.html
 */
?>


<script type="text/javascript">
$(window).load(function() {
	$("#PermissionName").focus();
});
</script>


<?php echo $this->BcForm->create('Permission', array('url' => array($this->request->params['pass'][0]))) ?>
<?php echo $this->BcForm->input('Permission.id', array('type' => 'hidden')) ?>

<!-- form -->
<div class="section">
	<table cellpadding="0" cellspacing="0" id="FormTable" class="form-table">
		<tr>
			<th class="col-head"><?php echo $this->BcForm->label('Permission.user_group_id', 'ユーザーグループ') ?></th>
			<td class="col-input">
				<?php $userGroups = $this->BcForm->getControlSource('user_group_id') ?>
				<?php echo $userGroups[$this->BcForm->value('Permission.user_group_id')] ?>
				<?php echo $this->BcForm->input('Permission.user_group_id', array('type' => 'hidden')) ?>
			</td>
		</tr>
<?php if($this->request->action == 'admin_edit'): ?>
		<tr>
			<th class="col-head"><?php echo $this->BcForm->label('Permission.id', 'NO') ?></th>
			<td class="col-input">
				<?php echo $this->BcForm->value('Permission.no') ?>
			</td>
		</tr>
<?php endif; ?>
		<tr>
			<th class="col-head"><?php echo $this->BcForm->label('Permission.name', 'ルール名') ?>&nbsp;<span class="required">*</span></th>
			<td class="col-input">
				<?php echo $this->BcForm->input('Permission.name', array('type' => 'text', 'size' => 20, 'maxlength' => 255)) ?>
				<?php echo $this->Html->image('admin/icn_help.png', array('id' => 'helpName', 'class' => 'btn help', 'alt' => 'ヘルプ')) ?>
				<?php echo $this->Form->error('Permission.name') ?>
				<div id="helptextName" class="helptext"> ルール名には日本語が利用できます。特定しやすいわかりやすい名称を入力してください。 </div>
			</td>
		</tr>
		<tr>
			<th class="col-head"><?php echo $this->BcForm->label('Permission.url', 'URL設定') ?>&nbsp;<span class="required">*</span></th>
			<td class="col-input">
				<strong>/<?php echo $authPrefix ?>/</strong>
				<?php echo $this->BcForm->input('Permission.url', array('type' => 'text', 'size' => 40, 'maxlength' => 255)) ?>
				<?php echo $this->Html->image('admin/icn_help.png', array('id' => 'helpUrl', 'class' => 'btn help', 'alt' => 'ヘルプ')) ?>
				<?php echo $this->Form->error('Permission.url') ?>
				<div id="helptextUrl" class="helptext">
					<ul>
						<li>baserCMSの設置URLを除いたスラッシュから始まるURLを入力してください。<br />
							（例）/admin/users/index</li>
						<li>管理画面など認証がかかっているURLしか登録できません。</li>
						<li>特定のフォルダ配下に対しアクセスできないようにする場合などにはワイルドカード（*）を利用します。<br />
							（例）ユーザー管理内のURL全てアクセスさせない場合： /admin/users* </li>
					</ul>
				</div>
			</td>
		</tr>
		<tr>
			<th class="col-head"><?php echo $this->BcForm->label('Permission.auth', 'アクセス') ?></th>
			<td class="col-input">
				<?php echo $this->BcForm->input('Permission.auth', array(
					'type'		=> 'radio',
					'options'	=> $this->BcForm->getControlSource('auth'),
					'legend'	=> false,
					'separator'	=> '　')) ?>
				<?php echo $this->BcForm->error('Permission.auth') ?>
			</td>
		</tr>
		<tr>
			<th class="col-head"><?php echo $this->BcForm->label('Permission.status', '利用状態') ?></th>
			<td class="col-input">
				<?php echo $this->BcForm->input('Permission.status', array(
					'type'		=> 'radio',
					'options'	=> $this->BcText->booleanStatusList(),
					'legend'	=> false,
					'separator'	=> '　')) ?>
				<?php echo $this->BcForm->error('Permission.status') ?>
			</td>
		</tr>
	</table>
</div>
<div class="submit">
<?php if ($this->request->action == 'admin_edit'): ?>
	<?php echo $this->BcForm->submit('更新', array('div' => false, 'class' => 'btn-orange button')) ?>
	<?php $this->BcBaser->link('削除', 
			array('action'=>'delete', $this->request->params['pass'][0], $this->BcForm->value('Permission.id')),
			array('class'=>'btn-gray button'),
			sprintf('%s を本当に削除してもいいですか？', $this->BcForm->value('Permission.name')),
			false); ?>
<?php else: ?>
	<?php echo $this->BcForm->submit('登　録', array('div' => false, 'class' => 'btn-red button')) ?>
<?php endif ?>
</div>

<?php echo $this->BcForm->end() ?>