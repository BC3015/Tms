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
            <td>司机编码</td>
            <td>是否属于承运商</td>
            <td>所属公司</td>
            <td>所属区域</td>
            <td>司机名称</td>
            <td>性别</td>
            <td>年龄</td>
            <td>身份证号</td>
            <td>驾龄</td>
            <td>驾照</td>
            <td>所属承运商</td>
            <td>手机号</td>
            <td>车型</td>
            <td>司机状态</td>
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
                <td><?= $v['drid']?></td>
                <td><?= $v['yesno']?></td>
                <td><?= $v['companies']?></td>
                <td><?= $v['area']?></td>
                <td><?= $v['drivername']?></td>
                <td><?= $v['sex']?></td>
                <td><?= $v['age']?></td>
                <td><?= $v['numbers']?></td>
                <td><?= $v['years']?></td>
                <td><?= $v['license']?></td>
                <td><?= $v['comname']?></td>
                <td><?= $v['phone']?></td>
                <td><?= $v['typename']?></td>
                <td><?= $v['state']?></td>
                <td><?= $v['remark']?></td>
                <td><?= $v['creator']?></td>
                <td><?= $v['creatordate']?></td>
                <td><?= $v['modifier']?></td>
                <td><?= $v['modifierdate']?></td>
                <td><?= $v['verifier']?></td>
                <td><?= $v['verifierdate']?></td>
                <td>
                    <a href='dele?drid=<?php echo $v->drid;?>'>删除</a>
                    <a href='edit?drid=<?php echo $v->drid;?>'>修改</a>
                </td>
            </tr>
        <?php } ?>

    </table>
</center>
</body>
<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
<script>
    {{--function dele(obj,drid) {--}}
        {{--layer_confirm('确定要删除吗',function (index) {--}}
            {{--$.ajax({--}}
                {{--type:'POST',--}}
                {{--url:'dele'+drid,--}}
                {{--dataType:'json',--}}
                {{--headers:{--}}
                    {{--'X-CSRF-TOKEN':'{{csrf_token()}}',--}}
                {{--},--}}
                {{--success:function (data) {--}}
                    {{--console.log(1);die;--}}
                    {{--if(data.success==true){--}}
                        {{--alert('已删除');--}}
                        {{--window.location.href="show";--}}
                    {{--}--}}
                {{--},--}}
            {{--})--}}
        {{--})--}}
    {{--}--}}
</script>
</html>