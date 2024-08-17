<!DOCTYPE html>
<html>
<head>
    <title>Reset Password</title>
</head>
<body>
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

    <script>
        document.getElementById('resetPasswordForm').addEventListener('submit', function(event) {
            event.preventDefault(); // Prevent the default form submission

            const form = event.target;
            const formData = new FormData(form);
            
            fetch('{{ url('resetPassword') }}', {
                method: 'POST',
                body: formData,
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}', // Include CSRF token in the request header
                }
            })
            .then(response => response.json())
            .then(data => {
                // Handle successful response
                alert('Success:', data);
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
