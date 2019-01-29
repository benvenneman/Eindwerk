<?php
    include "includes/header.php";
    include "database/database.php";
?>

<link rel="stylesheet" href="css/toets.css">
<script>
var oplossingen = new Array();
    function init() {
            var x;
            var ggd = document.getElementsByClassName("ggd")[0];
            for(x = 0; x < 10; x++) 
            {
                var getal1 = Math.floor((Math.random() * 100) + 1);
                var getal2 = Math.floor((Math.random() * 100) + 1);
                document.getElementById("demo").innerHTML = myFunction(getal1, getal2);
                //answer = myFunction(getal1 , getal2);
                document.getElementById("output").innerHTML = oplossing;

                //oplossingen[x] = oplossing;

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

    function myFunction(p1, p2) {
          if (p1 > p2) {
            a = p1;
            b = p2;
            answer = myFunction2(a , b);
            return answer;
        } else {
            a = p2;
            b = p1;
            answer = myFunction2(a , b);
            return answer;
        }
}

function myFunction2(a, b) {
         if(b == 0) {
            answer = 5;
            return 5;
        } else {
            return answer = myFunction2(b, (a % b));
        }
}
    } 
</script>

</head>
<body onload="init()">
<div class="container">
<p id="demo"></p>
        <br><br>
        <h1 class="text-center">Toets ggd</h1>
        <hr><br><br>
        <div class="row">
            <div class="col-sm-2">
                    
            </div>
            <div class="col-sm-8">
                <div class="text-center">
                    <div class="ggd">
                        
                    </div>
                </div>
            </div>
            <div class="col-sm-2">

            </div>
        </div>
</div>
<?php
        //} else {
        //include_once "includes/nietingelogd.php";
        //}
    include_once "includes/footer.php";
?>

