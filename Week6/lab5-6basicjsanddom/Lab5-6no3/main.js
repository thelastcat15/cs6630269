window.onload = function () {
    let myForm = document.getElementById("myForm")

    function changeToGreen () {
        this.style.color = "green"
    }

    let inputs = myForm.querySelectorAll("input");
    inputs.forEach(function(input) {
        input.addEventListener("blur", changeToGreen);
    });
}

document.getElementById("submitbtn").onclick = checkPassword