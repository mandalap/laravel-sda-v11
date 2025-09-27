<svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 537.84 1516.07">
    <defs>
        <style>
            .cls-1 {
                fill: #969696;
            }

            .cls-2 {
                font-size: 15.85px;
            }

            .cls-15,
            .cls-17,
            .cls-18,
            .cls-2,
            .cls-5,
            .cls-8 {
                fill: #231f20;
            }

            .cls-17,
            .cls-2 {
                font-family: Poppins-ExtraBold, Poppins;
                font-weight: 800;
            }

            .cls-14,
            .cls-3 {
                fill: #39b54a;
            }

            .cls-4 {
                fill: #fbb040;
            }

            .cls-11,
            .cls-12,
            .cls-13,
            .cls-14,
            .cls-16,
            .cls-4,
            .cls-7 {
                stroke: #231f20;
                stroke-miterlimit: 10;
            }

            .cls-15,
            .cls-5 {
                font-size: 14px;
            }

            .cls-5 {
                font-family: Poppins-Medium, Poppins;
                font-weight: 500;
            }

            .cls-6 {
                fill: #fff;
            }

            .cls-7 {
                fill: #8dc63f;
            }

            .cls-8 {
                font-size: 22.24px;
            }

            .cls-18,
            .cls-8 {
                font-family: Montserrat-Bold, Montserrat;
                font-weight: 700;
            }

            .cls-9 {
                letter-spacing: -0.01em;
            }

            .cls-10 {
                letter-spacing: -0.01em;
            }

            .cls-11 {
                fill: #d7df23;
            }

            .cls-12 {
                fill: #c49a6c;
            }

            .cls-13 {
                fill: #27aae1;
            }

            .cls-15 {
                font-family: Poppins-SemiBold, Poppins;
                font-weight: 600;
            }

            .cls-16 {
                fill: #fff200;
            }

            .cls-17 {
                font-size: 23.76px;
            }

            .cls-18 {
                font-size: 12px;
            }

            .cls-19 {
                letter-spacing: 0em;
            }

            .cls-20 {
                letter-spacing: -0.02em;
            }

            .cls-21 {
                letter-spacing: -0.02em;
            }

            .cls-22 {
                letter-spacing: 0em;
            }

            .bold-text {
                font-family: Poppins, sans-serif;
                font-weight: 600;
            }
        </style>
    </defs>
    <rect class="cls-1" x="-164.15" y="775.3" width="1136.44" height="25.23"
        transform="translate(-417.92 1152.88) rotate(-90)" />
    <rect class="cls-1" width="537.84" height="34.68" />
    <text class="cls-2" transform="translate(63.01 23.17)">Jalan Parit Buluh</text>
    <text class="cls-2" transform="translate(338.11 23.17)">Jalan Parit Buluh</text>

    <rect class="cls-3" x="332.86" y="32.79" width="144.65" height="147.76" />
    <text class="cls-17" transform="translate(360.36 128.73) rotate(-19.5)">MASJID</text>


    {{-- CLS-4 BLOK A --}}
    @forelse ($siteplan->where('code_product', 'munzalanblokA1') as $hasil)
        @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
            <rect style="fill:#ffc107; stroke:#000000;stroke-miterlimit:10;" x="382.99" y="206.41" width="93.35"
                height="39.79" />
        @elseif ($hasil->status == 'Terjual')
            <rect style="fill:#f50505; stroke:#000000;stroke-miterlimit:10;" x="382.99" y="206.41" width="93.35"
                height="39.79" />
        @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-munzalanblokA1">
                <rect style="fill:#ffff; stroke:#000000;stroke-miterlimit:10;" x="382.99" y="206.41" width="93.35"
                    height="39.79" />
            </a>
        @endif
    @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="munzalanblokA1">
            <rect style="fill:#ffff; stroke:#000000;stroke-miterlimit:10;" x="382.99" y="206.41" width="93.35"
                height="39.79" />
        </a>
    @endforelse

    @forelse ($siteplan->where('code_product', 'munzalanblokA2') as $hasil)
        @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
            <rect style="fill:#ffc107; stroke:#000000;stroke-miterlimit:10;" x="382.99" y="246.14" width="93.35"
                height="39.79" />
        @elseif ($hasil->status == 'Terjual')
            <rect style="fill:#f50505; stroke:#000000;stroke-miterlimit:10;" x="382.99" y="246.14" width="93.35"
                height="39.79" />
        @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-munzalanblokA2">
                <rect style="fill:#ffff; stroke:#000000;stroke-miterlimit:10;" x="382.99" y="246.14" width="93.35"
                    height="39.79" />
            </a>
        @endif
    @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="munzalanblokA2">
            <rect style="fill:#ffff; stroke:#000000;stroke-miterlimit:10;" x="382.99" y="246.14" width="93.35"
                height="39.79" />
        </a>
    @endforelse

    @forelse ($siteplan->where('code_product', 'munzalanblokA3') as $hasil)
        @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
            <rect style="fill:#ffc107; stroke:#000000;stroke-miterlimit:10;" x="382.99" y="285.23" width="93.35"
                height="39.79" />
        @elseif ($hasil->status == 'Terjual')
            <rect style="fill:#f50505; stroke:#000000;stroke-miterlimit:10;" x="382.99" y="285.23" width="93.35"
                height="39.79" />
        @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-munzalanblokA3">
                <rect style="fill:#ffff; stroke:#000000;stroke-miterlimit:10;" x="382.99" y="285.23" width="93.35"
                    height="39.79" />
            </a>
        @endif
    @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="munzalanblokA3">
            <rect style="fill:#ffff; stroke:#000000;stroke-miterlimit:10;" x="382.99" y="285.23" width="93.35"
                height="39.79" />
        </a>
    @endforelse

    @forelse ($siteplan->where('code_product', 'munzalanblokA4') as $hasil)
        @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
            <rect style="fill:#ffc107; stroke:#000000;stroke-miterlimit:10;" x="382.99" y="325.02" width="93.35"
                height="39.79" />
        @elseif ($hasil->status == 'Terjual')
            <rect style="fill:#f50505; stroke:#000000;stroke-miterlimit:10;" x="382.99" y="325.02" width="93.35"
                height="39.79" />
        @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-munzalanblokA4">
                <rect style="fill:#ffff; stroke:#000000;stroke-miterlimit:10;" x="382.99" y="325.02" width="93.35"
                    height="39.79" />
            </a>
        @endif
    @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="munzalanblokA4">
            <rect style="fill:#ffff; stroke:#000000;stroke-miterlimit:10;" x="382.99" y="325.02" width="93.35"
                height="39.79" />
        </a>
    @endforelse

    @forelse ($siteplan->where('code_product', 'munzalanblokA5') as $hasil)
        @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
            <rect style="fill:#ffc107; stroke:#000000;stroke-miterlimit:10;" x="382.99" y="364.82" width="93.35"
                height="39.79" />
        @elseif ($hasil->status == 'Terjual')
            <rect style="fill:#f50505; stroke:#000000;stroke-miterlimit:10;" x="382.99" y="364.82" width="93.35"
                height="39.79" />
        @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-munzalanblokA5">
                <rect style="fill:#ffff; stroke:#000000;stroke-miterlimit:10;" x="382.99" y="364.82" width="93.35"
                    height="39.79" />
            </a>
        @endif
    @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="munzalanblokA5">
            <rect style="fill:#ffff; stroke:#000000;stroke-miterlimit:10;" x="382.99" y="364.82" width="93.35"
                height="39.79" />
        </a>
    @endforelse

    @forelse ($siteplan->where('code_product', 'munzalanblokA6') as $hasil)
        @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
            <rect style="fill:#ffc107; stroke:#000000;stroke-miterlimit:10;" x="382.99" y="403.9" width="93.35"
                height="39.79" />
        @elseif ($hasil->status == 'Terjual')
            <rect style="fill:#f50505; stroke:#000000;stroke-miterlimit:10;" x="382.99" y="403.9" width="93.35"
                height="39.79" />
        @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-munzalanblokA6">
                <rect style="fill:#ffff; stroke:#000000;stroke-miterlimit:10;" x="382.99" y="403.9" width="93.35"
                    height="39.79" />
            </a>
        @endif
    @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="munzalanblokA6">
            <rect style="fill:#ffff; stroke:#000000;stroke-miterlimit:10;" x="382.99" y="403.9" width="93.35"
                height="39.79" />
        </a>
    @endforelse

    @forelse ($siteplan->where('code_product', 'munzalanblokA7') as $hasil)
        @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
            <rect style="fill:#ffc107; stroke:#000000;stroke-miterlimit:10;" x="382.99" y="443.64" width="93.35"
                height="39.79" />
        @elseif ($hasil->status == 'Terjual')
            <rect style="fill:#f50505; stroke:#000000;stroke-miterlimit:10;" x="382.99" y="443.64" width="93.35"
                height="39.79" />
        @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-munzalanblokA7">
                <rect style="fill:#ffff; stroke:#000000;stroke-miterlimit:10;" x="382.99" y="443.64" width="93.35"
                    height="39.79" />
            </a>
        @endif
    @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="munzalanblokA7">
            <rect style="fill:#ffff; stroke:#000000;stroke-miterlimit:10;" x="382.99" y="443.64" width="93.35"
                height="39.79" />
        </a>
    @endforelse

    @forelse ($siteplan->where('code_product', 'munzalanblokA8') as $hasil)
        @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
            <rect style="fill:#ffc107; stroke:#000000;stroke-miterlimit:10;" x="382.99" y="482.72" width="93.35"
                height="39.79" />
        @elseif ($hasil->status == 'Terjual')
            <rect style="fill:#f50505; stroke:#000000;stroke-miterlimit:10;" x="382.99" y="482.72" width="93.35"
                height="39.79" />
        @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-munzalanblokA8">
                <rect style="fill:#ffff; stroke:#000000;stroke-miterlimit:10;" x="382.99" y="482.72" width="93.35"
                    height="39.79" />
            </a>
        @endif
    @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="munzalanblokA8">
            <rect style="fill:#ffff; stroke:#000000;stroke-miterlimit:10;" x="382.99" y="482.72" width="93.35"
                height="39.79" />
        </a>
    @endforelse

    @forelse ($siteplan->where('code_product', 'munzalanblokA9') as $hasil)
        @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
            <rect style="fill:#ffc107; stroke:#000000;stroke-miterlimit:10;" x="382.99" y="522.52" width="93.35"
                height="39.79" />
        @elseif ($hasil->status == 'Terjual')
            <rect style="fill:#f50505; stroke:#000000;stroke-miterlimit:10;" x="382.99" y="522.52" width="93.35"
                height="39.79" />
        @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-munzalanblokA9">
                <rect style="fill:#ffff; stroke:#000000;stroke-miterlimit:10;" x="382.99" y="522.52" width="93.35"
                    height="39.79" />
            </a>
        @endif
    @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="munzalanblokA9">
            <rect style="fill:#ffff; stroke:#000000;stroke-miterlimit:10;" x="382.99" y="522.52" width="93.35"
                height="39.79" />
        </a>
    @endforelse

    @forelse ($siteplan->where('code_product', 'munzalanblokA10') as $hasil)
        @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
            <rect style="fill:#ffc107; stroke:#000000;stroke-miterlimit:10;" x="382.99" y="562.31" width="93.35"
                height="39.79" />
        @elseif ($hasil->status == 'Terjual')
            <rect style="fill:#f50505; stroke:#000000;stroke-miterlimit:10;" x="382.99" y="562.31" width="93.35"
                height="39.79" />
        @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-munzalanblokA10">
                <rect style="fill:#ffff; stroke:#000000;stroke-miterlimit:10;" x="382.99" y="562.31" width="93.35"
                    height="39.79" />
            </a>
        @endif
    @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="munzalanblokA10">
            <rect style="fill:#ffff; stroke:#000000;stroke-miterlimit:10;" x="382.99" y="562.31" width="93.35"
                height="39.79" />
        </a>
    @endforelse

    @forelse ($siteplan->where('code_product', 'munzalanblokA11') as $hasil)
        @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
            <rect style="fill:#ffc107; stroke:#000000;stroke-miterlimit:10;" x="382.99" y="596.89" width="93.35"
                height="39.79" />
        @elseif ($hasil->status == 'Terjual')
            <rect style="fill:#f50505; stroke:#000000;stroke-miterlimit:10;" x="382.99" y="596.89" width="93.35"
                height="39.79" />
        @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-munzalanblokA11">
                <rect style="fill:#ffff; stroke:#000000;stroke-miterlimit:10;" x="382.99" y="596.89" width="93.35"
                    height="39.79" />
            </a>
        @endif
    @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="munzalanblokA11">
            <rect style="fill:#ffff; stroke:#000000;stroke-miterlimit:10;" x="382.99" y="596.89" width="93.35"
                height="39.79" />
        </a>
    @endforelse

    @forelse ($siteplan->where('code_product', 'munzalanblokA12') as $hasil)
        @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
            <rect style="fill:#ffc107; stroke:#000000;stroke-miterlimit:10;" x="382.99" y="636.62" width="93.35"
                height="39.79" />
        @elseif ($hasil->status == 'Terjual')
            <rect style="fill:#f50505; stroke:#000000;stroke-miterlimit:10;" x="382.99" y="636.62" width="93.35"
                height="39.79" />
        @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-munzalanblokA12">
                <rect style="fill:#ffff; stroke:#000000;stroke-miterlimit:10;" x="382.99" y="636.62" width="93.35"
                    height="39.79" />
            </a>
        @endif
    @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="munzalanblokA12">
            <rect style="fill:#ffff; stroke:#000000;stroke-miterlimit:10;" x="382.99" y="636.62" width="93.35"
                height="39.79" />
        </a>
    @endforelse

    @forelse ($siteplan->where('code_product', 'munzalanblokA13') as $hasil)
        @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
            <rect style="fill:#ffc107; stroke:#000000;stroke-miterlimit:10;" x="382.99" y="675.7" width="93.35"
                height="39.79" />
        @elseif ($hasil->status == 'Terjual')
            <rect style="fill:#f50505; stroke:#000000;stroke-miterlimit:10;" x="382.99" y="675.7" width="93.35"
                height="39.79" />
        @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-munzalanblokA13">
                <rect style="fill:#ffff; stroke:#000000;stroke-miterlimit:10;" x="382.99" y="675.7" width="93.35"
                    height="39.79" />
            </a>
        @endif
    @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="munzalanblokA13">
            <rect style="fill:#ffff; stroke:#000000;stroke-miterlimit:10;" x="382.99" y="675.7" width="93.35"
                height="39.79" />
        </a>
    @endforelse

    @forelse ($siteplan->where('code_product', 'munzalanblokA14') as $hasil)
        @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
            <rect style="fill:#ffc107; stroke:#000000;stroke-miterlimit:10;" x="382.99" y="715.5" width="93.35"
                height="39.79" />
        @elseif ($hasil->status == 'Terjual')
            <rect style="fill:#f50505; stroke:#000000;stroke-miterlimit:10;" x="382.99" y="715.5" width="93.35"
                height="39.79" />
        @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-munzalanblokA14">
                <rect style="fill:#ffff; stroke:#000000;stroke-miterlimit:10;" x="382.99" y="715.5" width="93.35"
                    height="39.79" />
            </a>
        @endif
    @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="munzalanblokA14">
            <rect style="fill:#ffff; stroke:#000000;stroke-miterlimit:10;" x="382.99" y="715.5" width="93.35"
                height="39.79" />
        </a>
    @endforelse

    @forelse ($siteplan->where('code_product', 'munzalanblokA15') as $hasil)
        @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
            <rect style="fill:#ffc107; stroke:#000000;stroke-miterlimit:10;" x="382.99" y="755.29" width="93.35"
                height="39.79" />
        @elseif ($hasil->status == 'Terjual')
            <rect style="fill:#f50505; stroke:#000000;stroke-miterlimit:10;" x="382.99" y="755.29" width="93.35"
                height="39.79" />
        @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-munzalanblokA15">
                <rect style="fill:#ffff; stroke:#000000;stroke-miterlimit:10;" x="382.99" y="755.29" width="93.35"
                    height="39.79" />
            </a>
        @endif
    @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="munzalanblokA15">
            <rect style="fill:#ffff; stroke:#000000;stroke-miterlimit:10;" x="382.99" y="755.29" width="93.35"
                height="39.79" />
        </a>
    @endforelse

    <text class="cls-5 bold-text" transform="translate(422.33 230.73)">A1</text>
    <text class="cls-5 bold-text" transform="translate(420.74 269.91)">A2</text>
    <text class="cls-5 bold-text" transform="translate(420.62 308.75)">A3</text>
    <text class="cls-5 bold-text" transform="translate(420.25 350.33)">A4</text>
    <text class="cls-5 bold-text" transform="translate(420.31 389.14)">A5</text>
    <text class="cls-5 bold-text" transform="translate(420.29 428.23)">A6</text>
    <text class="cls-5 bold-text" transform="translate(420.86 467.4)">A7</text>
    <text class="cls-5 bold-text" transform="translate(420.32 506.24)">A8</text>
    <text class="cls-5 bold-text" transform="translate(420.34 547.82)">A9</text>
    <text class="cls-5 bold-text" transform="translate(417.85 586.63)">A10</text>
    <text class="cls-5 bold-text" transform="translate(419.88 621.21)">A11</text>
    <text class="cls-5 bold-text" transform="translate(418.29 660.38)">A12</text>
    <text class="cls-5 bold-text" transform="translate(418.17 699.22)">A13</text>
    <text class="cls-5 bold-text" transform="translate(417.8 740.81)">A14</text>
    <text class="cls-5 bold-text" transform="translate(417.86 779.61)">A15</text>
    {{-- CLS-4 BLOK A end --}}

    <rect class="cls-6" x="237.06" y="16.66" width="22.55" height="2.04" />
    <rect class="cls-6" x="273.18" y="16.66" width="22.55" height="2.04" />
    <rect class="cls-6" x="309.31" y="16.66" width="22.55" height="2.04" />
    <rect class="cls-6" x="15.35" y="17.68" width="22.55" height="2.04" />
    <rect class="cls-6" x="492.93" y="17.68" width="22.55" height="2.04" />
    <rect class="cls-3" x="382.62" y="180.55" width="94.9" height="24.92" />
    <rect class="cls-1" x="280.75" y="133.18" width="147.8" height="25.23"
        transform="translate(174.78 461.34) rotate(-90)" />
    <rect class="cls-1" x="144.03" y="180.76" width="216.32" height="25.23" />
    <rect class="cls-7" x="263.96" y="206.81" width="93.72" height="589.62" />
    <rect class="cls-7" x="169.87" y="206.81" width="93.72" height="589.62" />
    <rect class="cls-1" x="-466.74" y="885.11" width="1314.91" height="25.23"
        transform="translate(-741.08 1049.34) rotate(-90)" />
    <rect class="cls-1" x="-251.06" y="862.21" width="1310.26" height="25.23"
        transform="translate(-504.82 1239.79) rotate(-90)" />
    <text class="cls-8" transform="translate(304.32 376.07) rotate(90)">
        <tspan class="cls-9">PERUMAHAN BLOK B</tspan>
    </text>
    <text class="cls-8" transform="translate(210.24 376.07) rotate(90)">
        <tspan class="cls-9">PERUMAHAN BLOK C</tspan>
    </text>
    <rect class="cls-1" x="165.02" y="796.43" width="311.32" height="25.23" />

    {{-- cls-11 Blok D --}}
    @forelse ($siteplan->where('code_product', 'munzalanblokD1') as $hasil)
        @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
            <rect style="fill:#ffc107; stroke:#000000;stroke-miterlimit:10;" x="382.99" y="823" width="93.35"
                height="39.79" />
        @elseif ($hasil->status == 'Terjual')
            <rect style="fill:#f50505; stroke:#000000;stroke-miterlimit:10;" x="382.99" y="823" width="93.35"
                height="39.79" />
        @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-munzalanblokD1">
                <rect style="fill:#ffff; stroke:#000000;stroke-miterlimit:10;" x="382.99" y="823" width="93.35"
                    height="39.79" />
            </a>
        @endif
    @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="munzalanblokD1">
            <rect style="fill:#ffff; stroke:#000000;stroke-miterlimit:10;" x="382.99" y="823" width="93.35"
                height="39.79" />
        </a>
    @endforelse


    @forelse ($siteplan->where('code_product', 'munzalanblokD2') as $hasil)
        @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
            <rect style="fill:#ffc107; stroke:#000000;stroke-miterlimit:10;" x="382.99" y="862.73" width="93.35"
                height="39.79" />
        @elseif ($hasil->status == 'Terjual')
            <rect style="fill:#f50505; stroke:#000000;stroke-miterlimit:10;" x="382.99" y="862.73" width="93.35"
                height="39.79" />
        @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-munzalanblokD2">
                <rect style="fill:#ffff; stroke:#000000;stroke-miterlimit:10;" x="382.99" y="862.73" width="93.35"
                    height="39.79" />
            </a>
        @endif
    @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="munzalanblokD2">
            <rect style="fill:#ffff; stroke:#000000;stroke-miterlimit:10;" x="382.99" y="862.73" width="93.35"
                height="39.79" />
        </a>
    @endforelse

    @forelse ($siteplan->where('code_product', 'munzalanblokD3') as $hasil)
        @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
            <rect style="fill:#ffc107; stroke:#000000;stroke-miterlimit:10;" x="382.99" y="901.82" width="93.35"
                height="39.79" />
        @elseif ($hasil->status == 'Terjual')
            <rect style="fill:#f50505; stroke:#000000;stroke-miterlimit:10;" x="382.99" y="901.82" width="93.35"
                height="39.79" />
        @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-munzalanblokD3">
                <rect style="fill:#ffff; stroke:#000000;stroke-miterlimit:10;" x="382.99" y="901.82" width="93.35"
                    height="39.79" />
            </a>
        @endif
    @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="munzalanblokD3">
            <rect style="fill:#ffff; stroke:#000000;stroke-miterlimit:10;" x="382.99" y="901.82" width="93.35"
                height="39.79" />
        </a>
    @endforelse

    @forelse ($siteplan->where('code_product', 'munzalanblokD4') as $hasil)
        @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
            <rect style="fill:#ffc107; stroke:#000000;stroke-miterlimit:10;" x="382.99" y="941.61" width="93.35"
                height="39.79" />
        @elseif ($hasil->status == 'Terjual')
            <rect style="fill:#f50505; stroke:#000000;stroke-miterlimit:10;" x="382.99" y="941.61" width="93.35"
                height="39.79" />
        @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-munzalanblokD4">
                <rect style="fill:#ffff; stroke:#000000;stroke-miterlimit:10;" x="382.99" y="941.61" width="93.35"
                    height="39.79" />
            </a>
        @endif
    @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="munzalanblokD4">
            <rect style="fill:#ffff; stroke:#000000;stroke-miterlimit:10;" x="382.99" y="941.61" width="93.35"
                height="39.79" />
        </a>
    @endforelse

    @forelse ($siteplan->where('code_product', 'munzalanblokD5') as $hasil)
        @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
            <rect style="fill:#ffc107; stroke:#000000;stroke-miterlimit:10;" x="382.99" y="981.41" width="93.35"
                height="39.79" />
        @elseif ($hasil->status == 'Terjual')
            <rect style="fill:#f50505; stroke:#000000;stroke-miterlimit:10;" x="382.99" y="981.41" width="93.35"
                height="39.79" />
        @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-munzalanblokD5">
                <rect style="fill:#ffff; stroke:#000000;stroke-miterlimit:10;" x="382.99" y="981.41" width="93.35"
                    height="39.79" />
            </a>
        @endif
    @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="munzalanblokD5">
            <rect style="fill:#ffff; stroke:#000000;stroke-miterlimit:10;" x="382.99" y="981.41" width="93.35"
                height="39.79" />
        </a>
    @endforelse

    @forelse ($siteplan->where('code_product', 'munzalanblokD6') as $hasil)
        @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
            <rect style="fill:#ffc107; stroke:#000000;stroke-miterlimit:10;" x="382.99" y="1020.49" width="93.35"
                height="39.79" />
        @elseif ($hasil->status == 'Terjual')
            <rect style="fill:#f50505; stroke:#000000;stroke-miterlimit:10;" x="382.99" y="1020.49" width="93.35"
                height="39.79" />
        @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-munzalanblokD6">
                <rect style="fill:#ffff; stroke:#000000;stroke-miterlimit:10;" x="382.99" y="1020.49" width="93.35"
                    height="39.79" />
            </a>
        @endif
    @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="munzalanblokD6">
            <rect style="fill:#ffff; stroke:#000000;stroke-miterlimit:10;" x="382.99" y="1020.49" width="93.35"
                height="39.79" />
        </a>
    @endforelse

    @forelse ($siteplan->where('code_product', 'munzalanblokD7') as $hasil)
        @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
            <rect style="fill:#ffc107; stroke:#000000;stroke-miterlimit:10;" x="382.99" y="1060.22" width="93.35"
                height="39.79" />
        @elseif ($hasil->status == 'Terjual')
            <rect style="fill:#f50505; stroke:#000000;stroke-miterlimit:10;" x="382.99" y="1060.22" width="93.35"
                height="39.79" />
        @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-munzalanblokD7">
                <rect style="fill:#ffff; stroke:#000000;stroke-miterlimit:10;" x="382.99" y="1060.22" width="93.35"
                    height="39.79" />
            </a>
        @endif
    @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="munzalanblokD7">
            <rect style="fill:#ffff; stroke:#000000;stroke-miterlimit:10;" x="382.99" y="1060.22" width="93.35"
                height="39.79" />
        </a>
    @endforelse

    @forelse ($siteplan->where('code_product', 'munzalanblokD8') as $hasil)
        @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
            <rect style="fill:#ffc107; stroke:#000000;stroke-miterlimit:10;" x="382.99" y="1099.31" width="93.35"
                height="39.79" />
        @elseif ($hasil->status == 'Terjual')
            <rect style="fill:#f50505; stroke:#000000;stroke-miterlimit:10;" x="382.99" y="1099.31" width="93.35"
                height="39.79" />
        @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-munzalanblokD8">
                <rect style="fill:#ffff; stroke:#000000;stroke-miterlimit:10;" x="382.99" y="1099.31" width="93.35"
                    height="39.79" />
            </a>
        @endif
    @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="munzalanblokD8">
            <rect style="fill:#ffff; stroke:#000000;stroke-miterlimit:10;" x="382.99" y="1099.31" width="93.35"
                height="39.79" />
        </a>
    @endforelse

    @forelse ($siteplan->where('code_product', 'munzalanblokD9') as $hasil)
        @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
            <rect style="fill:#ffc107; stroke:#000000;stroke-miterlimit:10;" x="382.99" y="1139.1" width="93.35"
                height="39.79" />
        @elseif ($hasil->status == 'Terjual')
            <rect style="fill:#f50505; stroke:#000000;stroke-miterlimit:10;" x="382.99" y="1139.1" width="93.35"
                height="39.79" />
        @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-munzalanblokD9">
                <rect style="fill:#ffff; stroke:#000000;stroke-miterlimit:10;" x="382.99" y="1139.1" width="93.35"
                    height="39.79" />
            </a>
        @endif
    @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="munzalanblokD9">
            <rect style="fill:#ffff; stroke:#000000;stroke-miterlimit:10;" x="382.99" y="1139.1" width="93.35"
                height="39.79" />
        </a>
    @endforelse

    @forelse ($siteplan->where('code_product', 'munzalanblokD10') as $hasil)
        @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
            <rect style="fill:#ffc107; stroke:#000000;stroke-miterlimit:10;" x="382.99" y="1178.9" width="93.35"
                height="39.79" />
        @elseif ($hasil->status == 'Terjual')
            <rect style="fill:#f50505; stroke:#000000;stroke-miterlimit:10;" x="382.99" y="1178.9" width="93.35"
                height="39.79" />
        @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-munzalanblokD10">
                <rect style="fill:#ffff; stroke:#000000;stroke-miterlimit:10;" x="382.99" y="1178.9" width="93.35"
                    height="39.79" />
            </a>
        @endif
    @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="munzalanblokD10">
            <rect style="fill:#ffff; stroke:#000000;stroke-miterlimit:10;" x="382.99" y="1178.9" width="93.35"
                height="39.79" />
        </a>
    @endforelse

    @forelse ($siteplan->where('code_product', 'munzalanblokD11') as $hasil)
        @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
            <rect style="fill:#ffc107; stroke:#000000;stroke-miterlimit:10;" x="382.99" y="1213.47" width="93.35"
                height="39.79" />
        @elseif ($hasil->status == 'Terjual')
            <rect style="fill:#f50505; stroke:#000000;stroke-miterlimit:10;" x="382.99" y="1213.47" width="93.35"
                height="39.79" />
        @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-munzalanblokD11">
                <rect style="fill:#ffff; stroke:#000000;stroke-miterlimit:10;" x="382.99" y="1213.47" width="93.35"
                    height="39.79" />
            </a>
        @endif
    @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="munzalanblokD11">
            <rect style="fill:#ffff; stroke:#000000;stroke-miterlimit:10;" x="382.99" y="1213.47" width="93.35"
                height="39.79" />
        </a>
    @endforelse

    @forelse ($siteplan->where('code_product', 'munzalanblokD12') as $hasil)
        @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
            <rect style="fill:#ffc107; stroke:#000000;stroke-miterlimit:10;" x="382.99" y="1253.21" width="93.35"
                height="39.79" />
        @elseif ($hasil->status == 'Terjual')
            <rect style="fill:#f50505; stroke:#000000;stroke-miterlimit:10;" x="382.99" y="1253.21" width="93.35"
                height="39.79" />
        @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-munzalanblokD12">
                <rect style="fill:#ffff; stroke:#000000;stroke-miterlimit:10;" x="382.99" y="1253.21" width="93.35"
                    height="39.79" />
            </a>
        @endif
    @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="munzalanblokD12">
            <rect style="fill:#ffff; stroke:#000000;stroke-miterlimit:10;" x="382.99" y="1253.21" width="93.35"
                height="39.79" />
        </a>
    @endforelse

    @forelse ($siteplan->where('code_product', 'munzalanblokD13') as $hasil)
        @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
            <rect style="fill:#ffc107; stroke:#000000;stroke-miterlimit:10;" x="382.99" y="1292.29" width="93.35"
                height="39.79" />
        @elseif ($hasil->status == 'Terjual')
            <rect style="fill:#f50505; stroke:#000000;stroke-miterlimit:10;" x="382.99" y="1292.29" width="93.35"
                height="39.79" />
        @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-munzalanblokD13">
                <rect style="fill:#ffff; stroke:#000000;stroke-miterlimit:10;" x="382.99" y="1292.29" width="93.35"
                    height="39.79" />
            </a>
        @endif
    @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="munzalanblokD13">
            <rect style="fill:#ffff; stroke:#000000;stroke-miterlimit:10;" x="382.99" y="1292.29" width="93.35"
                height="39.79" />
        </a>
    @endforelse

    @forelse ($siteplan->where('code_product', 'munzalanblokD14') as $hasil)
        @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
            <rect style="fill:#ffc107; stroke:#000000;stroke-miterlimit:10;" x="382.99" y="1332.09" width="93.35"
                height="39.79" />
        @elseif ($hasil->status == 'Terjual')
            <rect style="fill:#f50505; stroke:#000000;stroke-miterlimit:10;" x="382.99" y="1332.09" width="93.35"
                height="39.79" />
        @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-munzalanblokD14">
                <rect style="fill:#ffff; stroke:#000000;stroke-miterlimit:10;" x="382.99" y="1332.09" width="93.35"
                    height="39.79" />
            </a>
        @endif
    @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="munzalanblokD14">
            <rect style="fill:#ffff; stroke:#000000;stroke-miterlimit:10;" x="382.99" y="1332.09" width="93.35"
                height="39.79" />
        </a>
    @endforelse

    @forelse ($siteplan->where('code_product', 'munzalanblokD15') as $hasil)
        @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
            <rect style="fill:#ffc107; stroke:#000000;stroke-miterlimit:10;" x="382.99" y="1371.88" width="93.35"
                height="39.79" />
        @elseif ($hasil->status == 'Terjual')
            <rect style="fill:#f50505; stroke:#000000;stroke-miterlimit:10;" x="382.99" y="1371.88" width="93.35"
                height="39.79" />
        @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-munzalanblokD15">
                <rect style="fill:#ffff; stroke:#000000;stroke-miterlimit:10;" x="382.99" y="1371.88" width="93.35"
                    height="39.79" />
            </a>
        @endif
    @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="munzalanblokD15">
            <rect style="fill:#ffff; stroke:#000000;stroke-miterlimit:10;" x="382.99" y="1371.88" width="93.35"
                height="39.79" />
        </a>
    @endforelse

    @forelse ($siteplan->where('code_product', 'munzalanblokD16') as $hasil)
        @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
            <rect style="fill:#ffc107; stroke:#000000;stroke-miterlimit:10;" x="382.99" y="1410.96" width="93.35"
                height="39.79" />
        @elseif ($hasil->status == 'Terjual')
            <rect style="fill:#f50505; stroke:#000000;stroke-miterlimit:10;" x="382.99" y="1410.96" width="93.35"
                height="39.79" />
        @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-munzalanblokD16">
                <rect style="fill:#ffff; stroke:#000000;stroke-miterlimit:10;" x="382.99" y="1410.96" width="93.35"
                    height="39.79" />
            </a>
        @endif
    @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="munzalanblokD16">
            <rect style="fill:#ffff; stroke:#000000;stroke-miterlimit:10;" x="382.99" y="1410.96" width="93.35"
                height="39.79" />
        </a>
    @endforelse

    @forelse ($siteplan->where('code_product', 'munzalanblokD17') as $hasil)
        @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
            <rect style="fill:#ffc107; stroke:#000000;stroke-miterlimit:10;" x="382.99" y="1450.76" width="93.35"
                height="39.79" />
        @elseif ($hasil->status == 'Terjual')
            <rect style="fill:#f50505; stroke:#000000;stroke-miterlimit:10;" x="382.99" y="1450.76" width="93.35"
                height="39.79" />
        @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-munzalanblokD17">
                <rect style="fill:#ffff; stroke:#000000;stroke-miterlimit:10;" x="382.99" y="1450.76" width="93.35"
                    height="39.79" />
            </a>
        @endif
    @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="munzalanblokD17">
            <rect style="fill:#ffff; stroke:#000000;stroke-miterlimit:10;" x="382.99" y="1450.76" width="93.35"
                height="39.79" />
        </a>
    @endforelse

    <text class="cls-5 bold-text" transform="translate(422.33 847.32)">D1</text>
    <text class="cls-5 bold-text" transform="translate(420.74 886.49)">D2</text>
    <text class="cls-5 bold-text" transform="translate(420.62 925.33)">D3</text>
    <text class="cls-5 bold-text" transform="translate(420.25 966.92)">D4</text>
    <text class="cls-5 bold-text" transform="translate(420.31 1005.73)">D5</text>
    <text class="cls-5 bold-text" transform="translate(420.29 1044.81)">D6</text>
    <text class="cls-5 bold-text" transform="translate(420.86 1083.99)">D7</text>
    <text class="cls-5 bold-text" transform="translate(420.32 1122.83)">D8</text>
    <text class="cls-5 bold-text" transform="translate(420.34 1164.41)">D9</text>
    <text class="cls-5 bold-text" transform="translate(417.85 1203.22)">D10</text>
    <text class="cls-5 bold-text" transform="translate(419.88 1237.8)">D11</text>
    <text class="cls-5 bold-text" transform="translate(418.29 1276.97)">D12</text>
    <text class="cls-5 bold-text" transform="translate(418.17 1315.81)">D13</text>
    <text class="cls-5 bold-text" transform="translate(417.8 1357.39)">D14</text>
    <text class="cls-5 bold-text" transform="translate(417.86 1396.2)">D15</text>
    <text class="cls-5 bold-text" transform="translate(417.8 1436.27)">D16</text>
    <text class="cls-5 bold-text" transform="translate(417.86 1475.08)">D17</text>
    {{-- cls-11 Blok D end --}}

    <rect class="cls-1" x="166.02" y="1490.84" width="311.32" height="25.23" />

    {{-- cls-12 Blok E --}}
    @forelse ($siteplan->where('code_product', 'munzalanblokE1') as $hasil)
        @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
            <rect style="fill:#ffc107; stroke:#000000;stroke-miterlimit:10;" x="264.14" y="822.19" width="93.35"
                height="39.79" />
        @elseif ($hasil->status == 'Terjual')
            <rect style="fill:#f50505; stroke:#000000;stroke-miterlimit:10;" x="264.14" y="822.19" width="93.35"
                height="39.79" />
        @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-munzalanblokE1">
                <rect style="fill:#ffff; stroke:#000000;stroke-miterlimit:10;" x="264.14" y="822.19" width="93.35"
                    height="39.79" />
            </a>
        @endif
    @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="munzalanblokE1">
            <rect style="fill:#ffff; stroke:#000000;stroke-miterlimit:10;" x="264.14" y="822.19" width="93.35"
                height="39.79" />
        </a>
    @endforelse

    @forelse ($siteplan->where('code_product', 'munzalanblokE2') as $hasil)
        @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
            <rect style="fill:#ffc107; stroke:#000000;stroke-miterlimit:10;" x="264.14" y="861.92" width="93.35"
                height="39.79" />
        @elseif ($hasil->status == 'Terjual')
            <rect style="fill:#f50505; stroke:#000000;stroke-miterlimit:10;" x="264.14" y="861.92" width="93.35"
                height="39.79" />
        @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-munzalanblokE2">
                <rect style="fill:#ffff; stroke:#000000;stroke-miterlimit:10;" x="264.14" y="861.92" width="93.35"
                    height="39.79" />
            </a>
        @endif
    @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="munzalanblokE2">
            <rect style="fill:#ffff; stroke:#000000;stroke-miterlimit:10;" x="264.14" y="861.92" width="93.35"
                height="39.79" />
        </a>
    @endforelse

    @forelse ($siteplan->where('code_product', 'munzalanblokE3') as $hasil)
        @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
            <rect style="fill:#ffc107; stroke:#000000;stroke-miterlimit:10;" x="264.14" y="901.01" width="93.35"
                height="39.79" />
        @elseif ($hasil->status == 'Terjual')
            <rect style="fill:#f50505; stroke:#000000;stroke-miterlimit:10;" x="264.14" y="901.01" width="93.35"
                height="39.79" />
        @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-munzalanblokE3">
                <rect style="fill:#ffff; stroke:#000000;stroke-miterlimit:10;" x="264.14" y="901.01" width="93.35"
                    height="39.79" />
            </a>
        @endif
    @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="munzalanblokE3">
            <rect style="fill:#ffff; stroke:#000000;stroke-miterlimit:10;" x="264.14" y="901.01" width="93.35"
                height="39.79" />
        </a>
    @endforelse

    @forelse ($siteplan->where('code_product', 'munzalanblokE4') as $hasil)
        @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
            <rect style="fill:#ffc107; stroke:#000000;stroke-miterlimit:10;" x="264.14" y="940.8" width="93.35"
                height="39.79" />
        @elseif ($hasil->status == 'Terjual')
            <rect style="fill:#f50505; stroke:#000000;stroke-miterlimit:10;" x="264.14" y="940.8" width="93.35"
                height="39.79" />
        @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-munzalanblokE4">
                <rect style="fill:#ffff; stroke:#000000;stroke-miterlimit:10;" x="264.14" y="940.8" width="93.35"
                    height="39.79" />
            </a>
        @endif
    @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="munzalanblokE4">
            <rect style="fill:#ffff; stroke:#000000;stroke-miterlimit:10;" x="264.14" y="940.8" width="93.35"
                height="39.79" />
        </a>
    @endforelse

    @forelse ($siteplan->where('code_product', 'munzalanblokE5') as $hasil)
        @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
            <rect style="fill:#ffc107; stroke:#000000;stroke-miterlimit:10;" x="264.14" y="980.6" width="93.35"
                height="39.79" />
        @elseif ($hasil->status == 'Terjual')
            <rect style="fill:#f50505; stroke:#000000;stroke-miterlimit:10;" x="264.14" y="980.6" width="93.35"
                height="39.79" />
        @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-munzalanblokE5">
                <rect style="fill:#ffff; stroke:#000000;stroke-miterlimit:10;" x="264.14" y="980.6" width="93.35"
                    height="39.79" />
            </a>
        @endif
    @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="munzalanblokE5">
            <rect style="fill:#ffff; stroke:#000000;stroke-miterlimit:10;" x="264.14" y="980.6" width="93.35"
                height="39.79" />
        </a>
    @endforelse

    @forelse ($siteplan->where('code_product', 'munzalanblokE6') as $hasil)
        @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
            <rect style="fill:#ffc107; stroke:#000000;stroke-miterlimit:10;" x="264.14" y="1019.68" width="93.35"
                height="39.79" />
        @elseif ($hasil->status == 'Terjual')
            <rect style="fill:#f50505; stroke:#000000;stroke-miterlimit:10;" x="264.14" y="1019.68" width="93.35"
                height="39.79" />
        @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-munzalanblokE6">
                <rect style="fill:#ffff; stroke:#000000;stroke-miterlimit:10;" x="264.14" y="1019.68" width="93.35"
                    height="39.79" />
            </a>
        @endif
    @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="munzalanblokE6">
            <rect style="fill:#ffff; stroke:#000000;stroke-miterlimit:10;" x="264.14" y="1019.68" width="93.35"
                height="39.79" />
        </a>
    @endforelse

    @forelse ($siteplan->where('code_product', 'munzalanblokE7') as $hasil)
        @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
            <rect style="fill:#ffc107; stroke:#000000;stroke-miterlimit:10;" x="264.14" y="1059.42" width="93.35"
                height="39.79" />
        @elseif ($hasil->status == 'Terjual')
            <rect style="fill:#f50505; stroke:#000000;stroke-miterlimit:10;" x="264.14" y="1059.42" width="93.35"
                height="39.79" />
        @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-munzalanblokE7">
                <rect style="fill:#ffff; stroke:#000000;stroke-miterlimit:10;" x="264.14" y="1059.42" width="93.35"
                    height="39.79" />
            </a>
        @endif
    @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="munzalanblokE7">
            <rect style="fill:#ffff; stroke:#000000;stroke-miterlimit:10;" x="264.14" y="1059.42" width="93.35"
                height="39.79" />
        </a>
    @endforelse

    @forelse ($siteplan->where('code_product', 'munzalanblokE8') as $hasil)
        @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
            <rect style="fill:#ffc107; stroke:#000000;stroke-miterlimit:10;" x="264.14" y="1098.5" width="93.35"
                height="39.79" />
        @elseif ($hasil->status == 'Terjual')
            <rect style="fill:#f50505; stroke:#000000;stroke-miterlimit:10;" x="264.14" y="1098.5" width="93.35"
                height="39.79" />
        @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-munzalanblokE8">
                <rect style="fill:#ffff; stroke:#000000;stroke-miterlimit:10;" x="264.14" y="1098.5" width="93.35"
                    height="39.79" />
            </a>
        @endif
    @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="munzalanblokE8">
            <rect style="fill:#ffff; stroke:#000000;stroke-miterlimit:10;" x="264.14" y="1098.5" width="93.35"
                height="39.79" />
        </a>
    @endforelse

    @forelse ($siteplan->where('code_product', 'munzalanblokE9') as $hasil)
        @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
            <rect style="fill:#ffc107; stroke:#000000;stroke-miterlimit:10;" x="264.14" y="1138.3" width="93.35"
                height="39.79" />
        @elseif ($hasil->status == 'Terjual')
            <rect style="fill:#f50505; stroke:#000000;stroke-miterlimit:10;" x="264.14" y="1138.3" width="93.35"
                height="39.79" />
        @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-munzalanblokE9">
                <rect style="fill:#ffff; stroke:#000000;stroke-miterlimit:10;" x="264.14" y="1138.3" width="93.35"
                    height="39.79" />
            </a>
        @endif
    @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="munzalanblokE9">
            <rect style="fill:#ffff; stroke:#000000;stroke-miterlimit:10;" x="264.14" y="1138.3" width="93.35"
                height="39.79" />
        </a>
    @endforelse

    @forelse ($siteplan->where('code_product', 'munzalanblokE10') as $hasil)
        @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
            <rect style="fill:#ffc107; stroke:#000000;stroke-miterlimit:10;" x="264.14" y="1178.09" width="93.35"
                height="39.79" />
        @elseif ($hasil->status == 'Terjual')
            <rect style="fill:#f50505; stroke:#000000;stroke-miterlimit:10;" x="264.14" y="1178.09" width="93.35"
                height="39.79" />
        @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-munzalanblokE10">
                <rect style="fill:#ffff; stroke:#000000;stroke-miterlimit:10;" x="264.14" y="1178.09" width="93.35"
                    height="39.79" />
            </a>
        @endif
    @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="munzalanblokE10">
            <rect style="fill:#ffff; stroke:#000000;stroke-miterlimit:10;" x="264.14" y="1178.09" width="93.35"
                height="39.79" />
        </a>
    @endforelse

    @forelse ($siteplan->where('code_product', 'munzalanblokE11') as $hasil)
        @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
            <rect style="fill:#ffc107; stroke:#000000;stroke-miterlimit:10;" x="264.14" y="1212.67" width="93.35"
                height="39.79" />
        @elseif ($hasil->status == 'Terjual')
            <rect style="fill:#f50505; stroke:#000000;stroke-miterlimit:10;" x="264.14" y="1212.67" width="93.35"
                height="39.79" />
        @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-munzalanblokE11">
                <rect style="fill:#ffff; stroke:#000000;stroke-miterlimit:10;" x="264.14" y="1212.67" width="93.35"
                    height="39.79" />
            </a>
        @endif
    @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="munzalanblokE11">
            <rect style="fill:#ffff; stroke:#000000;stroke-miterlimit:10;" x="264.14" y="1212.67" width="93.35"
                height="39.79" />
        </a>
    @endforelse

    @forelse ($siteplan->where('code_product', 'munzalanblokE12') as $hasil)
        @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
            <rect style="fill:#ffc107; stroke:#000000;stroke-miterlimit:10;" x="264.14" y="1252.4" width="93.35"
                height="39.79" />
        @elseif ($hasil->status == 'Terjual')
            <rect style="fill:#f50505; stroke:#000000;stroke-miterlimit:10;" x="264.14" y="1252.4" width="93.35"
                height="39.79" />
        @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-munzalanblokE12">
                <rect style="fill:#ffff; stroke:#000000;stroke-miterlimit:10;" x="264.14" y="1252.4" width="93.35"
                    height="39.79" />
            </a>
        @endif
    @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="munzalanblokE12">
            <rect style="fill:#ffff; stroke:#000000;stroke-miterlimit:10;" x="264.14" y="1252.4" width="93.35"
                height="39.79" />
        </a>
    @endforelse

    @forelse ($siteplan->where('code_product', 'munzalanblokE13') as $hasil)
        @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
            <rect style="fill:#ffc107; stroke:#000000;stroke-miterlimit:10;" x="264.14" y="1291.48" width="93.35"
                height="39.79" />
        @elseif ($hasil->status == 'Terjual')
            <rect style="fill:#f50505; stroke:#000000;stroke-miterlimit:10;" x="264.14" y="1291.48" width="93.35"
                height="39.79" />
        @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-munzalanblokE13">
                <rect style="fill:#ffff; stroke:#000000;stroke-miterlimit:10;" x="264.14" y="1291.48" width="93.35"
                    height="39.79" />
            </a>
        @endif
    @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="munzalanblokE13">
            <rect style="fill:#ffff; stroke:#000000;stroke-miterlimit:10;" x="264.14" y="1291.48" width="93.35"
                height="39.79" />
        </a>
    @endforelse

    @forelse ($siteplan->where('code_product', 'munzalanblokE14') as $hasil)
        @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
            <rect style="fill:#ffc107; stroke:#000000;stroke-miterlimit:10;" x="264.14" y="1331.28" width="93.35"
                height="39.79" />
        @elseif ($hasil->status == 'Terjual')
            <rect style="fill:#f50505; stroke:#000000;stroke-miterlimit:10;" x="264.14" y="1331.28" width="93.35"
                height="39.79" />
        @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-munzalanblokE14">
                <rect style="fill:#ffff; stroke:#000000;stroke-miterlimit:10;" x="264.14" y="1331.28" width="93.35"
                    height="39.79" />
            </a>
        @endif
    @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="munzalanblokE14">
            <rect style="fill:#ffff; stroke:#000000;stroke-miterlimit:10;" x="264.14" y="1331.28" width="93.35"
                height="39.79" />
        </a>
    @endforelse

    @forelse ($siteplan->where('code_product', 'munzalanblokE15') as $hasil)
        @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
            <rect style="fill:#ffc107; stroke:#000000;stroke-miterlimit:10;" x="264.14" y="1371.07" width="93.35"
                height="39.79" />
        @elseif ($hasil->status == 'Terjual')
            <rect style="fill:#f50505; stroke:#000000;stroke-miterlimit:10;" x="264.14" y="1371.07" width="93.35"
                height="39.79" />
        @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-munzalanblokE15">
                <rect style="fill:#ffff; stroke:#000000;stroke-miterlimit:10;" x="264.14" y="1371.07" width="93.35"
                    height="39.79" />
            </a>
        @endif
    @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="munzalanblokE15">
            <rect style="fill:#ffff; stroke:#000000;stroke-miterlimit:10;" x="264.14" y="1371.07" width="93.35"
                height="39.79" />
        </a>
    @endforelse

    @forelse ($siteplan->where('code_product', 'munzalanblokE16') as $hasil)
        @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
            <rect style="fill:#ffc107; stroke:#000000;stroke-miterlimit:10;" x="264.14" y="1410.16" width="93.35"
                height="39.79" />
        @elseif ($hasil->status == 'Terjual')
            <rect style="fill:#f50505; stroke:#000000;stroke-miterlimit:10;" x="264.14" y="1410.16" width="93.35"
                height="39.79" />
        @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-munzalanblokE16">
                <rect style="fill:#ffff; stroke:#000000;stroke-miterlimit:10;" x="264.14" y="1410.16" width="93.35"
                    height="39.79" />
            </a>
        @endif
    @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="munzalanblokE16">
            <rect style="fill:#ffff; stroke:#000000;stroke-miterlimit:10;" x="264.14" y="1410.16" width="93.35"
                height="39.79" />
        </a>
    @endforelse

    <text class="cls-5 bold-text" transform="translate(303.49 846.51)">E1</text>
    <text class="cls-5 bold-text" transform="translate(301.9 885.69)">E2</text>
    <text class="cls-5 bold-text" transform="translate(301.78 924.53)">E3</text>
    <text class="cls-5 bold-text" transform="translate(301.41 966.11)">E4</text>
    <text class="cls-5 bold-text" transform="translate(301.46 1004.92)">E5</text>
    <text class="cls-5 bold-text" transform="translate(301.44 1044.01)">E6</text>
    <text class="cls-5 bold-text" transform="translate(302.02 1083.18)">E7</text>
    <text class="cls-5 bold-text" transform="translate(301.47 1122.02)">E8</text>
    <text class="cls-5 bold-text" transform="translate(301.49 1163.6)">E9</text>
    <text class="cls-5 bold-text" transform="translate(299 1202.41)">E10</text>
    <text class="cls-5 bold-text" transform="translate(301.04 1236.99)">E11</text>
    <text class="cls-5 bold-text" transform="translate(299.45 1276.16)">E12</text>
    <text class="cls-5 bold-text" transform="translate(299.33 1315)">E13</text>
    <text class="cls-5 bold-text" transform="translate(298.96 1356.59)">E14</text>
    <text class="cls-5 bold-text" transform="translate(299.01 1395.39)">E15</text>
    <text class="cls-5 bold-text" transform="translate(298.96 1435.47)">E16</text>
    {{-- cls-12 Blok E end --}}

    {{-- cls-13 Blok F --}}
    @forelse ($siteplan->where('code_product', 'munzalanblokF1') as $hasil)
        @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
            <rect style="fill:#ffc107; stroke:#000000;stroke-miterlimit:10;" x="170.06" y="822.47" width="93.35"
                height="39.79" />
        @elseif ($hasil->status == 'Terjual')
            <rect style="fill:#f50505; stroke:#000000;stroke-miterlimit:10;" x="170.06" y="822.47" width="93.35"
                height="39.79" />
        @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-munzalanblokF1">
                <rect style="fill:#ffff; stroke:#000000;stroke-miterlimit:10;" x="170.06" y="822.47" width="93.35"
                    height="39.79" />
            </a>
        @endif
    @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="munzalanblokF1">
            <rect style="fill:#ffff; stroke:#000000;stroke-miterlimit:10;" x="170.06" y="822.47" width="93.35"
                height="39.79" />
        </a>
    @endforelse


    @forelse ($siteplan->where('code_product', 'munzalanblokF2') as $hasil)
        @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
            <rect style="fill:#ffc107; stroke:#000000;stroke-miterlimit:10;" x="170.06" y="862.21" width="93.35"
                height="39.79" />
        @elseif ($hasil->status == 'Terjual')
            <rect style="fill:#f50505; stroke:#000000;stroke-miterlimit:10;" x="170.06" y="862.21" width="93.35"
                height="39.79" />
        @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-munzalanblokF2">
                <rect style="fill:#ffff; stroke:#000000;stroke-miterlimit:10;" x="170.06" y="862.21" width="93.35"
                    height="39.79" />
            </a>
        @endif
    @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="munzalanblokF2">
            <rect style="fill:#ffff; stroke:#000000;stroke-miterlimit:10;" x="170.06" y="862.21" width="93.35"
                height="39.79" />
        </a>
    @endforelse

    @forelse ($siteplan->where('code_product', 'munzalanblokF3') as $hasil)
        @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
            <rect style="fill:#ffc107; stroke:#000000;stroke-miterlimit:10;" x="170.06" y="901.29" width="93.35"
                height="39.79" />
        @elseif ($hasil->status == 'Terjual')
            <rect style="fill:#f50505; stroke:#000000;stroke-miterlimit:10;" x="170.06" y="901.29" width="93.35"
                height="39.79" />
        @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-munzalanblokF3">
                <rect style="fill:#ffff; stroke:#000000;stroke-miterlimit:10;" x="170.06" y="901.29" width="93.35"
                    height="39.79" />
            </a>
        @endif
    @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="munzalanblokF3">
            <rect style="fill:#ffff; stroke:#000000;stroke-miterlimit:10;" x="170.06" y="901.29" width="93.35"
                height="39.79" />
        </a>
    @endforelse

    @forelse ($siteplan->where('code_product', 'munzalanblokF4') as $hasil)
        @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
            <rect style="fill:#ffc107; stroke:#000000;stroke-miterlimit:10;" x="170.06" y="941.09" width="93.35"
                height="39.79" />
        @elseif ($hasil->status == 'Terjual')
            <rect style="fill:#f50505; stroke:#000000;stroke-miterlimit:10;" x="170.06" y="941.09" width="93.35"
                height="39.79" />
        @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-munzalanblokF4">
                <rect style="fill:#ffff; stroke:#000000;stroke-miterlimit:10;" x="170.06" y="941.09" width="93.35"
                    height="39.79" />
            </a>
        @endif
    @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="munzalanblokF4">
            <rect style="fill:#ffff; stroke:#000000;stroke-miterlimit:10;" x="170.06" y="941.09" width="93.35"
                height="39.79" />
        </a>
    @endforelse

    @forelse ($siteplan->where('code_product', 'munzalanblokF5') as $hasil)
        @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
            <rect style="fill:#ffc107; stroke:#000000;stroke-miterlimit:10;" x="170.06" y="980.88" width="93.35"
                height="39.79" />
        @elseif ($hasil->status == 'Terjual')
            <rect style="fill:#f50505; stroke:#000000;stroke-miterlimit:10;" x="170.06" y="980.88" width="93.35"
                height="39.79" />
        @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-munzalanblokF5">
                <rect style="fill:#ffff; stroke:#000000;stroke-miterlimit:10;" x="170.06" y="980.88" width="93.35"
                    height="39.79" />
            </a>
        @endif
    @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="munzalanblokF5">
            <rect style="fill:#ffff; stroke:#000000;stroke-miterlimit:10;" x="170.06" y="980.88" width="93.35"
                height="39.79" />
        </a>
    @endforelse

    @forelse ($siteplan->where('code_product', 'munzalanblokF6') as $hasil)
        @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
            <rect style="fill:#ffc107; stroke:#000000;stroke-miterlimit:10;" x="170.06" y="1019.97" width="93.35"
                height="39.79" />
        @elseif ($hasil->status == 'Terjual')
            <rect style="fill:#f50505; stroke:#000000;stroke-miterlimit:10;" x="170.06" y="1019.97" width="93.35"
                height="39.79" />
        @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-munzalanblokF6">
                <rect style="fill:#ffff; stroke:#000000;stroke-miterlimit:10;" x="170.06" y="1019.97" width="93.35"
                    height="39.79" />
            </a>
        @endif
    @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="munzalanblokF6">
            <rect style="fill:#ffff; stroke:#000000;stroke-miterlimit:10;" x="170.06" y="1019.97" width="93.35"
                height="39.79" />
        </a>
    @endforelse

    @forelse ($siteplan->where('code_product', 'munzalanblokF7') as $hasil)
        @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
            <rect style="fill:#ffc107; stroke:#000000;stroke-miterlimit:10;" x="170.06" y="1059.7" width="93.35"
                height="39.79" />
        @elseif ($hasil->status == 'Terjual')
            <rect style="fill:#f50505; stroke:#000000;stroke-miterlimit:10;" x="170.06" y="1059.7" width="93.35"
                height="39.79" />
        @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-munzalanblokF7">
                <rect style="fill:#ffff; stroke:#000000;stroke-miterlimit:10;" x="170.06" y="1059.7" width="93.35"
                    height="39.79" />
            </a>
        @endif
    @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="munzalanblokF7">
            <rect style="fill:#ffff; stroke:#000000;stroke-miterlimit:10;" x="170.06" y="1059.7" width="93.35"
                height="39.79" />
        </a>
    @endforelse

    @forelse ($siteplan->where('code_product', 'munzalanblokF8') as $hasil)
        @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
            <rect style="fill:#ffc107; stroke:#000000;stroke-miterlimit:10;" x="170.06" y="1098.78" width="93.35"
                height="39.79" />
        @elseif ($hasil->status == 'Terjual')
            <rect style="fill:#f50505; stroke:#000000;stroke-miterlimit:10;" x="170.06" y="1098.78" width="93.35"
                height="39.79" />
        @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-munzalanblokF8">
                <rect style="fill:#ffff; stroke:#000000;stroke-miterlimit:10;" x="170.06" y="1098.78" width="93.35"
                    height="39.79" />
            </a>
        @endif
    @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="munzalanblokF8">
            <rect style="fill:#ffff; stroke:#000000;stroke-miterlimit:10;" x="170.06" y="1098.78" width="93.35"
                height="39.79" />
        </a>
    @endforelse

    @forelse ($siteplan->where('code_product', 'munzalanblokF9') as $hasil)
        @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
            <rect style="fill:#ffc107; stroke:#000000;stroke-miterlimit:10;" x="170.06" y="1138.58" width="93.35"
                height="39.79" />
        @elseif ($hasil->status == 'Terjual')
            <rect style="fill:#f50505; stroke:#000000;stroke-miterlimit:10;" x="170.06" y="1138.58" width="93.35"
                height="39.79" />
        @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-munzalanblokF9">
                <rect style="fill:#ffff; stroke:#000000;stroke-miterlimit:10;" x="170.06" y="1138.58" width="93.35"
                    height="39.79" />
            </a>
        @endif
    @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="munzalanblokF9">
            <rect style="fill:#ffff; stroke:#000000;stroke-miterlimit:10;" x="170.06" y="1138.58" width="93.35"
                height="39.79" />
        </a>
    @endforelse

    @forelse ($siteplan->where('code_product', 'munzalanblokF10') as $hasil)
        @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
            <rect style="fill:#ffc107; stroke:#000000;stroke-miterlimit:10;" x="170.06" y="1178.37" width="93.35"
                height="39.79" />
        @elseif ($hasil->status == 'Terjual')
            <rect style="fill:#f50505; stroke:#000000;stroke-miterlimit:10;" x="170.06" y="1178.37" width="93.35"
                height="39.79" />
        @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-munzalanblokF10">
                <rect style="fill:#ffff; stroke:#000000;stroke-miterlimit:10;" x="170.06" y="1178.37" width="93.35"
                    height="39.79" />
            </a>
        @endif
    @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="munzalanblokF10">
            <rect style="fill:#ffff; stroke:#000000;stroke-miterlimit:10;" x="170.06" y="1178.37" width="93.35"
                height="39.79" />
        </a>
    @endforelse

    @forelse ($siteplan->where('code_product', 'munzalanblokF11') as $hasil)
        @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
            <rect style="fill:#ffc107; stroke:#000000;stroke-miterlimit:10;" x="170.06" y="1212.95" width="93.35"
                height="39.79" />
        @elseif ($hasil->status == 'Terjual')
            <rect style="fill:#f50505; stroke:#000000;stroke-miterlimit:10;" x="170.06" y="1212.95" width="93.35"
                height="39.79" />
        @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-munzalanblokF11">
                <rect style="fill:#ffff; stroke:#000000;stroke-miterlimit:10;" x="170.06" y="1212.95" width="93.35"
                    height="39.79" />
            </a>
        @endif
    @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="munzalanblokF11">
            <rect style="fill:#ffff; stroke:#000000;stroke-miterlimit:10;" x="170.06" y="1212.95" width="93.35"
                height="39.79" />
        </a>
    @endforelse

    @forelse ($siteplan->where('code_product', 'munzalanblokF12') as $hasil)
        @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
            <rect style="fill:#ffc107; stroke:#000000;stroke-miterlimit:10;" x="170.06" y="1252.68" width="93.35"
                height="39.79" />
        @elseif ($hasil->status == 'Terjual')
            <rect style="fill:#f50505; stroke:#000000;stroke-miterlimit:10;" x="170.06" y="1252.68" width="93.35"
                height="39.79" />
        @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-munzalanblokF12">
                <rect style="fill:#ffff; stroke:#000000;stroke-miterlimit:10;" x="170.06" y="1252.68" width="93.35"
                    height="39.79" />
            </a>
        @endif
    @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="munzalanblokF12">
            <rect style="fill:#ffff; stroke:#000000;stroke-miterlimit:10;" x="170.06" y="1252.68" width="93.35"
                height="39.79" />
        </a>
    @endforelse

    @forelse ($siteplan->where('code_product', 'munzalanblokF13') as $hasil)
        @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
            <rect style="fill:#ffc107; stroke:#000000;stroke-miterlimit:10;" x="170.06" y="1291.76" width="93.35"
                height="39.79" />
        @elseif ($hasil->status == 'Terjual')
            <rect style="fill:#f50505; stroke:#000000;stroke-miterlimit:10;" x="170.06" y="1291.76" width="93.35"
                height="39.79" />
        @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-munzalanblokF13">
                <rect style="fill:#ffff; stroke:#000000;stroke-miterlimit:10;" x="170.06" y="1291.76" width="93.35"
                    height="39.79" />
            </a>
        @endif
    @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="munzalanblokF13">
            <rect style="fill:#ffff; stroke:#000000;stroke-miterlimit:10;" x="170.06" y="1291.76" width="93.35"
                height="39.79" />
        </a>
    @endforelse

    @forelse ($siteplan->where('code_product', 'munzalanblokF14') as $hasil)
        @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
            <rect style="fill:#ffc107; stroke:#000000;stroke-miterlimit:10;" x="170.06" y="1331.56" width="93.35"
                height="39.79" />
        @elseif ($hasil->status == 'Terjual')
            <rect style="fill:#f50505; stroke:#000000;stroke-miterlimit:10;" x="170.06" y="1331.56" width="93.35"
                height="39.79" />
        @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-munzalanblokF14">
                <rect style="fill:#ffff; stroke:#000000;stroke-miterlimit:10;" x="170.06" y="1331.56" width="93.35"
                    height="39.79" />
            </a>
        @endif
    @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="munzalanblokF14">
            <rect style="fill:#ffff; stroke:#000000;stroke-miterlimit:10;" x="170.06" y="1331.56" width="93.35"
                height="39.79" />
        </a>
    @endforelse

    @forelse ($siteplan->where('code_product', 'munzalanblokF15') as $hasil)
        @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
            <rect style="fill:#ffc107; stroke:#000000;stroke-miterlimit:10;" x="170.06" y="1371.35" width="93.35"
                height="39.79" />
        @elseif ($hasil->status == 'Terjual')
            <rect style="fill:#f50505; stroke:#000000;stroke-miterlimit:10;" x="170.06" y="1371.35" width="93.35"
                height="39.79" />
        @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-munzalanblokF15">
                <rect style="fill:#ffff; stroke:#000000;stroke-miterlimit:10;" x="170.06" y="1371.35" width="93.35"
                    height="39.79" />
            </a>
        @endif
    @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="munzalanblokF15">
            <rect style="fill:#ffff; stroke:#000000;stroke-miterlimit:10;" x="170.06" y="1371.35" width="93.35"
                height="39.79" />
        </a>
    @endforelse

    @forelse ($siteplan->where('code_product', 'munzalanblokF16') as $hasil)
        @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
            <rect style="fill:#ffc107; stroke:#000000;stroke-miterlimit:10;" x="170.06" y="1410.44" width="93.35"
                height="39.79" />
        @elseif ($hasil->status == 'Terjual')
            <rect style="fill:#f50505; stroke:#000000;stroke-miterlimit:10;" x="170.06" y="1410.44" width="93.35"
                height="39.79" />
        @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-munzalanblokF16">
                <rect style="fill:#ffff; stroke:#000000;stroke-miterlimit:10;" x="170.06" y="1410.44" width="93.35"
                    height="39.79" />
            </a>
        @endif
    @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="munzalanblokF16">
            <rect style="fill:#ffff; stroke:#000000;stroke-miterlimit:10;" x="170.06" y="1410.44" width="93.35"
                height="39.79" />
        </a>
    @endforelse

    <text class="cls-5 bold-text" transform="translate(209.4 846.8)">F1</text>
    <text class="cls-5 bold-text" transform="translate(207.81 885.97)">F2</text>
    <text class="cls-5 bold-text" transform="translate(207.69 924.81)">F3</text>
    <text class="cls-5 bold-text" transform="translate(207.32 966.39)">F4</text>
    <text class="cls-5 bold-text" transform="translate(207.38 1005.2)">F5</text>
    <text class="cls-5 bold-text" transform="translate(207.36 1044.29)">F6</text>
    <text class="cls-5 bold-text" transform="translate(207.93 1083.46)">F7</text>
    <text class="cls-5 bold-text" transform="translate(207.39 1122.3)">F8</text>
    <text class="cls-5 bold-text" transform="translate(207.41 1163.89)">F9</text>
    <text class="cls-5 bold-text" transform="translate(204.92 1202.7)">F10</text>
    <text class="cls-5 bold-text" transform="translate(206.95 1237.27)">F11</text>
    <text class="cls-5 bold-text" transform="translate(205.36 1276.44)">F12</text>
    <text class="cls-5 bold-text" transform="translate(205.24 1315.28)">F13</text>
    <text class="cls-5 bold-text" transform="translate(204.87 1356.87)">F14</text>
    <text class="cls-5 bold-text" transform="translate(204.93 1395.68)">F15</text>
    <text class="cls-5 bold-text" transform="translate(204.87 1435.75)">F16</text>
    {{-- cls-13 Blok F end --}}


    <rect class="cls-14" x="170.06" y="1450.23" width="187.33" height="39.79" />
    <text class="cls-15" transform="translate(236.91 1475.08)">FASUM</text>

    {{-- cls-16 Ruko --}}
    @forelse ($siteplan->where('code_product', 'munzalanruko6') as $hasil)
        @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
            <rect style="fill:#ffc107; stroke:#000000;stroke-miterlimit:10;" x="144.03" y="34.79" width="27.63"
                height="146.09" />
        @elseif ($hasil->status == 'Terjual')
            <rect style="fill:#f50505; stroke:#000000;stroke-miterlimit:10;" x="144.03" y="34.79" width="27.63"
                height="146.09" />
        @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-munzalanruko6">
                <rect style="fill:#ffff; stroke:#000000;stroke-miterlimit:10;" x="144.03" y="34.79" width="27.63"
                    height="146.09" />
            </a>
        @endif
    @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="munzalanruko6">
            <rect style="fill:#ffff; stroke:#000000;stroke-miterlimit:10;" x="144.03" y="34.79" width="27.63"
                height="146.09" />
        </a>
    @endforelse

    @forelse ($siteplan->where('code_product', 'munzalanruko5') as $hasil)
        @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
            <rect style="fill:#ffc107; stroke:#000000;stroke-miterlimit:10;" x="171.38" y="34.79" width="27.63"
                height="146.09" />
        @elseif ($hasil->status == 'Terjual')
            <rect style="fill:#f50505; stroke:#000000;stroke-miterlimit:10;" x="171.38" y="34.79" width="27.63"
                height="146.09" />
        @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-munzalanruko5">
                <rect style="fill:#ffff; stroke:#000000;stroke-miterlimit:10;" x="171.38" y="34.79" width="27.63"
                    height="146.09" />
            </a>
        @endif
    @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="munzalanruko5">
            <rect style="fill:#ffff; stroke:#000000;stroke-miterlimit:10;" x="171.38" y="34.79" width="27.63"
                height="146.09" />
        </a>
    @endforelse

    @forelse ($siteplan->where('code_product', 'munzalanruko4') as $hasil)
        @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
            <rect style="fill:#ffc107; stroke:#000000;stroke-miterlimit:10;" x="199.01" y="34.79" width="27.63"
                height="146.09" />
        @elseif ($hasil->status == 'Terjual')
            <rect style="fill:#f50505; stroke:#000000;stroke-miterlimit:10;" x="199.01" y="34.79" width="27.63"
                height="146.09" />
        @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-munzalanruko4">
                <rect style="fill:#ffff; stroke:#000000;stroke-miterlimit:10;" x="199.01" y="34.79" width="27.63"
                    height="146.09" />
            </a>
        @endif
    @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="munzalanruko4">
            <rect style="fill:#ffff; stroke:#000000;stroke-miterlimit:10;" x="199.01" y="34.79" width="27.63"
                height="146.09" />
        </a>
    @endforelse

    @forelse ($siteplan->where('code_product', 'munzalanruko3') as $hasil)
        @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
            <rect style="fill:#ffc107; stroke:#000000;stroke-miterlimit:10;" x="226.36" y="34.79" width="27.63"
                height="146.09" />
        @elseif ($hasil->status == 'Terjual')
            <rect style="fill:#f50505; stroke:#000000;stroke-miterlimit:10;" x="226.36" y="34.79" width="27.63"
                height="146.09" />
        @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-munzalanruko3">
                <rect style="fill:#ffff; stroke:#000000;stroke-miterlimit:10;" x="226.36" y="34.79" width="27.63"
                    height="146.09" />
            </a>
        @endif
    @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="munzalanruko3">
            <rect style="fill:#ffff; stroke:#000000;stroke-miterlimit:10;" x="226.36" y="34.79" width="27.63"
                height="146.09" />
        </a>
    @endforelse

    @forelse ($siteplan->where('code_product', 'munzalanruko2') as $hasil)
        @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
            <rect style="fill:#ffc107; stroke:#000000;stroke-miterlimit:10;" x="253.99" y="34.79" width="27.63"
                height="146.09" />
        @elseif ($hasil->status == 'Terjual')
            <rect style="fill:#f50505; stroke:#000000;stroke-miterlimit:10;" x="253.99" y="34.79" width="27.63"
                height="146.09" />
        @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-munzalanruko2">
                <rect style="fill:#ffff; stroke:#000000;stroke-miterlimit:10;" x="253.99" y="34.79" width="27.63"
                    height="146.09" />
            </a>
        @endif
    @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="munzalanruko2">
            <rect style="fill:#ffff; stroke:#000000;stroke-miterlimit:10;" x="253.99" y="34.79" width="27.63"
                height="146.09" />
        </a>
    @endforelse

    @forelse ($siteplan->where('code_product', 'munzalanruko1') as $hasil)
        @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
            <rect style="fill:#ffc107; stroke:#000000;stroke-miterlimit:10;" x="281.34" y="34.79" width="27.63"
                height="146.09" />
        @elseif ($hasil->status == 'Terjual')
            <rect style="fill:#f50505; stroke:#000000;stroke-miterlimit:10;" x="281.34" y="34.79" width="27.63"
                height="146.09" />
        @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-munzalanruko1">
                <rect style="fill:#ffff; stroke:#000000;stroke-miterlimit:10;" x="281.34" y="34.79" width="27.63"
                    height="146.09" />
            </a>
        @endif
    @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="munzalanruko1">
            <rect style="fill:#ffff; stroke:#000000;stroke-miterlimit:10;" x="281.34" y="34.79" width="27.63"
                height="146.09" />
        </a>
    @endforelse

    <text class="cls-18 bold-text" transform="translate(290.56 87.5) rotate(90)">Ruko 1</text>
    <text class="cls-18 bold-text" transform="translate(263.96 86.31) rotate(90)">Ruko 2</text>
    <text class="cls-18 bold-text" transform="translate(236.91 86.3) rotate(90)">Ruko 3</text>
    <text class="cls-18 bold-text" transform="translate(209.4 85.72) rotate(90)">Ruko 4</text>
    <text class="cls-18 bold-text" transform="translate(181.63 86.28) rotate(90)">Ruko 5</text>
    <text class="cls-18 bold-text" transform="translate(152.79 86.03) rotate(90)">Ruko 6</text>
    {{-- cls-16 Ruko end --}}

    <text class="cls-18" transform="translate(175.93 198.16)">Rencana Jalan 5 Meter</text>
    <text class="cls-18" transform="translate(364.96 428.23) rotate(90)">Rencana Jalan 5 Meter</text>
    <text class="cls-18" transform="translate(152.79 429.22) rotate(90)">Rencana Jalan 5 Meter</text>
    <text class="cls-18" transform="translate(367 1119.21) rotate(90)">Rencana Jalan 5 Meter</text>
    <text class="cls-18" transform="translate(152.79 1120.07) rotate(90)">Rencana Jalan 5 Meter</text>
    <text class="cls-18" transform="translate(240.02 813.14)">Rencana Jalan 5 Meter</text>


</svg>
