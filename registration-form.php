<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
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