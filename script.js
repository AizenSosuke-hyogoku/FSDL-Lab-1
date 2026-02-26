// FORM VALIDATION
document.getElementById("regForm").addEventListener("submit", function(e){

    e.preventDefault();

    let username = document.getElementById("username").value.trim();
    let email = document.getElementById("email").value.trim();
    let phone = document.getElementById("phone").value.trim();
    let password = document.getElementById("password").value.trim();
    let confirmPassword = document.getElementById("confirmPassword").value.trim();

    // All fields mandatory
    if(username === "" || email === "" || phone === "" || password === "" || confirmPassword === ""){
        alert("All fields are mandatory!");
        return;
    }

    // Phone Validation
    let phoneRegex = /^[0-9]{10}$/;
    if(!phoneRegex.test(phone)){
        alert("Phone number must be 10 digits!");
        return;
    }

    // Email Validation
    let emailRegex = /^[A-Za-z]+@[A-Za-z]{3}\.[A-Za-z]{2,3}$/;
    if(!emailRegex.test(email)){
        alert("Invalid Email Format!");
        return;
    }

    // Password Validation
    let passRegex = /^(?=.*[A-Z])(?=.*[0-9])(?=.*[&,$,#,@]).{7,}$/;
    if(!passRegex.test(password)){
        alert("Password must contain 1 Capital, 1 Digit, 1 Special (&,$,#,@) and min 7 chars!");
        return;
    }

    // Confirm Password
    if(password !== confirmPassword){
        alert("Passwords do not match!");
        return;
    }

    document.getElementById("output").innerHTML = "Registration Successful!";
    document.getElementById("output").style.color = "green";
});


// DOM MANIPULATION

// Change Image Source
document.getElementById("changeImageBtn").onclick = function(){
    document.getElementById("myImage").src = "https://via.placeholder.com/200";
};

// Add Text Node
document.getElementById("addTextBtn").onclick = function(){
    let newText = document.createTextNode("Welcome to Web Technologies Lab!");
    document.body.appendChild(newText);
};

// Delete Node
document.getElementById("deleteNodeBtn").onclick = function(){
    let img = document.getElementById("myImage");
    img.parentNode.removeChild(img);
};


// Using getElementsByClassName
let inputs = document.getElementsByClassName("inputField");
for(let i=0; i<inputs.length; i++){
    inputs[i].style.border = "1px solid blue";
}


// Using getElementsByTagName
let buttons = document.getElementsByTagName("button");
for(let i=0; i<buttons.length; i++){
    buttons[i].style.margin = "5px";
}


// =====================
// jQuery Section
// =====================

// Change Button Text
$("#submitBtn").click(function(){
    $(this).text("Submitting...");
});

// Set Background Image
$("body").css("background-image", "url('https://via.placeholder.com/800x600')");

// Access Form Data
$("#regForm").submit(function(){
    let user = $("#username").val();
    console.log("Username using jQuery: " + user);
});

// Add Attribute using jQuery
$("#username").attr("placeholder", "Enter your name");


// AJAX Example
$.ajax({
    url: "https://jsonplaceholder.typicode.com/posts/1",
    method: "GET",
    success: function(data){
        console.log("Ajax Response:", data);
    }
});