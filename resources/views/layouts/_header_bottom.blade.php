<div class="navbar-fixed-bottom" id="foot_bottom">
	<nav class="nav bg-dark p-3 justify-content-center" id="navbarCollapse">
			<ul class="nav nav-pills">
			  <li class="nav-item">
			    <a class="nav-link" href="/" id="foot_home">首 页</a>
			  </li>
				<li class="nav-item dropup">
			    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"  id="foot_course">课程</a>
			    <div class="dropdown-menu">
			      <a class="dropdown-item" href="/course/com">高效沟通</a>
			      <a class="dropdown-item" href="/course/sun">阳光心态</a>
			    </div>
			  </li>
				<li class="nav-item">
					<a class="nav-link disabled" href="#"  id="foot_academy">商学院</a>
				</li>
				<li class="nav-item">
					<a class="nav-link disabled" href="#"  id="foot_member">会员</a>
				</li>
			</ul>
	</nav>
</div>
<script src="https://cdn.bootcss.com/jquery/1.12.4/jquery.min.js"></script>
<script>
	$("#foot_{{$page_id}}").addClass("active");
</script>
