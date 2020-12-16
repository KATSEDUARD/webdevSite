let metalVue = new Vue({
    el : "#content-wrapper",
    data : {
        status: "More",
        show: false
    },
    methods : {
        showInfo() {
            this.show = !this.show;
            this.status = this.show ? "Hide" : "More"
        }
    }
});