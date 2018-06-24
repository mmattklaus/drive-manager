<template>
	<div>
		<div class="ui large top fixed borderless menu">
			<div class="ui container">
				<a class="item">
					<img class="logo" src="/images/logo.jpeg"> &nbsp;
					Hub
				</a>
				<a class="item">
					Messages
				</a>
				<a class="item">
					Friends
				</a>
				<div class="right menu">
					<div class="item">
						<div class="ui icon input">
							<input type="text" placeholder="Search...">
							<i class="search link icon"></i>
						</div>
					</div>
					<div class="ui item">
						<router-link to="/register" class="ui primary button">Sign up</router-link>
					</div>
					<div class="item">
						<router-link to="/login" class="ui button">Log-in</router-link>
					</div>
				</div>
			</div>
		</div>
		<div class="ui main container" style="padding-top: 90px!important;">
			<div class="ui grid">
				<div class="twelve wide column">
					<router-view></router-view>
				</div>
				<div class="four wide column">
					<div class="ui list">
						<div class="item">
							<i class="folder icon"></i>
							<div class="content">
								<div class="header">src</div>
								<div class="description">Source files for project</div>
								<div class="list">
									<div class="item">
										<i class="folder icon"></i>
										<div class="content">
											<div class="header">site</div>
											<div class="description">Your site's theme</div>
										</div>
									</div>
									<div class="item">
										<i class="folder icon"></i>
										<div class="content">
											<div class="header">themes</div>
											<div class="description">Packaged theme files</div>
											<div class="list">
												<div class="item">
													<i class="folder icon"></i>
													<div class="content">
														<div class="header">default</div>
														<div class="description">Default packaged theme</div>
													</div>
												</div>
												<div class="item">
													<i class="folder icon"></i>
													<div class="content">
														<div class="header">my_theme</div>
														<div class="description">Packaged themes are also available in this folder</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="item">
										<i class="file icon"></i>
										<div class="content">
											<div class="header">theme.config</div>
											<div class="description">Config file for setting packaged themes</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="item">
							<i class="folder icon"></i>
							<div class="content">
								<div class="header">dist</div>
								<div class="description">Compiled CSS and JS files</div>
								<div class="list">
									<div class="item">
										<i class="folder icon"></i>
										<div class="content">
											<div class="header">components</div>
											<div class="description">Individual component CSS and JS</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="item">
							<i class="file icon"></i>
							<div class="content">
								<div class="header">semantic.json</div>
								<div class="description">Contains build settings for gulp</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</template>
<script>
export default {
	data() {
		return {

		}
	}
}
</script>
<style>

</style>