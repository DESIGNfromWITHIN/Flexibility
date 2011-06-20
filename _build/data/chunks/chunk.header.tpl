[[!+fi.error_message:notempty=`<p>[[!+fi.error_message]]</p>`]]
 
<form id="contact_form" action="[[~[[*id]]]]" method="post" class="form" title="Contact us" subtitle="We love to hear from you!">
    <input type="hidden" name="nospam:blank" value="" />
 
    <div class="contact_form_field">
		<label for="name">
			Name:
			<span class="error">[[!+fi.error.name]]</span>
		</label><br/>
		<input type="text" name="name" id="name" value="[[!+fi.name]]" place="Fill in your name" />
	</div>
 
	<div class="contact_form_field">
		<label for="email">
			Email:
			<span class="error">[[!+fi.error.email]]</span>
		</label><br/>
		<input type="text" name="email" id="email" value="[[!+fi.email]]" place="Fill in your e-mail" validate="email"/>
	</div>
 
	<div class="contact_form_field contact_form_field_last">
		<label for="subject">
			Subject:
			<span class="error">[[!+fi.error.subject]]</span>
		</label><br/>
		<input type="text" name="subject" id="subject" value="[[!+fi.subject]]" place="Enter a subject" />
	</div>
	
	<div class="contact_form_field_wide">
		 <label for="text">
			Message:
			<span class="error">[[!+fi.error.text]]</span>
		</label><br/>
		<textarea name="text" id="text" cols="55" rows="7" value="[[!+fi.text]]">[[!+fi.text]]</textarea>
	</div>
 
    <div class="form-buttons tagline_link">
        <input type="submit" value="Send" />
    </div>
</form>