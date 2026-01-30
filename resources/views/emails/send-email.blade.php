<!DOCTYPE html>
<html>
<head>
    <style>
        body { font-family: Arial, sans-serif; line-height: 1.6; color: #333; }
        .container { width: 90%; max-width: 600px; margin: 20px auto; border: 1px solid #ddd; padding: 20px; border-radius: 8px; }
        .header { background-color: #ff5757; color: white; padding: 15px; text-align: center; border-radius: 8px 8px 0 0; }
        .content { padding: 20px 0; }
        .details-table { width: 100%; border-collapse: collapse; margin-top: 15px; }
        .details-table th, .details-table td { border: 1px solid #eee; padding: 10px; text-align: left; }
        .details-table th { background-color: #f7f7f7; }
        .summary-box { float: right; width: 50%; margin-top: 20px; }
        .summary-box td { padding: 5px 0; }
        .footer { margin-top: 30px; padding-top: 15px; border-top: 1px solid #ddd; font-size: 0.9em; text-align: center; color: #777; }
    </style>
</head>
<body>

<div class="container">
    <div class="header">
        <h2>{{ $data['message_title'] }}</h2>
    </div>

    <div class="content">
        <p>Dear {{ $data['customer_name'] }}, </p>

        <p>Thank you for your order! We are excited to prepare your items. Here are the details of your recent purchase:</p>

        <table class="details-table" style="margin-top: 20px;">
            <tr>
                <th style="width: 35%;">Order ID</th>
                <td>#{{ $data['order_id'] }}</td>
            </tr>
            <tr>
                <th>Order Date</th>
                <td>{{ $data['order_date'] }}</td>
            </tr>
            <tr>
                <th>Payment Method</th>
                <td>{{ $data['payment_method'] }}</td>
            </tr>
            <tr>
                <th>Delivery Address</th>
                <td>{{ $data['delivery_address'] }}</td>
            </tr>
        </table>

        <h3>Order Items</h3>
        <table class="details-table">
            <thead>
            <tr>
                <th>Product</th>
                <th>Price</th>
                <th>Qty</th>
                <th>Subtotal</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($data['items'] as $item)
                <tr>
                    <td style="border: 1px solid #eee; padding: 10px;">
{{--                        @if(isset($item['image']) && $item['image'])--}}
{{--                            <img src="{{ $message->embed(($item['image'])) }}"--}}
{{--                                 alt="{{ $item['name'] }}"--}}
{{--                                 style="width: 50px; height: 50px; object-fit: cover; margin-right: 10px;">--}}
{{--                        @endif--}}
{{--                        @if(!empty($item['image']))--}}
{{--                            <img src="{{ $message->embedFromPath($item['image']) }}"--}}
{{--                                 alt="{{ $item['name'] }}"--}}
{{--                                 style="width:50px;height:50px;object-fit:cover;margin-right:10px;">--}}
{{--                        @endif--}}


                        {{ $item['name'] }}
                    </td>

                    <td style="border: 1px solid #eee; padding: 10px;">TK. {{ number_format($item['price'], 2) }}</td>
                    <td style="border: 1px solid #eee; padding: 10px;">{{ $item['qty'] }}</td>
                    <td style="border: 1px solid #eee; padding: 10px; text-align: right;">TK. {{ number_format($item['price'] * $item['qty'], 2) }}</td>
                </tr>
            @endforeach
            </tbody>

        </table>

        <div class="summary-box">
            <table style="width: 100%;">
                <tr>
                    <td>Subtotal: </td>
                    <td style="text-align: right;">TK. {{ number_format($data['order_total'] - $data['shipping_total'] - $data['tax_total'], 2) }}</td>
                </tr>
                <tr>
                    <td>Shipping: </td>
                    <td style="text-align: right;">TK. {{ $data['shipping_total'], 2 }}</td>
                </tr>
                <tr>
                    <td>Tax/VAT: </td>
                    <td style="text-align: right;">TK. {{ $data['tax_total'], 2 }}</td>
                </tr>
                <tr>
                    <td>Grand Total: </td>
                    <td style="text-align: right; font-weight: bold; color: #ff5757;">TK. {{ $data['order_total'], 2 }}</td>
                </tr>
            </table>
        </div>
        <div style="clear: both;"></div>

        <p style="margin-top: 30px;">We will notify you again once your order is shipped.</p>
        <p>Please find your invoice attached to this email.</p>
        <p>**Need assistance?** Please reply to this email or call us at 01304-004499.</p>

    </div>

    <div class="footer">
        <p>&copy; {{ date('Y') }} ToyHavenBD. Happy shopping!</p>
    </div>
</div>

</body>
</html>
