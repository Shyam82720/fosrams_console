var currentUrlSA = window.location.href;

if (currentUrlSA.includes("valueSA=Completed")) {
    document.getElementById("myLink4").classList.add("underline-text");
}
else if (currentUrlSA.includes("valueSA=Approved")) {
    document.getElementById("myLink2").classList.add("underline-text");
}
else if (currentUrlSA.includes("valueSA=Rejected")) {
    document.getElementById("myLink3").classList.add("underline-text");
}
else if(currentUrlSA.includes("valueSA=Pending")){
    document.getElementById("myLink1").classList.add("underline-text");
}
else{
    document.getElementById("myLink1").classList.add("underline-text");
}


