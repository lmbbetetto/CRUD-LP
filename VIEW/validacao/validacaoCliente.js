jQuery.validator.addMethod('lettersonly', function(value, element) {
    return this.optional(element) || /^[A-Za-záàâãéèêíïóôõöúçñÁÀÂÃÉÈÍÏÓÔÕÖÚÇÑ ]+$/i.test(value);
  }, "Digite apenas letras");


  jQuery.validator.addMethod('telefone', function (value, element) {
    value = value.replace("(","");
    value = value.replace(")", "");
    value = value.replace("-", "");
    value = value.replace(" ", "").trim();
    if (value == '0000000000') {
        return (this.optional(element) || false);
    } else if (value == '00000000000') {
        return (this.optional(element) || false);
    }
    if (["00", "01", "02", "03", , "04", , "05", , "06", , "07", , "08", "09", "10"]
    .indexOf(value.substring(0, 2)) != -1) {
        return (this.optional(element) || false);
    }
    if (value.length < 10 || value.length > 11) {
        return (this.optional(element) || false);
    }
    if (["6", "7", "8", "9"].indexOf(value.substring(2, 3)) == -1) {
        return (this.optional(element) || false);
    }
    return (this.optional(element) || true);
}, 'Informe um número de telefone celular válido!');

jQuery.validator.addMethod('cpf', function(value, element) {
    return this.optional(element) || /^([0-9]{3}\.?[0-9]{3}\.?[0-9]{3}\-?[0-9]{2}|[0-9]{2}\.?[0-9]{3}\.?[0-9]{3}\/?[0-9]{4}\-?[0-9]{2})$/.test(value);
  }, "Digite um CPF válido");


$("#ValidacaoCliente").validate({
    rules: {
        txtNome: {
            required: true,
            lettersonly:true,
            rangelength: [3,50]
        },
        txtTelefone: {
            required: true,
            telefone: true,
        },

        txtCpf: {
            required: true,
            cpf: true,
        },

    },
    messages: {

        txtNome: {
            required: "Digite um nome válido",
            rangelength: jQuery.validator.format("Digite um nome com 3 a 50 letras")
        },
        txtTelefone: {
            required: "Digite um telefone válido",
        },

        txtCpf: {
            required: "Digite um CPF válido",
        },
    }
});

document.getElementById('senhaEye').addEventListener('click', function() {
    let passowerInput = document.getElementById('senha')
    if (passowerInput.type == 'password') {
        passowerInput.type = 'text'
        this.innerHTML = '<i class="fa-solid fa-eye-slash"></i>'
    } else {
        passowerInput.type = 'password';
        this.innerHTML = '<i class="fa-solid fa-eye"></i>'
    }
})