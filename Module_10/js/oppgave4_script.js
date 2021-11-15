function update() {
    let xhr = new XMLHttpRequest();
    xhr.open('GET', 'files/oppgave4_update.php', true);

    xhr.onreadystatechange = function () {
        if (xhr.readyState == 4 && xhr.status == 200) {
            let resultat = xhr.responseText;

            //parser resultate om til et json objekt
            let json = JSON.parse(resultat);

            //skriver de ut til html siden
            document.getElementById('JavaCount').innerHTML = json[0]
            document.getElementById('PHPCount').innerHTML = json[1]
            document.getElementById('PythonCount').innerHTML = json[2]
            document.getElementById('SwiftCount').innerHTML = json[3]
            document.getElementById('CCount').innerHTML = json[4]
        }
    };
    xhr.send();
}


function add(value) {
    let xhr = new XMLHttpRequest();
    xhr.open('post', 'files/oppgave4_add.php?value=' + value, true);

    xhr.onreadystatechange = function () {
        if (xhr.readyState == 4 && xhr.status == 200) {
            update();
        }
    };

    xhr.send();

}