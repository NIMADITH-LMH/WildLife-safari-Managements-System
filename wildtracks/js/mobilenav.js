function popupmenu() {
    document.getElementById("mobile-nav").classList.toggle("popupmenu");
    if (document.getElementsByTagName("body")[0].style.overflowY === "hidden") {
        document.getElementsByTagName("body")[0].style.overflowY = "visible";
    }
    else {
        document.getElementsByTagName("body")[0].style.overflowY = "hidden";
    }
}
