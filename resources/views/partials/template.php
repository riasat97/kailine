<ul class="tweets">
<script id="template" type="text/x-handlebars-template">

    <img src="{{ profileImage }}"  style="width:304px;height:228px;">
        <h2>{{name}}</h2>
        <p>{{{email}}}</p>
        <p>{{{mobile}}}</p>
        <p>{{{address}}}</p>

        {{#if occupation}}
        <h5>{{occupation}}</h5>
        {{else}}
        <h5>user does not have a occupation.</h5>
        {{/if}}
        <p>{{{relation}}}</p>
    <a href="#" class="pure-button pure-button-primary draw">Let's Draw !</a>

<!--<h1 class="title-pen"> Winner Profile <span>UI</span></h1>
<div class="user-profile">
    <img class="avatar" src="{{ profileImage }}" alt="Ash" >
    <div class="username">{{name}}</div>
    <div class="bio">
        {{{email}}}
    </div>
    <div class="bio">
        {{{address}}}
    </div>
    <div class="bio">
        {{{mobile}}}
    </div>
    <div class="description">
        {{#if occupation}}
        {{occupation}}
        {{else}}
        user does not have a occupation ..
        {{/if}}
    </div>
    <div class="bio">
        {{{relation}}}
    </div>
    <ul class="data">
        <li>
            <a href="#" class="pure-button pure-button-primary draw">Let's Draw again!</a>

        </li>

    </ul>
</div>-->


</script>
</ul>
