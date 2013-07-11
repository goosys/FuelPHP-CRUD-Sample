<?php echo Form::open(array("class"=>"form-horizontal",'enctype'=>'multipart/form-data')); ?>

	<fieldset>
		<div class="control-group">
			<?php echo Form::label('Title', 'title', array('class'=>'control-label')); ?>
			<div class="controls">
				<?php echo Form::input('title', Input::post('title', isset($model) ? $model->title : ''), array('class' => 'span8', 'rows' => 8, 'placeholder'=>'Title')); ?>
			</div>
		</div>
		
		<div class="control-group">
			<?php echo Form::label('Photo', 'photo', array('class'=>'control-label')); ?>
			<div class="controls">
				<?php echo Form::file('photo',array('class'=>'span4')); ?>
			</div>
		</div>
		
		<div class="control-group">
			<label class='control-label'>&nbsp;</label>
			<div class='controls'>
				<?php echo Form::submit('submit', 'Save', array('class' => 'btn btn-primary')); ?>			</div>
		</div>
	</fieldset>
<?php echo Form::close(); ?>