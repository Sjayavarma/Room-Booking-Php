<?php
$name = $_POST['name'];
$total = $_POST['total'];
$mobile = $_POST['Phone'];
$address = $_POST['location'];

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirm to Pay</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    
</head>
<style type="text/css">
 

.parent_main {
  height: 100vh;
  width: 100vw;
  display: flex;
  align-items: center;
  justify-content: center;
}

span {
  cursor: pointer;
}

.minus,.plus {
  width: 50px;
  height: 45px;
  background: #f2f2f2;
  border-radius: 4px;
  padding: 8px 5px 8px 5px;
  border: 1px solid #ddd;
  display: inline-block;
  vertical-align: middle;
  text-align: center;
}

#qty {
  height: 34px;
  width: 100px;
  text-align: center;
  font-size: 20px;
  border: 1px solid #ddd;
  border-radius: 4px;
  display: inline-block;
  vertical-align: middle;
}
</style>
<body>
    <div class="container">
        <div class="parent_main">
            <h2 class="h3 text-center" style="display:none;" >Click the Pay button for payment!</h2>
            <div>
                <button class="btn btn-success"  style="display:none;"  id="rzp-button1">Pay with Razorpay</button>
            </div>
        </div>
    </div>

    <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
    <script>
        var options = {
            "key": "rzp_test_9TB3asShG3RvdV", // Enter the Key ID generated from the Dashboard
            "amount": "<?php echo $total * 100; ?>", // Amount is in currency subunits. Default currency is INR. Hence, 50000 refers to 50000 paise
            "currency": "INR",
            "name": "Fridayinn",
            "description": "Transaction for room booking",
            "image": "img/Friday inn 2.png",
            //"order_id": " //echo(rand(10,100));", //This is a sample Order ID. Pass the `id` obtained in the response of Step 1
            "callback_url": "thank.php",
            "prefill": {
                "name": "<?php echo $name; ?>",
                
                "contact": "<?php echo $mobile; ?>"
            },
            "notes": {
                "address": "<?php echo $address; ?>"
            },
            "theme": {
                "color": "#3399cc"
            }
        };
        var rzp1 = new Razorpay(options);
        document.getElementById('rzp-button1').onclick = function(e) {
            rzp1.open();
            e.preventDefault();
        }
    </script>

    <script>
        window.onload = function() {
            document.getElementById('rzp-button1').click();
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
