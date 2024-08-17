<!DOCTYPE html>
<html>
<head>
    <title>Reset Password</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            width: 100%;
        }

        h1 {
            margin-top: 0;
            font-size: 24px;
            color: #333;
        }

        label {
            display: block;
            margin-bottom: 8px;
            color: #555;
        }

        input[type="email"],
        input[type="password"] {
            width: calc(100% - 20px);
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            border-radius: 4px;
            box-sizing: border-box;
        }

        button {
            background-color: #007bff;
            color: white;
            border: none;
            padding: 10px 15px;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            width: 100%;
        }

        button:hover {
            background-color: #0056b3;
        }

        @media (max-width: 600px) {
            input[type="email"],
            input[type="password"],
            button {
                width: 100%;
                box-sizing: border-box;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Reset Password</h1>
        <form id="resetPasswordForm">
            <input type="hidden" name="token" value="{{ $token }}">

            <label for="email">Email:</label>
            <input type="email" name="email" required>

            <label for="password">New Password:</label>
            <input type="password" name="password" required>

            <label for="password_confirmation">Confirm Password:</label>
            <input type="password" name="password_confirmation" required>

            <button type="submit">Reset Password</button>
        </form>
    </div>

    <script>
        document.getElementById('resetPasswordForm').addEventListener('submit', function(event) {
            event.preventDefault(); // Prevent the default form submission

            const form = event.target;
            const formData = new FormData(form);
            
            fetch('https://finalapi.soilchargertechnology.com/api/resetPassword', {
                method: 'POST',
                body: formData,
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}', // Include CSRF token in the request header
                }
            })
            .then(response => response.json())
            .then(data => {
                // Handle successful response
                alert('Success:', data.message);
                // Redirect or show success message
            })
            .catch(error => {
                // Handle error
                alert('Error:', error);
            });
        });
    </script>
</body>
</html>
