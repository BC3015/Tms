<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<center>
    <h1>欢迎</h1>
    <form id="input">
        {{csrf_field()}}
        <table border="1">
            <tr>
                <td>是否签收</td>
                <td>
                    <input type="radio" value="是" name="yesno" checked>是
                    <input type="radio" value="否" name="yesno">否
                </td>
            </tr>
            <tr>
                <td>单据类型</td>
                <td><input type="text" name="billstype"></td>
            </tr>
            <tr>
                <td>单据状态</td>
                <td>
                    <input type="radio" value="在线" name="state" checked>在线
                    <input type="radio" value="下线" name="state">下线
                </td>
            </tr>
            <tr>
                <td>单据日期</td>
                <td><input type="text" name="billsdate"></td>
            </tr>
            <tr>
                <td>所属公司</td>
                <td><input type="text" name="companies"></td>
            </tr>
            <tr>
                <td>派送区域</td>
                <td><input type="text" name="area"></td>
            </tr>
            <tr>
                <td>所属仓库</td>
                <td><input type="text" name="warehouse"></td>
            </tr>
            <tr>
                <td>运输路线</td>
                <td><input type="text" name="course"></td>
            </tr>
            <tr>
                <td>运输方式</td>
                <td><input type="text" name="manner"></td>
            </tr>
            <tr>
                <td>承运商</td>
                <td>
                    <select name="comname" id="">
                        <?php foreach ($com as $k => $v):?>
                        <option value="<?php echo $v->comname?>"><?php echo $v->comname?></option>
                        <?php endforeach;?>
                    </select>
                </td>
            </tr>
            <tr>
                <td>车型</td>
                <td>
                    <select name="typename" id="">
                        <?php foreach ($types as $k => $v):?>
                        <option value="<?php echo $v->typename?>"><?php echo $v->typename?></option>
                        <?php endforeach;?>
                    </select>
                </td>
            </tr>
            <tr>
                <td>车辆</td>
                <td>
                    <select name="carname" id="">
                        <?php foreach ($news as $k => $v):?>
                        <option value="<?php echo $v->carname?>"><?php echo $v->carname?></option>
                        <?php endforeach;?>
                    </select>
                </td>
            </tr>
            <tr>
                <td>司机</td>
                <td>
                    <select name="drivername" id="">
                        <?php foreach ($dri as $k => $v):?>
                        <option value="<?php echo $v->drivername?>"><?php echo $v->drivername?></option>
                        <?php endforeach;?>
                    </select>
                </td>
            </tr>
            <tr>
                <td>司机电话</td>
                <td><input type="text" name="driverphone"></td>
            </tr>
            <tr>
                <td>派车日期</td>
                <td><input type="text" name="senddate"></td>
            </tr>
            <tr>
                <td>重量</td>
                <td><input type="text" name="weight"></td>
            </tr>
            <tr>
                <td>体积</td>
                <td><input type="text" name="bulk"></td>
            </tr>
            <tr>
                <td>载重</td>
                <td><input type="text" name="load"></td>
            </tr>
            <tr>
                <td>备注</td>
                <td><input type="text" name="remark"></td>
            </tr>
            <tr>
                <td>创建人</td>
                <td><input type="text" name="creator"></td>
            </tr>
            <tr>
                <td>创建日期</td>
                <td><input type="text" name="creatordate"></td>
            </tr>
            <tr>
                <td>修改人</td>
                <td><input type="text" name="modifier"></td>
            </tr>
            <tr>
                <td>修改日期</td>
                <td><input type="text" name="modifierdate"></td>
            </tr>
            <tr>
                <td>审核人</td>
                <td><input type="text" name="verifier"></td>
            </tr>
            <tr>
                <td>审核日期</td>
                <td><input type="text" name="verifierdate"></td>
            </tr>
            <tr>
                <td colspan="2" align="center">
                    <input type="button" id="button" value="签收">
                </td>
            </tr>
        </table>
    </form>
</center>
</body>
<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
<script>
    $('#button').click(function(){
        var data = $('#input').serializeArray();
        // console.log(data);return;
        $.ajax({
            url:"add",
            data:{data:data},
            type:'POST',
            datatype:'json',
            success:function ($res) {
                if($res.status == 0){
                    alert('添加失败');
                    window.location.reload();
                }else if($res.status == 1){
                    alert('添加成功');
                    window.location.href="show";
                }
            },
            error:function (res) {
                console.log(res);

            }
        })
    })
</script>
</html>