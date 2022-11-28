<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>New Application</title>
</head>
<body>
<h3>New Application Received:</h3>

<p>Name and Surname: {{$application->name}}</p>
<p>Phone Number: {{$application->phone}}</p>
<p>Identity Number: {{$application->id_num}}</p>
<p>Town: {{$application->town}}</p>
<p>Province: {{$application->province}}</p>
<p>Email Address: {{$application->email}}</p>
<p>Referral Code: </p>
</body>
</html>
