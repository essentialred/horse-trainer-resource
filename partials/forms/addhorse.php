<section id="register-horse">
	<h2>Add Horse</h2>
	<form id="add-horses" class="create" method="POST" action="functions/addhorse.php">
		<div>
			<label>Horse Name</label>
			<p class="fine-print">Use full registered name if applicable</p>
				<input type="text" name="name" placeholder="Horse Name">
		</div>
		<div>
			<label>Registry or Breed</label>
				<input type="text" name="registry" placeholder="Registry">
			<label>Registration Number</label>
				<input type="text" name="registration_number" placeholder="Registration Number">
			<label>Microchip</label>
				<input type="text" name="microchip" placeholder="Microchip">
		</div>
		<div>
			<label>Birth date (year is required)</label>
				<input type="date" name="birth_date">
			<label>Gender</label>
            <input type="text" name="gender" placeholder="GENDER">
            <input type="submit">
        </div>
    </form>
</section>