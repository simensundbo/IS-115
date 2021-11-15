
let counter = 0;
//en eventlistner som lytter etter mus bevegelse
addEventListener('mousemove', e => {
    counter = counter + 1;
    document.getElementById('myTag').innerHTML = counter;

    //genererer 3 tall mellom 0 -255 som blur brukt til å lage en rgb fage
    const randNum1 = Math.floor((Math.random() * 200) + 55).toString();
    const randNum2 = Math.floor((Math.random() * 200) + 55).toString();
    const randNum3 = Math.floor((Math.random() * 200) + 55).toString();

    //endrer til den nye fargen
    document.getElementById('body').style.backgroundColor = "rgb(" + randNum1 + "," + randNum2 + "," + randNum3 + ")";
});
