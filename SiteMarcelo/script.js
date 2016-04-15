$(document).ready(function(e){
    $("#dialog-confirm").hide();
	$(".menuPrincipal a").click(function(e){
		e.preventDefault();
		var href = $(this).attr('href');
		$(".conteudo").load(href + " .conteudo");
	});
 $(".menuTopo a").click(function(e){
		e.preventDefault();
		var href = $(this).attr('href');
		if (href == "inicio.html") {
		$(".conteudo").load(href + " .conteudo");
		$(".comentario").show();
		$(".menuPrincipal").show();
		} else {
		$(".conteudo").load(href + " .conteudo");
		$(".comentario").hide();
		$(".menuPrincipal").hide();
		}
 });
});

function dialogo(){
		$("#dialog-confirm").dialog({
resizable:false,
modal:true,
width:400,
height:200,
buttons: { 
"Confirma" : function() {
verifica();        
$(this ).dialog( "close");
verifica();
},
Cancelar: function(){
$( this ).dialog( "close" );
}
}
});
};

function verifica() {
var erro = 0;
var nome = document.querySelector("#nome").value;
var vetnom;
var truzao = false;
var email = document.querySelector("#email").value;
var vetemail;
    
var x;
	for(x=0;x<nome.length;x++){
		if(nome[x] == " "){
		truzao = true; 

		}

	}
if(truzao == false){
	erro=1;
}


	if(truzao == true){
	vetnom = nome.split(" ");

		if(vetnom[0].length<3){
		erro = 1;
		}
   		 if(vetnom[1].length<4){
		erro = 1;    
		}
	}
	

    if(erro == 1){
    
    alert("Ha um erro em seu nome");
}
   
}




truzao =false;
for(x=0;x<email.length;x++){
if(email[x] == "@"){
truzao = true; 

}


}
if(truzao == true){
vetemail = email.split("@");
if(vetemail[0].length<3){
erro = 1;
}

if(vetemail[1].length<4){
erro = 1;    
}
}
else{
erro=1;
if(erro == 1){
    
   
}
}

if(erro == 1){
    
    alert("Ha um erro em seu codigo");
	
}


