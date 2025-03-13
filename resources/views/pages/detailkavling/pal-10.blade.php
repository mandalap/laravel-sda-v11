<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="100%" viewBox="0 0 900 4500" xml:space="preserve">

    <g transform="matrix(0.18 0 0 14.09 281.71 2229.61)" id="pisu3JUKoOMD-LeKLc1OZ"  >
    <path style="stroke: rgb(96,140,246); stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(112,112,112); fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -147.05882 -147.05882 L 147.05883000000003 -147.05882 L 147.05883000000003 147.05883000000003 L -9.926259999999985 147.05883000000003 L -147.05882 147.05883000000003 z" stroke-linecap="round" />
    </g>
    <g transform="matrix(0 0.22 -2.54 0 426.72 126.34)" id="u1xZKgVaWJS0PtSiezAhI"  >
    <path style="stroke: rgb(96,140,246); stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(112,112,112); fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -147.05882 -147.05882 L 147.05883000000003 -147.05882 L 147.05883000000003 147.05883000000003 L -147.05882 147.05883000000003 z" stroke-linecap="round" />
    </g>
    <g transform="matrix(0.79 0 0 1 516.32 308.93)" id="YxZWfQKQKLHhSmZ6WInK-"  >
    <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -50 -150 L 50 -150 L 50 150 L -50 150 z" stroke-linecap="round" />
    </g>
    <g transform="matrix(3.16 0 0 1 467.91 308.93)" id="ptJ4fnFVDnTycsZVqFczY"  >
    <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(255,243,18); fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -50 -150 L 50 -150 L 50 150 L -50 150 z" stroke-linecap="round" />
    </g>

    <g transform="matrix(0.79 0 0 0.56 467.9 501.57)" id="5ox0V8T41fZYGWZgoMHhDsa"  >
        @forelse ( $siteplan->where('code_product', '5ox0V8T41fZYGWZgoMHhDsa') as $hasil)
            @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style="fill:#ffc107;  stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -200 -75 L 200 -75 L 200 75 L -200 75 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style="fill:#f50505; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -200 -75 L 200 -75 L 200 75 L -200 75 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-5ox0V8T41fZYGWZgoMHhDsa">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -200 -75 L 200 -75 L 200 75 L -200 75 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="5ox0V8T41fZYGWZgoMHhDsa">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -200 -75 L 200 -75 L 200 75 L -200 75 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>

    <g transform="matrix(0.79 0 0 0.56 467.9 585.08)" id="jIo-gKhC9J0zufi5TwuCB2121"  >
        @forelse ( $siteplan->where('code_product', 'jIo-gKhC9J0zufi5TwuCB2121') as $hasil)
            @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style=" fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -200 -75 L 200 -75 L 200 75 L -200 75 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style=" fill:#f50505; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -200 -75 L 200 -75 L 200 75 L -200 75 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-jIo-gKhC9J0zufi5TwuCB2121">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -200 -75 L 200 -75 L 200 75 L -200 75 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="jIo-gKhC9J0zufi5TwuCB2121">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -200 -75 L 200 -75 L 200 75 L -200 75 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>

    <g transform="matrix(0.79 0 0 0.56 467.9 668.34)" id="aoBUZQgX8OD9hentuQPKE111"  >
        @forelse ( $siteplan->where('code_product', 'aoBUZQgX8OD9hentuQPKE111') as $hasil)
            @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -200 -75 L 200 -75 L 200 75 L -200 75 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style="fill:#f50505; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -200 -75 L 200 -75 L 200 75 L -200 75 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-aoBUZQgX8OD9hentuQPKE111">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -200 -75 L 200 -75 L 200 75 L -200 75 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="aoBUZQgX8OD9hentuQPKE111">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -200 -75 L 200 -75 L 200 75 L -200 75 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>

    <g transform="matrix(0.79 0 0 0.56 467.9 751.85)" id="AYtCEg3Mo3XfRSClTz3GKzsas"  >
        @forelse ( $siteplan->where('code_product', 'AYtCEg3Mo3XfRSClTz3GKzsas') as $hasil)
            @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -200 -75 L 200 -75 L 200 75 L -200 75 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style="fill:#f50505; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -200 -75 L 200 -75 L 200 75 L -200 75 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-AYtCEg3Mo3XfRSClTz3GKzsas">
                <path style="fill: #f8f8f8;  stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -200 -75 L 200 -75 L 200 75 L -200 75 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="AYtCEg3Mo3XfRSClTz3GKzsas">
            <path style="fill: #f8f8f8;  stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -200 -75 L 200 -75 L 200 75 L -200 75 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>

    <g transform="matrix(0.79 0 0 0.56 467.9 835.12)" id="_wJbo2L6RAa6IGp97dNfisaa"  >
        @forelse ( $siteplan->where('code_product', '_wJbo2L6RAa6IGp97dNfisaa') as $hasil)
            @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -200 -75 L 200 -75 L 200 75 L -200 75 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style="fill:#f50505; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -200 -75 L 200 -75 L 200 75 L -200 75 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-_wJbo2L6RAa6IGp97dNfisaa">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -200 -75 L 200 -75 L 200 75 L -200 75 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="_wJbo2L6RAa6IGp97dNfisaa">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -200 -75 L 200 -75 L 200 75 L -200 75 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>

    <g transform="matrix(0.79 0 0 0.56 467.9 918.63)" id="NFt-yszu0p1igfOjOSvoJ1121"  >
        @forelse ( $siteplan->where('code_product', 'NFt-yszu0p1igfOjOSvoJ1121') as $hasil)
            @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -200 -75 L 200 -75 L 200 75 L -200 75 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style="fill:#f50505; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -200 -75 L 200 -75 L 200 75 L -200 75 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-NFt-yszu0p1igfOjOSvoJ1121">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -200 -75 L 200 -75 L 200 75 L -200 75 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="NFt-yszu0p1igfOjOSvoJ1121">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -200 -75 L 200 -75 L 200 75 L -200 75 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>

    <g transform="matrix(0.79 0 0 0.56 467.9 1001.89)" id="_rTRHEmi_uWYJLHUMP7GR2112"  >
        @forelse ( $siteplan->where('code_product', '_rTRHEmi_uWYJLHUMP7GR2112') as $hasil)
            @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -200 -75 L 200 -75 L 200 75 L -200 75 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style="fill:#f50505; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -200 -75 L 200 -75 L 200 75 L -200 75 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-_rTRHEmi_uWYJLHUMP7GR2112">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -200 -75 L 200 -75 L 200 75 L -200 75 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="_rTRHEmi_uWYJLHUMP7GR2112">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -200 -75 L 200 -75 L 200 75 L -200 75 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>

    <g transform="matrix(0.79 0 0 0.56 467.9 1085.41)" id="DzHarUo419NVC89L1lHI6dqw"  >
        @forelse ( $siteplan->where('code_product', 'DzHarUo419NVC89L1lHI6dqw') as $hasil)
            @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -200 -75 L 200 -75 L 200 75 L -200 75 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style="fill:#f50505; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -200 -75 L 200 -75 L 200 75 L -200 75 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-DzHarUo419NVC89L1lHI6dqw">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -200 -75 L 200 -75 L 200 75 L -200 75 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="DzHarUo419NVC89L1lHI6dqw">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -200 -75 L 200 -75 L 200 75 L -200 75 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>

    <g transform="matrix(0.79 0 0 0.56 467.9 1169.36)" id="9uv-wDyNiCkx_Eu-puRyBwqedqw"  >
        @forelse ( $siteplan->where('code_product', '9uv-wDyNiCkx_Eu-puRyBwqedqw') as $hasil)
            @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -200 -75 L 200 -75 L 200 75 L -200 75 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style="fill:#f50505; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -200 -75 L 200 -75 L 200 75 L -200 75 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-9uv-wDyNiCkx_Eu-puRyBwqedqw">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -200 -75 L 200 -75 L 200 75 L -200 75 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="9uv-wDyNiCkx_Eu-puRyBwqedqw">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -200 -75 L 200 -75 L 200 75 L -200 75 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>

    <g transform="matrix(0.79 0 0 0.56 467.9 1252.87)" id="3paUFyRvVcvF0F1nnu18Xqwqwq"  >
        @forelse ( $siteplan->where('code_product', '3paUFyRvVcvF0F1nnu18Xqwqwq') as $hasil)
            @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -200 -75 L 200 -75 L 200 75 L -200 75 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style="fill:#f50505; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -200 -75 L 200 -75 L 200 75 L -200 75 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-3paUFyRvVcvF0F1nnu18Xqwqwq">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -200 -75 L 200 -75 L 200 75 L -200 75 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="3paUFyRvVcvF0F1nnu18Xqwqwq">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -200 -75 L 200 -75 L 200 75 L -200 75 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>

    <g transform="matrix(0.79 0 0 0.56 467.9 1336.14)" id="kC0cf41ifUnTswFR_T3VRqeqweqw"  >
        @forelse ( $siteplan->where('code_product', 'kC0cf41ifUnTswFR_T3VRqeqweqw') as $hasil)
            @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style=" fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -200 -75 L 200 -75 L 200 75 L -200 75 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style="fill:#f50505; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -200 -75 L 200 -75 L 200 75 L -200 75 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-kC0cf41ifUnTswFR_T3VRqeqweqw">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -200 -75 L 200 -75 L 200 75 L -200 75 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="kC0cf41ifUnTswFR_T3VRqeqweqw">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -200 -75 L 200 -75 L 200 75 L -200 75 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>

    <g transform="matrix(0.79 0 0 0.56 467.9 1419.65)" id="5tQFjCQUJ0ErQ-MvMh7qm1231"  >
        @forelse ( $siteplan->where('code_product', '5tQFjCQUJ0ErQ-MvMh7qm1231') as $hasil)
            @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -200 -75 L 200 -75 L 200 75 L -200 75 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style=" fill:#f50505; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -200 -75 L 200 -75 L 200 75 L -200 75 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-5tQFjCQUJ0ErQ-MvMh7qm1231">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -200 -75 L 200 -75 L 200 75 L -200 75 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="5tQFjCQUJ0ErQ-MvMh7qm1231">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -200 -75 L 200 -75 L 200 75 L -200 75 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>

    <g transform="matrix(0.79 0 0 0.56 467.9 1502.92)" id="RRfvhtVhtG7iCLrip3HQCqweqweq"  >
        @forelse ( $siteplan->where('code_product', 'RRfvhtVhtG7iCLrip3HQCqweqweq') as $hasil)
            @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style="fill:#ffc107;  stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -200 -75 L 200 -75 L 200 75 L -200 75 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style=" fill:#f50505; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -200 -75 L 200 -75 L 200 75 L -200 75 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-RRfvhtVhtG7iCLrip3HQCqweqweq">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -200 -75 L 200 -75 L 200 75 L -200 75 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="RRfvhtVhtG7iCLrip3HQCqweqweq">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -200 -75 L 200 -75 L 200 75 L -200 75 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>

    <g transform="matrix(0.79 0 0 0.56 467.9 1586.43)" id="WQg66mfC_i6h5kUPiWN1Bqeq"  >
        @forelse ( $siteplan->where('code_product', 'WQg66mfC_i6h5kUPiWN1Bqeq') as $hasil)
            @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -200 -75 L 200 -75 L 200 75 L -200 75 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style=" fill:#f50505; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -200 -75 L 200 -75 L 200 75 L -200 75 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-WQg66mfC_i6h5kUPiWN1Bqeq">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -200 -75 L 200 -75 L 200 75 L -200 75 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="WQg66mfC_i6h5kUPiWN1Bqeq">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -200 -75 L 200 -75 L 200 75 L -200 75 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>

    <g transform="matrix(0.79 0 0 0.56 467.9 1669.69)" id="I_7nAmYf5a9-f6IP0YZYLqewqq"  >
        @forelse ( $siteplan->where('code_product', 'I_7nAmYf5a9-f6IP0YZYLqewqq') as $hasil)
            @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style="fill:#ffc107;  stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -200 -75 L 200 -75 L 200 75 L -200 75 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style=" fill:#f50505; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -200 -75 L 200 -75 L 200 75 L -200 75 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-I_7nAmYf5a9-f6IP0YZYLqewqq">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -200 -75 L 200 -75 L 200 75 L -200 75 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="I_7nAmYf5a9-f6IP0YZYLqewqq">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -200 -75 L 200 -75 L 200 75 L -200 75 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>

    <g transform="matrix(0.79 0 0 0.56 467.9 1753.2)" id="eQHy1rryyL9twPng9QFSe121"  >
        @forelse ( $siteplan->where('code_product', 'eQHy1rryyL9twPng9QFSe121') as $hasil)
            @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -200 -75 L 200 -75 L 200 75 L -200 75 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style="fill:#f50505; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -200 -75 L 200 -75 L 200 75 L -200 75 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-eQHy1rryyL9twPng9QFSe121">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -200 -75 L 200 -75 L 200 75 L -200 75 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="eQHy1rryyL9twPng9QFSe121">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -200 -75 L 200 -75 L 200 75 L -200 75 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>

    <g transform="matrix(0.79 0 0 0.56 467.9 1837.13)" id="EHUQ_nYCYVohnOiY8y8Lwdwqq"  >
        @forelse ( $siteplan->where('code_product', 'EHUQ_nYCYVohnOiY8y8Lwdwqq') as $hasil)
            @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -200 -75 L 200 -75 L 200 75 L -200 75 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style="fill:#f50505; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -200 -75 L 200 -75 L 200 75 L -200 75 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-EHUQ_nYCYVohnOiY8y8Lwdwqq">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -200 -75 L 200 -75 L 200 75 L -200 75 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="EHUQ_nYCYVohnOiY8y8Lwdwqq">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -200 -75 L 200 -75 L 200 75 L -200 75 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>

    <g transform="matrix(0.79 0 0 0.56 467.9 1920.65)" id="Z0Tq8AdqZbLPyIASTXavgcxz"  >
        @forelse ( $siteplan->where('code_product', 'Z0Tq8AdqZbLPyIASTXavgcxz') as $hasil)
            @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style="fill:#ffc107;  stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -200 -75 L 200 -75 L 200 75 L -200 75 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style=" fill:#f50505; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -200 -75 L 200 -75 L 200 75 L -200 75 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-Z0Tq8AdqZbLPyIASTXavgcxz">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -200 -75 L 200 -75 L 200 75 L -200 75 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="Z0Tq8AdqZbLPyIASTXavgcxz">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -200 -75 L 200 -75 L 200 75 L -200 75 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>

    <g transform="matrix(0.79 0 0 0.56 467.9 2003.91)" id="CFntb5IOEBujfmvGdFba021321"  >
        @forelse ( $siteplan->where('code_product', 'CFntb5IOEBujfmvGdFba021321') as $hasil)
            @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -200 -75 L 200 -75 L 200 75 L -200 75 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style="fill:#f50505;  stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -200 -75 L 200 -75 L 200 75 L -200 75 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-CFntb5IOEBujfmvGdFba021321">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -200 -75 L 200 -75 L 200 75 L -200 75 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="CFntb5IOEBujfmvGdFba021321">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -200 -75 L 200 -75 L 200 75 L -200 75 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>

    <g transform="matrix(0.79 0 0 0.56 467.9 2087.42)" id="0ZlukoTxpv8HtyARlkvwSqeqws"  >
        @forelse ( $siteplan->where('code_product', '0ZlukoTxpv8HtyARlkvwSqeqws') as $hasil)
            @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -200 -75 L 200 -75 L 200 75 L -200 75 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style=" fill:#f50505; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -200 -75 L 200 -75 L 200 75 L -200 75 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-0ZlukoTxpv8HtyARlkvwSqeqws">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -200 -75 L 200 -75 L 200 75 L -200 75 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="0ZlukoTxpv8HtyARlkvwSqeqws">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -200 -75 L 200 -75 L 200 75 L -200 75 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>

    <g transform="matrix(0.79 0 0 0.56 467.9 2170.69)" id="TV6qrwmYS93BzgWOsi1Q42131"  >
        @forelse ( $siteplan->where('code_product', 'TV6qrwmYS93BzgWOsi1Q42131') as $hasil)
            @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -200 -75 L 200 -75 L 200 75 L -200 75 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style="fill:#f50505; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -200 -75 L 200 -75 L 200 75 L -200 75 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-TV6qrwmYS93BzgWOsi1Q42131">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -200 -75 L 200 -75 L 200 75 L -200 75 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="TV6qrwmYS93BzgWOsi1Q42131">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -200 -75 L 200 -75 L 200 75 L -200 75 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>

    <g transform="matrix(0.79 0 0 0.56 467.9 2254.2)" id="fOjuxMJncVIglI2j4exOscxz"  >
        @forelse ( $siteplan->where('code_product', 'fOjuxMJncVIglI2j4exOscxz') as $hasil)
            @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style="fill:#ffc107;  stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -200 -75 L 200 -75 L 200 75 L -200 75 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style="  fill:#f50505; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -200 -75 L 200 -75 L 200 75 L -200 75 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-fOjuxMJncVIglI2j4exOscxz">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -200 -75 L 200 -75 L 200 75 L -200 75 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="fOjuxMJncVIglI2j4exOscxz">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -200 -75 L 200 -75 L 200 75 L -200 75 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>

    <g transform="matrix(0.79 0 0 0.56 467.9 2337.46)" id="xbgbCB9Wh3779srBidOsA2311"  >
        @forelse ( $siteplan->where('code_product', 'xbgbCB9Wh3779srBidOsA2311') as $hasil)
            @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -200 -75 L 200 -75 L 200 75 L -200 75 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style="fill:#f50505; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -200 -75 L 200 -75 L 200 75 L -200 75 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-xbgbCB9Wh3779srBidOsA2311">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -200 -75 L 200 -75 L 200 75 L -200 75 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="xbgbCB9Wh3779srBidOsA2311">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -200 -75 L 200 -75 L 200 75 L -200 75 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>

    <g transform="matrix(0.79 0 0 0.56 467.9 2420.98)" id="0ctgkzlZdPsGmswmuZ0q9123123"  >
        @forelse ( $siteplan->where('code_product', '0ctgkzlZdPsGmswmuZ0q9123123') as $hasil)
            @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style=" fill:#ffc107;  stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -200 -75 L 200 -75 L 200 75 L -200 75 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style=" fill:#f50505; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -200 -75 L 200 -75 L 200 75 L -200 75 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-0ctgkzlZdPsGmswmuZ0q9123123">
                 <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -200 -75 L 200 -75 L 200 75 L -200 75 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="0ctgkzlZdPsGmswmuZ0q9123123">
             <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -200 -75 L 200 -75 L 200 75 L -200 75 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>

    <g transform="matrix(0.79 0 0 0.56 467.9 2504.93)" id="TtShQjHCT8GptjvAB7AuZcxzsa"  >
        @forelse ( $siteplan->where('code_product', 'TtShQjHCT8GptjvAB7AuZcxzsa') as $hasil)
            @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -200 -75 L 200 -75 L 200 75 L -200 75 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style="fill:#f50505;  stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -200 -75 L 200 -75 L 200 75 L -200 75 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-TtShQjHCT8GptjvAB7AuZcxzsa">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -200 -75 L 200 -75 L 200 75 L -200 75 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="TtShQjHCT8GptjvAB7AuZcxzsa">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -200 -75 L 200 -75 L 200 75 L -200 75 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>

    <g transform="matrix(0.79 0 0 0.56 467.9 2588.15)" id="40B8Bv9Q-nOletKY73qP6czxcz"  >
        @forelse ( $siteplan->where('code_product', '40B8Bv9Q-nOletKY73qP6czxcz') as $hasil)
            @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -200 -75 L 200 -75 L 200 75 L -200 75 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style=" fill:#f50505; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -200 -75 L 200 -75 L 200 75 L -200 75 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-40B8Bv9Q-nOletKY73qP6czxcz">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -200 -75 L 200 -75 L 200 75 L -200 75 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="40B8Bv9Q-nOletKY73qP6czxcz">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -200 -75 L 200 -75 L 200 75 L -200 75 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>

    <g transform="matrix(0.79 0 0 0.56 467.9 2671.42)" id="HerTarHymw01mmnConT8Z2131"  >
        @forelse ( $siteplan->where('code_product', 'HerTarHymw01mmnConT8Z2131') as $hasil)
            @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style="fill:#ffc107;  stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -200 -75 L 200 -75 L 200 75 L -200 75 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style="  fill:#f50505; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -200 -75 L 200 -75 L 200 75 L -200 75 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-HerTarHymw01mmnConT8Z2131">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -200 -75 L 200 -75 L 200 75 L -200 75 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="HerTarHymw01mmnConT8Z2131">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -200 -75 L 200 -75 L 200 75 L -200 75 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>

    <g transform="matrix(0.79 0 0 0.56 467.9 2755.22)" id="gKKL9DO2iswWs5_WBhuaLczxc"  >
        @forelse ( $siteplan->where('code_product', 'gKKL9DO2iswWs5_WBhuaLczxc') as $hasil)
            @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style="fill:#ffc107;  stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -200 -75 L 200 -75 L 200 75 L -200 75 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style="fill:#f50505; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -200 -75 L 200 -75 L 200 75 L -200 75 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-gKKL9DO2iswWs5_WBhuaLczxc">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -200 -75 L 200 -75 L 200 75 L -200 75 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="gKKL9DO2iswWs5_WBhuaLczxc">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -200 -75 L 200 -75 L 200 75 L -200 75 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>

    <g transform="matrix(0.79 0 0 0.56 467.9 2838.48)" id="Eb1gVOha5xS-_jfXyD6dwasda"  >
        @forelse ( $siteplan->where('code_product', 'Eb1gVOha5xS-_jfXyD6dwasda') as $hasil)
            @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -200 -75 L 200 -75 L 200 75 L -200 75 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style=" fill:#f50505; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -200 -75 L 200 -75 L 200 75 L -200 75 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-Eb1gVOha5xS-_jfXyD6dwasda">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -200 -75 L 200 -75 L 200 75 L -200 75 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="Eb1gVOha5xS-_jfXyD6dwasda">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -200 -75 L 200 -75 L 200 75 L -200 75 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>

    <g transform="matrix(0.79 0 0 0.56 467.9 2921.99)" id="7Z7WtOGmhSs6HXSTYmfzdczxcz"  >
        @forelse ( $siteplan->where('code_product', '7Z7WtOGmhSs6HXSTYmfzdczxcz') as $hasil)
            @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -200 -75 L 200 -75 L 200 75 L -200 75 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style="fill:#f50505; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -200 -75 L 200 -75 L 200 75 L -200 75 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-7Z7WtOGmhSs6HXSTYmfzdczxcz">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -200 -75 L 200 -75 L 200 75 L -200 75 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="7Z7WtOGmhSs6HXSTYmfzdczxcz">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -200 -75 L 200 -75 L 200 75 L -200 75 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>

    <g transform="matrix(0.79 0 0 0.56 467.9 3005.26)" id="zchSfN-wjRUDlNrV9R9Z5zx"  >
        @forelse ( $siteplan->where('code_product', 'zchSfN-wjRUDlNrV9R9Z5zx') as $hasil)
            @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -200 -75 L 200 -75 L 200 75 L -200 75 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style=" fill:#f50505; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -200 -75 L 200 -75 L 200 75 L -200 75 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-zchSfN-wjRUDlNrV9R9Z5zx">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -200 -75 L 200 -75 L 200 75 L -200 75 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="zchSfN-wjRUDlNrV9R9Z5zx">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -200 -75 L 200 -75 L 200 75 L -200 75 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>

    <g transform="matrix(0.79 0 0 0.56 467.9 3088.77)" id="6ZdcnE6EGX7kPIA0NiuR61231"  >
        @forelse ( $siteplan->where('code_product', '6ZdcnE6EGX7kPIA0NiuR61231') as $hasil)
            @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -200 -75 L 200 -75 L 200 75 L -200 75 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style="fill:#f50505; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -200 -75 L 200 -75 L 200 75 L -200 75 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-6ZdcnE6EGX7kPIA0NiuR61231">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -200 -75 L 200 -75 L 200 75 L -200 75 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="6ZdcnE6EGX7kPIA0NiuR61231">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -200 -75 L 200 -75 L 200 75 L -200 75 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>

    <g transform="matrix(0.79 0 0 0.56 467.9 3172.22)" id="34P0wneGUfG0w2Sn6WEyWczzx"  >
        @forelse ( $siteplan->where('code_product', '34P0wneGUfG0w2Sn6WEyWczzx') as $hasil)
            @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -200 -75 L 200 -75 L 200 75 L -200 75 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style="fill:#f50505; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -200 -75 L 200 -75 L 200 75 L -200 75 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-34P0wneGUfG0w2Sn6WEyWczzx">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -200 -75 L 200 -75 L 200 75 L -200 75 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="34P0wneGUfG0w2Sn6WEyWczzx">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -200 -75 L 200 -75 L 200 75 L -200 75 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>

    <g transform="matrix(0.79 0 0 0.56 467.9 3255.49)" id="eYEXbx01b8fW2_orJNZc5zcx"  >
        @forelse ( $siteplan->where('code_product', 'eYEXbx01b8fW2_orJNZc5zcx') as $hasil)
            @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -200 -75 L 200 -75 L 200 75 L -200 75 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style="fill:#f50505; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -200 -75 L 200 -75 L 200 75 L -200 75 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-eYEXbx01b8fW2_orJNZc5zcx">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -200 -75 L 200 -75 L 200 75 L -200 75 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="eYEXbx01b8fW2_orJNZc5zcx">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -200 -75 L 200 -75 L 200 75 L -200 75 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>

    <g transform="matrix(0.79 0 0 0.56 467.9 3339)" id="rbbBHnM1HbKI9iKyOtl0azxczx"  >
        @forelse ( $siteplan->where('code_product', 'rbbBHnM1HbKI9iKyOtl0azxczx') as $hasil)
            @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style=" fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -200 -75 L 200 -75 L 200 75 L -200 75 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style=" fill:#f50505; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -200 -75 L 200 -75 L 200 75 L -200 75 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-rbbBHnM1HbKI9iKyOtl0azxczx">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -200 -75 L 200 -75 L 200 75 L -200 75 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="rbbBHnM1HbKI9iKyOtl0azxczx">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -200 -75 L 200 -75 L 200 75 L -200 75 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>

    <g transform="matrix(0.79 0 0 0.56 467.9 3423)" id="PIJnn-QCJ3E2w0pJYt0UwZxz"  >
        @forelse ( $siteplan->where('code_product', 'PIJnn-QCJ3E2w0pJYt0UwZxz') as $hasil)
            @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style=" fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -200 -75 L 200 -75 L 200 75 L -200 75 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style="fill:#f50505; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -200 -75 L 200 -75 L 200 75 L -200 75 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-PIJnn-QCJ3E2w0pJYt0UwZxz">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -200 -75 L 200 -75 L 200 75 L -200 75 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="PIJnn-QCJ3E2w0pJYt0UwZxz">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -200 -75 L 200 -75 L 200 75 L -200 75 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>

    <g transform="matrix(0.79 0 0 0.56 467.9 3507)" id="7-Ssll-c5zYe0f2Suy-cRxczx"  >
        @forelse ( $siteplan->where('code_product', '7-Ssll-c5zYe0f2Suy-cRxczx') as $hasil)
            @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -200 -75 L 200 -75 L 200 75 L -200 75 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style="fill:#f50505; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -200 -75 L 200 -75 L 200 75 L -200 75 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-7-Ssll-c5zYe0f2Suy-cRxczx">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -200 -75 L 200 -75 L 200 75 L -200 75 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="7-Ssll-c5zYe0f2Suy-cRxczx">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -200 -75 L 200 -75 L 200 75 L -200 75 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>

    <g transform="matrix(0.79 0 0 0.56 467.9 3590.28)" id="tqcxglO8q2PslNSIAaDOczxcz"  >
        @forelse ( $siteplan->where('code_product', 'tqcxglO8q2PslNSIAaDOczxcz') as $hasil)
            @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style="fill:#ffc107;  stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -200 -75 L 200 -75 L 200 75 L -200 75 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style=" fill:#f50505; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -200 -75 L 200 -75 L 200 75 L -200 75 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-tqcxglO8q2PslNSIAaDOczxcz">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -200 -75 L 200 -75 L 200 75 L -200 75 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="tqcxglO8q2PslNSIAaDOczxcz">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -200 -75 L 200 -75 L 200 75 L -200 75 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>

    <g transform="matrix(0.79 0 0 0.56 467.9 3673.79)" id="RqljpVYHwlCEmIXLCzFqEzxcxz"  >
        @forelse ( $siteplan->where('code_product', 'RqljpVYHwlCEmIXLCzFqEzxcxz') as $hasil)
            @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -200 -75 L 200 -75 L 200 75 L -200 75 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style="fill:#f50505; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -200 -75 L 200 -75 L 200 75 L -200 75 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-RqljpVYHwlCEmIXLCzFqEzxcxz">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -200 -75 L 200 -75 L 200 75 L -200 75 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="RqljpVYHwlCEmIXLCzFqEzxcxz">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -200 -75 L 200 -75 L 200 75 L -200 75 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>

    <g transform="matrix(0.79 0 0 0.56 467.61 4009.02)" id="L6rzmCc9hvRKXOFQwYRaHxxx"  >
        @forelse ( $siteplan->where('code_product', 'L6rzmCc9hvRKXOFQwYRaHxxx') as $hasil)
            @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -200 -75 L 200 -75 L 200 75 L -200 75 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style=" fill:#f50505; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -200 -75 L 200 -75 L 200 75 L -200 75 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-L6rzmCc9hvRKXOFQwYRaHxxx">
                 <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -200 -75 L 200 -75 L 200 75 L -200 75 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="L6rzmCc9hvRKXOFQwYRaHxxx">
             <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -200 -75 L 200 -75 L 200 75 L -200 75 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>

    <g transform="matrix(0.79 0 0 0.56 467.9 3757.23)" id="wHQD6RaYtA3hYI9RgGu3Wczx"  >
        @forelse ( $siteplan->where('code_product', 'wHQD6RaYtA3hYI9RgGu3Wczx') as $hasil)
            @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -200 -75 L 200 -75 L 200 75 L -200 75 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style="fill:#f50505; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -200 -75 L 200 -75 L 200 75 L -200 75 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-wHQD6RaYtA3hYI9RgGu3Wczx">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -200 -75 L 200 -75 L 200 75 L -200 75 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="wHQD6RaYtA3hYI9RgGu3Wczx">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -200 -75 L 200 -75 L 200 75 L -200 75 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>

    <g transform="matrix(0.79 0 0 0.56 467.61 3840.5)" id="DcwbJImrNpYYP6APLtnWFadacx"  >
        @forelse ( $siteplan->where('code_product', 'DcwbJImrNpYYP6APLtnWFadacx') as $hasil)
            @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style=" fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -200 -75 L 200 -75 L 200 75 L -200 75 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style="fill:#f50505; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -200 -75 L 200 -75 L 200 75 L -200 75 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-DcwbJImrNpYYP6APLtnWFadacx">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -200 -75 L 200 -75 L 200 75 L -200 75 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="DcwbJImrNpYYP6APLtnWFadacx">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -200 -75 L 200 -75 L 200 75 L -200 75 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>

    <g transform="matrix(0.79 0 0 0.56 467.61 4092.02)" id="P80cA_ngFLzNuacFJG-UDzxcz"  >
        @forelse ( $siteplan->where('code_product', 'P80cA_ngFLzNuacFJG-UDzxcz') as $hasil)
            @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style="fill:#ffc107;  stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -200 -75 L 200 -75 L 200 75 L -200 75 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style="fill:#f50505; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -200 -75 L 200 -75 L 200 75 L -200 75 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-P80cA_ngFLzNuacFJG-UDzxcz">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -200 -75 L 200 -75 L 200 75 L -200 75 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="P80cA_ngFLzNuacFJG-UDzxcz">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -200 -75 L 200 -75 L 200 75 L -200 75 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>

    <g transform="matrix(0.79 0 0 0.56 467.61 4175.28)" id="YGEigXgA7WIq8a7SCh4zMzxcz"  >
        @forelse ( $siteplan->where('code_product', 'YGEigXgA7WIq8a7SCh4zMzxcz') as $hasil)
            @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -200 -75 L 200 -75 L 200 75 L -200 75 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style="fill:#f50505; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -200 -75 L 200 -75 L 200 75 L -200 75 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-YGEigXgA7WIq8a7SCh4zMzxcz">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -200 -75 L 200 -75 L 200 75 L -200 75 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="YGEigXgA7WIq8a7SCh4zMzxcz">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -200 -75 L 200 -75 L 200 75 L -200 75 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>


    <g transform="matrix(0.79 0 0 0.56 467.61 3925.02)" id="HyNd25U1YTPImX2-oFOFOzxczc"  >
        @forelse ( $siteplan->where('code_product', 'HyNd25U1YTPImX2-oFOFOzxczc') as $hasil)
            @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style=" fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -200 -75 L 200 -75 L 200 75 L -200 75 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style=" fill:#f50505; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -200 -75 L 200 -75 L 200 75 L -200 75 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-HyNd25U1YTPImX2-oFOFOzxczc">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -200 -75 L 200 -75 L 200 75 L -200 75 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="HyNd25U1YTPImX2-oFOFOzxczc">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -200 -75 L 200 -75 L 200 75 L -200 75 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>





    <g transform="matrix(1 0 0 1 467.9 501.57)" style="" id="fgIER9tgEG2d9iazPZEvE"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="25" font-style="normal" font-weight="700" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-46.72" y="7.48" >Blok A1</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 467.9 585.08)" style="" id="itam7cGLrvlBvvrMhpJmD"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="25" font-style="normal" font-weight="700" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-46.72" y="7.48" >Blok A2</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 467.9 668.34)" style="" id="U0TjPQ0i97hGZZuvytgyg"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="25" font-style="normal" font-weight="700" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-46.72" y="7.48" >Blok A3</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 467.9 751.85)" style="" id="wqdWFEU8WxppN5e-zmKMq"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="25" font-style="normal" font-weight="700" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-46.72" y="7.48" >Blok A4</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 467.9 833.62)" style="" id="QNMJSAFIEmU5HuG-s79__"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="25" font-style="normal" font-weight="700" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-46.72" y="7.48" >Blok A5</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 467.9 918.63)" style="" id="xfA5b-wqwpl5usm_7kJRD"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="25" font-style="normal" font-weight="700" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-46.72" y="7.48" >Blok A6</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 467.9 1000.39)" style="" id="lEVjccPpKGp5Vz9aZBKlS"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="25" font-style="normal" font-weight="700" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-46.72" y="7.48" >Blok A7</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 467.9 1085.41)" style="" id="ppopSl5raSuV42O76bwH0"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="25" font-style="normal" font-weight="700" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-46.72" y="7.48" >Blok A8</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 467.9 1169.36)" style="" id="LHWli2XlFp4edI9Q8B-4N"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="25" font-style="normal" font-weight="700" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-46.72" y="7.48" >Blok A9</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 467.9 1252.87)" style="" id="CloGb-_LRQDgVlM1FesNr"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="25" font-style="normal" font-weight="700" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-53.87" y="7.48" >Blok A10</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 467.9 1336.14)" style="" id="iOyf0o_DRj_10IvIbdC_o"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="25" font-style="normal" font-weight="700" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-53.87" y="7.48" >Blok A11</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 467.9 1419.65)" style="" id="c2HMZvjx2foPsUkhMWSrH"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="25" font-style="normal" font-weight="700" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-53.87" y="7.48" >Blok A12</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 467.9 1502.92)" style="" id="2hXW9924E3_KiIqrkwZXB"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="25" font-style="normal" font-weight="700" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-53.87" y="7.48" >Blok A13</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 467.9 1586.43)" style="" id="48I4_ZZh_KfT1QTfMsgCB"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="25" font-style="normal" font-weight="700" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-53.87" y="7.48" >Blok A14</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 467.9 1669.69)" style="" id="rqIQa3u2g-oA3iQ4GFLUL"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="25" font-style="normal" font-weight="700" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-53.87" y="7.48" >Blok A15</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 467.9 1753.2)" style="" id="e6rzX7yXuEvdLDEOmc7cT"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="25" font-style="normal" font-weight="700" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-53.87" y="7.48" >Blok A16</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 467.9 1837.13)" style="" id="RRYfnfaUNLFxBpNfJUeL1"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="25" font-style="normal" font-weight="700" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-53.87" y="7.48" >Blok A17</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 467.9 1920.65)" style="" id="tmuUve1k_-ZBNofmb9-ni"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="25" font-style="normal" font-weight="700" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-53.87" y="7.48" >Blok A18</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 467.9 2003.91)" style="" id="YMchDHkgGH2606Jj_I7e9"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="25" font-style="normal" font-weight="700" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-53.87" y="7.48" >Blok A19</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 467.9 2087.42)" style="" id="LsGeUmPoyQiauLZj2lHeG"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="25" font-style="normal" font-weight="700" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-53.87" y="7.48" >Blok A20</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 467.9 2170.69)" style="" id="jxgeLFbLKEBS5lzsjNqUx"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="25" font-style="normal" font-weight="700" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-53.87" y="7.48" >Blok A21</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 467.9 2254.2)" style="" id="PkdSEHjXjbQ4GOO17swpL"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="25" font-style="normal" font-weight="700" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-53.87" y="7.48" >Blok A22</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 467.9 2337.46)" style="" id="It-TQlo0o5UCHLaj--N4_"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="25" font-style="normal" font-weight="700" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-53.87" y="7.48" >Blok A23</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 467.9 2420.98)" style="" id="up1trhq9drMs9oG1K0Ev4"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="25" font-style="normal" font-weight="700" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-53.87" y="7.48" >Blok A24</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 467.9 2504.93)" style="" id="rp7B8Mp-AOpGzprCiHGN7"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="25" font-style="normal" font-weight="700" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-53.87" y="7.48" >Blok A25</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 467.9 2588.15)" style="" id="bXfTykNtBQw_7d5Dz0dYa"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="25" font-style="normal" font-weight="700" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-53.87" y="7.48" >Blok A26</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 467.9 2671.41)" style="" id="JszqiUV78GzuWi4qRfd7Q"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="25" font-style="normal" font-weight="700" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-53.87" y="7.48" >Blok A27</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 467.9 2755.22)" style="" id="LqC9Y2ehnMU3hCZ-0RuSZ"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="25" font-style="normal" font-weight="700" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-53.87" y="7.48" >Blok A28</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 467.9 2838.48)" style="" id="rkZWBEtziKPlcbmbKDTFd"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="25" font-style="normal" font-weight="700" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-53.87" y="7.48" >Blok A29</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 467.9 2921.99)" style="" id="Et2BpQJOraG3CSPFc6axh"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="25" font-style="normal" font-weight="700" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-53.87" y="7.48" >Blok A30</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 467.9 3005.26)" style="" id="sD3CpL8ZzLqcxutlepon5"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="25" font-style="normal" font-weight="700" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-53.87" y="7.48" >Blok A31</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 467.9 3088.77)" style="" id="0Tu55N_U60OJOJoj0YkP6"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="25" font-style="normal" font-weight="700" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-53.87" y="7.48" >Blok A32</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 467.9 3172.22)" style="" id="4v8ftVeXfTcGAW1y9-fDN"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="25" font-style="normal" font-weight="700" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-53.87" y="7.48" >Blok A33</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 467.9 3255.49)" style="" id="eFm8uRrpNuYsZVH9RF0Ac"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="25" font-style="normal" font-weight="700" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-53.87" y="7.48" >Blok A34</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 467.9 3339)" style="" id="dhWcl86lrVyJyoLL9sLPx"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="25" font-style="normal" font-weight="700" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-53.87" y="7.48" >Blok A35</tspan></text>
    </g>

    <g transform="matrix(0 1 -1 0 277.69 552.67)" style="" id="hgCZtyP8yBaJz1x_iOCmg"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="25" font-style="normal" font-weight="700" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(255,255,255); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-141.48" y="5.14" >Jalan Komplek 6 meter</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 467.9 3423)" style="" id="4WyhsBz5NwDzeQs_QFT96"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="25" font-style="normal" font-weight="700" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-53.87" y="7.48" >Blok A36</tspan></text>
    </g>
    <g transform="matrix(0 1 -1 0 277.69 1542.41)" style="" id="f-SrDMgS4SQEaMi7ipw2P"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="25" font-style="normal" font-weight="700" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(255,255,255); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-141.48" y="5.14" >Jalan Komplek 6 meter</tspan></text>
    </g>

    <g transform="matrix(0 1 -1 0 277.69 2686.41)" style="" id="FCO5b8ZnY5nw3lvE2MwzB"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="25" font-style="normal" font-weight="700" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(255,255,255); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-141.48" y="5.14" >Jalan Komplek 6 meter</tspan></text>
    </g>

    <g transform="matrix(1 0 0 1 467.61 3840.5)" style="" id="Aqf0Xez974n_rhbBMc-CU"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="25" font-style="normal" font-weight="700" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-53.87" y="7.48" >Blok A41</tspan></text>
    </g>

    <g transform="matrix(1 0 0 1 467.9 3757.23)" style="" id="3qEs9FojziiEQq2zbu9Ra"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="25" font-style="normal" font-weight="700" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-53.87" y="7.48" >Blok A40</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 467.9 3507)" style="" id="KEUYvuY4cx9bM0XndYO9E"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="25" font-style="normal" font-weight="700" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-53.87" y="7.48" >Blok A37</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 467.9 3673.79)" style="" id="uO3p160ifRKcAp2IOoO-f"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="25" font-style="normal" font-weight="700" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-53.87" y="7.48" >Blok A39</tspan></text>
    </g>

    <g transform="matrix(1 0 0 1 467.9 3590.28)" style="" id="QY_zWVvgsNock2CbAQjIz"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="25" font-style="normal" font-weight="700" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-53.87" y="7.48" >Blok A38</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 467.61 3917.97)" style="" id="9fcgB9lgWxrpuIOzQ1PeV"  >
        <text xml:space="preserve" font-family="Open Sans" font-size="25" font-style="normal" font-weight="700" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-53.87" y="7.48" >Blok A42</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 467.61 4009.02)" style="" id="hWo40cXT3L0XMEjISAzOH"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="25" font-style="normal" font-weight="700" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-53.87" y="7.48" >Blok A43</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 467.61 4092.02)" style="" id="_-cxy3k0E0uHOx9TAsu8v"  >
        <text xml:space="preserve" font-family="Open Sans" font-size="25" font-style="normal" font-weight="700" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-53.87" y="7.48" >Blok A44</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 467.61 4175.28)" style="" id="aCvvEk9fepTN4tVD4NA-M"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="25" font-style="normal" font-weight="700" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-53.87" y="7.48" >Blok A45</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 142.76 198.62)" style="" id="ZuqFMSnBOoPrZCvOJDWwt"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="32" font-style="normal" font-weight="700" letter-spacing="0.064" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-89.73" y="6.75" >P</tspan><tspan x="-69.57" y="6.75" >o</tspan><tspan x="-49.7" y="6.75" >n</tspan><tspan x="-28.6" y="6.75" >t</tspan><tspan x="-14.65" y="6.75" >i</tspan><tspan x="-4.82" y="6.75" >a</tspan><tspan x="14.57" y="6.75" >n</tspan><tspan x="35.67" y="6.75" >a</tspan><tspan x="55.06" y="6.75" >k</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 752.76 187.33)" style="" id="K2ShqE-U33r4q9VflLEAE"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="32" font-style="normal" font-weight="700" letter-spacing="0.064" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-89.73" y="6.75" >K</tspan><tspan x="-68.42" y="6.75" >a</tspan><tspan x="-49.03" y="6.75" >k</tspan><tspan x="-29.12" y="6.75" >a</tspan><tspan x="-9.73" y="6.75" >p</tspan></text>
    </g>
    <g transform="matrix(0.16 0 0 0.01 216.81 124.78)" id="wIiMkPdyZtt6aw6A-8HtH"  >
    <path style="stroke: rgb(163,178,12); stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(255,255,255); fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -156.45161 -156.45161 L 156.45161 -156.45161 L 156.45161 156.45161 L -156.45161 156.45161 z" stroke-linecap="round" />
    </g>
    <g transform="matrix(0.16 0 0 0.01 320.06 124.78)" id="VisC2VdDyTfTq4AqSGJMi"  >
    <path style="stroke: rgb(163,178,12); stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(255,255,255); fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -156.45161 -156.45161 L 156.45161 -156.45161 L 156.45161 156.45161 L -156.45161 156.45161 z" stroke-linecap="round" />
    </g>
    <g transform="matrix(0.16 0 0 0.01 434.78 124.78)" id="IV7MX0DWJ1RRHFRQa_jGQ"  >
    <path style="stroke: rgb(163,178,12); stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(255,255,255); fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -156.45161 -156.45161 L 156.45161 -156.45161 L 156.45161 156.45161 L -156.45161 156.45161 z" stroke-linecap="round" />
    </g>

    <g transform="matrix(0.16 0 0 0.01 117.73 124.78)" id="ZDjzvUucA3dwisJYFnv0W"  >
    <path style="stroke: rgb(163,178,12); stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(255,255,255); fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -156.45161 -156.45161 L 156.45161 -156.45161 L 156.45161 156.45161 L -156.45161 156.45161 z" stroke-linecap="round" />
    </g>
    <g transform="matrix(0.16 0 0 0.01 629.58 124.78)" id="2J8isviAe7zxZJnmiuN5a"  >
    <path style="stroke: rgb(163,178,12); stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(255,255,255); fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -156.45161 -156.45161 L 156.45161 -156.45161 L 156.45161 156.45161 L -156.45161 156.45161 z" stroke-linecap="round" />
    </g>
    <g transform="matrix(0.16 0 0 0.01 732.83 124.78)" id="SmW2HMtIbmo6tO-81RN73"  >
    <path style="stroke: rgb(163,178,12); stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(255,255,255); fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -156.45161 -156.45161 L 156.45161 -156.45161 L 156.45161 156.45161 L -156.45161 156.45161 z" stroke-linecap="round" />
    </g>
    <g transform="matrix(0.16 0 0 0.01 530.49 124.78)" id="ZiXIWk7mXEln3LO_WS2a2"  >
    <path style="stroke: rgb(163,178,12); stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(255,255,255); fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -156.45161 -156.45161 L 156.45161 -156.45161 L 156.45161 156.45161 L -156.45161 156.45161 z" stroke-linecap="round" />
    </g>

</svg>
