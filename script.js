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