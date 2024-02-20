<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anamika's Website</title>
    <style>
        body {
            background: linear-gradient(135deg, #ffd700, #ffb6b9);
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        .header {
            background-color: white;
            width: 100%;
            padding: 20px 0;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .logo {
            padding: 0 20px;
            font-size: 24px;
            font-weight: bold;
            color: #ff6b6b;
        }
        .label {
            background-color: white;
            padding: 15px;
            border-radius: 10px;
            margin-top: 20px;
            text-align: center;
            font-size: 24px; 
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .hello-text {
            font-size: 24px;
            font-weight: bold;
            text-align: center;
            margin-bottom: 10px;
            color: #ffd700;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
        }
        .info-container {
            display: flex;
            align-items: center;
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-top: 20px;
        }
        .image-container {
            margin-right: 20px;
        }
        img {
            border-radius: 50%;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-bottom: 10px;
            display: block;
        }
        .text-container {
            flex-grow: 1;
        }
        h1, h2, h3 {
            text-align: center;
            color: #ff6b6b;
            font-size: 22px; 
        }
        p {
            color: #4b4b4b;
            font-size: 18px; 
            text-align: center;
            margin-bottom: 10px;
        }
       
        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }
        .fadeIn {
            animation: fadeIn 1s ease-in-out;
        }
        .box {
            background-color: white;
            border-radius: 10px;
            padding: 20px;
            margin-top: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
            font-size: 18px; 
        }
        button {
            background-color: #ff6b6b;
            color: white;
            padding: 12px 24px;
            border: none;
            border-radius: 5px;
            font-size: 18px;
            cursor: pointer;
        }
        button:hover {
            background-color: #e64a4a;
        }
        .box-container {
            display: flex;
            justify-content: center; 
            margin-top: 20px;
        }
        .box {
            background-color: white;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
            margin: 0 10px; 
            font-size: 18px; 
        }

        #story-container {
            background-color: white;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-top: 20px;
            text-align: center;
            font-size: 18px; 
        }

        #sports-box {
            background-color: white;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-top: 20px;
            text-align: center;
            font-size: 18px;
        }
         #annahobby-box {
            background-color: white;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-top: 20px;
            text-align: center;
            font-size: 18px;
        }
        
         #birthday-box {
            background-color: white;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-top: 20px;
            text-align: center;
            font-size: 18px;
        }
        
        #course-box {
            background-color: white;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-top: 20px;
            text-align: center;
            font-size: 18px;
			
         .php-box {
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            margin-top: 20px;
            text-align: center;
            font-size: 18px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            color: #ff6b6b;
        }
		 .text-container {
        background-color: white;
        border-radius: 10px;
        padding: 20px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        margin-top: 20px;
        text-align: center;
        font-size: 18px;
    }
		
    </style>

    <script>
   document.addEventListener("DOMContentLoaded", function() {
        document.getElementById("course").innerHTML = "Anna's second course choice is BS Pharmacy";
    });
   function myDisplayer(something) {
            document.getElementById("birthday").innerHTML = "This february 10, i will be turning  " + something;
        }

        function myBirthday(num1, num2, myCallback) {
            let sum = num1 + num2;
            myCallback(sum);
        }

        document.addEventListener("DOMContentLoaded", function() {
            myBirthday(10, 10, myDisplayer);
        });
    
        document.addEventListener("DOMContentLoaded", function() {
            function myFunction() {
                let likesIceCream = true;
                if (likesIceCream) {
                    document.getElementById("magic").innerHTML = "Anna likes ice creams!";
                } else {
                    document.getElementById("magic").innerHTML = "Anna doesn't like ice creams!";
                }
            }
            function myArray() {
                const flavor = ["chocolate", "cottoncandy", "caramel"];
                const randomFlavor = flavor[Math.floor(Math.random() * flavor.length)];
                document.getElementById("yummy").innerHTML = "Anna's favorite flavor is: " + randomFlavor;
            }

            function displayCurrentDate() {
                const currentDate = new Date();
                document.getElementById("currentDateUTC").innerHTML = currentDate.toUTCString();
            }
            function showAlert() {
                alert('Embrace the strength in your laughter, for its the anthem of a joyous spirit—where resilience meets happiness with a grin😊💕');
            }
            const person = {
                lastName: " Nepomuceno",
                city: " Makati",
                zodiac: " Aquarius"
            };

            const storyText = "Anamika" + person.lastName + " was born in" + person.city + " on February 10, 2004, which her zodiac is" + person.zodiac;

            document.getElementById("story").textContent = storyText;

            class Sports {
                constructor(name) {
                    this.name = name;
                }
            }

            const mySports1 = new Sports("Arnis martial arts");
            const mySports2 = new Sports("Table tennis");

            document.getElementById("sports").innerHTML =
                "In my junior high school year, I used to play " + mySports1.name + " and " + mySports2.name;

            function myFunction() {
  let HobbyName = "draw, watch series and movies and tiktok ";
  let text = "Anna likes to " + HobbyName;  
  document.getElementById("annahobby").innerHTML = text;
}

myFunction();
});
    </script>
</head>
<body>
    <div class="header">
        <div class="logo">annamics</div>
    </div>

    <h1 class="label fadeIn"> ✧･ﾟ『Know more about me!』･✧･ﾟ</h1>
    <div class="info-container fadeIn">
        <div class="image-container">
            <img src="annapic.png" alt="anna" width="150px" height="150px">
        </div>
        <div class="text-container">
            <p class="hello-text">HELLO THERE!</p>
            <p><b>Fullname:</b> Anamika Nepomuceno</p>
            <p><b>Nickname:</b> Anna</p>
            <p><b>Age:</b> 19</p>
        </div>
    </div>
    <p><b><u>Hobbies:</b></u> My hobbies are watching gameplay, following new technology trends, and watching series.
        <br> I also consider working in my organization as a hobby since I don’t have many hobbies.<br> Lastly, I like
        to walk around Makati for exercise and doing crochet.</p>
    <p><b><u>Goal in life: </b></u> I aim to finish college and work in a big company where I will be a cyber security.
        Also, live in another country and have a stable life.</p>
    <p><b><u>Dreams wish to fulfill: </b></u> My dream is to be a successful person who can help my mother and sister
        have a better life<br> and live in a better country. It also helps many students learn new tech information
        and innovation.</p>
    <h2 class="label fadeIn">✧･ﾟ『SCHOOL INFORMATION』✧･ﾟ</h2>
    <p><u><b>Senior HighSchool Graduated:</b></u> Asia Pacific College</p>
    <p><u><b>College:</b></u> Asia Pacific College</p>
    <p><u><b>Scholarship:</b></u> Public School Graduate (50% Tuition Fee)</p>
    <p><u><b>Course:</b></u> Bachelor of Science in Information Technology Specializing in Mobile and internet Technology
    </p>
    <p><u><b>Why did you choose this course: </b></u> When I was in Grade 9, I got interested in programming because
        of the ICT subject where we studied Visual Basic, and I got high grades.My teacher recommended this
        course since I am not sure what course I will take,<br> and that’s why I have decided to take this in SHS where I
        started my specialization in I.T. in STEM at Asia Pacific College.
    </p>
    <p><u><b>I.T Experience: Programming / Other: </b></u> My first programming language was Visual Basic and HTML,
        which we learned in my grade 9 days.<br> Then, I started learning CSS, J.S., JAVA and more in my senior year,
        where we studied it in our programming subjects.</p>
    <h2 class="label fadeIn">⋆.ೃ࿔*:･『OTHER INTERESTING ASPECT OF MY LIFE』･࿔*:･ﾟ</h2>
    <p><b>I have been working on an organization in APC named APC-Microsoft Community for <br> four years since
            senior high school. I have already done many events and talks where I<br> teach students about Microsoft
            apps and how to use them. I have been in several<br> significant events organized by Microsoft and
            volunteered in tech-related events</b></p>
    <br>
  
    <h3><b><center>⋆.ೃ࿔*:･ﾟ『PICTURES BEHIND ANNA'S LIFE』⋆.ೃ࿔ </center> </b></h3>
    <center><img src="itsanna.jpg" alt="about anna" width="500px" class="fadeIn"></center>
    <br>
    <button onclick="showAlert()">CLICK FOR A SUPRISE</button>
    <br>
    <br>
    <div class="box-container fadeIn">
        <div class="box">
            <p id="magic"><b>WANNA KNOW WHAT'S ANNA'S FAVORITE FOOD?</b></p>
            <button type="button" onclick="myFunction()">YES, SHOW ME!</button>
        </div>

        <div class="box">
            <p id="yummy"><b>WANNA KNOW WHAT'S ANNA'S FAVORITE FLAVOR??</b></p>
            <button type="button" onclick="myArray()">YES, SURPRISE ME!</button>
        </div>
    </div>
	<br>
    <br>
<div class="text-container">
    <h2>Anna likes to play games like pokemon unite and pubg</h2>
</div>

<div class="text-container">
    <?php
    $txt1 = "baby sister who turned ";
    $x = 3;
    $y = 2;

    echo "Anna have a " . $txt1;
    echo $x + $y;
    ?>
</div>

<div class="text-container">
    <?php
    function myFavgames() {
      echo "Anna's favorite games are The Plague tale, Pokemon and The last of us";
    }

    myFavgames();
    ?> 
</div>

<div class="text-container">
    <?php
    $str = "My height is 5'7";
    $pattern = "/5'7/i";
    echo preg_replace($pattern, 5, $str);
    ?>
</div>

<br>
<br>
    <br>
    <div class="box fadeIn">
        <p><b>OH NO! WHAT TIME IS IT?</b></p>
        <button type="button" onclick="displayCurrentDate()">SHOW ME THE TIME</button>
        <center><p id="currentDateUTC"></p></center>
    </div>

    <br>
    <br>
	
<?php
$name = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = test_input($_POST["name"]);
  $email = test_input($_POST["email"]);
  $website = test_input($_POST["website"]);
  $comment = test_input($_POST["comment"]);
  $gender = test_input($_POST["gender"]);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h2>PHP Form Validation </h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Name: <input type="text" name="name">
  <br><br>
  E-mail: <input type="text" name="email">
  <br><br>
  Website: <input type="text" name="website">
  <br><br>
  Comment: <textarea name="comment" rows="5" cols="40"></textarea>
  <br><br>
  Gender:
  <input type="radio" name="gender" value="female">Female
  <input type="radio" name="gender" value="male">Male
  <input type="radio" name="gender" value="other">Other
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>

<?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $website;
echo "<br>";
echo $comment;
echo "<br>";
echo $gender;
?>

<br>
<br>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") 
{

// For Xampp Localhost
//$servername = "localhost";
//$username = "root";
//$password = "";
//$dbname = "myDB";

// For socitcloud
$servername = "localhost";
$username = "webprogmi221";
$password = "g_6bCitLu.ljMK*m";
$dbname = "webprogmi221";



// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO annepomuceno_myguests (name, email,website,comment,gender)
VALUES ('$name', '$email','$website','$comment','$gender')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
}
?>
	
	<br>
<br>
	
</body>
</html>
