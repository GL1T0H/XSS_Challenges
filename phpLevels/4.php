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

//XSS challange 4
//https://www.facebook.com/profile.php?id=100093132893476
$host = $_SERVER["HTTP_HOST"];
$xss = $_GET['xss'];
$finder = preg_match_all('#(confirm|alert|prompt|src)#i', $xss);
if ($finder) {
    echo "<font color=white><h3>XSS Detected!</h3></font>";
} else {
    echo "<font color=white><h2>".$xss."</h2></font>";
    echo "<font color=white><h2>Hint: Not the best choice = confirm alert prompt src</h2></font>";
    echo "<font color=white><h3>Important: You can inject your payload in the GET parameter 'xss' (Example: $host/<font color=red>1.php?xss=</font>Your_XSS_Payload)</h2></font>";
}

?>