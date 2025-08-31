function checkPassword() {
    let errMsg = document.getElementById("errormsg")
    let pass1 = document.getElementById("pass1").value
    let pass2 = document.getElementById("pass2").value

    if(pass1 !== pass2) {
        errMsg.style.color = "red"
        errMsg.textContent = "Incorrect"
    }else{
        errMsg.textContent = "Correct"
    }
}

document.getElementById("submitbtn").onclick = checkPassword