<!doctype html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script
            src="https://code.jquery.com/jquery-3.2.1.js"
            integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="
            crossorigin="anonymous"></script>
    <script src="https://unpkg.com/vue"></script>
    <title>てすとあっｐ</title>
</head>
<body>
<div id="app">
    <p v-for="aaaaa in message">
        @{{ aaaaa.name }}
    </p>
</div>
<script>
    aaa = null;
    $.get("/api/app",function(data){
        aaa = JSON.parse(data);
        var app = new Vue({
            el: '#app',
            data: {
                message: aaa
            }
        })
    });
</script>
</body>
</html>