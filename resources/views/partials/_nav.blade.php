<nav class="navbar navbar-default navbar-static-top head-style">
	<div class="container">
		<div class="row">
			<div class="navbar-header">
				<a href="#" class="navbar-brand heading-style"> 
					Onliner
				</a>
			</div>
			<div id="navbar" class="navbar-collapse collapse">
				<ul class="nav navbar-nav navbar-toggler-right">
					<li><a class="heading-style" href="">Change Company</a></li>
					<li><a class="heading-style" href="">Depart. & Periods</a></li>
					<li><a class="heading-style" href="">Budgets</a></li>
					<li><a class="heading-style" href="">Expense Request</a></li>
					<li><a class="heading-style" href="">Users &nbsp; <i class="fa fa-user"></i></a></li>
					<li><a class="heading-style" href="">Reports &nbsp; <i class="fa fa-eye"></i></a></li>
				</ul>

				<li>
					<form class="navbar-form navbar-left" action="#" method="#" role="search">
						<div class="form-group">
							<input type="text" class="form-control" name="search" placeholder="Search">
							<button type="submit" style=" padding: 6px 10px;" class="btn btn-default">
								<i class="fa fa-search"></i>
							</button>
						</div>
					</form>
				</li>

				<li>
					<img 
						src="/img/favicon.png" 
						class="img-rounded avatar" 
						height="40px" 
						style="position: relative;;margin-top:0px; margin-right: 5px; width: 32px;"
					>
				</li>

				<li class="dropdown">
					<a 
						href="#" 
						class="dropdown-toggle dropdown dropdown-border" 
						data-toggle="dropdown" 
						role="button"
					>
						<i class="fa fa-cog fa-lg heading-style"></i><span class="heading-style caret"></span>	
					</a>

					<ul class="dropdown-menu">
						<li><a href="">Name</a></li>
						<li><a href="">Profile</a></li>
						<li><a href="{{ route('logout') }}">Logout</a></li>
					</ul>
				</li>
			</div>
		</div>
	</div>
</nav>