Vue.component('v-autocompleter', {

  props: ['options'],

  data: function () {
    return {
      selected_city: '',
      googleSearch: '',
      googleSearch_temp: '',
      cities_update: true,
      change_class: 0,
      cities: window.cities,
      list_counter: -1,
      foc: true,
    }
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
    this.createFiltered(this.cities_update);
    this.cities_update=true;
    if(this.list_counter == -1){
    this.googleSearch_temp = this.googleSearch;
    this.createFiltered(true);
    }
    return result;
    }
    },
    },

    methods: {
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


    },
  })