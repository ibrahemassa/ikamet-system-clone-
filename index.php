<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./css/styles.css">
  <title>Ikamet</title>
</head>
<body onload="gen_word()">
  <form action="action.php" method="post">
    <label for="name">Name</label>
    <input type="text" name="name" id="name">

    <label for="lname">Last Name</label>
    <input type="text" name="lname" id="lname">

    <label for="doe">Date of birth</label>
    <input type="text" name="doe" id="doe">

    <label for="faname">Father's Name</label>
    <input type="text" name="faname" id="faname">

    <label for="moname">Mother's Name</label>
    <input type="text" name="moname" id="moname">

    <label for="gender">Gender</label>
    <select name="gender" id="gender">
      <option value="male">Male</option>
      <option value="female">female</option>
    </select>

    <label for="idno">Nationality ID Number</label>
    <input type="text" name="idno" id="idno">

    <label for="nationality">Nationality</label>
    <select name="nationality" id="nationality">
      <option value="Syrian">Syrian</option>
      <option value="Turkish">Turkish</option>
      <option value="Other">Other</option>
    </select>

    <label for="passno">The number of the passport</label>
    <input type="text" name="passno" id="passno">

    <label for="commu">Communication Preference</label>
    <select name="commu" id="commu">
      <option value="email">Email</option>
      <option value="phone">Cell phone</option>
    </select>
    
    <label for="email">Email</label>
    <input type="text" name="email" id="email">

    <label for="phone">Cell phone</label>
    <input type="text" name="phone" id="phone">

    <div id="captcha"></div>
    <input type="text" name="captcha" placeholder="Captcha">
    <input type="button" value="Refersh" onclick="gen_word()" id="refresh-btn">

    <input type="submit" value="submit">
    

  </form>
  <script src="captcha.js"></script>
</body>
</html>
