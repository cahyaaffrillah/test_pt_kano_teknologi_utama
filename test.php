<html>
 <head>
  <title>Test PT Kano</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>  
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <style>
  .box
  {
   max-width:600px;
   width:100%;
   margin: 0 auto;;
  }

    .dataTables_processing {
        top: 64px !important;
        z-index: 11000 !important;
    }

  </style>
 </head>
 <body>
  <div class="container">
   <br />
   <h3 align="center">Test PT Kano Teknologi Utama</h3>
    <p>
      *petunjuk
      <ul>
        
        <li>Ketika masih ada pop-up "Processing" maka berarti data masih di load</li>
        
      </ul>
    </p>
   
   <div class="table-responsive">
    <table class="table table-striped table-bordered" id="data-table">
     <thead>
      
      <tr>
       <th>CMGUnmaskedID</th>
       <th>CMGUnmaskedName</th>
       <th>ClientTier</th>
       <th>GCPStream</th>
       <th>GCPBusiness</th>
       <th>CMGGlobalBU</th>
       <th>CMGSegmentName</th>
       <th>GlobalControlPoint</th>
       <th>GCPGeography</th>
       <th>GlobalRelationshipManagerName</th>
       <th>REVENUE_FY14</th>
       <th>REVENUE_FY15</th>
       <th>Deposits_EOP_FY14</th>
       <th>Deposits_EOP_FY15x</th>
       <th>TotalLimits_EOP_FY14</th>
       <th>TotalLimits_EOP_FY15</th>
       <th>TotalLimits_EOP_FY15x</th>
       <th>RWAFY15</th>
       <th>RWAFY14</th>
       <th>REV/RWA FY14</th>
       <th>REV/RWA FY15</th>
       <th>NPAT_AllocEq_FY14</th>
       <th>NPAT_AllocEq_FY15X</th>
       <th>Company_Avg_Activity_FY14</th>
       <th>Company_Avg_Activity_FY15</th>
       <th>ROE_FY14</th>
       <th>ROE_FY15</th>
      </tr>
     </thead>
    </table>
   </div>
  </div>
 </body>
</html>

<script>
  function masuk_page(argument) {
    $.each( argument, function( key, value ) {
        $.each( value, function( ind, obj ) {
        var url = 'halaman_detail.php';
        var form = $('<form action="' + url + '" method="post">' +
          '<input type="text" name="CMGUnmaskedID" value="' + obj.CMGUnmaskedID + '" />' +
          '<input type="text" name="ROE_FY14" value="' + obj.ROE_FY14 + '" />' +
          '<input type="text" name="ROE_FY15" value="' + obj.ROE_FY15 + '" />' +
          '<input type="text" name="REVENUE_FY14" value="' + obj.REVENUE_FY14 + '" />' +
          '<input type="text" name="REVENUE_FY15" value="' + obj.REVENUE_FY15 + '" />' +
          '<input type="text" name="RWAFY14" value="' + obj.RWAFY14 + '" />' +
          '<input type="text" name="RWAFY15" value="' + obj.RWAFY15 + '" />' +
          '<input type="text" name="TotalLimits_EOP_FY14" value="' + obj.TotalLimits_EOP_FY14 + '" />' +
          '<input type="text" name="TotalLimits_EOP_FY15" value="' + obj.TotalLimits_EOP_FY15 + '" />' +
          '<input type="text" name="Company_Avg_Activity_FY14" value="' + obj.Company_Avg_Activity_FY14 + '" />' +
          '<input type="text" name="Company_Avg_Activity_FY15" value="' + obj.Company_Avg_Activity_FY15 + '" />' +
          '<input type="text" name="Deposits_EOP_FY14" value="' + obj.Deposits_EOP_FY14 + '" />' +
          '<input type="text" name="Deposits_EOP_FY15x" value="' + obj.Deposits_EOP_FY15x + '" />' +
          '<input type="text" name="NPAT_AllocEq_FY14" value="' + obj.NPAT_AllocEq_FY14 + '" />' +
          '<input type="text" name="NPAT_AllocEq_FY15X" value="' + obj.NPAT_AllocEq_FY15X + '" />' +
          '</form>');
        $('body').append(form);
        form.submit();
      });    
    });
    
    
  }
$(document).ready(function(){

$('#data-table thead th').each( function () {
        var title = $(this).text();
        if (title=="CMGUnmaskedName"||title=="ClientTier"||title=="CMGSegmentName") {
          $(this).html( '<input type="text" placeholder="Search '+title+'" />' );  
        }
        
    } );

 $('#data-table').DataTable({
  initComplete: function () {
            // Apply the search
            this.api().columns().every( function () {
                var that = this;
 
                $( 'input', this.header() ).on( 'keyup change clear', function (e) {
                  
                        if ( that.search() !== this.value ) {
                        that
                            .search( this.value )
                            .draw();
                    }
                    
                   
                } );
            } );
        },
  processing: true,
    serverSide: false,
    // searching:false,
    ajax: {
        url: "import.php",
       dataSrc:"data"         
    },

     columns :  [
       { data : "CMGUnmaskedID"},
       { data : "CMGUnmaskedName"},
       { data : "ClientTier"},
       { data : "GCPStream"},
       { data : "GCPBusiness"},
       { data : "CMGGlobalBU"},
       { data : "CMGSegmentName"},
       { data : "GlobalControlPoint"},
       { data : "GCPGeography"},
       { data : "GlobalRelationshipManagerName"},
       { data : "REVENUE_FY14"},
       { data : "REVENUE_FY15"},
       { data : "Deposits_EOP_FY14"},
       { data : "Deposits_EOP_FY15x"},
       { data : "TotalLimits_EOP_FY14"},
       { data : "TotalLimits_EOP_FY15"},
       { data : "TotalLimits_EOP_FY15x"},
       { data : "RWAFY15"},
       { data : "RWAFY14"},
       { data : "REV_RWA_FY14"},
       { data : "REV_RWA_FY15"},
       { data : "NPAT_AllocEq_FY14"},
       { data : "NPAT_AllocEq_FY15X"},
       { data : "Company_Avg_Activity_FY14"},
       { data : "Company_Avg_Activity_FY15"},
       { data : "ROE_FY14"},
       { data : "ROE_FY15"}
     
     ]
    });
 
 
// #column3_search is a <input type="text"> element
$('#CMGSegmentName').on( 'keyup', function () {
    table
        .columns( 3 )
        .search( this.value )
        .draw();
} );
});

</script>