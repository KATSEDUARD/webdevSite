let metalVue = new Vue({
    el : "#app",
    data : {
        flag: false
    },
    methods : {
        showInfo() {
            if (this.flag === false) {
                document.getElementById("wrapper").style.opacity = "1";
                this.flag = true;
            }
            else {
                document.getElementById("wrapper").style.opacity = "0";
                this.flag = false;
            }
        }
    }
});