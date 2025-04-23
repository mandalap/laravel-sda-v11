
<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="100%"  viewBox="0 0 3000 3300" xml:space="preserve">

<g transform="matrix(13.14 0 0 0.53 1499.7 124.88)" id="tk1EhfQRtpBCdCMuoUy04"  >
    <path style="stroke: rgb(138,70,19); stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(74,73,73); fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -114 -114 L 114 -114 L 114 114 L -114 114 z" stroke-linecap="round" />
</g>
<g transform="matrix(0 12.84 -0.44 0 2052.08 1629.03)" id="uCDIS1FoItMW63qvjW5e3"  >
    <path style="stroke: rgb(138,70,19); stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(74,73,73); fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -114 -114 L 114 -114 L 114 114 L -114 114 z" stroke-linecap="round" />
</g>
<g transform="matrix(1.26 0 0 0.4 2352.7 261.01)" id="BLRN3rE9PG8JQhjE1t_DI"  >
    @forelse ( $siteplan->where('code_product', 'BLRN3rE9PG8JQhjE1t_DI') as $hasil)
        @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
            <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill:#ffc107;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -198 -198 L 198 -198 L 198 198 L -198 198 z" stroke-linecap="round" />
        @elseif ($hasil->status == 'Terjual')
            <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill:#f50505; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -198 -198 L 198 -198 L 198 198 L -198 198 z" stroke-linecap="round" />
        @elseif ($hasil->status == 'Tersedia')
        <a href="#" data-toggle="modal" data-target="#modalBooking-BLRN3rE9PG8JQhjE1t_DI">
            <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #f8f8f8; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -198 -198 L 198 -198 L 198 198 L -198 198 z" stroke-linecap="round" />
        </a>
        @endif
    @empty
    <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="BLRN3rE9PG8JQhjE1t_DI">
    <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #f8f8f8; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -198 -198 L 198 -198 L 198 198 L -198 198 z" stroke-linecap="round" />
    </a>
    @endforelse
</g>
<g transform="matrix(1.26 0 0 0.4 2353.22 422.95)" id="VYMO4rVWevP-TS37AQVOe"  >
    @forelse ( $siteplan->where('code_product', 'VYMO4rVWevP-TS37AQVOe') as $hasil)
        @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
            <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill:#ffc107;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -198 -198 L 198 -198 L 198 198 L -198 198 z" stroke-linecap="round" />
        @elseif ($hasil->status == 'Terjual')
            <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill:#f50505; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -198 -198 L 198 -198 L 198 198 L -198 198 z" stroke-linecap="round" />
        @elseif ($hasil->status == 'Tersedia')
        <a href="#" data-toggle="modal" data-target="#modalBooking-VYMO4rVWevP-TS37AQVOe">
            <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #f8f8f8; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -198 -198 L 198 -198 L 198 198 L -198 198 z" stroke-linecap="round" />
        </a>
        @endif
    @empty
    <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="VYMO4rVWevP-TS37AQVOe">
        <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #f8f8f8; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -198 -198 L 198 -198 L 198 198 L -198 198 z" stroke-linecap="round" />
    </a>
    @endforelse
</g>
<g transform="matrix(1.26 0 0 0.4 2353.22 584.07)" id="WcKcKy4Am1SjfXsSmRa0B"  >
    @forelse ( $siteplan->where('code_product', 'WcKcKy4Am1SjfXsSmRa0B') as $hasil)
        @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
            <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill:#ffc107;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -198 -198 L 198 -198 L 198 198 L -198 198 z" stroke-linecap="round" />
        @elseif ($hasil->status == 'Terjual')
            <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill:#f50505; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -198 -198 L 198 -198 L 198 198 L -198 198 z" stroke-linecap="round" />
        @elseif ($hasil->status == 'Tersedia')
        <a href="#" data-toggle="modal" data-target="#modalBooking-WcKcKy4Am1SjfXsSmRa0B">
            <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #f8f8f8; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -198 -198 L 198 -198 L 198 198 L -198 198 z" stroke-linecap="round" />
        </a>
        @endif
    @empty
    <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="WcKcKy4Am1SjfXsSmRa0B">
        <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #f8f8f8; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -198 -198 L 198 -198 L 198 198 L -198 198 z" stroke-linecap="round" />
    </a>
    @endforelse
</g>
<g transform="matrix(1.26 0 0 0.4 2353.22 746.01)" id="COckKvgc5cXDSu8S7XCwq"  >
    @forelse ( $siteplan->where('code_product', 'COckKvgc5cXDSu8S7XCwq') as $hasil)
        @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
            <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill:#ffc107;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -198 -198 L 198 -198 L 198 198 L -198 198 z" stroke-linecap="round" />
        @elseif ($hasil->status == 'Terjual')
            <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill:#f50505; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -198 -198 L 198 -198 L 198 198 L -198 198 z" stroke-linecap="round" />
        @elseif ($hasil->status == 'Tersedia')
        <a href="#" data-toggle="modal" data-target="#modalBooking-COckKvgc5cXDSu8S7XCwq">
            <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #f8f8f8; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -198 -198 L 198 -198 L 198 198 L -198 198 z" stroke-linecap="round" />
        </a>
        @endif
    @empty
    <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="COckKvgc5cXDSu8S7XCwq">
        <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #f8f8f8; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -198 -198 L 198 -198 L 198 198 L -198 198 z" stroke-linecap="round" />
    </a>
    @endforelse
</g>
<g transform="matrix(1.26 0 0 0.4 2353.22 907.14)" id="ZGjOrQUV0wN9fGXxUwk_L"  >
    @forelse ( $siteplan->where('code_product', 'ZGjOrQUV0wN9fGXxUwk_L') as $hasil)
        @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
            <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill:#ffc107; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -198 -198 L 198 -198 L 198 198 L -198 198 z" stroke-linecap="round" />
        @elseif ($hasil->status == 'Terjual')
            <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill:#f50505; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -198 -198 L 198 -198 L 198 198 L -198 198 z" stroke-linecap="round" />
        @elseif ($hasil->status == 'Tersedia')
        <a href="#" data-toggle="modal" data-target="#modalBooking-ZGjOrQUV0wN9fGXxUwk_L">
            <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #f8f8f8; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -198 -198 L 198 -198 L 198 198 L -198 198 z" stroke-linecap="round" />
        </a>
        @endif
    @empty
    <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="ZGjOrQUV0wN9fGXxUwk_L">
        <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #f8f8f8; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -198 -198 L 198 -198 L 198 198 L -198 198 z" stroke-linecap="round" />
    </a>
    @endforelse
</g>
<g transform="matrix(1.26 0 0 0.4 2353.22 1069.07)" id="0NvJpRg56ckc5MXAU2mGS"  >
    @forelse ( $siteplan->where('code_product', '0NvJpRg56ckc5MXAU2mGS') as $hasil)
        @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
            <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill:#ffc107;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -198 -198 L 198 -198 L 198 198 L -198 198 z" stroke-linecap="round" />
        @elseif ($hasil->status == 'Terjual')
            <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill:#f50505; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -198 -198 L 198 -198 L 198 198 L -198 198 z" stroke-linecap="round" />
        @elseif ($hasil->status == 'Tersedia')
        <a href="#" data-toggle="modal" data-target="#modalBooking-0NvJpRg56ckc5MXAU2mGS">
            <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #f8f8f8; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -198 -198 L 198 -198 L 198 198 L -198 198 z" stroke-linecap="round" />
        </a>
        @endif
    @empty
    <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="0NvJpRg56ckc5MXAU2mGS">
        <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #f8f8f8; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -198 -198 L 198 -198 L 198 198 L -198 198 z" stroke-linecap="round" />
    </a>
    @endforelse
</g>
<g transform="matrix(1.26 0 0 0.4 2353.22 1230.2)" id="gHaY9VluxtR88WHYHUI-V"  >
    @forelse ( $siteplan->where('code_product', 'gHaY9VluxtR88WHYHUI-V') as $hasil)
        @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
            <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill:#ffc107;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -198 -198 L 198 -198 L 198 198 L -198 198 z" stroke-linecap="round" />
        @elseif ($hasil->status == 'Terjual')
            <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill:#f50505; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -198 -198 L 198 -198 L 198 198 L -198 198 z" stroke-linecap="round" />
        @elseif ($hasil->status == 'Tersedia')
        <a href="#" data-toggle="modal" data-target="#modalBooking-gHaY9VluxtR88WHYHUI-V">
            <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #f8f8f8; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -198 -198 L 198 -198 L 198 198 L -198 198 z" stroke-linecap="round" />
        </a>
        @endif
    @empty
    <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="gHaY9VluxtR88WHYHUI-V">
        <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #f8f8f8; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -198 -198 L 198 -198 L 198 198 L -198 198 z" stroke-linecap="round" />
    </a>
    @endforelse
</g>
<g transform="matrix(1.26 0 0 0.4 2353.22 1392.13)" id="Y9sIn1NrjpwaDKV2z5oSZ"  >
    @forelse ( $siteplan->where('code_product', 'Y9sIn1NrjpwaDKV2z5oSZ') as $hasil)
        @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
            <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill:#ffc107;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -198 -198 L 198 -198 L 198 198 L -198 198 z" stroke-linecap="round" />
        @elseif ($hasil->status == 'Terjual')
            <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill:#f50505; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -198 -198 L 198 -198 L 198 198 L -198 198 z" stroke-linecap="round" />
        @elseif ($hasil->status == 'Tersedia')
        <a href="#" data-toggle="modal" data-target="#modalBooking-Y9sIn1NrjpwaDKV2z5oSZ">
            <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #f8f8f8; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -198 -198 L 198 -198 L 198 198 L -198 198 z" stroke-linecap="round" />
        </a>
        @endif
    @empty
    <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="Y9sIn1NrjpwaDKV2z5oSZ">
        <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #f8f8f8; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -198 -198 L 198 -198 L 198 198 L -198 198 z" stroke-linecap="round" />
    </a>
    @endforelse
</g>
<g transform="matrix(1.26 0 0 0.4 2353.22 1553.26)" id="PVHMybMWQfOVnEUx3ufOS"  >
    @forelse ( $siteplan->where('code_product', 'PVHMybMWQfOVnEUx3ufOS') as $hasil)
        @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
            <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill:#ffc107;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -198 -198 L 198 -198 L 198 198 L -198 198 z" stroke-linecap="round" />
        @elseif ($hasil->status == 'Terjual')
            <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill:#f50505; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -198 -198 L 198 -198 L 198 198 L -198 198 z" stroke-linecap="round" />
        @elseif ($hasil->status == 'Tersedia')
        <a href="#" data-toggle="modal" data-target="#modalBooking-PVHMybMWQfOVnEUx3ufOS">
            <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #f8f8f8; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -198 -198 L 198 -198 L 198 198 L -198 198 z" stroke-linecap="round" />
        </a>
        @endif
    @empty
    <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="PVHMybMWQfOVnEUx3ufOS">
        <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #f8f8f8; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -198 -198 L 198 -198 L 198 198 L -198 198 z" stroke-linecap="round" />
    </a>
    @endforelse
</g>
<g transform="matrix(1.26 0 0 0.4 2353.22 1715.2)" id="ljgKeZ_Gm97u5GF_GQxsY"  >
    @forelse ( $siteplan->where('code_product', 'ljgKeZ_Gm97u5GF_GQxsY') as $hasil)
        @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
            <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill:#ffc107;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -198 -198 L 198 -198 L 198 198 L -198 198 z" stroke-linecap="round" />
        @elseif ($hasil->status == 'Terjual')
            <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill:#f50505; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -198 -198 L 198 -198 L 198 198 L -198 198 z" stroke-linecap="round" />
        @elseif ($hasil->status == 'Tersedia')
        <a href="#" data-toggle="modal" data-target="#modalBooking-ljgKeZ_Gm97u5GF_GQxsY">
            <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #f8f8f8; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -198 -198 L 198 -198 L 198 198 L -198 198 z" stroke-linecap="round" />
        </a>
        @endif
    @empty
    <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="ljgKeZ_Gm97u5GF_GQxsY">
        <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #f8f8f8; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -198 -198 L 198 -198 L 198 198 L -198 198 z" stroke-linecap="round" />
    </a>
    @endforelse
</g>
<g transform="matrix(1.26 0 0 0.4 2353.22 1876.32)" id="0FHJnraZA8rC8ZYyxemI4"  >
    @forelse ( $siteplan->where('code_product', '0FHJnraZA8rC8ZYyxemI4') as $hasil)
        @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
            <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill:#ffc107; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -198 -198 L 198 -198 L 198 198 L -198 198 z" stroke-linecap="round" />
        @elseif ($hasil->status == 'Terjual')
            <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill:#f50505; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -198 -198 L 198 -198 L 198 198 L -198 198 z" stroke-linecap="round" />
        @elseif ($hasil->status == 'Tersedia')
        <a href="#" data-toggle="modal" data-target="#modalBooking-0FHJnraZA8rC8ZYyxemI4">
            <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #f8f8f8; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -198 -198 L 198 -198 L 198 198 L -198 198 z" stroke-linecap="round" />
        </a>
        @endif
    @empty
    <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="0FHJnraZA8rC8ZYyxemI4">
        <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #f8f8f8; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -198 -198 L 198 -198 L 198 198 L -198 198 z" stroke-linecap="round" />
    </a>
    @endforelse
</g>
<g transform="matrix(1.26 0 0 0.4 2353.22 2038.26)" id="cv47VvKdvwPgSxSIjbxtZ"  >
    @forelse ( $siteplan->where('code_product', 'cv47VvKdvwPgSxSIjbxtZ') as $hasil)
        @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
            <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill:#ffc107;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -198 -198 L 198 -198 L 198 198 L -198 198 z" stroke-linecap="round" />
        @elseif ($hasil->status == 'Terjual')
            <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill:#f50505; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -198 -198 L 198 -198 L 198 198 L -198 198 z" stroke-linecap="round" />
        @elseif ($hasil->status == 'Tersedia')
        <a href="#" data-toggle="modal" data-target="#modalBooking-cv47VvKdvwPgSxSIjbxtZ">
            <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #f8f8f8; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -198 -198 L 198 -198 L 198 198 L -198 198 z" stroke-linecap="round" />
        </a>
        @endif
    @empty
    <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="cv47VvKdvwPgSxSIjbxtZ">
        <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #f8f8f8; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -198 -198 L 198 -198 L 198 198 L -198 198 z" stroke-linecap="round" />
    </a>
    @endforelse
</g>
<g transform="matrix(1.26 0 0 0.4 2353.22 2199.38)" id="oDGdat0JsqfGaibzlouUX"  >
    @forelse ( $siteplan->where('code_product', 'oDGdat0JsqfGaibzlouUX') as $hasil)
        @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
            <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill:#ffc107;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -198 -198 L 198 -198 L 198 198 L -198 198 z" stroke-linecap="round" />
        @elseif ($hasil->status == 'Terjual')
            <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill:#f50505; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -198 -198 L 198 -198 L 198 198 L -198 198 z" stroke-linecap="round" />
        @elseif ($hasil->status == 'Tersedia')
        <a href="#" data-toggle="modal" data-target="#modalBooking-oDGdat0JsqfGaibzlouUX">
            <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #f8f8f8; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -198 -198 L 198 -198 L 198 198 L -198 198 z" stroke-linecap="round" />
        </a>
        @endif
    @empty
    <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="oDGdat0JsqfGaibzlouUX">
        <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #f8f8f8; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -198 -198 L 198 -198 L 198 198 L -198 198 z" stroke-linecap="round" />
    </a>
    @endforelse
</g>
<g transform="matrix(1.26 0 0 0.4 2353.22 2361.32)" id="pmbx_qziFW5PysON6TNyH"  >
    @forelse ( $siteplan->where('code_product', 'pmbx_qziFW5PysON6TNyH') as $hasil)
        @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
            <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill:#ffc107;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -198 -198 L 198 -198 L 198 198 L -198 198 z" stroke-linecap="round" />
        @elseif ($hasil->status == 'Terjual')
            <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill:#f50505; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -198 -198 L 198 -198 L 198 198 L -198 198 z" stroke-linecap="round" />
        @elseif ($hasil->status == 'Tersedia')
        <a href="#" data-toggle="modal" data-target="#modalBooking-pmbx_qziFW5PysON6TNyH">
            <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #f8f8f8; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -198 -198 L 198 -198 L 198 198 L -198 198 z" stroke-linecap="round" />
        </a>
        @endif
    @empty
    <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="pmbx_qziFW5PysON6TNyH">
        <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #f8f8f8; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -198 -198 L 198 -198 L 198 198 L -198 198 z" stroke-linecap="round" />
    </a>
    @endforelse
</g>
<g transform="matrix(1.26 0 0 0.4 2353.22 2522.45)" id="yb-QT1lWHtttySDPSIgCp"  >
    @forelse ( $siteplan->where('code_product', 'yb-QT1lWHtttySDPSIgCp') as $hasil)
        @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
            <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill:#ffc107;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -198 -198 L 198 -198 L 198 198 L -198 198 z" stroke-linecap="round" />
        @elseif ($hasil->status == 'Terjual')
            <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill:#f50505; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -198 -198 L 198 -198 L 198 198 L -198 198 z" stroke-linecap="round" />
        @elseif ($hasil->status == 'Tersedia')
        <a href="#" data-toggle="modal" data-target="#modalBooking-yb-QT1lWHtttySDPSIgCp">
            <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #f8f8f8; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -198 -198 L 198 -198 L 198 198 L -198 198 z" stroke-linecap="round" />
        </a>
        @endif
    @empty
    <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="yb-QT1lWHtttySDPSIgCp">
        <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #f8f8f8; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -198 -198 L 198 -198 L 198 198 L -198 198 z" stroke-linecap="round" />
    </a>
    @endforelse
</g>
<g transform="matrix(1.26 0 0 0.4 2353.22 2684.38)" id="XuExop9X-gcesAqS-jlt8"  >
    @forelse ( $siteplan->where('code_product', 'XuExop9X-gcesAqS-jlt8') as $hasil)
        @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
            <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill:#ffc107;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -198 -198 L 198 -198 L 198 198 L -198 198 z" stroke-linecap="round" />
        @elseif ($hasil->status == 'Terjual')
            <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill:#f50505; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -198 -198 L 198 -198 L 198 198 L -198 198 z" stroke-linecap="round" />
        @elseif ($hasil->status == 'Tersedia')
        <a href="#" data-toggle="modal" data-target="#modalBooking-XuExop9X-gcesAqS-jlt8">
            <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #f8f8f8; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -198 -198 L 198 -198 L 198 198 L -198 198 z" stroke-linecap="round" />
        </a>
        @endif
    @empty
    <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="XuExop9X-gcesAqS-jlt8">
        <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #f8f8f8; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -198 -198 L 198 -198 L 198 198 L -198 198 z" stroke-linecap="round" />
    </a>
    @endforelse
</g>
<g transform="matrix(1.26 0 0 0.4 2353.22 2847.1)" id="ScB8iQl9hOqkC67SzvI1W"  >
    @forelse ( $siteplan->where('code_product', 'ScB8iQl9hOqkC67SzvI1W') as $hasil)
        @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
            <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill:#ffc107;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -198 -198 L 198 -198 L 198 198 L -198 198 z" stroke-linecap="round" />
        @elseif ($hasil->status == 'Terjual')
            <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill:#f50505; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -198 -198 L 198 -198 L 198 198 L -198 198 z" stroke-linecap="round" />
        @elseif ($hasil->status == 'Tersedia')
        <a href="#" data-toggle="modal" data-target="#modalBooking-ScB8iQl9hOqkC67SzvI1W">
            <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #f8f8f8; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -198 -198 L 198 -198 L 198 198 L -198 198 z" stroke-linecap="round" />
        </a>
        @endif
    @empty
    <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="ScB8iQl9hOqkC67SzvI1W">
        <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #f8f8f8; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -198 -198 L 198 -198 L 198 198 L -198 198 z" stroke-linecap="round" />
    </a>
    @endforelse
</g>
<g transform="matrix(1.26 0 0 0.4 2353.22 3009.03)" id="d8OXAg34WCRnnVRSeVQyU"  >
    @forelse ( $siteplan->where('code_product', 'd8OXAg34WCRnnVRSeVQyU') as $hasil)
        @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
            <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill:#ffc107; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -198 -198 L 198 -198 L 198 198 L -198 198 z" stroke-linecap="round" />
        @elseif ($hasil->status == 'Terjual')
            <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill:#f50505; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -198 -198 L 198 -198 L 198 198 L -198 198 z" stroke-linecap="round" />
        @elseif ($hasil->status == 'Tersedia')
        <a href="#" data-toggle="modal" data-target="#modalBooking-d8OXAg34WCRnnVRSeVQyU">
            <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #f8f8f8; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -198 -198 L 198 -198 L 198 198 L -198 198 z" stroke-linecap="round" />
        </a>
        @endif
    @empty
    <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="d8OXAg34WCRnnVRSeVQyU">
        <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #f8f8f8; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -198 -198 L 198 -198 L 198 198 L -198 198 z" stroke-linecap="round" />
    </a>
    @endforelse
</g>
<g transform="matrix(1.26 0 0 0.4 1750.94 2675.1)" id="JmqD_x9dPY2zKQ5OTdEIG"  >
    @forelse ( $siteplan->where('code_product', 'JmqD_x9dPY2zKQ5OTdEIG') as $hasil)
        @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
            <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill:#ffc107; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -198 -198 L 198 -198 L 198 198 L -198 198 z" stroke-linecap="round" />
        @elseif ($hasil->status == 'Terjual')
            <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill:#f50505; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -198 -198 L 198 -198 L 198 198 L -198 198 z" stroke-linecap="round" />
        @elseif ($hasil->status == 'Tersedia')
        <a href="#" data-toggle="modal" data-target="#modalBooking-JmqD_x9dPY2zKQ5OTdEIG">
            <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #f8f8f8; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -198 -198 L 198 -198 L 198 198 L -198 198 z" stroke-linecap="round" />
        </a>
        @endif
    @empty
    <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="JmqD_x9dPY2zKQ5OTdEIG">
        <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #f8f8f8; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -198 -198 L 198 -198 L 198 198 L -198 198 z" stroke-linecap="round" />
    </a>
    @endforelse
</g>
<g transform="matrix(1.26 0 0 0.4 1750.94 2513.17)" id="LSllMQoDx8MXJRyHTGM-4"  >
    @forelse ( $siteplan->where('code_product', 'LSllMQoDx8MXJRyHTGM-4') as $hasil)
        @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
            <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill:#ffc107;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -198 -198 L 198 -198 L 198 198 L -198 198 z" stroke-linecap="round" />
        @elseif ($hasil->status == 'Terjual')
            <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill:#f50505; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -198 -198 L 198 -198 L 198 198 L -198 198 z" stroke-linecap="round" />
        @elseif ($hasil->status == 'Tersedia')
        <a href="#" data-toggle="modal" data-target="#modalBooking-LSllMQoDx8MXJRyHTGM-4">
            <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #f8f8f8; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -198 -198 L 198 -198 L 198 198 L -198 198 z" stroke-linecap="round" />
        </a>
        @endif
    @empty
    <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="LSllMQoDx8MXJRyHTGM-4">
        <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #f8f8f8; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -198 -198 L 198 -198 L 198 198 L -198 198 z" stroke-linecap="round" />
    </a>
    @endforelse
</g>
<g transform="matrix(1.26 0 0 0.4 1750.94 1867.05)" id="ROdTWtxD7xoOoHGouk7zO"  >
    @forelse ( $siteplan->where('code_product', 'ROdTWtxD7xoOoHGouk7zO') as $hasil)
        @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
            <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill:#ffc107;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -198 -198 L 198 -198 L 198 198 L -198 198 z" stroke-linecap="round" />
        @elseif ($hasil->status == 'Terjual')
            <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill:#f50505; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -198 -198 L 198 -198 L 198 198 L -198 198 z" stroke-linecap="round" />
        @elseif ($hasil->status == 'Tersedia')
        <a href="#" data-toggle="modal" data-target="#modalBooking-ROdTWtxD7xoOoHGouk7zO">
            <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #f8f8f8; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -198 -198 L 198 -198 L 198 198 L -198 198 z" stroke-linecap="round" />
        </a>
        @endif
    @empty
    <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="ROdTWtxD7xoOoHGouk7zO">
        <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #f8f8f8; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -198 -198 L 198 -198 L 198 198 L -198 198 z" stroke-linecap="round" />
    </a>
    @endforelse
</g>
<g transform="matrix(1.26 0 0 0.4 1750.94 2352.04)" id="L9SBbvBy7ljjyKrOt3iEv"  >
    @forelse ( $siteplan->where('code_product', 'L9SBbvBy7ljjyKrOt3iEv') as $hasil)
        @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
            <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill:#ffc107; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -198 -198 L 198 -198 L 198 198 L -198 198 z" stroke-linecap="round" />
        @elseif ($hasil->status == 'Terjual')
            <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill:#f50505; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -198 -198 L 198 -198 L 198 198 L -198 198 z" stroke-linecap="round" />
        @elseif ($hasil->status == 'Tersedia')
        <a href="#" data-toggle="modal" data-target="#modalBooking-L9SBbvBy7ljjyKrOt3iEv">
            <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #f8f8f8; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -198 -198 L 198 -198 L 198 198 L -198 198 z" stroke-linecap="round" />
        </a>
        @endif
    @empty
    <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="L9SBbvBy7ljjyKrOt3iEv">
        <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #f8f8f8; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -198 -198 L 198 -198 L 198 198 L -198 198 z" stroke-linecap="round" />
    </a>
    @endforelse
</g>
<g transform="matrix(1.26 0 0 0.4 1750.94 2028.98)" id="bRn2Jr_DXDLPtEPuwaJdC"  >
    @forelse ( $siteplan->where('code_product', 'bRn2Jr_DXDLPtEPuwaJdC') as $hasil)
        @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
            <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill:#ffc107;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -198 -198 L 198 -198 L 198 198 L -198 198 z" stroke-linecap="round" />
        @elseif ($hasil->status == 'Terjual')
            <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill:#f50505; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -198 -198 L 198 -198 L 198 198 L -198 198 z" stroke-linecap="round" />
        @elseif ($hasil->status == 'Tersedia')
        <a href="#" data-toggle="modal" data-target="#modalBooking-bRn2Jr_DXDLPtEPuwaJdC">
            <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #f8f8f8; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -198 -198 L 198 -198 L 198 198 L -198 198 z" stroke-linecap="round" />
        </a>
        @endif
    @empty
    <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="bRn2Jr_DXDLPtEPuwaJdC">
        <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #f8f8f8; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -198 -198 L 198 -198 L 198 198 L -198 198 z" stroke-linecap="round" />
    </a>
    @endforelse
</g>
<g transform="matrix(1.26 0 0 0.4 1750.94 2190.11)" id="ocx4PS3Xu5-dLzKVDQKwF"  >

    @forelse ( $siteplan->where('code_product', 'ocx4PS3Xu5-dLzKVDQKwF') as $hasil)
        @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
            <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill:#ffc107;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -198 -198 L 198 -198 L 198 198 L -198 198 z" stroke-linecap="round" />
        @elseif ($hasil->status == 'Terjual')
            <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill:#f50505; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -198 -198 L 198 -198 L 198 198 L -198 198 z" stroke-linecap="round" />
        @elseif ($hasil->status == 'Tersedia')
        <a href="#" data-toggle="modal" data-target="#modalBooking-ocx4PS3Xu5-dLzKVDQKwF">
            <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #f8f8f8; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -198 -198 L 198 -198 L 198 198 L -198 198 z" stroke-linecap="round" />
        </a>
        @endif
    @empty
    <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="ocx4PS3Xu5-dLzKVDQKwF">
        <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #f8f8f8; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -198 -198 L 198 -198 L 198 198 L -198 198 z" stroke-linecap="round" />
    </a>
    @endforelse
</g>
<g transform="matrix(1.26 0 0 0.4 1750.94 2837.82)" id="3gQxB531XJKWowFeHg2VE"  >
    @forelse ( $siteplan->where('code_product', '3gQxB531XJKWowFeHg2VE') as $hasil)
        @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
            <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill:#ffc107;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -198 -198 L 198 -198 L 198 198 L -198 198 z" stroke-linecap="round" />
        @elseif ($hasil->status == 'Terjual')
            <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill:#f50505; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -198 -198 L 198 -198 L 198 198 L -198 198 z" stroke-linecap="round" />
        @elseif ($hasil->status == 'Tersedia')
        <a href="#" data-toggle="modal" data-target="#modalBooking-3gQxB531XJKWowFeHg2VE">
            <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #f8f8f8; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -198 -198 L 198 -198 L 198 198 L -198 198 z" stroke-linecap="round" />
        </a>
        @endif
    @empty
    <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="3gQxB531XJKWowFeHg2VE">
        <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #f8f8f8; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -198 -198 L 198 -198 L 198 198 L -198 198 z" stroke-linecap="round" />
    </a>
    @endforelse
</g>
<g transform="matrix(1.26 0 0 0.4 1750.94 2999.75)" id="YEYuFgWVCsjo4bwQpY3HZ"  >
    @forelse ( $siteplan->where('code_product', 'YEYuFgWVCsjo4bwQpY3HZ') as $hasil)
        @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
            <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill:#ffc107;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -198 -198 L 198 -198 L 198 198 L -198 198 z" stroke-linecap="round" />
        @elseif ($hasil->status == 'Terjual')
            <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill:#f50505; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -198 -198 L 198 -198 L 198 198 L -198 198 z" stroke-linecap="round" />
        @elseif ($hasil->status == 'Tersedia')
        <a href="#" data-toggle="modal" data-target="#modalBooking-YEYuFgWVCsjo4bwQpY3HZ">
            <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #f8f8f8; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -198 -198 L 198 -198 L 198 198 L -198 198 z" stroke-linecap="round" />
        </a>
        @endif
    @empty
    <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="YEYuFgWVCsjo4bwQpY3HZ">
        <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #f8f8f8; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -198 -198 L 198 -198 L 198 198 L -198 198 z" stroke-linecap="round" />
    </a>
    @endforelse
</g>
<g transform="matrix(1.26 0 0 0.4 1750.42 260.82)" id="Xit1cy6ymR0rmOi46m_ft"  >
    @forelse ( $siteplan->where('code_product', 'Xit1cy6ymR0rmOi46m_ft') as $hasil)
        @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
            <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill:#ffc107; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -198 -198 L 198 -198 L 198 198 L -198 198 z" stroke-linecap="round" />
        @elseif ($hasil->status == 'Terjual')
            <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill:#f50505; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -198 -198 L 198 -198 L 198 198 L -198 198 z" stroke-linecap="round" />
        @elseif ($hasil->status == 'Tersedia')
        <a href="#" data-toggle="modal" data-target="#modalBooking-Xit1cy6ymR0rmOi46m_ft">
            <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #f8f8f8; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -198 -198 L 198 -198 L 198 198 L -198 198 z" stroke-linecap="round" />
        </a>
        @endif
    @empty
    <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="Xit1cy6ymR0rmOi46m_ft">
        <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #f8f8f8; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -198 -198 L 198 -198 L 198 198 L -198 198 z" stroke-linecap="round" />
    </a>
    @endforelse
</g>

<g transform="matrix(1.26 0 0 0.4 1750.94 422.76)" id="yWbm0SDKhEu5OeSA9Hfi2"  >
    @forelse ( $siteplan->where('code_product', 'yWbm0SDKhEu5OeSA9Hfi2') as $hasil)
        @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
            <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill:#ffc107;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -198 -198 L 198 -198 L 198 198 L -198 198 z" stroke-linecap="round" />
        @elseif ($hasil->status == 'Terjual')
            <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill:#f50505; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -198 -198 L 198 -198 L 198 198 L -198 198 z" stroke-linecap="round" />
        @elseif ($hasil->status == 'Tersedia')
        <a href="#" data-toggle="modal" data-target="#modalBooking-yWbm0SDKhEu5OeSA9Hfi2">
            <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #f8f8f8; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -198 -198 L 198 -198 L 198 198 L -198 198 z" stroke-linecap="round" />
        </a>
        @endif
    @empty
    <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="yWbm0SDKhEu5OeSA9Hfi2">
        <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #f8f8f8; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -198 -198 L 198 -198 L 198 198 L -198 198 z" stroke-linecap="round" />
    </a>
    @endforelse
</g>
<g transform="matrix(1.26 0 0 0.4 1750.94 583.88)" id="tfbdKQyeJ8QX5HyAoFXlF"  >
    @forelse ( $siteplan->where('code_product', 'tfbdKQyeJ8QX5HyAoFXlF') as $hasil)
        @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
            <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill:#ffc107;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -198 -198 L 198 -198 L 198 198 L -198 198 z" stroke-linecap="round" />
        @elseif ($hasil->status == 'Terjual')
            <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill:#f50505; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -198 -198 L 198 -198 L 198 198 L -198 198 z" stroke-linecap="round" />
        @elseif ($hasil->status == 'Tersedia')
        <a href="#" data-toggle="modal" data-target="#modalBooking-tfbdKQyeJ8QX5HyAoFXlF">
            <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #f8f8f8; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -198 -198 L 198 -198 L 198 198 L -198 198 z" stroke-linecap="round" />
        </a>
        @endif
    @empty
    <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="tfbdKQyeJ8QX5HyAoFXlF">
        <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #f8f8f8; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -198 -198 L 198 -198 L 198 198 L -198 198 z" stroke-linecap="round" />
    </a>
    @endforelse
</g>
<g transform="matrix(1.26 0 0 0.4 1750.94 745.82)" id="96lcVZZ36-12gfQw3Q4Tj"  >
    @forelse ( $siteplan->where('code_product', '96lcVZZ36-12gfQw3Q4Tj') as $hasil)
        @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
            <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill:#ffc107;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -198 -198 L 198 -198 L 198 198 L -198 198 z" stroke-linecap="round" />
        @elseif ($hasil->status == 'Terjual')
            <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill:#f50505; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -198 -198 L 198 -198 L 198 198 L -198 198 z" stroke-linecap="round" />
        @elseif ($hasil->status == 'Tersedia')
        <a href="#" data-toggle="modal" data-target="#modalBooking-96lcVZZ36-12gfQw3Q4Tj">
            <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #f8f8f8; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -198 -198 L 198 -198 L 198 198 L -198 198 z" stroke-linecap="round" />
        </a>
        @endif
    @empty
    <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="96lcVZZ36-12gfQw3Q4Tj">
        <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #f8f8f8; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -198 -198 L 198 -198 L 198 198 L -198 198 z" stroke-linecap="round" />
    </a>
    @endforelse
</g>
<g transform="matrix(1.26 0 0 0.4 1750.94 906.95)" id="egHGVuJizSqmBUyqWfFK-"  >
    @forelse ( $siteplan->where('code_product', 'egHGVuJizSqmBUyqWfFK-') as $hasil)
        @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
            <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill:#ffc107; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -198 -198 L 198 -198 L 198 198 L -198 198 z" stroke-linecap="round" />
        @elseif ($hasil->status == 'Terjual')
            <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill:#f50505; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -198 -198 L 198 -198 L 198 198 L -198 198 z" stroke-linecap="round" />
        @elseif ($hasil->status == 'Tersedia')
        <a href="#" data-toggle="modal" data-target="#modalBooking-egHGVuJizSqmBUyqWfFK-">
            <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #f8f8f8; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -198 -198 L 198 -198 L 198 198 L -198 198 z" stroke-linecap="round" />
        </a>
        @endif
    @empty
    <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="egHGVuJizSqmBUyqWfFK-">
        <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #f8f8f8; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -198 -198 L 198 -198 L 198 198 L -198 198 z" stroke-linecap="round" />
    </a>
    @endforelse
</g>
<g transform="matrix(1.26 0 0 0.4 1750.94 1068.88)" id="YYOe7SVbdkgHlD_doSoWU"  >
    @forelse ( $siteplan->where('code_product', 'YYOe7SVbdkgHlD_doSoWU') as $hasil)
        @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
            <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill:#ffc107;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -198 -198 L 198 -198 L 198 198 L -198 198 z" stroke-linecap="round" />
        @elseif ($hasil->status == 'Terjual')
            <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill:#f50505; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -198 -198 L 198 -198 L 198 198 L -198 198 z" stroke-linecap="round" />
        @elseif ($hasil->status == 'Tersedia')
        <a href="#" data-toggle="modal" data-target="#modalBooking-YYOe7SVbdkgHlD_doSoWU">
            <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #f8f8f8; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -198 -198 L 198 -198 L 198 198 L -198 198 z" stroke-linecap="round" />
        </a>
        @endif
    @empty
    <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="YYOe7SVbdkgHlD_doSoWU">
        <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #f8f8f8; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -198 -198 L 198 -198 L 198 198 L -198 198 z" stroke-linecap="round" />
    </a>
    @endforelse
</g>
<g transform="matrix(1.26 0 0 0.4 1750.94 1230.01)" id="dqsudzQFXt7Uf_jqbyfRr"  >
    @forelse ( $siteplan->where('code_product', 'dqsudzQFXt7Uf_jqbyfRr') as $hasil)
        @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
            <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill:#ffc107; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -198 -198 L 198 -198 L 198 198 L -198 198 z" stroke-linecap="round" />
        @elseif ($hasil->status == 'Terjual')
            <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill:#f50505; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -198 -198 L 198 -198 L 198 198 L -198 198 z" stroke-linecap="round" />
        @elseif ($hasil->status == 'Tersedia')
        <a href="#" data-toggle="modal" data-target="#modalBooking-dqsudzQFXt7Uf_jqbyfRr">
            <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #f8f8f8; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -198 -198 L 198 -198 L 198 198 L -198 198 z" stroke-linecap="round" />
        </a>
        @endif
    @empty
    <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="dqsudzQFXt7Uf_jqbyfRr">
        <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #f8f8f8; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -198 -198 L 198 -198 L 198 198 L -198 198 z" stroke-linecap="round" />
    </a>
    @endforelse
</g>
<g transform="matrix(1.26 0 0 0.4 1750.94 1391.94)" id="jSIiKsoXChUp96KlIJnor"  >
    @forelse ( $siteplan->where('code_product', 'jSIiKsoXChUp96KlIJnor') as $hasil)
        @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
            <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill:#ffc107;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -198 -198 L 198 -198 L 198 198 L -198 198 z" stroke-linecap="round" />
        @elseif ($hasil->status == 'Terjual')
            <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill:#f50505; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -198 -198 L 198 -198 L 198 198 L -198 198 z" stroke-linecap="round" />
        @elseif ($hasil->status == 'Tersedia')
        <a href="#" data-toggle="modal" data-target="#modalBooking-jSIiKsoXChUp96KlIJnor">
            <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #f8f8f8; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -198 -198 L 198 -198 L 198 198 L -198 198 z" stroke-linecap="round" />
        </a>
        @endif
    @empty
    <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="jSIiKsoXChUp96KlIJnor">
        <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #f8f8f8; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -198 -198 L 198 -198 L 198 198 L -198 198 z" stroke-linecap="round" />
    </a>
    @endforelse
</g>
<g transform="matrix(1.26 0 0 0.4 1750.94 1553.07)" id="zdJxGD6gRyF3dxBtcO-K0"  >
    @forelse ( $siteplan->where('code_product', 'zdJxGD6gRyF3dxBtcO-K0') as $hasil)
        @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
            <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill:#ffc107;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -198 -198 L 198 -198 L 198 198 L -198 198 z" stroke-linecap="round" />
        @elseif ($hasil->status == 'Terjual')
            <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill:#f50505; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -198 -198 L 198 -198 L 198 198 L -198 198 z" stroke-linecap="round" />
        @elseif ($hasil->status == 'Tersedia')
        <a href="#" data-toggle="modal" data-target="#modalBooking-zdJxGD6gRyF3dxBtcO-K0">
            <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #f8f8f8; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -198 -198 L 198 -198 L 198 198 L -198 198 z" stroke-linecap="round" />
        </a>
        @endif
    @empty
    <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="zdJxGD6gRyF3dxBtcO-K0">
        <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #f8f8f8; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -198 -198 L 198 -198 L 198 198 L -198 198 z" stroke-linecap="round" />
    </a>
    @endforelse
</g>
<g transform="matrix(1.26 0 0 0.4 1750.94 1715.01)" id="ltlQ_J9nAWZJX6Y5Zs2_T"  >
    @forelse ( $siteplan->where('code_product', 'ltlQ_J9nAWZJX6Y5Zs2_T') as $hasil)
        @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
            <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill:#ffc107;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -198 -198 L 198 -198 L 198 198 L -198 198 z" stroke-linecap="round" />
        @elseif ($hasil->status == 'Terjual')
            <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill:#f50505; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -198 -198 L 198 -198 L 198 198 L -198 198 z" stroke-linecap="round" />
        @elseif ($hasil->status == 'Tersedia')
        <a href="#" data-toggle="modal" data-target="#modalBooking-ltlQ_J9nAWZJX6Y5Zs2_T">
            <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #f8f8f8; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -198 -198 L 198 -198 L 198 198 L -198 198 z" stroke-linecap="round" />
        </a>
        @endif
    @empty
    <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="ltlQ_J9nAWZJX6Y5Zs2_T">
        <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #f8f8f8; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -198 -198 L 198 -198 L 198 198 L -198 198 z" stroke-linecap="round" />
    </a>
    @endforelse
</g>
<g transform="matrix(0 12.84 -0.44 0 947.84 1628.9)" id="dTtUInDhASufCUkgpmGpz"  >
<path style="stroke: rgb(138,70,19); stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(74,73,73); fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -114 -114 L 114 -114 L 114 114 L -114 114 z" stroke-linecap="round" />
</g>
<g transform="matrix(1.26 0 0 0.4 1248.46 260.88)" id="rzmk6ctAhdUhvc7eod_UN"  >
    @forelse ( $siteplan->where('code_product', 'rzmk6ctAhdUhvc7eod_UN') as $hasil)
        @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
            <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill:#ffc107;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -198 -198 L 198 -198 L 198 198 L -198 198 z" stroke-linecap="round" />
        @elseif ($hasil->status == 'Terjual')
            <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill:#f50505; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -198 -198 L 198 -198 L 198 198 L -198 198 z" stroke-linecap="round" />
        @elseif ($hasil->status == 'Tersedia')
        <a href="#" data-toggle="modal" data-target="#modalBooking-rzmk6ctAhdUhvc7eod_UN">
            <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #f8f8f8; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -198 -198 L 198 -198 L 198 198 L -198 198 z" stroke-linecap="round" />
        </a>
        @endif
    @empty
    <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="rzmk6ctAhdUhvc7eod_UN">
        <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #f8f8f8; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -198 -198 L 198 -198 L 198 198 L -198 198 z" stroke-linecap="round" />
    </a>
    @endforelse
</g>
<g transform="matrix(1.26 0 0 0.4 1248.98 422.82)" id="HoFlqKTwsd_hCaLcceye0"  >
    @forelse ( $siteplan->where('code_product', 'HoFlqKTwsd_hCaLcceye0') as $hasil)
        @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
            <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill:#ffc107;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -198 -198 L 198 -198 L 198 198 L -198 198 z" stroke-linecap="round" />
        @elseif ($hasil->status == 'Terjual')
            <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill:#f50505; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -198 -198 L 198 -198 L 198 198 L -198 198 z" stroke-linecap="round" />
        @elseif ($hasil->status == 'Tersedia')
        <a href="#" data-toggle="modal" data-target="#modalBooking-HoFlqKTwsd_hCaLcceye0">
            <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #f8f8f8; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -198 -198 L 198 -198 L 198 198 L -198 198 z" stroke-linecap="round" />
        </a>
        @endif
    @empty
    <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="HoFlqKTwsd_hCaLcceye0">
        <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #f8f8f8; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -198 -198 L 198 -198 L 198 198 L -198 198 z" stroke-linecap="round" />
    </a>
    @endforelse
</g>
<g transform="matrix(1.26 0 0 0.4 1248.98 583.95)" id="wMDV986qTQqRROdZC0waN"  >
    @forelse ( $siteplan->where('code_product', 'wMDV986qTQqRROdZC0waN') as $hasil)
        @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
            <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill:#ffc107;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -198 -198 L 198 -198 L 198 198 L -198 198 z" stroke-linecap="round" />
        @elseif ($hasil->status == 'Terjual')
            <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill:#f50505; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -198 -198 L 198 -198 L 198 198 L -198 198 z" stroke-linecap="round" />
        @elseif ($hasil->status == 'Tersedia')
        <a href="#" data-toggle="modal" data-target="#modalBooking-wMDV986qTQqRROdZC0waN">
            <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #f8f8f8; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -198 -198 L 198 -198 L 198 198 L -198 198 z" stroke-linecap="round" />
        </a>
        @endif
    @empty
    <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="wMDV986qTQqRROdZC0waN">
        <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #f8f8f8; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -198 -198 L 198 -198 L 198 198 L -198 198 z" stroke-linecap="round" />
    </a>
    @endforelse
</g>
<g transform="matrix(1.26 0 0 0.4 1248.98 745.88)" id="6dCatdoVegkGzNIVlsDMC"  >
    @forelse ( $siteplan->where('code_product', '6dCatdoVegkGzNIVlsDMC') as $hasil)
        @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
            <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill:#ffc107;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -198 -198 L 198 -198 L 198 198 L -198 198 z" stroke-linecap="round" />
        @elseif ($hasil->status == 'Terjual')
            <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill:#f50505; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -198 -198 L 198 -198 L 198 198 L -198 198 z" stroke-linecap="round" />
        @elseif ($hasil->status == 'Tersedia')
        <a href="#" data-toggle="modal" data-target="#modalBooking-6dCatdoVegkGzNIVlsDMC">
            <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #f8f8f8; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -198 -198 L 198 -198 L 198 198 L -198 198 z" stroke-linecap="round" />
        </a>
        @endif
    @empty
    <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="6dCatdoVegkGzNIVlsDMC">
        <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #f8f8f8; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -198 -198 L 198 -198 L 198 198 L -198 198 z" stroke-linecap="round" />
    </a>
    @endforelse
</g>
<g transform="matrix(1.26 0 0 0.4 1248.98 907.01)" id="-F8tBWWSjAk1h0S4rrNTm"  >
    @forelse ( $siteplan->where('code_product', 'F8tBWWSjAk1h0S4rrNTm') as $hasil)
        @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
            <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill:#ffc107;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -198 -198 L 198 -198 L 198 198 L -198 198 z" stroke-linecap="round" />
        @elseif ($hasil->status == 'Terjual')
            <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill:#f50505; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -198 -198 L 198 -198 L 198 198 L -198 198 z" stroke-linecap="round" />
        @elseif ($hasil->status == 'Tersedia')
        <a href="#" data-toggle="modal" data-target="#modalBooking-F8tBWWSjAk1h0S4rrNTm">
            <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #f8f8f8; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -198 -198 L 198 -198 L 198 198 L -198 198 z" stroke-linecap="round" />
        </a>
        @endif
    @empty
    <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="F8tBWWSjAk1h0S4rrNTm">
        <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #f8f8f8; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -198 -198 L 198 -198 L 198 198 L -198 198 z" stroke-linecap="round" />
    </a>
    @endforelse
</g>
<g transform="matrix(1.26 0 0 0.4 1248.98 1068.94)" id="-YMI7IrA4OrbTkPYizHYQ"  >
    @forelse ( $siteplan->where('code_product', 'YMI7IrA4OrbTkPYizHYQ') as $hasil)
        @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
            <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill:#ffc107;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -198 -198 L 198 -198 L 198 198 L -198 198 z" stroke-linecap="round" />
        @elseif ($hasil->status == 'Terjual')
            <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill:#f50505; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -198 -198 L 198 -198 L 198 198 L -198 198 z" stroke-linecap="round" />
        @elseif ($hasil->status == 'Tersedia')
        <a href="#" data-toggle="modal" data-target="#modalBooking-YMI7IrA4OrbTkPYizHYQ">
            <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #f8f8f8; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -198 -198 L 198 -198 L 198 198 L -198 198 z" stroke-linecap="round" />
        </a>
        @endif
    @empty
    <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="YMI7IrA4OrbTkPYizHYQ">
        <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #f8f8f8; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -198 -198 L 198 -198 L 198 198 L -198 198 z" stroke-linecap="round" />
    </a>
    @endforelse
</g>
<g transform="matrix(1.26 0 0 0.4 1248.98 1230.07)" id="3cxdV_08u69JoSYuzuSFv"  >
    @forelse ( $siteplan->where('code_product', '3cxdV_08u69JoSYuzuSFv') as $hasil)
        @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
            <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill:#ffc107; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -198 -198 L 198 -198 L 198 198 L -198 198 z" stroke-linecap="round" />
        @elseif ($hasil->status == 'Terjual')
            <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill:#f50505; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -198 -198 L 198 -198 L 198 198 L -198 198 z" stroke-linecap="round" />
        @elseif ($hasil->status == 'Tersedia')
        <a href="#" data-toggle="modal" data-target="#modalBooking-3cxdV_08u69JoSYuzuSFv">
            <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #f8f8f8; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -198 -198 L 198 -198 L 198 198 L -198 198 z" stroke-linecap="round" />
        </a>
        @endif
    @empty
    <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="3cxdV_08u69JoSYuzuSFv">
        <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #f8f8f8; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -198 -198 L 198 -198 L 198 198 L -198 198 z" stroke-linecap="round" />
    </a>
    @endforelse
</g>
<g transform="matrix(1.26 0 0 0.4 1248.98 1392.01)" id="083LOVsmZh3rMejsJAhxA"  >
    @forelse ( $siteplan->where('code_product', '083LOVsmZh3rMejsJAhxA') as $hasil)
        @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
            <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill:#ffc107; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -198 -198 L 198 -198 L 198 198 L -198 198 z" stroke-linecap="round" />
        @elseif ($hasil->status == 'Terjual')
            <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill:#f50505; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -198 -198 L 198 -198 L 198 198 L -198 198 z" stroke-linecap="round" />
        @elseif ($hasil->status == 'Tersedia')
        <a href="#" data-toggle="modal" data-target="#modalBooking-083LOVsmZh3rMejsJAhxA">
            <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #f8f8f8; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -198 -198 L 198 -198 L 198 198 L -198 198 z" stroke-linecap="round" />
        </a>
        @endif
    @empty
    <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="083LOVsmZh3rMejsJAhxA">
        <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #f8f8f8; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -198 -198 L 198 -198 L 198 198 L -198 198 z" stroke-linecap="round" />
    </a>
    @endforelse
</g>
<g transform="matrix(1.26 0 0 0.4 1248.98 1553.13)" id="0_jyLesy6KWwRrL12Xmo9"  >
    @forelse ( $siteplan->where('code_product', '0_jyLesy6KWwRrL12Xmo9') as $hasil)
        @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
            <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill:#ffc107;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -198 -198 L 198 -198 L 198 198 L -198 198 z" stroke-linecap="round" />
        @elseif ($hasil->status == 'Terjual')
            <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill:#f50505; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -198 -198 L 198 -198 L 198 198 L -198 198 z" stroke-linecap="round" />
        @elseif ($hasil->status == 'Tersedia')
        <a href="#" data-toggle="modal" data-target="#modalBooking-0_jyLesy6KWwRrL12Xmo9">
            <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #f8f8f8; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -198 -198 L 198 -198 L 198 198 L -198 198 z" stroke-linecap="round" />
        </a>
        @endif
    @empty
    <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="0_jyLesy6KWwRrL12Xmo9">
        <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #f8f8f8; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -198 -198 L 198 -198 L 198 198 L -198 198 z" stroke-linecap="round" />
    </a>
    @endforelse
</g>
<g transform="matrix(1.26 0 0 0.4 1248.98 1715.07)" id="zIhBz1uTZaIC7yG4PpdAE"  >
    @forelse ( $siteplan->where('code_product', 'zIhBz1uTZaIC7yG4PpdAE') as $hasil)
        @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
            <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill:#ffc107;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -198 -198 L 198 -198 L 198 198 L -198 198 z" stroke-linecap="round" />
        @elseif ($hasil->status == 'Terjual')
            <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill:#f50505;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -198 -198 L 198 -198 L 198 198 L -198 198 z" stroke-linecap="round" />
        @elseif ($hasil->status == 'Tersedia')
        <a href="#" data-toggle="modal" data-target="#modalBooking-zIhBz1uTZaIC7yG4PpdAE">
            <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #f8f8f8; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -198 -198 L 198 -198 L 198 198 L -198 198 z" stroke-linecap="round" />
        </a>
        @endif
    @empty
    <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="zIhBz1uTZaIC7yG4PpdAE">
        <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #f8f8f8; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -198 -198 L 198 -198 L 198 198 L -198 198 z" stroke-linecap="round" />
    </a>
    @endforelse
</g>
<g transform="matrix(1.26 0 0 0.4 1248.98 1876.19)" id="MccX6PgG6bwerSYhTMxBV"  >
    @forelse ( $siteplan->where('code_product', 'MccX6PgG6bwerSYhTMxBV') as $hasil)
        @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
            <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill:#ffc107;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -198 -198 L 198 -198 L 198 198 L -198 198 z" stroke-linecap="round" />
        @elseif ($hasil->status == 'Terjual')
            <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill:#f50505; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -198 -198 L 198 -198 L 198 198 L -198 198 z" stroke-linecap="round" />
        @elseif ($hasil->status == 'Tersedia')
        <a href="#" data-toggle="modal" data-target="#modalBooking-MccX6PgG6bwerSYhTMxBV">
            <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #f8f8f8; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -198 -198 L 198 -198 L 198 198 L -198 198 z" stroke-linecap="round" />
        </a>
        @endif
    @empty
    <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="MccX6PgG6bwerSYhTMxBV">
        <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #f8f8f8; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -198 -198 L 198 -198 L 198 198 L -198 198 z" stroke-linecap="round" />
    </a>
    @endforelse
</g>
<g transform="matrix(1.26 0 0 0.4 1248.98 2038.13)" id="b67pu_2JOkuV3jiu7HFTM"  >
    @forelse ( $siteplan->where('code_product', 'b67pu_2JOkuV3jiu7HFTM') as $hasil)
        @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
            <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill:#ffc107; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -198 -198 L 198 -198 L 198 198 L -198 198 z" stroke-linecap="round" />
        @elseif ($hasil->status == 'Terjual')
            <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill:#f50505; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -198 -198 L 198 -198 L 198 198 L -198 198 z" stroke-linecap="round" />
        @elseif ($hasil->status == 'Tersedia')
        <a href="#" data-toggle="modal" data-target="#modalBooking-b67pu_2JOkuV3jiu7HFTM">
            <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #f8f8f8; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -198 -198 L 198 -198 L 198 198 L -198 198 z" stroke-linecap="round" />
        </a>
        @endif
    @empty
    <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="b67pu_2JOkuV3jiu7HFTM">
        <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #f8f8f8; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -198 -198 L 198 -198 L 198 198 L -198 198 z" stroke-linecap="round" />
    </a>
    @endforelse
</g>
<g transform="matrix(1.26 0 0 0.4 1248.98 2199.26)" id="bC3cpQxtzsiJdrGAz4A5M"  >
    @forelse ( $siteplan->where('code_product', 'bC3cpQxtzsiJdrGAz4A5M') as $hasil)
        @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
            <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill:#ffc107; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -198 -198 L 198 -198 L 198 198 L -198 198 z" stroke-linecap="round" />
        @elseif ($hasil->status == 'Terjual')
            <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill:#f50505; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -198 -198 L 198 -198 L 198 198 L -198 198 z" stroke-linecap="round" />
        @elseif ($hasil->status == 'Tersedia')
        <a href="#" data-toggle="modal" data-target="#modalBooking-bC3cpQxtzsiJdrGAz4A5M">
            <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #f8f8f8; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -198 -198 L 198 -198 L 198 198 L -198 198 z" stroke-linecap="round" />
        </a>
        @endif
    @empty
    <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="bC3cpQxtzsiJdrGAz4A5M">
        <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #f8f8f8; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -198 -198 L 198 -198 L 198 198 L -198 198 z" stroke-linecap="round" />
    </a>
    @endforelse
</g>
<g transform="matrix(1.26 0 0 0.4 1248.98 2361.19)" id="fwNnY5cmh00m2u39AI92F"  >
    @forelse ( $siteplan->where('code_product', 'fwNnY5cmh00m2u39AI92F') as $hasil)
        @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
            <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill:#ffc107;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -198 -198 L 198 -198 L 198 198 L -198 198 z" stroke-linecap="round" />
        @elseif ($hasil->status == 'Terjual')
            <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill:#f50505; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -198 -198 L 198 -198 L 198 198 L -198 198 z" stroke-linecap="round" />
        @elseif ($hasil->status == 'Tersedia')
        <a href="#" data-toggle="modal" data-target="#modalBooking-fwNnY5cmh00m2u39AI92F">
            <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #f8f8f8; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -198 -198 L 198 -198 L 198 198 L -198 198 z" stroke-linecap="round" />
        </a>
        @endif
    @empty
    <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="fwNnY5cmh00m2u39AI92F">
        <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #f8f8f8; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -198 -198 L 198 -198 L 198 198 L -198 198 z" stroke-linecap="round" />
    </a>
    @endforelse
</g>
<g transform="matrix(1.26 0 0 0.4 1248.98 2522.32)" id="bDQVO_PqCdjxzFN_WZZ3l"  >
    @forelse ( $siteplan->where('code_product', 'bDQVO_PqCdjxzFN_WZZ3l') as $hasil)
        @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
            <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill:#ffc107;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -198 -198 L 198 -198 L 198 198 L -198 198 z" stroke-linecap="round" />
        @elseif ($hasil->status == 'Terjual')
            <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill:#f50505; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -198 -198 L 198 -198 L 198 198 L -198 198 z" stroke-linecap="round" />
        @elseif ($hasil->status == 'Tersedia')
        <a href="#" data-toggle="modal" data-target="#modalBooking-bDQVO_PqCdjxzFN_WZZ3l">
            <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #f8f8f8; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -198 -198 L 198 -198 L 198 198 L -198 198 z" stroke-linecap="round" />
        </a>
        @endif
    @empty
    <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="bDQVO_PqCdjxzFN_WZZ3l">
        <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #f8f8f8; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -198 -198 L 198 -198 L 198 198 L -198 198 z" stroke-linecap="round" />
    </a>
    @endforelse
</g>
<g transform="matrix(1.26 0 0 0.4 1248.98 2684.25)" id="7T2AQWt06sZxDMwyaCCUx"  >
    @forelse ( $siteplan->where('code_product', '7T2AQWt06sZxDMwyaCCUx') as $hasil)
        @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
            <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill:#ffc107;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -198 -198 L 198 -198 L 198 198 L -198 198 z" stroke-linecap="round" />
        @elseif ($hasil->status == 'Terjual')
            <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill:#f50505; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -198 -198 L 198 -198 L 198 198 L -198 198 z" stroke-linecap="round" />
        @elseif ($hasil->status == 'Tersedia')
        <a href="#" data-toggle="modal" data-target="#modalBooking-7T2AQWt06sZxDMwyaCCUx">
            <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #f8f8f8; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -198 -198 L 198 -198 L 198 198 L -198 198 z" stroke-linecap="round" />
        </a>
        @endif
    @empty
    <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="7T2AQWt06sZxDMwyaCCUx">
        <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #f8f8f8; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -198 -198 L 198 -198 L 198 198 L -198 198 z" stroke-linecap="round" />
    </a>
    @endforelse
</g>
<g transform="matrix(1.26 0 0 0.4 1248.98 2846.97)" id="VypEpnZCqA1idU_tYMUF2"  >
    @forelse ( $siteplan->where('code_product', 'VypEpnZCqA1idU_tYMUF2') as $hasil)
        @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
            <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill:#ffc107; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -198 -198 L 198 -198 L 198 198 L -198 198 z" stroke-linecap="round" />
        @elseif ($hasil->status == 'Terjual')
            <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill:#f50505; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -198 -198 L 198 -198 L 198 198 L -198 198 z" stroke-linecap="round" />
        @elseif ($hasil->status == 'Tersedia')
        <a href="#" data-toggle="modal" data-target="#modalBooking-VypEpnZCqA1idU_tYMUF2">
            <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #f8f8f8; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -198 -198 L 198 -198 L 198 198 L -198 198 z" stroke-linecap="round" />
        </a>
        @endif
    @empty
    <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="VypEpnZCqA1idU_tYMUF2">
        <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #f8f8f8; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -198 -198 L 198 -198 L 198 198 L -198 198 z" stroke-linecap="round" />
    </a>
    @endforelse
</g>
<g transform="matrix(1.26 0 0 0.4 1248.98 3008.9)" id="kV4uE1kn1qZbKG7z3kLt7"  >
    @forelse ( $siteplan->where('code_product', 'kV4uE1kn1qZbKG7z3kLt7') as $hasil)
        @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
            <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill:#ffc107; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -198 -198 L 198 -198 L 198 198 L -198 198 z" stroke-linecap="round" />
        @elseif ($hasil->status == 'Terjual')
            <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill:#f50505; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -198 -198 L 198 -198 L 198 198 L -198 198 z" stroke-linecap="round" />
        @elseif ($hasil->status == 'Tersedia')
        <a href="#" data-toggle="modal" data-target="#modalBooking-kV4uE1kn1qZbKG7z3kLt7">
            <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #f8f8f8; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -198 -198 L 198 -198 L 198 198 L -198 198 z" stroke-linecap="round" />
        </a>
        @endif
    @empty
    <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="kV4uE1kn1qZbKG7z3kLt7">
        <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #f8f8f8; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -198 -198 L 198 -198 L 198 198 L -198 198 z" stroke-linecap="round" />
    </a>
    @endforelse
</g>
<g transform="matrix(1.26 0 0 0.4 646.44 260.7)" id="i3kKBkQjVXljagylwzblN"  >
    @forelse ( $siteplan->where('code_product', 'i3kKBkQjVXljagylwzblN') as $hasil)
        @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
            <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill:#ffc107; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -198 -198 L 198 -198 L 198 198 L -198 198 z" stroke-linecap="round" />
        @elseif ($hasil->status == 'Terjual')
            <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill:#f50505; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -198 -198 L 198 -198 L 198 198 L -198 198 z" stroke-linecap="round" />
        @elseif ($hasil->status == 'Tersedia')
        <a href="#" data-toggle="modal" data-target="#modalBooking-i3kKBkQjVXljagylwzblN">
            <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #f8f8f8; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -198 -198 L 198 -198 L 198 198 L -198 198 z" stroke-linecap="round" />
        </a>
        @endif
    @empty
    <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="i3kKBkQjVXljagylwzblN">
        <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #f8f8f8; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -198 -198 L 198 -198 L 198 198 L -198 198 z" stroke-linecap="round" />
    </a>
    @endforelse
</g>
<g transform="matrix(1.26 0 0 0.4 646.44 422.64)" id="0sZNrgPaIlJk0l9gm9Jq3"  >
    @forelse ( $siteplan->where('code_product', '0sZNrgPaIlJk0l9gm9Jq3') as $hasil)
        @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
            <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill:#ffc107;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -198 -198 L 198 -198 L 198 198 L -198 198 z" stroke-linecap="round" />
        @elseif ($hasil->status == 'Terjual')
            <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill:#f50505; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -198 -198 L 198 -198 L 198 198 L -198 198 z" stroke-linecap="round" />
        @elseif ($hasil->status == 'Tersedia')
        <a href="#" data-toggle="modal" data-target="#modalBooking-0sZNrgPaIlJk0l9gm9Jq3">
            <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #f8f8f8; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -198 -198 L 198 -198 L 198 198 L -198 198 z" stroke-linecap="round" />
        </a>
        @endif
    @empty
    <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="0sZNrgPaIlJk0l9gm9Jq3">
        <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #f8f8f8; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -198 -198 L 198 -198 L 198 198 L -198 198 z" stroke-linecap="round" />
    </a>
    @endforelse
</g>
<g transform="matrix(1.26 0 0 0.4 646.44 583.76)" id="q5NeCLRGB9GXKL-dj3Le_"  >
    @forelse ( $siteplan->where('code_product', 'q5NeCLRGB9GXKL-dj3Le_') as $hasil)
        @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
            <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill:#ffc107;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -198 -198 L 198 -198 L 198 198 L -198 198 z" stroke-linecap="round" />
        @elseif ($hasil->status == 'Terjual')
            <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill:#f50505; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -198 -198 L 198 -198 L 198 198 L -198 198 z" stroke-linecap="round" />
        @elseif ($hasil->status == 'Tersedia')
        <a href="#" data-toggle="modal" data-target="#modalBooking-q5NeCLRGB9GXKL-dj3Le_">
            <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #f8f8f8; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -198 -198 L 198 -198 L 198 198 L -198 198 z" stroke-linecap="round" />
        </a>
        @endif
    @empty
    <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="q5NeCLRGB9GXKL-dj3Le_">
        <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #f8f8f8; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -198 -198 L 198 -198 L 198 198 L -198 198 z" stroke-linecap="round" />
    </a>
    @endforelse
</g>
<g transform="matrix(1.26 0 0 0.4 646.44 745.7)" id="L_ayVy5eefeE4aXbMChxL"  >
    @forelse ( $siteplan->where('code_product', 'L_ayVy5eefeE4aXbMChxL') as $hasil)
        @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
            <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill:#ffc107;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -198 -198 L 198 -198 L 198 198 L -198 198 z" stroke-linecap="round" />
        @elseif ($hasil->status == 'Terjual')
            <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill:#f50505; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -198 -198 L 198 -198 L 198 198 L -198 198 z" stroke-linecap="round" />
        @elseif ($hasil->status == 'Tersedia')
        <a href="#" data-toggle="modal" data-target="#modalBooking-L_ayVy5eefeE4aXbMChxL">
            <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #f8f8f8; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -198 -198 L 198 -198 L 198 198 L -198 198 z" stroke-linecap="round" />
        </a>
        @endif
    @empty
    <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="L_ayVy5eefeE4aXbMChxL">
        <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #f8f8f8; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -198 -198 L 198 -198 L 198 198 L -198 198 z" stroke-linecap="round" />
    </a>
    @endforelse
</g>
<g transform="matrix(1.26 0 0 0.4 646.44 906.83)" id="eRwwNeXJ_lax4M1x3Ifo7"  >
    @forelse ( $siteplan->where('code_product', 'eRwwNeXJ_lax4M1x3Ifo7') as $hasil)
        @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
            <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill:#ffc107;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -198 -198 L 198 -198 L 198 198 L -198 198 z" stroke-linecap="round" />
        @elseif ($hasil->status == 'Terjual')
            <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill:#f50505; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -198 -198 L 198 -198 L 198 198 L -198 198 z" stroke-linecap="round" />
        @elseif ($hasil->status == 'Tersedia')
        <a href="#" data-toggle="modal" data-target="#modalBooking-eRwwNeXJ_lax4M1x3Ifo7">
            <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #f8f8f8; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -198 -198 L 198 -198 L 198 198 L -198 198 z" stroke-linecap="round" />
        </a>
        @endif
    @empty
    <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="eRwwNeXJ_lax4M1x3Ifo7">
        <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #f8f8f8; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -198 -198 L 198 -198 L 198 198 L -198 198 z" stroke-linecap="round" />
    </a>
    @endforelse
</g>
<g transform="matrix(1.26 0 0 0.4 646.44 1068.76)" id="FjubSsNtz9Udq9yah9c8H"  >
    @forelse ( $siteplan->where('code_product', 'FjubSsNtz9Udq9yah9c8H') as $hasil)
        @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
            <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill:#ffc107;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -198 -198 L 198 -198 L 198 198 L -198 198 z" stroke-linecap="round" />
        @elseif ($hasil->status == 'Terjual')
            <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill:#f50505; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -198 -198 L 198 -198 L 198 198 L -198 198 z" stroke-linecap="round" />
        @elseif ($hasil->status == 'Tersedia')
        <a href="#" data-toggle="modal" data-target="#modalBooking-FjubSsNtz9Udq9yah9c8H">
            <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #f8f8f8; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -198 -198 L 198 -198 L 198 198 L -198 198 z" stroke-linecap="round" />
        </a>
        @endif
    @empty
    <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="FjubSsNtz9Udq9yah9c8H">
        <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #f8f8f8; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -198 -198 L 198 -198 L 198 198 L -198 198 z" stroke-linecap="round" />
    </a>
    @endforelse
</g>
<g transform="matrix(1.26 0 0 0.4 646.44 1229.89)" id="5SQTMLVgwwrMJ_J3laTvg"  >
    @forelse ( $siteplan->where('code_product', '5SQTMLVgwwrMJ_J3laTvg') as $hasil)
        @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
            <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill:#ffc107; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -198 -198 L 198 -198 L 198 198 L -198 198 z" stroke-linecap="round" />
        @elseif ($hasil->status == 'Terjual')
            <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill:#f50505; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -198 -198 L 198 -198 L 198 198 L -198 198 z" stroke-linecap="round" />
        @elseif ($hasil->status == 'Tersedia')
        <a href="#" data-toggle="modal" data-target="#modalBooking-5SQTMLVgwwrMJ_J3laTvg">
            <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #f8f8f8; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -198 -198 L 198 -198 L 198 198 L -198 198 z" stroke-linecap="round" />
        </a>
        @endif
    @empty
    <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="5SQTMLVgwwrMJ_J3laTvg">
        <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #f8f8f8; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -198 -198 L 198 -198 L 198 198 L -198 198 z" stroke-linecap="round" />
    </a>
    @endforelse
</g>
<g transform="matrix(1.26 0 0 0.4 646.44 1391.82)" id="rMsz24LLeXeHAh7cmij5O"  >
    @forelse ( $siteplan->where('code_product', 'rMsz24LLeXeHAh7cmij5O') as $hasil)
        @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
            <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill:#ffc107;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -198 -198 L 198 -198 L 198 198 L -198 198 z" stroke-linecap="round" />
        @elseif ($hasil->status == 'Terjual')
            <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill:#f50505; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -198 -198 L 198 -198 L 198 198 L -198 198 z" stroke-linecap="round" />
        @elseif ($hasil->status == 'Tersedia')
        <a href="#" data-toggle="modal" data-target="#modalBooking-rMsz24LLeXeHAh7cmij5O">
            <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #f8f8f8; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -198 -198 L 198 -198 L 198 198 L -198 198 z" stroke-linecap="round" />
        </a>
        @endif
    @empty
    <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="rMsz24LLeXeHAh7cmij5O">
        <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #f8f8f8; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -198 -198 L 198 -198 L 198 198 L -198 198 z" stroke-linecap="round" />
    </a>
    @endforelse
</g>
<g transform="matrix(1.26 0 0 0.4 646.44 1552.95)" id="5grVhfI0DAJEPKPLtftgc"  >
    @forelse ( $siteplan->where('code_product', '5grVhfI0DAJEPKPLtftgc') as $hasil)
        @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
            <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill:#ffc107;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -198 -198 L 198 -198 L 198 198 L -198 198 z" stroke-linecap="round" />
        @elseif ($hasil->status == 'Terjual')
            <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill:#f50505; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -198 -198 L 198 -198 L 198 198 L -198 198 z" stroke-linecap="round" />
        @elseif ($hasil->status == 'Tersedia')
        <a href="#" data-toggle="modal" data-target="#modalBooking-5grVhfI0DAJEPKPLtftgc">
            <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #f8f8f8; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -198 -198 L 198 -198 L 198 198 L -198 198 z" stroke-linecap="round" />
        </a>
        @endif
    @empty
    <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="5grVhfI0DAJEPKPLtftgc">
        <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #f8f8f8; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -198 -198 L 198 -198 L 198 198 L -198 198 z" stroke-linecap="round" />
    </a>
    @endforelse
</g>
<g transform="matrix(1.26 0 0 0.4 646.44 1714.92)" id="svzFpFkhtuAorg-oYWbmw"  >
    @forelse ( $siteplan->where('code_product', 'svzFpFkhtuAorg-oYWbmw') as $hasil)
        @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
            <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill:#ffc107;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -198 -198 L 198 -198 L 198 198 L -198 198 z" stroke-linecap="round" />
        @elseif ($hasil->status == 'Terjual')
            <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill:#f50505; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -198 -198 L 198 -198 L 198 198 L -198 198 z" stroke-linecap="round" />
        @elseif ($hasil->status == 'Tersedia')
        <a href="#" data-toggle="modal" data-target="#modalBooking-svzFpFkhtuAorg-oYWbmw">
            <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #f8f8f8; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -198 -198 L 198 -198 L 198 198 L -198 198 z" stroke-linecap="round" />
        </a>
        @endif
    @empty
    <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="svzFpFkhtuAorg-oYWbmw">
        <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #f8f8f8; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -198 -198 L 198 -198 L 198 198 L -198 198 z" stroke-linecap="round" />
    </a>
    @endforelse
</g>
<g transform="matrix(1.26 0 0 0.4 646.44 1876.01)" id="cT72Cy_2pMxQF3m-nx1Yn"  >
    @forelse ( $siteplan->where('code_product', 'cT72Cy_2pMxQF3m-nx1Yn') as $hasil)
        @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
            <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill:#ffc107;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -198 -198 L 198 -198 L 198 198 L -198 198 z" stroke-linecap="round" />
        @elseif ($hasil->status == 'Terjual')
            <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill:#f50505; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -198 -198 L 198 -198 L 198 198 L -198 198 z" stroke-linecap="round" />
        @elseif ($hasil->status == 'Tersedia')
        <a href="#" data-toggle="modal" data-target="#modalBooking-cT72Cy_2pMxQF3m-nx1Yn">
            <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #f8f8f8; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -198 -198 L 198 -198 L 198 198 L -198 198 z" stroke-linecap="round" />
        </a>
        @endif
    @empty
    <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="cT72Cy_2pMxQF3m-nx1Yn">
        <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #f8f8f8; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -198 -198 L 198 -198 L 198 198 L -198 198 z" stroke-linecap="round" />
    </a>
    @endforelse
</g>
<g transform="matrix(1.26 0 0 0.4 646.44 2037.02)" id="hZ-l1ewt-uPI_ycbGuUWw"  >
    @forelse ( $siteplan->where('code_product', 'hZ-l1ewt-uPI_ycbGuUWw') as $hasil)
        @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
            <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill:#ffc107;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -198 -198 L 198 -198 L 198 198 L -198 198 z" stroke-linecap="round" />
        @elseif ($hasil->status == 'Terjual')
            <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill:#f50505; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -198 -198 L 198 -198 L 198 198 L -198 198 z" stroke-linecap="round" />
        @elseif ($hasil->status == 'Tersedia')
        <a href="#" data-toggle="modal" data-target="#modalBooking-hZ-l1ewt-uPI_ycbGuUWw">
            <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #f8f8f8; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -198 -198 L 198 -198 L 198 198 L -198 198 z" stroke-linecap="round" />
        </a>
        @endif
    @empty
    <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="hZ-l1ewt-uPI_ycbGuUWw">
        <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #f8f8f8; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -198 -198 L 198 -198 L 198 198 L -198 198 z" stroke-linecap="round" />
    </a>
    @endforelse
</g>
<g transform="matrix(1.26 0 0 0.4 646.44 2199.07)" id="VHmKIN5O6r0JDhQb_CBYH"  >
    @forelse ( $siteplan->where('code_product', 'VHmKIN5O6r0JDhQb_CBYH') as $hasil)
        @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
            <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill:#ffc107; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -198 -198 L 198 -198 L 198 198 L -198 198 z" stroke-linecap="round" />
        @elseif ($hasil->status == 'Terjual')
            <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill:#f50505; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -198 -198 L 198 -198 L 198 198 L -198 198 z" stroke-linecap="round" />
        @elseif ($hasil->status == 'Tersedia')
        <a href="#" data-toggle="modal" data-target="#modalBooking-VHmKIN5O6r0JDhQb_CBYH">
            <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #f8f8f8; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -198 -198 L 198 -198 L 198 198 L -198 198 z" stroke-linecap="round" />
        </a>
        @endif
    @empty
    <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="VHmKIN5O6r0JDhQb_CBYH">
        <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #f8f8f8; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -198 -198 L 198 -198 L 198 198 L -198 198 z" stroke-linecap="round" />
    </a>
    @endforelse
</g>
<g transform="matrix(1.26 0 0 0.4 646.44 2361.01)" id="P9jKRVSuu_4xPJWBEuBGw"  >
    @forelse ( $siteplan->where('code_product', 'P9jKRVSuu_4xPJWBEuBGw') as $hasil)
        @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
            <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill:#ffc107; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -198 -198 L 198 -198 L 198 198 L -198 198 z" stroke-linecap="round" />
        @elseif ($hasil->status == 'Terjual')
            <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill:#f50505; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -198 -198 L 198 -198 L 198 198 L -198 198 z" stroke-linecap="round" />
        @elseif ($hasil->status == 'Tersedia')
        <a href="#" data-toggle="modal" data-target="#modalBooking-P9jKRVSuu_4xPJWBEuBGw">
            <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #f8f8f8; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -198 -198 L 198 -198 L 198 198 L -198 198 z" stroke-linecap="round" />
        </a>
        @endif
    @empty
    <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="P9jKRVSuu_4xPJWBEuBGw">
        <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #f8f8f8; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -198 -198 L 198 -198 L 198 198 L -198 198 z" stroke-linecap="round" />
    </a>
    @endforelse
</g>
<g transform="matrix(1.26 0 0 0.4 646.44 2522.13)" id="SxcluGVzEH02R7bWpMEC1"  >
    @forelse ( $siteplan->where('code_product', 'SxcluGVzEH02R7bWpMEC1') as $hasil)
        @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
            <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill:#ffc107;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -198 -198 L 198 -198 L 198 198 L -198 198 z" stroke-linecap="round" />
        @elseif ($hasil->status == 'Terjual')
            <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill:#f50505; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -198 -198 L 198 -198 L 198 198 L -198 198 z" stroke-linecap="round" />
        @elseif ($hasil->status == 'Tersedia')
        <a href="#" data-toggle="modal" data-target="#modalBooking-SxcluGVzEH02R7bWpMEC1">
            <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #f8f8f8; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -198 -198 L 198 -198 L 198 198 L -198 198 z" stroke-linecap="round" />
        </a>
        @endif
    @empty
    <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="SxcluGVzEH02R7bWpMEC1">
        <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #f8f8f8; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -198 -198 L 198 -198 L 198 198 L -198 198 z" stroke-linecap="round" />
    </a>
    @endforelse
</g>
<g transform="matrix(1.26 0 0 0.4 646.44 2684.07)" id="hHOS8SAx0agBROF_nx9Bk"  >
    @forelse ( $siteplan->where('code_product', 'hHOS8SAx0agBROF_nx9Bk') as $hasil)
        @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
            <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill:#ffc107;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -198 -198 L 198 -198 L 198 198 L -198 198 z" stroke-linecap="round" />
        @elseif ($hasil->status == 'Terjual')
            <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill:#f50505; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -198 -198 L 198 -198 L 198 198 L -198 198 z" stroke-linecap="round" />
        @elseif ($hasil->status == 'Tersedia')
        <a href="#" data-toggle="modal" data-target="#modalBooking-hHOS8SAx0agBROF_nx9Bk">
            <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #f8f8f8; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -198 -198 L 198 -198 L 198 198 L -198 198 z" stroke-linecap="round" />
        </a>
        @endif
    @empty
    <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="hHOS8SAx0agBROF_nx9Bk">
        <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #f8f8f8; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -198 -198 L 198 -198 L 198 198 L -198 198 z" stroke-linecap="round" />
    </a>
    @endforelse
</g>
<g transform="matrix(1.26 0 0 0.4 646.44 2846.78)" id="8NO1k-oIojPVKZxF6cwJv"  >
    @forelse ( $siteplan->where('code_product', '8NO1k-oIojPVKZxF6cwJv') as $hasil)
        @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
            <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill:#ffc107;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -198 -198 L 198 -198 L 198 198 L -198 198 z" stroke-linecap="round" />
        @elseif ($hasil->status == 'Terjual')
            <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill:#f50505;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -198 -198 L 198 -198 L 198 198 L -198 198 z" stroke-linecap="round" />
        @elseif ($hasil->status == 'Tersedia')
        <a href="#" data-toggle="modal" data-target="#modalBooking-8NO1k-oIojPVKZxF6cwJv">
            <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #f8f8f8; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -198 -198 L 198 -198 L 198 198 L -198 198 z" stroke-linecap="round" />
        </a>
        @endif
    @empty
    <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="8NO1k-oIojPVKZxF6cwJv">
        <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #f8f8f8; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -198 -198 L 198 -198 L 198 198 L -198 198 z" stroke-linecap="round" />
    </a>
    @endforelse
</g>
<g transform="matrix(1.26 0 0 0.4 646.44 3008.72)" id="DilF0szcLszGdv30JdPr8"  >
    @forelse ( $siteplan->where('code_product', 'DilF0szcLszGdv30JdPr8') as $hasil)
        @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
            <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill:#ffc107;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -198 -198 L 198 -198 L 198 198 L -198 198 z" stroke-linecap="round" />
        @elseif ($hasil->status == 'Terjual')
            <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill:#f50505; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -198 -198 L 198 -198 L 198 198 L -198 198 z" stroke-linecap="round" />
        @elseif ($hasil->status == 'Tersedia')
        <a href="#" data-toggle="modal" data-target="#modalBooking-DilF0szcLszGdv30JdPr8">
            <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #f8f8f8; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -198 -198 L 198 -198 L 198 198 L -198 198 z" stroke-linecap="round" />
        </a>
        @endif
    @empty
    <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="DilF0szcLszGdv30JdPr8">
        <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #f8f8f8; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -198 -198 L 198 -198 L 198 198 L -198 198 z" stroke-linecap="round" />
    </a>
    @endforelse
</g>
<g transform="matrix(13.14 0 0 0.53 1499.7 3140.82)" id="xQeo2e2jKFVUXcTsdaVXc"  >
<path style="stroke: rgb(138,70,19); stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(74,73,73); fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -114 -114 L 114 -114 L 114 114 L -114 114 z" stroke-linecap="round" />
</g>
<g transform="matrix(1 0 0 1 559.88 124.88)" style="" id="QsnnM4VOqlm5jXCP5lfyk">
		<text xml:space="preserve" font-family="Open Sans" font-size="63" font-style="normal" font-weight="700" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(255,255,255); fill-rule: nonzero; opacity: 1; white-space: pre;"><tspan x="-201.72" y="13.33">Jalur 2</tspan></text>
</g>
<g transform="matrix(1 0 0 1 1566.54 124.88)" style="" id="W0Dci12l5WXdLihI4Lukn"  >
		<text xml:space="preserve" font-family="Open Sans" font-size="63" font-style="normal" font-weight="700" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(255,255,255); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-201.72" y="13.33" >Jalur 2</tspan></text>
</g>
<g transform="matrix(1 0 0 1 2504.46 124.88)" style="" id="T2yfVkOQzBnu0ECZqPZ-K"  >
		<text xml:space="preserve" font-family="Open Sans" font-size="63" font-style="normal" font-weight="700" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(255,255,255); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-201.72" y="13.33" >Jalur 2</tspan></text>
</g>
<g transform="matrix(1 0 0 1 527.15 3140.82)" style="" id="W6hsH17SMez0SYzNEE3-V"  >
		<text xml:space="preserve" font-family="Open Sans" font-size="63" font-style="normal" font-weight="700" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(255,255,255); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-201.72" y="13.33" >Jalur 3</tspan></text>
</g>
<g transform="matrix(1 0 0 1 1533.81 3140.82)" style="" id="eTZIlzEe_0bX1s-mieNJ_"  >
		<text xml:space="preserve" font-family="Open Sans" font-size="63" font-style="normal" font-weight="700" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(255,255,255); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-201.72" y="13.33" >Jalur 3</tspan></text>
</g>
<g transform="matrix(1 0 0 1 2471.73 3140.82)" style="" id="MgJTEmSKZaSAH1Xo5zPvd"  >
		<text xml:space="preserve" font-family="Open Sans" font-size="63" font-style="normal" font-weight="700" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(255,255,255); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-201.72" y="13.33" >Jalur 3</tspan></text>
</g>
<g transform="matrix(0 -1 1 0 951.44 729.47)" style="" id="sEsO1tjIfDa-FLDLwNZK1"  >
		<text xml:space="preserve" font-family="Open Sans" font-size="63" font-style="normal" font-weight="700" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(255,255,255); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-355.3" y="13.33" >Jalan Komplek 5 Meter</tspan></text>
</g>
<g transform="matrix(0 -1 1 0 947.84 2071.4)" style="" id="bEF2DhbD7sANui802VtpR"  >
		<text xml:space="preserve" font-family="Open Sans" font-size="63" font-style="normal" font-weight="700" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(255,255,255); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-355.3" y="13.33" >Jalan Komplek 5 Meter</tspan></text>
</g>
<g transform="matrix(0 -1 1 0 2052.08 721.17)" style="" id="ytidVkxCjEsMrhHJvokN6"  >
		<text xml:space="preserve" font-family="Open Sans" font-size="63" font-style="normal" font-weight="700" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(255,255,255); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-355.3" y="13.33" >Jalan Komplek 5 Meter</tspan></text>
</g>
<g transform="matrix(0 -1 1 0 2052.08 2063.09)" style="" id="f5JinAcyVDCPLmACdd0tu"  >
		<text xml:space="preserve" font-family="Open Sans" font-size="63" font-style="normal" font-weight="700" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(255,255,255); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-355.3" y="13.33" >Jalan Komplek 5 Meter</tspan></text>
</g>
<g transform="matrix(1 0 0 1 646.44 260.7)" style="" id="yBhlrvQ9GZhF3yxIhTXmQ"  >
		<text xml:space="preserve" font-family="Open Sans" font-size="63" font-style="normal" font-weight="700" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-132.88" y="18.01" >BLOK A1</tspan></text>
</g>
<g transform="matrix(1 0 0 1 646.44 422.64)" style="" id="3-UynMmnr1IxsrZdhbAP-"  >
		<text xml:space="preserve" font-family="Open Sans" font-size="63" font-style="normal" font-weight="700" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-132.88" y="18.02" >BLOK A2</tspan></text>
</g>
<g transform="matrix(1 0 0 1 646.44 583.76)" style="" id="COiy4FixMRcSBsUoIWARX"  >
		<text xml:space="preserve" font-family="Open Sans" font-size="63" font-style="normal" font-weight="700" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-132.88" y="18.02" >BLOK A3</tspan></text>
</g>
<g transform="matrix(1 0 0 1 646.44 745.7)" style="" id="6HA3YGLvFqPb-md0VmqdX"  >
		<text xml:space="preserve" font-family="Open Sans" font-size="63" font-style="normal" font-weight="700" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-132.88" y="18.02" >BLOK A4</tspan></text>
</g>
<g transform="matrix(1 0 0 1 646.44 906.83)" style="" id="ElPNSyeIBCndnpLa91d_d"  >
		<text xml:space="preserve" font-family="Open Sans" font-size="63" font-style="normal" font-weight="700" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-132.88" y="18.02" >BLOK A5</tspan></text>
</g>
<g transform="matrix(1 0 0 1 646.44 1068.76)" style="" id="Z8T3-_zo8xXWUV83GPaIs"  >
		<text xml:space="preserve" font-family="Open Sans" font-size="63" font-style="normal" font-weight="700" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-132.88" y="18.02" >BLOK A6</tspan></text>
</g>
<g transform="matrix(1 0 0 1 646.44 1229.89)" style="" id="6uANWuyZNXEC6n2vYC_yE"  >
		<text xml:space="preserve" font-family="Open Sans" font-size="63" font-style="normal" font-weight="700" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-132.88" y="18.02" >BLOK A7</tspan></text>
</g>
<g transform="matrix(1 0 0 1 646.44 1391.19)" style="" id="oSNt7B7-qqJoe4gJ6ow5B"  >
		<text xml:space="preserve" font-family="Open Sans" font-size="63" font-style="normal" font-weight="700" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-132.88" y="18.02" >BLOK A8</tspan></text>
</g>
<g transform="matrix(1 0 0 1 646.44 1554.67)" style="" id="ToQTMisbCMV90bWQS3Afi"  >
		<text xml:space="preserve" font-family="Open Sans" font-size="63" font-style="normal" font-weight="700" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-132.88" y="18.02" >BLOK A9</tspan></text>
</g>
<g transform="matrix(1 0 0 1 646.44 1716.92)" style="" id="hJvLE31ulfAbs5zHCyKTu"  >
		<text xml:space="preserve" font-family="Open Sans" font-size="63" font-style="normal" font-weight="700" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-150.89" y="18.02" >BLOK A10</tspan></text>
</g>
<g transform="matrix(1 0 0 1 646.44 1876.01)" style="" id="urGqELwOa7Z0X_xjYQK-Y"  >
		<text xml:space="preserve" font-family="Open Sans" font-size="63" font-style="normal" font-weight="700" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-150.89" y="18.02" >BLOK A11</tspan></text>
</g>
<g transform="matrix(1 0 0 1 646.44 2038.26)" style="" id="iEDXNaOoxYWswG70UUGzZ"  >
		<text xml:space="preserve" font-family="Open Sans" font-size="63" font-style="normal" font-weight="700" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-150.89" y="18.02" >BLOK A12</tspan></text>
</g>
<g transform="matrix(1 0 0 1 646.44 2199.85)" style="" id="CaDORKlwQ-uf-Ooe0h5W9"  >
		<text xml:space="preserve" font-family="Open Sans" font-size="63" font-style="normal" font-weight="700" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-150.89" y="18.02" >BLOK A13</tspan></text>
</g>
<g transform="matrix(1 0 0 1 646.44 2362.11)" style="" id="alacDy8D7licf-e-izY6h"  >
		<text xml:space="preserve" font-family="Open Sans" font-size="63" font-style="normal" font-weight="700" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-150.89" y="18.02" >BLOK A14</tspan></text>
</g>
<g transform="matrix(1 0 0 1 646.44 2522.13)" style="" id="JLIli2uZFQs0dU_dcMRFp"  >
		<text xml:space="preserve" font-family="Open Sans" font-size="63" font-style="normal" font-weight="700" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-150.89" y="18.02" >BLOK A15</tspan></text>
</g>
<g transform="matrix(1 0 0 1 646.44 2685.17)" style="" id="FSL1qlp3bIXkJh65-Un6_"  >
		<text xml:space="preserve" font-family="Open Sans" font-size="63" font-style="normal" font-weight="700" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-150.89" y="18.02" >BLOK A16</tspan></text>
</g>
<g transform="matrix(1 0 0 1 646.44 2855.33)" style="" id="pj_aLApfZooxm9Op3k-Ug"  >
		<text xml:space="preserve" font-family="Open Sans" font-size="63" font-style="normal" font-weight="700" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-150.89" y="18.02" >BLOK A17</tspan></text>
</g>
<g transform="matrix(1 0 0 1 646.44 3008.72)" style="" id="w5IhHvMwO-GAd8cbfPLCO"  >
		<text xml:space="preserve" font-family="Open Sans" font-size="63" font-style="normal" font-weight="700" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-150.89" y="18.02" >BLOK A18</tspan></text>
</g>
<g transform="matrix(1 0 0 1 1248.98 260.36)" style="" id="fNZ15-dDJz1YzjMr3f1g1"  >
		<text xml:space="preserve" font-family="Open Sans" font-size="63" font-style="normal" font-weight="700" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-132.31" y="18.02" >BLOK B1</tspan></text>
</g>
<g transform="matrix(1 0 0 1 1248.98 422.3)" style="" id="65VmjZvxhQid_KTDZMk2M"  >
		<text xml:space="preserve" font-family="Open Sans" font-size="63" font-style="normal" font-weight="700" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-132.31" y="18.02" >BLOK B2</tspan></text>
</g>
<g transform="matrix(1 0 0 1 1248.98 583.42)" style="" id="EyQymeEEm8VQIfkuQOUWE"  >
		<text xml:space="preserve" font-family="Open Sans" font-size="63" font-style="normal" font-weight="700" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-132.31" y="18.02" >BLOK B3</tspan></text>
</g>
<g transform="matrix(1 0 0 1 1248.98 745.36)" style="" id="NvztHARG4nTcdlqDOthOu"  >
		<text xml:space="preserve" font-family="Open Sans" font-size="63" font-style="normal" font-weight="700" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-132.31" y="18.02" >BLOK B4</tspan></text>
</g>
<g transform="matrix(1 0 0 1 1248.98 906.49)" style="" id="bixlwSl4BzQ2_nJU6XJnt"  >
		<text xml:space="preserve" font-family="Open Sans" font-size="63" font-style="normal" font-weight="700" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-132.31" y="18.02" >BLOK B5</tspan></text>
</g>
<g transform="matrix(1 0 0 1 1248.98 1068.42)" style="" id="_jrHe__BAc0Xq3CJ1Nher"  >
		<text xml:space="preserve" font-family="Open Sans" font-size="63" font-style="normal" font-weight="700" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-132.31" y="18.02" >BLOK B6</tspan></text>
</g>
<g transform="matrix(1 0 0 1 1248.98 1229.55)" style="" id="-RvUOwnxPYGxZhjlw2don"  >
		<text xml:space="preserve" font-family="Open Sans" font-size="63" font-style="normal" font-weight="700" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-132.31" y="18.02" >BLOK B7</tspan></text>
</g>
<g transform="matrix(1 0 0 1 1248.98 1390.86)" style="" id="pYDQuOyG1qG-sGBFOFJbg"  >
		<text xml:space="preserve" font-family="Open Sans" font-size="63" font-style="normal" font-weight="700" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-132.31" y="18.02" >BLOK B8</tspan></text>
</g>
<g transform="matrix(1 0 0 1 1248.46 1554.67)" style="" id="RoRX6WFE_rr4sqIPUIkXF"  >
		<text xml:space="preserve" font-family="Open Sans" font-size="63" font-style="normal" font-weight="700" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-132.31" y="18.02" >BLOK B9</tspan></text>
</g>
<g transform="matrix(1 0 0 1 1248.98 1716.59)" style="" id="rG_B1lHG_Hn594fVhaLIx"  >
		<text xml:space="preserve" font-family="Open Sans" font-size="63" font-style="normal" font-weight="700" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-150.32" y="18.02" >BLOK B10</tspan></text>
</g>
<g transform="matrix(1 0 0 1 1248.98 1875.67)" style="" id="2jj9AzIheDSY6kCgv0Kh4"  >
		<text xml:space="preserve" font-family="Open Sans" font-size="63" font-style="normal" font-weight="700" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-150.32" y="18.02" >BLOK B11</tspan></text>
</g>
<g transform="matrix(1 0 0 1 1248.98 2037.92)" style="" id="jf6XBlRFMgvoP1sVG8VC2"  >
		<text xml:space="preserve" font-family="Open Sans" font-size="63" font-style="normal" font-weight="700" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-150.32" y="18.02" >BLOK B12</tspan></text>
</g>
<g transform="matrix(1 0 0 1 1248.98 2199.52)" style="" id="q8Dy07Xfb35jVDkl4ax8B"  >
		<text xml:space="preserve" font-family="Open Sans" font-size="63" font-style="normal" font-weight="700" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-150.32" y="18.02" >BLOK B13</tspan></text>
</g>
<g transform="matrix(1 0 0 1 1248.98 2361.78)" style="" id="HJT_XiasgKJjMr_bybLtt"  >
		<text xml:space="preserve" font-family="Open Sans" font-size="63" font-style="normal" font-weight="700" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-150.32" y="18.02" >BLOK B14</tspan></text>
</g>
<g transform="matrix(1 0 0 1 1248.98 2521.79)" style="" id="um0dX_f5p-qXy-SwJEcEI"  >
		<text xml:space="preserve" font-family="Open Sans" font-size="63" font-style="normal" font-weight="700" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-150.32" y="18.02" >BLOK B15</tspan></text>
</g>
<g transform="matrix(1 0 0 1 1248.98 2684.84)" style="" id="O9xZkOcdYvCnyVPgFrn0m"  >
		<text xml:space="preserve" font-family="Open Sans" font-size="63" font-style="normal" font-weight="700" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-150.32" y="18.02" >BLOK B16</tspan></text>
</g>
<g transform="matrix(1 0 0 1 1248.98 2855)" style="" id="zQvVziOesGYZexQLwStQY"  >
		<text xml:space="preserve" font-family="Open Sans" font-size="63" font-style="normal" font-weight="700" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-150.32" y="18.02" >BLOK B17</tspan></text>
</g>
<g transform="matrix(1 0 0 1 1248.98 3008.38)" style="" id="tTzpcsJvNgh4But_H4IzI"  >
		<text xml:space="preserve" font-family="Open Sans" font-size="63" font-style="normal" font-weight="700" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-150.32" y="18.02" >BLOK B18</tspan></text>
</g>
<g transform="matrix(1 0 0 1 1768.76 260.92)" style="" id="UiN1UNjGieySV80eDFu95"  >
		<text xml:space="preserve" font-family="Open Sans" font-size="63" font-style="normal" font-weight="700" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-131.21" y="18.02" >BLOK C1</tspan></text>
</g>
<g transform="matrix(1 0 0 1 1768.76 422.86)" style="" id="A08IrPiGkQN8l1kEWmbHF"  >
		<text xml:space="preserve" font-family="Open Sans" font-size="63" font-style="normal" font-weight="700" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-131.21" y="18.02" >BLOK C2</tspan></text>
</g>
<g transform="matrix(1 0 0 1 1768.76 584.07)" style="" id="JCZkuk4m95tErX8dgL-Wi"  >
		<text xml:space="preserve" font-family="Open Sans" font-size="63" font-style="normal" font-weight="700" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-131.21" y="18.02" >BLOK C3</tspan></text>
</g>
<g transform="matrix(1 0 0 1 1768.76 745.92)" style="" id="G2SVBq09M7ZcU6zWCROn-"  >
		<text xml:space="preserve" font-family="Open Sans" font-size="63" font-style="normal" font-weight="700" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-131.21" y="18.02" >BLOK C4</tspan></text>
</g>
<g transform="matrix(1 0 0 1 1768.76 907.05)" style="" id="dKZpEgm95aZJmTrQwLiLc"  >
		<text xml:space="preserve" font-family="Open Sans" font-size="63" font-style="normal" font-weight="700" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-131.21" y="18.02" >BLOK C5</tspan></text>
</g>
<g transform="matrix(1 0 0 1 1768.76 1068.98)" style="" id="s9Ld82s_cqYdIHcC_U1Sb"  >
		<text xml:space="preserve" font-family="Open Sans" font-size="63" font-style="normal" font-weight="700" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-131.21" y="18.02" >BLOK C6</tspan></text>
</g>
<g transform="matrix(1 0 0 1 1768.76 1230.07)" style="" id="yMg5jEzSmMI0Pceze14Iq"  >
		<text xml:space="preserve" font-family="Open Sans" font-size="63" font-style="normal" font-weight="700" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-131.21" y="18.02" >BLOK C7</tspan></text>
</g>
<g transform="matrix(1 0 0 1 1768.76 1391.42)" style="" id="zMkDJddDFSNZE4dag3TN8"  >
		<text xml:space="preserve" font-family="Open Sans" font-size="63" font-style="normal" font-weight="700" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-131.21" y="18.02" >BLOK C8</tspan></text>
</g>
<g transform="matrix(1 0 0 1 1768.76 1554.9)" style="" id="0vTUr8Z5YCXR4JxWgDUhI"  >
		<text xml:space="preserve" font-family="Open Sans" font-size="63" font-style="normal" font-weight="700" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-131.21" y="18.02" >BLOK C9</tspan></text>
</g>
<g transform="matrix(1 0 0 1 1768.76 1717.15)" style="" id="TyXinjZQUmiCkcrHgpX9n"  >
		<text xml:space="preserve" font-family="Open Sans" font-size="63" font-style="normal" font-weight="700" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-149.23" y="18.02" >BLOK C10</tspan></text>
</g>
<g transform="matrix(1 0 0 1 1768.76 1876.23)" style="" id="u6UbFRuFHXUXnmxtVo8Qh"  >
		<text xml:space="preserve" font-family="Open Sans" font-size="63" font-style="normal" font-weight="700" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-149.23" y="18.02" >BLOK C11</tspan></text>
</g>
<g transform="matrix(1 0 0 1 1768.76 2038.48)" style="" id="5P6DWsa08rirUmWJCGG8-"  >
		<text xml:space="preserve" font-family="Open Sans" font-size="63" font-style="normal" font-weight="700" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-149.23" y="18.02" >BLOK C12</tspan></text>
</g>
<g transform="matrix(1 0 0 1 1768.76 2200.08)" style="" id="BRNEYISnN-14lx6K4vHlG"  >
		<text xml:space="preserve" font-family="Open Sans" font-size="63" font-style="normal" font-weight="700" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-149.23" y="18.02" >BLOK C13</tspan></text>
</g>
<g transform="matrix(1 0 0 1 1768.76 2362.34)" style="" id="wfOTqp6K_WoR9wLKZVHKa"  >
		<text xml:space="preserve" font-family="Open Sans" font-size="63" font-style="normal" font-weight="700" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-149.23" y="18.02" >BLOK C14</tspan></text>
</g>
<g transform="matrix(1 0 0 1 1768.76 2522.35)" style="" id="tIFZ15JsLFlPJI6THfa4p"  >
		<text xml:space="preserve" font-family="Open Sans" font-size="63" font-style="normal" font-weight="700" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-149.23" y="18.02" >BLOK C15</tspan></text>
</g>
<g transform="matrix(1 0 0 1 1768.76 2685.4)" style="" id="IIvSy0EhEVhBhQ4362Ptn"  >
		<text xml:space="preserve" font-family="Open Sans" font-size="63" font-style="normal" font-weight="700" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-149.23" y="18.02" >BLOK C16</tspan></text>
</g>
<g transform="matrix(1 0 0 1 1768.76 2855.56)" style="" id="XxMibzLoQgC_K9G3jUh9F"  >
		<text xml:space="preserve" font-family="Open Sans" font-size="63" font-style="normal" font-weight="700" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-149.23" y="18.02" >BLOK C17</tspan></text>
</g>
<g transform="matrix(1 0 0 1 1768.76 3008.94)" style="" id="RlGqwTNLy14Cx4M8ViZ5X"  >
		<text xml:space="preserve" font-family="Open Sans" font-size="63" font-style="normal" font-weight="700" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-149.23" y="18.02" >BLOK C18</tspan></text>
</g>
<g transform="matrix(1 0 0 1 2353.22 259.52)" style="" id="VmI09_COdMYNKXL5BxYrl"  >
		<text xml:space="preserve" font-family="Open Sans" font-size="63" font-style="normal" font-weight="700" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-134.46" y="18.02" >BLOK D1</tspan></text>
</g>
<g transform="matrix(1 0 0 1 2353.22 421.46)" style="" id="vluYgy5WQOSdJ_KU3Avt1"  >
		<text xml:space="preserve" font-family="Open Sans" font-size="63" font-style="normal" font-weight="700" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-134.46" y="18.02" >BLOK D2</tspan></text>
</g>
<g transform="matrix(1 0 0 1 2353.22 582.58)" style="" id="tVCd_EKTObLkpaXL2qh_a"  >
		<text xml:space="preserve" font-family="Open Sans" font-size="63" font-style="normal" font-weight="700" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-134.46" y="18.02" >BLOK D3</tspan></text>
</g>
<g transform="matrix(1 0 0 1 2353.22 744.52)" style="" id="2t91ktT7mXTPVpFehn5Qt"  >
		<text xml:space="preserve" font-family="Open Sans" font-size="63" font-style="normal" font-weight="700" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-134.46" y="18.02" >BLOK D4</tspan></text>
</g>
<g transform="matrix(1 0 0 1 2353.22 905.65)" style="" id="5mEfcK8CldzMIH744lQxi"  >
		<text xml:space="preserve" font-family="Open Sans" font-size="63" font-style="normal" font-weight="700" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-134.46" y="18.02" >BLOK D5</tspan></text>
</g>
<g transform="matrix(1 0 0 1 2353.22 1067.58)" style="" id="VEEqyR7NE2btrkVql9-UN"  >
		<text xml:space="preserve" font-family="Open Sans" font-size="63" font-style="normal" font-weight="700" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-134.46" y="18.02" >BLOK D6</tspan></text>
</g>
<g transform="matrix(1 0 0 1 2353.22 1228.71)" style="" id="EjCOglhluC6yqpXqo7VsL"  >
		<text xml:space="preserve" font-family="Open Sans" font-size="63" font-style="normal" font-weight="700" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-134.46" y="18.02" >BLOK D7</tspan></text>
</g>
<g transform="matrix(1 0 0 1 2353.22 1390.02)" style="" id="N7GpIZi1rdKJzioluzq7v"  >
		<text xml:space="preserve" font-family="Open Sans" font-size="63" font-style="normal" font-weight="700" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-134.46" y="18.02" >BLOK D8</tspan></text>
</g>
<g transform="matrix(1 0 0 1 2353.22 1553.5)" style="" id="lGVHRFXJtlWRzrJBRz_FY"  >
		<text xml:space="preserve" font-family="Open Sans" font-size="63" font-style="normal" font-weight="700" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-134.46" y="18.02" >BLOK D9</tspan></text>
</g>
<g transform="matrix(1 0 0 1 2353.22 1715.75)" style="" id="MKYgo5n_yNxyycO4Csicl"  >
		<text xml:space="preserve" font-family="Open Sans" font-size="63" font-style="normal" font-weight="700" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-152.47" y="18.02" >BLOK D10</tspan></text>
</g>
<g transform="matrix(1 0 0 1 2353.22 1874.83)" style="" id="M5c6NCABdpYPLo2vw-JwQ"  >
		<text xml:space="preserve" font-family="Open Sans" font-size="63" font-style="normal" font-weight="700" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-152.47" y="18.02" >BLOK D11</tspan></text>
</g>
<g transform="matrix(1 0 0 1 2353.22 2037.08)" style="" id="Bd-PgR0-B5hLTukyi-xpb"  >
		<text xml:space="preserve" font-family="Open Sans" font-size="63" font-style="normal" font-weight="700" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-152.47" y="18.02" >BLOK D12</tspan></text>
</g>
<g transform="matrix(1 0 0 1 2353.22 2198.68)" style="" id="MN7E9gMMG-rOtw0O3O5A_"  >
		<text xml:space="preserve" font-family="Open Sans" font-size="63" font-style="normal" font-weight="700" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-152.47" y="18.02" >BLOK D13</tspan></text>
</g>
<g transform="matrix(1 0 0 1 2359.47 2361.01)" style="" id="5Fdl-C5dzSwJ6DhE-iMA6"  >
		<text xml:space="preserve" font-family="Open Sans" font-size="63" font-style="normal" font-weight="700" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-152.47" y="18.02" >BLOK D14</tspan></text>
</g>
<g transform="matrix(1 0 0 1 2353.22 2520.95)" style="" id="hKFEXLONlyjZxnMCVhz6S"  >
		<text xml:space="preserve" font-family="Open Sans" font-size="63" font-style="normal" font-weight="700" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-152.47" y="18.02" >BLOK D15</tspan></text>
</g>
<g transform="matrix(1 0 0 1 2350.23 2684.07)" style="" id="tAM4ZZuIBiZRTkUtEb_mG"  >
		<text xml:space="preserve" font-family="Open Sans" font-size="63" font-style="normal" font-weight="700" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-152.47" y="18.02" >BLOK D16</tspan></text>
</g>
<g transform="matrix(1 0 0 1 2353.22 2854.16)" style="" id="YzalTLh99FqraWHZhPkxc"  >
		<text xml:space="preserve" font-family="Open Sans" font-size="63" font-style="normal" font-weight="700" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-152.47" y="18.02" >BLOK D17</tspan></text>
</g>
<g transform="matrix(1 0 0 1 2353.22 3007.54)" style="" id="nkRWg4BCCU27HaaSQyWk0"  >
		<text xml:space="preserve" font-family="Open Sans" font-size="63" font-style="normal" font-weight="700" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-152.47" y="18.02" >BLOK D18</tspan></text>
</g>
</svg>
