// api key f72f6212854d177ec2fffc9ac25adcc2

function timer() {
    setInterval(getTemp, 100);
}
//setInterval(getTemp, 600000) //600000 milliseconds = 10 minutes

let counter = 0;

function getTemp() {
    counter++;
    console.log(counter);
    let xhr = new XMLHttpRequest();
    xhr.open('GET', 'files/oppgave5_ApiCall.php', true);

    xhr.onreadystatechange = function () {
        if (xhr.readyState == 4 && xhr.status == 200) {
            let resultat = xhr.responseText;

            //parser resultate om til et json objekt
            let json = JSON.parse(resultat);
            //henter riktig liste fra json objektet som ble returnert fra Api-en
            let list = json.list[0];

            //henter ut temperatur og sted
            let place = list.name;
            let temp = list.main.temp;

            //skriver de ut til html siden
            document.getElementById('place').innerHTML = 'Temperaturen i ' + place;
            document.getElementById('temp').innerHTML = temp + ' ℃';



        }
    };

    xhr.send();

    //funksjonen kller på seg selv. En recursive loop
    setInterval(getTemp, 600000);
}