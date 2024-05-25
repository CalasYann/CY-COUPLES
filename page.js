function send_message(text){

    var xhr = new XMLHttpRequest();

    var data = JSON.stringify(text);
    
    
    params = "USER=" + user;
    params += "&TARGET=" + user;
    params += "&MSG=" + data;

    xhr.open("POST", "messages.php", true);
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhr.send(params);
    console.log(data);
}


function messages_pop_up_window(){

    alert("test");

    var zone = document.getElementById("messagerie_zone");
    var pop_up_div = document.createElement("div");
    var text_zone = document.createElement("input");
    var send_button = document.createElement("button");
    send_button.innerHTML="Envoyer";

    zone.appendChild(pop_up_div);
    pop_up_div.appendChild(text_zone);
    


    text_zone.type = "text";
    send_button.addEventListener("click", function (){send_message(text_zone.value)
    });
    pop_up_div.appendChild(send_button);

}



var messagerie = document.getElementById("mes");



messagerie.addEventListener("click", messages_pop_up_window);
