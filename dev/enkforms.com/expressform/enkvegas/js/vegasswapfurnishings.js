// Swap Furnishings
 
   
function SwapFix()
{	
   var swapline1="";
   var swapline1b="";
   var swapline2="";
   var swapline2b="";
   var fixqty="";
   var swapcount="";
   var swap_one="";

   
	//Swapping furnishings
    var enkvegasform= document.forms["ENKVEGAS"];
	var fixcount=enkvegasform.fixcountval.value;
	var fixture=enkvegasform.fixtureval.value;
	var product=enkvegasform.prodval.value;
	fixcount = parseFloat(fixcount);
	
	swapping = enkvegasform.swap.checked;
	
	
    if (swapping) {
	    if (fixcount == 1) {
		   if (product == "1") {
		      fixqty = "Instead of 1 Garment Rack, I would prefer 1 EZ Shelf";
			  swap_one = "EZ"}
		   else { fixqty = "Instead of 1 EZ Shelf, I would prefer 1 Garment Rack";
		           swap_one = "GR"}}
		else {
		
		fixqty = "Instead of " + fixcount + fixture + " I would prefer: (Quantity limited to " + fixcount + " fixtures)";
	    swapline1= "<select id=\"swapshelves\" name=\"swapshelves\" size=\"1\"> ";
        for (i=0; i < fixcount+1; i++)
           {swapcount = swapcount +	"<option value =\"" + i + "\">" + i + "</option> ";	}
		
		swapline1 = swapline1 + swapcount + "</select>"
		swapline1b = " EZ Shelves (dark wood, 58\" w x 72\" h x 11-3/4\" d, 11\" between shelves)";
		
		swapcount="";
	    swapline2= "<select id=\"swapracks\" name=\"swapracks\" size=\"1\" onChange=\"calculateTotal()\"> ";
        for (i=0; i < fixcount+1; i++)
           {swapcount = swapcount +	"<option value =\"" + i + "\">" + i + "</option> ";	}
		
		swapline2 = swapline2 + swapcount + "</select>"
		swapline2b = " Garment Racks ( 8' long, dark metal)";		
		   }
        }

	document.getElementById('swapone').value=swap_one;
	
	document.getElementById('fixqty').innerHTML=fixqty;
	document.getElementById('swapline1').innerHTML=swapline1;
	document.getElementById('swapline1b').innerHTML=swapline1b;
		
	document.getElementById('swapline2').innerHTML=swapline2;
	document.getElementById('swapline2b').innerHTML=swapline2b;
	}