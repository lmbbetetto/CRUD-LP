jQuery.validator.addMethod('lettersonly', function(value, element) {
    return this.optional(element) || /^[A-Za-záàâãéèêíïóôõöúçñÁÀÂÃÉÈÍÏÓÔÕÖÚÇÑ ]+$/i.test(value);
  }, "Digite apenas letras");


  jQuery.validator.addMethod('endereco', function(value, element) {
    return this.optional(element) || /^[a-zA-ZÀ-ÿ0-9\u00f1\u00d1 ]*$/g.test(value);
  }, "Digite apenas letras e numeros");

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

jQuery.validator.addMethod('cnpj', function(value, element) {
    value = jQuery.trim(value);

    value = value.replace('.', '');
    value = value.replace('.', '');
    value = value.replace('/', '');
    value = value.replace('-', '');

    if (value.length != 14) {
        return false;
    }

    var size = value.length - 2;
    var numbers = value.substring(0, size);
    var digits = value.substring(size);
    var sum = 0;
    var pos = size - 7;

    for (var i = size; i >= 1; i--) {
        sum += numbers.charAt(size - i) * pos--;
        if (pos < 2) {
            pos = 9;
        }
    }

    var result = sum % 11 < 2 ? 0 : 11 - (sum % 11);

    if (result != digits.charAt(0)) {
        return false;
    }

    size = size + 1;
    numbers = value.substring(0, size);
    sum = 0;
    pos = size - 7;

    for (var i = size; i >= 1; i--) {
        sum += numbers.charAt(size - i) * pos--;
        if (pos < 2) {
            pos = 9;
        }
    }

    result = sum % 11 < 2 ? 0 : 11 - (sum % 11);

    if (result != digits.charAt(1)) {
        return false;
    }

    return true;
}, "Digite um CNPJ válido.");



$("#validacaoFornecedor").validate({
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
            txtEndereco: {
            required: true,
            endereco: true,
        },

        txtCnpj: {
            required: true,
            cnpj: true,
        },

    },
    messages: {

        txtCnpj: {
            required: "Digite uma quantidade válida",
            number: "Digite apenas números",
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