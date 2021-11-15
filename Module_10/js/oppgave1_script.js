function getData() {
    let file = 'data.php'
    document.getElementById('btn1').innerHTML = 'Hentet data fra ' + file;

    //Starter en XMLHttpRequest
    let xhr = new XMLHttpRequest();

    //åpner php scriptet som skal kjøres med en GET request
    xhr.open('GET', 'files/'+ file, true);

    //callback funksjon som tar seg av dataen man får fra get requesten
    xhr.onreadystatechange = function () {
        if (xhr.readyState == 4 && xhr.status == 200) {
            let resultat = xhr.responseText;

            let json = JSON.parse(resultat);

            let ul = document.getElementById('list');

            json.forEach((name) => {
                let li = document.createElement('li');
                li.innerHTML = name;
                ul.appendChild(li);
            })

        }
    };
    
    //sender requesten
    xhr.send();
}