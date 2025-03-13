
<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="100%"  viewBox="0 0 900 5600" xml:space="preserve">

<g transform="matrix(1.17 0 0 0.12 450 182.77)" id="ppIiptl8ivunTKzsmKOXn"  >
    <path style="stroke: rgb(77,77,77); stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(77,77,77); fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -382.60869 -382.60869 L 382.6087 -382.60869 L 382.6087 382.6087 L -382.60869 382.6087 z" stroke-linecap="round" />
</g>
<g transform="matrix(0 6.79 -0.09 0 632.07 2818.08)" id="tSxc2H8ddJfnk2Qwa-Vcz"  >
    <path style="stroke: rgb(77,77,77); stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(77,77,77); fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -382.60869 -382.60869 L 382.6087 -382.60869 L 382.6087 382.6087 L -382.60869 382.6087 z" stroke-linecap="round" />
</g>
<g transform="matrix(0.62 0 0 1.86 495.16 529.7)" id="5ibVn4XPtWKGAUUU7J_5h"  >
    @forelse ( $siteplan->where('code_product', '5ibVn4XPtWKGAUUU7J_5h') as $hasil)
        @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
            <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill:#ffc107; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -160.86957 -160.86957 L 160.86955999999998 -160.86957 L 160.86955999999998 160.86955999999998 L -160.86957 160.86955999999998 z" stroke-linecap="round" />
        @elseif ($hasil->status == 'Terjual')
            <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill:#f50505; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -160.86957 -160.86957 L 160.86955999999998 -160.86957 L 160.86955999999998 160.86955999999998 L -160.86957 160.86955999999998 z" stroke-linecap="round" />
        @elseif ($hasil->status == 'Tersedia')
        <a href="#" data-toggle="modal" data-target="#modalBooking-5ibVn4XPtWKGAUUU7J_5h">
            <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #ffffff; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -160.86957 -160.86957 L 160.86955999999998 -160.86957 L 160.86955999999998 160.86955999999998 L -160.86957 160.86955999999998 z" stroke-linecap="round" />
        </a>
        @endif
    @empty
     <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="5ibVn4XPtWKGAUUU7J_5h">
        <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #ffffff; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -160.86957 -160.86957 L 160.86955999999998 -160.86957 L 160.86955999999998 160.86955999999998 L -160.86957 160.86955999999998 z" stroke-linecap="round" />
    </a>
    @endforelse
</g>
<g transform="matrix(0.62 0 0 1.86 292.42 529.7)" id="ridfXk1fJu_RrohvC5N3m"  >
    @forelse ( $siteplan->where('code_product', 'ridfXk1fJu_RrohvC5N3m') as $hasil)
        @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
            <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill:#ffc107;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -160.86957 -160.86957 L 160.86955999999998 -160.86957 L 160.86955999999998 160.86955999999998 L -160.86957 160.86955999999998 z" stroke-linecap="round" />
        @elseif ($hasil->status == 'Terjual')
            <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill:#f50505; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -160.86957 -160.86957 L 160.86955999999998 -160.86957 L 160.86955999999998 160.86955999999998 L -160.86957 160.86955999999998 z" stroke-linecap="round" />
        @elseif ($hasil->status == 'Tersedia')
        <a href="#" data-toggle="modal" data-target="#modalBooking-ridfXk1fJu_RrohvC5N3m">
             <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #ffffff; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -160.86957 -160.86957 L 160.86955999999998 -160.86957 L 160.86955999999998 160.86955999999998 L -160.86957 160.86955999999998 z" stroke-linecap="round" />
        </a>
        @endif
    @empty
    <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="ridfXk1fJu_RrohvC5N3m">
         <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #ffffff; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -160.86957 -160.86957 L 160.86955999999998 -160.86957 L 160.86955999999998 160.86955999999998 L -160.86957 160.86955999999998 z" stroke-linecap="round" />
    </a>
    @endforelse
</g>

<g transform="matrix(1.25 0 0 0.47 394.07 908.09)" id="Iq-aUnV51ihfyyj9XfJAh"  >
    @forelse ( $siteplan->where('code_product', 'Iq-aUnV51ihfyyj9XfJAh') as $hasil)
        @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
            <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill:#ffc107;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -160.86957 -160.86957 L 160.86955999999998 -160.86957 L 160.86955999999998 160.86955999999998 L -160.86957 160.86955999999998 z" stroke-linecap="round" />
        @elseif ($hasil->status == 'Terjual')
            <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill:#f50505; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -160.86957 -160.86957 L 160.86955999999998 -160.86957 L 160.86955999999998 160.86955999999998 L -160.86957 160.86955999999998 z" stroke-linecap="round" />
        @elseif ($hasil->status == 'Tersedia')
        <a href="#" data-toggle="modal" data-target="#modalBooking-Iq-aUnV51ihfyyj9XfJAh">
            <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #ffffff; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -160.86957 -160.86957 L 160.86955999999998 -160.86957 L 160.86955999999998 160.86955999999998 L -160.86957 160.86955999999998 z" stroke-linecap="round" />
        </a>
        @endif
    @empty
    <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="Iq-aUnV51ihfyyj9XfJAh">
        <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #ffffff; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -160.86957 -160.86957 L 160.86955999999998 -160.86957 L 160.86955999999998 160.86955999999998 L -160.86957 160.86955999999998 z" stroke-linecap="round" />
    </a>
    @endforelse
</g>
<g transform="matrix(1.25 0 0 0.47 394.07 1059.7)" id="yQvyG97D-6TKNfKQOLjfa"  >
    @forelse ( $siteplan->where('code_product', 'yQvyG97D-6TKNfKQOLjfa') as $hasil)
        @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
            <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill:#ffc107;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -160.86957 -160.86957 L 160.86955999999998 -160.86957 L 160.86955999999998 160.86955999999998 L -160.86957 160.86955999999998 z" stroke-linecap="round" />
        @elseif ($hasil->status == 'Terjual')
            <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill:#f50505; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -160.86957 -160.86957 L 160.86955999999998 -160.86957 L 160.86955999999998 160.86955999999998 L -160.86957 160.86955999999998 z" stroke-linecap="round" />
        @elseif ($hasil->status == 'Tersedia')
        <a href="#" data-toggle="modal" data-target="#modalBooking-yQvyG97D-6TKNfKQOLjfa">
            <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #ffffff; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -160.86957 -160.86957 L 160.86955999999998 -160.86957 L 160.86955999999998 160.86955999999998 L -160.86957 160.86955999999998 z" stroke-linecap="round" />
        </a>
        @endif
    @empty
    <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="yQvyG97D-6TKNfKQOLjfa">
        <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #ffffff; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -160.86957 -160.86957 L 160.86955999999998 -160.86957 L 160.86955999999998 160.86955999999998 L -160.86957 160.86955999999998 z" stroke-linecap="round" />
    </a>
    @endforelse
</g>
<g transform="matrix(1.25 0 0 0.47 394.07 1212.92)" id="aWJm-OmlJAnoRYxEd35X_"  >
    @forelse ( $siteplan->where('code_product', 'aWJm-OmlJAnoRYxEd35X_') as $hasil)
        @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
            <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill:#ffc107;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -160.86957 -160.86957 L 160.86955999999998 -160.86957 L 160.86955999999998 160.86955999999998 L -160.86957 160.86955999999998 z" stroke-linecap="round" />
        @elseif ($hasil->status == 'Terjual')
            <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill:#f50505; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -160.86957 -160.86957 L 160.86955999999998 -160.86957 L 160.86955999999998 160.86955999999998 L -160.86957 160.86955999999998 z" stroke-linecap="round" />
        @elseif ($hasil->status == 'Tersedia')
        <a href="#" data-toggle="modal" data-target="#modalBooking-aWJm-OmlJAnoRYxEd35X_">
            <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #ffffff; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -160.86957 -160.86957 L 160.86955999999998 -160.86957 L 160.86955999999998 160.86955999999998 L -160.86957 160.86955999999998 z" stroke-linecap="round" />
        </a>
        @endif
    @empty
    <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="aWJm-OmlJAnoRYxEd35X_">
        <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #ffffff; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -160.86957 -160.86957 L 160.86955999999998 -160.86957 L 160.86955999999998 160.86955999999998 L -160.86957 160.86955999999998 z" stroke-linecap="round" />
    </a>
    @endforelse
</g>

<g transform="matrix(1.25 0 0 0.47 394.07 1364.53)" id="zzr06Yjk8pAipY-3ZRA4c"  >
    @forelse ( $siteplan->where('code_product', 'zzr06Yjk8pAipY-3ZRA4c') as $hasil)
        @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
            <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill:#ffc107;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -160.86957 -160.86957 L 160.86955999999998 -160.86957 L 160.86955999999998 160.86955999999998 L -160.86957 160.86955999999998 z" stroke-linecap="round" />
        @elseif ($hasil->status == 'Terjual')
            <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill:#f50505; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -160.86957 -160.86957 L 160.86955999999998 -160.86957 L 160.86955999999998 160.86955999999998 L -160.86957 160.86955999999998 z" stroke-linecap="round" />
        @elseif ($hasil->status == 'Tersedia')
        <a href="#" data-toggle="modal" data-target="#modalBooking-zzr06Yjk8pAipY-3ZRA4c">
            <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #ffffff; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -160.86957 -160.86957 L 160.86955999999998 -160.86957 L 160.86955999999998 160.86955999999998 L -160.86957 160.86955999999998 z" stroke-linecap="round" />
        </a>
        @endif
    @empty
    <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="zzr06Yjk8pAipY-3ZRA4c">
        <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #ffffff; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -160.86957 -160.86957 L 160.86955999999998 -160.86957 L 160.86955999999998 160.86955999999998 L -160.86957 160.86955999999998 z" stroke-linecap="round" />
    </a>
    @endforelse
</g>

<g transform="matrix(1.25 0 0 0.47 394.07 1517.74)" id="O61k5PtUnUMDLLBlWOZdp"  >
    @forelse ( $siteplan->where('code_product', 'O61k5PtUnUMDLLBlWOZdp') as $hasil)
        @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
            <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill:#ffc107; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -160.86957 -160.86957 L 160.86955999999998 -160.86957 L 160.86955999999998 160.86955999999998 L -160.86957 160.86955999999998 z" stroke-linecap="round" />
        @elseif ($hasil->status == 'Terjual')
            <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill:#f50505; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -160.86957 -160.86957 L 160.86955999999998 -160.86957 L 160.86955999999998 160.86955999999998 L -160.86957 160.86955999999998 z" stroke-linecap="round" />
        @elseif ($hasil->status == 'Tersedia')
        <a href="#" data-toggle="modal" data-target="#modalBooking-O61k5PtUnUMDLLBlWOZdp">
            <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #ffffff; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -160.86957 -160.86957 L 160.86955999999998 -160.86957 L 160.86955999999998 160.86955999999998 L -160.86957 160.86955999999998 z" stroke-linecap="round" />
        </a>
        @endif
    @empty
    <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="O61k5PtUnUMDLLBlWOZdp">
        <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #ffffff; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -160.86957 -160.86957 L 160.86955999999998 -160.86957 L 160.86955999999998 160.86955999999998 L -160.86957 160.86955999999998 z" stroke-linecap="round" />
    </a>
    @endforelse
</g>

<g transform="matrix(1.25 0 0 0.47 394.07 1669.36)" id="XHZ--PCnaG1DUFLoTPB7E"  >
    @forelse ( $siteplan->where('code_product', 'XHZ--PCnaG1DUFLoTPB7E') as $hasil)
        @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
            <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill:#ffc107;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -160.86957 -160.86957 L 160.86955999999998 -160.86957 L 160.86955999999998 160.86955999999998 L -160.86957 160.86955999999998 z" stroke-linecap="round" />
        @elseif ($hasil->status == 'Terjual')
            <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill:#f50505; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -160.86957 -160.86957 L 160.86955999999998 -160.86957 L 160.86955999999998 160.86955999999998 L -160.86957 160.86955999999998 z" stroke-linecap="round" />
        @elseif ($hasil->status == 'Tersedia')
        <a href="#" data-toggle="modal" data-target="#modalBooking-XHZ--PCnaG1DUFLoTPB7E">
            <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #ffffff; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -160.86957 -160.86957 L 160.86955999999998 -160.86957 L 160.86955999999998 160.86955999999998 L -160.86957 160.86955999999998 z" stroke-linecap="round" />
        </a>
        @endif
    @empty
    <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="XHZ--PCnaG1DUFLoTPB7E">
        <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #ffffff; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -160.86957 -160.86957 L 160.86955999999998 -160.86957 L 160.86955999999998 160.86955999999998 L -160.86957 160.86955999999998 z" stroke-linecap="round" />
    </a>
    @endforelse
</g>

<g transform="matrix(1.25 0 0 0.47 394.07 1822.57)" id="rLRHHdlEJzWtbY8meKEQZ"  >
    @forelse ( $siteplan->where('code_product', 'rLRHHdlEJzWtbY8meKEQZ') as $hasil)
        @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
            <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill:#ffc107;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -160.86957 -160.86957 L 160.86955999999998 -160.86957 L 160.86955999999998 160.86955999999998 L -160.86957 160.86955999999998 z" stroke-linecap="round" />
        @elseif ($hasil->status == 'Terjual')
            <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill:#f50505; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -160.86957 -160.86957 L 160.86955999999998 -160.86957 L 160.86955999999998 160.86955999999998 L -160.86957 160.86955999999998 z" stroke-linecap="round" />
        @elseif ($hasil->status == 'Tersedia')
        <a href="#" data-toggle="modal" data-target="#modalBooking-rLRHHdlEJzWtbY8meKEQZ">
            <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #ffffff; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -160.86957 -160.86957 L 160.86955999999998 -160.86957 L 160.86955999999998 160.86955999999998 L -160.86957 160.86955999999998 z" stroke-linecap="round" />
        </a>
        @endif
    @empty
    <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="rLRHHdlEJzWtbY8meKEQZ">
        <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #ffffff; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -160.86957 -160.86957 L 160.86955999999998 -160.86957 L 160.86955999999998 160.86955999999998 L -160.86957 160.86955999999998 z" stroke-linecap="round" />
    </a>
    @endforelse
</g>

<g transform="matrix(1.25 0 0 0.47 394.07 1974.18)" id="YcNOTTp_xrJ9qXwKCfCVy"  >
    @forelse ( $siteplan->where('code_product', 'YcNOTTp_xrJ9qXwKCfCVy') as $hasil)
        @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
            <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill:#ffc107;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -160.86957 -160.86957 L 160.86955999999998 -160.86957 L 160.86955999999998 160.86955999999998 L -160.86957 160.86955999999998 z" stroke-linecap="round" />
        @elseif ($hasil->status == 'Terjual')
            <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill:#f50505; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -160.86957 -160.86957 L 160.86955999999998 -160.86957 L 160.86955999999998 160.86955999999998 L -160.86957 160.86955999999998 z" stroke-linecap="round" />
        @elseif ($hasil->status == 'Tersedia')
        <a href="#" data-toggle="modal" data-target="#modalBooking-YcNOTTp_xrJ9qXwKCfCVy">
            <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #ffffff; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -160.86957 -160.86957 L 160.86955999999998 -160.86957 L 160.86955999999998 160.86955999999998 L -160.86957 160.86955999999998 z" stroke-linecap="round" />
        </a>
        @endif
    @empty
    <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="YcNOTTp_xrJ9qXwKCfCVy">
        <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #ffffff; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -160.86957 -160.86957 L 160.86955999999998 -160.86957 L 160.86955999999998 160.86955999999998 L -160.86957 160.86955999999998 z" stroke-linecap="round" />
    </a>
    @endforelse
</g>

<g transform="matrix(1.25 0 0 0.47 394.07 2127.4)" id="-HW2mI2koyYTWa7d4dVfq"  >
    @forelse ( $siteplan->where('code_product', '-HW2mI2koyYTWa7d4dVfq') as $hasil)
        @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
            <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill:#ffc107;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -160.86957 -160.86957 L 160.86955999999998 -160.86957 L 160.86955999999998 160.86955999999998 L -160.86957 160.86955999999998 z" stroke-linecap="round" />
        @elseif ($hasil->status == 'Terjual')
            <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill:#f50505; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -160.86957 -160.86957 L 160.86955999999998 -160.86957 L 160.86955999999998 160.86955999999998 L -160.86957 160.86955999999998 z" stroke-linecap="round" />
        @elseif ($hasil->status == 'Tersedia')
        <a href="#" data-toggle="modal" data-target="#modalBooking--HW2mI2koyYTWa7d4dVfq">
            <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #ffffff; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -160.86957 -160.86957 L 160.86955999999998 -160.86957 L 160.86955999999998 160.86955999999998 L -160.86957 160.86955999999998 z" stroke-linecap="round" />
        </a>
        @endif
    @empty
    <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="-HW2mI2koyYTWa7d4dVfq">
        <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #ffffff; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -160.86957 -160.86957 L 160.86955999999998 -160.86957 L 160.86955999999998 160.86955999999998 L -160.86957 160.86955999999998 z" stroke-linecap="round" />
    </a>
    @endforelse
</g>

<g transform="matrix(1.25 0 0 0.47 394.07 2279.01)" id="QcQE0BYSEx2-D6aN763xr"  >
    @forelse ( $siteplan->where('code_product', 'QcQE0BYSEx2-D6aN763xr') as $hasil)
        @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
            <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill:#ffc107;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -160.86957 -160.86957 L 160.86955999999998 -160.86957 L 160.86955999999998 160.86955999999998 L -160.86957 160.86955999999998 z" stroke-linecap="round" />
        @elseif ($hasil->status == 'Terjual')
            <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill:#f50505; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -160.86957 -160.86957 L 160.86955999999998 -160.86957 L 160.86955999999998 160.86955999999998 L -160.86957 160.86955999999998 z" stroke-linecap="round" />
        @elseif ($hasil->status == 'Tersedia')
        <a href="#" data-toggle="modal" data-target="#modalBooking-QcQE0BYSEx2-D6aN763xr">
            <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #ffffff; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -160.86957 -160.86957 L 160.86955999999998 -160.86957 L 160.86955999999998 160.86955999999998 L -160.86957 160.86955999999998 z" stroke-linecap="round" />
        </a>
        @endif
    @empty
    <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="QcQE0BYSEx2-D6aN763xr">
        <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #ffffff; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -160.86957 -160.86957 L 160.86955999999998 -160.86957 L 160.86955999999998 160.86955999999998 L -160.86957 160.86955999999998 z" stroke-linecap="round" />
    </a>
    @endforelse
</g>

<g transform="matrix(1.25 0 0 0.47 394.07 2433.23)" id="-22mOmpL3lKF63KEchq65"  >
    @forelse ( $siteplan->where('code_product', '-22mOmpL3lKF63KEchq65') as $hasil)
        @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
            <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill:#ffc107; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -160.86957 -160.86957 L 160.86955999999998 -160.86957 L 160.86955999999998 160.86955999999998 L -160.86957 160.86955999999998 z" stroke-linecap="round" />
        @elseif ($hasil->status == 'Terjual')
            <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill:#f50505; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -160.86957 -160.86957 L 160.86955999999998 -160.86957 L 160.86955999999998 160.86955999999998 L -160.86957 160.86955999999998 z" stroke-linecap="round" />
        @elseif ($hasil->status == 'Tersedia')
        <a href="#" data-toggle="modal" data-target="#modalBooking--22mOmpL3lKF63KEchq65">
            <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #ffffff; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -160.86957 -160.86957 L 160.86955999999998 -160.86957 L 160.86955999999998 160.86955999999998 L -160.86957 160.86955999999998 z" stroke-linecap="round" />
        </a>
        @endif
    @empty
    <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="-22mOmpL3lKF63KEchq65">
        <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #ffffff; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -160.86957 -160.86957 L 160.86955999999998 -160.86957 L 160.86955999999998 160.86955999999998 L -160.86957 160.86955999999998 z" stroke-linecap="round" />
    </a>
    @endforelse
</g>

<g transform="matrix(1.25 0 0 0.47 394.07 3804.15)" id="KPaaUZdiuI2-vVxQhpQZl"  >
    @forelse ( $siteplan->where('code_product', 'KPaaUZdiuI2-vVxQhpQZl') as $hasil)
        @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
            <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill:#ffc107;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -160.86957 -160.86957 L 160.86955999999998 -160.86957 L 160.86955999999998 160.86955999999998 L -160.86957 160.86955999999998 z" stroke-linecap="round" />
        @elseif ($hasil->status == 'Terjual')
            <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill:#f50505; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -160.86957 -160.86957 L 160.86955999999998 -160.86957 L 160.86955999999998 160.86955999999998 L -160.86957 160.86955999999998 z" stroke-linecap="round" />
        @elseif ($hasil->status == 'Tersedia')
        <a href="#" data-toggle="modal" data-target="#modalBooking-KPaaUZdiuI2-vVxQhpQZl">
            <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #ffffff; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -160.86957 -160.86957 L 160.86955999999998 -160.86957 L 160.86955999999998 160.86955999999998 L -160.86957 160.86955999999998 z" stroke-linecap="round" />
        </a>
        @endif
    @empty
    <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="KPaaUZdiuI2-vVxQhpQZl">
        <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #ffffff; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -160.86957 -160.86957 L 160.86955999999998 -160.86957 L 160.86955999999998 160.86955999999998 L -160.86957 160.86955999999998 z" stroke-linecap="round" />
    </a>
    @endforelse
</g>

<g transform="matrix(1.25 0 0 0.47 394.07 2584.83)" id="YmqdhHebSyJOXztmsTX0M"  >
    @forelse ( $siteplan->where('code_product', 'YmqdhHebSyJOXztmsTX0M') as $hasil)
        @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
            <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill:#ffc107;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -160.86957 -160.86957 L 160.86955999999998 -160.86957 L 160.86955999999998 160.86955999999998 L -160.86957 160.86955999999998 z" stroke-linecap="round" />
        @elseif ($hasil->status == 'Terjual')
            <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill:#f50505; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -160.86957 -160.86957 L 160.86955999999998 -160.86957 L 160.86955999999998 160.86955999999998 L -160.86957 160.86955999999998 z" stroke-linecap="round" />
        @elseif ($hasil->status == 'Tersedia')
        <a href="#" data-toggle="modal" data-target="#modalBooking-YmqdhHebSyJOXztmsTX0M">
            <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #ffffff; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -160.86957 -160.86957 L 160.86955999999998 -160.86957 L 160.86955999999998 160.86955999999998 L -160.86957 160.86955999999998 z" stroke-linecap="round" />
        </a>
        @endif
    @empty
    <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="YmqdhHebSyJOXztmsTX0M">
        <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #ffffff; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -160.86957 -160.86957 L 160.86955999999998 -160.86957 L 160.86955999999998 160.86955999999998 L -160.86957 160.86955999999998 z" stroke-linecap="round" />
    </a>
    @endforelse
</g>

<g transform="matrix(1.25 0 0 0.47 394.07 3652.54)" id="QtF-lWCK--nBBPz7fBc0k"  >
    @forelse ( $siteplan->where('code_product', 'QtF-lWCK--nBBPz7fBc0k') as $hasil)
        @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
            <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill:#ffc107;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -160.86957 -160.86957 L 160.86955999999998 -160.86957 L 160.86955999999998 160.86955999999998 L -160.86957 160.86955999999998 z" stroke-linecap="round" />
        @elseif ($hasil->status == 'Terjual')
            <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill:#f50505; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -160.86957 -160.86957 L 160.86955999999998 -160.86957 L 160.86955999999998 160.86955999999998 L -160.86957 160.86955999999998 z" stroke-linecap="round" />
        @elseif ($hasil->status == 'Tersedia')
        <a href="#" data-toggle="modal" data-target="#modalBooking-QtF-lWCK--nBBPz7fBc0k">
            <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #ffffff; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -160.86957 -160.86957 L 160.86955999999998 -160.86957 L 160.86955999999998 160.86955999999998 L -160.86957 160.86955999999998 z" stroke-linecap="round" />
        </a>
        @endif
    @empty
    <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="QtF-lWCK--nBBPz7fBc0k">
        <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #ffffff; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -160.86957 -160.86957 L 160.86955999999998 -160.86957 L 160.86955999999998 160.86955999999998 L -160.86957 160.86955999999998 z" stroke-linecap="round" />
    </a>
    @endforelse
</g>

<g transform="matrix(1.25 0 0 0.47 394.07 2738.05)" id="fvW-fHWdVA-zzGFtBo39R"  >
    @forelse ( $siteplan->where('code_product', 'fvW-fHWdVA-zzGFtBo39R') as $hasil)
        @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
            <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill:#ffc107; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -160.86957 -160.86957 L 160.86955999999998 -160.86957 L 160.86955999999998 160.86955999999998 L -160.86957 160.86955999999998 z" stroke-linecap="round" />
        @elseif ($hasil->status == 'Terjual')
            <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill:#f50505; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -160.86957 -160.86957 L 160.86955999999998 -160.86957 L 160.86955999999998 160.86955999999998 L -160.86957 160.86955999999998 z" stroke-linecap="round" />
        @elseif ($hasil->status == 'Tersedia')
        <a href="#" data-toggle="modal" data-target="#modalBooking-fvW-fHWdVA-zzGFtBo39R">
            <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #ffffff; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -160.86957 -160.86957 L 160.86955999999998 -160.86957 L 160.86955999999998 160.86955999999998 L -160.86957 160.86955999999998 z" stroke-linecap="round" />
        </a>
        @endif
    @empty
    <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="fvW-fHWdVA-zzGFtBo39R">
        <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #ffffff; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -160.86957 -160.86957 L 160.86955999999998 -160.86957 L 160.86955999999998 160.86955999999998 L -160.86957 160.86955999999998 z" stroke-linecap="round" />
    </a>
    @endforelse
</g>

<g transform="matrix(1.25 0 0 0.47 394.07 3499.32)" id="HvJFM7lpDt8PUj1klbdgJ"  >
    @forelse ( $siteplan->where('code_product', 'HvJFM7lpDt8PUj1klbdgJ') as $hasil)
        @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
            <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill:#ffc107;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -160.86957 -160.86957 L 160.86955999999998 -160.86957 L 160.86955999999998 160.86955999999998 L -160.86957 160.86955999999998 z" stroke-linecap="round" />
        @elseif ($hasil->status == 'Terjual')
            <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill:#f50505; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -160.86957 -160.86957 L 160.86955999999998 -160.86957 L 160.86955999999998 160.86955999999998 L -160.86957 160.86955999999998 z" stroke-linecap="round" />
        @elseif ($hasil->status == 'Tersedia')
        <a href="#" data-toggle="modal" data-target="#modalBooking-HvJFM7lpDt8PUj1klbdgJ">
            <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #ffffff; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -160.86957 -160.86957 L 160.86955999999998 -160.86957 L 160.86955999999998 160.86955999999998 L -160.86957 160.86955999999998 z" stroke-linecap="round" />
        </a>
        @endif
    @empty
    <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="HvJFM7lpDt8PUj1klbdgJ">
        <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #ffffff; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -160.86957 -160.86957 L 160.86955999999998 -160.86957 L 160.86955999999998 160.86955999999998 L -160.86957 160.86955999999998 z" stroke-linecap="round" />
    </a>
    @endforelse
</g>

<g transform="matrix(1.25 0 0 0.47 394.07 2889.66)" id="C3BXFaiyUtkKmerWi6_Kf"  >
    @forelse ( $siteplan->where('code_product', 'C3BXFaiyUtkKmerWi6_Kf') as $hasil)
        @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
            <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill:#ffc107;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -160.86957 -160.86957 L 160.86955999999998 -160.86957 L 160.86955999999998 160.86955999999998 L -160.86957 160.86955999999998 z" stroke-linecap="round" />
        @elseif ($hasil->status == 'Terjual')
            <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill:#f50505; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -160.86957 -160.86957 L 160.86955999999998 -160.86957 L 160.86955999999998 160.86955999999998 L -160.86957 160.86955999999998 z" stroke-linecap="round" />
        @elseif ($hasil->status == 'Tersedia')
        <a href="#" data-toggle="modal" data-target="#modalBooking-C3BXFaiyUtkKmerWi6_Kf">
            <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #ffffff; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -160.86957 -160.86957 L 160.86955999999998 -160.86957 L 160.86955999999998 160.86955999999998 L -160.86957 160.86955999999998 z" stroke-linecap="round" />
        </a>
        @endif
    @empty
    <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="C3BXFaiyUtkKmerWi6_Kf">
        <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #ffffff; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -160.86957 -160.86957 L 160.86955999999998 -160.86957 L 160.86955999999998 160.86955999999998 L -160.86957 160.86955999999998 z" stroke-linecap="round" />
    </a>
    @endforelse
</g>

<g transform="matrix(1.25 0 0 0.47 394.07 3347.71)" id="iO7RmBw8lM18pJhOIYMqu"  >
    @forelse ( $siteplan->where('code_product', 'iO7RmBw8lM18pJhOIYMqu') as $hasil)
        @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
            <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill:#ffc107;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -160.86957 -160.86957 L 160.86955999999998 -160.86957 L 160.86955999999998 160.86955999999998 L -160.86957 160.86955999999998 z" stroke-linecap="round" />
        @elseif ($hasil->status == 'Terjual')
            <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill:#f50505; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -160.86957 -160.86957 L 160.86955999999998 -160.86957 L 160.86955999999998 160.86955999999998 L -160.86957 160.86955999999998 z" stroke-linecap="round" />
        @elseif ($hasil->status == 'Tersedia')
        <a href="#" data-toggle="modal" data-target="#modalBooking-iO7RmBw8lM18pJhOIYMqu">
            <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #ffffff; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -160.86957 -160.86957 L 160.86955999999998 -160.86957 L 160.86955999999998 160.86955999999998 L -160.86957 160.86955999999998 z" stroke-linecap="round" />
        </a>
        @endif
    @empty
    <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="iO7RmBw8lM18pJhOIYMqu">
        <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #ffffff; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -160.86957 -160.86957 L 160.86955999999998 -160.86957 L 160.86955999999998 160.86955999999998 L -160.86957 160.86955999999998 z" stroke-linecap="round" />
    </a>
    @endforelse
</g>
<g transform="matrix(1.25 0 0 0.47 394.07 3042.88)" id="EYxYk53DAG8BlWqGb4mR6"  >
    @forelse ( $siteplan->where('code_product', 'EYxYk53DAG8BlWqGb4mR6') as $hasil)
        @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
            <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill:#ffc107;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -160.86957 -160.86957 L 160.86955999999998 -160.86957 L 160.86955999999998 160.86955999999998 L -160.86957 160.86955999999998 z" stroke-linecap="round" />
        @elseif ($hasil->status == 'Terjual')
            <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill:#f50505; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -160.86957 -160.86957 L 160.86955999999998 -160.86957 L 160.86955999999998 160.86955999999998 L -160.86957 160.86955999999998 z" stroke-linecap="round" />
        @elseif ($hasil->status == 'Tersedia')
        <a href="#" data-toggle="modal" data-target="#modalBooking-EYxYk53DAG8BlWqGb4mR6">
            <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #ffffff; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -160.86957 -160.86957 L 160.86955999999998 -160.86957 L 160.86955999999998 160.86955999999998 L -160.86957 160.86955999999998 z" stroke-linecap="round" />
        </a>
        @endif
    @empty
     <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="EYxYk53DAG8BlWqGb4mR6">
        <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #ffffff; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -160.86957 -160.86957 L 160.86955999999998 -160.86957 L 160.86955999999998 160.86955999999998 L -160.86957 160.86955999999998 z" stroke-linecap="round" />
    </a>
    @endforelse
</g>

<g transform="matrix(1.25 0 0 0.47 394.07 3194.5)" id="DcVZmySbWJQULvKZeu4Ko"  >
    @forelse ( $siteplan->where('code_product', 'DcVZmySbWJQULvKZeu4Ko') as $hasil)
        @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
            <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill:#ffc107;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -160.86957 -160.86957 L 160.86955999999998 -160.86957 L 160.86955999999998 160.86955999999998 L -160.86957 160.86955999999998 z" stroke-linecap="round" />
        @elseif ($hasil->status == 'Terjual')
            <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill:#f50505; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -160.86957 -160.86957 L 160.86955999999998 -160.86957 L 160.86955999999998 160.86955999999998 L -160.86957 160.86955999999998 z" stroke-linecap="round" />
        @elseif ($hasil->status == 'Tersedia')
        <a href="#" data-toggle="modal" data-target="#modalBooking-DcVZmySbWJQULvKZeu4Ko">
            <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #ffffff; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -160.86957 -160.86957 L 160.86955999999998 -160.86957 L 160.86955999999998 160.86955999999998 L -160.86957 160.86955999999998 z" stroke-linecap="round" />
        </a>
        @endif
    @empty
    <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="DcVZmySbWJQULvKZeu4Ko">
        <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #ffffff; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -160.86957 -160.86957 L 160.86955999999998 -160.86957 L 160.86955999999998 160.86955999999998 L -160.86957 160.86955999999998 z" stroke-linecap="round" />
    </a>
    @endforelse
</g>

<g transform="matrix(1.25 0 0 0.47 394.35 3958.37)" id="F05b2Pbu0R-F3n5C1Uylk"  >
    @forelse ( $siteplan->where('code_product', 'F05b2Pbu0R-F3n5C1Uylk') as $hasil)
        @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
            <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill:#ffc107; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -160.86957 -160.86957 L 160.86955999999998 -160.86957 L 160.86955999999998 160.86955999999998 L -160.86957 160.86955999999998 z" stroke-linecap="round" />
        @elseif ($hasil->status == 'Terjual')
            <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill:#f50505; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -160.86957 -160.86957 L 160.86955999999998 -160.86957 L 160.86955999999998 160.86955999999998 L -160.86957 160.86955999999998 z" stroke-linecap="round" />
        @elseif ($hasil->status == 'Tersedia')
        <a href="#" data-toggle="modal" data-target="#modalBooking-F05b2Pbu0R-F3n5C1Uylk">
            <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #ffffff; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -160.86957 -160.86957 L 160.86955999999998 -160.86957 L 160.86955999999998 160.86955999999998 L -160.86957 160.86955999999998 z" stroke-linecap="round" />
        </a>
        @endif
    @empty
    <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="F05b2Pbu0R-F3n5C1Uylk">
        <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #ffffff; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -160.86957 -160.86957 L 160.86955999999998 -160.86957 L 160.86955999999998 160.86955999999998 L -160.86957 160.86955999999998 z" stroke-linecap="round" />
    </a>
    @endforelse
</g>

<g transform="matrix(1.25 0 0 0.47 394.35 4568.01)" id="eUiV4sPabUBpeRMBCpaLu"  >
    @forelse ( $siteplan->where('code_product', 'eUiV4sPabUBpeRMBCpaLu') as $hasil)
        @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
            <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill:#ffc107; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -160.86957 -160.86957 L 160.86955999999998 -160.86957 L 160.86955999999998 160.86955999999998 L -160.86957 160.86955999999998 z" stroke-linecap="round" />
        @elseif ($hasil->status == 'Terjual')
            <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill:#f50505; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -160.86957 -160.86957 L 160.86955999999998 -160.86957 L 160.86955999999998 160.86955999999998 L -160.86957 160.86955999999998 z" stroke-linecap="round" />
        @elseif ($hasil->status == 'Tersedia')
        <a href="#" data-toggle="modal" data-target="#modalBooking-eUiV4sPabUBpeRMBCpaLu">
            <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #ffffff; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -160.86957 -160.86957 L 160.86955999999998 -160.86957 L 160.86955999999998 160.86955999999998 L -160.86957 160.86955999999998 z" stroke-linecap="round" />
        </a>
        @endif
    @empty
    <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="eUiV4sPabUBpeRMBCpaLu">
        <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #ffffff; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -160.86957 -160.86957 L 160.86955999999998 -160.86957 L 160.86955999999998 160.86955999999998 L -160.86957 160.86955999999998 z" stroke-linecap="round" />
    </a>
    @endforelse
</g>
<g transform="matrix(1.25 0 0 0.47 394.35 4111.57)" id="eQKd6Z2SsqTR5K9XleMKA"  >
    @forelse ( $siteplan->where('code_product', 'eQKd6Z2SsqTR5K9XleMKA') as $hasil)
        @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
            <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill:#ffc107;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -160.86957 -160.86957 L 160.86955999999998 -160.86957 L 160.86955999999998 160.86955999999998 L -160.86957 160.86955999999998 z" stroke-linecap="round" />
        @elseif ($hasil->status == 'Terjual')
            <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill:#f50505; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -160.86957 -160.86957 L 160.86955999999998 -160.86957 L 160.86955999999998 160.86955999999998 L -160.86957 160.86955999999998 z" stroke-linecap="round" />
        @elseif ($hasil->status == 'Tersedia')
        <a href="#" data-toggle="modal" data-target="#modalBooking-eQKd6Z2SsqTR5K9XleMKA">
            <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #ffffff; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -160.86957 -160.86957 L 160.86955999999998 -160.86957 L 160.86955999999998 160.86955999999998 L -160.86957 160.86955999999998 z" stroke-linecap="round" />
        </a>
        @endif
    @empty
    <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="eQKd6Z2SsqTR5K9XleMKA">
        <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #ffffff; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -160.86957 -160.86957 L 160.86955999999998 -160.86957 L 160.86955999999998 160.86955999999998 L -160.86957 160.86955999999998 z" stroke-linecap="round" />
    </a>
    @endforelse
</g>

<g transform="matrix(1.25 0 0 0.47 394.35 4416.41)" id="X__OD45cTsCpI5MAwD5jM"  >
    @forelse ( $siteplan->where('code_product', 'X__OD45cTsCpI5MAwD5jM') as $hasil)
        @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
            <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill:#ffc107;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -160.86957 -160.86957 L 160.86955999999998 -160.86957 L 160.86955999999998 160.86955999999998 L -160.86957 160.86955999999998 z" stroke-linecap="round" />
        @elseif ($hasil->status == 'Terjual')
            <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill:#f50505; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -160.86957 -160.86957 L 160.86955999999998 -160.86957 L 160.86955999999998 160.86955999999998 L -160.86957 160.86955999999998 z" stroke-linecap="round" />
        @elseif ($hasil->status == 'Tersedia')
        <a href="#" data-toggle="modal" data-target="#modalBooking-X__OD45cTsCpI5MAwD5jM">
            <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #ffffff; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -160.86957 -160.86957 L 160.86955999999998 -160.86957 L 160.86955999999998 160.86955999999998 L -160.86957 160.86955999999998 z" stroke-linecap="round" />
        </a>
        @endif
    @empty
    <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="X__OD45cTsCpI5MAwD5jM">
        <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #ffffff; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -160.86957 -160.86957 L 160.86955999999998 -160.86957 L 160.86955999999998 160.86955999999998 L -160.86957 160.86955999999998 z" stroke-linecap="round" />
    </a>
    @endforelse
</g>

<g transform="matrix(1.25 0 0 0.47 394.35 4263.18)" id="G6uyyua7BDWCB_5nyfpR6"  >
    @forelse ( $siteplan->where('code_product', 'G6uyyua7BDWCB_5nyfpR6') as $hasil)
        @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
            <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill:#ffc107;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -160.86957 -160.86957 L 160.86955999999998 -160.86957 L 160.86955999999998 160.86955999999998 L -160.86957 160.86955999999998 z" stroke-linecap="round" />
        @elseif ($hasil->status == 'Terjual')
            <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill:#f50505; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -160.86957 -160.86957 L 160.86955999999998 -160.86957 L 160.86955999999998 160.86955999999998 L -160.86957 160.86955999999998 z" stroke-linecap="round" />
        @elseif ($hasil->status == 'Tersedia')
        <a href="#" data-toggle="modal" data-target="#modalBooking-G6uyyua7BDWCB_5nyfpR6">
            <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #ffffff; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -160.86957 -160.86957 L 160.86955999999998 -160.86957 L 160.86955999999998 160.86955999999998 L -160.86957 160.86955999999998 z" stroke-linecap="round" />
        </a>
        @endif
    @empty
    <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="G6uyyua7BDWCB_5nyfpR6">
        <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #ffffff; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -160.86957 -160.86957 L 160.86955999999998 -160.86957 L 160.86955999999998 160.86955999999998 L -160.86957 160.86955999999998 z" stroke-linecap="round" />
    </a>
    @endforelse
</g>

<g transform="matrix(1.25 0 0 0.47 394.35 4722.22)" id="yJpqoJc8tN15H3eoRLn4P"  >
    @forelse ( $siteplan->where('code_product', 'yJpqoJc8tN15H3eoRLn4P') as $hasil)
        @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
            <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill:#ffc107;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -160.86957 -160.86957 L 160.86955999999998 -160.86957 L 160.86955999999998 160.86955999999998 L -160.86957 160.86955999999998 z" stroke-linecap="round" />
        @elseif ($hasil->status == 'Terjual')
            <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill:#f50505; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -160.86957 -160.86957 L 160.86955999999998 -160.86957 L 160.86955999999998 160.86955999999998 L -160.86957 160.86955999999998 z" stroke-linecap="round" />
        @elseif ($hasil->status == 'Tersedia')
        <a href="#" data-toggle="modal" data-target="#modalBooking-yJpqoJc8tN15H3eoRLn4P">
            <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #ffffff;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -160.86957 -160.86957 L 160.86955999999998 -160.86957 L 160.86955999999998 160.86955999999998 L -160.86957 160.86955999999998 z" stroke-linecap="round" />
        </a>
        @endif
    @empty
    <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="yJpqoJc8tN15H3eoRLn4P">
        <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #ffffff;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -160.86957 -160.86957 L 160.86955999999998 -160.86957 L 160.86955999999998 160.86955999999998 L -160.86957 160.86955999999998 z" stroke-linecap="round" />
    </a>
    @endforelse
</g>
<g transform="matrix(1.25 0 0 0.47 394.35 4873.82)" id="v6xDDFpVdmlBR1c5ZLu3N"  >
    @forelse ( $siteplan->where('code_product', 'v6xDDFpVdmlBR1c5ZLu3N') as $hasil)
        @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
            <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill:#ffc107;   fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -160.86957 -160.86957 L 160.86955999999998 -160.86957 L 160.86955999999998 160.86955999999998 L -160.86957 160.86955999999998 z" stroke-linecap="round" />
        @elseif ($hasil->status == 'Terjual')
            <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill:#f50505;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -160.86957 -160.86957 L 160.86955999999998 -160.86957 L 160.86955999999998 160.86955999999998 L -160.86957 160.86955999999998 z" stroke-linecap="round" />
        @elseif ($hasil->status == 'Tersedia')
        <a href="#" data-toggle="modal" data-target="#modalBooking-v6xDDFpVdmlBR1c5ZLu3N">
            <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #ffffff;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -160.86957 -160.86957 L 160.86955999999998 -160.86957 L 160.86955999999998 160.86955999999998 L -160.86957 160.86955999999998 z" stroke-linecap="round" />
        </a>
        @endif
    @empty
    <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="v6xDDFpVdmlBR1c5ZLu3N">
        <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #ffffff;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -160.86957 -160.86957 L 160.86955999999998 -160.86957 L 160.86955999999998 160.86955999999998 L -160.86957 160.86955999999998 z" stroke-linecap="round" />
    </a>
    @endforelse
</g>

<g transform="matrix(1.25 0 0 0.47 394.35 5028.04)" id="UPOqXoH2lnERqj1rxjAmv"  >
    @forelse ( $siteplan->where('code_product', 'UPOqXoH2lnERqj1rxjAmv') as $hasil)
        @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
            <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill:#ffc107;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -160.86957 -160.86957 L 160.86955999999998 -160.86957 L 160.86955999999998 160.86955999999998 L -160.86957 160.86955999999998 z" stroke-linecap="round" />
        @elseif ($hasil->status == 'Terjual')
            <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill:#f50505; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -160.86957 -160.86957 L 160.86955999999998 -160.86957 L 160.86955999999998 160.86955999999998 L -160.86957 160.86955999999998 z" stroke-linecap="round" />
        @elseif ($hasil->status == 'Tersedia')
        <a href="#" data-toggle="modal" data-target="#modalBooking-UPOqXoH2lnERqj1rxjAmv">
            <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #ffffff; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -160.86957 -160.86957 L 160.86955999999998 -160.86957 L 160.86955999999998 160.86955999999998 L -160.86957 160.86955999999998 z" stroke-linecap="round" />
        </a>
        @endif
    @empty
    <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="UPOqXoH2lnERqj1rxjAmv">
        <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #ffffff; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -160.86957 -160.86957 L 160.86955999999998 -160.86957 L 160.86955999999998 160.86955999999998 L -160.86957 160.86955999999998 z" stroke-linecap="round" />
    </a>
    @endforelse
</g>
<g transform="matrix(1.25 0 0 0.47 394.35 5333.86)" id="BlndNapUyYpSbSOEv0i4Y"  >
    @forelse ( $siteplan->where('code_product', 'BlndNapUyYpSbSOEv0i4Y') as $hasil)
        @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
            <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill:#ffc107;  fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -160.86957 -160.86957 L 160.86955999999998 -160.86957 L 160.86955999999998 160.86955999999998 L -160.86957 160.86955999999998 z" stroke-linecap="round" />
        @elseif ($hasil->status == 'Terjual')
            <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill:#f50505; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -160.86957 -160.86957 L 160.86955999999998 -160.86957 L 160.86955999999998 160.86955999999998 L -160.86957 160.86955999999998 z" stroke-linecap="round" />
        @elseif ($hasil->status == 'Tersedia')
        <a href="#" data-toggle="modal" data-target="#modalBooking-BlndNapUyYpSbSOEv0i4Y">
            <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #ffffff; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -160.86957 -160.86957 L 160.86955999999998 -160.86957 L 160.86955999999998 160.86955999999998 L -160.86957 160.86955999999998 z" stroke-linecap="round" />
        </a>
        @endif
    @empty
    <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="BlndNapUyYpSbSOEv0i4Y">
        <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #ffffff; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -160.86957 -160.86957 L 160.86955999999998 -160.86957 L 160.86955999999998 160.86955999999998 L -160.86957 160.86955999999998 z" stroke-linecap="round" />
    </a>
    @endforelse
</g>

<g transform="matrix(1.25 0 0 0.47 394.35 5182.26)" id="FnM8ui5Q5i3dI1NlSwTWt"  >
    @forelse ( $siteplan->where('code_product', 'FnM8ui5Q5i3dI1NlSwTWt') as $hasil)
        @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
            <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill:#ffc107; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -160.86957 -160.86957 L 160.86955999999998 -160.86957 L 160.86955999999998 160.86955999999998 L -160.86957 160.86955999999998 z" stroke-linecap="round" />
        @elseif ($hasil->status == 'Terjual')
            <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill:#f50505; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -160.86957 -160.86957 L 160.86955999999998 -160.86957 L 160.86955999999998 160.86955999999998 L -160.86957 160.86955999999998 z" stroke-linecap="round" />
        @elseif ($hasil->status == 'Tersedia')
        <a href="#" data-toggle="modal" data-target="#modalBooking-FnM8ui5Q5i3dI1NlSwTWt">
            <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #ffffff; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -160.86957 -160.86957 L 160.86955999999998 -160.86957 L 160.86955999999998 160.86955999999998 L -160.86957 160.86955999999998 z" stroke-linecap="round" />
        </a>
        @endif
    @empty
    <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="FnM8ui5Q5i3dI1NlSwTWt">
        <path style="stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #ffffff; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -160.86957 -160.86957 L 160.86955999999998 -160.86957 L 160.86955999999998 160.86955999999998 L -160.86957 160.86955999999998 z" stroke-linecap="round" />
    </a>
    @endforelse
</g>

<g transform="matrix(0 -1 1 0 495.16 529.7)" style="" id="y9U97MzeinsczI-xlzLNA">
		<text xml:space="preserve" font-family="Open Sans" font-size="44" font-style="normal" font-weight="700" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;"><tspan x="-81.57" y="12.58">RUKO 1</tspan></text>
</g>
<g transform="matrix(0 -1 1 0 292.42 529.7)" style="" id="33fdSAwYZVf8sz3LPHBUI"  >
		<text xml:space="preserve" font-family="Open Sans" font-size="44" font-style="normal" font-weight="700" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-81.57" y="12.58" >RUKO 2</tspan></text>
</g>
<g transform="matrix(1 0 0 1 394.07 908.09)" style="" id="NXwaUHtRuZvN3yojgsnFq"  >
		<text xml:space="preserve" font-family="Open Sans" font-size="44" font-style="normal" font-weight="700" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-77.62" y="12.58" >BLOK 1</tspan></text>
</g>
<g transform="matrix(1 0 0 1 394.07 1059.7)" style="" id="O5aHgNt36FZE2fqRH-qgt"  >
		<text xml:space="preserve" font-family="Open Sans" font-size="44" font-style="normal" font-weight="700" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-77.62" y="12.58" >BLOK 2</tspan></text>
</g>
<g transform="matrix(1 0 0 1 394.07 1212.92)" style="" id="ZnKJ5amnez9Hs4DZivGFG"  >
		<text xml:space="preserve" font-family="Open Sans" font-size="44" font-style="normal" font-weight="700" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-77.62" y="12.58" >BLOK 3</tspan></text>
</g>
<g transform="matrix(1 0 0 1 394.07 1364.53)" style="" id="vAAi8rGGUcdicpei7hMHa"  >
		<text xml:space="preserve" font-family="Open Sans" font-size="44" font-style="normal" font-weight="700" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-77.62" y="12.58" >BLOK 4</tspan></text>
</g>
<g transform="matrix(1 0 0 1 394.07 1518.25)" style="" id="VQviEgs-QSlce9MVpObZS"  >
		<text xml:space="preserve" font-family="Open Sans" font-size="44" font-style="normal" font-weight="700" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-77.62" y="12.58" >BLOK 5</tspan></text>
</g>
<g transform="matrix(1 0 0 1 394.07 1669.86)" style="" id="ZK0EBhe0f28v9ZBMdBDo6"  >
		<text xml:space="preserve" font-family="Open Sans" font-size="44" font-style="normal" font-weight="700" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-77.62" y="12.58" >BLOK 6</tspan></text>
</g>
<g transform="matrix(1 0 0 1 394.07 1823.08)" style="" id="ptQ3e7nF9d3JEy2AP_kQY"  >
		<text xml:space="preserve" font-family="Open Sans" font-size="44" font-style="normal" font-weight="700" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-77.62" y="12.58" >BLOK 7</tspan></text>
</g>
<g transform="matrix(1 0 0 1 394.07 1974.69)" style="" id="JUbS9EOF1oIzehoFqaR-r"  >
		<text xml:space="preserve" font-family="Open Sans" font-size="44" font-style="normal" font-weight="700" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-77.62" y="12.58" >BLOK 8</tspan></text>
</g>
<g transform="matrix(1 0 0 1 394.07 2128.64)" style="" id="o0RQse-Pd51vHqsgVNLFr"  >
		<text xml:space="preserve" font-family="Open Sans" font-size="44" font-style="normal" font-weight="700" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-77.62" y="12.58" >BLOK 9</tspan></text>
</g>
<g transform="matrix(1 0 0 1 394.07 2280.25)" style="" id="KarIYiqgwUd24hoCBAhFm"  >
		<text xml:space="preserve" font-family="Open Sans" font-size="44" font-style="normal" font-weight="700" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-90.2" y="12.58" >BLOK 10</tspan></text>
</g>
<g transform="matrix(1 0 0 1 394.07 2433.47)" style="" id="5Ok1hh88TLJtn02jTxEsk"  >
		<text xml:space="preserve" font-family="Open Sans" font-size="44" font-style="normal" font-weight="700" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-90.2" y="12.58" >BLOK 11</tspan></text>
</g>
<g transform="matrix(1 0 0 1 394.07 2585.08)" style="" id="XL5h_1xvS0-gnwZcvAIbY"  >
		<text xml:space="preserve" font-family="Open Sans" font-size="44" font-style="normal" font-weight="700" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-90.2" y="12.58" >BLOK 12</tspan></text>
</g>
<g transform="matrix(1 0 0 1 394.07 2738.8)" style="" id="WAIoa8Ynjh4YZVvyQezi-"  >
		<text xml:space="preserve" font-family="Open Sans" font-size="44" font-style="normal" font-weight="700" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-90.2" y="12.58" >BLOK 13</tspan></text>
</g>
<g transform="matrix(1 0 0 1 394.07 2890.41)" style="" id="cs58TMWwby1OPKIsdE1gi"  >
		<text xml:space="preserve" font-family="Open Sans" font-size="44" font-style="normal" font-weight="700" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-90.2" y="12.58" >BLOK 14</tspan></text>
</g>
<g transform="matrix(1 0 0 1 394.07 3043.63)" style="" id="Dc7SqM_1FC3EVJKr5Rb8a"  >
		<text xml:space="preserve" font-family="Open Sans" font-size="44" font-style="normal" font-weight="700" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-90.2" y="12.58" >BLOK 15</tspan></text>
</g>
<g transform="matrix(1 0 0 1 394.07 3195.24)" style="" id="-_KiTaNEKvQcEXbjc000J"  >
		<text xml:space="preserve" font-family="Open Sans" font-size="44" font-style="normal" font-weight="700" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-90.2" y="12.58" >BLOK 16</tspan></text>
</g>
<g transform="matrix(1 0 0 1 394.07 3348.21)" style="" id="7O1XqZuAootu8O0PyP7Py"  >
		<text xml:space="preserve" font-family="Open Sans" font-size="44" font-style="normal" font-weight="700" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-90.2" y="12.58" >BLOK 17</tspan></text>
</g>
<g transform="matrix(1 0 0 1 394.07 3499.82)" style="" id="0MpRiWY7hHQhQp29EAFRK"  >
		<text xml:space="preserve" font-family="Open Sans" font-size="44" font-style="normal" font-weight="700" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-90.2" y="12.58" >BLOK 18</tspan></text>
</g>
<g transform="matrix(1 0 0 1 394.07 3653.04)" style="" id="FxHtsUh3WMOftIsr9sILu"  >
		<text xml:space="preserve" font-family="Open Sans" font-size="44" font-style="normal" font-weight="700" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-90.2" y="12.58" >BLOK 19</tspan></text>
</g>
<g transform="matrix(1 0 0 1 394.07 3804.15)" style="" id="kYSxpL-DA7sqQJL6eEzTj"  >
		<text xml:space="preserve" font-family="Open Sans" font-size="44" font-style="normal" font-weight="700" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-90.2" y="12.58" >BLOK 20</tspan></text>
</g>
<g transform="matrix(1 0 0 1 393.66 3958.72)" style="" id="_7AnRpF1ObVMtnC4vv3vB"  >
		<text xml:space="preserve" font-family="Open Sans" font-size="44" font-style="normal" font-weight="700" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-90.2" y="12.58" >BLOK 21</tspan></text>
</g>
<g transform="matrix(1 0 0 1 393.66 4111.69)" style="" id="BzP4M0ksySzo0Z-PqC2-8"  >
		<text xml:space="preserve" font-family="Open Sans" font-size="44" font-style="normal" font-weight="700" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-90.2" y="12.58" >BLOK 22</tspan></text>
</g>
<g transform="matrix(1 0 0 1 393.66 4263.3)" style="" id="g2WuEG4EwL5OkmLGaHA1s"  >
		<text xml:space="preserve" font-family="Open Sans" font-size="44" font-style="normal" font-weight="700" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-90.2" y="12.58" >BLOK 23</tspan></text>
</g>
<g transform="matrix(1 0 0 1 393.66 4416.52)" style="" id="InRNg0vD118WBxzK-I2Oc"  >
		<text xml:space="preserve" font-family="Open Sans" font-size="44" font-style="normal" font-weight="700" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-90.2" y="12.58" >BLOK 24</tspan></text>
</g>
<g transform="matrix(1 0 0 1 393.66 4567.64)" style="" id="RtmUB5ZIX5V959XhwRMkc"  >
		<text xml:space="preserve" font-family="Open Sans" font-size="44" font-style="normal" font-weight="700" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-90.2" y="12.58" >BLOK 25</tspan></text>
</g>
<g transform="matrix(1 0 0 1 393.66 4723.58)" style="" id="oOoG10UJRXSHFl69nYU90"  >
		<text xml:space="preserve" font-family="Open Sans" font-size="44" font-style="normal" font-weight="700" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-90.2" y="12.58" >BLOK 26</tspan></text>
</g>
<g transform="matrix(1 0 0 1 393.66 4876.55)" style="" id="b4Hc0n5v-WxTHOe83BvDy"  >
		<text xml:space="preserve" font-family="Open Sans" font-size="44" font-style="normal" font-weight="700" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-90.2" y="12.58" >BLOK 27</tspan></text>
</g>
<g transform="matrix(1 0 0 1 393.66 5028.16)" style="" id="V2N_OA2Qzc57Hk_RHGvyg"  >
		<text xml:space="preserve" font-family="Open Sans" font-size="44" font-style="normal" font-weight="700" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-90.2" y="12.58" >BLOK 28</tspan></text>
</g>
<g transform="matrix(1 0 0 1 393.66 5181.38)" style="" id="pxF7DWlV4ILDRVzFF2JWr"  >
		<text xml:space="preserve" font-family="Open Sans" font-size="44" font-style="normal" font-weight="700" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-90.2" y="12.58" >BLOK 29</tspan></text>
</g>
<g transform="matrix(1 0 0 1 393.66 5332.5)" style="" id="hiehQcbCKD17uIDTS7PWC"  >
		<text xml:space="preserve" font-family="Open Sans" font-size="44" font-style="normal" font-weight="700" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-90.2" y="12.58" >BLOK 30</tspan></text>
</g>
<g transform="matrix(0 -1 1 0 641.91 1544.86)" style="" id="lnOTrEpFBhvK0JE27BKUF"  >
		<text xml:space="preserve" font-family="Open Sans" font-size="40" font-style="normal" font-weight="700" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(255,255,255); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-213.96" y="-0.59" >Jalan Komple 5 meter</tspan></text>
</g>
<g transform="matrix(0 -1 1 0 641.91 3666.26)" style="" id="c72__UxPwBpc839uAFJtL"  >
		<text xml:space="preserve" font-family="Open Sans" font-size="40" font-style="normal" font-weight="700" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(255,255,255); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-213.96" y="-0.59" >Jalan Komple 5 meter</tspan></text>
</g>
<g transform="matrix(1 0 0 1 450 182.77)" style="" id="ratB76_OHYQdZmo2w9sfj"  >
		<text xml:space="preserve" font-family="Open Sans" font-size="50" font-style="normal" font-weight="700" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(255,255,255); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-153.53" y="15.09" >Jalan Utama</tspan></text>
</g>
</svg>
