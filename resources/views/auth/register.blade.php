<style>
@import url(https://fonts.googleapis.com/css?family=Roboto:300);



.register-page {
    width: 360px;
    padding: 8% 0 0;
    margin: auto;
    display: flex;
}

.form {

    position: relative;
    z-index: 1;
    width: 350px;
    background: #FFFFFF;
    margin: 0 auto 100px;
    padding: 45px;
    text-align: center;
    box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
}

.form input{
    font-family: "Roboto", sans-serif;
    outline: 0;
    background: #f2f2f2;
    width: 100%;
    border: 0;
    margin: 0 0 15px;
    padding: 15px;
    box-sizing: border-box;
    font-size: 14px;
    border-left: 5px solid #b3b3b3;
}


.form button {
    font-family: "Roboto", sans-serif;
    text-transform: uppercase;
    outline: 0;
    background: #4CAF50;
    width: 100%;
    border: 0;
    padding: 15px;
    color: #FFFFFF;
    font-size: 14px;
    -webkit-transition: all 0.3 ease;
    transition: all 0.3 ease;
    cursor: pointer;
}

.form button:hover,
.form button:active,
.form button:focus {
    background: #43A047;
}

.form .message {
    margin: 15px 0 0;
    color: #b3b3b3;
    font-size: 15px;
    font-weight: 1000;
    text-transform: capitalize;
}

.form .message a {
    color: #4CAF50;
    text-decoration: none;

}

.form .register-form {
    display: none;
}

.container {
    position: relative;
    z-index: 1;
    max-width: 300px;
    margin: 0 auto;
}

.container:before,
.container:after {
    content: "";
    display: block;
    clear: both;
}

.container .info {
    margin: 50px auto;
    text-align: center;
}

.container .info h1 {
    margin: 0 0 15px;
    padding: 0;
    font-size: 36px;
    font-weight: 300;
    color: #1a1a1a;
}

.container .info span {
    color: #4d4d4d;
    font-size: 12px;
}

.container .info span a {
    color: #000000;
    text-decoration: none;
}

.container .info span .fa {
    color: #EF3B3A;
}

body {

    font-family: "Roboto", sans-serif;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
}

.card-header {
    font-size: 30px;
    text-transform: uppercase;
    font-weight: 800;
    text-shadow: -7px 0px 5px rgba(0, 0, 0, 0.15);
}
</style>
<x-nav/>
<div class="register-page">



    <form method="POST" class="form" action="{{ route('register') }}">
        @csrf
        <div class="card-header">{{ __('Register') }}</div>
        <div >
          
<br>
            <div >
                <input id="name" type="text" class=" @error('name') is-invalid @enderror" name="name" placeholder="name"
                    value="{{ old('name') }}" required autocomplete="name" autofocus>

                @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>

        <div >

            <div >
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                placeholder="email"
                    value="{{ old('email') }}" required autocomplete="email">

                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>

        <div >

            <div >
                <input id="password" type="password"placeholder="password" class="form-control @error('password') is-invalid @enderror"
                    name="password" required autocomplete="new-password">

                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>

        <div>
          

            <div >
                <input id="password-confirm" type="password" placeholder="confirm password" name="password_confirmation" required
                    autocomplete="new-password">
            </div>
        </div>

       
                <button type="submit">
                    {{ __('Register') }}
                </button>
      
        </div>
    </form>
</div>