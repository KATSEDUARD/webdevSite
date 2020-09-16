let fontsArray = ["maiden", "metallica", "megadeth", "rammstein"];

const applyFont = () => {
    let bands = document.querySelectorAll(".dropdown-item");
    for (let i = 0; i < fontsArray.length; i++) {
        bands[i].style.fontFamily = fontsArray[i];
    }
}

applyFont();