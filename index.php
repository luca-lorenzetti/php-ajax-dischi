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
            
            <div class="list">
                <ul class="flex">

                <?php
                    foreach ($discs as $disc) {?>
                       <li>
                                <div class="card flex">
                                    <div class="cover">
                                        <img src="<?php echo $disc['poster'];?>">
                                    </div>
                                    <p class="disc_title"> <small><?php echo $disc['title'];?></small></p>
                                    <p class="disc_author"> <small><?php echo $disc['author'];?></small></p>
                                    <p class="disc_year"> <small><?php echo $disc['year'];?></small></p>
                                 </div>
                               </li>
                  <?php  }
                ?>
                </ul>
            </div>
        </div>
         <!-- /Content -->

    </div>

<?php include 'footer.php' ?>