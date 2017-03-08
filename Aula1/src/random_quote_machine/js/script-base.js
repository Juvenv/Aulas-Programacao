//muda cor da div com id citacao, usando funcoes do jquery
$('#citacao').css('background-color', '#ffffff');

/**
 * Faz requisicao ajax para obter citações do servidor web
 */
function obterCitacao() {
	$.ajax({
		url : 'citacao.php',
		method : 'get',
		dataType : 'json',
		success : function(dados) {
			$('#citacao').html(
					'<p>' + dados.texto + '</p><p>' + dados.autor + '</p>');
			$('body').css('background-color', dados.cor);
			$('#citacao').css('color', dados.cor);
		}
	});
}

// adiciona evento para click no botão nova_citacao
$('#nova_citacao').on('click', function() {
	obterCitacao()
});

obterCitacao();