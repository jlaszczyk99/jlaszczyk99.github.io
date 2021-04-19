var app = new Vue({ 
    el: '#app',
    data: {
         inputHandler: '',
        cities: window.cities
    },
    updated: function() {
        if(app.inputHandler !== '')
            document.body.classList.add("results")
            console.log(app.cities)
      }
});