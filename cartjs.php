
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
function add_to_cart(pid,pname,price){
   
    let cart= localStorage.getItem("cart");
   
    if(cart==null){

        //no cart yet
        let products=[];
        let product = {productId:pid,productName:pname,productQuantity:1,productPrice:price}
       
        products.push(product);
        localStorage.setItem("cart",JSON.stringify(products));
        console.log("product is added for the first time",pcart);

    }
    else{
        //cart is already present

        let pcart=JSON.parse(cart);
        let oldproduct=pcart.find((item)=> item.productId == pid)
        
        console.log(pid);
        if(oldproduct)
        {
            //we have to increase the quantity
            oldproduct.productQuantity=oldproduct.productQuantity+1;
            pcart.map((item)=>{
                if(item.productId==oldproduct.productId){

                    item.productQuantity=oldproduct.productQuantity;
                }
            })
            localStorage.setItem("cart",JSON.stringify(pcart));
            console.log("product quanity is increased",pcart);


        }else{
            //we have to add the  products 
            
            let product = {productId:pid,productName:pname,productQuantity:1,productPrice:price};
            pcart.push(product);
            localStorage.setItem("cart",JSON.stringify(pcart));
            console.log("Product is added",pcart);

        }
    }

    update_Cart();

}

//update cart

function update_Cart(){
    let cartString=localStorage.getItem("cart");
    let cart=JSON.parse(cartString);
    if(cart==null || cart.length==0){
        console.log("cart is empty !!");
        $(".cart-items").html("(0)");
        $(".cart-body").html("<h4>Your cart is empty..... </h4>");
        $(".checkout-btn").addClass('disabled')
       
    }
    else{
      
        //there is something in cart to show
        console.log(cart);
        $(".cart-items").html(`(${cart.length})`);
        let table=`
        <table class= 'table'>
        <thead class='thead-light'>
        <tr>
        <th>Item Name</th>
        <th>Price</th>
        <th>Quantity</th>
        <th>ToQuantity</th>



        </tr>
        </thead>
        
        `;
        let totalPrice=0;

        cart.map((item)=>{
            table+=
                ` <tr>
                <td>${item.productName}</td>
                <td>${item.productPrice}</td>
                <td>${item.productQuantity}</td>
                <td>${item.productQuantity*item.productPrice}</td>
            <td><button class='btn btn-danger btn-sm' onclick='deleteItemFromCart(${item.productId})'>Remove</button></td>
            </tr>`
            totalPrice+=item.productPrice*item.productQuantity;

        })

        table=table+
        `<tr><td>Total Price  : ${totalPrice}</td></tr>
        
        </table>`
        $(".cart-body").html(table);
    }
        


    }
//delete item
function deleteItemFromCart(pid){
   let cart= JSON.parse(localStorage.getItem('cart'));    
   let newcart=cart.filter((item)=>item.productId !=pid);
   localStorage.setItem('cart',JSON.stringify(newcart))

   update_Cart();



}



$(document).ready(function (){
    update_Cart()

})

    
</script>