<!DOCTYPE html>
<html>
<body>
<head style="font-size:medium;color: #0f0f0f;font-weight: bold">Application</head><br>
    Name:{{$data['name']}}<br>
    Email:{{$data['email']}}<br>
    Message: {{$data['message']}}<br>
    CV:{{asset($data['cv'])}}<br>
</body>
</html>
