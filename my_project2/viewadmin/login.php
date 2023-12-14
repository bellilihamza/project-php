<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="style.css">

</head>

<style> 
.modal {
        
        position: absolute;
        top: 60%;
        left: 50%;
        transform: translate(-50%, -50%);
        background-color: #fefefe;
        padding: 10px;
        border: 1px solid #ddd;
        border-radius: 10px;
        z-index: 1;
        width: 400px;
        text-align: center;
        background-color: transparent;
        backdrop-filter: blur(10px); 
    }

    .modal-content {
        display: flex;
        flex-direction: column;
        align-items: center;
    }

input[type="text"],input[type="password"],input[type="email"]{

      width: 100%;
      height: 30px;
      border-radius: 20px;
      background-color: transparent;
      color: aliceblue;
      padding: 10px;
      margin: 8px 0;

      padding: 20px;
      margin-top: 15px;
      }
   

    button {
        background-color: #4CAF50;
        color: white;
        padding: 10px;
        margin: 8px 0;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        width: 100%;
    }

    button:hover {
        background-color: #45a049;
    }

    .container {
        padding: 20px;
    }</style>
<body>
    <header>
    <h2><a href="#"class="logo"></a>viva togo</h2>
    <ul>
        <li><a href="index.php">home</a></li>
        <li><a href="">product</a></li>
        <li><a href="">chop</a></li>
        <li><a href="">login</a></li>
    </ul>

    </header>
    <section class="main">
       
    <img src="../image/stars1.webp" alt="" id="stars">
        <img src="../image/moon2.webp" alt="" id="moon">
        <img src="../image/mountains7.webp" id="mountains7" alt="">
        
    </section>
    <div id="id01" class="modal">
  <div id="signUpForm">
  <form class="modal-content animate" action="login_action.php" method="post">
   

    <div class="container">
      <input type="email" placeholder="Enter Username" name="uname" required>

      <input type="password" placeholder="Enter Password" name="psw" required>
        
      <button type="submit">Login</button>
      <button type="button" onclick="showSignInForm()" class="cancelbtn">Create a new account</button>

      
    </div>

    <div class="container" >
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn" style="background-color:red">Cancel</button>
    </div>
  </form>
</div>


  <div id="signInForm">
  <form class="modal-content animat" action="login_action.php" method="post">
  

    <div class="container">
      <input type="text" placeholder="Enter firstname" name="firstname" >
      <input type="text" placeholder="Enter lastname" name="lastname" >
      <input type="text" placeholder="Enter cin" name="cinx" >
      <input type="text" placeholder="Enter phone number" name="number" >
      <input type="email" placeholder="Enter email" name="email" >
      <input type="password" placeholder="Enter password" name="password" >

      <button type="submit">Login</button>

      
    </div>

    <div class="container" >
      <button type="cancel" class="cancelbtn" style="background-color:red">Cancel</button>
    </div>
  </form>
</div>
</div>
<script>
    function showSignInForm() {
      document.getElementById('signUpForm').style.display = 'none';
      document.getElementById('signInForm').style.display = 'block';
    }
</script>
            
    
    
</body>
</html>