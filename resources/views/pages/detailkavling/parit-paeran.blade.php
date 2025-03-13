<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="100%"  viewBox="0 0 500 1400" xml:space="preserve">
    <g transform="matrix(1 0 0 1.08 277.87 667.92)" id="ytEtziy2tJqZqK_Njwguv"  >
    <path style="stroke: rgb(0,0,0); stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(123,123,123); fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -7.5 -553.4225 L 7.5 -553.4225 L 7.5 553.4225 L -7.5 553.4225 z" stroke-linecap="round" />
    </g>

    <g transform="matrix(0.98 0 0 0.6 239.67 178.88)" id="6t2U28oJqJeN77iiAr9ha"  >
        @forelse ( $siteplan->where('code_product', '6t2U28oJqJeN77iiAr9ha') as $hasil)
            @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -30.40061 -31 L 31.59939 -31 L 31.59939 31 L -31.599400000000003 31 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style="  fill:#f50505; stroke: rgb(0,0,0); stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -30.40061 -31 L 31.59939 -31 L 31.59939 31 L -31.599400000000003 31 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-6t2U28oJqJeN77iiAr9ha">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -30.40061 -31 L 31.59939 -31 L 31.59939 31 L -31.599400000000003 31 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="6t2U28oJqJeN77iiAr9ha">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -30.40061 -31 L 31.59939 -31 L 31.59939 31 L -31.599400000000003 31 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>

    <g transform="matrix(1 0 0 0.6 238.82 216.03)" id="QR9rxG9PvgkVrelqJbFxM"  >
        @forelse ( $siteplan->where('code_product', 'QR9rxG9PvgkVrelqJbFxM') as $hasil)
            @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style=" fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -30.04711 -31 L 31.95289 -31 L 31.95289 31 L -31.952900000000003 31 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style="  fill:#f50505; stroke: rgb(0,0,0); stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -30.04711 -31 L 31.95289 -31 L 31.95289 31 L -31.952900000000003 31 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-QR9rxG9PvgkVrelqJbFxM">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -30.04711 -31 L 31.95289 -31 L 31.95289 31 L -31.952900000000003 31 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="QR9rxG9PvgkVrelqJbFxM">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -30.04711 -31 L 31.95289 -31 L 31.95289 31 L -31.952900000000003 31 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>

    <g transform="matrix(1.02 0 0 0.59 238.27 253.03)" id="JZ7mgQyeZAXiIBiW66Sx"  >

        @forelse ( $siteplan->where('code_product', 'JZ7mgQyeZAXiIBiW66Sx') as $hasil)
            @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -30.40061 -31 L 31.59939 -31 L 31.59939 31 L -31.599400000000003 31 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style=" fill:#f50505; stroke: rgb(0,0,0); stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -30.40061 -31 L 31.59939 -31 L 31.59939 31 L -31.599400000000003 31 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-JZ7mgQyeZAXiIBiW66Sx">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -30.40061 -31 L 31.59939 -31 L 31.59939 31 L -31.599400000000003 31 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="JZ7mgQyeZAXiIBiW66Sx">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -30.40061 -31 L 31.59939 -31 L 31.59939 31 L -31.599400000000003 31 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>

    <g transform="matrix(1.04 0 0 0.59 237.88 289.87)" id="E2k4ljSrc2ZJDHXxoSDnQ"  >
        @forelse ( $siteplan->where('code_product', 'E2k4ljSrc2ZJDHXxoSDnQ') as $hasil)
            @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -30.40061 -31 L 31.59939 -31 L 31.59939 31 L -31.599400000000003 31 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style=" fill:#f50505; stroke: rgb(0,0,0); stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -30.40061 -31 L 31.59939 -31 L 31.59939 31 L -31.599400000000003 31 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-E2k4ljSrc2ZJDHXxoSDnQ">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -30.40061 -31 L 31.59939 -31 L 31.59939 31 L -31.599400000000003 31 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="E2k4ljSrc2ZJDHXxoSDnQ">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -30.40061 -31 L 31.59939 -31 L 31.59939 31 L -31.599400000000003 31 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>

    <g transform="matrix(1.06 0 0 0.6 236.83 326.87)" id="OxsWFnbCHLf8indQwrX1"  >

        @forelse ( $siteplan->where('code_product', 'OxsWFnbCHLf8indQwrX1') as $hasil)
            @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -30.04711 -31 L 31.95289 -31 L 31.95289 31 L -31.952900000000003 31 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style="fill:#f50505; stroke: rgb(0,0,0); stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -30.04711 -31 L 31.95289 -31 L 31.95289 31 L -31.952900000000003 31 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-OxsWFnbCHLf8indQwrX1">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -30.04711 -31 L 31.95289 -31 L 31.95289 31 L -31.952900000000003 31 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="OxsWFnbCHLf8indQwrX1">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -30.04711 -31 L 31.95289 -31 L 31.95289 31 L -31.952900000000003 31 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>

    <g transform="matrix(1.08 0 0 0.59 236.24 363.87)" id="GTsSMVzuXkDFSGVXFzvMu"  >
        @forelse ( $siteplan->where('code_product', 'GTsSMVzuXkDFSGVXFzvMu') as $hasil)
            @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -30.40061 -31 L 31.59939 -31 L 31.59939 31 L -31.599400000000003 31 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style="fill:#f50505;stroke: rgb(0,0,0); stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -30.40061 -31 L 31.59939 -31 L 31.59939 31 L -31.599400000000003 31 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-GTsSMVzuXkDFSGVXFzvMu">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -30.40061 -31 L 31.59939 -31 L 31.59939 31 L -31.599400000000003 31 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="GTsSMVzuXkDFSGVXFzvMu">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -30.40061 -31 L 31.59939 -31 L 31.59939 31 L -31.599400000000003 31 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>

    <g transform="matrix(1.1 0 0 0.59 235.65 400.57)" id="QkhuT6XM0EeiyzBN1A2W7"  >
        @forelse ( $siteplan->where('code_product', 'QkhuT6XM0EeiyzBN1A2W7') as $hasil)
            @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style=" fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -30.40061 -31 L 31.59939 -31 L 31.59939 31 L -31.599400000000003 31 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style=" fill:#f50505;stroke: rgb(0,0,0); stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -30.40061 -31 L 31.59939 -31 L 31.59939 31 L -31.599400000000003 31 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-QkhuT6XM0EeiyzBN1A2W7">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -30.40061 -31 L 31.59939 -31 L 31.59939 31 L -31.599400000000003 31 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="QkhuT6XM0EeiyzBN1A2W7">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -30.40061 -31 L 31.59939 -31 L 31.59939 31 L -31.599400000000003 31 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>

    <g transform="matrix(1.12 0 0 0.6 234.7 437.57)" id="9_VTa8oFpuF2iR74Z60C2"  >
        @forelse ( $siteplan->where('code_product', '9_VTa8oFpuF2iR74Z60C2') as $hasil)
            @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -30.04711 -31 L 31.95289 -31 L 31.95289 31 L -31.952900000000003 31 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style="fill:#f50505;stroke: rgb(0,0,0); stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -30.04711 -31 L 31.95289 -31 L 31.95289 31 L -31.952900000000003 31 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-9_VTa8oFpuF2iR74Z60C2">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -30.04711 -31 L 31.95289 -31 L 31.95289 31 L -31.952900000000003 31 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="9_VTa8oFpuF2iR74Z60C2">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -30.04711 -31 L 31.95289 -31 L 31.95289 31 L -31.952900000000003 31 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>

    <g transform="matrix(1.14 0 0 0.59 234.07 473.72)" id="rW_eahQ_CwvbM0DULl8zc"  >
        @forelse ( $siteplan->where('code_product', 'rW_eahQ_CwvbM0DULl8zc') as $hasil)
            @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -30.40061 -31 L 31.59939 -31 L 31.59939 31 L -31.599400000000003 31 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style="fill:#f50505;stroke: rgb(0,0,0); stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -30.40061 -31 L 31.59939 -31 L 31.59939 31 L -31.599400000000003 31 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-rW_eahQ_CwvbM0DULl8zc">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -30.40061 -31 L 31.59939 -31 L 31.59939 31 L -31.599400000000003 31 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="rW_eahQ_CwvbM0DULl8zc">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -30.40061 -31 L 31.59939 -31 L 31.59939 31 L -31.599400000000003 31 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>
    <g transform="matrix(1.16 0 0 0.59 233.48 510.41)" id="FWKUwToqKUv_oq2bqjs33"  >
        @forelse ( $siteplan->where('code_product', 'FWKUwToqKUv_oq2bqjs33') as $hasil)
            @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -30.40061 -31 L 31.59939 -31 L 31.59939 31 L -31.599400000000003 31 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style=" fill:#f50505;stroke: rgb(0,0,0); stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -30.40061 -31 L 31.59939 -31 L 31.59939 31 L -31.599400000000003 31 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-FWKUwToqKUv_oq2bqjs33">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -30.40061 -31 L 31.59939 -31 L 31.59939 31 L -31.599400000000003 31 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="FWKUwToqKUv_oq2bqjs33">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -30.40061 -31 L 31.59939 -31 L 31.59939 31 L -31.599400000000003 31 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>

    <g transform="matrix(1.19 0 0 0.6 232.47 547.56)" id="osv1pqVPNPwrIH36JYKXO"  >
        @forelse ( $siteplan->where('code_product', '123456') as $hasil)
            @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -30.04711 -31 L 31.95289 -31 L 31.95289 31 L -31.952900000000003 31 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style="fill:#f50505;stroke: rgb(0,0,0); stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -30.04711 -31 L 31.95289 -31 L 31.95289 31 L -31.952900000000003 31 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-123456">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -30.04711 -31 L 31.95289 -31 L 31.95289 31 L -31.952900000000003 31 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="123456">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -30.04711 -31 L 31.95289 -31 L 31.95289 31 L -31.952900000000003 31 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>

    <g transform="matrix(1.21 0 0 0.59 231.8 584.56)" id="1UFDVqWiGCb_Tzg6VUnZS"  >
        @forelse ( $siteplan->where('code_product', '1UFDVqWiGCb_Tzg6VUnZS') as $hasil)
            @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -30.40061 -31 L 31.59939 -31 L 31.59939 31 L -31.599400000000003 31 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style="fill:#f50505;stroke: rgb(0,0,0); stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -30.40061 -31 L 31.59939 -31 L 31.59939 31 L -31.599400000000003 31 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-1UFDVqWiGCb_Tzg6VUnZS">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -30.40061 -31 L 31.59939 -31 L 31.59939 31 L -31.599400000000003 31 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="1UFDVqWiGCb_Tzg6VUnZS">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -30.40061 -31 L 31.59939 -31 L 31.59939 31 L -31.599400000000003 31 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>
    <g transform="matrix(1.23 0 0 0.59 231.66 621.26)" id="PIIl7PughbZ990vxdb98L"  >

        @forelse ( $siteplan->where('code_product', 'PIIl7PughbZ990vxdb98L') as $hasil)
            @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -30.40061 -31 L 31.59939 -31 L 31.59939 31 L -31.599400000000003 31 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style="  fill:#f50505; stroke: rgb(0,0,0); stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -30.40061 -31 L 31.59939 -31 L 31.59939 31 L -31.599400000000003 31 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-PIIl7PughbZ990vxdb98L">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -30.40061 -31 L 31.59939 -31 L 31.59939 31 L -31.599400000000003 31 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="PIIl7PughbZ990vxdb98L">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -30.40061 -31 L 31.59939 -31 L 31.59939 31 L -31.599400000000003 31 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>

    <g transform="matrix(1.26 0 0 0.6 230.58 658.41)" id="I_VJfx670iVlUbP746PC"  >
        @forelse ( $siteplan->where('code_product', 'I_VJfx670iVlUbP746PC') as $hasil)
            @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -30.04711 -31 L 31.95289 -31 L 31.95289 31 L -31.952900000000003 31 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style=" fill:#f50505;stroke: rgb(0,0,0); stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -30.04711 -31 L 31.95289 -31 L 31.95289 31 L -31.952900000000003 31 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-I_VJfx670iVlUbP746PC">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -30.04711 -31 L 31.95289 -31 L 31.95289 31 L -31.952900000000003 31 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="I_VJfx670iVlUbP746PC">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -30.04711 -31 L 31.95289 -31 L 31.95289 31 L -31.952900000000003 31 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>

    <g transform="matrix(1.28 0 0 0.59 229.88 695.41)" id="LZv7qzVmmPSI2aLoSzTGy"  >
        @forelse ( $siteplan->where('code_product', 'LZv7qzVmmPSI2aLoSzTGy') as $hasil)
            @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -30.40061 -31 L 31.59939 -31 L 31.59939 31 L -31.599400000000003 31 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style=" fill:#f50505; stroke: rgb(0,0,0); stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -30.40061 -31 L 31.59939 -31 L 31.59939 31 L -31.599400000000003 31 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-LZv7qzVmmPSI2aLoSzTGy">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -30.40061 -31 L 31.59939 -31 L 31.59939 31 L -31.599400000000003 31 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="LZv7qzVmmPSI2aLoSzTGy">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -30.40061 -31 L 31.59939 -31 L 31.59939 31 L -31.599400000000003 31 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>
    <g transform="matrix(1.31 0 0 0.59 229.39 732.25)" id="nWzASq0_XJ9YRCN6zXXUo"  >
        @forelse ( $siteplan->where('code_product', 'nWzASq0_XJ9YRCN6zXXUo') as $hasil)
            @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style=" fill:#ffc107;  stroke: rgb(0,0,0); stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -30.40061 -31 L 31.59939 -31 L 31.59939 31 L -31.599400000000003 31 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style=" fill:#f50505; stroke: rgb(0,0,0); stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -30.40061 -31 L 31.59939 -31 L 31.59939 31 L -31.599400000000003 31 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-nWzASq0_XJ9YRCN6zXXUo">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -30.40061 -31 L 31.59939 -31 L 31.59939 31 L -31.599400000000003 31 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="nWzASq0_XJ9YRCN6zXXUo">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -30.40061 -31 L 31.59939 -31 L 31.59939 31 L -31.599400000000003 31 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>

    <g transform="matrix(1.33 0 0 0.6 228.07 769.25)" id="lrSH7Ob6tOXtMJTlTCJ72"  >
        @forelse ( $siteplan->where('code_product', 'lrSH7Ob6tOXtMJTlTCJ72') as $hasil)
            @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -30.04711 -31 L 31.95289 -31 L 31.95289 31 L -31.952900000000003 31 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style=" fill:#f50505;stroke: rgb(0,0,0); stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -30.04711 -31 L 31.95289 -31 L 31.95289 31 L -31.952900000000003 31 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-lrSH7Ob6tOXtMJTlTCJ72">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -30.04711 -31 L 31.95289 -31 L 31.95289 31 L -31.952900000000003 31 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="lrSH7Ob6tOXtMJTlTCJ72">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -30.04711 -31 L 31.95289 -31 L 31.95289 31 L -31.952900000000003 31 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>

    <g transform="matrix(1.36 0 0 0.59 227.33 806.25)" id="aMUf8Ed1VqeSDwSJL2OW6"  >
        @forelse ( $siteplan->where('code_product', 'aMUf8Ed1VqeSDwSJL2OW6') as $hasil)
            @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -30.40061 -31 L 31.59939 -31 L 31.59939 31 L -31.599400000000003 31 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style="fill:#f50505;stroke: rgb(0,0,0); stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -30.40061 -31 L 31.59939 -31 L 31.59939 31 L -31.599400000000003 31 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-aMUf8Ed1VqeSDwSJL2OW6">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -30.40061 -31 L 31.59939 -31 L 31.59939 31 L -31.599400000000003 31 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="aMUf8Ed1VqeSDwSJL2OW6">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -30.40061 -31 L 31.59939 -31 L 31.59939 31 L -31.599400000000003 31 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>

    <g transform="matrix(1.38 0 0 0.59 226.59 842.95)" id="lg12nRfwkovpQePYSxjcP"  >
        @forelse ( $siteplan->where('code_product', 'lg12nRfwkovpQePYSxjcP') as $hasil)
            @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -30.40061 -31 L 31.59939 -31 L 31.59939 31 L -31.599400000000003 31 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style=" fill:#f50505;stroke: rgb(0,0,0); stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -30.40061 -31 L 31.59939 -31 L 31.59939 31 L -31.599400000000003 31 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-lg12nRfwkovpQePYSxjcP">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -30.40061 -31 L 31.59939 -31 L 31.59939 31 L -31.599400000000003 31 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="lg12nRfwkovpQePYSxjcP">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -30.40061 -31 L 31.59939 -31 L 31.59939 31 L -31.599400000000003 31 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>

    <g transform="matrix(1.41 0 0 0.6 225.39 880.09)" id="xHUVBF3YmnK0n0I0XP5od"  >
        @forelse ( $siteplan->where('code_product', 'xHUVBF3YmnK0n0I0XP5od') as $hasil)
            @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -30.04711 -31 L 31.95289 -31 L 31.95289 31 L -31.952900000000003 31 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style=" fill:#f50505;stroke: rgb(0,0,0); stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -30.04711 -31 L 31.95289 -31 L 31.95289 31 L -31.952900000000003 31 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-xHUVBF3YmnK0n0I0XP5od">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -30.04711 -31 L 31.95289 -31 L 31.95289 31 L -31.952900000000003 31 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="xHUVBF3YmnK0n0I0XP5od">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -30.04711 -31 L 31.95289 -31 L 31.95289 31 L -31.952900000000003 31 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>

    <g transform="matrix(1.43 0 0 0.59 224.6 917.09)" id="r01E4P5QUE2vjk0v8HUAI"  >
        @forelse ( $siteplan->where('code_product', 'r01E4P5QUE2vjk0v8HUAI') as $hasil)
            @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -30.40061 -31 L 31.59939 -31 L 31.59939 31 L -31.599400000000003 31 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style=" fill:#f50505;stroke: rgb(0,0,0); stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -30.40061 -31 L 31.59939 -31 L 31.59939 31 L -31.599400000000003 31 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-r01E4P5QUE2vjk0v8HUAI">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -30.40061 -31 L 31.59939 -31 L 31.59939 31 L -31.599400000000003 31 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="r01E4P5QUE2vjk0v8HUAI">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -30.40061 -31 L 31.59939 -31 L 31.59939 31 L -31.599400000000003 31 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>
    <g transform="matrix(1.5 0 0 0.6 222.59 990.94)" id="LNsF3bL8XeL0v2WFK_Yz"  >
        @forelse ( $siteplan->where('code_product', 'LNsF3bL8XeL0v2WFK_Yz') as $hasil)
            @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -30.04711 -31 L 31.95289 -31 L 31.95289 31 L -31.952900000000003 31 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style="fill:#f50505;stroke: rgb(0,0,0); stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -30.04711 -31 L 31.95289 -31 L 31.95289 31 L -31.952900000000003 31 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-LNsF3bL8XeL0v2WFK_Yz">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -30.04711 -31 L 31.95289 -31 L 31.95289 31 L -31.952900000000003 31 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="LNsF3bL8XeL0v2WFK_Yz">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -30.04711 -31 L 31.95289 -31 L 31.95289 31 L -31.952900000000003 31 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>
    <g transform="matrix(1.46 0 0 0.59 223.86 953.79)" id="sBE_Gc3y7Iqvwnoe1lAbT"  >
        @forelse ( $siteplan->where('code_product', 'sBE_Gc3y7Iqvwnoe1lAbT') as $hasil)
            @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -30.40061 -31 L 31.59939 -31 L 31.59939 31 L -31.599400000000003 31 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style=" fill:#f50505;stroke: rgb(0,0,0); stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -30.40061 -31 L 31.59939 -31 L 31.59939 31 L -31.599400000000003 31 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-sBE_Gc3y7Iqvwnoe1lAbT">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -30.40061 -31 L 31.59939 -31 L 31.59939 31 L -31.599400000000003 31 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="sBE_Gc3y7Iqvwnoe1lAbT">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -30.40061 -31 L 31.59939 -31 L 31.59939 31 L -31.599400000000003 31 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>
    <g transform="matrix(1.52 0 0 0.59 221.75 1027.94)" id="wnwMMSCFLfpdzKE4nwMD"  >
        @forelse ( $siteplan->where('code_product', 'wnwMMSCFLfpdzKE4nwMD') as $hasil)
            @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -30.40061 -31 L 31.59939 -31 L 31.59939 31 L -31.599400000000003 31 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style=" fill:#f50505; stroke: rgb(0,0,0); stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -30.40061 -31 L 31.59939 -31 L 31.59939 31 L -31.599400000000003 31 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-wnwMMSCFLfpdzKE4nwMD">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -30.40061 -31 L 31.59939 -31 L 31.59939 31 L -31.599400000000003 31 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="wnwMMSCFLfpdzKE4nwMD">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -30.40061 -31 L 31.59939 -31 L 31.59939 31 L -31.599400000000003 31 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>
    <g transform="matrix(1.53 0 0 0.59 221.74 1064.62)" id="we9_Pc3kzO55AS8hptlDt"  >
        @forelse ( $siteplan->where('code_product', 'we9_Pc3kzO55AS8hptlDt') as $hasil)
            @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style="fill:#ffc107;  stroke: rgb(0,0,0); stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -30.40061 -31 L 31.59939 -31 L 31.59939 31 L -31.599400000000003 31 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style=" fill:#f50505;stroke: rgb(0,0,0); stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -30.40061 -31 L 31.59939 -31 L 31.59939 31 L -31.599400000000003 31 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-we9_Pc3kzO55AS8hptlDt">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -30.40061 -31 L 31.59939 -31 L 31.59939 31 L -31.599400000000003 31 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="we9_Pc3kzO55AS8hptlDt">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -30.40061 -31 L 31.59939 -31 L 31.59939 31 L -31.599400000000003 31 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>
    <g transform="matrix(1.6 0 0 0.59 219.51 1138.77)" id="wq3K_rrVnd2quMenVOfgf"  >
        @forelse ( $siteplan->where('code_product', 'wq3K_rrVnd2quMenVOfgf') as $hasil)
            @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style=" fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -30.40061 -31 L 31.59939 -31 L 31.59939 31 L -31.599400000000003 31 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
            <path style="fill:#f50505; stroke: rgb(0,0,0); stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -30.40061 -31 L 31.59939 -31 L 31.59939 31 L -31.599400000000003 31 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-wq3K_rrVnd2quMenVOfgf">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -30.40061 -31 L 31.59939 -31 L 31.59939 31 L -31.599400000000003 31 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="wq3K_rrVnd2quMenVOfgf">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -30.40061 -31 L 31.59939 -31 L 31.59939 31 L -31.599400000000003 31 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>
    <g transform="matrix(1 0 0 1 220.51 1101.77)" id="UherOwPtGNUQLJPfWtkUS"  >
        @forelse ( $siteplan->where('code_product', 'UherOwPtGNUQLJPfWtkUS') as $hasil)
            @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-50, -18.65)" d="M 2.98218 0 L 100 0 L 100 37.3065 L 0 37.3065 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style="fill:#f50505; stroke: rgb(0,0,0); stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-50, -18.65)" d="M 2.98218 0 L 100 0 L 100 37.3065 L 0 37.3065 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-UherOwPtGNUQLJPfWtkUS">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-50, -18.65)" d="M 2.98218 0 L 100 0 L 100 37.3065 L 0 37.3065 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="UherOwPtGNUQLJPfWtkUS">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-50, -18.65)" d="M 2.98218 0 L 100 0 L 100 37.3065 L 0 37.3065 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>

    <g transform="matrix(1.58 0 0 0.57 215.25 1282.39)" id="iwDSJACu5AKcWwtZZUXPm"  >
        @forelse ( $siteplan->where('code_product', 'iwDSJACu5AKcWwtZZUXPm') as $hasil)
            @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style=" fill:#ffc107;  stroke: rgb(0,0,0); stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -31.93329 -89.6241 L 34.21947 -89.6241 L 34.21947 -27.6241 L -34.21947 89.6241 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style=" fill:#f50505; stroke: rgb(0,0,0); stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -31.93329 -89.6241 L 34.21947 -89.6241 L 34.21947 -27.6241 L -34.21947 89.6241 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-iwDSJACu5AKcWwtZZUXPm">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -31.93329 -89.6241 L 34.21947 -89.6241 L 34.21947 -27.6241 L -34.21947 89.6241 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="iwDSJACu5AKcWwtZZUXPm">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -31.93329 -89.6241 L 34.21947 -89.6241 L 34.21947 -27.6241 L -34.21947 89.6241 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>
    <g transform="matrix(0.91 0 0 2.89 225.07 111.84)" id="31JeMrHoo_OuxtVD4YUT"  >
        @forelse ( $siteplan->where('code_product', '31JeMrHoo_OuxtVD4YUT') as $hasil)
            @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -13.45528 -17 L 17 -15.11368 L 17 17 L -17 17 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style=" fill:#f50505;stroke: rgb(0,0,0); stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -13.45528 -17 L 17 -15.11368 L 17 17 L -17 17 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-31JeMrHoo_OuxtVD4YUT">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -13.45528 -17 L 17 -15.11368 L 17 17 L -17 17 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="31JeMrHoo_OuxtVD4YUT">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -13.45528 -17 L 17 -15.11368 L 17 17 L -17 17 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>

    <g transform="matrix(0.89 0 0 2.75 255.33 114.54)" id="XQu9CakecM0nMDju_c75"  >
        @forelse ( $siteplan->where('code_product', 'XQu9CakecM0nMDju_c75') as $hasil)
            @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -17 -16.88211 L 17 -15.231560000000002 L 17 16.88212 L -17 16.88212 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style=" fill:#f50505;stroke: rgb(0,0,0); stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -17 -16.88211 L 17 -15.231560000000002 L 17 16.88212 L -17 16.88212 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-XQu9CakecM0nMDju_c75">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -17 -16.88211 L 17 -15.231560000000002 L 17 16.88212 L -17 16.88212 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="XQu9CakecM0nMDju_c75">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -17 -16.88211 L 17 -15.231560000000002 L 17 16.88212 L -17 16.88212 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>

    <g transform="matrix(1.66 0 0 0.59 217.11 1212.77)" id="iBrjl5HbuG4xlIJAWkeh"  >
        @forelse ( $siteplan->where('code_product', 'iBrjl5HbuG4xlIJAWkeh') as $hasil)
            @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style="fill:#ffc107;  stroke: rgb(0,0,0); stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -30.40061 -31 L 31.59939 -31 L 31.59939 31 L -31.599400000000003 31 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style=" fill:#f50505; stroke: rgb(0,0,0); stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -30.40061 -31 L 31.59939 -31 L 31.59939 31 L -31.599400000000003 31 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-iBrjl5HbuG4xlIJAWkeh">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -30.40061 -31 L 31.59939 -31 L 31.59939 31 L -31.599400000000003 31 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="iBrjl5HbuG4xlIJAWkeh">
            <path style="fill: #f8f8f8;  stroke: rgb(0,0,0); stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -30.40061 -31 L 31.59939 -31 L 31.59939 31 L -31.599400000000003 31 z" stroke-linecap="round" />
        </a>
        @endforelse


    </g>
    <g transform="matrix(1.04 0 0 1 218.15 1175.77)" id="RU89Sn0JWBQ2t3vHbb"  >
        @forelse ( $siteplan->where('code_product', 'RU89Sn0JWBQ2t3vHbb') as $hasil)
            @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -47.01782 -18.65325 L 50 -18.65325 L 50 18.65325 L -50 18.65325 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style="  fill:#f50505;stroke: rgb(0,0,0); stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -47.01782 -18.65325 L 50 -18.65325 L 50 18.65325 L -50 18.65325 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-RU89Sn0JWBQ2t3vHbb">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -47.01782 -18.65325 L 50 -18.65325 L 50 18.65325 L -50 18.65325 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="RU89Sn0JWBQ2t3vHbb">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -47.01782 -18.65325 L 50 -18.65325 L 50 18.65325 L -50 18.65325 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>

    <g transform="matrix(1.47 0.26 -0.17 0.98 254.73 60.08)" id="Bc7_7b34py6maGjwQlES3"  >
        @forelse ( $siteplan->where('code_product', 'Bc7_7b34py6maGjwQlES3') as $hasil)
            @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(80,80,80); fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -56.5 -10 L 56.5 -10 L 56.5 10 L -56.5 10 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style="fill:#f50505; stroke: rgb(0,0,0); stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(80,80,80); fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -56.5 -10 L 56.5 -10 L 56.5 10 L -56.5 10 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-Bc7_7b34py6maGjwQlES3">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(80,80,80); fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -56.5 -10 L 56.5 -10 L 56.5 10 L -56.5 10 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="Bc7_7b34py6maGjwQlES3">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(80,80,80); fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -56.5 -10 L 56.5 -10 L 56.5 10 L -56.5 10 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>

    <g transform="matrix(0 -1 1 0 278.98 1100.96)" style="" id="8wBXmRGBowvkqIZMLqLvd"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="11" font-style="normal" font-weight="700" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(255,255,255); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-62.04" y="2.47" >Jalan Komplek 5 Meter</tspan></text>
    </g>
    <g transform="matrix(0 -1 1 0 278.66 694.44)" style="" id="RBr4CWjCbzGcjAw4cKn5U"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="11" font-style="normal" font-weight="700" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(255,255,255); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-62.04" y="2.47" >Jalan Komplek 5 Meter</tspan></text>
    </g>
    <g transform="matrix(0 -1 1 0 278.66 252.06)" style="" id="vHF8WurpJ05RFUGKNE8CD"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="11" font-style="normal" font-weight="700" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(255,255,255); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-62.04" y="2.47" >Jalan Komplek 5 Meter</tspan></text>
    </g>
    <g transform="matrix(0.98 0.17 -0.17 0.98 255.56 61.71)" style="" id="6JunSIyQO5kuFWxlZrdkH"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="12" font-style="normal" font-weight="700" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(255,255,255); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-53.91" y="2.47" >Jalan Parit Paeran</tspan></text>
    </g>
    <g transform="matrix(0 -1 1 0 254.73 114.54)" style="" id="aNKeSCmmkokzRxvFanSI1"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="13" font-style="normal" font-weight="700" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-22.02" y="4" >Ruko 1</tspan></text>
    </g>
    <g transform="matrix(0 -1 1 0 227.72 114.84)" style="" id="R9qgz24BrvRdsorRygf4x"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="13" font-style="normal" font-weight="700" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-22.02" y="4" >Ruko 2</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 242.22 178.88)" style="" id="rUhog-ENKniNo60E0GgSI"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="13" font-style="normal" font-weight="700" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-8.2" y="4" >A1</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 241.05 216.03)" style="" id="BRqVk1Puf3SsUzjzpFV_y"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="13" font-style="normal" font-weight="700" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-8.2" y="4" >A2</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 241.05 252.06)" style="" id="f7VM_wW9KeIsDSCOX4shA"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="13" font-style="normal" font-weight="700" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-8.2" y="4" >A3</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 239.67 289.87)" style="" id="UBv17LvWlu0-vZT4SiDoe"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="13" font-style="normal" font-weight="700" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-8.2" y="4" >A4</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 240.09 327.23)" style="" id="3t2lAvuAnQGbS7x76zibV"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="13" font-style="normal" font-weight="700" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-8.2" y="4" >A5</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 238.92 364.37)" style="" id="wQEgxHmIQnEGRUxuIGExW"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="13" font-style="normal" font-weight="700" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-8.2" y="4" >A6</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 238.92 400.41)" style="" id="9laYmqvfbMMdY_u2mDcVR"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="13" font-style="normal" font-weight="700" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-8.2" y="4" >A7</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 237.55 438.21)" style="" id="wE08o5n4fpEuva5pz4d86"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="13" font-style="normal" font-weight="700" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-8.2" y="4" >A8</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 238.16 472.75)" style="" id="rjyYzyRuAC5GTj8wPsyEE"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="13" font-style="normal" font-weight="700" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-8.2" y="4" >A9</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 236.99 510.41)" style="" id="g4AwJGko0EJne-YO6wpnN"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="13" font-style="normal" font-weight="700" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-11.92" y="4" >A10</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 236.99 545.93)" style="" id="gr39aZL1ijYBblyBN0ONW"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="13" font-style="normal" font-weight="700" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-11.92" y="4" >A11</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 235.62 583.74)" style="" id="X-uKdZVhcD5-RNGuwoa0A"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="13" font-style="normal" font-weight="700" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-11.92" y="4" >A12</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 236.04 621.09)" style="" id="ZjlUU45BrQIECRwMXmQkR"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="13" font-style="normal" font-weight="700" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-11.92" y="4" >A13</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 234.87 657.65)" style="" id="PBL-XUnikWEkHla3I_NdZ"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="13" font-style="normal" font-weight="700" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-11.92" y="4" >A14</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 234.87 694.27)" style="" id="Xk9SCmmqntKLixL0fy1dp"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="13" font-style="normal" font-weight="700" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-11.92" y="4" >A15</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 233.5 732.07)" style="" id="EyrLgHqz--cg9dUY2KI0B"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="13" font-style="normal" font-weight="700" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-11.92" y="4" >A16</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 233.27 770.2)" style="" id="jUaXYm0zr2KI50uLVbg0-"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="13" font-style="normal" font-weight="700" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-11.92" y="4" >A17</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 232.1 807.34)" style="" id="BWHpTbIFsDZI1DJhn0IC-"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="13" font-style="normal" font-weight="700" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-11.92" y="4" >A18</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 232.1 843.38)" style="" id="w-C8k8UXN95dJcVbgyOws"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="13" font-style="normal" font-weight="700" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-11.92" y="4" >A19</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 230.72 881.19)" style="" id="0iJDspT7iqr6b4moYhzKg"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="13" font-style="normal" font-weight="700" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-11.92" y="4" >A20</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 231.14 918.54)" style="" id="mz-DBu2q7MxCwCWi68sTh"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="13" font-style="normal" font-weight="700" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-11.92" y="4" >A21</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 229.97 955.68)" style="" id="F_qJ2aYm6dV6cV5DnvMyR"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="13" font-style="normal" font-weight="700" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-11.92" y="4" >A22</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 229.97 991.72)" style="" id="7OGQHr-cb0pV7fpXisjO1"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="13" font-style="normal" font-weight="700" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-11.92" y="4" >A23</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 228.6 1029.52)" style="" id="UxG6wj5gTI8ga24jViM-N"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="13" font-style="normal" font-weight="700" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-11.92" y="4" >A24</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 229.21 1064.06)" style="" id="dvYk5fF92TmXoVccl4mPt"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="13" font-style="normal" font-weight="700" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-11.92" y="4" >A25</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 228.04 1101.73)" style="" id="WBjgw12T_Kt-tNVSOSS9y"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="13" font-style="normal" font-weight="700" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-11.92" y="4" >A26</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 228.04 1137.24)" style="" id="ZReqI9eCCBSMItkHdURrj"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="13" font-style="normal" font-weight="700" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-11.92" y="4" >A27</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 226.67 1175.05)" style="" id="8OtM-2HVJ3bd9nLjgiMR3"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="13" font-style="normal" font-weight="700" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-11.92" y="4" >A28</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 227.09 1212.4)" style="" id="vdqDvihu6ivKn2aAdyufh"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="13" font-style="normal" font-weight="700" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-11.92" y="4" >A29</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 227.09 1258.62)" style="" id="8Y4eVm_qJYz1gLGnUAcLr"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="13" font-style="normal" font-weight="700" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-11.92" y="4" >A30</tspan></text>
    </g>
</svg>
