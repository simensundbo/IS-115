//brukes ikke
function getData() {
    let xhr = new XMLHttpRequest();
    
    xhr.open('GET', 'oppgave3_db.php', true);

    xhr.onreadystatechange = function () {
        if (xhr.readyState == 4 && xhr.status == 200) {
            let resultat = xhr.responseText;
            console.log(resultat);

            let json = JSON.parse(resultat);

            console.log(json);

            for (let i = 0; i < json.length; i++) {
                console.log(json[i].fornavn + " " + json[i].etternavn);
            }

        }
    };
    
    xhr.send();
}

//henter profilen
function getProfile(id){
    //Starter en XMLHttpRequest
    let xhr = new XMLHttpRequest();
    
    //åpner php scriptet som skal kjøres med en GET request
    xhr.open('GET', 'files/oppgave3_db.php?id='+id, true);

    //callback funksjon som tar seg av dataen man får fra get requesten
    xhr.onreadystatechange = function () {
        if (xhr.readyState == 4 && xhr.status == 200) {
            let resultat = xhr.responseText;
            console.log(resultat);
            let element = document.getElementById('profile');
            element.innerHTML = resultat;

        }
    };
    
    //sender requesten
    xhr.send();
}