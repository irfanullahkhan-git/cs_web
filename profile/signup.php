<html>
    <head>
        <title>Form Validation</title>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script>
            $(document).ready(function() {
                $("form").submit(function(event) {
                    let isValid = true;

                    // Validate Name
                    if ($("input[name='user_name']").val().trim() === "") {
                        alert("Name is required");
                        isValid = false;
                    }

                    // Validate Gender
                    if (!$("input[name='gender']:checked").val()) {
                        alert("Gender is required");
                        isValid = false;
                    }

                    // Validate Email
                    const emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;
                    const email = $("input[name='email']").val().trim();
                    if (email === "") {
                        alert("Email is required");
                        isValid = false;
                    } else if (!emailPattern.test(email)) {
                        alert("Please enter a valid email address");
                        isValid = false;
                    }

                    // Validate Password
                    if ($("input[name='password']").val().trim() === "") {
                        alert("Password is required");
                        isValid = false;
                    }

                    // Validate Display Picture
                    if ($("input[name='display_picture']").val().trim() === "") {
                        alert("Display picture is required");
                        isValid = false;
                    }

                    if (!isValid) {
                        event.preventDefault();
                    }
                });
            });
        </script>
    </head>
    <body>
        <form action="/profile/submit_data.php" method="post" enctype="multipart/form-data">
            <table>
                <tr>
                    <td>Name</td>
                    <td><input type="text" name="user_name"></td>
                </tr>
                <tr>
                    <td>Gender</td>
                    <td>
                        <label for="male_rad">Male</label>
                        <input type="radio" id="male_rad" value="Male" name="gender">
                    
                        <label for="female_rad">Female</label>
                        <input type="radio" id="female_rad" value="Female" name="gender">
                    </td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td><input type="text" name="email"></td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td><input type="password" name="password"></td>
                </tr>
                <tr>
                    <td>Display Picture</td>
                    <td><input type="file" name="display_picture"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" name="submit" value="Submit Form"></td>
                </tr>
            </table>
        </form>
    </body>
</html>
