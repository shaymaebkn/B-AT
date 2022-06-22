<?php include 'nav.php' ?>
<style><?php include 'auth.css'; ?></style>

 <body style="background-color:black; color:white;">
    <div class="container" id="allsignup">
        
        <form class="container" action="insertclient.php" method="post"  >
            <h2> Registration </h2>
            <!-- <label for="">Name</label> -->
            <input type="text" class="inpu"  name="fname" placeholder="Name" ></input> 
            <br><br>
            <!-- <label for="">lname</label> -->
            <input type="text" class="inpu" name="lname"  placeholder="lname"></input>
            <br><br>
            <!-- <label for="">username</label> -->
            <input type="text" class="inpu" name="username" required value=""  placeholder="username"></input>
            <br><br>
            <!-- <label for="">Number</label> -->
            <input type="num" name="Number" placeholder="Number" ></input>
            <br><br>
            <!-- <label for="">email</label>            -->
            <input type="email" name="email" required value=""  placeholder="email"></input>
            <br><br>
            <!-- <label for="">Country</label>            -->
            <input type="text" name="Country"  placeholder="Country"></input>
            <br><br>
            <!-- <label for="">city</label> -->
            <input type="text" name="City"  placeholder="City"></input>           
            <br><br>
            <!-- <label for="">age</label> -->
            <input type="number" name="Age"  placeholder="Age"></input>           
            <br><br>
            <!-- <label for="">height</label>            -->
            <input type="number" name="height"  placeholder="Height"></input>           
            <br><br>
            <!-- <label for="">weight</label> -->
            <input type="number" name="weight" placeholder="Weight" ></input>
            <br><br>
            <!-- <label for="">weight_goal</label> -->
            <input type="number" name="weight_goal"  placeholder="Weight_goal" ></input>
            <br><br>
            <!-- <label for="">type of coaching</label> -->
            <input type="text" name="type"  placeholder="type of coaching"></input>
            <br><br>
            <!-- <label for="">hours of sleep</label> -->
            <input type="number" name="sleep"  placeholder="hours of sleep"></input>
            <br><br>
            <!-- <label for="">physical activity</label> -->
            <input type="text" name="activ"  placeholder="physical activities"></input>
            <br><br>
            <input type="file" name="picture"  placeholder="your picture"></input>
            <!-- <label for="">Cpassword</label> -->
            <input type="password" name="password" required value=""  placeholder="password"></input>
            <br>
            <input type="submit" value="signup" id="signupbutt" name="submit">

        </form>
        <h3>you already have an account </h3>
        <a href="login.php">login</a>
    </div>