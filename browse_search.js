const form = document.querySelector("#browsing_info");


async function sendData(){
    const formData = new FormData(form);

    const response = await fetch("*****.php");

}

//récupérer les informations du formulaire et les envoyer vers un fichier php : https://developer.mozilla.org/en-US/docs/Learn/Forms/Sending_forms_through_JavaScript