<?php /* Smarty version 2.6.28, created on 2016-04-04 18:42:32
         compiled from table.tpl.html */ ?>
<div class="table-wrapper">
 <h2 class="sub-header">All adverts</h2>
 <div class="table-responsive adverts-table">
   <table class="table table-striped">
     <thead>
       <tr>
         <th>#id</th>
         <th>Title</th>
         <th>Description</th>
         <th>Price($)</th>
         <th>Name</th>
         <th>Action</th>
       </tr>
     </thead>
     <tbody>
        <?php echo $this->_tpl_vars['ads_rows']; ?>

     
     </tbody>
   </table>
 </div>
</div>