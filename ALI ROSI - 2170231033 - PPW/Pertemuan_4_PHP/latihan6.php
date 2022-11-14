<!DOCTYPE html>
<html>

<head>
    <title>latihan PHP Mdl 8</title>
</head>

<body>
    <form method="post" action="postAct.php">
        <table width="400" align="center" cellpadding="2" cellpacing="2">
            <tr>
                <td width="130">Nama</td>
                <td><input type="text" name="nama" required></td>
            </tr>
            <tr>
                <td width="130">Email</td>
                <td><input type="email" name="email" required></td>
            </tr>
            <tr>
                <td>
                    <input type="submit" name="btnLogin" value="Login">
                    <input type="reset" name="reset" value="Reset">
                </td>
            </tr>
        </table>
    </form>
</body>

</html>