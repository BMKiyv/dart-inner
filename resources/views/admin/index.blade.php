<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>admin page</title>
    @vite(['resources/sass/app.scss','resources/js/bootstrap.bundle.min.js'])
</head>
<body>
    <h1 style="text-align: center">This is admin page!</h1>
    <div class="container">
      <div class="row mt-5">
        <form class="col" action="{{route('logout')}}" method="POST">
          @csrf
        <button class="btn btn-info"  type="submit">Logout</button>
      </form>
      <form class="col" action="{{route('to_home', ['APP_URL'=>str_replace('http://', '',$GLOBALS['_ENV']['APP_URL'])])}}" method="POST">
          @csrf
        <button class="btn btn-secondary"  type="submit">To inner site</button>
      </form>
      </div>
    </div>

</body>
{{-- <script>
function setCookie(name, value, options = {}) {

options = {
  path: '/',
  // за потреби додайте інші типові значення
  ...options
};

if (options.expires instanceof Date) {
  options.expires = options.expires.toUTCString();
}

let updatedCookie = encodeURIComponent(name) + "=" + encodeURIComponent(value);

for (let optionKey in options) {
  updatedCookie += "; " + optionKey;
  let optionValue = options[optionKey];
  if (optionValue !== true) {
    updatedCookie += "=" + optionValue;
  }
}

document.cookie = updatedCookie;
}
function deleteCookie(name) {
  setCookie(name, "", {
    'max-age': -1
  })
}

window.addEventListener("unload", function() {
    deleteCookie('XSRF-TOKEN')
    deleteCookie('laravel_session')
});
</script> --}}
</html>