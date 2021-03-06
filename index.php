<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.12/dist/vue.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <link rel="stylesheet" href="dist/style.css">

    <title>Document</title>
</head>
<body>
    
    <div id="app">

        <div class="album-container">
            <div class="album" v-for="album in discsList">

                <img :src="album.poster" alt="">
                <h3 class="titolo">{{ album.title }}</h3>
                <h4 class="artista">{{ album.author}}</h4>
                <h5 class="anno">{{ album.year }}</h5>

            </div>
        </div>

    </div>
    <script src="script.js"></script>
</body>
</html>