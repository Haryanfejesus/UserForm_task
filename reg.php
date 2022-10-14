<!-- Create a registration form that takes in the following below and submits using the POST method.

Name
Email
Date of Birth
Gender
Country
2. Your page should send the form to a file called user_data.php, which does the following:

Save the user data into a file called userdata.csv
Returns the data submitted to the users using the print_r method -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
</head>

<body>
    <form method="POST" action="user_data.php">
        <label for="firstname">
            First Name <input type="text" name="firstname" placeholder="Enter your first name">
        </label>
        <br>
        <br>
        <label for="lastname">
            Last Name <input type="text" name="lastname" placeholder="Enter your last name">
        </label>
        <br>
        <br>
        <label for="email">
            Email <input type="email" name="email" placeholder="Enter your email address">
        </label>
        <br>
        <br>
        <label for="dob">
            DOB <input type="date" name="dob">
        </label>
        <br>
        <br>
        <label for="gender">
            Gender <input type="gender" name="gender">

        </label>
        <br>
        <br>
        <label for="country">
            Country <input type="country" name="country">
        </label>
        <br>
        <br>
        <button type="submit" name="submit">Submit</button>




    </form>
</body>

</html>