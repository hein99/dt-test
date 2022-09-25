<div id="message1">
	<?php echo $this->Form->create('Type',array('action' => '/show','id'=>'form_type','type'=>'file','class'=>'','method'=>'POST','autocomplete'=>'off','inputDefaults'=>array('label'=>false,'div'=>false,'type'=>'text','required'=>false)))?>
	<?php echo __("Hi, please choose a type below:")?>
	<br><br>
	
	<?php $options_new = array(
 		'Type1' => __('<div class="tooltip-wrap"><span class="show-tooltip">Type1</span><div class="custom-tooltip"><ul><li>Description .......</li><li>Description 2</li></ul><span class="arrow"></span></div></div>'),
		'Type2' => __('<div class="tooltip-wrap"><span class="show-tooltip">Type2</span><div class="custom-tooltip"><ul><li>Desc 1 .....</li><li>Desc 2...</li></ul><span class="arrow"></span></div></div>')
	);?>

	<?php 
		echo $this->Form->input('type', array('legend'=>false, 'type' => 'radio', 'options'=>$options_new,'before'=>'<label class="radio line notcheck">','after'=>'</label>' ,'separator'=>'</label><label class="radio line notcheck">'));
		echo $this->Form->submit('Save', array('class' => 'btn btn-success'));
		echo $this->Form->end();
	?>
</div>


<style>
	.tooltip-wrap {
		position: relative;
		display: inline-block;
	}

	.show-tooltip {
		color: #00f;
	}

	.show-tooltip:hover {
		text-decoration: underline;
	}

	.custom-tooltip {
		display: none;
		box-sizing: border-box;
		position: absolute;
		top: -50%;
		left: 100%;
		border: 1px solid #afafaf;
		box-shadow: 4px 4px 5px #00000066;
		background-color: #fff;
		width: 20rem;
		margin-left: 10px;
		padding: 5px;
	}

	.custom-tooltip ul {
		margin-bottom: 0; 
	}

	.custom-tooltip .arrow {
		position: absolute;
		top: 50%;
		left: -6px;
		background: #fff;
		width: 10px;
		height: 10px;
		border-left: 1px solid #afafaf;
		border-bottom: 2px solid #555;
		transform: translateY(-50%) rotate(45deg);
	}
</style>

<?php $this->start('script_own')?>
<script>

$(document).ready(function(){
	$(".show-tooltip").mouseenter(function() {
		var parent = $(this).parent();

		$(".custom-tooltip", parent).fadeIn();
	});

	$(".show-tooltip").mouseleave(function() {
		var parent = $(this).parent();

		$(".custom-tooltip", parent).fadeOut();
	});

})


</script>
<?php $this->end()?>