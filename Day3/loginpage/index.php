
<?php
$servername = "localhost";
$username = "zupzuptektestnet_Abhishek";
$password = "Chandan@123";
$dbname = "zupzuptektestnet_loginForm";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];

    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    $stmt = $conn->prepare("SELECT * FROM users WHERE email=?");
    $stmt->bind_param("s", $email);
    $stmt->execute();

    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        echo "Email already exists. Please choose a different email.";
    } else {
        // Insert new user into the database
        $stmt = $conn->prepare("INSERT INTO users (`email`, `password`) VALUES (?, ?)");
        $stmt->bind_param("ss", $email, $hashedPassword);
        $stmt->execute();

        if ($stmt->error) {
            echo "Error: " . $stmt->error;
        } else {
            echo "Signup successful!";
        }
    }

    $stmt->close();
}

$conn->close();
?>






<html>
    <style>
        :root{
            --primary-color: lightgreen;
            --white-color: white;
            
        }
        *{
            padding: 0;
            margin: 0;
            box-sizing: border-box;
            font-size: 1rem;
            border-radius: 5px;
       }
       
       body{
            background-color: black;
            color: white;
            
       }
           .container {
               display: flex;
               flex-direction: column;
               justify-content: center;
               align-items: center;
               padding: 50px;
               height: 80vh;
               width: 80vw;
               border: 2px solid var(--primary-color);
               margin: 5vh auto;
           }
           label{
            margin: 0 auto;
            height: 2rem;
            font-size: 1.5rem;
          
           }
           input{
            height: 3rem;
            margin: 1rem 2rem;
        
           }
           .form {
               display: flex;
               flex-direction: column;
              width: 100%;
              height: 100%;
              padding: 2rem;
           }
       
           .button {
                font-size: 1.5rem;
            
                 width: 95%;
                margin-left: 1.7rem;
                background-color: var(--primary-color);
                color: black;
                height: 3rem;
           }
           .hide{
            display: none;
           }
           .success{
            position: relative;
            z-index: 10;
            height: 80rem;
            width: 100rem;
            
           }
            .heading{
                font-size: 2rem;
                font-weight: bold;
                color: var(--primary-color);
            }
          a{
                color: lightgreen;
         }
       </style>
</head>
<body>
        <section class="container">
           <h1 class="heading">Login Page</h1>
<form class="form" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
               <label for="email" class="email">Email ID</label>
               <input name="email" class="emailInput" type="email">
               <label for="password" class="password">Password</label>
               <input name="password" class="passwordInput" type="password">
               <button type="submit" class="button" >Login</button>
               
           </form>
           <p>Don't have an account <span><a href="">Sign Up here</a></span></p>
       </section>
       <div class="hide ">
       <h1>success Page</h1>
       </div>
</body>


<script>
    const email = document.querySelector(".emailInput");
const password = document.querySelector(".passwordInput");
const submitBtn = document.querySelector(".button");
const successDiv = document.querySelector(".hide");
function handleSubmit(e){
    e.preventDefault();
    if(email.value.length > 0 && password.value.length >0){
        console.log({"email": email.value, "password": password.value});
        
        successDiv.classList.remove("hide");
        successDiv.classList.add("success");
    }

}
submitBtn.addEventListener("click", handleSubmit);
</script>
</html>















