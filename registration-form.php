<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $serverName = getenv("APP_SERVERNAME");
    $username = getenv("APP_USERNAME");
    $password = getenv("APP_PASSWORD");
    $databaseName = getenv("APP_DATABASENAME");


    // Create connection
    $conn = new mysqli($serverName, $username, $password, $databaseName);

    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
        var_dump(mysqli_connect_error());
    }

    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    // $gender = $_POST['gender'];
    $company = $_POST['company'];
    $position = $_POST['position'];
    $emailAddress = $_POST['emailAddress'];


    $insertQuery = "INSERT INTO registrations (firstName, 
    lastName, gender, emailAddress, company, position) VALUES 
    (" . "'" . $firstName . "'," . "'" . $lastName . "'," . "'male'," . "'" . $company . "'," . "'" . $position . "'," . "'" . $emailAddress . "')";

    if ($conn->query($insertQuery) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $insertQuery . "<br>" . $conn->error;
    }

    $conn->close();
}
?>

<form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post">
    <div class="form-floating mb-3">
        <input type="text" class="form-control" name="firstName" id="floatingInput" placeholder="John">
        <label for="floatingInput">First Name</label>
    </div>
    <div class="form-floating mb-3">
        <input type="text" name="lastName" class="form-control" id="floatingInput" placeholder="Doe">
        <label for="floatingInput">Last Name</label>
    </div>

    Gender
    <div class="form-check">
        <input class="form-check-input" type="radio" name="gender" id="male">
        <label class="form-check-label" for="male">
            Male
        </label>
    </div>
    <div class="form-check mb-3">
        <input class="form-check-input" type="radio" name="gender" id="female">
        <label class="form-check-label" for="female">
            Female
        </label>
    </div>

    <div class="form-floating mb-3">
        <input type="email" name="emailAddress" class="form-control" id="floatingInput" placeholder="johndoe@gmail.com">
        <label for="floatingInput">Email Address</label>
    </div>

    <div class="form-floating mb-3">
        <input type="text" name="company" class="form-control" id="floatingInput" placeholder="ubuntu alliance">
        <label for="floatingInput">Company</label>
    </div>

    <div class="form-floating mb-3">
        <input type="text" name="position" class="form-control" id="floatingInput" placeholder="role">
        <label for="floatingInput">Position</label>
    </div>

    <div class="mb-3">
        <label for="formFile" class="form-label">ID</label>
        <input class="form-control" type="file" id="formFile">
    </div>

    <button class="btn btn-primary">Register</button>
</form>