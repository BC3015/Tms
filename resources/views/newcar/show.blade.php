<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>展示</title>
</head>
<style>
.pagination
{
    list-style: none;
    line-height: 40px;
    margin-left: 50px;

}
/* 所有class为menu的div中的ul中的li样式 */
.pagination li
{   
  margin-left: 10px;
    float:left; /* 向左漂移，将竖排变为横排 */
}
</style>
<body>
	<center>
		<table border="1">
			<tr>
				<td>id</td>
				<td>车辆名称</td>
				<td>所属公司</td>
				<td>车牌号</td>
				<td>规格</td>
				<td>型号</td>
				<td>属性</td>
				<td>载重</td>
				<td>运输单位</td>
				<td>正司机</td>
				<td>正司机手机号</td>
				<td>副司机</td>
				<td>副司机手机号</td>
				<td>车辆状态</td>
				<td>是否临时授权司机</td>
				<td>临时授权司机</td>
				<td>备注</td>
				<td>创建人</td>
				<td>创建日期</td>
				<td>修改人</td>
				<td>修改日期</td>
				<td>审核人</td>
				<td>审核日期</td>
				<td>操作</td>
			</tr>
			<?php foreach ($data as $key => $val): ?>
			<tr>
				<td><?php echo $val->carid; ?></td>
				<td><?php echo $val->carname; ?></td>
				<td><?php echo $val->companies; ?></td>
				<td><?php echo $val->platenumbers; ?></td>
				<td><?php echo $val->specification; ?></td>
				<td><?php echo $val->version; ?></td>
				<td><?php echo $val->property; ?></td>
				<td><?php echo $val->load; ?></td>
				<td><?php echo $val->transport; ?></td>
				<td><?php echo $val->driver; ?></td>
				<td><?php echo $val->driverphone; ?></td>
				<td><?php echo $val->assistant; ?></td>
				<td><?php echo $val->assistantphone; ?></td>
				<td><?php echo $val->state; ?></td>
				<td><?php echo $val->yesno; ?></td>
				<td><?php echo $val->yes; ?></td>
				<td><?php echo $val->remark; ?></td>
				<td><?php echo $val->creator; ?></td>
				<td><?php echo $val->creatordate; ?></td>
				<td><?php echo $val->modifier; ?></td>
				<td><?php echo $val->lastrdate; ?></td>
				<td><?php echo $val->verifier; ?></td>
				<td><?php echo $val->verifierdate; ?></td>
				<td><a href="del?id=<?php echo $val->carid; ?>">删除</a>|<a href="upd?id=<?php echo $val->carid; ?>">修改</a></td>
			</tr>
			<?php endforeach ?>
		</table>
	<div class="container">
    @foreach ($data as $user)
        {{ $user->carid }}
    @endforeach
    </div>
    {{ $data->links() }}
	</center>
</body>
</html>