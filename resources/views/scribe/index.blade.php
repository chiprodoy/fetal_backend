<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Laravel Documentation</title>

    <link href="https://fonts.googleapis.com/css?family=PT+Sans&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset("/vendor/scribe/css/theme-default.style.css") }}" media="screen">
    <link rel="stylesheet" href="{{ asset("/vendor/scribe/css/theme-default.print.css") }}" media="print">

    <script src="https://cdn.jsdelivr.net/npm/lodash@4.17.10/lodash.min.js"></script>

    <link rel="stylesheet"
          href="https://unpkg.com/@highlightjs/cdn-assets@10.7.2/styles/obsidian.min.css">
    <script src="https://unpkg.com/@highlightjs/cdn-assets@10.7.2/highlight.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jets/0.14.1/jets.min.js"></script>

    <style id="language-style">
        /* starts out as display none and is replaced with js later  */
                    body .content .bash-example code { display: none; }
                    body .content .javascript-example code { display: none; }
            </style>

    <script>
        var baseUrl = "http://localhost";
        var useCsrf = Boolean();
        var csrfUrl = "/sanctum/csrf-cookie";
    </script>
    <script src="{{ asset("/vendor/scribe/js/tryitout-3.35.0.js") }}"></script>

    <script src="{{ asset("/vendor/scribe/js/theme-default-3.35.0.js") }}"></script>

</head>

<body data-languages="[&quot;bash&quot;,&quot;javascript&quot;]">

<a href="#" id="nav-button">
    <span>
        MENU
        <img src="{{ asset("/vendor/scribe/images/navbar.png") }}" alt="navbar-image" />
    </span>
</a>
<div class="tocify-wrapper">
    
            <div class="lang-selector">
                                            <button type="button" class="lang-button" data-language-name="bash">bash</button>
                                            <button type="button" class="lang-button" data-language-name="javascript">javascript</button>
                    </div>
    
    <div class="search">
        <input type="text" class="search" id="input-search" placeholder="Search">
    </div>

    <div id="toc">
                                                                            <ul id="tocify-header-0" class="tocify-header">
                    <li class="tocify-item level-1" data-unique="introduction">
                        <a href="#introduction">Introduction</a>
                    </li>
                                            
                                                                    </ul>
                                                <ul id="tocify-header-1" class="tocify-header">
                    <li class="tocify-item level-1" data-unique="authenticating-requests">
                        <a href="#authenticating-requests">Authenticating requests</a>
                    </li>
                                            
                                                </ul>
                    
                    <ul id="tocify-header-2" class="tocify-header">
                <li class="tocify-item level-1" data-unique="endpoints">
                    <a href="#endpoints">Endpoints</a>
                </li>
                                    <ul id="tocify-subheader-endpoints" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="endpoints-POSTapi-register">
                        <a href="#endpoints-POSTapi-register">Handle an incoming registration request.</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="endpoints-POSTapi-login">
                        <a href="#endpoints-POSTapi-login">Handle an incoming authentication request.</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="endpoints-POSTapi-forgot-password">
                        <a href="#endpoints-POSTapi-forgot-password">Handle an incoming password reset link request.</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="endpoints-POSTapi-reset-password">
                        <a href="#endpoints-POSTapi-reset-password">Handle an incoming new password request.</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="endpoints-GETapi-user">
                        <a href="#endpoints-GETapi-user">Register</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="endpoints-GETapi-post_category">
                        <a href="#endpoints-GETapi-post_category">Display All Cateogory POST</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="endpoints-GETapi-post">
                        <a href="#endpoints-GETapi-post">Display a listing of the resource.</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="endpoints-GETapi-post-category--slug-">
                        <a href="#endpoints-GETapi-post-category--slug-">Show all POST by kategori</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="endpoints-GETapi-post--slug-">
                        <a href="#endpoints-GETapi-post--slug-">Show a POST by slug</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="endpoints-GETapi-kehamilan">
                        <a href="#endpoints-GETapi-kehamilan">Show all kehamilan</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="endpoints-POSTapi-kehamilan">
                        <a href="#endpoints-POSTapi-kehamilan">Tambah kehamilan</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="endpoints-PUTapi-kehamilan--uidKehamilan-">
                        <a href="#endpoints-PUTapi-kehamilan--uidKehamilan-">Update kehamilan</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="endpoints-DELETEapi-kehamilan--uidKehamilan-">
                        <a href="#endpoints-DELETEapi-kehamilan--uidKehamilan-">Hapus kehamilan</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="endpoints-GETapi-history_kehamilan--uuidKehamilan-">
                        <a href="#endpoints-GETapi-history_kehamilan--uuidKehamilan-">Show  history kehamilan</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="endpoints-POSTapi-history_kehamilan--uuidKehamilan-">
                        <a href="#endpoints-POSTapi-history_kehamilan--uuidKehamilan-">Tambah history kehamilan</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="endpoints-DELETEapi-history_kehamilan--uidKehamilan-">
                        <a href="#endpoints-DELETEapi-history_kehamilan--uidKehamilan-">Hapus history kehamilan</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="endpoints-GETapi-media">
                        <a href="#endpoints-GETapi-media">Display a listing of the resource.</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="endpoints-GETapi-media--slug-">
                        <a href="#endpoints-GETapi-media--slug-">Show a POST by slug</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="endpoints-GETapi-media-category--slug-">
                        <a href="#endpoints-GETapi-media-category--slug-">Show all POST by kategori</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="endpoints-POSTapi-graph-daily--uuidKehamilan-">
                        <a href="#endpoints-POSTapi-graph-daily--uuidKehamilan-">Data Chart harian history kehamilan</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="endpoints-POSTapi-graph-weekly--uuidKehamilan-">
                        <a href="#endpoints-POSTapi-graph-weekly--uuidKehamilan-">Data Chart mingguan history kehamilan</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="endpoints-GETapi-init-storage">
                        <a href="#endpoints-GETapi-init-storage">GET api/init/storage</a>
                    </li>
                                                    </ul>
                            </ul>
        
                        
            </div>

            <ul class="toc-footer" id="toc-footer">
                            <li><a href="{{ route("scribe.postman") }}">View Postman collection</a></li>
                            <li><a href="{{ route("scribe.openapi") }}">View OpenAPI spec</a></li>
                            <li><a href="http://github.com/knuckleswtf/scribe">Documentation powered by Scribe ✍</a></li>
                    </ul>
        <ul class="toc-footer" id="last-updated">
        <li>Last updated: November 12 2022</li>
    </ul>
</div>

<div class="page-wrapper">
    <div class="dark-box"></div>
    <div class="content">
        <h1 id="introduction">Introduction</h1>
<p>This documentation aims to provide all the information you need to work with our API.</p>
<aside>As you scroll, you'll see code examples for working with the API in different programming languages in the dark area to the right (or as part of the content on mobile).
You can switch the language used with the tabs at the top right (or from the nav menu at the top left on mobile).</aside>
<blockquote>
<p>Base URL</p>
</blockquote>
<pre><code class="language-yaml">http://localhost</code></pre>

        <h1 id="authenticating-requests">Authenticating requests</h1>
<p>This API is not authenticated.</p>

        <h1 id="endpoints">Endpoints</h1>

    

            <h2 id="endpoints-POSTapi-register">Handle an incoming registration request.</h2>

<p>
</p>



<span id="example-requests-POSTapi-register">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/register" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"name\": \"vaagscpwymisinvlrwitlsxmvcbhgrtkjcinfynmsuwqrtyktlkczxhsmprqypmuhbwqovfxmzewujvujmpfsjucefrchfnennmwopqavio\",
    \"email\": \"wmomcxsfutgz\",
    \"password\": \"quisquam\",
    \"tempat_lahir\": \"eveniet\",
    \"tgl_lahir\": \"2022-11-12T15:07:22\",
    \"pekerjaan\": \"harum\",
    \"pendidikan\": \"harum\",
    \"jumlah_anak\": 1256815.916,
    \"fcm_token\": \"pariatur\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/register"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "vaagscpwymisinvlrwitlsxmvcbhgrtkjcinfynmsuwqrtyktlkczxhsmprqypmuhbwqovfxmzewujvujmpfsjucefrchfnennmwopqavio",
    "email": "wmomcxsfutgz",
    "password": "quisquam",
    "tempat_lahir": "eveniet",
    "tgl_lahir": "2022-11-12T15:07:22",
    "pekerjaan": "harum",
    "pendidikan": "harum",
    "jumlah_anak": 1256815.916,
    "fcm_token": "pariatur"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-register">
</span>
<span id="execution-results-POSTapi-register" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-register"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-register"></code></pre>
</span>
<span id="execution-error-POSTapi-register" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-register"></code></pre>
</span>
<form id="form-POSTapi-register" data-method="POST"
      data-path="api/register"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-register', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-register"
                    onclick="tryItOut('POSTapi-register');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-register"
                    onclick="cancelTryOut('POSTapi-register');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-register" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/register</code></b>
        </p>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <p>
            <b><code>name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="name"
               data-endpoint="POSTapi-register"
               value="vaagscpwymisinvlrwitlsxmvcbhgrtkjcinfynmsuwqrtyktlkczxhsmprqypmuhbwqovfxmzewujvujmpfsjucefrchfnennmwopqavio"
               data-component="body" hidden>
    <br>
<p>Must not be greater than 255 characters.</p>
        </p>
                <p>
            <b><code>email</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="email"
               data-endpoint="POSTapi-register"
               value="wmomcxsfutgz"
               data-component="body" hidden>
    <br>
<p>Must be a valid email address. Must not be greater than 255 characters.</p>
        </p>
                <p>
            <b><code>password</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="password"
               data-endpoint="POSTapi-register"
               value="quisquam"
               data-component="body" hidden>
    <br>

        </p>
                <p>
            <b><code>tempat_lahir</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="tempat_lahir"
               data-endpoint="POSTapi-register"
               value="eveniet"
               data-component="body" hidden>
    <br>

        </p>
                <p>
            <b><code>tgl_lahir</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="tgl_lahir"
               data-endpoint="POSTapi-register"
               value="2022-11-12T15:07:22"
               data-component="body" hidden>
    <br>
<p>Must be a valid date.</p>
        </p>
                <p>
            <b><code>pekerjaan</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="pekerjaan"
               data-endpoint="POSTapi-register"
               value="harum"
               data-component="body" hidden>
    <br>

        </p>
                <p>
            <b><code>pendidikan</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="pendidikan"
               data-endpoint="POSTapi-register"
               value="harum"
               data-component="body" hidden>
    <br>

        </p>
                <p>
            <b><code>jumlah_anak</code></b>&nbsp;&nbsp;<small>number</small>  &nbsp;
                <input type="number"
               name="jumlah_anak"
               data-endpoint="POSTapi-register"
               value="1256815.916"
               data-component="body" hidden>
    <br>

        </p>
                <p>
            <b><code>fcm_token</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="fcm_token"
               data-endpoint="POSTapi-register"
               value="pariatur"
               data-component="body" hidden>
    <br>

        </p>
        </form>

            <h2 id="endpoints-POSTapi-login">Handle an incoming authentication request.</h2>

<p>
</p>



<span id="example-requests-POSTapi-login">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/login" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"email\": \"ut\",
    \"password\": \"et\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/login"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "email": "ut",
    "password": "et"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-login">
</span>
<span id="execution-results-POSTapi-login" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-login"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-login"></code></pre>
</span>
<span id="execution-error-POSTapi-login" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-login"></code></pre>
</span>
<form id="form-POSTapi-login" data-method="POST"
      data-path="api/login"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-login', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-login"
                    onclick="tryItOut('POSTapi-login');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-login"
                    onclick="cancelTryOut('POSTapi-login');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-login" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/login</code></b>
        </p>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <p>
            <b><code>email</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="email"
               data-endpoint="POSTapi-login"
               value="ut"
               data-component="body" hidden>
    <br>

        </p>
                <p>
            <b><code>password</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="password"
               data-endpoint="POSTapi-login"
               value="et"
               data-component="body" hidden>
    <br>

        </p>
        </form>

            <h2 id="endpoints-POSTapi-forgot-password">Handle an incoming password reset link request.</h2>

<p>
</p>



<span id="example-requests-POSTapi-forgot-password">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/forgot-password" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"email\": \"ddaniel@example.com\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/forgot-password"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "email": "ddaniel@example.com"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-forgot-password">
</span>
<span id="execution-results-POSTapi-forgot-password" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-forgot-password"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-forgot-password"></code></pre>
</span>
<span id="execution-error-POSTapi-forgot-password" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-forgot-password"></code></pre>
</span>
<form id="form-POSTapi-forgot-password" data-method="POST"
      data-path="api/forgot-password"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-forgot-password', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-forgot-password"
                    onclick="tryItOut('POSTapi-forgot-password');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-forgot-password"
                    onclick="cancelTryOut('POSTapi-forgot-password');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-forgot-password" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/forgot-password</code></b>
        </p>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <p>
            <b><code>email</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="email"
               data-endpoint="POSTapi-forgot-password"
               value="ddaniel@example.com"
               data-component="body" hidden>
    <br>
<p>Must be a valid email address.</p>
        </p>
        </form>

            <h2 id="endpoints-POSTapi-reset-password">Handle an incoming new password request.</h2>

<p>
</p>



<span id="example-requests-POSTapi-reset-password">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/reset-password" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"token\": \"sunt\",
    \"email\": \"lou60@example.com\",
    \"password\": \"error\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/reset-password"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "token": "sunt",
    "email": "lou60@example.com",
    "password": "error"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-reset-password">
</span>
<span id="execution-results-POSTapi-reset-password" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-reset-password"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-reset-password"></code></pre>
</span>
<span id="execution-error-POSTapi-reset-password" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-reset-password"></code></pre>
</span>
<form id="form-POSTapi-reset-password" data-method="POST"
      data-path="api/reset-password"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-reset-password', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-reset-password"
                    onclick="tryItOut('POSTapi-reset-password');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-reset-password"
                    onclick="cancelTryOut('POSTapi-reset-password');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-reset-password" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/reset-password</code></b>
        </p>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <p>
            <b><code>token</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="token"
               data-endpoint="POSTapi-reset-password"
               value="sunt"
               data-component="body" hidden>
    <br>

        </p>
                <p>
            <b><code>email</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="email"
               data-endpoint="POSTapi-reset-password"
               value="lou60@example.com"
               data-component="body" hidden>
    <br>
<p>Must be a valid email address.</p>
        </p>
                <p>
            <b><code>password</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="password"
               data-endpoint="POSTapi-reset-password"
               value="error"
               data-component="body" hidden>
    <br>

        </p>
        </form>

            <h2 id="endpoints-GETapi-user">Register</h2>

<p>
</p>

<p>Register new user. If everything is okay, you'll get a 200 OK response.</p>
<p>Otherwise, the request will fail with a 400 error, and a response listing the failed services.</p>

<span id="example-requests-GETapi-user">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/user" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/user"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-user">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary>
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre>
        </details>         <pre>

<code class="language-json">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-user" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-user"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-user"></code></pre>
</span>
<span id="execution-error-GETapi-user" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-user"></code></pre>
</span>
<form id="form-GETapi-user" data-method="GET"
      data-path="api/user"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-user', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-user"
                    onclick="tryItOut('GETapi-user');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-user"
                    onclick="cancelTryOut('GETapi-user');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-user" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/user</code></b>
        </p>
                    </form>

            <h2 id="endpoints-GETapi-post_category">Display All Cateogory POST</h2>

<p>
</p>

<p>Check that the service is up. If everything is okay, you'll get a 200 OK response.</p>
<p>Otherwise, the request will fail with a 400 error, and a response listing the failed services.</p>

<span id="example-requests-GETapi-post_category">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/post_category" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/post_category"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-post_category">
            <blockquote>
            <p>Example response (500):</p>
        </blockquote>
                <details class="annotation">
            <summary>
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 55
access-control-allow-origin: *
 </code></pre>
        </details>         <pre>

<code class="language-json">{
    &quot;message&quot;: &quot;Too few arguments to function App\\Http\\Controllers\\PostCategoryController::__index(), 0 passed in D:\\~projects\\htdocs\\fetal\\backend\\app\\Http\\Controllers\\PostCategoryController.php on line 37 and exactly 1 expected&quot;,
    &quot;exception&quot;: &quot;ArgumentCountError&quot;,
    &quot;file&quot;: &quot;D:\\~projects\\htdocs\\fetal\\backend\\vendor\\MF\\ControllerResources.php&quot;,
    &quot;line&quot;: 100,
    &quot;trace&quot;: [
        {
            &quot;file&quot;: &quot;D:\\~projects\\htdocs\\fetal\\backend\\app\\Http\\Controllers\\PostCategoryController.php&quot;,
            &quot;line&quot;: 37,
            &quot;function&quot;: &quot;__index&quot;,
            &quot;class&quot;: &quot;App\\Http\\Controllers\\PostCategoryController&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;D:\\~projects\\htdocs\\fetal\\backend\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Controller.php&quot;,
            &quot;line&quot;: 54,
            &quot;function&quot;: &quot;index&quot;,
            &quot;class&quot;: &quot;App\\Http\\Controllers\\PostCategoryController&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;D:\\~projects\\htdocs\\fetal\\backend\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\ControllerDispatcher.php&quot;,
            &quot;line&quot;: 45,
            &quot;function&quot;: &quot;callAction&quot;,
            &quot;class&quot;: &quot;Illuminate\\Routing\\Controller&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;D:\\~projects\\htdocs\\fetal\\backend\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Route.php&quot;,
            &quot;line&quot;: 262,
            &quot;function&quot;: &quot;dispatch&quot;,
            &quot;class&quot;: &quot;Illuminate\\Routing\\ControllerDispatcher&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;D:\\~projects\\htdocs\\fetal\\backend\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Route.php&quot;,
            &quot;line&quot;: 205,
            &quot;function&quot;: &quot;runController&quot;,
            &quot;class&quot;: &quot;Illuminate\\Routing\\Route&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;D:\\~projects\\htdocs\\fetal\\backend\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php&quot;,
            &quot;line&quot;: 721,
            &quot;function&quot;: &quot;run&quot;,
            &quot;class&quot;: &quot;Illuminate\\Routing\\Route&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;D:\\~projects\\htdocs\\fetal\\backend\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php&quot;,
            &quot;line&quot;: 128,
            &quot;function&quot;: &quot;Illuminate\\Routing\\{closure}&quot;,
            &quot;class&quot;: &quot;Illuminate\\Routing\\Router&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;D:\\~projects\\htdocs\\fetal\\backend\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Middleware\\SubstituteBindings.php&quot;,
            &quot;line&quot;: 50,
            &quot;function&quot;: &quot;Illuminate\\Pipeline\\{closure}&quot;,
            &quot;class&quot;: &quot;Illuminate\\Pipeline\\Pipeline&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;D:\\~projects\\htdocs\\fetal\\backend\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php&quot;,
            &quot;line&quot;: 167,
            &quot;function&quot;: &quot;handle&quot;,
            &quot;class&quot;: &quot;Illuminate\\Routing\\Middleware\\SubstituteBindings&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;D:\\~projects\\htdocs\\fetal\\backend\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Middleware\\ThrottleRequests.php&quot;,
            &quot;line&quot;: 127,
            &quot;function&quot;: &quot;Illuminate\\Pipeline\\{closure}&quot;,
            &quot;class&quot;: &quot;Illuminate\\Pipeline\\Pipeline&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;D:\\~projects\\htdocs\\fetal\\backend\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Middleware\\ThrottleRequests.php&quot;,
            &quot;line&quot;: 103,
            &quot;function&quot;: &quot;handleRequest&quot;,
            &quot;class&quot;: &quot;Illuminate\\Routing\\Middleware\\ThrottleRequests&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;D:\\~projects\\htdocs\\fetal\\backend\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Middleware\\ThrottleRequests.php&quot;,
            &quot;line&quot;: 55,
            &quot;function&quot;: &quot;handleRequestUsingNamedLimiter&quot;,
            &quot;class&quot;: &quot;Illuminate\\Routing\\Middleware\\ThrottleRequests&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;D:\\~projects\\htdocs\\fetal\\backend\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php&quot;,
            &quot;line&quot;: 167,
            &quot;function&quot;: &quot;handle&quot;,
            &quot;class&quot;: &quot;Illuminate\\Routing\\Middleware\\ThrottleRequests&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;D:\\~projects\\htdocs\\fetal\\backend\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php&quot;,
            &quot;line&quot;: 103,
            &quot;function&quot;: &quot;Illuminate\\Pipeline\\{closure}&quot;,
            &quot;class&quot;: &quot;Illuminate\\Pipeline\\Pipeline&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;D:\\~projects\\htdocs\\fetal\\backend\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php&quot;,
            &quot;line&quot;: 723,
            &quot;function&quot;: &quot;then&quot;,
            &quot;class&quot;: &quot;Illuminate\\Pipeline\\Pipeline&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;D:\\~projects\\htdocs\\fetal\\backend\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php&quot;,
            &quot;line&quot;: 698,
            &quot;function&quot;: &quot;runRouteWithinStack&quot;,
            &quot;class&quot;: &quot;Illuminate\\Routing\\Router&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;D:\\~projects\\htdocs\\fetal\\backend\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php&quot;,
            &quot;line&quot;: 662,
            &quot;function&quot;: &quot;runRoute&quot;,
            &quot;class&quot;: &quot;Illuminate\\Routing\\Router&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;D:\\~projects\\htdocs\\fetal\\backend\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php&quot;,
            &quot;line&quot;: 651,
            &quot;function&quot;: &quot;dispatchToRoute&quot;,
            &quot;class&quot;: &quot;Illuminate\\Routing\\Router&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;D:\\~projects\\htdocs\\fetal\\backend\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php&quot;,
            &quot;line&quot;: 167,
            &quot;function&quot;: &quot;dispatch&quot;,
            &quot;class&quot;: &quot;Illuminate\\Routing\\Router&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;D:\\~projects\\htdocs\\fetal\\backend\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php&quot;,
            &quot;line&quot;: 128,
            &quot;function&quot;: &quot;Illuminate\\Foundation\\Http\\{closure}&quot;,
            &quot;class&quot;: &quot;Illuminate\\Foundation\\Http\\Kernel&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;D:\\~projects\\htdocs\\fetal\\backend\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest.php&quot;,
            &quot;line&quot;: 21,
            &quot;function&quot;: &quot;Illuminate\\Pipeline\\{closure}&quot;,
            &quot;class&quot;: &quot;Illuminate\\Pipeline\\Pipeline&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;D:\\~projects\\htdocs\\fetal\\backend\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\ConvertEmptyStringsToNull.php&quot;,
            &quot;line&quot;: 31,
            &quot;function&quot;: &quot;handle&quot;,
            &quot;class&quot;: &quot;Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;D:\\~projects\\htdocs\\fetal\\backend\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php&quot;,
            &quot;line&quot;: 167,
            &quot;function&quot;: &quot;handle&quot;,
            &quot;class&quot;: &quot;Illuminate\\Foundation\\Http\\Middleware\\ConvertEmptyStringsToNull&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;D:\\~projects\\htdocs\\fetal\\backend\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest.php&quot;,
            &quot;line&quot;: 21,
            &quot;function&quot;: &quot;Illuminate\\Pipeline\\{closure}&quot;,
            &quot;class&quot;: &quot;Illuminate\\Pipeline\\Pipeline&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;D:\\~projects\\htdocs\\fetal\\backend\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\TrimStrings.php&quot;,
            &quot;line&quot;: 40,
            &quot;function&quot;: &quot;handle&quot;,
            &quot;class&quot;: &quot;Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;D:\\~projects\\htdocs\\fetal\\backend\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php&quot;,
            &quot;line&quot;: 167,
            &quot;function&quot;: &quot;handle&quot;,
            &quot;class&quot;: &quot;Illuminate\\Foundation\\Http\\Middleware\\TrimStrings&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;D:\\~projects\\htdocs\\fetal\\backend\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize.php&quot;,
            &quot;line&quot;: 27,
            &quot;function&quot;: &quot;Illuminate\\Pipeline\\{closure}&quot;,
            &quot;class&quot;: &quot;Illuminate\\Pipeline\\Pipeline&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;D:\\~projects\\htdocs\\fetal\\backend\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php&quot;,
            &quot;line&quot;: 167,
            &quot;function&quot;: &quot;handle&quot;,
            &quot;class&quot;: &quot;Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;D:\\~projects\\htdocs\\fetal\\backend\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\PreventRequestsDuringMaintenance.php&quot;,
            &quot;line&quot;: 86,
            &quot;function&quot;: &quot;Illuminate\\Pipeline\\{closure}&quot;,
            &quot;class&quot;: &quot;Illuminate\\Pipeline\\Pipeline&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;D:\\~projects\\htdocs\\fetal\\backend\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php&quot;,
            &quot;line&quot;: 167,
            &quot;function&quot;: &quot;handle&quot;,
            &quot;class&quot;: &quot;Illuminate\\Foundation\\Http\\Middleware\\PreventRequestsDuringMaintenance&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;D:\\~projects\\htdocs\\fetal\\backend\\vendor\\fruitcake\\laravel-cors\\src\\HandleCors.php&quot;,
            &quot;line&quot;: 52,
            &quot;function&quot;: &quot;Illuminate\\Pipeline\\{closure}&quot;,
            &quot;class&quot;: &quot;Illuminate\\Pipeline\\Pipeline&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;D:\\~projects\\htdocs\\fetal\\backend\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php&quot;,
            &quot;line&quot;: 167,
            &quot;function&quot;: &quot;handle&quot;,
            &quot;class&quot;: &quot;Fruitcake\\Cors\\HandleCors&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;D:\\~projects\\htdocs\\fetal\\backend\\vendor\\laravel\\framework\\src\\Illuminate\\Http\\Middleware\\TrustProxies.php&quot;,
            &quot;line&quot;: 39,
            &quot;function&quot;: &quot;Illuminate\\Pipeline\\{closure}&quot;,
            &quot;class&quot;: &quot;Illuminate\\Pipeline\\Pipeline&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;D:\\~projects\\htdocs\\fetal\\backend\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php&quot;,
            &quot;line&quot;: 167,
            &quot;function&quot;: &quot;handle&quot;,
            &quot;class&quot;: &quot;Illuminate\\Http\\Middleware\\TrustProxies&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;D:\\~projects\\htdocs\\fetal\\backend\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php&quot;,
            &quot;line&quot;: 103,
            &quot;function&quot;: &quot;Illuminate\\Pipeline\\{closure}&quot;,
            &quot;class&quot;: &quot;Illuminate\\Pipeline\\Pipeline&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;D:\\~projects\\htdocs\\fetal\\backend\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php&quot;,
            &quot;line&quot;: 142,
            &quot;function&quot;: &quot;then&quot;,
            &quot;class&quot;: &quot;Illuminate\\Pipeline\\Pipeline&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;D:\\~projects\\htdocs\\fetal\\backend\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php&quot;,
            &quot;line&quot;: 111,
            &quot;function&quot;: &quot;sendRequestThroughRouter&quot;,
            &quot;class&quot;: &quot;Illuminate\\Foundation\\Http\\Kernel&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;D:\\~projects\\htdocs\\fetal\\backend\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php&quot;,
            &quot;line&quot;: 299,
            &quot;function&quot;: &quot;handle&quot;,
            &quot;class&quot;: &quot;Illuminate\\Foundation\\Http\\Kernel&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;D:\\~projects\\htdocs\\fetal\\backend\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php&quot;,
            &quot;line&quot;: 287,
            &quot;function&quot;: &quot;callLaravelOrLumenRoute&quot;,
            &quot;class&quot;: &quot;Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;D:\\~projects\\htdocs\\fetal\\backend\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php&quot;,
            &quot;line&quot;: 89,
            &quot;function&quot;: &quot;makeApiCall&quot;,
            &quot;class&quot;: &quot;Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;D:\\~projects\\htdocs\\fetal\\backend\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php&quot;,
            &quot;line&quot;: 45,
            &quot;function&quot;: &quot;makeResponseCall&quot;,
            &quot;class&quot;: &quot;Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;D:\\~projects\\htdocs\\fetal\\backend\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php&quot;,
            &quot;line&quot;: 35,
            &quot;function&quot;: &quot;makeResponseCallIfConditionsPass&quot;,
            &quot;class&quot;: &quot;Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;D:\\~projects\\htdocs\\fetal\\backend\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Extractor.php&quot;,
            &quot;line&quot;: 222,
            &quot;function&quot;: &quot;__invoke&quot;,
            &quot;class&quot;: &quot;Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;D:\\~projects\\htdocs\\fetal\\backend\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Extractor.php&quot;,
            &quot;line&quot;: 179,
            &quot;function&quot;: &quot;iterateThroughStrategies&quot;,
            &quot;class&quot;: &quot;Knuckles\\Scribe\\Extracting\\Extractor&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;D:\\~projects\\htdocs\\fetal\\backend\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Extractor.php&quot;,
            &quot;line&quot;: 116,
            &quot;function&quot;: &quot;fetchResponses&quot;,
            &quot;class&quot;: &quot;Knuckles\\Scribe\\Extracting\\Extractor&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;D:\\~projects\\htdocs\\fetal\\backend\\vendor\\knuckleswtf\\scribe\\src\\GroupedEndpoints\\GroupedEndpointsFromApp.php&quot;,
            &quot;line&quot;: 123,
            &quot;function&quot;: &quot;processRoute&quot;,
            &quot;class&quot;: &quot;Knuckles\\Scribe\\Extracting\\Extractor&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;D:\\~projects\\htdocs\\fetal\\backend\\vendor\\knuckleswtf\\scribe\\src\\GroupedEndpoints\\GroupedEndpointsFromApp.php&quot;,
            &quot;line&quot;: 80,
            &quot;function&quot;: &quot;extractEndpointsInfoFromLaravelApp&quot;,
            &quot;class&quot;: &quot;Knuckles\\Scribe\\GroupedEndpoints\\GroupedEndpointsFromApp&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;D:\\~projects\\htdocs\\fetal\\backend\\vendor\\knuckleswtf\\scribe\\src\\GroupedEndpoints\\GroupedEndpointsFromApp.php&quot;,
            &quot;line&quot;: 56,
            &quot;function&quot;: &quot;extractEndpointsInfoAndWriteToDisk&quot;,
            &quot;class&quot;: &quot;Knuckles\\Scribe\\GroupedEndpoints\\GroupedEndpointsFromApp&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;D:\\~projects\\htdocs\\fetal\\backend\\vendor\\knuckleswtf\\scribe\\src\\Commands\\GenerateDocumentation.php&quot;,
            &quot;line&quot;: 55,
            &quot;function&quot;: &quot;get&quot;,
            &quot;class&quot;: &quot;Knuckles\\Scribe\\GroupedEndpoints\\GroupedEndpointsFromApp&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;D:\\~projects\\htdocs\\fetal\\backend\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php&quot;,
            &quot;line&quot;: 36,
            &quot;function&quot;: &quot;handle&quot;,
            &quot;class&quot;: &quot;Knuckles\\Scribe\\Commands\\GenerateDocumentation&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;D:\\~projects\\htdocs\\fetal\\backend\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Util.php&quot;,
            &quot;line&quot;: 40,
            &quot;function&quot;: &quot;Illuminate\\Container\\{closure}&quot;,
            &quot;class&quot;: &quot;Illuminate\\Container\\BoundMethod&quot;,
            &quot;type&quot;: &quot;::&quot;
        },
        {
            &quot;file&quot;: &quot;D:\\~projects\\htdocs\\fetal\\backend\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php&quot;,
            &quot;line&quot;: 93,
            &quot;function&quot;: &quot;unwrapIfClosure&quot;,
            &quot;class&quot;: &quot;Illuminate\\Container\\Util&quot;,
            &quot;type&quot;: &quot;::&quot;
        },
        {
            &quot;file&quot;: &quot;D:\\~projects\\htdocs\\fetal\\backend\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php&quot;,
            &quot;line&quot;: 37,
            &quot;function&quot;: &quot;callBoundMethod&quot;,
            &quot;class&quot;: &quot;Illuminate\\Container\\BoundMethod&quot;,
            &quot;type&quot;: &quot;::&quot;
        },
        {
            &quot;file&quot;: &quot;D:\\~projects\\htdocs\\fetal\\backend\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php&quot;,
            &quot;line&quot;: 653,
            &quot;function&quot;: &quot;call&quot;,
            &quot;class&quot;: &quot;Illuminate\\Container\\BoundMethod&quot;,
            &quot;type&quot;: &quot;::&quot;
        },
        {
            &quot;file&quot;: &quot;D:\\~projects\\htdocs\\fetal\\backend\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php&quot;,
            &quot;line&quot;: 136,
            &quot;function&quot;: &quot;call&quot;,
            &quot;class&quot;: &quot;Illuminate\\Container\\Container&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;D:\\~projects\\htdocs\\fetal\\backend\\vendor\\symfony\\console\\Command\\Command.php&quot;,
            &quot;line&quot;: 298,
            &quot;function&quot;: &quot;execute&quot;,
            &quot;class&quot;: &quot;Illuminate\\Console\\Command&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;D:\\~projects\\htdocs\\fetal\\backend\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php&quot;,
            &quot;line&quot;: 121,
            &quot;function&quot;: &quot;run&quot;,
            &quot;class&quot;: &quot;Symfony\\Component\\Console\\Command\\Command&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;D:\\~projects\\htdocs\\fetal\\backend\\vendor\\symfony\\console\\Application.php&quot;,
            &quot;line&quot;: 1024,
            &quot;function&quot;: &quot;run&quot;,
            &quot;class&quot;: &quot;Illuminate\\Console\\Command&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;D:\\~projects\\htdocs\\fetal\\backend\\vendor\\symfony\\console\\Application.php&quot;,
            &quot;line&quot;: 299,
            &quot;function&quot;: &quot;doRunCommand&quot;,
            &quot;class&quot;: &quot;Symfony\\Component\\Console\\Application&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;D:\\~projects\\htdocs\\fetal\\backend\\vendor\\symfony\\console\\Application.php&quot;,
            &quot;line&quot;: 171,
            &quot;function&quot;: &quot;doRun&quot;,
            &quot;class&quot;: &quot;Symfony\\Component\\Console\\Application&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;D:\\~projects\\htdocs\\fetal\\backend\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Application.php&quot;,
            &quot;line&quot;: 94,
            &quot;function&quot;: &quot;run&quot;,
            &quot;class&quot;: &quot;Symfony\\Component\\Console\\Application&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;D:\\~projects\\htdocs\\fetal\\backend\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Console\\Kernel.php&quot;,
            &quot;line&quot;: 129,
            &quot;function&quot;: &quot;run&quot;,
            &quot;class&quot;: &quot;Illuminate\\Console\\Application&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;D:\\~projects\\htdocs\\fetal\\backend\\artisan&quot;,
            &quot;line&quot;: 37,
            &quot;function&quot;: &quot;handle&quot;,
            &quot;class&quot;: &quot;Illuminate\\Foundation\\Console\\Kernel&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        }
    ]
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-post_category" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-post_category"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-post_category"></code></pre>
</span>
<span id="execution-error-GETapi-post_category" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-post_category"></code></pre>
</span>
<form id="form-GETapi-post_category" data-method="GET"
      data-path="api/post_category"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-post_category', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-post_category"
                    onclick="tryItOut('GETapi-post_category');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-post_category"
                    onclick="cancelTryOut('GETapi-post_category');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-post_category" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/post_category</code></b>
        </p>
                    </form>

            <h2 id="endpoints-GETapi-post">Display a listing of the resource.</h2>

<p>
</p>



<span id="example-requests-GETapi-post">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/post" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/post"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-post">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary>
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre>
        </details>         <pre>

<code class="language-json">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-post" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-post"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-post"></code></pre>
</span>
<span id="execution-error-GETapi-post" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-post"></code></pre>
</span>
<form id="form-GETapi-post" data-method="GET"
      data-path="api/post"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-post', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-post"
                    onclick="tryItOut('GETapi-post');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-post"
                    onclick="cancelTryOut('GETapi-post');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-post" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/post</code></b>
        </p>
                    </form>

            <h2 id="endpoints-GETapi-post-category--slug-">Show all POST by kategori</h2>

<p>
</p>

<p>Check that the service is up. If everything is okay, you'll get a 200 OK response.</p>
<p>Otherwise, the request will fail with a 400 error, and a response listing the failed services.</p>

<span id="example-requests-GETapi-post-category--slug-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/post/category/ea" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/post/category/ea"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-post-category--slug-">
            <blockquote>
            <p>Example response (204):</p>
        </blockquote>
                <details class="annotation">
            <summary>
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
x-ratelimit-limit: 60
x-ratelimit-remaining: 59
access-control-allow-origin: *
 </code></pre>
        </details>         <pre>
<code>[Empty response]</code>
 </pre>
    </span>
<span id="execution-results-GETapi-post-category--slug-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-post-category--slug-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-post-category--slug-"></code></pre>
</span>
<span id="execution-error-GETapi-post-category--slug-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-post-category--slug-"></code></pre>
</span>
<form id="form-GETapi-post-category--slug-" data-method="GET"
      data-path="api/post/category/{slug}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-post-category--slug-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-post-category--slug-"
                    onclick="tryItOut('GETapi-post-category--slug-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-post-category--slug-"
                    onclick="cancelTryOut('GETapi-post-category--slug-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-post-category--slug-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/post/category/{slug}</code></b>
        </p>
                    <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>slug</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="slug"
               data-endpoint="GETapi-post-category--slug-"
               value="ea"
               data-component="url" hidden>
    <br>
<p>The slug of the category.</p>
            </p>
                    </form>

            <h2 id="endpoints-GETapi-post--slug-">Show a POST by slug</h2>

<p>
</p>

<p>Check that the service is up. If everything is okay, you'll get a 200 OK response.</p>
<p>Otherwise, the request will fail with a 400 error, and a response listing the failed services.</p>

<span id="example-requests-GETapi-post--slug-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/post/1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/post/1"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-post--slug-">
            <blockquote>
            <p>Example response (204):</p>
        </blockquote>
                <details class="annotation">
            <summary>
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
x-ratelimit-limit: 60
x-ratelimit-remaining: 58
access-control-allow-origin: *
 </code></pre>
        </details>         <pre>
<code>[Empty response]</code>
 </pre>
    </span>
<span id="execution-results-GETapi-post--slug-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-post--slug-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-post--slug-"></code></pre>
</span>
<span id="execution-error-GETapi-post--slug-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-post--slug-"></code></pre>
</span>
<form id="form-GETapi-post--slug-" data-method="GET"
      data-path="api/post/{slug}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-post--slug-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-post--slug-"
                    onclick="tryItOut('GETapi-post--slug-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-post--slug-"
                    onclick="cancelTryOut('GETapi-post--slug-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-post--slug-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/post/{slug}</code></b>
        </p>
                    <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>slug</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="slug"
               data-endpoint="GETapi-post--slug-"
               value="1"
               data-component="url" hidden>
    <br>
<p>The slug of the post.</p>
            </p>
                    </form>

            <h2 id="endpoints-GETapi-kehamilan">Show all kehamilan</h2>

<p>
</p>

<p>Check that the service is up. If everything is okay, you'll get a 200 OK response.</p>
<p>Otherwise, the request will fail with a 400 error, and a response listing the failed services.</p>

<span id="example-requests-GETapi-kehamilan">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/kehamilan" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/kehamilan"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-kehamilan">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary>
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre>
        </details>         <pre>

<code class="language-json">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-kehamilan" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-kehamilan"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-kehamilan"></code></pre>
</span>
<span id="execution-error-GETapi-kehamilan" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-kehamilan"></code></pre>
</span>
<form id="form-GETapi-kehamilan" data-method="GET"
      data-path="api/kehamilan"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-kehamilan', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-kehamilan"
                    onclick="tryItOut('GETapi-kehamilan');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-kehamilan"
                    onclick="cancelTryOut('GETapi-kehamilan');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-kehamilan" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/kehamilan</code></b>
        </p>
                    </form>

            <h2 id="endpoints-POSTapi-kehamilan">Tambah kehamilan</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-POSTapi-kehamilan">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/kehamilan" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"kehamilan_ke\": 8,
    \"hari_pertama_haid\": \"aut\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/kehamilan"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "kehamilan_ke": 8,
    "hari_pertama_haid": "aut"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-kehamilan">
</span>
<span id="execution-results-POSTapi-kehamilan" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-kehamilan"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-kehamilan"></code></pre>
</span>
<span id="execution-error-POSTapi-kehamilan" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-kehamilan"></code></pre>
</span>
<form id="form-POSTapi-kehamilan" data-method="POST"
      data-path="api/kehamilan"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-kehamilan', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-kehamilan"
                    onclick="tryItOut('POSTapi-kehamilan');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-kehamilan"
                    onclick="cancelTryOut('POSTapi-kehamilan');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-kehamilan" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/kehamilan</code></b>
        </p>
                <p>
            <label id="auth-POSTapi-kehamilan" hidden>Authorization header:
                <b><code>Bearer </code></b><input type="text"
                                                                name="Authorization"
                                                                data-prefix="Bearer "
                                                                data-endpoint="POSTapi-kehamilan"
                                                                data-component="header"></label>
        </p>
                        <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <p>
            <b><code>kehamilan_ke</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="kehamilan_ke"
               data-endpoint="POSTapi-kehamilan"
               value="8"
               data-component="body" hidden>
    <br>

        </p>
                <p>
            <b><code>hari_pertama_haid</code></b>&nbsp;&nbsp;<small>date</small>  &nbsp;
                <input type="text"
               name="hari_pertama_haid"
               data-endpoint="POSTapi-kehamilan"
               value="aut"
               data-component="body" hidden>
    <br>
<p>Check that the service is up. If everything is okay, you'll get a 200 OK response.</p>
<p>Otherwise, the request will fail with a 400 error, and a response listing the failed services.</p>
        </p>
        </form>

            <h2 id="endpoints-PUTapi-kehamilan--uidKehamilan-">Update kehamilan</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-PUTapi-kehamilan--uidKehamilan-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "http://localhost/api/kehamilan/dolore" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"kehamilan_ke\": 18,
    \"hari_pertama_haid\": \"ea\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/kehamilan/dolore"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "kehamilan_ke": 18,
    "hari_pertama_haid": "ea"
};

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PUTapi-kehamilan--uidKehamilan-">
</span>
<span id="execution-results-PUTapi-kehamilan--uidKehamilan-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-kehamilan--uidKehamilan-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-kehamilan--uidKehamilan-"></code></pre>
</span>
<span id="execution-error-PUTapi-kehamilan--uidKehamilan-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-kehamilan--uidKehamilan-"></code></pre>
</span>
<form id="form-PUTapi-kehamilan--uidKehamilan-" data-method="PUT"
      data-path="api/kehamilan/{uidKehamilan}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-kehamilan--uidKehamilan-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-kehamilan--uidKehamilan-"
                    onclick="tryItOut('PUTapi-kehamilan--uidKehamilan-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-kehamilan--uidKehamilan-"
                    onclick="cancelTryOut('PUTapi-kehamilan--uidKehamilan-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-kehamilan--uidKehamilan-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/kehamilan/{uidKehamilan}</code></b>
        </p>
                <p>
            <label id="auth-PUTapi-kehamilan--uidKehamilan-" hidden>Authorization header:
                <b><code>Bearer </code></b><input type="text"
                                                                name="Authorization"
                                                                data-prefix="Bearer "
                                                                data-endpoint="PUTapi-kehamilan--uidKehamilan-"
                                                                data-component="header"></label>
        </p>
                <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>uidKehamilan</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="uidKehamilan"
               data-endpoint="PUTapi-kehamilan--uidKehamilan-"
               value="dolore"
               data-component="url" hidden>
    <br>
<p>berupa unique id record (uuid) dari kehamilan</p>
            </p>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <p>
            <b><code>kehamilan_ke</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="kehamilan_ke"
               data-endpoint="PUTapi-kehamilan--uidKehamilan-"
               value="18"
               data-component="body" hidden>
    <br>

        </p>
                <p>
            <b><code>hari_pertama_haid</code></b>&nbsp;&nbsp;<small>date</small>  &nbsp;
                <input type="text"
               name="hari_pertama_haid"
               data-endpoint="PUTapi-kehamilan--uidKehamilan-"
               value="ea"
               data-component="body" hidden>
    <br>
<p>Check that the service is up. If everything is okay, you'll get a 200 OK response.</p>
<p>Otherwise, the request will fail with a 400 error, and a response listing the failed services.</p>
        </p>
        </form>

            <h2 id="endpoints-DELETEapi-kehamilan--uidKehamilan-">Hapus kehamilan</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-DELETEapi-kehamilan--uidKehamilan-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "http://localhost/api/kehamilan/atque" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/kehamilan/atque"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-DELETEapi-kehamilan--uidKehamilan-">
</span>
<span id="execution-results-DELETEapi-kehamilan--uidKehamilan-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-kehamilan--uidKehamilan-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-kehamilan--uidKehamilan-"></code></pre>
</span>
<span id="execution-error-DELETEapi-kehamilan--uidKehamilan-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-kehamilan--uidKehamilan-"></code></pre>
</span>
<form id="form-DELETEapi-kehamilan--uidKehamilan-" data-method="DELETE"
      data-path="api/kehamilan/{uidKehamilan}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-kehamilan--uidKehamilan-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-kehamilan--uidKehamilan-"
                    onclick="tryItOut('DELETEapi-kehamilan--uidKehamilan-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-kehamilan--uidKehamilan-"
                    onclick="cancelTryOut('DELETEapi-kehamilan--uidKehamilan-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-kehamilan--uidKehamilan-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/kehamilan/{uidKehamilan}</code></b>
        </p>
                <p>
            <label id="auth-DELETEapi-kehamilan--uidKehamilan-" hidden>Authorization header:
                <b><code>Bearer </code></b><input type="text"
                                                                name="Authorization"
                                                                data-prefix="Bearer "
                                                                data-endpoint="DELETEapi-kehamilan--uidKehamilan-"
                                                                data-component="header"></label>
        </p>
                <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>uidKehamilan</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="uidKehamilan"
               data-endpoint="DELETEapi-kehamilan--uidKehamilan-"
               value="atque"
               data-component="url" hidden>
    <br>
<p>berupa unique id record (uuid) dari kehamilan</p>
<p>Check that the service is up. If everything is okay, you'll get a 200 OK response.</p>
<p>Otherwise, the request will fail with a 400 error, and a response listing the failed services.</p>
            </p>
                    </form>

            <h2 id="endpoints-GETapi-history_kehamilan--uuidKehamilan-">Show  history kehamilan</h2>

<p>
</p>

<p>Check that the service is up. If everything is okay, you'll get a 200 OK response.</p>

<span id="example-requests-GETapi-history_kehamilan--uuidKehamilan-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/history_kehamilan/aspernatur" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/history_kehamilan/aspernatur"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-history_kehamilan--uuidKehamilan-">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary>
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre>
        </details>         <pre>

<code class="language-json">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-history_kehamilan--uuidKehamilan-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-history_kehamilan--uuidKehamilan-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-history_kehamilan--uuidKehamilan-"></code></pre>
</span>
<span id="execution-error-GETapi-history_kehamilan--uuidKehamilan-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-history_kehamilan--uuidKehamilan-"></code></pre>
</span>
<form id="form-GETapi-history_kehamilan--uuidKehamilan-" data-method="GET"
      data-path="api/history_kehamilan/{uuidKehamilan}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-history_kehamilan--uuidKehamilan-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-history_kehamilan--uuidKehamilan-"
                    onclick="tryItOut('GETapi-history_kehamilan--uuidKehamilan-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-history_kehamilan--uuidKehamilan-"
                    onclick="cancelTryOut('GETapi-history_kehamilan--uuidKehamilan-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-history_kehamilan--uuidKehamilan-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/history_kehamilan/{uuidKehamilan}</code></b>
        </p>
                    <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>uuidKehamilan</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="uuidKehamilan"
               data-endpoint="GETapi-history_kehamilan--uuidKehamilan-"
               value="aspernatur"
               data-component="url" hidden>
    <br>
<p>uuid pada record kehamilan</p>
<p>Otherwise, the request will fail with a 400 error, and a response listing the failed services.</p>
            </p>
                    </form>

            <h2 id="endpoints-POSTapi-history_kehamilan--uuidKehamilan-">Tambah history kehamilan</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-POSTapi-history_kehamilan--uuidKehamilan-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/history_kehamilan/dolorum" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"jumlah_gerakan_janin\": 10,
    \"waktu_pengukuran\": \"fugiat\",
    \"lama_waktu_pengukuran\": 15
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/history_kehamilan/dolorum"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "jumlah_gerakan_janin": 10,
    "waktu_pengukuran": "fugiat",
    "lama_waktu_pengukuran": 15
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-history_kehamilan--uuidKehamilan-">
</span>
<span id="execution-results-POSTapi-history_kehamilan--uuidKehamilan-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-history_kehamilan--uuidKehamilan-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-history_kehamilan--uuidKehamilan-"></code></pre>
</span>
<span id="execution-error-POSTapi-history_kehamilan--uuidKehamilan-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-history_kehamilan--uuidKehamilan-"></code></pre>
</span>
<form id="form-POSTapi-history_kehamilan--uuidKehamilan-" data-method="POST"
      data-path="api/history_kehamilan/{uuidKehamilan}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-history_kehamilan--uuidKehamilan-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-history_kehamilan--uuidKehamilan-"
                    onclick="tryItOut('POSTapi-history_kehamilan--uuidKehamilan-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-history_kehamilan--uuidKehamilan-"
                    onclick="cancelTryOut('POSTapi-history_kehamilan--uuidKehamilan-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-history_kehamilan--uuidKehamilan-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/history_kehamilan/{uuidKehamilan}</code></b>
        </p>
                <p>
            <label id="auth-POSTapi-history_kehamilan--uuidKehamilan-" hidden>Authorization header:
                <b><code>Bearer </code></b><input type="text"
                                                                name="Authorization"
                                                                data-prefix="Bearer "
                                                                data-endpoint="POSTapi-history_kehamilan--uuidKehamilan-"
                                                                data-component="header"></label>
        </p>
                <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>uuidKehamilan</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="uuidKehamilan"
               data-endpoint="POSTapi-history_kehamilan--uuidKehamilan-"
               value="dolorum"
               data-component="url" hidden>
    <br>
<p>uuid pada record kehamilan</p>
            </p>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <p>
            <b><code>jumlah_gerakan_janin</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="jumlah_gerakan_janin"
               data-endpoint="POSTapi-history_kehamilan--uuidKehamilan-"
               value="10"
               data-component="body" hidden>
    <br>

        </p>
                <p>
            <b><code>waktu_pengukuran</code></b>&nbsp;&nbsp;<small>date</small>  &nbsp;
                <input type="text"
               name="waktu_pengukuran"
               data-endpoint="POSTapi-history_kehamilan--uuidKehamilan-"
               value="fugiat"
               data-component="body" hidden>
    <br>

        </p>
                <p>
            <b><code>lama_waktu_pengukuran</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="lama_waktu_pengukuran"
               data-endpoint="POSTapi-history_kehamilan--uuidKehamilan-"
               value="15"
               data-component="body" hidden>
    <br>
<p>lama waktu pengukuran dalam satuan detik</p>
<p>Check that the service is up. If everything is okay, you'll get a 200 OK response.</p>
<p>Otherwise, the request will fail with a 400 error, and a response listing the failed services.</p>
        </p>
        </form>

            <h2 id="endpoints-DELETEapi-history_kehamilan--uidKehamilan-">Hapus history kehamilan</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-DELETEapi-history_kehamilan--uidKehamilan-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "http://localhost/api/history_kehamilan/1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/history_kehamilan/1"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-DELETEapi-history_kehamilan--uidKehamilan-">
</span>
<span id="execution-results-DELETEapi-history_kehamilan--uidKehamilan-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-history_kehamilan--uidKehamilan-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-history_kehamilan--uidKehamilan-"></code></pre>
</span>
<span id="execution-error-DELETEapi-history_kehamilan--uidKehamilan-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-history_kehamilan--uidKehamilan-"></code></pre>
</span>
<form id="form-DELETEapi-history_kehamilan--uidKehamilan-" data-method="DELETE"
      data-path="api/history_kehamilan/{uidKehamilan}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-history_kehamilan--uidKehamilan-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-history_kehamilan--uidKehamilan-"
                    onclick="tryItOut('DELETEapi-history_kehamilan--uidKehamilan-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-history_kehamilan--uidKehamilan-"
                    onclick="cancelTryOut('DELETEapi-history_kehamilan--uidKehamilan-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-history_kehamilan--uidKehamilan-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/history_kehamilan/{uidKehamilan}</code></b>
        </p>
                <p>
            <label id="auth-DELETEapi-history_kehamilan--uidKehamilan-" hidden>Authorization header:
                <b><code>Bearer </code></b><input type="text"
                                                                name="Authorization"
                                                                data-prefix="Bearer "
                                                                data-endpoint="DELETEapi-history_kehamilan--uidKehamilan-"
                                                                data-component="header"></label>
        </p>
                <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>uidKehamilan</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="uidKehamilan"
               data-endpoint="DELETEapi-history_kehamilan--uidKehamilan-"
               value="1"
               data-component="url" hidden>
    <br>

            </p>
                    <p>
                <b><code>uuidHistoryKehamilan</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="uuidHistoryKehamilan"
               data-endpoint="DELETEapi-history_kehamilan--uidKehamilan-"
               value="ut"
               data-component="url" hidden>
    <br>
<p>berupa unique id record (uuid) dari history kehamilan</p>
<p>Check that the service is up. If everything is okay, you'll get a 200 OK response.</p>
<p>Otherwise, the request will fail with a 400 error, and a response listing the failed services.</p>
            </p>
                    </form>

            <h2 id="endpoints-GETapi-media">Display a listing of the resource.</h2>

<p>
</p>



<span id="example-requests-GETapi-media">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/media" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/media"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-media">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary>
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre>
        </details>         <pre>

<code class="language-json">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-media" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-media"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-media"></code></pre>
</span>
<span id="execution-error-GETapi-media" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-media"></code></pre>
</span>
<form id="form-GETapi-media" data-method="GET"
      data-path="api/media"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-media', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-media"
                    onclick="tryItOut('GETapi-media');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-media"
                    onclick="cancelTryOut('GETapi-media');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-media" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/media</code></b>
        </p>
                    </form>

            <h2 id="endpoints-GETapi-media--slug-">Show a POST by slug</h2>

<p>
</p>

<p>Check that the service is up. If everything is okay, you'll get a 200 OK response.</p>
<p>Otherwise, the request will fail with a 400 error, and a response listing the failed services.</p>

<span id="example-requests-GETapi-media--slug-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/media/non" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/media/non"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-media--slug-">
            <blockquote>
            <p>Example response (204):</p>
        </blockquote>
                <details class="annotation">
            <summary>
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
x-ratelimit-limit: 60
x-ratelimit-remaining: 56
access-control-allow-origin: *
 </code></pre>
        </details>         <pre>
<code>[Empty response]</code>
 </pre>
    </span>
<span id="execution-results-GETapi-media--slug-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-media--slug-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-media--slug-"></code></pre>
</span>
<span id="execution-error-GETapi-media--slug-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-media--slug-"></code></pre>
</span>
<form id="form-GETapi-media--slug-" data-method="GET"
      data-path="api/media/{slug}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-media--slug-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-media--slug-"
                    onclick="tryItOut('GETapi-media--slug-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-media--slug-"
                    onclick="cancelTryOut('GETapi-media--slug-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-media--slug-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/media/{slug}</code></b>
        </p>
                    <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>slug</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="slug"
               data-endpoint="GETapi-media--slug-"
               value="non"
               data-component="url" hidden>
    <br>
<p>The slug of the medium.</p>
            </p>
                    </form>

            <h2 id="endpoints-GETapi-media-category--slug-">Show all POST by kategori</h2>

<p>
</p>

<p>Check that the service is up. If everything is okay, you'll get a 200 OK response.</p>
<p>Otherwise, the request will fail with a 400 error, and a response listing the failed services.</p>

<span id="example-requests-GETapi-media-category--slug-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/media/category/et" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/media/category/et"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-media-category--slug-">
            <blockquote>
            <p>Example response (204):</p>
        </blockquote>
                <details class="annotation">
            <summary>
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
x-ratelimit-limit: 60
x-ratelimit-remaining: 57
access-control-allow-origin: *
 </code></pre>
        </details>         <pre>
<code>[Empty response]</code>
 </pre>
    </span>
<span id="execution-results-GETapi-media-category--slug-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-media-category--slug-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-media-category--slug-"></code></pre>
</span>
<span id="execution-error-GETapi-media-category--slug-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-media-category--slug-"></code></pre>
</span>
<form id="form-GETapi-media-category--slug-" data-method="GET"
      data-path="api/media/category/{slug}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-media-category--slug-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-media-category--slug-"
                    onclick="tryItOut('GETapi-media-category--slug-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-media-category--slug-"
                    onclick="cancelTryOut('GETapi-media-category--slug-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-media-category--slug-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/media/category/{slug}</code></b>
        </p>
                    <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>slug</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="slug"
               data-endpoint="GETapi-media-category--slug-"
               value="et"
               data-component="url" hidden>
    <br>
<p>The slug of the category.</p>
            </p>
                    </form>

            <h2 id="endpoints-POSTapi-graph-daily--uuidKehamilan-">Data Chart harian history kehamilan</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-POSTapi-graph-daily--uuidKehamilan-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/graph/daily/repudiandae" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"start_date\": \"minima\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/graph/daily/repudiandae"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "start_date": "minima"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-graph-daily--uuidKehamilan-">
</span>
<span id="execution-results-POSTapi-graph-daily--uuidKehamilan-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-graph-daily--uuidKehamilan-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-graph-daily--uuidKehamilan-"></code></pre>
</span>
<span id="execution-error-POSTapi-graph-daily--uuidKehamilan-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-graph-daily--uuidKehamilan-"></code></pre>
</span>
<form id="form-POSTapi-graph-daily--uuidKehamilan-" data-method="POST"
      data-path="api/graph/daily/{uuidKehamilan}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-graph-daily--uuidKehamilan-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-graph-daily--uuidKehamilan-"
                    onclick="tryItOut('POSTapi-graph-daily--uuidKehamilan-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-graph-daily--uuidKehamilan-"
                    onclick="cancelTryOut('POSTapi-graph-daily--uuidKehamilan-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-graph-daily--uuidKehamilan-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/graph/daily/{uuidKehamilan}</code></b>
        </p>
                <p>
            <label id="auth-POSTapi-graph-daily--uuidKehamilan-" hidden>Authorization header:
                <b><code>Bearer </code></b><input type="text"
                                                                name="Authorization"
                                                                data-prefix="Bearer "
                                                                data-endpoint="POSTapi-graph-daily--uuidKehamilan-"
                                                                data-component="header"></label>
        </p>
                <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>uuidKehamilan</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="uuidKehamilan"
               data-endpoint="POSTapi-graph-daily--uuidKehamilan-"
               value="repudiandae"
               data-component="url" hidden>
    <br>
<p>berupa unique id record (uuid) dari kehamilan</p>
            </p>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <p>
            <b><code>start_date</code></b>&nbsp;&nbsp;<small>date</small>  &nbsp;
                <input type="text"
               name="start_date"
               data-endpoint="POSTapi-graph-daily--uuidKehamilan-"
               value="minima"
               data-component="body" hidden>
    <br>
<p>berupa tanggal awal perhitungan data</p>
<p>Check that the service is up. If everything is okay, you'll get a 200 OK response.</p>
<p>Otherwise, the request will fail with a 400 error, and a response listing the failed services.</p>
        </p>
        </form>

            <h2 id="endpoints-POSTapi-graph-weekly--uuidKehamilan-">Data Chart mingguan history kehamilan</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-POSTapi-graph-weekly--uuidKehamilan-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/graph/weekly/laboriosam" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"start_date\": \"earum\",
    \"end_date\": \"sunt\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/graph/weekly/laboriosam"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "start_date": "earum",
    "end_date": "sunt"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-graph-weekly--uuidKehamilan-">
</span>
<span id="execution-results-POSTapi-graph-weekly--uuidKehamilan-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-graph-weekly--uuidKehamilan-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-graph-weekly--uuidKehamilan-"></code></pre>
</span>
<span id="execution-error-POSTapi-graph-weekly--uuidKehamilan-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-graph-weekly--uuidKehamilan-"></code></pre>
</span>
<form id="form-POSTapi-graph-weekly--uuidKehamilan-" data-method="POST"
      data-path="api/graph/weekly/{uuidKehamilan}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-graph-weekly--uuidKehamilan-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-graph-weekly--uuidKehamilan-"
                    onclick="tryItOut('POSTapi-graph-weekly--uuidKehamilan-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-graph-weekly--uuidKehamilan-"
                    onclick="cancelTryOut('POSTapi-graph-weekly--uuidKehamilan-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-graph-weekly--uuidKehamilan-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/graph/weekly/{uuidKehamilan}</code></b>
        </p>
                <p>
            <label id="auth-POSTapi-graph-weekly--uuidKehamilan-" hidden>Authorization header:
                <b><code>Bearer </code></b><input type="text"
                                                                name="Authorization"
                                                                data-prefix="Bearer "
                                                                data-endpoint="POSTapi-graph-weekly--uuidKehamilan-"
                                                                data-component="header"></label>
        </p>
                <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>uuidKehamilan</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="uuidKehamilan"
               data-endpoint="POSTapi-graph-weekly--uuidKehamilan-"
               value="laboriosam"
               data-component="url" hidden>
    <br>
<p>berupa unique id record (uuid) dari kehamilan</p>
            </p>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <p>
            <b><code>start_date</code></b>&nbsp;&nbsp;<small>date</small>  &nbsp;
                <input type="text"
               name="start_date"
               data-endpoint="POSTapi-graph-weekly--uuidKehamilan-"
               value="earum"
               data-component="body" hidden>
    <br>
<p>berupa tanggal awal perhitungan data</p>
        </p>
                <p>
            <b><code>end_date</code></b>&nbsp;&nbsp;<small>date</small>  &nbsp;
                <input type="text"
               name="end_date"
               data-endpoint="POSTapi-graph-weekly--uuidKehamilan-"
               value="sunt"
               data-component="body" hidden>
    <br>
<p>berupa tanggal akhir perhitungan data</p>
<p>Check that the service is up. If everything is okay, you'll get a 200 OK response.</p>
<p>Otherwise, the request will fail with a 400 error, and a response listing the failed services.</p>
        </p>
        </form>

            <h2 id="endpoints-GETapi-init-storage">GET api/init/storage</h2>

<p>
</p>



<span id="example-requests-GETapi-init-storage">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/init/storage" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/init/storage"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-init-storage">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary>
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">content-type: text/html; charset=UTF-8
cache-control: no-cache, private
x-ratelimit-limit: 60
x-ratelimit-remaining: 54
access-control-allow-origin: *
 </code></pre>
        </details>         <pre>

<code class="language-json"></code>
 </pre>
    </span>
<span id="execution-results-GETapi-init-storage" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-init-storage"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-init-storage"></code></pre>
</span>
<span id="execution-error-GETapi-init-storage" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-init-storage"></code></pre>
</span>
<form id="form-GETapi-init-storage" data-method="GET"
      data-path="api/init/storage"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-init-storage', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-init-storage"
                    onclick="tryItOut('GETapi-init-storage');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-init-storage"
                    onclick="cancelTryOut('GETapi-init-storage');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-init-storage" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/init/storage</code></b>
        </p>
                    </form>

    

        
    </div>
    <div class="dark-box">
                    <div class="lang-selector">
                                                        <button type="button" class="lang-button" data-language-name="bash">bash</button>
                                                        <button type="button" class="lang-button" data-language-name="javascript">javascript</button>
                            </div>
            </div>
</div>
</body>
</html>
