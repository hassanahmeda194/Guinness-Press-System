<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Approve Submission</title>
    <style>
        .container {
            width: 100%;
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #ffffff;
            border-radius: 8px;
            font-family: monospace;
        }

        .header {
            /* text-align: center; */
            padding: 20px;
        }

        .header h1 {
            font-size: 24px;
            color: #333;
        }

        .content {
            padding: 20px;
        }

        .content p {
            margin: 0 0 10px;
            line-height: 1.6;
            font-size: 14px;
        }

        .button {
            display: block;
            width: fit-content;
            /* margin: 20px auto; */
            padding: 10px 20px;
            background-color: #000000;
            color: #ffffff;
            text-decoration: none;
            border-radius: 4px;
            text-align: center;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="header">
            <h1>Submission Approved</h1>
        </div>
        <div class="content">
            <p>Hello,</p>
            <p>Your manuscript ID <strong>{{ $submission->menuscript_id }}</strong> has been approved for future updates
                and APC payment. Check our website for further details.</p>
            <p>If you have any questions, please feel free to contact us.</p>
            <p>Best regards,<br>The Guinness Press Team</p>
            <a href="https://demo.guinnesspress.org/" class="button" style="color:white">Visit Our Website</a>
        </div>

    </div>
</body>

</html>
