<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="utf-8">
    <title>Google</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.12/dist/vue.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-throttle-debounce/1.1/jquery.ba-throttle-debounce.min.js" integrity="sha512-JZSo0h5TONFYmyLMqp8k4oPhuo6yNk9mHM+FY50aBjpypfofqtEWsAgRDQm94ImLCzSaHeqNvYuD9382CEn2zw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" type="text/css" href="autocompleter.css">
      <script src="./autocompleter.js"></script>
    <link rel="stylesheet" type="text/css" href="style2.css">

</head>

<body>
    <div id="app" :class="[classes == 1 ? 'results' : 'main']">

        <nav class="bar">
            <a href="#">Gmail</a>
            <a href="#">Grafika</a>
            <img src="square.png" class="google_apps" role="button"></img>
            <button>Zaloguj się</button>
        </nav>

        <section class="search">
            <img src="logo.png" class="logo">
            <form>
                <br><br>
                <div class="search_elements">
                    <div class="dropdown_content">
                        <input @focus="foc" ref="first" @input="findResultsDebounced" type="text" class="search_input" v-on:keyup.down="down" v-on:keyup.up="up"  />
                        <div class="bottom_border"></div>
                        <div class="list">
                            <ul v-for="(city, index) in filtered" v-on:click="updated(city.name)">
                                <li :class="{grey_content: index == list_counter}">
                                    <a v-on:click="choose(index)" v-html="boldfunc(city)">{{ city }}</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <img src="search_icon.png" class="search_icon" />
                    <img src="microphone.png" class="micro" />
                    <input v-on:click="pages()" type="button" class="search_button" value="Sukaj w google" />
                    <input v-on:click="pages()" type="button" class="search_button" value="Szczęśliwy traf" />
                </div>
            </form>
        </section>

        <footer class="footer_main">
            <h4>Polska</h4>
            <div class="links">
                <div class="link_1">
                    <a href="#">O nas</a>
                    <a href="#">Reklamuj się</a>
                    <a href="#">Dla firm</a>
                    <a href="#">Jak działa wyszukiwarka</a>
                </div>
                <div class="link_2">
                    <a href="#"><img src="leaf.png" class="leaf">Nautralność węglowa od 2007 roku</a>
                </div>
                <div class="link_3">
                    <a href="#">Prywatność</a>
                    <a href="#">Warunki</a>
                    <a href="#">Ustawienia</a>
                </div>
            </div>
        </footer>


        <div class="top_nav">

            <img src="https://www.google.com/images/branding/googlelogo/2x/googlelogo_color_92x30dp.png" alt="" v-on:click="pages()">

            <ul class="option">
                <li><a href="#"><img src="square.png" class="google_apps" role="button"></a></li>
                <li><button class="signIn" type="button" name="button">Zaloguj się</button></li>
            </ul>

            <div class="settings_search">

                <div class="search_elem">
                    <input ref="second" type="text" v-model="googleSearch" />
                    <img src="loupe2.png" class="search_icon">
                    <img src="microphone.png" class="micro">
                    <img src="keyboard.png" class="search_keyboard">
                    <div class="line"></div>
                    <img src="iks.png" class="search_x">
                </div>

                <ul class="search_options">
                    <li class="left active"><a href="#">Wszystko</a></li>
                    <li class="left"><a href="#">Wiadomości</a></li>
                    <li class="left"><a href="#">Grafika</a></li>
                    <li class="left"><a href="#">Wideo</a></li>
                    <li class="left"><a href="#">Mapy</a></li>
                    <li class="left"><a href="#">Więcej</a></li>
                    <li class="right"><a class="tools" href="#">Narzędzia</a></li>
                    <li class="right"><a href="#">Ustawienia</a></li>
                </ul>

            </div>

        </div>

        <div class="searchResults">

            <p class="results_number">Około 19 400 000 wyników (0,66 s)</p>


            <div class="result">
                <a class="link" href="#">
                    https://www.agh.edu.pl
                </a><button>▼</button>
                <h2><a href="#">Strona główna AGH</a></h2>
                <p>Zapoznaj się z polityką obsługi plików cookies (ciasteczek) w serwisie AGH. Jeśli Państwa przeglądarka nie blokuje takich plików, przesyłanych przez nasz ...</p>
            </div>

            <div class="result">
                <a class="link" href="#">
                    https://www.facebook.com › Places › Kraków, Poland
                </a><button>▼</button>
                <h2><a href="#">Akademia Górniczo-Hutnicza w Krakowie - Home | Facebook</a></h2>
                <p>Akademia Górniczo-Hutnicza w Krakowie, Cracow, Poland. 65905 likes · 1432 talking about this · 26097 were here. AGH - Akademia Górniczo-Hutnicza im....</p>
            </div>

            <div class="result">
                <a class="link" href="#">
                    https://pl.wikipedia.org › wiki › Akademia_Górniczo-H...
                </a><button>▼</button>
                <h2><a href="#">Akademia Górniczo-Hutnicza im. Stanisława Staszica w ...</a></h2>
                <p>Stanisława Staszica w Krakowie, AGH (dawniej Akademia Górnicza w Krakowie), nazwa międzynarodowa AGH University of Science and Technology (wcześniej ...</p>
            </div>

            <div class="result">
                <a class="link" href="#">
                    https://twitter.com › agh_krakow
                </a><button>▼</button>
                <h2><a href="#">AGH Kraków (@AGH_Krakow) | Twitter</a></h2>
                <p>The latest Tweets from AGH Kraków (@AGH_Krakow). Akademia Górniczo-Hutnicza W Krakowie / AGH University of Science and Technology. Najlepsza ...</p>
            </div>

            <div class="result">
                <a class="link" href="#">
                    https://www.instagram.com › agh.krakow
                </a><button>▼</button>
                <h2><a href="#">Akademia Górniczo-Hutnicza (@agh.krakow) • Instagram ...</a></h2>
                <p>16k Followers, 279 Following, 1331 Posts - See Instagram photos and videos from Akademia Górniczo-Hutnicza (@agh.krakow)</p>
            </div>

            <div class="result">
                <a class="link" href="#">
                    https://www.otouczelnie.pl › uczelnia › Akademia-Gorn...
                </a><button>▼</button>
                <h2><a href="#">AKADEMIA GÓRNICZO HUTNICZA w Krakowie | 68 ...</a></h2>
                <p>... I i II stopnia, doktoranckie, podyplomowe, wydziały, kierunki studiów, zasady rekrutacji, informacje praktyczne o uczelni, filmiki. Interesują Cię studia na AGH?</p>
            </div>

            <div class="result">
                <a class="link" href="#">
                    https://www.wydawnictwoagh.pl
                </a><button>▼</button>
                <h2><a href="#">Wydawnictwo AGH</a></h2>
                <p>Serwis Wydawnictwa AGH.</p>
            </div>

            <br><br>

            <table class="pages_numbers">
                <tr>
                    <td><span class="blue">G</span></td>
                    <td><span class="red">o</span></td>
                    <td><span class="yellow">o</span></td>
                    <td><span class="yellow">o</span></td>
                    <td><span class="yellow">o</span></td>
                    <td><span class="yellow">o</span></td>
                    <td><span class="yellow">o</span></td>
                    <td><span class="yellow">o</span></td>
                    <td><span class="yellow">o</span></td>
                    <td><span class="yellow">o</span></td>
                    <td><span class="yellow">o</span></td>
                    <td><span class="blue">g</span></td>
                    <td><span class="green">l</span></td>
                    <td><span class="red">e</span></td>
                    <td rowspan="2" style="width: 10px;"></td>
                    <td><span class="blue arrow">></span></td>
                </tr>

                <tr>
                    <td class="page_nr"></td>
                    <td class="page_nr" style="color: black; cursor: text;">1</td>
                    <td class="page_nr">2</td>
                    <td class="page_nr">3</td>
                    <td class="page_nr">4</td>
                    <td class="page_nr">5</td>
                    <td class="page_nr">6</td>
                    <td class="page_nr">7</td>
                    <td class="page_nr">8</td>
                    <td class="page_nr">9</td>
                    <td class="page_nr">10</td>
                    <td colspan="3"></td>
                    <td class="page_nr">Następna</td>
                </tr>

            </table>

        </div>

        <div class="footer">

            <div class="localization">
                <p>
                    <a class="country">Polska</a>
                    <a class="where"><strong>Podgórze Duchackie, Kraków</strong> - Z Twojego adresu internetowego </a>
                    <a class="where2">- Użyj dokładnej lokalizacji</a><a class="where2"> - Dowiedz się więcej</a>
                </p>
            </div>

            <ul>
                <li><a href="#">Pomoc</a></li>
                <li><a href="#">Prześlij opinię</a></li>
                <li><a href="#">Prywatność</a></li>
                <li><a href="#">Warunki</a></li>
            </ul>

        </div>
    </div>
</body>
<script>
    var app = new Vue({
    el: '#app',
    data: {
    selected_city: '',
    googleSearch: '',
    googleSearch_temp: '',
    cities_update: true,
    classes: 0,
    results: [],
    cities: window.cities,
    list_counter: -1,
    foc: true,
    },


    watch: {

    list_counter: function(){
    this.cities_update = false;
    this.googleSearch = this.filtered[this.list_counter].name;
    },

    googleSearch: function(){
    if(this.googleSearch.length == 0){
    this.filtered = '';
    }
    else{
    this.findResultsDebounced(this.cities_update);
    this.cities_update=true;
    if(this.list_counter == -1){
    this.googleSearch_temp = this.googleSearch;
    this.findResultsDebounced(true);
    }
    return result;
    }
    },
    },

    methods: {
        findResultsDebounced : Cowboy.debounce(100, function findResultsDebounced() {
               console.log('Fetch: ')
               
                fetch(`http://localhost:8080//jlaszczyk99.github.io-main/google/search.php?name=lota`)
                    .then(response => response.json())
                    .then(data => {
                        console.log('Data: ', data);
                        this.results = data;
                    });
            }),
    createFiltered(bool){
    if(bool){
    let result = this.cities.filter(city => city.name.includes(this.googleSearch));
    if(result.length > 10){
    this.filtered = result.slice(1, 11);
    }
    else{
    this.filtered = result;
    }
    this.list_counter = -1;

    }
    },

    pages() {
    if (this.classes == 0){
    this.classes = 1;
    }
    else{
    this.googleSearch = '';
    this.classes = 0;
    }
    },
    updated(name){
    this.googleSearch = name;
    this.pages(); 
    },
    choose(i){
    this.googleSearch = this.filtered[i].name;
    },

    up() {
    if(this.list_counter > -1){
    this.list_counter -= 1;
    }
    else if(this.list_counter == 0){
    this.list_counter = this.filtered.length - 1;
    }
    },

    down() {
    if(this.list_counter < this.filtered.length - 1){
    this.list_counter += 1;
    }
    else if(this.list_counter == this.filtered.length - 1){
    this.list_counter = -1;
    }
    },

    boldfunc(input_city){
    let regex = new RegExp(this.googleSearch_temp, "gi");
    let bold = "<b>" +
    input_city.name.replace(regex, match =>
    {return "<span class='thin'>"+ match +"</span>";})
    + "</b>";
    return bold;
    }


    }


    });
</script>
</html>