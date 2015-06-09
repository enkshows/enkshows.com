//Furnishings Count
function FurnCount()
{	
   var chaircount=0;
   var table4count=0;
   var table6count=0;
   var rackcount=0;
   var gridcount=0;
   var shelfstcount=0;
   var shelfslcount=0;
   var totalfurniture=0;
   var ccform= document.forms["CC"];
   var furnallow=ccform.furnallowed.value;
   
   furnallow=eval(furnallow);
   chaircount=eval(ccform.chair.value);
   table4count=eval(ccform.table4.value);
   table6count=eval(ccform.table6.value);
   rackcount=eval(ccform.rack.value);
   gridcount=eval(ccform.grid.value);
   shelfstcount=eval(ccform.shelfst.value);
   shelfslcount=eval(ccform.shelfsl.value);
   
   totalfurniture = chaircount + table4count + table6count + rackcount + gridcount + shelfstcount+shelfslcount;
   if (totalfurniture > furnallow) {alert("Please limit furniture selection to " + furnallow + " items");}
   
   var divobj= document.getElementById('totalfurn');
	   divobj.innerHTML= totalfurniture;
	   
   	   
   
   }
   
   