// Declarar variable global de la lista de categorias
var arrCategories = []

//funcion de agregar elemento
$("#addElement").click(function (e) {
	//deshabilitar el envio por http
	e.preventDefault()

	let idCategory = $("#category").val()
	let nameCategory = $("#category option:selected").text()

	if(idCategory != '') {
		if(typeof existCategory(idCategory) === 'undefined') {			
			arrCategories.push({
				'id': idCategory,
				'name': nameCategory
			})			
		} else {
			alert("La categoría ya se enceuntra en la lista")
		}

		//Mostrar en HTML la lista de categorias
		showCategories()
	} else {
		alert("Debe seleccionar una Categoría")
	}
});

function existCategory(idCategory) {
	return arrCategories.find(function (category) {
		return category.id == idCategory
	})
}

function showCategories() {
	$("#categories-list").empty()

	arrCategories.forEach(function(category) {
		$("#categories-list").append('<div class="form-group"><button onclick="removeElement('+category.id+')" class="btn btn-danger">X</button><span>'+' '+category.name+'</span></div>')
	})
}

function removeElement(idCategory) {
	let index = arrCategories.indexOf(existCategory(idCategory))
	arrCategories.splice(index, 1)
	showCategories()
}

//Metodo para hacer el envio del formulario
$("#submit").click(function (e) {
	e.preventDefault()
	console.log("Entro")

	let url = "?controller=movie&method=save"	
	// objeto de parametros a enviar al controlador(Backend)
	let params = {
		name: $('#name').val(), 
		description: $('#description').val(),
		user_id: $('#user_id').val(),
		categories: arrCategories,		
	}

	//metodo ajax para ennviar el formulario
	$.post(url, params, function (response) {
		//Respuest correcta del request
		if(typeof response.error !== 'undefined'){
			alert(response.message)
		} else {
			alert('Inserción Correcta')
			//Redireccionar a la lista Movies
			location.href = "?controller=movie"
		}
	}, 'json').fail(function (err) {
		alert("Inserción Fallida ("+err.responseText+")")
	})
});
