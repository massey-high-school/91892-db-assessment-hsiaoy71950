        <div class="box side">
            
            <h2><a href="showall.php">Show all</a></h2>
           
           <form class="searchform" method="post"
                 action="name_type.php" enctype="multipart/form-data">
                
               <input class="search" type="text" name="nametype"
                      size="40" value="" required placeholder="Pokemon name / type..." /><input class="submit" type="submit"
                      name="find_name_type" value="&#xf002;" style="height: 32px"/>
               
            </form>
        
        <br />
        <hr />
        <br />
            
        <div class="advanced-frame">
            
        <h2>Advanced Search</h2>    
        
        <form class="searchform" method="post"
        action="advanced.php" enctype="multipart/form-data">
            
        <!-- name -->
            
        <input class="adv" type="text" name="name" size="40"
               value="" placeholder="Name..."/>
            
        <!-- type name -->
            
        <select class="search adv" name="type1">
            
        <option value='' selected>Type 1...</option>
            
        <!-- get options from database -->
        <?php 
            $type_sql="SELECT * FROM `L2_type_data` ORDER BY `L2_type_data`.`Typename` ASC";
            $type_query=mysqli_query($dbconnect, $type_sql);
            $type_rs=mysqli_fetch_assoc($type_query);
            
            do {
                ?>
            <option value="<?php echo $type_rs['Typename']; ?>"><?php echo $type_rs['Typename']; ?></option>
            
            <?php
                
            } // end type do loop
            
            while($type_rs=mysqli_fetch_assoc($type_query))
            
            ?>
            </select>

        <select class="search adv" name="type2">

            <option value='' selected>Type 2...</option>

            <!-- get options from database -->
            <?php 
                $type_query=mysqli_query($dbconnect, $type_sql);
                $type_rs=mysqli_fetch_assoc($type_query);

                do {
                    ?>
                <option value="<?php echo $type_rs['Typename']; ?>"><?php echo $type_rs['Typename']; ?></option>

                <?php

                } // end genre do loop

                while($type_rs=mysqli_fetch_assoc($type_query))

                ?>
            </select>

        <!-- Generation -->
        <div class="flex-container">
            <div class="adv-txt">
                Generation: &nbsp; &nbsp; &nbsp;
            </div><!-- / Generation label -->
            <div>
                <select class="search adv" name="generation_more_less">
                    
                    <option value="" disabled>Choose...</option>
                    <option value=">=">At Least</option>
                    <option value="<=">At Most</option>
                
                </select>
            </div><!-- / generation drop down -->
            <div>
                <input class="adv" type="number" min="1" max="6" value="1" name="generation">
            
            </div><!-- / generation amount -->
        </div>
            
        <!-- Legendary Checkbox -->
        <input class="adv-txt" type="checkbox" name="legendary" value="0">Legendary
            
        <!-- Total stats -->
        <div class="flex-container">
            <div class="adv-txt">
                Total stats: &nbsp; &nbsp; &nbsp;
            </div><!-- / Total stats label -->
            <div>
                <select class="search adv" name="total_more_less">
                    
                    <option value="" disabled>Choose...</option>
                    <option value=">=">At Least</option>
                    <option value="<=">At Most</option>
                
                </select>
            </div><!-- / total stat drop down -->
            <div>
                <input class="adv" type="number" value="1" name="total">
            
            </div><!-- / total stat amount -->
        </div>
            
        <!-- Hp stat -->
        <div class="flex-container">
            <div class="adv-txt">
                HP stat: &nbsp; &nbsp; &nbsp;
            </div><!-- / HP stat label -->
            <div>
                <select class="search adv" name="hp_more_less">
                    
                    <option value="" disabled>Choose...</option>
                    <option value=">=">At Least</option>
                    <option value="<=">At Most</option>
                
                </select>
            </div><!-- / hp stat drop down -->
            
            <div>
                <input class="adv" type="number" value="1" name="hp">
            
            </div><!-- / hp stat amount -->
        </div>
            
        <!-- attack stat -->
        <div class="flex-container">
            <div class="adv-txt">
                Attack stat: &nbsp; &nbsp; &nbsp;
            </div><!-- / attack stat label -->
            <div>
                <select class="search adv" name="attack_more_less">
                    
                    <option value="" disabled>Choose...</option>
                    <option value=">=">At Least</option>
                    <option value="<=">At Most</option>
                
                </select>
            </div><!-- / attack stat drop down -->
            
            <div>
                <input class="adv" type="number" value="1" name="attack">
            
            </div><!-- / attack stat amount -->
        </div>
            
        <!-- defense stat -->
        <div class="flex-container">
            <div class="adv-txt">
                Defense stat: &nbsp; &nbsp; &nbsp;
            </div><!-- / defense stat label -->
            <div>
                <select class="search adv" name="defense_more_less">
                    
                    <option value="" disabled>Choose...</option>
                    <option value=">=">At Least</option>
                    <option value="<=">At Most</option>
                
                </select>
            </div><!-- / defense stat drop down -->
            
            <div>
                <input class="adv" type="number" value="1" name="defense">
            
            </div><!-- / defense stat amount -->
        </div>
            
        <!-- spattack stat -->
        <div class="flex-container">
            <div class="adv-txt">
                Special Attack stat: &nbsp; &nbsp; &nbsp;
            </div><!-- / spattack stat label -->
            <div>
                <select class="search adv" name="spattack_more_less">
                    
                    <option value="" disabled>Choose...</option>
                    <option value=">=">At Least</option>
                    <option value="<=">At Most</option>
                
                </select>
            </div><!-- / spattack stat drop down -->
            
            <div>
                <input class="adv" type="number" value="1" name="spattack">
            
            </div><!-- / spattack stat amount -->
        </div>
            
        <!-- spdefense stat -->
        <div class="flex-container">
            <div class="adv-txt">
                Special Defense stat: &nbsp; &nbsp; &nbsp;
            </div><!-- / spdefense stat label -->
            <div>
                <select class="search adv" name="spdefense_more_less">
                    
                    <option value="" disabled>Choose...</option>
                    <option value=">=">At Least</option>
                    <option value="<=">At Most</option>
                
                </select>
            </div><!-- / spdefense stat drop down -->
            
            <div>
                <input class="adv" type="number" value="1" name="spdefense">
            
            </div><!-- / spdefense stat amount -->
        </div>
            
        <!-- speed stat -->
        <div class="flex-container">
            <div class="adv-txt">
                Special Defense stat: &nbsp; &nbsp; &nbsp;
            </div><!-- / speed stat label -->
            <div>
                <select class="search adv" name="speed_more_less">
                    
                    <option value="" disabled>Choose...</option>
                    <option value=">=">At Least</option>
                    <option value="<=">At Most</option>
                
                </select>
            </div><!-- / speed stat drop down -->
            
            <div>
                <input class="adv" type="number" value="1" name="speed">
            
            </div><!-- / speed stat amount -->
        </div>
            
        <!-- sort by -->
            
        <div class="flex-container">
            
        <div>
            
        <select class="search adv" name="sort">
            
        <option value='Name' selected>Name (alphabetical)</option>
        <option value='Typename1' >Type 1 (alphabetical)</option>
        <option value='Typename2' >Type 2 (alphabetical)</option>
        <option value='Totalstats' >Total stats</option>
        <option value='HPstat' >HP stat</option>
        <option value='Attackstat' >Attack stat</option>
        <option value='Defensestat' >Defense stat</option>
        <option value='SpDefensestat' >Special Defense stat</option>
        <option value='SpAttackstat' >Special Attack stat</option>
        <option value='Speedstat' >Speed stat</option>
        <option value='Generation' >Generation</option>
        
        </select>
            
        </div>
        <div>
            
        <select class="search adv" name="sort_asc_desc">
            
        <option value='ASC' selected>Ascending</option>
        <option value='DESC' >Descending</option>

        </select>
        </div>
        </div>
            
        <!-- Search box -->
        <input class="submit advanced-button" type="submit"
            name="advanced" value="Search &nbsp; &#xf002;" />
            
        
            
        </form>
        </div> <!-- / advanced frame -->
            
        </div> <!-- / side bar -->
        
        <div class="box footer">
            CC YH 2020
        </div> <!-- / footer -->
                
        
    </div> <!-- / wrapper -->
    
            
</body>