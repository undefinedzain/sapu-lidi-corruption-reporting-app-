@extends ('layouts.plane')
<style type="text/css">
body {
    margin: 0;
    padding: 0;
    font-family: 'Lato', sans-serif;
    height: 100%;
}
.form-login1 {
    width: 400px;
    margin: 0px auto;
    text-align: center;
    /*border: 2px solid #fff;*/
    padding-top: 100px;
}
.form-login1 h1 {
    font-family: 'Raleway', sans-serif;
    color: #fff;
    text-align: center;
}
.form-login1 p {
    color: #bdc3c7;
    text-align: center;
}
.form-login1 form {
    margin: 50px 0px;
    text-align: center;
}
.form-control1 {
    border: none;
    background: #F44336;
    border: 2px solid #fff;
    width: 300px;
    padding: 15px 18px;
    text-align: center;
    font-family: 'Lato', sans-serif;
    font-size: 14px;
    color: #fff;
    margin-bottom: 20px;
    border-radius: 99em;
    box-shadow: none;
    transition: 0.5s;
}
.form-control1:focus {
    border: 2px solid #fff;
    outline: 0;
}
.btn1 {
    width: 110px;
    display: block;
    margin: 0px auto;
    background: #D32F2F;
    border: 2px solid #fff;
    font-family: 'Lato', sans-serif;
    font-size: 14px;
    padding: 15px 18px;
    transition: 0.5s;
    border-radius: 99em;
    color: #fff;
}
.btn1:hover {
    cursor: pointer;
    background: #fff;
    color: #F44336;
}
</style>
    <div class='form-login1'>
        <a href="{{ url('') }}"><img src="{{ asset("assets/images/logo-white.png") }}"></a>
        <p>Silahkan login dengan username dan password. </p>
        <form method="post" action="{{ url('login/login') }}">
            <input type='text' class='form-control1' name="username" placeholder='Username' />
            <input type='password' class='form-control1' name="password" placeholder='Password' />
            
            <button class='btn1'>SIGN IN</button>
        </form>
        <p>2015 &copy; Sapulidi</p>
    </div>\