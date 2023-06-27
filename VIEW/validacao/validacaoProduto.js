jQuery.validator.addMethod('lettersonly', function(value, element) {
    return this.optional(element) || /^[A-Za-záàâãéèêíïóôõöúçñÁÀÂÃÉÈÍÏÓÔÕÖÚÇÑ ]+$/i.test(value);
  }, "Digite apenas letras");

$("#validacaoProduto").validate({
    rules: {
        txtNome: {
            required: true,
            lettersonly:true,
            rangelength: [3,50]
        },

        txtIdCategoria: {
            required: true,
            number: true,
            min: 1,
        },

        txtIdFornecedor: {
            required: true,
            number: true,
            min: 1,
        },

        txtQtdeEstoque: {
            required: true,
            number: true,
            min: 0,
        },

        txtValorUnitario: {
            required: true,
            number: true,
            min: 0.01,
        }

    },
    messages: {
        txtNome: {
            required: "Digite um produto válido",
            lettersonly:"Digite apenas letras",
            rangelength: jQuery.validator.format("Digite um produto com 3 a 50 letras")
        },

        txtIdCategoria: {
            required: "Digite um ID válido",
            number: "Digite apenas números",
            min: "Digite um número maior ou igual a 1"
        },

        txtIdFornecedor: {
            required: "Digite um ID válido",
            number: "Digite apenas números",
            min: "Digite um número maior ou igual a 1"
        },

        txtQtdeEstoque: {
            required: "Digite um número válido",
            number: "Digite apenas números",
            min: "Digite um número maior ou igual a 0"
        },

        txtValorUnitario: {
            required: "Digite um preço válido",
            number: "Digite apenas números",
            min: "Digite um número maior ou igual a 0.01"
        }
    }
});