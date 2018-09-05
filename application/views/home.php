<script type="text/javascript">
	var base_url = "<?php echo base_url(); ?>";
	$(function(){
		$('#select_estados').change(function(){
			var id_estado = $('#select_estados').val;
			$.post(base_url+'ajax/cidade/getCidade', {
				id_estado : id_estado
			}, function(data){
				console.log(data);
			});
		});

	});

</script>

<div class="container">
	<div class="form-group">
		<label for="estados"> Estados</label>
		<select class="form-control" name="select_estados" id="select_estados">
			<?php echo $select_estados;?>
		</select>
	</div>
	<div class="form-group">
		<label for="cidades"> Cidades</label>
		<select class="form-control" name="select_cidades" id="select_cidades" disabled>
			<option>Selecione o estado acima.</option>
		</select>
	</div>
</div>
</div>
