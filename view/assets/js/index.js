function saveProduct() {
    var data = $('#form-product').serialize();

    $.ajax({
        url: '../../Controller/ProductController.php',
        method: 'POST',
        data: data,
        dataType: 'json'
    }).done(function (data) {
        if(data == ""){
            $(".display-success").html("<ul><li>Produto Cadastrado</li></ul>");
            $(".display-success").css("display", "block");
            $(".display-error").hide();
        }else{
            $(".display-error").html("<ul>" + data + "</ul>");
            $(".display-error").css("display", "block");
            $(".display-success").hide();
        }

    })
}

function updateProduct() {
    var data = $('#form-update-product').serialize();

    $.ajax({
        url: '../../Controller/ProductController.php',
        method: 'POST',
        data: data,
        dataType: 'json'
    }).done(function (data) {
        if(data == ""){
            $(".display-success").html("<li>Produto atualizado!</li>");
            $(".display-success").css('display', 'block');
            $('.display-error').hide();
        }else{
            $('.display-error').html("<ul>"+data+"</ul>");
            $('.display-error').css('display', 'block');
            $('.display-success').hide();
        }
    })
}