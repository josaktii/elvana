//[widget morris charts Javascript]

//Project:	Fab Admin - Responsive Admin Template
//Primary use:   Used only for the morris charts


$(function () {
  "use strict";

  // LINE CHART
  var line = new Morris.Line({
    element: 'line-chart',
    resize: true,
    data: [
      { y: '2007', item1: 9870 },
      { y: '2008', item1: 1234 },
      { y: '2009', item1: 6548 },
      { y: '2010', item1: 8459 },
      { y: '2011', item1: 9518 },
      { y: '2012', item1: 2154 },
      { y: '2013', item1: 1254 },
      { y: '2014', item1: 1254 },
      { y: '2015', item1: 6258 },
      { y: '2016', item1: 9521 }
    ],
    xkey: 'y',
    ykeys: ['item1'],
    labels: ['Analatics'],
    lineWidth: 2,
    pointFillColors: ['rgba(30,136,229,1)'],
    lineColors: ['rgba(30,136,229,1)'],
    hideHover: 'auto',
  });
});