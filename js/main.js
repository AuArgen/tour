function getDates(x) {
    let getDate = new Date()
    let minute = getDate.getMinutes()
    let second = getDate.getSeconds()
    let hourse = getDate.getHours()
    let allSeconds = second + minute*60 + hourse * 3600
    let overSeconds = allSeconds + x * 60
    let allRez = [second, minute, hourse, allSeconds, overSeconds]
    return allRez
}
function showDate() {
    if (localStorage.getItem("akBuuraDate")) {
       let objects = JSON.parse(localStorage.getItem("akBuuraDate"))
       let ans = ``
       for(let i = 0; i < objects.length; i++) {
            let date = getDates(0)
            let overs = +objects[i][7] - date[3]
            let status = ""
            if (+objects[i][9] == 0) {
                overTime = objects[i][5]
                status = `<button class="btn btn-primary" onclick="startGame(${i})">Баштоо</button>`
            } 
            else {
                if (overs <= 0) {
                    overTime = "00:00"
                    status = `<span style="color:green">Аяктаган</span>`
                } else {
                    overTime = Math.floor(overs/60) + ":" + overs%60
                    status = `<span style="color:gold">Жүрүп жатат</span>`
                }
            }
            ans += 
            `
            <tr>
                <td class="text-white">
                    ${i+1}
                </td>
                <td class="text-white">
                    ${objects[i][0]}
                </td>
                <td class="text-white">
                    ${objects[i][3]}
                </td>
                <td class="text-white">
                    ${objects[i][1]}
                </td>
                <td class="text-white">
                    ${objects[i][2]}
                </td>
                <td class="text-white">
                    ${objects[i][4]}
                </td>
                <td class="text-white">
                    ${overTime}
                </td>
                <td class="text-white">
                    ${+objects[i][6]}сом
                </td>
                <td class="text-white">
                    ${status}
                </td>
                <td class="text-white">
                    <button class="btn btn-danger" onclick="deleteGame(${i})"> X </button>
                </td>
            </tr>
            `
       }
       document.querySelector("tbody").innerHTML = ans
    }
    console.log(new Date()) 
}
function startGame(x) {
    if (localStorage.getItem("akBuuraDate")) {
        objects = JSON.parse(localStorage.getItem("akBuuraDate"))
        let date = getDates(+objects[+x][2])
        objects[+x][7] = date[4]
        objects[+x][8] = "Жүрүүдө"
        objects[+x][9] = 1
        localStorage.setItem("akBuuraDate",JSON.stringify(objects))
        showDate()
    }
}

function deleteGame(x) {
    if (localStorage.getItem("akBuuraDate")) {
        let objects = JSON.parse(localStorage.getItem("akBuuraDate"))
        objects.splice(+x,1)
        localStorage.setItem("akBuuraDate",JSON.stringify(objects))
        showDate()
    }
}
function addPlay() {
    let select = (document.querySelector("select").value).split("@#$$#@")
    let inputs = document.querySelectorAll("input")
    if( inputs[1] == undefined) inputs[1].value = "Жаңы кардар."
    let date = getDates(+select[1])
    let overTime = date[4] - date[3]
    let game = [
        select[2] + "<br>" + inputs[1].value, //0
        select[0], //1
        select[1], //2
        inputs[0].value, //3
        date[2] + ":" + date[1] + ":" + date[0], //4 
        Math.floor(overTime/60) + ":" + overTime%60, //5 
        +select[0] * +inputs[0].value, //6
        date[4], //7
        "Баштоо", //8
        0] //9
    let objects = []
    if (localStorage.getItem("akBuuraDate")) {
        objects = JSON.parse(localStorage.getItem("akBuuraDate"))
    }
    inputs[0].value = 1
    inputs[1].value = ""
    objects.push(game)
    localStorage.setItem("akBuuraDate",JSON.stringify(objects))
    showDate()
}

window.onload = () => {
    function timerOut() {
        showDate()
        setTimeout(timerOut,900)
    }
    timerOut()
}