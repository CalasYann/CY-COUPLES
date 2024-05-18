

function sendData(){

    var xhr = new XMLHttpRequest();

    xhr.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200){
            console.log(this.responseText);

            // json parse ???
            // 'foreach'  : var users[i].pseudo .xxx
            let bouton = document.getElementsByTagName("input")[2];
            bouton.value = "lol";

            console.log(bouton);
        }
    };
    
    let mode    = document.getElementById("mode_field");
    let brawler = document.getElementById("brawler_field");

    console.log(mode);

    params  = "mode=" + mode.value;
    params += "&brawler=" + brawler.value;

    xhr.open("POST", "browse_players.php", true);
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhr.send(params);

}
