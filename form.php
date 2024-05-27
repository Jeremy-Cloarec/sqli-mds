<!DOCTYPE html>
<html>

<head>
    <title>Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous" defer></script>
</head>

<body>
    <div class="container d-flex justify-content-center align-items-center flex-column mt-5">
        <h1>Form</h1>
        <a href="index.php">Home</a>
        <form action="execute_form.php" method="post">
            <label class="mt-2" for="firstname">Firstname:</label><br>
            <input type="text" id="firstname" name="firstname"><br>
            <div class="text-center">
                <input class="mt-2" type="submit" value="Submit">
            </div>
        </form>
    </div>
</body>