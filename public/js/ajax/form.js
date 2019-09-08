'use strict';

function sendAjaxRequest(event) {

    event.preventDefault();

    // On récupère la valeur du select
    var valueSelect = $(this).val();

    // Selon la valeur une requête différente sera envoyé
    switch (valueSelect) {
        case 'contact':
            $.get(route('contact'), getAjaxResponse);
            break;
        case 'devis':
            $.get(route('devis'), getAjaxResponse);
            break;
        case 'sav':
            $.get(route('sav'), getAjaxResponse);
            break;
    }

}

function getAjaxResponse(data) {
    // Affiche le formulaire récupèré
    $('#selectForm').html(data);
}

function timeOut(){

    // Redirige sur la page home après 6s
    setTimeout(redirectTo(), 6000);

}

function redirectTo() {
    window.location=route('home');
}


$(function () {

    // Lors du changement dans le select activation de la function sendAjaxRequest, simulation d"un changement lors du chargement de la page pour afficher le premier formulaire
    $('#ChoiceForm').on('change', sendAjaxRequest).trigger("change");
    $('#redirectTo').on('click', timeOut).trigger('click');

});
