$(document).ready(function() {
    
    $("#form").validate({
        debug: true,
        rules: {
            login: {required: true, minlength: 3},
            password: {required: true, minlength: 5}
        },
        messages: {
            login: {required: 'Preencha o campo de login', minlength: 'No mínimo 3 digitos'},
            password: {required: 'Preencha o campo de senha', minlength: 'No mínimo 5 digitos'}
        }
    });
});

 