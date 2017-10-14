function activartablaempresas() {
    $('#mydatatable').DataTable({

        processing: true,
        serverSide: true,
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ],
        
         ajax: 'usuario-listar-datatable',
        columns: [
            { data: 'id', name: 'id' },
            { data: 'nombre', name: 'nombre' },
            { data: 'email', name: 'email' },
            { data: 'telefono', name: 'telefono' },
            { data: 'puntos', name: 'puntos' },
            { data: null,  render: function ( data, type, row ) {
                return "<button type='button' class='btn btn-primary' data-toggle='modal' data-target='#Edit-"+data.id+"'><i class='fa fa-edit'> Editar</i></button>                   <button type='button' class='btn btn-danger' data-toggle='modal' data-target='#confirmDelete-"+data.id+"'><i class='fa fa-trash-o'> Eliminar</i></button>"  }  
            }

        ]
    });
}
activartablaempresas();