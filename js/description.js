let metalVue = new Vue({
    el : "#content-wrapper",
    data : {
        status: "Читати більше",
        show: false
    },
    methods : {
        showInfo() {
            this.show = !this.show;
            this.status = this.show ? "Згорнути" : "Читати більше"
        }
    }
});