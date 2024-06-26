function messageSendBoss(text, user, target){
    send_message(text);
    getMessageHistory(user, target);
}



function MessageHistory(user, target){
    var json_data;
    var number;

    jQuery.ajax({
        type: "POST",
        url: 'messages_process.php',
        dataType: 'json',
        data: {functionname: 'Messages', arguments: [user, target]},

        success: function(obj, textstatus){
            if (!(error in obj)) {
                console.log("succès");
                console.log(obj.result);
                json_data = obj.result;
            }
            else{
                console.log(obj.error);
                console.log("erreur");
            }
        }
    })
    
    data = JSON.parse(json_data);

    console.log(data);

}

function getMessageHistory(user, target){
    var xhr = new XMLHttpRequest();

    var json_data
    var data = "";

    xhr.onreadystatechange = function(){
        if (this.readyState == 4 && this.status == 200){
            console.log(this.responseText);

            json_data = this.responseText;
            data = JSON.parse(json_data);
            console.log(data);

            displayMessages(data, user, target);
        }
    };

    params = "USER=" + user;
    params += "&TARGET=" + target;

    xhr.open("POST", "getMessageHistory.php", true);
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhr.send(params);

    return data;
}


function deleteMessage(user, target, msg){
    console.log("suppression 1");
    var xhr = new XMLHttpRequest();

    xhr.onreadystatechange = function (){
        if (this.readyState == 4 && this.Status == 200){
            console.log("suppression");
            if (this.responseText == "success"){
                getMessageHistory(user, target);
            }
        }
    }

    params = "USER=" + user;
    params += "&TARGET=" + target;
    params +=  "&ID=" + msg.title;

    xhr.open("POST", "message_deletion.php", true);
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhr.send(params);
    
}

function displayMessages(data, user, target){
    console.log(data);
    console.log("displayMessages");
    var number = data.nbr;
    console.log(number);
    var container = document.getElementById("msg_history");
    container.innerHTML = "";

    var all_messages = [];

    for (var i = 0; i<number; i++){
        console.log("data[i]" + data[i]);
        msg_element = document.createElement("div");
        if ( data[i]["user"] == user){
            msg_element.id = "msg_from_user";
            msg_element.class = "msg";
        }
        else{
            msg_element.id = "msg_to_user";
            msg_element.class = "msg";
        }

        msg_element.title = i;

        msg_element.innerHTML = data[i]["msg"];
        console.log(msg_element.innerHTML);
        container.appendChild(msg_element);

        if (msg_element.id == "msg_from_user"){

        var del_icon = document.createElement("img");
        del_icon.classList.add("delete");
        del_icon.src = "trash-icon.png";

        var cdel = document.createElement("a");
       //cdel.href = "google.com";

        //cdel.innerText = "<img href='trash-icon.png' class='delete'/>"
        cdel.appendChild(del_icon);
        msg_element.appendChild(cdel);

        cdel.title = i;


        all_messages[i] = cdel;
        }

        /*cdel.addEventListener("click", function (){
            document
            deleteMessage(user, target, msg_element);
        })*/
    }

    for (let j = 0 ; j<number; j++){
        all_messages[j].addEventListener("click", function (){
            console.log(all_messages[j]);
            deleteMessage(user, target, all_messages[j].parentNode);
        });
    }

    return all_messages;
}

function send_message(text){

    var xhr = new XMLHttpRequest();

    var data = JSON.stringify(text);
    
    
    params = "USER=" + user;
    params += "&TARGET=" + target;
    params += "&MSG=" + data;

    xhr.open("POST", "messages_process.php", true);
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhr.send(params);

    console.log(user);
    console.log(target);
    console.log(data);
}

var textbar = document.getElementById("textbar");
var envoyer = document.getElementById("send");

var refresh = document.getElementById("refresh");

refresh.addEventListener("click", function(){
    var msg_data = getMessageHistory(user, target);
})

console.log(user);
console.log(target);

envoyer.addEventListener("click", function(){
    messageSendBoss(textbar.value, user, target);
})

