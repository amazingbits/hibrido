
if($("#cpf").length > 0) {
    $("#cpf").mask("000.000.000-00");
}

if($("#telefone").length > 0) {
    $("#telefone").mask("(00) 0 0000-0000");
}

if($(".excluirBtn").length > 0) {
    $(".excluirBtn").click(function(e) {
        let opt = confirm("Tem certeza que deseja excluir este cliente?");
        if(!opt) {
            e.preventDefault();
            return false;
        }
    })
}

if($("#formulario").length > 0) {

    $("#formulario").submit(function(e) {
        let nome = $("#nome");
        let cpf = $("#cpf");
        let email = $("#email");

        if(nome.val().trim().length === 0) {
            nome.css({"background-color": "#ffebee"});
            e.preventDefault();
            return false
        }else{
            nome.css({"background-color": "#fff"});
        }

        if(cpf.val().trim().length !== 14) {
            cpf.css({"background-color": "#ffebee"});
            e.preventDefault();
            return false;
        }else{
            cpf.css({"background-color": "#fff"});
        }

        let regexMail = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
        if(email.val().trim().length === 0 || !regexMail.test(email.val())) {
            email.css({"background-color": "#ffebee"});
            e.preventDefault();
            return false;
        }else{
            email.css({"background-color": "#fff"});
        }

    });
}