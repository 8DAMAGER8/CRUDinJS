<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>JS</title>
</head>
<body>
<div class="box">
    шла саша по шосе и сосала сушку
</div>
<div>
    <button class="btn" onclick="sayHello()">Click me</button>
</div>
</body>
</html>
<script>
let $box = document.querySelector('.box')
console.log($box);

function sayHello() {
    $box.remove()
}
</script>
