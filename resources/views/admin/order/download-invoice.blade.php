<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title>invoice</title>

    <!-- Favicon -->
    <link rel="icon" href="./images/favicon.png" type="image/x-icon" />

    <!-- Invoice styling -->
    <style>
        body {
            font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
            text-align: center;
            color: #777;
        }

        body h1 {
            font-weight: 300;
            margin-bottom: 0px;
            padding-bottom: 0px;
            color: #000;
        }

        body h3 {
            font-weight: 300;
            margin-top: 10px;
            margin-bottom: 20px;
            font-style: italic;
            color: #555;
        }

        body a {
            color: #06f;
        }

        .invoice-box {
            max-width: 800px;
            margin: auto;
            padding: 30px;
            border: 1px solid #eee;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.15);
            font-size: 16px;
            line-height: 24px;
            font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
            color: #555;
        }

        .invoice-box table {
            width: 100%;
            line-height: inherit;
            text-align: left;
            border-collapse: collapse;
        }

        .invoice-box table td {
            padding: 5px;
            vertical-align: top;
        }

        .invoice-box table tr td:nth-child(2) {
            text-align: right;
        }

        .invoice-box table tr.top table td {
            padding-bottom: 20px;
        }

        .invoice-box table tr.top table td.title {
            font-size: 45px;
            line-height: 45px;
            color: #333;
        }

        .invoice-box table tr.information table td {
            padding-bottom: 40px;
        }

        .invoice-box table tr.heading td {
            background: #eee;
            border-bottom: 1px solid #ddd;
            font-weight: bold;
        }

        .invoice-box table tr.details td {
            padding-bottom: 20px;
        }

        .invoice-box table tr.item td {
            border-bottom: 1px solid #eee;
        }

        .invoice-box table tr.item.last td {
            border-bottom: none;
        }

        .invoice-box table tr.total td:nth-child(2) {
            border-top: 2px solid #eee;
            font-weight: bold;
        }

        @media only screen and (max-width: 600px) {
            .invoice-box table tr.top table td {
                width: 100%;
                display: block;
                text-align: center;
            }

            .invoice-box table tr.information table td {
                width: 100%;
                display: block;
                text-align: center;
            }
        }
    </style>
</head>

<body>
<div class="invoice-box">
    <table>
        <tr class="top">
            <td colspan="4">
                <table>
                    <tr>
                        <td class="title">
{{--                            <img src="{{asset('/')}}admin/assets/images/brand/Untitled-2-01.png" alt="Company logo" style="width: 100%; max-width: 300px" />--}}
                            <img src="{{ $logoData }}" style="width:200px;">


                        </td>

                        <td>
                            Invoice #: {{$order->invoice_number}}<br />
                            Order Date: {{$order->order_date}}<br />
                            Invoice Date: {{date('Y-m-d')}}
                        </td>
                    </tr>
                </table>
            </td>
        </tr>

        <tr class="information">
            <td colspan="4">
                <table>
                    <tr>
                        <td>
                            <h4><u>Company Information</u></h4>
                            ToyHavenBD.com<br />
                            Road#10, Avenue#04, <br>
                            Mirpur DOHS, Dhaka<br />
                        </td>

                        <td>
                            <h4><u>Customer Information</u></h4>
                            {{$order->customer->name}}<br />
                            {{$order->customer->email}}<br />
                            {{$order->customer->mobile}}<br />
                            {{$order->delivery_address}}
                        </td>
                    </tr>
                </table>
            </td>
        </tr>

        <tr class="heading">
            <td colspan="3">Payment Method</td>

            <td>Amount</td>
        </tr>

        <tr class="details">
            <td colspan="3">{{$order->payment_method}}</td>

            <td>{{$order->order_total}}</td>
        </tr>

        <tr class="heading">
            <td>Item Info</td>
            <td style="text-align: center">Unit Price</td>
            <td style="text-align: center">Quantity</td>
            <td style="text-align: right">Total</td>
        </tr>
        @php($sum=0)
        @foreach($order->orderDetail as $orderDetail)

            <tr class="item">
                <td>{{$orderDetail->name}}</td>
                <td style="text-align: center">{{$orderDetail->price}}</td>
                <td style="text-align: center">{{$orderDetail->qty}}</td>
                <td style="text-align: right">{{$orderDetail->qty * $orderDetail->price}}</td>
            </tr>
            @php($sum = $sum + ($orderDetail->qty * $orderDetail->price) )
        @endforeach
        <tr class="total">
            <td colspan="3"></td>
            <td>Sub Total: {{$sum}}</td>
        </tr>
        <tr class="total">
            <td colspan="3"></td>
            <td>Tax Amount : {{ $order->tax_total }}</td>
{{--            <td>Tax Amount (15%): {{ $tax = round( ($sum*0.15) ) }}</td>--}}
        </tr>
        <tr class="total">
            <td colspan="3"></td>
            <td>Shipping Amount: {{ $order->shipping_total }}</td>
        </tr>
        <tr class="total">
            <td colspan="3"></td>
            <td>Total Payable: {{ $sum + $order->tax_total + $order->shipping_total }}</td>
        </tr>
    </table>
</div>
</body>
</html>
