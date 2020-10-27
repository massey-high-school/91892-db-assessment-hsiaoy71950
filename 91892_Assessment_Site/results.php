<?php
            
            if($count < 1) {
            
            ?>
            
            <div class = "error">
                
                Sorry! No results!!!!
            
            </div> <!-- end error -->
            
            <?php
            
            } // end no results if
            
            else {
                do {

            ?>
            
            <div class = "results">
                <div class = "flex-container">
                    <div>
                        <span class = "sub_heading">
                            <?php echo $find_rs["Name"]; ?>
                        </span>
                    </div>  <!-- Title -->
                    <div>
                        <span class = "">
                            Type(s):
                            <?php echo $find_rs["Typename1"];?> 
                        <?php 
                            if($find_rs["Typename2"] != "None"){?>
                            ,&nbsp; <?php
                                echo $find_rs["Typename2"];
                            }
                        ;?>
                        </span>
                    </div>
                    <hr/>
                    <p>Stats (Total:&nbsp;<?php echo $find_rs["Totalstats"];?>)
                    <br/>
                    HP:&nbsp;<?php echo $find_rs["HPstat"];?><br/>
                    Attack:&nbsp;<?php echo $find_rs["Attackstat"];?><br/>
                    Defense:&nbsp;<?php echo $find_rs["Defensestat"];?><br/>
                    Special Attack:&nbsp;<?php echo $find_rs["SpAttackstat"];?><br/>
                    Special Defense:&nbsp;<?php echo $find_rs["SpDefensestat"];?><br/>
                    Spped:&nbsp;<?php echo $find_rs["Speedstat"];?><br/>
                    Generation:&nbsp;<?php echo $find_rs["Generation"];?><br/>
                    Legendary?:&nbsp;<?php if($find_rs["Legendary"]){?>
                        Yes
                    <?php }
                    else {?>
                        No
                    <?php }?>
                    </p>
            
                    
                    </div>  <!-- Flex Container -->
                <p>
                    <div class = "flex-container">
                    
                    </div>
                </p>
                
                
                
                
            </div> <!-- / results -->
            
            <?php
                    
                } // end results "do"
                
                while($find_rs = mysqli_fetch_assoc($find_query));
                
            } // end else
            ?>