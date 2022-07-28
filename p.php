<!DOCTYPE html>
<html>
<head>
	<title>TANKING - 创意开发者</title>
	<meta charset="utf-8">
	<link rel="shortcut icon" href="./ba_img/fav.png">
	<style type="text/css">
		*{
			padding:0;
			margin:0;
			list-style: none;
			font-family: '宋体';
		}
		#content{
			width: 1000px;
			height: 700px;
			background: #eee;
			margin:50px auto 10px;
			overflow: hidden;
		}
		#content .left{
			width: 200px;
			height: 640px;
			background: #fff;
			float:left;
			margin:30px 30px;
			border-radius: 10px;
		}
		#content .left ul li{
			width: 180px;
			height: 45px;
			margin:0 auto;
			background: #eee;
			margin-bottom: 5px;
			line-height: 45px;
			text-align: center;
		}
		#content .right{
			width: 740px;
			height: 700px;
			/*background: #ddd;*/
			float: right;
			overflow: hidden;
		}
		#content .right .nav{
			width: 740px;
			height: 640px;
			/*background: #666;*/
			margin:30px 0;
		}
		#content .right p{
			width: 700px;
			padding:10px 0;
			background: #fff;
			margin:0 auto;
			border-radius: 5px;
			line-height: 30px;
			color: #666;
			text-indent: 15px;
		}
		#content .right p a{
			display: block;
			margin-bottom: 10px;
			font-size: 17px;
			text-decoration: none;
			color: #666;
		}
		#content .right p a:hover{
			text-decoration: underline;
			color: #39f;
		}
		#content .right .nav .neirong{
			background: #fff;
			width: 90%;
			padding:10px 10px;
		}
		h1{
			text-align: center;
			margin-top: 50px;
			color: #333;
		}

	</style>
</head>
<body>
	<h1>TANKING - 创意开发者</h1>
	<div id="content">
		<div class="left">
			<ul>
				<a href="./index.html"><li style="margin-top: 5px;">segmentfault</li></a>
				<li>知乎</li>
				<li>吾爱论坛</li>
				<li>csdn</li>
				<a href="./index.html"><li>返回首页</li></a>
				<li>时间：<?php echo date('H:i:s'); ?></li>
			</ul>
		</div>
		<div class="right">
			<div class="nav">
				<div class="neirong">

				<?php
				header("Content-type:text/html;charset=utf-8");

				$id = $_GET['id'];

				if($id == '1'){
					echo '有时候为了方便用户快速复制页面的内容，一般的做法就是添加一个按钮给用户点击一下就复制下来了，这边使用JavaScript原生的方法进行设置剪贴板。
				<br/><br/><img src="./ba_img/20220728143609.png" />';
				}else if($id == '2'){
					echo '如何使用golang实现http服务在浏览器实现传递参数？本文通过一段简单的代码使用go语言实现http服务器。
				<br/><br/><img src="./ba_img/20220728144415.png" />';
				}else if($id == '3'){
					echo '如何使用JS截取HTML页面为图片呢，html2canvas.js这个插件可以轻松实现。这个原理很简单，就是html2canvas.js可以将当页面渲染成一个Canvas图片，然后保存下来即可。它不需要来自服务器任何渲染，整张图片都是在客户端浏览器创建。
				<br/><br/><img src="./ba_img/20220728144616.png" />';
				}else if($id == '4'){
					echo 'Fetch Api是新的ajax解决方案，Fetch会返回Promise；Fetch不是ajax的进一步封装，而是原生js，没有使用XMLHttpRequest对象。
				<br/><br/><img src="./ba_img/20220728144750.png" />';
				}else if($id == '5'){
					echo 'querySelectorAll()方法返回文档中匹配指定CSS选择器的所有元素，其效果与jquery的选择器一样，不同的就是querySelectorAll()方法是Js原生方法，无需引入jquery.min.js库。
				<br/><br/><img src="./ba_img/20220728144849.png" />';
				}else if($id == '6'){
					echo 'php curl上传图片示例
				<br/><br/><img src="./ba_img/20220728145009.png" />';
				}else if($id == '7'){
					echo '一个博主自己写的PHP Curl封装，适合多个场景，调用方便！
				<br/><br/><img src="./ba_img/20220728145758.png" />';
				}else if($id == '8'){
					echo '使用的pdo操作类，提升开发效率，提高程序安全性！
				<br/><br/><img src="./ba_img/20220728145827.png" />';
				}else if($id == '9'){
					echo '本文使用Python调用微信小程序获取access_token接口进行获取请求凭据。为了便于操作，这边结合了Python自带的GUI库Tkinter。
				<br/><br/><img src="./ba_img/20220728145918.png" />';
				}else if($id == '10'){
					echo '在很多项目中，配置文件是不可缺少的，一般配置文件会用变量或者数组进行设置，例如数据库、或者一些公共参数。
				<br/><br/><img src="./ba_img/20220728145955.png" />';
				}else if($id == '11'){
					echo '使用ajax可以实现无刷新提交表单，但有人表示ajax的效率不行，或者是其他缺点，例如客户端臃肿，太多客户段代码造成开发上的成本，如果网速慢，则会出现ajax请求缓慢，页面空白的情况，对客户的体验不好。ajax请求不利于搜索引擎优化，一般搜不到ajax添加到页面的信息。
				<br/><br/><img src="./ba_img/20220728152035.png" />';
				}else if($id == '12'){
					echo '为了缓解服务器压力，一般先在前端进行验证表单，当然后端也要做验证，后端的验证主要是在技术人员突破前端限制而设计的，是为了整个安全，前端的验证是第一道防线，主要也是可以缓解服务器压力，为了前端能够快速验证，不引入其他库，所以采用原生js验证。
				<br/><br/><img src="./ba_img/20220728152125.png" />';
				}else if($id == '13'){
					echo '1、通过Ajax请求服务器的数据，渲染到页面，2、通过History改变浏览器的Url，整个过程就无需刷新页面，但是浏览器地址发生了改变，并且页面内容也发生了改变。
				<br/><br/><img src="./ba_img/20220728152205.png" />';
				}

				?>

				</div>
			</div>
		</div>
	</div>
	<a href="http://beian.miit.gov.cn/" style="text-align: center;display: block;font-size: 14px;">粤ICP备16088839号</a>
</body>
</html>