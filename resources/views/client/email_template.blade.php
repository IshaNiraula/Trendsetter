<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mail from website</title>
</head>

<body>
    <div>
        <table>
            <tr>
                <th>Subject</th>
                <td>{{ $subject }}</td>
            </tr>
            <tr>
                <th>Name</th>
                <td>{{ $fromName }}</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>{{ $fromEmail }}</td>
            </tr>
          
            <tr>
                <th>Phone Number</th>
                <td>{{ $telephone }}</td>
            </tr>
            <tr>
                <th>land Area</th>
                <td>{{ $area }}</td>
            </tr>
            <tr>
                <th>land Location</th>
                <td>{{ $location }}</td>
            </tr>
            </tr>
            <tr>
                <th>Message</th>
                <td>{{ $body }}</td>
            </tr>
        </table>
    </div>
</body>

</html>
