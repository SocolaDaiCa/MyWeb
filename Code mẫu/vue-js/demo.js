var app2 = new Vue({
    el: '#app-2',
    data: {
        message: 'You loaded this page on ' + new Date(),
        seen: true,
        todos:['1', '2', '3']
    },
    methods: {
    	sayHello: function() {
    		console.log('hello');
    	}
    }
});