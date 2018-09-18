<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>新增车辆</title>
</head>
<body>
<form action="doadd" method="post">
    <table>
        {{csrf_field() }}
        <tr>
            <td>车辆名称：
                <input type="text" name="carname">
            </td>
            <td>所属公司：
                <select name="companies" id="">
                    <?php foreach($common as $k => $v):;?>
                    <option value=""><?php echo $v->companies?></option>
                    <?php endforeach;?>
                </select>
            </td>
            <td>车牌号：<input type="text" name="platenumbers"></td>
            <td>车型：
                <input type="text" name="platenumbers">
                <select name="tid" id="">
                <?php foreach($cartype as $k => $v):;?>
                <option value=""><?php echo $v->tid?></option>
                <?php endforeach;?>
                </select>
            </td>
            <td>规格：<input type="text" name="specification"></td>
        </tr>
        <tr>
            <td>型号：<input type="text" name="version"></td>
            <td>属性：<input type="text" name="property"></td>
            <td>载重：<input type="text" name="load"></td>
            <td>运输单位：<input type="text" name="transport"></td>
        </tr>
        <tr>
            <td>正司机：<input type="text" name="driver"></td>
            <td>正司机手机号：<input type="text" name="driverphone"></td>
            <td>副司机：<input type="text" name="assistant"></td>
            <td>副司机手机号：<input type="text" name="assistantphone"></td>
        </tr>
        <tr>
            <td>车辆状态：<input type="text" name="state"></td>
            <td>是否临时授权司机：<input type="text" name="yesno"></td>
            <td>临时授权司机：<input type="text" name="yes"></td>
            <td>备注：<input type="text" name="remark"></td>
        </tr>
        <tr>
            <td>创建人：<input type="text" name="creator"></td>
            <td>创建日期：<input type="text" name="creatordate"></td>
            <td>修改人：<input type="text" name="modifier"></td>
            <td>修改日期：<input type="text" name="lastrdate"></td>
        </tr>
        <tr>
            <td>审核人：<input type="text" name="verifier"></td>
            <td>审核日期：<input type="text" name="verifierdate"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="添加"></td>
        </tr>
    </table>
</form>
</body>
</html>