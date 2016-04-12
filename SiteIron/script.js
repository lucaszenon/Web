$(document).ready(function(e){
	$("#dialog-confirm").hide();
	$(".menuPrincipal a").click(function(e){
		e.preventDefault();
		var href = $(this).attr('href');
		$(".conteudo").load(href + ".conteudo");
	});
}) 

function dialogo(){
		$("#dialog-confirm").dialog({
			resizable:false,
			modal:true,
			width:400,
			height:200,
		buttons: { 
	"Confirma":function(){
		verifica();
	$(this).dialog("close");

	},
	Cancelar: function(){
		$(this).dialog("close");
			}
			}
		});
	};

function verifica() {
var teste = 0;
var erro = 0;
var nomeTexto = document.querySelector("#nome").value ;
var vetnom;
var truzao;
var email = document.querySelector("#email").value ;
if(nomeTexto.length<3){
erro = 1;
}
var x
for(x=0;x<nomeTexto.length;x++){
if(nomeTexto.substring[x] == " "){
truzao = true; 

}
else{
erro=1;
}
if(truzao == true){
vetnom = nomeTexto.split(" ")

}
else{
}
}
}
