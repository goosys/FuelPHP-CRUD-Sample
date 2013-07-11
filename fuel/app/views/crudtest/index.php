<h2>Listing <span class='muted'>Crudtests</span></h2>
<br>
<?php if ($models): ?>
<table class="table table-striped">
	<thead>
		<tr>
			<th>Title</th>
			<th>&nbsp;</th>
		</tr>
	</thead>
	<tbody>
<?php foreach ($models as $model): ?>		<tr>

			<td><?php echo $model->title; ?></td>
			<td>
				<?php echo Html::anchor('crudtest/view/'.$model->id, '<i class="icon-eye-open" title="View"></i>'); ?> |
				<?php echo Html::anchor('crudtest/edit/'.$model->id, '<i class="icon-wrench" title="Edit"></i>'); ?> |
				<?php echo Html::anchor('crudtest/delete/'.$model->id, '<i class="icon-trash" title="Delete"></i>', array('onclick' => "return confirm('Are you sure?')")); ?>

			</td>
		</tr>
<?php endforeach; ?>	</tbody>
</table>

<?php else: ?>
<p>No Crudtests.</p>

<?php endif; ?><p>
	<?php echo Html::anchor('crudtest/create', 'Add new Crudtest', array('class' => 'btn btn-success')); ?>

</p>
