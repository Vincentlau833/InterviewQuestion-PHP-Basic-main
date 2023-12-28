function verifyInput() {
    var username = document.getElementById("username").value;
    var alertMessageDiv = document.getElementById("alert message");

    var xhr = new XMLHttpRequest();

    //Post request to info.php
    xhr.open("POST", "info.php", true);
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

    //handle response
    xhr.onreadystatechange = function () {
        if (xhr.readyState === 4 && xhr.status === 200) {
            //Update content
            alertMessageDiv.innerHTML = xhr.responseText;
        }
    };
    //send username to info.php
    xhr.send("username=" + encodeURIComponent(username));
}
