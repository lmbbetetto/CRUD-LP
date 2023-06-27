jQuery.validator.addMethod('lettersonly', function(value, element) {
    return this.optional(element) || /^[A-Za-záàâãéèêíïóôõöúçñÁÀÂÃÉÈÍÏÓÔÕÖÚÇÑ ]+$/i.test(value);
  }, "Digite apenas letras");

  jQuery.validator.addMethod('password', function(value, element) {
    return this.optional(element) || /^(?=.*[A-Z])(?=.*[!#@$%&])(?=.*[0-9])(?=.*[a-z]).{6,15}$/.test(value);
  }, "A senha deve conter entre 6 e 15 caracteres, uma letra maiúscula e uma minúscula, um número e um caracter especial!");

  jQuery.validator.addMethod('email', function(value, element) {
    return this.optional(element) || /^([0-9a-zA-Z]+([_.-]?[0-9a-zA-Z]+)*@[0-9a-zA-Z]+[0-9,a-z,A-Z,.,-]*(.){1}[a-zA-Z]{2,4})+$/.test(value);
  }, "Email incorreto");

  jQuery.validator.addMethod('celular', function (value, element) {
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
  }, "Digite apenas letras");


$("#validacaoFuncionario").validate({
    rules: {
        txtNome: {
            required: true,
            lettersonly:true,
            rangelength: [3,50]
        },

        txtEmail: {
            required: true,
            email: true,
        },

        txtTelefone: {
            required: true,
            celular: true,
        },

        txtCpf: {
            required: true,
            cpf: true,
        },

        txtSenha: {
            required: true,
            password:true,
            rangelength: [6,15]
        },

    },
    messages: {

        txtCpf: {
            required: "Digite uma quantidade válida",
            number: "Digite apenas números",
            min: "Digite apenas números maiores que 0",
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