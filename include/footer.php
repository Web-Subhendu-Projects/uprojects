 </div>
</div>
</div>
<script src="js/custom.js"></script>
<script src="js/script.js"></script>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>

<script>
window.onload = function () {

var chart = new CanvasJS.Chart("chartContainer", {
       animationEnabled: true,
       exportEnabled: true,
       theme: "light1", // "light1", "light2", "dark1", "dark2"
       title:{
              text: "Monthly Wise Improvement"
       },
       axisY: {
      includeZero: true
    },
       data: [{
              type: "column", //change type to bar, line, area, pie, etc
              //indexLabel: "{y}", //Shows y value on all Data Points
              indexLabelFontColor: "#5A5757",
       indexLabelFontSize: 16,
              indexLabelPlacement: "outside",
              dataPoints: [
                     { x: 10, y: 71 },
                     { x: 20, y: 55 },
                     { x: 30, y: 50 },
                     { x: 40, y: 65 },
                     { x: 50, y: 92},
                     { x: 60, y: 68 },
                     { x: 70, y: 38 },
                     { x: 80, y: 71 },
                     { x: 90, y: 54 },
                     { x: 100, y: 60 },
                     { x: 110, y: 36 },
                     { x: 120, y: 49 },
              ]
       }]
});
chart.render();

}
</script>
<script>
        $(document).ready(function(){
            var empDataTable = $('#empTable').DataTable({
                dom: 'Blfrtip',
                buttons: [
                    {
                        extend: 'copy',
                    },
                    {
                        extend: 'pdf',
                        exportOptions: {
                            columns: [0,1] // Column index which needs to export
                        }
                    },
                    {
                        extend: 'csv',
                    },
                    {
                        extend: 'excel',
                    }         
                ]  
            
            });

        });
        </script>



      
<script src="js/script.js"></script>
<script type="js/custom.js"></script>
</body>
</html> 

