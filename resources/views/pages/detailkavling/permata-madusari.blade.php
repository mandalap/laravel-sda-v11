<svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 538.38 2126.75">
    <defs>
        <style>
            .cls-1 {
                fill: #969696;
            }

            .cls-2 {
                font-size: 15.85px;
                font-family: Poppins-ExtraBold, Poppins;
                font-weight: 800;
            }

            .cls-2,
            .cls-4 {
                fill: #231f20;
            }

            {{--
            .cls-3 {
                fill: #fbb040;
            } --}} .cls-3,
            .cls-6,
            .cls-7 {
                stroke: #231f20;
                stroke-miterlimit: 10;
            }

            .cls-4 {
                font-size: 14px;
                font-family: Poppins-Medium, Poppins;
                font-weight: 500;
            }

            .cls-5 {
                fill: #fff;
            }

            {{-- .cls-6 {
                fill: #00a651;
            } --}} {{-- .cls-7 {
                fill: #00aeef;
            } --}}
        </style>
    </defs>
    <rect class="cls-1" x="-734.7" y="1173.42" width="2075.44" height="35.96"
        transform="translate(-921.65 1374.71) rotate(-90)" />
    <rect class="cls-1" x="0.54" width="537.84" height="34.68" /><text class="cls-2"
        transform="translate(51.22 22.98)">Jalan Poros Utama</text><text class="cls-2"
        transform="translate(325.57 23.17)">Jalan Poros Utama</text>




    @forelse ($siteplan->where('code_product', 'madusaripermata001') as $hasil)
        @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
            <rect class="cls-3" style="fill:#ffc107;" x="96.28" y="282.53" width="155.48" height="39.79" />
        @elseif ($hasil->status == 'Terjual')
            <rect class="cls-3" style=" fill:#f50505;" x="96.28" y="282.53" width="155.48" height="39.79" />
        @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-madusaripermata001">
                <rect class="cls-3" style="fill: #f8f8f8;" x="96.28" y="282.53" width="155.48" height="39.79" />
            </a>
        @endif
    @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="madusaripermata001">
            <rect class="cls-3" style="fill: #f8f8f8;" x="96.28" y="282.53" width="155.48" height="39.79" />
        </a>
    @endforelse

    <text class="cls-4" transform="translate(147.44 306.85)">BLOK A1</text>


    @forelse ($siteplan->where('code_product', 'madusaripermata002') as $hasil)
        @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
            <rect class="cls-3" style="fill:#ffc107;" x="96.28" y="322.26" width="155.48" height="39.79" />
        @elseif ($hasil->status == 'Terjual')
            <rect class="cls-3" style=" fill:#f50505;" x="96.28" y="322.26" width="155.48" height="39.79" />
        @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-madusaripermata002">
                <rect class="cls-3" style="fill: #f8f8f8;" x="96.28" y="322.26" width="155.48" height="39.79" />
            </a>
        @endif
    @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="madusaripermata002">
            <rect class="cls-3" style="fill: #f8f8f8;" x="96.28" y="322.26" width="155.48" height="39.79" />
        </a>
    @endforelse


    @forelse ($siteplan->where('code_product', 'madusaripermata003') as $hasil)
        @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
            <rect class="cls-3" style="fill:#ffc107;" x="96.28" y="361.35" width="155.48" height="39.79" />
        @elseif ($hasil->status == 'Terjual')
            <rect class="cls-3" style=" fill:#f50505;" x="96.28" y="361.35" width="155.48" height="39.79" />
        @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-madusaripermata003">
                <rect class="cls-3" style="fill: #f8f8f8;" x="96.28" y="361.35" width="155.48" height="39.79" />
            </a>
        @endif
    @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="madusaripermata003">
            <rect class="cls-3" style="fill: #f8f8f8;" x="96.28" y="361.35" width="155.48" height="39.79" />
        </a>
    @endforelse

    @forelse ($siteplan->where('code_product', 'madusaripermata004') as $hasil)
        @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
            <rect class="cls-3" style="fill:#ffc107; " x="96.28" y="401.14" width="155.48" height="39.79" />
        @elseif ($hasil->status == 'Terjual')
            <rect class="cls-3" style="fill:#f50505;" x="96.28" y="401.14" width="155.48" height="39.79" />
        @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-madusaripermata004">
                <rect class="cls-3" style="fill: #f8f8f8;" x="96.28" y="401.14" width="155.48" height="39.79" />
            </a>
        @endif
    @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="madusaripermata004">
            <rect class="cls-3" style="fill: #f8f8f8;" x="96.28" y="401.14" width="155.48" height="39.79" />
        </a>
    @endforelse


    @forelse ($siteplan->where('code_product', 'madusaripermata005') as $hasil)
        @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
            <rect class="cls-3" style="fill:#ffc107; " x="96.28" y="440.94" width="155.48" height="39.79" />
        @elseif ($hasil->status == 'Terjual')
            <rect class="cls-3" style="fill:#f50505;" x="96.28" y="440.94" width="155.48" height="39.79" />
        @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-madusaripermata005">
                <rect class="cls-3" style="fill: #f8f8f8;" x="96.28" y="440.94" width="155.48" height="39.79" />
            </a>
        @endif
    @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="madusaripermata005">
            <rect class="cls-3" style="fill: #f8f8f8;" x="96.28" y="440.94" width="155.48" height="39.79" />
        </a>
    @endforelse



    <text class="cls-4" transform="translate(145.85 346.02)">BLOK A2</text><text class="cls-4"
        transform="translate(145.73 384.86)">BLOK A3</text><text class="cls-4"
        transform="translate(145.36 426.45)">BLOK A4</text><text class="cls-4"
        transform="translate(145.41 465.26)">BLOK A5</text>


    @forelse ($siteplan->where('code_product', 'madusaripermata006') as $hasil)
        @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
            <rect class="cls-3" style="fill:#ffc107;" x="96.28" y="480.02" width="155.48" height="39.79" />
        @elseif ($hasil->status == 'Terjual')
            <rect class="cls-3" style="fill:#f50505;" x="96.28" y="480.02" width="155.48" height="39.79" />
        @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-madusaripermata006">
                <rect class="cls-3" style="fill: #f8f8f8;" x="96.28" y="480.02" width="155.48" height="39.79" />
            </a>
        @endif
    @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="madusaripermata006">
            <rect class="cls-3" style="fill: #f8f8f8;" x="96.28" y="480.02" width="155.48" height="39.79" />
        </a>
    @endforelse


    @forelse ($siteplan->where('code_product', 'madusaripermata007') as $hasil)
        @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
            <rect class="cls-3" style="fill:#ffc107; " x="96.28" y="519.75" width="155.48" height="39.79" />
        @elseif ($hasil->status == 'Terjual')
            <rect class="cls-3" style="fill:#f50505;" x="96.28" y="519.75" width="155.48" height="39.79" />
        @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-madusaripermata007">
                <rect class="cls-3" style="fill: #f8f8f8;" x="96.28" y="519.75" width="155.48" height="39.79" />
            </a>
        @endif
    @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="madusaripermata007">
            <rect class="cls-3" style="fill: #f8f8f8;" x="96.28" y="519.75" width="155.48" height="39.79" />
        </a>
    @endforelse



    @forelse ($siteplan->where('code_product', 'madusaripermata008') as $hasil)
        @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
            <rect class="cls-3" style="fill:#ffc107;" x="96.28" y="558.84" width="155.48" height="39.79" />
        @elseif ($hasil->status == 'Terjual')
            <rect class="cls-3" style="fill:#f50505;" x="96.28" y="558.84" width="155.48" height="39.79" />
        @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-madusaripermata008">
                <rect class="cls-3" style="fill: #f8f8f8;" x="96.28" y="558.84" width="155.48" height="39.79" />
            </a>
        @endif
    @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="madusaripermata008">
            <rect class="cls-3" style="fill: #f8f8f8;" x="96.28" y="558.84" width="155.48" height="39.79" />
        </a>
    @endforelse



    @forelse ($siteplan->where('code_product', 'madusaripermata009') as $hasil)
        @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
            <rect class="cls-3" style="fill:#ffc107;" x="96.28" y="598.63" width="155.48" height="39.79" />
        @elseif ($hasil->status == 'Terjual')
            <rect class="cls-3" style="fill:#f50505;" x="96.28" y="598.63" width="155.48" height="39.79" />
        @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-madusaripermata009">
                <rect class="cls-3" style="fill: #f8f8f8;" x="96.28" y="598.63" width="155.48" height="39.79" />
            </a>
        @endif
    @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="madusaripermata009">
            <rect class="cls-3" style="fill: #f8f8f8;" x="96.28" y="598.63" width="155.48" height="39.79" />
        </a>
    @endforelse


    @forelse ($siteplan->where('code_product', 'madusaripermata010') as $hasil)
        @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
            <rect class="cls-3" style="fill:#ffc107; " x="96.28" y="638.43" width="155.48" height="39.79" />
        @elseif ($hasil->status == 'Terjual')
            <rect class="cls-3" style="fill:#f50505;" x="96.28" y="638.43" width="155.48" height="39.79" />
        @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-madusaripermata010">
                <rect class="cls-3" style="fill: #f8f8f8;" x="96.28" y="638.43" width="155.48" height="39.79" />
            </a>
        @endif
    @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="madusaripermata010">
            <rect class="cls-3" style="fill: #f8f8f8;" x="96.28" y="638.43" width="155.48" height="39.79" />
        </a>
    @endforelse



    <text class="cls-4" transform="translate(145.39 504.34)">BLOK A6</text>
    <text class="cls-4" transform="translate(145.97 543.52)">BLOK A7</text>
    <text class="cls-4" transform="translate(145.42 582.36)">BLOK A8</text>
    <text class="cls-4" transform="translate(145.44 623.94)">BLOK A9</text>
    <text class="cls-4" transform="translate(142.95 662.75)">BLOK A10</text>


    @forelse ($siteplan->where('code_product', 'madusaripermata011') as $hasil)
        @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
            <rect class="cls-3" style="fill:#ffc107;" x="96.28" y="673" width="155.48" height="39.79" />
        @elseif ($hasil->status == 'Terjual')
            <rect class="cls-3" style="fill:#f50505;" x="96.28" y="673" width="155.48" height="39.79" />
        @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-madusaripermata011">
                <rect class="cls-3" style="fill: #f8f8f8;" x="96.28" y="673" width="155.48" height="39.79" />
            </a>
        @endif
    @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="madusaripermata011">
            <rect class="cls-3" style="fill: #f8f8f8;" x="96.28" y="673" width="155.48" height="39.79" />
        </a>
    @endforelse


    @forelse ($siteplan->where('code_product', 'madusaripermata012') as $hasil)
        @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
            <rect class="cls-3" style="fill:#ffc107; " x="96.28" y="712.74" width="155.48" height="39.79" />
        @elseif ($hasil->status == 'Terjual')
            <rect class="cls-3" style="fill:#f50505;" x="96.28" y="712.74" width="155.48" height="39.79" />
        @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-madusaripermata012">
                <rect class="cls-3" style="fill: #f8f8f8;" x="96.28" y="712.74" width="155.48" height="39.79" />
            </a>
        @endif
    @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="madusaripermata012">
            <rect class="cls-3" style="fill: #f8f8f8;" x="96.28" y="712.74" width="155.48" height="39.79" />
        </a>
    @endforelse



    @forelse ($siteplan->where('code_product', 'madusaripermata013') as $hasil)
        @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
            <rect class="cls-3" style="fill:#ffc107; " x="96.28" y="751.82" width="155.48" height="39.79" />
        @elseif ($hasil->status == 'Terjual')
            <rect class="cls-3" style=" fill:#f50505;" x="96.28" y="751.82" width="155.48" height="39.79" />
        @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-madusaripermata013">
                <rect class="cls-3" style="fill: #f8f8f8;" x="96.28" y="751.82" width="155.48" height="39.79" />
            </a>
        @endif
    @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="madusaripermata013">
            <rect class="cls-3" style="fill: #f8f8f8;" x="96.28" y="751.82" width="155.48" height="39.79" />
        </a>
    @endforelse


    @forelse ($siteplan->where('code_product', 'madusaripermata014') as $hasil)
        @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
            <rect class="cls-3" style="fill:#ffc107;" x="96.28" y="791.62" width="155.48" height="39.79" />
        @elseif ($hasil->status == 'Terjual')
            <rect class="cls-3" style="fill:#f50505;" x="96.28" y="791.62" width="155.48" height="39.79" />
        @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-madusaripermata014">
                <rect class="cls-3" style="fill: #f8f8f8;" x="96.28" y="791.62" width="155.48" height="39.79" />
            </a>
        @endif
    @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="madusaripermata014">
            <rect class="cls-3" style="fill: #f8f8f8;" x="96.28" y="791.62" width="155.48" height="39.79" />
        </a>
    @endforelse



    @forelse ($siteplan->where('code_product', 'madusaripermata015') as $hasil)
        @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
            <rect class="cls-3" style="fill:#ffc107; " x="96.28" y="831.41" width="155.48" height="39.79" />
        @elseif ($hasil->status == 'Terjual')
            <rect class="cls-3" style="fill:#f50505;" x="96.28" y="831.41" width="155.48" height="39.79" />
        @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-madusaripermata015">
                <rect class="cls-3" style="fill: #f8f8f8;" x="96.28" y="831.41" width="155.48" height="39.79" />
            </a>
        @endif
    @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="madusaripermata015">
            <rect class="cls-3" style="fill: #f8f8f8;" x="96.28" y="831.41" width="155.48" height="39.79" />
        </a>
    @endforelse



    <text class="cls-4" transform="translate(144.99 697.33)">BLOK A11</text>
    <text class="cls-4" transform="translate(143.4 736.5)">BLOK A12</text>
    <text class="cls-4" transform="translate(143.28 775.34)">BLOK A13</text>
    <text class="cls-4" transform="translate(142.91 816.92)">BLOK A14</text>
    <text class="cls-4" transform="translate(142.96 855.73)">BLOK A15</text>


    @forelse ($siteplan->where('code_product', 'madusaripermata016') as $hasil)
        @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
            <rect class="cls-3" style="fill:#ffc107;" x="96.28" y="870.49" width="155.48" height="39.79" />
        @elseif ($hasil->status == 'Terjual')
            <rect class="cls-3" style="fill:#f50505;" x="96.28" y="870.49" width="155.48" height="39.79" />
        @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-madusaripermata016">
                <rect class="cls-3" style="fill: #f8f8f8;" x="96.28" y="870.49" width="155.48" height="39.79" />
            </a>
        @endif
    @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="madusaripermata016">
            <rect class="cls-3" style="fill: #f8f8f8;" x="96.28" y="870.49" width="155.48" height="39.79" />
        </a>
    @endforelse


    @forelse ($siteplan->where('code_product', 'madusaripermata017') as $hasil)
        @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
            <rect class="cls-3" style="fill:#ffc107;" x="96.28" y="910.23" width="155.48" height="39.79" />
        @elseif ($hasil->status == 'Terjual')
            <rect class="cls-3" style="fill:#f50505;" x="96.28" y="910.23" width="155.48" height="39.79" />
        @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-madusaripermata017">
                <rect class="cls-3" style="fill: #f8f8f8;" x="96.28" y="910.23" width="155.48" height="39.79" />
            </a>
        @endif
    @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="madusaripermata017">
            <rect class="cls-3" style="fill: #f8f8f8;" x="96.28" y="910.23" width="155.48" height="39.79" />
        </a>
    @endforelse



    @forelse ($siteplan->where('code_product', 'madusaripermata018') as $hasil)
        @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
            <rect class="cls-3" style="fill:#ffc107;" x="96.28" y="949.31" width="155.48" height="39.79" />
        @elseif ($hasil->status == 'Terjual')
            <rect class="cls-3" style="fill:#f50505;" x="96.28" y="949.31" width="155.48" height="39.79" />
        @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-madusaripermata018">
                <rect class="cls-3" style="fill: #f8f8f8;" x="96.28" y="949.31" width="155.48" height="39.79" />
            </a>
        @endif
    @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="madusaripermata018">
            <rect class="cls-3" style="fill: #f8f8f8;" x="96.28" y="949.31" width="155.48" height="39.79" />
        </a>
    @endforelse


    @forelse ($siteplan->where('code_product', 'madusaripermata019') as $hasil)
        @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
            <rect class="cls-3" style="fill:#ffc107; " x="96.28" y="989.11" width="155.48" height="39.79" />
        @elseif ($hasil->status == 'Terjual')
            <rect class="cls-3" style=" fill:#f50505;" x="96.28" y="989.11" width="155.48" height="39.79" />
        @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-madusaripermata019">
                <rect class="cls-3" style="fill: #f8f8f8;" x="96.28" y="989.11" width="155.48" height="39.79" />
            </a>
        @endif
    @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="madusaripermata019">
            <rect class="cls-3" style="fill: #f8f8f8;" x="96.28" y="989.11" width="155.48" height="39.79" />
        </a>
    @endforelse


    @forelse ($siteplan->where('code_product', 'madusaripermata020') as $hasil)
        @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
            <rect class="cls-3" style="fill:#ffc107;" x="96.28" y="1028.9" width="155.48" height="39.79" />
        @elseif ($hasil->status == 'Terjual')
            <rect class="cls-3" style="fill:#f50505;" x="96.28" y="1028.9" width="155.48" height="39.79" />
        @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-madusaripermata020">
                <rect class="cls-3" style="fill: #f8f8f8;" x="96.28" y="1028.9" width="155.48" height="39.79" />
            </a>
        @endif
    @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="madusaripermata020">
            <rect class="cls-3" style="fill: #f8f8f8;" x="96.28" y="1028.9" width="155.48" height="39.79" />
        </a>
    @endforelse

    <text class="cls-4" transform="translate(142.94 894.82)">BLOK A16</text>
    <text class="cls-4" transform="translate(143.52 933.99)">BLOK A17</text>
    <text class="cls-4" transform="translate(142.97 972.83)">BLOK A18</text>
    <text class="cls-4" transform="translate(142.99 1014.42)">BLOK A19</text>
    <text class="cls-4" transform="translate(141.36 1053.22)">BLOK A20</text>

    <rect class="cls-5" x="216.6" y="16.66" width="22.55" height="2.04" />
    <rect class="cls-5" x="252.72" y="16.66" width="22.55" height="2.04" />
    <rect class="cls-5" x="288.85" y="16.66" width="22.55" height="2.04" />
    <rect class="cls-5" x="15.9" y="17.68" width="22.55" height="2.04" />
    <rect class="cls-5" x="493.47" y="17.68" width="22.55" height="2.04" />


    @forelse ($siteplan->where('code_product', 'madusaripermata021') as $hasil)
        @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
            <rect class="cls-3" style="fill:#ffc107;" x="96.28" y="1068.6" width="155.48" height="39.79" />
        @elseif ($hasil->status == 'Terjual')
            <rect class="cls-3" style=" fill:#f50505;" x="96.28" y="1068.6" width="155.48" height="39.79" />
        @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-madusaripermata021">
                <rect class="cls-3" style="fill: #f8f8f8;" x="96.28" y="1068.6" width="155.48" height="39.79" />
            </a>
        @endif
    @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="madusaripermata021">
            <rect class="cls-3" style="fill: #f8f8f8;" x="96.28" y="1068.6" width="155.48" height="39.79" />
        </a>
    @endforelse


    @forelse ($siteplan->where('code_product', 'madusaripermata022') as $hasil)
        @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
            <rect class="cls-3" style="fill:#ffc107;" x="96.28" y="1108.33" width="155.48" height="39.79" />
        @elseif ($hasil->status == 'Terjual')
            <rect class="cls-3" style="fill:#f50505;" x="96.28" y="1108.33" width="155.48" height="39.79" />
        @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-madusaripermata022">
                <rect class="cls-3" style="fill: #f8f8f8;" x="96.28" y="1108.33" width="155.48" height="39.79" />
            </a>
        @endif
    @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="madusaripermata022">
            <rect class="cls-3" style="fill: #f8f8f8;" x="96.28" y="1108.33" width="155.48" height="39.79" />
        </a>
    @endforelse


    @forelse ($siteplan->where('code_product', 'madusaripermata023') as $hasil)
        @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
            <rect class="cls-3" style="fill:#ffc107; " x="96.28" y="1147.41" width="155.48" height="39.79" />
        @elseif ($hasil->status == 'Terjual')
            <rect class="cls-3" style="fill:#f50505;" x="96.28" y="1147.41" width="155.48" height="39.79" />
        @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-madusaripermata023">
                <rect class="cls-3" style="fill: #f8f8f8;" x="96.28" y="1147.41" width="155.48" height="39.79" />
            </a>
        @endif
    @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="madusaripermata023">
            <rect class="cls-3" style="fill: #f8f8f8;" x="96.28" y="1147.41" width="155.48" height="39.79" />
        </a>
    @endforelse



    @forelse ($siteplan->where('code_product', 'madusaripermata024') as $hasil)
        @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
            <rect class="cls-3" style="fill:#ffc107; " x="96.28" y="1187.21" width="155.48" height="39.79" />
        @elseif ($hasil->status == 'Terjual')
            <rect class="cls-3" style="fill:#f50505;" x="96.28" y="1187.21" width="155.48" height="39.79" />
        @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-madusaripermata024">
                <rect class="cls-3" style="fill: #f8f8f8;" x="96.28" y="1187.21" width="155.48" height="39.79" />
            </a>
        @endif
    @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="madusaripermata024">
            <rect class="cls-3" style="fill: #f8f8f8;" x="96.28" y="1187.21" width="155.48" height="39.79" />
        </a>
    @endforelse



    @forelse ($siteplan->where('code_product', 'madusaripermata025') as $hasil)
        @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
            <rect class="cls-3" style="fill:#ffc107;" x="96.28" y="1227" width="155.48" height="39.79" />
        @elseif ($hasil->status == 'Terjual')
            <rect class="cls-3" style="fill:#f50505;" x="96.28" y="1227" width="155.48" height="39.79" />
        @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-madusaripermata025">
                <rect class="cls-3" style="fill: #f8f8f8;" x="96.28" y="1227" width="155.48" height="39.79" />
            </a>
        @endif
    @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="madusaripermata025">
            <rect class="cls-3" style="fill: #f8f8f8;" x="96.28" y="1227" width="155.48" height="39.79" />
        </a>
    @endforelse




    <text class="cls-4" transform="translate(143.4 1092.92)">BLOK A21</text>
    <text class="cls-4" transform="translate(141.81 1132.09)">BLOK A22</text>
    <text class="cls-4" transform="translate(141.69 1170.93)">BLOK A23</text>
    <text class="cls-4" transform="translate(141.32 1212.52)">BLOK A24</text>
    <text class="cls-4" transform="translate(141.38 1251.33)">BLOK A25</text>


    @forelse ($siteplan->where('code_product', 'madusaripermata026') as $hasil)
        @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
            <rect class="cls-3" style="fill:#ffc107;" x="96.28" y="1266.09" width="155.48" height="39.79" />
        @elseif ($hasil->status == 'Terjual')
            <rect class="cls-3" style="fill:#f50505;" x="96.28" y="1266.09" width="155.48" height="39.79" />
        @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-madusaripermata026">
                <rect class="cls-3" style="fill: #f8f8f8;" x="96.28" y="1266.09" width="155.48" height="39.79" />
            </a>
        @endif
    @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="madusaripermata026">
            <rect class="cls-3" style="fill: #f8f8f8;" x="96.28" y="1266.09" width="155.48" height="39.79" />
        </a>
    @endforelse


    @forelse ($siteplan->where('code_product', 'madusaripermata027') as $hasil)
        @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
            <rect class="cls-3" style="fill:#ffc107; " x="96.28" y="1305.82" width="155.48" height="39.79" />
        @elseif ($hasil->status == 'Terjual')
            <rect class="cls-3" style="fill:#f50505;" x="96.28" y="1305.82" width="155.48" height="39.79" />
        @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-madusaripermata027">
                <rect class="cls-3" style="fill: #f8f8f8;" x="96.28" y="1305.82" width="155.48" height="39.79" />
            </a>
        @endif
    @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="madusaripermata027">
            <rect class="cls-3" style="fill: #f8f8f8;" x="96.28" y="1305.82" width="155.48" height="39.79" />
        </a>
    @endforelse



    @forelse ($siteplan->where('code_product', 'madusaripermata028') as $hasil)
        @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
            <rect class="cls-3" style="fill:#ffc107;" x="96.28" y="1344.91" width="155.48" height="39.79" />
        @elseif ($hasil->status == 'Terjual')
            <rect class="cls-3" style="fill:#f50505;" x="96.28" y="1344.91" width="155.48" height="39.79" />
        @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-madusaripermata028">
                <rect class="cls-3" style="fill: #f8f8f8;" x="96.28" y="1344.91" width="155.48" height="39.79" />
            </a>
        @endif
    @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="madusaripermata028">
            <rect class="cls-3" style="fill: #f8f8f8;" x="96.28" y="1344.91" width="155.48" height="39.79" />
        </a>
    @endforelse


    @forelse ($siteplan->where('code_product', 'madusaripermata029') as $hasil)
        @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
            <rect class="cls-3" style="fill:#ffc107; " x="96.28" y="1384.7" width="155.48" height="39.79" />
        @elseif ($hasil->status == 'Terjual')
            <rect class="cls-3" style="fill:#f50505;" x="96.28" y="1384.7" width="155.48" height="39.79" />
        @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-madusaripermata029">
                <rect class="cls-3" style="fill: #f8f8f8;" x="96.28" y="1384.7" width="155.48" height="39.79" />
            </a>
        @endif
    @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="madusaripermata029">
            <rect class="cls-3" style="fill: #f8f8f8;" x="96.28" y="1384.7" width="155.48" height="39.79" />
        </a>
    @endforelse


    @forelse ($siteplan->where('code_product', 'madusaripermata030') as $hasil)
        @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
            <rect class="cls-3" style="fill:#ffc107;" x="96.28" y="1424.49" width="155.48" height="39.79" />
        @elseif ($hasil->status == 'Terjual')
            <rect class="cls-3" style="fill:#f50505;" x="96.28" y="1424.49" width="155.48" height="39.79" />
        @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-madusaripermata030">
                <rect class="cls-3" style="fill: #f8f8f8;" x="96.28" y="1424.49" width="155.48" height="39.79" />
            </a>
        @endif
    @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="madusaripermata030">
            <rect class="cls-3" style="fill: #f8f8f8;" x="96.28" y="1424.49" width="155.48" height="39.79" />
        </a>
    @endforelse



    <text class="cls-4" transform="translate(141.35 1290.41)">BLOK A26</text>
    <text class="cls-4" transform="translate(141.93 1329.58)">BLOK A27</text>
    <text class="cls-4" transform="translate(141.38 1368.42)">BLOK A28</text>
    <text class="cls-4" transform="translate(141.4 1410.01)">BLOK A29</text>
    <text class="cls-4" transform="translate(141.24 1448.82)">BLOK A30</text>

    @forelse ($siteplan->where('code_product', 'madusaripermata031') as $hasil)
        @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
            <rect class="cls-3" style="fill:#ffc107;" x="96.28" y="1459.07" width="155.48" height="39.79" />
        @elseif ($hasil->status == 'Terjual')
            <rect class="cls-3" style="fill:#f50505;" x="96.28" y="1459.07" width="155.48" height="39.79" />
        @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-madusaripermata031">
                <rect class="cls-3" style="fill: #f8f8f8;" x="96.28" y="1459.07" width="155.48" height="39.79" />
            </a>
        @endif
    @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="madusaripermata031">
            <rect class="cls-3" style="fill: #f8f8f8;" x="96.28" y="1459.07" width="155.48" height="39.79" />
        </a>
    @endforelse



    @forelse ($siteplan->where('code_product', 'madusaripermata032') as $hasil)
        @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
            <rect class="cls-3" style="fill:#ffc107; " x="96.28" y="1498.8" width="155.48" height="39.79" />
        @elseif ($hasil->status == 'Terjual')
            <rect class="cls-3" style="fill:#f50505;" x="96.28" y="1498.8" width="155.48" height="39.79" />
        @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-madusaripermata032">
                <rect class="cls-3" style="fill: #f8f8f8;" x="96.28" y="1498.8" width="155.48" height="39.79" />
            </a>
        @endif
    @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="madusaripermata032">
            <rect class="cls-3" style="fill: #f8f8f8;" x="96.28" y="1498.8" width="155.48" height="39.79" />
        </a>
    @endforelse


    @forelse ($siteplan->where('code_product', 'madusaripermata033') as $hasil)
        @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
            <rect class="cls-3" style="fill:#ffc107;" x="96.28" y="1537.89" width="155.48" height="39.79" />
        @elseif ($hasil->status == 'Terjual')
            <rect class="cls-3" style="fill:#f50505;" x="96.28" y="1537.89" width="155.48" height="39.79" />
        @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-madusaripermata033">
                <rect class="cls-3" style="fill: #f8f8f8;" x="96.28" y="1537.89" width="155.48" height="39.79" />
            </a>
        @endif
    @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="madusaripermata033">
            <rect class="cls-3" style="fill: #f8f8f8;" x="96.28" y="1537.89" width="155.48" height="39.79" />
        </a>
    @endforelse



    @forelse ($siteplan->where('code_product', 'madusaripermata034') as $hasil)
        @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
            <rect class="cls-3" style="fill:#ffc107;" x="96.28" y="1577.68" width="155.48" height="39.79" />
        @elseif ($hasil->status == 'Terjual')
            <rect class="cls-3" style=" fill:#f50505;" x="96.28" y="1577.68" width="155.48" height="39.79" />
        @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-madusaripermata034">
                <rect class="cls-3" style="fill: #f8f8f8;" x="96.28" y="1577.68" width="155.48" height="39.79" />
            </a>
        @endif
    @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="madusaripermata034">
            <rect class="cls-3" style="fill: #f8f8f8;" x="96.28" y="1577.68" width="155.48" height="39.79" />
        </a>
    @endforelse


    @forelse ($siteplan->where('code_product', 'madusaripermata035') as $hasil)
        @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
            <rect class="cls-3" style="fill:#ffc107;" x="96.28" y="1617.48" width="155.48" height="39.79" />
        @elseif ($hasil->status == 'Terjual')
            <rect class="cls-3" style="fill:#f50505;" x="96.28" y="1617.48" width="155.48" height="39.79" />
        @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-madusaripermata035">
                <rect class="cls-3" style="fill: #f8f8f8;" x="96.28" y="1617.48" width="155.48" height="39.79" />
            </a>
        @endif
    @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="madusaripermata035">
            <rect class="cls-3" style="fill: #f8f8f8;" x="96.28" y="1617.48" width="155.48" height="39.79" />
        </a>
    @endforelse



    <text class="cls-4" transform="translate(143.28 1483.39)">BLOK A31</text>
    <text class="cls-4" transform="translate(141.69 1522.56)">BLOK A32</text>
    <text class="cls-4" transform="translate(141.57 1561.4)">BLOK A33</text>
    <text class="cls-4" transform="translate(141.2 1602.99)">BLOK A34</text>
    <text class="cls-4" transform="translate(141.26 1641.8)">BLOK A35</text>


    @forelse ($siteplan->where('code_product', 'madusaripermata036') as $hasil)
        @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
            <rect class="cls-3" style="fill:#ffc107; " x="96.28" y="1656.56" width="155.48" height="39.79" />
        @elseif ($hasil->status == 'Terjual')
            <rect class="cls-3" style="fill:#f50505;" x="96.28" y="1656.56" width="155.48" height="39.79" />
        @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-madusaripermata036">
                <rect class="cls-3" style="fill: #f8f8f8;" x="96.28" y="1656.56" width="155.48" height="39.79" />
            </a>
        @endif
    @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="madusaripermata036">
            <rect class="cls-3" style="fill: #f8f8f8;" x="96.28" y="1656.56" width="155.48" height="39.79" />
        </a>
    @endforelse



    @forelse ($siteplan->where('code_product', 'madusaripermata037') as $hasil)
        @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
            <rect class="cls-3" style="fill:#ffc107; " x="96.28" y="1696.29" width="155.48" height="39.79" />
        @elseif ($hasil->status == 'Terjual')
            <rect class="cls-3" style="fill:#f50505;" x="96.28" y="1696.29" width="155.48" height="39.79" />
        @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-madusaripermata037">
                <rect class="cls-3" style="fill: #f8f8f8;" x="96.28" y="1696.29" width="155.48" height="39.79" />
            </a>
        @endif
    @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="madusaripermata037">
            <rect class="cls-3" style="fill: #f8f8f8;" x="96.28" y="1696.29" width="155.48" height="39.79" />
        </a>
    @endforelse



    @forelse ($siteplan->where('code_product', 'madusaripermata038') as $hasil)
        @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
            <rect class="cls-3" style="fill:#ffc107; " x="96.28" y="1735.38" width="155.48" height="39.79" />
        @elseif ($hasil->status == 'Terjual')
            <rect class="cls-3" style="fill:#f50505;" x="96.28" y="1735.38" width="155.48" height="39.79" />
        @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-madusaripermata038">
                <rect class="cls-3" style="fill: #f8f8f8;" x="96.28" y="1735.38" width="155.48" height="39.79" />
            </a>
        @endif
    @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="madusaripermata038">
            <rect class="cls-3" style="fill: #f8f8f8;" x="96.28" y="1735.38" width="155.48" height="39.79" />
        </a>
    @endforelse



    @forelse ($siteplan->where('code_product', 'madusaripermata039') as $hasil)
        @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
            <rect class="cls-3" style="fill:#ffc107;" x="96.28" y="1775.17" width="155.48" height="39.79" />
        @elseif ($hasil->status == 'Terjual')
            <rect class="cls-3" style=" fill:#f50505;" x="96.28" y="1775.17" width="155.48" height="39.79" />
        @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-madusaripermata039">
                <rect class="cls-3" style="fill: #f8f8f8;" x="96.28" y="1775.17" width="155.48" height="39.79" />
            </a>
        @endif
    @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="madusaripermata039">
            <rect class="cls-3" style="fill: #f8f8f8;" x="96.28" y="1775.17" width="155.48" height="39.79" />
        </a>
    @endforelse


    @forelse ($siteplan->where('code_product', 'madusaripermata040') as $hasil)
        @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
            <rect class="cls-3" style="fill:#ffc107; " x="96.28" y="1814.97" width="155.48" height="39.79" />
        @elseif ($hasil->status == 'Terjual')
            <rect class="cls-3" style="fill: #f50505;" x="96.28" y="1814.97" width="155.48" height="39.79" />
        @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-madusaripermata040">
                <rect class="cls-3" style="fill:#f8f8f8;" x="96.28" y="1814.97" width="155.48"
                    height="39.79" />
            </a>
        @endif
    @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="madusaripermata040">
            <rect class="cls-3" style="fill: #f8f8f8;" x="96.28" y="1814.97" width="155.48" height="39.79" />
        </a>
    @endforelse


    <text class="cls-4" transform="translate(141.24 1680.88)">BLOK A36</text>
    <text class="cls-4" transform="translate(141.81 1720.06)">BLOK A37</text>
    <text class="cls-4" transform="translate(141.26 1758.9)">BLOK A38</text>
    <text class="cls-4" transform="translate(141.28 1800.48)">BLOK A39</text>
    <text class="cls-4" transform="translate(140.87 1839.29)">BLOK A40</text>


    @forelse ($siteplan->where('code_product', 'madusaripermata041') as $hasil)
        @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
            <rect class="cls-3" style="fill:#ffc107;" x="96.28" y="1854.76" width="155.48" height="39.79" />
        @elseif ($hasil->status == 'Terjual')
            <rect class="cls-3" style="fill:#f50505;" x="96.28" y="1854.76" width="155.48" height="39.79" />
        @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-madusaripermata041">
                <rect class="cls-3" style="fill: #f8f8f8;" x="96.28" y="1854.76" width="155.48"
                    height="39.79" />
            </a>
        @endif
    @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="madusaripermata041">
            <rect class="cls-3" style="fill: #f8f8f8;" x="96.28" y="1854.76" width="155.48" height="39.79" />
        </a>
    @endforelse


    @forelse ($siteplan->where('code_product', 'madusaripermata042') as $hasil)
        @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
            <rect class="cls-3" style=" fill:#ffc107;" x="96.28" y="1894.5" width="155.48" height="39.79" />
        @elseif ($hasil->status == 'Terjual')
            <rect class="cls-3" style="fill:#f50505;" x="96.28" y="1894.5" width="155.48" height="39.79" />
        @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-madusaripermata042">
                <rect class="cls-3" style="fill: #f8f8f8;" x="96.28" y="1894.5" width="155.48"
                    height="39.79" />
            </a>
        @endif
    @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="madusaripermata042">
            <rect class="cls-3" style="fill: #f8f8f8;" x="96.28" y="1894.5" width="155.48" height="39.79" />
        </a>
    @endforelse


    @forelse ($siteplan->where('code_product', 'madusaripermata043') as $hasil)
        @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
            <rect class="cls-3" style="fill:#ffc107;" x="96.28" y="1933.58" width="155.48" height="39.79" />
        @elseif ($hasil->status == 'Terjual')
            <rect class="cls-3" style=" fill:#f50505;" x="96.28" y="1933.58" width="155.48" height="39.79" />
        @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-madusaripermata043">
                <rect class="cls-3" style="fill: #f8f8f8;" x="96.28" y="1933.58" width="155.48"
                    height="39.79" />
            </a>
        @endif
    @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="madusaripermata043">
            <rect class="cls-3" style="fill: #f8f8f8;" x="96.28" y="1933.58" width="155.48" height="39.79" />
        </a>
    @endforelse



    @forelse ($siteplan->where('code_product', 'madusaripermata044') as $hasil)
        @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
            <rect class="cls-3" style="fill:#ffc107;" x="96.28" y="1973.37" width="155.48" height="39.79" />
        @elseif ($hasil->status == 'Terjual')
            <rect class="cls-3" style="fill:#f50505;" x="96.28" y="1973.37" width="155.48" height="39.79" />
        @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-madusaripermata044">
                <rect class="cls-3" style="fill: #f8f8f8;" x="96.28" y="1973.37" width="155.48"
                    height="39.79" />
            </a>
        @endif
    @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="madusaripermata044">
            <rect class="cls-3" style="fill: #f8f8f8;" x="96.28" y="1973.37" width="155.48" height="39.79" />
        </a>
    @endforelse



    @forelse ($siteplan->where('code_product', 'madusaripermata045') as $hasil)
        @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
            <rect class="cls-3" style="fill:#ffc107; " x="96.28" y="2013.17" width="155.48" height="39.79" />
        @elseif ($hasil->status == 'Terjual')
            <rect class="cls-3" style="fill:#f50505;" x="96.28" y="2013.17" width="155.48" height="39.79" />
        @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-madusaripermata045">
                <rect class="cls-3" style="fill: #f8f8f8;" x="96.28" y="2013.17" width="155.48"
                    height="39.79" />
            </a>
        @endif
    @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="madusaripermata045">
            <rect class="cls-3" style="fill: #f8f8f8;" x="96.28" y="2013.17" width="155.48" height="39.79" />
        </a>
    @endforelse


    @forelse ($siteplan->where('code_product', 'madusaripermata046') as $hasil)
        @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
            <rect class="cls-3" style="fill:#ffc107;" x="96.28" y="2052.25" width="155.48" height="39.79" />
        @elseif ($hasil->status == 'Terjual')
            <rect class="cls-3" style=" fill:#f50505;" x="96.28" y="2052.25" width="155.48" height="39.79" />
        @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-madusaripermata046">
                <rect class="cls-3" style="fill: #f8f8f8;" x="96.28" y="2052.25" width="155.48"
                    height="39.79" />
            </a>
        @endif
    @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="madusaripermata046">
            <rect class="cls-3" style="fill: #f8f8f8;" x="96.28" y="2052.25" width="155.48" height="39.79" />
        </a>
    @endforelse



    <text class="cls-4" transform="translate(142.91 1879.09)">BLOK A41</text>
    <text class="cls-4" transform="translate(141.32 1918.26)">BLOK A42</text>
    <text class="cls-4" transform="translate(141.2 1957.1)">BLOK A43</text>
    <text class="cls-4" transform="translate(140.83 1998.68)">BLOK A44</text>
    <text class="cls-4" transform="translate(140.89 2037.49)">BLOK A45</text>
    <text class="cls-4" transform="translate(140.86 2076.58)">BLOK A46</text>


    @forelse ($siteplan->where('code_product', 'madusaripermataB001') as $hasil)
        @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
            <rect class="cls-6" style="fill:#ffc107;" x="286.11" y="282.53" width="155.48" height="39.79" />
        @elseif ($hasil->status == 'Terjual')
            <rect class="cls-6" style="fill:#f50505;" x="286.11" y="282.53" width="155.48" height="39.79" />
        @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-madusaripermataB001">
                <rect class="cls-6" style="fill: #f8f8f8;" x="286.11" y="282.53" width="155.48"
                    height="39.79" />
            </a>
        @endif
    @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="madusaripermataB001">
            <rect class="cls-6" style="fill: #f8f8f8;" x="286.11" y="282.53" width="155.48" height="39.79" />
        </a>
    @endforelse


    @forelse ($siteplan->where('code_product', 'madusaripermataB002') as $hasil)
        @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
            <rect class="cls-6" style="fill:#ffc107;" x="286.11" y="322.27" width="155.48" height="39.79" />
        @elseif ($hasil->status == 'Terjual')
            <rect class="cls-6" style="fill:#f50505;" x="286.11" y="322.27" width="155.48" height="39.79" />
        @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-madusaripermataB002">
                <rect class="cls-6" style="fill: #f8f8f8;" x="286.11" y="322.27" width="155.48"
                    height="39.79" />
            </a>
        @endif
    @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="madusaripermataB002">
            <rect class="cls-6" style="fill: #f8f8f8;" x="286.11" y="322.27" width="155.48" height="39.79" />
        </a>
    @endforelse


    @forelse ($siteplan->where('code_product', 'madusaripermataB003') as $hasil)
        @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
            <rect class="cls-6" style="fill:#ffc107;" x="286.11" y="361.35" width="155.48" height="39.79" />
        @elseif ($hasil->status == 'Terjual')
            <rect class="cls-6" style="fill:#f50505;" x="286.11" y="361.35" width="155.48" height="39.79" />
        @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-madusaripermataB003">
                <rect class="cls-6" style="fill: #f8f8f8;" x="286.11" y="361.35" width="155.48"
                    height="39.79" />
            </a>
        @endif
    @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="madusaripermataB003">
            <rect class="cls-6" style="fill: #f8f8f8;" x="286.11" y="361.35" width="155.48" height="39.79" />
        </a>
    @endforelse


    @forelse ($siteplan->where('code_product', 'madusaripermataB004') as $hasil)
        @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
            <rect class="cls-6" style="fill:#ffc107;" x="286.11" y="401.14" width="155.48" height="39.79" />
        @elseif ($hasil->status == 'Terjual')
            <rect class="cls-6" style="fill:#f50505;" x="286.11" y="401.14" width="155.48" height="39.79" />
        @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-madusaripermataB004">
                <rect class="cls-6" style="fill: #f8f8f8;" x="286.11" y="401.14" width="155.48"
                    height="39.79" />
            </a>
        @endif
    @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="madusaripermataB004">
            <rect class="cls-6" style="fill: #f8f8f8;" x="286.11" y="401.14" width="155.48" height="39.79" />
        </a>
    @endforelse


    @forelse ($siteplan->where('code_product', 'madusaripermataB005') as $hasil)
        @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
            <rect class="cls-6" style="fill:#ffc107;" x="286.11" y="440.94" width="155.48" height="39.79" />
        @elseif ($hasil->status == 'Terjual')
            <rect class="cls-6" style="fill:#f50505;" x="286.11" y="440.94" width="155.48" height="39.79" />
        @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-madusaripermataB005">
                <rect class="cls-6" style="fill: #f8f8f8;" x="286.11" y="440.94" width="155.48"
                    height="39.79" />
            </a>
        @endif
    @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="madusaripermataB005">
            <rect class="cls-6" style="fill: #f8f8f8;" x="286.11" y="440.94" width="155.48" height="39.79" />
        </a>
    @endforelse


    <text class="cls-4" transform="translate(337.26 306.86)">BLOK B1</text>
    <text class="cls-4" transform="translate(335.67 346.03)">BLOK B2</text>
    <text class="cls-4" transform="translate(335.55 384.87)">BLOK B3</text>
    <text class="cls-4" transform="translate(335.18 426.45)">BLOK B4</text>
    <text class="cls-4" transform="translate(335.24 465.26)">BLOK B5</text>


    @forelse ($siteplan->where('code_product', 'madusaripermataB006') as $hasil)
        @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
            <rect class="cls-6" style="fill:#ffc107; " x="286.11" y="480.02" width="155.48" height="39.79" />
        @elseif ($hasil->status == 'Terjual')
            <rect class="cls-6" style="fill:#f50505;" x="286.11" y="480.02" width="155.48" height="39.79" />
        @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-madusaripermataB006">
                <rect class="cls-6" style="fill: #f8f8f8;" x="286.11" y="480.02" width="155.48"
                    height="39.79" />
            </a>
        @endif
    @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="madusaripermataB006">
            <rect class="cls-6" style="fill: #f8f8f8;" x="286.11" y="480.02" width="155.48" height="39.79" />
        </a>
    @endforelse


    @forelse ($siteplan->where('code_product', 'madusaripermataB007') as $hasil)
        @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
            <rect class="cls-6" style="fill:#ffc107;" x="286.11" y="519.76" width="155.48" height="39.79" />
        @elseif ($hasil->status == 'Terjual')
            <rect class="cls-6" style="fill:#f50505;" x="286.11" y="519.76" width="155.48" height="39.79" />
        @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-madusaripermataB007">
                <rect class="cls-6" style="fill: #f8f8f8;" x="286.11" y="519.76" width="155.48"
                    height="39.79" />
            </a>
        @endif
    @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="madusaripermataB007">
            <rect class="cls-6" style="fill: #f8f8f8;" x="286.11" y="519.76" width="155.48" height="39.79" />
        </a>
    @endforelse


    @forelse ($siteplan->where('code_product', 'madusaripermataB008') as $hasil)
        @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
            <rect class="cls-6" style="fill:#ffc107; " x="286.11" y="558.84" width="155.48" height="39.79" />
        @elseif ($hasil->status == 'Terjual')
            <rect class="cls-6" style="fill:#f50505;" x="286.11" y="558.84" width="155.48" height="39.79" />
        @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-madusaripermataB008">
                <rect class="cls-6" style="fill: #f8f8f8;" x="286.11" y="558.84" width="155.48"
                    height="39.79" />
            </a>
        @endif
    @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="madusaripermataB008">
            <rect class="cls-6" style="fill: #f8f8f8;" x="286.11" y="558.84" width="155.48" height="39.79" />
        </a>
    @endforelse


    @forelse ($siteplan->where('code_product', 'madusaripermataB009') as $hasil)
        @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
            <rect class="cls-6" style="fill:#ffc107;" x="286.11" y="598.64" width="155.48" height="39.79" />
        @elseif ($hasil->status == 'Terjual')
            <rect class="cls-6" style="fill:#f50505;" x="286.11" y="598.64" width="155.48" height="39.79" />
        @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-madusaripermataB009">
                <rect class="cls-6" style="fill: #f8f8f8;" x="286.11" y="598.64" width="155.48"
                    height="39.79" />
            </a>
        @endif
    @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="madusaripermataB009">
            <rect class="cls-6" style="fill: #f8f8f8;" x="286.11" y="598.64" width="155.48" height="39.79" />
        </a>
    @endforelse


    @forelse ($siteplan->where('code_product', 'madusaripermataB010') as $hasil)
        @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
            <rect class="cls-6" style="fill:#ffc107; " x="286.11" y="638.43" width="155.48" height="39.79" />
        @elseif ($hasil->status == 'Terjual')
            <rect class="cls-6" style="fill:#f50505;" x="286.11" y="638.43" width="155.48" height="39.79" />
        @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-madusaripermataB010">
                <rect class="cls-6" style="fill: #f8f8f8;" x="286.11" y="638.43" width="155.48"
                    height="39.79" />
            </a>
        @endif
    @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="madusaripermataB010">
            <rect class="cls-6" style="fill: #f8f8f8;" x="286.11" y="638.43" width="155.48" height="39.79" />
        </a>
    @endforelse


    <text class="cls-4" transform="translate(335.22 504.35)">BLOK B6</text>
    <text class="cls-4" transform="translate(335.79 543.52)">BLOK B7</text>
    <text class="cls-4" transform="translate(335.24 582.36)">BLOK B8</text>
    <text class="cls-4" transform="translate(335.26 623.94)">BLOK B9</text>
    <text class="cls-4" transform="translate(332.77 662.75)">BLOK B10</text>


    @forelse ($siteplan->where('code_product', 'madusaripermataB011') as $hasil)
        @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
            <rect class="cls-6" style="fill:#ffc107;" x="286.11" y="673.01" width="155.48" height="39.79" />
        @elseif ($hasil->status == 'Terjual')
            <rect class="cls-6" style="fill:#f50505;" x="286.11" y="673.01" width="155.48" height="39.79" />
        @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-madusaripermataB011">
                <rect class="cls-6" style="fill: #f8f8f8;" x="286.11" y="673.01" width="155.48"
                    height="39.79" />
            </a>
        @endif
    @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="madusaripermataB011">
            <rect class="cls-6" style="fill: #f8f8f8;" x="286.11" y="673.01" width="155.48" height="39.79" />
        </a>
    @endforelse


    @forelse ($siteplan->where('code_product', 'madusaripermataB012') as $hasil)
        @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
            <rect class="cls-6" style="fill:#ffc107;" x="286.11" y="712.74" width="155.48" height="39.79" />
        @elseif ($hasil->status == 'Terjual')
            <rect class="cls-6" style="fill:#f50505;" x="286.11" y="712.74" width="155.48" height="39.79" />
        @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-madusaripermataB012">
                <rect class="cls-6" style="fill: #f8f8f8;" x="286.11" y="712.74" width="155.48"
                    height="39.79" />
            </a>
        @endif
    @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="madusaripermataB012">
            <rect class="cls-6" style="fill: #f8f8f8;" x="286.11" y="712.74" width="155.48" height="39.79" />
        </a>
    @endforelse


    @forelse ($siteplan->where('code_product', 'madusaripermataB013') as $hasil)
        @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
            <rect class="cls-6" style="fill:#ffc107;" x="286.11" y="751.82" width="155.48" height="39.79" />
        @elseif ($hasil->status == 'Terjual')
            <rect class="cls-6" style="fill:#f50505;" x="286.11" y="751.82" width="155.48" height="39.79" />
        @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-madusaripermataB013">
                <rect class="cls-6" style="fill: #f8f8f8;" x="286.11" y="751.82" width="155.48"
                    height="39.79" />
            </a>
        @endif
    @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="madusaripermataB013">
            <rect class="cls-6" style="fill: #f8f8f8;" x="286.11" y="751.82" width="155.48" height="39.79" />
        </a>
    @endforelse

    @forelse ($siteplan->where('code_product', 'madusaripermataB014') as $hasil)
        @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
            <rect class="cls-6" style="fill:#ffc107;" x="286.11" y="791.62" width="155.48" height="39.79" />
        @elseif ($hasil->status == 'Terjual')
            <rect class="cls-6" style="fill:#f50505;" x="286.11" y="791.62" width="155.48" height="39.79" />
        @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-madusaripermataB014">
                <rect class="cls-6" style="fill: #f8f8f8;" x="286.11" y="791.62" width="155.48"
                    height="39.79" />
            </a>
        @endif
    @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="madusaripermataB014">
            <rect class="cls-6" style="fill: #f8f8f8;" x="286.11" y="791.62" width="155.48" height="39.79" />
        </a>
    @endforelse


    @forelse ($siteplan->where('code_product', 'madusaripermataB015') as $hasil)
        @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
            <rect class="cls-6" style="fill:#ffc107;" x="286.11" y="831.41" width="155.48" height="39.79" />
        @elseif ($hasil->status == 'Terjual')
            <rect class="cls-6" style="fill:#f50505;" x="286.11" y="831.41" width="155.48" height="39.79" />
        @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-madusaripermataB015">
                <rect class="cls-6" style="fill: #f8f8f8;" x="286.11" y="831.41" width="155.48"
                    height="39.79" />
            </a>
        @endif
    @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="madusaripermataB015">
            <rect class="cls-6" style="fill: #f8f8f8;" x="286.11" y="831.41" width="155.48" height="39.79" />
        </a>
    @endforelse


    <text class="cls-4" transform="translate(334.81 697.33)">BLOK B11</text>
    <text class="cls-4" transform="translate(333.22 736.5)">BLOK B12</text>
    <text class="cls-4" transform="translate(333.1 775.34)">BLOK B13</text>
    <text class="cls-4" transform="translate(332.73 816.93)">BLOK B14</text>
    <text class="cls-4" transform="translate(332.79 855.74)">BLOK B15</text>


    @forelse ($siteplan->where('code_product', 'madusaripermataB016') as $hasil)
        @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
            <rect class="cls-6" style="fill:#ffc107;" x="286.11" y="870.5" width="155.48" height="39.79" />
        @elseif ($hasil->status == 'Terjual')
            <rect class="cls-6" style="fill:#f50505;" x="286.11" y="870.5" width="155.48" height="39.79" />
        @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-madusaripermataB016">
                <rect class="cls-6" style="fill: #f8f8f8;" x="286.11" y="870.5" width="155.48"
                    height="39.79" />
            </a>
        @endif
    @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="madusaripermataB016">
            <rect class="cls-6" style="fill: #f8f8f8;" x="286.11" y="870.5" width="155.48" height="39.79" />
        </a>
    @endforelse


    @forelse ($siteplan->where('code_product', 'madusaripermataB017') as $hasil)
        @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
            <rect class="cls-6" style="fill:#ffc107;" x="286.11" y="910.23" width="155.48" height="39.79" />
        @elseif ($hasil->status == 'Terjual')
            <rect class="cls-6" style="fill:#f50505;" x="286.11" y="910.23" width="155.48" height="39.79" />
        @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-madusaripermataB017">
                <rect class="cls-6" style="fill: #f8f8f8;" x="286.11" y="910.23" width="155.48"
                    height="39.79" />
            </a>
        @endif
    @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="madusaripermataB017">
            <rect class="cls-6" style="fill: #f8f8f8;" x="286.11" y="910.23" width="155.48" height="39.79" />
        </a>
    @endforelse


    @forelse ($siteplan->where('code_product', 'madusaripermataB018') as $hasil)
        @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
            <rect class="cls-6" style="fill:#ffc107; " x="286.11" y="949.32" width="155.48" height="39.79" />
        @elseif ($hasil->status == 'Terjual')
            <rect class="cls-6" style="fill:#f50505;" x="286.11" y="949.32" width="155.48" height="39.79" />
        @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-madusaripermataB018">
                <rect class="cls-6" style="fill: #f8f8f8;" x="286.11" y="949.32" width="155.48"
                    height="39.79" />
            </a>
        @endif
    @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="madusaripermataB018">
            <rect class="cls-6" style="fill: #f8f8f8;" x="286.11" y="949.32" width="155.48" height="39.79" />
        </a>
    @endforelse


    @forelse ($siteplan->where('code_product', 'madusaripermataB019') as $hasil)
        @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
            <rect class="cls-6" style="fill:#ffc107;" x="286.11" y="989.11" width="155.48" height="39.79" />
        @elseif ($hasil->status == 'Terjual')
            <rect class="cls-6" style="fill:#f50505;" x="286.11" y="989.11" width="155.48" height="39.79" />
        @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-madusaripermataB019">
                <rect class="cls-6" style="fill: #f8f8f8;" x="286.11" y="989.11" width="155.48"
                    height="39.79" />
            </a>
        @endif
    @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="madusaripermataB019">
            <rect class="cls-6" style="fill: #f8f8f8;" x="286.11" y="989.11" width="155.48" height="39.79" />
        </a>
    @endforelse


    @forelse ($siteplan->where('code_product', 'madusaripermataB020') as $hasil)
        @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
            <rect class="cls-6" style="fill:#ffc107;" x="286.11" y="1028.9" width="155.48" height="39.79" />
        @elseif ($hasil->status == 'Terjual')
            <rect class="cls-6" style="fill:#f50505;" x="286.11" y="1028.9" width="155.48" height="39.79" />
        @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-madusaripermataB020">
                <rect class="cls-6" style="fill: #f8f8f8;" x="286.11" y="1028.9" width="155.48"
                    height="39.79" />
            </a>
        @endif
    @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="madusaripermataB020">
            <rect class="cls-6" style="fill: #f8f8f8;" x="286.11" y="1028.9" width="155.48" height="39.79" />
        </a>
    @endforelse


    <text class="cls-4" transform="translate(332.77 894.82)">BLOK B16</text>
    <text class="cls-4" transform="translate(333.34 933.99)">BLOK B17</text>
    <text class="cls-4" transform="translate(332.79 972.83)">BLOK B18</text>
    <text class="cls-4" transform="translate(332.81 1014.42)">BLOK B19</text>
    <text class="cls-4" transform="translate(331.18 1053.23)">BLOK B20</text>


    @forelse ($siteplan->where('code_product', 'madusaripermataB021') as $hasil)
        @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
            <rect class="cls-6" style="fill:#ffc107;" x="286.11" y="1068.6" width="155.48" height="39.79" />
        @elseif ($hasil->status == 'Terjual')
            <rect class="cls-6" style="fill:#f50505;" x="286.11" y="1068.6" width="155.48" height="39.79" />
        @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-madusaripermataB021">
                <rect class="cls-6" style="fill: #f8f8f8;" x="286.11" y="1068.6" width="155.48"
                    height="39.79" />
            </a>
        @endif
    @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="madusaripermataB021">
            <rect class="cls-6" style="fill: #f8f8f8;" x="286.11" y="1068.6" width="155.48" height="39.79" />
        </a>
    @endforelse


    @forelse ($siteplan->where('code_product', 'madusaripermataB022') as $hasil)
        @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
            <rect class="cls-6" style="fill:#ffc107;" x="286.11" y="1108.33" width="155.48" height="39.79" />
        @elseif ($hasil->status == 'Terjual')
            <rect class="cls-6" style="fill:#f50505;" x="286.11" y="1108.33" width="155.48" height="39.79" />
        @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-madusaripermataB022">
                <rect class="cls-6" style="fill: #f8f8f8;" x="286.11" y="1108.33" width="155.48"
                    height="39.79" />
            </a>
        @endif
    @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="madusaripermataB022">
            <rect class="cls-6" style="fill: #f8f8f8;" x="286.11" y="1108.33" width="155.48" height="39.79" />
        </a>
    @endforelse


    @forelse ($siteplan->where('code_product', 'madusaripermataB023') as $hasil)
        @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
            <rect class="cls-6" style="fill:#ffc107; " x="286.11" y="1147.42" width="155.48" height="39.79" />
        @elseif ($hasil->status == 'Terjual')
            <rect class="cls-6" style="fill:#f50505;" x="286.11" y="1147.42" width="155.48" height="39.79" />
        @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-madusaripermataB023">
                <rect class="cls-6" style="fill: #f8f8f8;" x="286.11" y="1147.42" width="155.48"
                    height="39.79" />
            </a>
        @endif
    @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="madusaripermataB023">
            <rect class="cls-6" style="fill: #f8f8f8;" x="286.11" y="1147.42" width="155.48" height="39.79" />
        </a>
    @endforelse


    @forelse ($siteplan->where('code_product', 'madusaripermataB024') as $hasil)
        @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
            <rect class="cls-6" style="fill:#ffc107;" x="286.11" y="1187.21" width="155.48" height="39.79" />
        @elseif ($hasil->status == 'Terjual')
            <rect class="cls-6" style="fill:#f50505;" x="286.11" y="1187.21" width="155.48" height="39.79" />
        @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-madusaripermataB024">
                <rect class="cls-6" style="fill: #f8f8f8;" x="286.11" y="1187.21" width="155.48"
                    height="39.79" />
            </a>
        @endif
    @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="madusaripermataB024">
            <rect class="cls-6" style="fill: #f8f8f8;" x="286.11" y="1187.21" width="155.48" height="39.79" />
        </a>
    @endforelse


    @forelse ($siteplan->where('code_product', 'madusaripermataB025') as $hasil)
        @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
            <rect class="cls-6" style="fill:#ffc107;" x="286.11" y="1227.01" width="155.48" height="39.79" />
        @elseif ($hasil->status == 'Terjual')
            <rect class="cls-6" style="fill:#f50505;" x="286.11" y="1227.01" width="155.48" height="39.79" />
        @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-madusaripermataB025">
                <rect class="cls-6" style="fill: #f8f8f8;" x="286.11" y="1227.01" width="155.48"
                    height="39.79" />
            </a>
        @endif
    @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="madusaripermataB025">
            <rect class="cls-6" style="fill: #f8f8f8;" x="286.11" y="1227.01" width="155.48" height="39.79" />
        </a>
    @endforelse



    <text class="cls-4" transform="translate(333.22 1092.92)">BLOK B21</text>
    <text class="cls-4" transform="translate(331.63 1132.09)">BLOK B22</text>
    <text class="cls-4" transform="translate(331.51 1170.93)">BLOK B23</text>
    <text class="cls-4" transform="translate(331.14 1212.52)">BLOK B24</text>
    <text class="cls-4" transform="translate(331.2 1251.33)">BLOK B25</text>


    @forelse ($siteplan->where('code_product', 'madusaripermataB026') as $hasil)
        @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
            <rect class="cls-6" style="fill:#ffc107; " x="286.11" y="1266.09" width="155.48" height="39.79" />
        @elseif ($hasil->status == 'Terjual')
            <rect class="cls-6" style="fill:#f50505;" x="286.11" y="1266.09" width="155.48" height="39.79" />
        @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-madusaripermataB026">
                <rect class="cls-6" style="fill: #f8f8f8;" x="286.11" y="1266.09" width="155.48"
                    height="39.79" />
            </a>
        @endif
    @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="madusaripermataB026">
            <rect class="cls-6" style="fill: #f8f8f8;" x="286.11" y="1266.09" width="155.48" height="39.79" />
        </a>
    @endforelse


    @forelse ($siteplan->where('code_product', 'madusaripermataB027') as $hasil)
        @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
            <rect class="cls-6" style="fill:#ffc107; " x="286.11" y="1305.82" width="155.48" height="39.79" />
        @elseif ($hasil->status == 'Terjual')
            <rect class="cls-6" style="fill:#f50505;" x="286.11" y="1305.82" width="155.48" height="39.79" />
        @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-madusaripermataB027">
                <rect class="cls-6" style="fill: #f8f8f8;" x="286.11" y="1305.82" width="155.48"
                    height="39.79" />
            </a>
        @endif
    @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="madusaripermataB027">
            <rect class="cls-6" style="fill: #f8f8f8;" x="286.11" y="1305.82" width="155.48" height="39.79" />
        </a>
    @endforelse



    @forelse ($siteplan->where('code_product', 'madusaripermataB028') as $hasil)
        @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
            <rect class="cls-6" style="fill:#ffc107; " x="286.11" y="1344.91" width="155.48" height="39.79" />
        @elseif ($hasil->status == 'Terjual')
            <rect class="cls-6" style=" fill:#f50505;" x="286.11" y="1344.91" width="155.48" height="39.79" />
        @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-madusaripermataB028">
                <rect class="cls-6" style="fill: #f8f8f8;" x="286.11" y="1344.91" width="155.48"
                    height="39.79" />
            </a>
        @endif
    @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="madusaripermataB028">
            <rect class="cls-6" style="fill: #f8f8f8;" x="286.11" y="1344.91" width="155.48" height="39.79" />
        </a>
    @endforelse



    @forelse ($siteplan->where('code_product', 'madusaripermataB029') as $hasil)
        @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
            <rect class="cls-6" style="fill:#ffc107; " x="286.11" y="1384.7" width="155.48" height="39.79" />
        @elseif ($hasil->status == 'Terjual')
            <rect class="cls-6" style="fill:#f50505;" x="286.11" y="1384.7" width="155.48" height="39.79" />
        @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-madusaripermataB029">
                <rect class="cls-6" style="fill: #f8f8f8;" x="286.11" y="1384.7" width="155.48"
                    height="39.79" />
            </a>
        @endif
    @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="madusaripermataB029">
            <rect class="cls-6" style="fill: #f8f8f8;" x="286.11" y="1384.7" width="155.48" height="39.79" />
        </a>
    @endforelse


    @forelse ($siteplan->where('code_product', 'madusaripermataB030') as $hasil)
        @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
            <rect class="cls-6" style="fill:#ffc107; " x="286.11" y="1424.5" width="155.48" height="39.79" />
        @elseif ($hasil->status == 'Terjual')
            <rect class="cls-6" style="fill:#f50505;" x="286.11" y="1424.5" width="155.48" height="39.79" />
        @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-madusaripermataB030">
                <rect class="cls-6" style="fill: #f8f8f8;" x="286.11" y="1424.5" width="155.48"
                    height="39.79" />
            </a>
        @endif
    @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="madusaripermataB030">
            <rect class="cls-6" style="fill: #f8f8f8;" x="286.11" y="1424.5" width="155.48" height="39.79" />
        </a>
    @endforelse


    <text class="cls-4" transform="translate(331.18 1290.41)">BLOK B26</text>
    <text class="cls-4" transform="translate(331.75 1329.59)">BLOK B27</text>
    <text class="cls-4" transform="translate(331.2 1368.43)">BLOK B28</text>
    <text class="cls-4" transform="translate(331.23 1410.01)">BLOK B29</text>
    <text class="cls-4" transform="translate(331.06 1448.82)">BLOK B30</text>


    @forelse ($siteplan->where('code_product', 'madusaripermataB031') as $hasil)
        @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
            <rect class="cls-6" style=" fill:#ffc107; " x="286.11" y="1459.07" width="155.48" height="39.79" />
        @elseif ($hasil->status == 'Terjual')
            <rect class="cls-6" style="fill:#f50505;" x="286.11" y="1459.07" width="155.48" height="39.79" />
        @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-madusaripermataB031">
                <rect class="cls-6" style="fill: #f8f8f8;" x="286.11" y="1459.07" width="155.48"
                    height="39.79" />
            </a>
        @endif
    @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="madusaripermataB031">
            <rect class="cls-6" style="fill: #f8f8f8;" x="286.11" y="1459.07" width="155.48" height="39.79" />
        </a>
    @endforelse


    @forelse ($siteplan->where('code_product', 'madusaripermataB032') as $hasil)
        @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
            <rect class="cls-6" style="fill:#ffc107; " x="286.11" y="1498.81" width="155.48" height="39.79" />
        @elseif ($hasil->status == 'Terjual')
            <rect class="cls-6" style="fill:#f50505;" x="286.11" y="1498.81" width="155.48" height="39.79" />
        @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-madusaripermataB032">
                <rect class="cls-6" style="fill: #f8f8f8;" x="286.11" y="1498.81" width="155.48"
                    height="39.79" />
            </a>
        @endif
    @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="madusaripermataB032">
            <rect class="cls-6" style="fill: #f8f8f8;" x="286.11" y="1498.81" width="155.48" height="39.79" />
        </a>
    @endforelse


    @forelse ($siteplan->where('code_product', 'madusaripermataB033') as $hasil)
        @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
            <rect class="cls-6" style="fill:#ffc107; " x="286.11" y="1537.89" width="155.48" height="39.79" />
        @elseif ($hasil->status == 'Terjual')
            <rect class="cls-6" style="fill:#f50505;" x="286.11" y="1537.89" width="155.48" height="39.79" />
        @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-madusaripermataB033">
                <rect class="cls-6" style="fill: #f8f8f8;" x="286.11" y="1537.89" width="155.48"
                    height="39.79" />
            </a>
        @endif
    @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="madusaripermataB033">
            <rect class="cls-6" style="fill: #f8f8f8;" x="286.11" y="1537.89" width="155.48" height="39.79" />
        </a>
    @endforelse



    @forelse ($siteplan->where('code_product', 'madusaripermataB034') as $hasil)
        @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
            <rect class="cls-6" style="fill:#ffc107; " x="286.11" y="1577.68" width="155.48" height="39.79" />
        @elseif ($hasil->status == 'Terjual')
            <rect class="cls-6" style="fill:#f50505;" x="286.11" y="1577.68" width="155.48" height="39.79" />
        @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-madusaripermataB034">
                <rect class="cls-6" style="fill: #f8f8f8;" x="286.11" y="1577.68" width="155.48"
                    height="39.79" />
            </a>
        @endif
    @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="madusaripermataB034">
            <rect class="cls-6" style="fill: #f8f8f8;" x="286.11" y="1577.68" width="155.48" height="39.79" />
        </a>
    @endforelse


    @forelse ($siteplan->where('code_product', 'madusaripermataB035') as $hasil)
        @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
            <rect class="cls-6" style="fill:#ffc107; " x="286.11" y="1617.48" width="155.48" height="39.79" />
        @elseif ($hasil->status == 'Terjual')
            <rect class="cls-6" style="fill:#f50505;" x="286.11" y="1617.48" width="155.48" height="39.79" />
        @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-madusaripermataB035">
                <rect class="cls-6" style="fill: #f8f8f8;" x="286.11" y="1617.48" width="155.48"
                    height="39.79" />
            </a>
        @endif
    @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="madusaripermataB035">
            <rect class="cls-6" style="fill: #f8f8f8;" x="286.11" y="1617.48" width="155.48" height="39.79" />
        </a>
    @endforelse


    <text class="cls-4" transform="translate(333.1 1483.4)">BLOK B31</text>
    <text class="cls-4" transform="translate(331.51 1522.57)">BLOK B32</text>
    <text class="cls-4" transform="translate(331.39 1561.41)">BLOK B33</text>
    <text class="cls-4" transform="translate(331.02 1602.99)">BLOK B34</text>
    <text class="cls-4" transform="translate(331.08 1641.8)">BLOK B35</text>


    @forelse ($siteplan->where('code_product', 'madusaripermataB036') as $hasil)
        @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
            <rect class="cls-6" style="fill:#ffc107; " x="286.11" y="1656.56" width="155.48" height="39.79" />
        @elseif ($hasil->status == 'Terjual')
            <rect class="cls-6" style="fill:#f50505;" x="286.11" y="1656.56" width="155.48" height="39.79" />
        @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-madusaripermataB036">
                <rect class="cls-6" style="fill: #f8f8f8;" x="286.11" y="1656.56" width="155.48"
                    height="39.79" />
            </a>
        @endif
    @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="madusaripermataB036">
            <rect class="cls-6" style="fill: #f8f8f8;" x="286.11" y="1656.56" width="155.48" height="39.79" />
        </a>
    @endforelse


    @forelse ($siteplan->where('code_product', 'madusaripermataB037') as $hasil)
        @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
            <rect class="cls-6" style="fill:#ffc107;" x="286.11" y="1696.3" width="155.48" height="39.79" />
        @elseif ($hasil->status == 'Terjual')
            <rect class="cls-6" style="fill:#f50505;" x="286.11" y="1696.3" width="155.48" height="39.79" />
        @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-madusaripermataB037">
                <rect class="cls-6" style="fill: #f8f8f8;" x="286.11" y="1696.3" width="155.48"
                    height="39.79" />
            </a>
        @endif
    @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="madusaripermataB037">
            <rect class="cls-6" style="fill: #f8f8f8;" x="286.11" y="1696.3" width="155.48" height="39.79" />
        </a>
    @endforelse


    @forelse ($siteplan->where('code_product', 'madusaripermataB038') as $hasil)
        @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
            <rect class="cls-6" style="fill:#ffc107;" x="286.11" y="1735.38" width="155.48" height="39.79" />
        @elseif ($hasil->status == 'Terjual')
            <rect class="cls-6" style=" fill:#f50505;" x="286.11" y="1735.38" width="155.48" height="39.79" />
        @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-madusaripermataB038">
                <rect class="cls-6" style="fill: #f8f8f8;" x="286.11" y="1735.38" width="155.48"
                    height="39.79" />
            </a>
        @endif
    @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="madusaripermataB038">
            <rect class="cls-6" style="fill: #f8f8f8;" x="286.11" y="1735.38" width="155.48" height="39.79" />
        </a>
    @endforelse


    @forelse ($siteplan->where('code_product', 'madusaripermataB039') as $hasil)
        @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
            <rect class="cls-6" style="fill:#ffc107; " x="286.11" y="1775.18" width="155.48" height="39.79" />
        @elseif ($hasil->status == 'Terjual')
            <rect class="cls-6" style=" fill:#f50505;" x="286.11" y="1775.18" width="155.48" height="39.79" />
        @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-madusaripermataB039">
                <rect class="cls-6" style="fill: #f8f8f8;" x="286.11" y="1775.18" width="155.48"
                    height="39.79" />
            </a>
        @endif
    @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="madusaripermataB039">
            <rect class="cls-6" style="fill: #f8f8f8;" x="286.11" y="1775.18" width="155.48" height="39.79" />
        </a>
    @endforelse


    @forelse ($siteplan->where('code_product', 'madusaripermataB040') as $hasil)
        @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
            <rect class="cls-6" style="fill:#ffc107; " x="286.11" y="1814.97" width="155.48" height="39.79" />
        @elseif ($hasil->status == 'Terjual')
            <rect class="cls-6" style="fill:#f50505;" x="286.11" y="1814.97" width="155.48" height="39.79" />
        @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-madusaripermataB040">
                <rect class="cls-6" style="fill: #f8f8f8;" x="286.11" y="1814.97" width="155.48"
                    height="39.79" />
            </a>
        @endif
    @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="madusaripermataB040">
            <rect class="cls-6" style="fill: #f8f8f8;" x="286.11" y="1814.97" width="155.48" height="39.79" />
        </a>
    @endforelse


    <text class="cls-4" transform="translate(331.06 1680.89)">BLOK B36</text>
    <text class="cls-4" transform="translate(331.63 1720.06)">BLOK B37</text>
    <text class="cls-4" transform="translate(331.09 1758.9)">BLOK B38</text>
    <text class="cls-4" transform="translate(331.11 1800.48)">BLOK B39</text>
    <text class="cls-4" transform="translate(330.69 1839.29)">BLOK B40</text>


    @forelse ($siteplan->where('code_product', 'madusaripermataB041') as $hasil)
        @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
            <rect class="cls-6" style="fill:#ffc107; " x="286.11" y="1854.77" width="155.48" height="39.79" />
        @elseif ($hasil->status == 'Terjual')
            <rect class="cls-6" style="fill:#f50505;" x="286.11" y="1854.77" width="155.48" height="39.79" />
        @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-madusaripermataB041">
                <rect class="cls-6" style="fill: #f8f8f8;" x="286.11" y="1854.77" width="155.48"
                    height="39.79" />
            </a>
        @endif
    @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="madusaripermataB041">
            <rect class="cls-6" style="fill: #f8f8f8;" x="286.11" y="1854.77" width="155.48" height="39.79" />
        </a>
    @endforelse


    @forelse ($siteplan->where('code_product', 'madusaripermataB042') as $hasil)
        @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
            <rect class="cls-6" style="fill:#ffc107; " x="286.11" y="1894.5" width="155.48" height="39.79" />
        @elseif ($hasil->status == 'Terjual')
            <rect class="cls-6" style="fill:#f50505;" x="286.11" y="1894.5" width="155.48" height="39.79" />
        @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-madusaripermataB042">
                <rect class="cls-6" style="fill: #f8f8f8;" x="286.11" y="1894.5" width="155.48"
                    height="39.79" />
            </a>
        @endif
    @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="madusaripermataB042">
            <rect class="cls-6" style="fill: #f8f8f8;" x="286.11" y="1894.5" width="155.48" height="39.79" />
        </a>
    @endforelse



    @forelse ($siteplan->where('code_product', 'madusaripermataB043') as $hasil)
        @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
            <rect class="cls-6" style="fill:#ffc107; " x="286.11" y="1933.58" width="155.48" height="39.79" />
        @elseif ($hasil->status == 'Terjual')
            <rect class="cls-6" style="fill:#f50505;" x="286.11" y="1933.58" width="155.48" height="39.79" />
        @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-madusaripermataB043">
                <rect class="cls-6" style="fill: #f8f8f8;" x="286.11" y="1933.58" width="155.48"
                    height="39.79" />
            </a>
        @endif
    @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="madusaripermataB043">
            <rect class="cls-6" style="fill: #f8f8f8;" x="286.11" y="1933.58" width="155.48" height="39.79" />
        </a>
    @endforelse


    @forelse ($siteplan->where('code_product', 'madusaripermataB044') as $hasil)
        @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
            <rect class="cls-6" style="fill:#ffc107;" x="286.11" y="1973.38" width="155.48" height="39.79" />
        @elseif ($hasil->status == 'Terjual')
            <rect class="cls-6" style="fill:#f50505;" x="286.11" y="1973.38" width="155.48" height="39.79" />
        @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-madusaripermataB044">
                <rect class="cls-6" style="fill: #f8f8f8;" x="286.11" y="1973.38" width="155.48"
                    height="39.79" />
            </a>
        @endif
    @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="madusaripermataB044">
            <rect class="cls-6" style="fill: #f8f8f8;" x="286.11" y="1973.38" width="155.48" height="39.79" />
        </a>
    @endforelse



    @forelse ($siteplan->where('code_product', 'madusaripermataB045') as $hasil)
        @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
            <rect class="cls-6" style="fill:#ffc107; " x="286.11" y="2013.17" width="155.48" height="39.79" />
        @elseif ($hasil->status == 'Terjual')
            <rect class="cls-6" style="fill:#f50505;" x="286.11" y="2013.17" width="155.48" height="39.79" />
        @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-madusaripermataB045">
                <rect class="cls-6" style="fill: #f8f8f8;" x="286.11" y="2013.17" width="155.48"
                    height="39.79" />
            </a>
        @endif
    @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="madusaripermataB045">
            <rect class="cls-6" style="fill: #f8f8f8;" x="286.11" y="2013.17" width="155.48" height="39.79" />
        </a>
    @endforelse


    @forelse ($siteplan->where('code_product', 'madusaripermataB046') as $hasil)
        @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
            <rect class="cls-6" style="fill:#ffc107; " x="286.11" y="2052.26" width="155.48" height="39.79" />
        @elseif ($hasil->status == 'Terjual')
            <rect class="cls-6" style="fill:#f50505;" x="286.11" y="2052.26" width="155.48" height="39.79" />
        @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-madusaripermataB046">
                <rect class="cls-6" style="fill: #f8f8f8;" x="286.11" y="2052.26" width="155.48"
                    height="39.79" />
            </a>
        @endif
    @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="madusaripermataB046">
            <rect class="cls-6" style="fill: #f8f8f8;" x="286.11" y="2052.26" width="155.48" height="39.79" />
        </a>
    @endforelse


    <text class="cls-4" transform="translate(332.73 1879.09)">BLOK B41</text>
    <text class="cls-4" transform="translate(331.14 1918.26)">BLOK B42</text>
    <text class="cls-4" transform="translate(331.02 1957.1)">BLOK B43</text>
    <text class="cls-4" transform="translate(330.65 1998.69)">BLOK B44</text>
    <text class="cls-4" transform="translate(330.71 2037.5)">BLOK B45</text>
    <text class="cls-4" transform="translate(330.69 2076.58)">BLOK B46</text>

    <rect class="cls-1" y="2092.08" width="537.84" height="34.68" /><text class="cls-2"
        transform="translate(50.67 2115.05)">Jalan Utama Desa</text><text class="cls-2"
        transform="translate(325.03 2115.25)">Jalan Utama Desa</text>
    <rect class="cls-5" x="216.06" y="2108.73" width="22.55" height="2.04" />
    <rect class="cls-5" x="252.18" y="2108.73" width="22.55" height="2.04" />
    <rect class="cls-5" x="288.31" y="2108.73" width="22.55" height="2.04" />
    <rect class="cls-5" x="15.35" y="2109.76" width="22.55" height="2.04" />
    <rect class="cls-5" x="492.93" y="2109.76" width="22.55" height="2.04" /><text class="cls-2"
        transform="translate(272.46 622.93) rotate(-90)">Jalan Komplek 5 Meter</text><text class="cls-2"
        transform="translate(272.46 1247.85) rotate(-90)">Jalan Komplek 5 Meter</text><text class="cls-2"
        transform="translate(272.46 1872.76) rotate(-90)">Jalan Komplek 5 Meter</text>


    @forelse ($siteplan->where('code_product', 'madusaripermataRuko1') as $hasil)
        @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
            <rect class="cls-7" style="fill:#ffc107; " x="286.73" y="33.98" width="38.71" height="248.55" />
        @elseif ($hasil->status == 'Terjual')
            <rect class="cls-7" style=" fill:#f50505;" x="286.73" y="33.98" width="38.71" height="248.55" />
        @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-madusaripermataRuko1">
                <rect class="cls-7" style="fill: #f8f8f8;" x="286.73" y="33.98" width="38.71"
                    height="248.55" />
            </a>
        @endif
    @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="madusaripermataRuko1">
            <rect class="cls-7" style="fill: #f8f8f8;" x="286.73" y="33.98" width="38.71" height="248.55" />
        </a>
    @endforelse


    @forelse ($siteplan->where('code_product', 'madusaripermataRuko2') as $hasil)
        @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
            <rect class="cls-7" style="fill:#ffc107;" x="325.44" y="33.98" width="38.71" height="248.55" />
        @elseif ($hasil->status == 'Terjual')
            <rect class="cls-7" style="fill:#f50505;" x="325.44" y="33.98" width="38.71" height="248.55" />
        @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-madusaripermataRuko2">
                <rect class="cls-7" style="fill: #f8f8f8;" x="325.44" y="33.98" width="38.71"
                    height="248.55" />
            </a>
        @endif
    @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="madusaripermataRuko2">
            <rect class="cls-7" style="fill: #f8f8f8;" x="325.44" y="33.98" width="38.71" height="248.55" />
        </a>
    @endforelse


    @forelse ($siteplan->where('code_product', 'madusaripermataRuko3') as $hasil)
        @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
            <rect class="cls-7" style="fill:#ffc107; " x="364.16" y="33.98" width="38.71" height="248.55" />
        @elseif ($hasil->status == 'Terjual')
            <rect class="cls-7" style="fill:#f50505;" x="364.16" y="33.98" width="38.71" height="248.55" />
        @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-madusaripermataRuko3">
                <rect class="cls-7" style="fill: #f8f8f8;" x="364.16" y="33.98" width="38.71"
                    height="248.55" />
            </a>
        @endif
    @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="madusaripermataRuko3">
            <rect class="cls-7" style="fill: #f8f8f8;" x="364.16" y="33.98" width="38.71" height="248.55" />
        </a>
    @endforelse



    @forelse ($siteplan->where('code_product', 'madusaripermataRuko4') as $hasil)
        @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
            <rect class="cls-7" style="fill:#ffc107; " x="402.87" y="33.98" width="38.71" height="248.55" />
        @elseif ($hasil->status == 'Terjual')
            <rect class="cls-7" style="fill:#f50505;" x="402.87" y="33.98" width="38.71" height="248.55" />
        @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-madusaripermataRuko4">
                <rect class="cls-7" style="fill: #f8f8f8;" x="402.87" y="33.98" width="38.71"
                    height="248.55" />
            </a>
        @endif
    @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="madusaripermataRuko4">
            <rect class="cls-7" style="fill: #f8f8f8;" x="402.87" y="33.98" width="38.71" height="248.55" />
        </a>
    @endforelse



    @forelse ($siteplan->where('code_product', 'madusaripermataRuko5') as $hasil)
        @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
            <rect class="cls-7" style="fill:#ffc107;" x="96.59" y="33.98" width="38.71" height="248.55" />
        @elseif ($hasil->status == 'Terjual')
            <rect class="cls-7" style="fill:#f50505;" x="96.59" y="33.98" width="38.71" height="248.55" />
        @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-madusaripermataRuko5">
                <rect class="cls-7" style="fill: #f8f8f8;" x="96.59" y="33.98" width="38.71"
                    height="248.55" />
            </a>
        @endif
    @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="madusaripermataRuko5">
            <rect class="cls-7" style="fill: #f8f8f8;" x="96.59" y="33.98" width="38.71" height="248.55" />
        </a>
    @endforelse


    @forelse ($siteplan->where('code_product', 'madusaripermataRuko6') as $hasil)
        @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
            <rect class="cls-7" style="fill:#ffc107; " x="135.31" y="33.98" width="38.71" height="248.55" />
        @elseif ($hasil->status == 'Terjual')
            <rect class="cls-7" style="fill:#f50505;" x="135.31" y="33.98" width="38.71" height="248.55" />
        @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-madusaripermataRuko6">
                <rect class="cls-7" style="fill: #f8f8f8;" x="135.31" y="33.98" width="38.71"
                    height="248.55" />
            </a>
        @endif
    @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="madusaripermataRuko6">
            <rect class="cls-7" style="fill: #f8f8f8;" x="135.31" y="33.98" width="38.71" height="248.55" />
        </a>
    @endforelse


    @forelse ($siteplan->where('code_product', 'madusaripermataRuko7') as $hasil)
        @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
            <rect class="cls-7" style="fill:#ffc107; " x="174.02" y="33.98" width="38.71" height="248.55" />
        @elseif ($hasil->status == 'Terjual')
            <rect class="cls-7" style="fill:#f50505;" x="174.02" y="33.98" width="38.71" height="248.55" />
        @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-madusaripermataRuko7">
                <rect class="cls-7" style="fill: #f8f8f8;" x="174.02" y="33.98" width="38.71"
                    height="248.55" />
            </a>
        @endif
    @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="madusaripermataRuko7">
            <rect class="cls-7" style="fill: #f8f8f8;" x="174.02" y="33.98" width="38.71" height="248.55" />
        </a>
    @endforelse


    @forelse ($siteplan->where('code_product', 'madusaripermataRuko8') as $hasil)
        @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
            <rect class="cls-7" style="fill:#ffc107; " x="212.74" y="33.98" width="38.71" height="248.55" />
        @elseif ($hasil->status == 'Terjual')
            <rect class="cls-7" style="fill:#f50505;" x="212.74" y="33.98" width="38.71" height="248.55" />
        @elseif ($hasil->status == 'Tersedia')
            <a href="#" data-toggle="modal" data-target="#modalBooking-madusaripermataRuko8">
                <rect class="cls-7" style="fill: #f8f8f8;" x="212.74" y="33.98" width="38.71"
                    height="248.55" />
            </a>
        @endif
    @empty
        <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="madusaripermataRuko8">
            <rect class="cls-7" style="fill: #f8f8f8;" x="212.74" y="33.98" width="38.71" height="248.55" />
        </a>
    @endforelse



    <text class="cls-4" transform="translate(311.91 183.44) rotate(-90)">RUKO B1</text>
    <text class="cls-4" transform="translate(350.83 184.81) rotate(-90)">RUKO B2</text>
    <text class="cls-4" transform="translate(389.14 184.91) rotate(-90)">RUKO B3</text>
    <text class="cls-4" transform="translate(428.06 185.23) rotate(-90)">RUKO B4</text>
    <text class="cls-4" transform="translate(122.75 183.02) rotate(-90)">RUKO A4</text>
    <text class="cls-4" transform="translate(161.67 184.38) rotate(-90)">RUKO A3</text>
    <text class="cls-4" transform="translate(199.97 184.48) rotate(-90)">RUKO A2</text>
    <text class="cls-4" transform="translate(238.89 184.8) rotate(-90)">RUKO A1</text>
</svg>
