<!Doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Login details</title>
    </head>
    <body>
    <div >
        <div style="width:100%;">
            <p>
                Hi {{$user->name}},<br/>

                An account has been created for you by your Administrator. Please take note of your username and password.<br/>
                <br/>
                email : {{$user->email}}<br/>
                Password : {{$user->password}}<br/>
                <br/>
                If you are having problems logging into your account, please notify your Administrator.
            </p>
        </div>
    </div>

    <footer>
        <div style="padding-top:10px;text-align:center;padding-bottom:0;margin-bottom:0">
            <em style="font-size:smaller;">
            This is a notification-only email address. Please do not reply to this message.
            </em>
        </div>  

    </footer>
    </body>
</html>