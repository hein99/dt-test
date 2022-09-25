<div class="alert"> <button class="close" data-dismiss="alert"></button> Question: Advanced Input Field</div>

<p> 1. Make the Description, Quantity, Unit price field as text at first. When user clicks the text, it changes to input field for use to edit. Refer to the following video.</p>

<p>
	2. When user clicks the add button at left top of table, it wil auto insert a new row into the table with empty value. Pay attention to the input field name. For example the quantity field
	<?php echo htmlentities('<input name="data[1][quantity]" class="">')?> ,  you have to change the data[1][quantity] to other name such as data[2][quantity] or data["any other not used number"][quantity]
</p>

<div class="alert alert-success"> <button class="close" data-dismiss="alert"></button> The table you start with</div>

<table class="table table-striped table-bordered table-hover" id="invoice-tb" data-increment="1">
	<thead>
		<th><span id="add_item_button" class="btn mini green addbutton"><i class="icon-plus"></i></span></th>
		<th>Description</th>
		<th>Quantity</th>
		<th>Unit Price</th>
	</thead>

	<tbody></tbody>
</table>

<p></p>

<div class="alert alert-info "> <button class="close" data-dismiss="alert"></button> Video Instruction</div>

<p style="text-align:left;">
	<video width="78%" controls>
		<source src="<?php echo Router::url("/video/q3_2.mov") ?>">
		Your browser does not support the video tag.
	</video>
</p>

<?php $this->start('script_own');?>
<script>
$(document).ready(function(){

	$("#add_item_button").click(function(){
		var num = Number($("#invoice-tb").data("increment"));
		
		// create elements for first cell
		var delete_btn = $("<button>").html('<i class="icon-remove"></i>').click(function () {
			$(this).parent().parent().remove();
		});
		var first_col = $("<td>").append(delete_btn);


		// create elements for second cell
		var description_textarea = $("<textarea>", {
			"name" : "data[" + num + "][description]",
			"rows" : "2"
		}).hide().blur(function () {
			var parent = $(this).parent();
			var p = $("p", parent);

			$(this).hide();
			p.text($(this).val()).show();
		});

		var description_p = $("<p>");
		var second_col = $("<td>").append(description_textarea).append(description_p).click(function () {
			var textarea = $("textarea", $(this));
			var p = $("p", $(this));

			p.hide();
			textarea.show().select();
		});

		// create elements for third cell
		var qty_input = $("<input>", {
			"type" : "number",
			"name" : "data[" + num + "][quantity]"
		}).hide().blur(function () {
			var parent = $(this).parent();
			var p = $("p", parent);

			$(this).hide();
			p.text($(this).val()).show();
		});
		var qty_p = $("<p>");
		var third_col = $("<td>").append(qty_input).append(qty_p).click(function () {
			var input = $("input", $(this));
			var p = $("p", $(this));

			p.hide();
			input.show().select();
		});

		// create elements for fourth cell
		var uprice_input = $("<input>", {
			"type" : "number",
			"step" : "0.01",
			"name" : "data[" + num + "][unit_price]"
		}).hide().blur(function () {
			var parent = $(this).parent();
			var p = $("p", parent);

			$(this).hide();
			p.text($(this).val()).show();
		});
		var uprice_p = $("<p>");
		var fourth_col = $("<td>").append(uprice_input).append(uprice_p).click(function () {
			var input = $("input", $(this));
			var p = $("p", $(this));

			p.hide();
			input.show().select();
		});


		// insert row with 4 cells to the table
		var row = $("<tr>").append(first_col).append(second_col).append(third_col).append(fourth_col);
		$("#invoice-tb>tbody").append(row);

		// increte the number
		$("#invoice-tb").data("increment", ++num);
	});

});
</script>
<?php $this->end();?>

