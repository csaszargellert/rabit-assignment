<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    <?php include 'public/style.css'; ?>
  </style>
  <title>Assignment</title>
</head>
<body>
  <header class="header container">
    <h1 class="title">
      Assignment
    </h1>
  </header>
  <div class="wrapper container">
    <nav>
      <ul class="links">
        <?php  str_contains($_SERVER['REQUEST_URI'], 'advertisements') ? 'active' : ''  ?>
        <!-- <?php  $_SERVER['REQUEST_URI'] === '/rabit/' ? print 'active' : print ''  ?>  -->
        <!-- DINAMICALLY ADDS OR REMOVES 'active' CLASS BASED ON THE URL THE USER IS VISTING -->
        <li><a href="/rabit/" class="link <?php  $_SERVER['REQUEST_URI'] === '/rabit/' ? print 'active' : print ''  ?>" >home</a></li>
        <li><a href="/rabit/users/" class="link <?php  str_contains($_SERVER['REQUEST_URI'], '/rabit/users') ? print 'active' : print ''  ?>">users</a></li>
        <li><a href="/rabit/advertisements/" class="link <?php  str_contains($_SERVER['REQUEST_URI'], '/rabit/advertisements') ? print 'active' : print ''  ?>">advertisements</a></li>
      </ul>
    </nav>
    <main>
    