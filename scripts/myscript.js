const app = new Vue({
    el: "#app",
    data: {
        listaDischi: []
    },
    methods: {
        getDischi() {
            axios.get("http://localhost/Boolean_php/php-ajax-dischi/partials/data.php").then((resp) => {
                this.listaDischi = resp.data;
            }).catch((er) => {
                alert("Errore nel caricamento dei dati");
                console.error(er);
            });
        }
    },
    mounted() {
        this.getDischi();
    }
})