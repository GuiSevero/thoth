$('#Tema_texto_disparador').change(function(){

	$('#tags-loader').html("Carregando...")
	$.post('/thoth/sobek.php', {texto: $(this).val()} , function(data){

		$('#tags-loader').html("")
		console.log(data);

	});
});