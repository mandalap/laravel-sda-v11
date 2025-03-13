<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="100%" viewBox="0 0 750.006 2700" xml:space="preserve">

    <g transform="matrix(1 0 0 1.54 307.59 1351)" id="zkQ85CghMmjqvWBx4l_Uo"  >
    <path style="stroke: rgb(169,50,73); stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(133,133,133); fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -25 -750 L 25 -750 L 25 750 L -25 750 z" stroke-linecap="round" />
    </g>
    <g transform="matrix(0.47 0 0 12.2 662.27 1350.39)" id="COpwc_pOsbbLQ-In7Jxkl"  >
    <path style="stroke: rgb(183,37,42); stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(84,83,83); fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -99 -99 L 99 -99 L 99 99 L -99 99 z" stroke-linecap="round" />
    </g>
    <g transform="matrix(1.38 0 0 0.13 322.17 170.97)" id="xK2CiIxeHo0K_r39SSJMP"  >
    <path style="stroke: rgb(193,96,56); stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(84,83,83); fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -219.5 -219.5 L 219.5 -219.5 L 219.5 219.5 L -219.5 219.5 z" stroke-linecap="round" />
    </g>

    <g transform="matrix(1 0 0 1 375.09 349.5)" id="crvequCQdb_ehfkj0CxsM"  >
        @forelse ( $siteplan->where('code_product', 'crvequCQdb_ehfkj0CxsM') as $hasil)
            @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style="fill:#ffc107;  stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-42.5, -150)" d="M 0 0 L 85 0 L 85 300 L 0 300 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style="fill:#f50505; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-42.5, -150)" d="M 0 0 L 85 0 L 85 300 L 0 300 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-crvequCQdb_ehfkj0CxsM">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-42.5, -150)" d="M 0 0 L 85 0 L 85 300 L 0 300 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="crvequCQdb_ehfkj0CxsM">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-42.5, -150)" d="M 0 0 L 85 0 L 85 300 L 0 300 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>

    <g transform="matrix(1 0 0 1 375.59 2350.5)" id="BiPQcA2KkcuS_5sGtl5Bu"  >
        @forelse ( $siteplan->where('code_product', 'BiPQcA2KkcuS_5sGtl5Bu') as $hasil)
            @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-42.5, -150)" d="M 0 0 L 85 0 L 85 300 L 0 300 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style="fill:#f50505; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-42.5, -150)" d="M 0 0 L 85 0 L 85 300 L 0 300 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-BiPQcA2KkcuS_5sGtl5Bu">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-42.5, -150)" d="M 0 0 L 85 0 L 85 300 L 0 300 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="BiPQcA2KkcuS_5sGtl5Bu">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-42.5, -150)" d="M 0 0 L 85 0 L 85 300 L 0 300 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>

    <g transform="matrix(1 0 0 1 460.59 2350.5)" id="VT2owsyZyMGcay5Dlqnih"  >
        @forelse ( $siteplan->where('code_product', 'VT2owsyZyMGcay5Dlqnih') as $hasil)
            @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-42.5, -150)" d="M 0 0 L 85 0 L 85 300 L 0 300 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style="fill:#f50505; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-42.5, -150)" d="M 0 0 L 85 0 L 85 300 L 0 300 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-VT2owsyZyMGcay5Dlqnih">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-42.5, -150)" d="M 0 0 L 85 0 L 85 300 L 0 300 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="VT2owsyZyMGcay5Dlqnih">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-42.5, -150)" d="M 0 0 L 85 0 L 85 300 L 0 300 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>

    <g transform="matrix(1 0 0 1 153.09 2349)" id="Sp0RIJ_g4HoRmcLnmZhAW"  >
        @forelse ( $siteplan->where('code_product', 'Sp0RIJ_g4HoRmcLnmZhAW') as $hasil)
            @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-42.5, -150)" d="M 0 0 L 85 0 L 85 300 L 0 300 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style="fill:#f50505; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-42.5, -150)" d="M 0 0 L 85 0 L 85 300 L 0 300 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-Sp0RIJ_g4HoRmcLnmZhAW">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-42.5, -150)" d="M 0 0 L 85 0 L 85 300 L 0 300 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="Sp0RIJ_g4HoRmcLnmZhAW">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-42.5, -150)" d="M 0 0 L 85 0 L 85 300 L 0 300 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>

    <g transform="matrix(1 0 0 1 238.09 2349)" id="pinwz4KnzFpiPwQwRXl7"  >
        @forelse ( $siteplan->where('code_product', 'pinwz4KnzFpiPwQwRXl7') as $hasil)
            @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style=" fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-42.5, -150)" d="M 0 0 L 85 0 L 85 300 L 0 300 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style="fill:#f50505; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-42.5, -150)" d="M 0 0 L 85 0 L 85 300 L 0 300 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-pinwz4KnzFpiPwQwRXl7">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-42.5, -150)" d="M 0 0 L 85 0 L 85 300 L 0 300 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="pinwz4KnzFpiPwQwRXl7">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-42.5, -150)" d="M 0 0 L 85 0 L 85 300 L 0 300 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>

    <g transform="matrix(1 0 0 1 460.09 349.5)" id="X3oVlzOPm6S9ftEJcGaW_"  >
        @forelse ( $siteplan->where('code_product', 'X3oVlzOPm6S9ftEJcGaW_') as $hasil)
            @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-42.5, -150)" d="M 0 0 L 85 0 L 85 300 L 0 300 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style="fill:#f50505; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-42.5, -150)" d="M 0 0 L 85 0 L 85 300 L 0 300 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-X3oVlzOPm6S9ftEJcGaW_">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-42.5, -150)" d="M 0 0 L 85 0 L 85 300 L 0 300 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="X3oVlzOPm6S9ftEJcGaW_">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-42.5, -150)" d="M 0 0 L 85 0 L 85 300 L 0 300 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>

    <g transform="matrix(1 0 0 1 152.59 350)" id="PS5IWw61sdCGo3WPBa_JD"  >
        @forelse ( $siteplan->where('code_product', 'PS5IWw61sdCGo3WPBa_JD') as $hasil)
            @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-42.5, -150)" d="M 0 0 L 85 0 L 85 300 L 0 300 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style="fill:#f50505; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-42.5, -150)" d="M 0 0 L 85 0 L 85 300 L 0 300 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-PS5IWw61sdCGo3WPBa_JD">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-42.5, -150)" d="M 0 0 L 85 0 L 85 300 L 0 300 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="PS5IWw61sdCGo3WPBa_JD">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-42.5, -150)" d="M 0 0 L 85 0 L 85 300 L 0 300 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>

    <g transform="matrix(1 0 0 1 238.59 350)" id="jopmXrAh42H8ZSpKlY2sQ"  >
        @forelse ( $siteplan->where('code_product', 'jopmXrAh42H8ZSpKlY2sQ') as $hasil)
            @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style="fill:#ffc107;stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-42.5, -150)" d="M 0 0 L 85 0 L 85 300 L 0 300 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style="fill:#f50505; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-42.5, -150)" d="M 0 0 L 85 0 L 85 300 L 0 300 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-jopmXrAh42H8ZSpKlY2sQ">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-42.5, -150)" d="M 0 0 L 85 0 L 85 300 L 0 300 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="jopmXrAh42H8ZSpKlY2sQ">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-42.5, -150)" d="M 0 0 L 85 0 L 85 300 L 0 300 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>

    <g transform="matrix(1 0 0 1 417.09 549.5)" id="Z94GJFKkBIUkQnxa2w1O"  >
        @forelse ( $siteplan->where('code_product', 'Z94GJFKkBIUkQnxa2w1O') as $hasil)
            @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -50)" d="M 0 0 L 170 0 L 170 100 L 0 100 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style="fill:#f50505;stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -50)" d="M 0 0 L 170 0 L 170 100 L 0 100 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-Z94GJFKkBIUkQnxa2w1O">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -50)" d="M 0 0 L 170 0 L 170 100 L 0 100 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="Z94GJFKkBIUkQnxa2w1O">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -50)" d="M 0 0 L 170 0 L 170 100 L 0 100 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>

    <g transform="matrix(1 0 0 1 417.09 649.5)" id="oUT2msWcsFQ522gzBnlU"  >
        @forelse ( $siteplan->where('code_product', 'oUT2msWcsFQ522gzBnlU') as $hasil)
            @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -50)" d="M 0 0 L 170 0 L 170 100 L 0 100 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style="fill:#f50505; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -50)" d="M 0 0 L 170 0 L 170 100 L 0 100 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-oUT2msWcsFQ522gzBnlU">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -50)" d="M 0 0 L 170 0 L 170 100 L 0 100 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="oUT2msWcsFQ522gzBnlU">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -50)" d="M 0 0 L 170 0 L 170 100 L 0 100 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>

    <g transform="matrix(1 0 0 1 417.09 749.5)" id="Xa1KrUUki4MHGe3OQUTgE"  >
        @forelse ( $siteplan->where('code_product', 'Xa1KrUUki4MHGe3OQUTgE') as $hasil)
            @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style="fill:#ffc107;stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -50)" d="M 0 0 L 170 0 L 170 100 L 0 100 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style=" fill:#f50505; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -50)" d="M 0 0 L 170 0 L 170 100 L 0 100 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-Xa1KrUUki4MHGe3OQUTgE">
                <path style="fill: #f8f8f8;  stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -50)" d="M 0 0 L 170 0 L 170 100 L 0 100 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="Xa1KrUUki4MHGe3OQUTgE">
            <path style="fill: #f8f8f8;  stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -50)" d="M 0 0 L 170 0 L 170 100 L 0 100 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>

    <g transform="matrix(1 0 0 1 417.09 849.5)" id="o0HyxsLjuUXeV5eaVP_vX"  >
        @forelse ( $siteplan->where('code_product', 'o0HyxsLjuUXeV5eaVP_vX') as $hasil)
            @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style=" fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -50)" d="M 0 0 L 170 0 L 170 100 L 0 100 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style="fill:#f50505; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -50)" d="M 0 0 L 170 0 L 170 100 L 0 100 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-o0HyxsLjuUXeV5eaVP_vX">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -50)" d="M 0 0 L 170 0 L 170 100 L 0 100 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="o0HyxsLjuUXeV5eaVP_vX">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -50)" d="M 0 0 L 170 0 L 170 100 L 0 100 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>

    <g transform="matrix(1 0 0 1 417.09 949.5)" id="ekXV6BrF74OKB0_kYwKC"  >
        @forelse ( $siteplan->where('code_product', 'ekXV6BrF74OKB0_kYwKC') as $hasil)
            @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style=" fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -50)" d="M 0 0 L 170 0 L 170 100 L 0 100 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style="fill:#f50505; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -50)" d="M 0 0 L 170 0 L 170 100 L 0 100 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-ekXV6BrF74OKB0_kYwKC">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -50)" d="M 0 0 L 170 0 L 170 100 L 0 100 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="ekXV6BrF74OKB0_kYwKC">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -50)" d="M 0 0 L 170 0 L 170 100 L 0 100 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>

    <g transform="matrix(1 0 0 1 417.09 1049.5)" id="hPRvOicHgqMfgzmKfYlM"  >
        @forelse ( $siteplan->where('code_product', 'hPRvOicHgqMfgzmKfYlM') as $hasil)
            @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -50)" d="M 0 0 L 170 0 L 170 100 L 0 100 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style="fill:#f50505; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -50)" d="M 0 0 L 170 0 L 170 100 L 0 100 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-hPRvOicHgqMfgzmKfYlM">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -50)" d="M 0 0 L 170 0 L 170 100 L 0 100 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="hPRvOicHgqMfgzmKfYlM">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -50)" d="M 0 0 L 170 0 L 170 100 L 0 100 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>

    <g transform="matrix(1 0 0 1 417.09 1149.5)" id="Db6TPt9wcnRckaxuCH6wt"  >
        @forelse ( $siteplan->where('code_product', 'Db6TPt9wcnRckaxuCH6wt') as $hasil)
            @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -50)" d="M 0 0 L 170 0 L 170 100 L 0 100 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style="fill:#f50505; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -50)" d="M 0 0 L 170 0 L 170 100 L 0 100 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-Db6TPt9wcnRckaxuCH6wt">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -50)" d="M 0 0 L 170 0 L 170 100 L 0 100 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="Db6TPt9wcnRckaxuCH6wt">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -50)" d="M 0 0 L 170 0 L 170 100 L 0 100 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>

    <g transform="matrix(1 0 0 1 417.09 1249.5)" id="0Xuz_iDKm7hIMlJZvTK7c"  >
        @forelse ( $siteplan->where('code_product', '0Xuz_iDKm7hIMlJZvTK7c') as $hasil)
            @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -50)" d="M 0 0 L 170 0 L 170 100 L 0 100 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style="fill:#f50505; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -50)" d="M 0 0 L 170 0 L 170 100 L 0 100 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-0Xuz_iDKm7hIMlJZvTK7c">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -50)" d="M 0 0 L 170 0 L 170 100 L 0 100 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="0Xuz_iDKm7hIMlJZvTK7c">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -50)" d="M 0 0 L 170 0 L 170 100 L 0 100 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>

    <g transform="matrix(2.32 0 0 1 307.09 1351)" id="3gRrKGuezUQjrcFvQa_d"  >
        @forelse ( $siteplan->where('code_product', '3gRrKGuezUQjrcFvQa_d') as $hasil)
            @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style=" fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(133,133,133); fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -85 -50 L 85 -50 L 85 50 L -85 50 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style="fill:#f50505;  stroke: rgb(0,0,0); stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(133,133,133); fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -85 -50 L 85 -50 L 85 50 L -85 50 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-3gRrKGuezUQjrcFvQa_d">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(133,133,133); fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -85 -50 L 85 -50 L 85 50 L -85 50 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="3gRrKGuezUQjrcFvQa_d">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(133,133,133); fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -85 -50 L 85 -50 L 85 50 L -85 50 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>

    <g transform="matrix(1 0 0 1 417.09 1451.5)" id="A8zGDL4VcLSl188u8oqN"  >
        @forelse ( $siteplan->where('code_product', 'A8zGDL4VcLSl188u8oqN') as $hasil)
            @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style=" fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -50)" d="M 0 0 L 170 0 L 170 100 L 0 100 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style="fill:#f50505; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -50)" d="M 0 0 L 170 0 L 170 100 L 0 100 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-A8zGDL4VcLSl188u8oqN">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -50)" d="M 0 0 L 170 0 L 170 100 L 0 100 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="A8zGDL4VcLSl188u8oqN">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -50)" d="M 0 0 L 170 0 L 170 100 L 0 100 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>

    <g transform="matrix(1 0 0 1 417.09 1551.5)" id="XcMgUZ4DxP3vGJ0x3cCEr"  >
        @forelse ( $siteplan->where('code_product', 'XcMgUZ4DxP3vGJ0x3cCEr') as $hasil)
            @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -50)" d="M 0 0 L 170 0 L 170 100 L 0 100 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style=" fill:#f50505;  stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -50)" d="M 0 0 L 170 0 L 170 100 L 0 100 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-XcMgUZ4DxP3vGJ0x3cCEr">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -50)" d="M 0 0 L 170 0 L 170 100 L 0 100 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="XcMgUZ4DxP3vGJ0x3cCEr">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -50)" d="M 0 0 L 170 0 L 170 100 L 0 100 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>

    <g transform="matrix(1 0 0 1 417.09 1651.5)" id="mSGTa8aqivQw0PSxGbllF"  >
    @forelse ( $siteplan->where('code_product', 'mSGTa8aqivQw0PSxGbllF') as $hasil)
        @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
            <path style=" fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -50)" d="M 0 0 L 170 0 L 170 100 L 0 100 z" stroke-linecap="round" />
        @elseif ($hasil->status == 'Terjual')
            <path style=" fill:#f50505; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -50)" d="M 0 0 L 170 0 L 170 100 L 0 100 z" stroke-linecap="round" />
        @elseif ($hasil->status == 'Tersedia')
        <a href="#" data-toggle="modal" data-target="#modalBooking-mSGTa8aqivQw0PSxGbllF">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -50)" d="M 0 0 L 170 0 L 170 100 L 0 100 z" stroke-linecap="round" />
        </a>
        @endif
    @empty
    <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="mSGTa8aqivQw0PSxGbllF">
        <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -50)" d="M 0 0 L 170 0 L 170 100 L 0 100 z" stroke-linecap="round" />
    </a>
    @endforelse
    </g>

    <g transform="matrix(1 0 0 1 417.09 1751.5)" id="F7elHJmv_GjSJyXNVCXGK"  >
        @forelse ( $siteplan->where('code_product', 'F7elHJmv_GjSJyXNVCXGK') as $hasil)
            @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style=" fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -50)" d="M 0 0 L 170 0 L 170 100 L 0 100 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style="fill:#f50505; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -50)" d="M 0 0 L 170 0 L 170 100 L 0 100 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-F7elHJmv_GjSJyXNVCXGK">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -50)" d="M 0 0 L 170 0 L 170 100 L 0 100 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="F7elHJmv_GjSJyXNVCXGK">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -50)" d="M 0 0 L 170 0 L 170 100 L 0 100 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>

    <g transform="matrix(1 0 0 1 417.09 1851.5)" id="m6iFR0OMzYfPqLmr7KoOX"  >
        @forelse ( $siteplan->where('code_product', 'm6iFR0OMzYfPqLmr7KoOX') as $hasil)
            @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -50)" d="M 0 0 L 170 0 L 170 100 L 0 100 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style=" fill:#f50505;  stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -50)" d="M 0 0 L 170 0 L 170 100 L 0 100 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-m6iFR0OMzYfPqLmr7KoOX">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -50)" d="M 0 0 L 170 0 L 170 100 L 0 100 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
         <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="m6iFR0OMzYfPqLmr7KoOX">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -50)" d="M 0 0 L 170 0 L 170 100 L 0 100 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>

    <g transform="matrix(1 0 0 1 417.09 1951.5)" id="NDsNpojKJ5rrHm0ph1HPy"  >
        @forelse ( $siteplan->where('code_product', 'NDsNpojKJ5rrHm0ph1HPy') as $hasil)
            @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -50)" d="M 0 0 L 170 0 L 170 100 L 0 100 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style=" fill:#f50505; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -50)" d="M 0 0 L 170 0 L 170 100 L 0 100 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-NDsNpojKJ5rrHm0ph1HPy">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -50)" d="M 0 0 L 170 0 L 170 100 L 0 100 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="NDsNpojKJ5rrHm0ph1HPy">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -50)" d="M 0 0 L 170 0 L 170 100 L 0 100 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>

    <g transform="matrix(1 0 0 1 417.09 2051.5)" id="kKiZg7MdhCIPhQtYfdoc_"  >
        @forelse ( $siteplan->where('code_product', 'kKiZg7MdhCIPhQtYfdoc_') as $hasil)
            @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style="fill:#ffc107;stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -50)" d="M 0 0 L 170 0 L 170 100 L 0 100 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style="  fill:#f50505; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -50)" d="M 0 0 L 170 0 L 170 100 L 0 100 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-kKiZg7MdhCIPhQtYfdoc_">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -50)" d="M 0 0 L 170 0 L 170 100 L 0 100 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="kKiZg7MdhCIPhQtYfdoc_">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -50)" d="M 0 0 L 170 0 L 170 100 L 0 100 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>

    <g transform="matrix(1 0 0 1 417.09 2150.5)" id="mm6CUuqzJ6gN5WEEjDKX"  >
        @forelse ( $siteplan->where('code_product', 'mm6CUuqzJ6gN5WEEjDKX') as $hasil)
            @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -50)" d="M 0 0 L 170 0 L 170 100 L 0 100 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style="  fill:#f50505; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -50)" d="M 0 0 L 170 0 L 170 100 L 0 100 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-mm6CUuqzJ6gN5WEEjDKX">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -50)" d="M 0 0 L 170 0 L 170 100 L 0 100 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="mm6CUuqzJ6gN5WEEjDKX">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -50)" d="M 0 0 L 170 0 L 170 100 L 0 100 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>

    <g transform="matrix(1 0 0 1 195.59 550)" id="lpb9PM4wFK1HVy_aLttvI"  >
        @forelse ( $siteplan->where('code_product', 'lpb9PM4wFK1HVy_aLttvI') as $hasil)
            @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -50)" d="M 0 0 L 170 0 L 170 100 L 0 100 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style=" fill:#f50505;stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -50)" d="M 0 0 L 170 0 L 170 100 L 0 100 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-lpb9PM4wFK1HVy_aLttvI">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -50)" d="M 0 0 L 170 0 L 170 100 L 0 100 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="lpb9PM4wFK1HVy_aLttvI">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -50)" d="M 0 0 L 170 0 L 170 100 L 0 100 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>

    <g transform="matrix(1 0 0 1 195.59 650)" id="GosWs2G08ReBt6iEHyMYA"  >
        @forelse ( $siteplan->where('code_product', 'GosWs2G08ReBt6iEHyMYA') as $hasil)
            @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -50)" d="M 0 0 L 170 0 L 170 100 L 0 100 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style=" fill:#f50505; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -50)" d="M 0 0 L 170 0 L 170 100 L 0 100 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-GosWs2G08ReBt6iEHyMYA">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -50)" d="M 0 0 L 170 0 L 170 100 L 0 100 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="GosWs2G08ReBt6iEHyMYA">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -50)" d="M 0 0 L 170 0 L 170 100 L 0 100 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>

    <g transform="matrix(1 0 0 1 195.59 750)" id="VYYpBxCNoIJlDClUJOMz"  >
        @forelse ( $siteplan->where('code_product', 'VYYpBxCNoIJlDClUJOMz') as $hasil)
            @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -50)" d="M 0 0 L 170 0 L 170 100 L 0 100 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style=" fill:#f50505;stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -50)" d="M 0 0 L 170 0 L 170 100 L 0 100 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-VYYpBxCNoIJlDClUJOMz">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -50)" d="M 0 0 L 170 0 L 170 100 L 0 100 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="VYYpBxCNoIJlDClUJOMz">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -50)" d="M 0 0 L 170 0 L 170 100 L 0 100 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>

    <g transform="matrix(1 0 0 1 195.59 850)" id="umfZP_0oQbw6H9DAbZx5e"  >
        @forelse ( $siteplan->where('code_product', 'umfZP_0oQbw6H9DAbZx5e') as $hasil)
            @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style=" fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -50)" d="M 0 0 L 170 0 L 170 100 L 0 100 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style="fill:#f50505; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -50)" d="M 0 0 L 170 0 L 170 100 L 0 100 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-umfZP_0oQbw6H9DAbZx5e">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -50)" d="M 0 0 L 170 0 L 170 100 L 0 100 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="umfZP_0oQbw6H9DAbZx5e">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -50)" d="M 0 0 L 170 0 L 170 100 L 0 100 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>

    <g transform="matrix(1 0 0 1 195.59 950)" id="G1tq54w9DQVE7t2J5lzI"  >
        @forelse ( $siteplan->where('code_product', 'G1tq54w9DQVE7t2J5lzI') as $hasil)
            @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style="fill:#ffc107;stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -50)" d="M 0 0 L 170 0 L 170 100 L 0 100 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style=" fill:#f50505; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -50)" d="M 0 0 L 170 0 L 170 100 L 0 100 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-G1tq54w9DQVE7t2J5lzI">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -50)" d="M 0 0 L 170 0 L 170 100 L 0 100 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="G1tq54w9DQVE7t2J5lzI">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -50)" d="M 0 0 L 170 0 L 170 100 L 0 100 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>

    <g transform="matrix(1 0 0 1 195.59 1050)" id="5oHf10LhzZhVNCrqjAi8"  >
        @forelse ( $siteplan->where('code_product', '5oHf10LhzZhVNCrqjAi8') as $hasil)
            @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -50)" d="M 0 0 L 170 0 L 170 100 L 0 100 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style=" fill:#f50505; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -50)" d="M 0 0 L 170 0 L 170 100 L 0 100 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-5oHf10LhzZhVNCrqjAi8">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -50)" d="M 0 0 L 170 0 L 170 100 L 0 100 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="5oHf10LhzZhVNCrqjAi8">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -50)" d="M 0 0 L 170 0 L 170 100 L 0 100 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>

    <g transform="matrix(1 0 0 1 195.59 1150)" id="bXDmkIQC9NRpyOVLaD3DU"  >
        @forelse ( $siteplan->where('code_product', 'bXDmkIQC9NRpyOVLaD3DU') as $hasil)
            @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -50)" d="M 0 0 L 170 0 L 170 100 L 0 100 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style=" fill:#f50505; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -50)" d="M 0 0 L 170 0 L 170 100 L 0 100 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-bXDmkIQC9NRpyOVLaD3DU">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -50)" d="M 0 0 L 170 0 L 170 100 L 0 100 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="bXDmkIQC9NRpyOVLaD3DU">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -50)" d="M 0 0 L 170 0 L 170 100 L 0 100 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>
    <g transform="matrix(1 0 0 1 195.59 1250)" id="j56747Q_toTy9Sdv913Kp"  >
        @forelse ( $siteplan->where('code_product', 'j56747Q_toTy9Sdv913Kp') as $hasil)
            @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style=" fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -50)" d="M 0 0 L 170 0 L 170 100 L 0 100 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style=" fill:#f50505; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -50)" d="M 0 0 L 170 0 L 170 100 L 0 100 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-j56747Q_toTy9Sdv913Kp">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -50)" d="M 0 0 L 170 0 L 170 100 L 0 100 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="j56747Q_toTy9Sdv913Kp">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -50)" d="M 0 0 L 170 0 L 170 100 L 0 100 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>

    <g transform="matrix(1 0 0 1 195.59 1448.5)" id="TvtoeIx3JzTShocxZP59"  >
        @forelse ( $siteplan->where('code_product', 'TvtoeIx3JzTShocxZP59') as $hasil)
            @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -50)" d="M 0 0 L 170 0 L 170 100 L 0 100 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style=" fill:#f50505; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -50)" d="M 0 0 L 170 0 L 170 100 L 0 100 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-TvtoeIx3JzTShocxZP59">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -50)" d="M 0 0 L 170 0 L 170 100 L 0 100 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="TvtoeIx3JzTShocxZP59">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -50)" d="M 0 0 L 170 0 L 170 100 L 0 100 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>

    <g transform="matrix(1 0 0 1 195.59 1549.5)" id="TA9J9NkrN1klBfInp6FXm"  >
        @forelse ( $siteplan->where('code_product', 'TA9J9NkrN1klBfInp6FXm') as $hasil)
            @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -50)" d="M 0 0 L 170 0 L 170 100 L 0 100 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style="fill:#f50505; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -50)" d="M 0 0 L 170 0 L 170 100 L 0 100 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-TA9J9NkrN1klBfInp6FXm">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -50)" d="M 0 0 L 170 0 L 170 100 L 0 100 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="TA9J9NkrN1klBfInp6FXm">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -50)" d="M 0 0 L 170 0 L 170 100 L 0 100 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>

    <g transform="matrix(1 0 0 1 195.59 1649.5)" id="q96_g70jz5hDe6cacvo5u"  >
        @forelse ( $siteplan->where('code_product', 'q96_g70jz5hDe6cacvo5u') as $hasil)
            @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -50)" d="M 0 0 L 170 0 L 170 100 L 0 100 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style=" fill:#f50505; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -50)" d="M 0 0 L 170 0 L 170 100 L 0 100 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-q96_g70jz5hDe6cacvo5u">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -50)" d="M 0 0 L 170 0 L 170 100 L 0 100 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="q96_g70jz5hDe6cacvo5u">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -50)" d="M 0 0 L 170 0 L 170 100 L 0 100 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>

    <g transform="matrix(1 0 0 1 195.59 1749.5)" id="ejVAFXh1yTOfy9dTxw1N"  >
        @forelse ( $siteplan->where('code_product', 'ejVAFXh1yTOfy9dTxw1N') as $hasil)
            @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style=" fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -50)" d="M 0 0 L 170 0 L 170 100 L 0 100 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style=" fill:#f50505; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -50)" d="M 0 0 L 170 0 L 170 100 L 0 100 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-ejVAFXh1yTOfy9dTxw1N">
                    <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -50)" d="M 0 0 L 170 0 L 170 100 L 0 100 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="ejVAFXh1yTOfy9dTxw1N">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -50)" d="M 0 0 L 170 0 L 170 100 L 0 100 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>

    <g transform="matrix(1 0 0 1 195.59 1849.5)" id="7iFXna9HNLCVxyItVcp3R"  >
        @forelse ( $siteplan->where('code_product', '7iFXna9HNLCVxyItVcp3R') as $hasil)
            @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -50)" d="M 0 0 L 170 0 L 170 100 L 0 100 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style=" fill:#f50505; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -50)" d="M 0 0 L 170 0 L 170 100 L 0 100 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-7iFXna9HNLCVxyItVcp3R">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -50)" d="M 0 0 L 170 0 L 170 100 L 0 100 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="7iFXna9HNLCVxyItVcp3R">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -50)" d="M 0 0 L 170 0 L 170 100 L 0 100 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>

    <g transform="matrix(1 0 0 1 195.59 1949.5)" id="0Xosq09UAMqzpMDSlnQQ"  >
        @forelse ( $siteplan->where('code_product', '0Xosq09UAMqzpMDSlnQQ') as $hasil)
            @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style="fill:#ffc107;  stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -50)" d="M 0 0 L 170 0 L 170 100 L 0 100 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style=" fill:#f50505; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -50)" d="M 0 0 L 170 0 L 170 100 L 0 100 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-0Xosq09UAMqzpMDSlnQQ">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -50)" d="M 0 0 L 170 0 L 170 100 L 0 100 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="0Xosq09UAMqzpMDSlnQQ">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -50)" d="M 0 0 L 170 0 L 170 100 L 0 100 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>

    <g transform="matrix(1 0 0 1 195.59 2049.5)" id="tyH1e12Xa2zX_owB9i2ma"  >
        @forelse ( $siteplan->where('code_product', 'tyH1e12Xa2zX_owB9i2ma') as $hasil)
            @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -50)" d="M 0 0 L 170 0 L 170 100 L 0 100 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style=" fill:#f50505; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -50)" d="M 0 0 L 170 0 L 170 100 L 0 100 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-tyH1e12Xa2zX_owB9i2ma">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -50)" d="M 0 0 L 170 0 L 170 100 L 0 100 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="tyH1e12Xa2zX_owB9i2ma">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -50)" d="M 0 0 L 170 0 L 170 100 L 0 100 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>

    <g transform="matrix(1 0 0 1 195.59 2148.5)" id="UA1nKsdwnnVQ5suDJ_NUz"  >
        @forelse ( $siteplan->where('code_product', 'UA1nKsdwnnVQ5suDJ_NUz') as $hasil)
            @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style="fill:#ffc107; : rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -50)" d="M 0 0 L 170 0 L 170 100 L 0 100 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style="  fill:#f50505; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -50)" d="M 0 0 L 170 0 L 170 100 L 0 100 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-UA1nKsdwnnVQ5suDJ_NUz">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -50)" d="M 0 0 L 170 0 L 170 100 L 0 100 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="UA1nKsdwnnVQ5suDJ_NUz">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-85, -50)" d="M 0 0 L 170 0 L 170 100 L 0 100 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>



    <g transform="matrix(1.39 0 0 0.13 322.13 2530.03)" id="ZYJNicNQzti5ODcI0PDEQ"  >
    <path style="stroke: rgb(193,96,56); stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(84,83,83); fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -219.5 -219.5 L 219.5 -219.5 L 219.5 219.5 L -219.5 219.5 z" stroke-linecap="round" />
    </g>
    <g transform="matrix(0 1 -1 0 658.27 1763.95)" style="" id="kdggBq8R0s78yxQOSRJi6"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="30" font-style="normal" font-weight="700" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(255,255,255); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-143.25" y="2.03" >JALAN SEKUNDER C</tspan></text>
    </g>
    <g transform="matrix(0 1 -1 0 660.27 799.55)" style="" id="nUPdKq1vbS0Jqqr8O5At-"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="30" font-style="normal" font-weight="700" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(255,255,255); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-143.25" y="2.03" >JALAN SEKUNDER C</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 307.09 2525.23)" style="" id="k83RySNUmKEup3SDYaFeg"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="25" font-style="normal" font-weight="700" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(255,255,255); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-59.16" y="10.68" >TERSIER 9</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 307.59 170.97)" style="" id="Tn8PGC_I5ll3-w8vKJ1u0"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="25" font-style="normal" font-weight="700" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(255,255,255); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-66.31" y="10.68" >TERSIER 10</tspan></text>
    </g>
    <g transform="matrix(0 1 -1 0 460.09 2350.5)" style="" id="xBGnfhfqbU-LdvwSTXTRE"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="40" font-style="normal" font-weight="700" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-87.95" y="13.19" >RUKO A1</tspan></text>
    </g>
    <g transform="matrix(0 1 -1 0 375.59 2350.5)" style="" id="kwkAjESAeqDoQBdjx6UpN"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="40" font-style="normal" font-weight="700" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-87.95" y="13.19" >RUKO A2</tspan></text>
    </g>
    <g transform="matrix(0 1 -1 0 153.09 2350.5)" style="" id="NpPwhRgN8BiVg1_oB2rRL"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="40" font-style="normal" font-weight="700" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-87.95" y="13.19" >RUKO B2</tspan></text>
    </g>
    <g transform="matrix(0 1 -1 0 239.63 2350.5)" style="" id="7rXeflyso7TbEMumpfLjd"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="40" font-style="normal" font-weight="700" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-87.95" y="13.19" >RUKO B1</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 417.09 2151.29)" style="" id="2KmcwufMmkS3kslJLni3P"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="30" font-style="normal" font-weight="700" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-63.27" y="9.64" >BLOK A1</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 417.09 2051.5)" style="" id="OG-t-U_mUim-76lPoZY4G"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="30" font-style="normal" font-weight="700" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-63.27" y="9.64" >BLOK A2</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 419.59 1951.5)" style="" id="RyEbdOTuRX8D-hLjx0DMZ"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="30" font-style="normal" font-weight="700" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-63.27" y="9.64" >BLOK A3</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 417.09 1851.5)" style="" id="W8tX7wnGiYqXt1vt8WrNu"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="30" font-style="normal" font-weight="700" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-63.27" y="9.64" >BLOK A4</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 416.59 1751.5)" style="" id="GYScSWOVI3zfLfj-R0qeo"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="30" font-style="normal" font-weight="700" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-63.27" y="9.64" >BLOK A5</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 416.59 1657.95)" style="" id="OAoy-I_gbQf3CLJr4yH-k"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="30" font-style="normal" font-weight="700" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-63.27" y="9.64" >BLOK A6</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 416.09 1551.5)" style="" id="NfFcnPu_YGyk0GKKS7EH5"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="30" font-style="normal" font-weight="700" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-63.27" y="9.64" >BLOK A7</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 419.59 1451.5)" style="" id="mlykkAXMUhON_wHEJVe6g"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="30" font-style="normal" font-weight="700" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-63.27" y="9.64" >BLOK A8</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 193.34 2149.89)" style="" id="SaSfWH2IZ_sR-tDSSZPAS"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="30" font-style="normal" font-weight="700" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-63" y="9.64" >BLOK B1</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 193.34 2050.11)" style="" id="dpK7H_KLfKI0Q0Qx2wLXu"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="30" font-style="normal" font-weight="700" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-63" y="9.64" >BLOK B2</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 195.84 1950.11)" style="" id="tcPHzDC9CxWWEOdLPJUCk"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="30" font-style="normal" font-weight="700" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-63" y="9.64" >BLOK B3</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 193.34 1850.11)" style="" id="nq7oPWD_LKtHwouyqONKC"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="30" font-style="normal" font-weight="700" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-63" y="9.64" >BLOK B4</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 192.84 1750.11)" style="" id="ZpQlEywnAJLWor_0Ft3WS"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="30" font-style="normal" font-weight="700" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-63" y="9.64" >BLOK B5</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 192.84 1656.56)" style="" id="37QpEz_PNOonK2VnkVys_"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="30" font-style="normal" font-weight="700" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-63" y="9.64" >BLOK B6</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 192.34 1550.11)" style="" id="AGP75CxaSru7xhMOEaFjC"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="30" font-style="normal" font-weight="700" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-63" y="9.64" >BLOK B7</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 195.84 1450.11)" style="" id="j4LSq5egatHj1wt8oXf8C"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="30" font-style="normal" font-weight="700" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-63" y="9.64" >BLOK B8</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 416.09 1249.5)" style="" id="4gOgGt61HUlC1zDcedMkP"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="30" font-style="normal" font-weight="700" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-63.27" y="9.64" >BLOK A9</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 417.09 1150)" style="" id="gCi181z-HlzPLZWDd4uN-"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="30" font-style="normal" font-weight="700" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-71.85" y="9.64" >BLOK A10</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 416.09 1050)" style="" id="2vr9VycdK_V2N5L4PP1uC"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="30" font-style="normal" font-weight="700" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-71.85" y="9.64" >BLOK A11</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 416.09 950)" style="" id="LsKdxFm-dcb8zy3Nge1lk"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="30" font-style="normal" font-weight="700" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-71.85" y="9.64" >BLOK A12</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 416.09 849.5)" style="" id="QkaAdvA8TDAPt6wlUi1eB"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="30" font-style="normal" font-weight="700" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-71.85" y="9.64" >BLOK A13</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 416.09 750)" style="" id="FZGqexryg7TinLML38fPg"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="30" font-style="normal" font-weight="700" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-71.85" y="9.64" >BLOK A14</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 417.09 649.5)" style="" id="6h5pufJiPuo8SJcP3dm0l"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="30" font-style="normal" font-weight="700" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-71.85" y="9.64" >BLOK A15</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 416.59 550)" style="" id="2zvSjNwjXRKOFFbKOrWDO"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="30" font-style="normal" font-weight="700" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-71.85" y="9.64" >BLOK A16</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 195.84 1247.75)" style="" id="ZvanELgK7qR8fZBCeucc7"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="30" font-style="normal" font-weight="700" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-63" y="9.64" >BLOK B9</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 193.34 1149.5)" style="" id="_UqI2d4rkNgPYE-LtwCSr"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="30" font-style="normal" font-weight="700" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-71.58" y="9.64" >BLOK B10</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 195.84 1048.25)" style="" id="HZ2qWabA9YuocwZWr_Eh4"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="30" font-style="normal" font-weight="700" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-71.58" y="9.64" >BLOK B11</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 195.84 948.25)" style="" id="nl03L_EwR-IfjF3MraNSn"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="30" font-style="normal" font-weight="700" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-71.58" y="9.64" >BLOK B12</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 195.84 847.75)" style="" id="dX0G3SjgnO3nkj5j0cCcM"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="30" font-style="normal" font-weight="700" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-71.58" y="9.64" >BLOK B13</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 195.84 748.25)" style="" id="H4i-zwaWrM-Kd32GZuiPH"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="30" font-style="normal" font-weight="700" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-71.58" y="9.64" >BLOK B14</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 196.84 647.75)" style="" id="vSFw-uAMLiV5XUvUXJ27F"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="30" font-style="normal" font-weight="700" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-71.58" y="9.64" >BLOK B15</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 196.34 548.25)" style="" id="ghG5B8gvQwwYoyNXPJpu_"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="30" font-style="normal" font-weight="700" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-71.58" y="9.64" >BLOK B16</tspan></text>
    </g>
    <g transform="matrix(0 1 -1 0 459.34 350)" style="" id="D7GYbW4hkKttDV3AaZ0m-"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="40" font-style="normal" font-weight="700" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-87.95" y="13.19" >RUKO A3</tspan></text>
    </g>
    <g transform="matrix(0 1 -1 0 374.84 350)" style="" id="d2TjqgmzjO8f2IanNgX9u"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="40" font-style="normal" font-weight="700" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-87.95" y="13.19" >RUKO A4</tspan></text>
    </g>
    <g transform="matrix(0 1 -1 0 236.34 359.35)" style="" id="9frkZD9H2qt0JPKDAJx9L"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="40" font-style="normal" font-weight="700" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-87.59" y="13.19" >RUKO B3</tspan></text>
    </g>
    <g transform="matrix(0 1 -1 0 151.84 359.35)" style="" id="EyYlciG2x7Fgd3hb3ZD5E"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="40" font-style="normal" font-weight="700" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-87.59" y="13.19" >RUKO B4</tspan></text>
    </g>
</svg>
