fill:#ffc107; fill:#f50505;
@forelse ( $siteplan->where('code_product', '12345') as $hasil)
    @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
    @elseif ($hasil->status == 'Terjual')
    @elseif ($hasil->status == 'Tersedia')
    <a href="#" data-toggle="modal" data-target="#modalBooking-12345">
    </a>
    @endif
@empty
<a href="#" data-toggle="modal" data-target="#exampleModal" data-id="12345">
</a>
@endforelse



fill: #d9d9d9;
