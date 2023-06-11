$(document).ready(function() {

    var counters = $(".counterr");
    var countersQuantity = counters.length;
    var counter = [];

    for (let i = 0; i < countersQuantity; i++) {
        counter[i] = parseInt(counters[i].innerHTML);
    }

    var count = function(start, value, id) {
        var localStart = start;
        setInterval(function() {
            if (localStart < value) {
                localStart++;
                counters[id].innerHTML = localStart;
            }
        }, 40);
    };

    for (let j = 0; j < countersQuantity; j++) {
        count(0, counter[j], j);
    }
});

