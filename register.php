
<!DOCTYPE HTML>
<HTML>
    <HEAD>
        <TITLE>Signup_Lost-and-Found</TITLE>
        <link rel="stylesheet" type="text/css" href="css/signup.css">
    </HEAD>
    <body>
        <form>
            <h1>SignUp</h1>
            <input type="text" name="member_type" list="tech" placeholder="Member Type">
            <datalist id="tech">
                <option>FACULTY</option>
                <option>STUDENT</option>
                <option>NON-TEACHING STAFF</option>
                <option>ADMIN</option>
            </datalist>
            <input type="text" name="Username" placeholder="Username">
            <input type="numeric" name="rollno" placeholder="Roll Number">
            <input type="email" name="email" placeholder="Thapar Email">
            <input type="password" name="password" placeholder="Password">
            <input type="password" name="repass" placeholder="Retype Password">
            <button type="submit">SignUp</button>
        </form>
        <script src="SIgnup.php"></script>
    </body>
</HTML>











