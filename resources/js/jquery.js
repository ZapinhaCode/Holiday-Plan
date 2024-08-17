import $ from 'jquery';

$(document).ready(function() {
    console.log("jQuery is ready in a separate file!");
    
    // Exemplo de código jQuery
    $('#testButton').click(function() {
        alert('jQuery está funcionando no arquivo separado!');
    });
});
