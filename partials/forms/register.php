<section id="register">
	<h1>Register</h1>
	<form id="registration" method="POST" action="functions/register.php">
		<div class="full-row">
			<div class="full-row">
				<label>Full Name</label>
					<input type="text" name="name" placeholder="Your Name">
			</div>
			<div class="full-row checkboxes inline">
				<span class="fine-print full-row">Select all that apply</span>
				<h4>I am a:</h4>
				<label>
					<input type="checkbox" name="is_trainer" value="1">
					Trainer
				</label>
				<label>
					<input type="checkbox" name="is_owner" value="1">
					Owner
				</label>
				<label class="text-field-label">
					<input type="text" name="other_title" placeholder="Other title">
					Other: 
				</label>
			</div>
		</div>
		<div class="full-row">
			<div class="half-row">
				<label>Email</label>
					<input type="email" name="email" placeholder="Email address">
			</div>
			<div class="half-row">
				<label>Confirm Email</label>
					<input type="email" name="email2" placeholder="Email address">
			</div>
			<div class="half-row">
				<label>Location</label>
					<input type="text" name="location" placeholder="Location">
			</div>
			<div class="half-row">
				<label>Phone</label>
					<input type="tel" name="tel">
			</div>
		</div>
		<div class="full-row checkboxes">
			<h3>Allow users to contact you for the following reasons: *</h3>
			<label>
				<input type="checkbox" name="allow_inquiry_past" value="1">
				To ask about horses I have trained or owned in the past.
			</label>
			<label>
				<input type="checkbox" name="allow_inquiry_present" value="1">
				To ask about horses I currently own or train.
			</label>
			<label>
				<input type="checkbox" name="allow_inquiry_training" value="1">
				To inquire about hiring me for training.
			</label>
			<label>
				<input type="checkbox" name="allow_inquiry_sales" value="1">
				To inquire about sales/commissions.
			</label>
		</div>
		<input type="submit" value="Register">
		<p class="fine-print full-row">* Don't worry, only registered and logged-in users would be able to contact you. See our <a href="#">Privacy Policy</a> for more information about how we protect your personal information.</p>
	</form>
</section>