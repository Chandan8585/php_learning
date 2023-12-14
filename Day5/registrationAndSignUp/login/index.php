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
           .emailError{
            display: none;
           }
             .passwordError{
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
<form class="form" method="POST" action="logged.php">
               <label for="email" class="email">Email ID</label>
               <input name="email" class="emailInput" type="email">
                 <p class="emailError">Fill Correct Email ID</p>
               <label for="password" class="password">Password</label>
               <input name="password" class="passwordInput" type="password">
                 <p class="passwordError">Fill Correct Password</p>
               <button type="submit" name="submit" class="button" >Sign UP</button>
               
           </form>
           <p>Already have an account <span><a href="#">Logged In here</a></span></p>
       </section>
</body>


<script>
    const email = document.querySelector(".emailInput");
const password = document.querySelector(".passwordInput");
// const submitBtn = document.querySelector(".button");
const emailError = document.querySelector(".emailError");
const passwordError = document.querySelector(".passwordError");

email.addEventListener("onChange", ()=>{
    if(email.value.length < 1){
             emailError.classList.remove("emailError");
        emailError.classList.add("ok");
    }
});
password.addEventListener("onChange", ()=>{
    if(password.value.length < 1){
             passwordError.classList.remove("passwordError");
        passwordError.classList.add("ok");
    }
})
</script>
</html>


