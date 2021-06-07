const app = new Vue({
    el: "#app",
    data: {
        listaDischi: [],
        genreQuery: ""
    },
    // computed: {
    //     getGenres() {
    //         var result = [];
    //         this.listaDischi.forEach(element => {
    //             if (!result.includes(element.genre)) {
    //                 result.push(element.genre)
    //             }
    //         });
    //         return result;
    //     }
    // },
    methods: {
        getDischi() {
            const axiosParameters = {
                params: {
                    genre: this.genreQuery
                }
            }
            // anche con percorso relativo "partials/data.php"
            axios.get("http://localhost/Boolean_php/php-ajax-dischi/partials/data.php", axiosParameters).then((resp) => {
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