<?php if((int)Input::get("error", 0) === 1): ?>
<p class="error">Signin failed.</p>
<?php endif; ?>
<form method="post" action="" class="normal-form">
	<?= Form::csrf(); ?>
	<fieldset>
		<label for="email">Email:</label>
		<input type="email" required="" name="email" id="email">
	</fieldset>
	<fieldset>
		<label for="password">Password:</label>
		<input type="password" required="" name="password" id="password">
	</fieldset>
	<button type="submit" class="normal-button center">Signin</button>
</form>