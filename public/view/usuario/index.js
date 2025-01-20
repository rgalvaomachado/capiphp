$(document).ready(function() {
    $('#criar').submit(function(e) {
        e.preventDefault();

        const formData = getFormData(this);

        apiResponse = apiPost('/usuario', formData)

        const alert = document.getElementById("messageAlert");

        alert.innerHTML = apiResponse.message;

        if(apiResponse.access){
            alert.style.color = "green";
            setTimeout(function(){
                alert.innerHTML = "";
            }, 3000);
        }else{
            alert.style.color = "red";
            setTimeout(function(){
                alert.innerHTML = "";
            }, 3000);
        }

        window.location.assign("/usuario");
    });

    $('#editar').submit(function(e) {
        e.preventDefault();

        const formData = getFormData(this);

        apiResponse = apiPut('/usuario', formData)

        const alert = document.getElementById("messageAlert");

        alert.innerHTML = apiResponse.message;

        if(apiResponse.access){
            alert.style.color = "green";
            setTimeout(function(){
                alert.innerHTML = "";
            }, 3000);
        }else{
            alert.style.color = "red";
            setTimeout(function(){
                alert.innerHTML = "";
            }, 3000);
        }

        window.location.assign("/usuario");
    });

    $('#deletar').submit(function(e) {
        e.preventDefault();

        const formData = getFormData(this);

        apiResponse = apiDelete('/usuario', formData)

        const alert = document.getElementById("messageAlert");

        alert.innerHTML = apiResponse.message;

        if(apiResponse.access){
            alert.style.color = "green";
            setTimeout(function(){
                alert.innerHTML = "";
            }, 3000);
        }else{
            alert.style.color = "red";
            setTimeout(function(){
                alert.innerHTML = "";
            }, 3000);
        }

        window.location.assign("/usuario");

    });
});

function loadUsuarios(){
    apiResponse = apiGet('/usuarios')
    if(apiResponse.access){
        $("#lista").html('');
        apiResponse.usuarios.map(({id, nome}) => {
            $('#lista').append(`
                <tr>
                    <td class="text-left">
                        ${nome}
                    </td>
                    <td>
                        <a href="/usuario/editar?id=${id}"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                    </td>
                    <td>
                        <a href="/usuario/deletar?id=${id}"><i class="fa fa-trash" aria-hidden="true"></i></a>
                    </td>
                </tr>
            `);
        });
    }
}

function loadUsuario(){
    const params = getUrlParameters();
    apiResponse = apiGet('/usuario', params)
    if(apiResponse.access){
        let usuario = apiResponse.usuario;
        $("#id").val(usuario.id);
        $("#nome").val(usuario.nome);
        $("#email").val(usuario.email);
        $("#senha").val(usuario.senha);
    }
}