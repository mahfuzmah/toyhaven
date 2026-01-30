<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'customer_id',
        'courier_id',
        'invoice_number',
        'order_total',
        'tax_total',
        'shipping_total',
        'order_date',
        'order_timestamp',
        'order_status',
        'transaction_id',
        'currency',
        'delivery_address',
        'delivery_date',
        'delivery_timestamp',
        'delivery_status',
        'payment_method',
        'payment_amount',
        'payment_date',
        'payment_timestamp',
        'payment_status',
        'cart_backup',
    ];

    protected static function booted()
    {
        static::creating(function ($order) {
            $year = date('Y');
            $month = date('m');

            $lastInvoice = self::whereYear('created_at', $year)
                ->whereMonth('created_at', $month)
                ->lockForUpdate()
                ->max('invoice_number');

            if ($lastInvoice) {
                $lastNumber = (int) substr($lastInvoice, -5);
            } else {
                $lastNumber = 0;
            }

            $nextNumber = $lastNumber + 1;
            $order->invoice_number = "INV-{$year}-{$month}-" . str_pad($nextNumber, 5, '0', STR_PAD_LEFT);
        });
    }

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    public function orderDetail()
    {
        return $this->hasMany(OrderDetail::class);
    }

    public function courier()
    {
        return $this->belongsTo(Courier::class);
    }
}
