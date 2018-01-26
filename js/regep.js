<!DOCTYPE html>
<html>
<body>
<script>
let s = "apple is red and tasty";
let r2 = /(red).*(ta)/i;
if (s.search(r2))>=0){
    console.log(s.match(r2));
}
s=s.replace(r2,$2, $1)}
</script>
</body>
</html>
<!DOCTYPE html>
<html>
<body>

<p>Click the button to locate where in the string a specifed value occurs.</p>

<button onclick="myFunction()">Try it</button>

<p id="demo"></p>

<script>
function myFunction() {
    var str = "Hello world, welcome to the universe.";
    var n = str.indexOf("welcome");
    document.getElementById("demo").innerHTML = n;
}
</script>

</body>
</html>
