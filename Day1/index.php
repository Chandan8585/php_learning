<html>
    <style>
    .container{
        display: flex;
        padding: auto;
        border: 2px solid black;
    }
        .form{
            display: flex;
            flex-direction: column;
            height: 80vh;
            width: 80vw;
        }
    </style>
    <body>
        <section class="container">
             <form class="form" action="post.php" method="post">
            <label for="userName" class="name">UserName</label>
            <input name="userName" class="nameInput" type="text"  >
             <label for="email" class="email">Email ID</label>
            <input name="email" class="emailInput" type="email">
             <label for="mobile" class="mobile">Mobile</label>
            <input name="mobile" class="mobileInput" type="number">
            <label for="password" class="password">Password</label>
            <input name="password" class="passwordInput" type="password">
            <button type="submit">Submit</button>
        </form>
        </section>
       </body>
</html>


