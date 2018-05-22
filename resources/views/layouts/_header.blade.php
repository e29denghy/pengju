<div class="navbar-fixed-top" id="header_top">
	<div class="row justify-content-between bg-light p-2">
		<div>
			<img class="ml_60 mr_10 margin-20 featurette-image" style="max-height:50px" src="/image/logo.png" alt="Generic placeholder image">
			<a class="navbar-brand mr_30 text-secondary font_34" href="#">鹏 聚 文 化</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
		</div>
		<form class="form-inline mt-2 mt-md-0 mr_60">
			<input class="form-control mr-sm-2" type="text" placeholder="请输入文章标题" aria-label="Search">
			<button class="btn btn-outline-success my-2 my-sm-0" type="submit">搜索</button>
		</form>
	</div>
	<nav class="nav bg-dark p-3 justify-content-center" id="navbarCollapse">
			<ul class="nav nav-pills">
			  <li class="nav-item">
			    <a class="nav-link" href="/" id="home">首 页</a>
			  </li>
				<li class="nav-item">
					<a class="nav-link disabled" href="#"  id="academy">总裁智慧演说</a>
				</li>
				<li class="nav-item dropdown">
			    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"  id="course">企业内训课程</a>
			    <div class="dropdown-menu">
			      <a class="dropdown-item" href="/course/com">高效沟通</a>
			      <a class="dropdown-item" href="/course/sun">阳光心态</a>
			    </div>
			  </li>
				<li class="nav-item">
					<a class="nav-link disabled" href="#"  id="academy">鹏聚天下商学院</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#"  id="news">新闻公告</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="/about"  id="about">关于我们</a>
				</li>
			</ul>
	</nav>
</div>
<script src="https://cdn.bootcss.com/jquery/1.12.4/jquery.min.js"></script>
<script>
	 $("#{{$page_id}}").addClass("active");
</script>
