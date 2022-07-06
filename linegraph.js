$(document).ready(function(){
    $.ajax({
      url : "https://web.engr.oregonstate.edu/~martbrad/ECE_Senior_Design/getdata.php",
      type : "GET",
      success : function(data){
        console.log(data);
  
        var userid = [];
        var Bird_force = [];

  
        for(var i in data) {
          userid.push("ms " + data[i].ID);
          Bird_force.push(data[i].Bird_Force);
        }
  
        var chartdata = {
          labels: userid,
          datasets: [
            {
              label: "Bird Force",
              fill: false,
              lineTension: 0.1,
              backgroundColor: "rgba(59, 89, 152, 0.75)",
              borderColor: "rgba(59, 89, 152, 1)",
              pointHoverBackgroundColor: "rgba(59, 89, 152, 1)",
              pointHoverBorderColor: "rgba(59, 89, 152, 1)",
              data: Bird_force
            },
          ]
        };
  
        var ctx = $("#mycanvas");
  
        var LineGraph = new Chart(ctx, {
          type: 'line',
          data: chartdata
        });
      },
      error : function(data) {
  
      }
    });
  });