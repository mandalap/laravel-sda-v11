
<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="100%" viewBox="0 0 700 2800" xml:space="preserve">
    <g transform="matrix(0 5.21 -1.45 0 350 1410.06)" id="mnG9_vx54E8ijXSUo5wF"  >
    <path style="stroke: rgb(0,0,0); stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(119,117,117); fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -243.9625 -15 L 243.9625 -15 L 243.9625 15 L -243.9625 15 z" stroke-linecap="round" />
    </g>
    <g transform="matrix(1.2 0 0 1.62 350 119.47)" id="sWNSVHedLa3ZI7QVQreIQ"  >
        <path style="stroke: rgb(0,0,0); stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(80,80,80); fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -243.9625 -15 L 243.9625 -15 L 243.9625 15 L -243.9625 15 z" stroke-linecap="round" />
        </g>
    <g transform="matrix(1 0 0 1 473.2 384.69)" id="cgJX5Bv5fSitflzbWr9qh"  >
        @forelse ( $siteplan->where('code_product', 'cgJX5Bv5fSitflzbWr9qh') as $hasil)
            @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -100 -40 L 100 -40 L 100 40 L -100 40 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style="fill:#f50505; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -100 -40 L 100 -40 L 100 40 L -100 40 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-cgJX5Bv5fSitflzbWr9qh">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -100 -40 L 100 -40 L 100 40 L -100 40 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="cgJX5Bv5fSitflzbWr9qh">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -100 -40 L 100 -40 L 100 40 L -100 40 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>

    <g transform="matrix(1 0 0 1 397.7 244.11)" id="8jpves1qv6iZY7y8Ye94a"  >
        @forelse ( $siteplan->where('code_product', '8jpves1qv6iZY7y8Ye94a') as $hasil)
            @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 2; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-25, -100)" d="M 0 0 L 50 0 L 50 200.00001 L 0 200.00001 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style="fill:#f50505; stroke: rgb(0,0,0); stroke-width: 2; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-25, -100)" d="M 0 0 L 50 0 L 50 200.00001 L 0 200.00001 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-8jpves1qv6iZY7y8Ye94a">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 2; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-25, -100)" d="M 0 0 L 50 0 L 50 200.00001 L 0 200.00001 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="8jpves1qv6iZY7y8Ye94a">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 2; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-25, -100)" d="M 0 0 L 50 0 L 50 200.00001 L 0 200.00001 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>

    <g transform="matrix(1 0 0 1 447.2 244.11)" id="OEGrsPz6weGe5YOex9llA"  >
        @forelse ( $siteplan->where('code_product', 'OEGrsPz6weGe5YOex9llA') as $hasil)
            @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style=" fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 2; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -25 -100 L 25 -100 L 25 100.00001 L -25 100.00001 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style="fill:#f50505; stroke: rgb(0,0,0); stroke-width: 2; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -25 -100 L 25 -100 L 25 100.00001 L -25 100.00001 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-OEGrsPz6weGe5YOex9llA">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 2; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -25 -100 L 25 -100 L 25 100.00001 L -25 100.00001 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="OEGrsPz6weGe5YOex9llA">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 2; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -25 -100 L 25 -100 L 25 100.00001 L -25 100.00001 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>

    <g transform="matrix(1 0 0 1 497.7 244.11)" id="H4jQgSUy28JdJbBWEC8Vt"  >
        @forelse ( $siteplan->where('code_product', 'H4jQgSUy28JdJbBWEC8Vt') as $hasil)
            @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style="fill:#ffc107;stroke: rgb(0,0,0); stroke-width: 2; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-25, -100)" d="M 0 0 L 50 0 L 50 200.00001 L 0 200.00001 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style=" fill:#f50505;  stroke: rgb(0,0,0); stroke-width: 2; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-25, -100)" d="M 0 0 L 50 0 L 50 200.00001 L 0 200.00001 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-H4jQgSUy28JdJbBWEC8Vt">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 2; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-25, -100)" d="M 0 0 L 50 0 L 50 200.00001 L 0 200.00001 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="H4jQgSUy28JdJbBWEC8Vt">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 2; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-25, -100)" d="M 0 0 L 50 0 L 50 200.00001 L 0 200.00001 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>

    <g transform="matrix(1 0 0 1 548.2 244.11)" id="yGcT_DTubWqo7A4jhc0tD"  >
        @forelse ( $siteplan->where('code_product', 'yGcT_DTubWqo7A4jhc0tD') as $hasil)
            @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 2; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-25, -100)" d="M 0 0 L 50 0 L 50 200.00001 L 0 200.00001 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style="fill:#f50505; stroke: rgb(0,0,0); stroke-width: 2; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-25, -100)" d="M 0 0 L 50 0 L 50 200.00001 L 0 200.00001 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-yGcT_DTubWqo7A4jhc0tD">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 2; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-25, -100)" d="M 0 0 L 50 0 L 50 200.00001 L 0 200.00001 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="yGcT_DTubWqo7A4jhc0tD">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 2; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-25, -100)" d="M 0 0 L 50 0 L 50 200.00001 L 0 200.00001 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>

    <g transform="matrix(1 0 0 1 473.2 465.09)" id="tXQbK9zjf7hAylb0dTsE"  >
        @forelse ( $siteplan->where('code_product', 'tXQbK9zjf7hAylb0dTsE') as $hasil)
            @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -40)" d="M 0 0 L 200 0 L 200 80 L 0 80 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style="fill:#f50505;  stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -40)" d="M 0 0 L 200 0 L 200 80 L 0 80 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-tXQbK9zjf7hAylb0dTsE">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -40)" d="M 0 0 L 200 0 L 200 80 L 0 80 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="tXQbK9zjf7hAylb0dTsE">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -40)" d="M 0 0 L 200 0 L 200 80 L 0 80 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>

    <g transform="matrix(1 0 0 1 473.2 546.09)" id="EZwXZBDVtRrUO8nT9t4qa"  >
        @forelse ( $siteplan->where('code_product', 'EZwXZBDVtRrUO8nT9t4qa') as $hasil)
            @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -40)" d="M 0 0 L 200 0 L 200 80 L 0 80 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style="fill:#f50505;  stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -40)" d="M 0 0 L 200 0 L 200 80 L 0 80 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-EZwXZBDVtRrUO8nT9t4qa">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -40)" d="M 0 0 L 200 0 L 200 80 L 0 80 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="EZwXZBDVtRrUO8nT9t4qa">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -40)" d="M 0 0 L 200 0 L 200 80 L 0 80 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>

    <g transform="matrix(1 0 0 1 473.2 626.49)" id="Vv1tq33ljOV_NrXzM3ziC"  >
        @forelse ( $siteplan->where('code_product', 'Vv1tq33ljOV_NrXzM3ziC') as $hasil)
            @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -40)" d="M 0 0 L 200 0 L 200 80 L 0 80 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style="fill:#f50505; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -40)" d="M 0 0 L 200 0 L 200 80 L 0 80 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-Vv1tq33ljOV_NrXzM3ziC">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -40)" d="M 0 0 L 200 0 L 200 80 L 0 80 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="Vv1tq33ljOV_NrXzM3ziC">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -40)" d="M 0 0 L 200 0 L 200 80 L 0 80 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>

    <g transform="matrix(1 0 0 1 473.2 706.49)" id="Aq9thsC7wvuYoiJx0RMCw"  >
        @forelse ( $siteplan->where('code_product', 'Aq9thsC7wvuYoiJx0RMCw') as $hasil)
            @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -40)" d="M 0 0 L 200 0 L 200 80 L 0 80 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style=" fill:#f50505; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -40)" d="M 0 0 L 200 0 L 200 80 L 0 80 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-Aq9thsC7wvuYoiJx0RMCw">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -40)" d="M 0 0 L 200 0 L 200 80 L 0 80 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="Aq9thsC7wvuYoiJx0RMCw">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -40)" d="M 0 0 L 200 0 L 200 80 L 0 80 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>

    <g transform="matrix(1 0 0 1 473.2 786.89)" id="8GUqMrsIuERXjQRDYb_H_"  >
        @forelse ( $siteplan->where('code_product', '8GUqMrsIuERXjQRDYb_H_') as $hasil)
            @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -40)" d="M 0 0 L 200 0 L 200 80 L 0 80 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style="fill:#f50505; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -40)" d="M 0 0 L 200 0 L 200 80 L 0 80 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-8GUqMrsIuERXjQRDYb_H_">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -40)" d="M 0 0 L 200 0 L 200 80 L 0 80 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="8GUqMrsIuERXjQRDYb_H_">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -40)" d="M 0 0 L 200 0 L 200 80 L 0 80 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>

    <g transform="matrix(1 0 0 1 473.2 867.89)" id="C5jzbxLwt0kh7AnRxAo7d"  >
        @forelse ( $siteplan->where('code_product', 'C5jzbxLwt0kh7AnRxAo7d') as $hasil)
            @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -40)" d="M 0 0 L 200 0 L 200 80 L 0 80 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style="fill:#f50505; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -40)" d="M 0 0 L 200 0 L 200 80 L 0 80 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-C5jzbxLwt0kh7AnRxAo7d">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -40)" d="M 0 0 L 200 0 L 200 80 L 0 80 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="C5jzbxLwt0kh7AnRxAo7d">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -40)" d="M 0 0 L 200 0 L 200 80 L 0 80 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>

    <g transform="matrix(1 0 0 1 473.2 948.29)" id="usVsmFE3_27_cvfarFGT"  >
        @forelse ( $siteplan->where('code_product', 'usVsmFE3_27_cvfarFGT') as $hasil)
            @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -40)" d="M 0 0 L 200 0 L 200 80 L 0 80 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style="fill:#f50505; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -40)" d="M 0 0 L 200 0 L 200 80 L 0 80 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-usVsmFE3_27_cvfarFGT">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -40)" d="M 0 0 L 200 0 L 200 80 L 0 80 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="usVsmFE3_27_cvfarFGT">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -40)" d="M 0 0 L 200 0 L 200 80 L 0 80 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>

    <g transform="matrix(1 0 0 1 473.2 1028.29)" id="lS8ITWku8Q7SayAccwT2"  >
        @forelse ( $siteplan->where('code_product', 'lS8ITWku8Q7SayAccwT2') as $hasil)
            @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -40)" d="M 0 0 L 200 0 L 200 80 L 0 80 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style=" fill:#f50505; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -40)" d="M 0 0 L 200 0 L 200 80 L 0 80 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-lS8ITWku8Q7SayAccwT2">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -40)" d="M 0 0 L 200 0 L 200 80 L 0 80 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="lS8ITWku8Q7SayAccwT2">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -40)" d="M 0 0 L 200 0 L 200 80 L 0 80 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>

    <g transform="matrix(1 0 0 1 473.2 1108.69)" id="DohMRcr34qfhFAbulxK"  >
        @forelse ( $siteplan->where('code_product', 'DohMRcr34qfhFAbulxK') as $hasil)
            @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style="fill:#ffc107;stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -40)" d="M 0 0 L 200 0 L 200 80 L 0 80 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style="fill:#f50505; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -40)" d="M 0 0 L 200 0 L 200 80 L 0 80 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-DohMRcr34qfhFAbulxK">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -40)" d="M 0 0 L 200 0 L 200 80 L 0 80 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="DohMRcr34qfhFAbulxK">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -40)" d="M 0 0 L 200 0 L 200 80 L 0 80 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>

    <g transform="matrix(1 0 0 1 473.2 1189.69)" id="w1_SYeY9jz4vEPfSBkeFA"  >
        @forelse ( $siteplan->where('code_product', 'w1_SYeY9jz4vEPfSBkeFA') as $hasil)
            @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -40)" d="M 0 0 L 200 0 L 200 80 L 0 80 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style="fill:#f50505; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -40)" d="M 0 0 L 200 0 L 200 80 L 0 80 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-w1_SYeY9jz4vEPfSBkeFA">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -40)" d="M 0 0 L 200 0 L 200 80 L 0 80 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="w1_SYeY9jz4vEPfSBkeFA">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -40)" d="M 0 0 L 200 0 L 200 80 L 0 80 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>

    <g transform="matrix(1 0 0 1 473.2 1270.09)" id="VeiV3LeUClVb41B3FJUkd"  >
        @forelse ( $siteplan->where('code_product', 'VeiV3LeUClVb41B3FJUkd') as $hasil)
            @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -40)" d="M 0 0 L 200 0 L 200 80 L 0 80 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style=" fill:#f50505; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -40)" d="M 0 0 L 200 0 L 200 80 L 0 80 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-VeiV3LeUClVb41B3FJUkd">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -40)" d="M 0 0 L 200 0 L 200 80 L 0 80 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="VeiV3LeUClVb41B3FJUkd">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -40)" d="M 0 0 L 200 0 L 200 80 L 0 80 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>

    <g transform="matrix(1 0 0 1 473.2 1350.09)" id="FHnh3kBgpaV21UesKhB5R"  >
        @forelse ( $siteplan->where('code_product', 'FHnh3kBgpaV21UesKhB5R') as $hasil)
            @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -40)" d="M 0 0 L 200 0 L 200 80 L 0 80 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style="fill:#f50505; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -40)" d="M 0 0 L 200 0 L 200 80 L 0 80 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-FHnh3kBgpaV21UesKhB5R">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -40)" d="M 0 0 L 200 0 L 200 80 L 0 80 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="FHnh3kBgpaV21UesKhB5R">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -40)" d="M 0 0 L 200 0 L 200 80 L 0 80 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>

    <g transform="matrix(1 0 0 1 473.2 1430.49)" id="0v7_c1XRrZZuFvDtd9gcx"  >
        @forelse ( $siteplan->where('code_product', '0v7_c1XRrZZuFvDtd9gcx') as $hasil)
            @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style="fill:#ffc107;stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -40)" d="M 0 0 L 200 0 L 200 80 L 0 80 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style="fill:#f50505; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -40)" d="M 0 0 L 200 0 L 200 80 L 0 80 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-0v7_c1XRrZZuFvDtd9gcx">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -40)" d="M 0 0 L 200 0 L 200 80 L 0 80 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="0v7_c1XRrZZuFvDtd9gcx">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -40)" d="M 0 0 L 200 0 L 200 80 L 0 80 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>

    <g transform="matrix(1 0 0 1 473.2 1511.49)" id="bM2AjOce_YnBc3WSnfoYO"  >
        @forelse ( $siteplan->where('code_product', 'bM2AjOce_YnBc3WSnfoYO') as $hasil)
            @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -40)" d="M 0 0 L 200 0 L 200 80 L 0 80 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style="fill:#f50505; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -40)" d="M 0 0 L 200 0 L 200 80 L 0 80 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-bM2AjOce_YnBc3WSnfoYO">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -40)" d="M 0 0 L 200 0 L 200 80 L 0 80 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="bM2AjOce_YnBc3WSnfoYO">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -40)" d="M 0 0 L 200 0 L 200 80 L 0 80 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>

    <g transform="matrix(1 0 0 1 473.2 1592.49)" id="F7YCPjm3jxWcIpycFNTH"  >
        @forelse ( $siteplan->where('code_product', 'F7YCPjm3jxWcIpycFNTH') as $hasil)
            @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style=" fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -40)" d="M 0 0 L 200 0 L 200 80 L 0 80 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style="fill:#f50505;  stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -40)" d="M 0 0 L 200 0 L 200 80 L 0 80 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-F7YCPjm3jxWcIpycFNTH">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -40)" d="M 0 0 L 200 0 L 200 80 L 0 80 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="F7YCPjm3jxWcIpycFNTH">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -40)" d="M 0 0 L 200 0 L 200 80 L 0 80 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>

    <g transform="matrix(1 0 0 1 473.2 1673.49)" id="YWpYN__KPsSRbTZ5thr8P"  >
        @forelse ( $siteplan->where('code_product', 'YWpYN__KPsSRbTZ5thr8P') as $hasil)
            @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style="fill:#ffc107;stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -40)" d="M 0 0 L 200 0 L 200 80 L 0 80 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style="fill:#f50505; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -40)" d="M 0 0 L 200 0 L 200 80 L 0 80 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-YWpYN__KPsSRbTZ5thr8P">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -40)" d="M 0 0 L 200 0 L 200 80 L 0 80 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
            <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="YWpYN__KPsSRbTZ5thr8P">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -40)" d="M 0 0 L 200 0 L 200 80 L 0 80 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>

    <g transform="matrix(1 0 0 1 473.2 1753.89)" id="yd2nEq7Kd7al5WGmQTbun"  >
        @forelse ( $siteplan->where('code_product', 'yd2nEq7Kd7al5WGmQTbun') as $hasil)
            @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -40)" d="M 0 0 L 200 0 L 200 80 L 0 80 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style="fill:#f50505; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -40)" d="M 0 0 L 200 0 L 200 80 L 0 80 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-yd2nEq7Kd7al5WGmQTbun">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -40)" d="M 0 0 L 200 0 L 200 80 L 0 80 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="yd2nEq7Kd7al5WGmQTbun">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -40)" d="M 0 0 L 200 0 L 200 80 L 0 80 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>

    <g transform="matrix(1 0 0 1 473.2 1833.89)" id="uEBs0povuGbNybpEnu28"  >
        @forelse ( $siteplan->where('code_product', 'uEBs0povuGbNybpEnu28') as $hasil)
            @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -40)" d="M 0 0 L 200 0 L 200 80 L 0 80 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style="fill:#f50505; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -40)" d="M 0 0 L 200 0 L 200 80 L 0 80 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-uEBs0povuGbNybpEnu28">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -40)" d="M 0 0 L 200 0 L 200 80 L 0 80 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="uEBs0povuGbNybpEnu28">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -40)" d="M 0 0 L 200 0 L 200 80 L 0 80 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>

    <g transform="matrix(1 0 0 1 473.2 1914.29)" id="LCx4RZArAQDK91aAd2KYo"  >
        @forelse ( $siteplan->where('code_product', 'LCx4RZArAQDK91aAd2KYo') as $hasil)
            @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -40)" d="M 0 0 L 200 0 L 200 80 L 0 80 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style="fill:#f50505; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -40)" d="M 0 0 L 200 0 L 200 80 L 0 80 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-LCx4RZArAQDK91aAd2KYo">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -40)" d="M 0 0 L 200 0 L 200 80 L 0 80 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="LCx4RZArAQDK91aAd2KYo">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -40)" d="M 0 0 L 200 0 L 200 80 L 0 80 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>

    <g transform="matrix(1 0 0 1 473.2 1995.29)" id="ihZuaSiOkZkre31jhd5CH"  >
        @forelse ( $siteplan->where('code_product', 'ihZuaSiOkZkre31jhd5CH') as $hasil)
            @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -40)" d="M 0 0 L 200 0 L 200 80 L 0 80 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style="fill:#f50505; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -40)" d="M 0 0 L 200 0 L 200 80 L 0 80 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-ihZuaSiOkZkre31jhd5CH">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -40)" d="M 0 0 L 200 0 L 200 80 L 0 80 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="ihZuaSiOkZkre31jhd5CH">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -40)" d="M 0 0 L 200 0 L 200 80 L 0 80 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>

    <g transform="matrix(1 0 0 1 473.2 2075.69)" id="98nnvXrAwssDlr0kiFh5Q"  >
        @forelse ( $siteplan->where('code_product', '98nnvXrAwssDlr0kiFh5Q') as $hasil)
            @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -40)" d="M 0 0 L 200 0 L 200 80 L 0 80 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style="fill:#f50505; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -40)" d="M 0 0 L 200 0 L 200 80 L 0 80 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-98nnvXrAwssDlr0kiFh5Q">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -40)" d="M 0 0 L 200 0 L 200 80 L 0 80 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="98nnvXrAwssDlr0kiFh5Q">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -40)" d="M 0 0 L 200 0 L 200 80 L 0 80 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>

    <g transform="matrix(1 0 0 1 473.2 2155.69)" id="GbWhT0zvGKpmHpO4Na4VG"  >
        @forelse ( $siteplan->where('code_product', 'GbWhT0zvGKpmHpO4Na4VG') as $hasil)
            @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -40)" d="M 0 0 L 200 0 L 200 80 L 0 80 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style="fill:#f50505; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -40)" d="M 0 0 L 200 0 L 200 80 L 0 80 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-GbWhT0zvGKpmHpO4Na4VG">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -40)" d="M 0 0 L 200 0 L 200 80 L 0 80 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="GbWhT0zvGKpmHpO4Na4VG">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -40)" d="M 0 0 L 200 0 L 200 80 L 0 80 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>

    <g transform="matrix(1 0 0 1 473.2 2236.09)" id="zBljEbi1i_F3mD4NIDNa2"  >
        @forelse ( $siteplan->where('code_product', 'zBljEbi1i_F3mD4NIDNa2') as $hasil)
            @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style=" fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -40)" d="M 0 0 L 200 0 L 200 80 L 0 80 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style="fill:#f50505; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -40)" d="M 0 0 L 200 0 L 200 80 L 0 80 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-zBljEbi1i_F3mD4NIDNa2">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -40)" d="M 0 0 L 200 0 L 200 80 L 0 80 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="zBljEbi1i_F3mD4NIDNa2">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -40)" d="M 0 0 L 200 0 L 200 80 L 0 80 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>

    <g transform="matrix(1 0 0 1 473.2 2317.09)" id="8Qa2U1VGZlBpA8k98P7jy"  >
        @forelse ( $siteplan->where('code_product', '8Qa2U1VGZlBpA8k98P7jy') as $hasil)
            @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -40)" d="M 0 0 L 200 0 L 200 80 L 0 80 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style="fill:#f50505; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -40)" d="M 0 0 L 200 0 L 200 80 L 0 80 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-8Qa2U1VGZlBpA8k98P7jy">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -40)" d="M 0 0 L 200 0 L 200 80 L 0 80 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="8Qa2U1VGZlBpA8k98P7jy">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -40)" d="M 0 0 L 200 0 L 200 80 L 0 80 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>

    <g transform="matrix(1 0 0 1 473.2 2397.49)" id="aHfIU336jQhxIcJC7YJWM"  >
        @forelse ( $siteplan->where('code_product', 'aHfIU336jQhxIcJC7YJWM') as $hasil)
            @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -40)" d="M 0 0 L 200 0 L 200 80 L 0 80 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style=" fill:#f50505; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -40)" d="M 0 0 L 200 0 L 200 80 L 0 80 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-aHfIU336jQhxIcJC7YJWM">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -40)" d="M 0 0 L 200 0 L 200 80 L 0 80 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="aHfIU336jQhxIcJC7YJWM">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -40)" d="M 0 0 L 200 0 L 200 80 L 0 80 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>

    <g transform="matrix(1 0 0 1 473.2 2477.49)" id="l1k81fnSoLiBtXmQ5zOQF"  >
        @forelse ( $siteplan->where('code_product', 'l1k81fnSoLiBtXmQ5zOQF') as $hasil)
            @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -40)" d="M 0 0 L 200 0 L 200 80 L 0 80 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style=" fill:#f50505; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -40)" d="M 0 0 L 200 0 L 200 80 L 0 80 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-l1k81fnSoLiBtXmQ5zOQF">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -40)" d="M 0 0 L 200 0 L 200 80 L 0 80 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="l1k81fnSoLiBtXmQ5zOQF">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -40)" d="M 0 0 L 200 0 L 200 80 L 0 80 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>

    <g transform="matrix(1 0 0 1 473.2 2557.89)" id="AEUVaNY3VwFvp_Goeo4"  >
        @forelse ( $siteplan->where('code_product', 'AEUVaNY3VwFvp_Goeo4') as $hasil)
            @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -40)" d="M 0 0 L 200 0 L 200 80 L 0 80 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style="fill:#f50505; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -40)" d="M 0 0 L 200 0 L 200 80 L 0 80 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-AEUVaNY3VwFvp_Goeo4">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -40)" d="M 0 0 L 200 0 L 200 80 L 0 80 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="AEUVaNY3VwFvp_Goeo4">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -40)" d="M 0 0 L 200 0 L 200 80 L 0 80 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>

    <g transform="matrix(1 0 0 1 473.2 2638.89)" id="ZphnUl68BtoXt_IqPLAml"  >
        @forelse ( $siteplan->where('code_product', 'ZphnUl68BtoXt_IqPLAml') as $hasil)
            @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -40)" d="M 0 0 L 200 0 L 200 80 L 0 80 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style="fill:#f50505; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -40)" d="M 0 0 L 200 0 L 200 80 L 0 80 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-ZphnUl68BtoXt_IqPLAml">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -40)" d="M 0 0 L 200 0 L 200 80 L 0 80 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="ZphnUl68BtoXt_IqPLAml">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -40)" d="M 0 0 L 200 0 L 200 80 L 0 80 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>

    <g transform="matrix(1 0 0 1 226.75 385.4)" id="vdSO1UR5WHJTTq4wN2vID"  >
        @forelse ( $siteplan->where('code_product', 'vdSO1UR5WHJTTq4wN2vID') as $hasil)
            @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style=" fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -100 -40 L 100 -40 L 100 40 L -100 40 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style="  fill:#f50505;  stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -100 -40 L 100 -40 L 100 40 L -100 40 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-vdSO1UR5WHJTTq4wN2vID">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -100 -40 L 100 -40 L 100 40 L -100 40 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="vdSO1UR5WHJTTq4wN2vID">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -100 -40 L 100 -40 L 100 40 L -100 40 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>

    <g transform="matrix(1 0 0 1 151.25 244.82)" id="oP2OcskamH5eMmHky1nV"  >
        @forelse ( $siteplan->where('code_product', 'oP2OcskamH5eMmHky1nV') as $hasil)
            @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 2; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-25, -100)" d="M 0 0 L 50 0 L 50 200.00001 L 0 200.00001 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style="fill:#f50505; stroke: rgb(0,0,0); stroke-width: 2; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-25, -100)" d="M 0 0 L 50 0 L 50 200.00001 L 0 200.00001 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-oP2OcskamH5eMmHky1nV">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 2; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-25, -100)" d="M 0 0 L 50 0 L 50 200.00001 L 0 200.00001 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="oP2OcskamH5eMmHky1nV">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 2; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-25, -100)" d="M 0 0 L 50 0 L 50 200.00001 L 0 200.00001 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>

    <g transform="matrix(1 0 0 1 201.75 244.82)" id="L3lFHzbgTLbKAlr_8VEn5"  >
        @forelse ( $siteplan->where('code_product', 'L3lFHzbgTLbKAlr_8VEn5') as $hasil)
            @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 2; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -25 -100 L 25 -100 L 25 100.00001 L -25 100.00001 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style=" fill:#f50505; stroke: rgb(0,0,0); stroke-width: 2; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -25 -100 L 25 -100 L 25 100.00001 L -25 100.00001 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-L3lFHzbgTLbKAlr_8VEn5">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 2; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -25 -100 L 25 -100 L 25 100.00001 L -25 100.00001 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="L3lFHzbgTLbKAlr_8VEn5">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 2; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -25 -100 L 25 -100 L 25 100.00001 L -25 100.00001 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>

    <g transform="matrix(1 0 0 1 252.25 244.82)" id="WpdbgPyHhg3vuHo4AFPhb"  >
        @forelse ( $siteplan->where('code_product', 'WpdbgPyHhg3vuHo4AFPhb') as $hasil)
            @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 2; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-25, -100)" d="M 0 0 L 50 0 L 50 200.00001 L 0 200.00001 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style=" fill:#f50505; stroke: rgb(0,0,0); stroke-width: 2; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-25, -100)" d="M 0 0 L 50 0 L 50 200.00001 L 0 200.00001 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-WpdbgPyHhg3vuHo4AFPhb">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 2; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-25, -100)" d="M 0 0 L 50 0 L 50 200.00001 L 0 200.00001 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="WpdbgPyHhg3vuHo4AFPhb">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 2; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-25, -100)" d="M 0 0 L 50 0 L 50 200.00001 L 0 200.00001 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>

    <g transform="matrix(1 0 0 1 302.25 244.82)" id="s818JtUsg1AV8UayRsZlI"  >
        @forelse ( $siteplan->where('code_product', 's818JtUsg1AV8UayRsZlI') as $hasil)
            @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 2; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-25, -100)" d="M 0 0 L 50 0 L 50 200.00001 L 0 200.00001 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style=" fill:#f50505; stroke: rgb(0,0,0); stroke-width: 2; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-25, -100)" d="M 0 0 L 50 0 L 50 200.00001 L 0 200.00001 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-s818JtUsg1AV8UayRsZlI">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 2; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-25, -100)" d="M 0 0 L 50 0 L 50 200.00001 L 0 200.00001 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="s818JtUsg1AV8UayRsZlI">
            <path style="fill: #f8f8f8;  stroke: rgb(0,0,0); stroke-width: 2; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-25, -100)" d="M 0 0 L 50 0 L 50 200.00001 L 0 200.00001 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>

    <g transform="matrix(1 0 0 1 226.75 465.8)" id="bfSCLTJfThBiYGKJlzwjH"  >
        @forelse ( $siteplan->where('code_product', 'bfSCLTJfThBiYGKJlzwjH') as $hasil)
            @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -40)" d="M 0 0 L 200 0 L 200 80 L 0 80 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style="fill:#f50505; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -40)" d="M 0 0 L 200 0 L 200 80 L 0 80 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-bfSCLTJfThBiYGKJlzwjH">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -40)" d="M 0 0 L 200 0 L 200 80 L 0 80 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="bfSCLTJfThBiYGKJlzwjH">
            <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -40)" d="M 0 0 L 200 0 L 200 80 L 0 80 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>

    <g transform="matrix(1 0 0 1 226.75 546.8)" id="ITolx8SP6uiVG1pnvD2xW"  >
        @forelse ( $siteplan->where('code_product', 'ITolx8SP6uiVG1pnvD2xW') as $hasil)
            @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -40)" d="M 0 0 L 200 0 L 200 80 L 0 80 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style=" fill:#f50505; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -40)" d="M 0 0 L 200 0 L 200 80 L 0 80 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-ITolx8SP6uiVG1pnvD2xW">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -40)" d="M 0 0 L 200 0 L 200 80 L 0 80 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="ITolx8SP6uiVG1pnvD2xW">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -40)" d="M 0 0 L 200 0 L 200 80 L 0 80 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>

    <g transform="matrix(1 0 0 1 226.75 627.2)" id="tCsKXsmBnbEwpE2GSUj"  >
        @forelse ( $siteplan->where('code_product', 'tCsKXsmBnbEwpE2GSUj') as $hasil)
            @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -40)" d="M 0 0 L 200 0 L 200 80 L 0 80 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style="fill:#f50505; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -40)" d="M 0 0 L 200 0 L 200 80 L 0 80 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-tCsKXsmBnbEwpE2GSUj">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -40)" d="M 0 0 L 200 0 L 200 80 L 0 80 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="tCsKXsmBnbEwpE2GSUj">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -40)" d="M 0 0 L 200 0 L 200 80 L 0 80 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>
    <g transform="matrix(1 0 0 1 226.75 707.2)" id="TdZczoREAiXWs7Zg1s3zq"  >
        @forelse ( $siteplan->where('code_product', 'TdZczoREAiXWs7Zg1s3zq') as $hasil)
            @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -40)" d="M 0 0 L 200 0 L 200 80 L 0 80 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style="fill:#f50505; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -40)" d="M 0 0 L 200 0 L 200 80 L 0 80 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-TdZczoREAiXWs7Zg1s3zq">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -40)" d="M 0 0 L 200 0 L 200 80 L 0 80 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="TdZczoREAiXWs7Zg1s3zq">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -40)" d="M 0 0 L 200 0 L 200 80 L 0 80 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>

    <g transform="matrix(1 0 0 1 226.75 787.6)" id="NW3DtLG8fkEXKbgdLN26N"  >
        @forelse ( $siteplan->where('code_product', 'NW3DtLG8fkEXKbgdLN26N') as $hasil)
            @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style=" fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -40)" d="M 0 0 L 200 0 L 200 80 L 0 80 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style=" fill:#f50505; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -40)" d="M 0 0 L 200 0 L 200 80 L 0 80 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-NW3DtLG8fkEXKbgdLN26N">
                <path style="fill: #f8f8f8;stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -40)" d="M 0 0 L 200 0 L 200 80 L 0 80 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="NW3DtLG8fkEXKbgdLN26N">
            <path style="fill: #f8f8f8;stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -40)" d="M 0 0 L 200 0 L 200 80 L 0 80 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>

    <g transform="matrix(1 0 0 1 226.75 868.6)" id="tMYoF11YfPPqe3uqkp8G1"  >
        @forelse ( $siteplan->where('code_product', 'tMYoF11YfPPqe3uqkp8G1') as $hasil)
            @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -40)" d="M 0 0 L 200 0 L 200 80 L 0 80 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style="fill:#f50505;  stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -40)" d="M 0 0 L 200 0 L 200 80 L 0 80 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-tMYoF11YfPPqe3uqkp8G1">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -40)" d="M 0 0 L 200 0 L 200 80 L 0 80 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="tMYoF11YfPPqe3uqkp8G1">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -40)" d="M 0 0 L 200 0 L 200 80 L 0 80 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>
    <g transform="matrix(1 0 0 1 226.75 949)" id="qOzueohbokAhjijMKrkzX"  >
        @forelse ( $siteplan->where('code_product', 'qOzueohbokAhjijMKrkzX') as $hasil)
            @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style=" fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -40)" d="M 0 0 L 200 0 L 200 80 L 0 80 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style=" fill:#f50505; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -40)" d="M 0 0 L 200 0 L 200 80 L 0 80 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-qOzueohbokAhjijMKrkzX">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -40)" d="M 0 0 L 200 0 L 200 80 L 0 80 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="qOzueohbokAhjijMKrkzX">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -40)" d="M 0 0 L 200 0 L 200 80 L 0 80 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>

    <g transform="matrix(1 0 0 1 226.75 1029)" id="3IXm0spEv0WbOc1UwFbxj"  >
        @forelse ( $siteplan->where('code_product', '3IXm0spEv0WbOc1UwFbxj') as $hasil)
            @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -40)" d="M 0 0 L 200 0 L 200 80 L 0 80 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style=" fill:#f50505; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -40)" d="M 0 0 L 200 0 L 200 80 L 0 80 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-3IXm0spEv0WbOc1UwFbxj">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -40)" d="M 0 0 L 200 0 L 200 80 L 0 80 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="3IXm0spEv0WbOc1UwFbxj">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -40)" d="M 0 0 L 200 0 L 200 80 L 0 80 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>

    <g transform="matrix(1 0 0 1 226.75 1109.4)" id="pOEGEAiHFvKwDbRhr4Ho"  >
        @forelse ( $siteplan->where('code_product', 'pOEGEAiHFvKwDbRhr4Ho') as $hasil)
            @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style=" fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -40)" d="M 0 0 L 200 0 L 200 80 L 0 80 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style="fill:#f50505; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -40)" d="M 0 0 L 200 0 L 200 80 L 0 80 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-pOEGEAiHFvKwDbRhr4Ho">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -40)" d="M 0 0 L 200 0 L 200 80 L 0 80 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="pOEGEAiHFvKwDbRhr4Ho">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -40)" d="M 0 0 L 200 0 L 200 80 L 0 80 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>

    <g transform="matrix(1 0 0 1 226.75 1190.4)" id="fTcepLW0vlTbklrzE2eF9"  >
        @forelse ( $siteplan->where('code_product', 'fTcepLW0vlTbklrzE2eF9') as $hasil)
            @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -40)" d="M 0 0 L 200 0 L 200 80 L 0 80 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style=" fill:#f50505; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -40)" d="M 0 0 L 200 0 L 200 80 L 0 80 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-fTcepLW0vlTbklrzE2eF9">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -40)" d="M 0 0 L 200 0 L 200 80 L 0 80 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="fTcepLW0vlTbklrzE2eF9">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -40)" d="M 0 0 L 200 0 L 200 80 L 0 80 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>

    <g transform="matrix(1 0 0 1 226.75 1270.8)" id="XL3MKQ0TXWnn763iRDGOW"  >
        @forelse ( $siteplan->where('code_product', 'XL3MKQ0TXWnn763iRDGOW') as $hasil)
            @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -40)" d="M 0 0 L 200 0 L 200 80 L 0 80 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style=" fill:#f50505; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -40)" d="M 0 0 L 200 0 L 200 80 L 0 80 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-XL3MKQ0TXWnn763iRDGOW">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -40)" d="M 0 0 L 200 0 L 200 80 L 0 80 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="XL3MKQ0TXWnn763iRDGOW">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -40)" d="M 0 0 L 200 0 L 200 80 L 0 80 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>

    <g transform="matrix(1 0 0 1 226.75 1350.8)" id="0pASxPIThMBqRaeims_4Z"  >
        @forelse ( $siteplan->where('code_product', '0pASxPIThMBqRaeims_4Z') as $hasil)
            @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -40)" d="M 0 0 L 200 0 L 200 80 L 0 80 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style="fill:#f50505; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -40)" d="M 0 0 L 200 0 L 200 80 L 0 80 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-0pASxPIThMBqRaeims_4Z">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -40)" d="M 0 0 L 200 0 L 200 80 L 0 80 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="0pASxPIThMBqRaeims_4Z">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -40)" d="M 0 0 L 200 0 L 200 80 L 0 80 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>

    <g transform="matrix(1 0 0 1 226.75 1431.2)" id="rhwlqT7BHGtFUboDj4HIi"  >
        @forelse ( $siteplan->where('code_product', 'rhwlqT7BHGtFUboDj4HIi') as $hasil)
            @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style="fill:#ffc107;stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -40)" d="M 0 0 L 200 0 L 200 80 L 0 80 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style=" fill:#f50505; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -40)" d="M 0 0 L 200 0 L 200 80 L 0 80 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-rhwlqT7BHGtFUboDj4HIi">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -40)" d="M 0 0 L 200 0 L 200 80 L 0 80 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="rhwlqT7BHGtFUboDj4HIi">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -40)" d="M 0 0 L 200 0 L 200 80 L 0 80 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>

    <g transform="matrix(1 0 0 1 226.75 1512.2)" id="CAxqMVrx_coGhjmxrhmm5"  >
        @forelse ( $siteplan->where('code_product', 'CAxqMVrx_coGhjmxrhmm5') as $hasil)
            @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -40)" d="M 0 0 L 200 0 L 200 80 L 0 80 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style="fill:#f50505; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -40)" d="M 0 0 L 200 0 L 200 80 L 0 80 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-CAxqMVrx_coGhjmxrhmm5">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -40)" d="M 0 0 L 200 0 L 200 80 L 0 80 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="CAxqMVrx_coGhjmxrhmm5">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -40)" d="M 0 0 L 200 0 L 200 80 L 0 80 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>

    <g transform="matrix(1 0 0 1 226.75 1593.2)" id="wPh2O1lnL6hcTqU6jZdFq"  >
        @forelse ( $siteplan->where('code_product', 'wPh2O1lnL6hcTqU6jZdFq') as $hasil)
            @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style=" fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -40)" d="M 0 0 L 200 0 L 200 80 L 0 80 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style="fill:#f50505; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -40)" d="M 0 0 L 200 0 L 200 80 L 0 80 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-wPh2O1lnL6hcTqU6jZdFq">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -40)" d="M 0 0 L 200 0 L 200 80 L 0 80 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="wPh2O1lnL6hcTqU6jZdFq">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -40)" d="M 0 0 L 200 0 L 200 80 L 0 80 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>

    <g transform="matrix(1 0 0 1 226.75 1674.2)" id="gLUdPALT6PZO1zWo8mKWQ"  >
        @forelse ( $siteplan->where('code_product', 'gLUdPALT6PZO1zWo8mKWQ') as $hasil)
            @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -40)" d="M 0 0 L 200 0 L 200 80 L 0 80 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style="fill:#f50505;  stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -40)" d="M 0 0 L 200 0 L 200 80 L 0 80 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-gLUdPALT6PZO1zWo8mKWQ">
                <path style=" fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -40)" d="M 0 0 L 200 0 L 200 80 L 0 80 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="gLUdPALT6PZO1zWo8mKWQ">
            <path style=" fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -40)" d="M 0 0 L 200 0 L 200 80 L 0 80 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>
    <g transform="matrix(1 0 0 1 226.75 1754.6)" id="x1_f3EOSxhC40YmK0BAof"  >
        @forelse ( $siteplan->where('code_product', 'x1_f3EOSxhC40YmK0BAof') as $hasil)
            @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -40)" d="M 0 0 L 200 0 L 200 80 L 0 80 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style=" fill:#f50505; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -40)" d="M 0 0 L 200 0 L 200 80 L 0 80 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-x1_f3EOSxhC40YmK0BAof">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -40)" d="M 0 0 L 200 0 L 200 80 L 0 80 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="x1_f3EOSxhC40YmK0BAof">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -40)" d="M 0 0 L 200 0 L 200 80 L 0 80 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>
    <g transform="matrix(1 0 0 1 226.75 1834.6)" id="MJnm8nx3s4ZZu64SaSi7D"  >
        @forelse ( $siteplan->where('code_product', 'MJnm8nx3s4ZZu64SaSi7D') as $hasil)
            @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style="fill:#ffc107;stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -40)" d="M 0 0 L 200 0 L 200 80 L 0 80 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style="fill:#f50505; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -40)" d="M 0 0 L 200 0 L 200 80 L 0 80 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-MJnm8nx3s4ZZu64SaSi7D">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -40)" d="M 0 0 L 200 0 L 200 80 L 0 80 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="MJnm8nx3s4ZZu64SaSi7D">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -40)" d="M 0 0 L 200 0 L 200 80 L 0 80 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>

    <g transform="matrix(1 0 0 1 226.75 1915)" id="cEMMcQmKYqNHw4GDLClX"  >
        @forelse ( $siteplan->where('code_product', 'cEMMcQmKYqNHw4GDLClX') as $hasil)
            @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -40)" d="M 0 0 L 200 0 L 200 80 L 0 80 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style="fill:#f50505; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -40)" d="M 0 0 L 200 0 L 200 80 L 0 80 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-cEMMcQmKYqNHw4GDLClX">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -40)" d="M 0 0 L 200 0 L 200 80 L 0 80 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="cEMMcQmKYqNHw4GDLClX">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -40)" d="M 0 0 L 200 0 L 200 80 L 0 80 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>
    <g transform="matrix(1 0 0 1 226.75 1996)" id="sGwedDsmgbR97x1RzqVm"  >
        @forelse ( $siteplan->where('code_product', 'sGwedDsmgbR97x1RzqVm') as $hasil)
            @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -40)" d="M 0 0 L 200 0 L 200 80 L 0 80 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style="fill:#f50505;  stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -40)" d="M 0 0 L 200 0 L 200 80 L 0 80 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-sGwedDsmgbR97x1RzqVm">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -40)" d="M 0 0 L 200 0 L 200 80 L 0 80 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="sGwedDsmgbR97x1RzqVm">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -40)" d="M 0 0 L 200 0 L 200 80 L 0 80 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>

    <g transform="matrix(1 0 0 1 226.75 2076.4)" id="P8ZfYu643WkSiuuLOmx4p"  >
        @forelse ( $siteplan->where('code_product', 'P8ZfYu643WkSiuuLOmx4p') as $hasil)
            @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style="fill:#ffc107;stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -40)" d="M 0 0 L 200 0 L 200 80 L 0 80 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style=" fill:#f50505; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -40)" d="M 0 0 L 200 0 L 200 80 L 0 80 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-P8ZfYu643WkSiuuLOmx4p">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -40)" d="M 0 0 L 200 0 L 200 80 L 0 80 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="P8ZfYu643WkSiuuLOmx4p">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -40)" d="M 0 0 L 200 0 L 200 80 L 0 80 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>
    <g transform="matrix(1 0 0 1 226.75 2156.4)" id="Qsz9PDefiubNg9iN85N"  >
        @forelse ( $siteplan->where('code_product', 'Qsz9PDefiubNg9iN85N') as $hasil)
            @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -40)" d="M 0 0 L 200 0 L 200 80 L 0 80 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style="fill:#f50505; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -40)" d="M 0 0 L 200 0 L 200 80 L 0 80 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-Qsz9PDefiubNg9iN85N">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -40)" d="M 0 0 L 200 0 L 200 80 L 0 80 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="Qsz9PDefiubNg9iN85N">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -40)" d="M 0 0 L 200 0 L 200 80 L 0 80 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>
    <g transform="matrix(1 0 0 1 226.75 2236.8)" id="G76sEGEsHsh45Ao2N9lZK"  >
        @forelse ( $siteplan->where('code_product', 'G76sEGEsHsh45Ao2N9lZK') as $hasil)
            @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -40)" d="M 0 0 L 200 0 L 200 80 L 0 80 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style="fill:#f50505;stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -40)" d="M 0 0 L 200 0 L 200 80 L 0 80 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-G76sEGEsHsh45Ao2N9lZK">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -40)" d="M 0 0 L 200 0 L 200 80 L 0 80 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="G76sEGEsHsh45Ao2N9lZK">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -40)" d="M 0 0 L 200 0 L 200 80 L 0 80 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>

    <g transform="matrix(1 0 0 1 226.75 2317.8)" id="vjY9hCGjKR5FvgPoqJdEv"  >
        @forelse ( $siteplan->where('code_product', 'vjY9hCGjKR5FvgPoqJdEv') as $hasil)
            @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -40)" d="M 0 0 L 200 0 L 200 80 L 0 80 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style="fill:#f50505; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -40)" d="M 0 0 L 200 0 L 200 80 L 0 80 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-vjY9hCGjKR5FvgPoqJdEv">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -40)" d="M 0 0 L 200 0 L 200 80 L 0 80 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="vjY9hCGjKR5FvgPoqJdEv">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -40)" d="M 0 0 L 200 0 L 200 80 L 0 80 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>

    <g transform="matrix(1 0 0 1 226.75 2398.2)" id="ehPCSKHvDj9SGMbuvHJeG"  >
        @forelse ( $siteplan->where('code_product', 'ehPCSKHvDj9SGMbuvHJeG') as $hasil)
            @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style="fill:#ffc107;stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -40)" d="M 0 0 L 200 0 L 200 80 L 0 80 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style="fill:#f50505;  stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -40)" d="M 0 0 L 200 0 L 200 80 L 0 80 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-ehPCSKHvDj9SGMbuvHJeG">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -40)" d="M 0 0 L 200 0 L 200 80 L 0 80 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="ehPCSKHvDj9SGMbuvHJeG">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -40)" d="M 0 0 L 200 0 L 200 80 L 0 80 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>

    <g transform="matrix(1 0 0 1 226.75 2478.2)" id="ZR2vWdtuCawtMbwsU9aex"  >
        @forelse ( $siteplan->where('code_product', 'ZR2vWdtuCawtMbwsU9aex') as $hasil)
            @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style=" fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -40)" d="M 0 0 L 200 0 L 200 80 L 0 80 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style="fill:#f50505; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -40)" d="M 0 0 L 200 0 L 200 80 L 0 80 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-ZR2vWdtuCawtMbwsU9aex">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -40)" d="M 0 0 L 200 0 L 200 80 L 0 80 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="ZR2vWdtuCawtMbwsU9aex">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -40)" d="M 0 0 L 200 0 L 200 80 L 0 80 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>
    <g transform="matrix(1 0 0 1 226.75 2558.6)" id="06p_AkxwwPKH7uX3leAKQ"  >
        @forelse ( $siteplan->where('code_product', '06p_AkxwwPKH7uX3leAKQ') as $hasil)
            @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -40)" d="M 0 0 L 200 0 L 200 80 L 0 80 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style="fill:#f50505; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -40)" d="M 0 0 L 200 0 L 200 80 L 0 80 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-06p_AkxwwPKH7uX3leAKQ">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -40)" d="M 0 0 L 200 0 L 200 80 L 0 80 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="06p_AkxwwPKH7uX3leAKQ">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -40)" d="M 0 0 L 200 0 L 200 80 L 0 80 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>

    <g transform="matrix(1 0 0 1 226.75 2639.6)" id="ATqc8Pw9KhWmH8gZpQyn"  >
        @forelse ( $siteplan->where('code_product', 'ATqc8Pw9KhWmH8gZpQyn') as $hasil)
            @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -40)" d="M 0 0 L 200 0 L 200 80 L 0 80 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style=" fill:#f50505;  stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -40)" d="M 0 0 L 200 0 L 200 80 L 0 80 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-ATqc8Pw9KhWmH8gZpQyn">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -40)" d="M 0 0 L 200 0 L 200 80 L 0 80 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="ATqc8Pw9KhWmH8gZpQyn">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -40)" d="M 0 0 L 200 0 L 200 80 L 0 80 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>

    <g transform="matrix(0 -1 1 0 397.7 244.11)" style="" id="ngT38U-rp1e6uPl_lTKq3"  >
        <text xml:space="preserve" font-family="Open Sans" font-size="16" font-style="normal" font-weight="800" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-35.91" y="3.07" >RUKO A4</tspan></text>
    </g>
    <g transform="matrix(0 -1 1 0 447.2 244.11)" style="" id="SFi35UIQc0jwVjyvhSQxY"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="16" font-style="normal" font-weight="800" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-35.91" y="3.07" >RUKO A3</tspan></text>
    </g>
    <g transform="matrix(0 -1 1 0 497.7 244.11)" style="" id="GY5WgOB7oT4MIbwSWsJ0m"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="16" font-style="normal" font-weight="800" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-35.91" y="3.07" >RUKO A2</tspan></text>
    </g>
    <g transform="matrix(0 -1 1 0 548.2 244.11)" style="" id="OTNx8EU3k4Gft5FynaMf4"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="16" font-style="normal" font-weight="800" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-35.91" y="5.16" >RUKO A1</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 473.87 384.69)" style="" id="Uqjy7t-qWhL2P3hKZVMIa"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="18" font-style="normal" font-weight="800" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-38.8" y="6.21" >BLOK A1</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 473.87 465.09)" style="" id="panF3u1x5MA-QLM8zu4N3"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="18" font-style="normal" font-weight="800" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-38.8" y="6.21" >BLOK A2</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 473.87 546.09)" style="" id="fKOjQn8BXquYnioRYkkd_"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="18" font-style="normal" font-weight="800" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-38.8" y="6.21" >BLOK A3</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 473.87 625.79)" style="" id="rPORcg96hfbOSa2ikGB7Z"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="18" font-style="normal" font-weight="800" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-38.8" y="6.21" >BLOK A4</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 473.87 706.49)" style="" id="SuVDcbZgKrmQJYZn7HejB"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="18" font-style="normal" font-weight="800" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-38.8" y="6.21" >BLOK A5</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 473.87 786.89)" style="" id="L_gXD-JklTy0xvg9KjHIa"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="18" font-style="normal" font-weight="800" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-38.8" y="6.21" >BLOK A6</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 473.87 867.89)" style="" id="OhloeO5fm0v0PQBDj3Uqf"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="18" font-style="normal" font-weight="800" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-38.8" y="6.21" >BLOK A7</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 473.87 948.29)" style="" id="Ua4z05FkP5w3pFzNDBpky"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="18" font-style="normal" font-weight="800" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-38.8" y="6.21" >BLOK A8</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 473.87 1028.29)" style="" id="RqbYJGGK7W-jEmFDL7N8g"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="18" font-style="normal" font-weight="800" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-38.8" y="6.21" >BLOK A9</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 473.87 1108.69)" style="" id="OFwqzoLQb5qS8fAYukOfu"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="18" font-style="normal" font-weight="800" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-44.08" y="6.21" >BLOK A10</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 473.87 1189.69)" style="" id="0jL3DWCS1MIlHg5MnrmiQ"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="18" font-style="normal" font-weight="800" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-44.08" y="6.21" >BLOK A11</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 473.87 1270.09)" style="" id="mqfgr-r-SFiIQ4H3xtyST"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="18" font-style="normal" font-weight="800" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-44.08" y="6.21" >BLOK A12</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 473.87 1352.69)" style="" id="YZGh7iPEqM1R7_5UKMPUK"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="18" font-style="normal" font-weight="800" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-44.08" y="6.21" >BLOK A13</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 473.87 1433.09)" style="" id="v1Yli1nWObY7syIER-nNM"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="18" font-style="normal" font-weight="800" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-44.08" y="6.21" >BLOK A14</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 473.87 1514.09)" style="" id="8p96BXoqElkV4csCdozEB"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="18" font-style="normal" font-weight="800" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-44.08" y="6.21" >BLOK A15</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 473.87 1593.79)" style="" id="abQ_X2lkZ9zx8Mq-vJlty"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="18" font-style="normal" font-weight="800" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-44.08" y="6.21" >BLOK A16</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 473.87 1674.49)" style="" id="-xkPCfMkwLNPOakMAb-h0"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="18" font-style="normal" font-weight="800" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-44.08" y="6.21" >BLOK A17</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 473.87 1754.89)" style="" id="FiiRPLLLVIxb5I_zU7fv2"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="18" font-style="normal" font-weight="800" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-44.08" y="6.21" >BLOK A18</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 473.87 1833.89)" style="" id="gWRFqCHfi5KEiv7F777cu"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="18" font-style="normal" font-weight="800" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-44.08" y="6.21" >BLOK A19</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 473.87 1916.29)" style="" id="psUy3gn0Pu0l7mUrKLeId"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="18" font-style="normal" font-weight="800" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-44.08" y="6.21" >BLOK A20</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 473.87 1996.29)" style="" id="DGg04ejfkVBorcFgEob5h"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="18" font-style="normal" font-weight="800" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-44.08" y="6.21" >BLOK A21</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 473.87 2076.69)" style="" id="ay4n4zwNKt9vnNtixyjYp"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="18" font-style="normal" font-weight="800" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-44.08" y="6.21" >BLOK A22</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 473.87 2157.69)" style="" id="BJYB8NnZVfX5-B-ldRgof"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="18" font-style="normal" font-weight="800" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-44.08" y="6.21" >BLOK A23</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 473.87 2238.09)" style="" id="1Sx-YrHvzI6EN5mhumGZs"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="18" font-style="normal" font-weight="800" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-44.08" y="6.21" >BLOK A24</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 473.87 2316.59)" style="" id="m2vnnWVJLUNHlwF4YCoWz"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="18" font-style="normal" font-weight="800" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-44.08" y="6.21" >BLOK A25</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 473.87 2396.59)" style="" id="nz9qus1R9BLt7qx7aINj7"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="18" font-style="normal" font-weight="800" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-44.08" y="6.21" >BLOK A26</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 473.87 2476.99)" style="" id="i8k4vczti3GvXlfOW0P6D"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="18" font-style="normal" font-weight="800" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-44.08" y="6.21" >BLOK A27</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 473.87 2557.99)" style="" id="88A87MQILNFPBI-FuMY2D"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="18" font-style="normal" font-weight="800" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-44.08" y="6.21" >BLOK A28</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 473.87 2638.39)" style="" id="vI-bRbGqbFvHlCOybQnaa"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="18" font-style="normal" font-weight="800" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-44.08" y="6.21" >BLOK A29</tspan></text>
    </g>

    <g transform="matrix(0 -1 1 0 151.25 244.82)" style="" id="zbn-SG3iEMo422V6YALbt"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="16" font-style="normal" font-weight="800" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-35.5" y="3.07" >RUKO B1</tspan></text>
    </g>
    <g transform="matrix(0 -1 1 0 200.75 244.82)" style="" id="PTQsZ-nHWf2hvUhDSKMwg"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="16" font-style="normal" font-weight="800" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-35.5" y="3.07" >RUKO B2</tspan></text>
    </g>
    <g transform="matrix(0 -1 1 0 251.25 244.82)" style="" id="iKkzHdOWXK0JBEVX0LWAl"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="16" font-style="normal" font-weight="800" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-35.5" y="3.07" >RUKO B3</tspan></text>
    </g>
    <g transform="matrix(0 -1 1 0 301.75 244.82)" style="" id="t5p7M962x0vK27nbZRC4N"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="16" font-style="normal" font-weight="800" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-35.5" y="5.16" >RUKO B4</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 227.42 385.4)" style="" id="MpOd1N2OlxxRbLVDZW84W"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="18" font-style="normal" font-weight="800" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-38.33" y="6.21" >BLOK B1</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 227.42 465.8)" style="" id="4fmUGMehSDTZSuw8KsnwM"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="18" font-style="normal" font-weight="800" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-38.33" y="6.21" >BLOK B2</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 227.42 546.8)" style="" id="hI8mwsDrnU6-UZ5Apasbh"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="18" font-style="normal" font-weight="800" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-38.33" y="6.21" >BLOK B3</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 227.42 626.5)" style="" id="RucE56EqA_dDPfPoKnRan"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="18" font-style="normal" font-weight="800" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-38.33" y="6.21" >BLOK B4</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 227.42 707.2)" style="" id="S7cli8IcGV3NOt-kb8mhv"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="18" font-style="normal" font-weight="800" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-38.33" y="6.21" >BLOK B5</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 227.42 787.6)" style="" id="Wuz9xlZOc8My_P7WcqlTX"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="18" font-style="normal" font-weight="800" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-38.33" y="6.21" >BLOK B6</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 227.42 868.6)" style="" id="osoy_CT96UAp_Pw1StKKL"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="18" font-style="normal" font-weight="800" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-38.33" y="6.21" >BLOK B7</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 227.42 949)" style="" id="db42xMvjwrmyQhQrwXrHl"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="18" font-style="normal" font-weight="800" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-38.33" y="6.21" >BLOK B8</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 227.42 1029)" style="" id="dOXMy8j8eVCxfeTxbaUCK"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="18" font-style="normal" font-weight="800" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-38.33" y="6.21" >BLOK B9</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 226.75 1109.4)" style="" id="mjbzFG_Decee8PSxUE2Q9"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="18" font-style="normal" font-weight="800" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-43.61" y="6.21" >BLOK B10</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 227.42 1190.4)" style="" id="tbwh7h9PrsCNI-OvtJJk7"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="18" font-style="normal" font-weight="800" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-43.61" y="6.21" >BLOK B11</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 227.42 1270.8)" style="" id="BbwYQzCz919z5zVviZyEY"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="18" font-style="normal" font-weight="800" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-43.61" y="6.21" >BLOK B12</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 227.42 1353.4)" style="" id="GaRyqmPwrk-A-FF6Jeo_Y"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="18" font-style="normal" font-weight="800" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-43.61" y="6.21" >BLOK B13</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 227.42 1433.8)" style="" id="u1VfS706SJRjFxehVKeVM"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="18" font-style="normal" font-weight="800" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-43.61" y="6.21" >BLOK B14</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 227.42 1514.8)" style="" id="XPq1az-GujbrXm_eTqkMf"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="18" font-style="normal" font-weight="800" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-43.61" y="6.21" >BLOK B15</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 227.42 1594.5)" style="" id="MGjhFTQgdYdPi5tHB2o8Y"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="18" font-style="normal" font-weight="800" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-43.61" y="6.21" >BLOK B16</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 227.42 1675.2)" style="" id="0INxk_lguIkDspmz_3FmB"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="18" font-style="normal" font-weight="800" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-43.61" y="6.21" >BLOK B17</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 227.42 1755.6)" style="" id="5LDKjRkydcmUsFmdETdIk"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="18" font-style="normal" font-weight="800" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-43.61" y="6.21" >BLOK B18</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 227.42 1834.6)" style="" id="Gt2SH8iMAh2okPCr9xsHU"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="18" font-style="normal" font-weight="800" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-43.61" y="6.21" >BLOK B19</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 227.42 1917)" style="" id="WBb2t3LyTlm_LdXPP9VR3"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="18" font-style="normal" font-weight="800" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-43.61" y="6.21" >BLOK B20</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 227.75 1996.29)" style="" id="UJT0ZnSXIkUQ4k_Fm8slH"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="18" font-style="normal" font-weight="800" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-43.61" y="6.21" >BLOK B21</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 227.42 2077.4)" style="" id="QupeW1gFt2H0tD3gvVr4J"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="18" font-style="normal" font-weight="800" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-43.61" y="6.21" >BLOK B22</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 227.42 2158.4)" style="" id="npJMGpTYktXm1JaFcGFeC"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="18" font-style="normal" font-weight="800" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-43.61" y="6.21" >BLOK B23</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 227.42 2238.8)" style="" id="ezPcYrWFK8NQMd1hQSgEH"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="18" font-style="normal" font-weight="800" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-43.61" y="6.21" >BLOK B24</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 227.42 2317.3)" style="" id="gi8LGFSkQeM3MWnrSzHeU"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="18" font-style="normal" font-weight="800" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-43.61" y="6.21" >BLOK B25</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 227.42 2397.3)" style="" id="xDizsJN9a00jRsrQfSJIB"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="18" font-style="normal" font-weight="800" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-43.61" y="6.21" >BLOK B26</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 227.42 2477.7)" style="" id="O-iRCbZI_uunEJujaCOJC"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="18" font-style="normal" font-weight="800" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-43.61" y="6.21" >BLOK B27</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 227.42 2558.7)" style="" id="FGqerGlKDIWxOB5w-JWfm"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="18" font-style="normal" font-weight="800" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-43.61" y="6.21" >BLOK B28</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 227.42 2639.1)" style="" id="_1r80L_K2nCBxZtbSalcD"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="18" font-style="normal" font-weight="800" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-43.61" y="6.21" >BLOK B29</tspan></text>
    </g>
    <g transform="matrix(0 -1 1 0 350 2156.98)" style="" id="WJ4KfnME6MFWXz5pU61Y2"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="18" font-style="normal" font-weight="700" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #ffffff; fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-101.87" y="5.16" >Jalan Komplek 5 meter</tspan></text>
    </g>
    <g transform="matrix(0 -1 1 0 350 2156.98)" style="" id="gg2pYuXjGr-Sd2TNTxr9i"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="18" font-style="normal" font-weight="700" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(255, 255, 255); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-101.87" y="5.16" >Jalan Komplek 5 meter</tspan></text>
    </g>
    <g transform="matrix(0 -1 1 0 350 514.29)" style="" id="nBmNhpSf_UP2A-RD9ujE_"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="18" font-style="normal" font-weight="700" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(255, 255, 255); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-101.87" y="5.16" >Jalan Komplek 5 meter</tspan></text>
    </g>
    <g transform="matrix(0 -1 1 0 350 1308.59)" style="" id="INZC4a1Yyc_IZgm8TPW3k"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="18" font-style="normal" font-weight="700" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(255, 255, 255); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-101.87" y="5.16" >Jalan Komplek 5 meter</tspan></text>
    </g>
</svg>

