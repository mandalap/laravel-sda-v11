<svg version="1.1" width="100%" viewBox="0 0 700 2100" xml:space="preserve">
    <g transform="matrix(1.64 0 0 0.15 350 98.56)" id="zS6MUKhoU7LRooWfp0x2v"  >
    <path style="stroke: rgb(130,39,195); stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(76,77,77); fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -212.99145 -212.99145 L 212.99146000000002 -212.99145 L 212.99146000000002 212.99146000000002 L -212.99145 212.99146000000002 z" stroke-linecap="round" />
    </g>
    <g transform="matrix(0 4.58 -0.15 0 357.44 1104.33)" id="2pxwMETvHnjXYuYZE1r3K"  >
    <path style="stroke: rgb(130,39,195); stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(76,77,77); fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -212.99145 -212.99145 L 212.99146000000002 -212.99145 L 212.99146000000002 212.99146000000002 L -212.99145 212.99146000000002 z" stroke-linecap="round" />
    </g>

    <g transform="matrix(1 0 0 0.8 439.89 330.01)" id="drLglUrGgXIVq0v7Kjoka"  >
        @forelse ( $siteplan->where('code_product', 'drLglUrGgXIVq0v7Kjoka') as $hasil)
            @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-50, -250)" d="M 0 0 L 100 0 L 100 500 L 0 500 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style="fill:#f50505; troke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-50, -250)" d="M 0 0 L 100 0 L 100 500 L 0 500 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-drLglUrGgXIVq0v7Kjoka">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-50, -250)" d="M 0 0 L 100 0 L 100 500 L 0 500 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="drLglUrGgXIVq0v7Kjoka">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-50, -250)" d="M 0 0 L 100 0 L 100 500 L 0 500 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>

    <g transform="matrix(1 0 0 0.8 541.19 330.01)" id="kGH41udSOIxZyuRRZCnzJ"  >
        @forelse ( $siteplan->where('code_product', 'kGH41udSOIxZyuRRZCnzJ') as $hasil)
            @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-50, -250)" d="M 0 0 L 100 0 L 100 500 L 0 500 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style="fill:#f50505;stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-50, -250)" d="M 0 0 L 100 0 L 100 500 L 0 500 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-kGH41udSOIxZyuRRZCnzJ">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-50, -250)" d="M 0 0 L 100 0 L 100 500 L 0 500 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="kGH41udSOIxZyuRRZCnzJ">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-50, -250)" d="M 0 0 L 100 0 L 100 500 L 0 500 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>

    <g transform="matrix(1 0 0 0.8 174.69 330.82)" id="30ceJ77OAuugUIXu6YORZ"  >
        @forelse ( $siteplan->where('code_product', '30ceJ77OAuugUIXu6YORZ') as $hasil)
            @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-50, -250)" d="M 0 0 L 100 0 L 100 500 L 0 500 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style=" fill:#f50505; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-50, -250)" d="M 0 0 L 100 0 L 100 500 L 0 500 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-30ceJ77OAuugUIXu6YORZ">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-50, -250)" d="M 0 0 L 100 0 L 100 500 L 0 500 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="30ceJ77OAuugUIXu6YORZ">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-50, -250)" d="M 0 0 L 100 0 L 100 500 L 0 500 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>

    <g transform="matrix(1 0 0 0.8 274.99 330.82)" id="QlW5411jaIjlbCXgCMg0"  >
        @forelse ( $siteplan->where('code_product', 'QlW5411jaIjlbCXgCMg0') as $hasil)
            @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-50, -250)" d="M 0 0 L 100 0 L 100 500 L 0 500 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style="fill:#f50505; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-50, -250)" d="M 0 0 L 100 0 L 100 500 L 0 500 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-QlW5411jaIjlbCXgCMg0">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-50, -250)" d="M 0 0 L 100 0 L 100 500 L 0 500 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="QlW5411jaIjlbCXgCMg0">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-50, -250)" d="M 0 0 L 100 0 L 100 500 L 0 500 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>

    <g transform="matrix(1 0 0 1 224.49 630.82)" id="kh1RY4Mq_K5cPUlOwFcbo"  >
        @forelse ( $siteplan->where('code_product', 'kh1RY4Mq_K5cPUlOwFcbo') as $hasil)
            @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style="fill:#ffc107;stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -100)" d="M 0 0 L 200 0 L 200 200 L 0 200 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style="fill:#f50505;stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -100)" d="M 0 0 L 200 0 L 200 200 L 0 200 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-kh1RY4Mq_K5cPUlOwFcbo">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -100)" d="M 0 0 L 200 0 L 200 200 L 0 200 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="kh1RY4Mq_K5cPUlOwFcbo">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -100)" d="M 0 0 L 200 0 L 200 200 L 0 200 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>

    <g transform="matrix(1 0 0 1 224.49 780.82)" id="5IfrC1y1CzG_nauXZpEaE"  >
        @forelse ( $siteplan->where('code_product', '5IfrC1y1CzG_nauXZpEaE') as $hasil)
            @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -50)" d="M 0 0 L 200 0 L 200 100 L 0 100 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style=" fill:#f50505; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -50)" d="M 0 0 L 200 0 L 200 100 L 0 100 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-5IfrC1y1CzG_nauXZpEaE">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -50)" d="M 0 0 L 200 0 L 200 100 L 0 100 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="5IfrC1y1CzG_nauXZpEaE">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -50)" d="M 0 0 L 200 0 L 200 100 L 0 100 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>

    <g transform="matrix(1 0 0 1 224.49 880.82)" id="eUImWacQcw1z8vovH5hj"  >
        @forelse ( $siteplan->where('code_product', 'eUImWacQcw1z8vovH5hj') as $hasil)
            @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -50)" d="M 0 0 L 200 0 L 200 100 L 0 100 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style="fill:#f50505; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -50)" d="M 0 0 L 200 0 L 200 100 L 0 100 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-eUImWacQcw1z8vovH5hj">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -50)" d="M 0 0 L 200 0 L 200 100 L 0 100 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="eUImWacQcw1z8vovH5hj">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -50)" d="M 0 0 L 200 0 L 200 100 L 0 100 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>

    <g transform="matrix(1 0 0 1 224.49 981.18)" id="1VjwS2w56lijvC3QbNwI0"  >
        @forelse ( $siteplan->where('code_product', '1VjwS2w56lijvC3QbNwI0') as $hasil)
            @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -50)" d="M 0 0 L 200 0 L 200 100 L 0 100 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style="fill:#f50505; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -50)" d="M 0 0 L 200 0 L 200 100 L 0 100 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-1VjwS2w56lijvC3QbNwI0">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -50)" d="M 0 0 L 200 0 L 200 100 L 0 100 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="1VjwS2w56lijvC3QbNwI0">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -50)" d="M 0 0 L 200 0 L 200 100 L 0 100 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>

    <g transform="matrix(1 0 0 1 224.49 1081.18)" id="CWfYWE6o63hCWlg4XfesT"  >
        @forelse ( $siteplan->where('code_product', 'CWfYWE6o63hCWlg4XfesT') as $hasil)
            @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -50)" d="M 0 0 L 200 0 L 200 100 L 0 100 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style="fill:#f50505; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -50)" d="M 0 0 L 200 0 L 200 100 L 0 100 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-CWfYWE6o63hCWlg4XfesT">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -50)" d="M 0 0 L 200 0 L 200 100 L 0 100 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="CWfYWE6o63hCWlg4XfesT">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -50)" d="M 0 0 L 200 0 L 200 100 L 0 100 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>

    <g transform="matrix(1 0 0 1 224.49 1181.18)" id="yh7BDNxFV8WytAP0MCCnQ"  >
        @forelse ( $siteplan->where('code_product', 'yh7BDNxFV8WytAP0MCCnQ') as $hasil)
            @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -50)" d="M 0 0 L 200 0 L 200 100 L 0 100 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style="fill:#f50505; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -50)" d="M 0 0 L 200 0 L 200 100 L 0 100 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-yh7BDNxFV8WytAP0MCCnQ">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -50)" d="M 0 0 L 200 0 L 200 100 L 0 100 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="yh7BDNxFV8WytAP0MCCnQ">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -50)" d="M 0 0 L 200 0 L 200 100 L 0 100 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>

    <g transform="matrix(1 0 0 1 224.49 1281.18)" id="rXVcArkvRINiFa3BuMA"  >
        @forelse ( $siteplan->where('code_product', 'rXVcArkvRINiFa3BuMA') as $hasil)
            @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -50)" d="M 0 0 L 200 0 L 200 100 L 0 100 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style="fill:#f50505; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -50)" d="M 0 0 L 200 0 L 200 100 L 0 100 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-rXVcArkvRINiFa3BuMA">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -50)" d="M 0 0 L 200 0 L 200 100 L 0 100 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="rXVcArkvRINiFa3BuMA">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -50)" d="M 0 0 L 200 0 L 200 100 L 0 100 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>

    <g transform="matrix(1 0 0 1 224.49 1381.54)" id="hVOZoYG24UExKycBiOe3"  >
        @forelse ( $siteplan->where('code_product', 'hVOZoYG24UExKycBiOe3') as $hasil)
            @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style=" fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -50)" d="M 0 0 L 200 0 L 200 100 L 0 100 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style="fill:#f50505; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -50)" d="M 0 0 L 200 0 L 200 100 L 0 100 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-hVOZoYG24UExKycBiOe3">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -50)" d="M 0 0 L 200 0 L 200 100 L 0 100 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="hVOZoYG24UExKycBiOe3">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -50)" d="M 0 0 L 200 0 L 200 100 L 0 100 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>

    <g transform="matrix(1 0 0 1 224.49 1481.54)" id="2oCGPjOOaR2lE6_7G9nq7"  >
        @forelse ( $siteplan->where('code_product', '2oCGPjOOaR2lE6_7G9nq7') as $hasil)
            @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style="fill:#ffc107;  stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -50)" d="M 0 0 L 200 0 L 200 100 L 0 100 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style="fill:#f50505; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -50)" d="M 0 0 L 200 0 L 200 100 L 0 100 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-2oCGPjOOaR2lE6_7G9nq7">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -50)" d="M 0 0 L 200 0 L 200 100 L 0 100 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="2oCGPjOOaR2lE6_7G9nq7">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -50)" d="M 0 0 L 200 0 L 200 100 L 0 100 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>

    <g transform="matrix(1 0 0 1 224.49 1581.54)" id="bZqAcyfo1bqa6JWh84wmT"  >
        @forelse ( $siteplan->where('code_product', 'bZqAcyfo1bqa6JWh84wmT') as $hasil)
            @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style=" fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -50)" d="M 0 0 L 200 0 L 200 100 L 0 100 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style="fill:#f50505; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -50)" d="M 0 0 L 200 0 L 200 100 L 0 100 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-bZqAcyfo1bqa6JWh84wmT">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -50)" d="M 0 0 L 200 0 L 200 100 L 0 100 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="bZqAcyfo1bqa6JWh84wmT">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -50)" d="M 0 0 L 200 0 L 200 100 L 0 100 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>

    <g transform="matrix(1 0 0 1 224.49 1681.54)" id="Po0fDT3ebTb6F5RljqRIE"  >
        @forelse ( $siteplan->where('code_product', 'Po0fDT3ebTb6F5RljqRIE') as $hasil)
            @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -50)" d="M 0 0 L 200 0 L 200 100 L 0 100 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style="fill:#f50505; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -50)" d="M 0 0 L 200 0 L 200 100 L 0 100 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-Po0fDT3ebTb6F5RljqRIE">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -50)" d="M 0 0 L 200 0 L 200 100 L 0 100 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="Po0fDT3ebTb6F5RljqRIE">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -50)" d="M 0 0 L 200 0 L 200 100 L 0 100 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>

    <g transform="matrix(1 0 0 1 224.49 1781.9)" id="WIScrbz0pVc9TQNLehS06"  >
        @forelse ( $siteplan->where('code_product', 'WIScrbz0pVc9TQNLehS06') as $hasil)
            @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -50)" d="M 0 0 L 200 0 L 200 100 L 0 100 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style="fill:#f50505; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -50)" d="M 0 0 L 200 0 L 200 100 L 0 100 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-WIScrbz0pVc9TQNLehS06">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -50)" d="M 0 0 L 200 0 L 200 100 L 0 100 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="WIScrbz0pVc9TQNLehS06">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -50)" d="M 0 0 L 200 0 L 200 100 L 0 100 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>

    <g transform="matrix(1 0 0 1 224.49 1881.9)" id="2r8_aqfdpDG9ORzrcJ6u"  >
        @forelse ( $siteplan->where('code_product', '2r8_aqfdpDG9ORzrcJ6u') as $hasil)
            @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -50)" d="M 0 0 L 200 0 L 200 100 L 0 100 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style="fill:#f50505; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -50)" d="M 0 0 L 200 0 L 200 100 L 0 100 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-2r8_aqfdpDG9ORzrcJ6u">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -50)" d="M 0 0 L 200 0 L 200 100 L 0 100 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="2r8_aqfdpDG9ORzrcJ6u">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -50)" d="M 0 0 L 200 0 L 200 100 L 0 100 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>

    <g transform="matrix(1 0 0 1 224.49 2005.89)" id="qDYZ62wttqyeW9G5vxzn2"  >
        @forelse ( $siteplan->where('code_product', 'qDYZ62wttqyeW9G5vxzn2') as $hasil)
            @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style="fill:#ffc107;  stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -75)" d="M 0 0 L 200 0 L 200 150 L 0 150 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style=" fill:#f50505; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -75)" d="M 0 0 L 200 0 L 200 150 L 0 150 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-qDYZ62wttqyeW9G5vxzn2">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -75)" d="M 0 0 L 200 0 L 200 150 L 0 150 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="qDYZ62wttqyeW9G5vxzn2">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -75)" d="M 0 0 L 200 0 L 200 150 L 0 150 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>

    <g transform="matrix(0 -1 1 0 174.69 331.82)" style="" id="MKF2scs0PyexLjCLlrp7L"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="25" font-style="normal" font-weight="800" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-47.04" y="9.14" >RUKO 1</tspan></text>
    </g>
    <g transform="matrix(0 -1 1 0 274.99 331.82)" style="" id="Odec2SzY1vsCijEElt4xE"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="25" font-style="normal" font-weight="800" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-47.04" y="9.14" >RUKO 2</tspan></text>
    </g>
    <g transform="matrix(0 -1 1 0 440.89 330.01)" style="" id="KL2bBZef3CFOGjycX-Nei"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="25" font-style="normal" font-weight="800" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-47.04" y="9.14" >RUKO 3</tspan></text>
    </g>
    <g transform="matrix(0 -1 1 0 541.19 330.01)" style="" id="HQXjEoh1sy2zASn4OpwYz"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="25" font-style="normal" font-weight="800" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-47.04" y="9.14" >RUKO 4</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 224.49 630.82)" style="" id="PbS4jKSowluZsqQ7nz2WQ"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="25" font-style="normal" font-weight="800" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-55.65" y="7.28" >BLOK AA</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 224.49 780.82)" style="" id="vBCuwZ0GvcmsVtX7WuBlK"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="25" font-style="normal" font-weight="800" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-53.89" y="7.28" >BLOK A1</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 226.19 880.82)" style="" id="E7Wx63f6WF7DDmWa7XI9b"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="25" font-style="normal" font-weight="800" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-53.89" y="7.28" >BLOK A2</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 224.49 981.18)" style="" id="8JDmETiFy7bnTxjViET22"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="25" font-style="normal" font-weight="800" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-53.89" y="7.28" >BLOK A3</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 224.49 1081.18)" style="" id="MAhU9bqnzVsbJNmJT8rtw"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="25" font-style="normal" font-weight="800" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-53.89" y="7.28" >BLOK A4</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 224.49 1381.54)" style="" id="N448uyh18CSMo_pcgY9k-"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="25" font-style="normal" font-weight="800" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-53.89" y="7.28" >BLOK A7</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 224.49 1281.18)" style="" id="vCNvGlwRu-r_N_xf-FCwf"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="25" font-style="normal" font-weight="800" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-53.89" y="7.28" >BLOK A6</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 224.49 1181.18)" style="" id="ar7eKkH2aukDnjacCEXsR"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="25" font-style="normal" font-weight="800" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-53.89" y="7.28" >BLOK A5</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 224.49 1481.54)" style="" id="_tjmife_YzRTKxUMJyPVX"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="25" font-style="normal" font-weight="800" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-53.89" y="7.28" >BLOK A8</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 224.49 1581.54)" style="" id="AEr83XFHRlPaU0orDggUx"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="25" font-style="normal" font-weight="800" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-53.89" y="7.28" >BLOK A9</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 224.49 1681.54)" style="" id="8pqqYzTBbGwljQwLUCWSf"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="25" font-style="normal" font-weight="800" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-61.22" y="7.28" >BLOK A10</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 224.49 1781.9)" style="" id="FDO2ObWu6gh_BUVwYqMgg"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="25" font-style="normal" font-weight="800" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-61.22" y="7.28" >BLOK A11</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 224.49 1881.9)" style="" id="qdfubShqRhjciYEKWPCoF"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="25" font-style="normal" font-weight="800" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-61.22" y="7.28" >BLOK A12</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 224.49 2005.89)" style="" id="KtlwHl6puEG8YZwFBdxtd"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="25" font-style="normal" font-weight="800" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-61.22" y="7.28" >BLOK A13</tspan></text>
    </g>


    <g transform="matrix(1 0 0 1 490.19 629.14)" id="D5CsVbP8sjXBbe2ypdGgg"  >
        @forelse ( $siteplan->where('code_product', 'D5CsVbP8sjXBbe2ypdGgg') as $hasil)
            @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -100)" d="M 0 0 L 200 0 L 200 200 L 0 200 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style="fill:#f50505; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -100)" d="M 0 0 L 200 0 L 200 200 L 0 200 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-D5CsVbP8sjXBbe2ypdGgg">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -100)" d="M 0 0 L 200 0 L 200 200 L 0 200 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="D5CsVbP8sjXBbe2ypdGgg">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -100)" d="M 0 0 L 200 0 L 200 200 L 0 200 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>

    <g transform="matrix(1 0 0 1 490.19 779.14)" id="WsMaoR1cBqsEvy0eoal9"  >
        @forelse ( $siteplan->where('code_product', 'WsMaoR1cBqsEvy0eoal9') as $hasil)
            @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -50)" d="M 0 0 L 200 0 L 200 100 L 0 100 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style=" fill:#f50505;  stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -50)" d="M 0 0 L 200 0 L 200 100 L 0 100 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-WsMaoR1cBqsEvy0eoal9">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -50)" d="M 0 0 L 200 0 L 200 100 L 0 100 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="WsMaoR1cBqsEvy0eoal9">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -50)" d="M 0 0 L 200 0 L 200 100 L 0 100 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>

    <g transform="matrix(1 0 0 1 490.19 879.14)" id="ro0_2DnH8VR4_PPwCXdZp"  >
        @forelse ( $siteplan->where('code_product', 'ro0_2DnH8VR4_PPwCXdZp') as $hasil)
            @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -50)" d="M 0 0 L 200 0 L 200 100 L 0 100 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style=" fill:#f50505; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -50)" d="M 0 0 L 200 0 L 200 100 L 0 100 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-ro0_2DnH8VR4_PPwCXdZp">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -50)" d="M 0 0 L 200 0 L 200 100 L 0 100 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="ro0_2DnH8VR4_PPwCXdZp">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -50)" d="M 0 0 L 200 0 L 200 100 L 0 100 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>

    <g transform="matrix(1 0 0 1 490.19 979.5)" id="OpIYm_JWy9BwKvxcRVTIZ"  >
        @forelse ( $siteplan->where('code_product', 'OpIYm_JWy9BwKvxcRVTIZ') as $hasil)
            @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -50)" d="M 0 0 L 200 0 L 200 100 L 0 100 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style=" fill:#f50505; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -50)" d="M 0 0 L 200 0 L 200 100 L 0 100 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-OpIYm_JWy9BwKvxcRVTIZ">
                <path style="fill: #f8f8f8;  stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -50)" d="M 0 0 L 200 0 L 200 100 L 0 100 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="OpIYm_JWy9BwKvxcRVTIZ">
            <path style="fill: #f8f8f8;  stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -50)" d="M 0 0 L 200 0 L 200 100 L 0 100 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>

    <g transform="matrix(1 0 0 1 490.19 1079.5)" id="uX9gbuV1fyDYxgkoRZFgi"  >
        @forelse ( $siteplan->where('code_product', 'uX9gbuV1fyDYxgkoRZFgi') as $hasil)
            @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -50)" d="M 0 0 L 200 0 L 200 100 L 0 100 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style=" fill:#f50505; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -50)" d="M 0 0 L 200 0 L 200 100 L 0 100 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-uX9gbuV1fyDYxgkoRZFgi">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -50)" d="M 0 0 L 200 0 L 200 100 L 0 100 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="uX9gbuV1fyDYxgkoRZFgi">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -50)" d="M 0 0 L 200 0 L 200 100 L 0 100 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>

    <g transform="matrix(1 0 0 1 490.19 1179.5)" id="Me4oVuRoV83dsRpjAwuK"  >
        @forelse ( $siteplan->where('code_product', 'Me4oVuRoV83dsRpjAwuK') as $hasil)
            @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -50)" d="M 0 0 L 200 0 L 200 100 L 0 100 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style="fill:#f50505; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -50)" d="M 0 0 L 200 0 L 200 100 L 0 100 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-Me4oVuRoV83dsRpjAwuK">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -50)" d="M 0 0 L 200 0 L 200 100 L 0 100 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="Me4oVuRoV83dsRpjAwuK">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -50)" d="M 0 0 L 200 0 L 200 100 L 0 100 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>

    <g transform="matrix(1 0 0 1 490.19 1279.5)" id="0AHJRESnWSPsZUN79TpHU"  >
        @forelse ( $siteplan->where('code_product', '0AHJRESnWSPsZUN79TpHU') as $hasil)
            @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -50)" d="M 0 0 L 200 0 L 200 100 L 0 100 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style=" fill:#f50505; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -50)" d="M 0 0 L 200 0 L 200 100 L 0 100 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-0AHJRESnWSPsZUN79TpHU">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -50)" d="M 0 0 L 200 0 L 200 100 L 0 100 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="0AHJRESnWSPsZUN79TpHU">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -50)" d="M 0 0 L 200 0 L 200 100 L 0 100 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>

    <g transform="matrix(1 0 0 1 490.19 1379.86)" id="pUzefzltSbFKhsZSdKWa"  >
        @forelse ( $siteplan->where('code_product', 'pUzefzltSbFKhsZSdKWa') as $hasil)
            @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style=" fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -50)" d="M 0 0 L 200 0 L 200 100 L 0 100 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style=" fill:#f50505; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -50)" d="M 0 0 L 200 0 L 200 100 L 0 100 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-pUzefzltSbFKhsZSdKWa">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -50)" d="M 0 0 L 200 0 L 200 100 L 0 100 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="pUzefzltSbFKhsZSdKWa">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -50)" d="M 0 0 L 200 0 L 200 100 L 0 100 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>

    <g transform="matrix(1 0 0 1 490.19 1479.86)" id="PCkh7bf4aS7eUtYaJI2tk"  >
        @forelse ( $siteplan->where('code_product', 'PCkh7bf4aS7eUtYaJI2tk') as $hasil)
            @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -50)" d="M 0 0 L 200 0 L 200 100 L 0 100 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style="fill:#f50505; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -50)" d="M 0 0 L 200 0 L 200 100 L 0 100 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-PCkh7bf4aS7eUtYaJI2tk">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -50)" d="M 0 0 L 200 0 L 200 100 L 0 100 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="PCkh7bf4aS7eUtYaJI2tk">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -50)" d="M 0 0 L 200 0 L 200 100 L 0 100 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>

    <g transform="matrix(1 0 0 1 490.19 1579.86)" id="VhVaMqDC74bqroQ5Dbgnh"  >
        @forelse ( $siteplan->where('code_product', 'VhVaMqDC74bqroQ5Dbgnh') as $hasil)
            @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -50)" d="M 0 0 L 200 0 L 200 100 L 0 100 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style=" fill:#f50505; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -50)" d="M 0 0 L 200 0 L 200 100 L 0 100 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-VhVaMqDC74bqroQ5Dbgnh">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -50)" d="M 0 0 L 200 0 L 200 100 L 0 100 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="VhVaMqDC74bqroQ5Dbgnh">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -50)" d="M 0 0 L 200 0 L 200 100 L 0 100 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>

    <g transform="matrix(1 0 0 1 490.19 1679.86)" id="tQk8XkOqExmhLAr2dxATV"  >
        @forelse ( $siteplan->where('code_product', 'tQk8XkOqExmhLAr2dxATV') as $hasil)
            @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -50)" d="M 0 0 L 200 0 L 200 100 L 0 100 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style="fill:#f50505; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -50)" d="M 0 0 L 200 0 L 200 100 L 0 100 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-tQk8XkOqExmhLAr2dxATV">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -50)" d="M 0 0 L 200 0 L 200 100 L 0 100 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="tQk8XkOqExmhLAr2dxATV">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -50)" d="M 0 0 L 200 0 L 200 100 L 0 100 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>

    <g transform="matrix(1 0 0 1 490.19 1780.22)" id="aM6t8Xg1vIBdxxJ39EZO2"  >
        @forelse ( $siteplan->where('code_product', 'aM6t8Xg1vIBdxxJ39EZO2') as $hasil)
            @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -50)" d="M 0 0 L 200 0 L 200 100 L 0 100 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style=" fill:#f50505; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -50)" d="M 0 0 L 200 0 L 200 100 L 0 100 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-aM6t8Xg1vIBdxxJ39EZO2">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -50)" d="M 0 0 L 200 0 L 200 100 L 0 100 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="aM6t8Xg1vIBdxxJ39EZO2">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -50)" d="M 0 0 L 200 0 L 200 100 L 0 100 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>

    <g transform="matrix(1 0 0 1 490.19 1880.22)" id="cmx2_NGx26R0eEbA9GSbO"  >
        @forelse ( $siteplan->where('code_product', 'cmx2_NGx26R0eEbA9GSbO') as $hasil)
            @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -50)" d="M 0 0 L 200 0 L 200 100 L 0 100 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style="fill:#f50505; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -50)" d="M 0 0 L 200 0 L 200 100 L 0 100 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-cmx2_NGx26R0eEbA9GSbO">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -50)" d="M 0 0 L 200 0 L 200 100 L 0 100 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="cmx2_NGx26R0eEbA9GSbO">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -50)" d="M 0 0 L 200 0 L 200 100 L 0 100 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>

    <g transform="matrix(1 0 0 1 490.19 2004.22)" id="mq6UpbTtiQDuQ76LCOqSm"  >
        @forelse ( $siteplan->where('code_product', 'mq6UpbTtiQDuQ76LCOqSm') as $hasil)
            @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -75)" d="M 0 0 L 200 0 L 200 150 L 0 150 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style=" fill:#f50505; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -75)" d="M 0 0 L 200 0 L 200 150 L 0 150 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-mq6UpbTtiQDuQ76LCOqSm">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -75)" d="M 0 0 L 200 0 L 200 150 L 0 150 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="mq6UpbTtiQDuQ76LCOqSm">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -75)" d="M 0 0 L 200 0 L 200 150 L 0 150 z" stroke-linecap="round" />
        </a>
        @endforelse
    </g>
    <g transform="matrix(1 0 0 1 490.19 629.14)" style="" id="H8vahw9NKoMN73x387M_o"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="25" font-style="normal" font-weight="800" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-54.34" y="7.28" >BLOK BB</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 490.19 779.14)" style="" id="8dYr29axehZ9BWuDkxiqS"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="25" font-style="normal" font-weight="800" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-53.24" y="7.28" >BLOK B1</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 491.89 879.14)" style="" id="g9iE2BqZVFy39nGwOxuoO"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="25" font-style="normal" font-weight="800" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-53.24" y="7.28" >BLOK B2</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 490.19 979.5)" style="" id="5BKKrBC_WlamEwPU-uaRj"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="25" font-style="normal" font-weight="800" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-53.24" y="7.28" >BLOK B3</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 490.19 1079.5)" style="" id="bNy4-hB2WxdrMdbah99NT"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="25" font-style="normal" font-weight="800" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-53.24" y="7.28" >BLOK B4</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 490.19 1379.86)" style="" id="lb0sK5UfBdDNC8UOXj9gd"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="25" font-style="normal" font-weight="800" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-53.24" y="7.28" >BLOK B7</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 490.19 1279.5)" style="" id="SppJ14if0IPRgDRm4sinI"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="25" font-style="normal" font-weight="800" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-53.24" y="7.28" >BLOK B6</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 490.19 1179.5)" style="" id="zufOc6XMYcc5sIusfMFQv"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="25" font-style="normal" font-weight="800" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-53.24" y="7.28" >BLOK B5</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 490.19 1479.86)" style="" id="4CbrWrkfRjBO6wDTkHdkq"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="25" font-style="normal" font-weight="800" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-53.24" y="7.28" >BLOK B8</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 490.19 1579.86)" style="" id="dzNRFerlT7gtjHsLEq5Lj"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="25" font-style="normal" font-weight="800" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-53.24" y="7.28" >BLOK B9</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 490.19 1679.86)" style="" id="mAUQHrDUyrI4KDuGVmDi3"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="25" font-style="normal" font-weight="800" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-60.57" y="7.28" >BLOK B10</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 490.19 1780.22)" style="" id="1mRTywsBRJYBtWb6NwI9N"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="25" font-style="normal" font-weight="800" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-60.57" y="7.28" >BLOK B11</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 490.19 1880.22)" style="" id="mtU_iB62XIzE1glQrjx3l"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="25" font-style="normal" font-weight="800" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-60.57" y="7.28" >BLOK B12</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 490.19 2004.22)" style="" id="M-w_W7Qj7TLgyYRB8hLT9"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="25" font-style="normal" font-weight="800" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-60.57" y="7.28" >BLOK B13</tspan></text>
    </g>
</svg>
