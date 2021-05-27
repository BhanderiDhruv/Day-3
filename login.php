<div class="form-popup">
	<!-- CLOSE BTN -->	

	<!-- FORM POPUP CONTENT -->
	<div class="form-popup-content">
		
		<h4 class="popup-title">Login to your  Account</h4>
		<!-- LINE SEPARATOR -->
		
			<hr class="line-separator">
			
			<form id="login-form" method="post" action="index.php?page=login-action">
				
				<label for="username" class="rl-label" required>Type</label>
				<input type="radio" value="user" name="type">User<br>
				<input type="radio" value="devloper" name="type">Devloper<br><br>

				<label for="username" class="rl-label">Username</label>
				<input type="text" id="username" name="username" placeholder="Enter your username here..." required>

				<label for="password" class="rl-label">Password</label>
				<input type="password" id="password" name="password" placeholder="Enter your password here..." required>
			
				<p>Forgot your password? <a href="index.php?page=user-registration" class="primary">Click here!</a></p>
		
				<button name="submit" class="button mid dark">Login <span class="primary">Now!</span></button>
			</form>
	</div>
</div>