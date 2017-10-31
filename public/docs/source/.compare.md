---
title: API Reference

language_tabs:
- bash
- javascript

includes:

search: true

toc_footers:
- <a href='http://github.com/mpociot/documentarian'>Documentation Powered by Documentarian</a>
---
<!-- START_INFO -->
# Info

Welcome to the generated API reference.
[Get Postman Collection](http://localhost/docs/collection.json)

<!-- END_INFO -->

#general
<!-- START_b2892eb191cd19c0a6f1aae56ba43db4 -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET "http://localhost/api/v1/user" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/user",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
[
    {
        "id": 1,
        "name": "Vitor Amaral",
        "email": "amaralvitor@ua.pt",
        "created_at": "2017-10-31 19:52:34",
        "updated_at": "2017-10-31 19:52:34"
    }
]
```

### HTTP Request
`GET api/v1/user`

`HEAD api/v1/user`


<!-- END_b2892eb191cd19c0a6f1aae56ba43db4 -->

<!-- START_b77cc60ec781668eff0888aa705fd258 -->
## Show the form for creating a new resource.

> Example request:

```bash
curl -X GET "http://localhost/api/v1/user/create" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/user/create",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/v1/user/create`

`HEAD api/v1/user/create`


<!-- END_b77cc60ec781668eff0888aa705fd258 -->

<!-- START_96b8840d06e94c53a87e83e9edfb44eb -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST "http://localhost/api/v1/user" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/user",
    "method": "POST",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`POST api/v1/user`


<!-- END_96b8840d06e94c53a87e83e9edfb44eb -->

<!-- START_eda2b3d78b052ccb36bffab3b344d72a -->
## Display the specified resource.

> Example request:

```bash
curl -X GET "http://localhost/api/v1/user/{user}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/user/{user}",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/v1/user/{user}`

`HEAD api/v1/user/{user}`


<!-- END_eda2b3d78b052ccb36bffab3b344d72a -->

<!-- START_f5dcd1a863721e6fed25439283ccab97 -->
## Show the form for editing the specified resource.

> Example request:

```bash
curl -X GET "http://localhost/api/v1/user/{user}/edit" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/user/{user}/edit",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/v1/user/{user}/edit`

`HEAD api/v1/user/{user}/edit`


<!-- END_f5dcd1a863721e6fed25439283ccab97 -->

<!-- START_1006d782d67bb58039bde349972eb2f0 -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT "http://localhost/api/v1/user/{user}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/user/{user}",
    "method": "PUT",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`PUT api/v1/user/{user}`

`PATCH api/v1/user/{user}`


<!-- END_1006d782d67bb58039bde349972eb2f0 -->

<!-- START_a5d7655acadc1b6c97d48e68f1e87be9 -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE "http://localhost/api/v1/user/{user}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/user/{user}",
    "method": "DELETE",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`DELETE api/v1/user/{user}`


<!-- END_a5d7655acadc1b6c97d48e68f1e87be9 -->

<!-- START_28e685420b0e7112e74031353ec2f4bd -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET "http://localhost/api/v1/me" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/me",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/v1/me`

`HEAD api/v1/me`


<!-- END_28e685420b0e7112e74031353ec2f4bd -->

<!-- START_e31e82ea4910f112a22dcc85c27efc99 -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET "http://localhost/api/v1/article" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/article",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/v1/article`

`HEAD api/v1/article`


<!-- END_e31e82ea4910f112a22dcc85c27efc99 -->

<!-- START_e81e5f5b42ba27b122aed6a4fa649aa6 -->
## Show the form for creating a new resource.

> Example request:

```bash
curl -X GET "http://localhost/api/v1/article/create" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/article/create",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/v1/article/create`

`HEAD api/v1/article/create`


<!-- END_e81e5f5b42ba27b122aed6a4fa649aa6 -->

<!-- START_4513c53bb0089fe4bb3631e79cc9a3df -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST "http://localhost/api/v1/article" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/article",
    "method": "POST",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`POST api/v1/article`


<!-- END_4513c53bb0089fe4bb3631e79cc9a3df -->

<!-- START_9093617593ee7e97e0e3278a20b1d73d -->
## Display the specified resource.

> Example request:

```bash
curl -X GET "http://localhost/api/v1/article/{article}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/article/{article}",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "message": "No query results for model [App\\Article].",
    "exception": "Symfony\\Component\\HttpKernel\\Exception\\NotFoundHttpException",
    "file": "\/Applications\/XAMPP\/xamppfiles\/htdocs\/readhunt\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Exceptions\/Handler.php",
    "line": 199,
    "trace": [
        {
            "file": "\/Applications\/XAMPP\/xamppfiles\/htdocs\/readhunt\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Exceptions\/Handler.php",
            "line": 175,
            "function": "prepareException",
            "class": "Illuminate\\Foundation\\Exceptions\\Handler",
            "type": "->"
        },
        {
            "file": "\/Applications\/XAMPP\/xamppfiles\/htdocs\/readhunt\/app\/Exceptions\/Handler.php",
            "line": 51,
            "function": "render",
            "class": "Illuminate\\Foundation\\Exceptions\\Handler",
            "type": "->"
        },
        {
            "file": "\/Applications\/XAMPP\/xamppfiles\/htdocs\/readhunt\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 83,
            "function": "render",
            "class": "App\\Exceptions\\Handler",
            "type": "->"
        },
        {
            "file": "\/Applications\/XAMPP\/xamppfiles\/htdocs\/readhunt\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 55,
            "function": "handleException",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/XAMPP\/xamppfiles\/htdocs\/readhunt\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Middleware\/ThrottleRequests.php",
            "line": 57,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/XAMPP\/xamppfiles\/htdocs\/readhunt\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 149,
            "function": "handle",
            "class": "Illuminate\\Routing\\Middleware\\ThrottleRequests",
            "type": "->"
        },
        {
            "file": "\/Applications\/XAMPP\/xamppfiles\/htdocs\/readhunt\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/XAMPP\/xamppfiles\/htdocs\/readhunt\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 102,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/XAMPP\/xamppfiles\/htdocs\/readhunt\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Router.php",
            "line": 647,
            "function": "then",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/XAMPP\/xamppfiles\/htdocs\/readhunt\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Router.php",
            "line": 622,
            "function": "runRouteWithinStack",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "\/Applications\/XAMPP\/xamppfiles\/htdocs\/readhunt\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Router.php",
            "line": 588,
            "function": "runRoute",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "\/Applications\/XAMPP\/xamppfiles\/htdocs\/readhunt\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Router.php",
            "line": 577,
            "function": "dispatchToRoute",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "\/Applications\/XAMPP\/xamppfiles\/htdocs\/readhunt\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Kernel.php",
            "line": 176,
            "function": "dispatch",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "\/Applications\/XAMPP\/xamppfiles\/htdocs\/readhunt\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 30,
            "function": "Illuminate\\Foundation\\Http\\{closure}",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "\/Applications\/XAMPP\/xamppfiles\/htdocs\/readhunt\/vendor\/fideloper\/proxy\/src\/TrustProxies.php",
            "line": 56,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/XAMPP\/xamppfiles\/htdocs\/readhunt\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 149,
            "function": "handle",
            "class": "Fideloper\\Proxy\\TrustProxies",
            "type": "->"
        },
        {
            "file": "\/Applications\/XAMPP\/xamppfiles\/htdocs\/readhunt\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/XAMPP\/xamppfiles\/htdocs\/readhunt\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Middleware\/TransformsRequest.php",
            "line": 30,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/XAMPP\/xamppfiles\/htdocs\/readhunt\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 149,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest",
            "type": "->"
        },
        {
            "file": "\/Applications\/XAMPP\/xamppfiles\/htdocs\/readhunt\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/XAMPP\/xamppfiles\/htdocs\/readhunt\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Middleware\/TransformsRequest.php",
            "line": 30,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/XAMPP\/xamppfiles\/htdocs\/readhunt\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 149,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest",
            "type": "->"
        },
        {
            "file": "\/Applications\/XAMPP\/xamppfiles\/htdocs\/readhunt\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/XAMPP\/xamppfiles\/htdocs\/readhunt\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Middleware\/ValidatePostSize.php",
            "line": 27,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/XAMPP\/xamppfiles\/htdocs\/readhunt\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 149,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize",
            "type": "->"
        },
        {
            "file": "\/Applications\/XAMPP\/xamppfiles\/htdocs\/readhunt\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/XAMPP\/xamppfiles\/htdocs\/readhunt\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Middleware\/CheckForMaintenanceMode.php",
            "line": 46,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/XAMPP\/xamppfiles\/htdocs\/readhunt\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 149,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\CheckForMaintenanceMode",
            "type": "->"
        },
        {
            "file": "\/Applications\/XAMPP\/xamppfiles\/htdocs\/readhunt\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/XAMPP\/xamppfiles\/htdocs\/readhunt\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 102,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/XAMPP\/xamppfiles\/htdocs\/readhunt\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Kernel.php",
            "line": 151,
            "function": "then",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/XAMPP\/xamppfiles\/htdocs\/readhunt\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Kernel.php",
            "line": 116,
            "function": "sendRequestThroughRouter",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "\/Applications\/XAMPP\/xamppfiles\/htdocs\/readhunt\/vendor\/mpociot\/laravel-apidoc-generator\/src\/Mpociot\/ApiDoc\/Generators\/LaravelGenerator.php",
            "line": 116,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "\/Applications\/XAMPP\/xamppfiles\/htdocs\/readhunt\/vendor\/mpociot\/laravel-apidoc-generator\/src\/Mpociot\/ApiDoc\/Generators\/AbstractGenerator.php",
            "line": 98,
            "function": "callRoute",
            "class": "Mpociot\\ApiDoc\\Generators\\LaravelGenerator",
            "type": "->"
        },
        {
            "file": "\/Applications\/XAMPP\/xamppfiles\/htdocs\/readhunt\/vendor\/mpociot\/laravel-apidoc-generator\/src\/Mpociot\/ApiDoc\/Generators\/LaravelGenerator.php",
            "line": 58,
            "function": "getRouteResponse",
            "class": "Mpociot\\ApiDoc\\Generators\\AbstractGenerator",
            "type": "->"
        },
        {
            "file": "\/Applications\/XAMPP\/xamppfiles\/htdocs\/readhunt\/vendor\/mpociot\/laravel-apidoc-generator\/src\/Mpociot\/ApiDoc\/Commands\/GenerateDocumentation.php",
            "line": 261,
            "function": "processRoute",
            "class": "Mpociot\\ApiDoc\\Generators\\LaravelGenerator",
            "type": "->"
        },
        {
            "file": "\/Applications\/XAMPP\/xamppfiles\/htdocs\/readhunt\/vendor\/mpociot\/laravel-apidoc-generator\/src\/Mpociot\/ApiDoc\/Commands\/GenerateDocumentation.php",
            "line": 83,
            "function": "processLaravelRoutes",
            "class": "Mpociot\\ApiDoc\\Commands\\GenerateDocumentation",
            "type": "->"
        },
        {
            "function": "handle",
            "class": "Mpociot\\ApiDoc\\Commands\\GenerateDocumentation",
            "type": "->"
        },
        {
            "file": "\/Applications\/XAMPP\/xamppfiles\/htdocs\/readhunt\/vendor\/laravel\/framework\/src\/Illuminate\/Container\/BoundMethod.php",
            "line": 29,
            "function": "call_user_func_array"
        },
        {
            "file": "\/Applications\/XAMPP\/xamppfiles\/htdocs\/readhunt\/vendor\/laravel\/framework\/src\/Illuminate\/Container\/BoundMethod.php",
            "line": 87,
            "function": "Illuminate\\Container\\{closure}",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "\/Applications\/XAMPP\/xamppfiles\/htdocs\/readhunt\/vendor\/laravel\/framework\/src\/Illuminate\/Container\/BoundMethod.php",
            "line": 31,
            "function": "callBoundMethod",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "\/Applications\/XAMPP\/xamppfiles\/htdocs\/readhunt\/vendor\/laravel\/framework\/src\/Illuminate\/Container\/Container.php",
            "line": 549,
            "function": "call",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "\/Applications\/XAMPP\/xamppfiles\/htdocs\/readhunt\/vendor\/laravel\/framework\/src\/Illuminate\/Console\/Command.php",
            "line": 180,
            "function": "call",
            "class": "Illuminate\\Container\\Container",
            "type": "->"
        },
        {
            "file": "\/Applications\/XAMPP\/xamppfiles\/htdocs\/readhunt\/vendor\/symfony\/console\/Command\/Command.php",
            "line": 262,
            "function": "execute",
            "class": "Illuminate\\Console\\Command",
            "type": "->"
        },
        {
            "file": "\/Applications\/XAMPP\/xamppfiles\/htdocs\/readhunt\/vendor\/laravel\/framework\/src\/Illuminate\/Console\/Command.php",
            "line": 167,
            "function": "run",
            "class": "Symfony\\Component\\Console\\Command\\Command",
            "type": "->"
        },
        {
            "file": "\/Applications\/XAMPP\/xamppfiles\/htdocs\/readhunt\/vendor\/symfony\/console\/Application.php",
            "line": 888,
            "function": "run",
            "class": "Illuminate\\Console\\Command",
            "type": "->"
        },
        {
            "file": "\/Applications\/XAMPP\/xamppfiles\/htdocs\/readhunt\/vendor\/symfony\/console\/Application.php",
            "line": 224,
            "function": "doRunCommand",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "\/Applications\/XAMPP\/xamppfiles\/htdocs\/readhunt\/vendor\/symfony\/console\/Application.php",
            "line": 125,
            "function": "doRun",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "\/Applications\/XAMPP\/xamppfiles\/htdocs\/readhunt\/vendor\/laravel\/framework\/src\/Illuminate\/Console\/Application.php",
            "line": 88,
            "function": "run",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "\/Applications\/XAMPP\/xamppfiles\/htdocs\/readhunt\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Console\/Kernel.php",
            "line": 121,
            "function": "run",
            "class": "Illuminate\\Console\\Application",
            "type": "->"
        },
        {
            "file": "\/Applications\/XAMPP\/xamppfiles\/htdocs\/readhunt\/artisan",
            "line": 37,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Console\\Kernel",
            "type": "->"
        }
    ]
}
```

### HTTP Request
`GET api/v1/article/{article}`

`HEAD api/v1/article/{article}`


<!-- END_9093617593ee7e97e0e3278a20b1d73d -->

<!-- START_5a655459c08f53e9eddd7662b36dbc4a -->
## Show the form for editing the specified resource.

> Example request:

```bash
curl -X GET "http://localhost/api/v1/article/{article}/edit" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/article/{article}/edit",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/v1/article/{article}/edit`

`HEAD api/v1/article/{article}/edit`


<!-- END_5a655459c08f53e9eddd7662b36dbc4a -->

<!-- START_263b272df61e08366fef2bd5972968af -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT "http://localhost/api/v1/article/{article}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/article/{article}",
    "method": "PUT",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`PUT api/v1/article/{article}`

`PATCH api/v1/article/{article}`


<!-- END_263b272df61e08366fef2bd5972968af -->

<!-- START_e0cfb58dbc3b6bf2b2cbe777da3ea70f -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE "http://localhost/api/v1/article/{article}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/article/{article}",
    "method": "DELETE",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`DELETE api/v1/article/{article}`


<!-- END_e0cfb58dbc3b6bf2b2cbe777da3ea70f -->

<!-- START_58c1a1a3acbe1c426bcb05e833a1d4f1 -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET "http://localhost/api/v1/category" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/category",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/v1/category`

`HEAD api/v1/category`


<!-- END_58c1a1a3acbe1c426bcb05e833a1d4f1 -->

<!-- START_af46b1f2c5b9c4544a30f0c5773830f1 -->
## Show the form for creating a new resource.

> Example request:

```bash
curl -X GET "http://localhost/api/v1/category/create" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/category/create",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/v1/category/create`

`HEAD api/v1/category/create`


<!-- END_af46b1f2c5b9c4544a30f0c5773830f1 -->

<!-- START_c5ef86a407a7b87c648bcaa4591381fd -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST "http://localhost/api/v1/category" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/category",
    "method": "POST",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`POST api/v1/category`


<!-- END_c5ef86a407a7b87c648bcaa4591381fd -->

<!-- START_1298aba8c9fbf299cd1842ace429b47f -->
## Display the specified resource.

> Example request:

```bash
curl -X GET "http://localhost/api/v1/category/{category}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/category/{category}",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "message": "No query results for model [App\\Category].",
    "exception": "Symfony\\Component\\HttpKernel\\Exception\\NotFoundHttpException",
    "file": "\/Applications\/XAMPP\/xamppfiles\/htdocs\/readhunt\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Exceptions\/Handler.php",
    "line": 199,
    "trace": [
        {
            "file": "\/Applications\/XAMPP\/xamppfiles\/htdocs\/readhunt\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Exceptions\/Handler.php",
            "line": 175,
            "function": "prepareException",
            "class": "Illuminate\\Foundation\\Exceptions\\Handler",
            "type": "->"
        },
        {
            "file": "\/Applications\/XAMPP\/xamppfiles\/htdocs\/readhunt\/app\/Exceptions\/Handler.php",
            "line": 51,
            "function": "render",
            "class": "Illuminate\\Foundation\\Exceptions\\Handler",
            "type": "->"
        },
        {
            "file": "\/Applications\/XAMPP\/xamppfiles\/htdocs\/readhunt\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 83,
            "function": "render",
            "class": "App\\Exceptions\\Handler",
            "type": "->"
        },
        {
            "file": "\/Applications\/XAMPP\/xamppfiles\/htdocs\/readhunt\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 55,
            "function": "handleException",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/XAMPP\/xamppfiles\/htdocs\/readhunt\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Middleware\/ThrottleRequests.php",
            "line": 57,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/XAMPP\/xamppfiles\/htdocs\/readhunt\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 149,
            "function": "handle",
            "class": "Illuminate\\Routing\\Middleware\\ThrottleRequests",
            "type": "->"
        },
        {
            "file": "\/Applications\/XAMPP\/xamppfiles\/htdocs\/readhunt\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/XAMPP\/xamppfiles\/htdocs\/readhunt\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 102,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/XAMPP\/xamppfiles\/htdocs\/readhunt\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Router.php",
            "line": 647,
            "function": "then",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/XAMPP\/xamppfiles\/htdocs\/readhunt\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Router.php",
            "line": 622,
            "function": "runRouteWithinStack",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "\/Applications\/XAMPP\/xamppfiles\/htdocs\/readhunt\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Router.php",
            "line": 588,
            "function": "runRoute",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "\/Applications\/XAMPP\/xamppfiles\/htdocs\/readhunt\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Router.php",
            "line": 577,
            "function": "dispatchToRoute",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "\/Applications\/XAMPP\/xamppfiles\/htdocs\/readhunt\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Kernel.php",
            "line": 176,
            "function": "dispatch",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "\/Applications\/XAMPP\/xamppfiles\/htdocs\/readhunt\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 30,
            "function": "Illuminate\\Foundation\\Http\\{closure}",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "\/Applications\/XAMPP\/xamppfiles\/htdocs\/readhunt\/vendor\/fideloper\/proxy\/src\/TrustProxies.php",
            "line": 56,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/XAMPP\/xamppfiles\/htdocs\/readhunt\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 149,
            "function": "handle",
            "class": "Fideloper\\Proxy\\TrustProxies",
            "type": "->"
        },
        {
            "file": "\/Applications\/XAMPP\/xamppfiles\/htdocs\/readhunt\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/XAMPP\/xamppfiles\/htdocs\/readhunt\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Middleware\/TransformsRequest.php",
            "line": 30,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/XAMPP\/xamppfiles\/htdocs\/readhunt\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 149,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest",
            "type": "->"
        },
        {
            "file": "\/Applications\/XAMPP\/xamppfiles\/htdocs\/readhunt\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/XAMPP\/xamppfiles\/htdocs\/readhunt\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Middleware\/TransformsRequest.php",
            "line": 30,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/XAMPP\/xamppfiles\/htdocs\/readhunt\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 149,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest",
            "type": "->"
        },
        {
            "file": "\/Applications\/XAMPP\/xamppfiles\/htdocs\/readhunt\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/XAMPP\/xamppfiles\/htdocs\/readhunt\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Middleware\/ValidatePostSize.php",
            "line": 27,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/XAMPP\/xamppfiles\/htdocs\/readhunt\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 149,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize",
            "type": "->"
        },
        {
            "file": "\/Applications\/XAMPP\/xamppfiles\/htdocs\/readhunt\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/XAMPP\/xamppfiles\/htdocs\/readhunt\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Middleware\/CheckForMaintenanceMode.php",
            "line": 46,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/XAMPP\/xamppfiles\/htdocs\/readhunt\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 149,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\CheckForMaintenanceMode",
            "type": "->"
        },
        {
            "file": "\/Applications\/XAMPP\/xamppfiles\/htdocs\/readhunt\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/XAMPP\/xamppfiles\/htdocs\/readhunt\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 102,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/XAMPP\/xamppfiles\/htdocs\/readhunt\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Kernel.php",
            "line": 151,
            "function": "then",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/XAMPP\/xamppfiles\/htdocs\/readhunt\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Kernel.php",
            "line": 116,
            "function": "sendRequestThroughRouter",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "\/Applications\/XAMPP\/xamppfiles\/htdocs\/readhunt\/vendor\/mpociot\/laravel-apidoc-generator\/src\/Mpociot\/ApiDoc\/Generators\/LaravelGenerator.php",
            "line": 116,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "\/Applications\/XAMPP\/xamppfiles\/htdocs\/readhunt\/vendor\/mpociot\/laravel-apidoc-generator\/src\/Mpociot\/ApiDoc\/Generators\/AbstractGenerator.php",
            "line": 98,
            "function": "callRoute",
            "class": "Mpociot\\ApiDoc\\Generators\\LaravelGenerator",
            "type": "->"
        },
        {
            "file": "\/Applications\/XAMPP\/xamppfiles\/htdocs\/readhunt\/vendor\/mpociot\/laravel-apidoc-generator\/src\/Mpociot\/ApiDoc\/Generators\/LaravelGenerator.php",
            "line": 58,
            "function": "getRouteResponse",
            "class": "Mpociot\\ApiDoc\\Generators\\AbstractGenerator",
            "type": "->"
        },
        {
            "file": "\/Applications\/XAMPP\/xamppfiles\/htdocs\/readhunt\/vendor\/mpociot\/laravel-apidoc-generator\/src\/Mpociot\/ApiDoc\/Commands\/GenerateDocumentation.php",
            "line": 261,
            "function": "processRoute",
            "class": "Mpociot\\ApiDoc\\Generators\\LaravelGenerator",
            "type": "->"
        },
        {
            "file": "\/Applications\/XAMPP\/xamppfiles\/htdocs\/readhunt\/vendor\/mpociot\/laravel-apidoc-generator\/src\/Mpociot\/ApiDoc\/Commands\/GenerateDocumentation.php",
            "line": 83,
            "function": "processLaravelRoutes",
            "class": "Mpociot\\ApiDoc\\Commands\\GenerateDocumentation",
            "type": "->"
        },
        {
            "function": "handle",
            "class": "Mpociot\\ApiDoc\\Commands\\GenerateDocumentation",
            "type": "->"
        },
        {
            "file": "\/Applications\/XAMPP\/xamppfiles\/htdocs\/readhunt\/vendor\/laravel\/framework\/src\/Illuminate\/Container\/BoundMethod.php",
            "line": 29,
            "function": "call_user_func_array"
        },
        {
            "file": "\/Applications\/XAMPP\/xamppfiles\/htdocs\/readhunt\/vendor\/laravel\/framework\/src\/Illuminate\/Container\/BoundMethod.php",
            "line": 87,
            "function": "Illuminate\\Container\\{closure}",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "\/Applications\/XAMPP\/xamppfiles\/htdocs\/readhunt\/vendor\/laravel\/framework\/src\/Illuminate\/Container\/BoundMethod.php",
            "line": 31,
            "function": "callBoundMethod",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "\/Applications\/XAMPP\/xamppfiles\/htdocs\/readhunt\/vendor\/laravel\/framework\/src\/Illuminate\/Container\/Container.php",
            "line": 549,
            "function": "call",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "\/Applications\/XAMPP\/xamppfiles\/htdocs\/readhunt\/vendor\/laravel\/framework\/src\/Illuminate\/Console\/Command.php",
            "line": 180,
            "function": "call",
            "class": "Illuminate\\Container\\Container",
            "type": "->"
        },
        {
            "file": "\/Applications\/XAMPP\/xamppfiles\/htdocs\/readhunt\/vendor\/symfony\/console\/Command\/Command.php",
            "line": 262,
            "function": "execute",
            "class": "Illuminate\\Console\\Command",
            "type": "->"
        },
        {
            "file": "\/Applications\/XAMPP\/xamppfiles\/htdocs\/readhunt\/vendor\/laravel\/framework\/src\/Illuminate\/Console\/Command.php",
            "line": 167,
            "function": "run",
            "class": "Symfony\\Component\\Console\\Command\\Command",
            "type": "->"
        },
        {
            "file": "\/Applications\/XAMPP\/xamppfiles\/htdocs\/readhunt\/vendor\/symfony\/console\/Application.php",
            "line": 888,
            "function": "run",
            "class": "Illuminate\\Console\\Command",
            "type": "->"
        },
        {
            "file": "\/Applications\/XAMPP\/xamppfiles\/htdocs\/readhunt\/vendor\/symfony\/console\/Application.php",
            "line": 224,
            "function": "doRunCommand",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "\/Applications\/XAMPP\/xamppfiles\/htdocs\/readhunt\/vendor\/symfony\/console\/Application.php",
            "line": 125,
            "function": "doRun",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "\/Applications\/XAMPP\/xamppfiles\/htdocs\/readhunt\/vendor\/laravel\/framework\/src\/Illuminate\/Console\/Application.php",
            "line": 88,
            "function": "run",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "\/Applications\/XAMPP\/xamppfiles\/htdocs\/readhunt\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Console\/Kernel.php",
            "line": 121,
            "function": "run",
            "class": "Illuminate\\Console\\Application",
            "type": "->"
        },
        {
            "file": "\/Applications\/XAMPP\/xamppfiles\/htdocs\/readhunt\/artisan",
            "line": 37,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Console\\Kernel",
            "type": "->"
        }
    ]
}
```

### HTTP Request
`GET api/v1/category/{category}`

`HEAD api/v1/category/{category}`


<!-- END_1298aba8c9fbf299cd1842ace429b47f -->

<!-- START_2a7fb306ddbb89f1f35bcb9ff6eee537 -->
## Show the form for editing the specified resource.

> Example request:

```bash
curl -X GET "http://localhost/api/v1/category/{category}/edit" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/category/{category}/edit",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/v1/category/{category}/edit`

`HEAD api/v1/category/{category}/edit`


<!-- END_2a7fb306ddbb89f1f35bcb9ff6eee537 -->

<!-- START_1db2d190ad189a02f319863757b20317 -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT "http://localhost/api/v1/category/{category}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/category/{category}",
    "method": "PUT",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`PUT api/v1/category/{category}`

`PATCH api/v1/category/{category}`


<!-- END_1db2d190ad189a02f319863757b20317 -->

<!-- START_6a1a0789d7f1fd66545b46c16f81e028 -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE "http://localhost/api/v1/category/{category}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/category/{category}",
    "method": "DELETE",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`DELETE api/v1/category/{category}`


<!-- END_6a1a0789d7f1fd66545b46c16f81e028 -->

<!-- START_5c1d0fb8d8c1b014ffca8d77d93efff7 -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET "http://localhost/api/v1/comment" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/comment",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/v1/comment`

`HEAD api/v1/comment`


<!-- END_5c1d0fb8d8c1b014ffca8d77d93efff7 -->

<!-- START_ba019dd4d1036ebf6051326bf9334b65 -->
## Show the form for creating a new resource.

> Example request:

```bash
curl -X GET "http://localhost/api/v1/comment/create" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/comment/create",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/v1/comment/create`

`HEAD api/v1/comment/create`


<!-- END_ba019dd4d1036ebf6051326bf9334b65 -->

<!-- START_915851b5c9f730d02988b822e4a30f8a -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST "http://localhost/api/v1/comment" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/comment",
    "method": "POST",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`POST api/v1/comment`


<!-- END_915851b5c9f730d02988b822e4a30f8a -->

<!-- START_4edd956a1a999ad35cc057c1e593977b -->
## Display the specified resource.

> Example request:

```bash
curl -X GET "http://localhost/api/v1/comment/{comment}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/comment/{comment}",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/v1/comment/{comment}`

`HEAD api/v1/comment/{comment}`


<!-- END_4edd956a1a999ad35cc057c1e593977b -->

<!-- START_c1ce86e235556d4bccae260920f398ea -->
## Show the form for editing the specified resource.

> Example request:

```bash
curl -X GET "http://localhost/api/v1/comment/{comment}/edit" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/comment/{comment}/edit",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/v1/comment/{comment}/edit`

`HEAD api/v1/comment/{comment}/edit`


<!-- END_c1ce86e235556d4bccae260920f398ea -->

<!-- START_52af1ae72ff747139be68ec9854846a1 -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT "http://localhost/api/v1/comment/{comment}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/comment/{comment}",
    "method": "PUT",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`PUT api/v1/comment/{comment}`

`PATCH api/v1/comment/{comment}`


<!-- END_52af1ae72ff747139be68ec9854846a1 -->

<!-- START_be929c59dc06593dc6ab34e11c799e17 -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE "http://localhost/api/v1/comment/{comment}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/comment/{comment}",
    "method": "DELETE",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`DELETE api/v1/comment/{comment}`


<!-- END_be929c59dc06593dc6ab34e11c799e17 -->

<!-- START_af851f4cd1f0d32874a712f3319295e6 -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET "http://localhost/api/v1/profile" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/profile",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/v1/profile`

`HEAD api/v1/profile`


<!-- END_af851f4cd1f0d32874a712f3319295e6 -->

<!-- START_03e2bd0135762e8305135e04896cc66c -->
## Show the form for creating a new resource.

> Example request:

```bash
curl -X GET "http://localhost/api/v1/profile/create" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/profile/create",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/v1/profile/create`

`HEAD api/v1/profile/create`


<!-- END_03e2bd0135762e8305135e04896cc66c -->

<!-- START_718ca1cf95e5e36ed6d871a10bf16ecd -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST "http://localhost/api/v1/profile" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/profile",
    "method": "POST",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`POST api/v1/profile`


<!-- END_718ca1cf95e5e36ed6d871a10bf16ecd -->

<!-- START_eaa929c637dbe1a3e7bf3032553301f6 -->
## Display the specified resource.

> Example request:

```bash
curl -X GET "http://localhost/api/v1/profile/{profile}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/profile/{profile}",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "message": "No query results for model [App\\Profile].",
    "exception": "Symfony\\Component\\HttpKernel\\Exception\\NotFoundHttpException",
    "file": "\/Applications\/XAMPP\/xamppfiles\/htdocs\/readhunt\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Exceptions\/Handler.php",
    "line": 199,
    "trace": [
        {
            "file": "\/Applications\/XAMPP\/xamppfiles\/htdocs\/readhunt\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Exceptions\/Handler.php",
            "line": 175,
            "function": "prepareException",
            "class": "Illuminate\\Foundation\\Exceptions\\Handler",
            "type": "->"
        },
        {
            "file": "\/Applications\/XAMPP\/xamppfiles\/htdocs\/readhunt\/app\/Exceptions\/Handler.php",
            "line": 51,
            "function": "render",
            "class": "Illuminate\\Foundation\\Exceptions\\Handler",
            "type": "->"
        },
        {
            "file": "\/Applications\/XAMPP\/xamppfiles\/htdocs\/readhunt\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 83,
            "function": "render",
            "class": "App\\Exceptions\\Handler",
            "type": "->"
        },
        {
            "file": "\/Applications\/XAMPP\/xamppfiles\/htdocs\/readhunt\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 55,
            "function": "handleException",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/XAMPP\/xamppfiles\/htdocs\/readhunt\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Middleware\/ThrottleRequests.php",
            "line": 57,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/XAMPP\/xamppfiles\/htdocs\/readhunt\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 149,
            "function": "handle",
            "class": "Illuminate\\Routing\\Middleware\\ThrottleRequests",
            "type": "->"
        },
        {
            "file": "\/Applications\/XAMPP\/xamppfiles\/htdocs\/readhunt\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/XAMPP\/xamppfiles\/htdocs\/readhunt\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 102,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/XAMPP\/xamppfiles\/htdocs\/readhunt\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Router.php",
            "line": 647,
            "function": "then",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/XAMPP\/xamppfiles\/htdocs\/readhunt\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Router.php",
            "line": 622,
            "function": "runRouteWithinStack",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "\/Applications\/XAMPP\/xamppfiles\/htdocs\/readhunt\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Router.php",
            "line": 588,
            "function": "runRoute",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "\/Applications\/XAMPP\/xamppfiles\/htdocs\/readhunt\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Router.php",
            "line": 577,
            "function": "dispatchToRoute",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "\/Applications\/XAMPP\/xamppfiles\/htdocs\/readhunt\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Kernel.php",
            "line": 176,
            "function": "dispatch",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "\/Applications\/XAMPP\/xamppfiles\/htdocs\/readhunt\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 30,
            "function": "Illuminate\\Foundation\\Http\\{closure}",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "\/Applications\/XAMPP\/xamppfiles\/htdocs\/readhunt\/vendor\/fideloper\/proxy\/src\/TrustProxies.php",
            "line": 56,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/XAMPP\/xamppfiles\/htdocs\/readhunt\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 149,
            "function": "handle",
            "class": "Fideloper\\Proxy\\TrustProxies",
            "type": "->"
        },
        {
            "file": "\/Applications\/XAMPP\/xamppfiles\/htdocs\/readhunt\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/XAMPP\/xamppfiles\/htdocs\/readhunt\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Middleware\/TransformsRequest.php",
            "line": 30,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/XAMPP\/xamppfiles\/htdocs\/readhunt\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 149,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest",
            "type": "->"
        },
        {
            "file": "\/Applications\/XAMPP\/xamppfiles\/htdocs\/readhunt\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/XAMPP\/xamppfiles\/htdocs\/readhunt\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Middleware\/TransformsRequest.php",
            "line": 30,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/XAMPP\/xamppfiles\/htdocs\/readhunt\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 149,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest",
            "type": "->"
        },
        {
            "file": "\/Applications\/XAMPP\/xamppfiles\/htdocs\/readhunt\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/XAMPP\/xamppfiles\/htdocs\/readhunt\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Middleware\/ValidatePostSize.php",
            "line": 27,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/XAMPP\/xamppfiles\/htdocs\/readhunt\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 149,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize",
            "type": "->"
        },
        {
            "file": "\/Applications\/XAMPP\/xamppfiles\/htdocs\/readhunt\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/XAMPP\/xamppfiles\/htdocs\/readhunt\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Middleware\/CheckForMaintenanceMode.php",
            "line": 46,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/XAMPP\/xamppfiles\/htdocs\/readhunt\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 149,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\CheckForMaintenanceMode",
            "type": "->"
        },
        {
            "file": "\/Applications\/XAMPP\/xamppfiles\/htdocs\/readhunt\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/XAMPP\/xamppfiles\/htdocs\/readhunt\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 102,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/XAMPP\/xamppfiles\/htdocs\/readhunt\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Kernel.php",
            "line": 151,
            "function": "then",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/Applications\/XAMPP\/xamppfiles\/htdocs\/readhunt\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Kernel.php",
            "line": 116,
            "function": "sendRequestThroughRouter",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "\/Applications\/XAMPP\/xamppfiles\/htdocs\/readhunt\/vendor\/mpociot\/laravel-apidoc-generator\/src\/Mpociot\/ApiDoc\/Generators\/LaravelGenerator.php",
            "line": 116,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "\/Applications\/XAMPP\/xamppfiles\/htdocs\/readhunt\/vendor\/mpociot\/laravel-apidoc-generator\/src\/Mpociot\/ApiDoc\/Generators\/AbstractGenerator.php",
            "line": 98,
            "function": "callRoute",
            "class": "Mpociot\\ApiDoc\\Generators\\LaravelGenerator",
            "type": "->"
        },
        {
            "file": "\/Applications\/XAMPP\/xamppfiles\/htdocs\/readhunt\/vendor\/mpociot\/laravel-apidoc-generator\/src\/Mpociot\/ApiDoc\/Generators\/LaravelGenerator.php",
            "line": 58,
            "function": "getRouteResponse",
            "class": "Mpociot\\ApiDoc\\Generators\\AbstractGenerator",
            "type": "->"
        },
        {
            "file": "\/Applications\/XAMPP\/xamppfiles\/htdocs\/readhunt\/vendor\/mpociot\/laravel-apidoc-generator\/src\/Mpociot\/ApiDoc\/Commands\/GenerateDocumentation.php",
            "line": 261,
            "function": "processRoute",
            "class": "Mpociot\\ApiDoc\\Generators\\LaravelGenerator",
            "type": "->"
        },
        {
            "file": "\/Applications\/XAMPP\/xamppfiles\/htdocs\/readhunt\/vendor\/mpociot\/laravel-apidoc-generator\/src\/Mpociot\/ApiDoc\/Commands\/GenerateDocumentation.php",
            "line": 83,
            "function": "processLaravelRoutes",
            "class": "Mpociot\\ApiDoc\\Commands\\GenerateDocumentation",
            "type": "->"
        },
        {
            "function": "handle",
            "class": "Mpociot\\ApiDoc\\Commands\\GenerateDocumentation",
            "type": "->"
        },
        {
            "file": "\/Applications\/XAMPP\/xamppfiles\/htdocs\/readhunt\/vendor\/laravel\/framework\/src\/Illuminate\/Container\/BoundMethod.php",
            "line": 29,
            "function": "call_user_func_array"
        },
        {
            "file": "\/Applications\/XAMPP\/xamppfiles\/htdocs\/readhunt\/vendor\/laravel\/framework\/src\/Illuminate\/Container\/BoundMethod.php",
            "line": 87,
            "function": "Illuminate\\Container\\{closure}",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "\/Applications\/XAMPP\/xamppfiles\/htdocs\/readhunt\/vendor\/laravel\/framework\/src\/Illuminate\/Container\/BoundMethod.php",
            "line": 31,
            "function": "callBoundMethod",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "\/Applications\/XAMPP\/xamppfiles\/htdocs\/readhunt\/vendor\/laravel\/framework\/src\/Illuminate\/Container\/Container.php",
            "line": 549,
            "function": "call",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "\/Applications\/XAMPP\/xamppfiles\/htdocs\/readhunt\/vendor\/laravel\/framework\/src\/Illuminate\/Console\/Command.php",
            "line": 180,
            "function": "call",
            "class": "Illuminate\\Container\\Container",
            "type": "->"
        },
        {
            "file": "\/Applications\/XAMPP\/xamppfiles\/htdocs\/readhunt\/vendor\/symfony\/console\/Command\/Command.php",
            "line": 262,
            "function": "execute",
            "class": "Illuminate\\Console\\Command",
            "type": "->"
        },
        {
            "file": "\/Applications\/XAMPP\/xamppfiles\/htdocs\/readhunt\/vendor\/laravel\/framework\/src\/Illuminate\/Console\/Command.php",
            "line": 167,
            "function": "run",
            "class": "Symfony\\Component\\Console\\Command\\Command",
            "type": "->"
        },
        {
            "file": "\/Applications\/XAMPP\/xamppfiles\/htdocs\/readhunt\/vendor\/symfony\/console\/Application.php",
            "line": 888,
            "function": "run",
            "class": "Illuminate\\Console\\Command",
            "type": "->"
        },
        {
            "file": "\/Applications\/XAMPP\/xamppfiles\/htdocs\/readhunt\/vendor\/symfony\/console\/Application.php",
            "line": 224,
            "function": "doRunCommand",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "\/Applications\/XAMPP\/xamppfiles\/htdocs\/readhunt\/vendor\/symfony\/console\/Application.php",
            "line": 125,
            "function": "doRun",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "\/Applications\/XAMPP\/xamppfiles\/htdocs\/readhunt\/vendor\/laravel\/framework\/src\/Illuminate\/Console\/Application.php",
            "line": 88,
            "function": "run",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "\/Applications\/XAMPP\/xamppfiles\/htdocs\/readhunt\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Console\/Kernel.php",
            "line": 121,
            "function": "run",
            "class": "Illuminate\\Console\\Application",
            "type": "->"
        },
        {
            "file": "\/Applications\/XAMPP\/xamppfiles\/htdocs\/readhunt\/artisan",
            "line": 37,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Console\\Kernel",
            "type": "->"
        }
    ]
}
```

### HTTP Request
`GET api/v1/profile/{profile}`

`HEAD api/v1/profile/{profile}`


<!-- END_eaa929c637dbe1a3e7bf3032553301f6 -->

<!-- START_4d470e825ac25247b57d4bfb0bf8db36 -->
## Show the form for editing the specified resource.

> Example request:

```bash
curl -X GET "http://localhost/api/v1/profile/{profile}/edit" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/profile/{profile}/edit",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/v1/profile/{profile}/edit`

`HEAD api/v1/profile/{profile}/edit`


<!-- END_4d470e825ac25247b57d4bfb0bf8db36 -->

<!-- START_be56d972368393677dd9585f0f65b8b1 -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT "http://localhost/api/v1/profile/{profile}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/profile/{profile}",
    "method": "PUT",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`PUT api/v1/profile/{profile}`

`PATCH api/v1/profile/{profile}`


<!-- END_be56d972368393677dd9585f0f65b8b1 -->

<!-- START_35584c51bf495bc7b7e4767e2aa52cab -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE "http://localhost/api/v1/profile/{profile}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/profile/{profile}",
    "method": "DELETE",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`DELETE api/v1/profile/{profile}`


<!-- END_35584c51bf495bc7b7e4767e2aa52cab -->

<!-- START_b69aa844ac4e52fc70aa51c9457a84e5 -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET "http://localhost/api/v1/suggestion" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/suggestion",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/v1/suggestion`

`HEAD api/v1/suggestion`


<!-- END_b69aa844ac4e52fc70aa51c9457a84e5 -->

<!-- START_5a309b16abbc00503e7dd45606af44a0 -->
## Show the form for creating a new resource.

> Example request:

```bash
curl -X GET "http://localhost/api/v1/suggestion/create" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/suggestion/create",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/v1/suggestion/create`

`HEAD api/v1/suggestion/create`


<!-- END_5a309b16abbc00503e7dd45606af44a0 -->

<!-- START_2f59bdfec131fc4ffd85c3a14e4fba7a -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST "http://localhost/api/v1/suggestion" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/suggestion",
    "method": "POST",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`POST api/v1/suggestion`


<!-- END_2f59bdfec131fc4ffd85c3a14e4fba7a -->

<!-- START_ead29d26fcda25f5a2393c8cc889a188 -->
## Display the specified resource.

> Example request:

```bash
curl -X GET "http://localhost/api/v1/suggestion/{suggestion}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/suggestion/{suggestion}",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/v1/suggestion/{suggestion}`

`HEAD api/v1/suggestion/{suggestion}`


<!-- END_ead29d26fcda25f5a2393c8cc889a188 -->

<!-- START_8beb27ab02194d1d07519bcea691092b -->
## Show the form for editing the specified resource.

> Example request:

```bash
curl -X GET "http://localhost/api/v1/suggestion/{suggestion}/edit" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/suggestion/{suggestion}/edit",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/v1/suggestion/{suggestion}/edit`

`HEAD api/v1/suggestion/{suggestion}/edit`


<!-- END_8beb27ab02194d1d07519bcea691092b -->

<!-- START_9423c6b2dbf1d3d9dba938073352c224 -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT "http://localhost/api/v1/suggestion/{suggestion}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/suggestion/{suggestion}",
    "method": "PUT",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`PUT api/v1/suggestion/{suggestion}`

`PATCH api/v1/suggestion/{suggestion}`


<!-- END_9423c6b2dbf1d3d9dba938073352c224 -->

<!-- START_1ffde22beb6c8edf64b0bdecc663efff -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE "http://localhost/api/v1/suggestion/{suggestion}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/suggestion/{suggestion}",
    "method": "DELETE",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`DELETE api/v1/suggestion/{suggestion}`


<!-- END_1ffde22beb6c8edf64b0bdecc663efff -->

<!-- START_9e978e571c2e81dbee8454eac921fd26 -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET "http://localhost/api/v1/vote" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/vote",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/v1/vote`

`HEAD api/v1/vote`


<!-- END_9e978e571c2e81dbee8454eac921fd26 -->

<!-- START_b60a11e875260def7f7db852d31e4e8b -->
## Show the form for creating a new resource.

> Example request:

```bash
curl -X GET "http://localhost/api/v1/vote/create" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/vote/create",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/v1/vote/create`

`HEAD api/v1/vote/create`


<!-- END_b60a11e875260def7f7db852d31e4e8b -->

<!-- START_3906a61ebc851d9ed09cadc663d962ab -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST "http://localhost/api/v1/vote" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/vote",
    "method": "POST",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`POST api/v1/vote`


<!-- END_3906a61ebc851d9ed09cadc663d962ab -->

<!-- START_c43465d11890b7b94fa383c3425ed1bc -->
## Display the specified resource.

> Example request:

```bash
curl -X GET "http://localhost/api/v1/vote/{vote}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/vote/{vote}",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/v1/vote/{vote}`

`HEAD api/v1/vote/{vote}`


<!-- END_c43465d11890b7b94fa383c3425ed1bc -->

<!-- START_6cca418fe63f0ac6842b25d63b5947d4 -->
## Show the form for editing the specified resource.

> Example request:

```bash
curl -X GET "http://localhost/api/v1/vote/{vote}/edit" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/vote/{vote}/edit",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/v1/vote/{vote}/edit`

`HEAD api/v1/vote/{vote}/edit`


<!-- END_6cca418fe63f0ac6842b25d63b5947d4 -->

<!-- START_849d0e34aaefca69c05c5dfa7f9dd05c -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT "http://localhost/api/v1/vote/{vote}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/vote/{vote}",
    "method": "PUT",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`PUT api/v1/vote/{vote}`

`PATCH api/v1/vote/{vote}`


<!-- END_849d0e34aaefca69c05c5dfa7f9dd05c -->

<!-- START_5c0378ac9c14a934f7b53d9aaea8b0ef -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE "http://localhost/api/v1/vote/{vote}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/vote/{vote}",
    "method": "DELETE",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`DELETE api/v1/vote/{vote}`


<!-- END_5c0378ac9c14a934f7b53d9aaea8b0ef -->

<!-- START_0024aa209a84866d387e35cc1802ea70 -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET "http://localhost/api/v1/articles" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/articles",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
null
```

### HTTP Request
`GET api/v1/articles`

`HEAD api/v1/articles`


<!-- END_0024aa209a84866d387e35cc1802ea70 -->

<!-- START_bdd3ccf7db9f96843f0bb3617eac0164 -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET "http://localhost/api/v1/categories" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/categories",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
null
```

### HTTP Request
`GET api/v1/categories`

`HEAD api/v1/categories`


<!-- END_bdd3ccf7db9f96843f0bb3617eac0164 -->

<!-- START_94fa92618bb02ddc69477222dc6ec4e0 -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET "http://localhost/api/v1/comments/{article_id}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/comments/{article_id}",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
null
```

### HTTP Request
`GET api/v1/comments/{article_id}`

`HEAD api/v1/comments/{article_id}`


<!-- END_94fa92618bb02ddc69477222dc6ec4e0 -->

<!-- START_d362bbc48ab18177031f185222ae2ecd -->
## Display the specified resource.

> Example request:

```bash
curl -X GET "http://localhost/api/v1/votes/count/{article_id}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/votes/count/{article_id}",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
null
```

### HTTP Request
`GET api/v1/votes/count/{article_id}`

`HEAD api/v1/votes/count/{article_id}`


<!-- END_d362bbc48ab18177031f185222ae2ecd -->

<!-- START_aa6f432f2552c6aeb47833293fa5e6eb -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET "http://localhost/api/v1/search/{terms}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/search/{terms}",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
null
```

### HTTP Request
`GET api/v1/search/{terms}`

`HEAD api/v1/search/{terms}`


<!-- END_aa6f432f2552c6aeb47833293fa5e6eb -->

