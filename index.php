<html>
<head>
    <title>My document</title>
    <script>

            var o  = {"name" :"<?php echo $_POST['name'];?>", "email" : "<?php echo $_POST['email'];?>"};
            var t = JSON.stringify(o);
            fun(t);
        function fun(t){
            var xml = new XMLHttpRequest();

            xml.onreadystatechange = function(){
                if (xml.readyState == 4 && xml.status == 200) {
                    document.getElementById('text').innerHTML = xml.responseText;
                }
            };
            xml.open("POST", "getuser.php?q=" + t, true);
            xml.send();
        }
    </script>
</head>
<body>
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
<input type="text" name="name">
<input type="text" name="email">
    <input type="submit">
</form>
<p id="text"></p>


</body>
</html>