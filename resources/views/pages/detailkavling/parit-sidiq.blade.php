<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="100%"
    viewBox="0 0 500 1800" xml:space="preserve">

    <g transform="matrix(1 0 0 1 250 79.63)" id="X_rw7ziqOpQUlvr6WRsCW">
        <path
            style="stroke: rgb(93,93,93); stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(93,93,93); fill-rule: nonzero; opacity: 1;"
            vector-effect="non-scaling-stroke" transform=" translate(-225, -25)" d="M 0 0 L 450 0 L 450 50 L 0 50 z"
            stroke-linecap="round" />
    </g>
    <g transform="matrix(1 0 0 1 250 79.63)" style="" id="OJC9a39GA46zRnV-HmBkf">
        <text xml:space="preserve" font-family="Montserrat" font-size="20" font-style="normal" font-weight="700"
            line-height="1"
            style="stroke: rgb(0,0,0); stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(255,255,255); fill-rule: nonzero; opacity: 1; white-space: pre;">
            <tspan x="-77.75" y="6.28">JALAN UTAMA</tspan>
        </text>
    </g>

    <g transform="matrix(0 1 -1 0 250 851.39)" id="r-IH1uWHVdUGdQIOKz9lh">
        <path
            style="stroke: rgb(93,93,93); stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(93,93,93); fill-rule: nonzero; opacity: 1;"
            vector-effect="non-scaling-stroke" transform=" translate(-750, -25)" d="M 0 0 L 1500 0 L 1500 50 L 0 50 z"
            stroke-linecap="round" />
    </g>

    <g transform="matrix(1 0 0 1 375 153.63)" id="Aq99woAfXRdszeq0cyCaD">
        @forelse ($siteplan->where('code_product', 'Aq99woAfXRdszeq0cyCaD') as $hasil)
            @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path
                    style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 2; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(-100, -50)"
                    d="M 0 0 L 200 0 L 200 100 L 0 100 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path
                    style="fill:#f50505; stroke: rgb(0,0,0); stroke-width: 2; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(-100, -50)"
                    d="M 0 0 L 200 0 L 200 100 L 0 100 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
                <a href="#" data-toggle="modal" data-target="#modalBooking-Aq99woAfXRdszeq0cyCaD">
                    <path
                        style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 2; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;"
                        vector-effect="non-scaling-stroke" transform=" translate(-100, -50)"
                        d="M 0 0 L 200 0 L 200 100 L 0 100 z" stroke-linecap="round" />
                </a>
            @endif
        @empty
            <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="Aq99woAfXRdszeq0cyCaD">
                <path
                    style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 2; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(-100, -50)"
                    d="M 0 0 L 200 0 L 200 100 L 0 100 z" stroke-linecap="round" />
            </a>
        @endforelse
    </g>

    <g transform="matrix(1 0 0 1 126 155.63)" id="hFG0n2HSKBe2LKfX0Ocoa">
        @forelse ($siteplan->where('code_product', 'hFG0n2HSKBe2LKfX0Ocoa') as $hasil)
            @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path
                    style="fill:#ffc107;
            stroke: rgb(0,0,0); stroke-width: 2; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(-100, -50)"
                    d="M 0 0 L 200 0 L 200 100 L 0 100 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path
                    style="fill:#f50505;
            stroke: rgb(0,0,0); stroke-width: 2; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(-100, -50)"
                    d="M 0 0 L 200 0 L 200 100 L 0 100 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
                <a href="#" data-toggle="modal" data-target="#modalBooking-hFG0n2HSKBe2LKfX0Ocoa">
                    <path
                        style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 2; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;"
                        vector-effect="non-scaling-stroke" transform=" translate(-100, -50)"
                        d="M 0 0 L 200 0 L 200 100 L 0 100 z" stroke-linecap="round" />
                </a>
            @endif
        @empty
            <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="hFG0n2HSKBe2LKfX0Ocoa">
                <path
                    style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 2; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(-100, -50)"
                    d="M 0 0 L 200 0 L 200 100 L 0 100 z" stroke-linecap="round" />
            </a>
        @endforelse
    </g>

    <g transform="matrix(1 0 0 1 375 240.44)" id="DFHrBlnztNGpKc21t1DbU">
        @forelse ($siteplan->where('code_product', 'DFHrBlnztNGpKc21t1DbU') as $hasil)
            @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path
                    style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 2; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(-100, -37.5)"
                    d="M 0 0 L 200 0 L 200 75 L 0 75 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path
                    style="fill:#f50505 ;stroke: rgb(0,0,0); stroke-width: 2; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(-100, -37.5)"
                    d="M 0 0 L 200 0 L 200 75 L 0 75 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
                <a href="#" data-toggle="modal" data-target="#modalBooking-DFHrBlnztNGpKc21t1DbU">
                    <path
                        style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 2; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;fill-rule: nonzero; opacity: 1;"
                        vector-effect="non-scaling-stroke" transform=" translate(-100, -37.5)"
                        d="M 0 0 L 200 0 L 200 75 L 0 75 z" stroke-linecap="round" />
                </a>
            @endif
        @empty
            <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="DFHrBlnztNGpKc21t1DbU">
                <path
                    style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 2; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(-100, -37.5)"
                    d="M 0 0 L 200 0 L 200 75 L 0 75 z" stroke-linecap="round" />
            </a>
        @endforelse
    </g>

    <g transform="matrix(1 0 0 1 126 228.44)" id="kccPkG6nQcQ6Wvd1dP09x">
        @forelse ($siteplan->where('code_product', 'kccPkG6nQcQ6Wvd1dP09x') as $hasil)
            @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path
                    style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 2; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(-100, -25)"
                    d="M 0 0 L 200 0 L 200 50 L 0 50 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path
                    style="fill:#f50505 ; stroke: rgb(0,0,0); stroke-width: 2; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(-100, -25)"
                    d="M 0 0 L 200 0 L 200 50 L 0 50 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
                <a href="#" data-toggle="modal" data-target="#modalBooking-kccPkG6nQcQ6Wvd1dP09x">
                    <path
                        style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 2; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;"
                        vector-effect="non-scaling-stroke" transform=" translate(-100, -25)"
                        d="M 0 0 L 200 0 L 200 50 L 0 50 z" stroke-linecap="round" />
                </a>
            @endif
        @empty
            <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="kccPkG6nQcQ6Wvd1dP09x">
                <path
                    style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 2; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(-100, -25)"
                    d="M 0 0 L 200 0 L 200 50 L 0 50 z" stroke-linecap="round" />
            </a>
        @endforelse
    </g>

    <g transform="matrix(1 0 0 1 375 315.44)" id="d8J6vup1iahVr7v1sharT">
        @forelse ($siteplan->where('code_product', 'd8J6vup1iahVr7v1sharT') as $hasil)
            @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path
                    style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 2; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(-100, -37.5)"
                    d="M 0 0 L 200 0 L 200 75 L 0 75 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path
                    style="fill:#f50505 ; stroke: rgb(0,0,0); stroke-width: 2; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(-100, -37.5)"
                    d="M 0 0 L 200 0 L 200 75 L 0 75 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
                <a href="#" data-toggle="modal" data-target="#modalBooking-d8J6vup1iahVr7v1sharT">
                    <path
                        style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 2; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;fill-rule: nonzero; opacity: 1;"
                        vector-effect="non-scaling-stroke" transform=" translate(-100, -37.5)"
                        d="M 0 0 L 200 0 L 200 75 L 0 75 z" stroke-linecap="round" />
                </a>
            @endif
        @empty
            <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="d8J6vup1iahVr7v1sharT">
                <path
                    style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 2; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(-100, -37.5)"
                    d="M 0 0 L 200 0 L 200 75 L 0 75 z" stroke-linecap="round" />
            </a>
        @endforelse
    </g>

    <g transform="matrix(1 0 0 1 375 390.44)" id="gailBbw909zschbNAqkEp">
        @forelse ($siteplan->where('code_product', 'gailBbw909zschbNAqkEp') as $hasil)
            @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path
                    style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 2; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(-100, -37.5)"
                    d="M 0 0 L 200 0 L 200 75 L 0 75 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path
                    style="fill:#f50505 ; stroke: rgb(0,0,0); stroke-width: 2; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(-100, -37.5)"
                    d="M 0 0 L 200 0 L 200 75 L 0 75 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
                <a href="#" data-toggle="modal" data-target="#modalBooking-gailBbw909zschbNAqkEp">
                    <path
                        style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 2; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;fill-rule: nonzero; opacity: 1;"
                        vector-effect="non-scaling-stroke" transform=" translate(-100, -37.5)"
                        d="M 0 0 L 200 0 L 200 75 L 0 75 z" stroke-linecap="round" />
                </a>
            @endif
        @empty
            <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="gailBbw909zschbNAqkEp">
                <path
                    style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 2; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(-100, -37.5)"
                    d="M 0 0 L 200 0 L 200 75 L 0 75 z" stroke-linecap="round" />
            </a>
        @endforelse
    </g>

    <g transform="matrix(1 0 0 1 375 465.44)" id="tG4D10CM6JWClxNV8FXoB">
        @forelse ($siteplan->where('code_product', 'tG4D10CM6JWClxNV8FXoB') as $hasil)
            @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path
                    style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 2; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(-100, -37.5)"
                    d="M 0 0 L 200 0 L 200 75 L 0 75 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path
                    style="fill:#f50505 ; stroke: rgb(0,0,0); stroke-width: 2; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(-100, -37.5)"
                    d="M 0 0 L 200 0 L 200 75 L 0 75 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
                <a href="#" data-toggle="modal" data-target="#modalBooking-tG4D10CM6JWClxNV8FXoB">
                    <path
                        style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 2; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;fill-rule: nonzero; opacity: 1;"
                        vector-effect="non-scaling-stroke" transform=" translate(-100, -37.5)"
                        d="M 0 0 L 200 0 L 200 75 L 0 75 z" stroke-linecap="round" />
                </a>
            @endif
        @empty
            <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="tG4D10CM6JWClxNV8FXoB">
                <path
                    style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 2; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(-100, -37.5)"
                    d="M 0 0 L 200 0 L 200 75 L 0 75 z" stroke-linecap="round" />
            </a>
        @endforelse
    </g>

    <g transform="matrix(1 0 0 1 126 290.94)" id="TrH85oZ2PEJLm-JIDcdvj">
        @forelse ($siteplan->where('code_product', 'TrH85oZ2PEJLm-JIDcdvj') as $hasil)
            @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path
                    style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 2; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(-100, -37.5)"
                    d="M 0 0 L 200 0 L 200 75 L 0 75 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path
                    style="fill:#f50505 ; stroke: rgb(0,0,0); stroke-width: 2; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(-100, -37.5)"
                    d="M 0 0 L 200 0 L 200 75 L 0 75 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
                <a href="#" data-toggle="modal" data-target="#modalBooking-TrH85oZ2PEJLm-JIDcdvj">
                    <path
                        style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 2; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;"
                        vector-effect="non-scaling-stroke" transform=" translate(-100, -37.5)"
                        d="M 0 0 L 200 0 L 200 75 L 0 75 z" stroke-linecap="round" />
                </a>
            @endif
        @empty
            <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="TrH85oZ2PEJLm-JIDcdvj">
                <path
                    style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 2; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(-100, -37.5)"
                    d="M 0 0 L 200 0 L 200 75 L 0 75 z" stroke-linecap="round" />
            </a>
        @endforelse
    </g>

    <g transform="matrix(1 0 0 1 126 365.94)" id="neKFVEQnUJeLugB0-w7sR">
        @forelse ($siteplan->where('code_product', 'neKFVEQnUJeLugB0-w7sR') as $hasil)
            @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path
                    style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 2; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(-100, -37.5)"
                    d="M 0 0 L 200 0 L 200 75 L 0 75 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path
                    style="fill:#f50505; stroke: rgb(0,0,0); stroke-width: 2; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(-100, -37.5)"
                    d="M 0 0 L 200 0 L 200 75 L 0 75 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
                <a href="#" data-toggle="modal" data-target="#modalBooking-neKFVEQnUJeLugB0-w7sR">
                    <path
                        style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 2; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;"
                        vector-effect="non-scaling-stroke" transform=" translate(-100, -37.5)"
                        d="M 0 0 L 200 0 L 200 75 L 0 75 z" stroke-linecap="round" />
                </a>
            @endif
        @empty
            <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="neKFVEQnUJeLugB0-w7sR">
                <path
                    style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 2; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(-100, -37.5)"
                    d="M 0 0 L 200 0 L 200 75 L 0 75 z" stroke-linecap="round" />
            </a>
        @endforelse
    </g>

    <g transform="matrix(1 0 0 1 126 440.94)" id="5BCwWf9ynd54LbXYbmd2S">
        @forelse ($siteplan->where('code_product', 'neKFVEQnUJeLugB0-w7sR') as $hasil)
            @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path
                    style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 2; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(-100, -37.5)"
                    d="M 0 0 L 200 0 L 200 75 L 0 75 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path
                    style="fill:#f50505; stroke: rgb(0,0,0); stroke-width: 2; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(-100, -37.5)"
                    d="M 0 0 L 200 0 L 200 75 L 0 75 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
                <a href="#" data-toggle="modal" data-target="#modalBooking-5BCwWf9ynd54LbXYbmd2S">
                    <path
                        style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 2; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;"
                        vector-effect="non-scaling-stroke" transform=" translate(-100, -37.5)"
                        d="M 0 0 L 200 0 L 200 75 L 0 75 z" stroke-linecap="round" />
                </a>
            @endif
        @empty
            <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="5BCwWf9ynd54LbXYbmd2S">
                <path
                    style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 2; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(-100, -37.5)"
                    d="M 0 0 L 200 0 L 200 75 L 0 75 z" stroke-linecap="round" />
            </a>
        @endforelse
    </g>

    <g transform="matrix(1 0 0 1 126 515.94)" id="x2DYn0iJrvxYmmt-7UoA-">
        @forelse ($siteplan->where('code_product', 'x2DYn0iJrvxYmmt-7UoA-') as $hasil)
            @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path
                    style="fill:#ffc107;stroke: rgb(0,0,0); stroke-width: 2; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(-100, -37.5)"
                    d="M 0 0 L 200 0 L 200 75 L 0 75 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path
                    style="fill:#f50505; stroke: rgb(0,0,0); stroke-width: 2; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(-100, -37.5)"
                    d="M 0 0 L 200 0 L 200 75 L 0 75 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
                <a href="#" data-toggle="modal" data-target="#modalBooking-x2DYn0iJrvxYmmt-7UoA-">
                    <path
                        style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 2; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;"
                        vector-effect="non-scaling-stroke" transform=" translate(-100, -37.5)"
                        d="M 0 0 L 200 0 L 200 75 L 0 75 z" stroke-linecap="round" />
                </a>
            @endif
        @empty
            <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="x2DYn0iJrvxYmmt-7UoA-">
                <path
                    style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 2; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(-100, -37.5)"
                    d="M 0 0 L 200 0 L 200 75 L 0 75 z" stroke-linecap="round" />
            </a>
        @endforelse
    </g>

    <g transform="matrix(1 0 0 1 375 528.44)" id="pyjC2C78Mk_V0CGZPHsl9">
        @forelse ($siteplan->where('code_product', 'pyjC2C78Mk_V0CGZPHsl9') as $hasil)
            @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path
                    style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 2; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(-100, -25)"
                    d="M 0 0 L 200 0 L 200 50 L 0 50 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path
                    style="fill:#f50505; stroke: rgb(0,0,0); stroke-width: 2; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(-100, -25)"
                    d="M 0 0 L 200 0 L 200 50 L 0 50 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
                <a href="#" data-toggle="modal" data-target="#modalBooking-pyjC2C78Mk_V0CGZPHsl9">
                    <path
                        style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 2; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;fill-rule: nonzero; opacity: 1;"
                        vector-effect="non-scaling-stroke" transform=" translate(-100, -25)"
                        d="M 0 0 L 200 0 L 200 50 L 0 50 z" stroke-linecap="round" />
                </a>
            @endif
        @empty
            <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="pyjC2C78Mk_V0CGZPHsl9">
                <path
                    style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 2; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(-100, -25)"
                    d="M 0 0 L 200 0 L 200 50 L 0 50 z" stroke-linecap="round" />
            </a>
        @endforelse
    </g>

    <g transform="matrix(1 0 0 1 375 578.44)" id="-XxnhWN0beeMbvaTiccMC">
        @forelse ($siteplan->where('code_product', '-XxnhWN0beeMbvaTiccMC') as $hasil)
            @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path
                    style="fill:#ffc107;stroke: rgb(0,0,0); stroke-width: 2; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(-100, -25)"
                    d="M 0 0 L 200 0 L 200 50 L 0 50 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path
                    style="fill:#f50505;stroke: rgb(0,0,0); stroke-width: 2; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(-100, -25)"
                    d="M 0 0 L 200 0 L 200 50 L 0 50 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
                <a href="#" data-toggle="modal" data-target="#modalBooking--XxnhWN0beeMbvaTiccMC">
                    <path
                        style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 2; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;fill-rule: nonzero; opacity: 1;"
                        vector-effect="non-scaling-stroke" transform=" translate(-100, -25)"
                        d="M 0 0 L 200 0 L 200 50 L 0 50 z" stroke-linecap="round" />
                </a>
            @endif
        @empty
            <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="-XxnhWN0beeMbvaTiccMC">
                <path
                    style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 2; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(-100, -25)"
                    d="M 0 0 L 200 0 L 200 50 L 0 50 z" stroke-linecap="round" />
            </a>
        @endforelse
    </g>

    <g transform="matrix(1 0 0 1 375 627.64)" id="PyNYczuCKG1dYr2Lj2iwk">
        @forelse ($siteplan->where('code_product', 'PyNYczuCKG1dYr2Lj2iwk') as $hasil)
            @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path
                    style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 2; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(-100, -25)"
                    d="M 0 0 L 200 0 L 200 50 L 0 50 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path
                    style="fill:#f50505; stroke: rgb(0,0,0); stroke-width: 2; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(-100, -25)"
                    d="M 0 0 L 200 0 L 200 50 L 0 50 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
                <a href="#" data-toggle="modal" data-target="#modalBooking-PyNYczuCKG1dYr2Lj2iwk">
                    <path
                        style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 2; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;fill-rule: nonzero; opacity: 1;"
                        vector-effect="non-scaling-stroke" transform=" translate(-100, -25)"
                        d="M 0 0 L 200 0 L 200 50 L 0 50 z" stroke-linecap="round" />
                </a>
            @endif
        @empty
            <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="PyNYczuCKG1dYr2Lj2iwk">
                <path
                    style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 2; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(-100, -25)"
                    d="M 0 0 L 200 0 L 200 50 L 0 50 z" stroke-linecap="round" />
            </a>
        @endforelse
    </g>

    <g transform="matrix(1 0 0 1 375 677.64)" id="vhfO-lKfPB3bkv32HVjcX">
        @forelse ($siteplan->where('code_product', 'vhfO-lKfPB3bkv32HVjcX') as $hasil)
            @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path
                    style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 2; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(-100, -25)"
                    d="M 0 0 L 200 0 L 200 50 L 0 50 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path
                    style="fill:#f50505; stroke: rgb(0,0,0); stroke-width: 2; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(-100, -25)"
                    d="M 0 0 L 200 0 L 200 50 L 0 50 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
                <a href="#" data-toggle="modal" data-target="#modalBooking-vhfO-lKfPB3bkv32HVjcX">
                    <path
                        style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 2; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;fill-rule: nonzero; opacity: 1;"
                        vector-effect="non-scaling-stroke" transform=" translate(-100, -25)"
                        d="M 0 0 L 200 0 L 200 50 L 0 50 z" stroke-linecap="round" />
                </a>
            @endif
        @empty
            <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="vhfO-lKfPB3bkv32HVjcX">
                <path
                    style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 2; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(-100, -25)"
                    d="M 0 0 L 200 0 L 200 50 L 0 50 z" stroke-linecap="round" />
            </a>
        @endforelse
    </g>

    <g transform="matrix(1 0 0 1 375 727.64)" id="dEbfi5kZ8m-zymsyvYNo2">
        @forelse ($siteplan->where('code_product', 'dEbfi5kZ8m-zymsyvYNo2') as $hasil)
            @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path
                    style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 2; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(-100, -25)"
                    d="M 0 0 L 200 0 L 200 50 L 0 50 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path
                    style="fill:#f50505; stroke: rgb(0,0,0); stroke-width: 2; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(-100, -25)"
                    d="M 0 0 L 200 0 L 200 50 L 0 50 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
                <a href="#" data-toggle="modal" data-target="#modalBooking-dEbfi5kZ8m-zymsyvYNo2">
                    <path
                        style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 2; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;fill-rule: nonzero; opacity: 1;"
                        vector-effect="non-scaling-stroke" transform=" translate(-100, -25)"
                        d="M 0 0 L 200 0 L 200 50 L 0 50 z" stroke-linecap="round" />
                </a>
            @endif
        @empty
            <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="dEbfi5kZ8m-zymsyvYNo2">
                <path
                    style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 2; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(-100, -25)"
                    d="M 0 0 L 200 0 L 200 50 L 0 50 z" stroke-linecap="round" />
            </a>
        @endforelse
    </g>

    <g transform="matrix(1 0 0 1 375 777.64)" id="XlGRsMyOkJ6Jq1k3LgPPb">
        @forelse ($siteplan->where('code_product', 'XlGRsMyOkJ6Jq1k3LgPPb') as $hasil)
            @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path
                    style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 2; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(-100, -25)"
                    d="M 0 0 L 200 0 L 200 50 L 0 50 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path
                    style="fill:#f50505; stroke: rgb(0,0,0); stroke-width: 2; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(-100, -25)"
                    d="M 0 0 L 200 0 L 200 50 L 0 50 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
                <a href="#" data-toggle="modal" data-target="#modalBooking-XlGRsMyOkJ6Jq1k3LgPPb">
                    <path
                        style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 2; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;fill-rule: nonzero; opacity: 1;"
                        vector-effect="non-scaling-stroke" transform=" translate(-100, -25)"
                        d="M 0 0 L 200 0 L 200 50 L 0 50 z" stroke-linecap="round" />
                </a>
            @endif
        @empty
            <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="XlGRsMyOkJ6Jq1k3LgPPb">
                <path
                    style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 2; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(-100, -25)"
                    d="M 0 0 L 200 0 L 200 50 L 0 50 z" stroke-linecap="round" />
            </a>
        @endforelse
    </g>

    <g transform="matrix(1 0 0 1 375 826.84)" id="rIxQRKshWipjwdWzH2hB4">
        @forelse ($siteplan->where('code_product', 'rIxQRKshWipjwdWzH2hB4') as $hasil)
            @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path
                    style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 2; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(-100, -25)"
                    d="M 0 0 L 200 0 L 200 50 L 0 50 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path
                    style="fill:#f50505;stroke: rgb(0,0,0); stroke-width: 2; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(-100, -25)"
                    d="M 0 0 L 200 0 L 200 50 L 0 50 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
                <a href="#" data-toggle="modal" data-target="#modalBooking-rIxQRKshWipjwdWzH2hB4">
                    <path
                        style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 2; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;fill-rule: nonzero; opacity: 1;"
                        vector-effect="non-scaling-stroke" transform=" translate(-100, -25)"
                        d="M 0 0 L 200 0 L 200 50 L 0 50 z" stroke-linecap="round" />
                </a>
            @endif
        @empty
            <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="rIxQRKshWipjwdWzH2hB4">
                <path
                    style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 2; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(-100, -25)"
                    d="M 0 0 L 200 0 L 200 50 L 0 50 z" stroke-linecap="round" />
            </a>
        @endforelse
    </g>

    <g transform="matrix(1 0 0 1 375 876.84)" id="4q6awB5QmEOgksWTmJTd3">
        @forelse ($siteplan->where('code_product', '4q6awB5QmEOgksWTmJTd3') as $hasil)
            @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path
                    style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 2; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(-100, -25)"
                    d="M 0 0 L 200 0 L 200 50 L 0 50 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path
                    style="fill:#f50505; stroke: rgb(0,0,0); stroke-width: 2; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(-100, -25)"
                    d="M 0 0 L 200 0 L 200 50 L 0 50 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
                <a href="#" data-toggle="modal" data-target="#modalBooking-4q6awB5QmEOgksWTmJTd3">
                    <path
                        style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 2; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;fill-rule: nonzero; opacity: 1;"
                        vector-effect="non-scaling-stroke" transform=" translate(-100, -25)"
                        d="M 0 0 L 200 0 L 200 50 L 0 50 z" stroke-linecap="round" />
                </a>
            @endif
        @empty
            <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="4q6awB5QmEOgksWTmJTd3">
                <path
                    style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 2; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(-100, -25)"
                    d="M 0 0 L 200 0 L 200 50 L 0 50 z" stroke-linecap="round" />
            </a>
        @endforelse
    </g>

    <g transform="matrix(1 0 0 1 375 926.84)" id="6E5pwF7n5KVZBtjvNHtUJ">
        @forelse ($siteplan->where('code_product', '6E5pwF7n5KVZBtjvNHtUJ') as $hasil)
            @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path
                    style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 2; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(-100, -25)"
                    d="M 0 0 L 200 0 L 200 50 L 0 50 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path
                    style="fill:#f50505; stroke: rgb(0,0,0); stroke-width: 2; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(-100, -25)"
                    d="M 0 0 L 200 0 L 200 50 L 0 50 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
                <a href="#" data-toggle="modal" data-target="#modalBooking-6E5pwF7n5KVZBtjvNHtUJ">
                    <path
                        style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 2; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;fill-rule: nonzero; opacity: 1;"
                        vector-effect="non-scaling-stroke" transform=" translate(-100, -25)"
                        d="M 0 0 L 200 0 L 200 50 L 0 50 z" stroke-linecap="round" />
                </a>
            @endif
        @empty
            <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="6E5pwF7n5KVZBtjvNHtUJ">
                <path
                    style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 2; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(-100, -25)"
                    d="M 0 0 L 200 0 L 200 50 L 0 50 z" stroke-linecap="round" />
            </a>
        @endforelse
    </g>

    <g transform="matrix(1 0 0 1 375 976.84)" id="jFMJHwU5VtIz0ajRhusKr">
        @forelse ($siteplan->where('code_product', 'jFMJHwU5VtIz0ajRhusKr') as $hasil)
            @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path
                    style="fill:#ffc107;stroke: rgb(0,0,0); stroke-width: 2; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(-100, -25)"
                    d="M 0 0 L 200 0 L 200 50 L 0 50 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path
                    style="fill:#f50505; stroke: rgb(0,0,0); stroke-width: 2; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(-100, -25)"
                    d="M 0 0 L 200 0 L 200 50 L 0 50 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
                <a href="#" data-toggle="modal" data-target="#modalBooking-jFMJHwU5VtIz0ajRhusKr">
                    <path
                        style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 2; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;fill-rule: nonzero; opacity: 1;"
                        vector-effect="non-scaling-stroke" transform=" translate(-100, -25)"
                        d="M 0 0 L 200 0 L 200 50 L 0 50 z" stroke-linecap="round" />
                </a>
            @endif
        @empty
            <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="jFMJHwU5VtIz0ajRhusKr">
                <path
                    style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 2; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(-100, -25)"
                    d="M 0 0 L 200 0 L 200 50 L 0 50 z" stroke-linecap="round" />
            </a>
        @endforelse
    </g>

    <g transform="matrix(1 0 0 1 375 1026.04)" id="xOKBOSWsslvwpiwyhAEp8">
        @forelse ($siteplan->where('code_product', 'xOKBOSWsslvwpiwyhAEp8') as $hasil)
            @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path
                    style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 2; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(-100, -25)"
                    d="M 0 0 L 200 0 L 200 50 L 0 50 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path
                    style="fill:#f50505; stroke: rgb(0,0,0); stroke-width: 2; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(-100, -25)"
                    d="M 0 0 L 200 0 L 200 50 L 0 50 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
                <a href="#" data-toggle="modal" data-target="#modalBooking-xOKBOSWsslvwpiwyhAEp8">
                    <path
                        style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 2; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;fill-rule: nonzero; opacity: 1;"
                        vector-effect="non-scaling-stroke" transform=" translate(-100, -25)"
                        d="M 0 0 L 200 0 L 200 50 L 0 50 z" stroke-linecap="round" />
                </a>
            @endif
        @empty
            <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="xOKBOSWsslvwpiwyhAEp8">
                <path
                    style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 2; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(-100, -25)"
                    d="M 0 0 L 200 0 L 200 50 L 0 50 z" stroke-linecap="round" />
            </a>
        @endforelse
    </g>


    <g transform="matrix(1 0 0 1 375 1076.04)" id="geN-QOPDYdks8xRQV0akO">
        @forelse ($siteplan->where('code_product', 'geN-QOPDYdks8xRQV0akO') as $hasil)
            @if ($hasil->status == 'Booking' or $hasil->status == 'Pending')
                <path
                    style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 2; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(-100, -25)"
                    d="M 0 0 L 200 0 L 200 50 L 0 50 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path
                    style="fill:#f50505;stroke: rgb(0,0,0); stroke-width: 2; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(-100, -25)"
                    d="M 0 0 L 200 0 L 200 50 L 0 50 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
                <a href="#" data-toggle="modal" data-target="#modalBooking-geN-QOPDYdks8xRQV0akO">
                    <path
                        style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 2; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;fill-rule: nonzero; opacity: 1;"
                        vector-effect="non-scaling-stroke" transform=" translate(-100, -25)"
                        d="M 0 0 L 200 0 L 200 50 L 0 50 z" stroke-linecap="round" />
                </a>
            @endif
        @empty
            <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="geN-QOPDYdks8xRQV0akO">
                <path
                    style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 2; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(-100, -25)"
                    d="M 0 0 L 200 0 L 200 50 L 0 50 z" stroke-linecap="round" />
            </a>
        @endforelse
    </g>

    <g transform="matrix(1 0 0 1 375 1126.04)" id="xGhnaTgzYWW6hhyP0IaZv">
        @forelse ($siteplan->where('code_product', 'xGhnaTgzYWW6hhyP0IaZv') as $hasil)
            @if ($hasil->status == 'Booking' or $hasil->status == 'Pending')
                <path
                    style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 2; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(-100, -25)"
                    d="M 0 0 L 200 0 L 200 50 L 0 50 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path
                    style="fill:#f50505; stroke: rgb(0,0,0); stroke-width: 2; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(-100, -25)"
                    d="M 0 0 L 200 0 L 200 50 L 0 50 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
                <a href="#" data-toggle="modal" data-target="#modalBooking-xGhnaTgzYWW6hhyP0IaZv">
                    <path
                        style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 2; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;fill-rule: nonzero; opacity: 1;"
                        vector-effect="non-scaling-stroke" transform=" translate(-100, -25)"
                        d="M 0 0 L 200 0 L 200 50 L 0 50 z" stroke-linecap="round" />
                </a>
            @endif
        @empty
            <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="xGhnaTgzYWW6hhyP0IaZv">
                <path
                    style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 2; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(-100, -25)"
                    d="M 0 0 L 200 0 L 200 50 L 0 50 z" stroke-linecap="round" />
            </a>
        @endforelse
    </g>

    <g transform="matrix(1 0 0 1 375 1176.04)" id="Q4PXpUlS5-O9k8nb3_nNM">
        @forelse ($siteplan->where('code_product', 'Q4PXpUlS5-O9k8nb3_nNM') as $hasil)
            @if ($hasil->status == 'Booking' or $hasil->status == 'Pending')
                <path
                    style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 2; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(-100, -25)"
                    d="M 0 0 L 200 0 L 200 50 L 0 50 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path
                    style="fill:#f50505; stroke: rgb(0,0,0); stroke-width: 2; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(-100, -25)"
                    d="M 0 0 L 200 0 L 200 50 L 0 50 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
                <a href="#" data-toggle="modal" data-target="#modalBooking-Q4PXpUlS5-O9k8nb3_nNM">
                    <path
                        style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 2; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;fill-rule: nonzero; opacity: 1;"
                        vector-effect="non-scaling-stroke" transform=" translate(-100, -25)"
                        d="M 0 0 L 200 0 L 200 50 L 0 50 z" stroke-linecap="round" />
                </a>
            @endif
        @empty
            <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="Q4PXpUlS5-O9k8nb3_nNM">
                <path
                    style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 2; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(-100, -25)"
                    d="M 0 0 L 200 0 L 200 50 L 0 50 z" stroke-linecap="round" />
            </a>
        @endforelse
    </g>

    <g transform="matrix(1 0 0 1 375 1225.24)" id="RMpwEV41g2oCqPxtALHTp">
        @forelse ($siteplan->where('code_product', 'RMpwEV41g2oCqPxtALHTp') as $hasil)
            @if ($hasil->status == 'Booking' or $hasil->status == 'Pending')
                <path
                    style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 2; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(-100, -25)"
                    d="M 0 0 L 200 0 L 200 50 L 0 50 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path
                    style="fill:#f50505; stroke: rgb(0,0,0); stroke-width: 2; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(-100, -25)"
                    d="M 0 0 L 200 0 L 200 50 L 0 50 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
                <a href="#" data-toggle="modal" data-target="#modalBooking-RMpwEV41g2oCqPxtALHTp">
                    <path
                        style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 2; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;fill-rule: nonzero; opacity: 1;"
                        vector-effect="non-scaling-stroke" transform=" translate(-100, -25)"
                        d="M 0 0 L 200 0 L 200 50 L 0 50 z" stroke-linecap="round" />
                </a>
            @endif
        @empty
            <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="RMpwEV41g2oCqPxtALHTp">
                <path
                    style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 2; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(-100, -25)"
                    d="M 0 0 L 200 0 L 200 50 L 0 50 z" stroke-linecap="round" />
            </a>
        @endforelse
    </g>

    <g transform="matrix(1 0 0 1 375 1275.24)" id="OloGZK6XyRiP5MhRuv6Rf">
        @forelse ($siteplan->where('code_product', 'OloGZK6XyRiP5MhRuv6Rf') as $hasil)
            @if ($hasil->status == 'Booking' or $hasil->status == 'Pending')
                <path
                    style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 2; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(-100, -25)"
                    d="M 0 0 L 200 0 L 200 50 L 0 50 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path
                    style="fill:#f50505;stroke: rgb(0,0,0); stroke-width: 2; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(-100, -25)"
                    d="M 0 0 L 200 0 L 200 50 L 0 50 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
                <a href="#" data-toggle="modal" data-target="#modalBooking-OloGZK6XyRiP5MhRuv6Rf">
                    <path
                        style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 2; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;fill-rule: nonzero; opacity: 1;"
                        vector-effect="non-scaling-stroke" transform=" translate(-100, -25)"
                        d="M 0 0 L 200 0 L 200 50 L 0 50 z" stroke-linecap="round" />
                </a>
            @endif
        @empty
            <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="OloGZK6XyRiP5MhRuv6Rf">
                <path
                    style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 2; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(-100, -25)"
                    d="M 0 0 L 200 0 L 200 50 L 0 50 z" stroke-linecap="round" />
            </a>
        @endforelse
    </g>


    <g transform="matrix(1 0 0 1 375 1325.24)" id="0JH0xyAA4BEcwhPgOB8YT">
        @forelse ($siteplan->where('code_product', '0JH0xyAA4BEcwhPgOB8YT') as $hasil)
            @if ($hasil->status == 'Booking' or $hasil->status == 'Pending')
                <path
                    style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 2; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(-100, -25)"
                    d="M 0 0 L 200 0 L 200 50 L 0 50 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path
                    style="fill:#f50505; stroke: rgb(0,0,0); stroke-width: 2; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(-100, -25)"
                    d="M 0 0 L 200 0 L 200 50 L 0 50 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
                <a href="#" data-toggle="modal" data-target="#modalBooking-0JH0xyAA4BEcwhPgOB8YT">
                    <path
                        style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 2; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;fill-rule: nonzero; opacity: 1;"
                        vector-effect="non-scaling-stroke" transform=" translate(-100, -25)"
                        d="M 0 0 L 200 0 L 200 50 L 0 50 z" stroke-linecap="round" />
                </a>
            @endif
        @empty
            <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="0JH0xyAA4BEcwhPgOB8YT">
                <path
                    style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 2; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(-100, -25)"
                    d="M 0 0 L 200 0 L 200 50 L 0 50 z" stroke-linecap="round" />

            </a>
        @endforelse
    </g>

    <g transform="matrix(1 0 0 1 375 1375.24)" id="DpOTKVO0MtuuczI84C-4d">
        @forelse ($siteplan->where('code_product', 'DpOTKVO0MtuuczI84C-4d') as $hasil)
            @if ($hasil->status == 'Booking' or $hasil->status == 'Pending')
                <path
                    style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 2; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(-100, -25)"
                    d="M 0 0 L 200 0 L 200 50 L 0 50 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path
                    style="fill:#f50505; stroke: rgb(0,0,0); stroke-width: 2; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(-100, -25)"
                    d="M 0 0 L 200 0 L 200 50 L 0 50 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
                <a href="#" data-toggle="modal" data-target="#modalBooking-DpOTKVO0MtuuczI84C-4d">
                    <path
                        style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 2; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;fill-rule: nonzero; opacity: 1;"
                        vector-effect="non-scaling-stroke" transform=" translate(-100, -25)"
                        d="M 0 0 L 200 0 L 200 50 L 0 50 z" stroke-linecap="round" />
                </a>
            @endif
        @empty
            <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="DpOTKVO0MtuuczI84C-4d">
                <path
                    style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 2; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(-100, -25)"
                    d="M 0 0 L 200 0 L 200 50 L 0 50 z" stroke-linecap="round" />
            </a>
        @endforelse
    </g>

    <g transform="matrix(1 0 0 1 375 1425.24)" id="b_o0iXS-hENGkeuIBE_-Z">
        @forelse ($siteplan->where('code_product', 'b_o0iXS-hENGkeuIBE_-Z') as $hasil)
            @if ($hasil->status == 'Booking' or $hasil->status == 'Pending')
                <path
                    style="fill:#ffc107;stroke: rgb(0,0,0); stroke-width: 2; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(-100, -25)"
                    d="M 0 0 L 200 0 L 200 50 L 0 50 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path
                    style="fill:#f50505;stroke: rgb(0,0,0); stroke-width: 2; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(-100, -25)"
                    d="M 0 0 L 200 0 L 200 50 L 0 50 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
                <a href="#" data-toggle="modal" data-target="#modalBooking-b_o0iXS-hENGkeuIBE_-Z">
                    <path
                        style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 2; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;fill-rule: nonzero; opacity: 1;"
                        vector-effect="non-scaling-stroke" transform=" translate(-100, -25)"
                        d="M 0 0 L 200 0 L 200 50 L 0 50 z" stroke-linecap="round" />
                </a>
            @endif
        @empty
            <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="b_o0iXS-hENGkeuIBE_-Z">
                <path
                    style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 2; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(-100, -25)"
                    d="M 0 0 L 200 0 L 200 50 L 0 50 z" stroke-linecap="round" />
            </a>
        @endforelse
    </g>

    <g transform="matrix(1 0 0 1 375 1475.24)" id="ern0vT8YL4q7UVhhd5tgS">
        @forelse ($siteplan->where('code_product', 'ern0vT8YL4q7UVhhd5tgS') as $hasil)
            @if ($hasil->status == 'Booking' or $hasil->status == 'Pending')
                <path
                    style="fill:#ffc107;stroke: rgb(0,0,0); stroke-width: 2; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(-100, -25)"
                    d="M 0 0 L 200 0 L 200 50 L 0 50 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path
                    style="fill:#f50505;stroke: rgb(0,0,0); stroke-width: 2; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(-100, -25)"
                    d="M 0 0 L 200 0 L 200 50 L 0 50 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
                <a href="#" data-toggle="modal" data-target="#modalBooking-ern0vT8YL4q7UVhhd5tgS">
                    <path
                        style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 2; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;fill-rule: nonzero; opacity: 1;"
                        vector-effect="non-scaling-stroke" transform=" translate(-100, -25)"
                        d="M 0 0 L 200 0 L 200 50 L 0 50 z" stroke-linecap="round" />
                </a>
            @endif
        @empty
            <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="ern0vT8YL4q7UVhhd5tgS">
                <path
                    style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 2; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(-100, -25)"
                    d="M 0 0 L 200 0 L 200 50 L 0 50 z" stroke-linecap="round" />
            </a>
        @endforelse
    </g>


    <g transform="matrix(1 0 0 1 375 1524.44)" id="cWByUS1mtVmrh8bbSbdYq">
        @forelse ($siteplan->where('code_product', 'cWByUS1mtVmrh8bbSbdYq') as $hasil)
            @if ($hasil->status == 'Booking' or $hasil->status == 'Pending')
                <path
                    style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 2; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(-100, -25)"
                    d="M 0 0 L 200 0 L 200 50 L 0 50 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path
                    style="fill:#f50505;stroke: rgb(0,0,0); stroke-width: 2; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(-100, -25)"
                    d="M 0 0 L 200 0 L 200 50 L 0 50 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
                <a href="#" data-toggle="modal" data-target="#modalBooking-cWByUS1mtVmrh8bbSbdYq">
                    <path
                        style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 2; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;fill-rule: nonzero; opacity: 1;"
                        vector-effect="non-scaling-stroke" transform=" translate(-100, -25)"
                        d="M 0 0 L 200 0 L 200 50 L 0 50 z" stroke-linecap="round" />
                </a>
            @endif
        @empty
            <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="cWByUS1mtVmrh8bbSbdYq">
                <path
                    style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 2; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(-100, -25)"
                    d="M 0 0 L 200 0 L 200 50 L 0 50 z" stroke-linecap="round" />
            </a>
        @endforelse
    </g>

    <g transform="matrix(1 0 0 1 375 1574.44)" id="x95EP-fwJ4wl82riFgsik">
        @forelse ($siteplan->where('code_product', 'x95EP-fwJ4wl82riFgsik') as $hasil)
            @if ($hasil->status == 'Booking' or $hasil->status == 'Pending')
                <path
                    style="fill:#ffc107;stroke: rgb(0,0,0); stroke-width: 2; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(-100, -25)"
                    d="M 0 0 L 200 0 L 200 50 L 0 50 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path
                    style="fill:#f50505;stroke: rgb(0,0,0); stroke-width: 2; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(-100, -25)"
                    d="M 0 0 L 200 0 L 200 50 L 0 50 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
                <a href="#" data-toggle="modal" data-target="#modalBooking-x95EP-fwJ4wl82riFgsik">
                    <path
                        style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 2; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;fill-rule: nonzero; opacity: 1;"
                        vector-effect="non-scaling-stroke" transform=" translate(-100, -25)"
                        d="M 0 0 L 200 0 L 200 50 L 0 50 z" stroke-linecap="round" />
                </a>
            @endif
        @empty
            <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="x95EP-fwJ4wl82riFgsik">
                <path
                    style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 2; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(-100, -25)"
                    d="M 0 0 L 200 0 L 200 50 L 0 50 z" stroke-linecap="round" />
            </a>
        @endforelse
    </g>

    <g transform="matrix(1 0 0 1 126 578.44)" id="BzFVkn8RoMMc4ssk54hFQ">
        @forelse ($siteplan->where('code_product', 'BzFVkn8RoMMc4ssk54hFQ') as $hasil)
            @if ($hasil->status == 'Booking' or $hasil->status == 'Pending')
                <path
                    style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 2; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(-100, -25)"
                    d="M 0 0 L 200 0 L 200 50 L 0 50 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path
                    style="fill:#f50505;stroke: rgb(0,0,0); stroke-width: 2; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(-100, -25)"
                    d="M 0 0 L 200 0 L 200 50 L 0 50 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
                <a href="#" data-toggle="modal" data-target="#modalBooking-BzFVkn8RoMMc4ssk54hFQ">
                    <path
                        style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 2; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;"
                        vector-effect="non-scaling-stroke" transform=" translate(-100, -25)"
                        d="M 0 0 L 200 0 L 200 50 L 0 50 z" stroke-linecap="round" />
                </a>
            @endif
        @empty
            <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="BzFVkn8RoMMc4ssk54hFQ">
                <path
                    style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 2; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(-100, -25)"
                    d="M 0 0 L 200 0 L 200 50 L 0 50 z" stroke-linecap="round" />
            </a>
        @endforelse
    </g>


    <g transform="matrix(1 0 0 1 126 627.64)" id="M8T62nWvIiKXaPfChbKpc">
        @forelse ($siteplan->where('code_product', 'M8T62nWvIiKXaPfChbKpc') as $hasil)
            @if ($hasil->status == 'Booking' or $hasil->status == 'Pending')
                <path
                    style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 2; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(-100, -25)"
                    d="M 0 0 L 200 0 L 200 50 L 0 50 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path
                    style="fill:#f50505; stroke: rgb(0,0,0); stroke-width: 2; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(-100, -25)"
                    d="M 0 0 L 200 0 L 200 50 L 0 50 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
                <a href="#" data-toggle="modal" data-target="#modalBooking-M8T62nWvIiKXaPfChbKpc">
                    <path
                        style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 2; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;"
                        vector-effect="non-scaling-stroke" transform=" translate(-100, -25)"
                        d="M 0 0 L 200 0 L 200 50 L 0 50 z" stroke-linecap="round" />
                </a>
            @endif
        @empty
            <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="M8T62nWvIiKXaPfChbKpc">
                <path
                    style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 2; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(-100, -25)"
                    d="M 0 0 L 200 0 L 200 50 L 0 50 z" stroke-linecap="round" />
            </a>
        @endforelse
    </g>

    <g transform="matrix(1 0 0 1 126 677.64)" id="31KDJJgE166cCvd1yvjZZ">
        @forelse ($siteplan->where('code_product', '31KDJJgE166cCvd1yvjZZ') as $hasil)
            @if ($hasil->status == 'Booking' or $hasil->status == 'Pending')
                <path
                    style="fill:#ffc107;stroke: rgb(0,0,0); stroke-width: 2; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(-100, -25)"
                    d="M 0 0 L 200 0 L 200 50 L 0 50 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path
                    style="fill:#f50505;stroke: rgb(0,0,0); stroke-width: 2; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(-100, -25)"
                    d="M 0 0 L 200 0 L 200 50 L 0 50 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
                <a href="#" data-toggle="modal" data-target="#modalBooking-31KDJJgE166cCvd1yvjZZ">
                    <path
                        style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 2; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;"
                        vector-effect="non-scaling-stroke" transform=" translate(-100, -25)"
                        d="M 0 0 L 200 0 L 200 50 L 0 50 z" stroke-linecap="round" />
                </a>
            @endif
        @empty
            <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="31KDJJgE166cCvd1yvjZZ">
                <path
                    style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 2; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(-100, -25)"
                    d="M 0 0 L 200 0 L 200 50 L 0 50 z" stroke-linecap="round" />
            </a>
        @endforelse
    </g>

    <g transform="matrix(1 0 0 1 126 727.64)" id="LugV_YUbwvfjgb9Dvtjl9">
        @forelse ($siteplan->where('code_product', 'LugV_YUbwvfjgb9Dvtjl9') as $hasil)
            @if ($hasil->status == 'Booking' or $hasil->status == 'Pending')
                <path
                    style="fill:#ffc107;stroke: rgb(0,0,0); stroke-width: 2; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(-100, -25)"
                    d="M 0 0 L 200 0 L 200 50 L 0 50 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path
                    style="fill:#f50505;stroke: rgb(0,0,0); stroke-width: 2; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(-100, -25)"
                    d="M 0 0 L 200 0 L 200 50 L 0 50 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
                <a href="#" data-toggle="modal" data-target="#modalBooking-LugV_YUbwvfjgb9Dvtjl9">
                    <path
                        style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 2; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;"
                        vector-effect="non-scaling-stroke" transform=" translate(-100, -25)"
                        d="M 0 0 L 200 0 L 200 50 L 0 50 z" stroke-linecap="round" />
                </a>
            @endif
        @empty
            <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="LugV_YUbwvfjgb9Dvtjl9">
                <path
                    style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 2; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(-100, -25)"
                    d="M 0 0 L 200 0 L 200 50 L 0 50 z" stroke-linecap="round" />
            </a>
        @endforelse
    </g>

    <g transform="matrix(1 0 0 1 126 777.64)" id="aaA3O0f2v2-3kdgdBR_Fv">
        @forelse ($siteplan->where('code_product', 'aaA3O0f2v2-3kdgdBR_Fv') as $hasil)
            @if ($hasil->status == 'Booking' or $hasil->status == 'Pending')
                <path
                    style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 2; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(-100, -25)"
                    d="M 0 0 L 200 0 L 200 50 L 0 50 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path
                    style="fill:#f50505; stroke: rgb(0,0,0); stroke-width: 2; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(-100, -25)"
                    d="M 0 0 L 200 0 L 200 50 L 0 50 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
                <a href="#" data-toggle="modal" data-target="#modalBooking-aaA3O0f2v2-3kdgdBR_Fv">
                    <path
                        style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 2; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;"
                        vector-effect="non-scaling-stroke" transform=" translate(-100, -25)"
                        d="M 0 0 L 200 0 L 200 50 L 0 50 z" stroke-linecap="round" />
                </a>
            @endif
        @empty
            <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="aaA3O0f2v2-3kdgdBR_Fv">
                <path
                    style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 2; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(-100, -25)"
                    d="M 0 0 L 200 0 L 200 50 L 0 50 z" stroke-linecap="round" />
            </a>
        @endforelse
    </g>


    <g transform="matrix(1 0 0 1 126 826.84)" id="6dEbqNeMLfZJF7i23myE3">
        @forelse ($siteplan->where('code_product', '6dEbqNeMLfZJF7i23myE3') as $hasil)
            @if ($hasil->status == 'Booking' or $hasil->status == 'Pending')
                <path
                    style="fill:#ffc107;stroke: rgb(0,0,0); stroke-width: 2; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(-100, -25)"
                    d="M 0 0 L 200 0 L 200 50 L 0 50 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path
                    style="fill:#f50505;stroke: rgb(0,0,0); stroke-width: 2; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(-100, -25)"
                    d="M 0 0 L 200 0 L 200 50 L 0 50 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
                <a href="#" data-toggle="modal" data-target="#modalBooking-6dEbqNeMLfZJF7i23myE3">
                    <path
                        style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 2; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;"
                        vector-effect="non-scaling-stroke" transform=" translate(-100, -25)"
                        d="M 0 0 L 200 0 L 200 50 L 0 50 z" stroke-linecap="round" />
                </a>
            @endif
        @empty
            <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="6dEbqNeMLfZJF7i23myE3">
                <path
                    style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 2; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(-100, -25)"
                    d="M 0 0 L 200 0 L 200 50 L 0 50 z" stroke-linecap="round" />
            </a>
        @endforelse
    </g>

    <g transform="matrix(1 0 0 1 126 876.84)" id="RXcwgCFtNvIdf-5ai_Cqu">
        @forelse ($siteplan->where('code_product', 'RXcwgCFtNvIdf-5ai_Cqu') as $hasil)
            @if ($hasil->status == 'Booking' or $hasil->status == 'Pending')
                <path
                    style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 2; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(-100, -25)"
                    d="M 0 0 L 200 0 L 200 50 L 0 50 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path
                    style="fill:#f50505;stroke: rgb(0,0,0); stroke-width: 2; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(-100, -25)"
                    d="M 0 0 L 200 0 L 200 50 L 0 50 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
                <a href="#" data-toggle="modal" data-target="#modalBooking-RXcwgCFtNvIdf-5ai_Cqu">
                    <path
                        style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 2; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;"
                        vector-effect="non-scaling-stroke" transform=" translate(-100, -25)"
                        d="M 0 0 L 200 0 L 200 50 L 0 50 z" stroke-linecap="round" />
                </a>
            @endif
        @empty
            <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="RXcwgCFtNvIdf-5ai_Cqu">
                <path
                    style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 2; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(-100, -25)"
                    d="M 0 0 L 200 0 L 200 50 L 0 50 z" stroke-linecap="round" />
            </a>
        @endforelse
    </g>

    <g transform="matrix(1 0 0 1 126 926.84)" id="ulWTPGQZglKFeD8z_vSd-">
        @forelse ($siteplan->where('code_product', 'ulWTPGQZglKFeD8z_vSd-') as $hasil)
            @if ($hasil->status == 'Booking' or $hasil->status == 'Pending')
                <path
                    style="fill:#ffc107;stroke: rgb(0,0,0); stroke-width: 2; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(-100, -25)"
                    d="M 0 0 L 200 0 L 200 50 L 0 50 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path
                    style="fill:#f50505; stroke: rgb(0,0,0); stroke-width: 2; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(-100, -25)"
                    d="M 0 0 L 200 0 L 200 50 L 0 50 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
                <a href="#" data-toggle="modal" data-target="#modalBooking-ulWTPGQZglKFeD8z_vSd-">
                    <path
                        style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 2; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;"
                        vector-effect="non-scaling-stroke" transform=" translate(-100, -25)"
                        d="M 0 0 L 200 0 L 200 50 L 0 50 z" stroke-linecap="round" />
                </a>
            @endif
        @empty
            <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="ulWTPGQZglKFeD8z_vSd-">
                <path
                    style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 2; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(-100, -25)"
                    d="M 0 0 L 200 0 L 200 50 L 0 50 z" stroke-linecap="round" />
            </a>
        @endforelse
    </g>

    <g transform="matrix(1 0 0 1 126 976.84)" id="h0MuiFv4M447JG3Cah1qi">
        @forelse ($siteplan->where('code_product', 'h0MuiFv4M447JG3Cah1qi') as $hasil)
            @if ($hasil->status == 'Booking' or $hasil->status == 'Pending')
                <path
                    style="fill:#ffc107;stroke: rgb(0,0,0); stroke-width: 2; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(-100, -25)"
                    d="M 0 0 L 200 0 L 200 50 L 0 50 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path
                    style="fill:#f50505;stroke: rgb(0,0,0); stroke-width: 2; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(-100, -25)"
                    d="M 0 0 L 200 0 L 200 50 L 0 50 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
                <a href="#" data-toggle="modal" data-target="#modalBooking-h0MuiFv4M447JG3Cah1qi">
                    <path
                        style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 2; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;"
                        vector-effect="non-scaling-stroke" transform=" translate(-100, -25)"
                        d="M 0 0 L 200 0 L 200 50 L 0 50 z" stroke-linecap="round" />
                </a>
            @endif
        @empty
            <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="h0MuiFv4M447JG3Cah1qi">
                <path
                    style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 2; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(-100, -25)"
                    d="M 0 0 L 200 0 L 200 50 L 0 50 z" stroke-linecap="round" />
            </a>
        @endforelse
    </g>


    <g transform="matrix(1 0 0 1 126 1026.04)" id="RCeF9_-1_jaKR3upTdAe7">
        @forelse ($siteplan->where('code_product', 'RCeF9_-1_jaKR3upTdAe7') as $hasil)
            @if ($hasil->status == 'Booking' or $hasil->status == 'Pending')
                <path
                    style="fill:#ffc107;stroke: rgb(0,0,0); stroke-width: 2; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(-100, -25)"
                    d="M 0 0 L 200 0 L 200 50 L 0 50 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path
                    style="fill:#f50505;stroke: rgb(0,0,0); stroke-width: 2; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(-100, -25)"
                    d="M 0 0 L 200 0 L 200 50 L 0 50 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
                <a href="#" data-toggle="modal" data-target="#modalBooking-RCeF9_-1_jaKR3upTdAe7">
                    <path
                        style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 2; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;"
                        vector-effect="non-scaling-stroke" transform=" translate(-100, -25)"
                        d="M 0 0 L 200 0 L 200 50 L 0 50 z" stroke-linecap="round" />
                </a>
            @endif
        @empty
            <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="RCeF9_-1_jaKR3upTdAe7">
                <path
                    style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 2; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(-100, -25)"
                    d="M 0 0 L 200 0 L 200 50 L 0 50 z" stroke-linecap="round" />
            </a>
        @endforelse
    </g>


    <g transform="matrix(1 0 0 1 126 1076.04)" id="G31wa-6wUDqPGQZ-rC5p0">
        @forelse ($siteplan->where('code_product', 'G31wa-6wUDqPGQZ-rC5p0') as $hasil)
            @if ($hasil->status == 'Booking' or $hasil->status == 'Pending')
                <path
                    style="fill:#ffc107;stroke: rgb(0,0,0); stroke-width: 2; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(-100, -25)"
                    d="M 0 0 L 200 0 L 200 50 L 0 50 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path
                    style="fill:#f50505;stroke: rgb(0,0,0); stroke-width: 2; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(-100, -25)"
                    d="M 0 0 L 200 0 L 200 50 L 0 50 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
                <a href="#" data-toggle="modal" data-target="#modalBooking-G31wa-6wUDqPGQZ-rC5p0">
                    <path
                        style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 2; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;"
                        vector-effect="non-scaling-stroke" transform=" translate(-100, -25)"
                        d="M 0 0 L 200 0 L 200 50 L 0 50 z" stroke-linecap="round" />
                </a>
            @endif
        @empty
            <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="G31wa-6wUDqPGQZ-rC5p0">
                <path
                    style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 2; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(-100, -25)"
                    d="M 0 0 L 200 0 L 200 50 L 0 50 z" stroke-linecap="round" />
            </a>
        @endforelse
    </g>

    <g transform="matrix(1 0 0 1 126 1126.04)" id="Cpno9gEwnwMz6Fd54_GFb">
        @forelse ($siteplan->where('code_product', 'Cpno9gEwnwMz6Fd54_GFb') as $hasil)
            @if ($hasil->status == 'Booking' or $hasil->status == 'Pending')
                <path
                    style="fill:#ffc107;stroke: rgb(0,0,0); stroke-width: 2; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(-100, -25)"
                    d="M 0 0 L 200 0 L 200 50 L 0 50 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path
                    style="fill:#f50505;stroke: rgb(0,0,0); stroke-width: 2; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(-100, -25)"
                    d="M 0 0 L 200 0 L 200 50 L 0 50 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
                <a href="#" data-toggle="modal" data-target="#modalBooking-Cpno9gEwnwMz6Fd54_GFb">
                    <path
                        style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 2; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;"
                        vector-effect="non-scaling-stroke" transform=" translate(-100, -25)"
                        d="M 0 0 L 200 0 L 200 50 L 0 50 z" stroke-linecap="round" />
                </a>
            @endif
        @empty
            <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="-Cpno9gEwnwMz6Fd54_GFb">
                <path <path
                    style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 2; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(-100, -25)"
                    d="M 0 0 L 200 0 L 200 50 L 0 50 z" stroke-linecap="round" />
            </a>
        @endforelse
    </g>

    <g transform="matrix(1 0 0 1 126 1176.04)" id="LAA4GoGHzL7rDkdXFzSwO">
        @forelse ($siteplan->where('code_product', 'LAA4GoGHzL7rDkdXFzSwO') as $hasil)
            @if ($hasil->status == 'Booking' or $hasil->status == 'Pending')
                <path
                    style="fill:#ffc107;stroke: rgb(0,0,0); stroke-width: 2; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(-100, -25)"
                    d="M 0 0 L 200 0 L 200 50 L 0 50 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path
                    style="fill:#f50505; stroke: rgb(0,0,0); stroke-width: 2; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(-100, -25)"
                    d="M 0 0 L 200 0 L 200 50 L 0 50 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
                <a href="#" data-toggle="modal" data-target="#modalBooking-LAA4GoGHzL7rDkdXFzSwO">
                    <path
                        style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 2; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;"
                        vector-effect="non-scaling-stroke" transform=" translate(-100, -25)"
                        d="M 0 0 L 200 0 L 200 50 L 0 50 z" stroke-linecap="round" />
                </a>
            @endif
        @empty
            <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="LAA4GoGHzL7rDkdXFzSwO">
                <path
                    style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 2; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(-100, -25)"
                    d="M 0 0 L 200 0 L 200 50 L 0 50 z" stroke-linecap="round" />
            </a>
        @endforelse
    </g>

    <g transform="matrix(1 0 0 1 126 1225.24)" id="969P9w61B3W_iFOkltcXz">
        @forelse ($siteplan->where('code_product', '969P9w61B3W_iFOkltcXz') as $hasil)
            @if ($hasil->status == 'Booking' or $hasil->status == 'Pending')
                <path
                    style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 2; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(-100, -25)"
                    d="M 0 0 L 200 0 L 200 50 L 0 50 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path
                    style="fill:#f50505; stroke: rgb(0,0,0); stroke-width: 2; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(-100, -25)"
                    d="M 0 0 L 200 0 L 200 50 L 0 50 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
                <a href="#" data-toggle="modal" data-target="#modalBooking-969P9w61B3W_iFOkltcXz">
                    <path
                        style="fill:#f50505; stroke: rgb(0,0,0); stroke-width: 2; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;"
                        vector-effect="non-scaling-stroke" transform=" translate(-100, -25)"
                        d="M 0 0 L 200 0 L 200 50 L 0 50 z" stroke-linecap="round" />
                </a>
            @endif
        @empty
            <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="969P9w61B3W_iFOkltcXz">
                <path
                    style="fill:#f50505; stroke: rgb(0,0,0); stroke-width: 2; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(-100, -25)"
                    d="M 0 0 L 200 0 L 200 50 L 0 50 z" stroke-linecap="round" />
            </a>
        @endforelse
    </g>

    <g transform="matrix(1 0 0 1 126 1275.24)" id="IphkaFwHKN3Bws1jS2iZc">
        @forelse ($siteplan->where('code_product', 'IphkaFwHKN3Bws1jS2iZc') as $hasil)
            @if ($hasil->status == 'Booking' or $hasil->status == 'Pending')
                <path
                    style="fill:#ffc107;stroke: rgb(0,0,0); stroke-width: 2; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(-100, -25)"
                    d="M 0 0 L 200 0 L 200 50 L 0 50 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path
                    style="fill:#f50505;stroke: rgb(0,0,0); stroke-width: 2; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(-100, -25)"
                    d="M 0 0 L 200 0 L 200 50 L 0 50 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
                <a href="#" data-toggle="modal" data-target="#modalBooking-IphkaFwHKN3Bws1jS2iZc">
                    <path
                        style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 2; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;"
                        vector-effect="non-scaling-stroke" transform=" translate(-100, -25)"
                        d="M 0 0 L 200 0 L 200 50 L 0 50 z" stroke-linecap="round" />
                </a>
            @endif
        @empty
            <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="IphkaFwHKN3Bws1jS2iZc">
                <path
                    style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 2; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(-100, -25)"
                    d="M 0 0 L 200 0 L 200 50 L 0 50 z" stroke-linecap="round" />
            </a>
        @endforelse
    </g>

    <g transform="matrix(1 0 0 1 126 1325.24)" id="uTH0cLHBbEw1gHRAibEDg">
        @forelse ($siteplan->where('code_product', 'uTH0cLHBbEw1gHRAibEDg') as $hasil)
            @if ($hasil->status == 'Booking' or $hasil->status == 'Pending')
                <path
                    style="fill:#ffc107;stroke: rgb(0,0,0); stroke-width: 2; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(-100, -25)"
                    d="M 0 0 L 200 0 L 200 50 L 0 50 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path
                    style="fill:#f50505;stroke: rgb(0,0,0); stroke-width: 2; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(-100, -25)"
                    d="M 0 0 L 200 0 L 200 50 L 0 50 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
                <a href="#" data-toggle="modal" data-target="#modalBooking-uTH0cLHBbEw1gHRAibEDg">
                    <path
                        style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 2; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;"
                        vector-effect="non-scaling-stroke" transform=" translate(-100, -25)"
                        d="M 0 0 L 200 0 L 200 50 L 0 50 z" stroke-linecap="round" />
                </a>
            @endif
        @empty
            <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="uTH0cLHBbEw1gHRAibEDg">
                <path
                    style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 2; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(-100, -25)"
                    d="M 0 0 L 200 0 L 200 50 L 0 50 z" stroke-linecap="round" />
            </a>
        @endforelse
    </g>

    <g transform="matrix(1 0 0 1 126 1375.24)" id="-XAR8gsemDaIIgl4KalnP">
        @forelse ($siteplan->where('code_product', '-XAR8gsemDaIIgl4KalnP') as $hasil)
            @if ($hasil->status == 'Booking' or $hasil->status == 'Pending')
                <path
                    style="fill:#ffc107;stroke: rgb(0,0,0); stroke-width: 2; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(-100, -25)"
                    d="M 0 0 L 200 0 L 200 50 L 0 50 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path
                    style="fill:#f50505;stroke: rgb(0,0,0); stroke-width: 2; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(-100, -25)"
                    d="M 0 0 L 200 0 L 200 50 L 0 50 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
                <a href="#" data-toggle="modal" data-target="#modalBooking--XAR8gsemDaIIgl4KalnP">
                    <path
                        style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 2; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;"
                        vector-effect="non-scaling-stroke" transform=" translate(-100, -25)"
                        d="M 0 0 L 200 0 L 200 50 L 0 50 z" stroke-linecap="round" />
                </a>
            @endif
        @empty
            <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="-XAR8gsemDaIIgl4KalnP">
                <path
                    style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 2; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(-100, -25)"
                    d="M 0 0 L 200 0 L 200 50 L 0 50 z" stroke-linecap="round" />
            </a>
        @endforelse
    </g>


    <g transform="matrix(1 0 0 1 126 1425.24)" id="tpDo1H-GqIMcdORz5ohk0">
        @forelse ($siteplan->where('code_product', 'tpDo1H-GqIMcdORz5ohk0') as $hasil)
            @if ($hasil->status == 'Booking' or $hasil->status == 'Pending')
                <path
                    style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 2; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(-100, -25)"
                    d="M 0 0 L 200 0 L 200 50 L 0 50 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path
                    style="fill:#f50505;stroke: rgb(0,0,0); stroke-width: 2; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(-100, -25)"
                    d="M 0 0 L 200 0 L 200 50 L 0 50 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
                <a href="#" data-toggle="modal" data-target="#modalBooking-tpDo1H-GqIMcdORz5ohk0">
                    <path
                        style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 2; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;"
                        vector-effect="non-scaling-stroke" transform=" translate(-100, -25)"
                        d="M 0 0 L 200 0 L 200 50 L 0 50 z" stroke-linecap="round" />
                </a>
            @endif
        @empty
            <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="tpDo1H-GqIMcdORz5ohk0">
                <path
                    style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 2; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(-100, -25)"
                    d="M 0 0 L 200 0 L 200 50 L 0 50 z" stroke-linecap="round" />
            </a>
        @endforelse
    </g>

    <g transform="matrix(1 0 0 1 126 1475.24)" id="hZWRbyxREs-QxTEdwRv6w">
        @forelse ($siteplan->where('code_product', 'hZWRbyxREs-QxTEdwRv6w') as $hasil)
            @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path
                    style="fill:#ffc107;stroke: rgb(0,0,0); stroke-width: 2; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(-100, -25)"
                    d="M 0 0 L 200 0 L 200 50 L 0 50 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path
                    style="fill:#f50505; stroke: rgb(0,0,0); stroke-width: 2; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(-100, -25)"
                    d="M 0 0 L 200 0 L 200 50 L 0 50 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
                <a href="#" data-toggle="modal" data-target="#modalBooking-hZWRbyxREs-QxTEdwRv6w">
                    <path
                        style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 2; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;"
                        vector-effect="non-scaling-stroke" transform=" translate(-100, -25)"
                        d="M 0 0 L 200 0 L 200 50 L 0 50 z" stroke-linecap="round" />
                </a>
            @endif
        @empty
            <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="hZWRbyxREs-QxTEdwRv6w">
                <path
                    style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 2; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(-100, -25)"
                    d="M 0 0 L 200 0 L 200 50 L 0 50 z" stroke-linecap="round" />
            </a>
        @endforelse
    </g>

    <g transform="matrix(1 0 0 1 126 1524.44)" id="Jk6M4UySc8-zlDWmi814d">
        @forelse ($siteplan->where('code_product', 'Jk6M4UySc8-zlDWmi814d') as $hasil)
            @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path
                    style="fill:#ffc107;stroke: rgb(0,0,0); stroke-width: 2; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(-100, -25)"
                    d="M 0 0 L 200 0 L 200 50 L 0 50 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path
                    style="fill:#f50505;stroke: rgb(0,0,0); stroke-width: 2; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(-100, -25)"
                    d="M 0 0 L 200 0 L 200 50 L 0 50 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
                <a href="#" data-toggle="modal" data-target="#modalBooking-Jk6M4UySc8-zlDWmi814d">
                    <path
                        style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 2; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;"
                        vector-effect="non-scaling-stroke" transform=" translate(-100, -25)"
                        d="M 0 0 L 200 0 L 200 50 L 0 50 z" stroke-linecap="round" />
                </a>
            @endif
        @empty
            <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="Jk6M4UySc8-zlDWmi814d">
                <path
                    style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 2; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(-100, -25)"
                    d="M 0 0 L 200 0 L 200 50 L 0 50 z" stroke-linecap="round" />
            </a>
        @endforelse
    </g>

    <g transform="matrix(1 0 0 1 126 1574.44)" id="PkVElfetNoOLPMW">
        @forelse ($siteplan->where('code_product', 'PkVElfetNoOLPMW') as $hasil)
            @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path
                    style="fill:#ffc107;stroke: rgb(0,0,0); stroke-width: 2; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(-100, -25)"
                    d="M 0 0 L 200 0 L 200 50 L 0 50 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path
                    style="fill:#f50505;stroke: rgb(0,0,0); stroke-width: 2; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(-100, -25)"
                    d="M 0 0 L 200 0 L 200 50 L 0 50 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
                <a href="#" data-toggle="modal" data-target="#modalBooking-PkVElfetNoOLPMW">
                    <path
                        style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 2; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;"
                        vector-effect="non-scaling-stroke" transform=" translate(-100, -25)"
                        d="M 0 0 L 200 0 L 200 50 L 0 50 z" stroke-linecap="round" />
                </a>
            @endif
        @empty
            <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="PkVElfetNoOLPMW">
                <path
                    style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 2; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(-100, -25)"
                    d="M 0 0 L 200 0 L 200 50 L 0 50 z" stroke-linecap="round" />
            </a>
        @endforelse
    </g>

    <g transform="matrix(0 -1 1 0 250 528.44)" style="" id="Ed9Y5Zn7lkhd80a8wBq7P">
        <text xml:space="preserve" font-family="Montserrat" font-size="20" font-style="normal"
            font-weight="700" line-height="1"
            style="stroke: rgb(0,0,0); stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(255,255,255); fill-rule: nonzero; opacity: 1; white-space: pre;">
            <tspan x="-151.34" y="6.28">JALAN KOMPLEK 5 METER</tspan>
        </text>
    </g>
    <g transform="matrix(0 -1 1 0 250 1232.24)" style="" id="yJrTo5es50HGx4y-oOuzt">
        <text xml:space="preserve" font-family="Montserrat" font-size="20" font-style="normal"
            font-weight="700" line-height="1"
            style="stroke: rgb(0,0,0); stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(255,255,255); fill-rule: nonzero; opacity: 1; white-space: pre;">
            <tspan x="-151.34" y="6.28">JALAN KOMPLEK 5 METER</tspan>
        </text>
    </g>
    <g transform="matrix(1 0 0 1 126 155.63)" style="" id="GiLm9pt5-WNnida8aZIpC">
        <text xml:space="preserve" font-family="Montserrat" font-size="20" font-style="normal"
            font-weight="700" line-height="1"
            style="stroke: rgb(0,0,0); stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;">
            <tspan x="-32.53" y="6.28">RUKO B</tspan>
        </text>
    </g>
    <g transform="matrix(1 0 0 1 375 153.63)" style="" id="SmZZ1I7j0ff9mK8Vlijt_">
        <text xml:space="preserve" font-family="Montserrat" font-size="20" font-style="normal"
            font-weight="700" line-height="1"
            style="stroke: rgb(0,0,0); stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;">
            <tspan x="-32.52" y="6.28">RUKO A</tspan>
        </text>
    </g>
    <g transform="matrix(1 0 0 1 126 228.44)" style="" id="z8h7Jvmg5ozRkOUP1Bays">
        <text xml:space="preserve" font-family="Montserrat" font-size="20" font-style="normal"
            font-weight="700" line-height="1"
            style="stroke: rgb(0,0,0); stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;">
            <tspan x="-49.29" y="6.28">BLOK B 1</tspan>
        </text>
    </g>
    <g transform="matrix(1 0 0 1 134.44 290.94)" style="" id="esOycxLbSchpewvfSjIGR">
        <text xml:space="preserve" font-family="Montserrat" font-size="20" font-style="normal"
            font-weight="700" line-height="1"
            style="stroke: rgb(0,0,0); stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;">
            <tspan x="-74.14" y="6.28">BLOK B2 - B3</tspan>
        </text>
    </g>
    <g transform="matrix(1 0 0 1 134.44 363.24)" style="" id="PnUAb76-caJFtWwQ8Iu45">
        <text xml:space="preserve" font-family="Montserrat" font-size="20" font-style="normal"
            font-weight="700" line-height="1"
            style="stroke: rgb(0,0,0); stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;">
            <tspan x="-74.14" y="6.28">BLOK B4 - B5</tspan>
        </text>
    </g>
    <g transform="matrix(1 0 0 1 126 438.24)" style="" id="fqMLPbygjyBYiiuPZpzno">
        <text xml:space="preserve" font-family="Montserrat" font-size="20" font-style="normal"
            font-weight="700" line-height="1"
            style="stroke: rgb(0,0,0); stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;">
            <tspan x="-74.14" y="6.28">BLOK B6 - B7</tspan>
        </text>
    </g>
    <g transform="matrix(1 0 0 1 126 513.74)" style="" id="gZZExBCqiPO2XtFssN5US">
        <text xml:space="preserve" font-family="Montserrat" font-size="20" font-style="normal"
            font-weight="700" line-height="1"
            style="stroke: rgb(0,0,0); stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;">
            <tspan x="-74.14" y="6.28">BLOK B8 - B9</tspan>
        </text>
    </g>
    <g transform="matrix(1 0 0 1 375 239.74)" style="" id="vKh1YZuCJrQ_XLrCyVZSG">
        <text xml:space="preserve" font-family="Montserrat" font-size="20" font-style="normal"
            font-weight="700" line-height="1"
            style="stroke: rgb(0,0,0); stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;">
            <tspan x="-74.14" y="6.28">BLOK A1 - A2</tspan>
        </text>
    </g>
    <g transform="matrix(1 0 0 1 375 313.54)" style="" id="yrwf45rsg2H51skoOUTOj">
        <text xml:space="preserve" font-family="Montserrat" font-size="20" font-style="normal"
            font-weight="700" line-height="1"
            style="stroke: rgb(0,0,0); stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;">
            <tspan x="-74.14" y="6.28">BLOK A3 - A4</tspan>
        </text>
    </g>
    <g transform="matrix(1 0 0 1 375 385.84)" style="" id="x3sUEt5wPYU4jRQcNr6hs">
        <text xml:space="preserve" font-family="Montserrat" font-size="20" font-style="normal"
            font-weight="700" line-height="1"
            style="stroke: rgb(0,0,0); stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;">
            <tspan x="-74.14" y="6.28">BLOK A5 - A6</tspan>
        </text>
    </g>
    <g transform="matrix(1 0 0 1 375 465.44)" style="" id="EL63kXAKCqJjSDxBpAgnx">
        <text xml:space="preserve" font-family="Montserrat" font-size="20" font-style="normal"
            font-weight="700" line-height="1"
            style="stroke: rgb(0,0,0); stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;">
            <tspan x="-74.14" y="6.28">BLOK A7 - A8</tspan>
        </text>
    </g>
    <g transform="matrix(1 0 0 1 375 527.24)" style="" id="h4DItgg6EsP6ddelNBve0">
        <text xml:space="preserve" font-family="Montserrat" font-size="20" font-style="normal"
            font-weight="700" line-height="1"
            style="stroke: rgb(0,0,0); stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;">
            <tspan x="-49.29" y="6.28">BLOK A 9</tspan>
        </text>
    </g>
    <g transform="matrix(1 0 0 1 375 578.44)" style="" id="XLv2VMgS6niqwQhqSX4sb">
        <text xml:space="preserve" font-family="Montserrat" font-size="20" font-style="normal"
            font-weight="700" line-height="1"
            style="stroke: rgb(0,0,0); stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;">
            <tspan x="-55.83" y="6.28">BLOK A 10</tspan>
        </text>
    </g>
    <g transform="matrix(1 0 0 1 375 627.64)" style="" id="hfnD1q18P6vc4Ou0EoVBC">
        <text xml:space="preserve" font-family="Montserrat" font-size="20" font-style="normal"
            font-weight="700" line-height="1"
            style="stroke: rgb(0,0,0); stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;">
            <tspan x="-55.84" y="6.28">BLOK A 11</tspan>
        </text>
    </g>
    <g transform="matrix(1 0 0 1 375 677.64)" style="" id="otM4rWfeHNzfPfEvhd2IQ">
        <text xml:space="preserve" font-family="Montserrat" font-size="20" font-style="normal"
            font-weight="700" line-height="1"
            style="stroke: rgb(0,0,0); stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;">
            <tspan x="-55.84" y="6.28">BLOK A 12</tspan>
        </text>
    </g>
    <g transform="matrix(1 0 0 1 375 727.64)" style="" id="ICDpa-EsQHHhfq19H2JLg">
        <text xml:space="preserve" font-family="Montserrat" font-size="20" font-style="normal"
            font-weight="700" line-height="1"
            style="stroke: rgb(0,0,0); stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;">
            <tspan x="-55.84" y="6.28">BLOK A 13</tspan>
        </text>
    </g>
    <g transform="matrix(1 0 0 1 375 926.84)" style="" id="B-K1XXaUkva03MCirmohV">
        <text xml:space="preserve" font-family="Montserrat" font-size="20" font-style="normal"
            font-weight="700" line-height="1"
            style="stroke: rgb(0,0,0); stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;">
            <tspan x="-55.84" y="6.28">BLOK A 17</tspan>
        </text>
    </g>
    <g transform="matrix(1 0 0 1 375 876.84)" style="" id="cmy41oLkJiXT76HcUqquO">
        <text xml:space="preserve" font-family="Montserrat" font-size="20" font-style="normal"
            font-weight="700" line-height="1"
            style="stroke: rgb(0,0,0); stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;">
            <tspan x="-55.84" y="6.28">BLOK A 16</tspan>
        </text>
    </g>
    <g transform="matrix(1 0 0 1 375 826.84)" style="" id="LxNHbUcQ49Ogtt71hxf-Y">
        <text xml:space="preserve" font-family="Montserrat" font-size="20" font-style="normal"
            font-weight="700" line-height="1"
            style="stroke: rgb(0,0,0); stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;">
            <tspan x="-55.84" y="6.28">BLOK A 15</tspan>
        </text>
    </g>
    <g transform="matrix(1 0 0 1 375 777.64)" style="" id="521BBBO2_4aVqxK7-Tbza">
        <text xml:space="preserve" font-family="Montserrat" font-size="20" font-style="normal"
            font-weight="700" line-height="1"
            style="stroke: rgb(0,0,0); stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;">
            <tspan x="-55.84" y="6.28">BLOK A 14</tspan>
        </text>
    </g>
    <g transform="matrix(1 0 0 1 375 976.84)" style="" id="hHaDADLjwMtDQj5LWwQdC">
        <text xml:space="preserve" font-family="Montserrat" font-size="20" font-style="normal"
            font-weight="700" line-height="1"
            style="stroke: rgb(0,0,0); stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;">
            <tspan x="-55.84" y="6.28">BLOK A 18</tspan>
        </text>
    </g>
    <g transform="matrix(1 0 0 1 375 1026.04)" style="" id="06soTtDZU9Y6_6O9zoZDU">
        <text xml:space="preserve" font-family="Montserrat" font-size="20" font-style="normal"
            font-weight="700" line-height="1"
            style="stroke: rgb(0,0,0); stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;">
            <tspan x="-55.84" y="6.28">BLOK A 19</tspan>
        </text>
    </g>
    <g transform="matrix(1 0 0 1 375 1076.04)" style="" id="sTQmtR26iG5wH-h8zL2-G">
        <text xml:space="preserve" font-family="Montserrat" font-size="20" font-style="normal"
            font-weight="700" line-height="1"
            style="stroke: rgb(0,0,0); stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;">
            <tspan x="-55.84" y="6.28">BLOK A 20</tspan>
        </text>
    </g>
    <g transform="matrix(1 0 0 1 375 1126.04)" style="" id="VUzG9h7K4d4CCnbLJlqmh">
        <text xml:space="preserve" font-family="Montserrat" font-size="20" font-style="normal"
            font-weight="700" line-height="1"
            style="stroke: rgb(0,0,0); stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;">
            <tspan x="-55.84" y="6.28">BLOK A 21</tspan>
        </text>
    </g>
    <g transform="matrix(1 0 0 1 375 1176.04)" style="" id="Lxqutpo51n8V7YF7PJLsU">
        <text xml:space="preserve" font-family="Montserrat" font-size="20" font-style="normal"
            font-weight="700" line-height="1"
            style="stroke: rgb(0,0,0); stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;">
            <tspan x="-55.84" y="6.28">BLOK A 22</tspan>
        </text>
    </g>
    <g transform="matrix(1 0 0 1 375 1225.24)" style="" id="MuTZvUp550tQNVF_Pc6LQ">
        <text xml:space="preserve" font-family="Montserrat" font-size="20" font-style="normal"
            font-weight="700" line-height="1"
            style="stroke: rgb(0,0,0); stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;">
            <tspan x="-55.84" y="6.28">BLOK A 23</tspan>
        </text>
    </g>
    <g transform="matrix(1 0 0 1 375 1275.24)" style="" id="ATff9GDykZkeZ1rf9qjqp">
        <text xml:space="preserve" font-family="Montserrat" font-size="20" font-style="normal"
            font-weight="700" line-height="1"
            style="stroke: rgb(0,0,0); stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;">
            <tspan x="-55.84" y="6.28">BLOK A 24</tspan>
        </text>
    </g>
    <g transform="matrix(1 0 0 1 375 1325.24)" style="" id="RLMvEeureQICGuXXXYQK4">
        <text xml:space="preserve" font-family="Montserrat" font-size="20" font-style="normal"
            font-weight="700" line-height="1"
            style="stroke: rgb(0,0,0); stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;">
            <tspan x="-55.84" y="6.28">BLOK A 25</tspan>
        </text>
    </g>
    <g transform="matrix(1 0 0 1 375 1375.24)" style="" id="dCboD1d-vYXOQiI2lwqIr">
        <text xml:space="preserve" font-family="Montserrat" font-size="20" font-style="normal"
            font-weight="700" line-height="1"
            style="stroke: rgb(0,0,0); stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;">
            <tspan x="-55.84" y="6.28">BLOK A 26</tspan>
        </text>
    </g>
    <g transform="matrix(1 0 0 1 375 1425.24)" style="" id="RMHOR10fmn2hI7UiGDux1">
        <text xml:space="preserve" font-family="Montserrat" font-size="20" font-style="normal"
            font-weight="700" line-height="1"
            style="stroke: rgb(0,0,0); stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;">
            <tspan x="-55.84" y="6.28">BLOK A 27</tspan>
        </text>
    </g>
    <g transform="matrix(1 0 0 1 375 1475.24)" style="" id="zrPQjukrvPwDB_9tfH9wg">
        <text xml:space="preserve" font-family="Montserrat" font-size="20" font-style="normal"
            font-weight="700" line-height="1"
            style="stroke: rgb(0,0,0); stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;">
            <tspan x="-55.84" y="6.28">BLOK A 28</tspan>
        </text>
    </g>
    <g transform="matrix(1 0 0 1 375 1524.44)" style="" id="46_IlNOzZnKovcDAFYRDV">
        <text xml:space="preserve" font-family="Montserrat" font-size="20" font-style="normal"
            font-weight="700" line-height="1"
            style="stroke: rgb(0,0,0); stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;">
            <tspan x="-55.84" y="6.28">BLOK A 29</tspan>
        </text>
    </g>
    <g transform="matrix(1 0 0 1 375 1574.44)" style="" id="v6L2bhCx5GsczsqqZQzmz">
        <text xml:space="preserve" font-family="Montserrat" font-size="20" font-style="normal"
            font-weight="700" line-height="1"
            style="stroke: rgb(0,0,0); stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;">
            <tspan x="-55.84" y="6.28">BLOK A 30</tspan>
        </text>
    </g>
    <g transform="matrix(1 0 0 1 126 578.44)" style="" id="aiHy1e53u4DmIlkiKnTgV">
        <text xml:space="preserve" font-family="Montserrat" font-size="20" font-style="normal"
            font-weight="700" line-height="1"
            style="stroke: rgb(0,0,0); stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;">
            <tspan x="-55.84" y="6.28">BLOK B 10</tspan>
        </text>
    </g>
    <g transform="matrix(1 0 0 1 126 627.64)" style="" id="UKPkfR4B_cHARCtDdzhst">
        <text xml:space="preserve" font-family="Montserrat" font-size="20" font-style="normal"
            font-weight="700" line-height="1"
            style="stroke: rgb(0,0,0); stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;">
            <tspan x="-55.84" y="6.28">BLOK B 11</tspan>
        </text>
    </g>
    <g transform="matrix(1 0 0 1 126 677.64)" style="" id="VmgBrLN2FIxCRhPJnhuKx">
        <text xml:space="preserve" font-family="Montserrat" font-size="20" font-style="normal"
            font-weight="700" line-height="1"
            style="stroke: rgb(0,0,0); stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;">
            <tspan x="-55.84" y="6.28">BLOK B 12</tspan>
        </text>
    </g>
    <g transform="matrix(1 0 0 1 126 727.64)" style="" id="P63kTx6XcfV5vJ8MA3R_n">
        <text xml:space="preserve" font-family="Montserrat" font-size="20" font-style="normal"
            font-weight="700" line-height="1"
            style="stroke: rgb(0,0,0); stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;">
            <tspan x="-55.84" y="6.28">BLOK B 13</tspan>
        </text>
    </g>
    <g transform="matrix(1 0 0 1 126 926.84)" style="" id="RBbIfUuIk6tsBfdUkE3Y3">
        <text xml:space="preserve" font-family="Montserrat" font-size="20" font-style="normal"
            font-weight="700" line-height="1"
            style="stroke: rgb(0,0,0); stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;">
            <tspan x="-55.84" y="6.28">BLOK B 17</tspan>
        </text>
    </g>
    <g transform="matrix(1 0 0 1 126 876.84)" style="" id="gUqeQCkox7AWbgnpd3rXO">
        <text xml:space="preserve" font-family="Montserrat" font-size="20" font-style="normal"
            font-weight="700" line-height="1"
            style="stroke: rgb(0,0,0); stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;">
            <tspan x="-55.84" y="6.28">BLOK B 16</tspan>
        </text>
    </g>
    <g transform="matrix(1 0 0 1 126 826.84)" style="" id="aL2k4KvLQw5jwtN8viWp9">
        <text xml:space="preserve" font-family="Montserrat" font-size="20" font-style="normal"
            font-weight="700" line-height="1"
            style="stroke: rgb(0,0,0); stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;">
            <tspan x="-55.84" y="6.28">BLOK B 15</tspan>
        </text>
    </g>
    <g transform="matrix(1 0 0 1 126 777.64)" style="" id="l8caWuWzZZeOXuEOOJRRV">
        <text xml:space="preserve" font-family="Montserrat" font-size="20" font-style="normal"
            font-weight="700" line-height="1"
            style="stroke: rgb(0,0,0); stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;">
            <tspan x="-55.84" y="6.28">BLOK B 14</tspan>
        </text>
    </g>
    <g transform="matrix(1 0 0 1 126 976.84)" style="" id="bK9j9nP_4UmJ9_pcpdx6J">
        <text xml:space="preserve" font-family="Montserrat" font-size="20" font-style="normal"
            font-weight="700" line-height="1"
            style="stroke: rgb(0,0,0); stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;">
            <tspan x="-55.84" y="6.28">BLOK B 18</tspan>
        </text>
    </g>
    <g transform="matrix(1 0 0 1 126 1026.04)" style="" id="VNkW7uJaOsccT0KMAJp8F">
        <text xml:space="preserve" font-family="Montserrat" font-size="20" font-style="normal"
            font-weight="700" line-height="1"
            style="stroke: rgb(0,0,0); stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;">
            <tspan x="-55.84" y="6.28">BLOK B 19</tspan>
        </text>
    </g>
    <g transform="matrix(1 0 0 1 126 1076.04)" style="" id="KNCfPX9LwPX8uuVhJrJnz">
        <text xml:space="preserve" font-family="Montserrat" font-size="20" font-style="normal"
            font-weight="700" line-height="1"
            style="stroke: rgb(0,0,0); stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;">
            <tspan x="-55.84" y="6.28">BLOK B 20</tspan>
        </text>
    </g>
    <g transform="matrix(1 0 0 1 126 1126.04)" style="" id="DKQJQGNmYN7SldvPvIltI">
        <text xml:space="preserve" font-family="Montserrat" font-size="20" font-style="normal"
            font-weight="700" line-height="1"
            style="stroke: rgb(0,0,0); stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;">
            <tspan x="-55.84" y="6.28">BLOK B 21</tspan>
        </text>
    </g>
    <g transform="matrix(1 0 0 1 126 1176.04)" style="" id="f9IxszZDWbd8U_F8qpnZT">
        <text xml:space="preserve" font-family="Montserrat" font-size="20" font-style="normal"
            font-weight="700" line-height="1"
            style="stroke: rgb(0,0,0); stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;">
            <tspan x="-55.84" y="6.28">BLOK B 22</tspan>
        </text>
    </g>
    <g transform="matrix(1 0 0 1 126 1225.24)" style="" id="7Pdd7zkwrE2uf8SjrAzHW">
        <text xml:space="preserve" font-family="Montserrat" font-size="20" font-style="normal"
            font-weight="700" line-height="1"
            style="stroke: rgb(0,0,0); stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;">
            <tspan x="-55.84" y="6.28">BLOK B 23</tspan>
        </text>
    </g>
    <g transform="matrix(1 0 0 1 126 1275.24)" style="" id="AMaWaqnuySz2sQnwiGd-U">
        <text xml:space="preserve" font-family="Montserrat" font-size="20" font-style="normal"
            font-weight="700" line-height="1"
            style="stroke: rgb(0,0,0); stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;">
            <tspan x="-55.84" y="6.28">BLOK B 24</tspan>
        </text>
    </g>
    <g transform="matrix(1 0 0 1 126 1325.24)" style="" id="dZ5E_Lv4P5pXIEs-Dd487">
        <text xml:space="preserve" font-family="Montserrat" font-size="20" font-style="normal"
            font-weight="700" line-height="1"
            style="stroke: rgb(0,0,0); stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;">
            <tspan x="-55.84" y="6.28">BLOK B 25</tspan>
        </text>
    </g>
    <g transform="matrix(1 0 0 1 126 1378.61)" style="" id="FRSSF1mJWMMXAn3457Th1">
        <text xml:space="preserve" font-family="Montserrat" font-size="20" font-style="normal"
            font-weight="700" line-height="1"
            style="stroke: rgb(0,0,0); stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;">
            <tspan x="-55.84" y="6.28">BLOK B 26</tspan>
        </text>
    </g>
    <g transform="matrix(1 0 0 1 126 1425.24)" style="" id="QgVDvh9rPNSmEURe5jgX9">
        <text xml:space="preserve" font-family="Montserrat" font-size="20" font-style="normal"
            font-weight="700" line-height="1"
            style="stroke: rgb(0,0,0); stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;">
            <tspan x="-55.84" y="6.28">BLOK B 27</tspan>
        </text>
    </g>
    <g transform="matrix(1 0 0 1 126 1475.24)" style="" id="_L454EQFrzT0MDDhAedi0">
        <text xml:space="preserve" font-family="Montserrat" font-size="20" font-style="normal"
            font-weight="700" line-height="1"
            style="stroke: rgb(0,0,0); stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;">
            <tspan x="-55.84" y="6.28">BLOK B 28</tspan>
        </text>
    </g>
    <g transform="matrix(1 0 0 1 126 1524.44)" style="" id="zKSaB2A2rNHvbxu2Qhi5o">
        <text xml:space="preserve" font-family="Montserrat" font-size="20" font-style="normal"
            font-weight="700" line-height="1"
            style="stroke: rgb(0,0,0); stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;">
            <tspan x="-55.84" y="6.28">BLOK B 29</tspan>
        </text>
    </g>
    <g transform="matrix(1 0 0 1 126 1574.44)" style="" id="03lbbE5QntUBm2b5HC2Tv">
        <text xml:space="preserve" font-family="Montserrat" font-size="20" font-style="normal"
            font-weight="700" line-height="1"
            style="stroke: rgb(0,0,0); stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;">
            <tspan x="-55.84" y="6.28">BLOK B 30</tspan>
        </text>
    </g>
</svg>
