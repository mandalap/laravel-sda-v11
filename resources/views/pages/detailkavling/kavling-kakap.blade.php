<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="100%" viewBox="0 0 700 1500" xml:space="preserve">

	<g transform="matrix(1.36 0 0 0.2 363.02 120.54)" id="4LjGiD5WfroQKHGCf8v94"  >
	<path style="stroke: rgb(181,134,66); stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(144,144,144); fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -190.27778 -190.27778 L 190.27778 -190.27778 L 190.27778 190.27778 L -190.27778 190.27778 z" stroke-linecap="round" />
	</g>
	<g transform="matrix(1 0 0 6.09 363.02 765.28)" id="0cooxPKKuYhoc_bnvhFAv"  >
	<path style="stroke: rgb(72,40,206); stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(144,144,144); fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -25 -100 L 25 -100 L 25 100 L -25 100 z" stroke-linecap="round" />
	</g>

	<g transform="matrix(1 0 0 1 413.02 284.42)" id="hxzPPv3Lt20ifMTJNJvNd"  >
        @forelse ( $siteplan->where('code_product', 'hxzPPv3Lt20ifMTJNJvNd') as $hasil)
            @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-25, -125)" d="M 0 0 L 50 0 L 50 250 L 0 250 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style=" fill:#f50505; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-25, -125)" d="M 0 0 L 50 0 L 50 250 L 0 250 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-hxzPPv3Lt20ifMTJNJvNd">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-25, -125)" d="M 0 0 L 50 0 L 50 250 L 0 250 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="hxzPPv3Lt20ifMTJNJvNd">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-25, -125)" d="M 0 0 L 50 0 L 50 250 L 0 250 z" stroke-linecap="round" />
        </a>
        @endforelse
	</g>

	<g transform="matrix(1 0 0 1 463.02 284.42)" id="92Qib2etuOAPbJv3fsGKb"  >
        @forelse ( $siteplan->where('code_product', '92Qib2etuOAPbJv3fsGKb') as $hasil)
            @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-25, -125)" d="M 0 0 L 50 0 L 50 250 L 0 250 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style=" fill:#f50505; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-25, -125)" d="M 0 0 L 50 0 L 50 250 L 0 250 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-92Qib2etuOAPbJv3fsGKb">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-25, -125)" d="M 0 0 L 50 0 L 50 250 L 0 250 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="92Qib2etuOAPbJv3fsGKb">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-25, -125)" d="M 0 0 L 50 0 L 50 250 L 0 250 z" stroke-linecap="round" />
        </a>
        @endforelse
	</g>

	<g transform="matrix(1 0 0 1 513.02 284.42)" id="gAalSiWyh2G3QHS1o_ur5"  >
        @forelse ( $siteplan->where('code_product', 'gAalSiWyh2G3QHS1o_ur5') as $hasil)
            @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style="fill:#ffc107;  stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-25, -125)" d="M 0 0 L 50 0 L 50 250 L 0 250 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style="fill:#f50505; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-25, -125)" d="M 0 0 L 50 0 L 50 250 L 0 250 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-gAalSiWyh2G3QHS1o_ur5">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-25, -125)" d="M 0 0 L 50 0 L 50 250 L 0 250 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="gAalSiWyh2G3QHS1o_ur5">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-25, -125)" d="M 0 0 L 50 0 L 50 250 L 0 250 z" stroke-linecap="round" />
        </a>
        @endforelse
	</g>

	<g transform="matrix(1 0 0 1 563.02 284.42)" id="_Wyf0FBNg_Tasuw7pvtji"  >
        @forelse ( $siteplan->where('code_product', '_Wyf0FBNg_Tasuw7pvtji') as $hasil)
            @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-25, -125)" d="M 0 0 L 50 0 L 50 250 L 0 250 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style="fill:#f50505; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-25, -125)" d="M 0 0 L 50 0 L 50 250 L 0 250 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-_Wyf0FBNg_Tasuw7pvtji">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-25, -125)" d="M 0 0 L 50 0 L 50 250 L 0 250 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="_Wyf0FBNg_Tasuw7pvtji">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-25, -125)" d="M 0 0 L 50 0 L 50 250 L 0 250 z" stroke-linecap="round" />
        </a>
        @endforelse
	</g>

	<g transform="matrix(1 0 0 1 488.27 449.42)" id="1Cpmj9jG2zPWT5JI4wBnN"  >
        @forelse ( $siteplan->where('code_product', '1Cpmj9jG2zPWT5JI4wBnN') as $hasil)
            @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -40)" d="M 0 0 L 200 0 L 200 80 L 0 80 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style=" fill:#f50505; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -40)" d="M 0 0 L 200 0 L 200 80 L 0 80 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-1Cpmj9jG2zPWT5JI4wBnN">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -40)" d="M 0 0 L 200 0 L 200 80 L 0 80 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="1Cpmj9jG2zPWT5JI4wBnN">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -40)" d="M 0 0 L 200 0 L 200 80 L 0 80 z" stroke-linecap="round" />
        </a>
        @endforelse
	</g>

	<g transform="matrix(1 0 0 1 488.27 529.16)" id="LtjH_Q1VSYAcqquM5HGj"  >
        @forelse ( $siteplan->where('code_product', 'LtjH_Q1VSYAcqquM5HGj') as $hasil)
            @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -40)" d="M 0 0 L 200 0 L 200 80 L 0 80 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style="fill:#f50505; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -40)" d="M 0 0 L 200 0 L 200 80 L 0 80 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-LtjH_Q1VSYAcqquM5HGj">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -40)" d="M 0 0 L 200 0 L 200 80 L 0 80 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="LtjH_Q1VSYAcqquM5HGj">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -40)" d="M 0 0 L 200 0 L 200 80 L 0 80 z" stroke-linecap="round" />
        </a>
        @endforelse
	</g>

	<g transform="matrix(1 0 0 1 488.27 609.16)" id="GxDD9rdlTgQCZgS6Mq55"  >
        @forelse ( $siteplan->where('code_product', 'GxDD9rdlTgQCZgS6Mq55') as $hasil)
            @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -40)" d="M 0 0 L 200 0 L 200 80 L 0 80 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style="fill:#f50505; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -40)" d="M 0 0 L 200 0 L 200 80 L 0 80 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-GxDD9rdlTgQCZgS6Mq55">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -40)" d="M 0 0 L 200 0 L 200 80 L 0 80 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="GxDD9rdlTgQCZgS6Mq55">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -40)" d="M 0 0 L 200 0 L 200 80 L 0 80 z" stroke-linecap="round" />
        </a>
        @endforelse
	</g>

	<g transform="matrix(1 0 0 1 488.27 689.16)" id="dEr_QCq_U1LVGgxBFvN1"  >
        @forelse ( $siteplan->where('code_product', 'dEr_QCq_U1LVGgxBFvN1') as $hasil)
            @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -100 -40 L 100 -40 L 100 40 L -100 40 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style="fill:#f50505; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -100 -40 L 100 -40 L 100 40 L -100 40 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-dEr_QCq_U1LVGgxBFvN1">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -100 -40 L 100 -40 L 100 40 L -100 40 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="dEr_QCq_U1LVGgxBFvN1">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -100 -40 L 100 -40 L 100 40 L -100 40 z" stroke-linecap="round" />
        </a>
        @endforelse
	</g>

	<g transform="matrix(1 0 0 1 488.27 769.16)" id="t9vdncHNdQPywW7SwTxJ2"  >
        @forelse ( $siteplan->where('code_product', 't9vdncHNdQPywW7SwTxJ2') as $hasil)
            @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -40)" d="M 0 0 L 200 0 L 200 80 L 0 80 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style="fill:#f50505; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -40)" d="M 0 0 L 200 0 L 200 80 L 0 80 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-t9vdncHNdQPywW7SwTxJ2">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -40)" d="M 0 0 L 200 0 L 200 80 L 0 80 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="t9vdncHNdQPywW7SwTxJ2">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -40)" d="M 0 0 L 200 0 L 200 80 L 0 80 z" stroke-linecap="round" />
        </a>
        @endforelse
	</g>

	<g transform="matrix(1 0 0 1 488.27 849.9)" id="NjTnG1FxgvTxalIgkIx9C"  >
        @forelse ( $siteplan->where('code_product', 'NjTnG1FxgvTxalIgkIx9C') as $hasil)
            @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -100 -40 L 100 -40 L 100 40 L -100 40 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style=" fill:#f50505; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -100 -40 L 100 -40 L 100 40 L -100 40 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-NjTnG1FxgvTxalIgkIx9C">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -100 -40 L 100 -40 L 100 40 L -100 40 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="NjTnG1FxgvTxalIgkIx9C">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -100 -40 L 100 -40 L 100 40 L -100 40 z" stroke-linecap="round" />
        </a>
        @endforelse
	</g>

	<g transform="matrix(1 0 0 1 488.27 929.9)" id="8koRQXlbW3Rh-pWo77A7Q"  >
        @forelse ( $siteplan->where('code_product', '8koRQXlbW3Rh-pWo77A7Q') as $hasil)
            @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -40)" d="M 0 0 L 200 0 L 200 80 L 0 80 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style=" fill:#f50505; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -40)" d="M 0 0 L 200 0 L 200 80 L 0 80 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-8koRQXlbW3Rh-pWo77A7Q">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -40)" d="M 0 0 L 200 0 L 200 80 L 0 80 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="8koRQXlbW3Rh-pWo77A7Q">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -40)" d="M 0 0 L 200 0 L 200 80 L 0 80 z" stroke-linecap="round" />
        </a>
        @endforelse
	</g>

	<g transform="matrix(1 0 0 1 488.27 1009.9)" id="InUxEKpFJlf1JnFKIl8al"  >
        @forelse ( $siteplan->where('code_product', 'InUxEKpFJlf1JnFKIl8al') as $hasil)
            @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -100 -40 L 100 -40 L 100 40 L -100 40 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style="fill:#f50505; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -100 -40 L 100 -40 L 100 40 L -100 40 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-InUxEKpFJlf1JnFKIl8al">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -100 -40 L 100 -40 L 100 40 L -100 40 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="InUxEKpFJlf1JnFKIl8al">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -100 -40 L 100 -40 L 100 40 L -100 40 z" stroke-linecap="round" />
        </a>
        @endforelse
	</g>

	<g transform="matrix(1 0 0 1 488.27 1089.9)" id="LkuIan5ooqo31_B8Jq2gl"  >
        @forelse ( $siteplan->where('code_product', 'LkuIan5ooqo31_B8Jq2gl') as $hasil)
            @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -40)" d="M 0 0 L 200 0 L 200 80 L 0 80 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style=" fill:#f50505; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -40)" d="M 0 0 L 200 0 L 200 80 L 0 80 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-LkuIan5ooqo31_B8Jq2gl">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -40)" d="M 0 0 L 200 0 L 200 80 L 0 80 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="LkuIan5ooqo31_B8Jq2gl">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -40)" d="M 0 0 L 200 0 L 200 80 L 0 80 z" stroke-linecap="round" />
        </a>
        @endforelse
	</g>

	<g transform="matrix(1 0 0 1 488.27 1169.64)" id="VZGUC1rGPUFVgNNp61L_X"  >
        @forelse ( $siteplan->where('code_product', 'VZGUC1rGPUFVgNNp61L_X') as $hasil)
            @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -100 -40 L 100 -40 L 100 40 L -100 40 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style=" fill:#f50505; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -100 -40 L 100 -40 L 100 40 L -100 40 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-VZGUC1rGPUFVgNNp61L_X">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -100 -40 L 100 -40 L 100 40 L -100 40 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="VZGUC1rGPUFVgNNp61L_X">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -100 -40 L 100 -40 L 100 40 L -100 40 z" stroke-linecap="round" />
        </a>
        @endforelse
	</g>

	<g transform="matrix(1 0 0 1 488.27 1249.64)" id="ZaGEbHJ5Uab0v9S1hYGXf"  >
        @forelse ( $siteplan->where('code_product', 'ZaGEbHJ5Uab0v9S1hYGXf') as $hasil)
            @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -40)" d="M 0 0 L 200 0 L 200 80 L 0 80 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style=" fill:#f50505; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -40)" d="M 0 0 L 200 0 L 200 80 L 0 80 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-ZaGEbHJ5Uab0v9S1hYGXf">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -40)" d="M 0 0 L 200 0 L 200 80 L 0 80 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="ZaGEbHJ5Uab0v9S1hYGXf">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -40)" d="M 0 0 L 200 0 L 200 80 L 0 80 z" stroke-linecap="round" />
        </a>
        @endforelse
	</g>

	<g transform="matrix(1 0 0 1 488.27 1329.64)" id="MAs_F0jxlNeqgHUK2pGuC" >
        @forelse ( $siteplan->where('code_product', 'MAs_F0jxlNeqgHUK2pGuC') as $hasil)
            @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -100 -40 L 100 -40 L 100 40 L -100 40 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style="fill:#f50505; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -100 -40 L 100 -40 L 100 40 L -100 40 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-MAs_F0jxlNeqgHUK2pGuC">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -100 -40 L 100 -40 L 100 40 L -100 40 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="MAs_F0jxlNeqgHUK2pGuC">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -100 -40 L 100 -40 L 100 40 L -100 40 z" stroke-linecap="round" />
        </a>
        @endforelse
	</g>

	<g transform="matrix(1 0 0 1 161.27 284.42)" id="X3YJL6PV5xS3-VIcne0ps"  >
        @forelse ( $siteplan->where('code_product', 'X3YJL6PV5xS3-VIcne0ps') as $hasil)
            @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-25, -125)" d="M 0 0 L 50 0 L 50 250 L 0 250 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style="fill:#f50505; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-25, -125)" d="M 0 0 L 50 0 L 50 250 L 0 250 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-X3YJL6PV5xS3-VIcne0ps">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-25, -125)" d="M 0 0 L 50 0 L 50 250 L 0 250 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="X3YJL6PV5xS3-VIcne0ps">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-25, -125)" d="M 0 0 L 50 0 L 50 250 L 0 250 z" stroke-linecap="round" />
        </a>
        @endforelse
	</g>

	<g transform="matrix(1 0 0 1 211.27 284.42)" id="WC825FnVC_92UrlcLUb"  >
        @forelse ( $siteplan->where('code_product', 'WC825FnVC_92UrlcLUb') as $hasil)
            @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style=" fill:#ffc107;  stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-25, -125)" d="M 0 0 L 50 0 L 50 250 L 0 250 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style=" fill:#f50505; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-25, -125)" d="M 0 0 L 50 0 L 50 250 L 0 250 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-WC825FnVC_92UrlcLUb">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-25, -125)" d="M 0 0 L 50 0 L 50 250 L 0 250 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="WC825FnVC_92UrlcLUb">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-25, -125)" d="M 0 0 L 50 0 L 50 250 L 0 250 z" stroke-linecap="round" />
        </a>
        @endforelse
	</g>

	<g transform="matrix(1 0 0 1 261.27 284.42)" id="T6HEcc3Um6y6ekvou4q6"  >
        @forelse ( $siteplan->where('code_product', 'T6HEcc3Um6y6ekvou4q6') as $hasil)
            @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -25 -125 L 25 -125 L 25 125 L -25 125 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style="fill:#f50505; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -25 -125 L 25 -125 L 25 125 L -25 125 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-T6HEcc3Um6y6ekvou4q6">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -25 -125 L 25 -125 L 25 125 L -25 125 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="T6HEcc3Um6y6ekvou4q6">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -25 -125 L 25 -125 L 25 125 L -25 125 z" stroke-linecap="round" />
        </a>
        @endforelse
	</g>

	<g transform="matrix(1 0 0 1 311.28 284.42)" id="CfbY4WxK86ZnbN2UTS8bC"  >
        @forelse ( $siteplan->where('code_product', 'CfbY4WxK86ZnbN2UTS8bC') as $hasil)
            @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-25, -125)" d="M 0 0 L 50 0 L 50 250 L 0 250 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style=" fill:#f50505; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-25, -125)" d="M 0 0 L 50 0 L 50 250 L 0 250 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-CfbY4WxK86ZnbN2UTS8bC">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-25, -125)" d="M 0 0 L 50 0 L 50 250 L 0 250 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="CfbY4WxK86ZnbN2UTS8bC">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-25, -125)" d="M 0 0 L 50 0 L 50 250 L 0 250 z" stroke-linecap="round" />
        </a>
        @endforelse
	</g>

	<g transform="matrix(1 0 0 1 236.52 449.42)" id="lF3NrILLdtXhNbRDJ_VsH"  >
        @forelse ( $siteplan->where('code_product', 'lF3NrILLdtXhNbRDJ_VsH') as $hasil)
            @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style="fill:#ffc107;  stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -40)" d="M 0 0 L 200 0 L 200 80 L 0 80 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style="fill:#f50505; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -40)" d="M 0 0 L 200 0 L 200 80 L 0 80 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-lF3NrILLdtXhNbRDJ_VsH">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -40)" d="M 0 0 L 200 0 L 200 80 L 0 80 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="lF3NrILLdtXhNbRDJ_VsH">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -40)" d="M 0 0 L 200 0 L 200 80 L 0 80 z" stroke-linecap="round" />
        </a>
        @endforelse
	</g>

	<g transform="matrix(1 0 0 1 236.52 529.16)" id="98EOdAJ2jaJ9pOcro76L"  >
        @forelse ( $siteplan->where('code_product', '98EOdAJ2jaJ9pOcro76L') as $hasil)
            @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -100 -40 L 100 -40 L 100 40 L -100 40 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style="fill:#f50505; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -100 -40 L 100 -40 L 100 40 L -100 40 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-98EOdAJ2jaJ9pOcro76L">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -100 -40 L 100 -40 L 100 40 L -100 40 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="98EOdAJ2jaJ9pOcro76L">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -100 -40 L 100 -40 L 100 40 L -100 40 z" stroke-linecap="round" />
        </a>
        @endforelse
	</g>

	<g transform="matrix(1 0 0 1 236.52 609.16)" id="ZgtztVLBP2bglSdH4496F"  >
        @forelse ( $siteplan->where('code_product', 'ZgtztVLBP2bglSdH4496F') as $hasil)
            @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -40)" d="M 0 0 L 200 0 L 200 80 L 0 80 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style="fill:#f50505; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -40)" d="M 0 0 L 200 0 L 200 80 L 0 80 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-ZgtztVLBP2bglSdH4496F">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -40)" d="M 0 0 L 200 0 L 200 80 L 0 80 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="ZgtztVLBP2bglSdH4496F">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -40)" d="M 0 0 L 200 0 L 200 80 L 0 80 z" stroke-linecap="round" />
        </a>
        @endforelse
	</g>

	<g transform="matrix(1 0 0 1 236.52 689.16)" id="pDbYI6vkTezlSqqihUmb3"  >
        @forelse ( $siteplan->where('code_product', 'pDbYI6vkTezlSqqihUmb3') as $hasil)
            @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -100 -40 L 100 -40 L 100 40 L -100 40 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style="fill:#f50505; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -100 -40 L 100 -40 L 100 40 L -100 40 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-pDbYI6vkTezlSqqihUmb3">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -100 -40 L 100 -40 L 100 40 L -100 40 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="pDbYI6vkTezlSqqihUmb3">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -100 -40 L 100 -40 L 100 40 L -100 40 z" stroke-linecap="round" />
        </a>
        @endforelse
	</g>

	<g transform="matrix(1 0 0 1 236.52 769.16)" id="Wiy7gr1Owkf4Dcf8d6CFc"  >
        @forelse ( $siteplan->where('code_product', 'Wiy7gr1Owkf4Dcf8d6CFc') as $hasil)
            @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style="fill:#ffc107;  stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -40)" d="M 0 0 L 200 0 L 200 80 L 0 80 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style="fill:#f50505; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -40)" d="M 0 0 L 200 0 L 200 80 L 0 80 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-Wiy7gr1Owkf4Dcf8d6CFc">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -40)" d="M 0 0 L 200 0 L 200 80 L 0 80 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="Wiy7gr1Owkf4Dcf8d6CFc">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -40)" d="M 0 0 L 200 0 L 200 80 L 0 80 z" stroke-linecap="round" />
        </a>
        @endforelse
	</g>

	<g transform="matrix(1 0 0 1 236.52 849.9)" id="Is2NPSC1uFNd7Orp0JWXb"  >
        @forelse ( $siteplan->where('code_product', 'Is2NPSC1uFNd7Orp0JWXb') as $hasil)
            @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -100 -40 L 100 -40 L 100 40 L -100 40 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style=" fill:#f50505; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -100 -40 L 100 -40 L 100 40 L -100 40 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-Is2NPSC1uFNd7Orp0JWXb">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -100 -40 L 100 -40 L 100 40 L -100 40 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="Is2NPSC1uFNd7Orp0JWXb">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -100 -40 L 100 -40 L 100 40 L -100 40 z" stroke-linecap="round" />
        </a>
        @endforelse
	</g>

	<g transform="matrix(1 0 0 1 236.52 929.9)" id="XsVF4Zlrtd1XLwGwTPni"  >
        @forelse ( $siteplan->where('code_product', 'XsVF4Zlrtd1XLwGwTPni') as $hasil)
            @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -40)" d="M 0 0 L 200 0 L 200 80 L 0 80 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style="fill:#f50505; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -40)" d="M 0 0 L 200 0 L 200 80 L 0 80 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-XsVF4Zlrtd1XLwGwTPni">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -40)" d="M 0 0 L 200 0 L 200 80 L 0 80 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="XsVF4Zlrtd1XLwGwTPni">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -40)" d="M 0 0 L 200 0 L 200 80 L 0 80 z" stroke-linecap="round" />
        </a>
        @endforelse
	</g>

	<g transform="matrix(1 0 0 1 236.52 1009.9)" id="J8QD9UMnxY9b9y3sSE2U"  >
        @forelse ( $siteplan->where('code_product', 'J8QD9UMnxY9b9y3sSE2U') as $hasil)
            @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -100 -40 L 100 -40 L 100 40 L -100 40 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style="fill:#f50505; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -100 -40 L 100 -40 L 100 40 L -100 40 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-J8QD9UMnxY9b9y3sSE2U">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -100 -40 L 100 -40 L 100 40 L -100 40 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="J8QD9UMnxY9b9y3sSE2U">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -100 -40 L 100 -40 L 100 40 L -100 40 z" stroke-linecap="round" />
        </a>
        @endforelse
	</g>

	<g transform="matrix(1 0 0 1 236.52 1089.9)" id="7WAWlEttvW7nXcoA6BVc"  >
        @forelse ( $siteplan->where('code_product', '7WAWlEttvW7nXcoA6BVc') as $hasil)
            @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -40)" d="M 0 0 L 200 0 L 200 80 L 0 80 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style=" fill:#f50505; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -40)" d="M 0 0 L 200 0 L 200 80 L 0 80 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-7WAWlEttvW7nXcoA6BVc">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -40)" d="M 0 0 L 200 0 L 200 80 L 0 80 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="7WAWlEttvW7nXcoA6BVc">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -40)" d="M 0 0 L 200 0 L 200 80 L 0 80 z" stroke-linecap="round" />
        </a>
        @endforelse
	</g>

	<g transform="matrix(1 0 0 1 236.52 1169.64)" id="gg88bfPEh3Fkyqmkya87F"  >
        @forelse ( $siteplan->where('code_product', 'gg88bfPEh3Fkyqmkya87F') as $hasil)
            @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -100 -40 L 100 -40 L 100 40 L -100 40 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style="fill:#f50505; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -100 -40 L 100 -40 L 100 40 L -100 40 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-gg88bfPEh3Fkyqmkya87F">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -100 -40 L 100 -40 L 100 40 L -100 40 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="gg88bfPEh3Fkyqmkya87F">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -100 -40 L 100 -40 L 100 40 L -100 40 z" stroke-linecap="round" />
        </a>
        @endforelse
	</g>

	<g transform="matrix(1 0 0 1 236.52 1249.64)" id="MWVHiR9Yw36FyD4HfwpG"  >
        @forelse ( $siteplan->where('code_product', 'MWVHiR9Yw36FyD4HfwpG') as $hasil)
            @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style="fill:#ffc107; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -40)" d="M 0 0 L 200 0 L 200 80 L 0 80 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style=" fill:#f50505; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -40)" d="M 0 0 L 200 0 L 200 80 L 0 80 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-MWVHiR9Yw36FyD4HfwpG">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -40)" d="M 0 0 L 200 0 L 200 80 L 0 80 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="MWVHiR9Yw36FyD4HfwpG">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-100, -40)" d="M 0 0 L 200 0 L 200 80 L 0 80 z" stroke-linecap="round" />
        </a>
        @endforelse
	</g>

	<g transform="matrix(1 0 0 1 236.52 1329.64)" id="Hiu22UB0PUg8J6ENxPui"  >
        @forelse ( $siteplan->where('code_product', 'Hiu22UB0PUg8J6ENxPui') as $hasil)
            @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path style=" fill:#ffc107;  stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -100 -40 L 100 -40 L 100 40 L -100 40 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path style="fill:#f50505; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -100 -40 L 100 -40 L 100 40 L -100 40 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-Hiu22UB0PUg8J6ENxPui">
                <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -100 -40 L 100 -40 L 100 40 L -100 40 z" stroke-linecap="round" />
            </a>
            @endif
        @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="Hiu22UB0PUg8J6ENxPui">
            <path style="fill: #f8f8f8; stroke: rgb(0,0,0); stroke-width: 3; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(0, 0)" d="M -100 -40 L 100 -40 L 100 40 L -100 40 z" stroke-linecap="round" />
        </a>
        @endforelse
	</g>

    <g transform="matrix(0 -1 1 0 563.89 284.42)" style="" id="Jo8WrBvpqSSH7L5bUPb-f"  >
        <text xml:space="preserve" font-family="Open Sans" font-size="31" font-style="normal" font-weight="700" letter-spacing="0.062" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-19.13" y="9.26" >R</tspan><tspan x="1.4" y="9.26" >1</tspan></text>
    </g>
    <g transform="matrix(0 -1 1 0 513.02 284.42)" style="" id="CFyG_FnhF4F74LBtCnhWj"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="31" font-style="normal" font-weight="700" letter-spacing="0.062" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-19.13" y="9.25" >R</tspan><tspan x="1.4" y="9.25" >2</tspan></text>
    </g>
    <g transform="matrix(0 -1 1 0 462.02 284.42)" style="" id="zl6JZ_5ncGvinBQw0pF7t"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="31" font-style="normal" font-weight="700" letter-spacing="0.062" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-19.13" y="9.25" >R</tspan><tspan x="1.4" y="9.25" >3</tspan></text>
    </g>
    <g transform="matrix(0 -1 1 0 413.02 284.42)" style="" id="1ug9_t_a7GzzFfct1U2i7"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="31" font-style="normal" font-weight="700" letter-spacing="0.062" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-19.13" y="9.25" >R</tspan><tspan x="1.4" y="9.25" >4</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 490.52 449.42)" style="" id="SCepMBr4DnBg5EoJtvDwZ"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="31" font-style="normal" font-weight="700" letter-spacing="0.062" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-19.59" y="7.28" >A</tspan><tspan x="1.86" y="7.28" >1</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 490.52 529.16)" style="" id="BlxXsV9Sj8PlvQ8Peoo0H"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="31" font-style="normal" font-weight="700" letter-spacing="0.062" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-19.59" y="7.28" >A</tspan><tspan x="1.86" y="7.28" >2</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 490.52 609.16)" style="" id="rzh74SX1FuvgQM8oB23C_"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="31" font-style="normal" font-weight="700" letter-spacing="0.062" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-19.59" y="7.28" >A</tspan><tspan x="1.86" y="7.28" >3</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 490.52 689.16)" style="" id="nhOaEWs4OmiJToafHbCcH"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="31" font-style="normal" font-weight="700" letter-spacing="0.062" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-19.59" y="7.28" >A</tspan><tspan x="1.86" y="7.28" >4</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 490.52 769.16)" style="" id="Xvda1CJAhUJ4cfhhbDk8G"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="31" font-style="normal" font-weight="700" letter-spacing="0.062" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-19.59" y="7.28" >A</tspan><tspan x="1.86" y="7.28" >5</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 490.52 849.9)" style="" id="XBTC2iBqmI_ls3vOEWPGX"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="31" font-style="normal" font-weight="700" letter-spacing="0.062" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-19.59" y="7.28" >A</tspan><tspan x="1.86" y="7.28" >6</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 490.52 929.9)" style="" id="FiAMYoxvWBLU7KhZ8BMI6"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="31" font-style="normal" font-weight="700" letter-spacing="0.062" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-19.59" y="7.28" >A</tspan><tspan x="1.86" y="7.28" >7</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 490.52 1009.9)" style="" id="HE5DgFQhNhTsMxKTMQuQW"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="31" font-style="normal" font-weight="700" letter-spacing="0.062" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-19.59" y="7.28" >A</tspan><tspan x="1.86" y="7.28" >8</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 490.52 1089.9)" style="" id="X0O6se9A2U-qSHKsGS2Xz"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="31" font-style="normal" font-weight="700" letter-spacing="0.062" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-19.59" y="7.28" >A</tspan><tspan x="1.86" y="7.28" >9</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 490.52 1169.64)" style="" id="D_7zDoicLk6hRqi-lsV6G"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="31" font-style="normal" font-weight="700" letter-spacing="0.062" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-28.48" y="7.28" >A</tspan><tspan x="-7.03" y="7.28" >1</tspan><tspan x="10.76" y="7.28" >0</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 490.52 1249.64)" style="" id="6YmWv3Qc_ZJ55noc4kB-1"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="31" font-style="normal" font-weight="700" letter-spacing="0.062" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-28.48" y="7.28" >A</tspan><tspan x="-7.03" y="7.28" >1</tspan><tspan x="10.76" y="7.28" >1</tspan></text>
    </g>
    <g transform="matrix(1 0 0 1 490.52 1329.64)" style="" id="2OKMkTwZhgimAWfgCVEXs"  >
            <text xml:space="preserve" font-family="Open Sans" font-size="31" font-style="normal" font-weight="700" letter-spacing="0.062" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-28.48" y="7.28" >A</tspan><tspan x="-7.03" y="7.28" >1</tspan><tspan x="10.76" y="7.28" >2</tspan></text>
    </g>
	<g transform="matrix(0 -1 1 0 312.15 284.42)" style="" id="TDfQKFo_CgGmSJXote45l"  >
			<text xml:space="preserve" font-family="Open Sans" font-size="31" font-style="normal" font-weight="700" letter-spacing="0.062" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-19.13" y="9.25" >R</tspan><tspan x="1.4" y="9.25" >5</tspan></text>
	</g>
	<g transform="matrix(0 -1 1 0 261.27 284.42)" style="" id="k4QIJppUXUE8BX9S_2z6F"  >
			<text xml:space="preserve" font-family="Open Sans" font-size="31" font-style="normal" font-weight="700" letter-spacing="0.062" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-19.13" y="9.25" >R</tspan><tspan x="1.4" y="9.25" >6</tspan></text>
	</g>
	<g transform="matrix(0 -1 1 0 210.27 284.42)" style="" id="2sgShezZdw0ppVzMmG9yi"  >
			<text xml:space="preserve" font-family="Open Sans" font-size="31" font-style="normal" font-weight="700" letter-spacing="0.062" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-19.13" y="9.25" >R</tspan><tspan x="1.4" y="9.25" >7</tspan></text>
	</g>
	<g transform="matrix(0 -1 1 0 161.27 284.42)" style="" id="Y3zfRR-wbCO0SEdGcQa80"  >
			<text xml:space="preserve" font-family="Open Sans" font-size="31" font-style="normal" font-weight="700" letter-spacing="0.062" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-19.13" y="9.25" >R</tspan><tspan x="1.4" y="9.25" >8</tspan></text>
	</g>
	<g transform="matrix(1 0 0 1 238.77 449.42)" style="" id="AabWbE9q5oq83vGRfd-EF"  >
			<text xml:space="preserve" font-family="Open Sans" font-size="31" font-style="normal" font-weight="700" letter-spacing="0.062" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-19.31" y="7.28" >B</tspan><tspan x="1.58" y="7.28" >1</tspan></text>
	</g>
	<g transform="matrix(1 0 0 1 238.77 529.16)" style="" id="ktNxikpvPO_wdZUdyWOQA"  >
			<text xml:space="preserve" font-family="Open Sans" font-size="31" font-style="normal" font-weight="700" letter-spacing="0.062" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-19.31" y="7.28" >B</tspan><tspan x="1.58" y="7.28" >2</tspan></text>
	</g>
	<g transform="matrix(1 0 0 1 238.77 609.16)" style="" id="AwRMdRQG1w6wx4GBpye3u"  >
			<text xml:space="preserve" font-family="Open Sans" font-size="31" font-style="normal" font-weight="700" letter-spacing="0.062" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-19.31" y="7.28" >B</tspan><tspan x="1.58" y="7.28" >3</tspan></text>
	</g>
	<g transform="matrix(1 0 0 1 238.77 689.16)" style="" id="d875ceB123lVubWwd7ccb"  >
			<text xml:space="preserve" font-family="Open Sans" font-size="31" font-style="normal" font-weight="700" letter-spacing="0.062" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-19.31" y="7.28" >B</tspan><tspan x="1.58" y="7.28" >4</tspan></text>
	</g>
	<g transform="matrix(1 0 0 1 238.77 769.16)" style="" id="Mjq8D-_f4-WA28V9908Tt"  >
			<text xml:space="preserve" font-family="Open Sans" font-size="31" font-style="normal" font-weight="700" letter-spacing="0.062" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-19.31" y="7.28" >B</tspan><tspan x="1.58" y="7.28" >5</tspan></text>
	</g>
	<g transform="matrix(1 0 0 1 238.77 849.9)" style="" id="J9_t61-LvVZFP8aUojS35"  >
			<text xml:space="preserve" font-family="Open Sans" font-size="31" font-style="normal" font-weight="700" letter-spacing="0.062" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-19.31" y="7.28" >B</tspan><tspan x="1.58" y="7.28" >6</tspan></text>
	</g>
	<g transform="matrix(1 0 0 1 238.77 929.9)" style="" id="HASB1I-BAIyWTtVIy2M5a"  >
			<text xml:space="preserve" font-family="Open Sans" font-size="31" font-style="normal" font-weight="700" letter-spacing="0.062" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-19.31" y="7.28" >B</tspan><tspan x="1.58" y="7.28" >7</tspan></text>
	</g>
	<g transform="matrix(1 0 0 1 238.77 1009.9)" style="" id="GQ3yLY3sLsPP0Lwlo3fYp"  >
			<text xml:space="preserve" font-family="Open Sans" font-size="31" font-style="normal" font-weight="700" letter-spacing="0.062" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-19.31" y="7.28" >B</tspan><tspan x="1.58" y="7.28" >8</tspan></text>
	</g>
	<g transform="matrix(1 0 0 1 238.77 1089.9)" style="" id="aq4bK9cmY-uWb--bM_9Ll"  >
			<text xml:space="preserve" font-family="Open Sans" font-size="31" font-style="normal" font-weight="700" letter-spacing="0.062" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-19.31" y="7.28" >B</tspan><tspan x="1.58" y="7.28" >9</tspan></text>
	</g>
	<g transform="matrix(1 0 0 1 238.77 1169.64)" style="" id="egYKxuN8WLh_GhHK1kerp"  >
			<text xml:space="preserve" font-family="Open Sans" font-size="31" font-style="normal" font-weight="700" letter-spacing="0.062" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-28.2" y="7.28" >B</tspan><tspan x="-7.31" y="7.28" >1</tspan><tspan x="10.48" y="7.28" >0</tspan></text>
	</g>
	<g transform="matrix(1 0 0 1 238.77 1249.64)" style="" id="gED_04tq7h_4GgAvULbD0"  >
			<text xml:space="preserve" font-family="Open Sans" font-size="31" font-style="normal" font-weight="700" letter-spacing="0.062" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-28.2" y="7.28" >B</tspan><tspan x="-7.31" y="7.28" >1</tspan><tspan x="10.48" y="7.28" >1</tspan></text>
	</g>
	<g transform="matrix(1 0 0 1 238.77 1329.64)" style="" id="F8xUVq8vuTk-QtjEEBGar"  >
			<text xml:space="preserve" font-family="Open Sans" font-size="31" font-style="normal" font-weight="700" letter-spacing="0.062" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-28.2" y="7.28" >B</tspan><tspan x="-7.31" y="7.28" >1</tspan><tspan x="10.48" y="7.28" >2</tspan></text>
	</g>
	<g transform="matrix(1 0 0 1 363.02 120.54)" style="" id="Ce-c81PWdiEqUZ8v65M6H"  >
			<text xml:space="preserve" font-family="Open Sans" font-size="28" font-style="normal" font-weight="700" letter-spacing="0.056" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-90.89" y="9.71" >J</tspan><tspan x="-81.56" y="9.71" >A</tspan><tspan x="-62.19" y="9.71" >L</tspan><tspan x="-46.32" y="9.71" >A</tspan><tspan x="-26.94" y="9.71" >N</tspan><tspan x="-4.12" y="9.71" style="white-space: pre; "> </tspan><tspan x="3.21" y="9.71" >A</tspan><tspan x="22.58" y="9.71" >S</tspan><tspan x="38.06" y="9.71" >P</tspan><tspan x="55.7" y="9.71" >A</tspan><tspan x="75.07" y="9.71" >L</tspan></text>
	</g>
	<g transform="matrix(0 -1 1 0 367.7 455.43)" style="" id="7I6GZrjZr78rX4-Y0E4nz"  >
			<text xml:space="preserve" font-family="Open Sans" font-size="28" font-style="normal" font-weight="700" letter-spacing="0.056" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-159.02" y="4.8" >J</tspan><tspan x="-149.69" y="4.8" >a</tspan><tspan x="-132.72" y="4.8" >l</tspan><tspan x="-124.12" y="4.8" >a</tspan><tspan x="-107.15" y="4.8" >n</tspan><tspan x="-88.7" y="4.8" style="white-space: pre; "> </tspan><tspan x="-81.37" y="4.8" >K</tspan><tspan x="-62.72" y="4.8" >o</tspan><tspan x="-45.32" y="4.8" >m</tspan><tspan x="-17.77" y="4.8" >p</tspan><tspan x="0" y="4.8" >l</tspan><tspan x="8.6" y="4.8" >e</tspan><tspan x="25.2" y="4.8" >k</tspan><tspan x="42.62" y="4.8" style="white-space: pre; "> </tspan><tspan x="49.95" y="4.8" >5</tspan><tspan x="66.01" y="4.8" style="white-space: pre; "> </tspan><tspan x="73.34" y="4.8" >m</tspan><tspan x="100.89" y="4.8" >e</tspan><tspan x="117.49" y="4.8" >t</tspan><tspan x="129.7" y="4.8" >e</tspan><tspan x="146.3" y="4.8" >r</tspan></text>
	</g>
	<g transform="matrix(0 -1 1 0 366.2 957.26)" style="" id="jo5uuBi9Kci2CB-Ikeb3E"  >
			<text xml:space="preserve" font-family="Open Sans" font-size="28" font-style="normal" font-weight="700" letter-spacing="0.056" line-height="1" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;" ><tspan x="-159.02" y="4.8" >J</tspan><tspan x="-149.69" y="4.8" >a</tspan><tspan x="-132.72" y="4.8" >l</tspan><tspan x="-124.12" y="4.8" >a</tspan><tspan x="-107.15" y="4.8" >n</tspan><tspan x="-88.7" y="4.8" style="white-space: pre; "> </tspan><tspan x="-81.37" y="4.8" >K</tspan><tspan x="-62.72" y="4.8" >o</tspan><tspan x="-45.32" y="4.8" >m</tspan><tspan x="-17.77" y="4.8" >p</tspan><tspan x="0" y="4.8" >l</tspan><tspan x="8.6" y="4.8" >e</tspan><tspan x="25.2" y="4.8" >k</tspan><tspan x="42.62" y="4.8" style="white-space: pre; "> </tspan><tspan x="49.95" y="4.8" >5</tspan><tspan x="66.01" y="4.8" style="white-space: pre; "> </tspan><tspan x="73.34" y="4.8" >m</tspan><tspan x="100.89" y="4.8" >e</tspan><tspan x="117.49" y="4.8" >t</tspan><tspan x="129.7" y="4.8" >e</tspan><tspan x="146.3" y="4.8" >r</tspan></text>
	</g>
</svg>
