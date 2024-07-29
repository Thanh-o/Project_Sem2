<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout</title>
    <style>
        .checkoutLayout {
            display: flex;
            justify-content: center;
            padding: 20px;
        }
        .right {
            width: 100%;
            max-width: 600px;
            margin: auto;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        .form .group {
            margin-bottom: 15px;
        }
        .form label {
            display: block;
            margin-bottom: 5px;
        }
        .form input[type="text"],
        .form select {
            width: 100%;
            padding: 8px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }
        .return {
            margin-top: 20px;
        }
        .return .row {
            display: flex;
            justify-content: space-between;
            margin-bottom: 10px;
        }
        .buttonCheckout {
            display: block;
            width: 100%;
            padding: 10px;
            border: none;
            background-color: #007bff;
            color: white;
            font-size: 16px;
            border-radius: 4px;
            cursor: pointer;
        }
        .buttonCheckout:hover {
            background-color: #0056b3;
        }
        .selected-bank-name {
            margin-top: 5px;
            font-style: italic;
        }
    </style>
</head>
<body>
    <div class="checkoutLayout">
        <div class="right">
            <h1>Order No.</h1>
            <form action="{{ route('cart.checkout') }}" method="POST">
                @csrf
                <div class="form">
                    <div class="group">
                        <label for="fullName">Full Name</label>
                        <input type="text" name="full_name" id="fullName" required>
                    </div>
                    <div class="group">
                        <label for="phoneNumber">Phone Number</label>
                        <input type="text" name="phone_number" id="phoneNumber" required>
                    </div>
                    <div class="group">
                        <label for="deliveryAddress">Delivery Address</label>
                        <input type="text" name="delivery_address" id="deliveryAddress" required>
                    </div>
                    <div class="group">
                        <label for="deliveryMethod">Form Of Delivery</label>
                        <select name="delivery_method" id="deliveryMethod" required>
                            <option value="">Choose...</option>
                            <option value="standard">Standard Delivery</option>
                            <option value="express">Express Delivery</option>
                        </select>
                    </div>
                    <div class="group">
                        <label for="method">Payment Method</label>
                        <select name="payment_method" id="method" required>
                            <option value="">Choose...</option>
                            <option value="paycash">Pay Cash</option>
                            <option value="deposit">Deposit</option>
                            <option value="installment">Installment</option>
                        </select>
                    </div>

                    <div class="group" id="installment-options" style="display: none;">
                        <label for="installment-period">Choose Installment Period</label>
                        <select name="installment_period" id="installment-period">
                            <option value="">Choose...</option>
                            <option value="3-months">3 Months</option>
                            <option value="6-months">6 Months</option>
                            <option value="12-months">12 Months</option>
                        </select>
                        <label for="deposit-amount">Choose Deposit Amount</label>
                        <select name="deposit_amount" id="deposit-amount">
                            <option value="">Choose...</option>
                            <option value="10%">10%</option>
                            <option value="20%">20%</option>
                            <option value="30%">30%</option>
                        </select>
                    </div>

                    <div class="group" id="deposit-options" style="display: none;">
                        <div class="group">
                            <button type="button" id="bank-button">Select Bank</button>
                            <input type="hidden" id="selected-bank" name="selected_bank">
                            <div id="selected-bank-name" class="selected-bank-name">No bank selected</div>
                        </div>
                        <div class="group" style="margin-top: 10px">
                            <label for="cardnumber">Card Number</label>
                            <input type="text" id="cardnumber" name="cardnumber" placeholder="Enter card number" required>
                        </div>
                        <div class="group">
                            <label for="cardexpiry">Expiry Date</label>
                            <input type="text" id="cardexpiry" name="cardexpiry" placeholder="MM/YY" required>
                        </div>
                        <div class="group">
                            <label for="cardcvc">CVC</label>
                            <input type="text" id="cardcvc" name="cardcvc" placeholder="CVC" required>
                        </div>
                    </div>
                </div>
                <div class="return">
                    <div class="row">
                        <div>Total Quantity</div>
                        <div class="totalQuantity">0</div>
                    </div>
                    <div class="row">
                        <div>Total Price</div>
                        <div class="totalPrice">$0.00</div>
                    </div>
                </div>
                <button type="submit" class="buttonCheckout">Order</button>
            </form>
        </div>
    </div>

</body>
</html>
