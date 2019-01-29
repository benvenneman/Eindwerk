var oplossingen = new Array();

function myFunction(p1, p2) {
    if (p1 > p2) {
        a = p1;
        b = p2;
        answer = myFunction2(a, b);
        return answer;
    } else {
        a = p2;
        b = p1;
        answer = myFunction2(a, b);
        return answer;
    }
}

function myFunction2(a, b) {
    if (b == 0) {
        answer = a;
        return answer;
    } else {
        return answer = myFunction2(b, (a % b));
    }
}

function init() {
    var x;
    var ggd = document.getElementsByClassName("ggd")[0];
    for (x = 0; x < 10; x++) {
        var getal1 = Math.floor((Math.random() * 100) + 1);
        var getal2 = Math.floor((Math.random() * 100) + 1);
        answer = myFunction(getal1, getal2);
        oplossingen[x] = answer;
        var p = document.createElement("p");
        var t = document.createTextNode("ggd van " + getal1 + " en " + getal2 + " = ");
        p.appendChild(t);

        var input = document.createElement("input");
        input.setAttribute("type", "text");
        input.setAttribute("id", "z" + x);

        linebreak = document.createElement("br");

        ggd.appendChild(t);
        ggd.appendChild(input);
        ggd.appendChild(linebreak);
    }
}

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
}