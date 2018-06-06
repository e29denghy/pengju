<div class="navbar-fixed-bottom" id="foot_bottom">
	<nav class="nav bg-dark p-3 justify-content-center" id="navbarCollapse">
			<ul class="nav nav-pills">
			  <li class="nav-item">
			    <a class="nav-link" href="/notify?course=com#teacher" id="foot_home">老师简介</a>
			  </li>
				<li class="nav-item">
			    <a class="nav-link" href="/notify?course=com#entry" id="foot_home">预约报名</a>
			  </li>
				<li class="nav-item">
					<a class="nav-link" href="/notify?course=com#go"  id="foot_member">交通路线</a>
				</li>
			</ul>
	</nav>
</div>
<script src="https://cdn.bootcss.com/jquery/1.12.4/jquery.min.js"></script>
<script>
	$("#foot_{{$page_id}}").addClass("active");
</script>
