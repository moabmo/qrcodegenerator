<!DOCTYPE html>
<html>
<head>
    <title>QR Code Generator</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
        }
        
        .container {
            max-width: 500px;
            margin: 0 auto;
            padding: 20px;
            background-color: lightgrey;
            border-radius: 10px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        
        h1 {
            text-align: center;
            color: blue;
        }
        
        form {
            text-align: center;
            margin-bottom: 20px;
        }
        
        input[type="text"] {
            padding: 10px;
            width: 80%;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        
        button[type="submit"] {
            padding: 10px 20px;
            background-color: #4caf50;
            color: #fff;
            border: none;
            font-weight: bolder;
            border-radius: 5px;
            cursor: pointer;
        }
        
        .img {
            display: block;
            margin: auto;
            max-width: 300px;
            margin-top: 20px;
        }
        
        .footer{
            text-align: center;
            color: blue;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>QR Code Generator</h1>
        <form action="{{ route('qrcode.generate') }}" method="POST">
            @csrf
           
            <input type="text" name="text" placeholder="Type your text here" required> <br><br>
            <button type="submit">Generate QR Code</button>
           
        </form>
        <div class="img">
            @if(isset($qrcode))
            <center>
            QR code for <br> <b>"{{ $text }}"
                {{ $qrcode }}
            </center>
            @endif
        </div>
        <div class="footer">
            <br>
            &copy; 2023 moabmo
        </div>
    </div><br>
</body>
</html>
