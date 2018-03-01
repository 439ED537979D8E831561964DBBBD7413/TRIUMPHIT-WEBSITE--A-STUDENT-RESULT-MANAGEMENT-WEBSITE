<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>MUHAIMINUR RAHMAN</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900|Quicksand:400,700" rel="stylesheet" />
<link href="srm_css/default.css" rel="stylesheet" type="text/css" media="all" />
<link href="srm_css/fonts.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="srm_css/style.css">

<style>
 type="text/css">
.form-style-5{
    max-width: 500px;
    padding: 10px 20px;
    background: #f4f7f8;
    margin: 10px auto;
    padding: 20px;
    background: #f4f7f8;
    border-radius: 8px;
    font-family: Georgia, "Times New Roman", Times, serif;
}
.form-style-5 fieldset{
    border: none;
}
.form-style-5 legend {
    font-size: 1.4em;
    margin-bottom: 10px;
}
.form-style-5 label {
    display: block;
    margin-bottom: 8px;
}
.form-style-5 input[type="text"],
.form-style-5 input[type="date"],
.form-style-5 input[type="datetime"],
.form-style-5 input[type="email"],
.form-style-5 input[type="number"],
.form-style-5 input[type="search"],
.form-style-5 input[type="time"],
.form-style-5 input[type="url"],
.form-style-5 textarea,
.form-style-5 select {
    font-family: Georgia, "Times New Roman", Times, serif;
    background: rgba(255,255,255,.1);
    border: none;
    border-radius: 4px;
    font-size: 16px;
    margin: 0;
    outline: 0;
    padding: 7px;
    width: 100%;
    box-sizing: border-box; 
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box; 
    background-color: #e8eeef;
    color:#8a97a0;
    -webkit-box-shadow: 0 1px 0 rgba(0,0,0,0.03) inset;
    box-shadow: 0 1px 0 rgba(0,0,0,0.03) inset;
    margin-bottom: 30px;
    
}
.form-style-5 input[type="text"]:focus,
.form-style-5 input[type="date"]:focus,
.form-style-5 input[type="datetime"]:focus,
.form-style-5 input[type="email"]:focus,
.form-style-5 input[type="number"]:focus,
.form-style-5 input[type="search"]:focus,
.form-style-5 input[type="time"]:focus,
.form-style-5 input[type="url"]:focus,
.form-style-5 textarea:focus,
.form-style-5 select:focus{
    background: #d2d9dd;
}
.form-style-5 select{
    -webkit-appearance: menulist-button;
    height:35px;
}
.form-style-5 .number {
    background: #1abc9c;
    color: #fff;
    height: 30px;
    width: 30px;
    display: inline-block;
    font-size: 0.8em;
    margin-right: 4px;
    line-height: 30px;
    text-align: center;
    text-shadow: 0 1px 0 rgba(255,255,255,0.2);
    border-radius: 15px 15px 15px 0px;
}

.form-style-5 input[type="submit"],
.form-style-5 input[type="button"]
{
    position: relative;
    display: block;
    padding: 19px 39px 18px 39px;
    color: #FFF;
    margin: 0 auto;
    background: #1abc9c;
    font-size: 18px;
    text-align: center;
    font-style: normal;
    width: 100%;
    border: 1px solid #16a085;
    border-width: 1px 1px 3px;
    margin-bottom: 10px;
}
.form-style-5 input[type="submit"]:hover,
.form-style-5 input[type="button"]:hover
{
    background: #109177;
}
</style>
</head>
<body>
    <div id="header-wrapper">
    <div id="header" class="container">
        <div id="logo">
            <h1><a href="student_result_management.html">MUHAIMINUR RAHMAN</a></h1>
            <div id="menu">
                <ul>
                    <li class="current_page_item"><a href="newstudent.php" accesskey="1" title="">NEW STUDENT</a></li>
                    <li><a href="newsubject.php" accesskey="2" title="">NEW SUBJECT</a></li>
                    <li><a href="newexam.php" accesskey="2" title="">NEW EXAM</a></li>
                    <li><a href="transcript.php" accesskey="2" title="">NEW TRANSCRIPT</a></li>
                    <li><a href="resultsubmit.php" accesskey="3" title="">INSERT RESULT</a></li>
                    <li><a href="resultlist.php" accesskey="4" title="">SHOW RESULT</a></li>
                    <li><a href="search.php" accesskey="6" title="">SEARCH</a></li>
                </ul>
            </div>

        </div>
    </div>
</div>

<div id="page-wrapper">
    <div id="page" class="container">
        <div class="title">

            <?php 
//load database connection
    // $host = "localhost";
    // $user = "root";
    // $password = "";
    // $database_name = "cv";
    $servername = "localhost";
$username = "triutvka_abir";
$password = "01672001715";
$dbname = "triutvka_cv";
    $pdo = new PDO("mysql:host=$host;dbname=$database_name", $user, $password, array(
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ));
// Search from MySQL database table
$search=$_POST['search'];
$query = $pdo->prepare("select * from studentinfo where name LIKE '%$search%' OR role LIKE '%$search%'  LIMIT 0 , 10");
$query->bindValue(1, "%$search%", PDO::PARAM_STR);
$query->execute();
// Display search result
         if (!$query->rowCount() == 0) {
                echo "Search found :<br/>";
                echo "<table style=\"font-family:arial;color:#333333;\">";  
                echo "<tr><td style=\"border-style:solid;border-width:1px;border-color:#98bf21;background:#98bf21;\">NAME</td><td style=\"border-style:solid;border-width:1px;border-color:#98bf21;background:#98bf21;\">ROLL</td><td style=\"border-style:solid;border-width:1px;border-color:#98bf21;background:#98bf21;\">ROLL</td></tr>";               
            while ($results = $query->fetch()) {
                echo "<tr><td style=\"border-style:solid;border-width:1px;border-color:#98bf21;\">";            
                echo $results['id'];
                echo "</td><td style=\"border-style:solid;border-width:1px;border-color:#98bf21;\">";
                echo $results['name'];
                echo "</td><td style=\"border-style:solid;border-width:1px;border-color:#98bf21;\">";
                echo "$".$results['role'];
                echo "</td></tr>";              
            }
                echo "</table>";        
        } else {
            echo 'Nothing found';
        }
?>
    <a href="updateform.php" class="myButton">UPDATE</a>

        </div>
    </div>
</div>
    
</body>
</html> 

