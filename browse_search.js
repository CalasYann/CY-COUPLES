function displayUsers(data){
    var test = document.getElementById("mode_field");
    test.background="grey";
    var container = document.getElementById("users");

    var users_count = data.length;
    var div_element;

    container.innerHTML = ""

    //ajouter users_count*div qui vont chacun comporter les inforamtions de l'utilisateur
    for (var i = 0; i<users_count; i++){
        div_element = document.createElement("div");
        div_element.classList.add("player");
        

        


        container.appendChild(div_element);
        var link_to_profile = document.createElement('a');
        link_to_profile.href = "page.php?id=" + data[i].mail;
        link_to_profile.innerText = "test" + data[i].nick;
        div_element.appendChild(link_to_profile);
        div_element.innerHTML =  "<a href='" + link_to_profile + "'>"+ data[i].nick +"</a>"+ "<br>" + " Brawler préféré : " +  data[i].brawler;
        

    }
}

function sendData(){

    var xhr = new XMLHttpRequest();

    var data;

    xhr.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200){
            console.log(this.responseText);

            // json parse ???
            // 'foreach'  : var users[i].pseudo .xxx
            let bouton = document.getElementsByTagName("input")[2];

            data = JSON.parse(this.responseText);

            console.log(data);

            displayUsers(data);
        }
    };
    
    let mode    = document.getElementById("mode_field");
    let brawler = document.getElementById("brawler_field");

    console.log(mode);

    params  = "MODE=" + mode.value;
    params += "&BRAWLER=" + brawler.value;

    xhr.open("POST", "browse_players.php", true);
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhr.send(params);

    return data;
}





