<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/app.css">
    <title>Dischi</title>
</head>

<body>
    <div id="root">
        <header>
            <div class="container">
                <div id="header-left">
                    <img :src="logo" alt="Spotify-logo">
                </div>
                <div id="header-right">
                    <select name="genre" v-model="genre">
                        <option value="">Tutti</option>
                        <option value="Rock">Rock</option>
                        <option value="Pop">Pop</option>
                        <option value="Jazz">Jazz</option>
                        <option value="Metal">Metal</option>
                    </select>
                    <button type="button" name="button" @click="toFilter">Filtra</button>
                </div>
            </div>
        </header>

        <main>
            <div class="container">
                <div v-for="disc in discsArray" class="disc-container">
                    <img :src="disc.poster" alt="Disc Poster">
                    <h2>{{disc.title}}</h2>
                    <h3>{{disc.author}}</h3>
                    <p>{{disc.year}}</p>
                    <p>{{disc.genre}}
                    </p>
                </div>
            </div>
        </main>

        <footer>
            <div class="container">
                <div id="footer-left"></div>
                <div id="footer-right">
                    <p>spotify by Boolean</p>
                </div>
            </div>
        </footer>
    </div>
</body>

<script src="js/app.js"></script>

</html>