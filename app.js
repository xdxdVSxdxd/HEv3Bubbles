$( document ).ready(function() {
	$("#genbut").click(function(){  generate(); });
});



function generate(){
	var gfxwidth = $("#gfxwidth").val();
	var gfxheight = $("#gfxheight").val();
	var dataurl = $("#dataurl").val();
	var colorcodegfx = $("#colorcodegfx").val();
	var colorcodetext = $("#colorcodetext").val();

	$("#vizholder").html("");

	$("#vizholder").width(gfxwidth);
	$("#vizholder").height(gfxheight);

	d3.csv("proxy.php?url=" + dataurl,
		function(d){

			return {
				name: d.tag,
				number: +d.weight
			};

		},
		function(data){

			var svg = d3.select("#vizholder").append("svg")
		      .style("width",  "100%" )
		      .style("height",  d3.select("#vizholder").style("height") );

		    
		    var margin = {top: 0, right: 20, bottom: 0, left: 20},
		    width = +svg.style("width").replace("px","") - margin.left - margin.right,
		    height = +svg.style("height").replace("px","") - margin.top - margin.bottom;

		    var g = svg.append("g")
		    .attr("transform", "translate(" + margin.left + "," + margin.top + ")");

		    data2 = { children: data  };


		    //console.log(data2);
		    
		    var bubble = d3.pack(data2)
		            .size([width, height])
		            .padding(1.5);

		    console.log(bubble);

		    var nodes = d3.hierarchy(data2)
		      .sum(function(d) { return d.number; });

		    var node = g.selectAll(".node")
		            .data(bubble(nodes).descendants())
		            .enter()
		            .filter(function(d){
		                return  !d.children
		            })
		            .append("g")
		            .attr("class", "node")
		            .attr("transform", function(d) {
		            	//console.log(d);
		                return "translate(" + d.x + "," + d.y + ")";
		            });

		      node.append("title")
		            .text(function(d) {
		              //console.log(d);
		                return d.data.name;
		            });

		      node.append("circle")
		            .attr("r", function(d) {
		            	//console.log(d);
		                return d.r;
		            })
		            .style("fill", colorcodegfx);

		    node.append("text")
		      .attr("class","bubbletext")
		            .attr("dy", ".3em")
		            .style("text-anchor", "middle")
		            .style("fill",colorcodetext)
		            .text(function(d) {
		                return d.data.name;
		            })
		            .style("font-size", function(d){
		              var res = Math.floor(2*d.r/d.data.name.length) + "px";
		              return res;
		            });


		    $("#SVGexport").val(  $("#vizholder").html() );

		});
}