function loginRedirect(){
    $.post('http://ec2-18-220-233-118.us-east-2.compute.amazonaws.com/SmartHome/login.php');
    document.location.href = 'http://ec2-18-220-233-118.us-east-2.compute.amazonaws.com/SmartHome/login.php';
}