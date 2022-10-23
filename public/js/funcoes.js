var str = '#len'; //increment by 1 up to 1-nelemnts
$(document).ready(function() {
    var i, stop;
    i = 0;
    stop = 5; //num elements
    setInterval(function() {
        if (i > stop) {
            return;
        }
        $('#len' + (i++)).toggleClass('bounce');
    }, 300)
});