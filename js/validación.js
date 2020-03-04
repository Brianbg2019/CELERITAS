$(function(){
	var name, asunto;
	$("#Validar").on('click',function(){
		name = $(".name").val();
		asunto = $(".asunto").val();
		if (name.length==0 || asunto.length==0) {
			alert("Campo Vacios");
		}

	});

});