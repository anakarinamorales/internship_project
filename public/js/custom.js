$(function() {
    if (location.search.indexOf('msg') > -1) {
        var msg = location.search.slice(location.search.indexOf('msg=')+4);

        alert(decodeURI(msg));
    }
});