document.getElementById("cp").onchange = function () {
    var xhr = new XMLHttpRequest();
    xhr.open("GET", "https://apicarto.ign.fr/api/codes-postaux/communes/" + document.getElementById("cp").value, true);
    xhr.onload = function () {
        let html = "";
        if (xhr.status == 200) {
            var json = JSON.parse(xhr.responseText);
            for (let i = 0; i < json.length; i++) {
                html += `<option value="${json[i]["nomCommune"]}">${json[i]["nomCommune"]}</option>`;
            }
        }
        document.getElementById("ville").innerHTML = html;
    }
    xhr.send();
};

document.getElementById("cp").onload = function () {
    var xhr = new XMLHttpRequest();
    xhr.open("GET", "https://apicarto.ign.fr/api/codes-postaux/communes/" + document.getElementById("cp").value, true);
    xhr.onload = function () {
        let html = "";
        if (xhr.status == 200) {
            var json = JSON.parse(xhr.responseText);
            for (let i = 0; i < json.length; i++) {
                html += `<option value="${json[i]["nomCommune"]}">${json[i]["nomCommune"]}</option>`;
            }
        }
        document.getElementById("ville").innerHTML = html;
    }
    xhr.send();
};