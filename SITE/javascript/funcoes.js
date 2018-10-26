/*
*Funcoes Jquery do Site da Paroquia 
*Desenvolvido Por Lucas Jhonata Goulart
*ACR - Soluções de TI 
*/
$(function()
{
	$('#idpaginas').change(function()
	{
		var cont=0;//contador para verificar se ja existe algum valor selecionado
		var valorCombo=$("#idpaginas").val();//pegando o Value da Opçao Selecionada
		var conteudo = $('#conteudopag');//Variavel recebera a DIV Carregando com o Formulario.
		var nomearq="";//Variavel para pegar o nome do arquivo para salvar
		//Iniciando a Validação para verificar qual opção foi selecionada 
		if(valorCombo==1)
		{
			//pegando o nome da opção escolhida
			txt = $("#idpaginas option[value='1']").text();
			nomearq="paroco";
			//Carregando a area para a Digitação da descrição
			if(cont==0)
			{
				$(conteudo).append(
				/*Carrega a pagina de Edição do Paroco*/
				'<div id="carregado">\
					Editar a Pagina:'+txt+'<a href="#" id="remover"><img src="../img/icone/x.png"/></a></br>\
					<textarea id="descricao" name ="descricao">\
					</textarea></br>\
					<h4 id="txtupload">Escolha a Imagem:<input type="file" id="imagem"/></h4></br>\
					<input id="enviar" type="image" alt="enviar" title="Salvar Informação"  src="../img/icone/salvar.jpg"/>\
					<input id="reset" type="image" alt="limpar" title="Limpar Informação" src="../img/icone/lixo.png"/>\
				</div>');
				cont=1;
			}
			/*Removendo o Campo adicionado ao ser clicado no Icone do X*/
			if(cont==1)
			{    
				$(conteudo).on("click","#remover",function(e) 
				{
					e.preventDefault();
					$(this).parent('#carregado').remove();
				});
				cont=0;
			}
			/*Pegando o Valor Digitado no TextArea*/
			$(document).ready(function() 
			{
				$("#enviar").click(function(e)
				{
					e.preventDefault();
					var texto = $("#descricao").val();
					alert(texto);//so para testar
				});
			});
		}
		else if(valorCombo==2)
		{
			//pegando o nome da opção escolhida
			txt = $("#idpaginas option[value='2']").text();
			//Carregando a area para a Digitação da descrição
			if(cont==0)
			{
				$(conteudo).append(
				/*Carrega a pagina de Edição do Vigario Paroquial*/
				'<div id="carregado">\
					Editar a Pagina:'+txt+'<a href="#" id="remover"><img src="../img/icone/x.png"/></a></br>\
					<textarea id="descricao" name ="descricao">\
					</textarea></br>\
					<h4 id="txtupload">Escolha a Imagem:<input type="file" id="imagem"/></h4></br>\
					<input id="enviar" type="image" alt="enviar" title="Salvar Informação" src="../img/icone/salvar.jpg"/>\
					<input id="reset" type="image" alt="limpar" title="Limpar Informação" src="../img/icone/lixo.png"/>\
				</div>');
				cont=1;
			}
			/*Removendo o Campo adicionado ao ser clicado no Icone do X*/
			if(cont==1)
			{    
				$(conteudo).on("click","#remover",function(e) 
				{
					e.preventDefault();
					$(this).parent('#carregado').remove();
				});
				cont=0;
			}
			/*Pegando o Valor Digitado no TextArea*/
			$(document).ready(function() 
			{
				$("#enviar").click(function()
				{
					var texto = $("#descricao").val();
					alert(texto);
				});
			});
		}else if(valorCombo==3)
		{
			//pegando o nome da opção escolhida
			txt = $("#idpaginas option[value='3']").text();
			//Carregando a area para a Digitação da descrição
			if(cont==0)
			{
				$(conteudo).append(
				/*Carrega a pagina de Edição do Vigario Paroquial*/
				'<div id="carregado">\
					Editar a Pagina:'+txt+'<a href="#" id="remover"><img src="../img/icone/x.png"/></a></br>\
					<h4 id="txtupload">Escolha a Imagem:<input type="file" id="imagem"/></h4></br>\
					<input id="enviar" type="image" alt="enviar" title="Salvar Informação" src="../img/icone/salvar.jpg"/>\
					<input id="reset" type="image" alt="limpar" title="Limpar Informação" src="../img/icone/lixo.png"/>\
				</div>');
				cont=1;
			}
			/*Removendo o Campo adicionado ao ser clicado no Icone do X*/
			if(cont==1)
			{    
				$(conteudo).on("click","#remover",function(e) 
				{
					e.preventDefault();
					$(this).parent('#carregado').remove();
				});
				cont=0;
			}
			
		}else if(valorCombo==4)
		{
			//pegando o nome da opção escolhida
			txt = $("#idpaginas option[value='4']").text();
			//Carregando a area para a Digitação da descrição
			if(cont==0)
			{
				$(conteudo).append(
				/*Carrega a pagina de Edição do Vigario Paroquial*/
				'<div id="carregado">\
					Editar a Pagina:'+txt+'\
					<a href="#" id="remover"><img src="../img/icone/x.png"/></a></br>\
					<h4 id="txtupload">Escolha a Imagem:<input type="file" id="imagem"/></h4></br>\
					<input id="enviar" type="image" alt="enviar" title="Salvar Informação" src="../img/icone/salvar.jpg"/>\
					<input id="reset" type="image" alt="limpar" title="Limpar Informação" src="../img/icone/lixo.png"/>\
				</div>');
				cont=1;
			}
			if(cont==1)
			{    
				$(conteudo).on("click","#remover",function(e) 
				{
					e.preventDefault();
					$(this).parent('#carregado').remove();
				});
				cont=0;
			}
		}
	});
	
});
