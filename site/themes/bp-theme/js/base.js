const Vue = require('vue')
new Vue ({
    el: '#nav',
    data: {
        isOpen: false
    },
    methods: {
        toggle(){
            this.isOpen = !this.isOpen
            console.log("working")
        }
    }
})

