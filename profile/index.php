<html>
    <head></head>
    <body>
        <form action="/profile/submit_data.php" method="post">
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