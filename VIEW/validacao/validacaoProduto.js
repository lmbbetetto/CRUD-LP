jQuery.validator.addMethod('name', function(value, element) {
    return this.optional(element) || /^[a-zA-ZÀ-ÿ0-9\u00f1\u00d1 ]*$/g.test(value);
  }, "Digite um produto válido");

$("#validacaoProduto").validate({
    rules: {
        txtNome: {
            required: true,
            name:true,
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
            name:"Digite um produto válido",
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