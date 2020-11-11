<?php

//import.php

 $file_data = fopen('companies.csv', 'r');
 fgetcsv($file_data);
 $no=1;
 while($row = fgetcsv($file_data))
 {
  ${"data_graph".$no}[]=array(
    "CMGUnmaskedID"=> $row[0],
    "REVENUE_FY14"=> $row[10],
       "REVENUE_FY15"=> $row[11],
       "Deposits_EOP_FY14"=> $row[12],
       "Deposits_EOP_FY15x"=> $row[13],
       "TotalLimits_EOP_FY14"=> $row[14],
       "TotalLimits_EOP_FY15"=> $row[15],
       "TotalLimits_EOP_FY15x"=> $row[16],
       "RWAFY15"=> $row[17],
       "RWAFY14"=> $row[18],
       "REV_RWA_FY14"=> $row[19],
       "REV_RWA_FY15"=> $row[20],
       "NPAT_AllocEq_FY14"=> $row[21],
       "NPAT_AllocEq_FY15X"=> $row[22],
       "Company_Avg_Activity_FY14"=> $row[23],
       "Company_Avg_Activity_FY15"=> $row[24],
       "ROE_FY14"=> $row[25],
       "ROE_FY15"=> $row[26]
  );

  $data[] = array(
  	"CMGUnmaskedID"=> "<a href='javascript:void(0);' onclick='masuk_page(".json_encode(array('data_graph_'.$no => ${"data_graph".$no})).")'>".$row[0]."</a>",
       "CMGUnmaskedName"=> $row[1],
       "ClientTier"=> $row[2],
       "GCPStream"=> $row[3],
       "GCPBusiness"=> $row[4],
       "CMGGlobalBU"=> $row[5],
       "CMGSegmentName"=> $row[6],
       "GlobalControlPoint"=> $row[7],
       "GCPGeography"=> $row[8],
       "GlobalRelationshipManagerName"=> $row[9],
       "REVENUE_FY14"=> $row[10],
       "REVENUE_FY15"=> $row[11],
       "Deposits_EOP_FY14"=> $row[12],
       "Deposits_EOP_FY15x"=> $row[13],
       "TotalLimits_EOP_FY14"=> $row[14],
       "TotalLimits_EOP_FY15"=> $row[15],
       "TotalLimits_EOP_FY15x"=> $row[16],
       "RWAFY15"=> $row[17],
       "RWAFY14"=> $row[18],
       "REV_RWA_FY14"=> $row[19],
       "REV_RWA_FY15"=> $row[20],
       "NPAT_AllocEq_FY14"=> $row[21],
       "NPAT_AllocEq_FY15X"=> $row[22],
       "Company_Avg_Activity_FY14"=> $row[23],
       "Company_Avg_Activity_FY15"=> $row[24],
       "ROE_FY14"=> $row[25],
       "ROE_FY15"=> $row[26]
   
  );
  $no++;
 }
 echo json_encode(array('data' => $data));


?>