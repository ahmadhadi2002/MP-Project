<!DOCTYPE html>
<html>

<head>

    <script type="text/javascript">
        function divide() {
            var txt;
            txt = document.getElementById('a').value;
            var text = txt.split(".");
            var str = text.join('.</br>');
            document.write(str);
        }
    </script>
    <title></title>
</head>

<body>
    <form>
        ENTER TEXT:
        <br>
        <textarea rows="20" cols="50" name="txt" id="a">
    </textarea>
        <br>
        <br>
        <input type="submit" name="submit" value="submit" onclick="divide()" />
    </form>
</body>

</html>