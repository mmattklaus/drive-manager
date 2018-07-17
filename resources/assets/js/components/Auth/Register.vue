<template>
	<div class="ui grid" id="login_main">
		<div class="three wide column"></div>
		<div class="ten wide column">
			<form class="ui form">
				<div class="field">
					<label>Username <i class="envelope icon"></i></label>
					<input v-model="username" type="text" name="first-name" placeholder="First Name">
				</div>
				<div class="field">
					<label>Password <i class="lock icon"></i></label>
					<input v-model="password" type="text" name="last-name" placeholder="Last Name">
				</div>
				<div class="inline field">
					<sui-checkbox label="toggle" toggle v-model="remember"></sui-checkbox>
				</div>
				<button class="ui button violet fluid" @click.prevent="login">Register</button>
			</form>
		</div>
	</div>
</template>
<script>
export default {
	name: 'auth-register',
	data() {
		return {
			username: null,
			password: null,
			remember: false,
			trials: 0
		}
	},
	methods: {
		login() {

		}
	},
	mounted () {
	}
}
</script>
<style scoped>
/*Scoped style*/
#login_main {
	padding-top: 50px;
}
</style>