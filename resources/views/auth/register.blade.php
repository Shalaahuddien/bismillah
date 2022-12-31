<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
            <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
</head>
<body>
<div>

    * {
  font-family: "Inter", sans-serif;
}
form {
  width: 40%;
  min-width: 450px;
  margin: auto;
}
label {
  font-size: 1.5em;
}

input {
  width: 100%;
  display: block;
  font-size: 2em;
  border: solid 4px;
  border-color: hsl(210, 100%, 30%);
  margin-bottom: 1.5em;
}
input[type="submit"] {
  width: fit-content;
  font-size: 1.5em;
}

input[type="submit"]:focus {
  background-color: hsl(210, 100%, 80%);
}
input[type="submit"]:active {
  background-color: hsl(200, 100%, 80%);
}
.invalid {
  border-color: darkred;
  background-color: hsl(0, 30%, 95%);
  margin-bottom: 0em;
}
.error-message {
  margin-bottom: 1em;
  color: hsl(0deg, 100%, 15%);
}


        <form method="post" action="" x-data="form" @focusout="change" @input="change" @submit="submit">
            <h1>Register</h1>

            @csrf

            <div>
            <label for="username" class="form-label">Username</label>
            <input class="form-control" placeholder="Your name" name="name" id="name" type="text" x-bind:class="{'invalid':username.errorMessage}"
                data-rules='["required"]' data-server-errors='[]'>
            <p class="error-message" x-show="username.errorMessage" x-text="username.errorMessage" x-transition:enter></p>
                </div>

                <div>
            <label for="email" class="form-label">Email</label>
            <input class="form-control @error('email') is-invalid @enderror" name="email" type="email" id="email" x-bind:class="{'invalid':email.errorMessage}" placeholder="name@example.com"
                data-rules='["required","email"]' data-server-errors='[]'>
            <p class="error-message" x-show="email.errorMessage" x-text="email.errorMessage" x-transition:enter></p>
                    </div>

                    <div>
            <label for="password" class="form-label">Password</label>
            <input placeholder="password" class="form-control @error('password') is-invalid @enderror" name="password" type="password" id="password" x-bind:class="{'invalid':password.errorMessage}"
                data-rules='["required","minLength:8"]' data-server-errors='[]'>
            <p class="error-message" x-show="password.errorMessage" x-text="password.errorMessage" x-transition:enter></p>
                        </div>
            
                        <div>
            <label for="password_confirmation" class="form-label">Confirm Password</label>
            <input placeholder="password" class="form-control @error('password_confirmation') is-invalid @enderror" name="password_confirmation" type="password" id="password_confirmation" x-bind:class="{'invalid': passwordConf.errorMessage}"
                data-rules='["required","minLength:8","matchingPassword"]' data-server-errors='[]'>
            <p class="error-message" x-show="passwordConf.errorMessage" x-text="passwordConf.errorMessage" x-transition:enter>
            </p>
            </div>

            <div>
            <input type="submit" class="btn btn-primary" value="Register">
                </div>

        </form>

    </div>
</body>
</html>