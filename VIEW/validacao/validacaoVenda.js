$("#validacaoVenda").validate({
    rules: {
        txtIdProduto: {
            required: true,
            number: true,
            min: 1,
        },

        txtIdFuncionario: {
            required: true,
            number: true,
            min: 1,
        },

        txtIdCliente: {
            required: true,
            number: true,
            min: 1,
        },

        txtQtdeVendida: {
            required: true,
            number: true,
            min: 1,
        },

        txtValorUnitario: {
            required: true,
            number: true,
            min: 0.01,
        },

        txtDataVenda: {
            required: true,
            date: true,
        }

    },
    messages: {
        txtIdProduto: {
            required: "Digite um ID válido",
            number: "Digite apenas números",
            min: "Digite apenas números maiores que 0",
        },

        txtIdFuncionario: {
            required: "Digite um ID válido",
            number: "Digite apenas números",
            min: "Digite apenas números maiores que 0",
        },

        txtIdCliente: {
            required: "Digite um ID válido",
            number: "Digite apenas números",
            min: "Digite apenas números maiores que 0",
        },

        txtQtdeVendida: {
            required: "Digite uma quantidade válida",
            number: "Digite apenas números",
            min: "Digite apenas números maiores que 0",
        },

        txtValorUnitario: {
            required: "Digite um valor válido",
            number: "Digite apenas números",
            min: "Digite apenas números maiores que 0.01",
        },

        txtDataVenda: {
            required: "Digite uma data válida",
            date: "Digite uma data",
        }
    }
});