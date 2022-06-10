<?php include 'nav.php' ?>

<body>
    <h2> Registration </h2>
        <form class="" action="login1.php" method="POST"  >
        <div>
        <button>coach </button>
        <input type="radio" name="user" value="coach">
        <button> coaché </button>
        <input type="radio" name="user" value="coaché">
        </div><br>
        <label for="">email</label>
        <input type="email" name="email" required value=""></input>
        
        <label for="">Cpassword</label>
        <input type="password" name="password" required value=""></input>

        <input type="submit" name="submit">

</form>