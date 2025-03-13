<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="100%"  viewBox="0 0 500 4000" xml:space="preserve">

    @forelse ( $siteplan->where('code_product', 'q7Xw4Fc6XpYiNEgVe3oWS') as $hasil)
    <g transform="matrix(1 0 0 1 235.45 1943.7)" id="q7Xw4Fc6XpYiNEgVe3oWS"  >
        @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
        <path style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 4; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-120, -40)" d="M 0 0 L 240 0 L 240 80 L 0 80 z" stroke-linecap="round" />
        @elseif ($hasil->status == 'Terjual')
            <path style="fill:#f50505; stroke: rgb(0,0,0); stroke-width: 4; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-120, -40)" d="M 0 0 L 240 0 L 240 80 L 0 80 z" stroke-linecap="round" />
        @elseif ($hasil->status == 'Tersedia')
        <a href="#" data-toggle="modal" data-target="#modalBooking-q7Xw4Fc6XpYiNEgVe3oWS">
            <path style="fill: #f8f8f8;  stroke: rgb(0,0,0); stroke-width: 4; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-120, -40)" d="M 0 0 L 240 0 L 240 80 L 0 80 z" stroke-linecap="round" />
        </a>
        @endif
    </g>
    @empty
    <g transform="matrix(1 0 0 1 235.45 1943.7)" id="q7Xw4Fc6XpYiNEgVe3oWS"  >
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="q7Xw4Fc6XpYiNEgVe3oWS">
            <path style="fill: #f8f8f8;  stroke: rgb(0,0,0); stroke-width: 4; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-120, -40)" d="M 0 0 L 240 0 L 240 80 L 0 80 z" stroke-linecap="round" />
        </a>
    </g>
    @endforelse

    @forelse ( $siteplan->where('code_product', 'vPqfOCE7pOPUzydjA8T3A') as $hasil)
    <g transform="matrix(1 0 0 1 235.45 2023.7)" id="vPqfOCE7pOPUzydjA8T3A"  >
        @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
            <path style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 4; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-120, -40)" d="M 0 0 L 240 0 L 240 80 L 0 80 z" stroke-linecap="round" />
        @elseif ($hasil->status == 'Terjual')
            <path style="fill:#f50505; stroke: rgb(0,0,0); stroke-width: 4; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-120, -40)" d="M 0 0 L 240 0 L 240 80 L 0 80 z" stroke-linecap="round" />
        @elseif ($hasil->status == 'Tersedia')
        <a href="#" data-toggle="modal" data-target="#modalBooking-vPqfOCE7pOPUzydjA8T3A">
            <path style="fill: #f8f8f8;  stroke: rgb(0,0,0); stroke-width: 4; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-120, -40)" d="M 0 0 L 240 0 L 240 80 L 0 80 z" stroke-linecap="round" />
        </a>
        @endif
    </g>
    @empty
    <g transform="matrix(1 0 0 1 235.45 2023.7)" id="vPqfOCE7pOPUzydjA8T3A"  >
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="vPqfOCE7pOPUzydjA8T3A">
            <path style="fill: #f8f8f8;  stroke: rgb(0,0,0); stroke-width: 4; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-120, -40)" d="M 0 0 L 240 0 L 240 80 L 0 80 z" stroke-linecap="round" />
        </a>
    </g>
    @endforelse

    @forelse ( $siteplan->where('code_product', 'Aoz6L4CkCTV67QamF4DCs') as $hasil)
    <g transform="matrix(1 0 0 1 235.45 2104.36)" id="Aoz6L4CkCTV67QamF4DCs"  >
        @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
            <path style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 4; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -120 -40 L 120 -40 L 120 40 L -120 40 z" stroke-linecap="round" />
        @elseif ($hasil->status == 'Terjual')
            <path style="fill:#f50505; stroke: rgb(0,0,0); stroke-width: 4; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -120 -40 L 120 -40 L 120 40 L -120 40 z" stroke-linecap="round" />
        @elseif ($hasil->status == 'Tersedia')
        <a href="#" data-toggle="modal" data-target="#modalBooking-Aoz6L4CkCTV67QamF4DCs">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 4; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -120 -40 L 120 -40 L 120 40 L -120 40 z" stroke-linecap="round" />
        </a>
        @endif
    </g>
    @empty
    <g transform="matrix(1 0 0 1 235.45 2104.36)" id="Aoz6L4CkCTV67QamF4DCs"  >
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="Aoz6L4CkCTV67QamF4DCs">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 4; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -120 -40 L 120 -40 L 120 40 L -120 40 z" stroke-linecap="round" />
        </a>
    </g>
    @endforelse

    @forelse ( $siteplan->where('code_product', 'MPEtOvOfQ1p2MHVxGEKA') as $hasil)
    <g transform="matrix(1 0 0 1 235.45 2184.36)" id="MPEtOvOfQ1p2MHVxGEKA"  >
        @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
            <path style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 4; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -120 -40 L 120 -40 L 120 40 L -120 40 z" stroke-linecap="round" />
        @elseif ($hasil->status == 'Terjual')
            <path style="fill:#f50505; stroke: rgb(0,0,0); stroke-width: 4; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -120 -40 L 120 -40 L 120 40 L -120 40 z" stroke-linecap="round" />
        @elseif ($hasil->status == 'Tersedia')
        <a href="#" data-toggle="modal" data-target="#modalBooking-MPEtOvOfQ1p2MHVxGEKA">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 4; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -120 -40 L 120 -40 L 120 40 L -120 40 z" stroke-linecap="round" />
        </a>
        @endif
    </g>
    @empty
    <g transform="matrix(1 0 0 1 235.45 2184.36)" id="MPEtOvOfQ1p2MHVxGEKA"  >
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="MPEtOvOfQ1p2MHVxGEKA">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 4; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -120 -40 L 120 -40 L 120 40 L -120 40 z" stroke-linecap="round" />
        </a>
    </g>
    @endforelse

    @forelse ( $siteplan->where('code_product', 'abtM7SwPHu4hQVqv2yjqH') as $hasil)
    <g transform="matrix(1 0 0 1 235.7 2265.36)" id="abtM7SwPHu4hQVqv2yjqH"  >
        @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
            <path style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 4; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-120, -40)" d="M 0 0 L 240 0 L 240 80 L 0 80 z" stroke-linecap="round" />
        @elseif ($hasil->status == 'Terjual')
            <path style="fill:#f50505; stroke: rgb(0,0,0); stroke-width: 4; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-120, -40)" d="M 0 0 L 240 0 L 240 80 L 0 80 z" stroke-linecap="round" />
        @elseif ($hasil->status == 'Tersedia')
        <a href="#" data-toggle="modal" data-target="#modalBooking-abtM7SwPHu4hQVqv2yjqH">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 4; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-120, -40)" d="M 0 0 L 240 0 L 240 80 L 0 80 z" stroke-linecap="round" />
        </a>
        @endif
    </g>
    @empty
    <g transform="matrix(1 0 0 1 235.7 2265.36)" id="abtM7SwPHu4hQVqv2yjqH"  >
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="abtM7SwPHu4hQVqv2yjqH">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 4; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-120, -40)" d="M 0 0 L 240 0 L 240 80 L 0 80 z" stroke-linecap="round" />
        </a>
    </g>
    @endforelse

    @forelse ( $siteplan->where('code_product', 'b9xLWwSUGKfhyBNig3ES') as $hasil)
    <g transform="matrix(1 0 0 1 235.7 2346.02)" id="b9xLWwSUGKfhyBNig3ES"  >
        @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
            <path style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 4; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-120, -40)" d="M 0 0 L 240 0 L 240 80 L 0 80 z" stroke-linecap="round" />
        @elseif ($hasil->status == 'Terjual')
            <path style="fill:#f50505; stroke: rgb(0,0,0); stroke-width: 4; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-120, -40)" d="M 0 0 L 240 0 L 240 80 L 0 80 z" stroke-linecap="round" />
        @elseif ($hasil->status == 'Tersedia')
        <a href="#" data-toggle="modal" data-target="#modalBooking-b9xLWwSUGKfhyBNig3ES">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 4; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-120, -40)" d="M 0 0 L 240 0 L 240 80 L 0 80 z" stroke-linecap="round" />
        </a>
        @endif
    </g>
    @empty
    <g transform="matrix(1 0 0 1 235.7 2346.02)" id="b9xLWwSUGKfhyBNig3ES"  >
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="b9xLWwSUGKfhyBNig3ES">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 4; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-120, -40)" d="M 0 0 L 240 0 L 240 80 L 0 80 z" stroke-linecap="round" />
        </a>
    </g>
    @endforelse

    @forelse ( $siteplan->where('code_product', 'mIaBjWY9EplpobFo0x3G') as $hasil)
    <g transform="matrix(1 0 0 1 235.7 2426.02)" id="mIaBjWY9EplpobFo0x3G"  >
        @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
            <path style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 4; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-120, -40)" d="M 0 0 L 240 0 L 240 80 L 0 80 z" stroke-linecap="round" />
        @elseif ($hasil->status == 'Terjual')
            <path style="fill:#f50505; stroke: rgb(0,0,0); stroke-width: 4; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-120, -40)" d="M 0 0 L 240 0 L 240 80 L 0 80 z" stroke-linecap="round" />
        @elseif ($hasil->status == 'Tersedia')
        <a href="#" data-toggle="modal" data-target="#modalBooking-mIaBjWY9EplpobFo0x3G">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 4; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-120, -40)" d="M 0 0 L 240 0 L 240 80 L 0 80 z" stroke-linecap="round" />
        </a>
        @endif
    </g>
    @empty
    <g transform="matrix(1 0 0 1 235.7 2426.02)" id="mIaBjWY9EplpobFo0x3G"  >
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="mIaBjWY9EplpobFo0x3G">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 4; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-120, -40)" d="M 0 0 L 240 0 L 240 80 L 0 80 z" stroke-linecap="round" />
        </a>
    </g>
    @endforelse


    @forelse ( $siteplan->where('code_product', '4tiEDWCA_MzMK21uRksCZ') as $hasil)
    <g transform="matrix(1 0 0 1 235.7 2506.02)" id="4tiEDWCA_MzMK21uRksCZ"  >
        @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
            <path style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 4; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-120, -40)" d="M 0 0 L 240 0 L 240 80 L 0 80 z" stroke-linecap="round" />
        @elseif ($hasil->status == 'Terjual')
            <path style="fill:#f50505; stroke: rgb(0,0,0); stroke-width: 4; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-120, -40)" d="M 0 0 L 240 0 L 240 80 L 0 80 z" stroke-linecap="round" />
        @elseif ($hasil->status == 'Tersedia')
        <a href="#" data-toggle="modal" data-target="#modalBooking-4tiEDWCA_MzMK21uRksCZ">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 4; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-120, -40)" d="M 0 0 L 240 0 L 240 80 L 0 80 z" stroke-linecap="round" />
        </a>
        @endif
    </g>
    @empty
    <g transform="matrix(1 0 0 1 235.7 2506.02)" id="4tiEDWCA_MzMK21uRksCZ"  >
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="4tiEDWCA_MzMK21uRksCZ">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 4; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-120, -40)" d="M 0 0 L 240 0 L 240 80 L 0 80 z" stroke-linecap="round" />
        </a>
    </g>
    @endforelse

    @forelse ( $siteplan->where('code_product', 'VMQRKkR1DVXUG0PtOIORd') as $hasil)
    <g transform="matrix(1 0 0 1 235.7 2586.02)" id="VMQRKkR1DVXUG0PtOIORd"  >
        @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
            <path style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 4; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -120 -40 L 120 -40 L 120 40 L -120 40 z" stroke-linecap="round" />
        @elseif ($hasil->status == 'Terjual')
            <path style="fill:#f50505; stroke: rgb(0,0,0); stroke-width: 4; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -120 -40 L 120 -40 L 120 40 L -120 40 z" stroke-linecap="round" />
        @elseif ($hasil->status == 'Tersedia')
        <a href="#" data-toggle="modal" data-target="#modalBooking-VMQRKkR1DVXUG0PtOIORd">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 4; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -120 -40 L 120 -40 L 120 40 L -120 40 z" stroke-linecap="round" />
        </a>
        @endif
    </g>
    @empty
    <g transform="matrix(1 0 0 1 235.7 2586.02)" id="VMQRKkR1DVXUG0PtOIORd"  >
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="VMQRKkR1DVXUG0PtOIORd">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 4; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -120 -40 L 120 -40 L 120 40 L -120 40 z" stroke-linecap="round" />
        </a>
    </g>
    @endforelse


    @forelse ( $siteplan->where('code_product', 'WqkgyAvQDWfede8gElMx') as $hasil)
    <g transform="matrix(1 0 0 1 235.7 2666.68)" id="WqkgyAvQDWfede8gElMx"  >
        @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
            <path style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 4; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-120, -40)" d="M 0 0 L 240 0 L 240 80 L 0 80 z" stroke-linecap="round" />
        @elseif ($hasil->status == 'Terjual')
            <path style="fill:#f50505; stroke: rgb(0,0,0); stroke-width: 4; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-120, -40)" d="M 0 0 L 240 0 L 240 80 L 0 80 z" stroke-linecap="round" />
        @elseif ($hasil->status == 'Tersedia')
        <a href="#" data-toggle="modal" data-target="#modalBooking-WqkgyAvQDWfede8gElMx">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 4; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-120, -40)" d="M 0 0 L 240 0 L 240 80 L 0 80 z" stroke-linecap="round" />
        </a>
        @endif
    </g>
    @empty
    <g transform="matrix(1 0 0 1 235.7 2666.68)" id="WqkgyAvQDWfede8gElMx"  >
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="WqkgyAvQDWfede8gElMx">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 4; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-120, -40)" d="M 0 0 L 240 0 L 240 80 L 0 80 z" stroke-linecap="round" />
        </a>
    </g>
    @endforelse


    @forelse ( $siteplan->where('code_product', 'HPJSomIhjqKM4ErKJNF2q') as $hasil)
    <g transform="matrix(1 0 0 1 235.7 2746.68)" id="HPJSomIhjqKM4ErKJNF2q"  >
        @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
            <path style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 4; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-120, -40)" d="M 0 0 L 240 0 L 240 80 L 0 80 z" stroke-linecap="round" />
        @elseif ($hasil->status == 'Terjual')
            <path style="fill:#f50505; stroke: rgb(0,0,0); stroke-width: 4; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-120, -40)" d="M 0 0 L 240 0 L 240 80 L 0 80 z" stroke-linecap="round" />
        @elseif ($hasil->status == 'Tersedia')
        <a href="#" data-toggle="modal" data-target="#modalBooking-HPJSomIhjqKM4ErKJNF2q">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 4; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-120, -40)" d="M 0 0 L 240 0 L 240 80 L 0 80 z" stroke-linecap="round" />
        </a>
        @endif
    </g>
    @empty
    <g transform="matrix(1 0 0 1 235.7 2746.68)" id="HPJSomIhjqKM4ErKJNF2q"  >
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="HPJSomIhjqKM4ErKJNF2q">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 4; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-120, -40)" d="M 0 0 L 240 0 L 240 80 L 0 80 z" stroke-linecap="round" />
        </a>
    </g>
    @endforelse

    @forelse ( $siteplan->where('code_product', 'r2qClbGI5Zkkgxxgm2EX7') as $hasil)
    <g transform="matrix(1 0 0 1 235.92 2827.18)" id="r2qClbGI5Zkkgxxgm2EX7"  >
        @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
            <path style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 4; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -120 -40 L 120 -40 L 120 40 L -120 40 z" stroke-linecap="round" />
        @elseif ($hasil->status == 'Terjual')
            <path style="fill:#f50505; stroke: rgb(0,0,0); stroke-width: 4; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -120 -40 L 120 -40 L 120 40 L -120 40 z" stroke-linecap="round" />
        @elseif ($hasil->status == 'Tersedia')
        <a href="#" data-toggle="modal" data-target="#modalBooking-r2qClbGI5Zkkgxxgm2EX7">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 4; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -120 -40 L 120 -40 L 120 40 L -120 40 z" stroke-linecap="round" />
        </a>
        @endif
    </g>
    @empty
    <g transform="matrix(1 0 0 1 235.92 2827.18)" id="r2qClbGI5Zkkgxxgm2EX7"  >
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="r2qClbGI5Zkkgxxgm2EX7">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 4; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -120 -40 L 120 -40 L 120 40 L -120 40 z" stroke-linecap="round" />
        </a>
    </g>
    @endforelse

    @forelse ( $siteplan->where('code_product', 'p0p81O5Vv0RDp0F6D') as $hasil)
    <g transform="matrix(1 0 0 1 235.92 2907.18)" id="p0p81O5Vv0RDp0F6D"  >
        @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
            <path style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 4; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-120, -40)" d="M 0 0 L 240 0 L 240 80 L 0 80 z" stroke-linecap="round" />
        @elseif ($hasil->status == 'Terjual')
            <path style="fill:#f50505; stroke: rgb(0,0,0); stroke-width: 4; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-120, -40)" d="M 0 0 L 240 0 L 240 80 L 0 80 z" stroke-linecap="round" />
        @elseif ($hasil->status == 'Tersedia')
        <a href="#" data-toggle="modal" data-target="#modalBooking-p0p81O5Vv0RDp0F6D">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 4; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-120, -40)" d="M 0 0 L 240 0 L 240 80 L 0 80 z" stroke-linecap="round" />
        </a>
        @endif
    </g>
    @empty
    <g transform="matrix(1 0 0 1 235.92 2907.18)" id="p0p81O5Vv0RDp0F6D"  >
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="p0p81O5Vv0RDp0F6D">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 4; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-120, -40)" d="M 0 0 L 240 0 L 240 80 L 0 80 z" stroke-linecap="round" />
        </a>
    </g>
    @endforelse

    @forelse ( $siteplan->where('code_product', 'pwxgSRSb_Y3JIZ2DecYhy') as $hasil)
    <g transform="matrix(1 0 0 1 235.92 2987.84)" id="pwxgSRSb_Y3JIZ2DecYhy"  >
        @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
            <path style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 4; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-120, -40)" d="M 0 0 L 240 0 L 240 80 L 0 80 z" stroke-linecap="round" />
        @elseif ($hasil->status == 'Terjual')
            <path style="fill:#f50505; stroke: rgb(0,0,0); stroke-width: 4; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-120, -40)" d="M 0 0 L 240 0 L 240 80 L 0 80 z" stroke-linecap="round" />
        @elseif ($hasil->status == 'Tersedia')
        <a href="#" data-toggle="modal" data-target="#modalBooking-pwxgSRSb_Y3JIZ2DecYhy">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 4; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-120, -40)" d="M 0 0 L 240 0 L 240 80 L 0 80 z" stroke-linecap="round" />
        </a>
        @endif
    </g>
    @empty
    <g transform="matrix(1 0 0 1 235.92 2987.84)" id="pwxgSRSb_Y3JIZ2DecYhy"  >
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="pwxgSRSb_Y3JIZ2DecYhy">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 4; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-120, -40)" d="M 0 0 L 240 0 L 240 80 L 0 80 z" stroke-linecap="round" />
        </a>
    </g>
    @endforelse

    @forelse ( $siteplan->where('code_product', 'HmoOXEfMfLDm3259KIt7a') as $hasil)
    <g transform="matrix(1 0 0 1 235.92 3067.84)" id="HmoOXEfMfLDm3259KIt7a"  >
        @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
            <path style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 4; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-120, -40)" d="M 0 0 L 240 0 L 240 80 L 0 80 z" stroke-linecap="round" />
        @elseif ($hasil->status == 'Terjual')
            <path style="fill:#f50505; stroke: rgb(0,0,0); stroke-width: 4; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-120, -40)" d="M 0 0 L 240 0 L 240 80 L 0 80 z" stroke-linecap="round" />
        @elseif ($hasil->status == 'Tersedia')
        <a href="#" data-toggle="modal" data-target="#modalBooking-HmoOXEfMfLDm3259KIt7a">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 4; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-120, -40)" d="M 0 0 L 240 0 L 240 80 L 0 80 z" stroke-linecap="round" />
        </a>
        @endif
    </g>
    @empty
    <g transform="matrix(1 0 0 1 235.92 3067.84)" id="HmoOXEfMfLDm3259KIt7a"  >
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="HmoOXEfMfLDm3259KIt7a">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 4; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-120, -40)" d="M 0 0 L 240 0 L 240 80 L 0 80 z" stroke-linecap="round" />
        </a>
    </g>
    @endforelse

    @forelse ( $siteplan->where('code_product', 'I79gXOlRqb04FLgL6m4YU') as $hasil)
    <g transform="matrix(1 0 0 1 235.92 3147.84)" id="I79gXOlRqb04FLgL6m4YU"  >
        @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
            <path style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 4; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-120, -40)" d="M 0 0 L 240 0 L 240 80 L 0 80 z" stroke-linecap="round" />
        @elseif ($hasil->status == 'Terjual')
            <path style="fill:#f50505; stroke: rgb(0,0,0); stroke-width: 4; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-120, -40)" d="M 0 0 L 240 0 L 240 80 L 0 80 z" stroke-linecap="round" />
        @elseif ($hasil->status == 'Tersedia')
        <a href="#" data-toggle="modal" data-target="#modalBooking-I79gXOlRqb04FLgL6m4YU">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 4; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-120, -40)" d="M 0 0 L 240 0 L 240 80 L 0 80 z" stroke-linecap="round" />
        </a>
        @endif
    </g>
    @empty
    <g transform="matrix(1 0 0 1 235.92 3147.84)" id="I79gXOlRqb04FLgL6m4YU"  >
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="I79gXOlRqb04FLgL6m4YU">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 4; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-120, -40)" d="M 0 0 L 240 0 L 240 80 L 0 80 z" stroke-linecap="round" />
        </a>
    </g>
    @endforelse

    @forelse ( $siteplan->where('code_product', 'wZylbZHCwOYltOEoVvrN') as $hasil)
    <g transform="matrix(1 0 0 1 235.45 339.22)" id="wZylbZHCwOYltOEoVvrN"  >
        @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
            <path style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 4; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-120, -40)" d="M 0 0 L 240 0 L 240 80 L 0 80 z" stroke-linecap="round" />
        @elseif ($hasil->status == 'Terjual')
            <path style="fill:#f50505; stroke: rgb(0,0,0); stroke-width: 4; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-120, -40)" d="M 0 0 L 240 0 L 240 80 L 0 80 z" stroke-linecap="round" />
        @elseif ($hasil->status == 'Tersedia')
        <a href="#" data-toggle="modal" data-target="#modalBooking-wZylbZHCwOYltOEoVvrN">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 4; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-120, -40)" d="M 0 0 L 240 0 L 240 80 L 0 80 z" stroke-linecap="round" />
        </a>
        @endif
    </g>
    @empty
    <g transform="matrix(1 0 0 1 235.45 339.22)" id="wZylbZHCwOYltOEoVvrN"  >
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="wZylbZHCwOYltOEoVvrN">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 4; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-120, -40)" d="M 0 0 L 240 0 L 240 80 L 0 80 z" stroke-linecap="round" />
        </a>
    </g>
    @endforelse

    @forelse ( $siteplan->where('code_product', 'l0Nn61IoM41car9PgBogo') as $hasil)
    <g transform="matrix(1 0 0 1 235.45 419.22)" id="l0Nn61IoM41car9PgBogo"  >
        @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
            <path style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 4; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-120, -40)" d="M 0 0 L 240 0 L 240 80 L 0 80 z" stroke-linecap="round" />
        @elseif ($hasil->status == 'Terjual')
            <path style="fill:#f50505; stroke: rgb(0,0,0); stroke-width: 4; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-120, -40)" d="M 0 0 L 240 0 L 240 80 L 0 80 z" stroke-linecap="round" />
        @elseif ($hasil->status == 'Tersedia')
        <a href="#" data-toggle="modal" data-target="#modalBooking-l0Nn61IoM41car9PgBogo">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 4; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-120, -40)" d="M 0 0 L 240 0 L 240 80 L 0 80 z" stroke-linecap="round" />
        </a>
        @endif
    </g>
    @empty
    <g transform="matrix(1 0 0 1 235.45 419.22)" id="l0Nn61IoM41car9PgBogo"  >
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="l0Nn61IoM41car9PgBogo">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 4; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-120, -40)" d="M 0 0 L 240 0 L 240 80 L 0 80 z" stroke-linecap="round" />
        </a>
    </g>
    @endforelse

    @forelse ( $siteplan->where('code_product', '2_C8XD3Gojr2kEBLjyp5p') as $hasil)
    <g transform="matrix(1 0 0 1 235.45 499.89)" id="2_C8XD3Gojr2kEBLjyp5p"  >
        @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
            <path style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 4; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-120, -40)" d="M 0 0 L 240 0 L 240 80 L 0 80 z" stroke-linecap="round" />
        @elseif ($hasil->status == 'Terjual')
            <path style="fill:#f50505; stroke: rgb(0,0,0); stroke-width: 4; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-120, -40)" d="M 0 0 L 240 0 L 240 80 L 0 80 z" stroke-linecap="round" />
        @elseif ($hasil->status == 'Tersedia')
        <a href="#" data-toggle="modal" data-target="#modalBooking-2_C8XD3Gojr2kEBLjyp5p">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 4; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-120, -40)" d="M 0 0 L 240 0 L 240 80 L 0 80 z" stroke-linecap="round" />
        </a>
        @endif
    </g>
    @empty
    <g transform="matrix(1 0 0 1 235.45 499.89)" id="2_C8XD3Gojr2kEBLjyp5p"  >
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="2_C8XD3Gojr2kEBLjyp5p">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 4; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-120, -40)" d="M 0 0 L 240 0 L 240 80 L 0 80 z" stroke-linecap="round" />
        </a>
    </g>
    @endforelse

    @forelse ( $siteplan->where('code_product', 'GxtJtCOHoO1w82zsmqfKG') as $hasil)
    <g transform="matrix(1 0 0 1 235.45 579.89)" id="GxtJtCOHoO1w82zsmqfKG"  >
        @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
            <path style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 4; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-120, -40)" d="M 0 0 L 240 0 L 240 80 L 0 80 z" stroke-linecap="round" />
        @elseif ($hasil->status == 'Terjual')
            <path style="fill:#f50505; stroke: rgb(0,0,0); stroke-width: 4; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-120, -40)" d="M 0 0 L 240 0 L 240 80 L 0 80 z" stroke-linecap="round" />
        @elseif ($hasil->status == 'Tersedia')
        <a href="#" data-toggle="modal" data-target="#modalBooking-GxtJtCOHoO1w82zsmqfKG">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 4; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-120, -40)" d="M 0 0 L 240 0 L 240 80 L 0 80 z" stroke-linecap="round" />
        </a>
        @endif
    </g>
    @empty
    <g transform="matrix(1 0 0 1 235.45 579.89)" id="GxtJtCOHoO1w82zsmqfKG"  >
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="GxtJtCOHoO1w82zsmqfKG">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 4; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-120, -40)" d="M 0 0 L 240 0 L 240 80 L 0 80 z" stroke-linecap="round" />
        </a>
    </g>
    @endforelse

    @forelse ( $siteplan->where('code_product', 'u0y79Zi0kHASGE91dxB2R') as $hasil)
    <g transform="matrix(1 0 0 1 235.45 659.89)" id="u0y79Zi0kHASGE91dxB2R"  >
        @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
            <path style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 4; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-120, -40)" d="M 0 0 L 240 0 L 240 80 L 0 80 z" stroke-linecap="round" />
        @elseif ($hasil->status == 'Terjual')
            <path style="fill:#f50505; stroke: rgb(0,0,0); stroke-width: 4; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-120, -40)" d="M 0 0 L 240 0 L 240 80 L 0 80 z" stroke-linecap="round" />
        @elseif ($hasil->status == 'Tersedia')
        <a href="#" data-toggle="modal" data-target="#modalBooking-u0y79Zi0kHASGE91dxB2R">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 4; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-120, -40)" d="M 0 0 L 240 0 L 240 80 L 0 80 z" stroke-linecap="round" />
        </a>
        @endif
    </g>
    @empty
    <g transform="matrix(1 0 0 1 235.45 659.89)" id="u0y79Zi0kHASGE91dxB2R"  >
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="u0y79Zi0kHASGE91dxB2R">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 4; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-120, -40)" d="M 0 0 L 240 0 L 240 80 L 0 80 z" stroke-linecap="round" />
        </a>
    </g>
    @endforelse

    @forelse ( $siteplan->where('code_product', '0_E9JPtZfGgNEJiTbZWdw') as $hasil)
    <g transform="matrix(1 0 0 1 235.45 739.89)" id="0_E9JPtZfGgNEJiTbZWdw"  >
        @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
            <path style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 4; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-120, -40)" d="M 0 0 L 240 0 L 240 80 L 0 80 z" stroke-linecap="round" />
        @elseif ($hasil->status == 'Terjual')
            <path style="fill:#f50505; stroke: rgb(0,0,0); stroke-width: 4; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-120, -40)" d="M 0 0 L 240 0 L 240 80 L 0 80 z" stroke-linecap="round" />
        @elseif ($hasil->status == 'Tersedia')
        <a href="#" data-toggle="modal" data-target="#modalBooking-0_E9JPtZfGgNEJiTbZWdw">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 4; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-120, -40)" d="M 0 0 L 240 0 L 240 80 L 0 80 z" stroke-linecap="round" />
        </a>
        @endif
    </g>
    @empty
    <g transform="matrix(1 0 0 1 235.45 739.89)" id="0_E9JPtZfGgNEJiTbZWdw"  >
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="0_E9JPtZfGgNEJiTbZWdw">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 4; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-120, -40)" d="M 0 0 L 240 0 L 240 80 L 0 80 z" stroke-linecap="round" />
        </a>
    </g>
    @endforelse

    @forelse ( $siteplan->where('code_product', 'G7Xk6EwBGEMx4InvENBI') as $hasil)
    <g transform="matrix(1 0 0 1 235.45 820.55)" id="G7Xk6EwBGEMx4InvENBI"  >
        @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
            <path style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 4; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-120, -40)" d="M 0 0 L 240 0 L 240 80 L 0 80 z" stroke-linecap="round" />
        @elseif ($hasil->status == 'Terjual')
            <path style="fill:#f50505; stroke: rgb(0,0,0); stroke-width: 4; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-120, -40)" d="M 0 0 L 240 0 L 240 80 L 0 80 z" stroke-linecap="round" />
        @elseif ($hasil->status == 'Tersedia')
        <a href="#" data-toggle="modal" data-target="#modalBooking-G7Xk6EwBGEMx4InvENBI">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 4; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-120, -40)" d="M 0 0 L 240 0 L 240 80 L 0 80 z" stroke-linecap="round" />
        </a>
        @endif
    </g>
    @empty
    <g transform="matrix(1 0 0 1 235.45 820.55)" id="G7Xk6EwBGEMx4InvENBI"  >
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="G7Xk6EwBGEMx4InvENBI">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 4; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-120, -40)" d="M 0 0 L 240 0 L 240 80 L 0 80 z" stroke-linecap="round" />
        </a>
    </g>
    @endforelse

    @forelse ( $siteplan->where('code_product', 'r5T2GJ4BWgBuj5FIhr4i2') as $hasil)
    <g transform="matrix(1 0 0 1 235.45 900.55)" id="r5T2GJ4BWgBuj5FIhr4i2"  >
        @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
            <path style="fill:#ffc107;  stroke: rgb(0,0,0); stroke-width: 4; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-120, -40)" d="M 0 0 L 240 0 L 240 80 L 0 80 z" stroke-linecap="round" />
        @elseif ($hasil->status == 'Terjual')
            <path style="fill:#f50505; stroke: rgb(0,0,0); stroke-width: 4; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-120, -40)" d="M 0 0 L 240 0 L 240 80 L 0 80 z" stroke-linecap="round" />
        @elseif ($hasil->status == 'Tersedia')
        <a href="#" data-toggle="modal" data-target="#modalBooking-r5T2GJ4BWgBuj5FIhr4i2">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 4; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-120, -40)" d="M 0 0 L 240 0 L 240 80 L 0 80 z" stroke-linecap="round" />
        </a>
        @endif
    </g>
    @empty
    <g transform="matrix(1 0 0 1 235.45 900.55)" id="r5T2GJ4BWgBuj5FIhr4i2"  >
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="r5T2GJ4BWgBuj5FIhr4i2">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 4; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-120, -40)" d="M 0 0 L 240 0 L 240 80 L 0 80 z" stroke-linecap="round" />
        </a>
    </g>
    @endforelse

    @forelse ( $siteplan->where('code_product', 'DL0dPy7v3VHN59kf9BPxv') as $hasil)
    <g transform="matrix(1 0 0 1 235.22 981.22)" id="DL0dPy7v3VHN59kf9BPxv"  >
        @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
            <path style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 4; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-120, -40)" d="M 0 0 L 240 0 L 240 80 L 0 80 z" stroke-linecap="round" />
        @elseif ($hasil->status == 'Terjual')
            <path style="fill:#f50505; stroke: rgb(0,0,0); stroke-width: 4; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-120, -40)" d="M 0 0 L 240 0 L 240 80 L 0 80 z" stroke-linecap="round" />
        @elseif ($hasil->status == 'Tersedia')
        <a href="#" data-toggle="modal" data-target="#modalBooking-DL0dPy7v3VHN59kf9BPxv">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 4; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-120, -40)" d="M 0 0 L 240 0 L 240 80 L 0 80 z" stroke-linecap="round" />
        </a>
        @endif
    </g>
    @empty
    <g transform="matrix(1 0 0 1 235.22 981.22)" id="DL0dPy7v3VHN59kf9BPxv"  >
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="DL0dPy7v3VHN59kf9BPxv">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 4; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-120, -40)" d="M 0 0 L 240 0 L 240 80 L 0 80 z" stroke-linecap="round" />
        </a>
    </g>
    @endforelse

    @forelse ( $siteplan->where('code_product', 'EjsM8b68YDjCAlM0auxh3') as $hasil)
    <g transform="matrix(1 0 0 1 235.22 1061.22)" id="EjsM8b68YDjCAlM0auxh3"  >
        @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
            <path style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 4; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-120, -40)" d="M 0 0 L 240 0 L 240 80 L 0 80 z" stroke-linecap="round" />
        @elseif ($hasil->status == 'Terjual')
            <path style="fill:#f50505;stroke: rgb(0,0,0); stroke-width: 4; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-120, -40)" d="M 0 0 L 240 0 L 240 80 L 0 80 z" stroke-linecap="round" />
        @elseif ($hasil->status == 'Tersedia')
        <a href="#" data-toggle="modal" data-target="#modalBooking-EjsM8b68YDjCAlM0auxh3">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 4; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-120, -40)" d="M 0 0 L 240 0 L 240 80 L 0 80 z" stroke-linecap="round" />
        </a>
        @endif
    </g>
    @empty
    <g transform="matrix(1 0 0 1 235.22 1061.22)" id="EjsM8b68YDjCAlM0auxh3"  >
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="EjsM8b68YDjCAlM0auxh3">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 4; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-120, -40)" d="M 0 0 L 240 0 L 240 80 L 0 80 z" stroke-linecap="round" />
        </a>
    </g>
    @endforelse

    @forelse ( $siteplan->where('code_product', 'PIxM5hGcX7nAcOLDug9cf') as $hasil)
    <g transform="matrix(1 0 0 1 235.22 1141.88)" id="PIxM5hGcX7nAcOLDug9cf"  >
        @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
            <path style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 4; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-120, -40)" d="M 0 0 L 240 0 L 240 80 L 0 80 z" stroke-linecap="round" />
        @elseif ($hasil->status == 'Terjual')
            <path style="fill:#f50505; stroke: rgb(0,0,0); stroke-width: 4; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-120, -40)" d="M 0 0 L 240 0 L 240 80 L 0 80 z" stroke-linecap="round" />
        @elseif ($hasil->status == 'Tersedia')
        <a href="#" data-toggle="modal" data-target="#modalBooking-PIxM5hGcX7nAcOLDug9cf">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 4; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-120, -40)" d="M 0 0 L 240 0 L 240 80 L 0 80 z" stroke-linecap="round" />
        </a>
        @endif
    </g>
    @empty
    <g transform="matrix(1 0 0 1 235.22 1141.88)" id="PIxM5hGcX7nAcOLDug9cf"  >
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="PIxM5hGcX7nAcOLDug9cf">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 4; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-120, -40)" d="M 0 0 L 240 0 L 240 80 L 0 80 z" stroke-linecap="round" />
        </a>
    </g>
    @endforelse

    @forelse ( $siteplan->where('code_product', 'VJXHzspafTh71iol5Fzwk') as $hasil)
    <g transform="matrix(1 0 0 1 235.22 1221.88)" id="VJXHzspafTh71iol5Fzwk"  >
        @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
            <path style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 4; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-120, -40)" d="M 0 0 L 240 0 L 240 80 L 0 80 z" stroke-linecap="round" />
        @elseif ($hasil->status == 'Terjual')
            <path style="fill:#f50505; stroke: rgb(0,0,0); stroke-width: 4; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-120, -40)" d="M 0 0 L 240 0 L 240 80 L 0 80 z" stroke-linecap="round" />
        @elseif ($hasil->status == 'Tersedia')
        <a href="#" data-toggle="modal" data-target="#modalBooking-VJXHzspafTh71iol5Fzwk">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 4; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-120, -40)" d="M 0 0 L 240 0 L 240 80 L 0 80 z" stroke-linecap="round" />
        </a>
        @endif
    </g>
    @empty
    <g transform="matrix(1 0 0 1 235.22 1221.88)" id="VJXHzspafTh71iol5Fzwk"  >
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="VJXHzspafTh71iol5Fzwk">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 4; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-120, -40)" d="M 0 0 L 240 0 L 240 80 L 0 80 z" stroke-linecap="round" />
        </a>
    </g>
    @endforelse

    @forelse ( $siteplan->where('code_product', '_PVBpsh7aUskvzz6WyQmf') as $hasil)
    <g transform="matrix(1 0 0 1 235.22 1301.88)" id="_PVBpsh7aUskvzz6WyQmf"  >
        @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
            <path style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 4; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-120, -40)" d="M 0 0 L 240 0 L 240 80 L 0 80 z" stroke-linecap="round" />
        @elseif ($hasil->status == 'Terjual')
            <path style="fill:#f50505; stroke: rgb(0,0,0); stroke-width: 4; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-120, -40)" d="M 0 0 L 240 0 L 240 80 L 0 80 z" stroke-linecap="round" />
        @elseif ($hasil->status == 'Tersedia')
        <a href="#" data-toggle="modal" data-target="#modalBooking-_PVBpsh7aUskvzz6WyQmf">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 4; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-120, -40)" d="M 0 0 L 240 0 L 240 80 L 0 80 z" stroke-linecap="round" />
        </a>
        @endif
    </g>
    @empty
    <g transform="matrix(1 0 0 1 235.22 1301.88)" id="_PVBpsh7aUskvzz6WyQmf"  >
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="_PVBpsh7aUskvzz6WyQmf">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 4; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-120, -40)" d="M 0 0 L 240 0 L 240 80 L 0 80 z" stroke-linecap="round" />
        </a>
    </g>
    @endforelse

    @forelse ( $siteplan->where('code_product', 'ZkKzOvLDCj7RQNEShfFGC') as $hasil)
    <g transform="matrix(1 0 0 1 235.22 1381.88)" id="ZkKzOvLDCj7RQNEShfFGC"  >
        @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
            <path style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 4; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -120 -40 L 120 -40 L 120 40 L -120 40 z" stroke-linecap="round" />
        @elseif ($hasil->status == 'Terjual')
            <path style="fill:#f50505; stroke: rgb(0,0,0); stroke-width: 4; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -120 -40 L 120 -40 L 120 40 L -120 40 z" stroke-linecap="round" />
        @elseif ($hasil->status == 'Tersedia')
        <a href="#" data-toggle="modal" data-target="#modalBooking-ZkKzOvLDCj7RQNEShfFGC">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 4; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -120 -40 L 120 -40 L 120 40 L -120 40 z" stroke-linecap="round" />
        </a>
        @endif
    </g>
    @empty
    <g transform="matrix(1 0 0 1 235.22 1381.88)" id="ZkKzOvLDCj7RQNEShfFGC"  >
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="ZkKzOvLDCj7RQNEShfFGC">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 4; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -120 -40 L 120 -40 L 120 40 L -120 40 z" stroke-linecap="round" />
        </a>
    </g>
    @endforelse

    @forelse ( $siteplan->where('code_product', 'UYd_zVcIW6laBbYW1SLiU') as $hasil)
    <g transform="matrix(1 0 0 1 235.22 1462.54)" id="UYd_zVcIW6laBbYW1SLiU"  >
        @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
            <path style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 4; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-120, -40)" d="M 0 0 L 240 0 L 240 80 L 0 80 z" stroke-linecap="round" />
        @elseif ($hasil->status == 'Terjual')
            <path style="fill:#f50505; stroke: rgb(0,0,0); stroke-width: 4; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-120, -40)" d="M 0 0 L 240 0 L 240 80 L 0 80 z" stroke-linecap="round" />
        @elseif ($hasil->status == 'Tersedia')
        <a href="#" data-toggle="modal" data-target="#modalBooking-UYd_zVcIW6laBbYW1SLiU">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 4; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-120, -40)" d="M 0 0 L 240 0 L 240 80 L 0 80 z" stroke-linecap="round" />
        </a>
        @endif
    </g>
    @empty
    <g transform="matrix(1 0 0 1 235.22 1462.54)" id="UYd_zVcIW6laBbYW1SLiU"  >
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="UYd_zVcIW6laBbYW1SLiU">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 4; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-120, -40)" d="M 0 0 L 240 0 L 240 80 L 0 80 z" stroke-linecap="round" />
        </a>
    </g>
    @endforelse

    @forelse ( $siteplan->where('code_product', 'VhJaLZiIAZNep09vds5ML') as $hasil)
    <g transform="matrix(1 0 0 1 235.22 1542.54)" id="VhJaLZiIAZNep09vds5ML"  >
        @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
            <path style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 4; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-120, -40)" d="M 0 0 L 240 0 L 240 80 L 0 80 z" stroke-linecap="round" />
        @elseif ($hasil->status == 'Terjual')
            <path style="fill:#f50505; stroke: rgb(0,0,0); stroke-width: 4; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-120, -40)" d="M 0 0 L 240 0 L 240 80 L 0 80 z" stroke-linecap="round" />
        @elseif ($hasil->status == 'Tersedia')
        <a href="#" data-toggle="modal" data-target="#modalBooking-VhJaLZiIAZNep09vds5ML">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 4; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-120, -40)" d="M 0 0 L 240 0 L 240 80 L 0 80 z" stroke-linecap="round" />
        </a>
        @endif
    </g>
    @empty
    <g transform="matrix(1 0 0 1 235.22 1542.54)" id="VhJaLZiIAZNep09vds5ML"  >
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="VhJaLZiIAZNep09vds5ML">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 4; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-120, -40)" d="M 0 0 L 240 0 L 240 80 L 0 80 z" stroke-linecap="round" />
        </a>
    </g>
    @endforelse

    @forelse ( $siteplan->where('code_product', '80DvNEoXHOkHODJQHN1R') as $hasil)
    <g transform="matrix(1 0 0 1 235.45 1623.04)" id="80DvNEoXHOkHODJQHN1R"  >
        @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
            <path style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 4; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -120 -40 L 120 -40 L 120 40 L -120 40 z" stroke-linecap="round" />
        @elseif ($hasil->status == 'Terjual')
            <path style="fill:#f50505; stroke: rgb(0,0,0); stroke-width: 4; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -120 -40 L 120 -40 L 120 40 L -120 40 z" stroke-linecap="round" />
        @elseif ($hasil->status == 'Tersedia')
        <a href="#" data-toggle="modal" data-target="#modalBooking-80DvNEoXHOkHODJQHN1R">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 4; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -120 -40 L 120 -40 L 120 40 L -120 40 z" stroke-linecap="round" />
        </a>
        @endif
    </g>
    @empty
    <g transform="matrix(1 0 0 1 235.45 1623.04)" id="80DvNEoXHOkHODJQHN1R"  >
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="80DvNEoXHOkHODJQHN1R">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 4; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -120 -40 L 120 -40 L 120 40 L -120 40 z" stroke-linecap="round" />
        </a>
    </g>
    @endforelse

    @forelse ( $siteplan->where('code_product', 'bGBqB_zKgUZoqF8IOsbO1') as $hasil)
    <g transform="matrix(1 0 0 1 235.45 1703.04)" id="bGBqB_zKgUZoqF8IOsbO1"  >
        @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
            <path style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 4; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-120, -40)" d="M 0 0 L 240 0 L 240 80 L 0 80 z" stroke-linecap="round" />
        @elseif ($hasil->status == 'Terjual')
            <path style="fill:#f50505; stroke: rgb(0,0,0); stroke-width: 4; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-120, -40)" d="M 0 0 L 240 0 L 240 80 L 0 80 z" stroke-linecap="round" />
        @elseif ($hasil->status == 'Tersedia')
        <a href="#" data-toggle="modal" data-target="#modalBooking-bGBqB_zKgUZoqF8IOsbO1">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 4; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-120, -40)" d="M 0 0 L 240 0 L 240 80 L 0 80 z" stroke-linecap="round" />
        </a>
        @endif
    </g>
    @empty
    <g transform="matrix(1 0 0 1 235.45 1703.04)" id="bGBqB_zKgUZoqF8IOsbO1"  >
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="bGBqB_zKgUZoqF8IOsbO1">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 4; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-120, -40)" d="M 0 0 L 240 0 L 240 80 L 0 80 z" stroke-linecap="round" />
        </a>
    </g>
    @endforelse


    @forelse ( $siteplan->where('code_product', 'HPgHtFkJC1Oa0vqeb4CEL') as $hasil)
    <g transform="matrix(1 0 0 1 235.45 1783.7)" id="HPgHtFkJC1Oa0vqeb4CEL"  >
        @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
            <path style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 4; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-120, -40)" d="M 0 0 L 240 0 L 240 80 L 0 80 z" stroke-linecap="round" />
        @elseif ($hasil->status == 'Terjual')
            <path style="fill:#f50505; stroke: rgb(0,0,0); stroke-width: 4; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-120, -40)" d="M 0 0 L 240 0 L 240 80 L 0 80 z" stroke-linecap="round" />
        @elseif ($hasil->status == 'Tersedia')
        <a href="#" data-toggle="modal" data-target="#modalBooking-HPgHtFkJC1Oa0vqeb4CEL">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 4; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-120, -40)" d="M 0 0 L 240 0 L 240 80 L 0 80 z" stroke-linecap="round" />
        </a>
        @endif
    </g>
    @empty
    <g transform="matrix(1 0 0 1 235.45 1783.7)" id="HPgHtFkJC1Oa0vqeb4CEL"  >
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="HPgHtFkJC1Oa0vqeb4CEL">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 4; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-120, -40)" d="M 0 0 L 240 0 L 240 80 L 0 80 z" stroke-linecap="round" />
        </a>
    </g>
    @endforelse

    @forelse ( $siteplan->where('code_product', '1XqhDeVjVsrm0jhRxlab') as $hasil)
    <g transform="matrix(1 0 0 1 235.45 1863.7)" id="1XqhDeVjVsrm0jhRxlab"  >
        @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
            <path style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 4; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-120, -40)" d="M 0 0 L 240 0 L 240 80 L 0 80 z" stroke-linecap="round" />
        @elseif ($hasil->status == 'Terjual')
            <path style="fill:#f50505; stroke: rgb(0,0,0); stroke-width: 4; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-120, -40)" d="M 0 0 L 240 0 L 240 80 L 0 80 z" stroke-linecap="round" />
        @elseif ($hasil->status == 'Tersedia')
        <a href="#" data-toggle="modal" data-target="#modalBooking-1XqhDeVjVsrm0jhRxlab">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 4; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-120, -40)" d="M 0 0 L 240 0 L 240 80 L 0 80 z" stroke-linecap="round" />
        </a>
        @endif
    </g>
    @empty
    <g transform="matrix(1 0 0 1 235.45 1863.7)" id="1XqhDeVjVsrm0jhRxlab"  >
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="1XqhDeVjVsrm0jhRxlab">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 4; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-120, -40)" d="M 0 0 L 240 0 L 240 80 L 0 80 z" stroke-linecap="round" />
        </a>
    </g>
    @endforelse

    @forelse ( $siteplan->where('code_product', 'cdp2lMwM9_cbX7aPphYwZ') as $hasil)
    <g transform="matrix(0 1 -1 0 88.92 1640.77)" id="cdp2lMwM9_cbX7aPphYwZ"  >
        @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
            <path style="fill:#ffc107; stroke: rgb(96,216,167); stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(123,118,118); fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -1556.821 -25 L 1556.821 -25 L 1556.821 25 L -1556.821 25 z" stroke-linecap="round" />
        @elseif ($hasil->status == 'Terjual')
            <path style="fill:#f50505; stroke: rgb(96,216,167); stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(123,118,118); fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -1556.821 -25 L 1556.821 -25 L 1556.821 25 L -1556.821 25 z" stroke-linecap="round" />
        @elseif ($hasil->status == 'Tersedia')
        <a href="#" data-toggle="modal" data-target="#modalBooking-cdp2lMwM9_cbX7aPphYwZ">
            <path style="fill: #f8f8f8; stroke: rgb(96,216,167); stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(123,118,118); fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -1556.821 -25 L 1556.821 -25 L 1556.821 25 L -1556.821 25 z" stroke-linecap="round" />
        </a>
        @endif
    </g>
    @empty
    <g transform="matrix(0 1 -1 0 88.92 1640.77)" id="cdp2lMwM9_cbX7aPphYwZ"  >
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="cdp2lMwM9_cbX7aPphYwZ">
            <path style="fill: #f8f8f8; stroke: rgb(96,216,167); stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(123,118,118); fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -1556.821 -25 L 1556.821 -25 L 1556.821 25 L -1556.821 25 z" stroke-linecap="round" />
        </a>
    </g>
    @endforelse

    @forelse ( $siteplan->where('code_product', 'lCQaISTXhH8kJ1S1YwnJV') as $hasil)
    <g transform="matrix(1 0 0 1 145.22 198.22)" id="lCQaISTXhH8kJ1S1YwnJV"  >
        @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
            <path style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 4; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-30, -100)" d="M 0 0 L 60 0 L 60 200 L 0 200 z" stroke-linecap="round" />
        @elseif ($hasil->status == 'Terjual')
            <path style="fill:#f50505; stroke: rgb(0,0,0); stroke-width: 4; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-30, -100)" d="M 0 0 L 60 0 L 60 200 L 0 200 z" stroke-linecap="round" />
        @elseif ($hasil->status == 'Tersedia')
        <a href="#" data-toggle="modal" data-target="#modalBooking-lCQaISTXhH8kJ1S1YwnJV">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 4; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-30, -100)" d="M 0 0 L 60 0 L 60 200 L 0 200 z" stroke-linecap="round" />
        </a>
        @endif
    </g>
    @empty
    <g transform="matrix(1 0 0 1 145.22 198.22)" id="lCQaISTXhH8kJ1S1YwnJV"  >
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="lCQaISTXhH8kJ1S1YwnJV">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 4; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-30, -100)" d="M 0 0 L 60 0 L 60 200 L 0 200 z" stroke-linecap="round" />
        </a>
    </g>
    @endforelse

    @forelse ( $siteplan->where('code_product', 'ZYtfopNxkrqRDGpPrKDOI') as $hasil)
    <g transform="matrix(1 0 0 1 205.22 198.22)" id="ZYtfopNxkrqRDGpPrKDOI"  >
        @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
            <path style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 4; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -30 -100 L 30 -100 L 30 100 L -30 100 z" stroke-linecap="round" />
        @elseif ($hasil->status == 'Terjual')
            <path style="fill:#f50505; stroke: rgb(0,0,0); stroke-width: 4; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -30 -100 L 30 -100 L 30 100 L -30 100 z" stroke-linecap="round" />
        @elseif ($hasil->status == 'Tersedia')
        <a href="#" data-toggle="modal" data-target="#modalBooking-ZYtfopNxkrqRDGpPrKDOI">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 4; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -30 -100 L 30 -100 L 30 100 L -30 100 z" stroke-linecap="round" />
        </a>
        @endif
    </g>
    @empty
    <g transform="matrix(1 0 0 1 205.22 198.22)" id="ZYtfopNxkrqRDGpPrKDOI"  >
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="ZYtfopNxkrqRDGpPrKDOI">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 4; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -30 -100 L 30 -100 L 30 100 L -30 100 z" stroke-linecap="round" />
        </a>
    </g>
    @endforelse




    @forelse ( $siteplan->where('code_product', 'RjkyOqu27MHeWkku4XtSL') as $hasil)
    <g transform="matrix(1 0 0 1 265.45 198.22)" id="RjkyOqu27MHeWkku4XtSL"  >
        @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
            <path style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 4; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-30, -100)" d="M 0 0 L 60 0 L 60 200 L 0 200 z" stroke-linecap="round" />
        @elseif ($hasil->status == 'Terjual')
            <path style="fill:#f50505; stroke: rgb(0,0,0); stroke-width: 4; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-30, -100)" d="M 0 0 L 60 0 L 60 200 L 0 200 z" stroke-linecap="round" />
        @elseif ($hasil->status == 'Tersedia')
        <a href="#" data-toggle="modal" data-target="#modalBooking-RjkyOqu27MHeWkku4XtSL">
            <path style="sfill: #f8f8f8; troke: rgb(0,0,0); stroke-width: 4; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-30, -100)" d="M 0 0 L 60 0 L 60 200 L 0 200 z" stroke-linecap="round" />
        </a>
        @endif
    </g>
    @empty
    <g transform="matrix(1 0 0 1 265.45 198.22)" id="RjkyOqu27MHeWkku4XtSL"  >
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="RjkyOqu27MHeWkku4XtSL">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 4; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-30, -100)" d="M 0 0 L 60 0 L 60 200 L 0 200 z" stroke-linecap="round" />
        </a>
    </g>
    @endforelse

    @forelse ( $siteplan->where('code_product', '43Sqxm0ggAT6qgMyFtEnH') as $hasil)
    <g transform="matrix(1 0 0 1 325.45 198.22)" id="43Sqxm0ggAT6qgMyFtEnH"  >
        @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
            <path style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 4; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-30, -100)" d="M 0 0 L 60 0 L 60 200 L 0 200 z" stroke-linecap="round" />
        @elseif ($hasil->status == 'Terjual')
            <path style="fill:#f50505; stroke: rgb(0,0,0); stroke-width: 4; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-30, -100)" d="M 0 0 L 60 0 L 60 200 L 0 200 z" stroke-linecap="round" />
        @elseif ($hasil->status == 'Tersedia')
        <a href="#" data-toggle="modal" data-target="#modalBooking-43Sqxm0ggAT6qgMyFtEnH">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 4; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-30, -100)" d="M 0 0 L 60 0 L 60 200 L 0 200 z" stroke-linecap="round" />
        </a>
        @endif
    </g>
    @empty
    <g transform="matrix(1 0 0 1 325.45 198.22)" id="43Sqxm0ggAT6qgMyFtEnH"  >
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="43Sqxm0ggAT6qgMyFtEnH">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 4; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-30, -100)" d="M 0 0 L 60 0 L 60 200 L 0 200 z" stroke-linecap="round" />
        </a>
    </g>
    @endforelse


    <g transform="matrix(0.98 0 0 1.58 250.09 48.72)" id="UjK6ZAJBBdwZWvQEodrb5"  >
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="UjK6ZAJBBdwZWvQEodrb5">
            <path style="stroke: rgb(0, 255, 153); stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(77,77,77); fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -254.53259 -30 L 254.53259 -30 L 254.53259 30 L -254.53259 30 z" stroke-linecap="round" />
        </a>
    </g>
    <g transform="matrix(0 -1 1 0 145.22 198.22)" style="" id="Ro2RGNHZtKk3fLTv6WAXG"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="25" font-style="normal" font-weight="700" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-54.97" y="8.92" >RUKO A1</tspan></text>
    </g>
    <g transform="matrix(0 -1 1 0 205.22 198.22)" style="" id="vudO9W2hy0W6RujzuUGAa"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="25" font-style="normal" font-weight="700" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-54.97" y="8.92" >RUKO A2</tspan></text>
    </g>
    <g transform="matrix(0 -1 1 0 265.45 198.22)" style="" id="Xzw2lrJJg2ZheYm46HybT"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="25" font-style="normal" font-weight="700" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-54.97" y="8.92" >RUKO A3</tspan></text>
    </g>
    <g transform="matrix(0 -1 1 0 325.45 198.22)" style="" id="Pj_IxlPZwkwQj6Q0EuIEK"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="25" font-style="normal" font-weight="700" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-54.97" y="8.92" >RUKO A4</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 235.45 339.22)" style="" id="wiokqghcAgb2C5rVM6YXx"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="25" font-style="normal" font-weight="700" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-64.66" y="7.98" >Kavling B1</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 235.45 419.22)" style="" id="SHhjwNye7XaEQVxyVA3JM"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="25" font-style="normal" font-weight="700" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-64.66" y="7.98" >Kavling B2</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 235.45 499.89)" style="" id="eN7O24yZP17xIvF3grIHr"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="25" font-style="normal" font-weight="700" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-64.66" y="7.98" >Kavling B3</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 235.45 581.72)" style="" id="GbuE5xIqkX9w8t_mh6QWb"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="25" font-style="normal" font-weight="700" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-64.66" y="7.98" >Kavling B4</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 237.87 659.89)" style="" id="kvwMtItCLoFCJzU3rv_wS"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="25" font-style="normal" font-weight="700" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-64.66" y="7.98" >Kavling B5</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 235.45 739.89)" style="" id="NjKXXXqfwxPiCNzZsN01Z"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="25" font-style="normal" font-weight="700" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-64.66" y="7.98" >Kavling B6</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 235.45 820.55)" style="" id="3yW2cF5JIcnJfIiImJ96V"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="25" font-style="normal" font-weight="700" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-64.66" y="7.98" >Kavling B7</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 237.87 900.55)" style="" id="DBj3n8Xx1A-nNKlFIcY9J"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="25" font-style="normal" font-weight="700" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-64.66" y="7.98" >Kavling B8</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 235.22 981.22)" style="" id="nadMN-dXEI31wquBaVGe-"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="25" font-style="normal" font-weight="700" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-64.66" y="7.98" >Kavling B9</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 235.22 1061.22)" style="" id="tblwpgUGFzeiZzjyQAHvB"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="25" font-style="normal" font-weight="700" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-71.81" y="7.98" >Kavling B10</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 235.22 1141.88)" style="" id="C-QuCHwAFeBDU2npP8fd7"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="25" font-style="normal" font-weight="700" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-71.81" y="7.98" >Kavling B11</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 235.22 1221.88)" style="" id="kQAWMU2gDTIcSME6P8jEj"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="25" font-style="normal" font-weight="700" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-71.81" y="7.98" >Kavling B12</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 235.22 1301.88)" style="" id="rG8UnavONexUccuNhukMb"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="25" font-style="normal" font-weight="700" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-71.81" y="7.98" >Kavling B13</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 235.22 1381.88)" style="" id="OackNjtbhWjonG1xrw4qG"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="25" font-style="normal" font-weight="700" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-71.81" y="7.98" >Kavling B14</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 237.87 1462.54)" style="" id="XQTFpvRm2u_6y75IrjJIl"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="25" font-style="normal" font-weight="700" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-71.81" y="7.98" >Kavling B15</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 232.81 1542.54)" style="" id="WyVVy-NCUcKIabwhgZPNG"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="25" font-style="normal" font-weight="700" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-71.81" y="7.98" >Kavling B16</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 237.87 1623.04)" style="" id="ybhuUIUaxd7haJkQdpfj0"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="25" font-style="normal" font-weight="700" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-71.81" y="7.98" >Kavling B17</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 232.81 1703.04)" style="" id="Oakpv339sYuv5udSB33Gj"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="25" font-style="normal" font-weight="700" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-71.81" y="7.98" >Kavling B18</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 235.45 1783.7)" style="" id="TGPOEnFUTqpKnshSI7Zme"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="25" font-style="normal" font-weight="700" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-71.81" y="7.98" >Kavling B19</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 235.45 1863.7)" style="" id="aLUzhMQCOUrtu_Kv_BSB9"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="25" font-style="normal" font-weight="700" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-71.81" y="7.98" >Kavling B20</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 235.45 1943.7)" style="" id="TTG5xFIqi0cuSN7XWpmVT"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="25" font-style="normal" font-weight="700" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-71.81" y="7.98" >Kavling B21</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 235.45 2023.7)" style="" id="9vZx0yd1enoRiMZbdczah"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="25" font-style="normal" font-weight="700" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-71.81" y="7.98" >Kavling B22</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 232.81 2104.36)" style="" id="XOESbm1yIog_uqY2QS05i"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="25" font-style="normal" font-weight="700" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-71.81" y="7.98" >Kavling B23</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 235.45 2184.36)" style="" id="v1uyUlc49xbNOCBqIVfB5"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="25" font-style="normal" font-weight="700" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-71.81" y="7.98" >Kavling B24</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 235.7 2265.36)" style="" id="FvuV01XQ8EzsgG-ZhhRw1"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="25" font-style="normal" font-weight="700" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-71.81" y="7.98" >Kavling B25</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 238.34 2346.02)" style="" id="Ji5i4M-Q1qkd-RXY5nZSl"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="25" font-style="normal" font-weight="700" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-71.81" y="7.98" >Kavling B26</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 232.81 2426.02)" style="" id="rWtUuixe9J6XITu7ndBRh"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="25" font-style="normal" font-weight="700" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-71.81" y="7.98" >Kavling B27</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 235.7 2506.02)" style="" id="E9nNKkeK3CIY8u-qtV9RO"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="25" font-style="normal" font-weight="700" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-71.81" y="7.98" >Kavling B28</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 235.7 2586.02)" style="" id="7CpHUKTgxzd8WL6fQeyrc"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="25" font-style="normal" font-weight="700" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-71.81" y="7.98" >Kavling B29</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 238.34 2666.68)" style="" id="XwfKV7-LGSGYx60g9UoSn"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="25" font-style="normal" font-weight="700" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-71.81" y="7.98" >Kavling B30</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 233.28 2746.68)" style="" id="D_tZLWX8Bo4loZdNO92UR"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="25" font-style="normal" font-weight="700" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-71.81" y="7.98" >Kavling B31</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 238.34 2827.18)" style="" id="On1j76L-r3ez32D20OpVY"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="25" font-style="normal" font-weight="700" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-71.81" y="7.98" >Kavling B32</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 233.28 2907.18)" style="" id="JRWm96wtvkOv8fy1hPEny"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="25" font-style="normal" font-weight="700" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-71.81" y="7.98" >Kavling B33</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 235.92 2987.84)" style="" id="5xevs3o0RVGFreDA8P2ys"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="25" font-style="normal" font-weight="700" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-71.81" y="7.98" >Kavling B34</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 235.22 3067.84)" style="" id="rI1ofJm0cQDnj3G2VoA9h"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="25" font-style="normal" font-weight="700" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-71.81" y="7.98" >Kavling B35</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 237.22 3147.84)" style="" id="xA53oC6botcykNTcDAsqU"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="25" font-style="normal" font-weight="700" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-71.81" y="7.98" >Kavling B36</tspan></text>
    </g>
    <g transform="matrix(0 -1 1 0 88.92 2746.68)" style="" id="eHcsSlRtDTipuCHdfE4qo"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="24" font-style="normal" font-weight="700" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(255,255,255); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-86.1" y="5.96" >Jalan Komplek</tspan></text>
    </g>
    <g transform="matrix(0 -1 1 0 88.92 1783.7)" style="" id="CxftmQcBbQnAkJfUDhULL"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="24" font-style="normal" font-weight="700" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(255,255,255); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-86.1" y="5.96" >Jalan Komplek</tspan></text>
    </g>
    <g transform="matrix(0 -1 1 0 88.92 820.55)" style="" id="Q1w9Zkt08z9EzMhch8dNC"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="24" font-style="normal" font-weight="700" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(255,255,255); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-86.1" y="5.96" >Jalan Komplek</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 239.74 48.72)" style="" id="1R8-vIc8PA5pdk4AebMCa"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="30" font-style="normal" font-weight="700" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(255,255,255); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-139.35" y="5.97" >JALAN RASAU JAYA</tspan></text>
    </g>
</svg>
