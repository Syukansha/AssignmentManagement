<html>
    
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Lecturer login</title>
</head>
<body>
    <form name="myform" onsubmit="return selectForm();">
        <h1 style="font-weight:normal">MyClass</h1>
        <input type="submit" id="admin-btn" value="Admin" onclick="document.pressed=this.value">
        <input type="submit" id="lecturer-btn" value="Lecturer" onclick="document.pressed=this.value">
        <input type="submit" id="student-btn" value="Student" onclick="document.pressed=this.value"><br>
        <label>Lecturer Name  : </label><input type = "text" name = "username" class = "box"/><br /><br />
        <label>Password  : </label><input type = "password" name = "password" class = "box" /><br/><br />
        <input type="submit" name="submit" id="submit">
    </form>
</body>
</html>
<script>
    function selectForm(){
        if(document.pressed == 'Admin')
        {
        document.myform.action ="index.php";
        }
        else if(document.pressed == 'Lecturer')
        {
            document.myform.action ="lect_login.php";
        }
        else if(document.pressed == 'Student')
        {
            document.myform.action ="student_login.php";
        }
        return true;
    }
</script>