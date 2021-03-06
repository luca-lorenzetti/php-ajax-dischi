
let app = new Vue({
    el: '#root',
    data:{
        discs: [],
        discsFiltered: [],
        genres: ["All"],
        filters: [],
    },
    methods: {
        getListDisc(){

            axios.get("http://localhost/php-ajax-dischi/api.php")
            .then( (response)=>{
                this.discs = response.data;
             
                this.discs.sort( (disc, disc2)=>{
                    return disc.year - disc2.year;
                }); 
                this.discsFiltered = this.discs;

                 this.getGenres();
            });        
        },
        getGenres(){
            this.discs.forEach(element => {
            
                if( !this.genres.includes(element.genre) ){
                    this.genres.push(element.genre);
                }
            });
    
        },
        getFilters(filters){
            this.discsFiltered = this.discs.filter(element => {
                return filters.includes(element.genre) || filters.includes("All"); 
            });
        },
  
        
    },
    mounted(){
        this.getListDisc();
    },
   
});
