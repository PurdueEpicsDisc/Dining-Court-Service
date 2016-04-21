var colorset = ["#ffffff", "#33cc99", "#ffdd40", "#ffad40", "#ff4540"];
var dataset = [
  [1, 1, 1, 1, 2, 4, 2, 2, 4, 2],
  [1, 2, 1, 2, 1, 3, 2, 2, 4, 1],
  [2, 1, 3, 2, 2, 1, 3, 4, 2, 2],
  [2, 2, 2, 3, 2, 2, 1, 1, 2, 3],
  [2, 1, 1, 2, 4, 3, 2, 1, 3, 4],
  [1, 3, 2, 3, 4, 4, 3, 2, 4, 3],
  [1, 2, 2, 3, 1, 2, 0, 0, 0, 0]
 ];

var x = d3.scale.ordinal()
  .domain(["Mon", "Tue", "Wed", "Thu", "Fri", "Sat", "Sun"])
  .rangeBands([0, 310]);

var y = d3.scale.ordinal()
  .domain(["7:00am", "8:00am", "9:00am", "10:00am", "11:00am", "12:00am", "1:00pm", "5:00pm", "6:00pm", "7:00pm"])
  .rangeBands([0, 455]);

var trendChart = d3.select("#earhart-trend")
  .append("svg")
  .attr("width", 400)
  .attr("height", 600);

trendChart.append("g") // this group contains the entire chart
  .selectAll("g")
  .data(dataset)
  .enter()
  .append("g") // this group contains each column
  .selectAll("circle")  // individual circles
  .data( function(d) { return d; } )
  .enter() //text displays normally
  .append("circle")
  .attr("cx", function(d,i,j) { return (j * 45) + 100; })
  .attr("cy", function(d,i,j) { return (i * 45) + 40; })
  .attr("r", function(d) { return d == 0 ? d : (d + 2) * 3; })
  .attr("fill", function(d) { return colorset[d]; });

var xAxis = d3.svg.axis()
  .scale(x)
  .orient("top");

trendChart.append("g")
  .attr("class", "x axis")
  .attr("transform", "translate(80, 20)")
  .call(xAxis);

var yAxis = d3.svg.axis()
  .scale(y)
  .orient("left");

trendChart.append("g")
  .attr("class", "y axis")
  .attr("transform", "translate(70, 15)")
  .call(yAxis);
