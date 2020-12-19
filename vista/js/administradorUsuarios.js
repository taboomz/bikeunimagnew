$(document).ready(function () {
    verUsuarios();
});

function verUsuarios(){
    $.ajax({url: "../../controlador/accion/act_verUsuarios.php",
    success: function(result){
        
      insertarUsuariosEnTabla(JSON.parse(result))
  }})
}

function insertarUsuariosEnTabla(result){
    let usuarios = ''

    $.each(result, function(i) {

        usuarios +='<tr id='+result[i].id+'>'
        +'<td width="100"  style=" border: 1px solid #dddddd; text-align: left;padding: 8px;">'+result[i].nroCedula+'</td>'
        +'<td width="100"  style=" border: 1px solid #dddddd; text-align: left;padding: 8px;">'+result[i].nombres+'</td>'
        +'<td width="20" style="border: 1px solid #dddddd; text-align: left;padding: 8px;">'+result[i].apellidos+'</td>'
        +'<td width="20" style="border: 1px solid #dddddd; text-align: left;padding: 8px;">'+result[i].correo+'</td>'
        +'<td width="20" style="border: 1px solid #dddddd; text-align: left;padding: 8px;">'+result[i].password+'</td>'
        +'<td width="20" style="border: 1px solid #dddddd; text-align: left;padding: 8px;">'+result[i].direccion+'</td>'
        +'<td width="20" style="border: 1px solid #dddddd; text-align: left;padding: 8px;">'+result[i].telefono+'</td>'
        +'<td width="10" style="border: 1px solid #dddddd; text-align: left;padding: 8px;">'+result[i].imagen+'</td>'
        +'<td width="20" style="border: 1px solid #dddddd; text-align: left;padding: 8px;">'+result[i].rol+'</td>'        
        +'<td width="150" style="border: 1px solid #dddddd; text-align: left;padding: 8px;"><a href="#" class="editar mr-3 btn btn-info btn-md" role="button" aria-pressed="true">Editar</a>'
        +'<a href="../../controlador/accion/act_eliminarUsuario.php?id='+result[i].id+'" class="btn btn-danger btn-md" role="button" aria-pressed="true">Eliminar</a></td>'
        +'</tr>'

    })

    $("#usuariosRegistrados tbody").append(usuarios)
    insertarDatosUsuarioEnModal()

}

function insertarDatosUsuarioEnModal(){
    $(".editar").on("click",function(){
        let id = $(this).closest("tr").attr("id")
      
        $.ajax({
            type: "POST",
            data: {id: parseInt(id, 10)},
            url: "../../controlador/accion/act_verUsuarioPorId.php",
            success: function(data){
                let usuario = JSON.parse(data)
             
                $("#modalEditarUsuario").modal('show');

                $("#modalEditarUsuario input[name='id']").val(usuario.id)
                $("#modalEditarUsuario input[name='nroCedula']").val(usuario.nroCedula)
                $("#modalEditarUsuario input[name='nombres']").val(usuario.nombres)
                $("#modalEditarUsuario input[name='apellidos']").val(usuario.apellidos)
                $("#modalEditarUsuario input[name='correo']").val(usuario.correo)
                $("#modalEditarUsuario input[name='password']").val(usuario.password)
                $("#modalEditarUsuario input[name='direccion']").val(usuario.direccion)
                $("#modalEditarUsuario input[name='telefono']").val(usuario.telefono)
                $("#modalEditarUsuario input[name='imagen']").val(usuario.imagen)

               
                
                if(usuario.rol == 1){
                    $("#modalEditarUsuario .rol option:eq(1)").prop('selected', true)
                }else{
                    $("#modalEditarUsuario .rol option:eq(2)").prop('selected', true)
                }
              
          }})

    })
}
