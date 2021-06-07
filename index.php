<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- vue -->
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.12/dist/vue.js"></script>
    <!-- axios -->
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <!-- css -->
    <link rel="stylesheet" href="dist/app.css">
    <title>Php Ajax Disks</title>
</head>

<body>
    <div id="app">
        <div class="container-flex item-container">
            <div v-for="disco in listaDischi" class="item container-flex">
                <img :src="disco.poster" alt="">
                <h3>{{disco.title}}</h3>
                <p>{{disco.author}}</p>
                <p>{{disco.genre}}</p>
                <p>{{disco.year}}</p>
            </div>
        </div>
    </div>
    <script src="scripts/myscript.js"></script>
</body>

</html>