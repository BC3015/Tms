<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<center>
    <h1>添加临时授权</h1>
    <form action="doadd" method="post">
        <table>
            {{csrf_field()}}
            <tr>
                <td>被授权车辆</td>
                <td>
                    <select name="authorization_car" id="">
                        <option value=""></option>
                    </select>
                    <input type="text" name="authorization_car">
                </td>
            </tr>
            <tr>
                <td>授权司机</td>
                <td><input type="text" name="authorization_driver"></td>
            </tr>
            <tr>
                <td>授权时间</td>
                <td>
                    <input type="datetime-local" name="authorization_start">至<input type="datetime-local" name="authorization_end">
                </td>
            </tr>
            <tr>
                <td>备注</td>
                <td><textarea name="authorization_desc" id="" cols="30" rows="10"></textarea></td>
            </tr>
            <tr>
                <td colspan="4" align="center"><input type="submit" value="注册"></td>
            </tr>
        </table>
    </form>
</center>
</body>
</html>