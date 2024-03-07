<!DOCTYPE html>
<html>

<head>
    <title>Message de la page de contact</title>
</head>

<body>
    <div style="text-align: center;margin-bottom:20px">
        <a href="{{ env('APP_URL') }}"><img src="https://i.ibb.co/ynSp4JT/logo.png" alt="LOGO OSMOTEC" border="0"
                width="250"></a>
    </div>
    <h1 style="text-align: center;color: #00aeef;">Message de la page de contact</h1>
    <div style="padding: 30px">
        <h3>Sujet : {{ $data['object'] }}</h3>
        <p>Nom: {{ $data['name'] }}</p>
        <p>Email: {{ $data['email'] }}</p>
        <p>Téléphone: {{ $data['phone'] }}</p>
        <hr>
        <p style="color: rgb(70, 68, 68)">{{ $data['message'] }}</p>
    </div>
    <hr>
    <div>
        <p style="text-align: center;color:gray">Copyright &copy; {{ date('y') }} <a
                href="{{ env('APP_URL') }}">OSMOTEC</a></p>
    </div>
</body>

</html>
