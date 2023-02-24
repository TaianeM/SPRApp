$(document).ready(function () {

    $('#cep').keyup(function () {

        var cep = $('#cep').val();

        $.ajax({
            type: "GET",
            contentType: "application/json",
            url: "https://brasilapi.com.br/api/cep/v1/" + cep,
            success: function (response) {
                $('#uf').val(response.state).change();
                $('#municipio').val(response.city).change();
                $('#rua').val(response.street);
                $('#bairro').val(response.neighborhood);
            }
        });
    });

    $('#uf').on('change', function () {
        var siglaUF = $('#uf').val();


        $.ajax({
            type: "GET",
            contentType: "application/json",
            url: "https://brasilapi.com.br/api/ibge/municipios/v1/" + siglaUF + "?providers=gov",
            success: function (response) {

                $('.deloption').remove();

                response.forEach(function (item) {
                    $('#municipio').append('<option class="deloption" value="'+ item.nome +'">' + item.nome + '</option>');

                });

            }
        });
    });


    $('#id_uso_imovel').on('change', function () {
        var id_uso = $('#id_uso_imovel').val();


        $.ajax({
            type: "GET",
            contentType: "application/json",
            url: "/tipos/usos/" + id_uso,
            success: function (response) {

                $('.del_options_tipos').remove();

                Object.keys(response).forEach((key) => {

                    $('#id_tipos_imovel').append('<option class="del_options_tipos" value="' + key + '">' + response[key] + '</option>');

                });

            }
        });
    });


});


