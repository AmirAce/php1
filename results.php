<?php
                $name =  htmlspecialchars(filter_input(INPUT_GET, 'name'));
                $total_gross_income =  (filter_input(INPUT_GET, 'total_gross_income',FILTER_VALIDATE_INT));
                $total_deductions =  filter_input(INPUT_GET, 'total_deductions',FILTER_VALIDATE_INT);
                 if($total_deductions < 12550){
                    $total_deductions = 12550;
                      echo "<br>";
                     echo "Using Standard deductions...";
                     echo "<br>";
                }
                
                $taxable_income = $total_gross_income - $total_deductions;
                
                if($taxable_income > 0 && $taxable_income < 9950 ){
                    $bracket = 0.1 * $taxable_income;
                    echo "<br>";
                     echo "Taxes owed at 10%:$bracket";
                     echo "<br>";
                }
                    else{
                      $bracket = 0.1 * 9950;
                      echo "<br>";
                      echo "Taxes owed at 10%:$bracket";
                      echo "<br>";
                    }
                    
                    
                 if($taxable_income > 9950 && $taxable_income < 40525){
                    $bracket2 = 0.12*($taxable_income - 9950);
                     echo "<br>";
                    echo "Taxes owed at 12%:$bracket2";
                    echo "<br>";
                   }
                   else{
                        $bracket2 = 0.12*(40252 - 9950);
                     echo "<br>";
                    echo "Taxes owed at 12%:$bracket2";
                    echo "<br>";
                   }
                   
                   
                   
                    if($taxable_income > 40252 && $taxable_income < 86375){
                    $bracket3 = 0.22*($taxable_income - 40252);
                     echo "<br>";
                    echo "Taxes owed at 22%:$bracket3";
                    echo "<br>";
                   }
                   else{
                        $bracket3 = 0.22*(86375 - 40252 );
                     echo "<br>";
                    echo "Taxes owed at 22%:$bracket3";
                    echo "<br>";
                   }
                   
                   
                   
                    if($taxable_income > 86375 && $taxable_income < 164925){
                    $bracket4 = 0.24*($taxable_income - 86375);
                     echo "<br>";
                    echo "Taxes owed at 24%:$bracket4";
                    echo "<br>";
                   }
                   else{
                        $bracket4 = 0.24*(164925 - 86375  );
                     echo "<br>";
                    echo "Taxes owed at 24%:$bracket4";
                    echo "<br>";
                   }
                   
                   
                   if($taxable_income > 164925 && $taxable_income < 209425){
                    $bracket5 = 0.32*($taxable_income - 164925);
                     echo "<br>";
                    echo "Taxes owed at 32%:$bracket5";
                    echo "<br>";
                   }
                   else{
                        $bracket5 = 0.32*(209425 - 164925 );
                     echo "<br>";
                    echo "Taxes owed at 32%:$bracket5";
                    echo "<br>";
                   }
                   
                   
                   
                     if($taxable_income > 209425 && $taxable_income < 523600){
                    $bracket6 = 0.35*($taxable_income - 209425);
                     echo "<br>";
                    echo "Taxes owed at 35%:$bracket5";
                    echo "<br>";
                   }
                   else if($taxable_income > 523600 ){
                        $bracket6 = 0.24*($taxable_income - 523600);
                     echo "<br>";
                    echo "Taxes owed at 37%:$bracket5";
                    echo "<br>";
                   }
                
               $total_taxes_owed = $bracket + $bracket2 + $bracket3 + $bracket4 + $bracket5;
               $tax_percentage_of_income = ($total_taxes_owed/$total_gross_income)*100 ;
               $Adjusted_Gross_income = ($total_taxes_owed/$taxable_income)*100 ;
               
               
//                echo "Taxes owed at 22%:";
//                echo "<br>";
//                echo "Taxes owed at 24%:";
//                echo "<br>";
//                echo "Taxes owed at 32%:";
//                echo "<br>";
//                echo "Taxes owed at 35%:";
//                echo "<br>";
//                echo "Taxes owed at 37%:";
//                echo "<br>";
                 echo "<br>";
                 echo "Total Taxes owed:$total_taxes_owed";
                 echo "<br>"; echo "<br>";
                 echo "Taxes as Percentage of Gross income:$tax_percentage_of_income";
                 echo "<br>";
                 echo "<br>"; echo "<br>";
                 echo "Taxes as Percentage of Adjusted Gross income:$Adjusted_Gross_income";
                 echo "<br>";

