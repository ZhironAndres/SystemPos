$(document).ready(function(){
			$('#tabla-admin').DataTable({
				pageLength:10,
				lengthMenu:[[10, 20, 30, -1], [10, 20, 30, 'Todos']]
			});
		});

		$(document).ready(function(){
			$('#tabla-empresa').DataTable({
				pageLength:5,
				lengthMenu:[[5, 10, 20, -1], [5, 10, 20, 'Todos']]
			});
		});

		$(document).ready(function(){
			$('#tabla-usuario').DataTable({
				pageLength:5,
				lengthMenu:[[5, 10, 20, -1], [5, 10, 20, 'Todos']]
			});
		});
