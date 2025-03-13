<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="100%"  viewBox="0 0 720 3600" xml:space="preserve">
    <desc>Created with Fabric.js 4.6.0</desc>
    <defs>
    </defs>
    <g transform="matrix(0.18 0 0 11.39 583.53 1796.44)" id="pisu3JUKoOMD-LeKLc1OZ"  >
        <path style="stroke: rgb(96,140,246); stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(112,112,112); fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -147.05882 -147.05882 L 147.05883000000003 -147.05882 L 147.05883000000003 147.05883000000003 L -9.926259999999985 147.05883000000003 L -147.05882 147.05883000000003 z" stroke-linecap="round" />
        </g>
        <g transform="matrix(0 0.22 -2.06 0 350 126.08)" id="u1xZKgVaWJS0PtSiezAhI"  >
        <path style="stroke: rgb(96,140,246); stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(112,112,112); fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -147.05882 -147.05882 L 147.05883000000003 -147.05882 L 147.05883000000003 147.05883000000003 L -147.05882 147.05883000000003 z" stroke-linecap="round" />
        </g>
    <g transform="matrix(1 0 0 1 353.93 126.6)" style="" id="RI6l-5hx-7smnPzz_gJPF"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="38" font-style="normal" font-weight="700" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(255,255,255); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-116.68" y="9.07" >Jalan Utama</tspan></text>
    </g>


    <g transform="matrix(0.79 0 0 1 516.32 308.93)" id="YxZWfQKQKLHhSmZ6WInK-1"  >
        @forelse ( $siteplan->where('code_product', 'YxZWfQKQKLHhSmZ6WInK-1') as $hasil)
            @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -50 -150 L 50 -150 L 50 150 L -50 150 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style=" fill:#f50505;  stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -50 -150 L 50 -150 L 50 150 L -50 150 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-YxZWfQKQKLHhSmZ6WInK-1">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -50 -150 L 50 -150 L 50 150 L -50 150 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="YxZWfQKQKLHhSmZ6WInK-1">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -50 -150 L 50 -150 L 50 150 L -50 150 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>

    <g transform="matrix(0.79 0 0 1 436.46 308.93)" id="PxeQoPb9pogIP_w1S9sLR1"  >
        @forelse ( $siteplan->where('code_product', 'PxeQoPb9pogIP_w1S9sLR1') as $hasil)
            @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -50 -150 L 50 -150 L 50 150 L -50 150 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style="fill:#f50505; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -50 -150 L 50 -150 L 50 150 L -50 150 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-PxeQoPb9pogIP_w1S9sLR1">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -50 -150 L 50 -150 L 50 150 L -50 150 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="PxeQoPb9pogIP_w1S9sLR1">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -50 -150 L 50 -150 L 50 150 L -50 150 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>

    <g transform="matrix(0.79 0 0 1 357.01 308.93)" id="iMkAaMu0qdfDLOjmPdZhT1"  >
        @forelse ( $siteplan->where('code_product', 'iMkAaMu0qdfDLOjmPdZhT1') as $hasil)
            @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -50 -150 L 50 -150 L 50 150 L -50 150 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual') \
                <path style=" fill:#f50505; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -50 -150 L 50 -150 L 50 150 L -50 150 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-iMkAaMu0qdfDLOjmPdZhT1">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -50 -150 L 50 -150 L 50 150 L -50 150 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="iMkAaMu0qdfDLOjmPdZhT1">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -50 -150 L 50 -150 L 50 150 L -50 150 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>

    <g transform="matrix(0.79 0 0 1 278.18 308.93)" id="ptJ4fnFVDnTycsZVqFczY1"  >
        @forelse ( $siteplan->where('code_product', 'ptJ4fnFVDnTycsZVqFczY1') as $hasil)
            @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -50 -150 L 50 -150 L 50 150 L -50 150 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style=" fill:#f50505;  stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -50 -150 L 50 -150 L 50 150 L -50 150 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-ptJ4fnFVDnTycsZVqFczY1">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -50 -150 L 50 -150 L 50 150 L -50 150 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="ptJ4fnFVDnTycsZVqFczY1">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -50 -150 L 50 -150 L 50 150 L -50 150 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>


    <g transform="matrix(0.79 0 0 0.56 397.3 501.57)" id="5ox0V8T41fZYGWZgoMHhD1"  >
        @forelse ( $siteplan->where('code_product', '5ox0V8T41fZYGWZgoMHhD1') as $hasil)
            @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style=" fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -200 -75 L 200 -75 L 200 75 L -200 75 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style=" fill:#f50505; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -200 -75 L 200 -75 L 200 75 L -200 75 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-5ox0V8T41fZYGWZgoMHhD1">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -200 -75 L 200 -75 L 200 75 L -200 75 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="5ox0V8T41fZYGWZgoMHhD1">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -200 -75 L 200 -75 L 200 75 L -200 75 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>

    <g transform="matrix(0.79 0 0 0.56 397.3 585.08)" id="jIo-gKhC9J0zufi5TwuCB1"  >
        @forelse ( $siteplan->where('code_product', 'jIo-gKhC9J0zufi5TwuCB1') as $hasil)
            @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -200 -75 L 200 -75 L 200 75 L -200 75 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style="fill:#f50505; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -200 -75 L 200 -75 L 200 75 L -200 75 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-jIo-gKhC9J0zufi5TwuCB1">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -200 -75 L 200 -75 L 200 75 L -200 75 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="jIo-gKhC9J0zufi5TwuCB1">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -200 -75 L 200 -75 L 200 75 L -200 75 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>

    <g transform="matrix(0.79 0 0 0.56 397.3 668.34)" id="aoBUZQgX8OD9hentuQPKE1"  >
        @forelse ( $siteplan->where('code_product', 'aoBUZQgX8OD9hentuQPKE1') as $hasil)
            @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -200 -75 L 200 -75 L 200 75 L -200 75 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style="fill:#f50505;stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -200 -75 L 200 -75 L 200 75 L -200 75 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-aoBUZQgX8OD9hentuQPKE1">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -200 -75 L 200 -75 L 200 75 L -200 75 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="aoBUZQgX8OD9hentuQPKE1">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -200 -75 L 200 -75 L 200 75 L -200 75 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>

    <g transform="matrix(0.79 0 0 0.56 397.3 751.85)" id="AYtCEg3Mo3XfRSClTz3GK1"  >
        @forelse ( $siteplan->where('code_product', 'AYtCEg3Mo3XfRSClTz3GK1') as $hasil)
            @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style="fill:#ffc107;stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -200 -75 L 200 -75 L 200 75 L -200 75 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style="fill:#f50505; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -200 -75 L 200 -75 L 200 75 L -200 75 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-AYtCEg3Mo3XfRSClTz3GK1">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -200 -75 L 200 -75 L 200 75 L -200 75 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="AYtCEg3Mo3XfRSClTz3GK1">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -200 -75 L 200 -75 L 200 75 L -200 75 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>

    <g transform="matrix(0.79 0 0 0.56 397.3 835.12)" id="_wJbo2L6RAa6IGp97dNfi1"  >
        @forelse ( $siteplan->where('code_product', '_wJbo2L6RAa6IGp97dNfi1') as $hasil)
            @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -200 -75 L 200 -75 L 200 75 L -200 75 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style=" fill:#f50505; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -200 -75 L 200 -75 L 200 75 L -200 75 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-_wJbo2L6RAa6IGp97dNfi1">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -200 -75 L 200 -75 L 200 75 L -200 75 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="_wJbo2L6RAa6IGp97dNfi1">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -200 -75 L 200 -75 L 200 75 L -200 75 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>

    <g transform="matrix(0.79 0 0 0.56 397.3 918.63)" id="NFt-yszu0p1igfOjOSvoJ1"  >
        @forelse ( $siteplan->where('code_product', 'NFt-yszu0p1igfOjOSvoJ1') as $hasil)
            @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -200 -75 L 200 -75 L 200 75 L -200 75 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style="fill:#f50505;  stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -200 -75 L 200 -75 L 200 75 L -200 75 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-NFt-yszu0p1igfOjOSvoJ1">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -200 -75 L 200 -75 L 200 75 L -200 75 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="NFt-yszu0p1igfOjOSvoJ1">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -200 -75 L 200 -75 L 200 75 L -200 75 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>

    <g transform="matrix(0.79 0 0 0.56 397.3 998.41)" id="_rTRHEmi_uWYJLHUMP7GR1"  >
        @forelse ( $siteplan->where('code_product', '_rTRHEmi_uWYJLHUMP7GR1') as $hasil)
            @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -200 -75 L 200 -75 L 200 75 L -200 75 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style=" fill:#f50505; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -200 -75 L 200 -75 L 200 75 L -200 75 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-_rTRHEmi_uWYJLHUMP7GR1">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -200 -75 L 200 -75 L 200 75 L -200 75 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="_rTRHEmi_uWYJLHUMP7GR1">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -200 -75 L 200 -75 L 200 75 L -200 75 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>

    <g transform="matrix(0.79 0 0 0.56 397.3 1081.36)" id="DzHarUo419NVC89L1lHI61"  >
        @forelse ( $siteplan->where('code_product', 'DzHarUo419NVC89L1lHI61') as $hasil)
            @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -200 -75 L 200 -75 L 200 75 L -200 75 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style=" fill:#f50505; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -200 -75 L 200 -75 L 200 75 L -200 75 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-DzHarUo419NVC89L1lHI61">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -200 -75 L 200 -75 L 200 75 L -200 75 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="DzHarUo419NVC89L1lHI61">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -200 -75 L 200 -75 L 200 75 L -200 75 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>

    <g transform="matrix(0.79 0 0 0.56 397.3 1166.36)" id="9uv-wDyNiCkx_Eu-puRyB1"  >
        @forelse ( $siteplan->where('code_product', '9uv-wDyNiCkx_Eu-puRyB1') as $hasil)
            @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -200 -75 L 200 -75 L 200 75 L -200 75 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style="fill:#f50505;  stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -200 -75 L 200 -75 L 200 75 L -200 75 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-9uv-wDyNiCkx_Eu-puRyB1">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -200 -75 L 200 -75 L 200 75 L -200 75 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="9uv-wDyNiCkx_Eu-puRyB1">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -200 -75 L 200 -75 L 200 75 L -200 75 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>

    <g transform="matrix(0.79 0 0 0.56 397.3 1249.87)" id="3paUFyRvVcvF0F1nnu18X1"  >
        @forelse ( $siteplan->where('code_product', '3paUFyRvVcvF0F1nnu18X1') as $hasil)
            @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -200 -75 L 200 -75 L 200 75 L -200 75 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style=" fill:#f50505; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -200 -75 L 200 -75 L 200 75 L -200 75 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-3paUFyRvVcvF0F1nnu18X1">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -200 -75 L 200 -75 L 200 75 L -200 75 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="3paUFyRvVcvF0F1nnu18X1">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -200 -75 L 200 -75 L 200 75 L -200 75 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>

    <g transform="matrix(0.79 0 0 0.56 397.3 1333.14)" id="kC0cf41ifUnTswFR_T3VR1"  >
        @forelse ( $siteplan->where('code_product', 'kC0cf41ifUnTswFR_T3VR1') as $hasil)
            @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style="fill:#ffc107;stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -200 -75 L 200 -75 L 200 75 L -200 75 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style=" fill:#f50505; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -200 -75 L 200 -75 L 200 75 L -200 75 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-kC0cf41ifUnTswFR_T3VR1">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -200 -75 L 200 -75 L 200 75 L -200 75 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="kC0cf41ifUnTswFR_T3VR1">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -200 -75 L 200 -75 L 200 75 L -200 75 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>

    <g transform="matrix(0.79 0 0 0.56 397.3 1416.65)" id="5tQFjCQUJ0ErQ-MvMh7qm1"  >
        @forelse ( $siteplan->where('code_product', '5tQFjCQUJ0ErQ-MvMh7qm1') as $hasil)
            @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -200 -75 L 200 -75 L 200 75 L -200 75 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style="fill:#f50505; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -200 -75 L 200 -75 L 200 75 L -200 75 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-5tQFjCQUJ0ErQ-MvMh7qm1">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -200 -75 L 200 -75 L 200 75 L -200 75 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="5tQFjCQUJ0ErQ-MvMh7qm1">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -200 -75 L 200 -75 L 200 75 L -200 75 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>

    <g transform="matrix(0.79 0 0 0.56 397.3 1499.92)" id="RRfvhtVhtG7iCLrip3HQC1"  >
        @forelse ( $siteplan->where('code_product', 'RRfvhtVhtG7iCLrip3HQC1') as $hasil)
            @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -200 -75 L 200 -75 L 200 75 L -200 75 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style=" fill:#f50505; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -200 -75 L 200 -75 L 200 75 L -200 75 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-RRfvhtVhtG7iCLrip3HQC1">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -200 -75 L 200 -75 L 200 75 L -200 75 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="RRfvhtVhtG7iCLrip3HQC1">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -200 -75 L 200 -75 L 200 75 L -200 75 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>

    <g transform="matrix(0.79 0 0 0.56 397.3 1583.43)" id="WQg66mfC_i6h5kUPiWN1B1"  >
        @forelse ( $siteplan->where('code_product', 'WQg66mfC_i6h5kUPiWN1B1') as $hasil)
            @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style=" fill:#ffc107;stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -200 -75 L 200 -75 L 200 75 L -200 75 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style=" fill:#f50505; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -200 -75 L 200 -75 L 200 75 L -200 75 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-WQg66mfC_i6h5kUPiWN1B1">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -200 -75 L 200 -75 L 200 75 L -200 75 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="WQg66mfC_i6h5kUPiWN1B1">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -200 -75 L 200 -75 L 200 75 L -200 75 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>

    <g transform="matrix(0.79 0 0 0.56 397.3 1666.69)" id="I_7nAmYf5a9-f6IP0YZYL1"  >
        @forelse ( $siteplan->where('code_product', 'I_7nAmYf5a9-f6IP0YZYL1') as $hasil)
            @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                 <path style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -200 -75 L 200 -75 L 200 75 L -200 75 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                 <path style=" fill:#f50505; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -200 -75 L 200 -75 L 200 75 L -200 75 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-I_7nAmYf5a9-f6IP0YZYL1">
                 <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -200 -75 L 200 -75 L 200 75 L -200 75 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="I_7nAmYf5a9-f6IP0YZYL1">
             <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -200 -75 L 200 -75 L 200 75 L -200 75 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>

    <g transform="matrix(0.79 0 0 0.56 397.3 1750.2)" id="eQHy1rryyL9twPng9QFSe1"  >
        @forelse ( $siteplan->where('code_product', 'eQHy1rryyL9twPng9QFSe1') as $hasil)
            @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -200 -75 L 200 -75 L 200 75 L -200 75 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style="fill:#f50505; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -200 -75 L 200 -75 L 200 75 L -200 75 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-eQHy1rryyL9twPng9QFSe1">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -200 -75 L 200 -75 L 200 75 L -200 75 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="eQHy1rryyL9twPng9QFSe1">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -200 -75 L 200 -75 L 200 75 L -200 75 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>

    <g transform="matrix(0.79 0 0 0.56 397.3 1834.13)" id="EHUQ_nYCYVohnOiY8y8Lw1"  >
        @forelse ( $siteplan->where('code_product', 'EHUQ_nYCYVohnOiY8y8Lw1') as $hasil)
            @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -200 -75 L 200 -75 L 200 75 L -200 75 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style="fill:#f50505; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -200 -75 L 200 -75 L 200 75 L -200 75 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-EHUQ_nYCYVohnOiY8y8Lw1">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -200 -75 L 200 -75 L 200 75 L -200 75 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="EHUQ_nYCYVohnOiY8y8Lw1">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -200 -75 L 200 -75 L 200 75 L -200 75 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>

    <g transform="matrix(0.79 0 0 0.56 397.3 1917.65)" id="Z0Tq8AdqZbLPyIASTXavg1"  >
        @forelse ( $siteplan->where('code_product', 'Z0Tq8AdqZbLPyIASTXavg1') as $hasil)
            @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                 <path style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -200 -75 L 200 -75 L 200 75 L -200 75 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                 <path style="fill:#f50505; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -200 -75 L 200 -75 L 200 75 L -200 75 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-Z0Tq8AdqZbLPyIASTXavg1">
                 <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -200 -75 L 200 -75 L 200 75 L -200 75 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="Z0Tq8AdqZbLPyIASTXavg1">
             <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -200 -75 L 200 -75 L 200 75 L -200 75 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>

    <g transform="matrix(0.79 0 0 0.56 397.3 2003.91)" id="CFntb5IOEBujfmvGdFba01"  >
        @forelse ( $siteplan->where('code_product', 'CFntb5IOEBujfmvGdFba01') as $hasil)
            @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -200 -75 L 200 -75 L 200 75 L -200 75 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style=" fill:#f50505; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -200 -75 L 200 -75 L 200 75 L -200 75 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-CFntb5IOEBujfmvGdFba01">
                 <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -200 -75 L 200 -75 L 200 75 L -200 75 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="CFntb5IOEBujfmvGdFba01">
             <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -200 -75 L 200 -75 L 200 75 L -200 75 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>

    <g transform="matrix(0.79 0 0 0.56 397.3 2087.42)" id="0ZlukoTxpv8HtyARlkvwS1"  >
        @forelse ( $siteplan->where('code_product', '0ZlukoTxpv8HtyARlkvwS1') as $hasil)
            @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -200 -75 L 200 -75 L 200 75 L -200 75 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style=" fill:#f50505;  stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -200 -75 L 200 -75 L 200 75 L -200 75 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-0ZlukoTxpv8HtyARlkvwS1">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -200 -75 L 200 -75 L 200 75 L -200 75 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="0ZlukoTxpv8HtyARlkvwS1">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -200 -75 L 200 -75 L 200 75 L -200 75 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>

    <g transform="matrix(0.79 0 0 0.56 397.3 2170.69)" id="TV6qrwmYS93BzgWOsi1Q41"  >
        @forelse ( $siteplan->where('code_product', 'TV6qrwmYS93BzgWOsi1Q41') as $hasil)
            @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -200 -75 L 200 -75 L 200 75 L -200 75 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style=" fill:#f50505; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -200 -75 L 200 -75 L 200 75 L -200 75 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-TV6qrwmYS93BzgWOsi1Q41">
                 <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -200 -75 L 200 -75 L 200 75 L -200 75 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="TV6qrwmYS93BzgWOsi1Q41">
             <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -200 -75 L 200 -75 L 200 75 L -200 75 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>

    <g transform="matrix(0.79 0 0 0.56 397.3 2254.2)" id="fOjuxMJncVIglI2j4exOs1"  >
        @forelse ( $siteplan->where('code_product', 'fOjuxMJncVIglI2j4exOs1') as $hasil)
            @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -200 -75 L 200 -75 L 200 75 L -200 75 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style="fill:#f50505;stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -200 -75 L 200 -75 L 200 75 L -200 75 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-fOjuxMJncVIglI2j4exOs1">
                 <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -200 -75 L 200 -75 L 200 75 L -200 75 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="fOjuxMJncVIglI2j4exOs1">
             <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -200 -75 L 200 -75 L 200 75 L -200 75 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>

    <g transform="matrix(0.79 0 0 0.56 397.3 2337.46)" id="xbgbCB9Wh3779srBidOsA1"  >
        @forelse ( $siteplan->where('code_product', 'xbgbCB9Wh3779srBidOsA1') as $hasil)
            @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -200 -75 L 200 -75 L 200 75 L -200 75 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style="fill:#f50505; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -200 -75 L 200 -75 L 200 75 L -200 75 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-xbgbCB9Wh3779srBidOsA1">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -200 -75 L 200 -75 L 200 75 L -200 75 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="xbgbCB9Wh3779srBidOsA1">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -200 -75 L 200 -75 L 200 75 L -200 75 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>

    <g transform="matrix(0.79 0 0 0.56 397.3 2420.98)" id="0ctgkzlZdPsGmswmuZ0q91"  >
        @forelse ( $siteplan->where('code_product', '0ctgkzlZdPsGmswmuZ0q91') as $hasil)
            @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style="fill:#ffc107;  stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -200 -75 L 200 -75 L 200 75 L -200 75 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style="fill:#f50505; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -200 -75 L 200 -75 L 200 75 L -200 75 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-0ctgkzlZdPsGmswmuZ0q91">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -200 -75 L 200 -75 L 200 75 L -200 75 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="0ctgkzlZdPsGmswmuZ0q91">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -200 -75 L 200 -75 L 200 75 L -200 75 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>

    <g transform="matrix(0.79 0 0 0.56 397.3 2504.93)" id="TtShQjHCT8GptjvAB7AuZ1"  >
        @forelse ( $siteplan->where('code_product', 'TtShQjHCT8GptjvAB7AuZ1') as $hasil)
            @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -200 -75 L 200 -75 L 200 75 L -200 75 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style="fill:#f50505; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -200 -75 L 200 -75 L 200 75 L -200 75 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-TtShQjHCT8GptjvAB7AuZ1">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -200 -75 L 200 -75 L 200 75 L -200 75 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="TtShQjHCT8GptjvAB7AuZ1">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -200 -75 L 200 -75 L 200 75 L -200 75 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>

    <g transform="matrix(0.79 0 0 0.56 397.3 2588.15)" id="40B8Bv9Q-nOletKY73qP61"  >
        @forelse ( $siteplan->where('code_product', '40B8Bv9Q-nOletKY73qP61') as $hasil)
            @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -200 -75 L 200 -75 L 200 75 L -200 75 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style=" fill:#f50505; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -200 -75 L 200 -75 L 200 75 L -200 75 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-40B8Bv9Q-nOletKY73qP61">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -200 -75 L 200 -75 L 200 75 L -200 75 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="40B8Bv9Q-nOletKY73qP61">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -200 -75 L 200 -75 L 200 75 L -200 75 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>

    <g transform="matrix(0.79 0 0 0.56 397.3 2671.42)" id="HerTarHymw01mmnConT8Z11"  >

        @forelse ( $siteplan->where('code_product', 'HerTarHymw01mmnConT8Z11') as $hasil)
            @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -200 -75 L 200 -75 L 200 75 L -200 75 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style=" fill:#f50505; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -200 -75 L 200 -75 L 200 75 L -200 75 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-HerTarHymw01mmnConT8Z11">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -200 -75 L 200 -75 L 200 75 L -200 75 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
         <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="HerTarHymw01mmnConT8Z11">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -200 -75 L 200 -75 L 200 75 L -200 75 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>
    <g transform="matrix(0.79 0 0 0.56 397.3 2755.22)" id="gKKL9DO2iswWs5_WBhuaL111"  >
        @forelse ( $siteplan->where('code_product', 'gKKL9DO2iswWs5_WBhuaL111') as $hasil)
            @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -200 -75 L 200 -75 L 200 75 L -200 75 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style="fill:#f50505; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -200 -75 L 200 -75 L 200 75 L -200 75 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-gKKL9DO2iswWs5_WBhuaL111">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -200 -75 L 200 -75 L 200 75 L -200 75 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="gKKL9DO2iswWs5_WBhuaL111">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -200 -75 L 200 -75 L 200 75 L -200 75 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>
    <g transform="matrix(0.79 0 0 0.56 397.3 2838.48)" id="Eb1gVOha5xS-_jfXyD6dw111"  >
        @forelse ( $siteplan->where('code_product', 'Eb1gVOha5xS-_jfXyD6dw111') as $hasil)
            @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -200 -75 L 200 -75 L 200 75 L -200 75 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style="fill:#f50505; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -200 -75 L 200 -75 L 200 75 L -200 75 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-Eb1gVOha5xS-_jfXyD6dw111">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -200 -75 L 200 -75 L 200 75 L -200 75 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="Eb1gVOha5xS-_jfXyD6dw111">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -200 -75 L 200 -75 L 200 75 L -200 75 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>

    <g transform="matrix(0.79 0 0 0.56 397.3 2921.99)" id="7Z7WtOGmhSs6HXSTYmfzd11"  >
        @forelse ( $siteplan->where('code_product', '7Z7WtOGmhSs6HXSTYmfzd11') as $hasil)
            @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -200 -75 L 200 -75 L 200 75 L -200 75 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style="fill:#f50505; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -200 -75 L 200 -75 L 200 75 L -200 75 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-7Z7WtOGmhSs6HXSTYmfzd11">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -200 -75 L 200 -75 L 200 75 L -200 75 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="7Z7WtOGmhSs6HXSTYmfzd11">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -200 -75 L 200 -75 L 200 75 L -200 75 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>
    <g transform="matrix(0.79 0 0 0.56 397.3 3005.26)" id="zchSfN-wjRUDlNrV9R9Z511"  >
        @forelse ( $siteplan->where('code_product', 'zchSfN-wjRUDlNrV9R9Z511') as $hasil)
            @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style=" fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -200 -75 L 200 -75 L 200 75 L -200 75 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style="fill:#f50505; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -200 -75 L 200 -75 L 200 75 L -200 75 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-zchSfN-wjRUDlNrV9R9Z511">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -200 -75 L 200 -75 L 200 75 L -200 75 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="zchSfN-wjRUDlNrV9R9Z511">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -200 -75 L 200 -75 L 200 75 L -200 75 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>




    <g transform="matrix(0.79 0 0 1.09 397.82 3301.4)" id="6ZdcnE6EGX7kPIA0NiuR6"  >
        <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,158,0); fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -200 -75 L 200 -75 L 200 75 L -200 75 z" stroke-linecap="round" />
        </g>
        <g transform="matrix(0.79 0 0 0.56 397.82 3427.26)" id="eYEXbx01b8fW2_orJNZc5"  >
        <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(255,255,255); fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -200 -75 L 200 -75 L 200 75 L -200 75 z" stroke-linecap="round" />
        </g>

    <g transform="matrix(1 0 0 1 397.3 918.63)" style="" id="6lCN_hrU75qeEbfWMoD1Y"  >
        <text xml:space="preserve" font-family="Open Sans" font-size="25" font-style="normal" font-weight="700" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-65.86" y="7.48" >KAVLING 6</tspan></text>
</g>
    <g transform="matrix(0 -1 1 0 516.32 308.93)" style="" id="FvdMQJYRWSXx6r9hm-O4P"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="25" font-style="normal" font-weight="700" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-42.35" y="7.56" >Ruko 4</tspan></text>
    </g>
    <g transform="matrix(0 -1 1 0 436.46 308.93)" style="" id="UhleD_0cqVTVYp-LQCxTG"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="25" font-style="normal" font-weight="700" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-42.35" y="7.56" >Ruko 3</tspan></text>
    </g>
    <g transform="matrix(0 -1 1 0 357.01 308.93)" style="" id="xn8CBnYwsxlT1WwSgYiDM"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="25" font-style="normal" font-weight="700" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-42.35" y="7.56" >Ruko 2</tspan></text>
    </g>
    <g transform="matrix(0 -1 1 0 278.18 308.93)" style="" id="Vw9yQK8ssQfwhk61mlAx5"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="25" font-style="normal" font-weight="700" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-42.35" y="7.56" >Ruko 1</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 397.3 501.57)" style="" id="fgIER9tgEG2d9iazPZEvE"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="25" font-style="normal" font-weight="700" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-65.86" y="7.48" >KAVLING 1</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 397.3 585.08)" style="" id="zaA6Rct2yPabYgXOdVXUy"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="25" font-style="normal" font-weight="700" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-65.86" y="7.48" >KAVLING 2</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 397.3 675.08)" style="" id="mYjKbQnwjcv2gnNZuckTY"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="25" font-style="normal" font-weight="700" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-65.86" y="7.48" >KAVLING 3</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 397.3 751.85)" style="" id="C1SQ-Kd1y-pBT6Kc-kgkV"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="25" font-style="normal" font-weight="700" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-65.86" y="7.48" >KAVLING 4</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 397.3 835.12)" style="" id="fMvaZoy1BxcXTiBuYZZMQ"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="25" font-style="normal" font-weight="700" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-65.86" y="7.48" >KAVLING 5</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 397.3 1501.78)" style="" id="zOu3l8nPGnWOUQOYRGJ2C"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="25" font-style="normal" font-weight="700" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-73" y="7.48" >KAVLING 13</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 397.3 1581.56)" style="" id="WQvF2RZ2XuHPrnPgFyLxT"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="25" font-style="normal" font-weight="700" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-73" y="7.48" >KAVLING 14</tspan></text>
    </g>

    <g transform="matrix(1 0 0 1 397.3 998.41)" style="" id="aGAdKCD-UMMgNRZVqZW87"  >
        <text xml:space="preserve" font-family="Open Sans" font-size="25" font-style="normal" font-weight="700" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-65.86" y="7.48" >KAVLING 7</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 397.3 1084.72)" style="" id="aAKUF7fW2HxUvBRVx9HR3"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="25" font-style="normal" font-weight="700" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-65.86" y="7.48" >KAVLING 8</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 397.3 1168.23)" style="" id="1yYkdrm7zj-tdx1itwbCZ"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="25" font-style="normal" font-weight="700" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-65.86" y="7.48" >KAVLING 9</tspan></text>
    </g>
    <g transform="matrix(0 1 -1 0 580.04 553.19)" style="" id="hgCZtyP8yBaJz1x_iOCmg"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="25" font-style="normal" font-weight="700" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(255,255,255); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-140.99" y="5.14" >Jalan Komplek 5 Meter</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 397.3 1258.23)" style="" id="f8jJKAkLiudpNZvcOK1bX"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="25" font-style="normal" font-weight="700" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-73" y="7.48" >KAVLING 10</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 397.3 1333.14)" style="" id="E0giK3a-x2Yi8XB4ZjNEI"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="25" font-style="normal" font-weight="700" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-73" y="7.48" >KAVLING 11</tspan></text>
    </g>
    <g transform="matrix(0 1 -1 0 580.04 1546.05)" style="" id="f-SrDMgS4SQEaMi7ipw2P"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="25" font-style="normal" font-weight="700" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(255,255,255); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-140.99" y="5.14" >Jalan Komplek 5 Meter</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 397.3 1418.27)" style="" id="HgMd3k_VPaHyBHLxPFDNv"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="25" font-style="normal" font-weight="700" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-73" y="7.48" >KAVLING 12</tspan></text>
    </g>
    <g transform="matrix(0 1 -1 0 580.04 2686.41)" style="" id="FCO5b8ZnY5nw3lvE2MwzB"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="25" font-style="normal" font-weight="700" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(255,255,255); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-140.99" y="5.14" >Jalan Komplek 5 Meter</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 397.3 2086.29)" style="" id="C8RYIof2Z8xEJ6cssn_aA"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="25" font-style="normal" font-weight="700" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-73" y="7.48" >KAVLING 20</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 397.3 2003.91)" style="" id="rG-kUtUhUIZdJdU9pMija"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="25" font-style="normal" font-weight="700" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-73" y="7.48" >KAVLING 19</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 397.3 2166.07)" style="" id="ybkckQ4IAVTWjDy-4CWdJ"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="25" font-style="normal" font-weight="700" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-73" y="7.48" >KAVLING 21</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 397.3 1919.51)" style="" id="ZzJK4Tc3S5H4Et7XPEXc3"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="25" font-style="normal" font-weight="700" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-73" y="7.48" >KAVLING 18</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 397.3 1669.23)" style="" id="BKp2bcg-7CEt0f_jkq1TZ"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="25" font-style="normal" font-weight="700" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-73" y="7.48" >KAVLING 15</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 397.3 1842.74)" style="" id="zT4wU_mecQY8hv9jpiu09"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="25" font-style="normal" font-weight="700" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-73" y="7.48" >KAVLING 17</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 397.3 1752.74)" style="" id="ZqndvVkvWXaSy8PSWuBgM"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="25" font-style="normal" font-weight="700" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-73" y="7.48" >KAVLING 16</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 397.3 2673.57)" style="" id="4SEAkIjMe8BaTj98NBwF0"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="25" font-style="normal" font-weight="700" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-73" y="7.48" >KAVLING 27</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 397.3 2590.06)" style="" id="TcI-ETXa9IdPygkurbe8h"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="25" font-style="normal" font-weight="700" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-73" y="7.48" >KAVLING 26</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 397.3 2753.35)" style="" id="ydAmgQvXgFx2q-bjnL84I"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="25" font-style="normal" font-weight="700" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-73" y="7.48" >KAVLING 28</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 397.3 2506.79)" style="" id="t4vLiE42f370dqFRuVX__"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="25" font-style="normal" font-weight="700" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-73" y="7.48" >KAVLING 25</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 397.3 2256.51)" style="" id="TES72Ddk01vTtaBf8gx8Z"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="25" font-style="normal" font-weight="700" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-73" y="7.48" >KAVLING 22</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 397.3 2430.02)" style="" id="CpYLfOjUuOkpVVt9FhHKu"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="25" font-style="normal" font-weight="700" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-73" y="7.48" >KAVLING 24</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 397.3 2340.02)" style="" id="kp24ckoH3uziHA9cBAFuz"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="25" font-style="normal" font-weight="700" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-73" y="7.48" >KAVLING 23</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 397.3 2840.35)" style="" id="u8flZ_MwTABJqIeo2GZh9"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="25" font-style="normal" font-weight="700" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-73" y="7.48" >KAVLING 29</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 397.3 3005.26)" style="" id="8ucV2iFFQtWSZ3s5nZU-6"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="25" font-style="normal" font-weight="700" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-73" y="7.48" >KAVLING 31</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 397.3 2921.99)" style="" id="Pc__m2oFCT8QeSrIFXV3W"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="25" font-style="normal" font-weight="700" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-73" y="7.48" >KAVLING 30</tspan></text>
    </g>
    <g transform="matrix(0.79 0 0 0.56 398.01 3091.26)" id="zdDFNFdBrGg22U4opKhLGGe"  >
        @forelse ( $siteplan->where('code_product', 'zdDFNFdBrGg22U4opKhLGGe') as $hasil)
            @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill:#ffc107; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -200 -75 L 200 -75 L 200 75 L -200 75 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill:#f50505; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -200 -75 L 200 -75 L 200 75 L -200 75 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-zdDFNFdBrGg22U4opKhLGGe">
                <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #f8f8f8; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -200 -75 L 200 -75 L 200 75 L -200 75 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="zdDFNFdBrGg22U4opKhLGGe">
            <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #f8f8f8; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -200 -75 L 200 -75 L 200 75 L -200 75 z" stroke-linecap="round" />
        </a>
        @endforelse
        </g>

        <g transform="matrix(0.79 0 0 0.56 398.01 3174.54)" id="urQHZvgZRX8DF_21hIDGtWJ"  >
            @forelse ( $siteplan->where('code_product', 'urQHZvgZRX8DF_21hIDGtWJ') as $hasil)
                @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                    <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill:#ffc107;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -200 -75 L 200 -75 L 200 75 L -200 75 z" stroke-linecap="round" />
                @elseif ($hasil->status == 'Terjual')
                    <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill:#f50505; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -200 -75 L 200 -75 L 200 75 L -200 75 z" stroke-linecap="round" />
                @elseif ($hasil->status == 'Tersedia')
                <a href="#" data-toggle="modal" data-target="#modalBooking-urQHZvgZRX8DF_21hIDGtWJ">
                    <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #f8f8f8; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -200 -75 L 200 -75 L 200 75 L -200 75 z" stroke-linecap="round" />
                </a>
                @endif
            @empty
            <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="urQHZvgZRX8DF_21hIDGtWJ">
                <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #f8f8f8; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -200 -75 L 200 -75 L 200 75 L -200 75 z" stroke-linecap="round" />
            </a>
            @endforelse
        </g>
        <g transform="matrix(1 0 0 1 398.01 3174.54)" style="" id="1ONaLri5K7KgzSJwxm2jq"  >
                <text xml:space="preserve" font-family="Open Sans" font-size="25" font-style="normal" font-weight="700" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-73" y="7.48" >KAVLING 33</tspan></text>
        </g>
        <g transform="matrix(1 0 0 1 398.01 3091.26)" style="" id="HFwfKckThA_T9Rx-QTMFS"  >
                <text xml:space="preserve" font-family="Open Sans" font-size="25" font-style="normal" font-weight="700" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-73" y="7.48" >KAVLING 32</tspan></text>
        </g>
        <g transform="matrix(1 0 0 1 397.82 3301.4)" style="" id="17_xdtqP99Bg7MNqvIYvZ"  >
                <text xml:space="preserve" font-family="Open Sans" font-size="49" font-style="normal" font-weight="700" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-90.44" y="14.58" >WAQAF</tspan></text>
        </g>
        <g transform="matrix(1 0 0 1 397.82 3427.26)" style="" id="0kTvTLVUPPZYk2TFe4oIC"  >
                <text xml:space="preserve" font-family="Open Sans" font-size="49" font-style="normal" font-weight="700" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-85.46" y="14.58" >FASUM</tspan></text>
        </g>
</svg>
