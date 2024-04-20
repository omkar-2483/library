<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Library Management System</title>
    <link rel="stylesheet" type="text/css" href="style.css" />

    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"
    />

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>
      header {
    height: 13vh;
    width: 100vw;
    background-color: black;
    padding: 10px;
}
      nav {
        float: right;
        word-spacing: 30px;
        padding: 20px;
    }
    
    nav li {
        display: inline-block;
        line-height: 80px;
    }
    
    .logo img {
        float: left;
        padding: 10px;
        height: 100px;
        filter: invert(100%);
    } 
    </style>
  </head>
  <body>
    <div class="wrapper">
      <header>
        <div class="logo">
          <img src="images/logo.png" alt="library logo" />
        </div>
        <nav>
          <ul>
            <li><a href="index.html">HOME</a></li>
            <li><a href="student_login.html">STUDENT_LOGIN</a></li>
            <li><a href="registration.html">REGISTRATION</a></li>
            <li><a href="books.html">BOOKS</a></li>
            <li><a href="">ABOUT</a></li>
            <li><a href="">FEEDBACK</a></li>
          </ul>
        </nav>
      </header>

      <section>
        <div class="box">
          <h1>Welcome to Library</h1>
        </div>
        <video src="videos/bgvdo.mp4" autoplay loop muted></video>
      </section>

      <footer>
        <p style="text-align: center">
          <br />
          Contact: bookhouse@libary.com <br />
          <br />
          Email: kastureomkar03@gmail.com<br />
          <br />
          Mobile: +91 XXXXXXXXXXX
        </p>
      </footer>
    </div>
  </body>
</html>
