function updatedatefields() {
    document.getElementById("check_out-date").disabled = false;
    let check_in = document.getElementById("check_in-date").value;
    document.getElementById("check_out-date").min = check_in;
}

function updatedatefieldsinform() {
    document.getElementById("check_outdate").disabled = false;
    let check_in = document.getElementById("check_indate").value;
    document.getElementById("check_outdate").min = check_in;
}