<html>
    <head>
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    </head>
    <body>
        <?php
            include("config.php");
            session_start();

                $product_ID = $_GET["productID"];
                $deletedApplication = "delete";

                $query1 = "DELETE FROM product WHERE PRODUCT_ID= '$product_ID'";
                mysqli_query($conn, $query1) or die (mysqli_error($conn));
        ?>
                <script>
                swal.fire({
                    icon: 'success',
                    title: 'Product Successfully Deleted',
                }).then(function() {
                    window.location.href = 'admin_manageproduct.php'
                });
                </script> 
    
    </body>
</html>
