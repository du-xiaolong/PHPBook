<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>添加</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"
          integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">

    <!--[if lt IE 9]>
    <script src="https://cdn.bootcss.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div class="container">
<div class="text-center" style="margin:10px 0">
	<h2>读书笔记添加</h2>
</div>
<form class="form-horizontal" role="form" action="" method="post">
    <div class="form-group">
        <div class="col-sm-12">
			<select class="form-control">
			  <option>选择书目</option>
			  <option selected="selected">挪威的森林</option>
			  <option>三生三世十里桃花</option>
			  <option>从你的全世界路过</option>
			  <option>解忧杂货铺</option>
			  <option>乖，摸摸头</option>
			  <option>小王子</option>
			  <option>古文观止</option>
			  <option>朦胧诗</option>
			  <option>把时间当做朋友</option>
			  <option>白夜行</option>
			</select>
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-12">
            <textarea class="form-control" rows="8" name="content" placeholder="内容"></textarea>
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-12 text-center">
            <input type="button" class="btn btn-info" onclick="javascript:history.go(-1);" value="返回"/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="button" class="btn btn-warning" value="重置"/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="submit" class="btn btn-success" value="提交"/>
        </div>
    </div>
</form>
</div>
<script src="https://fastly.jsdelivr.net/npm/jquery@1.12.4/dist/jquery.min.js"
        integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"
        integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd"
        crossorigin="anonymous"></script>
</body>
</html>