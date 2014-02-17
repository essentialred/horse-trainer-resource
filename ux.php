<?php require('partials/header.php'); ?>

<section id="ux-notes">
	<h1>UX Notes</h1>
	<h2>New Trainer/Owner user interaction</h2>
	<ol>
		<li>First screen: Search or login/register.  Hit register to go to form.
			<ol>
				<li>Personal/Contact Info</li>
				<li>Check box - owner or trainer?</li>
				<li> - Check box to allow other users to contact you
					<ul>
						<li>Contact you about past horses</li>
						<li>Contact you about current horses</li>
						<li>Contact you about training opportunities</li>
						<li>Contact you about sales/commissions</li>
					</ul>
				</li>
				<li>Add Horse (repeater field)
					<ul>
						<li>Check off 'Trained by me' and/or 'Owned by me'</li>
						<li>Horse Name, birth year, gender, breed, and color. Name is the only field required. - This data is not editable without contacting site manager</li>
						<li>Dates owned/trained and discipline(s) are required.  Dates are not editable without contacting site manager.</li>
						<li>Other Fields: Temperament, Notes.</li>
					</ul>
				</li>
			</ol>
		</li>
		<li>
			After submit, goes to your profile. See list of horses owned, trained, and both in columns.
		</li>
	</ol>
	<h2>Existing Trainer user interaction</h2>
	<ol>
		<li>Land on home screen, options to search or login.</li>
		<li>Login brings you to profile, where you can change you contact info and add horses.</li>
		<li>Horse basic information can only be added once, so that we can cross-search database and not have duplicates</li>
		<li>Horses cannot be removed from training column, but can be moved from 'Own' to 'Owned in the past'</li>
		<li>Editing Experience
			<ul>
				<li>Horses in Five columns: Trained in the Past, Currently Training, Currently Owned & Trained by Me, Currently Own, Owned in the Past</li>
				<li>Horses can be moved from 'Current' columns to 'Past' columns, and from Own to Training. Drag and drop format.</li>
				<li>'Currently owned and trained' column is dynamically populated based on checkbox selections</li>
				<li>Dragging a horse from a training column into an Own column does not remove horse from training column, but adds it to own column</li>
				<li>Dragging a horse from an own column into a training column prompts user: 'Do you still own this horse?' and if yes, keeps the horse in both columns.  Else removes from 'own' col and leaves in training col.</li>
				<li>Horses can also be clicked on to open a modal with its basic info and the editable fields for the logged in trainer (notes, etc) and a link to go to horse's profile page.
					<ul>
						<li>Horse profiles show any uploaded images in a slider</li>
						<li>Horse immutable data shows at the top</li>
						<li>Trainer data shows in timeline below</li>
					</ul>
				</li>
			</ul>
		</li>
	</ol>
	<h2>Normal user interaction</h2>
	<ol>
		<li>Land on home page.  Prominent search bar that accepts a name or registration number.  Auto fill?</li>
		<li>Search results page very simple, just a list of horse names with thumbnail.  Fuzzy search, so it brings up similar names or a selection from the breed if nothing matches.</li>
		<li>Click takes you to horse profile.  Slider and static info on top, very simple timeline below.</li>
	</ol>
</section>

<?php require('partials/footer.php'); ?>