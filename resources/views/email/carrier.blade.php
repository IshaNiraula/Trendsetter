<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Submitted details of an applicant</h1>
     <p>Applicant Name : {{$mailData['name']}}</p>
     <p>Email : {{$mailData['email']}}</p>
     <p>Phone Number : {{$mailData['phone']}}</p>
     <p>Location : {{$mailData['location']}}</p>
     <p>Applying for Position : {{$mailData['position']}}</p>
     <p>Salary expection : {{$mailData['salary']}}</p>
     <p>Date to join : {{$mailData['date']}}</p>
     <p>Experience : {{$mailData['experience']}}</p>
     <p>Employment status : {{$mailData['e_status']}}</p>
     <p>Reference : {{$mailData['r_status']}}</p>
     <p>Referer name : {{$mailData['referer_name']}}</p>
     <p>Referer email : {{$mailData['referer_email']}}</p>
</body> 
</html>