function loginRedirect() {
    window.location.replace('http://ec2-18-220-233-118.us-east-2.compute.amazonaws.com/SmartHome/grandparents.html');
    window.history.pushState({}, document.title, "/");
}