<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
        <div class="container">
            <a href="{{ route('orders.index') }}">Back</a>
        <h2>Edit Order</h2>
        <form method="POST" action="{{ route('orders.update', ['id' => $order->order_id]) }}">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="customer_id">Customer:</label>
                <select class="form-control" id="customer_id" name="customer_id" required>
                    @foreach($customers as $customer)
                        <option value="{{ $customer->customer_id }}" {{ $order->customer_id == $customer->customer_id ? 'selected' : '' }}>{{ $customer->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="employee_id">Employee:</label>
            </div>
            <div class="form-group">
                <label for="total_amount">Total Amount:</label>
                <input type="number" class="form-control" id="total_amount" name="total_amount" value="{{ $order->total_amount }}" required>
            </div>

            <div class="form-group">
                <label for="status">Status:</label>
                <select class="form-select" id="status" name="status" required>
                    @foreach ($statuses as $key => $label)
                        <option value="{{ $key }}">{{ $label }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="payment">Payment</label>
                <select class="form-select" id="payment" name="payment" required>
                    @foreach ($payments as $key => $label)
                        <option value="{{ $key }}">{{ $label }}</option>
                    @endforeach
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Update Order</button>
        </form>
    </div>

</body>
</html>