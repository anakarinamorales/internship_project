$(function() {
    if (location.search.indexOf('msg') > -1) {
        var msg = location.search.slice(location.search.indexOf('=')+1);

        alert(decodeURI(msg));
    }
});