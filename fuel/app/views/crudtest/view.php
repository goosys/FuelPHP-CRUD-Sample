<h2>Viewing <span class='muted'>#<?php echo $model->id; ?></span></h2>

<p>
	<strong>Title:</strong>
	<?php echo $model->title; ?></p>

<?php echo Html::anchor('crudtest/edit/'.$model->id, 'Edit'); ?> |
<?php echo Html::anchor('crudtest', 'Back'); ?>