let size = 20

function decrease() {
    size -= 5
    document.getElementById("p1").style.fontSize = size+'px';
}

function increase() {
    size += 5
    document.getElementById("p1").style.fontSize = size+'px';
}

document.getElementById("decrease").onclick = decrease
document.getElementById("increase").onclick = increase