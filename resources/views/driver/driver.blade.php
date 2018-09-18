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
                <td>是否属于承运商</td>
                <td>
                    <input type="radio" value="是" name="yesno" checked>是
                    <input type="radio" value="否" name="yesno">否
                </td>
            </tr>
            <tr>
                <td>所属公司</td>
                <td><input type="text" name="companies"></td>
            </tr>
            <tr>
                <td>所属区域</td>
                <td>
                    <select name="area">
                        <option value="河北">河北</option>
                        <option value="河南">河南</option>
                        <option value="山西">山西</option>
                        <option value="东北">东北</option>
                        <option value="山东">山东</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>司机名</td>
                <td><input type="text" name="drivername"></td>
            </tr>
            <tr>
                <td>性别</td>
                <td>
                    <input type="radio" value="男" name="sex" checked>男
                    <input type="radio" value="女" name="sex">女
                </td>
            </tr>
            <tr>
                <td>年龄</td>
                <td><input type="text" name="age"></td>
            </tr>
            <tr>
                <td>身份证号</td>
                <td><input type="text" name="numbers"></td>
            </tr>
            <tr>
                <td>驾龄</td>
                <td><input type="text" name="years"></td>
            </tr>
            <tr>
                <td>驾照</td>
                <td><input type="text" name="license"></td>
            </tr>
            <tr>
                <td>所属承运商</td>
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
                <td>手机号</td>
                <td><input type="text" name="phone"></td>
            </tr>
            <tr>
                <td>司机状态</td>
                <td><input type="text" name="state"></td>
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
                    <input type="button" id="button" value="添加司机">
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