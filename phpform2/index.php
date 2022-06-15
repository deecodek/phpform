<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css" class="css">
  <title>Document</title>
</head>
<body>
  
  <div class="login-page">
    
    <div class="form">
      <H1>Book Your Session</H1>
      <form class="login-form" action="phptoemail.php" method="post">
        <input type="text"name="name" placeholder="Name"/>
        <input type="text"name="contact" placeholder="Contact" maxlength="10"/>
        <input type="email"name="email" placeholder="E-mail"/>
        <input type="text"name="city" placeholder="City"/>
        <input type="text"name="zip" placeholder="Zip Code" maxlength="6"/>
        <input type="datetime-local" name="dt" >
        <h2>Select Services</h2>


        <input type="checkbox" name="projects[]" value="Service 1">
        <label for="type1">Service 1</label>
        <input type="checkbox" name="projects[]" value="Service 2">
        <label for="type2">Service 2</label>
        <input type="checkbox" name="projects[]" value="Service 3">
        <label for="type3">Service 3</label> 
<br>
<br>
<input type="submit" value="Submit">
        
      </form>
    </div>
  </div>
</body>
</html>