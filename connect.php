<?
$userName = $_POST['userName'];
$userEmail = $_POST['userEmail'];
$userMessage = $_POST['userMessage'];

// Database Connection //
$conn = new mysqli('localhost', 'root', '', 'portfolio_data');
if($conn->connect_error){
    die('Connection Failed : '.$conn->connect_error);
}
else{
$stmt = $conn->prepare("insert into inquiry(userName,userEmail,userMessage)
values(?,?,?)");
$stmt->bind_param("sss", $userName, $userEmail, $userMessage);
$stmt->execute();
echo "information successfully saved";
$stmt->close();
$conn->close();
}
?>

