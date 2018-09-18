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
    <table border="1">
        <tr>
            <td>派车单编号</td>
            <td>是否签收</td>
            <td>单据类型</td>
            <td>单据状态</td>
            <td>单据日期</td>
            <td>所属公司</td>
            <td>派送区域</td>
            <td>所属仓库</td>
            <td>运输路线</td>
            <td>运输方式</td>
            <td>承运商</td>
            <td>车型</td>
            <td>车辆</td>
            <td>司机</td>
            <td>司机电话</td>
            <td>派车司机</td>
            <td>重量</td>
            <td>体积</td>
            <td>载重</td>
            <td>备注</td>
            <td>创建人</td>
            <td>创建日期</td>
            <td>修改人</td>
            <td>修改日期</td>
            <td>审核人</td>
            <td>审核日期</td>
            <td>操作</td>
        </tr>
        <?php foreach ($data as $k => $v){ ?>
        <tr>
            <td><?= $v['sendid']?></td>
            <td><?= $v['yesno']?></td>
            <td><?= $v['billstype']?></td>
            <td><?= $v['state']?></td>
            <td><?= $v['billsdate']?></td>
            <td><?= $v['companies']?></td>
            <td><?= $v['area']?></td>
            <td><?= $v['warehouse']?></td> 
            <td><?= $v['course']?></td>
            <td><?= $v['manner']?></td>
            <td><?= $v['comname']?></td>
            <td><?= $v['typename']?></td>
            <td><?= $v['carname']?></td>
            <td><?= $v['drivername']?></td>
            <td><?= $v['driverphone']?></td>
            <td><?= $v['senddate']?></td>
            <td><?= $v['weight']?></td>
            <td><?= $v['bulk']?></td>
            <td><?= $v['load']?></td>
            <td><?= $v['remark']?></td>
            <td><?= $v['creator']?></td>
            <td><?= $v['creatordate']?></td>
            <td><?= $v['modifier']?></td>
            <td><?= $v['modifierdate']?></td>
            <td><?= $v['verifier']?></td>
            <td><?= $v['verifierdate']?></td>
            <td>
                <a href='dele?sendid=<?php echo $v->sendid;?>'>删除</a>
                <a href='edit?sendid=<?php echo $v->sendid;?>'>修改</a>
            </td>
        </tr>
        <?php } ?>
    </table>
</center>

</body>
</html>