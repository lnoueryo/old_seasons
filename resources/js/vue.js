new Vue({
    el: '#app2',
    data: function() {
        return {
        bookings: null,
        dates: dateArray,
    }
},
// mounted (){

//     axios
//     .get('http://127.0.0.1:8080/Ajax/JS_calender')
//     .then(response => (this.bookings = response))
//     .catch(error => (this.error = error))
// },
// created: function() {
//     let that = this;
//    setInterval(function() {
//         axios
//     .get('http://127.0.0.1:8080/Ajax/JS_calender')
//     .then(response => (that.bookings = response))
//     .catch(error => (that.error = error))
//     },10000);

// },
});
