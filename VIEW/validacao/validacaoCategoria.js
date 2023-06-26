jQuery.validator.addMethod('lettersonly', function(value, element) {
    return this.optional(element) || /^[A-Za-záàâãéèêíïóôõöúçñÁÀÂÃÉÈÍÏÓÔÕÖÚÇÑ ]+$/i.test(value);
  }, "Digite apenas letras");

$("#validacaoCategoria").validate({
    rules: {
        txtDescricao: {
            required: true,
            lettersonly:true,
            rangelength: [3,30]
        }
    },
    messages: {
        txtDescricao: {
            required: "Digite uma descrição válida",
            lettersonly:"Digite somente letras",
            rangelength: jQuery.validator.format("A descrição deve ter de 3 a 30 letras")
        }
    }
});