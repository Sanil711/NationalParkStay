// JS for datepickers
var datedefault = new Date();
var date = datedefault.getDate();
if(date<10){
    date = '0'+date;
}
var month = datedefault.getMonth() + 1;
if(month<10){
    month = '0'+month;
}
var year = datedefault.getUTCFullYear();

var minDate = year+"-"+month+"-"+date;

document.getElementById("checkIn").setAttribute("min",minDate); //check-in datepicker min value set to today
document.getElementById("checkOut").setAttribute("min",minDate); //same thing with check-out datepicker

document.getElementById("checkIn").onchange = function(){   //check-out min value is changing dynamically according to check-in date
    var checkOutMin = document.getElementById("checkOut");
    checkOutMin.setAttribute("min",this.value);
}

// JS for number of members
var memberMin = 0;
if(memberMin<0){
    memberMin = Math.abs(this.value);
}

document.getElementById("adults").setAttribute("min",memberMin);
document.getElementById("children").setAttribute("min",memberMin);