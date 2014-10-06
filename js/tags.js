$('#Tema_tags').tokenInput(baseUrl + '/index.php/tag/tokens', {
	preventDuplicates: true
 ,	allowFreeTagging: true
 ,	hintText: "Digite uma tag"
 ,	noResultsText: "Nenhum resultado encontrado"
 ,	searchingText: "Procurando..."
 ,	tokenDelimiter: ","
 ,  prePopulate: JSON.parse($('#Tema_tags').val())
 ,  tokenValue: 'name'
});

$('#Tema_texto_disparador').change(function(){

	$('#tags-loader').html("Carregando...")
	$.post(baseUrl + '/sobek.php', {texto: $(this).val()} , function(data){

		var tags = JSON.parse(data);
		for(var i in tags){
			//$('#Tema_tags').tokenInput('remove', {id: tags[i].id} );
			$('#Tema_tags').tokenInput('add', tags[i]);
		}
		$('#tags-loader').html("");


	});
});
