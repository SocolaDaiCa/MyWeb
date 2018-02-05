var app = new Vue({
    el: '#app',
    data: {
        object: {
            a: {b:'s'}
        }
    }
});
$(function() {
    app.object['socola'] = {
        firstName: 'John',
        lastName: 'Doe',
        age: 30
    };
});