<svg version="1.1" width="100%" viewBox="0 0 700 3700" xml:space="preserve">
    <g transform="matrix(1 0 0 1 351.14 92.05)" id="K4FyQf4ryqJWG4NKXGBsu"  >
    <path style="stroke: rgb(194,186,242); stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(96,96,96); fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-350, -50)" d="M 0 0 L 700 0 L 700 100 L 0 100 z" stroke-linecap="round" />
    </g>
    <g transform="matrix(0 5 -1 0 226.14 1889.58)" id="1L5DtfSUVOqnw9_PGeFOH"  >
    <path style="stroke: rgb(194,186,242); stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(96,96,96); fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -350 -40 L 350 -40 L 350 40 L -350 40 z" stroke-linecap="round" />
    </g>

    <g transform="matrix(1 0 0 1 321.14 294.05)" id="PmMLhqeERkdMOeh4ODsB"  >
        @forelse ( $siteplan->where('code_product', 'PmMLhqeERkdMOeh4ODsB') as $hasil)
            @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-55, -150.5)" d="M 0 0 L 110 0 L 110 301 L 0 301 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style="fill:#f50505;stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-55, -150.5)" d="M 0 0 L 110 0 L 110 301 L 0 301 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-PmMLhqeERkdMOeh4ODsB">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-55, -150.5)" d="M 0 0 L 110 0 L 110 301 L 0 301 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="PmMLhqeERkdMOeh4ODsB">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-55, -150.5)" d="M 0 0 L 110 0 L 110 301 L 0 301 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>

    <g transform="matrix(1 0 0 1 430.64 294.05)" id="2e9gxr4ZbVHjrwRvMsuv"  >
        @forelse ( $siteplan->where('code_product', '2e9gxr4ZbVHjrwRvMsuv') as $hasil)
            @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-55, -150.5)" d="M 0 0 L 110 0 L 110 301 L 0 301 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style="fill:#f50505; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-55, -150.5)" d="M 0 0 L 110 0 L 110 301 L 0 301 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-2e9gxr4ZbVHjrwRvMsuv">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-55, -150.5)" d="M 0 0 L 110 0 L 110 301 L 0 301 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="2e9gxr4ZbVHjrwRvMsuv">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-55, -150.5)" d="M 0 0 L 110 0 L 110 301 L 0 301 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>
    <g transform="matrix(1 0 0 0.8 375.83 485.56)" id="JoXkcix92iXURJd6kRXN"  >
        @forelse ( $siteplan->where('code_product', 'JoXkcix92iXURJd6kRXN') as $hasil)
            @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -110 -50 L 110 -50 L 110 50 L -110 50 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style=" fill:#f50505;stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -110 -50 L 110 -50 L 110 50 L -110 50 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-JoXkcix92iXURJd6kRXN">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -110 -50 L 110 -50 L 110 50 L -110 50 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="JoXkcix92iXURJd6kRXN">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -110 -50 L 110 -50 L 110 50 L -110 50 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>

    <g transform="matrix(1 0 0 0.8 375.83 565.41)" id="yf0x4Yv4PZWGWaqqVoO"  >
        @forelse ( $siteplan->where('code_product', 'yf0x4Yv4PZWGWaqqVoO') as $hasil)
            @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style=" fill:#ffc107;  stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -110 -50 L 110 -50 L 110 50 L -110 50 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style="fill:#f50505; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -110 -50 L 110 -50 L 110 50 L -110 50 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-yf0x4Yv4PZWGWaqqVoO">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -110 -50 L 110 -50 L 110 50 L -110 50 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="yf0x4Yv4PZWGWaqqVoO">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -110 -50 L 110 -50 L 110 50 L -110 50 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>

    <g transform="matrix(1 0 0 0.8 375.83 645.26)" id="YxG2duLB5BN90XCQOvf1"  >
        @forelse ( $siteplan->where('code_product', 'YxG2duLB5BN90XCQOvf1') as $hasil)
            @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style=" fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -110 -50 L 110 -50 L 110 50 L -110 50 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style="fill:#f50505;stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -110 -50 L 110 -50 L 110 50 L -110 50 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-YxG2duLB5BN90XCQOvf1">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -110 -50 L 110 -50 L 110 50 L -110 50 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="YxG2duLB5BN90XCQOvf1">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -110 -50 L 110 -50 L 110 50 L -110 50 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>

    <g transform="matrix(1 0 0 0.8 375.83 725.11)" id="77nUTNqqUfAi2jGaJeC"  >
        @forelse ( $siteplan->where('code_product', '77nUTNqqUfAi2jGaJeC') as $hasil)
            @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -110 -50 L 110 -50 L 110 50 L -110 50 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style="  fill:#f50505; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -110 -50 L 110 -50 L 110 50 L -110 50 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-77nUTNqqUfAi2jGaJeC">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -110 -50 L 110 -50 L 110 50 L -110 50 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="77nUTNqqUfAi2jGaJeC">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -110 -50 L 110 -50 L 110 50 L -110 50 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>

    <g transform="matrix(1 0 0 0.8 375.83 804.96)" id="c_grRqjvz4clR4TjuJmMn"  >
        @forelse ( $siteplan->where('code_product', 'c_grRqjvz4clR4TjuJmMn') as $hasil)
            @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -110 -50 L 110 -50 L 110 50 L -110 50 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style="fill:#f50505; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -110 -50 L 110 -50 L 110 50 L -110 50 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-c_grRqjvz4clR4TjuJmMn">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -110 -50 L 110 -50 L 110 50 L -110 50 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="c_grRqjvz4clR4TjuJmMn">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -110 -50 L 110 -50 L 110 50 L -110 50 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>

    <g transform="matrix(1 0 0 0.8 375.83 884.81)" id="r6KXpZzdEtTe7FZNdk2rM"  >
        @forelse ( $siteplan->where('code_product', 'r6KXpZzdEtTe7FZNdk2rM') as $hasil)
            @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -110 -50 L 110 -50 L 110 50 L -110 50 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style=" fill:#f50505; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -110 -50 L 110 -50 L 110 50 L -110 50 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-r6KXpZzdEtTe7FZNdk2rM">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -110 -50 L 110 -50 L 110 50 L -110 50 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="r6KXpZzdEtTe7FZNdk2rM">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -110 -50 L 110 -50 L 110 50 L -110 50 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>

    <g transform="matrix(1 0 0 0.8 375.83 964.66)" id="amQRBD8nhvEgmof5c4mwA"  >
        @forelse ( $siteplan->where('code_product', 'amQRBD8nhvEgmof5c4mwA') as $hasil)
            @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -110 -50 L 110 -50 L 110 50 L -110 50 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style="fill:#f50505; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -110 -50 L 110 -50 L 110 50 L -110 50 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-amQRBD8nhvEgmof5c4mwA">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -110 -50 L 110 -50 L 110 50 L -110 50 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="amQRBD8nhvEgmof5c4mwA">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -110 -50 L 110 -50 L 110 50 L -110 50 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>

    <g transform="matrix(1 0 0 0.8 375.83 1044.51)" id="v5ULnMjO9aJIgMlHoPVk"  >
        @forelse ( $siteplan->where('code_product', 'v5ULnMjO9aJIgMlHoPVk') as $hasil)
            @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style=" fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -110 -50 L 110 -50 L 110 50 L -110 50 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style="fill:#f50505; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -110 -50 L 110 -50 L 110 50 L -110 50 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-v5ULnMjO9aJIgMlHoPVk">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -110 -50 L 110 -50 L 110 50 L -110 50 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="v5ULnMjO9aJIgMlHoPVk">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -110 -50 L 110 -50 L 110 50 L -110 50 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>

    <g transform="matrix(1 0 0 0.8 375.83 1124.36)" id="msOWNJR2aGcZYuEkXoXs2"  >
        @forelse ( $siteplan->where('code_product', 'msOWNJR2aGcZYuEkXoXs2') as $hasil)
            @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style=" fill:#ffc107;  stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -110 -50 L 110 -50 L 110 50 L -110 50 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style=" fill:#f50505; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -110 -50 L 110 -50 L 110 50 L -110 50 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-msOWNJR2aGcZYuEkXoXs2">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -110 -50 L 110 -50 L 110 50 L -110 50 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="msOWNJR2aGcZYuEkXoXs2">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -110 -50 L 110 -50 L 110 50 L -110 50 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>

    <g transform="matrix(1 0 0 0.8 375.83 1204.21)" id="VmwVtf8UtR36lRYZ5NFu"  >
        @forelse ( $siteplan->where('code_product', 'VmwVtf8UtR36lRYZ5NFu') as $hasil)
            @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -110 -50 L 110 -50 L 110 50 L -110 50 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style=" fill:#f50505; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -110 -50 L 110 -50 L 110 50 L -110 50 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-VmwVtf8UtR36lRYZ5NFu">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -110 -50 L 110 -50 L 110 50 L -110 50 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="VmwVtf8UtR36lRYZ5NFu">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -110 -50 L 110 -50 L 110 50 L -110 50 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>

    <g transform="matrix(1 0 0 0.8 375.83 1284.06)" id="nqocCq8K68eXOxETfzo1O"  >
        @forelse ( $siteplan->where('code_product', 'nqocCq8K68eXOxETfzo1O') as $hasil)
            @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -110 -50 L 110 -50 L 110 50 L -110 50 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style="fill:#f50505; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -110 -50 L 110 -50 L 110 50 L -110 50 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-nqocCq8K68eXOxETfzo1O">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -110 -50 L 110 -50 L 110 50 L -110 50 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="nqocCq8K68eXOxETfzo1O">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -110 -50 L 110 -50 L 110 50 L -110 50 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>

    <g transform="matrix(1 0 0 0.8 375.83 1363.91)" id="joMs4pe6gnvR7fXaBnaFW"  >
        @forelse ( $siteplan->where('code_product', 'joMs4pe6gnvR7fXaBnaFW') as $hasil)
            @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -110 -50 L 110 -50 L 110 50 L -110 50 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style="fill:#f50505; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -110 -50 L 110 -50 L 110 50 L -110 50 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-joMs4pe6gnvR7fXaBnaFW">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -110 -50 L 110 -50 L 110 50 L -110 50 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="joMs4pe6gnvR7fXaBnaFW">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -110 -50 L 110 -50 L 110 50 L -110 50 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>

    <g transform="matrix(1 0 0 0.8 375.83 1443.76)" id="P65VldObXaYtNyvqrjXT0"  >
        @forelse ( $siteplan->where('code_product', 'P65VldObXaYtNyvqrjXT0') as $hasil)
            @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -110 -50 L 110 -50 L 110 50 L -110 50 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style="fill:#f50505; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -110 -50 L 110 -50 L 110 50 L -110 50 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-P65VldObXaYtNyvqrjXT0">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -110 -50 L 110 -50 L 110 50 L -110 50 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="P65VldObXaYtNyvqrjXT0">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -110 -50 L 110 -50 L 110 50 L -110 50 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>

    <g transform="matrix(1 0 0 0.8 375.83 1523.61)" id="c639D7hlyluU47MvCdcfA"  >
        @forelse ( $siteplan->where('code_product', 'c639D7hlyluU47MvCdcfA') as $hasil)
            @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -110 -50 L 110 -50 L 110 50 L -110 50 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style="fill:#f50505; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -110 -50 L 110 -50 L 110 50 L -110 50 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-c639D7hlyluU47MvCdcfA">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -110 -50 L 110 -50 L 110 50 L -110 50 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="c639D7hlyluU47MvCdcfA">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -110 -50 L 110 -50 L 110 50 L -110 50 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>

    <g transform="matrix(1 0 0 0.8 375.83 1603.46)" id="oRHWYNyoxEoGkLPO03Wu"  >
        @forelse ( $siteplan->where('code_product', 'oRHWYNyoxEoGkLPO03Wu') as $hasil)
            @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -110 -50 L 110 -50 L 110 50 L -110 50 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style="fill:#f50505; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -110 -50 L 110 -50 L 110 50 L -110 50 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-oRHWYNyoxEoGkLPO03Wu">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -110 -50 L 110 -50 L 110 50 L -110 50 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="oRHWYNyoxEoGkLPO03Wu">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -110 -50 L 110 -50 L 110 50 L -110 50 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>

    <g transform="matrix(1 0 0 0.8 375.83 1683.31)" id="zLbtOFt9jS48hik1pP74"  >
        @forelse ( $siteplan->where('code_product', 'zLbtOFt9jS48hik1pP74') as $hasil)
            @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -110 -50 L 110 -50 L 110 50 L -110 50 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style="fill:#f50505;  stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -110 -50 L 110 -50 L 110 50 L -110 50 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-zLbtOFt9jS48hik1pP74">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -110 -50 L 110 -50 L 110 50 L -110 50 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="zLbtOFt9jS48hik1pP74">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -110 -50 L 110 -50 L 110 50 L -110 50 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>

    <g transform="matrix(1 0 0 0.8 375.83 1763.16)" id="6HzeDxpjPl9eq7TzfyyK"  >
        @forelse ( $siteplan->where('code_product', '6HzeDxpjPl9eq7TzfyyK') as $hasil)
            @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style=" fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -110 -50 L 110 -50 L 110 50 L -110 50 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style="fill:#f50505; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -110 -50 L 110 -50 L 110 50 L -110 50 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-6HzeDxpjPl9eq7TzfyyK">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -110 -50 L 110 -50 L 110 50 L -110 50 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="6HzeDxpjPl9eq7TzfyyK">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -110 -50 L 110 -50 L 110 50 L -110 50 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>

    <g transform="matrix(1 0 0 0.8 375.83 1843.01)" id="fU61lhwkoHi2yebX5fMzr"  >
        @forelse ( $siteplan->where('code_product', 'fU61lhwkoHi2yebX5fMzr') as $hasil)
            @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style="fill:#ffc107;  stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -110 -50 L 110 -50 L 110 50 L -110 50 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style="fill:#f50505; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -110 -50 L 110 -50 L 110 50 L -110 50 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-fU61lhwkoHi2yebX5fMzr">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -110 -50 L 110 -50 L 110 50 L -110 50 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="fU61lhwkoHi2yebX5fMzr">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -110 -50 L 110 -50 L 110 50 L -110 50 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>

    <g transform="matrix(1 0 0 0.8 375.83 1922.86)" id="Yszg9ZhJBY_ukwruYi4B"  >
        @forelse ( $siteplan->where('code_product', 'Yszg9ZhJBY_ukwruYi4B') as $hasil)
            @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -110 -50 L 110 -50 L 110 50 L -110 50 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style=" fill:#f50505; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -110 -50 L 110 -50 L 110 50 L -110 50 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-Yszg9ZhJBY_ukwruYi4B">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -110 -50 L 110 -50 L 110 50 L -110 50 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="Yszg9ZhJBY_ukwruYi4B">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -110 -50 L 110 -50 L 110 50 L -110 50 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>

    <g transform="matrix(1 0 0 0.8 375.83 2002.71)" id="jEc5JUaXeRd2aJcgDfTI"  >
        @forelse ( $siteplan->where('code_product', 'jEc5JUaXeRd2aJcgDfTI') as $hasil)
            @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -110 -50 L 110 -50 L 110 50 L -110 50 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style="fill:#f50505; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -110 -50 L 110 -50 L 110 50 L -110 50 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-jEc5JUaXeRd2aJcgDfTI">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -110 -50 L 110 -50 L 110 50 L -110 50 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="jEc5JUaXeRd2aJcgDfTI">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -110 -50 L 110 -50 L 110 50 L -110 50 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>

    <g transform="matrix(1 0 0 0.8 375.83 2082.64)" id="tbTxl9MFytmRyNZ4QnSm"  >
        @forelse ( $siteplan->where('code_product', 'tbTxl9MFytmRyNZ4QnSm') as $hasil)
            @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -110 -50 L 110 -50 L 110 50 L -110 50 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style=" fill:#f50505; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -110 -50 L 110 -50 L 110 50 L -110 50 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-tbTxl9MFytmRyNZ4QnSm">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -110 -50 L 110 -50 L 110 50 L -110 50 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="tbTxl9MFytmRyNZ4QnSm">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -110 -50 L 110 -50 L 110 50 L -110 50 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>

    <g transform="matrix(1 0 0 0.8 375.83 2162.49)" id="djW52JA0aU1nMLyDCuDRY"  >
        @forelse ( $siteplan->where('code_product', 'djW52JA0aU1nMLyDCuDRY') as $hasil)
            @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -110 -50 L 110 -50 L 110 50 L -110 50 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style="fill:#f50505; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -110 -50 L 110 -50 L 110 50 L -110 50 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-djW52JA0aU1nMLyDCuDRY">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -110 -50 L 110 -50 L 110 50 L -110 50 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="djW52JA0aU1nMLyDCuDRY">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -110 -50 L 110 -50 L 110 50 L -110 50 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>

    <g transform="matrix(1 0 0 0.8 375.83 2242.34)" id="oph1J5i6yXWCVVo6h2p_c"  >
        @forelse ( $siteplan->where('code_product', 'oph1J5i6yXWCVVo6h2p_c') as $hasil)
            @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -110 -50 L 110 -50 L 110 50 L -110 50 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style="fill:#f50505; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -110 -50 L 110 -50 L 110 50 L -110 50 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-oph1J5i6yXWCVVo6h2p_c">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -110 -50 L 110 -50 L 110 50 L -110 50 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="oph1J5i6yXWCVVo6h2p_c">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -110 -50 L 110 -50 L 110 50 L -110 50 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>

    <g transform="matrix(1 0 0 0.8 375.83 2322.19)" id="YWAb6mSdbd6cF9nWlMO4"  >
        @forelse ( $siteplan->where('code_product', 'YWAb6mSdbd6cF9nWlMO4') as $hasil)
            @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -110 -50 L 110 -50 L 110 50 L -110 50 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style="fill:#f50505; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -110 -50 L 110 -50 L 110 50 L -110 50 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-YWAb6mSdbd6cF9nWlMO4">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -110 -50 L 110 -50 L 110 50 L -110 50 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="YWAb6mSdbd6cF9nWlMO4">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -110 -50 L 110 -50 L 110 50 L -110 50 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>

    <g transform="matrix(1 0 0 0.8 375.83 2402.04)" id="r090t43HQU0ZMb8zS8sGF"  >
        @forelse ( $siteplan->where('code_product', 'r090t43HQU0ZMb8zS8sGF') as $hasil)
            @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -110 -50 L 110 -50 L 110 50 L -110 50 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style=" fill:#f50505;  stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -110 -50 L 110 -50 L 110 50 L -110 50 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-r090t43HQU0ZMb8zS8sGF">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -110 -50 L 110 -50 L 110 50 L -110 50 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="r090t43HQU0ZMb8zS8sGF">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -110 -50 L 110 -50 L 110 50 L -110 50 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>

    <g transform="matrix(1 0 0 0.8 375.83 2481.89)" id="Oyy_Mju9cMJEy0X8MUGjr"  >
        @forelse ( $siteplan->where('code_product', 'Oyy_Mju9cMJEy0X8MUGjr') as $hasil)
            @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -110 -50 L 110 -50 L 110 50 L -110 50 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style="fill:#f50505; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -110 -50 L 110 -50 L 110 50 L -110 50 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-Oyy_Mju9cMJEy0X8MUGjr">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -110 -50 L 110 -50 L 110 50 L -110 50 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="Oyy_Mju9cMJEy0X8MUGjr">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -110 -50 L 110 -50 L 110 50 L -110 50 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>

    <g transform="matrix(1 0 0 0.8 375.83 2561.74)" id="q8ezBWHZt50kQVTIBVNBC"  >
        @forelse ( $siteplan->where('code_product', 'q8ezBWHZt50kQVTIBVNBC') as $hasil)
            @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style=" fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -110 -50 L 110 -50 L 110 50 L -110 50 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style=" fill:#f50505; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -110 -50 L 110 -50 L 110 50 L -110 50 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-q8ezBWHZt50kQVTIBVNBC">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -110 -50 L 110 -50 L 110 50 L -110 50 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="q8ezBWHZt50kQVTIBVNBC">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -110 -50 L 110 -50 L 110 50 L -110 50 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>

    <g transform="matrix(1 0 0 0.8 375.83 2641.59)" id="TwngUU_iwjo7yeqkechOz"  >
        @forelse ( $siteplan->where('code_product', 'TwngUU_iwjo7yeqkechOz') as $hasil)
            @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -110 -50 L 110 -50 L 110 50 L -110 50 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style=" fill:#f50505; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -110 -50 L 110 -50 L 110 50 L -110 50 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-TwngUU_iwjo7yeqkechOz">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -110 -50 L 110 -50 L 110 50 L -110 50 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="TwngUU_iwjo7yeqkechOz">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -110 -50 L 110 -50 L 110 50 L -110 50 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>

    <g transform="matrix(1 0 0 0.8 375.83 2721.44)" id="XKusSIlQNzPLTz7j4wnjB"  >
        @forelse ( $siteplan->where('code_product', 'XKusSIlQNzPLTz7j4wnjB') as $hasil)
            @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -110 -50 L 110 -50 L 110 50 L -110 50 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style=" fill:#f50505; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -110 -50 L 110 -50 L 110 50 L -110 50 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-XKusSIlQNzPLTz7j4wnjB">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -110 -50 L 110 -50 L 110 50 L -110 50 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="XKusSIlQNzPLTz7j4wnjB">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -110 -50 L 110 -50 L 110 50 L -110 50 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>

    <g transform="matrix(1 0 0 0.8 375.83 2801.29)" id="xlczJqVH48MLuMHk9_ANL"  >
        @forelse ( $siteplan->where('code_product', 'xlczJqVH48MLuMHk9_ANL') as $hasil)
            @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -110 -50 L 110 -50 L 110 50 L -110 50 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style="fill:#f50505; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -110 -50 L 110 -50 L 110 50 L -110 50 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-xlczJqVH48MLuMHk9_ANL">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -110 -50 L 110 -50 L 110 50 L -110 50 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="xlczJqVH48MLuMHk9_ANL">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -110 -50 L 110 -50 L 110 50 L -110 50 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>

    <g transform="matrix(1 0 0 0.8 375.83 2881.15)" id="GSmSgBjjxumIZbWDYI2yV"  >
        @forelse ( $siteplan->where('code_product', 'GSmSgBjjxumIZbWDYI2yV') as $hasil)
            @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style=" fill:#ffc107;  stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -110 -50 L 110 -50 L 110 50 L -110 50 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style=" fill:#f50505;  stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -110 -50 L 110 -50 L 110 50 L -110 50 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-GSmSgBjjxumIZbWDYI2yV">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -110 -50 L 110 -50 L 110 50 L -110 50 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="GSmSgBjjxumIZbWDYI2yV">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -110 -50 L 110 -50 L 110 50 L -110 50 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>

    <g transform="matrix(1 0 0 0.8 375.83 2961)" id="CitZARfkKmUb9LASBtlC"  >
        @forelse ( $siteplan->where('code_product', 'CitZARfkKmUb9LASBtlC') as $hasil)
            @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -110 -50 L 110 -50 L 110 50 L -110 50 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style=" fill:#f50505; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -110 -50 L 110 -50 L 110 50 L -110 50 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-CitZARfkKmUb9LASBtlC">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -110 -50 L 110 -50 L 110 50 L -110 50 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="CitZARfkKmUb9LASBtlC">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -110 -50 L 110 -50 L 110 50 L -110 50 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>

    <g transform="matrix(1 0 0 1 375.45 3079.55)" id="S1D4v3lE0b7c0Zm5mSQzR"  >
    <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(255,255,255); fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-110, -80)" d="M 0 0 L 220 0 L 220 160 L 0 160 z" stroke-linecap="round" />
    </g>

    <g transform="matrix(1 0 0 0.8 375.32 3200.55)" id="eiAwRbQppLYRZmpG3ivCs"  >
        @forelse ( $siteplan->where('code_product', 'eiAwRbQppLYRZmpG3ivCs') as $hasil)
            @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -110 -50 L 110 -50 L 110 50 L -110 50 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style="fill:#f50505; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -110 -50 L 110 -50 L 110 50 L -110 50 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-eiAwRbQppLYRZmpG3ivCs">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -110 -50 L 110 -50 L 110 50 L -110 50 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="eiAwRbQppLYRZmpG3ivCs">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -110 -50 L 110 -50 L 110 50 L -110 50 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>

    <g transform="matrix(1 0 0 0.8 375.32 3280.4)" id="k4Vq6xIkS78hFUAmV3beF"  >
        @forelse ( $siteplan->where('code_product', 'k4Vq6xIkS78hFUAmV3beF') as $hasil)
            @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -110 -50 L 110 -50 L 110 50 L -110 50 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style="fill:#f50505; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -110 -50 L 110 -50 L 110 50 L -110 50 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-k4Vq6xIkS78hFUAmV3beF">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -110 -50 L 110 -50 L 110 50 L -110 50 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="k4Vq6xIkS78hFUAmV3beF">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -110 -50 L 110 -50 L 110 50 L -110 50 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>

    <g transform="matrix(1 0 0 0.8 374.45 3360.25)" id="BhdPr7HiyxrZcVMW5pfQd"  >
        @forelse ( $siteplan->where('code_product', 'BhdPr7HiyxrZcVMW5pfQd') as $hasil)
            @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -110 -50 L 110 -50 L 110 50 L -110 50 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style=" fill:#f50505; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -110 -50 L 110 -50 L 110 50 L -110 50 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-BhdPr7HiyxrZcVMW5pfQd">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -110 -50 L 110 -50 L 110 50 L -110 50 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="BhdPr7HiyxrZcVMW5pfQd">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -110 -50 L 110 -50 L 110 50 L -110 50 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>

    <g transform="matrix(1 0 0 0.8 374.45 3440.1)" id="8CsxtKywU8hq1E366w2j0"  >
        @forelse ( $siteplan->where('code_product', '8CsxtKywU8hq1E366w2j0') as $hasil)
            @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style=" fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -110 -50 L 110 -50 L 110 50 L -110 50 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style=" fill:#f50505; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -110 -50 L 110 -50 L 110 50 L -110 50 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-8CsxtKywU8hq1E366w2j0">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -110 -50 L 110 -50 L 110 50 L -110 50 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="8CsxtKywU8hq1E366w2j0">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -110 -50 L 110 -50 L 110 50 L -110 50 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>

    <g transform="matrix(1 0 0 0.8 374.45 3519.95)" id="ju0os0gPr8KsUPvcCxj9J"  >
        @forelse ( $siteplan->where('code_product', 'ju0os0gPr8KsUPvcCxj9J') as $hasil)
            @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style="fill:#ffc107;  stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -110 -50 L 110 -50 L 110 50 L -110 50 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style="  fill:#f50505; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -110 -50 L 110 -50 L 110 50 L -110 50 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-ju0os0gPr8KsUPvcCxj9J">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -110 -50 L 110 -50 L 110 50 L -110 50 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="ju0os0gPr8KsUPvcCxj9J">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -110 -50 L 110 -50 L 110 50 L -110 50 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>

    <g transform="matrix(1 0 0 0.8 374.45 3599.8)" id="G4cDJqgm1o7J_qrc9sgDk"  >
        @forelse ( $siteplan->where('code_product', 'G4cDJqgm1o7J_qrc9sgDk') as $hasil)
            @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style="fill:#ffc107;  stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -110 -50 L 110 -50 L 110 50 L -110 50 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style=" fill:#f50505; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -110 -50 L 110 -50 L 110 50 L -110 50 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-G4cDJqgm1o7J_qrc9sgDk">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -110 -50 L 110 -50 L 110 50 L -110 50 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="G4cDJqgm1o7J_qrc9sgDk">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -110 -50 L 110 -50 L 110 50 L -110 50 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>


    <g transform="matrix(1 0 0 1 351.14 92.05)" style="" id="gRKB_9L7b4FbUbdGRkbVl"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="27" font-style="normal" font-weight="800" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(255,255,255); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-138.36" y="6.5" >JALAN PARIT BULUH</tspan></text>
    </g>
    <g transform="matrix(0 -1 1 0 226.14 1893.99)" style="" id="y4pCdGZkZH5Nuonz7qla2"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="27" font-style="normal" font-weight="600" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(255,255,255); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-146.87" y="6.5" >Jalan Komplek 5 Meter</tspan></text>
    </g>
    <g transform="matrix(0 -1 1 0 226.14 3150.81)" style="" id="wbRzVzyn60AY5QsekAqNq"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="27" font-style="normal" font-weight="600" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(255,255,255); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-146.87" y="6.5" >Jalan Komplek 5 Meter</tspan></text>
    </g>
    <g transform="matrix(0 -1 1 0 226.14 595.53)" style="" id="jPa7PCTl1xnzAxjfvH14z"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="27" font-style="normal" font-weight="600" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(255,255,255); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-146.87" y="6.5" >Jalan Komplek 5 Meter</tspan></text>
    </g>
    <g transform="matrix(0 -1 1 0 322.14 294.05)" style="" id="7_5cVChYHLel17IWCKS6u"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="24" font-style="normal" font-weight="800" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-45.16" y="6.38" >RUKO 1</tspan></text>
    </g>
    <g transform="matrix(0 -1 1 0 432.64 294.05)" style="" id="Q5bEiw5DVF4lphL7AUATE"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="24" font-style="normal" font-weight="800" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-45.16" y="6.38" >RUKO 1</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 375.83 485.56)" style="" id="SBASAgwicyVD2IOn_mZ_8"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="24" font-style="normal" font-weight="800" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-65.48" y="8.12" >KAVLING 1</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 375.83 565.41)" style="" id="n-BVSPdJqcClrupnIaeMo"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="24" font-style="normal" font-weight="800" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-65.48" y="8.12" >KAVLING 2</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 375.83 645.26)" style="" id="Y0F_zBLOX709gyn1d0kzk"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="24" font-style="normal" font-weight="800" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-65.48" y="8.12" >KAVLING 3</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 375.83 725.11)" style="" id="vcSyNTSlMKMdB8vv3Yu5O"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="24" font-style="normal" font-weight="800" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-65.48" y="8.12" >KAVLING 4</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 375.83 804.96)" style="" id="K4uBGurfSPb-wbWrnbuCW"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="24" font-style="normal" font-weight="800" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-65.48" y="8.12" >KAVLING 5</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 375.83 884.81)" style="" id="YkYvWxTQDlmkeRsUzCy6A"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="24" font-style="normal" font-weight="800" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-65.48" y="8.12" >KAVLING 6</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 375.83 964.66)" style="" id="lPkGB_VerRtzlDYbYZa7k"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="24" font-style="normal" font-weight="800" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-65.48" y="8.12" >KAVLING 7</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 375.83 1044.51)" style="" id="wmbqo-BQ-SlY06uE-ayxe"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="24" font-style="normal" font-weight="800" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-65.48" y="8.12" >KAVLING 8</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 375.83 1124.36)" style="" id="a8bgDwiwQEKLwywj2OZRv"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="24" font-style="normal" font-weight="800" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-65.48" y="8.12" >KAVLING 9</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 375.83 1204.21)" style="" id="dprPmtA-K194wN7RjjBXh"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="24" font-style="normal" font-weight="800" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-72.52" y="8.12" >KAVLING 10</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 375.83 1280.25)" style="" id="YacMfUFKVp2SIFNkKUsnz"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="24" font-style="normal" font-weight="800" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-72.52" y="8.12" >KAVLING 11</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 375.83 1363.91)" style="" id="vVTbsHU6X_sKo1Ixi6F1M"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="24" font-style="normal" font-weight="800" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-72.52" y="8.12" >KAVLING 12</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 375.83 1443.76)" style="" id="k_gsdPCPY0v24QCKjk_hX"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="24" font-style="normal" font-weight="800" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-72.52" y="8.12" >KAVLING 13</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 375.83 1523.61)" style="" id="Q-zFygKB5M3OARVliRtjk"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="24" font-style="normal" font-weight="800" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-72.52" y="8.12" >KAVLING 14</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 375.83 1603.46)" style="" id="OFHC6zM30_3h1bNk5Ux7S"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="24" font-style="normal" font-weight="800" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-72.52" y="8.12" >KAVLING 15</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 375.83 1683.31)" style="" id="7o58Lw5TnyTt6djfc4DT2"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="24" font-style="normal" font-weight="800" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-72.52" y="8.12" >KAVLING 16</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 375.83 1763.16)" style="" id="oB6FPu31rL8v0oMBkGX9H"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="24" font-style="normal" font-weight="800" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-72.52" y="8.12" >KAVLING 17</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 375.83 1843.01)" style="" id="N3polu6NrvpwYGRUiDt6Q"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="24" font-style="normal" font-weight="800" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-72.52" y="8.12" >KAVLING 18</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 375.83 1922.86)" style="" id="y83eUcA671eOQKY-IhO-j"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="24" font-style="normal" font-weight="800" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-72.52" y="8.12" >KAVLING 19</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 375.83 2002.71)" style="" id="IChNPb-WGk2hRAn7nd8pC"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="24" font-style="normal" font-weight="800" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-72.52" y="8.12" >KAVLING 20</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 375.83 2082.64)" style="" id="cy4QERHfwvDO--585F8Bf"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="24" font-style="normal" font-weight="800" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-72.52" y="8.12" >KAVLING 21</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 375.83 2162.49)" style="" id="OnFElQG0qkYpDl_YkyHtI"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="24" font-style="normal" font-weight="800" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-72.52" y="8.12" >KAVLING 22</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 375.83 2242.34)" style="" id="aP_dcb_9fcqoTeBNS9PfM"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="24" font-style="normal" font-weight="800" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-72.52" y="8.12" >KAVLING 23</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 375.83 2322.19)" style="" id="xtXpHdT9bYpoKD9EvcQO-"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="24" font-style="normal" font-weight="800" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-72.52" y="8.12" >KAVLING 24</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 375.83 2402.04)" style="" id="muhDcx-av-LY1HfAL10PJ"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="24" font-style="normal" font-weight="800" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-72.52" y="8.12" >KAVLING 25</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 375.83 2481.89)" style="" id="nCrljau7QVrYyn5w9yvQW"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="24" font-style="normal" font-weight="800" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-72.52" y="8.12" >KAVLING 26</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 375.83 2561.74)" style="" id="G_6BUGjU2sUdrjPHaorxE"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="24" font-style="normal" font-weight="800" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-72.52" y="8.12" >KAVLING 27</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 375.83 2641.59)" style="" id="__lMhvjwl1tRPf_3mdo1j"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="24" font-style="normal" font-weight="800" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-72.52" y="8.12" >KAVLING 28</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 375.83 2721.44)" style="" id="FzVMTtvbM66Xy03xNU9U_"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="24" font-style="normal" font-weight="800" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-72.52" y="8.12" >KAVLING 29</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 375.83 2801.29)" style="" id="-IpOl7LNpG1hnx63N7EgF"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="24" font-style="normal" font-weight="800" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-72.52" y="8.12" >KAVLING 30</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 375.83 2881.15)" style="" id="NtvetBAk4XkSLctuJX_nQ"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="24" font-style="normal" font-weight="800" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-72.52" y="8.12" >KAVLING 31</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 375.83 2961)" style="" id="mgNBPkgScmMHH-CCyvC0R"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="24" font-style="normal" font-weight="800" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-72.52" y="8.12" >KAVLING 32</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 374.45 3079.55)" style="" id="fe2Jn8_Yss5c2uQS0d-X8"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="50" font-style="normal" font-weight="800" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(247,47,58); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-92.93" y="16.92" >WAKAF</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 375.32 3200.55)" style="" id="pWKrktBTt1bNHyAHGyeED"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="24" font-style="normal" font-weight="800" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-72.52" y="8.12" >KAVLING 35</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 375.32 3280.4)" style="" id="DII3pjVOwlSMbwIXEV5aC"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="24" font-style="normal" font-weight="800" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-72.52" y="8.12" >KAVLING 36</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 374.45 3360.25)" style="" id="0H0obsAVwA4j180shcMBw"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="24" font-style="normal" font-weight="800" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-72.52" y="8.12" >KAVLING 37</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 374.45 3440.1)" style="" id="boEaqXdbpuStbmlqGP7me"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="24" font-style="normal" font-weight="800" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-72.52" y="8.12" >KAVLING 38</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 374.45 3519.95)" style="" id="wRf1bVCwTltIf8xf22qQH"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="24" font-style="normal" font-weight="800" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-72.52" y="8.12" >KAVLING 39</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 374.45 3599.8)" style="" id="QDj4GtaYzDivDFL4kTbQc"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="24" font-style="normal" font-weight="800" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-72.52" y="8.12" >KAVLING 40</tspan></text>
    </g>
</svg>
