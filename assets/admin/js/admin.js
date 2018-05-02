$(function(){
	var uri = $("#uri").val();
	var oldIndex;
	if ($('#tb_investigacion').length > 0) {
		$('.sorted_table').sortable({
  			containerSelector: 'table',
			itemPath: '> tbody',
			itemSelector: 'tr',
			placeholder: '<tr class="placeholder"/>',
		  	onDragStart: function (item, group, _super) {
			    oldIndex = item.index()
			    item.appendTo(item.parent())
			    _super(item)
	  		},
			onDrop: function  (item, container, _super) {
				 newIndex = item.index();
				 if(newIndex != oldIndex){
				 	item.closest('table').find('tbody tr').each(function (i, row) {
				 		var id = $(this).data("id");
				 		var order = i + 1;
				 		$.post(uri + 'admin/orderInvestigacion',{id:id, order:order}, function(data){

				 		});
				 	});
				 }
			}
		})
	}
	if ($('#capacitacion_table').length > 0) {
		$('.sorted_table').sortable({
  			containerSelector: 'table',
			itemPath: '> tbody',
			itemSelector: 'tr',
			placeholder: '<tr class="placeholder"/>',
		  	onDragStart: function (item, group, _super) {
			    oldIndex = item.index()
			    item.appendTo(item.parent())
			    _super(item)
	  		},
			onDrop: function  (item, container, _super) {
				 newIndex = item.index();
				 if(newIndex != oldIndex){
				 	item.closest('table').find('tbody tr').each(function (i, row) {
				 		var id = $(this).data("id");
				 		var order = i + 1;
				 		$.post(uri + 'admin/orderCapacitacion',{id:id, order:order}, function(data){

				 		});
				 	});
				 }
			}
		})
	}
	if($("#tipo_proyecto").length > 0){
		$("#tipo_proyecto").on("change", function(e){
			var v = $(this).val();
			console.log(v);
			if (v === "1") {
				$("#web_proyecto").attr("readonly", "readonly");
				$("#web_proyecto").val("");
			}
			else{
				$("#web_proyecto").removeAttr("readonly");
			}	
			e.preventDefault();
		})
	}
	if ($(".delete-banner").length > 0) {
		$(".delete-banner").on('click', function(e){
			var id = $(this).data('id');
			if(confirm("Desea eliminar este registro?")){
				$.post(uri + "admin/delete-banner", {id:id}, function(data){
					window.location.href = uri+"admin/home_admin";
				});
			}
			e.preventDefault();
		});
	}
	if ($(".delete-investigacion").length > 0) {
		$(".delete-investigacion").on('click', function(e){
			var id = $(this).data('id');
			if(confirm("Desea eliminar este registro?")){
				$.post(uri + "admin/delete-investigacion", {id:id}, function(data){
					window.location.href = uri+"admin/tipo_admin";
				});
			}
			e.preventDefault();
		});
	}
	if ($(".delete-point").length > 0) {
		$(".delete-point").on('click', function(e){
			var id = $(this).data('id');
			if(confirm("Desea eliminar este registro?")){
				$.post(uri + "admin/delete-point", {id:id}, function(data){
					window.location.href = uri+"admin/enfoque_admin";
				});
			}
			e.preventDefault();
		});
	}
	if ($(".delete-aliado").length > 0) {
		$(".delete-aliado").on('click', function(e){
			var id = $(this).data('id');
			if(confirm("Desea eliminar este registro?")){
				$.post(uri + "admin/delete-aliado", {id:id}, function(data){
					window.location.href = uri+"admin/listAliado";
				});
			}
			e.preventDefault();
		});
	}
	if ($(".delete-equipo").length > 0) {
		$(".delete-equipo").on('click', function(e){
			var id = $(this).data('id');
			if(confirm("Desea eliminar este registro?")){
				$.post(uri + "admin/delete-equipo", {id:id}, function(data){
					window.location.href = uri+"admin/listEquipo";
				});
			}
			e.preventDefault();
		});
	}
	if ($(".delete-tipo").length > 0) {
		$(".delete-tipo").on('click', function(e){
			var id = $(this).data('id');
			if(confirm("Desea eliminar este registro?")){
				$.post(uri + "admin/delete-tipo", {id:id}, function(data){
					window.location.href = uri+"admin/tipo_admin";
				});
			}
			e.preventDefault();
		});
	}
	if ($(".delete-tipoc").length > 0) {
		$(".delete-tipoc").on('click', function(e){
			var id = $(this).data('id');
			if(confirm("Desea eliminar este registro?")){
				$.post(uri + "admin/delete-tipoc", {id:id}, function(data){
					window.location.href = uri+"admin/consultoria_admin";
				});
			}
			e.preventDefault();
		});
	}
	if ($(".delete-categoria").length > 0) {
		$(".delete-categoria").on('click', function(e){
			var id = $(this).data('id');
			if(confirm("Desea eliminar este registro?")){
				$.post(uri + "admin/delete-categoria", {id:id}, function(data){
					window.location.href = uri+"admin/categoria_admin";
				});
			}
			e.preventDefault();
		});
	}
	if ($(".delete-proyecto").length > 0) {
		$(".delete-proyecto").on('click', function(e){
			var id = $(this).data('id');
			if(confirm("Desea eliminar este registro?")){
				$.post(uri + "admin/delete-proyecto-herramienta", {id:id}, function(data){
					location.reload();
				});
			}
			e.preventDefault();
		});
	}
	if ($(".delete-capacitacion").length > 0) {
		$(".delete-capacitacion").on('click', function(e){
			var id = $(this).data('id');
			if(confirm("Desea eliminar este registro?")){
				$.post(uri + "admin/delete-capacitacion", {id:id}, function(data){
					location.reload();
				});
			}
			e.preventDefault();
		});
	}
	if ($(".delete-investigacion").length > 0) {
		$(".delete-investigacion").on('click', function(e){
			var id = $(this).data('id');
			if(confirm("Desea eliminar este registro?")){
				$.post(uri + "admin/delete-investigacion", {id:id}, function(data){
					location.reload();
				});
			}
			e.preventDefault();
		});
	}
	if ($( ".datepicker" ).length > 0) {
		$( ".datepicker" ).datepicker();
	}
});