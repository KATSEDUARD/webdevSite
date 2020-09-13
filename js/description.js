let metalVue = new Vue({
    el : "#content-wrapper",
    data : {
        flag: false,
        status: "Читати більше"
    },
    methods : {
        showInfo() {
            if (this.flag === false) {
                document.getElementById("info-wrapper").style.opacity = "1";
                this.flag = true;
                this.status = "Згорнути";
            }
            else {
                document.getElementById("info-wrapper").style.opacity = "0";
                this.flag = false;
                this.status = "Читати більше";
            }
        }
    }
});