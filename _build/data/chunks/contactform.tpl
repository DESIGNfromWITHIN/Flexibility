[[!FormIt?
&hooks=`spam,email,redirect`
&emailTpl=`MyEmailChunk`
&emailUseFieldForSubject=`1`
&emailTo=`[[getResources? &resources =`11` &tpl=`email_adress_tpl` &includeTVs=`1` &processTVs=`1` &limit=`1` &tvPrefix=`` ]]`
&redirectTo=`13`
&validate=`name:required,email:email:required,subject:required,text:required:stripTags`
]]
<div class="row">
  <div class="twelve columns">
    [[!+fi.error_message:notempty=`<p>[[!+fi.error_message]]</p>`]]
    <form id="contact_form" action="[[~[[*id]]]]" method="post" class="custom">
      <input type="hidden" name="nospam:blank" value="" />
      <div class="row">
        <div class="four columns">
          <label>
            Enter your name.
            <span class="error">[[!+fi.error.name]]</span>
          </label>
          <input type="text" name="name" id="name" value="[[!+fi.name]]" placeholder="e.g. James" class="eight" /> 
        </div>
        <div class="four columns">
          <label>
            Fill in your email.
            <span class="error">[[!+fi.error.email]]</span>
          </label>
          <input type="text" name="email" id="email" value="[[!+fi.email]]" placeholder="e.g. yourname@gmail.com" class="eight" />
        </div>
        <div class="four columns">
          <label>
            Enter the subject of this mail.
            <span class="error">[[!+fi.error.subject]]</span>
          </label>
          <input type="text" name="subject" id="subject" value="[[!+fi.subject]]" placeholder="e.g. My suggestion" class="eight" />
        </div>
      </div>
      <label>
        Fill in your message or question.
        <span class="error">[[!+fi.error.text]]</span>
      </label>
      <textarea name="text" id="text" value="[[!+fi.text]]" placeholder="Please write your message">[[!+fi.text]]</textarea>
      <input type="submit" value="Send" class="button small" />
    </form>
  </div>
</div>