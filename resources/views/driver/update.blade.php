<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<center>
    <h1>欢迎</h1>
    <form action="update" method="post">
        {{csrf_field()}}
        <table border="1">
            <input type="hidden" name="_token" value="<?php echo csrf_token();?>">
            <input type="hidden" name="drid" value="<?php echo $data->drid ;?>">
            <tr>
                <td>是否属于承运商</td>
                <td>
                    <input type="radio" value="<?php echo $data->yesno ;?>" name="yesno" checked>是
                    <input type="radio" value="<?php echo $data->yesno ;?>" name="yesno">否
                </td>
            </tr>
            <tr>
                <td>所属公司</td>
                <td><input type="text" name="companies" value="<?php echo $data->companies ;?>"></td>
            </tr>
            <tr>
                <td>所属区域</td>
                <td>
                    <select name="area" value="<?php echo $data->area ;?>">
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
                <td><input type="text" name="drivername" value="<?php echo $data->drivername ;?>"></td>
            </tr>
            <tr>
                <td>性别</td>
                <td>
                    <input type="radio" value="<?php echo $data->sex ;?>" name="sex" checked>男
                    <input type="radio" value="<?php echo $data->sex ;?>" name="sex">女
                </td>
            </tr>
            <tr>
                <td>年龄</td>
                <td><input type="text" name="age" value="<?php echo $data->age ;?>"></td>
            </tr>
            <tr>
                <td>身份证号</td>
                <td><input type="text" name="numbers" value="<?php echo $data->numbers ;?>"></td>
            </tr>
            <tr>
                <td>驾龄</td>
                <td><input type="text" name="years" value="<?php echo $data->years ;?>"></td>
            </tr>
            <tr>
                <td>驾照</td>
                <td><input type="text" name="license" value="<?php echo $data->license ;?>"></td>
            </tr>
            <tr>
                <td>所属承运商</td>
                <td>
                    <select name="comname" id="" >
                        <option value="<?php echo $data->comname?>"><?php echo $data->comname?></option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>车型</td>
                <td>
                    <select name="typename" id="" >
                        <option value="<?php echo $data->typename?>"><?php echo $data->typename?></option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>手机号</td>
                <td><input type="text" name="phone" value="<?php echo $data->phone ;?>"></td>
            </tr>
            <tr>
                <td>司机状态</td>
                <td><input type="text" name="state" value="<?php echo $data->state ;?>"></td>
            </tr>
            <tr>
                <td>备注</td>
                <td><input type="text" name="remark" value="<?php echo $data->remark ;?>"></td>
            </tr>
            <tr>
                <td>创建人</td>
                <td><input type="text" name="creator" value="<?php echo $data->creator ;?>"></td>
            </tr>
            <tr>
                <td>创建日期</td>
                <td><input type="text" name="creatordate" value="<?php echo $data->creatordate ;?>"></td>
            </tr>
            <tr>
                <td>修改人</td>
                <td><input type="text" name="modifier" value="<?php echo $data->modifier ;?>"></td>
            </tr>
            <tr>
                <td>修改日期</td>
                <td><input type="text" name="modifierdate" value="<?php echo $data->modifierdate ;?>"></td>
            </tr>
            <tr>
                <td>审核人</td>
                <td><input type="text" name="verifier" value="<?php echo $data->verifier ;?>"></td>
            </tr>
            <tr>
                <td>审核日期</td>
                <td><input type="text" name="verifierdate" value="<?php echo $data->verifierdate ;?>"></td>
            </tr>
            <tr>
                <td colspan="2" align="center">
                    <input type="submit" value="修改司机">
                </td>
            </tr>
        </table>
    </form>
</center>
</body>
<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
<script>
    // $('#button').click(function(){
    //     var data = $('#input').serializeArray();
    //     // console.log(data);return;
    //     $.ajax({
    //         url:"update",
    //         data:{data:data},
    //         type:'GET',
    //         datatype:'json',
    //         success:function ($res) {
    //             if($res.status == 0){
    //                 alert('修改失败');
    //                 window.location.reload();
    //             }else if($res.status == 1){
    //                 alert('修改成功');
    //                 window.location.href="show";
    //             }
    //         },
    //         error:function (res) {
    //             console.log(res);
    //
    //         }
    //     })
    // })
</script>
</html>