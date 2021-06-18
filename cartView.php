
<!-- The Cart -->
<?php
    ///database connection, mysqli(procedure, object), PDO(object)
    $servername = 'localhost';
    $username = 'root';
    $password = '';

    $session_email = $_SESSION['email'];
    $dbconnect = mysqli_connect('localhost', 'root', '', 'Online_Pharmacy');
    
    // If the 'remove_item' button is pressed
    if(isset($_GET['remove_item'])){
        $removing_id = $_GET['remove_item'];
        
        $sql_remove = "DELETE FROM carts WHERE pro_id = '$removing_id' AND user_name = '$session_email'";
        $remove_query = mysqli_query($dbconnect, $sql_remove);
        if(!$remove_query){
            echo "<script> window.alert('FAILED TO REMOVE ITEM') </script>";
        }
        else{
            echo	"<script>
                        window.alert('Item Removed');
                        window.location.href = 'index.php';
                    </script>";
        }
        
    }

    try {
        // Build up the connection (PDO)
        $conn = new PDO("mysql:host=$servername;port=3306;dbname=online_pharmacy", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Query to extract the cart number of the current user
        $mysqlquery = "SELECT * FROM carts WHERE user_name = '$session_email'";

        // Fetch the array
        $ret = $conn->query($mysqlquery);
        $cartItems = $ret->fetchAll();
        
        if (count($cartItems) > 0) {
        ?>
            <!-- Modal Starts -->
            <div class="modal" id="cart-modal" tabindex="-1" role="dialog">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Cart</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <?php
                                for ($j = 0; $j < count($cartItems); $j++) {
                                    $product_id = $cartItems[$j]['pro_id'];
                                    
                                    // Another Query to extract the products from the 'product' table with the pro_id of 'product_id'
                                    $sql_temp = "SELECT * FROM product WHERE pro_id = '$product_id'";

                                    $meow = $conn->query($sql_temp);
                                    $product = $meow->fetchAll(); /// extracting the Product
                            ?>
                                    <!-- Product Starts -->
                                    <div class="row">
                                        <div class="col-3">
                                            <img class="img-responsive" style="max-width: 100%; height: 15vh;" src=<?php echo $product[0]['image_dir']?> alt="preview">
                                        </div>
                                        <div class="col-5 offset-1 my-auto">
                                            <h6 class="product-name"><?php echo $product[0]['pro_name'] ?></h6>
                                            <p class="mb-1">
                                                <?php echo $product[0]['details'] ?>
                                            </p>
                                            <h6><strong>Price: <span class="text-muted price">
                                            <span><?php echo $product[0]['price_per_unit'] ?> </span>
                                            </span> BDT</strong></h6>
                                        </div>
                                        <div class="col-3">
                                            <!-- The Remove Item Button -->
                                            <form action="index.php" method="GET">
                                                <button type="submit" class="btn btn-outline-danger btn-xs remove-product" name="remove_item" value=<?php echo $product[0]['pro_id']?>>
                                                    <i class="fa fa-trash" aria-hidden="true"></i>
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                    <hr>
                                    <!-- Product Ends-->
                            <?php
                                } // END Outer For Loop
                            ?>
                        </div>
                        <div class="modal-footer">
                            <form action="saveorder_info.php">
                                <input type="submit" value="Order Now">
                            </form>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Modal Ends -->
    <?php
        }
        else{
            echo    "<script>
                        var y = document.getElementById('view_cart');
                        y.style.color = 'red';
                    </script>";
        }
    }
    catch (PDOException $ex) {
        echo    'Execute Failed: ' . $ex->getMessage();
        echo    "<script>
                    alert('Database Connection Error!!');
                </script>";
    }
    $conn = null;
?>
