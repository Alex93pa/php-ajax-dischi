const app = new Vue({
    el: "#app",
    data: {
        discsList: [],
        reqAPI: "http://localhost:80/php-ajax-dischi/server.php",
        filters: {
            genre: "",
        },
    },
    methods: {
        callData() {
            axios.get(this.reqAPI)
                .then((resp) => {
                    this.discsList = resp.data;
                }
            );
        },
    },
    mounted() {
        this.callData()
    }
})