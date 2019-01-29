var oplossingen = new Array();

function verbeteren(nummer) { //Nummer is de variabelen die doorgegeven wordt door de onclick functie.
    var opdrachtnummmer = parseFloat(nummer); //Maakt van undifignt, NAN || De fout moet hier ergens worden gezocht. De variabelen wordt doorgegeven maar
    //Niet op de juist manier. Misschien iets met de aanhalingstekens.
    var x;
    var score = 0;
    for (x = 0; x < 10; ++x) {
        var invoerveld = document.getElementById("z" + x);
        var invoerwaarde = invoerveld.value;
        if (invoerwaarde == oplossingen[x]) {
            invoerveld.style.color = "green";
            ++score;
        } else {
            invoerveld.style.color = "red";
        }
    }

    document.getElementById("score").innerHTML = "Je score was " + score + "/10";
    window.location.href = "toets.php?score=" + score + "&nummer=" + opdrachtnummmer; //A geeft als uitkomst NAN terwijl nummer undifignd geeft.
    //Nieuwe linklocatie waardoor we deze kunnen ophalen met php.
}

function init() {
    var x;
    var toets = document.getElementsByClassName("toets")[0];
    for (x = 0; x < 10; x++) {
        var getal1 = Math.floor((Math.random() * 100) + 1);
        var getal2 = Math.floor((Math.random() * 100) + 1);
        var oplossing = getal1 + getal2;
        oplossingen[x] = oplossing;
        var p = document.createElement("p");
        var t = document.createTextNode(getal1 + " + " + getal2 + " = ");
        p.appendChild(t);
        //toets.appendChild(p);
        var input = document.createElement("input");
        input.setAttribute("type", "text");
        input.setAttribute("id", "z" + x);
        linebreak = document.createElement("br");
        toets.appendChild(t);
        toets.appendChild(input);
        toets.appendChild(linebreak);
    }
}