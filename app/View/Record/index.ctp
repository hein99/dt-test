<div class="row-fluid">
	<table class="table table-bordered" id="table_records">
		<thead>
			<tr>
				<th>ID</th>
				<th>NAME</th>	
			</tr>
		</thead>
		<tbody>
			<?php foreach($records as $record):?>
			<tr>
				<td><?php echo $record['Record']['id']?></td>
				<td><?php echo $record['Record']['name']?></td>
			</tr>	
			<?php endforeach;?>
		</tbody>
	</table>
	
	<div class="row-fluid">
		<div class="span6">
			<?php echo $this->Paginator->counter('Showing {:start} to {:end} of {:count} entries')?>
		</div>

		<div class="span6">
			<div class="pagination pull-right">
				<ul><?php echo $this->Paginator->numbers(array('first' => 'First', 'last' => 'Last', 'currentTag' => 'a', 'currentClass' => 'active', 'tag' => 'li', 'separator' => '')) ?></ul>
			</div>
		</div>
	</div>
</div>