function validateForm1() {
    let name = document.getElementById("name1").value.trim();
    let age = document.getElementById("age1").value.trim();

    if (name === "") {
        alert("Form 1: Name is required!");
        return false;
    }
    if (age === "" || isNaN(age)) {
        alert("Form 1: Age must be a number!");
        return false;
    }
    alert("Form 1 submitted successfully!");
    return true;
}

let form2 = document.getElementById("form2");

form2.addEventListener("submit", function(e){
    if (!this.reportValidity()) {
        e.preventDefault();
        return;
    }
    alert("Form 2 submitted successfully!");
});
