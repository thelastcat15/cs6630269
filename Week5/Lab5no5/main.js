function trigger() {
    let data = []

    for (let i=1;i<=3;i++) {
        const col = document.getElementById('col'+i).value
        if (col == undefined) {
            return
        }
        data.push(col)
    }

    var temp_tr = document.createElement("tr")
    for (let i=0;i<3;i++) {
        var temp_td = document.createElement("td")
        temp_td.innerText = data[i]
        temp_tr.appendChild(temp_td)
    }
    document.getElementById('table-show').appendChild(temp_tr)
}

document.getElementById("trigger").onclick = trigger