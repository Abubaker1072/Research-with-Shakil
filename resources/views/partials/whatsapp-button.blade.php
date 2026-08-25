@php
    $waNumber = preg_replace('/[^0-9]/', '', \App\Models\SiteSetting::get('whatsapp_number', '923000000000'));
@endphp
<a href="https://wa.me/{{ $waNumber }}?text=Hello%20Dr.%20Shakil%20Ahmad,%20I%20visited%20your%20website%20and%20would%20like%20to%20inquire%20about%20research%20coaching." 
   target="_blank" 
   class="whatsapp-float" 
   title="Chat with Dr. Shakil Ahmad on WhatsApp"
   id="global-whatsapp-float">
    <i class="fab fa-whatsapp"></i>
</a>
