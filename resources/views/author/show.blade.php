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
<h1><a href="add">新增</a></h1>
<center>
    <table>
        <tr>
            <td>车辆编码：</td>
            <td><input type="text" name=""></td>
        </tr>
    </table>
    <table border="1">
        <tr>
            <td>序号</td>
            <td>被授权车辆</td>
            <td>授权司机</td>
            <td>授权开始时间</td>
            <td>预计授权结束时间</td>
            <td>实际授权结束时间</td>
            <td>备注</td>
            <td>操作人</td>
            <td>操作时间</td>
            <td>操作</td>
        </tr>
        <?php foreach ($data as $k => $v):?>
        <tr>
            <td><?php echo $v->id;?></td>
            <td><?php echo $v->authorization_car;?></td>
            <td><?php echo $v->authorization_driver;?></td>
            <td><?php echo $v->authorization_start;?></td>
            <td><?php echo $v->authorization_end;?></td>
            <td>
                <?php
                    if (strtotime($v->authorization_end)<time()){
                        echo $v->authorization_end;
                    }elseif(!empty($v->actual_time)){
                        echo date('Y/m/d H:i:s',$v->actual_time);
                    }else{
                        echo '未到授权结束时间';
                    }
                ?>
            </td>
            <td><?php echo $v->authorization_desc;?></td>
            <td><?php echo $v->authorization_user;?></td>
            <td><?php echo date('Y/m/d H:i:s',$v->dotime);?></td>
            <td>
                <a href="upd?id=<?php echo $v->id;?>">取消授权</a>
            </td>
        </tr>
        <?php endforeach?>
    </table>
</center>
</body>
</html>