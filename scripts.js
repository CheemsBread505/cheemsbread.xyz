console.log("Why are you looking at the console?...");

// toggleText
function toggleText() {
    var linkElement = document.getElementById("link");
    var textElement = document.getElementById("hiddenText");
    
    if (linkElement.style.display !== "none") {
        linkElement.style.display = "none";
        textElement.style.display = "block";
    }
}