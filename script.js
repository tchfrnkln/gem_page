const clickTo = (amtsm, amtbg, amtxl) =>{
    var scr = window.screen.width
    if(scr < 1000){
        window.scrollTo(0, amtsm)
    }else{
        if (!(scr > 1200)) {
            window.scrollTo(0, amtbg)
        }else{
            window.scrollTo(0, amtxl)
        }
    }
}


var close = document.querySelector("#close")
    var form = document.querySelector("#form")
    var payNow = document.querySelectorAll("#payNow")

    close.addEventListener("click", ()=>{
        form.classList.toggle("hidden")
    })

    payNow.forEach(nw => {
        nw.addEventListener("click", ()=>{
            form.classList.toggle("hidden")
        })
    });