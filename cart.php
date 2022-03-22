<?php
include 'header.php';
?>
<div class="container-fluid">
    <div class="container">
        <div class="row p-5">
            <div class="col-md-8">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">Sr.No</th>
                            <th scope="col">Product</th>
                            <th scope="col">Quantity</th>
                            <th scope="col">Prize</th>
                            <th scope="col">Prize</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            if($cart->total_items() > 0){ 
                                // Get cart items from session 
                                $cartItems = $cart->contents(); 
                                foreach($cartItems as $item){ 
                            ?>
                        <tr>
                            <th scope="row"><?php echo $item["name"]; ?></th>
                            <td><?php echo '$'.$item["price"].' USD'; ?></td>
                            <td><input class="form-control" type="number" value="<?php echo $item["qty"]; ?>" onchange="updateCartItem(this, '<?php echo $item["rowid"]; ?>')"/></td>
                            <td><?php echo '$'.$item["subtotal"].' USD'; ?> </td>
                            <td><button class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')?window.location.href='cartAction.php?action=removeCartItem&id=<?php echo $item["rowid"]; ?>':false;"><i class="itrash"></i> </button></td>
                        </tr>
                        <?php } }else{ ?>
                            <tr><td colspan="5"><p>Your cart is empty.....</p></td>
                            <?php } ?>
                            <?php if($cart->total_items() > 0){ ?>
                        <tr>
                            <th scope="row">2</th>
                            <td> </td>
                            <td> </td>
                            <td><strong>Cart Total</strong></td>
                            <td><strong><?php echo '$'.$cart->total().' USD'; ?></strong> </td>
                            <td> </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
            <div class="col-md-4">
            <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col"></th>
                            <th scope="col"></th>
                            
                           
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                           
                            <td> </td>
                            <td> </td>
                            
                        </tr>
                        <tr>
                           
                            <td> </td>
                            <td> </td>
                            
                        </tr>
                      
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>














































<?php
include 'footer.php';
?>