<body style="background: #121212; color: #fff">
    <h1 style="text-align: center; color: red">Your Mission:</h1>
    <code style="display: flex; justify-content: center">
        &lt;script&gt;
        alert(1)
        &lt;/script&gt;
    </code>
    <br>
</body>

<?php
//XSS challange 1
//https://www.facebook.com/profile.php?id=100093132893476
$host = $_SERVER["HTTP_HOST"];
$xss = $_GET['xss'];
if ($xss) {
    $replacer = preg_replace("<script>", "", $xss);
        echo "<font color=white><h1>$replacer</h1></font>";
    } else {
        echo "<font color=white><h2>Hint: Think Outside The Box</h2></font>";
        echo "<font color=white><h3>Important: You can inject your payload in the GET parameter 'xss' (Example: $host/<font color=red>1.php?xss=</font>Your_XSS_Payload)</h2></font>";
    }
?>
