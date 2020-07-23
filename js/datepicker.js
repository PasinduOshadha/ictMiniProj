
// dateTimePicker

let dateField = document.getElementById('date');
var timeField = document.getElementById('time');
let form = document.getElementById('booking-form');


let bookingDate = new mdDateTimePicker.default({
    type: 'date',
    future: moment().add(2, 'years')
});

// let bookingTime = new mdDateTimePicker.default({
//     type: 'time'
// });


dateField.addEventListener('click', (e)=>{
    e.preventDefault();

    //console.log(bookingDate);
    bookingDate.toggle();
})

// adding selected calender date to date field
bookingDate.trigger = document.getElementById('date');
document.getElementById('date').addEventListener('onOk', function() {
  this.value = bookingDate.time.format('YYYY-MM-DD');
});
