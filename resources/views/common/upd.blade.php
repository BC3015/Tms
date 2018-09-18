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
    <form action="doupd" method="post">
        <table>
            {{csrf_field()}}
            <input type="hidden" name="comid" value="<?php echo $data->comid;?>">
            <tr>
                <td>所属公司</td>
                <td><input type="text" name="companies" value="<?php echo $data->companies;?>"></td>
                <td>所属区域</td>
                <td><input type="text" name="area" value="<?php echo $data->area;?>"></td>
            </tr>
            <tr>
                <td>承运商名称</td>
                <td><input type="text" name="comname" value="<?php echo $data->comname;?>"></td>
                <td>简称</td>
                <td><input type="text" name="cname" value="<?php echo $data->cname;?>"></td>
            </tr>
            <tr>
                <td>运输方式</td>
                <td><input type="text" name="manner" value="<?php echo $data->manner;?>"></td>
            </tr>
            <tr>
                <td>营业执照编号</td>
                <td><input type="text" name="permit" value="<?php echo $data->permit;?>"></td>
                <td>运输许可证编号</td>
                <td><input type="text" name="licence" value="<?php echo $data->licence;?>"></td>
            </tr>
            <tr>
                <td>合同编号</td>
                <td><input type="text" name="contract" value="<?php echo $data->contract;?>"></td>
                <td>承运押金</td>
                <td><input type="text" name="pledge" value="<?php echo $data->pledge;?>"></td>
            </tr>
            <tr>
                <td>纳税人登记号</td>
                <td><input type="text" name="ratepaying" value="<?php echo $data->ratepaying;?>"></td>
                <td>法人</td>
                <td><input type="text" name="legal" value="<?php echo $data->legal;?>"></td>
            </tr>
            <tr>
                <td>注册资本金</td>
                <td><input type="text" name="capital" value="<?php echo $data->capital;?>"></td>
                <td>开户银行</td>
                <td><input type="text" name="userbank" value="<?php echo $data->userbank;?>"></td>
            </tr>
            <tr>
                <td>银行账号</td>
                <td><input type="text" name="banknumber" value="<?php echo $data->banknumber;?>"></td>
                <td>银行地址</td>
                <td><input type="text" name="banksite" value="<?php echo $data->banksite;?>"></td>
            </tr>
            <tr>
                <td>承运商状态</td>
                <td><input type="text" name="state" value="<?php echo $data->state;?>"></td>
                <td>备注</td>
                <td><input type="text" name="remark" value="<?php echo $data->remark;?>"></td>
            </tr>
            <tr>
                <td>创建人</td>
                <td><input type="text" name="creator" value="<?php echo $data->creator;?>"></td>
                <td>创建日期</td>
                <td><input type="text" name="creatordate" value="<?php echo $data->creatordate;?>"></td>
            </tr>
            <tr>
                <td>修改人</td>
                <td><input type="text" name="modifier" value="<?php echo $data->modifier;?>"></td>
                <td>修改日期</td>
                <td><input type="text" name="modifierdate" value="<?php echo $data->modifierdate;?>"></td>
            </tr>
            <tr>
                <td>审核人</td>
                <td><input type="text" name="verifier" value="<?php echo $data->verifier;?>"></td>
                <td>审核日期</td>
                <td><input type="text" name="verifierdate" value="<?php echo $data->verifierdate;?>"></td>
            </tr>
            <tr>
                <td colspan="4" align="center"><input type="submit" value="注册"></td>
            </tr>
        </table>
    </form>
</center>
</body>
</html>