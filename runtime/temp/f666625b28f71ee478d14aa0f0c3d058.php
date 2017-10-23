<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:72:"F:\Aaron\GitHub\tp5_o2o\public/../application/admin\view\deal\index.html";i:1497931110;s:75:"F:\Aaron\GitHub\tp5_o2o\public/../application/admin\view\public\header.html";i:1497836203;s:75:"F:\Aaron\GitHub\tp5_o2o\public/../application/admin\view\public\footer.html";i:1497844136;}*/ ?>
<!--包含头部文件-->
<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<meta name="renderer" content="webkit|ie-comp|ie-stand">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<meta http-equiv="Cache-Control" content="no-siteapp" />
<LINK rel="Bookmark" href="/favicon.ico" >
<LINK rel="Shortcut Icon" href="/favicon.ico" />
<!--[if lt IE 9]>
<script type="text/javascript" src="lib/html5.js"></script>
<script type="text/javascript" src="lib/respond.min.js"></script>
<script type="text/javascript" src="lib/PIE_IE678.js"></script>
<![endif]-->
<link rel="stylesheet" type="text/css" href="__STATIC__/admin/hui/static/h-ui/css/H-ui.min.css" />
<link rel="stylesheet" type="text/css" href="__STATIC__/admin/hui/static/h-ui.admin/css/H-ui.admin.css" />
<link rel="stylesheet" type="text/css" href="__STATIC__/admin/hui/lib/Hui-iconfont/1.0.8/iconfont.css" />
<link rel="stylesheet" type="text/css" href="__STATIC__/admin/hui/lib/icheck/icheck.css" />
<link rel="stylesheet" type="text/css" href="__STATIC__/admin/hui/static/h-ui.admin/skin/default/skin.css" id="skin" />
<link rel="stylesheet" type="text/css" href="__STATIC__/admin/hui/static/h-ui.admin/css/style.css" />
<link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="__STATIC__/admin/css/common.css" />
  <link rel="stylesheet" type="text/css" href="__STATIC__/admin/uploadify/uploadify.css" />
<!--[if IE 6]>
<script type="text/javascript" src="http://lib.h-ui.net/DD_belatedPNG_0.0.8a-min.js" ></script>
<script>DD_belatedPNG.fix('*');</script>
<![endif]-->
<title>o2o平台</title>
<meta name="keywords" content="tp5打造o2o平台系统">
<meta name="description" content="o2o平台">
</head>
<body>
<nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 团购商品列表 </nav>
<div class="page-container">
	<form action="<?php echo url('deal/index'); ?>" method="post">
		<div class="cl pd-5 bg-1 bk-gray mt-20"> 
			<div class="text-c">
				 <span class="select-box inline">
					<select name="category_id" class="select">
						<option value="0">全部分类</option>
						<?php if(is_array($categoryName) || $categoryName instanceof \think\Collection || $categoryName instanceof \think\Paginator): $i = 0; $__LIST__ = $categoryName;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
							<option value="<?php echo $vo['id']; ?>"<?php if($vo['id'] == $categoryid): ?>selected=selected<?php endif; ?>><?php echo $vo['name']; ?></option>
						<?php endforeach; endif; else: echo "" ;endif; ?>
					</select>
				</span>
				<span class="select-box inline">
					<select name="city_id" class="select cityId">
						<option value="0">全部省份</option>
						<?php if(is_array($provinceName) || $provinceName instanceof \think\Collection || $provinceName instanceof \think\Paginator): $i = 0; $__LIST__ = $provinceName;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
							<option value="<?php echo $vo['id']; ?>"<?php if($vo['id'] == $cityid): ?>selected=selected<?php endif; ?>><?php echo $vo['name']; ?></option>
						<?php endforeach; endif; else: echo "" ;endif; ?>
					</select>
				</span>
				<span class="select-box inline" id="city_id_se" style="display: none;">
					<select name="se_city_id" class="select se_city_id">
						<option value="0">全部城市</option>
					</select>
				</span> 
				日期范围：
				<input type="text" name="start_time" class="input-text" id="countTimestart" onfocus="selecttime(1)" value="<?php echo $startTime; ?>" style="width:120px;" >
					-
				<input type="text" name="end_time" class="input-text" id="countTimestart" onfocus="selecttime(1)" value="<?php echo $endTime; ?>"  style="width:120px;">
				<input type="text" name="name" id="" placeholder=" 商品名称" style="width:250px" class="input-text" value="<?php echo $name; ?>">
				<button name="" id="" class="btn btn-success" type="submit"><i class="Hui-iconfont">&#xe665;</i> 搜索
				</button>
			</div>
		</div>
	</form>
	<div class="mt-20">
		<table class="table table-border table-bordered table-bg table-hover table-sort">
			<thead>
				<tr class="text-c">
					<th width="20">ID</th>
					<th width="100">商品名称</th>
					<th width="40">栏目分类</th>
					<th width="40">城市</th>
					<th width="40">库存</th>
					<th width="80">开始结束时间</th>
					<th width="80">创建时间</th>
					<th width="60">状态</th>
					<th width="40">操作</th>
				</tr>
			</thead>
			<tbody>
				<?php if(is_array($dealAllData) || $dealAllData instanceof \think\Collection || $dealAllData instanceof \think\Paginator): $i = 0; $__LIST__ = $dealAllData;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
				<tr class="text-c">
					<td><?php echo $vo['id']; ?></td>
					<td><?php echo $vo['name']; ?></td>
					<td><?php echo $categoryArr[$vo['category_id']]; ?></td>
					<td><?php echo $provinceArr[$vo['city_id']]; ?>省 <?php echo $cityArr[$vo['se_city_id']]; ?>市</td>
					<td><?php echo $vo['total_count']; ?></td>
					<td><?php echo date("Y-m-d H:i:s",$vo['start_time']); ?><br /><?php echo date("Y-m-d H:i:s",$vo['end_time']); ?></td>
					<td><?php echo $vo['create_time']; ?></td>
					<td><?php echo status($vo['status']); ?></td>
					<td class="td-manage">
					<a style="text-decoration:none" class="ml-5" onClick="o2o_s_edit('查看','<?php echo url('deal/show',['id'=>$vo['id']]); ?>','',300)" href="javascript:;" title="查看"><i class="Hui-iconfont">&#xe6df;</i></a>
					<a style="text-decoration:none" class="ml-5" onClick="o2o_del('<?php echo url('deal/status',['id'=>$vo['id'],'status'=>-1]); ?>')" href="javascript:;" title="下架"><i class="Hui-iconfont">&#xe6e2;</i></a></td>
				</tr>
				<?php endforeach; endif; else: echo "" ;endif; ?>
			</tbody>
		</table>
	</div>
</div>
<?php echo $dealAllData->render(); ?>
<!--包含头部文件-->
<script type="text/javascript" src="__STATIC__/admin/hui/lib/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" src="__STATIC__/admin/hui/lib/layer/2.4/layer.js"></script> 
<script type="text/javascript" src="__STATIC__/admin/hui/static/h-ui/js/H-ui.js"></script> 
<script type="text/javascript" src="__STATIC__/admin/hui/static/h-ui.admin/js/H-ui.admin.js"></script>
<script type="text/javascript" src="__STATIC__/admin/hui/lib/My97DatePicker/4.8/WdatePicker.js"></script> 
<script type="text/javascript" src="__STATIC__/admin/hui/lib/jquery.validation/1.14.0/jquery.validate.js"></script> 
<script type="text/javascript" src="__STATIC__/admin/hui/lib/jquery.validation/1.14.0/validate-methods.js"></script>
<script type="text/javascript" src="__STATIC__/admin/hui/lib/jquery.validation/1.14.0/messages_zh.js"></script>  
<script type="text/javascript" src="__STATIC__/admin/js/common.js"></script>
<script type="text/javascript" src="__STATIC__/admin/uploadify/jquery.uploadify.min.js"></script>
<script type="text/javascript" src="__STATIC__/admin/js/image.js"></script>
<script src="__STATIC__/admin/hui/lib/My97DatePicker/WdatePicker.js"></script>
<script>
/**定义页面全局变量**/
var SCOPE = {
		'city_url' 	   : '<?php echo url('api/city/getCitysByParentId'); ?>',
	};

</script>
<script>
/*时间插件*/
function selecttime(flag){
    if(flag==1){
        var endTime = $("#countTimeend").val();
        if(endTime != ""){
            WdatePicker({dateFmt:'yyyy-MM-dd HH:mm',maxDate:endTime})}else{
            WdatePicker({dateFmt:'yyyy-MM-dd HH:mm'})}
    }else{
        var startTime = $("#countTimestart").val();
        if(startTime != ""){
            WdatePicker({dateFmt:'yyyy-MM-dd HH:mm',minDate:startTime})}else{
            WdatePicker({dateFmt:'yyyy-MM-dd HH:mm'})}
    }
 }
</script>