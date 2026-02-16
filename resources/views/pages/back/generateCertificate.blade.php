<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Certificate</title>

    <style type="text/css">
        #image{
            position: absolute;
            top: -15px;
            width: 100%;
            height: 105%;
        }

        body {
            font-family: 'Allura', cursive;
            color: #222222;
        }
        #id{
            position: absolute;
            bottom: 26.4%;
            left: 37%;
            font-weight: 600;
            font-size: 13px;
        }
        #valid{
            position: absolute;
            bottom: 32%;
            left: 35.5%;
            font-weight: 600;
            font-size: 13px;
        }
        #expiration{
            position: absolute;
            bottom: 29%;
            left: 34.5%;
            font-weight: 600;
            font-size: 13px;
        }
        #container{
            position: relative;
        }
        #holder{
            position: absolute;
            top: 29%;
            width: 100%;
            text-align: center;
            font-size: 50px;
            font-weight: 600;
        }
    </style>
</head>
<body>

<div>
    <div id="container">
        <img src="images/certificate/{{ $image }}.png" id="image" style="width: 100%" alt="">
        <div id="holder">{{$holder->name}}</div>
        <div id="id">{{$certificate[0]->unique_id}}</div>
        <div id="valid">{{ \Carbon\Carbon::parse($certificate[0]->valid_from)->format('Y-m-d') }}</div>
        <div id="expiration">{{ \Carbon\Carbon::parse($certificate[0]->expiration_date)->format('Y-m-d') }}</div>
    </div>
</div>
</body>
</html>
