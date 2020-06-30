<!DOCTYPE html>

<html>
    <head>
        <title> Buat Account Baru! </title>
    </head>

    <form action="/welcome" method = "POST"> 
        @csrf 
        <h1> Buat Account Baru! </h1>
        
        <h3> Sign Up Form </h3>

        <label for="fname"> Fist Name: </label> <br><br>
        <input type="text" name="fname" id="fname"> <br><br>

        <label for="lname"> Last Name: </label> <br><br>
        <input type="text" name="lname" id="lname"> <br>

        <p> Gender : </p>
        <input type="radio" id="male" name="gender" value="male">
        <label for="male"> Male </label> <br>
        <input type="radio" id="female" name="gender" value="female">
        <label for="female"> Female </label> <br>
        <input type="radio" id="othergend" name="gender" value="othergend">
        <label for="othergend"> Other </label> <br>

        <p> Nationality </p>
        <select name="nationality">
            <option value="Indonesian"> Indonesian </option>
            <option value="Malaysian"> Malaysian </option>
            <option value="Indian"> Indian </option>
        </select>

        <p> Language Spoken : </p>
        <input type="checkbox" id="bindo" name="language" value="bindo">
        <label for="bindo"> Bahasa Indonesia </label> <br>
        <input type="checkbox" id="bing" name="language" value="bing">
        <label for="bing"> English </label> <br>
        <input type="checkbox" id="other" name="language" value="other">
        <label for="other"> Other </label> <br>

        <p> Bio: </p> <br>
        <textarea name="bio" rows="10" cols="50"></textarea> <br><br>

        <input type="submit" value="Sign Up">
    </form>

</html>