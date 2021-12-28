<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="assets/css/style.css" type="text/css">
    </head>
    <body>
        <div class="space">
            <h1 id="create-title">Create Account</h1>

            <form class="acc-creation"> 
                <h4> Your firstname </h4>
                <input id="firstname" type="text" name="firstname" required>
                <h4> Lastname </h4>
                <input id="lastname" type="text" name="lastname" required>
                <h4> Age </h4>
                <input id="gender" type="select" name="gender" required class="choose-gender" required>
                <h4> gender </h4> <select>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
                <option value="X">X</option>
                </select>
                <h4>Description</h4>
                <textarea id="description" name="description"></textarea>
            </form>
            <br>
            <button class="button" id="button-accComplete" onclick="location.href='created.php'">Create Account</button>
        </div>
    </body>
</html>