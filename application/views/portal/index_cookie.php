<!DOCTYPE html>
<html>
<head>
	<meta charset='utf-8'>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title>cookie</title>
	<link rel="stylesheet" type="text/css" href="/BootStrap/css/bootstrap.min.css">
</head>
<body>


<div class="container">
<h1 style="margin-top:51px;">Welcome cookie!!!</h1>
<div>下拉菜单</div>
<div class="dropdown">
  <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
    Dropdown
    <span class="caret"></span>
  </button>
  <ul class="dropdown-menu " aria-labelledby="dropdownMenu1">
  	<li class="dropdown-header">group1</li>
    <li><a href="#">Action</a></li>
    <li><a href="#">Another action</a></li>
    <li role="separator" class="divider"></li>
    <li class="dropdown-header">group2</li>
    <li><a href="#">Something else here</a></li>
    <li class="disabled"><a href="#">Separated link</a></li>
  </ul>
</div>




<div>按钮组</div>
<div class="btn-group" role="group" >
	<button type="button" class="btn btn-default">left</button>	
	<button type="button" class="btn btn-default">middle</button>	
	<button type="button" class="btn btn-default">right</button>	
</div>
<div>按钮工具栏</div>
<div class="btn-toolbar" role="toolbar">
	<div class="btn-group" role="btn-group"> 
		<button type="button" class="btn btn-default">left</button>	
		<button type="button" class="btn btn-default">middle</button>	
		<button type="button" class="btn btn-default">right</button>	
	</div>	
	<div class="btn-group" role="btn-group"> 
		<button type="button" class="btn btn-default">1</button>	
		<button type="button" class="btn btn-default">2</button>	
		<button type="button" class="btn btn-default">3</button>	
	</div>	
	<div class="btn-group" role="btn-group"> 
		<button type="button" class="btn btn-default">4</button>	
		<button type="button" class="btn btn-default">5</button>	
		<button type="button" class="btn btn-default">6</button>	
	</div>	
</div>
<div>尺寸</div>
<div class="btn-group btn-group-lg" role="group">
	<button type="button" class="btn btn-default">lg</button>
	<button type="button" class="btn btn-default">lg</button>
</div>
<div class="btn-group " role="group">
	<button type="button" class="btn btn-default">df</button>
	<button type="button" class="btn btn-default">df</button>
</div>
<div class="btn-group btn-group-sm" role="group">
	<button type="button" class="btn btn-default">sm</button>
	<button type="button" class="btn btn-default">sm</button>
</div>
<div class="btn-group btn-group-xs" role="group">
	<button type="button" class="btn btn-default">xs</button>
	<button type="button" class="btn btn-default">xs</button>
</div>
<div>嵌套</div>
<div class="btn-group" role="group">
	<button type="button" class="btn btn-default">1</button>	
	<button type="button" class="btn btn-default">2</button>	
	<div class="btn-group" role="group">
		<div class="dropdown">
		  <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
		    Dropdown
		    <span class="caret"></span>
		  </button>
		  <ul class="dropdown-menu " aria-labelledby="dropdownMenu1">
		  <li><a href="#">Action</a></li>
		  <li><a href="#">Another action</a></li>
		  <li><a href="#">Something else here</a></li>
		  </ul>
		</div>
	</div>
</div>
<div>垂直排列</div>
<div class="btn-group-vertical"> 
	<button type="button" class="btn btn-default">vertical</button>
	<button type="button" class="btn btn-default">vertical</button>
</div>


<div>输入框组</div>
<div class="input-group">
	<span class="input-group-addon" id="basic-addon1">@</span>	
	<input type="text" class="form-control" placeholder="username" aria-describedby="basic-addon1">
</div>
<div class="input-group">
	<input type="text" class="form-control" placeholder="username" aria-describedby="basic-addon2">
	<span class="input-group-addon" id="basic-addon2">@example.com</span>	
</div>
<div class="input-group">
	<span class="input-group-addon" >$</span>	
	<input type="text" class="form-control" >
	<span class="input-group-addon">.00</span>
</div>
<div>尺寸</div>
<div class="input-group input-group-lg">
	<span class="input-group-addon">@</span>
	<input type="text" class="form-control" placeholder="username">
</div>
<div class="input-group input-group">
	<span class="input-group-addon">@</span>
	<input type="text" class="form-control" placeholder="username">
</div>
<div class="input-group input-group-sm">
	<span class="input-group-addon">@</span>
	<input type="text" class="form-control" placeholder="username">
</div>





</div>

<script type="text/javascript" src="/js/jq.js"></script>
<script type="text/javascript" src="/BootStrap/js/bootstrap.min.js"></script>
</body>
</html>