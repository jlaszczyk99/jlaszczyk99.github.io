var app = new Vue({ 
    el: '#app',
    data: {
        inputHandler: ''
    },
    updated: function() {
        if(app.inputHandler !== '')
            document.body.classList.add("results")
      }
});