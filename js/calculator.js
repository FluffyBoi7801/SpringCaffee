var range = document.querySelector('#calculate');

function change(value){
    document.getElementById("invest").innerHTML=value+" 000";
    document.getElementById("prof").innerHTML=value*7+" 000";
    document.getElementById("calculate").style = "--value:" + value;
}

range.addEventListener('input', function () {
    change(this.value);
}, false);