<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>修改车辆</title>
</head>
<body>
<form action="doupd" method="post">
    <table>
        {{csrf_field() }}
        <input type="hidden" name="carid" dataue="<?php echo $data->carid; ?>">
        <tr>
            <td>车辆名称：<input type="text" name="carname" dataue="<?php echo $data->carname; ?>"></td>
            <td>所属公司：<input type="text" name="companies" dataue="<?php echo $data->companies; ?>"></td>
            <td>车牌号：<input type="text" name="platenumbers" dataue="<?php echo $data->platenumbers; ?>"></td>
            <td>规格：<input type="text" name="specification" dataue="<?php echo $data->specification; ?>"></td>
        </tr>
        <tr>
            <td>型号：<input type="text" name="version" dataue="<?php echo $data->version; ?>"></td>
            <td>属性：<input type="text" name="property" dataue="<?php echo $data->property; ?>"></td>
            <td>载重：<input type="text" name="load" dataue="<?php echo $data->load; ?>"></td>
            <td>运输单位：<input type="text" name="transport" dataue="<?php echo $data->transport; ?>"></td>
        </tr>
        <tr>
            <td>正司机：<input type="text" name="driver" dataue="<?php echo $data->driver; ?>"></td>
            <td>正司机手机号：<input type="text" name="driverphone" dataue="<?php echo $data->driverphone; ?>"></td>
            <td>副司机：<input type="text" name="assistant" dataue="<?php echo $data->assistant; ?>"></td>
            <td>副司机手机号：<input type="text" name="assistantphone" dataue="<?php echo $data->assistantphone; ?>"></td>
        </tr>
        <tr>
            <td>车辆状态：<input type="text" name="state" dataue="<?php echo $data->state; ?>"></td>
            <td>是否临时授权司机：<input type="text" name="yesno" dataue="<?php echo $data->yesno; ?>"></td>
            <td>临时授权司机：<input type="text" name="yes" dataue="<?php echo $data->yes; ?>"></td>
            <td>备注：<input type="text" name="remark" dataue="<?php echo $data->remark; ?>"></td>
        </tr>
        <tr>
            <td>创建人：<input type="text" name="creator" dataue="<?php echo $data->creator; ?>"></td>
            <td>创建日期：<input type="text" name="creatordate" dataue="<?php echo $data->creatordate; ?>"></td>
            <td>修改人：<input type="text" name="modifier" dataue="<?php echo $data->modifier; ?>"></td>
            <td>修改日期：<input type="text" name="lastrdate" dataue="<?php echo $data->lastdate; ?>"></td>
        </tr>
        <tr>
            <td>审核人：<input type="text" name="verifier" dataue="<?php echo $data->verifier; ?>"></td>
            <td>审核日期：<input type="text" name="verifierdate" dataue="<?php echo $data->verifierdate; ?>"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="修改"></td>
        </tr>
    </table>
</form>
</body>
</html>