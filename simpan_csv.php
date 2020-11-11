<?php
$input = fopen('companies.csv', 'r');  //open for reading
$output = fopen('temporary.csv', 'w'); //open for writing
if (isset($_POST['submit'])) {
while( false !== ( $data = fgetcsv($input) ) ){  //read each line as an array

   //modify data here

   if ($data[0] == $_POST['CMGUnmaskedID']) {
      //Replace line here
      
       $data[10]=$_POST['REVENUE_FY14'];
       $data[11]=$_POST['REVENUE_FY15'];
       $data[14]=$_POST['TotalLimits_EOP_FY14'];
       $data[15]=$_POST['TotalLimits_EOP_FY15'];
       $data[17]=$_POST['RWAFY15'];
       $data[18]=$_POST['RWAFY14'];
       $data[23]=$_POST['Company_Avg_Activity_FY14'];
       $data[24]=$_POST['Company_Avg_Activity_FY15'];
       $data[25]=$_POST['ROE_FY14'];
       $data[26]=$_POST['ROE_FY15'];
      
   }

   //write modified data to new file
   	  fputcsv( $output, $data);
	}
}


//close both files
fclose( $input );
fclose( $output );

//clean up
unlink('companies.csv');// Delete obsolete BD
rename('temporary.csv', 'companies.csv'); //Rename temporary to new
header("Location: test.php"); 
?>