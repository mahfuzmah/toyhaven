@if(session('success'))
    <div id="cart-message"
         style="position: fixed; top: 20px; right: 20px; background: #28a745; color: white; padding: 10px 15px; border-radius: 5px; z-index: 9999; opacity: 1; transition: opacity 0.5s;">
        {{ session('success') }}
    </div>

    <script>
        // small safety check
        var msg = document.getElementById('cart-message');
        if(msg) {
            // 3 সেকেন্ড পরে fade out
            setTimeout(function() {
                msg.style.opacity = '0';
                // 0.5 সেকেন্ড পরে remove
                setTimeout(function() {
                    if(msg.parentNode) msg.parentNode.removeChild(msg);
                }, 500);
            }, 3000);
        }
    </script>
@endif
