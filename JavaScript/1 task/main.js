function array() {
    var arr = [1, 2, 3, 4, 5];
    for(var i = 0; i < arr.length; i++) {
        document.write(arr[i] + " ");
    };
    document.write("<br/>");
    for(var i = arr.length-1; i >= 0; i--) {
        document.write(arr[i] + " ");
    };
};
array();