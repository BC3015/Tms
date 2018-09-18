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
    <h1>添加承运商</h1>
    <form action="doadd" method="post">
        <table>
            {{csrf_field()}}
            <tr>
                <td>所属公司</td>
                <td><input type="text" name="companies"></td>
                <td>所属区域</td>
                <td><input type="text" name="area"></td>
            </tr>
            <tr>
                <td>承运商名称</td>
                <td><input type="text" name="comname"></td>
                <td>简称</td>
                <td><input type="text" name="cname"></td>
            </tr>
            <tr>
                <td>运输方式</td>
                <td><input type="text" name="manner"></td>
            </tr>
            <tr>
                <td>营业执照编号</td>
                <td><input type="text" name="permit"></td>
                <td>运输许可证编号</td>
                <td><input type="text" name="licence"></td>
            </tr>
            <tr>
                <td>合同编号</td>
                <td><input type="text" name="contract"></td>
                <td>承运押金</td>
                <td><input type="text" name="pledge"></td>
            </tr>
            <tr>
                <td>纳税人登记号</td>
                <td><input type="text" name="ratepaying"></td>
                <td>法人</td>
                <td><input type="text" name="legal"></td>
            </tr>
            <tr>
                <td>注册资本金</td>
                <td><input type="text" name="capital"></td>
                <td>开户银行</td>
                <td><input type="text" name="userbank"></td>
            </tr>
            <tr>
                <td>银行账号</td>
                <td><input type="text" name="banknumber"></td>
                <td>银行地址</td>
                <td><input type="text" name="banksite"></td>
            </tr>
            <tr>
                <td>承运商状态</td>
                <td><input type="text" name="state"></td>
                <td>备注</td>
                <td><input type="text" name="remark"></td>
            </tr>
            <tr>
                <td>创建人</td>
                <td><input type="text" name="creator"></td>
                <td>创建日期</td>
                <td><input type="text" name="creatordate"></td>
            </tr>
            <tr>
                <td>修改人</td>
                <td><input type="text" name="modifier"></td>
                <td>修改日期</td>
                <td><input type="text" name="modifierdate"></td>
            </tr>
            <tr>
                <td>审核人</td>
                <td><input type="text" name="verifier"></td>
                <td>审核日期</td>
                <td><input type="text" name="verifierdate"></td>
            </tr>
            <tr>
                <td colspan="4" align="center"><input type="submit" value="注册"></td>
            </tr>
        </table>
    </form>
</center>
</body>
</html>