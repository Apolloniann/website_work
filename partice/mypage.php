<html>
    <head>
    </head>
    <body>
<h1>Stuff</h1>
<div >
    <p id="box"></p>
</div>
<a href='javascript:getStuff();'>Get stuff via AJAX.</a>
<script type='text/javascript'>
function getStuff() {
// Pseudocode for simplicity
request = makeHttpRequest("get_stuff.php");
document.box.innerHTML = request.text;
}
</script>
        </body>
</html>