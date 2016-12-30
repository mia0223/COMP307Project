<?php
/******  build the pagination links ******/
// range of num links to show
$range = 7;
echo '<link rel="stylesheet" type="text/css" href="pageNum.css">';
echo '<div class=pageNum>';
// if not on page 1, don't show back links
if ($currentPage > 1) {
   // get previous page num
   $prevPage = $currentPage - 1;
   // show < link to go back to 1 page
   echo " <a href='{$_SERVER['PHP_SELF']}?page=$page&currentPage=$prevPage'> Previous </a> ";
} // end if 

// loop to show links to range of pages around current page
for ($x = ($currentPage - $range); $x < (($currentPage + $range) + 1); $x++) {
   // if it's a valid page number...
   if (($x > 0) && ($x <= $totalpages)) {
      // if we're on current page...
      if ($x == $currentPage) {
         // 'highlight' it but don't make a link
         echo " [<b>$x</b>] ";
      // if not current page...
      } else {
         // make it a link
         echo " <a href='{$_SERVER['PHP_SELF']}?page=$page&currentPage=$x'>$x</a> ";
      } // end else
   } // end if 
} // end for
                 
// if not on last page, show forward and last page links        
if ($currentPage != $totalpages) {
   if($range < $totalpages){ echo " ... ";}
   // get next page
   $nextpage = $currentPage + 1;
    // echo forward link for next page 
   echo " <a href='{$_SERVER['PHP_SELF']}?page=$page&currentPage=$nextpage'> &nbsp;&nbsp;Next </a> ";
} // end if
echo '</div>';
/****** end build pagination links ******/
?>