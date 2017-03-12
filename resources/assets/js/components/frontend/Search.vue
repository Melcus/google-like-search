<template>
    <div class="search_component">

       <div class="col-md-9">
                <input type="text" 
                v-model="search_query" 
                class="search-input" 
                @keyup="ExecuteSearch" 
                placeholder="Store name,  zipcode, address, city, region, country name, country code ... "
               >
        </div>
        <div class="col-md-9">
            <ul class="search_results">
                <li class="single_search_result" v-for="store in stores">
                 <a :href="'store/'+store.slug"> 
                <span class="store_link">{{ store.name }} </span>
                <em>
                {{ store.city.state.country.name}} 
                {{ store.city.state.name}} 
                {{ store.city.name}} {{ store.house_number}} 
                {{ store.street_address}}  
                {{ store.zipcode }}</em>
                 </a>  
                </li>
            </ul>
        </div>
    </div>
</template>

<script>
    export default {

        data() {
            return {
                search_query : '',
                stores : '',
                showResults : false,

            }
        },

        created: function () {
            this.ExecuteSearch = debounce(this.ExecuteSearch, 50);
        },

        methods : {
            ExecuteSearch : function () {
                 var VueInstance = this;
                  axios.post('/execute_search', {
                        search_query: VueInstance.search_query
                    })
                        .then(function (response) {
                           VueInstance.stores = response.data.stores;
                        })
                        .catch(function (error) {
                        });
            }
        }
    }
</script>

<style>

    .search_component{
        display:flex;
        flex-direction: column;
        width: 100%;
        justify-content: center;
        align-items: center;
    }
    .search_component input {
        border : 1px transparent;
    }

    .search_results {
        list-style-type: none;
        background:white;
        padding-left: 0px;
        margin-top: 5px;
      
    }

    .single_search_result {
          border-bottom: 2px solid #eeeeee;
          padding:10px;
    }
    .single_search_result:hover {
        background: #cccccc;
        cursor : pointer;
    }
    .store_link {
        font-weight: bolder;
    }

  
</style>