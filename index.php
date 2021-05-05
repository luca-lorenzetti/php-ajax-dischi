<?php include 'header.php' ?>

<div id="root">
        <!-- Header -->
        <div class="header flex">
            <img src="img/logo.png" alt="logo">
         </div>
        <!-- /Header -->


         <!-- Content -->
        <div class="content flex">

            <div class="filter">
                <select name="genres"multiple @change="getFilters(filters)" v-model="filters"> 
                    <option v-for="genre in genres">{{genre}}</option>
                  </select>
            </div>


            <div class="list" v-show="discsFiltered.length > 0">
                <ul class="flex">
                    <li v-for="song in discsFiltered">
                        <div class="card flex">
                            <div class="cover">
                                <img :src="song.poster">
                            </div>
                            <p class="disc_title"> <small>{{song.title}}</small></p>
                            <p class="disc_author"> <small>{{song.author}}</small></p>
                            <p class="disc_year"> <small>{{song.year}}</small></p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
         <!-- /Content -->

    </div>

<?php include 'footer.php' ?>