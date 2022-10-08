<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>


    <div class="agami-card"></div>
    <div class="agami-card"></div>

    <script>
        // const arr = [{
        //         name: "alibaba1",
        //         age: "40"
        //     },
        //     {
        //         name: "alibaba2",
        //         age: "40"
        //     },

        //     {
        //         name: "alibaba3",
        //         age: "40"
        //     },

        //     {
        //         name: "alibaba4",
        //         age: "40"
        //     },
        // ]


        const card = document.querySelectorAll('.agami-card');
        console.log(`card =>`, card);

        const p = agamiCard("marf", "hasf", "sdhf");

        for (let i = 0; i <= card.length; i++) {
            card[i].appendChild(p);
        }


        function agamiCard(title, body, src) {
            const childP = document.createElement("p")
            console.log("HEllo")
            childP.innerText = title;

            const para = document.createElement("div");
            para.appendChild(childP);
            return para
        }
    </script>
</body>

</html>