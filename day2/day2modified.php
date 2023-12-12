<?php

//Create an array that contain values (PHP, HTML, CSS, JavaScript)

$lang = ["php", "html", "css", "javascript"];
echo count($lang)."<br>";

//Print the array elements using loop (2 ways)
 for ($i=0;$i<count($lang);$i++)
 {
     echo $lang[$i]."<br>";
 }

$i = 0;
while ($i < count($lang)) {
    echo $lang[$i] . "<br>";
    $i++;
}


//Create an associative array called Info according to the following -Please add your info-
$info=[
    "Name"=>"Muhammed shabaan Muhammed ",
    "age"=>"32 ",
    "Email"=>"sheboo.radwan@gmail.com",
    "Collage"=>"faculty of science"

];?>
<hr>
<div>
    <div>
       My Information Table

    </div>
    <div>

        <table border="1">

            <tr> <td>Name</td> <td> <?php echo $info['Name']; ?></td>    </tr>
            <tr> <td>Email</td> <td> <?php echo $info['Email']; ?></td> </tr>
            <tr> <td>Age</td> <td> <?php echo $info['age']; ?></td> </tr>
            <tr>  <td>Collage</td> <td> <?php echo $info['Collage']; ?></td> </tr>

        </table>

    </div>
</div>

<div class="row">
    <div class="col-4">
        <form class="row g-3" method="post" action="showdata.php">
            <h3 class="display-3">Please Sign in!</h3>
            <div class="col-12">
                <label class="form-label">First Name</label>
                <input type="text" class="form-control" id="FN" name="fn" required>
            </div>
            <br/>
            <div class="col-12">
                <label  class="form-label">Password</label>
                <input type="text" class="form-control" id="LN" name="ln" required>
            </div>
            <br/>
            <div class="col-12">
                <label  class="form-label">Address</label>
                <textarea class="form-control" name="msg" id="ms" cols="30" rows="10"></textarea>
            </div>
            <br>
            <div class = "col-12">
                <label  class="form-label">city</label>
                <select class="form-control" name="select" id="sel">
                    <option value="Cairo">Cairo</option>
                    <option value="Alex">Alex</option>
                    <option value="Giza" >Giza</option>
                    <option value="Elwadi" selected>Elwadi</option>
                </select>
            </div>
            <br>
            <div class="col-12">
                <label  class="form-label">Gender</label>
                <input type="radio" name="F" value="Male"> Male
                <input type="radio" name="F" value="Female" > Female
            </div>
            <br>
            <div class="col-12">
                <label  class="form-label">Skills</label>
                <input type="checkbox" name="skills[]" value="PHP" checked/><label>PHP</label>
                <input type="checkbox" name="skills[]" value="HTML"/><label>HTML</label>
                <input type="checkbox" name="skills[]" value="CSS" /><label>CSS</label>
                <input type="checkbox" name="skills[]" value="N4" /><label>JS</label>
            </div>
            <br>
            <div class="col-12">
                <button class="btn btn-primary" type="submit">Submit</button>
            </div>
        </form>
    </div>
</div>



