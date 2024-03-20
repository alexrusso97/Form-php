function validateForm() {
    var companyName = document.forms["myForm"]["companyName"].value;
    var name = document.forms["myForm"]["name"].value;
    var email = document.forms["myForm"]["email"].value;
    var number = document.forms["myForm"]["number"].value;
    var service = document.forms["myForm"]["service"].value;

    if (companyName == "" || name == "" || email == "" || number == "" || service == "") {
        alert("All fields must be filled out");
        return false;
    } else {
        document.getElementById("confirmation").style.display = "block";
        return true;
    }
}