<!DOCTYPE html>
<html>
<body>

<h1>Buat Account Baru!</h1>
<h3>Sign Up Form</h3>

<form>
    <label>
        First Name : <br>
        <br>
        <input type="text" placeholder="Masukan Nama">
    </label>
    <br>
    <br>
    <label>
        Last Name: <br>
        <br>
        <input type="text" placeholder="Masukan Nama Belakang">
    </label>
</form>

<p>Gender:</p>
<form>
    <input type="radio" name="gender" id="male">
    <label for="male">Male</label><br>
    <input type="radio" name="gender" id="female">
    <label for="female">Female</label><br>
    <input type="radio" name="gender" id="other">
    <label for="orher">Other</label><br>
</form>

<p>Nationality:</p>
<select> 
    <option value="indonesian">Indonesian</option> 
    <option value="english">English</option> 
    <option value="australian">Australian</option>
</select>

<p>Language Spoken:</p>
<form>
    <input type="checkbox" name="language spoken" id="bahasa indonesia">
    <label for="bahasa indonesia">Bahasa Indoensia</label><br>
    <input type="checkbox" name="language spoken" id="english">
    <label for="english">English</label><br>
    <input type="checkbox" name="language spoken" id="other">
    <label for="orher">Other</label><br>
</form>

<p>Bio:</p>
<form action="congrats">
    <textarea id="Bio" name="bio" rows="10" cols="40"></textarea>
        <br>
    <input type="submit" value="Sign Up">
      </form>
</form>
</body>
</html>
