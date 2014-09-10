<?php 

?>
    <body>
  
                <div id="Test" class="container">
                    <div class="row-fluid span12 form_sec">    
                </div>
                    <div class="row-fluid span12 form_sec">
                        <div class="alert alert-success" style="margin-top:30px;">
                            <button data-dismiss="alert" class="close" type="button"> 	&#215;</button>
                            <strong>Well done!</strong>
                        </div>
                        
                    </div>
                    <div class="row-fluid span12 form_sec">
                        <h1 class="row-fluid span12 ">Featured Products</h1>
                        
                        <div class="row-fluid span12 form_sec">
                            
                           <?php foreach($products as $product):?>
                                <div class="row-fluid span3 product_div">
                                <form action="http://localhost/code_shop/index.php/shopping/add" method="post" name="product_frm">
                                    <input type="hidden" name="productID" value="<?php echo $product->id ;?>" />
                                    <div class="p_img_div">
                                        <img src="<?php echo base_url() ; ?>/images/<?php echo $product->image ;?>" class="prd_img" alt=""/>
                                    </div>
                                    <h5> <?php echo $product->name ;?></h5>
                                     
                                    <span class="Price">
                                        <label style="width:20%;float:left;">Price : <?php echo $product->price ;?> </label>
                                        <span style="width:20%;float:left;"></span>
                                    </span> 
                                    <span class="qty">
                                        <label style="width:20%;float:left;">| Qty : <?php echo $product->qty ;?> </label>
                                        <input  style="width:20%;float:left;" type="text" name="product_qty" value="1"  />
                                    </span>
                                    <button class="addtoCart_btn" type="submit" name="addtoCart_btn" >Add</button>
                                </form>
                                </div>
                         <?php endforeach;?>
                        </div>
                    </div>
                          
    </body>
</html>