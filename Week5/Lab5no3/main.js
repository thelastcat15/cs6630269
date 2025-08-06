function calculate() {
    var num1 = document.getElementById('num1').value
    var num2 = document.getElementById('num2').value
    var num3 = document.getElementById('num3')

    num3.value = parseInt(num1) + parseInt(num2)
}

document.getElementById("calculate").onclick = calculate