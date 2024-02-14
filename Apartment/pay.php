<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pay page</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <div class="container">
        <div class="form-cover">
            <h3>Payment</h3>
            <form action="">
                <div class="form-group">
                    <input class="form-group" type="text" id="add" name="Location"
                        placeholder=" Apartment's Location"><br>
                </div>
                <div class="form-group">
                    <input class="form-group" type="number" id="price" name="price" placeholder="Price"><br>
                </div>
                <div>
                    <label for="payment">Payment</label>
                    <select name="payment" id="pmt" onchange="transferPage()">
                        <option id="cash" value="cash">Cash</option>
                        <option id="transfer" value="transfer">Transfer</option>
                        <option id="card" value="card">Card</option>
                    </select><br>
                </div>
                <div class="form-group">
                    <label for="date">Date</label>
                    <input type="date" id="date" name="date" placeholder="date"><br>
                </div>

                <button> <a href="success.php">PAY</a></button>

            </form>
        </div>
    </div>
    <script>
        var transfer = document.getElementById("transfer");
        var cash = document.getElementById("cash");
        var card = document.getElementById("card");
        function transferPage() {
            var paymentOption = document.getElementById("pmt").value;

            if (paymentOption === "transfer") {
                window.location.href = "transfer.php";
            } else if (paymentOption === "cash") {
                window.location.href = "cash.php";
            } else if (paymentOption === "card") {
                window.location.href = "card.php";
            }
        }
        var pay = document.querySelector("button");
        pay.addEventListener("click", function() {
            window.location.href = "success.php";
        })
    </script>
</body>

</html>