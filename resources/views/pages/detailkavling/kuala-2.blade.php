<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="100%" viewBox="0 0 600 3400" xml:space="preserve">
    <g transform="matrix(1.02 0 0 0.93 301 1700.72)" id="K7AtBJ3_3TOtxASK2Qcrv"  >
        <path style="stroke: rgb(62,195,39); stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(163,160,159); fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -31.0345 -1749.99999 L 31.0345 -1749.99999 L 31.0345 1749.9999799999998 L -31.0345 1749.9999799999998 z" stroke-linecap="round" />
    </g>
    <g transform="matrix(1 0 0 1 418.25 1979.18)" style="" id="orO9Uf0NZYaz-RGNuB7Sj"  >
        <text xml:space="preserve" font-family="Open Sans" font-size="33" font-style="normal" font-weight="700" letter-spacing="0.066" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-31.15" y="11.51" >C</tspan><tspan x="-10.05" y="11.51" >1</tspan><tspan x="8.88" y="11.51" >6</tspan></text>
    </g>

    <g transform="matrix(-1 0 0 -1 417.87 513.58)" id="XSngCw6QIfI1wn-5aLOS"  >
        @forelse ( $siteplan->where('code_product', 'XSngCw6QIfI1wn-5aLOS') as $hasil)
            @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -45)" d="M 0 0 L 170 0 L 170 90 L 0 90 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style="fill:#f50505; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -45)" d="M 0 0 L 170 0 L 170 90 L 0 90 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-XSngCw6QIfI1wn-5aLOS">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -45)" d="M 0 0 L 170 0 L 170 90 L 0 90 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="XSngCw6QIfI1wn-5aLOS">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -45)" d="M 0 0 L 170 0 L 170 90 L 0 90 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>

    <g transform="matrix(-1 0 0 1 357.75 272.26)" id="T-oej9zHLdiNZaFYN5zbz"  >
        @forelse ( $siteplan->where('code_product', 'T-oej9zHLdiNZaFYN5zbz') as $hasil)
            @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-25, -195)" d="M 0 0 L 50 0 L 50 390 L 0 390 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style="fill:#f50505; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-25, -195)" d="M 0 0 L 50 0 L 50 390 L 0 390 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-T-oej9zHLdiNZaFYN5zbz">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-25, -195)" d="M 0 0 L 50 0 L 50 390 L 0 390 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="T-oej9zHLdiNZaFYN5zbz">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-25, -195)" d="M 0 0 L 50 0 L 50 390 L 0 390 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>

    <g transform="matrix(-1 0 0 -1 403.25 272.26)" id="8IPAz7oLfXGezAr_XOseU"  >
        @forelse ( $siteplan->where('code_product', '8IPAz7oLfXGezAr_XOseU') as $hasil)
            @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-20, -195)" d="M 0 0 L 40 0 L 40 390 L 0 390 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style="fill:#f50505; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-20, -195)" d="M 0 0 L 40 0 L 40 390 L 0 390 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-8IPAz7oLfXGezAr_XOseU">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-20, -195)" d="M 0 0 L 40 0 L 40 390 L 0 390 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="8IPAz7oLfXGezAr_XOseU">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-20, -195)" d="M 0 0 L 40 0 L 40 390 L 0 390 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>


    <g transform="matrix(-1 0 0 -1 443.25 272.26)" id="a55eemBMvVCvg5pXZdMCo"  >
        @forelse ( $siteplan->where('code_product', 'a55eemBMvVCvg5pXZdMCo') as $hasil)
            @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style="fill:#ffc107;  stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-20, -195)" d="M 0 0 L 40 0 L 40 390 L 0 390 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style="fill:#f50505; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-20, -195)" d="M 0 0 L 40 0 L 40 390 L 0 390 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-a55eemBMvVCvg5pXZdMCo">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-20, -195)" d="M 0 0 L 40 0 L 40 390 L 0 390 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="a55eemBMvVCvg5pXZdMCo">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-20, -195)" d="M 0 0 L 40 0 L 40 390 L 0 390 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>

    <g transform="matrix(-1 0 0 -1 483.25 272.26)" id="VyFK7cuu2qLOssY60wMkA"  >
        @forelse ( $siteplan->where('code_product', 'VyFK7cuu2qLOssY60wMkA') as $hasil)
            @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-20, -195)" d="M 0 0 L 40 0 L 40 390 L 0 390 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style="fill:#f50505; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-20, -195)" d="M 0 0 L 40 0 L 40 390 L 0 390 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-VyFK7cuu2qLOssY60wMkA">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-20, -195)" d="M 0 0 L 40 0 L 40 390 L 0 390 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="VyFK7cuu2qLOssY60wMkA">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-20, -195)" d="M 0 0 L 40 0 L 40 390 L 0 390 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>


    <g transform="matrix(-1 0 0 -1 417.87 603.58)" id="AEZ-AsN7JJ-Sli3i4Wggr"  >
        @forelse ( $siteplan->where('code_product', 'AEZ-AsN7JJ-Sli3i4Wggr') as $hasil)
            @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -45)" d="M 0 0 L 170 0 L 170 90 L 0 90 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style="fill:#f50505; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -45)" d="M 0 0 L 170 0 L 170 90 L 0 90 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-AEZ-AsN7JJ-Sli3i4Wggr">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -45)" d="M 0 0 L 170 0 L 170 90 L 0 90 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="AEZ-AsN7JJ-Sli3i4Wggr">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -45)" d="M 0 0 L 170 0 L 170 90 L 0 90 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>

    <g transform="matrix(-1 0 0 -1 417.87 694.58)" id="oQ-z3J4H2V26RfWkUb4lf"  >
        @forelse ( $siteplan->where('code_product', 'oQ-z3J4H2V26RfWkUb4lf') as $hasil)
            @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -45)" d="M 0 0 L 170 0 L 170 90 L 0 90 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style=" fill:#f50505; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -45)" d="M 0 0 L 170 0 L 170 90 L 0 90 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-oQ-z3J4H2V26RfWkUb4lf">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -45)" d="M 0 0 L 170 0 L 170 90 L 0 90 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="oQ-z3J4H2V26RfWkUb4lf">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -45)" d="M 0 0 L 170 0 L 170 90 L 0 90 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>

    <g transform="matrix(-1 0 0 -1 417.87 784.58)" id="owuzJAE4PLV8W9dwEhzD5"  >
        @forelse ( $siteplan->where('code_product', 'owuzJAE4PLV8W9dwEhzD5') as $hasil)
            @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -45)" d="M 0 0 L 170 0 L 170 90 L 0 90 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style="fill:#f50505; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -45)" d="M 0 0 L 170 0 L 170 90 L 0 90 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-owuzJAE4PLV8W9dwEhzD5">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -45)" d="M 0 0 L 170 0 L 170 90 L 0 90 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="owuzJAE4PLV8W9dwEhzD5">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -45)" d="M 0 0 L 170 0 L 170 90 L 0 90 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>

    <g transform="matrix(-1 0 0 -1 417.87 875.58)" id="cAN-Grhl_xQAIPFfgg1hb"  >
        @forelse ( $siteplan->where('code_product', 'cAN-Grhl_xQAIPFfgg1hb') as $hasil)
            @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -45)" d="M 0 0 L 170 0 L 170 90 L 0 90 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style=" fill:#f50505; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -45)" d="M 0 0 L 170 0 L 170 90 L 0 90 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-cAN-Grhl_xQAIPFfgg1hb">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -45)" d="M 0 0 L 170 0 L 170 90 L 0 90 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="cAN-Grhl_xQAIPFfgg1hb">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -45)" d="M 0 0 L 170 0 L 170 90 L 0 90 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>


    <g transform="matrix(-1 0 0 -1 417.87 965.58)" id="hv9MNnTRhsF-B08Um0rbo"  >
        @forelse ( $siteplan->where('code_product', 'hv9MNnTRhsF-B08Um0rbo') as $hasil)
            @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -45)" d="M 0 0 L 170 0 L 170 90 L 0 90 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style=" fill:#f50505; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -45)" d="M 0 0 L 170 0 L 170 90 L 0 90 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-hv9MNnTRhsF-B08Um0rbo">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -45)" d="M 0 0 L 170 0 L 170 90 L 0 90 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="hv9MNnTRhsF-B08Um0rbo">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -45)" d="M 0 0 L 170 0 L 170 90 L 0 90 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>

    <g transform="matrix(-1 0 0 -1 417.87 1056.58)" id="Eh6BUktm4H8erJEPj4MFa"  >
        @forelse ( $siteplan->where('code_product', 'Eh6BUktm4H8erJEPj4MFa') as $hasil)
            @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -45)" d="M 0 0 L 170 0 L 170 90 L 0 90 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style="fill:#f50505; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -45)" d="M 0 0 L 170 0 L 170 90 L 0 90 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-Eh6BUktm4H8erJEPj4MFa">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -45)" d="M 0 0 L 170 0 L 170 90 L 0 90 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="Eh6BUktm4H8erJEPj4MFa">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -45)" d="M 0 0 L 170 0 L 170 90 L 0 90 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>

    <g transform="matrix(-1 0 0 -1 417.88 1237.58)" id="l9tf9G9iZBkjgCjeB2ld2"  >
        @forelse ( $siteplan->where('code_product', 'l9tf9G9iZBkjgCjeB2ld2') as $hasil)
            @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -45)" d="M 0 0 L 170 0 L 170 90 L 0 90 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style="fill:#f50505;stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -45)" d="M 0 0 L 170 0 L 170 90 L 0 90 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-l9tf9G9iZBkjgCjeB2ld2">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -45)" d="M 0 0 L 170 0 L 170 90 L 0 90 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="l9tf9G9iZBkjgCjeB2ld2">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -45)" d="M 0 0 L 170 0 L 170 90 L 0 90 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>

    <g transform="matrix(-1 0 0 -1 417.88 1327.58)" id="DBYMXyEhbRpWaz1Y2FklO"  >
        @forelse ( $siteplan->where('code_product', 'DBYMXyEhbRpWaz1Y2FklO') as $hasil)
            @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style=" fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -45)" d="M 0 0 L 170 0 L 170 90 L 0 90 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style=" fill:#f50505; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -45)" d="M 0 0 L 170 0 L 170 90 L 0 90 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-DBYMXyEhbRpWaz1Y2FklO">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -45)" d="M 0 0 L 170 0 L 170 90 L 0 90 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="DBYMXyEhbRpWaz1Y2FklO">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -45)" d="M 0 0 L 170 0 L 170 90 L 0 90 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>

    <g transform="matrix(-1 0 0 -1 417.88 1418.58)" id="V2_jD9m4aPYsCgtMtt0D1"  >
        @forelse ( $siteplan->where('code_product', 'V2_jD9m4aPYsCgtMtt0D1') as $hasil)
            @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style="fill:#ffc107;  stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -45)" d="M 0 0 L 170 0 L 170 90 L 0 90 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style="fill:#f50505; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -45)" d="M 0 0 L 170 0 L 170 90 L 0 90 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-V2_jD9m4aPYsCgtMtt0D1">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -45)" d="M 0 0 L 170 0 L 170 90 L 0 90 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="V2_jD9m4aPYsCgtMtt0D1">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -45)" d="M 0 0 L 170 0 L 170 90 L 0 90 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>

    <g transform="matrix(-1 0 0 -1 417.88 1508.58)" id="j50kiHiIcly5O-wDLPMCf"  >
        @forelse ( $siteplan->where('code_product', 'j50kiHiIcly5O-wDLPMCf') as $hasil)
            @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style="fill:#ffc107;  stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -45)" d="M 0 0 L 170 0 L 170 90 L 0 90 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style=" fill:#f50505;  stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -45)" d="M 0 0 L 170 0 L 170 90 L 0 90 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-j50kiHiIcly5O-wDLPMCf">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -45)" d="M 0 0 L 170 0 L 170 90 L 0 90 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="j50kiHiIcly5O-wDLPMCf">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -45)" d="M 0 0 L 170 0 L 170 90 L 0 90 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>

    <g transform="matrix(-1 0 0 -1 417.88 1599.58)" id="ii4IcHHUwqtaaILEzTcmF"  >
        @forelse ( $siteplan->where('code_product', 'ii4IcHHUwqtaaILEzTcmF') as $hasil)
            @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style="fill:#ffc107;  stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -85 -45 L 85 -45 L 85 45 L -85 45 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style=" fill:#f50505; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -85 -45 L 85 -45 L 85 45 L -85 45 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-ii4IcHHUwqtaaILEzTcmF">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -85 -45 L 85 -45 L 85 45 L -85 45 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="ii4IcHHUwqtaaILEzTcmF">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -85 -45 L 85 -45 L 85 45 L -85 45 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>

    <g transform="matrix(-1 0 0 -1 417.87 1146.58)" id="agh03dOJ9QKyyzQf27vju"  >
        @forelse ( $siteplan->where('code_product', 'agh03dOJ9QKyyzQf27vju') as $hasil)
            @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style=" fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -45)" d="M 0 0 L 170 0 L 170 90 L 0 90 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style="fill:#f50505; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -45)" d="M 0 0 L 170 0 L 170 90 L 0 90 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-agh03dOJ9QKyyzQf27vju">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -45)" d="M 0 0 L 170 0 L 170 90 L 0 90 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="agh03dOJ9QKyyzQf27vju">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -45)" d="M 0 0 L 170 0 L 170 90 L 0 90 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>

    <g transform="matrix(-1 0 0 -1 417.88 1691.58)" id="mEWIfNA7kmqJ1XzghxdYd"  >
        @forelse ( $siteplan->where('code_product', 'mEWIfNA7kmqJ1XzghxdYd') as $hasil)
            @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style=" fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -45)" d="M 0 0 L 170 0 L 170 90 L 0 90 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style="fill:#f50505; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -45)" d="M 0 0 L 170 0 L 170 90 L 0 90 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-mEWIfNA7kmqJ1XzghxdYd">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -45)" d="M 0 0 L 170 0 L 170 90 L 0 90 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="mEWIfNA7kmqJ1XzghxdYd">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -45)" d="M 0 0 L 170 0 L 170 90 L 0 90 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>

    <g transform="matrix(-1 0 0 -1 417.88 1790.58)" id="FEC0bMtDLNXPteyO7ZwyG"  >
        @forelse ( $siteplan->where('code_product', 'FEC0bMtDLNXPteyO7ZwyG') as $hasil)
            @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style="fill:#ffc107;  stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -55)" d="M 0 0 L 170 0 L 170 110 L 0 110 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style=" fill:#f50505; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -55)" d="M 0 0 L 170 0 L 170 110 L 0 110 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-FEC0bMtDLNXPteyO7ZwyG">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -55)" d="M 0 0 L 170 0 L 170 110 L 0 110 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="FEC0bMtDLNXPteyO7ZwyG">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -55)" d="M 0 0 L 170 0 L 170 110 L 0 110 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>

    <g transform="matrix(-1 0 0 -1 418.25 1979.18)" id="XMAR_CidQBv0YCr0nNt7P"  >
        @forelse ( $siteplan->where('code_product', 'XMAR_CidQBv0YCr0nNt7P') as $hasil)
            @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -55)" d="M 0 0 L 170 0 L 170 110 L 0 110 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style="fill:#f50505; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -55)" d="M 0 0 L 170 0 L 170 110 L 0 110 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-XMAR_CidQBv0YCr0nNt7P">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -55)" d="M 0 0 L 170 0 L 170 110 L 0 110 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="XMAR_CidQBv0YCr0nNt7P">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -55)" d="M 0 0 L 170 0 L 170 110 L 0 110 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>

    <g transform="matrix(-1 0 0 -1 417.75 2080.18)" id="fbAhIn5JtlfmW6lM60Ac5"  >
        @forelse ( $siteplan->where('code_product', 'fbAhIn5JtlfmW6lM60Ac5') as $hasil)
            @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -45)" d="M 0 0 L 170 0 L 170 90 L 0 90 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style="fill:#f50505; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -45)" d="M 0 0 L 170 0 L 170 90 L 0 90 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-fbAhIn5JtlfmW6lM60Ac5">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -45)" d="M 0 0 L 170 0 L 170 90 L 0 90 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="fbAhIn5JtlfmW6lM60Ac5">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -45)" d="M 0 0 L 170 0 L 170 90 L 0 90 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>

    <g transform="matrix(-1 0 0 -1 417.75 2171.18)" id="e_vghfI3HnFW_h_XuWJoS"  >
        @forelse ( $siteplan->where('code_product', 'e_vghfI3HnFW_h_XuWJoS') as $hasil)
            @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -45)" d="M 0 0 L 170 0 L 170 90 L 0 90 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style="fill:#f50505; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -45)" d="M 0 0 L 170 0 L 170 90 L 0 90 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-e_vghfI3HnFW_h_XuWJoS">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -45)" d="M 0 0 L 170 0 L 170 90 L 0 90 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="e_vghfI3HnFW_h_XuWJoS">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -45)" d="M 0 0 L 170 0 L 170 90 L 0 90 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>

    <g transform="matrix(-1 0 0 -1 417.75 2261.18)" id="spMEFKymfyBnRJk1uxssf"  >
        @forelse ( $siteplan->where('code_product', 'spMEFKymfyBnRJk1uxssf') as $hasil)
            @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style="fill:#ffc107;  stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -45)" d="M 0 0 L 170 0 L 170 90 L 0 90 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style="fill:#f50505; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -45)" d="M 0 0 L 170 0 L 170 90 L 0 90 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-spMEFKymfyBnRJk1uxssf">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -45)" d="M 0 0 L 170 0 L 170 90 L 0 90 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="spMEFKymfyBnRJk1uxssf">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -45)" d="M 0 0 L 170 0 L 170 90 L 0 90 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>

    <g transform="matrix(-1 0 0 -1 417.75 2352.18)" id="2hkemkpQflWZgtzkpdDvr"  >
        @forelse ( $siteplan->where('code_product', '2hkemkpQflWZgtzkpdDvr') as $hasil)
            @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style="fill:#ffc107;  stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -45)" d="M 0 0 L 170 0 L 170 90 L 0 90 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style="fill:#f50505; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -45)" d="M 0 0 L 170 0 L 170 90 L 0 90 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-2hkemkpQflWZgtzkpdDvr">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -45)" d="M 0 0 L 170 0 L 170 90 L 0 90 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="2hkemkpQflWZgtzkpdDvr">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -45)" d="M 0 0 L 170 0 L 170 90 L 0 90 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>

    <g transform="matrix(-1 0 0 -1 417.75 2442.18)" id="oAjCuWBE5rtxbTOwouhwi"  >
        @forelse ( $siteplan->where('code_product', 'oAjCuWBE5rtxbTOwouhwi') as $hasil)
            @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style=" fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -45)" d="M 0 0 L 170 0 L 170 90 L 0 90 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style=" fill:#f50505; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -45)" d="M 0 0 L 170 0 L 170 90 L 0 90 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-oAjCuWBE5rtxbTOwouhwi">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -45)" d="M 0 0 L 170 0 L 170 90 L 0 90 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="oAjCuWBE5rtxbTOwouhwi">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -45)" d="M 0 0 L 170 0 L 170 90 L 0 90 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>

    <g transform="matrix(-1 0 0 -1 417.75 2533.18)" id="TOvaKwyMPknM7Cm6WyKME"  >
        @forelse ( $siteplan->where('code_product', 'TOvaKwyMPknM7Cm6WyKME') as $hasil)
            @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -45)" d="M 0 0 L 170 0 L 170 90 L 0 90 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style=" fill:#f50505; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -45)" d="M 0 0 L 170 0 L 170 90 L 0 90 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-TOvaKwyMPknM7Cm6WyKME">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -45)" d="M 0 0 L 170 0 L 170 90 L 0 90 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="TOvaKwyMPknM7Cm6WyKME">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -45)" d="M 0 0 L 170 0 L 170 90 L 0 90 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>

    <g transform="matrix(-1 0 0 -1 417.75 2714.18)" id="wmQyJ_pKosolIgherGVRu"  >
        @forelse ( $siteplan->where('code_product', 'wmQyJ_pKosolIgherGVRu') as $hasil)
            @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -45)" d="M 0 0 L 170 0 L 170 90 L 0 90 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style="fill:#f50505; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -45)" d="M 0 0 L 170 0 L 170 90 L 0 90 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-wmQyJ_pKosolIgherGVRu">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -45)" d="M 0 0 L 170 0 L 170 90 L 0 90 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="wmQyJ_pKosolIgherGVRu">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -45)" d="M 0 0 L 170 0 L 170 90 L 0 90 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>

    <g transform="matrix(-1 0 0 -1 417.75 2804.18)" id="3GuXfGKvfwgsSFijbxbXY"  >
        @forelse ( $siteplan->where('code_product', '3GuXfGKvfwgsSFijbxbXY') as $hasil)
            @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -45)" d="M 0 0 L 170 0 L 170 90 L 0 90 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style="fill:#f50505; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -45)" d="M 0 0 L 170 0 L 170 90 L 0 90 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-3GuXfGKvfwgsSFijbxbXY">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -45)" d="M 0 0 L 170 0 L 170 90 L 0 90 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="3GuXfGKvfwgsSFijbxbXY">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -45)" d="M 0 0 L 170 0 L 170 90 L 0 90 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>

    <g transform="matrix(-1 0 0 -1 417.75 2895.18)" id="4ePlGxScSmvvpXpW0T7QD"  >
        @forelse ( $siteplan->where('code_product', '4ePlGxScSmvvpXpW0T7QD') as $hasil)
            @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -45)" d="M 0 0 L 170 0 L 170 90 L 0 90 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style=" fill:#f50505; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -45)" d="M 0 0 L 170 0 L 170 90 L 0 90 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-4ePlGxScSmvvpXpW0T7QD">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -45)" d="M 0 0 L 170 0 L 170 90 L 0 90 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="4ePlGxScSmvvpXpW0T7QD">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -45)" d="M 0 0 L 170 0 L 170 90 L 0 90 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>

    <g transform="matrix(-1 0 0 -1 417.75 2985.18)" id="punVeLbQeyp7ckjqR5dEX"  >
        @forelse ( $siteplan->where('code_product', 'punVeLbQeyp7ckjqR5dEX') as $hasil)
            @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style="fill:#ffc107;stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -45)" d="M 0 0 L 170 0 L 170 90 L 0 90 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style="fill:#f50505; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -45)" d="M 0 0 L 170 0 L 170 90 L 0 90 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-punVeLbQeyp7ckjqR5dEX">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -45)" d="M 0 0 L 170 0 L 170 90 L 0 90 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="punVeLbQeyp7ckjqR5dEX">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -45)" d="M 0 0 L 170 0 L 170 90 L 0 90 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>

    <g transform="matrix(-1 0 0 -1 417.75 3076.18)" id="w8IKGQZze0Nsr7HMG4PUf"  >
        @forelse ( $siteplan->where('code_product', 'w8IKGQZze0Nsr7HMG4PUf') as $hasil)
            @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -85 -45 L 85 -45 L 85 45 L -85 45 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style="fill:#f50505; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -85 -45 L 85 -45 L 85 45 L -85 45 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-w8IKGQZze0Nsr7HMG4PUf">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -85 -45 L 85 -45 L 85 45 L -85 45 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="w8IKGQZze0Nsr7HMG4PUf">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -85 -45 L 85 -45 L 85 45 L -85 45 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>

    <g transform="matrix(-1 0 0 -1 417.75 2623.18)" id="2ZRoXHH9Lf2k2IwuoDtD2"  >
        @forelse ( $siteplan->where('code_product', '2ZRoXHH9Lf2k2IwuoDtD2') as $hasil)
            @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style="fill:#ffc107;stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -45)" d="M 0 0 L 170 0 L 170 90 L 0 90 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style=" fill:#f50505; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -45)" d="M 0 0 L 170 0 L 170 90 L 0 90 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-2ZRoXHH9Lf2k2IwuoDtD2">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -45)" d="M 0 0 L 170 0 L 170 90 L 0 90 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="2ZRoXHH9Lf2k2IwuoDtD2">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -45)" d="M 0 0 L 170 0 L 170 90 L 0 90 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>

    <g transform="matrix(-1 0 0 -1 417.75 3168.18)" id="qlaP4eryzMYBjSe7i-M6W"  >
        @forelse ( $siteplan->where('code_product', 'qlaP4eryzMYBjSe7i-M6W') as $hasil)
            @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style="fill:#ffc107;  stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -45)" d="M 0 0 L 170 0 L 170 90 L 0 90 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style="fill:#f50505; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -45)" d="M 0 0 L 170 0 L 170 90 L 0 90 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-qlaP4eryzMYBjSe7i-M6W">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -45)" d="M 0 0 L 170 0 L 170 90 L 0 90 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="qlaP4eryzMYBjSe7i-M6W">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -45)" d="M 0 0 L 170 0 L 170 90 L 0 90 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>

    <g transform="matrix(-1 0 0 -1 417.75 3269.18)" id="Qr5IWCNNQ3QKGXIE0hHMp"  >
        @forelse ( $siteplan->where('code_product', 'Qr5IWCNNQ3QKGXIE0hHMp') as $hasil)
            @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -55)" d="M 0 0 L 170 0 L 170 110 L 0 110 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style=" fill:#f50505; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -55)" d="M 0 0 L 170 0 L 170 110 L 0 110 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-Qr5IWCNNQ3QKGXIE0hHMp">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -55)" d="M 0 0 L 170 0 L 170 110 L 0 110 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="Qr5IWCNNQ3QKGXIE0hHMp">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -55)" d="M 0 0 L 170 0 L 170 110 L 0 110 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>

    <g transform="matrix(-1 0 0 -1 182 514.58)" id="OifNiXYlkX68sP_YLFAfc"  >
        @forelse ( $siteplan->where('code_product', 'OifNiXYlkX68sP_YLFAfc') as $hasil)
            @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -45)" d="M 0 0 L 170 0 L 170 90 L 0 90 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style="fill:#f50505; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -45)" d="M 0 0 L 170 0 L 170 90 L 0 90 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-OifNiXYlkX68sP_YLFAfc">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -45)" d="M 0 0 L 170 0 L 170 90 L 0 90 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="OifNiXYlkX68sP_YLFAfc">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -45)" d="M 0 0 L 170 0 L 170 90 L 0 90 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>

    <g transform="matrix(-1 0 0 1 241.75 273.58)" id="Ay4TFPq2kxWyRdnGT_TxC"  >
        @forelse ( $siteplan->where('code_product', 'Ay4TFPq2kxWyRdnGT_TxC') as $hasil)
            @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style="fill:#ffc107;  stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-25, -195)" d="M 0 0 L 50 0 L 50 390 L 0 390 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style= "fill:#f50505;stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-25, -195)" d="M 0 0 L 50 0 L 50 390 L 0 390 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-Ay4TFPq2kxWyRdnGT_TxC">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-25, -195)" d="M 0 0 L 50 0 L 50 390 L 0 390 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="Ay4TFPq2kxWyRdnGT_TxC">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-25, -195)" d="M 0 0 L 50 0 L 50 390 L 0 390 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>

    <g transform="matrix(-1 0 0 -1 117 273.58)" id="TsLRKYLmEfc3KeepVkPS"  >
        @forelse ( $siteplan->where('code_product', 'TsLRKYLmEfc3KeepVkPS') as $hasil)
            @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-20, -195)" d="M 0 0 L 40 0 L 40 390 L 0 390 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style="fill:#f50505; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-20, -195)" d="M 0 0 L 40 0 L 40 390 L 0 390 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-TsLRKYLmEfc3KeepVkPS">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-20, -195)" d="M 0 0 L 40 0 L 40 390 L 0 390 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="TsLRKYLmEfc3KeepVkPS">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-20, -195)" d="M 0 0 L 40 0 L 40 390 L 0 390 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>

    <g transform="matrix(-1 0 0 -1 157 273.58)" id="LLbhPRmwELVwGBQdgd9t6"  >
        @forelse ( $siteplan->where('code_product', 'LLbhPRmwELVwGBQdgd9t6') as $hasil)
            @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style=" fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-20, -195)" d="M 0 0 L 40 0 L 40 390 L 0 390 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style="fill:#f50505; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-20, -195)" d="M 0 0 L 40 0 L 40 390 L 0 390 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-LLbhPRmwELVwGBQdgd9t6">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-20, -195)" d="M 0 0 L 40 0 L 40 390 L 0 390 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="LLbhPRmwELVwGBQdgd9t6">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-20, -195)" d="M 0 0 L 40 0 L 40 390 L 0 390 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>

    <g transform="matrix(-1 0 0 -1 197 273.58)" id="xL_nCjZR74B4BK8UfYgY"  >
        @forelse ( $siteplan->where('code_product', 'xL_nCjZR74B4BK8UfYgY') as $hasil)
            @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-20, -195)" d="M 0 0 L 40 0 L 40 390 L 0 390 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style="fill:#f50505; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-20, -195)" d="M 0 0 L 40 0 L 40 390 L 0 390 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-xL_nCjZR74B4BK8UfYgY">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-20, -195)" d="M 0 0 L 40 0 L 40 390 L 0 390 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="xL_nCjZR74B4BK8UfYgY">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-20, -195)" d="M 0 0 L 40 0 L 40 390 L 0 390 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>

    <g transform="matrix(-1 0 0 -1 182 604.58)" id="L5M9vZOvZ1T-6ELfb-hDj"  >
        @forelse ( $siteplan->where('code_product', 'L5M9vZOvZ1T-6ELfb-hDj') as $hasil)
            @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -45)" d="M 0 0 L 170 0 L 170 90 L 0 90 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style=" fill:#f50505; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -45)" d="M 0 0 L 170 0 L 170 90 L 0 90 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-L5M9vZOvZ1T-6ELfb-hDj">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -45)" d="M 0 0 L 170 0 L 170 90 L 0 90 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="L5M9vZOvZ1T-6ELfb-hDj">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -45)" d="M 0 0 L 170 0 L 170 90 L 0 90 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>

    <g transform="matrix(-1 0 0 -1 182 695.58)" id="9jIRH96FfhQdrb9cT2sNh"  >
        @forelse ( $siteplan->where('code_product', '9jIRH96FfhQdrb9cT2sNh') as $hasil)
            @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -45)" d="M 0 0 L 170 0 L 170 90 L 0 90 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style=" fill:#f50505; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -45)" d="M 0 0 L 170 0 L 170 90 L 0 90 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-9jIRH96FfhQdrb9cT2sNh">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -45)" d="M 0 0 L 170 0 L 170 90 L 0 90 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="9jIRH96FfhQdrb9cT2sNh">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -45)" d="M 0 0 L 170 0 L 170 90 L 0 90 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>

    <g transform="matrix(-1 0 0 -1 182 785.58)" id="ZiBoaZm9mGzWYhFdkDZXr"  >
        @forelse ( $siteplan->where('code_product', 'ZiBoaZm9mGzWYhFdkDZXr') as $hasil)
            @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style="fill:#ffc107;stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -45)" d="M 0 0 L 170 0 L 170 90 L 0 90 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style=" fill:#f50505; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -45)" d="M 0 0 L 170 0 L 170 90 L 0 90 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-ZiBoaZm9mGzWYhFdkDZXr">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -45)" d="M 0 0 L 170 0 L 170 90 L 0 90 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="ZiBoaZm9mGzWYhFdkDZXr">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -45)" d="M 0 0 L 170 0 L 170 90 L 0 90 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>

    <g transform="matrix(-1 0 0 -1 182 876.58)" id="Db8nEZiEhMdjfUajNb7bg"  >
        @forelse ( $siteplan->where('code_product', 'Db8nEZiEhMdjfUajNb7bg') as $hasil)
            @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -45)" d="M 0 0 L 170 0 L 170 90 L 0 90 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style="fill:#f50505; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -45)" d="M 0 0 L 170 0 L 170 90 L 0 90 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-Db8nEZiEhMdjfUajNb7bg">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -45)" d="M 0 0 L 170 0 L 170 90 L 0 90 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="Db8nEZiEhMdjfUajNb7bg">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -45)" d="M 0 0 L 170 0 L 170 90 L 0 90 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>

    <g transform="matrix(-1 0 0 -1 182 966.58)" id="sqnbbYNRHz8Yd8T0BxS5J"  >
        @forelse ( $siteplan->where('code_product', 'sqnbbYNRHz8Yd8T0BxS5J') as $hasil)
            @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -45)" d="M 0 0 L 170 0 L 170 90 L 0 90 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style=" fill:#f50505; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -45)" d="M 0 0 L 170 0 L 170 90 L 0 90 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-sqnbbYNRHz8Yd8T0BxS5J">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -45)" d="M 0 0 L 170 0 L 170 90 L 0 90 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="sqnbbYNRHz8Yd8T0BxS5J">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -45)" d="M 0 0 L 170 0 L 170 90 L 0 90 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>

    <g transform="matrix(-1 0 0 -1 182 1057.58)" id="84SZLAszWYOHYMSrRuoaU"  >
        @forelse ( $siteplan->where('code_product', '84SZLAszWYOHYMSrRuoaU') as $hasil)
            @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -45)" d="M 0 0 L 170 0 L 170 90 L 0 90 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style=" fill:#f50505; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -45)" d="M 0 0 L 170 0 L 170 90 L 0 90 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-84SZLAszWYOHYMSrRuoaU">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -45)" d="M 0 0 L 170 0 L 170 90 L 0 90 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="84SZLAszWYOHYMSrRuoaU">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -45)" d="M 0 0 L 170 0 L 170 90 L 0 90 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>

    <g transform="matrix(-1 0 0 -1 181.75 1238.58)" id="r89Oa273A324Mied62u4z"  >
        @forelse ( $siteplan->where('code_product', 'r89Oa273A324Mied62u4z') as $hasil)
            @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -45)" d="M 0 0 L 170 0 L 170 90 L 0 90 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style=" fill:#f50505; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -45)" d="M 0 0 L 170 0 L 170 90 L 0 90 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-r89Oa273A324Mied62u4z">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -45)" d="M 0 0 L 170 0 L 170 90 L 0 90 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="r89Oa273A324Mied62u4z">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -45)" d="M 0 0 L 170 0 L 170 90 L 0 90 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>

    <g transform="matrix(-1 0 0 -1 181.75 1328.58)" id="6jYXvkYsoD3K0ArFgwyv2"  >
        @forelse ( $siteplan->where('code_product', '6jYXvkYsoD3K0ArFgwyv2') as $hasil)
            @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -45)" d="M 0 0 L 170 0 L 170 90 L 0 90 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style="  fill:#f50505; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -45)" d="M 0 0 L 170 0 L 170 90 L 0 90 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-6jYXvkYsoD3K0ArFgwyv2">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -45)" d="M 0 0 L 170 0 L 170 90 L 0 90 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="6jYXvkYsoD3K0ArFgwyv2">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -45)" d="M 0 0 L 170 0 L 170 90 L 0 90 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>

    <g transform="matrix(-1 0 0 -1 181.75 1419.58)" id="2NBqJgDfiA9ItMkfV_znP"  >
        @forelse ( $siteplan->where('code_product', '2NBqJgDfiA9ItMkfV_znP') as $hasil)
            @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -45)" d="M 0 0 L 170 0 L 170 90 L 0 90 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style="fill:#f50505; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -45)" d="M 0 0 L 170 0 L 170 90 L 0 90 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-2NBqJgDfiA9ItMkfV_znP">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -45)" d="M 0 0 L 170 0 L 170 90 L 0 90 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="2NBqJgDfiA9ItMkfV_znP">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -45)" d="M 0 0 L 170 0 L 170 90 L 0 90 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>

    <g transform="matrix(-1 0 0 -1 181.75 1509.58)" id="0Zy8gJCKuMFBNUbCSw5C6"  >
        @forelse ( $siteplan->where('code_product', '0Zy8gJCKuMFBNUbCSw5C6') as $hasil)
            @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -45)" d="M 0 0 L 170 0 L 170 90 L 0 90 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style="fill:#f50505; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -45)" d="M 0 0 L 170 0 L 170 90 L 0 90 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-0Zy8gJCKuMFBNUbCSw5C6">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -45)" d="M 0 0 L 170 0 L 170 90 L 0 90 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="0Zy8gJCKuMFBNUbCSw5C6">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -45)" d="M 0 0 L 170 0 L 170 90 L 0 90 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>

    <g transform="matrix(-1 0 0 -1 181.75 1600.58)" id="B21jbUBGKGCDIX3oUAJeO"  >
        @forelse ( $siteplan->where('code_product', 'B21jbUBGKGCDIX3oUAJeO') as $hasil)
            @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -85 -45 L 85 -45 L 85 45 L -85 45 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style="fill:#f50505; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -85 -45 L 85 -45 L 85 45 L -85 45 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-B21jbUBGKGCDIX3oUAJeO">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -85 -45 L 85 -45 L 85 45 L -85 45 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="B21jbUBGKGCDIX3oUAJeO">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -85 -45 L 85 -45 L 85 45 L -85 45 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>

    <g transform="matrix(-1 0 0 -1 182 1147.58)" id="EwESICGRfxWkGknCjQFbC"  >
        @forelse ( $siteplan->where('code_product', 'EwESICGRfxWkGknCjQFbC') as $hasil)
            @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style=" fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -45)" d="M 0 0 L 170 0 L 170 90 L 0 90 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style="fill:#f50505; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -45)" d="M 0 0 L 170 0 L 170 90 L 0 90 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-EwESICGRfxWkGknCjQFbC">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -45)" d="M 0 0 L 170 0 L 170 90 L 0 90 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="EwESICGRfxWkGknCjQFbC">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -45)" d="M 0 0 L 170 0 L 170 90 L 0 90 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>

    <g transform="matrix(-1 0 0 -1 181.75 1691.58)" id="_80PZOCPryLsXyHdw7KjM"  >
        @forelse ( $siteplan->where('code_product', '_80PZOCPryLsXyHdw7KjM') as $hasil)
            @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style=" fill:#ffc107;  stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -45)" d="M 0 0 L 170 0 L 170 90 L 0 90 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style="fill:#f50505; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -45)" d="M 0 0 L 170 0 L 170 90 L 0 90 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-_80PZOCPryLsXyHdw7KjM">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -45)" d="M 0 0 L 170 0 L 170 90 L 0 90 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="_80PZOCPryLsXyHdw7KjM">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -45)" d="M 0 0 L 170 0 L 170 90 L 0 90 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>

    <g transform="matrix(-1 0 0 -1 181.75 1791.58)" id="hyZ6_Ow8soKx-Utu2AQe6"  >
        @forelse ( $siteplan->where('code_product', 'hyZ6_Ow8soKx-Utu2AQe6') as $hasil)
            @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style=" fill:#ffc107;  stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -55)" d="M 0 0 L 170 0 L 170 110 L 0 110 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style="fill:#f50505; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -55)" d="M 0 0 L 170 0 L 170 110 L 0 110 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-hyZ6_Ow8soKx-Utu2AQe6">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -55)" d="M 0 0 L 170 0 L 170 110 L 0 110 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="hyZ6_Ow8soKx-Utu2AQe6">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -55)" d="M 0 0 L 170 0 L 170 110 L 0 110 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>

    <g transform="matrix(-1 0 0 -1 182.25 1979.18)" id="IckM3J_7Srt3VLxe6Qcla"  >
        @forelse ( $siteplan->where('code_product', 'IckM3J_7Srt3VLxe6Qcla') as $hasil)
            @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -55)" d="M 0 0 L 170 0 L 170 110 L 0 110 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style="fill:#f50505; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -55)" d="M 0 0 L 170 0 L 170 110 L 0 110 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-IckM3J_7Srt3VLxe6Qcla">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -55)" d="M 0 0 L 170 0 L 170 110 L 0 110 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="IckM3J_7Srt3VLxe6Qcla">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -55)" d="M 0 0 L 170 0 L 170 110 L 0 110 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>

    <g transform="matrix(-1 0 0 -1 182.75 2080.18)" id="mSzvIkqWE6kIXK-qD__I4"  >
        @forelse ( $siteplan->where('code_product', 'mSzvIkqWE6kIXK-qD__I4') as $hasil)
            @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style="fill:#ffc107;  stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -45)" d="M 0 0 L 170 0 L 170 90 L 0 90 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style=" fill:#f50505; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -45)" d="M 0 0 L 170 0 L 170 90 L 0 90 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-mSzvIkqWE6kIXK-qD__I4">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -45)" d="M 0 0 L 170 0 L 170 90 L 0 90 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="mSzvIkqWE6kIXK-qD__I4">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -45)" d="M 0 0 L 170 0 L 170 90 L 0 90 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>

    <g transform="matrix(-1 0 0 -1 182.75 2171.18)" id="JzNyrQsmybk48RvKTrjAa"  >
        @forelse ( $siteplan->where('code_product', 'JzNyrQsmybk48RvKTrjAa') as $hasil)
            @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style=" fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -45)" d="M 0 0 L 170 0 L 170 90 L 0 90 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style="fill:#f50505; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -45)" d="M 0 0 L 170 0 L 170 90 L 0 90 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-JzNyrQsmybk48RvKTrjAa">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -45)" d="M 0 0 L 170 0 L 170 90 L 0 90 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="JzNyrQsmybk48RvKTrjAa">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -45)" d="M 0 0 L 170 0 L 170 90 L 0 90 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>

    <g transform="matrix(-1 0 0 -1 182.75 2261.18)" id="sUYd9V08ylmBzjXy6qx6h"  >

        @forelse ( $siteplan->where('code_product', 'sUYd9V08ylmBzjXy6qx6h') as $hasil)
            @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -45)" d="M 0 0 L 170 0 L 170 90 L 0 90 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style="fill:#f50505; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -45)" d="M 0 0 L 170 0 L 170 90 L 0 90 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-sUYd9V08ylmBzjXy6qx6h">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -45)" d="M 0 0 L 170 0 L 170 90 L 0 90 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="sUYd9V08ylmBzjXy6qx6h">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -45)" d="M 0 0 L 170 0 L 170 90 L 0 90 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>

    <g transform="matrix(-1 0 0 -1 182.75 2352.18)" id="hhK0EPPiomTB7MQD6UQAa"  >
        @forelse ( $siteplan->where('code_product', 'hhK0EPPiomTB7MQD6UQAa') as $hasil)
            @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style="fill:#ffc107;  stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -45)" d="M 0 0 L 170 0 L 170 90 L 0 90 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style=" fill:#f50505; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -45)" d="M 0 0 L 170 0 L 170 90 L 0 90 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-hhK0EPPiomTB7MQD6UQAa">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -45)" d="M 0 0 L 170 0 L 170 90 L 0 90 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="hhK0EPPiomTB7MQD6UQAa">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -45)" d="M 0 0 L 170 0 L 170 90 L 0 90 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>

    <g transform="matrix(-1 0 0 -1 182.75 2442.18)" id="xu_crgNYYrRuBee3qtUTl"  >
        @forelse ( $siteplan->where('code_product', 'xu_crgNYYrRuBee3qtUTl') as $hasil)
            @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style=" fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -45)" d="M 0 0 L 170 0 L 170 90 L 0 90 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style="fill:#f50505; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -45)" d="M 0 0 L 170 0 L 170 90 L 0 90 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-xu_crgNYYrRuBee3qtUTl">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -45)" d="M 0 0 L 170 0 L 170 90 L 0 90 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="xu_crgNYYrRuBee3qtUTl">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -45)" d="M 0 0 L 170 0 L 170 90 L 0 90 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>

    <g transform="matrix(-1 0 0 -1 182.75 2533.18)" id="VjqskdOYuJWrHoWUFHSoB"  >
        @forelse ( $siteplan->where('code_product', 'VjqskdOYuJWrHoWUFHSoB') as $hasil)
            @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -45)" d="M 0 0 L 170 0 L 170 90 L 0 90 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style="fill:#f50505; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -45)" d="M 0 0 L 170 0 L 170 90 L 0 90 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-VjqskdOYuJWrHoWUFHSoB">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -45)" d="M 0 0 L 170 0 L 170 90 L 0 90 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="VjqskdOYuJWrHoWUFHSoB">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -45)" d="M 0 0 L 170 0 L 170 90 L 0 90 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>
    <g transform="matrix(-1 0 0 -1 182.75 2714.18)" id="b2Qorcb2yYCZaCJnP_yJp"  >

        @forelse ( $siteplan->where('code_product', 'b2Qorcb2yYCZaCJnP_yJp') as $hasil)
            @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -45)" d="M 0 0 L 170 0 L 170 90 L 0 90 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style="fill:#f50505; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -45)" d="M 0 0 L 170 0 L 170 90 L 0 90 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-b2Qorcb2yYCZaCJnP_yJp">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -45)" d="M 0 0 L 170 0 L 170 90 L 0 90 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="b2Qorcb2yYCZaCJnP_yJp">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -45)" d="M 0 0 L 170 0 L 170 90 L 0 90 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>

    <g transform="matrix(-1 0 0 -1 182.75 2804.18)" id="TUxWke84C7mh0JrwpLmF5"  >
        @forelse ( $siteplan->where('code_product', 'TUxWke84C7mh0JrwpLmF5') as $hasil)
            @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -45)" d="M 0 0 L 170 0 L 170 90 L 0 90 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style=" fill:#f50505; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -45)" d="M 0 0 L 170 0 L 170 90 L 0 90 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-TUxWke84C7mh0JrwpLmF5">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -45)" d="M 0 0 L 170 0 L 170 90 L 0 90 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="TUxWke84C7mh0JrwpLmF5">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -45)" d="M 0 0 L 170 0 L 170 90 L 0 90 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>

    <g transform="matrix(-1 0 0 -1 182.75 2895.18)" id="dEfEf_pOk5qqpO9mC_PtK"  >
        @forelse ( $siteplan->where('code_product', 'dEfEf_pOk5qqpO9mC_PtK') as $hasil)
            @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style="fill:#ffc107;  stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -45)" d="M 0 0 L 170 0 L 170 90 L 0 90 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style="fill:#f50505; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -45)" d="M 0 0 L 170 0 L 170 90 L 0 90 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-dEfEf_pOk5qqpO9mC_PtK">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -45)" d="M 0 0 L 170 0 L 170 90 L 0 90 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="dEfEf_pOk5qqpO9mC_PtK">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -45)" d="M 0 0 L 170 0 L 170 90 L 0 90 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>
    <g transform="matrix(-1 0 0 -1 182.75 2985.18)" id="K0EWLnw6Mz7Q9X9KKofvU"  >
        @forelse ( $siteplan->where('code_product', 'K0EWLnw6Mz7Q9X9KKofvU') as $hasil)
            @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -45)" d="M 0 0 L 170 0 L 170 90 L 0 90 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style="fill:#f50505; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -45)" d="M 0 0 L 170 0 L 170 90 L 0 90 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-K0EWLnw6Mz7Q9X9KKofvU">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -45)" d="M 0 0 L 170 0 L 170 90 L 0 90 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="K0EWLnw6Mz7Q9X9KKofvU">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -45)" d="M 0 0 L 170 0 L 170 90 L 0 90 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>

    <g transform="matrix(-1 0 0 -1 182.75 3076.18)" id="83N2IVTTOHvST4m-_5DDp"  >
        @forelse ( $siteplan->where('code_product', '83N2IVTTOHvST4m-_5DDp') as $hasil)
            @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -85 -45 L 85 -45 L 85 45 L -85 45 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style=" fill:#f50505; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -85 -45 L 85 -45 L 85 45 L -85 45 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-83N2IVTTOHvST4m-_5DDp">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -85 -45 L 85 -45 L 85 45 L -85 45 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="83N2IVTTOHvST4m-_5DDp">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -85 -45 L 85 -45 L 85 45 L -85 45 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>

    <g transform="matrix(-1 0 0 -1 182.75 2623.18)" id="QzQnHWu1XwoCQMogdcJs_"  >
        @forelse ( $siteplan->where('code_product', 'QzQnHWu1XwoCQMogdcJs_') as $hasil)
            @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -45)" d="M 0 0 L 170 0 L 170 90 L 0 90 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style=" fill:#f50505; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -45)" d="M 0 0 L 170 0 L 170 90 L 0 90 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-QzQnHWu1XwoCQMogdcJs_">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -45)" d="M 0 0 L 170 0 L 170 90 L 0 90 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="QzQnHWu1XwoCQMogdcJs_">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -45)" d="M 0 0 L 170 0 L 170 90 L 0 90 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>

    <g transform="matrix(-1 0 0 -1 182.75 3168.18)" id="nwe0Lae2S5pD1f4FkeG_R"  >
        @forelse ( $siteplan->where('code_product', 'nwe0Lae2S5pD1f4FkeG_R') as $hasil)
            @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style="fill:#ffc107;  stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -45)" d="M 0 0 L 170 0 L 170 90 L 0 90 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style=" fill:#f50505; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -45)" d="M 0 0 L 170 0 L 170 90 L 0 90 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-nwe0Lae2S5pD1f4FkeG_R">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -45)" d="M 0 0 L 170 0 L 170 90 L 0 90 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="nwe0Lae2S5pD1f4FkeG_R">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -45)" d="M 0 0 L 170 0 L 170 90 L 0 90 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>
    <g transform="matrix(-1 0 0 -1 182.75 3269.18)" id="ZYpA-J7vEXThPDzTYdhtn"  >
        @forelse ( $siteplan->where('code_product', 'ZYpA-J7vEXThPDzTYdhtn') as $hasil)
            @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style="fill:#ffc107;  stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -55)" d="M 0 0 L 170 0 L 170 110 L 0 110 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style="fill:#f50505; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -55)" d="M 0 0 L 170 0 L 170 110 L 0 110 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-ZYpA-J7vEXThPDzTYdhtn">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -55)" d="M 0 0 L 170 0 L 170 110 L 0 110 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="ZYpA-J7vEXThPDzTYdhtn">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -55)" d="M 0 0 L 170 0 L 170 110 L 0 110 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>



    <g transform="matrix(0 1 -1 0 241.75 285.4)" style="" id="uVD3hcZC3KWBB5p7LjbNu"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="20" font-style="normal" font-weight="700" letter-spacing="0.04" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-50.32" y="4.08" >R</tspan><tspan x="-37.07" y="4.08" >u</tspan><tspan x="-23.89" y="4.08" >k</tspan><tspan x="-11.45" y="4.08" >o</tspan><tspan x="0.98" y="4.08" style="white-space: pre; "> </tspan><tspan x="6.21" y="4.08" >A</tspan><tspan x="20.05" y="4.08" >4</tspan></text>
    </g>
    <g transform="matrix(0 1 -1 0 197 280.46)" style="" id="l6SbqGqmXpKBCqPXUryw7"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="20" font-style="normal" font-weight="700" letter-spacing="0.04" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-45.37" y="4.08" >R</tspan><tspan x="-32.13" y="4.08" >u</tspan><tspan x="-18.94" y="4.08" >k</tspan><tspan x="-6.5" y="4.08" >o</tspan><tspan x="5.92" y="4.08" style="white-space: pre; "> </tspan><tspan x="11.16" y="4.08" >A</tspan><tspan x="25" y="4.08" >3</tspan></text>
    </g>
    <g transform="matrix(0 1 -1 0 157 279.47)" style="" id="JR_y8-wkHcAVKqEIqrNFm"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="20" font-style="normal" font-weight="700" letter-spacing="0.04" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-44.38" y="4.08" >R</tspan><tspan x="-31.14" y="4.08" >u</tspan><tspan x="-17.95" y="4.08" >k</tspan><tspan x="-5.51" y="4.08" >o</tspan><tspan x="6.91" y="4.08" style="white-space: pre; "> </tspan><tspan x="12.15" y="4.08" >A</tspan><tspan x="25.99" y="4.08" >2</tspan></text>
    </g>
    <g transform="matrix(0 1 -1 0 117 281.44)" style="" id="F-84-wu-h6lwGfdBh12KX"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="20" font-style="normal" font-weight="700" letter-spacing="0.04" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-46.36" y="4.08" >R</tspan><tspan x="-33.12" y="4.08" >u</tspan><tspan x="-19.93" y="4.08" >k</tspan><tspan x="-7.49" y="4.08" >o</tspan><tspan x="4.93" y="4.08" style="white-space: pre; "> </tspan><tspan x="10.17" y="4.08" >A</tspan><tspan x="24.01" y="4.08" >1</tspan></text>
    </g>
    <g transform="matrix(0 1 -1 0 478.75 282.49)" style="" id="BFH0P8OLsRGjjtXfSYJC5"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="20" font-style="normal" font-weight="700" letter-spacing="0.04" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-48.39" y="4.08" >R</tspan><tspan x="-35.15" y="4.08" >u</tspan><tspan x="-21.96" y="4.08" >k</tspan><tspan x="-9.52" y="4.08" >o</tspan><tspan x="2.9" y="4.08" style="white-space: pre; "> </tspan><tspan x="8.14" y="4.08" >B</tspan><tspan x="21.62" y="4.08" >4</tspan></text>
    </g>
    <g transform="matrix(0 1 -1 0 435.38 279.47)" style="" id="JBCa78ziCdsdgYgUv7hbu"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="20" font-style="normal" font-weight="700" letter-spacing="0.04" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-45.37" y="4.08" >R</tspan><tspan x="-32.13" y="4.08" >u</tspan><tspan x="-18.94" y="4.08" >k</tspan><tspan x="-6.5" y="4.08" >o</tspan><tspan x="5.92" y="4.08" style="white-space: pre; "> </tspan><tspan x="11.16" y="4.08" >B</tspan><tspan x="24.64" y="4.08" >3</tspan></text>
    </g>
    <g transform="matrix(0 1 -1 0 395.37 279.47)" style="" id="CFJOI4IBrFyEs95r9quDH"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="20" font-style="normal" font-weight="700" letter-spacing="0.04" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-44.38" y="4.08" >R</tspan><tspan x="-31.14" y="4.08" >u</tspan><tspan x="-17.95" y="4.08" >k</tspan><tspan x="-5.51" y="4.08" >o</tspan><tspan x="6.91" y="4.08" style="white-space: pre; "> </tspan><tspan x="12.15" y="4.08" >B</tspan><tspan x="25.63" y="4.08" >2</tspan></text>
    </g>
    <g transform="matrix(0 1 -1 0 355.37 279.47)" style="" id="8V29C0w1iOgDRCu62HOD8"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="20" font-style="normal" font-weight="700" letter-spacing="0.04" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-46.36" y="4.08" >R</tspan><tspan x="-33.12" y="4.08" >u</tspan><tspan x="-19.93" y="4.08" >k</tspan><tspan x="-7.49" y="4.08" >o</tspan><tspan x="4.93" y="4.08" style="white-space: pre; "> </tspan><tspan x="10.17" y="4.08" >B</tspan><tspan x="23.65" y="4.08" >1</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 182 604.58)" style="" id="fY7Gf4YIH3FlNlMbQSM_d"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="33" font-style="normal" font-weight="700" letter-spacing="0.066" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-19.98" y="11.51" >C</tspan><tspan x="1.11" y="11.51" >2</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 182 695.58)" style="" id="PpGId_s-YvdAcpoHC6YsF"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="33" font-style="normal" font-weight="700" letter-spacing="0.066" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-19.98" y="11.51" >C</tspan><tspan x="1.11" y="11.51" >1</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 182 785.58)" style="" id="J0qBM-KQtZpH7SuvXULWG"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="33" font-style="normal" font-weight="700" letter-spacing="0.066" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-19.98" y="11.51" >C</tspan><tspan x="1.11" y="11.51" >4</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 182 876.58)" style="" id="IpkXLQNdfLl8Hi0a-l6vX"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="33" font-style="normal" font-weight="700" letter-spacing="0.066" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-19.98" y="11.51" >C</tspan><tspan x="1.11" y="11.51" >5</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 182 966.58)" style="" id="thv9pKPDCpMsllvTZQFvp"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="33" font-style="normal" font-weight="700" letter-spacing="0.066" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-19.98" y="11.51" >C</tspan><tspan x="1.11" y="11.51" >6</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 182 1057.58)" style="" id="tWBbjcWmXVWjkxz_AlTy7"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="33" font-style="normal" font-weight="700" letter-spacing="0.066" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-19.98" y="11.51" >C</tspan><tspan x="1.11" y="11.51" >7</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 182 1147.58)" style="" id="BfpnODtybTB2sD_sBpU4-"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="33" font-style="normal" font-weight="700" letter-spacing="0.066" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-19.98" y="11.51" >C</tspan><tspan x="1.11" y="11.51" >8</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 181.75 1238.58)" style="" id="oCdQnA4IYIgnSLu_0vKGd"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="33" font-style="normal" font-weight="700" letter-spacing="0.066" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-19.98" y="11.51" >C</tspan><tspan x="1.11" y="11.51" >9</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 181.75 1328.58)" style="" id="EEV-9IwldUDuiDX4oJsGa"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="33" font-style="normal" font-weight="700" letter-spacing="0.066" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-29.45" y="11.51" >C</tspan><tspan x="-8.35" y="11.51" >1</tspan><tspan x="10.58" y="11.51" >0</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 181.75 1419.58)" style="" id="7bT3GNaa1Vdyyre2l5xkP"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="33" font-style="normal" font-weight="700" letter-spacing="0.066" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-29.45" y="11.51" >C</tspan><tspan x="-8.35" y="11.51" >1</tspan><tspan x="10.58" y="11.51" >1</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 181.75 1509.58)" style="" id="gtjm0PEix7bdoAthVMZ3l"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="33" font-style="normal" font-weight="700" letter-spacing="0.066" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-29.45" y="11.51" >C</tspan><tspan x="-8.35" y="11.51" >1</tspan><tspan x="10.58" y="11.51" >2</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 181.75 1600.58)" style="" id="ZrNR6T5gJhbJHxzn-i950"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="33" font-style="normal" font-weight="700" letter-spacing="0.066" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-29.45" y="11.51" >C</tspan><tspan x="-8.35" y="11.51" >1</tspan><tspan x="10.58" y="11.51" >3</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 181.75 1692.58)" style="" id="25cYeh_m3OS8pXr7kw3-4"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="33" font-style="normal" font-weight="700" letter-spacing="0.066" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-29.45" y="11.51" >C</tspan><tspan x="-8.35" y="11.51" >1</tspan><tspan x="10.58" y="11.51" >4</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 181.75 1791.58)" style="" id="qRKGhvLJBTx06hWjrVu-Z"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="33" font-style="normal" font-weight="700" letter-spacing="0.066" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-29.45" y="11.51" >C</tspan><tspan x="-8.35" y="11.51" >1</tspan><tspan x="10.58" y="11.51" >5</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 417.87 514.58)" style="" id="XZe4UJuAFLjXZsUeiw4dm"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="33" font-style="normal" font-weight="700" letter-spacing="0.066" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-21.68" y="11.51" >D</tspan><tspan x="2.81" y="11.51" >1</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 417.87 604.58)" style="" id="TaPGCr6UfZ2bnDF463zH9"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="33" font-style="normal" font-weight="700" letter-spacing="0.066" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-21.68" y="11.51" >C</tspan><tspan x="-0.59" y="11.51" >2</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 417.87 695.58)" style="" id="2QmxOShvnDfsMJNdCi_qQ"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="33" font-style="normal" font-weight="700" letter-spacing="0.066" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-21.68" y="11.51" >D</tspan><tspan x="2.81" y="11.51" >3</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 417.87 785.58)" style="" id="xVubC96KzBA8tG56_KUUs"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="33" font-style="normal" font-weight="700" letter-spacing="0.066" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-21.68" y="11.51" >D</tspan><tspan x="2.81" y="11.51" >4</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 417.87 876.58)" style="" id="ac82cdg4fvEUmnXW9ZmBi"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="33" font-style="normal" font-weight="700" letter-spacing="0.066" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-21.68" y="11.51" >D</tspan><tspan x="2.81" y="11.51" >5</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 417.87 966.58)" style="" id="bo0zn3R_HQ7LSiHku2S_p"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="33" font-style="normal" font-weight="700" letter-spacing="0.066" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-21.68" y="11.51" >D</tspan><tspan x="2.81" y="11.51" >6</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 417.87 1057.58)" style="" id="Q6xsrqcoSA88gRPKVkwBP"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="33" font-style="normal" font-weight="700" letter-spacing="0.066" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-21.68" y="11.51" >D</tspan><tspan x="2.81" y="11.51" >7</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 417.87 1147.58)" style="" id="x1t-QoMgJ_AC8jmVpXCPY"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="33" font-style="normal" font-weight="700" letter-spacing="0.066" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-21.68" y="11.51" >D</tspan><tspan x="2.81" y="11.51" >8</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 417.88 1238.58)" style="" id="2RLk4HLQVN5XvXu3jvX4_"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="33" font-style="normal" font-weight="700" letter-spacing="0.066" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-21.68" y="11.51" >D</tspan><tspan x="2.81" y="11.51" >9</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 417.88 1328.58)" style="" id="aQ62FLI2YzCW30DDysRY6"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="33" font-style="normal" font-weight="700" letter-spacing="0.066" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-31.15" y="11.51" >D</tspan><tspan x="-6.65" y="11.51" >1</tspan><tspan x="12.28" y="11.51" >0</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 417.88 1419.58)" style="" id="rh4cAFVdtBJ2XuercC5-X"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="33" font-style="normal" font-weight="700" letter-spacing="0.066" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-31.15" y="11.51" >D</tspan><tspan x="-6.65" y="11.51" >1</tspan><tspan x="12.28" y="11.51" >1</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 417.88 1509.58)" style="" id="SbQFhZmwLdFAZXhyO2CQ8"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="33" font-style="normal" font-weight="700" letter-spacing="0.066" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-31.15" y="11.51" >D</tspan><tspan x="-6.65" y="11.51" >1</tspan><tspan x="12.28" y="11.51" >2</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 417.88 1600.58)" style="" id="VOF9wnUNDFup2QkVJ5b1t"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="33" font-style="normal" font-weight="700" letter-spacing="0.066" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-31.15" y="11.51" >D</tspan><tspan x="-6.65" y="11.51" >1</tspan><tspan x="12.28" y="11.51" >3</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 417.88 1691.58)" style="" id="78P7vFGNoMl3dcQRMbYaJ"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="33" font-style="normal" font-weight="700" letter-spacing="0.066" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-31.15" y="11.51" >D</tspan><tspan x="-6.65" y="11.51" >1</tspan><tspan x="12.28" y="11.51" >4</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 417.88 1790.58)" style="" id="QHru5UzR5Qr7RwkvpNHQj"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="33" font-style="normal" font-weight="700" letter-spacing="0.066" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-31.15" y="11.51" >D</tspan><tspan x="-6.65" y="11.51" >1</tspan><tspan x="12.28" y="11.51" >5</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 417.87 514.58)" style="" id="XZe4UJuAFLjXZsUeiw4dm"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="33" font-style="normal" font-weight="700" letter-spacing="0.066" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-21.68" y="11.51" >D</tspan><tspan x="2.81" y="11.51" >1</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 417.87 604.58)" style="" id="TaPGCr6UfZ2bnDF463zH9"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="33" font-style="normal" font-weight="700" letter-spacing="0.066" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-21.68" y="11.51" >C</tspan><tspan x="-0.59" y="11.51" >2</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 417.87 695.58)" style="" id="2QmxOShvnDfsMJNdCi_qQ"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="33" font-style="normal" font-weight="700" letter-spacing="0.066" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-21.68" y="11.51" >D</tspan><tspan x="2.81" y="11.51" >3</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 417.87 785.58)" style="" id="xVubC96KzBA8tG56_KUUs"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="33" font-style="normal" font-weight="700" letter-spacing="0.066" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-21.68" y="11.51" >D</tspan><tspan x="2.81" y="11.51" >4</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 417.87 876.58)" style="" id="ac82cdg4fvEUmnXW9ZmBi"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="33" font-style="normal" font-weight="700" letter-spacing="0.066" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-21.68" y="11.51" >D</tspan><tspan x="2.81" y="11.51" >5</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 417.87 966.58)" style="" id="bo0zn3R_HQ7LSiHku2S_p"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="33" font-style="normal" font-weight="700" letter-spacing="0.066" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-21.68" y="11.51" >D</tspan><tspan x="2.81" y="11.51" >6</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 417.87 1057.58)" style="" id="Q6xsrqcoSA88gRPKVkwBP"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="33" font-style="normal" font-weight="700" letter-spacing="0.066" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-21.68" y="11.51" >D</tspan><tspan x="2.81" y="11.51" >7</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 417.87 1147.58)" style="" id="x1t-QoMgJ_AC8jmVpXCPY"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="33" font-style="normal" font-weight="700" letter-spacing="0.066" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-21.68" y="11.51" >D</tspan><tspan x="2.81" y="11.51" >8</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 417.88 1238.58)" style="" id="2RLk4HLQVN5XvXu3jvX4_"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="33" font-style="normal" font-weight="700" letter-spacing="0.066" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-21.68" y="11.51" >D</tspan><tspan x="2.81" y="11.51" >9</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 417.88 1328.58)" style="" id="aQ62FLI2YzCW30DDysRY6"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="33" font-style="normal" font-weight="700" letter-spacing="0.066" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-31.15" y="11.51" >D</tspan><tspan x="-6.65" y="11.51" >1</tspan><tspan x="12.28" y="11.51" >0</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 417.88 1419.58)" style="" id="rh4cAFVdtBJ2XuercC5-X"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="33" font-style="normal" font-weight="700" letter-spacing="0.066" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-31.15" y="11.51" >D</tspan><tspan x="-6.65" y="11.51" >1</tspan><tspan x="12.28" y="11.51" >1</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 417.88 1509.58)" style="" id="SbQFhZmwLdFAZXhyO2CQ8"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="33" font-style="normal" font-weight="700" letter-spacing="0.066" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-31.15" y="11.51" >D</tspan><tspan x="-6.65" y="11.51" >1</tspan><tspan x="12.28" y="11.51" >2</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 417.88 1600.58)" style="" id="VOF9wnUNDFup2QkVJ5b1t"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="33" font-style="normal" font-weight="700" letter-spacing="0.066" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-31.15" y="11.51" >D</tspan><tspan x="-6.65" y="11.51" >1</tspan><tspan x="12.28" y="11.51" >3</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 417.88 1691.58)" style="" id="78P7vFGNoMl3dcQRMbYaJ"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="33" font-style="normal" font-weight="700" letter-spacing="0.066" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-31.15" y="11.51" >D</tspan><tspan x="-6.65" y="11.51" >1</tspan><tspan x="12.28" y="11.51" >4</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 417.88 1790.58)" style="" id="QHru5UzR5Qr7RwkvpNHQj"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="33" font-style="normal" font-weight="700" letter-spacing="0.066" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-31.15" y="11.51" >D</tspan><tspan x="-6.65" y="11.51" >1</tspan><tspan x="12.28" y="11.51" >5</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 181.75 1982.18)" style="" id="o703yaH8pfuBAHHVI4tCo"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="33" font-style="normal" font-weight="700" letter-spacing="0.066" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-29.45" y="11.51" >C</tspan><tspan x="-8.35" y="11.51" >1</tspan><tspan x="10.58" y="11.51" >6</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 182.75 2080.18)" style="" id="ApcCG5bU_HqgVl2RDzjux"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="33" font-style="normal" font-weight="700" letter-spacing="0.066" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-29.45" y="11.51" >C</tspan><tspan x="-8.35" y="11.51" >1</tspan><tspan x="10.58" y="11.51" >7</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 182.75 2171.18)" style="" id="mX-mdCAkb9WSmsQr4t45x"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="33" font-style="normal" font-weight="700" letter-spacing="0.066" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-29.45" y="11.51" >C</tspan><tspan x="-8.35" y="11.51" >1</tspan><tspan x="10.58" y="11.51" >8</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 182.75 2261.18)" style="" id="xqs5bpM9ZGEE5ucB8dK5e"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="33" font-style="normal" font-weight="700" letter-spacing="0.066" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-29.45" y="11.51" >C</tspan><tspan x="-8.35" y="11.51" >1</tspan><tspan x="10.58" y="11.51" >9</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 182.75 2352.18)" style="" id="nujFUQIgTWl0W2OuffxVk"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="33" font-style="normal" font-weight="700" letter-spacing="0.066" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-29.45" y="11.51" >C</tspan><tspan x="-8.35" y="11.51" >2</tspan><tspan x="10.58" y="11.51" >0</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 182.75 2442.18)" style="" id="-b1Bg_ETZlTA2vucE1TRt"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="33" font-style="normal" font-weight="700" letter-spacing="0.066" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-29.45" y="11.51" >C</tspan><tspan x="-8.35" y="11.51" >2</tspan><tspan x="10.58" y="11.51" >1</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 182.75 2533.18)" style="" id="zDAoWV-nRDNQxglZNiQ6a"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="33" font-style="normal" font-weight="700" letter-spacing="0.066" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-29.45" y="11.51" >C</tspan><tspan x="-8.35" y="11.51" >2</tspan><tspan x="10.58" y="11.51" >2</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 182.75 2623.18)" style="" id="55cNojvqEm_tVpzUsK-X0"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="33" font-style="normal" font-weight="700" letter-spacing="0.066" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-29.45" y="11.51" >C</tspan><tspan x="-8.35" y="11.51" >2</tspan><tspan x="10.58" y="11.51" >3</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 182.75 2714.18)" style="" id="U1R5qWAe85jq3iALWe3dX"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="33" font-style="normal" font-weight="700" letter-spacing="0.066" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-29.45" y="11.51" >C</tspan><tspan x="-8.35" y="11.51" >2</tspan><tspan x="10.58" y="11.51" >4</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 182.75 2804.18)" style="" id="2b5j5_ShegzCznweXPstX"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="33" font-style="normal" font-weight="700" letter-spacing="0.066" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-29.45" y="11.51" >C</tspan><tspan x="-8.36" y="11.51" >2</tspan><tspan x="10.58" y="11.51" >5</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 182.75 2895.18)" style="" id="oEwj6q529uwDZd5hApp0s"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="33" font-style="normal" font-weight="700" letter-spacing="0.066" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-29.45" y="11.51" >C</tspan><tspan x="-8.36" y="11.51" >2</tspan><tspan x="10.58" y="11.51" >6</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 182.75 2985.18)" style="" id="bmY8B-WiMB-qdW-ISUmZS"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="33" font-style="normal" font-weight="700" letter-spacing="0.066" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-29.45" y="11.51" >C</tspan><tspan x="-8.36" y="11.51" >2</tspan><tspan x="10.58" y="11.51" >7</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 182.75 3076.18)" style="" id="8BdXXHV866HEC73YiWUw9"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="33" font-style="normal" font-weight="700" letter-spacing="0.066" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-29.45" y="11.51" >C</tspan><tspan x="-8.36" y="11.51" >2</tspan><tspan x="10.58" y="11.51" >8</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 182.75 3168.18)" style="" id="yB4SRIWeGiGld4lgndFWF"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="33" font-style="normal" font-weight="700" letter-spacing="0.066" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-29.45" y="11.51" >C</tspan><tspan x="-8.36" y="11.51" >2</tspan><tspan x="10.58" y="11.51" >9</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 182.75 3269.18)" style="" id="TvfKsLDu41G1IUA2dQuOC"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="33" font-style="normal" font-weight="700" letter-spacing="0.066" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-29.45" y="11.51" >C</tspan><tspan x="-8.36" y="11.51" >3</tspan><tspan x="10.58" y="11.51" >0</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 417.75 2082.18)" style="" id="YyiBLiCXtU5Uc7g4V6h8x"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="33" font-style="normal" font-weight="700" letter-spacing="0.066" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-31.15" y="11.51" >C</tspan><tspan x="-10.05" y="11.51" >1</tspan><tspan x="8.88" y="11.51" >7</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 417.75 2173.18)" style="" id="Tvo2-_LC1tbbC108hisLe"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="33" font-style="normal" font-weight="700" letter-spacing="0.066" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-31.15" y="11.51" >C</tspan><tspan x="-10.05" y="11.51" >1</tspan><tspan x="8.88" y="11.51" >8</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 417.75 2263.18)" style="" id="ieYYMMK6OhoX-85uRYdeq"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="33" font-style="normal" font-weight="700" letter-spacing="0.066" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-31.15" y="11.51" >C</tspan><tspan x="-10.05" y="11.51" >1</tspan><tspan x="8.88" y="11.51" >9</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 417.75 2354.18)" style="" id="tlOobhsx1flGmhWOdObYq"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="33" font-style="normal" font-weight="700" letter-spacing="0.066" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-31.15" y="11.51" >C</tspan><tspan x="-10.05" y="11.51" >2</tspan><tspan x="8.88" y="11.51" >0</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 417.75 2444.18)" style="" id="eLm9-m5BI1FcjSPLh09sS"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="33" font-style="normal" font-weight="700" letter-spacing="0.066" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-31.15" y="11.51" >C</tspan><tspan x="-10.05" y="11.51" >2</tspan><tspan x="8.88" y="11.51" >1</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 417.75 2535.18)" style="" id="WtkK0D3WUqxxwM5IpF0-F"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="33" font-style="normal" font-weight="700" letter-spacing="0.066" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-31.15" y="11.51" >D</tspan><tspan x="-6.65" y="11.51" >2</tspan><tspan x="12.28" y="11.51" >2</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 417.75 2625.18)" style="" id="kOXR5ym4t4FroC_12y9qH"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="33" font-style="normal" font-weight="700" letter-spacing="0.066" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-31.15" y="11.51" >D</tspan><tspan x="-6.65" y="11.51" >2</tspan><tspan x="12.28" y="11.51" >3</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 417.75 2716.18)" style="" id="A4j3zbN-ZzAwMvYLzmIdf"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="33" font-style="normal" font-weight="700" letter-spacing="0.066" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-31.15" y="11.51" >C</tspan><tspan x="-10.05" y="11.51" >2</tspan><tspan x="8.88" y="11.51" >4</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 417.75 2806.18)" style="" id="4laFs2W_7vM9aWIDL70pq"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="33" font-style="normal" font-weight="700" letter-spacing="0.066" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-31.15" y="11.51" >D</tspan><tspan x="-6.65" y="11.51" >2</tspan><tspan x="12.28" y="11.51" >5</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 417.75 2895.18)" style="" id="EaNZzH22wKAkaPUdoYTH6"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="33" font-style="normal" font-weight="700" letter-spacing="0.066" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-31.15" y="11.51" >D</tspan><tspan x="-6.65" y="11.51" >2</tspan><tspan x="12.28" y="11.51" >6</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 417.75 2987.18)" style="" id="7Kc_exeFzU3oJiy74Ucfw"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="33" font-style="normal" font-weight="700" letter-spacing="0.066" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-31.15" y="11.51" >D</tspan><tspan x="-6.65" y="11.51" >2</tspan><tspan x="12.28" y="11.51" >7</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 417.75 3078.18)" style="" id="1hC5iGYuneQbncm1iFE_H"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="33" font-style="normal" font-weight="700" letter-spacing="0.066" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-31.15" y="11.51" >D</tspan><tspan x="-6.65" y="11.51" >2</tspan><tspan x="12.28" y="11.51" >8</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 417.75 3170.18)" style="" id="VH2nTHgilRKt-AwuKtRzK"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="33" font-style="normal" font-weight="700" letter-spacing="0.066" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-31.15" y="11.51" >D</tspan><tspan x="-6.65" y="11.51" >2</tspan><tspan x="12.28" y="11.51" >9</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 417.75 3271.18)" style="" id="nH9W7UGs2oPz0aml23tXK"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="33" font-style="normal" font-weight="700" letter-spacing="0.066" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-31.15" y="11.51" >D</tspan><tspan x="-6.65" y="11.51" >3</tspan><tspan x="12.28" y="11.51" >0</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 182 514.58)" style="" id="Ry3M-eD1oKl5eH9xIfm3A"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="33" font-style="normal" font-weight="700" letter-spacing="0.066" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-19.98" y="11.51" >C</tspan><tspan x="1.11" y="11.51" >1</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 418.25 1979.18)" style="" id="CHyqo9ejYjwreDxYmlfxa"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="33" font-style="normal" font-weight="700" letter-spacing="0.066" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-31.15" y="11.51" >D</tspan><tspan x="-6.65" y="11.51" >1</tspan><tspan x="12.28" y="11.51" >6</tspan></text>
    </g>
    <g transform="matrix(3.01 0 0 0.55 300.69 1884.88)" id="SC7UWHj_4SMeuhWuHVVL5"  >
    <path style="stroke: rgb(62,240,101); stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(163,160,159); fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -68.39428 -68.39428 L 68.39429 -68.39428 L 68.39429 68.39429 L -68.39428 68.39429 z" stroke-linecap="round" />
    </g>
</svg>
