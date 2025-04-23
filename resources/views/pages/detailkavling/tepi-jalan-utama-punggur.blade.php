-- Active: 1719903240984@@127.0.0.1@3306@backup-sd
<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" viewBox="0 0 2700 4500"
    xml:space="preserve">
    <g transform="matrix(2.3273673159 0 0 1.5115801244 1944.736892186 4183.053259538)" id="hw7CApOTmTH3C3COvEd9q">
        @forelse ($siteplan->where('code_product', 'hw7CApOTmTH3C3COvEd9q') as $hasil)
            @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path
                    style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill:#ffc107; fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(-74.92683, -35.12195)"
                    d="M 0 70.2439 L 149.85366 70.2439 L 149.85366 0 L 0 0 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path
                    style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill:#f50505; fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(-74.92683, -35.12195)"
                    d="M 0 70.2439 L 149.85366 70.2439 L 149.85366 0 L 0 0 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
                <a href="#" data-toggle="modal" data-target="#modalBooking-hw7CApOTmTH3C3COvEd9q">
                    <path
                        style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #ffffff; fill-rule: nonzero; opacity: 1;"
                        vector-effect="non-scaling-stroke" transform=" translate(-74.92683, -35.12195)"
                        d="M 0 70.2439 L 149.85366 70.2439 L 149.85366 0 L 0 0 z" stroke-linecap="round" />
                </a>
            @endif
        @empty
            <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="hw7CApOTmTH3C3COvEd9q">
                <path
                    style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #ffffff; fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(-74.92683, -35.12195)"
                    d="M 0 70.2439 L 149.85366 70.2439 L 149.85366 0 L 0 0 z" stroke-linecap="round" />
            </a>
        @endforelse
    </g>
    <g transform="matrix(2.2342726232 0 0 0.6255926992 1944.736892186 1268.2423916825)" id="miVSXzIwjMXsyNSedSUnH">
        @forelse ($siteplan->where('code_product', 'miVSXzIwjMXsyNSedSUnH') as $hasil)
            @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path
                    style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill:#ffc107; fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(0, 0)"
                    d="M -78.04878 -78.04878 L 78.04878 -78.04878 L 78.04878 78.04878 L -78.04878 78.04878 z"
                    stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path
                    style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill:#f50505; fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(0, 0)"
                    d="M -78.04878 -78.04878 L 78.04878 -78.04878 L 78.04878 78.04878 L -78.04878 78.04878 z"
                    stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
                <a href="#" data-toggle="modal" data-target="#modalBooking-miVSXzIwjMXsyNSedSUnH">
                    <path
                        style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #ffffff; fill-rule: nonzero; opacity: 1;"
                        vector-effect="non-scaling-stroke" transform=" translate(0, 0)"
                        d="M -78.04878 -78.04878 L 78.04878 -78.04878 L 78.04878 78.04878 L -78.04878 78.04878 z"
                        stroke-linecap="round" />
                </a>
            @endif
        @empty
            <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="miVSXzIwjMXsyNSedSUnH">
                <path
                    style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #ffffff; fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(0, 0)"
                    d="M -78.04878 -78.04878 L 78.04878 -78.04878 L 78.04878 78.04878 L -78.04878 78.04878 z"
                    stroke-linecap="round" />
            </a>
        @endforelse
    </g>
    <g transform="matrix(2.2342726232 0 0 0.6255926992 1944.736892186 1368.6708729916)" id="SmV-02q2aBM4eQ0CH6nkS">
        @forelse ($siteplan->where('code_product', 'SmV-02q2aBM4eQ0CH6nkS') as $hasil)
            @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path
                    style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill:#ffc107; fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(0, 0)"
                    d="M -78.04878 -78.04878 L 78.04878 -78.04878 L 78.04878 78.04878 L -78.04878 78.04878 z"
                    stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path
                    style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill:#f50505; fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(0, 0)"
                    d="M -78.04878 -78.04878 L 78.04878 -78.04878 L 78.04878 78.04878 L -78.04878 78.04878 z"
                    stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
                <a href="#" data-toggle="modal" data-target="#modalBooking-SmV-02q2aBM4eQ0CH6nkS">
                    <path
                        style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #ffffff; fill-rule: nonzero; opacity: 1;"
                        vector-effect="non-scaling-stroke" transform=" translate(0, 0)"
                        d="M -78.04878 -78.04878 L 78.04878 -78.04878 L 78.04878 78.04878 L -78.04878 78.04878 z"
                        stroke-linecap="round" />
                </a>
            @endif
        @empty
            <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="SmV-02q2aBM4eQ0CH6nkS">
                <path
                    style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #ffffff; fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(0, 0)"
                    d="M -78.04878 -78.04878 L 78.04878 -78.04878 L 78.04878 78.04878 L -78.04878 78.04878 z"
                    stroke-linecap="round" />
            </a>
        @endforelse
    </g>
    <g transform="matrix(2.2342726232 0 0 0.6255926992 1944.736892186 1469.1047788845)" id="izfr2F5sAFde7Ko1SXbCo">
        @forelse ($siteplan->where('code_product', 'izfr2F5sAFde7Ko1SXbCo') as $hasil)
            @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path
                    style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill:#ffc107; fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(0, 0)"
                    d="M -78.04878 -78.04878 L 78.04878 -78.04878 L 78.04878 78.04878 L -78.04878 78.04878 z"
                    stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path
                    style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill:#f50505; fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(0, 0)"
                    d="M -78.04878 -78.04878 L 78.04878 -78.04878 L 78.04878 78.04878 L -78.04878 78.04878 z"
                    stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
                <a href="#" data-toggle="modal" data-target="#modalBooking-izfr2F5sAFde7Ko1SXbCo">
                    <path
                        style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #ffffff; fill-rule: nonzero; opacity: 1;"
                        vector-effect="non-scaling-stroke" transform=" translate(0, 0)"
                        d="M -78.04878 -78.04878 L 78.04878 -78.04878 L 78.04878 78.04878 L -78.04878 78.04878 z"
                        stroke-linecap="round" />
                </a>
            @endif
        @empty
            <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="izfr2F5sAFde7Ko1SXbCo">
                <path
                    style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #ffffff; fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(0, 0)"
                    d="M -78.04878 -78.04878 L 78.04878 -78.04878 L 78.04878 78.04878 L -78.04878 78.04878 z"
                    stroke-linecap="round" />
            </a>
        @endforelse
    </g>
    <g transform="matrix(2.2342726232 0 0 0.6255926992 1944.736892186 1569.5332601936)" id="SRct477FaoeKBWUbq8fE7">
        @forelse ($siteplan->where('code_product', 'SRct477FaoeKBWUbq8fE7') as $hasil)
            @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path
                    style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill:#ffc107; fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(0, 0)"
                    d="M -78.04878 -78.04878 L 78.04878 -78.04878 L 78.04878 78.04878 L -78.04878 78.04878 z"
                    stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path
                    style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill:#f50505; fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(0, 0)"
                    d="M -78.04878 -78.04878 L 78.04878 -78.04878 L 78.04878 78.04878 L -78.04878 78.04878 z"
                    stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
                <a href="#" data-toggle="modal" data-target="#modalBooking-SRct477FaoeKBWUbq8fE7">
                    <path
                        style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #ffffff; fill-rule: nonzero; opacity: 1;"
                        vector-effect="non-scaling-stroke" transform=" translate(0, 0)"
                        d="M -78.04878 -78.04878 L 78.04878 -78.04878 L 78.04878 78.04878 L -78.04878 78.04878 z"
                        stroke-linecap="round" />
                </a>
            @endif
        @empty
            <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="SRct477FaoeKBWUbq8fE7">
                <path
                    style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #ffffff; fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(0, 0)"
                    d="M -78.04878 -78.04878 L 78.04878 -78.04878 L 78.04878 78.04878 L -78.04878 78.04878 z"
                    stroke-linecap="round" />
            </a>
        @endforelse
    </g>
    <g transform="matrix(2.2342726232 0 0 0.6255926992 1944.736892186 1669.9617415027)" id="OSgGnVzQ6FNZ0FWNgqkvq">
        @forelse ($siteplan->where('code_product', 'OSgGnVzQ6FNZ0FWNgqkvq') as $hasil)
            @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path
                    style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill:#ffc107; fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(0, 0)"
                    d="M -78.04878 -78.04878 L 78.04878 -78.04878 L 78.04878 78.04878 L -78.04878 78.04878 z"
                    stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path
                    style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill:#f50505; fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(0, 0)"
                    d="M -78.04878 -78.04878 L 78.04878 -78.04878 L 78.04878 78.04878 L -78.04878 78.04878 z"
                    stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
                <a href="#" data-toggle="modal" data-target="#modalBooking-OSgGnVzQ6FNZ0FWNgqkvq">
                    <path
                        style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #ffffff; fill-rule: nonzero; opacity: 1;"
                        vector-effect="non-scaling-stroke" transform=" translate(0, 0)"
                        d="M -78.04878 -78.04878 L 78.04878 -78.04878 L 78.04878 78.04878 L -78.04878 78.04878 z"
                        stroke-linecap="round" />
                </a>
            @endif
        @empty
            <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="OSgGnVzQ6FNZ0FWNgqkvq">
                <path
                    style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #ffffff; fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(0, 0)"
                    d="M -78.04878 -78.04878 L 78.04878 -78.04878 L 78.04878 78.04878 L -78.04878 78.04878 z"
                    stroke-linecap="round" />
            </a>
        @endforelse
    </g>
    <g transform="matrix(2.2342726232 0 0 0.6255926992 1944.736892186 1770.3902228118)" id="pZsw5UuR5swivgDDrg8_7">
        @forelse ($siteplan->where('code_product', 'pZsw5UuR5swivgDDrg8_7') as $hasil)
            @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path
                    style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill:#ffc107; fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(0, 0)"
                    d="M -78.04878 -78.04878 L 78.04878 -78.04878 L 78.04878 78.04878 L -78.04878 78.04878 z"
                    stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path
                    style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill:#f50505; fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(0, 0)"
                    d="M -78.04878 -78.04878 L 78.04878 -78.04878 L 78.04878 78.04878 L -78.04878 78.04878 z"
                    stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
                <a href="#" data-toggle="modal" data-target="#modalBooking-pZsw5UuR5swivgDDrg8_7">
                    <path
                        style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #ffffff; fill-rule: nonzero; opacity: 1;"
                        vector-effect="non-scaling-stroke" transform=" translate(0, 0)"
                        d="M -78.04878 -78.04878 L 78.04878 -78.04878 L 78.04878 78.04878 L -78.04878 78.04878 z"
                        stroke-linecap="round" />
                </a>
            @endif
        @empty
            <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="pZsw5UuR5swivgDDrg8_7">
                <path
                    style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #ffffff; fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(0, 0)"
                    d="M -78.04878 -78.04878 L 78.04878 -78.04878 L 78.04878 78.04878 L -78.04878 78.04878 z"
                    stroke-linecap="round" />
            </a>
        @endforelse
    </g>
    <g transform="matrix(2.3273673159 0 0 1.3902059982 1944.736892186 2573.8513005982)" id="x4OaFFwye2yHTWVwZcIeo">
        @forelse ($siteplan->where('code_product', 'x4OaFFwye2yHTWVwZcIeo') as $hasil)
            @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path
                    style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill:#ffc107; fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(-74.92683, -35.12195)"
                    d="M 0 70.2439 L 149.85366 70.2439 L 149.85366 0 L 0 0 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path
                    style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill:#f50505; fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(-74.92683, -35.12195)"
                    d="M 0 70.2439 L 149.85366 70.2439 L 149.85366 0 L 0 0 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
                <a href="#" data-toggle="modal" data-target="#modalBooking-x4OaFFwye2yHTWVwZcIeo">
                    <path
                        style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #ffffff; fill-rule: nonzero; opacity: 1;"
                        vector-effect="non-scaling-stroke" transform=" translate(-74.92683, -35.12195)"
                        d="M 0 70.2439 L 149.85366 70.2439 L 149.85366 0 L 0 0 z" stroke-linecap="round" />
                </a>
            @endif
        @empty
            <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="x4OaFFwye2yHTWVwZcIeo">
                <path
                    style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #ffffff; fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(-74.92683, -35.12195)"
                    d="M 0 70.2439 L 149.85366 70.2439 L 149.85366 0 L 0 0 z" stroke-linecap="round" />
            </a>
        @endforelse
    </g>
    <g transform="matrix(2.3273673159 0 0 1.3902059982 1944.736892186 2473.4228192891)" id="Mj4Na7Oei1RGgdRCrvxIM">
        @forelse ($siteplan->where('code_product', 'Mj4Na7Oei1RGgdRCrvxIM') as $hasil)
            @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path
                    style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill:#ffc107; fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(-74.92683, -35.12195)"
                    d="M 0 0 L 149.85366 0 L 149.85366 70.2439 L 0 70.2439 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path
                    style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill:#f50505; fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(-74.92683, -35.12195)"
                    d="M 0 0 L 149.85366 0 L 149.85366 70.2439 L 0 70.2439 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
                <a href="#" data-toggle="modal" data-target="#modalBooking-Mj4Na7Oei1RGgdRCrvxIM">
                    <path
                        style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #ffffff; fill-rule: nonzero; opacity: 1;"
                        vector-effect="non-scaling-stroke" transform=" translate(-74.92683, -35.12195)"
                        d="M 0 0 L 149.85366 0 L 149.85366 70.2439 L 0 70.2439 z" stroke-linecap="round" />
                </a>
            @endif
        @empty
            <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="Mj4Na7Oei1RGgdRCrvxIM">
                <path
                    style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #ffffff; fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(-74.92683, -35.12195)"
                    d="M 0 0 L 149.85366 0 L 149.85366 70.2439 L 0 70.2439 z" stroke-linecap="round" />
            </a>
        @endforelse
    </g>
    <g transform="matrix(2.3273673159 0 0 1.3902059982 1944.736892186 2372.99433798)" id="3l1MwfkvzfmtwyekjR-uM">
        @forelse ($siteplan->where('code_product', '3l1MwfkvzfmtwyekjR-uM') as $hasil)
            @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path
                    style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill:#ffc107; fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(-74.92683, -35.12195)"
                    d="M 0 70.2439 L 149.85366 70.2439 L 149.85366 0 L 0 0 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path
                    style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill:#f50505; fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(-74.92683, -35.12195)"
                    d="M 0 70.2439 L 149.85366 70.2439 L 149.85366 0 L 0 0 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
                <a href="#" data-toggle="modal" data-target="#modalBooking-3l1MwfkvzfmtwyekjR-uM">
                    <path
                        style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #ffffff; fill-rule: nonzero; opacity: 1;"
                        vector-effect="non-scaling-stroke" transform=" translate(-74.92683, -35.12195)"
                        d="M 0 70.2439 L 149.85366 70.2439 L 149.85366 0 L 0 0 z" stroke-linecap="round" />
                </a>
            @endif
        @empty
            <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="3l1MwfkvzfmtwyekjR-uM">
                <path
                    style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #ffffff; fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(-74.92683, -35.12195)"
                    d="M 0 70.2439 L 149.85366 70.2439 L 149.85366 0 L 0 0 z" stroke-linecap="round" />
            </a>
        @endforelse
    </g>
    <g transform="matrix(2.3273673159 0 0 1.3902059982 1944.736892186 2272.5658566709)" id="fW_2gUTszGYFOAJsbK4Yg">
        @forelse ($siteplan->where('code_product', 'fW_2gUTszGYFOAJsbK4Yg') as $hasil)
            @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path
                    style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill:#ffc107; fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(-74.92683, -35.12195)"
                    d="M 0 0 L 149.85366 0 L 149.85366 70.2439 L 0 70.2439 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path
                    style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill:#f50505; fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(-74.92683, -35.12195)"
                    d="M 0 0 L 149.85366 0 L 149.85366 70.2439 L 0 70.2439 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
                <a href="#" data-toggle="modal" data-target="#modalBooking-fW_2gUTszGYFOAJsbK4Yg">
                    <path
                        style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #ffffff; fill-rule: nonzero; opacity: 1;"
                        vector-effect="non-scaling-stroke" transform=" translate(-74.92683, -35.12195)"
                        d="M 0 0 L 149.85366 0 L 149.85366 70.2439 L 0 70.2439 z" stroke-linecap="round" />
                </a>
            @endif
        @empty
            <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="fW_2gUTszGYFOAJsbK4Yg">
                <path
                    style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #ffffff; fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(-74.92683, -35.12195)"
                    d="M 0 0 L 149.85366 0 L 149.85366 70.2439 L 0 70.2439 z" stroke-linecap="round" />
            </a>
        @endforelse
    </g>
    <g transform="matrix(2.3273673159 0 0 1.3902059982 1944.736892186 2172.1234733018)" id="6ELyiL8ca3pwelUygMVDc">
        @forelse ($siteplan->where('code_product', '6ELyiL8ca3pwelUygMVDc') as $hasil)
            @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path
                    style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill:#ffc107;  fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(-74.92683, -35.12195)"
                    d="M 0 0 L 149.85366 0 L 149.85366 70.2439 L 0 70.2439 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path
                    style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill:#f50505; fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(-74.92683, -35.12195)"
                    d="M 0 0 L 149.85366 0 L 149.85366 70.2439 L 0 70.2439 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
                <a href="#" data-toggle="modal" data-target="#modalBooking-6ELyiL8ca3pwelUygMVDc">
                    <path
                        style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #ffffff; fill-rule: nonzero; opacity: 1;"
                        vector-effect="non-scaling-stroke" transform=" translate(-74.92683, -35.12195)"
                        d="M 0 0 L 149.85366 0 L 149.85366 70.2439 L 0 70.2439 z" stroke-linecap="round" />
                </a>
            @endif
        @empty
            <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="6ELyiL8ca3pwelUygMVDc">
                <path
                    style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #ffffff; fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(-74.92683, -35.12195)"
                    d="M 0 0 L 149.85366 0 L 149.85366 70.2439 L 0 70.2439 z" stroke-linecap="round" />
            </a>
        @endforelse
    </g>
    <g transform="matrix(2.3273673159 0 0 1.3902059982 1944.736892186 2071.6949919927)" id="oCJ8LkkEuUxvTXtJ4wF8U">
        @forelse ($siteplan->where('code_product', 'oCJ8LkkEuUxvTXtJ4wF8U') as $hasil)
            @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path
                    style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill:#ffc107; fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(-74.92683, -35.12195)"
                    d="M 0 0 L 149.85366 0 L 149.85366 70.2439 L 0 70.2439 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path
                    style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill:#f50505; fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(-74.92683, -35.12195)"
                    d="M 0 0 L 149.85366 0 L 149.85366 70.2439 L 0 70.2439 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
                <a href="#" data-toggle="modal" data-target="#modalBooking-oCJ8LkkEuUxvTXtJ4wF8U">
                    <path
                        style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #ffffff; fill-rule: nonzero; opacity: 1;"
                        vector-effect="non-scaling-stroke" transform=" translate(-74.92683, -35.12195)"
                        d="M 0 0 L 149.85366 0 L 149.85366 70.2439 L 0 70.2439 z" stroke-linecap="round" />
                </a>
            @endif
        @empty
            <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="oCJ8LkkEuUxvTXtJ4wF8U">
                <path
                    style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #ffffff; fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(-74.92683, -35.12195)"
                    d="M 0 0 L 149.85366 0 L 149.85366 70.2439 L 0 70.2439 z" stroke-linecap="round" />
            </a>
        @endforelse
    </g>
    <g transform="matrix(2.3273673159 0 0 1.3902059982 1944.736892186 1971.2665106836)" id="re5Jwq7Jk4kV1DWNufuCv">
        @forelse ($siteplan->where('code_product', 're5Jwq7Jk4kV1DWNufuCv') as $hasil)
            @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path
                    style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill:#ffc107; fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(-74.92683, -35.12195)"
                    d="M 0 0 L 149.85366 0 L 149.85366 70.2439 L 0 70.2439 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path
                    style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;   fill:#f50505; fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(-74.92683, -35.12195)"
                    d="M 0 0 L 149.85366 0 L 149.85366 70.2439 L 0 70.2439 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
                <a href="#" data-toggle="modal" data-target="#modalBooking-re5Jwq7Jk4kV1DWNufuCv">
                    <path
                        style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #ffffff; fill-rule: nonzero; opacity: 1;"
                        vector-effect="non-scaling-stroke" transform=" translate(-74.92683, -35.12195)"
                        d="M 0 0 L 149.85366 0 L 149.85366 70.2439 L 0 70.2439 z" stroke-linecap="round" />
                </a>
            @endif
        @empty
            <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="re5Jwq7Jk4kV1DWNufuCv">
                <path
                    style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #ffffff; fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(-74.92683, -35.12195)"
                    d="M 0 0 L 149.85366 0 L 149.85366 70.2439 L 0 70.2439 z" stroke-linecap="round" />
            </a>
        @endforelse
    </g>
    <g transform="matrix(2.3273673159 0 0 1.3902059982 1944.736892186 1870.8241273145)" id="WLxalcO_5OR1I8mk8KKcQ">
        @forelse ($siteplan->where('code_product', 'WLxalcO_5OR1I8mk8KKcQ') as $hasil)
            @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path
                    style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill:#ffc107; fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(-74.92683, -35.12195)"
                    d="M 0 0 L 149.85366 0 L 149.85366 70.2439 L 0 70.2439 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path
                    style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill:#f50505; fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(-74.92683, -35.12195)"
                    d="M 0 0 L 149.85366 0 L 149.85366 70.2439 L 0 70.2439 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
                <a href="#" data-toggle="modal" data-target="#modalBooking-WLxalcO_5OR1I8mk8KKcQ">
                    <path
                        style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #ffffff; fill-rule: nonzero; opacity: 1;"
                        vector-effect="non-scaling-stroke" transform=" translate(-74.92683, -35.12195)"
                        d="M 0 0 L 149.85366 0 L 149.85366 70.2439 L 0 70.2439 z" stroke-linecap="round" />
                </a>
            @endif
        @empty
            <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="WLxalcO_5OR1I8mk8KKcQ">
                <path
                    style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #ffffff; fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(-74.92683, -35.12195)"
                    d="M 0 0 L 149.85366 0 L 149.85366 70.2439 L 0 70.2439 z" stroke-linecap="round" />
            </a>
        @endforelse
    </g>
    <g transform="matrix(2.2342726232 0 0 0.6255926992 1944.736892186 2672.3075356712)" id="71gVFdNTjekkSy7UvM5dI">
        @forelse ($siteplan->where('code_product', '71gVFdNTjekkSy7UvM5dI') as $hasil)
            @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path
                    style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill:#ffc107; fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(0, 0)"
                    d="M -78.04878 -78.04878 L 78.04878 -78.04878 L 78.04878 78.04878 L -78.04878 78.04878 z"
                    stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path
                    style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill:#f50505;  fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(0, 0)"
                    d="M -78.04878 -78.04878 L 78.04878 -78.04878 L 78.04878 78.04878 L -78.04878 78.04878 z"
                    stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
                <a href="#" data-toggle="modal" data-target="#modalBooking-71gVFdNTjekkSy7UvM5dI">
                    <path
                        style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #ffffff; fill-rule: nonzero; opacity: 1;"
                        vector-effect="non-scaling-stroke" transform=" translate(0, 0)"
                        d="M -78.04878 -78.04878 L 78.04878 -78.04878 L 78.04878 78.04878 L -78.04878 78.04878 z"
                        stroke-linecap="round" />
                </a>
            @endif
        @empty
            <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="71gVFdNTjekkSy7UvM5dI">
                <path
                    style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #ffffff; fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(0, 0)"
                    d="M -78.04878 -78.04878 L 78.04878 -78.04878 L 78.04878 78.04878 L -78.04878 78.04878 z"
                    stroke-linecap="round" />
            </a>
        @endforelse
    </g>
    <g transform="matrix(2.2342726232 0 0 0.6255926992 1944.736892186 2772.7499190403)" id="LqOPOr90HhrKT9o9BTLIA">
        @forelse ($siteplan->where('code_product', 'LqOPOr90HhrKT9o9BTLIA') as $hasil)
            @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path
                    style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill:#ffc107;  fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(0, 0)"
                    d="M -78.04878 -78.04878 L 78.04878 -78.04878 L 78.04878 78.04878 L -78.04878 78.04878 z"
                    stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path
                    style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill:#f50505; fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(0, 0)"
                    d="M -78.04878 -78.04878 L 78.04878 -78.04878 L 78.04878 78.04878 L -78.04878 78.04878 z"
                    stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
                <a href="#" data-toggle="modal" data-target="#modalBooking-LqOPOr90HhrKT9o9BTLIA">
                    <path
                        style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #ffffff; fill-rule: nonzero; opacity: 1;"
                        vector-effect="non-scaling-stroke" transform=" translate(0, 0)"
                        d="M -78.04878 -78.04878 L 78.04878 -78.04878 L 78.04878 78.04878 L -78.04878 78.04878 z"
                        stroke-linecap="round" />
                </a>
            @endif
        @empty
            <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="LqOPOr90HhrKT9o9BTLIA">
                <path
                    style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #ffffff; fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(0, 0)"
                    d="M -78.04878 -78.04878 L 78.04878 -78.04878 L 78.04878 78.04878 L -78.04878 78.04878 z"
                    stroke-linecap="round" />
            </a>
        @endforelse
    </g>
    <g transform="matrix(2.2342726232 0 0 0.6255926992 1944.736892186 2873.1784003494)" id="64bl1CR4YBwlss-psasTq">
        @forelse ($siteplan->where('code_product', '64bl1CR4YBwlss-psasTq') as $hasil)
            @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path
                    style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill:#ffc107; fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(0, 0)"
                    d="M -78.04878 -78.04878 L 78.04878 -78.04878 L 78.04878 78.04878 L -78.04878 78.04878 z"
                    stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path
                    style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill:#f50505; fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(0, 0)"
                    d="M -78.04878 -78.04878 L 78.04878 -78.04878 L 78.04878 78.04878 L -78.04878 78.04878 z"
                    stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
                <a href="#" data-toggle="modal" data-target="#modalBooking-64bl1CR4YBwlss-psasTq">
                    <path
                        style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #ffffff; fill-rule: nonzero; opacity: 1;"
                        vector-effect="non-scaling-stroke" transform=" translate(0, 0)"
                        d="M -78.04878 -78.04878 L 78.04878 -78.04878 L 78.04878 78.04878 L -78.04878 78.04878 z"
                        stroke-linecap="round" />
                </a>
            @endif
        @empty
            <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="64bl1CR4YBwlss-psasTq">
                <path
                    style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #ffffff; fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(0, 0)"
                    d="M -78.04878 -78.04878 L 78.04878 -78.04878 L 78.04878 78.04878 L -78.04878 78.04878 z"
                    stroke-linecap="round" />
            </a>
        @endforelse
    </g>
    <g transform="matrix(2.2342726232 0 0 0.6255926992 1944.736892186 2973.6068816584)" id="v-0fJRg_xI5rHC1sB2M9l">
        @forelse ($siteplan->where('code_product', 'v-0fJRg_xI5rHC1sB2M9l') as $hasil)
            @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path
                    style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill:#ffc107; fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(0, 0)"
                    d="M -78.04878 -78.04878 L 78.04878 -78.04878 L 78.04878 78.04878 L -78.04878 78.04878 z"
                    stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path
                    style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill:#f50505; fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(0, 0)"
                    d="M -78.04878 -78.04878 L 78.04878 -78.04878 L 78.04878 78.04878 L -78.04878 78.04878 z"
                    stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
                <a href="#" data-toggle="modal" data-target="#modalBooking-v-0fJRg_xI5rHC1sB2M9l">
                    <path
                        style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #ffffff; fill-rule: nonzero; opacity: 1;"
                        vector-effect="non-scaling-stroke" transform=" translate(0, 0)"
                        d="M -78.04878 -78.04878 L 78.04878 -78.04878 L 78.04878 78.04878 L -78.04878 78.04878 z"
                        stroke-linecap="round" />
                </a>
            @endif
        @empty
            <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="v-0fJRg_xI5rHC1sB2M9l">
                <path
                    style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #ffffff; fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(0, 0)"
                    d="M -78.04878 -78.04878 L 78.04878 -78.04878 L 78.04878 78.04878 L -78.04878 78.04878 z"
                    stroke-linecap="round" />
            </a>
        @endforelse
    </g>
    <g transform="matrix(2.2342726232 0 0 0.6255926992 1944.736892186 3074.0353629675)" id="wFJT97hoVDjJhQKgGyexA">
        @forelse ($siteplan->where('code_product', 'wFJT97hoVDjJhQKgGyexA') as $hasil)
            @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path
                    style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill:#ffc107; fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(0, 0)"
                    d="M -78.04878 -78.04878 L 78.04878 -78.04878 L 78.04878 78.04878 L -78.04878 78.04878 z"
                    stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path
                    style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill:#f50505; fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(0, 0)"
                    d="M -78.04878 -78.04878 L 78.04878 -78.04878 L 78.04878 78.04878 L -78.04878 78.04878 z"
                    stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
                <a href="#" data-toggle="modal" data-target="#modalBooking-wFJT97hoVDjJhQKgGyexA">
                    <path
                        style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #ffffff; fill-rule: nonzero; opacity: 1;"
                        vector-effect="non-scaling-stroke" transform=" translate(0, 0)"
                        d="M -78.04878 -78.04878 L 78.04878 -78.04878 L 78.04878 78.04878 L -78.04878 78.04878 z"
                        stroke-linecap="round" />
                </a>
            @endif
        @empty
            <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="wFJT97hoVDjJhQKgGyexA">
                <path
                    style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #ffffff; fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(0, 0)"
                    d="M -78.04878 -78.04878 L 78.04878 -78.04878 L 78.04878 78.04878 L -78.04878 78.04878 z"
                    stroke-linecap="round" />
            </a>
        @endforelse
    </g>
    <g transform="matrix(2.2342726232 0 0 0.6255926992 1944.736892186 3174.4638442766)" id="7AGvx0K3uudBPIhEPFtky">
        @forelse ($siteplan->where('code_product', '7AGvx0K3uudBPIhEPFtky') as $hasil)
            @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path
                    style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill:#ffc107; fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(0, 0)"
                    d="M -78.04878 -78.04878 L 78.04878 -78.04878 L 78.04878 78.04878 L -78.04878 78.04878 z"
                    stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path
                    style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill:#f50505; fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(0, 0)"
                    d="M -78.04878 -78.04878 L 78.04878 -78.04878 L 78.04878 78.04878 L -78.04878 78.04878 z"
                    stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
                <a href="#" data-toggle="modal" data-target="#modalBooking-7AGvx0K3uudBPIhEPFtky">
                    <path
                        style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #ffffff; fill-rule: nonzero; opacity: 1;"
                        vector-effect="non-scaling-stroke" transform=" translate(0, 0)"
                        d="M -78.04878 -78.04878 L 78.04878 -78.04878 L 78.04878 78.04878 L -78.04878 78.04878 z"
                        stroke-linecap="round" />
                </a>
            @endif
        @empty
            <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="7AGvx0K3uudBPIhEPFtky">
                <path
                    style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #ffffff; fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(0, 0)"
                    d="M -78.04878 -78.04878 L 78.04878 -78.04878 L 78.04878 78.04878 L -78.04878 78.04878 z"
                    stroke-linecap="round" />
            </a>
        @endforelse
    </g>
    <g transform="matrix(2.2342726232 0 0 0.6255926992 1944.736892186 3274.8923255857)" id="nSP3qygFJ2IN2BlcalzFZ">
        @forelse ($siteplan->where('code_product', 'nSP3qygFJ2IN2BlcalzFZ') as $hasil)
            @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path
                    style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill:#ffc107; fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(0, 0)"
                    d="M -78.04878 -78.04878 L 78.04878 -78.04878 L 78.04878 78.04878 L -78.04878 78.04878 z"
                    stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path
                    style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill:#f50505; fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(0, 0)"
                    d="M -78.04878 -78.04878 L 78.04878 -78.04878 L 78.04878 78.04878 L -78.04878 78.04878 z"
                    stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
                <a href="#" data-toggle="modal" data-target="#modalBooking-nSP3qygFJ2IN2BlcalzFZ">
                    <path
                        style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #ffffff; fill-rule: nonzero; opacity: 1;"
                        vector-effect="non-scaling-stroke" transform=" translate(0, 0)"
                        d="M -78.04878 -78.04878 L 78.04878 -78.04878 L 78.04878 78.04878 L -78.04878 78.04878 z"
                        stroke-linecap="round" />
                </a>
            @endif
        @empty
            <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="nSP3qygFJ2IN2BlcalzFZ">
                <path
                    style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #ffffff; fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(0, 0)"
                    d="M -78.04878 -78.04878 L 78.04878 -78.04878 L 78.04878 78.04878 L -78.04878 78.04878 z"
                    stroke-linecap="round" />
            </a>
        @endforelse
    </g>
    <g transform="matrix(2.2342726232 0 0 0.6255926992 1944.736892186 3375.3208068948)" id="ebLpHxYCjYM4ugFDMV5jf">
        @forelse ($siteplan->where('code_product', 'ebLpHxYCjYM4ugFDMV5jf') as $hasil)
            @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path
                    style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill:#ffc107;  fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(0, 0)"
                    d="M -78.04878 -78.04878 L 78.04878 -78.04878 L 78.04878 78.04878 L -78.04878 78.04878 z"
                    stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path
                    style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill:#f50505; fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(0, 0)"
                    d="M -78.04878 -78.04878 L 78.04878 -78.04878 L 78.04878 78.04878 L -78.04878 78.04878 z"
                    stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
                <a href="#" data-toggle="modal" data-target="#modalBooking-ebLpHxYCjYM4ugFDMV5jf">
                    <path
                        style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #ffffff; fill-rule: nonzero; opacity: 1;"
                        vector-effect="non-scaling-stroke" transform=" translate(0, 0)"
                        d="M -78.04878 -78.04878 L 78.04878 -78.04878 L 78.04878 78.04878 L -78.04878 78.04878 z"
                        stroke-linecap="round" />
                </a>
            @endif
        @empty
            <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="ebLpHxYCjYM4ugFDMV5jf">
                <path
                    style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #ffffff; fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(0, 0)"
                    d="M -78.04878 -78.04878 L 78.04878 -78.04878 L 78.04878 78.04878 L -78.04878 78.04878 z"
                    stroke-linecap="round" />
            </a>
        @endforelse
    </g>
    <g transform="matrix(2.3273673159 0 0 1.3902059982 1944.736892186 4078.3618822385)" id="OSqqdrTT3i-j1HXOGQdLr">
        @forelse ($siteplan->where('code_product', 'OSqqdrTT3i-j1HXOGQdLr') as $hasil)
            @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path
                    style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill:#ffc107; fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(-74.92683, -35.12195)"
                    d="M 0 0 L 149.85366 0 L 149.85366 70.2439 L 0 70.2439 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path
                    style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill:#f50505; fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(-74.92683, -35.12195)"
                    d="M 0 0 L 149.85366 0 L 149.85366 70.2439 L 0 70.2439 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
                <a href="#" data-toggle="modal" data-target="#modalBooking-OSqqdrTT3i-j1HXOGQdLr">
                    <path
                        style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #ffffff; fill-rule: nonzero; opacity: 1;"
                        vector-effect="non-scaling-stroke" transform=" translate(-74.92683, -35.12195)"
                        d="M 0 0 L 149.85366 0 L 149.85366 70.2439 L 0 70.2439 z" stroke-linecap="round" />
                </a>
            @endif
        @empty
            <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="OSqqdrTT3i-j1HXOGQdLr">
                <path
                    style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #ffffff; fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(-74.92683, -35.12195)"
                    d="M 0 0 L 149.85366 0 L 149.85366 70.2439 L 0 70.2439 z" stroke-linecap="round" />
            </a>
        @endforelse
    </g>
    <g transform="matrix(2.3273673159 0 0 1.3902059982 1944.736892186 3977.9334009294)" id="U2BzjY0ms0hlS393MZXMg">
        @forelse ($siteplan->where('code_product', 'U2BzjY0ms0hlS393MZXMg') as $hasil)
            @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path
                    style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill:#ffc107; fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(-74.92683, -35.12195)"
                    d="M 0 70.2439 L 149.85366 70.2439 L 149.85366 0 L 0 0 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path
                    style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill:#f50505;fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(-74.92683, -35.12195)"
                    d="M 0 70.2439 L 149.85366 70.2439 L 149.85366 0 L 0 0 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
                <a href="#" data-toggle="modal" data-target="#modalBooking-U2BzjY0ms0hlS393MZXMg">
                    <path
                        style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #ffffff; fill-rule: nonzero; opacity: 1;"
                        vector-effect="non-scaling-stroke" transform=" translate(-74.92683, -35.12195)"
                        d="M 0 70.2439 L 149.85366 70.2439 L 149.85366 0 L 0 0 z" stroke-linecap="round" />
                </a>
            @endif
        @empty
            <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="U2BzjY0ms0hlS393MZXMg">
                <path
                    style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #ffffff; fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(-74.92683, -35.12195)"
                    d="M 0 70.2439 L 149.85366 70.2439 L 149.85366 0 L 0 0 z" stroke-linecap="round" />
            </a>
        @endforelse
    </g>
    <g transform="matrix(2.3273673159 0 0 1.3902059982 1944.736892186 3877.5049196203)" id="ZikNcjLcMHJEvu2yX5hxI">
        @forelse ($siteplan->where('code_product', 'ZikNcjLcMHJEvu2yX5hxI') as $hasil)
            @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path
                    style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill:#ffc107;  fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(-74.92683, -35.12195)"
                    d="M 0 0 L 149.85366 0 L 149.85366 70.2439 L 0 70.2439 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path
                    style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill:#f50505; fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(-74.92683, -35.12195)"
                    d="M 0 0 L 149.85366 0 L 149.85366 70.2439 L 0 70.2439 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
                <a href="#" data-toggle="modal" data-target="#modalBooking-ZikNcjLcMHJEvu2yX5hxI">
                    <path
                        style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #ffffff; fill-rule: nonzero; opacity: 1;"
                        vector-effect="non-scaling-stroke" transform=" translate(-74.92683, -35.12195)"
                        d="M 0 0 L 149.85366 0 L 149.85366 70.2439 L 0 70.2439 z" stroke-linecap="round" />
                </a>
            @endif
        @empty
            <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="ZikNcjLcMHJEvu2yX5hxI">
                <path
                    style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #ffffff; fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(-74.92683, -35.12195)"
                    d="M 0 0 L 149.85366 0 L 149.85366 70.2439 L 0 70.2439 z" stroke-linecap="round" />
            </a>
        @endforelse
    </g>
    <g transform="matrix(2.3273673159 0 0 1.3902059982 1944.736892186 3777.0625362512)" id="dJc7_aKAfUnhYqN_iGHA2">
        @forelse ($siteplan->where('code_product', 'dJc7_aKAfUnhYqN_iGHA2') as $hasil)
            @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path
                    style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill:#ffc107;fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(-74.92683, -35.12195)"
                    d="M 0 0 L 149.85366 0 L 149.85366 70.2439 L 0 70.2439 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path
                    style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill:#f50505; fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(-74.92683, -35.12195)"
                    d="M 0 0 L 149.85366 0 L 149.85366 70.2439 L 0 70.2439 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
                <a href="#" data-toggle="modal" data-target="#modalBooking-dJc7_aKAfUnhYqN_iGHA2">
                    <path
                        style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #ffffff; fill-rule: nonzero; opacity: 1;"
                        vector-effect="non-scaling-stroke" transform=" translate(-74.92683, -35.12195)"
                        d="M 0 0 L 149.85366 0 L 149.85366 70.2439 L 0 70.2439 z" stroke-linecap="round" />
                </a>
            @endif
        @empty
            <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="dJc7_aKAfUnhYqN_iGHA2">
                <path
                    style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #ffffff; fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(-74.92683, -35.12195)"
                    d="M 0 0 L 149.85366 0 L 149.85366 70.2439 L 0 70.2439 z" stroke-linecap="round" />
            </a>
        @endforelse
    </g>
    <g transform="matrix(2.3273673159 0 0 1.3902059982 1944.736892186 3676.6340549421)" id="I8-_aDA3PucWk5b1nOlo2">
        @forelse ($siteplan->where('code_product', 'I8-_aDA3PucWk5b1nOlo2') as $hasil)
            @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path
                    style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill:#ffc107; fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(-74.92683, -35.12195)"
                    d="M 0 0 L 149.85366 0 L 149.85366 70.2439 L 0 70.2439 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path
                    style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill:#f50505; fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(-74.92683, -35.12195)"
                    d="M 0 0 L 149.85366 0 L 149.85366 70.2439 L 0 70.2439 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
                <a href="#" data-toggle="modal" data-target="#modalBooking-I8-_aDA3PucWk5b1nOlo2">
                    <path
                        style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #ffffff; fill-rule: nonzero; opacity: 1;"
                        vector-effect="non-scaling-stroke" transform=" translate(-74.92683, -35.12195)"
                        d="M 0 0 L 149.85366 0 L 149.85366 70.2439 L 0 70.2439 z" stroke-linecap="round" />
                </a>
            @endif
        @empty
            <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="I8-_aDA3PucWk5b1nOlo2">
                <path
                    style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #ffffff; fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(-74.92683, -35.12195)"
                    d="M 0 0 L 149.85366 0 L 149.85366 70.2439 L 0 70.2439 z" stroke-linecap="round" />
            </a>
        @endforelse
    </g>
    <g transform="matrix(2.3273673159 0 0 1.3902059982 1944.736892186 3576.205573633)" id="5LojT4fxL8s9R2_uqmDhB">
        @forelse ($siteplan->where('code_product', '5LojT4fxL8s9R2_uqmDhB') as $hasil)
            @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path
                    style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill:#ffc107;  fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(-74.92683, -35.12195)"
                    d="M 0 0 L 149.85366 0 L 149.85366 70.2439 L 0 70.2439 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path
                    style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill:#f50505; fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(-74.92683, -35.12195)"
                    d="M 0 0 L 149.85366 0 L 149.85366 70.2439 L 0 70.2439 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
                <a href="#" data-toggle="modal" data-target="#modalBooking-5LojT4fxL8s9R2_uqmDhB">
                    <path
                        style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #ffffff; fill-rule: nonzero; opacity: 1;"
                        vector-effect="non-scaling-stroke" transform=" translate(-74.92683, -35.12195)"
                        d="M 0 0 L 149.85366 0 L 149.85366 70.2439 L 0 70.2439 z" stroke-linecap="round" />
                </a>
            @endif
        @empty
            <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="5LojT4fxL8s9R2_uqmDhB">
                <path
                    style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #ffffff; fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(-74.92683, -35.12195)"
                    d="M 0 0 L 149.85366 0 L 149.85366 70.2439 L 0 70.2439 z" stroke-linecap="round" />
            </a>
        @endforelse
    </g>
    <g transform="matrix(2.3273673159 0 0 1.3902059982 1944.736892186 3475.7631902639)" id="kaxUOmMcSjvqyKX8q6o8_">
        @forelse ($siteplan->where('code_product', 'kaxUOmMcSjvqyKX8q6o8_') as $hasil)
            @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path
                    style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill:#ffc107; fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(-74.92683, -35.12195)"
                    d="M 0 0 L 149.85366 0 L 149.85366 70.2439 L 0 70.2439 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path
                    style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill:#f50505; fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(-74.92683, -35.12195)"
                    d="M 0 0 L 149.85366 0 L 149.85366 70.2439 L 0 70.2439 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
                <a href="#" data-toggle="modal" data-target="#modalBooking-kaxUOmMcSjvqyKX8q6o8_">
                    <path
                        style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #ffffff; fill-rule: nonzero; opacity: 1;"
                        vector-effect="non-scaling-stroke" transform=" translate(-74.92683, -35.12195)"
                        d="M 0 0 L 149.85366 0 L 149.85366 70.2439 L 0 70.2439 z" stroke-linecap="round" />
                </a>
            @endif
        @empty
            <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="kaxUOmMcSjvqyKX8q6o8_">
                <path
                    style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #ffffff; fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(-74.92683, -35.12195)"
                    d="M 0 0 L 149.85366 0 L 149.85366 70.2439 L 0 70.2439 z" stroke-linecap="round" />
            </a>
        @endforelse
    </g>
    <g transform="matrix(2.1532857371 0 0 1.3940214531 1526.6212813873 2633.3858018592)" id="ssaXXTV7exJT_j-e33wjm">
        @forelse ($siteplan->where('code_product', 'ssaXXTV7exJT_j-e33wjm') as $hasil)
            @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path
                    style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill:#ffc107; fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(-74.92683, -35.12195)"
                    d="M 0 70.2439 L 149.85366 70.2439 L 149.85366 0 L 0 0 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path
                    style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill:#f50505; fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(-74.92683, -35.12195)"
                    d="M 0 70.2439 L 149.85366 70.2439 L 149.85366 0 L 0 0 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
                <a href="#" data-toggle="modal" data-target="#modalBooking-ssaXXTV7exJT_j-e33wjm">
                    <path
                        style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #ffffff; fill-rule: nonzero; opacity: 1;"
                        vector-effect="non-scaling-stroke" transform=" translate(-74.92683, -35.12195)"
                        d="M 0 70.2439 L 149.85366 70.2439 L 149.85366 0 L 0 0 z" stroke-linecap="round" />
                </a>
            @endif
        @empty
            <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="ssaXXTV7exJT_j-e33wjm">
                <path
                    style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #ffffff; fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(-74.92683, -35.12195)"
                    d="M 0 70.2439 L 149.85366 70.2439 L 149.85366 0 L 0 0 z" stroke-linecap="round" />
            </a>
        @endforelse
    </g>
    <g transform="matrix(2.1532857371 0 0 1.3940214531 1526.6212813873 2532.6816920849)" id="t3jVZa4Q4Xz5agsyBFdXz">
        @forelse ($siteplan->where('code_product', 't3jVZa4Q4Xz5agsyBFdXz') as $hasil)
            @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path
                    style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill:#ffc107; fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(-74.92683, -35.12195)"
                    d="M 0 0 L 149.85366 0 L 149.85366 70.2439 L 0 70.2439 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path
                    style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill:#f50505; fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(-74.92683, -35.12195)"
                    d="M 0 0 L 149.85366 0 L 149.85366 70.2439 L 0 70.2439 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
                <a href="#" data-toggle="modal" data-target="#modalBooking-t3jVZa4Q4Xz5agsyBFdXz">
                    <path
                        style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #ffffff; fill-rule: nonzero; opacity: 1;"
                        vector-effect="non-scaling-stroke" transform=" translate(-74.92683, -35.12195)"
                        d="M 0 0 L 149.85366 0 L 149.85366 70.2439 L 0 70.2439 z" stroke-linecap="round" />
                </a>
            @endif
        @empty
            <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="t3jVZa4Q4Xz5agsyBFdXz">
                <path
                    style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #ffffff; fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(-74.92683, -35.12195)"
                    d="M 0 0 L 149.85366 0 L 149.85366 70.2439 L 0 70.2439 z" stroke-linecap="round" />
            </a>
        @endforelse
    </g>
    <g transform="matrix(2.1532857371 0 0 1.3940214531 1526.6212813873 2431.9775823105)" id="M8sp1yG3KjMNdMNZ2GqPQ">
        @forelse ($siteplan->where('code_product', 'M8sp1yG3KjMNdMNZ2GqPQ') as $hasil)
            @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path
                    style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill:#ffc107;  fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(-74.92683, -35.12195)"
                    d="M 0 70.2439 L 149.85366 70.2439 L 149.85366 0 L 0 0 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path
                    style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill:#f50505; fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(-74.92683, -35.12195)"
                    d="M 0 70.2439 L 149.85366 70.2439 L 149.85366 0 L 0 0 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
                <a href="#" data-toggle="modal" data-target="#modalBooking-M8sp1yG3KjMNdMNZ2GqPQ">
                    <path
                        style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #ffffff; fill-rule: nonzero; opacity: 1;"
                        vector-effect="non-scaling-stroke" transform=" translate(-74.92683, -35.12195)"
                        d="M 0 70.2439 L 149.85366 70.2439 L 149.85366 0 L 0 0 z" stroke-linecap="round" />
                </a>
            @endif
        @empty
            <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="M8sp1yG3KjMNdMNZ2GqPQ">
                <path
                    style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #ffffff; fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(-74.92683, -35.12195)"
                    d="M 0 70.2439 L 149.85366 70.2439 L 149.85366 0 L 0 0 z" stroke-linecap="round" />
            </a>
        @endforelse
    </g>
    <g transform="matrix(2.1532857371 0 0 1.3940214531 1526.6212813873 2331.2734725361)" id="ax_R0j1VpkkgT7VCmOTQE">
        @forelse ($siteplan->where('code_product', 'ax_R0j1VpkkgT7VCmOTQE') as $hasil)
            @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path
                    style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill:#ffc107; fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(-74.92683, -35.12195)"
                    d="M 0 0 L 149.85366 0 L 149.85366 70.2439 L 0 70.2439 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path
                    style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill:#f50505; fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(-74.92683, -35.12195)"
                    d="M 0 0 L 149.85366 0 L 149.85366 70.2439 L 0 70.2439 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
                <a href="#" data-toggle="modal" data-target="#modalBooking-ax_R0j1VpkkgT7VCmOTQE">
                    <path
                        style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #ffffff; fill-rule: nonzero; opacity: 1;"
                        vector-effect="non-scaling-stroke" transform=" translate(-74.92683, -35.12195)"
                        d="M 0 0 L 149.85366 0 L 149.85366 70.2439 L 0 70.2439 z" stroke-linecap="round" />
                </a>
            @endif
        @empty
            <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="ax_R0j1VpkkgT7VCmOTQE">
                <path
                    style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #ffffff; fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(-74.92683, -35.12195)"
                    d="M 0 0 L 149.85366 0 L 149.85366 70.2439 L 0 70.2439 z" stroke-linecap="round" />
            </a>
        @endforelse
    </g>
    <g transform="matrix(2.1532857371 0 0 1.3940214531 1526.6212813873 2230.5554225473)" id="-KxZneoC6htZenP2s7--2">
        @forelse ($siteplan->where('code_product', '-KxZneoC6htZenP2s7--2') as $hasil)
            @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path
                    style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill:#ffc107; fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(-74.92683, -35.12195)"
                    d="M 0 0 L 149.85366 0 L 149.85366 70.2439 L 0 70.2439 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path
                    style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill:#f50505; fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(-74.92683, -35.12195)"
                    d="M 0 0 L 149.85366 0 L 149.85366 70.2439 L 0 70.2439 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
                <a href="#" data-toggle="modal" data-target="#modalBooking--KxZneoC6htZenP2s7--2">
                    <path
                        style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #ffffff; fill-rule: nonzero; opacity: 1;"
                        vector-effect="non-scaling-stroke" transform=" translate(-74.92683, -35.12195)"
                        d="M 0 0 L 149.85366 0 L 149.85366 70.2439 L 0 70.2439 z" stroke-linecap="round" />
                </a>
            @endif
        @empty
            <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="-KxZneoC6htZenP2s7--2">
                <path
                    style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #ffffff; fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(-74.92683, -35.12195)"
                    d="M 0 0 L 149.85366 0 L 149.85366 70.2439 L 0 70.2439 z" stroke-linecap="round" />
            </a>
        @endforelse
    </g>
    <g transform="matrix(2.1532857371 0 0 1.3940214531 1526.6212813873 2129.8513127729)" id="Y7IgS81xle1TgvgDwwu7u">
        @forelse ($siteplan->where('code_product', 'Y7IgS81xle1TgvgDwwu7u') as $hasil)
            @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path
                    style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill:#ffc107; fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(-74.92683, -35.12195)"
                    d="M 0 0 L 149.85366 0 L 149.85366 70.2439 L 0 70.2439 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path
                    style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill:#f50505; fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(-74.92683, -35.12195)"
                    d="M 0 0 L 149.85366 0 L 149.85366 70.2439 L 0 70.2439 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
                <a href="#" data-toggle="modal" data-target="#modalBooking-Y7IgS81xle1TgvgDwwu7u">
                    <path
                        style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #ffffff; fill-rule: nonzero; opacity: 1;"
                        vector-effect="non-scaling-stroke" transform=" translate(-74.92683, -35.12195)"
                        d="M 0 0 L 149.85366 0 L 149.85366 70.2439 L 0 70.2439 z" stroke-linecap="round" />
                </a>
            @endif
        @empty
            <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="Y7IgS81xle1TgvgDwwu7u">
                <path
                    style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #ffffff; fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(-74.92683, -35.12195)"
                    d="M 0 0 L 149.85366 0 L 149.85366 70.2439 L 0 70.2439 z" stroke-linecap="round" />
            </a>
        @endforelse
    </g>
    <g transform="matrix(2.1532857371 0 0 1.3940214531 1526.6212813873 2029.1472029985)" id="gZXaR4L-QfcLfM-siCB11">
        @forelse ($siteplan->where('code_product', 'gZXaR4L-QfcLfM-siCB11') as $hasil)
            @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path
                    style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill:#ffc107; fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(-74.92683, -35.12195)"
                    d="M 0 0 L 149.85366 0 L 149.85366 70.2439 L 0 70.2439 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path
                    style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill:#f50505; fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(-74.92683, -35.12195)"
                    d="M 0 0 L 149.85366 0 L 149.85366 70.2439 L 0 70.2439 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
                <a href="#" data-toggle="modal" data-target="#modalBooking-gZXaR4L-QfcLfM-siCB11">
                    <path
                        style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #ffffff; fill-rule: nonzero; opacity: 1;"
                        vector-effect="non-scaling-stroke" transform=" translate(-74.92683, -35.12195)"
                        d="M 0 0 L 149.85366 0 L 149.85366 70.2439 L 0 70.2439 z" stroke-linecap="round" />
                </a>
            @endif
        @empty
            <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="gZXaR4L-QfcLfM-siCB11">
                <path
                    style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #ffffff; fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(-74.92683, -35.12195)"
                    d="M 0 0 L 149.85366 0 L 149.85366 70.2439 L 0 70.2439 z" stroke-linecap="round" />
            </a>
        @endforelse
    </g>
    <g transform="matrix(2.1532857371 0 0 1.3940214531 1526.6212813873 1928.4291530096)" id="vTXEdgtP4KbdMs5Mh7m-O">
        @forelse ($siteplan->where('code_product', 'vTXEdgtP4KbdMs5Mh7m-O') as $hasil)
            @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path
                    style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill:#ffc107;  fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(-74.92683, -35.12195)"
                    d="M 0 0 L 149.85366 0 L 149.85366 70.2439 L 0 70.2439 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path
                    style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill:#f50505; fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(-74.92683, -35.12195)"
                    d="M 0 0 L 149.85366 0 L 149.85366 70.2439 L 0 70.2439 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
                <a href="#" data-toggle="modal" data-target="#modalBooking-vTXEdgtP4KbdMs5Mh7m-O">
                    <path
                        style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #ffffff; fill-rule: nonzero; opacity: 1;"
                        vector-effect="non-scaling-stroke" transform=" translate(-74.92683, -35.12195)"
                        d="M 0 0 L 149.85366 0 L 149.85366 70.2439 L 0 70.2439 z" stroke-linecap="round" />
                </a>
            @endif
        @empty
            <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="vTXEdgtP4KbdMs5Mh7m-O">
                <path
                    style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #ffffff; fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(-74.92683, -35.12195)"
                    d="M 0 0 L 149.85366 0 L 149.85366 70.2439 L 0 70.2439 z" stroke-linecap="round" />
            </a>
        @endforelse
    </g>
    <g transform="matrix(2.0671543076 0 0 0.6273096539 1526.6212813873 2732.1104011701)" id="ZjZaOPqjGsPQbjj5r2K-g">
        @forelse ($siteplan->where('code_product', 'ZjZaOPqjGsPQbjj5r2K-g') as $hasil)
            @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path
                    style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill:#ffc107; fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(0, 0)"
                    d="M -78.04878 -78.04878 L 78.04878 -78.04878 L 78.04878 78.04878 L -78.04878 78.04878 z"
                    stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path
                    style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill:#f50505; fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(0, 0)"
                    d="M -78.04878 -78.04878 L 78.04878 -78.04878 L 78.04878 78.04878 L -78.04878 78.04878 z"
                    stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
                <a href="#" data-toggle="modal" data-target="#modalBooking-ZjZaOPqjGsPQbjj5r2K-g">
                    <path
                        style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #ffffff; fill-rule: nonzero; opacity: 1;"
                        vector-effect="non-scaling-stroke" transform=" translate(0, 0)"
                        d="M -78.04878 -78.04878 L 78.04878 -78.04878 L 78.04878 78.04878 L -78.04878 78.04878 z"
                        stroke-linecap="round" />
                </a>
            @endif
        @empty
            <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="ZjZaOPqjGsPQbjj5r2K-g">
                <path
                    style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #ffffff; fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(0, 0)"
                    d="M -78.04878 -78.04878 L 78.04878 -78.04878 L 78.04878 78.04878 L -78.04878 78.04878 z"
                    stroke-linecap="round" />
            </a>
        @endforelse
    </g>
    <g transform="matrix(2.0671543076 0 0 0.6273096539 1526.6212813873 2832.828451159)" id="2REKeJsckh7tQDfBHxzZK">
        @forelse ($siteplan->where('code_product', '2REKeJsckh7tQDfBHxzZK') as $hasil)
            @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path
                    style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill:#ffc107; fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(0, 0)"
                    d="M -78.04878 -78.04878 L 78.04878 -78.04878 L 78.04878 78.04878 L -78.04878 78.04878 z"
                    stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path
                    style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill:#f50505; fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(0, 0)"
                    d="M -78.04878 -78.04878 L 78.04878 -78.04878 L 78.04878 78.04878 L -78.04878 78.04878 z"
                    stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
                <a href="#" data-toggle="modal" data-target="#modalBooking-2REKeJsckh7tQDfBHxzZK">
                    <path
                        style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #ffffff; fill-rule: nonzero; opacity: 1;"
                        vector-effect="non-scaling-stroke" transform=" translate(0, 0)"
                        d="M -78.04878 -78.04878 L 78.04878 -78.04878 L 78.04878 78.04878 L -78.04878 78.04878 z"
                        stroke-linecap="round" />
                </a>
            @endif
        @empty
            <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="2REKeJsckh7tQDfBHxzZK">
                <path
                    style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #ffffff; fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(0, 0)"
                    d="M -78.04878 -78.04878 L 78.04878 -78.04878 L 78.04878 78.04878 L -78.04878 78.04878 z"
                    stroke-linecap="round" />
            </a>
        @endforelse
    </g>
    <g transform="matrix(2.0671543076 0 0 0.6273096539 1526.6212813873 2933.5325609334)" id="SoJCk1eIbGkKMRB5dlz0S">
        @forelse ($siteplan->where('code_product', 'SoJCk1eIbGkKMRB5dlz0S') as $hasil)
            @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path
                    style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill:#ffc107;fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(0, 0)"
                    d="M -78.04878 -78.04878 L 78.04878 -78.04878 L 78.04878 78.04878 L -78.04878 78.04878 z"
                    stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path
                    style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill:#f50505; fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(0, 0)"
                    d="M -78.04878 -78.04878 L 78.04878 -78.04878 L 78.04878 78.04878 L -78.04878 78.04878 z"
                    stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
                <a href="#" data-toggle="modal" data-target="#modalBooking-SoJCk1eIbGkKMRB5dlz0S">
                    <path
                        style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #ffffff; fill-rule: nonzero; opacity: 1;"
                        vector-effect="non-scaling-stroke" transform=" translate(0, 0)"
                        d="M -78.04878 -78.04878 L 78.04878 -78.04878 L 78.04878 78.04878 L -78.04878 78.04878 z"
                        stroke-linecap="round" />
                </a>
            @endif
        @empty
            <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="SoJCk1eIbGkKMRB5dlz0S">
                <path
                    style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #ffffff; fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(0, 0)"
                    d="M -78.04878 -78.04878 L 78.04878 -78.04878 L 78.04878 78.04878 L -78.04878 78.04878 z"
                    stroke-linecap="round" />
            </a>
        @endforelse
    </g>
    <g transform="matrix(2.0671543076 0 0 0.6273096539 790.8278079174 1069.2249854146)" id="4w-z2_4EithGznPN03DIc">
        @forelse ($siteplan->where('code_product', '4w-z2_4EithGznPN03DIc') as $hasil)
            @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path
                    style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill:#ffc107; fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(0, 0)"
                    d="M -78.04878 -78.04878 L 78.04878 -78.04878 L 78.04878 78.04878 L -78.04878 78.04878 z"
                    stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path
                    style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill:#f50505; fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(0, 0)"
                    d="M -78.04878 -78.04878 L 78.04878 -78.04878 L 78.04878 78.04878 L -78.04878 78.04878 z"
                    stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
                <a href="#" data-toggle="modal" data-target="#modalBooking-4w-z2_4EithGznPN03DIc">
                    <path
                        style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #d9d9d9; fill-rule: nonzero; opacity: 1;"
                        vector-effect="non-scaling-stroke" transform=" translate(0, 0)"
                        d="M -78.04878 -78.04878 L 78.04878 -78.04878 L 78.04878 78.04878 L -78.04878 78.04878 z"
                        stroke-linecap="round" />
                </a>
            @endif
        @empty
            <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="4w-z2_4EithGznPN03DIc">
                <path
                    style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #d9d9d9; fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(0, 0)"
                    d="M -78.04878 -78.04878 L 78.04878 -78.04878 L 78.04878 78.04878 L -78.04878 78.04878 z"
                    stroke-linecap="round" />
            </a>
        @endforelse
    </g>
    <g transform="matrix(2.0671543076 0 0 0.6273096539 790.8278079174 1169.9290951889)" id="kWaZYnWuZ-0btOmoufI7J">
        @forelse ($siteplan->where('code_product', 'kWaZYnWuZ-0btOmoufI7J') as $hasil)
            @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path
                    style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill:#ffc107;  fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(0, 0)"
                    d="M -78.04878 -78.04878 L 78.04878 -78.04878 L 78.04878 78.04878 L -78.04878 78.04878 z"
                    stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path
                    style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill:#f50505; fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(0, 0)"
                    d="M -78.04878 -78.04878 L 78.04878 -78.04878 L 78.04878 78.04878 L -78.04878 78.04878 z"
                    stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
                <a href="#" data-toggle="modal" data-target="#modalBooking-kWaZYnWuZ-0btOmoufI7J">
                    <path
                        style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #d9d9d9; fill-rule: nonzero; opacity: 1;"
                        vector-effect="non-scaling-stroke" transform=" translate(0, 0)"
                        d="M -78.04878 -78.04878 L 78.04878 -78.04878 L 78.04878 78.04878 L -78.04878 78.04878 z"
                        stroke-linecap="round" />
                </a>
            @endif
        @empty
            <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="kWaZYnWuZ-0btOmoufI7J">
                <path
                    style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #d9d9d9; fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(0, 0)"
                    d="M -78.04878 -78.04878 L 78.04878 -78.04878 L 78.04878 78.04878 L -78.04878 78.04878 z"
                    stroke-linecap="round" />
            </a>
        @endforelse
    </g>
    <g transform="matrix(2.2342726232 0 0 0.6255926992 1944.736892186 1067.3745798967)" id="zjPW8EAxh-OSo6JX9BPS2">
        @forelse ($siteplan->where('code_product', 'zjPW8EAxh-OSo6JX9BPS2') as $hasil)
            @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path
                    style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill:#ffc107; fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(0, 0)"
                    d="M -78.04878 -78.04878 L 78.04878 -78.04878 L 78.04878 78.04878 L -78.04878 78.04878 z"
                    stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path
                    style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill:#f50505;fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(0, 0)"
                    d="M -78.04878 -78.04878 L 78.04878 -78.04878 L 78.04878 78.04878 L -78.04878 78.04878 z"
                    stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
                <a href="#" data-toggle="modal" data-target="#modalBooking-zjPW8EAxh-OSo6JX9BPS2">
                    <path
                        style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #ffffff; fill-rule: nonzero; opacity: 1;"
                        vector-effect="non-scaling-stroke" transform=" translate(0, 0)"
                        d="M -78.04878 -78.04878 L 78.04878 -78.04878 L 78.04878 78.04878 L -78.04878 78.04878 z"
                        stroke-linecap="round" />
                </a>
            @endif
        @empty
            <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="zjPW8EAxh-OSo6JX9BPS2">
                <path
                    style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #ffffff; fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(0, 0)"
                    d="M -78.04878 -78.04878 L 78.04878 -78.04878 L 78.04878 78.04878 L -78.04878 78.04878 z"
                    stroke-linecap="round" />
            </a>
        @endforelse
    </g>
    <g transform="matrix(2.2342726232 0 0 0.6255926992 1944.736892186 1167.8084857896)" id="nFGEF4eyNhAqcjyKZO1Sy">
        @forelse ($siteplan->where('code_product', 'nFGEF4eyNhAqcjyKZO1Sy') as $hasil)
            @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path
                    style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill:#ffc107; fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(0, 0)"
                    d="M -78.04878 -78.04878 L 78.04878 -78.04878 L 78.04878 78.04878 L -78.04878 78.04878 z"
                    stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path
                    style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill:#f50505; fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(0, 0)"
                    d="M -78.04878 -78.04878 L 78.04878 -78.04878 L 78.04878 78.04878 L -78.04878 78.04878 z"
                    stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
                <a href="#" data-toggle="modal" data-target="#modalBooking-nFGEF4eyNhAqcjyKZO1Sy">
                    <path
                        style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #ffffff; fill-rule: nonzero; opacity: 1;"
                        vector-effect="non-scaling-stroke" transform=" translate(0, 0)"
                        d="M -78.04878 -78.04878 L 78.04878 -78.04878 L 78.04878 78.04878 L -78.04878 78.04878 z"
                        stroke-linecap="round" />
                </a>
            @endif
        @empty
            <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="nFGEF4eyNhAqcjyKZO1Sy">
                <path
                    style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #ffffff; fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(0, 0)"
                    d="M -78.04878 -78.04878 L 78.04878 -78.04878 L 78.04878 78.04878 L -78.04878 78.04878 z"
                    stroke-linecap="round" />
            </a>
        @endforelse
    </g>
    <g transform="matrix(2.0671543076 0 0 0.6273096539 1526.6212839713 1069.2137650168)" id="DEMse43GiAnYArtpnW0GE">
        @forelse ($siteplan->where('code_product', 'DEMse43GiAnYArtpnW0GE') as $hasil)
            @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path
                    style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill:#ffc107; fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(0, 0)"
                    d="M -78.04878 -78.04878 L 78.04878 -78.04878 L 78.04878 78.04878 L -78.04878 78.04878 z"
                    stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path
                    style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill:#f50505; fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(0, 0)"
                    d="M -78.04878 -78.04878 L 78.04878 -78.04878 L 78.04878 78.04878 L -78.04878 78.04878 z"
                    stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
                <a href="#" data-toggle="modal" data-target="#modalBooking-DEMse43GiAnYArtpnW0GE">
                    <path
                        style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #ffffff; fill-rule: nonzero; opacity: 1;"
                        vector-effect="non-scaling-stroke" transform=" translate(0, 0)"
                        d="M -78.04878 -78.04878 L 78.04878 -78.04878 L 78.04878 78.04878 L -78.04878 78.04878 z"
                        stroke-linecap="round" />
                </a>
            @endif
        @empty
            <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="DEMse43GiAnYArtpnW0GE">
                <path
                    style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #ffffff; fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(0, 0)"
                    d="M -78.04878 -78.04878 L 78.04878 -78.04878 L 78.04878 78.04878 L -78.04878 78.04878 z"
                    stroke-linecap="round" />
            </a>
        @endforelse
    </g>
    <g transform="matrix(2.0671543076 0 0 0.9367910021 1526.6212839713 1194.0864566667)" id="pGLlmzi-00UbnpAqAys2H">
        @forelse ($siteplan->where('code_product', 'pGLlmzi-00UbnpAqAys2H') as $hasil)
            @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path
                    style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill:#ffc107; fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(0, 0)"
                    d="M -78.04878 -78.04878 L 78.04878 -78.04878 L 78.04878 78.04878 L -78.04878 78.04878 z"
                    stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path
                    style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill:#f50505; fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(0, 0)"
                    d="M -78.04878 -78.04878 L 78.04878 -78.04878 L 78.04878 78.04878 L -78.04878 78.04878 z"
                    stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
                <a href="#" data-toggle="modal" data-target="#modalBooking-pGLlmzi-00UbnpAqAys2H">
                    <path
                        style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #ffffff; fill-rule: nonzero; opacity: 1;"
                        vector-effect="non-scaling-stroke" transform=" translate(0, 0)"
                        d="M -78.04878 -78.04878 L 78.04878 -78.04878 L 78.04878 78.04878 L -78.04878 78.04878 z"
                        stroke-linecap="round" />
                </a>
            @endif
        @empty
            <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="pGLlmzi-00UbnpAqAys2H">
                <path
                    style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #ffffff; fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(0, 0)"
                    d="M -78.04878 -78.04878 L 78.04878 -78.04878 L 78.04878 78.04878 L -78.04878 78.04878 z"
                    stroke-linecap="round" />
            </a>
        @endforelse
    </g>
    <g transform="matrix(2.0671543076 0 0 1.8438812907 1526.6212839713 1413.9227250673)" id="g-OSfZaqS7Dt62U4oWK_t">
        @forelse ($siteplan->where('code_product', 'g-OSfZaqS7Dt62U4oWK_t') as $hasil)
            @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path
                    style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill:#ffc107;  fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(0, 0)"
                    d="M -78.04878 -78.04878 L 78.04878 -78.04878 L 78.04878 78.04878 L -78.04878 78.04878 z"
                    stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path
                    style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill:#f50505; fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(0, 0)"
                    d="M -78.04878 -78.04878 L 78.04878 -78.04878 L 78.04878 78.04878 L -78.04878 78.04878 z"
                    stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
                <a href="#" data-toggle="modal" data-target="#modalBooking-g-OSfZaqS7Dt62U4oWK_t">
                    <path
                        style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #ffffff; fill-rule: nonzero; opacity: 1;"
                        vector-effect="non-scaling-stroke" transform=" translate(0, 0)"
                        d="M -78.04878 -78.04878 L 78.04878 -78.04878 L 78.04878 78.04878 L -78.04878 78.04878 z"
                        stroke-linecap="round" />
                </a>
            @endif
        @empty
            <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="g-OSfZaqS7Dt62U4oWK_t">
                <path
                    style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #ffffff; fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(0, 0)"
                    d="M -78.04878 -78.04878 L 78.04878 -78.04878 L 78.04878 78.04878 L -78.04878 78.04878 z"
                    stroke-linecap="round" />
            </a>
        @endforelse
    </g>
    <g transform="matrix(2.0671543076 0 0 2.024739558 1526.6212863766 1718.6519058338)" id="2ia0dJMHLZ28ft1b_8058">
        @forelse ($siteplan->where('code_product', '2ia0dJMHLZ28ft1b_8058') as $hasil)
            @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path
                    style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill:#ffc107;fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(0, 0)"
                    d="M -78.04878 -78.04878 L 78.04878 -78.04878 L 78.04878 78.04878 L -78.04878 78.04878 z"
                    stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path
                    style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill:#f50505; fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(0, 0)"
                    d="M -78.04878 -78.04878 L 78.04878 -78.04878 L 78.04878 78.04878 L -78.04878 78.04878 z"
                    stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
                <a href="#" data-toggle="modal" data-target="#modalBooking-2ia0dJMHLZ28ft1b_8058">
                    <path
                        style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #ffffff; fill-rule: nonzero; opacity: 1;"
                        vector-effect="non-scaling-stroke" transform=" translate(0, 0)"
                        d="M -78.04878 -78.04878 L 78.04878 -78.04878 L 78.04878 78.04878 L -78.04878 78.04878 z"
                        stroke-linecap="round" />
                </a>
            @endif
        @empty
            <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="2ia0dJMHLZ28ft1b_8058">
                <path
                    style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #ffffff; fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(0, 0)"
                    d="M -78.04878 -78.04878 L 78.04878 -78.04878 L 78.04878 78.04878 L -78.04878 78.04878 z"
                    stroke-linecap="round" />
            </a>
        @endforelse
    </g>
    <g transform="matrix(1.1087649475 0 0 45.7721623377 992.5238987879 2366.5132030111)" id="D033updYsfYK4ieTPyREB">
        <path
            style="stroke: rgb(159,159,158); stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(112,112,112); fill-rule: nonzero; opacity: 1;"
            vector-effect="non-scaling-stroke" transform=" translate(-0.000005, -0.000005)"
            d="M -43.02325 -43.02325 L 43.02326 -43.02325 L 43.02326 43.02326 L -43.02325 43.02326 z"
            stroke-linecap="round" />
    </g>
    <g transform="matrix(2.0671543076 0 0 1.259411388 1526.6212813873 3083.5714398931)" id="arVfPkb9AVqXf5rtRTfj2">
        @forelse ($siteplan->where('code_product', 'arVfPkb9AVqXf5rtRTfj2') as $hasil)
            @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path
                    style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill:#ffc107;  fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(0, 0)"
                    d="M -78.04878 -78.04878 L 78.04878 -78.04878 L 78.04878 78.04878 L -78.04878 78.04878 z"
                    stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path
                    style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill:#f50505; fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(0, 0)"
                    d="M -78.04878 -78.04878 L 78.04878 -78.04878 L 78.04878 78.04878 L -78.04878 78.04878 z"
                    stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
                <a href="#" data-toggle="modal" data-target="#modalBooking-arVfPkb9AVqXf5rtRTfj2">
                    <path
                        style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #ffffff; fill-rule: nonzero; opacity: 1;"
                        vector-effect="non-scaling-stroke" transform=" translate(0, 0)"
                        d="M -78.04878 -78.04878 L 78.04878 -78.04878 L 78.04878 78.04878 L -78.04878 78.04878 z"
                        stroke-linecap="round" />
                </a>
            @endif
        @empty
            <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="arVfPkb9AVqXf5rtRTfj2">
                <path
                    style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #ffffff; fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(0, 0)"
                    d="M -78.04878 -78.04878 L 78.04878 -78.04878 L 78.04878 78.04878 L -78.04878 78.04878 z"
                    stroke-linecap="round" />
            </a>
        @endforelse
    </g>
    <g transform="matrix(2.0671543076 0 0 0.6273096539 1527.1150950436 3280.9063758931)" id="XQkgwkrjnZ9y9kV7xdJPe">
        @forelse ($siteplan->where('code_product', 'XQkgwkrjnZ9y9kV7xdJPe') as $hasil)
            @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path
                    style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill:#ffc107;fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(0, 0)"
                    d="M -78.04878 -78.04878 L 78.04878 -78.04878 L 78.04878 78.04878 L -78.04878 78.04878 z"
                    stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path
                    style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill:#f50505; fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(0, 0)"
                    d="M -78.04878 -78.04878 L 78.04878 -78.04878 L 78.04878 78.04878 L -78.04878 78.04878 z"
                    stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
                <a href="#" data-toggle="modal" data-target="#modalBooking-XQkgwkrjnZ9y9kV7xdJPe">
                    <path
                        style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #ffffff; fill-rule: nonzero; opacity: 1;"
                        vector-effect="non-scaling-stroke" transform=" translate(0, 0)"
                        d="M -78.04878 -78.04878 L 78.04878 -78.04878 L 78.04878 78.04878 L -78.04878 78.04878 z"
                        stroke-linecap="round" />
                </a>
            @endif
        @empty
            <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="XQkgwkrjnZ9y9kV7xdJPe">
                <path
                    style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #ffffff; fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(0, 0)"
                    d="M -78.04878 -78.04878 L 78.04878 -78.04878 L 78.04878 78.04878 L -78.04878 78.04878 z"
                    stroke-linecap="round" />
            </a>
        @endforelse
    </g>
    <g transform="matrix(2.0671543076 0 0 0.6273096539 1526.6212839713 3381.4693484898)" id="d5N-lDl0tFPvKYASk5s3_">
        @forelse ($siteplan->where('code_product', 'd5N-lDl0tFPvKYASk5s3_') as $hasil)
            @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path
                    style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill:#ffc107; fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(0, 0)"
                    d="M -78.04878 -78.04878 L 78.04878 -78.04878 L 78.04878 78.04878 L -78.04878 78.04878 z"
                    stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path
                    style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill:#f50505; fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(0, 0)"
                    d="M -78.04878 -78.04878 L 78.04878 -78.04878 L 78.04878 78.04878 L -78.04878 78.04878 z"
                    stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
                <a href="#" data-toggle="modal" data-target="#modalBooking-d5N-lDl0tFPvKYASk5s3_">
                    <path
                        style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #ffffff; fill-rule: nonzero; opacity: 1;"
                        vector-effect="non-scaling-stroke" transform=" translate(0, 0)"
                        d="M -78.04878 -78.04878 L 78.04878 -78.04878 L 78.04878 78.04878 L -78.04878 78.04878 z"
                        stroke-linecap="round" />
                </a>
            @endif
        @empty
            <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="d5N-lDl0tFPvKYASk5s3_">
                <path
                    style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #ffffff; fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(0, 0)"
                    d="M -78.04878 -78.04878 L 78.04878 -78.04878 L 78.04878 78.04878 L -78.04878 78.04878 z"
                    stroke-linecap="round" />
            </a>
        @endforelse
    </g>
    <g transform="matrix(2.0671543076 0 0 0.6273096539 1526.6212839713 3482.1734582641)" id="aU9Poqk2DMaq0JQIImCH1">
        @forelse ($siteplan->where('code_product', 'aU9Poqk2DMaq0JQIImCH1') as $hasil)
            @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path
                    style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill:#ffc107; fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(0, 0)"
                    d="M -78.04878 -78.04878 L 78.04878 -78.04878 L 78.04878 78.04878 L -78.04878 78.04878 z"
                    stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path
                    style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;   fill:#f50505;fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(0, 0)"
                    d="M -78.04878 -78.04878 L 78.04878 -78.04878 L 78.04878 78.04878 L -78.04878 78.04878 z"
                    stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
                <a href="#" data-toggle="modal" data-target="#modalBooking-aU9Poqk2DMaq0JQIImCH1">
                    <path
                        style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #ffffff; fill-rule: nonzero; opacity: 1;"
                        vector-effect="non-scaling-stroke" transform=" translate(0, 0)"
                        d="M -78.04878 -78.04878 L 78.04878 -78.04878 L 78.04878 78.04878 L -78.04878 78.04878 z"
                        stroke-linecap="round" />
                </a>
            @endif
        @empty
            <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="aU9Poqk2DMaq0JQIImCH1">
                <path
                    style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #ffffff; fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(0, 0)"
                    d="M -78.04878 -78.04878 L 78.04878 -78.04878 L 78.04878 78.04878 L -78.04878 78.04878 z"
                    stroke-linecap="round" />
            </a>
        @endforelse
    </g>
    <g transform="matrix(2.1532857371 0 0 1.3940214531 1526.6212839713 4187.1440473282)" id="su-kG3rb6XOGeAviyl4Ka">
        @forelse ($siteplan->where('code_product', 'su-kG3rb6XOGeAviyl4Ka') as $hasil)
            @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path
                    style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill:#ffc107; fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(-74.92683, -35.12195)"
                    d="M 0 0 L 149.85366 0 L 149.85366 70.2439 L 0 70.2439 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path
                    style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill:#f50505;fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(-74.92683, -35.12195)"
                    d="M 0 0 L 149.85366 0 L 149.85366 70.2439 L 0 70.2439 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
                <a href="#" data-toggle="modal" data-target="#modalBooking-su-kG3rb6XOGeAviyl4Ka">
                    <path
                        style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #ffffff; fill-rule: nonzero; opacity: 1;"
                        vector-effect="non-scaling-stroke" transform=" translate(-74.92683, -35.12195)"
                        d="M 0 0 L 149.85366 0 L 149.85366 70.2439 L 0 70.2439 z" stroke-linecap="round" />
                </a>
            @endif
        @empty
            <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="su-kG3rb6XOGeAviyl4Ka">
                <path
                    style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #ffffff; fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(-74.92683, -35.12195)"
                    d="M 0 0 L 149.85366 0 L 149.85366 70.2439 L 0 70.2439 z" stroke-linecap="round" />
            </a>
        @endforelse
    </g>
    <g transform="matrix(2.1532857371 0 0 1.3940214531 1526.6212839713 4086.4399375539)" id="0RAcAT0r3NXCvtYF0md1D">
        @forelse ($siteplan->where('code_product', '0RAcAT0r3NXCvtYF0md1D') as $hasil)
            @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path
                    style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill:#ffc107; fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(-74.92683, -35.12195)"
                    d="M 0 70.2439 L 149.85366 70.2439 L 149.85366 0 L 0 0 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path
                    style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill:#f50505;fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(-74.92683, -35.12195)"
                    d="M 0 70.2439 L 149.85366 70.2439 L 149.85366 0 L 0 0 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
                <a href="#" data-toggle="modal" data-target="#modalBooking-0RAcAT0r3NXCvtYF0md1D">
                    <path
                        style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #ffffff; fill-rule: nonzero; opacity: 1;"
                        vector-effect="non-scaling-stroke" transform=" translate(-74.92683, -35.12195)"
                        d="M 0 70.2439 L 149.85366 70.2439 L 149.85366 0 L 0 0 z" stroke-linecap="round" />
                </a>
            @endif
        @empty
            <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="0RAcAT0r3NXCvtYF0md1D">
                <path
                    style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #ffffff; fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(-74.92683, -35.12195)"
                    d="M 0 70.2439 L 149.85366 70.2439 L 149.85366 0 L 0 0 z" stroke-linecap="round" />
            </a>
        @endforelse
    </g>
    <g transform="matrix(0.8828471522 0 0 45.7625670375 1728.0964021366 2366.1003819715)"
        id="FyNol9SPVWfBC6TbGxagQ">
        <path
            style="stroke: rgb(159,159,158); stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(112,112,112); fill-rule: nonzero; opacity: 1;"
            vector-effect="non-scaling-stroke" transform=" translate(-0.000005, -0.000005)"
            d="M -43.02325 -43.02325 L 43.02326 -43.02325 L 43.02326 43.02326 L -43.02325 43.02326 z"
            stroke-linecap="round" />
    </g>
    <g transform="matrix(2.1532857371 0 0 1.3940214531 1526.6212839713 3985.7358277795)" id="Pccama7QVyg05Cxk_rDej">
        @forelse ($siteplan->where('code_product', 'Pccama7QVyg05Cxk_rDej') as $hasil)
            @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path
                    style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill:#ffc107; fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(-74.92683, -35.12195)"
                    d="M 0 0 L 149.85366 0 L 149.85366 70.2439 L 0 70.2439 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path
                    style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill:#f50505; fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(-74.92683, -35.12195)"
                    d="M 0 0 L 149.85366 0 L 149.85366 70.2439 L 0 70.2439 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
                <a href="#" data-toggle="modal" data-target="#modalBooking-Pccama7QVyg05Cxk_rDej">
                    <path
                        style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #ffffff; fill-rule: nonzero; opacity: 1;"
                        vector-effect="non-scaling-stroke" transform=" translate(-74.92683, -35.12195)"
                        d="M 0 0 L 149.85366 0 L 149.85366 70.2439 L 0 70.2439 z" stroke-linecap="round" />
                </a>
            @endif
        @empty
            <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="Pccama7QVyg05Cxk_rDej">
                <path
                    style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #ffffff; fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(-74.92683, -35.12195)"
                    d="M 0 0 L 149.85366 0 L 149.85366 70.2439 L 0 70.2439 z" stroke-linecap="round" />
            </a>
        @endforelse
    </g>
    <g transform="matrix(2.1532857371 0 0 1.3940214531 1526.6212839713 3885.0177777906)" id="3ad9wm5Um3qwSSmKuR6U2">
        @forelse ($siteplan->where('code_product', '3ad9wm5Um3qwSSmKuR6U2') as $hasil)
            @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path
                    style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill:#ffc107; fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(-74.92683, -35.12195)"
                    d="M 0 0 L 149.85366 0 L 149.85366 70.2439 L 0 70.2439 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path
                    style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill:#f50505;fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(-74.92683, -35.12195)"
                    d="M 0 0 L 149.85366 0 L 149.85366 70.2439 L 0 70.2439 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
                <a href="#" data-toggle="modal" data-target="#modalBooking-3ad9wm5Um3qwSSmKuR6U2">
                    <path
                        style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #ffffff; fill-rule: nonzero; opacity: 1;"
                        vector-effect="non-scaling-stroke" transform=" translate(-74.92683, -35.12195)"
                        d="M 0 0 L 149.85366 0 L 149.85366 70.2439 L 0 70.2439 z" stroke-linecap="round" />
                </a>
            @endif
        @empty
            <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="3ad9wm5Um3qwSSmKuR6U2">
                <path
                    style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #ffffff; fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(-74.92683, -35.12195)"
                    d="M 0 0 L 149.85366 0 L 149.85366 70.2439 L 0 70.2439 z" stroke-linecap="round" />
            </a>
        @endforelse
    </g>
    <g transform="matrix(2.0671543076 0 0 2.3931493633 1199.6369711625 1207.0353999408)" id="ideGylKK2e53a5ICmj6bD">
        @forelse ($siteplan->where('code_product', 'ideGylKK2e53a5ICmj6bD') as $hasil)
            @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path
                    style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill:#ffc107; fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(0, 0)"
                    d="M -78.04878 -78.04878 L 78.04878 -78.04878 L 78.04878 78.04878 L -78.04878 78.04878 z"
                    stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path
                    style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill:#f50505;fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(0, 0)"
                    d="M -78.04878 -78.04878 L 78.04878 -78.04878 L 78.04878 78.04878 L -78.04878 78.04878 z"
                    stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
                <a href="#" data-toggle="modal" data-target="#modalBooking-ideGylKK2e53a5ICmj6bD">
                    <path
                        style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #ffffff; fill-rule: nonzero; opacity: 1;"
                        vector-effect="non-scaling-stroke" transform=" translate(0, 0)"
                        d="M -78.04878 -78.04878 L 78.04878 -78.04878 L 78.04878 78.04878 L -78.04878 78.04878 z"
                        stroke-linecap="round" />
                </a>
            @endif
        @empty
            <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="ideGylKK2e53a5ICmj6bD">
                <path
                    style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #ffffff; fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(0, 0)"
                    d="M -78.04878 -78.04878 L 78.04878 -78.04878 L 78.04878 78.04878 L -78.04878 78.04878 z"
                    stroke-linecap="round" />
            </a>
        @endforelse
    </g>
    <g transform="matrix(0 0.5715487958 -13.2074661017 0 1189.6443774375 3207.8508733369)"
        id="dQc-8VV1SKQq1qhCY3AcW">
        <path
            style="stroke: rgb(159,159,158); stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(112,112,112); fill-rule: nonzero; opacity: 1;"
            vector-effect="non-scaling-stroke" transform=" translate(-0.000005, -0.000005)"
            d="M -43.02325 -43.02325 L 43.02326 -43.02325 L 43.02326 43.02326 L -43.02325 43.02326 z"
            stroke-linecap="round" />
    </g>
    <g transform="matrix(2.1532857371 0 0 1.3940214531 1526.6212839713 3784.3136680163)" id="KYQsRB6WVcvhfwdrGYbKG">
        @forelse ($siteplan->where('code_product', 'KYQsRB6WVcvhfwdrGYbKG') as $hasil)
            @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path
                    style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill:#ffc107;  fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(-74.92683, -35.12195)"
                    d="M 0 0 L 149.85366 0 L 149.85366 70.2439 L 0 70.2439 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path
                    style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill:#f50505;fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(-74.92683, -35.12195)"
                    d="M 0 0 L 149.85366 0 L 149.85366 70.2439 L 0 70.2439 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
                <a href="#" data-toggle="modal" data-target="#modalBooking-KYQsRB6WVcvhfwdrGYbKG">
                    <path
                        style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #ffffff; fill-rule: nonzero; opacity: 1;"
                        vector-effect="non-scaling-stroke" transform=" translate(-74.92683, -35.12195)"
                        d="M 0 0 L 149.85366 0 L 149.85366 70.2439 L 0 70.2439 z" stroke-linecap="round" />
                </a>
            @endif
        @empty
            <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="KYQsRB6WVcvhfwdrGYbKG">
                <path
                    style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #ffffff; fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(-74.92683, -35.12195)"
                    d="M 0 0 L 149.85366 0 L 149.85366 70.2439 L 0 70.2439 z" stroke-linecap="round" />
            </a>
        @endforelse
    </g>
    <g transform="matrix(2.0671543076 0 0 2.7334609886 1199.6369709839 1609.9495753739)" id="jq4CA-PGDhnJBFhC9nSCp">
        @forelse ($siteplan->where('code_product', 'jq4CA-PGDhnJBFhC9nSCp') as $hasil)
            @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path
                    style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill:#ffc107;  fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(0, 0)"
                    d="M -78.04878 -78.04878 L 78.04878 -78.04878 L 78.04878 78.04878 L -78.04878 78.04878 z"
                    stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path
                    style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill:#f50505;fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(0, 0)"
                    d="M -78.04878 -78.04878 L 78.04878 -78.04878 L 78.04878 78.04878 L -78.04878 78.04878 z"
                    stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
                <a href="#" data-toggle="modal" data-target="#modalBooking-jq4CA-PGDhnJBFhC9nSCp">
                    <path
                        style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #ffffff; fill-rule: nonzero; opacity: 1;"
                        vector-effect="non-scaling-stroke" transform=" translate(0, 0)"
                        d="M -78.04878 -78.04878 L 78.04878 -78.04878 L 78.04878 78.04878 L -78.04878 78.04878 z"
                        stroke-linecap="round" />
                </a>
            @endif
        @empty
            <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="jq4CA-PGDhnJBFhC9nSCp">
                <path
                    style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #ffffff; fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(0, 0)"
                    d="M -78.04878 -78.04878 L 78.04878 -78.04878 L 78.04878 78.04878 L -78.04878 78.04878 z"
                    stroke-linecap="round" />
            </a>
        @endforelse
    </g>
    <g transform="matrix(2.1532857371 0 0 1.3940214531 1526.6212839713 3683.6095582419)" id="pEJYkRuLuTdQNaLVbEqT4">
        @forelse ($siteplan->where('code_product', 'pEJYkRuLuTdQNaLVbEqT4') as $hasil)
            @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path
                    style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill:#ffc107; fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(-74.92683, -35.12195)"
                    d="M 0 0 L 149.85366 0 L 149.85366 70.2439 L 0 70.2439 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path
                    style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill:#f50505; fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(-74.92683, -35.12195)"
                    d="M 0 0 L 149.85366 0 L 149.85366 70.2439 L 0 70.2439 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
                <a href="#" data-toggle="modal" data-target="#modalBooking-pEJYkRuLuTdQNaLVbEqT4">
                    <path
                        style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #ffffff; fill-rule: nonzero; opacity: 1;"
                        vector-effect="non-scaling-stroke" transform=" translate(-74.92683, -35.12195)"
                        d="M 0 0 L 149.85366 0 L 149.85366 70.2439 L 0 70.2439 z" stroke-linecap="round" />
                </a>
            @endif
        @empty
            <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="pEJYkRuLuTdQNaLVbEqT4">
                <path
                    style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #ffffff; fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(-74.92683, -35.12195)"
                    d="M 0 0 L 149.85366 0 L 149.85366 70.2439 L 0 70.2439 z" stroke-linecap="round" />
            </a>
        @endforelse
    </g>
    <g transform="matrix(2.1532857371 0 0 1.3940214531 1199.6369735678 1875.0416656281)" id="V2udQO7wjDzN-K6ZFC_wQ">
        @forelse ($siteplan->where('code_product', 'V2udQO7wjDzN-K6ZFC_wQ') as $hasil)
            @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path
                    style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill:#ffc107; fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(-74.92683, -35.12195)"
                    d="M 0 0 L 149.85366 0 L 149.85366 70.2439 L 0 70.2439 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path
                    style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill:#f50505; fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(-74.92683, -35.12195)"
                    d="M 0 0 L 149.85366 0 L 149.85366 70.2439 L 0 70.2439 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
                <a href="#" data-toggle="modal" data-target="#modalBooking-V2udQO7wjDzN-K6ZFC_wQ">
                    <path
                        style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #ffffff; fill-rule: nonzero; opacity: 1;"
                        vector-effect="non-scaling-stroke" transform=" translate(-74.92683, -35.12195)"
                        d="M 0 0 L 149.85366 0 L 149.85366 70.2439 L 0 70.2439 z" stroke-linecap="round" />
                </a>
            @endif
        @empty
            <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="V2udQO7wjDzN-K6ZFC_wQ">
                <path
                    style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #ffffff; fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(-74.92683, -35.12195)"
                    d="M 0 0 L 149.85366 0 L 149.85366 70.2439 L 0 70.2439 z" stroke-linecap="round" />
            </a>
        @endforelse


    </g>
    <g transform="matrix(2.1532857371 0 0 1.3940214531 1526.6212839713 3582.891508253)" id="qGjMi69jQxFr6FFUxAEUX">
        @forelse ($siteplan->where('code_product', 'qGjMi69jQxFr6FFUxAEUX') as $hasil)
            @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path
                    style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill:#ffc107; fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(-74.92683, -35.12195)"
                    d="M 0 0 L 149.85366 0 L 149.85366 70.2439 L 0 70.2439 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path
                    style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill:#f50505; fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(-74.92683, -35.12195)"
                    d="M 0 0 L 149.85366 0 L 149.85366 70.2439 L 0 70.2439 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
                <a href="#" data-toggle="modal" data-target="#modalBooking-qGjMi69jQxFr6FFUxAEUX">
                    <path
                        style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #ffffff; fill-rule: nonzero; opacity: 1;"
                        vector-effect="non-scaling-stroke" transform=" translate(-74.92683, -35.12195)"
                        d="M 0 0 L 149.85366 0 L 149.85366 70.2439 L 0 70.2439 z" stroke-linecap="round" />
                </a>
            @endif
        @empty
            <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="qGjMi69jQxFr6FFUxAEUX">
                <path
                    style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #ffffff; fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(-74.92683, -35.12195)"
                    d="M 0 0 L 149.85366 0 L 149.85366 70.2439 L 0 70.2439 z" stroke-linecap="round" />
            </a>
        @endforelse
    </g>
    <g transform="matrix(2.0671543076 0 0 3.687592386 1199.6369761518 2214.4292812614)" id="XjhSnspo3SxlsMQzpgEtQ">
        @forelse ($siteplan->where('code_product', 'XjhSnspo3SxlsMQzpgEtQ') as $hasil)
            @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path
                    style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill:#ffc107; fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(0, 0)"
                    d="M -78.04878 -78.04878 L 78.04878 -78.04878 L 78.04878 78.04878 L -78.04878 78.04878 z"
                    stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path
                    style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill:#f50505; fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(0, 0)"
                    d="M -78.04878 -78.04878 L 78.04878 -78.04878 L 78.04878 78.04878 L -78.04878 78.04878 z"
                    stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
                <a href="#" data-toggle="modal" data-target="#modalBooking-XjhSnspo3SxlsMQzpgEtQ">
                    <path
                        style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #ffffff; fill-rule: nonzero; opacity: 1;"
                        vector-effect="non-scaling-stroke" transform=" translate(0, 0)"
                        d="M -78.04878 -78.04878 L 78.04878 -78.04878 L 78.04878 78.04878 L -78.04878 78.04878 z"
                        stroke-linecap="round" />
                </a>
            @endif
        @empty
            <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="XjhSnspo3SxlsMQzpgEtQ">
                <path
                    style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #ffffff; fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(0, 0)"
                    d="M -78.04878 -78.04878 L 78.04878 -78.04878 L 78.04878 78.04878 L -78.04878 78.04878 z"
                    stroke-linecap="round" />
            </a>
        @endforelse
    </g>
    <g transform="matrix(1.3447234514 0 0 3.9620870948 2014.3830521222 707.8720655425)" id="gpzNywyAzySLHRwbjI-pU">
        @forelse ($siteplan->where('code_product', 'gpzNywyAzySLHRwbjI-pU') as $hasil)
            @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path
                    style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill:#ffc107; fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(0, 0)"
                    d="M -78.04878 -78.04878 L 78.04878 -78.04878 L 78.04878 78.04878 L -78.04878 78.04878 z"
                    stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path
                    style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill:#f50505; fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(0, 0)"
                    d="M -78.04878 -78.04878 L 78.04878 -78.04878 L 78.04878 78.04878 L -78.04878 78.04878 z"
                    stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
                <a href="#" data-toggle="modal" data-target="#modalBooking-gpzNywyAzySLHRwbjI-pU">
                    <path
                        style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #ffffff; fill-rule: nonzero; opacity: 1;"
                        vector-effect="non-scaling-stroke" transform=" translate(0, 0)"
                        d="M -78.04878 -78.04878 L 78.04878 -78.04878 L 78.04878 78.04878 L -78.04878 78.04878 z"
                        stroke-linecap="round" />
                </a>
            @endif
        @empty
            <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="gpzNywyAzySLHRwbjI-pU">
                <path
                    style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #ffffff; fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(0, 0)"
                    d="M -78.04878 -78.04878 L 78.04878 -78.04878 L 78.04878 78.04878 L -78.04878 78.04878 z"
                    stroke-linecap="round" />
            </a>
        @endforelse
    </g>
    <g transform="matrix(2.0671543076 0 0 3.690783727 1199.6369708053 2893.8001249561)" id="ZIOIu0PgwUZha8-mSQQmW">
        @forelse ($siteplan->where('code_product', 'ZIOIu0PgwUZha8-mSQQmW') as $hasil)
            @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path
                    style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill:#ffc107; fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(0, 0)"
                    d="M -78.04878 -78.04878 L 78.04878 -78.04878 L 78.04878 78.04878 L -78.04878 78.04878 z"
                    stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path
                    style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill:#f50505;fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(0, 0)"
                    d="M -78.04878 -78.04878 L 78.04878 -78.04878 L 78.04878 78.04878 L -78.04878 78.04878 z"
                    stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
                <a href="#" data-toggle="modal" data-target="#modalBooking-ZIOIu0PgwUZha8-mSQQmW">
                    <path
                        style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #ffffff; fill-rule: nonzero; opacity: 1;"
                        vector-effect="non-scaling-stroke" transform=" translate(0, 0)"
                        d="M -78.04878 -78.04878 L 78.04878 -78.04878 L 78.04878 78.04878 L -78.04878 78.04878 z"
                        stroke-linecap="round" />
                </a>
            @endif
        @empty
            <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="ZIOIu0PgwUZha8-mSQQmW">
                <path
                    style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #ffffff; fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(0, 0)"
                    d="M -78.04878 -78.04878 L 78.04878 -78.04878 L 78.04878 78.04878 L -78.04878 78.04878 z"
                    stroke-linecap="round" />
            </a>
        @endforelse
    </g>
    <g transform="matrix(2.1532857371 0 0 1.3940214531 1199.636961184 2553.9901631371)" id="ZupaYPD7qNvjNsgBlFoT7">
        @forelse ($siteplan->where('code_product', 'ZupaYPD7qNvjNsgBlFoT7') as $hasil)
            @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path
                    style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill:#ffc107; fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(-74.92683, -35.12195)"
                    d="M 0 0 L 149.85366 0 L 149.85366 70.2439 L 0 70.2439 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path
                    style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill:#f50505;fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(-74.92683, -35.12195)"
                    d="M 0 0 L 149.85366 0 L 149.85366 70.2439 L 0 70.2439 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
                <a href="#" data-toggle="modal" data-target="#modalBooking-ZupaYPD7qNvjNsgBlFoT7">
                    <path
                        style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #ffffff; fill-rule: nonzero; opacity: 1;"
                        vector-effect="non-scaling-stroke" transform=" translate(-74.92683, -35.12195)"
                        d="M 0 0 L 149.85366 0 L 149.85366 70.2439 L 0 70.2439 z" stroke-linecap="round" />
                </a>
            @endif
        @empty
            <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="ZupaYPD7qNvjNsgBlFoT7">
                <path
                    style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #ffffff; fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(-74.92683, -35.12195)"
                    d="M 0 0 L 149.85366 0 L 149.85366 70.2439 L 0 70.2439 z" stroke-linecap="round" />
            </a>
        @endforelse
    </g>
    <g transform="matrix(2.0671543076 0 0 6.4528608608 1199.6369586 3734.4860989325)" id="KEkWmDOu2dhEUiz1fW9IG">
        @forelse ($siteplan->where('code_product', 'KEkWmDOu2dhEUiz1fW9IG') as $hasil)
            @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path
                    style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill:#ffc107;  fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(0, 0)"
                    d="M -78.04878 -78.04878 L 78.04878 -78.04878 L 78.04878 78.04878 L -78.04878 78.04878 z"
                    stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path
                    style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill:#f50505; fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(0, 0)"
                    d="M -78.04878 -78.04878 L 78.04878 -78.04878 L 78.04878 78.04878 L -78.04878 78.04878 z"
                    stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
                <a href="#" data-toggle="modal" data-target="#modalBooking-KEkWmDOu2dhEUiz1fW9IG">
                    <path
                        style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #ffffff; fill-rule: nonzero; opacity: 1;"
                        vector-effect="non-scaling-stroke" transform=" translate(0, 0)"
                        d="M -78.04878 -78.04878 L 78.04878 -78.04878 L 78.04878 78.04878 L -78.04878 78.04878 z"
                        stroke-linecap="round" />
                </a>
            @endif
        @empty
            <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="KEkWmDOu2dhEUiz1fW9IG">
                <path
                    style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #ffffff; fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(0, 0)"
                    d="M -78.04878 -78.04878 L 78.04878 -78.04878 L 78.04878 78.04878 L -78.04878 78.04878 z"
                    stroke-linecap="round" />
            </a>
        @endforelse
    </g>
    <g transform="matrix(2.0671543076 0 0 5.8080522403 790.8278029281 3687.1399658095)" id="41syOCnzo3FUMcU6f2YU9">

        @forelse ($siteplan->where('code_product', '41syOCnzo3FUMcU6f2YU9') as $hasil)
            @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path
                    style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill:#ffc107;  fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(0, 0)"
                    d="M -78.04878 -78.04878 L 78.04878 -78.04878 L 78.04878 78.04878 L -78.04878 78.04878 z"
                    stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path
                    style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill:#f50505; fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(0, 0)"
                    d="M -78.04878 -78.04878 L 78.04878 -78.04878 L 78.04878 78.04878 L -78.04878 78.04878 z"
                    stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
                <a href="#" data-toggle="modal" data-target="#modalBooking-41syOCnzo3FUMcU6f2YU9">
                    <path
                        style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #d9d9d9; fill-rule: nonzero; opacity: 1;"
                        vector-effect="non-scaling-stroke" transform=" translate(0, 0)"
                        d="M -78.04878 -78.04878 L 78.04878 -78.04878 L 78.04878 78.04878 L -78.04878 78.04878 z"
                        stroke-linecap="round" />
                </a>
            @endif
        @empty
            <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="41syOCnzo3FUMcU6f2YU9">
                <path
                    style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #d9d9d9; fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(0, 0)"
                    d="M -78.04878 -78.04878 L 78.04878 -78.04878 L 78.04878 78.04878 L -78.04878 78.04878 z"
                    stroke-linecap="round" />
            </a>
        @endforelse
    </g>
    <g transform="matrix(2.1532857371 0 0 1.3940214531 790.8277827924 4187.1397747405)" id="rQ8Sdfh_7oI9rQhsgKdAt">
        @forelse ($siteplan->where('code_product', 'rQ8Sdfh_7oI9rQhsgKdAt') as $hasil)
            @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path
                    style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill:#ffc107; fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(-74.92683, -35.12195)"
                    d="M 0 0 L 149.85366 0 L 149.85366 70.2439 L 0 70.2439 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path
                    style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill:#f50505; fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(-74.92683, -35.12195)"
                    d="M 0 0 L 149.85366 0 L 149.85366 70.2439 L 0 70.2439 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
                <a href="#" data-toggle="modal" data-target="#modalBooking-rQ8Sdfh_7oI9rQhsgKdAt">
                    <path
                        style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #d9d9d9; fill-rule: nonzero; opacity: 1;"
                        vector-effect="non-scaling-stroke" transform=" translate(-74.92683, -35.12195)"
                        d="M 0 0 L 149.85366 0 L 149.85366 70.2439 L 0 70.2439 z" stroke-linecap="round" />
                </a>
            @endif
        @empty
            <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="rQ8Sdfh_7oI9rQhsgKdAt">
                <path
                    style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #d9d9d9; fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(-74.92683, -35.12195)"
                    d="M 0 0 L 149.85366 0 L 149.85366 70.2439 L 0 70.2439 z" stroke-linecap="round" />
            </a>
        @endforelse

    </g>
    <g transform="matrix(2.0671543076 0 0 2.021331107 789.018079701 2708.9645471117)" id="triAOAMAeCOAe99gx7K1S">
        @forelse ($siteplan->where('code_product', 'triAOAMAeCOAe99gx7K1S') as $hasil)
            @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path
                    style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill:#ffc107;  fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(0, 0)"
                    d="M -78.04878 -78.04878 L 78.04878 -78.04878 L 78.04878 78.04878 L -78.04878 78.04878 z"
                    stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path
                    style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill:#f50505; fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(0, 0)"
                    d="M -78.04878 -78.04878 L 78.04878 -78.04878 L 78.04878 78.04878 L -78.04878 78.04878 z"
                    stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
                <a href="#" data-toggle="modal" data-target="#modalBooking-triAOAMAeCOAe99gx7K1S">
                    <path
                        style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #d9d9d9; fill-rule: nonzero; opacity: 1;"
                        vector-effect="non-scaling-stroke" transform=" translate(0, 0)"
                        d="M -78.04878 -78.04878 L 78.04878 -78.04878 L 78.04878 78.04878 L -78.04878 78.04878 z"
                        stroke-linecap="round" />
                </a>
            @endif
        @empty
            <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="triAOAMAeCOAe99gx7K1S">
                <path
                    style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #d9d9d9; fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(0, 0)"
                    d="M -78.04878 -78.04878 L 78.04878 -78.04878 L 78.04878 78.04878 L -78.04878 78.04878 z"
                    stroke-linecap="round" />
            </a>
        @endforelse
    </g>
    <g transform="matrix(2.1532857371 0 0 1.3940214531 789.018079701 2503.6353898962)" id="D8_-_V6SbuclEa_tjeXTv">
        @forelse ($siteplan->where('code_product', 'D8_-_V6SbuclEa_tjeXTv') as $hasil)
            @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path
                    style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill:#ffc107; fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(-74.92683, -35.12195)"
                    d="M 0 0 L 149.85366 0 L 149.85366 70.2439 L 0 70.2439 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path
                    style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill:#f50505; fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(-74.92683, -35.12195)"
                    d="M 0 0 L 149.85366 0 L 149.85366 70.2439 L 0 70.2439 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
                <a href="#" data-toggle="modal" data-target="#modalBooking-D8_-_V6SbuclEa_tjeXTv">
                    <path
                        style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #d9d9d9; fill-rule: nonzero; opacity: 1;"
                        vector-effect="non-scaling-stroke" transform=" translate(-74.92683, -35.12195)"
                        d="M 0 0 L 149.85366 0 L 149.85366 70.2439 L 0 70.2439 z" stroke-linecap="round" />
                </a>
            @endif
        @empty
            <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="D8_-_V6SbuclEa_tjeXTv">
                <path
                    style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #d9d9d9; fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(-74.92683, -35.12195)"
                    d="M 0 0 L 149.85366 0 L 149.85366 70.2439 L 0 70.2439 z" stroke-linecap="round" />
            </a>
        @endforelse
    </g>
    <g transform="matrix(2.0671543076 0 0 2.0202074281 789.018079701 3023.0172417368)" id="yp9WL-LDnS-JEFcb75C1H">
        @forelse ($siteplan->where('code_product', 'yp9WL-LDnS-JEFcb75C1H') as $hasil)
            @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path
                    style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill:#ffc107;  fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(0, 0)"
                    d="M -78.04878 -78.04878 L 78.04878 -78.04878 L 78.04878 78.04878 L -78.04878 78.04878 z"
                    stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path
                    style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill:#f50505; fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(0, 0)"
                    d="M -78.04878 -78.04878 L 78.04878 -78.04878 L 78.04878 78.04878 L -78.04878 78.04878 z"
                    stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
                <a href="#" data-toggle="modal" data-target="#modalBooking-yp9WL-LDnS-JEFcb75C1H">
                    <path
                        style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #d9d9d9; fill-rule: nonzero; opacity: 1;"
                        vector-effect="non-scaling-stroke" transform=" translate(0, 0)"
                        d="M -78.04878 -78.04878 L 78.04878 -78.04878 L 78.04878 78.04878 L -78.04878 78.04878 z"
                        stroke-linecap="round" />
                </a>
            @endif
        @empty
            <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="yp9WL-LDnS-JEFcb75C1H">
                <path
                    style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #d9d9d9; fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(0, 0)"
                    d="M -78.04878 -78.04878 L 78.04878 -78.04878 L 78.04878 78.04878 L -78.04878 78.04878 z"
                    stroke-linecap="round" />
            </a>
        @endforelse
    </g>
    <g transform="matrix(2.1532857371 0 0 1.3940214531 789.018079701 2402.9258434382)" id="O9az2B2AF14VstdIUjgOx">
        @forelse ($siteplan->where('code_product', 'O9az2B2AF14VstdIUjgOx') as $hasil)
            @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path
                    style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill:#ffc107;  fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(-74.92683, -35.12195)"
                    d="M 0 0 L 149.85366 0 L 149.85366 70.2439 L 0 70.2439 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path
                    style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill:#f50505; fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(-74.92683, -35.12195)"
                    d="M 0 0 L 149.85366 0 L 149.85366 70.2439 L 0 70.2439 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
                <a href="#" data-toggle="modal" data-target="#modalBooking-O9az2B2AF14VstdIUjgOx">
                    <path
                        style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #d9d9d9; fill-rule: nonzero; opacity: 1;"
                        vector-effect="non-scaling-stroke" transform=" translate(-74.92683, -35.12195)"
                        d="M 0 0 L 149.85366 0 L 149.85366 70.2439 L 0 70.2439 z" stroke-linecap="round" />
                </a>
            @endif
        @empty
            <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="O9az2B2AF14VstdIUjgOx">
                <path
                    style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #d9d9d9; fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(-74.92683, -35.12195)"
                    d="M 0 0 L 149.85366 0 L 149.85366 70.2439 L 0 70.2439 z" stroke-linecap="round" />
            </a>
        @endforelse
    </g>
    <g transform="matrix(2.1532857371 0 0 1.3940214531 789.018079701 2302.2162969801)" id="JsZirGOBwoD7zEKdf2Lc0">

        @forelse ($siteplan->where('code_product', 'JsZirGOBwoD7zEKdf2Lc0') as $hasil)
            @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path
                    style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill:#ffc107; fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(-74.92683, -35.12195)"
                    d="M 0 0 L 149.85366 0 L 149.85366 70.2439 L 0 70.2439 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path
                    style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill:#f50505; fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(-74.92683, -35.12195)"
                    d="M 0 0 L 149.85366 0 L 149.85366 70.2439 L 0 70.2439 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
                <a href="#" data-toggle="modal" data-target="#modalBooking-JsZirGOBwoD7zEKdf2Lc0">
                    <path
                        style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #d9d9d9; fill-rule: nonzero; opacity: 1;"
                        vector-effect="non-scaling-stroke" transform=" translate(-74.92683, -35.12195)"
                        d="M 0 0 L 149.85366 0 L 149.85366 70.2439 L 0 70.2439 z" stroke-linecap="round" />
                </a>
            @endif
        @empty
            <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="JsZirGOBwoD7zEKdf2Lc0">
                <path
                    style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #d9d9d9; fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(-74.92683, -35.12195)"
                    d="M 0 0 L 149.85366 0 L 149.85366 70.2439 L 0 70.2439 z" stroke-linecap="round" />
            </a>
        @endforelse
    </g>
    <g transform="matrix(2.1532857371 0 0 3.8450069697 790.8278053335 2115.4233597596)" id="KKdnNuH6-zfpFpyTIpOPG">
        @forelse ($siteplan->where('code_product', 'KKdnNuH6-zfpFpyTIpOPG') as $hasil)
            @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path
                    style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill:#ffc107;  fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(-74.92683, -35.12195)"
                    d="M 0 0 L 149.85366 0 L 149.85366 70.2439 L 0 70.2439 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path
                    style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill:#f50505; fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(-74.92683, -35.12195)"
                    d="M 0 0 L 149.85366 0 L 149.85366 70.2439 L 0 70.2439 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
                <a href="#" data-toggle="modal" data-target="#modalBooking-KKdnNuH6-zfpFpyTIpOPG">
                    <path
                        style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #d9d9d9; fill-rule: nonzero; opacity: 1;"
                        vector-effect="non-scaling-stroke" transform=" translate(-74.92683, -35.12195)"
                        d="M 0 0 L 149.85366 0 L 149.85366 70.2439 L 0 70.2439 z" stroke-linecap="round" />
                </a>
            @endif
        @empty
            <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="KKdnNuH6-zfpFpyTIpOPG">
                <path
                    style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #d9d9d9; fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(-74.92683, -35.12195)"
                    d="M 0 0 L 149.85366 0 L 149.85366 70.2439 L 0 70.2439 z" stroke-linecap="round" />
            </a>
        @endforelse
    </g>
    <g transform="matrix(2.1532857371 0 0 3.8474992106 789.0180771171 1842.4594994136)" id="sGHlbvIoLClR5V7pB1bjs">
        @forelse ($siteplan->where('code_product', 'sGHlbvIoLClR5V7pB1bjs') as $hasil)
            @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path
                    style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill:#ffc107;  fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(-74.92683, -35.12195)"
                    d="M 0 0 L 149.85366 0 L 149.85366 70.2439 L 0 70.2439 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path
                    style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill:#f50505; fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(-74.92683, -35.12195)"
                    d="M 0 0 L 149.85366 0 L 149.85366 70.2439 L 0 70.2439 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
                <a href="#" data-toggle="modal" data-target="#modalBooking-sGHlbvIoLClR5V7pB1bjs">
                    <path
                        style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #d9d9d9; fill-rule: nonzero; opacity: 1;"
                        vector-effect="non-scaling-stroke" transform=" translate(-74.92683, -35.12195)"
                        d="M 0 0 L 149.85366 0 L 149.85366 70.2439 L 0 70.2439 z" stroke-linecap="round" />
                </a>
            @endif
        @empty
            <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="sGHlbvIoLClR5V7pB1bjs">
                <path
                    style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #d9d9d9; fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(-74.92683, -35.12195)"
                    d="M 0 0 L 149.85366 0 L 149.85366 70.2439 L 0 70.2439 z" stroke-linecap="round" />
            </a>
        @endforelse
    </g>
    <g transform="matrix(2.1532857371 0 0 3.8474992106 790.8278053335 1587.2838203466)" id="IP20GibhbbtCDdLSI38_g">
        @forelse ($siteplan->where('code_product', 'IP20GibhbbtCDdLSI38_g') as $hasil)
            @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path
                    style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill:#ffc107;  fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(-74.92683, -35.12195)"
                    d="M 0 0 L 149.85366 0 L 149.85366 70.2439 L 0 70.2439 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path
                    style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill:#f50505; fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(-74.92683, -35.12195)"
                    d="M 0 0 L 149.85366 0 L 149.85366 70.2439 L 0 70.2439 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
                <a href="#" data-toggle="modal" data-target="#modalBooking-IP20GibhbbtCDdLSI38_g">
                    <path
                        style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #d9d9d9; fill-rule: nonzero; opacity: 1;"
                        vector-effect="non-scaling-stroke" transform=" translate(-74.92683, -35.12195)"
                        d="M 0 0 L 149.85366 0 L 149.85366 70.2439 L 0 70.2439 z" stroke-linecap="round" />
                </a>
            @endif
        @empty
            <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="IP20GibhbbtCDdLSI38_g">
                <path
                    style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #d9d9d9; fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(-74.92683, -35.12195)"
                    d="M 0 0 L 149.85366 0 L 149.85366 70.2439 L 0 70.2439 z" stroke-linecap="round" />
            </a>
        @endforelse
    </g>
    <g transform="matrix(2.1532857371 0 0 3.2414486164 789.0180771171 1335.518106305)" id="62Q9bpXxopLhfwnuIuzSQ">
        @forelse ($siteplan->where('code_product', '62Q9bpXxopLhfwnuIuzSQ') as $hasil)
            @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path
                    style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill:#ffc107;  fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(-74.92683, -35.12195)"
                    d="M 0 0 L 149.85366 0 L 149.85366 70.2439 L 0 70.2439 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path
                    style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill:#f50505; fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(-74.92683, -35.12195)"
                    d="M 0 0 L 149.85366 0 L 149.85366 70.2439 L 0 70.2439 z" stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
                <a href="#" data-toggle="modal" data-target="#modalBooking-62Q9bpXxopLhfwnuIuzSQ">
                    <path
                        style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #d9d9d9; fill-rule: nonzero; opacity: 1;"
                        vector-effect="non-scaling-stroke" transform=" translate(-74.92683, -35.12195)"
                        d="M 0 0 L 149.85366 0 L 149.85366 70.2439 L 0 70.2439 z" stroke-linecap="round" />
                </a>
            @endif
        @empty
            <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="62Q9bpXxopLhfwnuIuzSQ">
                <path
                    style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #d9d9d9; fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(-74.92683, -35.12195)"
                    d="M 0 0 L 149.85366 0 L 149.85366 70.2439 L 0 70.2439 z" stroke-linecap="round" />
            </a>
        @endforelse
    </g>
    <g transform="matrix(1.3065749283 0 0 3.6339886815 725.5460616212 734.0433013697)" id="iZghsIhA0ZvKf0MUutQ-q">
        @forelse ($siteplan->where('code_product', 'iZghsIhA0ZvKf0MUutQ-q') as $hasil)
            @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path
                    style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill:#ffc107;  fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(0, 0)"
                    d="M -78.04878 -78.04878 L 78.04878 -78.04878 L 78.04878 78.04878 L -78.04878 78.04878 z"
                    stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path
                    style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill:#f50505; fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(0, 0)"
                    d="M -78.04878 -78.04878 L 78.04878 -78.04878 L 78.04878 78.04878 L -78.04878 78.04878 z"
                    stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
                <a href="#" data-toggle="modal" data-target="#modalBooking-iZghsIhA0ZvKf0MUutQ-q">
                    <path
                        style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #d9d9d9; fill-rule: nonzero; opacity: 1;"
                        vector-effect="non-scaling-stroke" transform=" translate(0, 0)"
                        d="M -78.04878 -78.04878 L 78.04878 -78.04878 L 78.04878 78.04878 L -78.04878 78.04878 z"
                        stroke-linecap="round" />
                </a>
            @endif
        @empty
            <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="iZghsIhA0ZvKf0MUutQ-q">
                <path
                    style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #d9d9d9; fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(0, 0)"
                    d="M -78.04878 -78.04878 L 78.04878 -78.04878 L 78.04878 78.04878 L -78.04878 78.04878 z"
                    stroke-linecap="round" />
            </a>
        @endforelse
    </g>
    <g transform="matrix(0.8038750383 0 0 3.6315349825 889.5448967688 734.2348098991)" id="Pzp_ExxXE3lJH-ptvccqh">

        @forelse ($siteplan->where('code_product', 'Pzp_ExxXE3lJH-ptvccqh') as $hasil)
            @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path
                    style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill:#ffc107; fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(0, 0)"
                    d="M -78.04878 -78.04878 L 78.04878 -78.04878 L 78.04878 78.04878 L -78.04878 78.04878 z"
                    stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path
                    style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill:#f50505; fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(0, 0)"
                    d="M -78.04878 -78.04878 L 78.04878 -78.04878 L 78.04878 78.04878 L -78.04878 78.04878 z"
                    stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
                <a href="#" data-toggle="modal" data-target="#modalBooking-Pzp_ExxXE3lJH-ptvccqh">
                    <path
                        style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #d9d9d9; fill-rule: nonzero; opacity: 1;"
                        vector-effect="non-scaling-stroke" transform=" translate(0, 0)"
                        d="M -78.04878 -78.04878 L 78.04878 -78.04878 L 78.04878 78.04878 L -78.04878 78.04878 z"
                        stroke-linecap="round" />
                </a>
            @endif
        @empty
            <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="Pzp_ExxXE3lJH-ptvccqh">
                <path
                    style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #d9d9d9; fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(0, 0)"
                    d="M -78.04878 -78.04878 L 78.04878 -78.04878 L 78.04878 78.04878 L -78.04878 78.04878 z"
                    stroke-linecap="round" />
            </a>
        @endforelse
    </g>
    <g transform="matrix(1.3135042996 0 0 3.9737338963 1140.8155123031 708.4511193649)" id="xZkMHtl6WDNt1khGmpQsU">
        @forelse ($siteplan->where('code_product', 'xZkMHtl6WDNt1khGmpQsU') as $hasil)
            @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path
                    style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill:#ffc107; fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(0, 0)"
                    d="M -78.04878 -78.04878 L 78.04878 -78.04878 L 78.04878 78.04878 L -78.04878 78.04878 z"
                    stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path
                    style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill:#f50505;fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(0, 0)"
                    d="M -78.04878 -78.04878 L 78.04878 -78.04878 L 78.04878 78.04878 L -78.04878 78.04878 z"
                    stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
                <a href="#" data-toggle="modal" data-target="#modalBooking-xZkMHtl6WDNt1khGmpQsU">
                    <path
                        style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #ffffff; fill-rule: nonzero; opacity: 1;"
                        vector-effect="non-scaling-stroke" transform=" translate(0, 0)"
                        d="M -78.04878 -78.04878 L 78.04878 -78.04878 L 78.04878 78.04878 L -78.04878 78.04878 z"
                        stroke-linecap="round" />
                </a>
            @endif
        @empty
            <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="xZkMHtl6WDNt1khGmpQsU">
                <path
                    style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #ffffff; fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(0, 0)"
                    d="M -78.04878 -78.04878 L 78.04878 -78.04878 L 78.04878 78.04878 L -78.04878 78.04878 z"
                    stroke-linecap="round" />
            </a>
        @endforelse
    </g>
    <g transform="matrix(0.7967157227 0 0 3.9737338963 1304.8097540401 708.6642698421)" id="Co6RXcceSHWbA_QaTa0jt">
        @forelse ($siteplan->where('code_product', 'Co6RXcceSHWbA_QaTa0jt') as $hasil)
            @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path
                    style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill:#ffc107; fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(0, 0)"
                    d="M -78.04878 -78.04878 L 78.04878 -78.04878 L 78.04878 78.04878 L -78.04878 78.04878 z"
                    stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path
                    style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill:#f50505; fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(0, 0)"
                    d="M -78.04878 -78.04878 L 78.04878 -78.04878 L 78.04878 78.04878 L -78.04878 78.04878 z"
                    stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
                <a href="#" data-toggle="modal" data-target="#modalBooking-Co6RXcceSHWbA_QaTa0jt">
                    <path
                        style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #ffffff; fill-rule: nonzero; opacity: 1;"
                        vector-effect="non-scaling-stroke" transform=" translate(0, 0)"
                        d="M -78.04878 -78.04878 L 78.04878 -78.04878 L 78.04878 78.04878 L -78.04878 78.04878 z"
                        stroke-linecap="round" />
                </a>
            @endif
        @empty
            <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="Co6RXcceSHWbA_QaTa0jt">
                <path
                    style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #ffffff; fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(0, 0)"
                    d="M -78.04878 -78.04878 L 78.04878 -78.04878 L 78.04878 78.04878 L -78.04878 78.04878 z"
                    stroke-linecap="round" />
            </a>
        @endforelse
    </g>
    <g transform="matrix(1.2428810758 0 0 3.9729611414 1590.9597230397 708.7245824162)" id="4myzF1-HvFaOaRtbbXgcc">
        @forelse ($siteplan->where('code_product', '4myzF1-HvFaOaRtbbXgcc') as $hasil)
            @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path
                    style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill:#ffc107; fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(0, 0)"
                    d="M -78.04878 -78.04878 L 78.04878 -78.04878 L 78.04878 78.04878 L -78.04878 78.04878 z"
                    stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path
                    style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill:#f50505; fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(0, 0)"
                    d="M -78.04878 -78.04878 L 78.04878 -78.04878 L 78.04878 78.04878 L -78.04878 78.04878 z"
                    stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
                <a href="#" data-toggle="modal" data-target="#modalBooking-4myzF1-HvFaOaRtbbXgcc">
                    <path
                        style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #ffffff; fill-rule: nonzero; opacity: 1;"
                        vector-effect="non-scaling-stroke" transform=" translate(0, 0)"
                        d="M -78.04878 -78.04878 L 78.04878 -78.04878 L 78.04878 78.04878 L -78.04878 78.04878 z"
                        stroke-linecap="round" />
                </a>
            @endif
        @empty
            <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="4myzF1-HvFaOaRtbbXgcc">
                <path
                    style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #ffffff; fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(0, 0)"
                    d="M -78.04878 -78.04878 L 78.04878 -78.04878 L 78.04878 78.04878 L -78.04878 78.04878 z"
                    stroke-linecap="round" />
            </a>
        @endforelse
    </g>
    <g transform="matrix(0.7967157227 0 0 3.9729611414 1427.4651097507 708.7245824162)" id="IV8HHBWQI2EkkUFUvQut-">
        @forelse ($siteplan->where('code_product', 'IV8HHBWQI2EkkUFUvQut-') as $hasil)
            @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path
                    style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill:#ffc107; fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(0, 0)"
                    d="M -78.04878 -78.04878 L 78.04878 -78.04878 L 78.04878 78.04878 L -78.04878 78.04878 z"
                    stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path
                    style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill:#f50505;fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(0, 0)"
                    d="M -78.04878 -78.04878 L 78.04878 -78.04878 L 78.04878 78.04878 L -78.04878 78.04878 z"
                    stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
                <a href="#" data-toggle="modal" data-target="#modalBooking-IV8HHBWQI2EkkUFUvQut-">
                    <path
                        style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #ffffff; fill-rule: nonzero; opacity: 1;"
                        vector-effect="non-scaling-stroke" transform=" translate(0, 0)"
                        d="M -78.04878 -78.04878 L 78.04878 -78.04878 L 78.04878 78.04878 L -78.04878 78.04878 z"
                        stroke-linecap="round" />
                </a>
            @endif
        @empty
            <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="IV8HHBWQI2EkkUFUvQut-">
                <path
                    style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #ffffff; fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(0, 0)"
                    d="M -78.04878 -78.04878 L 78.04878 -78.04878 L 78.04878 78.04878 L -78.04878 78.04878 z"
                    stroke-linecap="round" />
            </a>
        @endforelse
    </g>
    <g transform="matrix(0.8891543233 0 0 3.9729611414 1839.5806857036 706.5802329149)" id="kBeHIFCF2suycHeVRPhi_">
        @forelse ($siteplan->where('code_product', 'kBeHIFCF2suycHeVRPhi_') as $hasil)
            @if ($hasil->status == 'BOOKING' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <path
                    style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill:#ffc107;  fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(0, 0)"
                    d="M -78.04878 -78.04878 L 78.04878 -78.04878 L 78.04878 78.04878 L -78.04878 78.04878 z"
                    stroke-linecap="round" />
            @elseif ($hasil->status == 'Terjual')
                <path
                    style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4;  fill:#f50505; fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(0, 0)"
                    d="M -78.04878 -78.04878 L 78.04878 -78.04878 L 78.04878 78.04878 L -78.04878 78.04878 z"
                    stroke-linecap="round" />
            @elseif ($hasil->status == 'Tersedia')
                <a href="#" data-toggle="modal" data-target="#modalBooking-kBeHIFCF2suycHeVRPhi_">
                    <path
                        style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #ffffff;  fill-rule: nonzero; opacity: 1;"
                        vector-effect="non-scaling-stroke" transform=" translate(0, 0)"
                        d="M -78.04878 -78.04878 L 78.04878 -78.04878 L 78.04878 78.04878 L -78.04878 78.04878 z"
                        stroke-linecap="round" />
                </a>
            @endif
        @empty
            <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="kBeHIFCF2suycHeVRPhi_">
                <path
                    style="stroke: rgb(0,0,0); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: #ffffff;  fill-rule: nonzero; opacity: 1;"
                    vector-effect="non-scaling-stroke" transform=" translate(0, 0)"
                    d="M -78.04878 -78.04878 L 78.04878 -78.04878 L 78.04878 78.04878 L -78.04878 78.04878 z"
                    stroke-linecap="round" />
            </a>
        @endforelse
    </g>
    <g transform="matrix(6.6352146106 -0.9263466624 0.0735416483 0.5214218324 1350 418.4249047661)"
        id="WqX61ir7dE8yY7bgNfYTS">
        <path
            style="stroke: rgb(7,174,96); stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(112,112,112); fill-rule: nonzero; opacity: 1;"
            vector-effect="non-scaling-stroke" transform=" translate(0.000005, 0.000005)"
            d="M -185.18519 -185.18519 L 185.18517999999997 -185.18519 L 185.18517999999997 185.18517999999997 L -185.18519 185.18517999999997 z"
            stroke-linecap="round" />
    </g>
    <g transform="matrix(0.9903946213 -0.1382696425 0.1394092893 0.9902355145 1863.4229236107 372.9409661768)"
        style="" id="Dd2xTOnu0RShAnuzfSXDa">
        <text xml:space="preserve" font-family="Open Sans" font-size="107" font-style="normal"
            font-weight="600" line-height="1"
            style="font-family:'Open Sans'; stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(255,255,255); fill-rule: nonzero; opacity: 1; white-space: pre;">
            <tspan x="-331.1357421875" y="8.56798">Jalan Pelita 1</tspan>
        </text>
    </g>
    <g transform="matrix(0 -1 1 0 2028.190080817 812.1226634633)" style="" id="zx_NQElmo_eLfTHSXsmYr">
        <text xml:space="preserve" font-family="Open Sans" font-size="89" font-style="normal"
            font-weight="600" line-height="1"
            style="font-family:'Open Sans'; stroke: none; stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;">
            <tspan x="-161.8991699219" y="17.74346">RUKO 1</tspan>
        </text>
    </g>
    <g transform="matrix(0 -1 1 0 1606.6468011859 751.1315416463)" style="" id="1RUzIk1g1tu2xkEuibpfW">
        <text xml:space="preserve" font-family="Open Sans" font-size="9" font-style="normal"
            font-weight="600" line-height="1"
            style="font-family:'Open Sans'; stroke: none; stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;">
            <tspan x="-16.3718261719" y="-52.58774">RUKO 2</tspan>
        </text>
    </g>
    <g transform="matrix(0 -1 1 0 1444.2735046276 812.1226634633)" style="" id="u1L7QffD3Sp4i1yDpRqoL">
        <text xml:space="preserve" font-family="Open Sans" font-size="89" font-style="normal"
            font-weight="600" line-height="1"
            style="font-family:'Open Sans'; stroke: none; stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;">
            <tspan x="-161.8991699219" y="17.74346">RUKO 4</tspan>
        </text>
    </g>
    <g transform="matrix(0 -1 1 0 1317.3112354205 812.1226634633)" style="" id="E8M9iRdKDt7RLFYA1wUYt">
        <text xml:space="preserve" font-family="Open Sans" font-size="89" font-style="normal"
            font-weight="600" line-height="1"
            style="font-family:'Open Sans'; stroke: none; stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;">
            <tspan x="-161.8991699219" y="17.74346">RUKO 5</tspan>
        </text>
    </g>
    <g transform="matrix(0 -1 1 0 746.6135746631 812.1226634633)" style="" id="o7XSSZzwHqeEAAySuPSi7">
        <text xml:space="preserve" font-family="Open Sans" font-size="89" font-style="normal"
            font-weight="600" line-height="1"
            style="font-family:'Open Sans'; stroke: none; stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;">
            <tspan x="-161.8991699219" y="17.74346">RUKO 8</tspan>
        </text>
    </g>
    <g transform="matrix(0 -1 1 0 1615.1785253257 812.1226634633)" style="" id="LvyQ0JurD8tgyi0eXhwl9">
        <text xml:space="preserve" font-family="Open Sans" font-size="89" font-style="normal"
            font-weight="600" line-height="1"
            style="font-family:'Open Sans'; stroke: none; stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;">
            <tspan x="-161.8991699219" y="17.74346">RUKO 3</tspan>
        </text>
    </g>
    <g transform="matrix(0 -1 1 0 1149.2576479068 812.1226634633)" style="" id="E8QIAxYMfpnO1kAeZ0Dyy">
        <text xml:space="preserve" font-family="Open Sans" font-size="89" font-style="normal"
            font-weight="600" line-height="1"
            style="font-family:'Open Sans'; stroke: none; stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;">
            <tspan x="-161.8991699219" y="17.74346">RUKO 6</tspan>
        </text>
    </g>
    <g transform="matrix(0 -1 1 0 903.9332512295 812.1226634633)" style="" id="EAL3kB9mJHJv4S_pDHmEB">
        <text xml:space="preserve" font-family="Open Sans" font-size="89" font-style="normal"
            font-weight="600" line-height="1"
            style="font-family:'Open Sans'; stroke: none; stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;">
            <tspan x="-161.8991699219" y="17.74346">RUKO 7</tspan>
        </text>
    </g>
    <g transform="matrix(0 -1 1 0 1857.4499423156 812.1226634634)" style="" id="pmgewLn8gPRuQXL74WAOV">
        <text xml:space="preserve" font-family="Open Sans" font-size="89" font-style="normal"
            font-weight="600" line-height="1"
            style="font-family:'Open Sans'; stroke: none; stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;">
            <tspan x="-161.8991699219" y="17.74346">RUKO 2</tspan>
        </text>
    </g>
    <g transform="matrix(1 0 0 1 1944.736892186 1072.4964576938)" style="" id="YraCXMfx07zzlc2DWbQ7m">
        <text xml:space="preserve" font-family="Open Sans" font-size="72" font-style="normal"
            font-weight="600" line-height="1"
            style="font-family:'Open Sans'; stroke: none; stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;">
            <tspan x="-53.736328125" y="16.79808">A 1</tspan>
        </text>
    </g>
    <g transform="matrix(1 0 0 1 1944.736892186 1175.499358735)" style="" id="FgKTVKeqM94kEakuAtPCd">
        <text xml:space="preserve" font-family="Open Sans" font-size="72" font-style="normal"
            font-weight="600" line-height="1"
            style="font-family:'Open Sans'; stroke: none; stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;">
            <tspan x="-53.736328125" y="16.79808">A 2</tspan>
        </text>
    </g>
    <g transform="matrix(1 0 0 1 1944.736892186 1270.4239102988)" style="" id="cpHksJspFwy1x3brJFi-j">
        <text xml:space="preserve" font-family="Open Sans" font-size="72" font-style="normal"
            font-weight="600" line-height="1"
            style="font-family:'Open Sans'; stroke: none; stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;">
            <tspan x="-53.736328125" y="16.79808">A 3</tspan>
        </text>
    </g>
    <g transform="matrix(1 0 0 1 1944.736892186 1373.4268113398)" style="" id="zszIvG-BEnMqOYHJaYIFg">
        <text xml:space="preserve" font-family="Open Sans" font-size="72" font-style="normal"
            font-weight="600" line-height="1"
            style="font-family:'Open Sans'; stroke: none; stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;">
            <tspan x="-53.736328125" y="16.79808">A 4</tspan>
        </text>
    </g>
    <g transform="matrix(1 0 0 1 1944.736892186 1469.6678252103)" style="" id="ETEqZ4RjsGZAVEgW_us8T">
        <text xml:space="preserve" font-family="Open Sans" font-size="72" font-style="normal"
            font-weight="600" line-height="1"
            style="font-family:'Open Sans'; stroke: none; stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;">
            <tspan x="-53.736328125" y="16.79808">A 5</tspan>
        </text>
    </g>
    <g transform="matrix(1 0 0 1 1944.736892186 1572.6707262513)" style="" id="KnVEkR7ukNS4ogHLeWKrD">
        <text xml:space="preserve" font-family="Open Sans" font-size="72" font-style="normal"
            font-weight="600" line-height="1"
            style="font-family:'Open Sans'; stroke: none; stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;">
            <tspan x="-53.736328125" y="16.79808">A 6</tspan>
        </text>
    </g>
    <g transform="matrix(1 0 0 1 1944.736892186 1682.9188782079)" style="" id="DAcSZH-a38Ui8TsLOq7V2">
        <text xml:space="preserve" font-family="Open Sans" font-size="72" font-style="normal"
            font-weight="600" line-height="1"
            style="font-family:'Open Sans'; stroke: none; stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;">
            <tspan x="-53.736328125" y="16.79808">A 7</tspan>
        </text>
    </g>
    <g transform="matrix(1 0 0 1 1944.736892186 1785.9217792491)" style="" id="IDDJp8wHds13fwg6_I-yK">
        <text xml:space="preserve" font-family="Open Sans" font-size="72" font-style="normal"
            font-weight="600" line-height="1"
            style="font-family:'Open Sans'; stroke: none; stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;">
            <tspan x="-53.736328125" y="16.79808">A 8</tspan>
        </text>
    </g>
    <g transform="matrix(1 0 0 1 1944.736892186 1880.846330813)" style="" id="zTwpLpLgPPiQTCwnDC00_">
        <text xml:space="preserve" font-family="Open Sans" font-size="72" font-style="normal"
            font-weight="600" line-height="1"
            style="font-family:'Open Sans'; stroke: none; stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;">
            <tspan x="-53.736328125" y="16.79808">A 9</tspan>
        </text>
    </g>
    <g transform="matrix(1 0 0 1 1944.736892186 1983.849231854)" style="" id="aH9wd-Xt-cGjjozfAahbQ">
        <text xml:space="preserve" font-family="Open Sans" font-size="72" font-style="normal"
            font-weight="600" line-height="1"
            style="font-family:'Open Sans'; stroke: none; stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;">
            <tspan x="-74.3203125" y="16.79808">A 10</tspan>
        </text>
    </g>
    <g transform="matrix(1 0 0 1 1944.736892186 2080.0902457244)" style="" id="pDS0mtycuB5ulBAMta3q7">
        <text xml:space="preserve" font-family="Open Sans" font-size="72" font-style="normal"
            font-weight="600" line-height="1"
            style="font-family:'Open Sans'; stroke: none; stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;">
            <tspan x="-74.3203125" y="16.79808">A 11</tspan>
        </text>
    </g>
    <g transform="matrix(1 0 0 1 1944.736892186 2183.0931467653)" style="" id="23zM8SQIwvV-VuUE8fVaD">
        <text xml:space="preserve" font-family="Open Sans" font-size="72" font-style="normal"
            font-weight="600" line-height="1"
            style="font-family:'Open Sans'; stroke: none; stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;">
            <tspan x="-74.3203125" y="16.79808">A 12</tspan>
        </text>
    </g>
    <g transform="matrix(1 0 0 1 1944.736892186 2275.7131165406)" style="" id="PEfaA06xlm-wb62lfvcXJ">
        <text xml:space="preserve" font-family="Open Sans" font-size="72" font-style="normal"
            font-weight="600" line-height="1"
            style="font-family:'Open Sans'; stroke: none; stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;">
            <tspan x="-74.3203125" y="16.79808">A 13</tspan>
        </text>
    </g>
    <g transform="matrix(1 0 0 1 1944.736892186 2378.7160175817)" style="" id="SDSQ_9W-QBIN1dpRl4BYJ">
        <text xml:space="preserve" font-family="Open Sans" font-size="72" font-style="normal"
            font-weight="600" line-height="1"
            style="font-family:'Open Sans'; stroke: none; stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;">
            <tspan x="-74.3203125" y="16.79808">A 14</tspan>
        </text>
    </g>
    <g transform="matrix(1 0 0 1 1944.736892186 2473.6405691456)" style="" id="8RBDXlkyoKBcZXj0zdLzF">
        <text xml:space="preserve" font-family="Open Sans" font-size="72" font-style="normal"
            font-weight="600" line-height="1"
            style="font-family:'Open Sans'; stroke: none; stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;">
            <tspan x="-74.3203125" y="16.79808">A 15</tspan>
        </text>
    </g>
    <g transform="matrix(1 0 0 1 1944.736892186 2576.6434701865)" style="" id="RCafdUervbBA9v86E6jYD">
        <text xml:space="preserve" font-family="Open Sans" font-size="72" font-style="normal"
            font-weight="600" line-height="1"
            style="font-family:'Open Sans'; stroke: none; stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;">
            <tspan x="-74.3203125" y="16.79808">A 16</tspan>
        </text>
    </g>
    <g transform="matrix(1 0 0 1 1944.736892186 2672.8844840569)" style="" id="5jPIWLOD1TaZYPrSVWkXY">
        <text xml:space="preserve" font-family="Open Sans" font-size="72" font-style="normal"
            font-weight="600" line-height="1"
            style="font-family:'Open Sans'; stroke: none; stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;">
            <tspan x="-74.3203125" y="16.79808">A 17</tspan>
        </text>
    </g>
    <g transform="matrix(1 0 0 1 1944.736892186 2775.8873850979)" style="" id="SUOLQF9j-vHY6VJBJmPk0">
        <text xml:space="preserve" font-family="Open Sans" font-size="72" font-style="normal"
            font-weight="600" line-height="1"
            style="font-family:'Open Sans'; stroke: none; stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;">
            <tspan x="-74.3203125" y="16.79808">A 18</tspan>
        </text>
    </g>
    <g transform="matrix(1 0 0 1 1944.736892186 2870.8119366617)" style="" id="ezmp2x3NdcZ39A7g2s1iG">
        <text xml:space="preserve" font-family="Open Sans" font-size="72" font-style="normal"
            font-weight="600" line-height="1"
            style="font-family:'Open Sans'; stroke: none; stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;">
            <tspan x="-74.3203125" y="16.79808">A 19</tspan>
        </text>
    </g>
    <g transform="matrix(1 0 0 1 1944.736892186 2983.4664371386)" style="" id="NV4PUtCdF-I6anBAmrAd3">
        <text xml:space="preserve" font-family="Open Sans" font-size="72" font-style="normal"
            font-weight="600" line-height="1"
            style="font-family:'Open Sans'; stroke: none; stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;">
            <tspan x="-74.3203125" y="16.79808">A 20</tspan>
        </text>
    </g>
    <g transform="matrix(1 0 0 1 1944.736892186 3086.4693381796)" style="" id="a6G9ga_ShL31QkPoW06Vz">
        <text xml:space="preserve" font-family="Open Sans" font-size="72" font-style="normal"
            font-weight="600" line-height="1"
            style="font-family:'Open Sans'; stroke: none; stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;">
            <tspan x="-74.3203125" y="16.79808">A 21</tspan>
        </text>
    </g>
    <g transform="matrix(1 0 0 1 1944.736892186 3182.71035205)" style="" id="NKMombeckK4iM_uN2c_Z-">
        <text xml:space="preserve" font-family="Open Sans" font-size="72" font-style="normal"
            font-weight="600" line-height="1"
            style="font-family:'Open Sans'; stroke: none; stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;">
            <tspan x="-74.3203125" y="16.79808">A 22</tspan>
        </text>
    </g>
    <g transform="matrix(1 0 0 1 1944.736892186 3285.713253091)" style="" id="KWPLyUFfksxIGK2zeS7Wx">
        <text xml:space="preserve" font-family="Open Sans" font-size="72" font-style="normal"
            font-weight="600" line-height="1"
            style="font-family:'Open Sans'; stroke: none; stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;">
            <tspan x="-74.3203125" y="16.79808">A 23</tspan>
        </text>
    </g>
    <g transform="matrix(1 0 0 1 1944.736892186 3378.3332228663)" style="" id="DwnkSVQLD-AdnUZamckKb">
        <text xml:space="preserve" font-family="Open Sans" font-size="72" font-style="normal"
            font-weight="600" line-height="1"
            style="font-family:'Open Sans'; stroke: none; stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;">
            <tspan x="-74.3203125" y="16.79808">A 24</tspan>
        </text>
    </g>
    <g transform="matrix(1 0 0 1 1944.736892186 3481.3361239074)" style="" id="IkKfb2JHfh3SDa6kjZC7z">
        <text xml:space="preserve" font-family="Open Sans" font-size="72" font-style="normal"
            font-weight="600" line-height="1"
            style="font-family:'Open Sans'; stroke: none; stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;">
            <tspan x="-74.3203125" y="16.79808">A 25</tspan>
        </text>
    </g>
    <g transform="matrix(1 0 0 1 1944.736892186 3576.2606754713)" style="" id="tWsYR6se18eFwJyhNW15N">
        <text xml:space="preserve" font-family="Open Sans" font-size="72" font-style="normal"
            font-weight="600" line-height="1"
            style="font-family:'Open Sans'; stroke: none; stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;">
            <tspan x="-74.3203125" y="16.79808">A 26</tspan>
        </text>
    </g>
    <g transform="matrix(1 0 0 1 1944.736892186 3679.2635765123)" style="" id="xOaef1XyLiF-MNs055fJO">
        <text xml:space="preserve" font-family="Open Sans" font-size="72" font-style="normal"
            font-weight="600" line-height="1"
            style="font-family:'Open Sans'; stroke: none; stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;">
            <tspan x="-74.3203125" y="16.79808">A 27</tspan>
        </text>
    </g>
    <g transform="matrix(1 0 0 1 1944.736892186 3782.5965699479)" style="" id="m0d4oiVgz0f3G1jMxDKKo">
        <text xml:space="preserve" font-family="Open Sans" font-size="72" font-style="normal"
            font-weight="600" line-height="1"
            style="font-family:'Open Sans'; stroke: none; stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;">
            <tspan x="-74.3203125" y="16.79808">A 28</tspan>
        </text>
    </g>
    <g transform="matrix(1 0 0 1 1944.736892186 3892.0974038659)" style="" id="0lxaozybpAS2vS11CHZ-M">
        <text xml:space="preserve" font-family="Open Sans" font-size="72" font-style="normal"
            font-weight="600" line-height="1"
            style="font-family:'Open Sans'; stroke: none; stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;">
            <tspan x="-74.3203125" y="16.79808">A 29</tspan>
        </text>
    </g>
    <g transform="matrix(1 0 0 1 1944.736892186 3979.6009083807)" style="" id="fL313tB-taIbOVmgTcVdX">
        <text xml:space="preserve" font-family="Open Sans" font-size="72" font-style="normal"
            font-weight="600" line-height="1"
            style="font-family:'Open Sans'; stroke: none; stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;">
            <tspan x="-74.3203125" y="16.79808">A 30</tspan>
        </text>
    </g>
    <g transform="matrix(1 0 0 1 1944.736892186 4082.9339018164)" style="" id="MhcwBjrkH8aTR38MQ5N7f">
        <text xml:space="preserve" font-family="Open Sans" font-size="72" font-style="normal"
            font-weight="600" line-height="1"
            style="font-family:'Open Sans'; stroke: none; stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;">
            <tspan x="-74.3203125" y="16.79808">A 31</tspan>
        </text>
    </g>
    <g transform="matrix(1 0 0 1 1944.736892186 4192.4347357344)" style="" id="2Nu0GtJO94Xb1u1vu9A6H">
        <text xml:space="preserve" font-family="Open Sans" font-size="72" font-style="normal"
            font-weight="600" line-height="1"
            style="font-family:'Open Sans'; stroke: none; stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;">
            <tspan x="-74.3203125" y="16.79808">A 32</tspan>
        </text>
    </g>
    <g transform="matrix(1 0 0 1 1535.5794846064 3087.7858004862)" style="" id="yI_WgZubbKZFrWys2tKt-">
        <text xml:space="preserve" font-family="Open Sans" font-size="72" font-style="normal"
            font-weight="600" line-height="1"
            style="font-family:'Open Sans'; stroke: none; stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;">
            <tspan x="-74.25" y="16.79808">B 16</tspan>
        </text>
    </g>
    <g transform="matrix(1 0 0 1 1535.5794846064 1080.5748071711)" style="" id="Lu-IpxvKhgS2jFul-0far">
        <text xml:space="preserve" font-family="Open Sans" font-size="72" font-style="normal"
            font-weight="600" line-height="1"
            style="font-family:'Open Sans'; stroke: none; stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;">
            <tspan x="-53.666015625" y="16.79808">B 1</tspan>
        </text>
    </g>
    <g transform="matrix(1 0 0 1 1546.2126590808 3285.713253091)" style="" id="UmKa6JFTQW-Ff6Mv-aO00">
        <text xml:space="preserve" font-family="Open Sans" font-size="72" font-style="normal"
            font-weight="600" line-height="1"
            style="font-family:'Open Sans'; stroke: none; stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;">
            <tspan x="-74.25" y="16.79808">B 17</tspan>
        </text>
    </g>
    <g transform="matrix(1 0 0 1 1535.5794846064 1194.0864566667)" style="" id="Y-_y2v2yCg_a-pHHZ4Xrr">
        <text xml:space="preserve" font-family="Open Sans" font-size="72" font-style="normal"
            font-weight="600" line-height="1"
            style="font-family:'Open Sans'; stroke: none; stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;">
            <tspan x="-53.666015625" y="16.79808">B 2</tspan>
        </text>
    </g>
    <g transform="matrix(1 0 0 1 1546.2126590808 3386.4115723436)" style="" id="rZ0F8hu8KapslVAQJ8PdL">
        <text xml:space="preserve" font-family="Open Sans" font-size="72" font-style="normal"
            font-weight="600" line-height="1"
            style="font-family:'Open Sans'; stroke: none; stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;">
            <tspan x="-74.25" y="16.79808">B 18</tspan>
        </text>
    </g>
    <g transform="matrix(1 0 0 1 1535.5794846064 1413.9227250673)" style="" id="jSAKCEUs9rYhWwpqmBuwY">
        <text xml:space="preserve" font-family="Open Sans" font-size="72" font-style="normal"
            font-weight="600" line-height="1"
            style="font-family:'Open Sans'; stroke: none; stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;">
            <tspan x="-53.666015625" y="16.79808">B 3</tspan>
        </text>
    </g>
    <g transform="matrix(1 0 0 1 1546.2126590808 3496.9171701065)" style="" id="EWr09CToAsVSTXc1L7O2z">
        <text xml:space="preserve" font-family="Open Sans" font-size="72" font-style="normal"
            font-weight="600" line-height="1"
            style="font-family:'Open Sans'; stroke: none; stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;">
            <tspan x="-74.25" y="16.79808">B 19</tspan>
        </text>
    </g>
    <g transform="matrix(1 0 0 1 1535.5794846064 1705.5548296209)" style="" id="KLnw8uzQjB3OI_e7t20cf">
        <text xml:space="preserve" font-family="Open Sans" font-size="72" font-style="normal"
            font-weight="600" line-height="1"
            style="font-family:'Open Sans'; stroke: none; stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;">
            <tspan x="-53.666015625" y="16.79808">B 4</tspan>
        </text>
    </g>
    <g transform="matrix(1 0 0 1 1546.2126590808 3591.8417216703)" style="" id="3MjFoUE9ucjs9rdV7jSuw">
        <text xml:space="preserve" font-family="Open Sans" font-size="72" font-style="normal"
            font-weight="600" line-height="1"
            style="font-family:'Open Sans'; stroke: none; stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;">
            <tspan x="-74.25" y="16.79808">B 20</tspan>
        </text>
    </g>
    <g transform="matrix(1 0 0 1 1535.5794846064 1936.386956072)" style="" id="71Ymzg_MO3BQ04RdfsZ-o">
        <text xml:space="preserve" font-family="Open Sans" font-size="72" font-style="normal"
            font-weight="600" line-height="1"
            style="font-family:'Open Sans'; stroke: none; stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;">
            <tspan x="-53.666015625" y="16.79808">B 5</tspan>
        </text>
    </g>
    <g transform="matrix(1 0 0 1 1546.2126590808 3696.1610850178)" style="" id="FqcNT8-lsDAF3Bx67YHCi">
        <text xml:space="preserve" font-family="Open Sans" font-size="72" font-style="normal"
            font-weight="600" line-height="1"
            style="font-family:'Open Sans'; stroke: none; stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;">
            <tspan x="-74.25" y="16.79808">B 21</tspan>
        </text>
    </g>
    <g transform="matrix(1 0 0 1 1535.5794846064 2032.6279699424)" style="" id="mtIGY69NgoE-W_wz-Br8R">
        <text xml:space="preserve" font-family="Open Sans" font-size="72" font-style="normal"
            font-weight="600" line-height="1"
            style="font-family:'Open Sans'; stroke: none; stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;">
            <tspan x="-53.666015625" y="16.79808">B 6</tspan>
        </text>
    </g>
    <g transform="matrix(1 0 0 1 1546.2126590808 3791.0856365817)" style="" id="QT3YT7ghik9nf89bptFjZ">
        <text xml:space="preserve" font-family="Open Sans" font-size="72" font-style="normal"
            font-weight="600" line-height="1"
            style="font-family:'Open Sans'; stroke: none; stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;">
            <tspan x="-74.25" y="16.79808">B 22</tspan>
        </text>
    </g>
    <g transform="matrix(1 0 0 1 1535.5794846064 2135.6308709834)" style="" id="rhxmF6J20X42K-DSOyAnb">
        <text xml:space="preserve" font-family="Open Sans" font-size="72" font-style="normal"
            font-weight="600" line-height="1"
            style="font-family:'Open Sans'; stroke: none; stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;">
            <tspan x="-53.666015625" y="16.79808">B 7</tspan>
        </text>
    </g>
    <g transform="matrix(1 0 0 1 1546.2126590808 3892.0974038659)" style="" id="C_uOWUz1u0nS_3plF1kMa">
        <text xml:space="preserve" font-family="Open Sans" font-size="72" font-style="normal"
            font-weight="600" line-height="1"
            style="font-family:'Open Sans'; stroke: none; stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;">
            <tspan x="-74.25" y="16.79808">B 23</tspan>
        </text>
    </g>
    <g transform="matrix(1 0 0 1 1535.5794846064 2233.077450087)" style="" id="mDVwCB-e9zhgN40lp6Vi-">
        <text xml:space="preserve" font-family="Open Sans" font-size="72" font-style="normal"
            font-weight="600" line-height="1"
            style="font-family:'Open Sans'; stroke: none; stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;">
            <tspan x="-53.666015625" y="16.79808">B 8</tspan>
        </text>
    </g>
    <g transform="matrix(1 0 0 1 1546.2126590808 3994.7868568753)" style="" id="3gY3DpBk9aUmyT2KtTGo6">
        <text xml:space="preserve" font-family="Open Sans" font-size="72" font-style="normal"
            font-weight="600" line-height="1"
            style="font-family:'Open Sans'; stroke: none; stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;">
            <tspan x="-74.25" y="16.79808">B 24</tspan>
        </text>
    </g>
    <g transform="matrix(1 0 0 1 1535.5794846064 2334.5449434214)" style="" id="hGKefdAMwS829QTbELvhw">
        <text xml:space="preserve" font-family="Open Sans" font-size="72" font-style="normal"
            font-weight="600" line-height="1"
            style="font-family:'Open Sans'; stroke: none; stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;">
            <tspan x="-53.666015625" y="16.79808">B 9</tspan>
        </text>
    </g>
    <g transform="matrix(1 0 0 1 1546.2126590808 4097.5101841705)" style="" id="roGtF0vfZ-aoY1TAAKuLq">
        <text xml:space="preserve" font-family="Open Sans" font-size="72" font-style="normal"
            font-weight="600" line-height="1"
            style="font-family:'Open Sans'; stroke: none; stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;">
            <tspan x="-74.25" y="16.79808">B 25</tspan>
        </text>
    </g>
    <g transform="matrix(1 0 0 1 1546.2126590808 4197.2700650675)" style="" id="7Ijtlv0J3j7cdIzka1aHl">
        <text xml:space="preserve" font-family="Open Sans" font-size="72" font-style="normal"
            font-weight="600" line-height="1"
            style="font-family:'Open Sans'; stroke: none; stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;">
            <tspan x="-74.25" y="16.79808">B 26</tspan>
        </text>
    </g>
    <g transform="matrix(1 0 0 1 1535.5794846064 2435.2490531958)" style="" id="PnWaxK4-UY7NCEHfeWM3g">
        <text xml:space="preserve" font-family="Open Sans" font-size="72" font-style="normal"
            font-weight="600" line-height="1"
            style="font-family:'Open Sans'; stroke: none; stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;">
            <tspan x="-74.25" y="16.79808">B 10</tspan>
        </text>
    </g>
    <g transform="matrix(1 0 0 1 1200.9836275151 1194.0864566667)" style="" id="1WH2PhXE3cl0iSd2l1hFS">
        <text xml:space="preserve" font-family="Open Sans" font-size="72" font-style="normal"
            font-weight="600" line-height="1"
            style="font-family:'Open Sans'; stroke: none; stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;">
            <tspan x="-52.751953125" y="16.79808">C 1</tspan>
        </text>
    </g>
    <g transform="matrix(1 0 0 1 1535.5794846064 2535.9531629701)" style="" id="P8vJiRvIDn9Eiyc3sLMUX">
        <text xml:space="preserve" font-family="Open Sans" font-size="72" font-style="normal"
            font-weight="600" line-height="1"
            style="font-family:'Open Sans'; stroke: none; stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;">
            <tspan x="-74.25" y="16.79808">B 11</tspan>
        </text>
    </g>
    <g transform="matrix(1 0 0 1 1201.5802146973 1606.3127344056)" style="" id="AVUGrJpbjYkpYgLMXoW83">
        <text xml:space="preserve" font-family="Open Sans" font-size="72" font-style="normal"
            font-weight="600" line-height="1"
            style="font-family:'Open Sans'; stroke: none; stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;">
            <tspan x="-62.103515625" y="16.79808" style="white-space: pre; "> C 2</tspan>
        </text>
    </g>
    <g transform="matrix(1 0 0 1 1535.5794846064 2636.6572727445)" style="" id="pvd72XkdGoQ_8q_ux09Po">
        <text xml:space="preserve" font-family="Open Sans" font-size="72" font-style="normal"
            font-weight="600" line-height="1"
            style="font-family:'Open Sans'; stroke: none; stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;">
            <tspan x="-74.25" y="16.79808">B 12</tspan>
        </text>
    </g>
    <g transform="matrix(1 0 0 1 1198.7953968842 1880.9668772277)" style="" id="oYUsj5R2kEBYLhyqISUW2">
        <text xml:space="preserve" font-family="Open Sans" font-size="72" font-style="normal"
            font-weight="600" line-height="1"
            style="font-family:'Open Sans'; stroke: none; stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;">
            <tspan x="-52.751953125" y="16.79808">C 3</tspan>
        </text>
    </g>
    <g transform="matrix(1 0 0 1 1535.5794846064 2735.3818734494)" style="" id="h030BvA3qJTZX2pm5Q2gI">
        <text xml:space="preserve" font-family="Open Sans" font-size="72" font-style="normal"
            font-weight="600" line-height="1"
            style="font-family:'Open Sans'; stroke: none; stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;">
            <tspan x="-74.25" y="16.79808">B 13</tspan>
        </text>
    </g>
    <g transform="matrix(1 0 0 1 1199.2797475743 2227.283951662)" style="" id="ZL0U0wR6Xey7uDkRXL6Rp">
        <text xml:space="preserve" font-family="Open Sans" font-size="72" font-style="normal"
            font-weight="600" line-height="1"
            style="font-family:'Open Sans'; stroke: none; stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;">
            <tspan x="-52.751953125" y="16.79808">C 4</tspan>
        </text>
    </g>
    <g transform="matrix(1 0 0 1 1535.5794846064 2846.3378491742)" style="" id="R7RDuFH94dgcABA032q2Y">
        <text xml:space="preserve" font-family="Open Sans" font-size="72" font-style="normal"
            font-weight="600" line-height="1"
            style="font-family:'Open Sans'; stroke: none; stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;">
            <tspan x="-74.25" y="16.79808">B 14</tspan>
        </text>
    </g>
    <g transform="matrix(1 0 0 1 1204.2370051043 2557.2616340224)" style="" id="9tbHLzObTo5g2I6y4SSHY">
        <text xml:space="preserve" font-family="Open Sans" font-size="72" font-style="normal"
            font-weight="600" line-height="1"
            style="font-family:'Open Sans'; stroke: none; stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;">
            <tspan x="-52.751953125" y="16.79808">C 5</tspan>
        </text>
    </g>
    <g transform="matrix(1 0 0 1 1535.5794846064 2941.2624007381)" style="" id="Lv1jh-49uPuUhm7R5PN2n">
        <text xml:space="preserve" font-family="Open Sans" font-size="72" font-style="normal"
            font-weight="600" line-height="1"
            style="font-family:'Open Sans'; stroke: none; stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;">
            <tspan x="-74.25" y="16.79808">B 15</tspan>
        </text>
    </g>
    <g transform="matrix(1 0 0 1 1217.5010547454 2920.6406761313)" style="" id="GULG_bl9V-p5XblPrkr8s">
        <text xml:space="preserve" font-family="Open Sans" font-size="72" font-style="normal"
            font-weight="600" line-height="1"
            style="font-family:'Open Sans'; stroke: none; stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;">
            <tspan x="-43.400390625" y="16.79808">C6</tspan>
        </text>
    </g>
    <g transform="matrix(1.7848077621 0 0 1.7729948913 624.9713744147 4212.5659899731)" id="FppdDS5dSkOXwe230ksdA">
        <path
            style="stroke: rgb(0,0,0); stroke-width: 1; stroke-dasharray: none; stroke-linecap: round; stroke-dashoffset: 0; stroke-linejoin: round; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;"
            transform=" translate(-1086.5385745937, -1394.5816089832)"
            d="M 1086.5375745937456 1394.5816089831546 L 1086.5395745937456 1394.5816089831546"
            stroke-linecap="round" />
    </g>
    <g transform="matrix(1 0 0 1 1214.7279765052 3797.172852302)" style="" id="24jTn2HV-KVh_hv_LYb40">
        <text xml:space="preserve" font-family="Open Sans" font-size="72" font-style="normal"
            font-weight="600" line-height="1"
            style="font-family:'Open Sans'; stroke: none; stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;">
            <tspan x="-52.751953125" y="16.79808">C 7</tspan>
        </text>
    </g>
    <g transform="matrix(1 0 0 1 793.7753302741 1072.4964576938)" style="" id="uV3yEKOlYMEtqTs5q1eBO">
        <text xml:space="preserve" font-family="Open Sans" font-size="72" font-style="normal"
            font-weight="600" line-height="1"
            style="font-family:'Open Sans'; stroke: none; stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;">
            <tspan x="-56.3203125" y="16.79808">D 1</tspan>
        </text>
    </g>
    <g transform="matrix(1 0 0 1 782.2112755151 1175.499358735)" style="" id="BeBmwlJANL4vPEJwSj2HX">
        <text xml:space="preserve" font-family="Open Sans" font-size="72" font-style="normal"
            font-weight="600" line-height="1"
            style="font-family:'Open Sans'; stroke: none; stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;">
            <tspan x="-56.3203125" y="16.79808">D 2</tspan>
        </text>
    </g>
    <g transform="matrix(1 0 0 1 782.8117497023 1347.3710093648)" style="" id="0E18e8jaS7VQn6E1JJUUY">
        <text xml:space="preserve" font-family="Open Sans" font-size="72" font-style="normal"
            font-weight="600" line-height="1"
            style="font-family:'Open Sans'; stroke: none; stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;">
            <tspan x="-56.3203125" y="16.79808">D 3</tspan>
        </text>
    </g>
    <g transform="matrix(1 0 0 1 783.7099810243 1559.6084051651)" style="" id="FOuOSONIdsMzlwb8j2kv2">
        <text xml:space="preserve" font-family="Open Sans" font-size="72" font-style="normal"
            font-weight="600" line-height="1"
            style="font-family:'Open Sans'; stroke: none; stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;">
            <tspan x="-56.3203125" y="16.79808">D 4</tspan>
        </text>
    </g>
    <g transform="matrix(1 0 0 1 801.8041423512 1833.5046014458)" style="" id="7xtkX77Y0ipj0TRDv5yx9">
        <text xml:space="preserve" font-family="Open Sans" font-size="72" font-style="normal"
            font-weight="600" line-height="1"
            style="font-family:'Open Sans'; stroke: none; stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;">
            <tspan x="-56.3203125" y="16.79808">D 5</tspan>
        </text>
    </g>
    <g transform="matrix(1 0 0 1 811.3736536452 2122.2947324421)" style="" id="MAn0C-qjkHs3WkGnRcbFy">
        <text xml:space="preserve" font-family="Open Sans" font-size="72" font-style="normal"
            font-weight="600" line-height="1"
            style="font-family:'Open Sans'; stroke: none; stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;">
            <tspan x="-56.3203125" y="16.79808">D 6</tspan>
        </text>
    </g>
    <g transform="matrix(1 0 0 1 803.3550078315 2305.4877678654)" style="" id="x-3okFdC9xQqd9OmDpOVN">
        <text xml:space="preserve" font-family="Open Sans" font-size="72" font-style="normal"
            font-weight="600" line-height="1"
            style="font-family:'Open Sans'; stroke: none; stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;">
            <tspan x="-56.3203125" y="16.79808">D 7</tspan>
        </text>
    </g>
    <g transform="matrix(1 0 0 1 791.5874111351 2406.1973143234)" style="" id="-eSCZ5SUlMUj5ghTEvNkG">
        <text xml:space="preserve" font-family="Open Sans" font-size="72" font-style="normal"
            font-weight="600" line-height="1"
            style="font-family:'Open Sans'; stroke: none; stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;">
            <tspan x="-56.3203125" y="16.79808">D 8</tspan>
        </text>
    </g>
    <g transform="matrix(1 0 0 1 796.4172608762 2509.7993582405)" style="" id="OaWpWT8NSC6Up3KD7ZY6p">
        <text xml:space="preserve" font-family="Open Sans" font-size="72" font-style="normal"
            font-weight="600" line-height="1"
            style="font-family:'Open Sans'; stroke: none; stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;">
            <tspan x="-56.3203125" y="16.79808">D 9</tspan>
        </text>
    </g>
    <g transform="matrix(1 0 0 1 814.3937866523 2719.7698114531)" style="" id="61ub2WvIhJwUZrotGxk7Q">
        <text xml:space="preserve" font-family="Open Sans" font-size="72" font-style="normal"
            font-weight="600" line-height="1"
            style="font-family:'Open Sans'; stroke: none; stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;">
            <tspan x="-76.904296875" y="16.79808">D 10</tspan>
        </text>
    </g>
    <g transform="matrix(1 0 0 1 789.8214395682 3015.5652276951)" style="" id="H4I2ErBonVKTeqFezhCH9">
        <text xml:space="preserve" font-family="Open Sans" font-size="72" font-style="normal"
            font-weight="600" line-height="1"
            style="font-family:'Open Sans'; stroke: none; stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;">
            <tspan x="-76.904296875" y="16.79808">D 11</tspan>
        </text>
    </g>
    <g transform="matrix(1 0 0 1 799.0419240685 3652.1757587126)" style="" id="-U3cg-vjbh0eFAOAJ1zkI">
        <text xml:space="preserve" font-family="Open Sans" font-size="72" font-style="normal"
            font-weight="600" line-height="1"
            style="font-family:'Open Sans'; stroke: none; stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;">
            <tspan x="-76.904296875" y="16.79808">D 12</tspan>
        </text>
    </g>
    <g transform="matrix(1 0 0 1 791.5874111351 4197.2700650675)" style="" id="_ee6caVfpB4oXPlO8jTxB">
        <text xml:space="preserve" font-family="Open Sans" font-size="72" font-style="normal"
            font-weight="600" line-height="1"
            style="font-family:'Open Sans'; stroke: none; stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1; white-space: pre;">
            <tspan x="-76.904296875" y="16.79808">D 13</tspan>
        </text>
    </g>
    <g transform="matrix(15.2092280296 0 0 1.0291310643 1376.3454441122 4293.5073696665)"
        id="kxdSUpVMr1YMfZYlUmkVL">
        <path
            style="stroke: rgb(0,0,0); stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(112,112,112); fill-rule: nonzero; opacity: 1;"
            transform=" translate(0, 0)"
            d="M -49.01961 -49.01961 L 49.01961 -49.01961 L 49.01961 49.01961 L -49.01961 49.01961 z"
            stroke-linecap="round" />
    </g>
    <g transform="matrix(0 -0.053093835 0.4924474921 0 1518.5038471097 4290.9822276216)" id="3umidMC1GeCFCNaI3StxB">
        <path
            style="stroke: rgb(255,255,255); stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(255,255,255); fill-rule: nonzero; opacity: 1;"
            transform=" translate(0, 0)"
            d="M -121.95122 -121.95122 L 121.95122 -121.95122 L 121.95122 121.95122 L -121.95122 121.95122 z"
            stroke-linecap="round" />
    </g>
    <g transform="matrix(0 -0.053093835 0.4924474921 0 1821.1303416694 4290.9822276216)" id="Qs2ExPSit3eaw1NoamYQK">
        <path
            style="stroke: rgb(255,255,255); stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(255,255,255); fill-rule: nonzero; opacity: 1;"
            transform=" translate(0, 0)"
            d="M -121.95122 -121.95122 L 121.95122 -121.95122 L 121.95122 121.95122 L -121.95122 121.95122 z"
            stroke-linecap="round" />
    </g>
    <g transform="matrix(0 -0.053093835 0.4924474921 0 832.7721310487 4290.9822276216)" id="1Ar9vINmW9HaCVAQVKX8t">
        <path
            style="stroke: rgb(255,255,255); stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(255,255,255); fill-rule: nonzero; opacity: 1;"
            transform=" translate(0, 0)"
            d="M -121.95122 -121.95122 L 121.95122 -121.95122 L 121.95122 121.95122 L -121.95122 121.95122 z"
            stroke-linecap="round" />
    </g>
    <g transform="matrix(0 -0.053093835 0.4924474921 0 1135.3986256085 4290.9822276216)" id="vq1OgZoJwaT-ztCSq-_VC">
        <path
            style="stroke: rgb(255,255,255); stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(255,255,255); fill-rule: nonzero; opacity: 1;"
            transform=" translate(0, 0)"
            d="M -121.95122 -121.95122 L 121.95122 -121.95122 L 121.95122 121.95122 L -121.95122 121.95122 z"
            stroke-linecap="round" />
    </g>
    <g transform="matrix(0.0083610438 0.0524401618 -0.4863846463 0.0765258936 1275.0628170004 433.5420004852)"
        id="MkX5E0RBRD2T0zO8t7xrO">
        <path
            style="stroke: rgb(255,255,255); stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(255,255,255); fill-rule: nonzero; opacity: 1;"
            transform=" translate(0, 0)"
            d="M -121.95122 -121.95122 L 121.95122 -121.95122 L 121.95122 121.95122 L -121.95122 121.95122 z"
            stroke-linecap="round" />
    </g>
    <g transform="matrix(0.0083610438 0.0524401618 -0.4863846463 0.0765258936 2335.5745369254 300.8136817526)"
        id="UiHfL9JkcVxA3oosKv6JY">
        <path
            style="stroke: rgb(255,255,255); stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(255,255,255); fill-rule: nonzero; opacity: 1;"
            transform=" translate(0, 0)"
            d="M -121.95122 -121.95122 L 121.95122 -121.95122 L 121.95122 121.95122 L -121.95122 121.95122 z"
            stroke-linecap="round" />
    </g>
    <g transform="matrix(0.0083610438 0.0524401618 -0.4863846463 0.0765258936 215.5490056916 589.1444608433)"
        id="O6so8GU3lNEk5EhkWSGwZ">
        <path
            style="stroke: rgb(255,255,255); stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(255,255,255); fill-rule: nonzero; opacity: 1;"
            transform=" translate(0, 0)"
            d="M -121.95122 -121.95122 L 121.95122 -121.95122 L 121.95122 121.95122 L -121.95122 121.95122 z"
            stroke-linecap="round" />
    </g>
    <g transform="matrix(0.1002060501 0 0 0.7106027476 1725.5902798882 627.1058020242)" id="wAZmFRV4bRi6V_DPNK6fp">
        <path
            style="stroke: rgb(255,240,77); stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(255,255,255); fill-rule: nonzero; opacity: 1;"
            transform=" translate(0, 0)" d="M -70 -70 L 70 -70 L 70 70 L -70 70 z" stroke-linecap="round" />
    </g>
    <g transform="matrix(0.1002060501 0 0 0.7106027476 1725.5902798882 996.6748907355)" id="EAIPMk2P9xZbEO7oTaGHz">
        <path
            style="stroke: rgb(255,240,77); stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(255,255,255); fill-rule: nonzero; opacity: 1;"
            transform=" translate(0, 0)" d="M -70 -70 L 70 -70 L 70 70 L -70 70 z" stroke-linecap="round" />
    </g>
    <g transform="matrix(0.1002060501 0 0 0.7106027476 1725.5902798882 1366.2439794468)" id="bLQ3H4PxWv6X7Zse1lidZ">
        <path
            style="stroke: rgb(255,240,77); stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(255,255,255); fill-rule: nonzero; opacity: 1;"
            transform=" translate(0, 0)" d="M -70 -70 L 70 -70 L 70 70 L -70 70 z" stroke-linecap="round" />
    </g>
    <g transform="matrix(0.1002060501 0 0 0.7106027476 1725.5902798882 1735.8130681581)" id="RCOumdp853E62h5AawPUT">
        <path
            style="stroke: rgb(255,240,77); stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(255,255,255); fill-rule: nonzero; opacity: 1;"
            transform=" translate(0, 0)" d="M -70 -70 L 70 -70 L 70 70 L -70 70 z" stroke-linecap="round" />
    </g>
    <g transform="matrix(0.1002060501 0 0 0.7106027476 1725.5902798882 2105.3821568693)" id="a-Q_JN0AE8b7nhtk2yesa">
        <path
            style="stroke: rgb(255,240,77); stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(255,255,255); fill-rule: nonzero; opacity: 1;"
            transform=" translate(0, 0)" d="M -70 -70 L 70 -70 L 70 70 L -70 70 z" stroke-linecap="round" />
    </g>
    <g transform="matrix(0.1002060501 0 0 0.7106027476 1725.5902798882 2474.9512455806)" id="npgTV4m2XzP6Rb7WCmiMc">
        <path
            style="stroke: rgb(255,240,77); stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(255,255,255); fill-rule: nonzero; opacity: 1;"
            transform=" translate(0, 0)" d="M -70 -70 L 70 -70 L 70 70 L -70 70 z" stroke-linecap="round" />
    </g>
    <g transform="matrix(0.1002060501 0 0 0.7106027476 1725.5902798882 2844.5203342919)" id="LZ1MorL0eZW9wCMyXQGxN">
        <path
            style="stroke: rgb(255,240,77); stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(255,255,255); fill-rule: nonzero; opacity: 1;"
            transform=" translate(0, 0)" d="M -70 -70 L 70 -70 L 70 70 L -70 70 z" stroke-linecap="round" />
    </g>
    <g transform="matrix(0.1002060501 0 0 0.7106027476 1725.5902798882 3214.0894230032)" id="mv943kTjlUvURaZhshnY9">
        <path
            style="stroke: rgb(255,240,77); stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(255,255,255); fill-rule: nonzero; opacity: 1;"
            transform=" translate(0, 0)" d="M -70 -70 L 70 -70 L 70 70 L -70 70 z" stroke-linecap="round" />
    </g>
    <g transform="matrix(0.1002060501 0 0 0.7106027476 1725.5902798882 3583.6585117144)" id="ukzlEmATDEj5kXhMbkxvp">
        <path
            style="stroke: rgb(255,240,77); stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(255,255,255); fill-rule: nonzero; opacity: 1;"
            transform=" translate(0, 0)" d="M -70 -70 L 70 -70 L 70 70 L -70 70 z" stroke-linecap="round" />
    </g>
    <g transform="matrix(0.1002060501 0 0 0.7106027476 1730.8208295116 3908.3000918292)" id="O1-MJ-tZwwuwY944km5uY">
        <path
            style="stroke: rgb(255,240,77); stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(255,255,255); fill-rule: nonzero; opacity: 1;"
            transform=" translate(0, 0)" d="M -70 -70 L 70 -70 L 70 70 L -70 70 z" stroke-linecap="round" />
    </g>
    <g transform="matrix(0.1002060501 0 0 0.7106027476 993.579543746 941.2644123765)" id="j5ftxXzKqS6v6nR2KhgV0">
        <path
            style="stroke: rgb(255,240,77); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(255,255,255); fill-rule: nonzero; opacity: 1;"
            transform=" translate(0, 0)" d="M -70 -70 L 70 -70 L 70 70 L -70 70 z" stroke-linecap="round" />
    </g>
    <g transform="matrix(0.1002060501 0 0 0.7106027476 993.579543746 1310.8335010878)" id="Kb3_dFXXdL0oqMJL4OXUu">
        <path
            style="stroke: rgb(255,240,77); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(255,255,255); fill-rule: nonzero; opacity: 1;"
            transform=" translate(0, 0)" d="M -70 -70 L 70 -70 L 70 70 L -70 70 z" stroke-linecap="round" />
    </g>
    <g transform="matrix(0.1002060501 0 0 0.7106027476 993.579543746 1680.402589799)" id="OltLdG8cuYKVRqDuvtkvs">
        <path
            style="stroke: rgb(255,240,77); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(255,255,255); fill-rule: nonzero; opacity: 1;"
            transform=" translate(0, 0)" d="M -70 -70 L 70 -70 L 70 70 L -70 70 z" stroke-linecap="round" />
    </g>
    <g transform="matrix(0.1002060501 0 0 0.7106027476 993.579543746 2049.9716785103)" id="6u3NdVUpDVA91cd7e2IoU">
        <path
            style="stroke: rgb(255,240,77); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(255,255,255); fill-rule: nonzero; opacity: 1;"
            transform=" translate(0, 0)" d="M -70 -70 L 70 -70 L 70 70 L -70 70 z" stroke-linecap="round" />
    </g>
    <g transform="matrix(0.1002060501 0 0 0.7106027476 993.579543746 2419.5407672216)" id="EQHiC1L0AxnG5GJg1daO0">
        <path
            style="stroke: rgb(255,240,77); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(255,255,255); fill-rule: nonzero; opacity: 1;"
            transform=" translate(0, 0)" d="M -70 -70 L 70 -70 L 70 70 L -70 70 z" stroke-linecap="round" />
    </g>
    <g transform="matrix(0.1002060501 0 0 0.7106027476 993.579543746 2789.1098559329)" id="OMBdnl0xbQ8G0qGvKRgLv">
        <path
            style="stroke: rgb(255,240,77); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(255,255,255); fill-rule: nonzero; opacity: 1;"
            transform=" translate(0, 0)" d="M -70 -70 L 70 -70 L 70 70 L -70 70 z" stroke-linecap="round" />
    </g>
    <g transform="matrix(0.1002060501 0 0 0.7106027476 993.579543746 3158.6789446441)" id="hk4Ck5Jnmty1_Ttjv7akD">
        <path
            style="stroke: rgb(255,240,77); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(255,255,255); fill-rule: nonzero; opacity: 1;"
            transform=" translate(0, 0)" d="M -70 -70 L 70 -70 L 70 70 L -70 70 z" stroke-linecap="round" />
    </g>
    <g transform="matrix(0.1002060501 0 0 0.7106027476 993.579543746 3528.2480333554)" id="uxHom8b4aHJZG3edUgR7b">
        <path
            style="stroke: rgb(255,240,77); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(255,255,255); fill-rule: nonzero; opacity: 1;"
            transform=" translate(0, 0)" d="M -70 -70 L 70 -70 L 70 70 L -70 70 z" stroke-linecap="round" />
    </g>
    <g transform="matrix(0.1002060501 0 0 0.7106027476 993.579543746 3897.8171220667)" id="Q4Vv_rxmRn8b7GJLjtJsD">
        <path
            style="stroke: rgb(255,240,77); stroke-width: 5; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(255,255,255); fill-rule: nonzero; opacity: 1;"
            transform=" translate(0, 0)" d="M -70 -70 L 70 -70 L 70 70 L -70 70 z" stroke-linecap="round" />
    </g>
    <g transform="matrix(0.1002060501 0 0 0.7106027476 991.8631153032 676.8479943544)" id="ljvOD54B3loItL10o4Lqs">
        <path
            style="stroke: rgb(255,240,77); stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(255,255,255); fill-rule: nonzero; opacity: 1;"
            transform=" translate(0, 0)" d="M -70 -70 L 70 -70 L 70 70 L -70 70 z" stroke-linecap="round" />
    </g>
    <g transform="matrix(0.9903946213 -0.1382696425 0.1394092893 0.9902355145 772.4075477987 517.343898684)"
        style="" id="UxKS9gVaSgxuuC4HSlV1A">
        <text xml:space="preserve" font-family="Open Sans" font-size="107" font-style="normal"
            font-weight="600" line-height="1"
            style="font-family:'Open Sans'; stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(255,255,255); fill-rule: nonzero; opacity: 1; white-space: pre;">
            <tspan x="-331.1357421875" y="8.56798">Jalan Pelita 1</tspan>
        </text>
    </g>
</svg>
