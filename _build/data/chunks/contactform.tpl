[[!FormIt?
&hooks=`spam,email,redirect`
&emailTpl=`MyEmailChunk`
&emailUseFieldForSubject=`1`
&emailTo=`[[getResources? &resources =`11` &tpl=`email_adress_tpl` &includeTVs=`1` &processTVs=`1` &limit=`1` &tvPrefix=`` ]]`
&redirectTo=`13`
&validate=`name:required,email:email:required,subject:required,text:required:stripTags`
]]
[[!+fi.error_message:notempty=`<p>[[!+fi.error_message]]</p>`]]
<form action="[[~[[*id]]]]" method="post" class="form">
    <input type="hidden" name="nospam:blank" value="" />
<p>
    <label for="name">
        Enter your name.
        <span class="error">[[!+fi.error.name]]</span>
    </label>
    <input type="text" name="name" id="name" value="[[!+fi.name]]" />
</p>
<p>
    <label for="email">
        Fill in your email.
        <span class="error">[[!+fi.error.email]]</span>
    </label>
    <input type="text" name="email" id="email" value="[[!+fi.email]]" />
</p>
<p>
    <label for="subject">
        Enter the subject of this mail.
        <span class="error">[[!+fi.error.subject]]</span>
    </label>
    <input type="text" name="subject" id="subject" value="[[!+fi.subject]]" />
</p>
<p>
    <label for="text">
        Fill in your message or question.
        <span class="error">[[!+fi.error.text]]</span>
    </label>
    <textarea name="text" id="text" cols="55" rows="7" value="[[!+fi.text]]">[[!+fi.text]]</textarea>
</p>
    <br class="clear" />
 
    <div class="form-buttons">
        <input type="submit" value="Send" class="button small" />
    </div>
</form>