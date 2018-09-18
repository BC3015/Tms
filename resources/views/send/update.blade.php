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
            <input type="hidden" name="sendid" value="<?php echo $data->sendid ;?>">
            <tr>
                <td>是否签收</td>
                <td>
                    <input type="radio" value="<?php echo $data->yesno ;?>" name="yesno" checked>是
                    <input type="radio" value="<?php echo $data->yesno ;?>" name="yesno">否
                </td>
            </tr>
            <tr>
                <td>单据类型</td>
                <td><input type="text" name="billstype" value="<?php echo $data->billstype ;?>"></td>
            </tr>
            <tr>
                <td>单据状态</td>
                <td>
                    <input type="radio" value="<?php echo $data->state ;?>" name="state" checked>在线
                    <input type="radio" value="<?php echo $data->state ;?>" name="state">下线
                </td>
            </tr>
            <tr>
                <td>单据日期</td>
                <td><input type="text" name="billsdate" value="<?php echo $data->billsdate ;?>"></td>
            </tr>
            <tr>
                <td>所属公司</td>
                <td><input type="text" name="companies" value="<?php echo $data->companies ;?>"></td>
            </tr>
            <tr>
                <td>派送区域</td>
                <td><input type="text" name="area" value="<?php echo $data->area ;?>"></td>
            </tr>
            <tr>
                <td>所属仓库</td>
                <td><input type="text" name="warehouse" value="<?php echo $data->warehouse ;?>"></td>
            </tr>
            <tr>
                <td>运输路线</td>
                <td><input type="text" name="course" value="<?php echo $data->course ;?>"></td>
            </tr>
            <tr>
                <td>运输方式</td>
                <td><input type="text" name="manner" value="<?php echo $data->manner ;?>"></td>
            </tr>
            <tr>
                <td>承运商</td>
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
                <td>车辆</td>
                <td>
                    <select name="carname" id="" >
                        <option value="<?php echo $data->carname?>"><?php echo $data->carname?></option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>司机</td>
                <td>
                    <select name="drivername" id="" >
                        <option value="<?php echo $data->drivername?>"><?php echo $data->drivername?></option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>司机电话</td>
                <td><input type="text" name="driverphone" value="<?php echo $data->driverphone ;?>"></td>
            </tr>
            <tr>
                <td>派车日期</td>
                <td><input type="text" name="senddate" value="<?php echo $data->senddate ;?>"></td>
            </tr>
            <tr>
                <td>重量</td>
                <td><input type="text" name="weight" value="<?php echo $data->weight ;?>"></td>
            </tr>
            <tr>
                <td>体积</td>
                <td><input type="text" name="bulk" value="<?php echo $data->bulk ;?>"></td>
            </tr>
            <tr>
                <td>载重</td>
                <td><input type="text" name="load" value="<?php echo $data->load ;?>"></td>
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
                    <input type="submit" value="签收修改">
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