<input type="text" class="name" name="name" placeholder="Name">
<div>
    <p class="name-help">Please enter your first and last name.</p>
</div>

<input type="email" class="email" name="email" placeholder="Email">
<div>
    <p class="email-help">Please enter your current email address.</p>
</div>

<input type="text" class="address" name="address" placeholder="Address">
<div>
    <p class="address-help">Please enter your address.</p>
</div>

<input type="text" class="mobile" name="mobile" placeholder="Mobile">
<div>
    <p class="mobile-help">Please your phone number</p>
</div>

{!! Form::textarea('occupation', null, ['id' => 'tinymce']) !!}

<input type="text" class="relation" name="relation" placeholder="Relation">
<div>
    <p class="relation-help">Enter your Occupation description.</p>
</div>

{!! Form::submit($submitButtonText, ['class' => 'submit']) !!}