window.onload = function () {
    let current_datetime = new Date();
    let year = current_datetime.getFullYear();
    let month = current_datetime.getMonth() ;
    let lastmonth = current_datetime.getMonth() - 1;
    let last2month = current_datetime.getMonth() - 2;
    let last3month = current_datetime.getMonth() - 3;
    let last4month = current_datetime.getMonth() - 4;
    let last5month = current_datetime.getMonth() - 5;
    let last6month = current_datetime.getMonth() - 6;
    var chart = new CanvasJS.Chart("chartPembelian",
    {

      title:{
      text: "Pembelian"
      },
        axisX:{      
            valueFormatString: "MMMM-YYYY",
            labelAngel: -50
        },
       data: [
      {
        type: "area",
        color: "rgba(0,75,141,0.7)",
        dataPoints: [
            { x: new Date(year, month), y: 150000 },
            { x: new Date(year, lastmonth), y: 250000 },
            { x: new Date(year, last2month), y: 70000 },
            { x: new Date(year, last3month), y: 130000 },
            { x: new Date(year, last4month), y: 115000 },
            { x: new Date(year, last5month), y: 110000 },
            { x: new Date(year, last6month), y: 160000 }
        ]
      }
      ]
    });

    chart.render();
  }

  
anychart.onDocumentReady(function() {
    let current_datetime = new Date();
    let year = current_datetime.getFullYear();
    let month = current_datetime.getMonth() ;
    let lastmonth = current_datetime.getMonth() - 1;
    let last2month = current_datetime.getMonth() - 2;
    let last3month = current_datetime.getMonth() - 3;
    let last4month = current_datetime.getMonth() - 4;
    const monthNames = ["January", "February", "March", "April", "May", "June",
      "July", "August", "September", "October", "November", "December"
    ];

  var data = [
      {x: monthNames[month]+ "/" + year, value: 200000},
      {x: monthNames[lastmonth] + "/" + year, value: 230000},
      {x: monthNames[last2month] + "/" + year, value: 150000},
      {x: monthNames[last3month] + "/" + year, value: 80000},
      {x: monthNames[last4month] + "/" + year, value: 150000}
  ];
  var chart = anychart.bar();
  chart.title("Penjualan");
  chart.data(data);
  chart.container('myChart');
  chart.draw();

});