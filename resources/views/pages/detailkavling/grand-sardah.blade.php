<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
    viewBox="0 0 595.28 1244.34" style="enable-background:new 0 0 595.28 1244.34;" xml:space="preserve">
    <style type="text/css">
        .st0 {
            fill: #969696;
        }

        .st1 {
            font-family: 'Poppins-ExtraBold';
        }

        .st2 {
            font-size: 15.848px;
        }

        .st3 {
            font-size: 15.8481px;
        }

        .st4 {
            fill: #39B54A;
            stroke: #000000;
            stroke-miterlimit: 10;
        }

        .st5 {
            fill: #FFF200;
            stroke: #000000;
            stroke-miterlimit: 10;
        }

        .st6 {
            fill: #F7941D;
            stroke: #000000;
            stroke-miterlimit: 10;
        }

        .st7 {
            font-family: 'Poppins-Medium';
        }

        .st8 {
            font-size: 14px;
        }

        .st9 {
            fill: none;
        }

        .st10 {
            fill: #FBB040;
            stroke: #000000;
            stroke-miterlimit: 10;
        }

        .st11 {
            fill: #8DC63F;
            stroke: #000000;
            stroke-miterlimit: 10;
        }

        .st12 {
            fill: #00AEEF;
            stroke: #000000;
            stroke-miterlimit: 10;
        }

        .st13 {
            fill: #D7DF23;
            stroke: #000000;
            stroke-miterlimit: 10;
        }

        .st14 {
            fill: #FFFFFF;
        }
    </style>
    <g id="Layer_1">

        <rect x="-164.6" y="630.01" transform="matrix(-3.918237e-08 -1 1 -3.918237e-08 -239.0013 1046.2457)"
            class="st0" width="1136.44" height="25.23" />
        <rect x="34.07" y="39.11" class="st0" width="537.84" height="34.68" />
        <text transform="matrix(1 0 0 1 84.7457 62.0867)" class="st1 st2">JALAN HASANUDDIN </text>
        <text transform="matrix(1 0 0 1 378.0994 64.2808)" class="st1 st3">SUNGAI BEMBAN</text>
        <rect x="89.62" y="74.62" class="st4" width="303.37" height="56.76" />
        <rect x="417.24" y="74.4" class="st4" width="93.35" height="56.76" />

        {{-- st5 RUko --}}
        @forelse ($siteplan->where('code_product', 'grandsardahruko3') as $hasil)
            @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <rect x="417.12" y="131.19" style="fill:#ffc107; stroke:#000000;stroke-miterlimit:10;" width="31.19"
                    height="100.05" />
            @elseif ($hasil->status == 'Terjual')
                <rect x="417.12" y="131.19" style="fill:#f50505; stroke:#000000;stroke-miterlimit:10;" width="31.19"
                    height="100.05" />
            @elseif ($hasil->status == 'Tersedia')
                <a href="#" data-toggle="modal" data-target="#modalBooking-grandsardahruko3">
                    <rect x="417.12" y="131.19" style="fill:#ffff; stroke:#000000;stroke-miterlimit:10;" width="31.19"
                        height="100.05" />
                </a>
            @endif
        @empty
            <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="grandsardahruko3">
                <rect x="417.12" y="131.19" style="fill:#ffff; stroke:#000000;stroke-miterlimit:10;" width="31.19"
                    height="100.05" />
            </a>
        @endforelse


        @forelse ($siteplan->where('code_product', 'grandsardahruko2') as $hasil)
            @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <rect x="448.31" y="131.19" style="fill:#ffc107; stroke:#000000;stroke-miterlimit:10;" width="31.19"
                    height="100.05" />
            @elseif ($hasil->status == 'Terjual')
                <rect x="448.31" y="131.19" style="  fill:#f50505; stroke:#000000;stroke-miterlimit:10;" width="31.19"
                    height="100.05" />
            @elseif ($hasil->status == 'Tersedia')
                <a href="#" data-toggle="modal" data-target="#modalBooking-grandsardahruko2">
                    <rect x="448.31" y="131.19" style="fill:#ffff;stroke:#000000;stroke-miterlimit:10;" width="31.19"
                        height="100.05" />
                </a>
            @endif
        @empty
            <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="grandsardahruko2">
                <rect x="448.31" y="131.19" style="fill:#ffff;stroke:#000000;stroke-miterlimit:10;" width="31.19"
                    height="100.05" />
            </a>
        @endforelse


        @forelse ($siteplan->where('code_product', 'grandsardahruko1') as $hasil)
            @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <rect x="479.73" y="131.19" style="fill:#ffc107; stroke:#000000;stroke-miterlimit:10;}" width="31.19"
                    height="100.05" />
            @elseif ($hasil->status == 'Terjual')
                <rect x="479.73" y="131.19" style=" fill:#f50505; stroke:#000000;stroke-miterlimit:10;}" width="31.19"
                    height="100.05" />
            @elseif ($hasil->status == 'Tersedia')
                <a href="#" data-toggle="modal" data-target="#modalBooking-grandsardahruko1">
                    <rect x="479.73" y="131.19" style="fill:#ffff;stroke:#000000;stroke-miterlimit:10;}" width="31.19"
                        height="100.05" />
                </a>
            @endif
        @empty
            <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="grandsardahruko1">
                <rect x="479.73" y="131.19" style="fill:#ffff;stroke:#000000;stroke-miterlimit:10;}" width="31.19"
                    height="100.05" />
            </a>
        @endforelse

        @forelse ($siteplan->where('code_product', 'grandsardahruko6') as $hasil)
            @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <rect x="291.11" y="131.19" style="fill:#ffc107;stroke:#000000;stroke-miterlimit:10;}" width="34.18"
                    height="100.05" />
            @elseif ($hasil->status == 'Terjual')
                <rect x="291.11" y="131.19" style="fill:#f50505;stroke:#000000;stroke-miterlimit:10;}" width="34.18"
                    height="100.05" />
            @elseif ($hasil->status == 'Tersedia')
                <a href="#" data-toggle="modal" data-target="#modalBooking-grandsardahruko6">
                    <rect x="291.11" y="131.19" style="fill:#ffff;stroke:#000000;stroke-miterlimit:10;}" width="34.18"
                        height="100.05" />
                </a>
            @endif
        @empty
            <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="grandsardahruko6">
                <rect x="291.11" y="131.19" style="fill:#ffff;stroke:#000000;stroke-miterlimit:10;}" width="34.18"
                    height="100.05" />
            </a>
        @endforelse

        @forelse ($siteplan->where('code_product', 'grandsardahruko5') as $hasil)
            @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <rect x="324.56" y="131.19" style="fill:#ffc107;stroke:#000000;stroke-miterlimit:10;}" width="34.18"
                    height="100.05" />
            @elseif ($hasil->status == 'Terjual')
                <rect x="324.56" y="131.19" style="fill:#f50505;stroke:#000000;stroke-miterlimit:10;}" width="34.18"
                    height="100.05" />
            @elseif ($hasil->status == 'Tersedia')
                <a href="#" data-toggle="modal" data-target="#modalBooking-grandsardahruko5">
                    <rect x="324.56" y="131.19" style="fill:#ffff;stroke:#000000;stroke-miterlimit:10;}"
                        width="34.18" height="100.05" />
                </a>
            @endif
        @empty
            <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="grandsardahruko5">
                <rect x="324.56" y="131.19" style="fill:#ffff;stroke:#000000;stroke-miterlimit:10;}" width="34.18"
                    height="100.05" />
            </a>
        @endforelse


        @forelse ($siteplan->where('code_product', 'grandsardahruko4') as $hasil)
            @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <rect x="358.56" y="131.19" style="fill:#ffc107;stroke:#000000;stroke-miterlimit:10;}" width="34.18"
                    height="100.05" />
            @elseif ($hasil->status == 'Terjual')
                <rect x="358.56" y="131.19" style="fill:#f50505;stroke:#000000;stroke-miterlimit:10;}" width="34.18"
                    height="100.05" />
            @elseif ($hasil->status == 'Tersedia')
                <a href="#" data-toggle="modal" data-target="#modalBooking-grandsardahruko4">
                    <rect x="358.56" y="131.19" style="fill:#ffff;stroke:#000000;stroke-miterlimit:10;}"
                        width="34.18" height="100.05" />
                </a>
            @endif
        @empty
            <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="grandsardahruko4">
                <rect x="358.56" y="131.19" style="fill:#ffff;stroke:#000000;stroke-miterlimit:10;}" width="34.18"
                    height="100.05" />
            </a>
        @endforelse

        @forelse ($siteplan->where('code_product', 'grandsardahruko9') as $hasil)
            @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <rect x="189.97" y="131.19" style="fill:#ffc107;stroke:#000000;stroke-miterlimit:10;}" width="34.18"
                    height="100.05" />
            @elseif ($hasil->status == 'Terjual')
                <rect x="189.97" y="131.19" style="fill:#f50505;stroke:#000000;stroke-miterlimit:10;}" width="34.18"
                    height="100.05" />
            @elseif ($hasil->status == 'Tersedia')
                <a href="#" data-toggle="modal" data-target="#modalBooking-grandsardahruko9">
                    <rect x="189.97" y="131.19" style="fill:#ffff;stroke:#000000;stroke-miterlimit:10;}"
                        width="34.18" height="100.05" />
                </a>
            @endif
        @empty
            <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="grandsardahruko9">
                <rect x="189.97" y="131.19" style="fill:#ffff;stroke:#000000;stroke-miterlimit:10;}" width="34.18"
                    height="100.05" />
            </a>
        @endforelse

        @forelse ($siteplan->where('code_product', 'grandsardahruko8') as $hasil)
            @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <rect x="223.53" y="131.19" style="fill:#ffc107;stroke:#000000;stroke-miterlimit:10;}" width="34.18"
                    height="100.05" />
            @elseif ($hasil->status == 'Terjual')
                <rect x="223.53" y="131.19" style="fill:#f50505;stroke:#000000;stroke-miterlimit:10;}" width="34.18"
                    height="100.05" />
            @elseif ($hasil->status == 'Tersedia')
                <a href="#" data-toggle="modal" data-target="#modalBooking-grandsardahruko8">
                    <rect x="223.53" y="131.19" style="fill:#ffff;stroke:#000000;stroke-miterlimit:10;}"
                        width="34.18" height="100.05" />
                </a>
            @endif
        @empty
            <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="grandsardahruko8">
                <rect x="223.53" y="131.19" style="fill:#ffff;stroke:#000000;stroke-miterlimit:10;}" width="34.18"
                    height="100.05" />
            </a>
        @endforelse


        @forelse ($siteplan->where('code_product', 'grandsardahruko7') as $hasil)
            @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <rect x="257.86" y="131.19" style="fill:#ffc107;stroke:#000000;stroke-miterlimit:10;}" width="34.18"
                    height="100.05" />
            @elseif ($hasil->status == 'Terjual')
                <rect x="257.86" y="131.19" style="fill:#f50505;stroke:#000000;stroke-miterlimit:10;}" width="34.18"
                    height="100.05" />
            @elseif ($hasil->status == 'Tersedia')
                <a href="#" data-toggle="modal" data-target="#modalBooking-grandsardahruko7">
                    <rect x="257.86" y="131.19" style="fill:#ffff;stroke:#000000;stroke-miterlimit:10;}"
                        width="34.18" height="100.05" />
                </a>
            @endif
        @empty
            <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="grandsardahruko7">
                <rect x="257.86" y="131.19" style="fill:#ffff;stroke:#000000;stroke-miterlimit:10;}" width="34.18"
                    height="100.05" />
            </a>
        @endforelse



        @forelse ($siteplan->where('code_product', 'grandsardahruko12') as $hasil)
            @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <rect x="89.31" y="131.19" style="fill:#ffc107;stroke:#000000;stroke-miterlimit:10;}" width="34.18"
                    height="100.05" />
            @elseif ($hasil->status == 'Terjual')
                <rect x="89.31" y="131.19" style="fill:#f50505;stroke:#000000;stroke-miterlimit:10;}" width="34.18"
                    height="100.05" />
            @elseif ($hasil->status == 'Tersedia')
                <a href="#" data-toggle="modal" data-target="#modalBooking-grandsardahruko12">
                    <rect x="89.31" y="131.19" style="fill:#ffff;stroke:#000000;stroke-miterlimit:10;}" width="34.18"
                        height="100.05" />
                </a>
            @endif
        @empty
            <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="grandsardahruko12">
                <rect x="89.31" y="131.19" style="fill:#ffff;stroke:#000000;stroke-miterlimit:10;}" width="34.18"
                    height="100.05" />
            </a>
        @endforelse

        @forelse ($siteplan->where('code_product', 'grandsardahruko11') as $hasil)
            @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <rect x="122.72" y="131.19" style="fill:#ffc107;stroke:#000000;stroke-miterlimit:10;}" width="34.18"
                    height="100.05" />
            @elseif ($hasil->status == 'Terjual')
                <rect x="122.72" y="131.19" style="fill:#f50505;stroke:#000000;stroke-miterlimit:10;}" width="34.18"
                    height="100.05" />
            @elseif ($hasil->status == 'Tersedia')
                <a href="#" data-toggle="modal" data-target="#modalBooking-grandsardahruko11">
                    <rect x="122.72" y="131.19" style="fill:#ffff;stroke:#000000;stroke-miterlimit:10;}"
                        width="34.18" height="100.05" />
                </a>
            @endif
        @empty
            <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="grandsardahruko11">
                <rect x="122.72" y="131.19" style="fill:#ffff;stroke:#000000;stroke-miterlimit:10;}" width="34.18"
                    height="100.05" />
            </a>
        @endforelse

        @forelse ($siteplan->where('code_product', 'grandsardahruko10') as $hasil)
            @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <rect x="156.98" y="131.19" style="fill:#ffc107;stroke:#000000;stroke-miterlimit:10;}" width="34.18"
                    height="100.05" />
            @elseif ($hasil->status == 'Terjual')
                <rect x="156.98" y="131.19" style="fill:#f50505;stroke:#000000;stroke-miterlimit:10;}" width="34.18"
                    height="100.05" />
            @elseif ($hasil->status == 'Tersedia')
                <a href="#" data-toggle="modal" data-target="#modalBooking-grandsardahruko10">
                    <rect x="156.98" y="131.19" style="fill:#ffff;stroke:#000000;stroke-miterlimit:10;}"
                        width="34.18" height="100.05" />
                </a>
            @endif
        @empty
            <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="grandsardahruko10">
                <rect x="156.98" y="131.19" style="fill:#ffff;stroke:#000000;stroke-miterlimit:10;}" width="34.18"
                    height="100.05" />
            </a>
        @endforelse
        {{-- st5 end --}}


        {{-- st4 Gedung Serbaguna --}}
        <rect x="89.2" y="231.49" style="  fill: #39B54A; stroke: #000000;stroke-miterlimit: 10;" width="303.65"
            height="159.18" />
        {{-- ST 4 END --}}

        {{-- ST 6 Rumah --}}
        @forelse ($siteplan->where('code_product', '12345') as $hasil)
            @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <rect x="417.12" y="232.26" style="fill:#ffc107;stroke:#000000;stroke-miterlimit:10;}" width="93.35"
                    height="39.79" />
            @elseif ($hasil->status == 'Terjual')
                <rect x="417.12" y="232.26" style="fill:#f50505;stroke:#000000;stroke-miterlimit:10;}" width="93.35"
                    height="39.79" />
            @elseif ($hasil->status == 'Tersedia')
                <a href="#" data-toggle="modal" data-target="#modalBooking-12345">
                    <rect x="417.12" y="232.26" style="fill:#ffff;stroke:#000000;stroke-miterlimit:10;}"
                        width="93.35" height="39.79" />
                </a>
            @endif
        @empty
            <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="12345">
                <rect x="417.12" y="232.26" style="fill:#ffff;stroke:#000000;stroke-miterlimit:10;}" width="93.35"
                    height="39.79" />
            </a>
        @endforelse

        @forelse ($siteplan->where('code_product', 'grandsardahrumah2') as $hasil)
            @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <rect x="417.12" y="271.35" style="fill:#ffc107;stroke:#000000;stroke-miterlimit:10;}" width="93.35"
                    height="39.79" />
            @elseif ($hasil->status == 'Terjual')
                <rect x="417.12" y="271.35" style="fill:#f50505;stroke:#000000;stroke-miterlimit:10;}" width="93.35"
                    height="39.79" />
            @elseif ($hasil->status == 'Tersedia')
                <a href="#" data-toggle="modal" data-target="#modalBooking-grandsardahrumah2">
                    <rect x="417.12" y="271.35" style="fill:#ffff;stroke:#000000;stroke-miterlimit:10;}"
                        width="93.35" height="39.79" />
                </a>
            @endif
        @empty
            <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="grandsardahrumah2">
                <rect x="417.12" y="271.35" style="fill:#ffff;stroke:#000000;stroke-miterlimit:10;}" width="93.35"
                    height="39.79" />
            </a>
        @endforelse

        @forelse ($siteplan->where('code_product', 'grandsardahrumah3') as $hasil)
            @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <rect x="417.12" y="311.14" style="fill:#ffc107;stroke:#000000;stroke-miterlimit:10;}" width="93.35"
                    height="39.79" />
            @elseif ($hasil->status == 'Terjual')
                <rect x="417.12" y="311.14" style="fill:#f50505;stroke:#000000;stroke-miterlimit:10;}" width="93.35"
                    height="39.79" />
            @elseif ($hasil->status == 'Tersedia')
                <a href="#" data-toggle="modal" data-target="#modalBooking-grandsardahrumah3">
                    <rect x="417.12" y="311.14" style="fill:#ffff;stroke:#000000;stroke-miterlimit:10;}"
                        width="93.35" height="39.79" />
                </a>
            @endif
        @empty
            <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="grandsardahrumah3">
                <rect x="417.12" y="311.14" style="fill:#ffff;stroke:#000000;stroke-miterlimit:10;}" width="93.35"
                    height="39.79" />
            </a>
        @endforelse

        @forelse ($siteplan->where('code_product', 'grandsardahrumah4') as $hasil)
            @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <rect x="417.12" y="350.94" style="fill:#ffc107;stroke:#000000;stroke-miterlimit:10;}" width="93.35"
                    height="39.79" />
            @elseif ($hasil->status == 'Terjual')
                <rect x="417.12" y="350.94" style="fill:#f50505;stroke:#000000;stroke-miterlimit:10;}" width="93.35"
                    height="39.79" />
            @elseif ($hasil->status == 'Tersedia')
                <a href="#" data-toggle="modal" data-target="#modalBooking-grandsardahrumah4">
                    <rect x="417.12" y="350.94" style="fill:#ffff;stroke:#000000;stroke-miterlimit:10;}"
                        width="93.35" height="39.79" />
                </a>
            @endif
        @empty
            <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="grandsardahrumah4">
                <rect x="417.12" y="350.94" style="fill:#ffff;stroke:#000000;stroke-miterlimit:10;}" width="93.35"
                    height="39.79" />
            </a>
        @endforelse
        {{-- ST 6 END --}}
        <rect x="89.2" y="390.02" class="st0" width="423.36" height="34.68" />

        <rect x="-202.72" y="800.25" transform="matrix(-5.549520e-08 -1 1 -5.549520e-08 -618.0051 1007.4945)"
            class="st0" width="794.93" height="25" />

        <text transform="matrix(1 0 0 1 200.1118 107.8058)" class="st1 st2">HALAMAN</text>
        <text transform="matrix(1 0 0 1 169.7843 312.9696)" class="st1 st2">GEDUNG SERBAGUNA</text>
        <text transform="matrix(1 0 0 1 434.6939 256.0247)" class="st7 st8">Rumah 1</text>
        <text transform="matrix(1 0 0 1 433.1053 294.8643)" class="st7 st8">Rumah 2</text>
        <text transform="matrix(1 0 0 1 432.9861 336.4506)" class="st7 st8">Rumah 3</text>
        <text transform="matrix(1 0 0 1 432.615 375.2593)" class="st7 st8">Rumah 4</text>
        <text transform="matrix(0 -1 1 0 499.6472 202.7881)" class="st7 st8">Ruko 1</text>
        <text transform="matrix(0 -1 1 0 470.3094 204.377)" class="st7 st8">Ruko 2</text>
        <text transform="matrix(0 -1 1 0 438.8052 204.4961)" class="st7 st8">Ruko 3</text>
        <text transform="matrix(0 -1 1 0 381.3696 204.8672)" class="st7 st8">Ruko 4</text>
        <text transform="matrix(0 -1 1 0 345.5603 204.8115)" class="st7 st8">Ruko 5</text>
        <text transform="matrix(0 -1 1 0 313.4459 204.832)" class="st7 st8">Ruko 6</text>
        <text transform="matrix(0 -1 1 0 279.7614 204.2588)" class="st7 st8">Ruko 7</text>
        <text transform="matrix(0 -1 1 0 248.638 204.8047)" class="st7 st8">Ruko 8</text>
        <text transform="matrix(0 -1 1 0 214.1357 204.7832)" class="st7 st8">Ruko 9</text>
        <text transform="matrix(0 -1 1 0 182.2438 205.4551)" class="st7 st8">Ruko10</text>
        <text transform="matrix(0 -1 1 0 147.6348 205.2383)" class="st7 st8">Ruko 11</text>
        <text transform="matrix(0 -1 1 0 114.6071 206.8271)" class="st7 st8">Ruko 12</text>

        {{-- ST 10 --}}


        @forelse ($siteplan->where('code_product', 'grandsardahbloka1') as $hasil)
            @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <rect x="416.69" y="424.05" style="fill:#ffc107; stroke:#000000;stroke-miterlimit:10;" width="93.35"
                    height="39.79" />
            @elseif ($hasil->status == 'Terjual')
                <rect x="416.69" y="424.05" style="fill:#f50505; stroke:#000000;stroke-miterlimit:10;" width="93.35"
                    height="39.79" />
            @elseif ($hasil->status == 'Tersedia')
                <a href="#" data-toggle="modal" data-target="#modalBooking-grandsardahbloka1">
                    <rect x="416.69" y="424.05" style="fill:#ffff;stroke:#000000;stroke-miterlimit:10;" width="93.35"
                        height="39.79" />
                </a>
            @endif
        @empty
            <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="grandsardahbloka1">
                <rect x="416.69" y="424.05" style="fill:#ffff;stroke:#000000; stroke-miterlimit:10;" width="93.35"
                    height="39.79" />
            </a>
        @endforelse



        @forelse ($siteplan->where('code_product', 'grandsardahbloka2') as $hasil)
            @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <rect x="416.69" y="463.78" style="fill:#ffc107; stroke:#000000;stroke-miterlimit:10;" width="93.35"
                    height="39.79" />
            @elseif ($hasil->status == 'Terjual')
                <rect x="416.69" y="463.78" style="fill:#f50505; stroke:#000000;stroke-miterlimit:10;" width="93.35"
                    height="39.79" />
            @elseif ($hasil->status == 'Tersedia')
                <a href="#" data-toggle="modal" data-target="#modalBooking-grandsardahbloka2">
                    <rect x="416.69" y="463.78" style="fill:#ffff;stroke:#000000;stroke-miterlimit:10;" width="93.35"
                        height="39.79" />
                </a>
            @endif
        @empty
            <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="grandsardahbloka2">
                <rect x="416.69" y="463.78" style="fill:#ffff;stroke:#000000;stroke-miterlimit:10;" width="93.35"
                    height="39.79" />
            </a>
        @endforelse


        @forelse ($siteplan->where('code_product', 'grandsardahbloka3') as $hasil)
            @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <rect x="416.69" y="502.87" style="fill:#ffc107; stroke:#000000;stroke-miterlimit:10;" width="93.35"
                    height="39.79" />
            @elseif ($hasil->status == 'Terjual')
                <rect x="416.69" y="502.87" style=" fill:#f50505; stroke:#000000;stroke-miterlimit:10;" width="93.35"
                    height="39.79" />
            @elseif ($hasil->status == 'Tersedia')
                <a href="#" data-toggle="modal" data-target="#modalBooking-grandsardahbloka3">
                    <rect x="416.69" y="502.87" style="fill:#ffff;stroke:#000000;stroke-miterlimit:10;" width="93.35"
                        height="39.79" />
                </a>
            @endif
        @empty
            <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="grandsardahbloka3">
                <rect x="416.69" y="502.87" style="fill:#ffff;stroke:#000000;stroke-miterlimit:10;" width="93.35"
                    height="39.79" />
            </a>
        @endforelse


        @forelse ($siteplan->where('code_product', 'grandsardahbloka4') as $hasil)
            @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <rect x="416.69" y="542.66" style="fill:#ffc107;stroke:#000000;stroke-miterlimit:10;" width="93.35"
                    height="39.79" />
            @elseif ($hasil->status == 'Terjual')
                <rect x="416.69" y="542.66" style=" fill:#f50505; stroke:#000000;stroke-miterlimit:10;" width="93.35"
                    height="39.79" />
            @elseif ($hasil->status == 'Tersedia')
                <a href="#" data-toggle="modal" data-target="#modalBooking-grandsardahbloka4">
                    <rect x="416.69" y="542.66" style="fill:#ffff;stroke:#000000;stroke-miterlimit:10;" width="93.35"
                        height="39.79" />
                </a>
            @endif
        @empty
            <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="grandsardahbloka4">
                <rect x="416.69" y="542.66" style="fill:#ffff;stroke:#000000;stroke-miterlimit:10;" width="93.35"
                    height="39.79" />
            </a>
        @endforelse


        @forelse ($siteplan->where('code_product', 'grandsardahbloka5') as $hasil)
            @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <rect x="416.69" y="582.46" style="fill:#ffc107; stroke:#000000;stroke-miterlimit:10;" width="93.35"
                    height="39.79" />
            @elseif ($hasil->status == 'Terjual')
                <rect x="416.69" y="582.46" style="fill:#f50505; stroke:#000000;stroke-miterlimit:10;" width="93.35"
                    height="39.79" />
            @elseif ($hasil->status == 'Tersedia')
                <a href="#" data-toggle="modal" data-target="#modalBooking-grandsardahbloka5">
                    <rect x="416.69" y="582.46" style="fill:#ffff;stroke:#000000;stroke-miterlimit:10;" width="93.35"
                        height="39.79" />
                </a>
            @endif
        @empty
            <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="grandsardahbloka5">
                <rect x="416.69" y="582.46" style="fill:#ffff;stroke:#000000;stroke-miterlimit:10;" width="93.35"
                    height="39.79" />
            </a>
        @endforelse

        @forelse ($siteplan->where('code_product', 'grandsardahbloka6') as $hasil)
            @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <rect x="416.69" y="621.54" style="fill:#ffc107; stroke:#000000;stroke-miterlimit:10;" width="93.35"
                    height="39.79" />
            @elseif ($hasil->status == 'Terjual')
                <rect x="416.69" y="621.54" style="fill:#f50505; stroke:#000000;stroke-miterlimit:10;" width="93.35"
                    height="39.79" />
            @elseif ($hasil->status == 'Tersedia')
                <a href="#" data-toggle="modal" data-target="#modalBooking-grandsardahbloka6">
                    <rect x="416.69" y="621.54" style="fill:#ffff;stroke:#000000;stroke-miterlimit:10;" width="93.35"
                        height="39.79" />
                </a>
            @endif
        @empty
            <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="grandsardahbloka6">
                <rect x="416.69" y="621.54" style="fill:#ffff;stroke:#000000;stroke-miterlimit:10;" width="93.35"
                    height="39.79" />
            </a>
        @endforelse


        @forelse ($siteplan->where('code_product', 'grandsardahbloka7') as $hasil)
            @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <rect x="416.69" y="661.27" style="fill:#ffc107; stroke:#000000;stroke-miterlimit:10;" width="93.35"
                    height="39.79" />
            @elseif ($hasil->status == 'Terjual')
                <rect x="416.69" y="661.27" style="fill:#f50505; stroke:#000000;stroke-miterlimit:10;" width="93.35"
                    height="39.79" />
            @elseif ($hasil->status == 'Tersedia')
                <a href="#" data-toggle="modal" data-target="#modalBooking-grandsardahbloka7">
                    <rect x="416.69" y="661.27" style="fill:#ffff;stroke:#000000;stroke-miterlimit:10;" width="93.35"
                        height="39.79" />
                </a>
            @endif
        @empty
            <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="grandsardahbloka7">
                <rect x="416.69" y="661.27" style="fill:#ffff;stroke:#000000;stroke-miterlimit:10;" width="93.35"
                    height="39.79" />
            </a>
        @endforelse



        @forelse ($siteplan->where('code_product', 'grandsardahbloka8') as $hasil)
            @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <rect x="416.69" y="700.36" style="fill:#ffc107; stroke:#000000;stroke-miterlimit:10;" width="93.35"
                    height="39.79" />
            @elseif ($hasil->status == 'Terjual')
                <rect x="416.69" y="700.36" style=" fill:#f50505; stroke:#000000;stroke-miterlimit:10;" width="93.35"
                    height="39.79" />
            @elseif ($hasil->status == 'Tersedia')
                <a href="#" data-toggle="modal" data-target="#modalBooking-grandsardahbloka8">
                    <rect x="416.69" y="700.36" style="fill:#ffff;stroke:#000000;stroke-miterlimit:10;" width="93.35"
                        height="39.79" />
                </a>
            @endif
        @empty
            <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="grandsardahbloka8">
                <rect x="416.69" y="700.36" style="fill:#ffff;stroke:#000000;stroke-miterlimit:10;" width="93.35"
                    height="39.79" />
            </a>
        @endforelse


        @forelse ($siteplan->where('code_product', 'grandsardahbloka9') as $hasil)
            @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <rect x="416.69" y="740.15" style="fill:#ffc107; stroke:#000000;stroke-miterlimit:10;" width="93.35"
                    height="39.79" />
            @elseif ($hasil->status == 'Terjual')
                <rect x="416.69" y="740.15" style="fill:#f50505; stroke:#000000;stroke-miterlimit:10;" width="93.35"
                    height="39.79" />
            @elseif ($hasil->status == 'Tersedia')
                <a href="#" data-toggle="modal" data-target="#modalBooking-grandsardahbloka9">
                    <rect x="416.69" y="740.15" style="fill:#ffff;stroke:#000000;stroke-miterlimit:10;" width="93.35"
                        height="39.79" />
                </a>
            @endif
        @empty
            <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="grandsardahbloka9">
                <rect x="416.69" y="740.15" style="fill:#ffff;stroke:#000000;stroke-miterlimit:10;" width="93.35"
                    height="39.79" />
            </a>
        @endforelse



        @forelse ($siteplan->where('code_product', 'grandsardahbloka10') as $hasil)
            @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <rect x="416.69" y="779.95" style="fill:#ffc107;  stroke:#000000;stroke-miterlimit:10;" width="93.35"
                    height="39.79" />
            @elseif ($hasil->status == 'Terjual')
                <rect x="416.69" y="779.95" style=" fill:#f50505; stroke:#000000;stroke-miterlimit:10;" width="93.35"
                    height="39.79" />
            @elseif ($hasil->status == 'Tersedia')
                <a href="#" data-toggle="modal" data-target="#modalBooking-grandsardahbloka10">
                    <rect x="416.69" y="779.95" style="fill:#ffff;stroke:#000000;stroke-miterlimit:10;" width="93.35"
                        height="39.79" />
                </a>
            @endif
        @empty
            <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="grandsardahbloka10">
                <rect x="416.69" y="779.95" style="fill:#ffff;stroke:#000000;stroke-miterlimit:10;" width="93.35"
                    height="39.79" />
            </a>
        @endforelse


        @forelse ($siteplan->where('code_product', 'grandsardahbloka11') as $hasil)
            @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <rect x="416.69" y="814.52" style="fill:#ffc107;  stroke:#000000;stroke-miterlimit:10;" width="93.35"
                    height="39.79" />
            @elseif ($hasil->status == 'Terjual')
                <rect x="416.69" y="814.52" style="fill:#f50505; stroke:#000000;stroke-miterlimit:10;" width="93.35"
                    height="39.79" />
            @elseif ($hasil->status == 'Tersedia')
                <a href="#" data-toggle="modal" data-target="#modalBooking-grandsardahbloka11">
                    <rect x="416.69" y="814.52" style="fill:#ffff;stroke:#000000;stroke-miterlimit:10;" width="93.35"
                        height="39.79" />
                </a>
            @endif
        @empty
            <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="grandsardahbloka11">
                <rect x="416.69" y="814.52" style="fill:#ffff;stroke:#000000;stroke-miterlimit:10;" width="93.35"
                    height="39.79" />
            </a>
        @endforelse

        @forelse ($siteplan->where('code_product', 'grandsardahbloka12') as $hasil)
            @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <rect x="416.69" y="854.26" style="fill:#ffc107;  stroke:#000000;stroke-miterlimit:10;" width="93.35"
                    height="39.79" />
            @elseif ($hasil->status == 'Terjual')
                <rect x="416.69" y="854.26" style="fill:#f50505; stroke:#000000;stroke-miterlimit:10;" width="93.35"
                    height="39.79" />
            @elseif ($hasil->status == 'Tersedia')
                <a href="#" data-toggle="modal" data-target="#modalBooking-grandsardahbloka12">
                    <rect x="416.69" y="854.26" style="fill:#ffff;stroke:#000000;stroke-miterlimit:10;" width="93.35"
                        height="39.79" />
                </a>
            @endif
        @empty
            <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="grandsardahbloka12">
                <rect x="416.69" y="854.26" style="fill:#ffff;stroke:#000000;stroke-miterlimit:10;" width="93.35"
                    height="39.79" />
            </a>
        @endforelse


        @forelse ($siteplan->where('code_product', 'grandsardahbloka13') as $hasil)
            @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <rect x="416.69" y="893.34" style="fill:#ffc107; stroke:#000000;stroke-miterlimit:10;" width="93.35"
                    height="39.79" />
            @elseif ($hasil->status == 'Terjual')
                <rect x="416.69" y="893.34" style="fill:#f50505;stroke:#000000;stroke-miterlimit:10;" width="93.35"
                    height="39.79" />
            @elseif ($hasil->status == 'Tersedia')
                <a href="#" data-toggle="modal" data-target="#modalBooking-grandsardahbloka13">
                    <rect x="416.69" y="893.34" style="fill:#ffff;stroke:#000000;stroke-miterlimit:10;" width="93.35"
                        height="39.79" />
                </a>
            @endif
        @empty
            <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="grandsardahbloka13">
                <rect x="416.69" y="893.34" style="fill:#ffff;stroke:#000000;stroke-miterlimit:10;" width="93.35"
                    height="39.79" />
            </a>
        @endforelse


        @forelse ($siteplan->where('code_product', 'grandsardahbloka14') as $hasil)
            @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <rect x="416.69" y="933.14" style="fill:#ffc107; stroke:#000000;stroke-miterlimit:10;" width="93.35"
                    height="39.79" />
            @elseif ($hasil->status == 'Terjual')
                <rect x="416.69" y="933.14" style="fill:#f50505; stroke:#000000;stroke-miterlimit:10;" width="93.35"
                    height="39.79" />
            @elseif ($hasil->status == 'Tersedia')
                <a href="#" data-toggle="modal" data-target="#modalBooking-grandsardahbloka14">
                    <rect x="416.69" y="933.14" style="fill:#ffff;stroke:#000000;stroke-miterlimit:10;" width="93.35"
                        height="39.79" />
                </a>
            @endif
        @empty
            <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="grandsardahbloka14">
                <rect x="416.69" y="933.14" style="fill:#ffff;stroke:#000000;stroke-miterlimit:10;" width="93.35"
                    height="39.79" />
            </a>
        @endforelse


        @forelse ($siteplan->where('code_product', 'grandsardahbloka15') as $hasil)
            @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <rect x="416.69" y="972.93" style="fill:#ffc107; stroke:#000000;stroke-miterlimit:10;" width="93.35"
                    height="39.79" />
            @elseif ($hasil->status == 'Terjual')
                <rect x="416.69" y="972.93" style="fill:#f50505; stroke:#000000;stroke-miterlimit:10;" width="93.35"
                    height="39.79" />
            @elseif ($hasil->status == 'Tersedia')
                <a href="#" data-toggle="modal" data-target="#modalBooking-grandsardahbloka15">
                    <rect x="416.69" y="972.93" style="fill:#ffff;stroke:#000000;stroke-miterlimit:10;" width="93.35"
                        height="39.79" />
                </a>
            @endif
        @empty
            <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="grandsardahbloka15">
                <rect x="416.69" y="972.93" style="fill:#ffff;stroke:#000000;stroke-miterlimit:10;" width="93.35"
                    height="39.79" />
            </a>
        @endforelse


        @forelse ($siteplan->where('code_product', 'grandsardahbloka16') as $hasil)
            @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <rect x="416.69" y="1012.01" style="fill:#ffc107; stroke:#000000;stroke-miterlimit:10;" width="93.35"
                    height="39.79" />
            @elseif ($hasil->status == 'Terjual')
                <rect x="416.69" y="1012.01" style="fill:#f50505;stroke:#000000;stroke-miterlimit:10;" width="93.35"
                    height="39.79" />
            @elseif ($hasil->status == 'Tersedia')
                <a href="#" data-toggle="modal" data-target="#modalBooking-grandsardahbloka16">
                    <rect x="416.69" y="1012.01" style="fill:#ffff;stroke:#000000;stroke-miterlimit:10;"
                        width="93.35" height="39.79" />
                </a>
            @endif
        @empty
            <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="grandsardahbloka16">
                <rect x="416.69" y="1012.01" style="fill:#ffff;stroke:#000000;stroke-miterlimit:10;" width="93.35"
                    height="39.79" />
            </a>
        @endforelse


        @forelse ($siteplan->where('code_product', 'grandsardahbloka17') as $hasil)
            @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <rect x="416.69" y="1051.75" style="fill:#ffc107; stroke:#000000;stroke-miterlimit:10;" width="93.35"
                    height="39.79" />
            @elseif ($hasil->status == 'Terjual')
                <rect x="416.69" y="1051.75" style="fill:#f50505;stroke:#000000;stroke-miterlimit:10;" width="93.35"
                    height="39.79" />
            @elseif ($hasil->status == 'Tersedia')
                <a href="#" data-toggle="modal" data-target="#modalBooking-grandsardahbloka17">
                    <rect x="416.69" y="1051.75" style="fill:#ffff;stroke:#000000;stroke-miterlimit:10;"
                        width="93.35" height="39.79" />
                </a>
            @endif
        @empty
            <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="grandsardahbloka17">
                <rect x="416.69" y="1051.75" style="fill:#ffff;stroke:#000000;stroke-miterlimit:10;" width="93.35"
                    height="39.79" />
            </a>
        @endforelse


        @forelse ($siteplan->where('code_product', 'grandsardahbloka18') as $hasil)
            @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <rect x="416.69" y="1090.83" style="fill:#ffc107; stroke:#000000;stroke-miterlimit:10;" width="93.35"
                    height="39.79" />
            @elseif ($hasil->status == 'Terjual')
                <rect x="416.69" y="1090.83" style="fill:#f50505; stroke:#000000;stroke-miterlimit:10;" width="93.35"
                    height="39.79" />
            @elseif ($hasil->status == 'Tersedia')
                <a href="#" data-toggle="modal" data-target="#modalBooking-grandsardahbloka18">
                    <rect x="416.69" y="1090.83" style="fill:#ffff;stroke:#000000;stroke-miterlimit:10;"
                        width="93.35" height="39.79" />
                </a>
            @endif
        @empty
            <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="grandsardahbloka18">
                <rect x="416.69" y="1090.83" style="fill:#ffff;stroke:#000000;stroke-miterlimit:10;" width="93.35"
                    height="39.79" />
            </a>
        @endforelse


        @forelse ($siteplan->where('code_product', 'grandsardahbloka19') as $hasil)
            @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <rect x="416.69" y="1130.63" style="fill:#ffc107;  stroke:#000000;stroke-miterlimit:10;"
                    width="93.35" height="39.79" />
            @elseif ($hasil->status == 'Terjual')
                <rect x="416.69" y="1130.63" style=" fill:#f50505; stroke:#000000;stroke-miterlimit:10;"
                    width="93.35" height="39.79" />
            @elseif ($hasil->status == 'Tersedia')
                <a href="#" data-toggle="modal" data-target="#modalBooking-grandsardahbloka19">
                    <rect x="416.69" y="1130.63" style="fill:#ffff;stroke:#000000;stroke-miterlimit:10;"
                        width="93.35" height="39.79" />
                </a>
            @endif
        @empty
            <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="grandsardahbloka19">
                <rect x="416.69" y="1130.63" style="fill:#ffff;stroke:#000000;stroke-miterlimit:10;" width="93.35"
                    height="39.79" />
            </a>
        @endforelse


        @forelse ($siteplan->where('code_product', 'grandsardahbloka20') as $hasil)
            @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <rect x="416.69" y="1170.42" style="fill:#ffc107;  stroke:#000000;stroke-miterlimit:10;"
                    width="93.35" height="39.79" />
            @elseif ($hasil->status == 'Terjual')
                <rect x="416.69" y="1170.42" style="fill:#f50505; stroke:#000000;stroke-miterlimit:10;" width="93.35"
                    height="39.79" />
            @elseif ($hasil->status == 'Tersedia')
                <a href="#" data-toggle="modal" data-target="#modalBooking-grandsardahbloka20">
                    <rect x="416.69" y="1170.42" style="fill:#ffff;stroke:#000000;stroke-miterlimit:10;"
                        width="93.35" height="39.79" />
                </a>
            @endif
        @empty
            <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="grandsardahbloka20">
                <rect x="416.69" y="1170.42" style="fill:#ffff;stroke:#000000;stroke-miterlimit:10;" width="93.35"
                    height="39.79" />
            </a>
        @endforelse

        {{-- ST 10 END --}}

        <text transform="matrix(1 0 0 1 436.7757 448.3723)" class="st7 st8">BLOK A1</text>
        <text transform="matrix(1 0 0 1 435.1868 487.5445)" class="st7 st8">BLOK A2</text>
        <text transform="matrix(1 0 0 1 435.0679 526.3841)" class="st7 st8">BLOK A3</text>
        <text transform="matrix(1 0 0 1 434.6968 567.9704)" class="st7 st8">BLOK A4</text>
        <text transform="matrix(1 0 0 1 434.7529 606.7791)" class="st7 st8">BLOK A5</text>
        <text transform="matrix(1 0 0 1 434.7317 645.864)" class="st7 st8">BLOK A6</text>
        <text transform="matrix(1 0 0 1 435.3063 685.0361)" class="st7 st8">BLOK A7</text>
        <text transform="matrix(1 0 0 1 434.7597 723.8757)" class="st7 st8">BLOK A8</text>
        <text transform="matrix(1 0 0 1 434.7807 765.462)" class="st7 st8">BLOK A9</text>
        <text transform="matrix(1 0 0 1 432.289 804.2708)" class="st7 st8">BLOK A10</text>
        <text transform="matrix(1 0 0 1 434.3257 838.8458)" class="st7 st8">BLOK A11</text>
        <text transform="matrix(1 0 0 1 432.7368 878.0181)" class="st7 st8">BLOK A12</text>
        <text transform="matrix(1 0 0 1 432.6178 916.8575)" class="st7 st8">BLOK A13</text>
        <text transform="matrix(1 0 0 1 432.2472 958.4439)" class="st7 st8">BLOK A14</text>
        <text transform="matrix(1 0 0 1 432.3029 997.2526)" class="st7 st8">BLOK A15</text>
        <text transform="matrix(1 0 0 1 432.2816 1036.3374)" class="st7 st8">BLOK A16</text>
        <text transform="matrix(1 0 0 1 432.8558 1075.5096)" class="st7 st8">BLOK A17</text>
        <text transform="matrix(1 0 0 1 432.3101 1114.3491)" class="st7 st8">BLOK A18</text>
        <text transform="matrix(1 0 0 1 432.3311 1155.9355)" class="st7 st8">BLOK A19</text>
        <text transform="matrix(1 0 0 1 430.6998 1194.7443)" class="st7 st8">BLOK A20</text>

        {{-- ST11 BLOK B --}}

        @forelse ($siteplan->where('code_product', 'grandsardahblokb1') as $hasil)
            @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <rect x="299.02" y="424.68" style="fill:#ffc107; stroke:#000000;stroke-miterlimit:10;" width="93.35"
                    height="39.79" />
            @elseif ($hasil->status == 'Terjual')
                <rect x="299.02" y="424.68" style="fill:#f50505; stroke:#000000;stroke-miterlimit:10;" width="93.35"
                    height="39.79" />
            @elseif ($hasil->status == 'Tersedia')
                <a href="#" data-toggle="modal" data-target="#modalBooking-grandsardahblokb1">
                    <rect x="299.02" y="424.68" style="fill:#ffff;stroke:#000000;stroke-miterlimit:10;" width="93.35"
                        height="39.79" />
                </a>
            @endif
        @empty
            <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="grandsardahblokb1">
                <rect x="299.02" y="424.68" style="fill:#ffff;stroke:#000000;stroke-miterlimit:10;" width="93.35"
                    height="39.79" />
            </a>
        @endforelse


        @forelse ($siteplan->where('code_product', 'grandsardahblokb2') as $hasil)
            @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <rect x="299.02" y="464.41" style="fill:#ffc107; stroke:#000000;stroke-miterlimit:10;" width="93.35"
                    height="39.79" />
            @elseif ($hasil->status == 'Terjual')
                <rect x="299.02" y="464.41" style="fill:#f50505;stroke:#000000;stroke-miterlimit:10;" width="93.35"
                    height="39.79" />
            @elseif ($hasil->status == 'Tersedia')
                <a href="#" data-toggle="modal" data-target="#modalBooking-grandsardahblokb2">
                    <rect x="299.02" y="464.41" style="fill:#ffff;stroke:#000000;stroke-miterlimit:10;" width="93.35"
                        height="39.79" />
                </a>
            @endif
        @empty
            <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="grandsardahblokb2">
                <rect x="299.02" y="464.41" style="fill:#ffff;stroke:#000000;stroke-miterlimit:10;" width="93.35"
                    height="39.79" />
            </a>
        @endforelse


        @forelse ($siteplan->where('code_product', 'grandsardahblokb3') as $hasil)
            @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <rect x="299.02" y="503.5" style="fill:#ffc107; stroke:#000000;stroke-miterlimit:10;" width="93.35"
                    height="39.79" />
            @elseif ($hasil->status == 'Terjual')
                <rect x="299.02" y="503.5" style="fill:#f50505; stroke:#000000;stroke-miterlimit:10;" width="93.35"
                    height="39.79" />
            @elseif ($hasil->status == 'Tersedia')
                <a href="#" data-toggle="modal" data-target="#modalBooking-grandsardahblokb3">
                    <rect x="299.02" y="503.5" style="fill:#ffff;stroke:#000000;stroke-miterlimit:10;" width="93.35"
                        height="39.79" />
                </a>
            @endif
        @empty
            <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="grandsardahblokb3">
                <rect x="299.02" y="503.5" style="fill:#ffff;stroke:#000000;stroke-miterlimit:10;" width="93.35"
                    height="39.79" />
            </a>
        @endforelse


        @forelse ($siteplan->where('code_product', 'grandsardahblokb4') as $hasil)
            @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <rect x="299.02" y="543.29" style="fill:#ffc107;  stroke:#000000;stroke-miterlimit:10;" width="93.35"
                    height="39.79" />
            @elseif ($hasil->status == 'Terjual')
                <rect x="299.02" y="543.29" style="fill:#f50505; stroke:#000000;stroke-miterlimit:10;" width="93.35"
                    height="39.79" />
            @elseif ($hasil->status == 'Tersedia')
                <a href="#" data-toggle="modal" data-target="#modalBooking-grandsardahblokb4">
                    <rect x="299.02" y="543.29" style="fill:#ffff;stroke:#000000;stroke-miterlimit:10;" width="93.35"
                        height="39.79" />
                </a>
            @endif
        @empty
            <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="grandsardahblokb4">
                <rect x="299.02" y="543.29" style="fill:#ffff;stroke:#000000;stroke-miterlimit:10;" width="93.35"
                    height="39.79" />
            </a>
        @endforelse


        @forelse ($siteplan->where('code_product', 'grandsardahblokb5') as $hasil)
            @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <rect x="299.02" y="583.08" style="fill:#ffc107; stroke:#000000;stroke-miterlimit:10;" width="93.35"
                    height="39.79" />
            @elseif ($hasil->status == 'Terjual')
                <rect x="299.02" y="583.08" style="fill:#f50505; stroke:#000000;stroke-miterlimit:10;" width="93.35"
                    height="39.79" />
            @elseif ($hasil->status == 'Tersedia')
                <a href="#" data-toggle="modal" data-target="#modalBooking-grandsardahblokb5">
                    <rect x="299.02" y="583.08" style="fill:#ffff;stroke:#000000;stroke-miterlimit:10;" width="93.35"
                        height="39.79" />
                </a>
            @endif
        @empty
            <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="grandsardahblokb5">
                <rect x="299.02" y="583.08" style="fill:#ffff;stroke:#000000;stroke-miterlimit:10;" width="93.35"
                    height="39.79" />
            </a>
        @endforelse


        @forelse ($siteplan->where('code_product', 'grandsardahblokb6') as $hasil)
            @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <rect x="299.02" y="622.17" style="fill:#ffc107; stroke:#000000;stroke-miterlimit:10;" width="93.35"
                    height="39.79" />
            @elseif ($hasil->status == 'Terjual')
                <rect x="299.02" y="622.17" style=" fill:#f50505; stroke:#000000;stroke-miterlimit:10;" width="93.35"
                    height="39.79" />
            @elseif ($hasil->status == 'Tersedia')
                <a href="#" data-toggle="modal" data-target="#modalBooking-grandsardahblokb6">
                    <rect x="299.02" y="622.17" style="fill:#ffff;stroke:#000000;stroke-miterlimit:10;" width="93.35"
                        height="39.79" />
                </a>
            @endif
        @empty
            <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="grandsardahblokb6">
                <rect x="299.02" y="622.17" style="fill:#ffff;stroke:#000000;stroke-miterlimit:10;" width="93.35"
                    height="39.79" />
            </a>
        @endforelse

        @forelse ($siteplan->where('code_product', 'grandsardahblokb7') as $hasil)
            @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <rect x="299.02" y="661.9" style="fill:#ffc107; stroke:#000000;stroke-miterlimit:10;" width="93.35"
                    height="39.79" />
            @elseif ($hasil->status == 'Terjual')
                <rect x="299.02" y="661.9" style="fill:#f50505;stroke:#000000;stroke-miterlimit:10;" width="93.35"
                    height="39.79" />
            @elseif ($hasil->status == 'Tersedia')
                <a href="#" data-toggle="modal" data-target="#modalBooking-grandsardahblokb7">
                    <rect x="299.02" y="661.9" style="fill:#ffff;stroke:#000000;stroke-miterlimit:10;" width="93.35"
                        height="39.79" />
                </a>
            @endif
        @empty
            <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="grandsardahblokb7">
                <rect x="299.02" y="661.9" style="fill:#ffff;stroke:#000000;stroke-miterlimit:10;" width="93.35"
                    height="39.79" />
            </a>
        @endforelse


        @forelse ($siteplan->where('code_product', 'grandsardahblokb8') as $hasil)
            @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <rect x="299.02" y="700.99" style="fill:#ffc107;  stroke:#000000;stroke-miterlimit:10;" width="93.35"
                    height="39.79" />
            @elseif ($hasil->status == 'Terjual')
                <rect x="299.02" y="700.99" style="fill:#f50505; stroke:#000000;stroke-miterlimit:10;" width="93.35"
                    height="39.79" />
            @elseif ($hasil->status == 'Tersedia')
                <a href="#" data-toggle="modal" data-target="#modalBooking-grandsardahblokb8">
                    <rect x="299.02" y="700.99" style="fill:#ffff;stroke:#000000;stroke-miterlimit:10;" width="93.35"
                        height="39.79" />
                </a>
            @endif
        @empty
            <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="grandsardahblokb8">
                <rect x="299.02" y="700.99" style="fill:#ffff;stroke:#000000;stroke-miterlimit:10;" width="93.35"
                    height="39.79" />
            </a>
        @endforelse


        @forelse ($siteplan->where('code_product', 'grandsardahblokb9') as $hasil)
            @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <rect x="299.02" y="740.78" style="fill:#ffc107; stroke:#000000;stroke-miterlimit:10;" width="93.35"
                    height="39.79" />
            @elseif ($hasil->status == 'Terjual')
                <rect x="299.02" y="740.78" style="fill:#f50505; stroke:#000000;stroke-miterlimit:10;" width="93.35"
                    height="39.79" />
            @elseif ($hasil->status == 'Tersedia')
                <a href="#" data-toggle="modal" data-target="#modalBooking-grandsardahblokb9">
                    <rect x="299.02" y="740.78" style="fill:#ffff;stroke:#000000;stroke-miterlimit:10;" width="93.35"
                        height="39.79" />
                </a>
            @endif
        @empty
            <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="grandsardahblokb9">
                <rect x="299.02" y="740.78" style="fill:#ffff;stroke:#000000;stroke-miterlimit:10;" width="93.35"
                    height="39.79" />
            </a>
        @endforelse


        @forelse ($siteplan->where('code_product', 'grandsardahblokb10') as $hasil)
            @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <rect x="299.02" y="780.58" style="fill:#ffc107; stroke:#000000;stroke-miterlimit:10;" width="93.35"
                    height="39.79" />
            @elseif ($hasil->status == 'Terjual')
                <rect x="299.02" y="780.58" style="fill:#f50505; stroke:#000000;stroke-miterlimit:10;" width="93.35"
                    height="39.79" />
            @elseif ($hasil->status == 'Tersedia')
                <a href="#" data-toggle="modal" data-target="#modalBooking-grandsardahblokb10">
                    <rect x="299.02" y="780.58" style="fill:#ffff;stroke:#000000;stroke-miterlimit:10;" width="93.35"
                        height="39.79" />
                </a>
            @endif
        @empty
            <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="grandsardahblokb10">
                <rect x="299.02" y="780.58" style="fill:#ffff;stroke:#000000;stroke-miterlimit:10;" width="93.35"
                    height="39.79" />
            </a>
        @endforelse



        @forelse ($siteplan->where('code_product', 'grandsardahblokb11') as $hasil)
            @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <rect x="299.02" y="815.15" style="fill:#ffc107; stroke:#000000;stroke-miterlimit:10;" width="93.35"
                    height="39.79" />
            @elseif ($hasil->status == 'Terjual')
                <rect x="299.02" y="815.15" style="fill:#f50505; stroke:#000000;stroke-miterlimit:10;" width="93.35"
                    height="39.79" />
            @elseif ($hasil->status == 'Tersedia')
                <a href="#" data-toggle="modal" data-target="#modalBooking-grandsardahblokb11">
                    <rect x="299.02" y="815.15" style="fill:#ffff;stroke:#000000;stroke-miterlimit:10;" width="93.35"
                        height="39.79" />
                </a>
            @endif
        @empty
            <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="grandsardahblokb11">
                <rect x="299.02" y="815.15" style="fill:#ffff;stroke:#000000;stroke-miterlimit:10;" width="93.35"
                    height="39.79" />
            </a>
        @endforelse


        @forelse ($siteplan->where('code_product', 'grandsardahblokb12') as $hasil)
            @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <rect x="299.02" y="854.88" style="fill:#ffc107; stroke:#000000;stroke-miterlimit:10;"
                    width="93.35" height="39.79" />
            @elseif ($hasil->status == 'Terjual')
                <rect x="299.02" y="854.88" style="fill:#f50505;stroke:#000000;stroke-miterlimit:10;" width="93.35"
                    height="39.79" />
            @elseif ($hasil->status == 'Tersedia')
                <a href="#" data-toggle="modal" data-target="#modalBooking-grandsardahblokb12">
                    <rect x="299.02" y="854.88" style="fill:#ffff;stroke:#000000;stroke-miterlimit:10;"
                        width="93.35" height="39.79" />
                </a>
            @endif
        @empty
            <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="grandsardahblokb12">
                <rect x="299.02" y="854.88" style="fill:#ffff;stroke:#000000;stroke-miterlimit:10;" width="93.35"
                    height="39.79" />
            </a>
        @endforelse



        @forelse ($siteplan->where('code_product', 'grandsardahblokb13') as $hasil)
            @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <rect x="299.02" y="893.97" style="fill:#ffc107; stroke:#000000;stroke-miterlimit:10;"
                    width="93.35" height="39.79" />
            @elseif ($hasil->status == 'Terjual')
                <rect x="299.02" y="893.97" style="fill:#f50505;stroke:#000000;stroke-miterlimit:10;" width="93.35"
                    height="39.79" />
            @elseif ($hasil->status == 'Tersedia')
                <a href="#" data-toggle="modal" data-target="#modalBooking-grandsardahblokb13">
                    <rect x="299.02" y="893.97" style="fill:#ffff;stroke:#000000;stroke-miterlimit:10;"
                        width="93.35" height="39.79" />
                </a>
            @endif
        @empty
            <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="grandsardahblokb13">
                <rect x="299.02" y="893.97" style="fill:#ffff;stroke:#000000;stroke-miterlimit:10;" width="93.35"
                    height="39.79" />
            </a>
        @endforelse


        @forelse ($siteplan->where('code_product', 'grandsardahblokb14') as $hasil)
            @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <rect x="299.02" y="933.76" style="fill:#ffc107; stroke:#000000;stroke-miterlimit:10;"
                    width="93.35" height="39.79" />
            @elseif ($hasil->status == 'Terjual')
                <rect x="299.02" y="933.76" style=" fill:#f50505; stroke:#000000;stroke-miterlimit:10;"
                    width="93.35" height="39.79" />
            @elseif ($hasil->status == 'Tersedia')
                <a href="#" data-toggle="modal" data-target="#modalBooking-grandsardahblokb14">
                    <rect x="299.02" y="933.76" style="fill:#ffff;stroke:#000000;stroke-miterlimit:10;"
                        width="93.35" height="39.79" />
                </a>
            @endif
        @empty
            <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="grandsardahblokb14">
                <rect x="299.02" y="933.76" style="fill:#ffff;stroke:#000000;stroke-miterlimit:10;" width="93.35"
                    height="39.79" />
            </a>
        @endforelse



        @forelse ($siteplan->where('code_product', 'grandsardahblokb15') as $hasil)
            @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <rect x="299.02" y="973.56" style="fill:#ffc107; stroke:#000000;stroke-miterlimit:10;"
                    width="93.35" height="39.79" />
            @elseif ($hasil->status == 'Terjual')
                <rect x="299.02" y="973.56" style="fill:#f50505; stroke:#000000;stroke-miterlimit:10;"
                    width="93.35" height="39.79" />
            @elseif ($hasil->status == 'Tersedia')
                <a href="#" data-toggle="modal" data-target="#modalBooking-grandsardahblokb15">
                    <rect x="299.02" y="973.56" style="fill:#ffff;stroke:#000000;stroke-miterlimit:10;"
                        width="93.35" height="39.79" />
                </a>
            @endif
        @empty
            <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="grandsardahblokb15">
                <rect x="299.02" y="973.56" style="fill:#ffff;stroke:#000000;stroke-miterlimit:10;" width="93.35"
                    height="39.79" />
            </a>
        @endforelse



        @forelse ($siteplan->where('code_product', 'grandsardahblokb16') as $hasil)
            @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <rect x="299.02" y="1012.64" style="fill:#ffc107; stroke:#000000;stroke-miterlimit:10;"
                    width="93.35" height="39.79" />
            @elseif ($hasil->status == 'Terjual')
                <rect x="299.02" y="1012.64" style=" fill:#f50505; stroke:#000000;stroke-miterlimit:10;"
                    width="93.35" height="39.79" />
            @elseif ($hasil->status == 'Tersedia')
                <a href="#" data-toggle="modal" data-target="#modalBooking-grandsardahblokb16">
                    <rect x="299.02" y="1012.64" style="fill:#ffff;stroke:#000000;stroke-miterlimit:10;"
                        width="93.35" height="39.79" />
                </a>
            @endif
        @empty
            <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="grandsardahblokb16">
                <rect x="299.02" y="1012.64" style="fill:#ffff;stroke:#000000;stroke-miterlimit:10;" width="93.35"
                    height="39.79" />
            </a>
        @endforelse



        @forelse ($siteplan->where('code_product', 'grandsardahblokb17') as $hasil)
            @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <rect x="299.02" y="1052.38" style="fill:#ffc107; stroke:#000000;stroke-miterlimit:10;"
                    width="93.35" height="39.79" />
            @elseif ($hasil->status == 'Terjual')
                <rect x="299.02" y="1052.38" style="fill:#f50505; stroke:#000000;stroke-miterlimit:10;"
                    width="93.35" height="39.79" />
            @elseif ($hasil->status == 'Tersedia')
                <a href="#" data-toggle="modal" data-target="#modalBooking-grandsardahblokb17">
                    <rect x="299.02" y="1052.38" style="fill:#ffff;stroke:#000000;stroke-miterlimit:10;"
                        width="93.35" height="39.79" />
                </a>
            @endif
        @empty
            <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="grandsardahblokb17">
                <rect x="299.02" y="1052.38" style="fill:#ffff;stroke:#000000;stroke-miterlimit:10;" width="93.35"
                    height="39.79" />
            </a>
        @endforelse


        @forelse ($siteplan->where('code_product', 'grandsardahblokb18') as $hasil)
            @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <rect x="299.02" y="1091.46" style="fill:#ffc107; stroke:#000000;stroke-miterlimit:10;"
                    width="93.35" height="39.79" />
            @elseif ($hasil->status == 'Terjual')
                <rect x="299.02" y="1091.46" style=" fill:#f50505; stroke:#000000;stroke-miterlimit:10;"
                    width="93.35" height="39.79" />
            @elseif ($hasil->status == 'Tersedia')
                <a href="#" data-toggle="modal" data-target="#modalBooking-grandsardahblokb18">
                    <rect x="299.02" y="1091.46" style="fill:#ffff;stroke:#000000;stroke-miterlimit:10;"
                        width="93.35" height="39.79" />
                </a>
            @endif
        @empty
            <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="grandsardahblokb18">
                <rect x="299.02" y="1091.46" style="fill:#ffff;stroke:#000000;stroke-miterlimit:10;" width="93.35"
                    height="39.79" />
            </a>
        @endforelse

        @forelse ($siteplan->where('code_product', 'grandsardahblokb19') as $hasil)
            @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <rect x="299.02" y="1131.26" style="fill:#ffc107; stroke:#000000;stroke-miterlimit:10;"
                    width="93.35" height="39.79" />
            @elseif ($hasil->status == 'Terjual')
                <rect x="299.02" y="1131.26" style="fill:#f50505;stroke:#000000;stroke-miterlimit:10;"
                    width="93.35" height="39.79" />
            @elseif ($hasil->status == 'Tersedia')
                <a href="#" data-toggle="modal" data-target="#modalBooking-grandsardahblokb19">
                    <rect x="299.02" y="1131.26" style="fill:#ffff;stroke:#000000;stroke-miterlimit:10;"
                        width="93.35" height="39.79" />
                </a>
            @endif
        @empty
            <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="grandsardahblokb19">
                <rect x="299.02" y="1131.26" style="fill:#ffff;stroke:#000000;stroke-miterlimit:10;" width="93.35"
                    height="39.79" />
            </a>
        @endforelse



        @forelse ($siteplan->where('code_product', 'grandsardahblokb20') as $hasil)
            @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <rect x="299.02" y="1171.05" style="fill:#ffc107; stroke:#000000;stroke-miterlimit:10;"
                    width="93.35" height="39.79" />
            @elseif ($hasil->status == 'Terjual')
                <rect x="299.02" y="1171.05" style=" fill:#f50505;stroke:#000000;stroke-miterlimit:10;"
                    width="93.35" height="39.79" />
            @elseif ($hasil->status == 'Tersedia')
                <a href="#" data-toggle="modal" data-target="#modalBooking-grandsardahblokb20">
                    <rect x="299.02" y="1171.05" style="fill:#ffff;stroke:#000000;stroke-miterlimit:10;"
                        width="93.35" height="39.79" />
                </a>
            @endif
        @empty
            <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="grandsardahblokb20">
                <rect x="299.02" y="1171.05" style="fill:#ffff;stroke:#000000;stroke-miterlimit:10;" width="93.35"
                    height="39.79" />
            </a>
        @endforelse


        {{-- ST11 BLOK B --}}

        <text transform="matrix(1 0 0 1 319.1031 449.0011)" class="st7 st8">BLOK B1</text>
        <text transform="matrix(1 0 0 1 317.5142 488.1732)" class="st7 st8">BLOK B2</text>
        <text transform="matrix(1 0 0 1 317.3953 527.0128)" class="st7 st8">BLOK B3</text>
        <text transform="matrix(1 0 0 1 317.0242 568.5991)" class="st7 st8">BLOK B4</text>
        <text transform="matrix(1 0 0 1 317.0803 607.4078)" class="st7 st8">BLOK B5</text>
        <text transform="matrix(1 0 0 1 317.0591 646.4927)" class="st7 st8">BLOK B6</text>
        <text transform="matrix(1 0 0 1 317.6337 685.6649)" class="st7 st8">BLOK B7</text>
        <text transform="matrix(1 0 0 1 317.0871 724.5044)" class="st7 st8">BLOK B8</text>
        <text transform="matrix(1 0 0 1 317.1081 766.0907)" class="st7 st8">BLOK B9</text>
        <text transform="matrix(1 0 0 1 314.6164 804.8994)" class="st7 st8">BLOK B10</text>
        <text transform="matrix(1 0 0 1 316.6531 839.4746)" class="st7 st8">BLOK B11</text>
        <text transform="matrix(1 0 0 1 315.0641 878.6467)" class="st7 st8">BLOK B12</text>
        <text transform="matrix(1 0 0 1 314.9453 917.4863)" class="st7 st8">BLOK B13</text>
        <text transform="matrix(1 0 0 1 314.5746 959.0726)" class="st7 st8">BLOK B14</text>
        <text transform="matrix(1 0 0 1 314.6303 997.8813)" class="st7 st8">BLOK B15</text>
        <text transform="matrix(1 0 0 1 314.609 1036.9662)" class="st7 st8">BLOK B16</text>
        <text transform="matrix(1 0 0 1 315.1832 1076.1384)" class="st7 st8">BLOK B17</text>
        <text transform="matrix(1 0 0 1 314.6375 1114.9779)" class="st7 st8">BLOK B18</text>
        <text transform="matrix(1 0 0 1 314.6585 1156.5642)" class="st7 st8">BLOK B19</text>
        <text transform="matrix(1 0 0 1 313.0272 1195.373)" class="st7 st8">BLOK B20</text>

        {{-- ST 12 Blok C --}}
        @forelse ($siteplan->where('code_product', 'grandsardahblokc1') as $hasil)
            @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <rect x="206.29" y="424.68" style="fill: #ffc107;stroke: #000000;stroke-miterlimit: 10;"
                    width="93.35" height="39.79" />
            @elseif ($hasil->status == 'Terjual')
                <rect x="206.29" y="424.68" style="fill: #f50505;stroke: #000000;stroke-miterlimit: 10;"
                    width="93.35" height="39.79" />
            @elseif ($hasil->status == 'Tersedia')
                <a href="#" data-toggle="modal" data-target="#modalBooking-grandsardahblokc1">
                    <rect x="206.29" y="424.68" style="fill: #ffff;stroke: #000000;stroke-miterlimit: 10;"
                        width="93.35" height="39.79" />
                </a>
            @endif
        @empty
            <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="grandsardahblokc1">
                <rect x="206.29" y="424.68" style="fill: #ffff;stroke: #000000;stroke-miterlimit: 10;"
                    width="93.35" height="39.79" />
            </a>
        @endforelse

        @forelse ($siteplan->where('code_product', 'grandsardahblokc2') as $hasil)
            @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <rect x="206.29" y="464.41" style="fill: #ffc107;stroke: #000000;stroke-miterlimit: 10;"
                    width="93.35" height="39.79" />
            @elseif ($hasil->status == 'Terjual')
                <rect x="206.29" y="464.41" style="fill: #f50505;stroke: #000000;stroke-miterlimit: 10;"
                    width="93.35" height="39.79" />
            @elseif ($hasil->status == 'Tersedia')
                <a href="#" data-toggle="modal" data-target="#modalBooking-grandsardahblokc2">
                    <rect x="206.29" y="464.41" style="fill: #ffff;stroke: #000000;stroke-miterlimit: 10;"
                        width="93.35" height="39.79" />
                </a>
            @endif
        @empty
            <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="grandsardahblokc2">
                <rect x="206.29" y="464.41" style="fill: #ffff;stroke: #000000;stroke-miterlimit: 10;"
                    width="93.35" height="39.79" />
            </a>
        @endforelse

        @forelse ($siteplan->where('code_product', 'grandsardahblokc3') as $hasil)
            @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <rect x="206.29" y="503.5" style="fill: #ffc107;stroke: #000000;stroke-miterlimit: 10;"
                    width="93.35" height="39.79" />
            @elseif ($hasil->status == 'Terjual')
                <rect x="206.29" y="503.5" style="fill: #f50505;stroke: #000000;stroke-miterlimit: 10;"
                    width="93.35" height="39.79" />
            @elseif ($hasil->status == 'Tersedia')
                <a href="#" data-toggle="modal" data-target="#modalBooking-grandsardahblokc3">
                    <rect x="206.29" y="503.5" style="fill: #ffff;stroke: #000000;stroke-miterlimit: 10;"
                        width="93.35" height="39.79" />
                </a>
            @endif
        @empty
            <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="grandsardahblokc3">
                <rect x="206.29" y="503.5" style="fill: #ffff;stroke: #000000;stroke-miterlimit: 10;" width="93.35"
                    height="39.79" />
            </a>
        @endforelse

        @forelse ($siteplan->where('code_product', 'grandsardahblokc4') as $hasil)
            @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <rect x="206.29" y="543.29" style="fill: #ffc107;stroke: #000000;stroke-miterlimit: 10;"
                    width="93.35" height="39.79" />
            @elseif ($hasil->status == 'Terjual')
                <rect x="206.29" y="543.29" style="fill: #f50505;stroke: #000000;stroke-miterlimit: 10;"
                    width="93.35" height="39.79" />
            @elseif ($hasil->status == 'Tersedia')
                <a href="#" data-toggle="modal" data-target="#modalBooking-grandsardahblokc4">
                    <rect x="206.29" y="543.29" style="fill: #ffff;stroke: #000000;stroke-miterlimit: 10;"
                        width="93.35" height="39.79" />
                </a>
            @endif
        @empty
            <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="grandsardahblokc4">
                <rect x="206.29" y="543.29" style="fill: #ffff;stroke: #000000;stroke-miterlimit: 10;"
                    width="93.35" height="39.79" />
            </a>
        @endforelse


        @forelse ($siteplan->where('code_product', 'grandsardahblokc5') as $hasil)
            @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <rect x="206.29" y="583.08" style="fill: #ffc107;stroke: #000000;stroke-miterlimit: 10;"
                    width="93.35" height="39.79" />
            @elseif ($hasil->status == 'Terjual')
                <rect x="206.29" y="583.08" style="fill: #f50505;stroke: #000000;stroke-miterlimit: 10;"
                    width="93.35" height="39.79" />
            @elseif ($hasil->status == 'Tersedia')
                <a href="#" data-toggle="modal" data-target="#modalBooking-grandsardahblokc5">
                    <rect x="206.29" y="583.08" style="fill: #ffff;stroke: #000000;stroke-miterlimit: 10;"
                        width="93.35" height="39.79" />
                </a>
            @endif
        @empty
            <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="grandsardahblokc5">
                <rect x="206.29" y="583.08" style="fill: #ffff;stroke: #000000;stroke-miterlimit: 10;"
                    width="93.35" height="39.79" />
            </a>
        @endforelse

        @forelse ($siteplan->where('code_product', 'grandsardahblokc6') as $hasil)
            @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <rect x="206.29" y="622.17" style="fill: #ffc107;stroke: #000000;stroke-miterlimit: 10;"
                    width="93.35" height="39.79" />
            @elseif ($hasil->status == 'Terjual')
                <rect x="206.29" y="622.17" style="fill: #f50505;stroke: #000000;stroke-miterlimit: 10;"
                    width="93.35" height="39.79" />
            @elseif ($hasil->status == 'Tersedia')
                <a href="#" data-toggle="modal" data-target="#modalBooking-grandsardahblokc6">
                    <rect x="206.29" y="622.17" style="fill: #ffff;stroke: #000000;stroke-miterlimit: 10;"
                        width="93.35" height="39.79" />
                </a>
            @endif
        @empty
            <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="grandsardahblokc6">
                <rect x="206.29" y="622.17" style="fill: #ffff;stroke: #000000;stroke-miterlimit: 10;"
                    width="93.35" height="39.79" />
            </a>
        @endforelse

        @forelse ($siteplan->where('code_product', 'grandsardahblokc7') as $hasil)
            @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <rect x="206.29" y="661.9" style="fill: #ffc107;stroke: #000000;stroke-miterlimit: 10;"
                    width="93.35" height="39.79" />
            @elseif ($hasil->status == 'Terjual')
                <rect x="206.29" y="661.9" style="fill: #f50505;stroke: #000000;stroke-miterlimit: 10;"
                    width="93.35" height="39.79" />
            @elseif ($hasil->status == 'Tersedia')
                <a href="#" data-toggle="modal" data-target="#modalBooking-grandsardahblokc7">
                    <rect x="206.29" y="661.9" style="fill: #ffff;stroke: #000000;stroke-miterlimit: 10;"
                        width="93.35" height="39.79" />
                </a>
            @endif
        @empty
            <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="grandsardahblokc7">
                <rect x="206.29" y="661.9" style="fill: #ffff;stroke: #000000;stroke-miterlimit: 10;" width="93.35"
                    height="39.79" />
            </a>
        @endforelse

        @forelse ($siteplan->where('code_product', 'grandsardahblokc8') as $hasil)
            @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <rect x="206.29" y="700.99" style="fill: #ffc107;stroke: #000000;stroke-miterlimit: 10;"
                    width="93.35" height="39.79" />
            @elseif ($hasil->status == 'Terjual')
                <rect x="206.29" y="700.99" style="fill: #f50505;stroke: #000000;stroke-miterlimit: 10;"
                    width="93.35" height="39.79" />
            @elseif ($hasil->status == 'Tersedia')
                <a href="#" data-toggle="modal" data-target="#modalBooking-grandsardahblokc8">
                    <rect x="206.29" y="700.99" style="fill: #ffff;stroke: #000000;stroke-miterlimit: 10;"
                        width="93.35" height="39.79" />
                </a>
            @endif
        @empty
            <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="grandsardahblokc8">
                <rect x="206.29" y="700.99" style="fill: #ffff;stroke: #000000;stroke-miterlimit: 10;"
                    width="93.35" height="39.79" />
            </a>
        @endforelse

        @forelse ($siteplan->where('code_product', 'grandsardahblokc9') as $hasil)
            @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <rect x="206.29" y="740.78" style="fill: #ffc107;stroke: #000000;stroke-miterlimit: 10;"
                    width="93.35" height="39.79" />
            @elseif ($hasil->status == 'Terjual')
                <rect x="206.29" y="740.78" style="fill: #f50505;stroke: #000000;stroke-miterlimit: 10;"
                    width="93.35" height="39.79" />
            @elseif ($hasil->status == 'Tersedia')
                <a href="#" data-toggle="modal" data-target="#modalBooking-grandsardahblokc9">
                    <rect x="206.29" y="740.78" style="fill: #ffff;stroke: #000000;stroke-miterlimit: 10;"
                        width="93.35" height="39.79" />
                </a>
            @endif
        @empty
            <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="grandsardahblokc9">
                <rect x="206.29" y="740.78" style="fill: #ffff;stroke: #000000;stroke-miterlimit: 10;"
                    width="93.35" height="39.79" />
            </a>
        @endforelse

        @forelse ($siteplan->where('code_product', 'grandsardahblokc10') as $hasil)
            @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <rect x="206.29" y="780.58" style="fill: #ffc107;stroke: #000000;stroke-miterlimit: 10;"
                    width="93.35" height="39.79" />
            @elseif ($hasil->status == 'Terjual')
                <rect x="206.29" y="780.58" style="fill: #f50505;stroke: #000000;stroke-miterlimit: 10;"
                    width="93.35" height="39.79" />
            @elseif ($hasil->status == 'Tersedia')
                <a href="#" data-toggle="modal" data-target="#modalBooking-grandsardahblokc10">
                    <rect x="206.29" y="780.58" style="fill: #ffff;stroke: #000000;stroke-miterlimit: 10;"
                        width="93.35" height="39.79" />
                </a>
            @endif
        @empty
            <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="grandsardahblokc10">
                <rect x="206.29" y="780.58" style="fill: #ffff;stroke: #000000;stroke-miterlimit: 10;"
                    width="93.35" height="39.79" />
            </a>
        @endforelse


        @forelse ($siteplan->where('code_product', 'grandsardahblokc11') as $hasil)
            @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <rect x="206.29" y="815.15" style="fill: #ffc107;stroke: #000000;stroke-miterlimit: 10;"
                    width="93.35" height="39.79" />
            @elseif ($hasil->status == 'Terjual')
                <rect x="206.29" y="815.15" style="fill: #f50505;stroke: #000000;stroke-miterlimit: 10;"
                    width="93.35" height="39.79" />
            @elseif ($hasil->status == 'Tersedia')
                <a href="#" data-toggle="modal" data-target="#modalBooking-grandsardahblokc11">
                    <rect x="206.29" y="815.15" style="fill: #ffff;stroke: #000000;stroke-miterlimit: 10;"
                        width="93.35" height="39.79" />
                </a>
            @endif
        @empty
            <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="grandsardahblokc11">
                <rect x="206.29" y="815.15" style="fill: #ffff;stroke: #000000;stroke-miterlimit: 10;"
                    width="93.35" height="39.79" />
            </a>
        @endforelse

        @forelse ($siteplan->where('code_product', 'grandsardahblokc12') as $hasil)
            @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <rect x="206.29" y="854.88" style="fill: #ffc107;stroke: #000000;stroke-miterlimit: 10;"
                    width="93.35" height="39.79" />
            @elseif ($hasil->status == 'Terjual')
                <rect x="206.29" y="854.88" style="fill: #f50505;stroke: #000000;stroke-miterlimit: 10;"
                    width="93.35" height="39.79" />
            @elseif ($hasil->status == 'Tersedia')
                <a href="#" data-toggle="modal" data-target="#modalBooking-grandsardahblokc12">
                    <rect x="206.29" y="854.88" style="fill: #ffff;stroke: #000000;stroke-miterlimit: 10;"
                        width="93.35" height="39.79" />
                </a>
            @endif
        @empty
            <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="grandsardahblokc12">
                <rect x="206.29" y="854.88" style="fill: #ffff;stroke: #000000;stroke-miterlimit: 10;"
                    width="93.35" height="39.79" />
            </a>
        @endforelse

        @forelse ($siteplan->where('code_product', 'grandsardahblokc13') as $hasil)
            @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <rect x="206.29" y="893.97" style="fill: #ffc107;stroke: #000000;stroke-miterlimit: 10;"
                    width="93.35" height="39.79" />
            @elseif ($hasil->status == 'Terjual')
                <rect x="206.29" y="893.97" style="fill: #f50505;stroke: #000000;stroke-miterlimit: 10;"
                    width="93.35" height="39.79" />
            @elseif ($hasil->status == 'Tersedia')
                <a href="#" data-toggle="modal" data-target="#modalBooking-grandsardahblokc13">
                    <rect x="206.29" y="893.97" style="fill: #ffff;stroke: #000000;stroke-miterlimit: 10;"
                        width="93.35" height="39.79" />
                </a>
            @endif
        @empty
            <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="grandsardahblokc13">
                <rect x="206.29" y="893.97" style="fill: #ffff;stroke: #000000;stroke-miterlimit: 10;"
                    width="93.35" height="39.79" />
            </a>
        @endforelse

        @forelse ($siteplan->where('code_product', 'grandsardahblokc14') as $hasil)
            @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <rect x="206.29" y="933.76" style="fill: #ffc107;stroke: #000000;stroke-miterlimit: 10;"
                    width="93.35" height="39.79" />
            @elseif ($hasil->status == 'Terjual')
                <rect x="206.29" y="933.76" style="fill: #f50505;stroke: #000000;stroke-miterlimit: 10;"
                    width="93.35" height="39.79" />
            @elseif ($hasil->status == 'Tersedia')
                <a href="#" data-toggle="modal" data-target="#modalBooking-grandsardahblokc14">
                    <rect x="206.29" y="933.76" style="fill: #ffff;stroke: #000000;stroke-miterlimit: 10;"
                        width="93.35" height="39.79" />
                </a>
            @endif
        @empty
            <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="grandsardahblokc14">
                <rect x="206.29" y="933.76" style="fill: #ffff;stroke: #000000;stroke-miterlimit: 10;"
                    width="93.35" height="39.79" />
            </a>
        @endforelse

        @forelse ($siteplan->where('code_product', 'grandsardahblokc15') as $hasil)
            @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <rect x="206.29" y="973.56" style="fill: #ffc107;stroke: #000000;stroke-miterlimit: 10;"
                    width="93.35" height="39.79" />
            @elseif ($hasil->status == 'Terjual')
                <rect x="206.29" y="973.56" style="fill: #f50505;stroke: #000000;stroke-miterlimit: 10;"
                    width="93.35" height="39.79" />
            @elseif ($hasil->status == 'Tersedia')
                <a href="#" data-toggle="modal" data-target="#modalBooking-grandsardahblokc15">
                    <rect x="206.29" y="973.56" style="fill: #ffff;stroke: #000000;stroke-miterlimit: 10;"
                        width="93.35" height="39.79" />
                </a>
            @endif
        @empty
            <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="grandsardahblokc15">
                <rect x="206.29" y="973.56" style="fill: #ffff;stroke: #000000;stroke-miterlimit: 10;"
                    width="93.35" height="39.79" />
            </a>
        @endforelse

        @forelse ($siteplan->where('code_product', 'grandsardahblokc16') as $hasil)
            @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <rect x="206.29" y="1012.64" style="fill: #ffc107;stroke: #000000;-miterlimit: 10;" width="93.35"
                    height="39.79" />
            @elseif ($hasil->status == 'Terjual')
                <rect x="206.29" y="1012.64" style="fill: #f50505;stroke: #000000;-miterlimit: 10;" width="93.35"
                    height="39.79" />
            @elseif ($hasil->status == 'Tersedia')
                <a href="#" data-toggle="modal" data-target="#modalBooking-grandsardahblokc16">
                    <rect x="206.29" y="1012.64" style="fill: #ffff;stroke: #000000;-miterlimit: 10;" width="93.35"
                        height="39.79" />
                </a>
            @endif
        @empty
            <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="grandsardahblokc16">
                <rect x="206.29" y="1012.64" style="fill: #ffff;stroke: #000000;-miterlimit: 10;" width="93.35"
                    height="39.79" />
            </a>
        @endforelse

        @forelse ($siteplan->where('code_product', 'grandsardahblokc17') as $hasil)
            @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <rect x="206.29" y="1052.38" style="fill: #ffc107;stroke: #000000;-miterlimit: 10;" width="93.35"
                    height="39.79" />
            @elseif ($hasil->status == 'Terjual')
                <rect x="206.29" y="1052.38" style="fill: #f50505;stroke: #000000;-miterlimit: 10;" width="93.35"
                    height="39.79" />
            @elseif ($hasil->status == 'Tersedia')
                <a href="#" data-toggle="modal" data-target="#modalBooking-grandsardahblokc17">
                    <rect x="206.29" y="1052.38" style="fill: #ffff;stroke: #000000;-miterlimit: 10;" width="93.35"
                        height="39.79" />
                </a>
            @endif
        @empty
            <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="grandsardahblokc17">
                <rect x="206.29" y="1052.38" style="fill: #ffff;stroke: #000000;-miterlimit: 10;" width="93.35"
                    height="39.79" />
            </a>
        @endforelse


        @forelse ($siteplan->where('code_product', 'grandsardahblokc18') as $hasil)
            @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <rect x="206.29" y="1091.46" style="fill: #ffc107;stroke: #000000;-miterlimit: 10;" width="93.35"
                    height="39.79" />
            @elseif ($hasil->status == 'Terjual')
                <rect x="206.29" y="1091.46" style="fill: #f50505;stroke: #000000;-miterlimit: 10;" width="93.35"
                    height="39.79" />
            @elseif ($hasil->status == 'Tersedia')
                <a href="#" data-toggle="modal" data-target="#modalBooking-grandsardahblokc18">
                    <rect x="206.29" y="1091.46" style="fill: #ffff;stroke: #000000;-miterlimit: 10;" width="93.35"
                        height="39.79" />
                </a>
            @endif
        @empty
            <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="grandsardahblokc18">
                <rect x="206.29" y="1091.46" style="fill: #ffff;stroke: #000000;-miterlimit: 10;" width="93.35"
                    height="39.79" />
            </a>
        @endforelse


        @forelse ($siteplan->where('code_product', 'grandsardahblokc19') as $hasil)
            @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <rect x="206.29" y="1131.26" style="fill: #ffc107;stroke: #000000;-miterlimit: 10;" width="93.35"
                    height="39.79" />
            @elseif ($hasil->status == 'Terjual')
                <rect x="206.29" y="1131.26" style="fill: #f50505;stroke: #000000;-miterlimit: 10;" width="93.35"
                    height="39.79" />
            @elseif ($hasil->status == 'Tersedia')
                <a href="#" data-toggle="modal" data-target="#modalBooking-grandsardahblokc19">
                    <rect x="206.29" y="1131.26" style="fill: #ffff;stroke: #000000;-miterlimit: 10;" width="93.35"
                        height="39.79" />
                </a>
            @endif
        @empty
            <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="grandsardahblokc19">
                <rect x="206.29" y="1131.26" style="fill: #ffff;stroke: #000000;-miterlimit: 10;" width="93.35"
                    height="39.79" />
            </a>
        @endforelse

        @forelse ($siteplan->where('code_product', 'grandsardahblokc20') as $hasil)
            @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <rect x="206.29" y="1171.05" style="fill: #ffc107;stroke: #000000;-miterlimit: 10;" width="93.35"
                    height="39.79" />
            @elseif ($hasil->status == 'Terjual')
                <rect x="206.29" y="1171.05" style="fill: #f50505;stroke: #000000;-miterlimit: 10;" width="93.35"
                    height="39.79" />
            @elseif ($hasil->status == 'Tersedia')
                <a href="#" data-toggle="modal" data-target="#modalBooking-grandsardahblokc20">
                    <rect x="206.29" y="1171.05" style="fill: #ffff;stroke: #000000;-miterlimit: 10;" width="93.35"
                        height="39.79" />
                </a>
            @endif
        @empty
            <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="grandsardahblokc20">
                <rect x="206.29" y="1171.05" style="fill: #ffff;stroke: #000000;-miterlimit: 10;" width="93.35"
                    height="39.79" />
            </a>
        @endforelse


        <text transform="matrix(1 0 0 1 226.3784 449.0011)" class="st7 st8">BLOK C1</text>
        <text transform="matrix(1 0 0 1 224.7895 488.1732)" class="st7 st8">BLOK C2</text>
        <text transform="matrix(1 0 0 1 224.6706 527.0128)" class="st7 st8">BLOK C3</text>
        <text transform="matrix(1 0 0 1 224.2995 568.5991)" class="st7 st8">BLOK C4</text>
        <text transform="matrix(1 0 0 1 224.3556 607.4078)" class="st7 st8">BLOK C5</text>
        <text transform="matrix(1 0 0 1 224.3344 646.4927)" class="st7 st8">BLOK C6</text>
        <text transform="matrix(1 0 0 1 224.909 685.6649)" class="st7 st8">BLOK C7</text>
        <text transform="matrix(1 0 0 1 224.3624 724.5044)" class="st7 st8">BLOK C8</text>
        <text transform="matrix(1 0 0 1 224.3834 766.0907)" class="st7 st8">BLOK C9</text>
        <text transform="matrix(1 0 0 1 221.8917 804.8994)" class="st7 st8">BLOK C10</text>
        <text transform="matrix(1 0 0 1 223.9283 839.4746)" class="st7 st8">BLOK C11</text>
        <text transform="matrix(1 0 0 1 222.3394 878.6467)" class="st7 st8">BLOK C12</text>
        <text transform="matrix(1 0 0 1 222.2205 917.4863)" class="st7 st8">BLOK C13</text>
        <text transform="matrix(1 0 0 1 221.8499 959.0726)" class="st7 st8">BLOK C14</text>
        <text transform="matrix(1 0 0 1 221.9056 997.8813)" class="st7 st8">BLOK C15</text>
        <text transform="matrix(1 0 0 1 221.8843 1036.9662)" class="st7 st8">BLOK C16</text>
        <text transform="matrix(1 0 0 1 222.4585 1076.1384)" class="st7 st8">BLOK C17</text>
        <text transform="matrix(1 0 0 1 221.9128 1114.9779)" class="st7 st8">BLOK C18</text>
        <text transform="matrix(1 0 0 1 221.9338 1156.5642)" class="st7 st8">BLOK C19</text>
        <text transform="matrix(1 0 0 1 220.3025 1195.373)" class="st7 st8">BLOK C20</text>
        {{-- ST 12 end --}}


        {{-- ST 13 BLOK D --}}
        @forelse ($siteplan->where('code_product', 'grandsardahblokd1') as $hasil)
            @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <rect x="88.6" y="424.05" style="fill:#ffc107; stroke:#000000;stroke-miterlimit:10;" width="93.35"
                    height="39.79" />
            @elseif ($hasil->status == 'Terjual')
                <rect x="88.6" y="424.05" style="fill:#f50505;stroke:#000000;stroke-miterlimit:10;" width="93.35"
                    height="39.79" />
            @elseif ($hasil->status == 'Tersedia')
                <a href="#" data-toggle="modal" data-target="#modalBooking-grandsardahblokd1">
                    <rect x="88.6" y="424.05" style="fill:#ffff;stroke:#000000;stroke-miterlimit:10;" width="93.35"
                        height="39.79" />
                </a>
            @endif
        @empty
            <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="grandsardahblokd1">
                <rect x="88.6" y="424.05" style="fill:#ffff;stroke:#000000;stroke-miterlimit:10;" width="93.35"
                    height="39.79" />
            </a>
        @endforelse


        @forelse ($siteplan->where('code_product', 'grandsardahblokd2') as $hasil)
            @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <rect x="88.6" y="463.78" style="fill:#ffc107; stroke:#000000;stroke-miterlimit:10;" width="93.35"
                    height="39.79" />
            @elseif ($hasil->status == 'Terjual')
                <rect x="88.6" y="463.78" style="fill:#f50505; stroke:#000000;stroke-miterlimit:10;" width="93.35"
                    height="39.79" />
            @elseif ($hasil->status == 'Tersedia')
                <a href="#" data-toggle="modal" data-target="#modalBooking-grandsardahblokd2">
                    <rect x="88.6" y="463.78" style="fill:#ffff;stroke:#000000;stroke-miterlimit:10;" width="93.35"
                        height="39.79" />
                </a>
            @endif
        @empty
            <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="grandsardahblokd2">
                <rect x="88.6" y="463.78" style="fill:#ffff;stroke:#000000;stroke-miterlimit:10;" width="93.35"
                    height="39.79" />
            </a>
        @endforelse


        @forelse ($siteplan->where('code_product', 'grandsardahblokd3') as $hasil)
            @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <rect x="88.6" y="502.87" style="fill:#ffc107; stroke:#000000;stroke-miterlimit:10;" width="93.35"
                    height="39.79" />
            @elseif ($hasil->status == 'Terjual')
                <rect x="88.6" y="502.87" style="fill:#f50505; stroke:#000000;stroke-miterlimit:10;" width="93.35"
                    height="39.79" />
            @elseif ($hasil->status == 'Tersedia')
                <a href="#" data-toggle="modal" data-target="#modalBooking-grandsardahblokd3">
                    <rect x="88.6" y="502.87" style="fill:#ffff;stroke:#000000;stroke-miterlimit:10;" width="93.35"
                        height="39.79" />
                </a>
            @endif
        @empty
            <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="grandsardahblokd3">
                <rect x="88.6" y="502.87" style="fill:#ffff;stroke:#000000;stroke-miterlimit:10;" width="93.35"
                    height="39.79" />
            </a>
        @endforelse


        @forelse ($siteplan->where('code_product', 'grandsardahblokd4') as $hasil)
            @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <rect x="88.6" y="542.66" style="fill:#ffc107; stroke:#000000;stroke-miterlimit:10;" width="93.35"
                    height="39.79" />
            @elseif ($hasil->status == 'Terjual')
                <rect x="88.6" y="542.66" style="fill:#f50505; stroke:#000000;stroke-miterlimit:10;" width="93.35"
                    height="39.79" />
            @elseif ($hasil->status == 'Tersedia')
                <a href="#" data-toggle="modal" data-target="#modalBooking-grandsardahblokd4">
                    <rect x="88.6" y="542.66" style="fill:#ffff;stroke:#000000;stroke-miterlimit:10;" width="93.35"
                        height="39.79" />
                </a>
            @endif
        @empty
            <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="grandsardahblokd4">
                <rect x="88.6" y="542.66" style="fill:#ffff;stroke:#000000;stroke-miterlimit:10;" width="93.35"
                    height="39.79" />
            </a>
        @endforelse



        @forelse ($siteplan->where('code_product', 'grandsardahblokd5') as $hasil)
            @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <rect x="88.6" y="582.46" style="fill:#ffc107; stroke:#000000;stroke-miterlimit:10;" width="93.35"
                    height="39.79" />
            @elseif ($hasil->status == 'Terjual')
                <rect x="88.6" y="582.46" style="fill:#f50505; stroke:#000000;stroke-miterlimit:10;" width="93.35"
                    height="39.79" />
            @elseif ($hasil->status == 'Tersedia')
                <a href="#" data-toggle="modal" data-target="#modalBooking-grandsardahblokd5">
                    <rect x="88.6" y="582.46" style="fill:#ffff;stroke:#000000;stroke-miterlimit:10;" width="93.35"
                        height="39.79" />
                </a>
            @endif
        @empty
            <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="grandsardahblokd5">
                <rect x="88.6" y="582.46" style="fill:#ffff;stroke:#000000;stroke-miterlimit:10;" width="93.35"
                    height="39.79" />
            </a>
        @endforelse



        @forelse ($siteplan->where('code_product', 'grandsardahblokd6') as $hasil)
            @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <rect x="88.6" y="621.54" style="fill:#ffc107; stroke:#000000;stroke-miterlimit:10;" width="93.35"
                    height="39.79" />
            @elseif ($hasil->status == 'Terjual')
                <rect x="88.6" y="621.54" style="fill:#f50505; stroke:#000000;stroke-miterlimit:10;" width="93.35"
                    height="39.79" />
            @elseif ($hasil->status == 'Tersedia')
                <a href="#" data-toggle="modal" data-target="#modalBooking-grandsardahblokd6">
                    <rect x="88.6" y="621.54" style="fill:#ffff;stroke:#000000;stroke-miterlimit:10;" width="93.35"
                        height="39.79" />
                </a>
            @endif
        @empty
            <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="grandsardahblokd6">
                <rect x="88.6" y="621.54" style="fill:#ffff;stroke:#000000;stroke-miterlimit:10;" width="93.35"
                    height="39.79" />
            </a>
        @endforelse



        @forelse ($siteplan->where('code_product', 'grandsardahblokd7') as $hasil)
            @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <rect x="88.6" y="661.27" style="fill:#ffc107; stroke:#000000;stroke-miterlimit:10;" width="93.35"
                    height="39.79" />
            @elseif ($hasil->status == 'Terjual')
                <rect x="88.6" y="661.27" style=" fill:#f50505; stroke:#000000;stroke-miterlimit:10;" width="93.35"
                    height="39.79" />
            @elseif ($hasil->status == 'Tersedia')
                <a href="#" data-toggle="modal" data-target="#modalBooking-grandsardahblokd7">
                    <rect x="88.6" y="661.27" style="fill:#ffff;stroke:#000000;stroke-miterlimit:10;" width="93.35"
                        height="39.79" />
                </a>
            @endif
        @empty
            <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="grandsardahblokd7">
                <rect x="88.6" y="661.27" style="fill:#ffff;stroke:#000000;stroke-miterlimit:10;" width="93.35"
                    height="39.79" />
            </a>
        @endforelse



        @forelse ($siteplan->where('code_product', 'grandsardahblokd8') as $hasil)
            @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <rect x="88.6" y="700.36" style=" fill:#ffc107;stroke:#000000;stroke-miterlimit:10;" width="93.35"
                    height="39.79" />
            @elseif ($hasil->status == 'Terjual')
                <rect x="88.6" y="700.36" style="fill:#f50505; stroke:#000000;stroke-miterlimit:10;" width="93.35"
                    height="39.79" />
            @elseif ($hasil->status == 'Tersedia')
                <a href="#" data-toggle="modal" data-target="#modalBooking-grandsardahblokd8">
                    <rect x="88.6" y="700.36" style="fill:#ffff;stroke:#000000;stroke-miterlimit:10;" width="93.35"
                        height="39.79" />
                </a>
            @endif
        @empty
            <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="grandsardahblokd8">
                <rect x="88.6" y="700.36" style="fill:#ffff;stroke:#000000;stroke-miterlimit:10;" width="93.35"
                    height="39.79" />
            </a>
        @endforelse



        @forelse ($siteplan->where('code_product', 'grandsardahblokd9') as $hasil)
            @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <rect x="88.6" y="740.15" style="fill:#ffc107; stroke:#000000;stroke-miterlimit:10;" width="93.35"
                    height="39.79" />
            @elseif ($hasil->status == 'Terjual')
                <rect x="88.6" y="740.15" style="fill:#f50505; stroke:#000000;stroke-miterlimit:10;" width="93.35"
                    height="39.79" />
            @elseif ($hasil->status == 'Tersedia')
                <a href="#" data-toggle="modal" data-target="#modalBooking-grandsardahblokd9">
                    <rect x="88.6" y="740.15" style="fill:#ffff;stroke:#000000;stroke-miterlimit:10;" width="93.35"
                        height="39.79" />
                </a>
            @endif
        @empty
            <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="grandsardahblokd9">
                <rect x="88.6" y="740.15" style="fill:#ffff;stroke:#000000;stroke-miterlimit:10;" width="93.35"
                    height="39.79" />
            </a>
        @endforelse



        @forelse ($siteplan->where('code_product', 'grandsardahblokd10') as $hasil)
            @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <rect x="88.6" y="779.95" style="fill:#ffc107; stroke:#000000;stroke-miterlimit:10;" width="93.35"
                    height="39.79" />
            @elseif ($hasil->status == 'Terjual')
                <rect x="88.6" y="779.95" style="fill:#f50505;stroke:#000000;stroke-miterlimit:10;" width="93.35"
                    height="39.79" />
            @elseif ($hasil->status == 'Tersedia')
                <a href="#" data-toggle="modal" data-target="#modalBooking-grandsardahblokd10">
                    <rect x="88.6" y="779.95" style="fill:#ffff;stroke:#000000;stroke-miterlimit:10;" width="93.35"
                        height="39.79" />
                </a>
            @endif
        @empty
            <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="grandsardahblokd10">
                <rect x="88.6" y="779.95" style="fill:#ffff;stroke:#000000;stroke-miterlimit:10;" width="93.35"
                    height="39.79" />
            </a>
        @endforelse



        @forelse ($siteplan->where('code_product', 'grandsardahblokd11') as $hasil)
            @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <rect x="88.6" y="814.52" style=" fill:#ffc107; stroke:#000000;stroke-miterlimit:10;" width="93.35"
                    height="39.79" />
            @elseif ($hasil->status == 'Terjual')
                <rect x="88.6" y="814.52" style=" fill:#f50505; stroke:#000000;stroke-miterlimit:10;" width="93.35"
                    height="39.79" />
            @elseif ($hasil->status == 'Tersedia')
                <a href="#" data-toggle="modal" data-target="#modalBooking-grandsardahblokd11">
                    <rect x="88.6" y="814.52" style="fill:#ffff;stroke:#000000;stroke-miterlimit:10;" width="93.35"
                        height="39.79" />
                </a>
            @endif
        @empty
            <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="grandsardahblokd11">
                <rect x="88.6" y="814.52" style="fill:#ffff;stroke:#000000;stroke-miterlimit:10;" width="93.35"
                    height="39.79" />
            </a>
        @endforelse



        @forelse ($siteplan->where('code_product', 'grandsardahblokd12') as $hasil)
            @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <rect x="88.6" y="854.26" style="fill:#ffc107; stroke:#000000;stroke-miterlimit:10;" width="93.35"
                    height="39.79" />
            @elseif ($hasil->status == 'Terjual')
                <rect x="88.6" y="854.26" style="fill:#f50505; stroke:#000000;stroke-miterlimit:10;" width="93.35"
                    height="39.79" />
            @elseif ($hasil->status == 'Tersedia')
                <a href="#" data-toggle="modal" data-target="#modalBooking-grandsardahblokd12">
                    <rect x="88.6" y="854.26" style="fill:#ffff;stroke:#000000;stroke-miterlimit:10;" width="93.35"
                        height="39.79" />
                </a>
            @endif
        @empty
            <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="grandsardahblokd12">
                <rect x="88.6" y="854.26" style="fill:#ffff;stroke:#000000;stroke-miterlimit:10;" width="93.35"
                    height="39.79" />
            </a>
        @endforelse


        @forelse ($siteplan->where('code_product', 'grandsardahblokd13') as $hasil)
            @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <rect x="88.6" y="893.34" style="fill:#ffc107; stroke:#000000;stroke-miterlimit:10;" width="93.35"
                    height="39.79" />
            @elseif ($hasil->status == 'Terjual')
                <rect x="88.6" y="893.34" style=" fill:#f50505; stroke:#000000;stroke-miterlimit:10;" width="93.35"
                    height="39.79" />
            @elseif ($hasil->status == 'Tersedia')
                <a href="#" data-toggle="modal" data-target="#modalBooking-grandsardahblokd13">
                    <rect x="88.6" y="893.34" style="fill:#ffff;stroke:#000000;stroke-miterlimit:10;" width="93.35"
                        height="39.79" />
                </a>
            @endif
        @empty
            <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="grandsardahblokd13">
                <rect x="88.6" y="893.34" style="fill:#ffff;stroke:#000000;stroke-miterlimit:10;" width="93.35"
                    height="39.79" />
            </a>
        @endforelse



        @forelse ($siteplan->where('code_product', 'grandsardahblokd14') as $hasil)
            @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <rect x="88.6" y="933.14" style="fill:#ffc107;stroke:#000000;stroke-miterlimit:10;" width="93.35"
                    height="39.79" />
            @elseif ($hasil->status == 'Terjual')
                <rect x="88.6" y="933.14" style=" fill:#f50505; stroke:#000000;stroke-miterlimit:10;" width="93.35"
                    height="39.79" />
            @elseif ($hasil->status == 'Tersedia')
                <a href="#" data-toggle="modal" data-target="#modalBooking-grandsardahblokd14">
                    <rect x="88.6" y="933.14" style="fill:#ffff;stroke:#000000;stroke-miterlimit:10;" width="93.35"
                        height="39.79" />
                </a>
            @endif
        @empty
            <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="grandsardahblokd14">
                <rect x="88.6" y="933.14" style="fill:#ffff;stroke:#000000;stroke-miterlimit:10;" width="93.35"
                    height="39.79" />
            </a>
        @endforelse


        @forelse ($siteplan->where('code_product', 'grandsardahblokd15') as $hasil)
            @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <rect x="88.6" y="972.93" style="fill:#ffc107; stroke:#000000;stroke-miterlimit:10;" width="93.35"
                    height="39.79" />
            @elseif ($hasil->status == 'Terjual')
                <rect x="88.6" y="972.93" style="fill:#f50505; stroke:#000000;stroke-miterlimit:10;" width="93.35"
                    height="39.79" />
            @elseif ($hasil->status == 'Tersedia')
                <a href="#" data-toggle="modal" data-target="#modalBooking-grandsardahblokd15">
                    <rect x="88.6" y="972.93" style="fill:#ffff;stroke:#000000;stroke-miterlimit:10;" width="93.35"
                        height="39.79" />
                </a>
            @endif
        @empty
            <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="grandsardahblokd15">
                <rect x="88.6" y="972.93" style="fill:#ffff;stroke:#000000;stroke-miterlimit:10;" width="93.35"
                    height="39.79" />
            </a>
        @endforelse



        @forelse ($siteplan->where('code_product', 'grandsardahblokd16') as $hasil)
            @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <rect x="88.6" y="1012.01" style="fill:#ffc107;stroke:#000000;stroke-miterlimit:10;" width="93.35"
                    height="39.79" />
            @elseif ($hasil->status == 'Terjual')
                <rect x="88.6" y="1012.01" style=" fill:#f50505; stroke:#000000;stroke-miterlimit:10;"
                    width="93.35" height="39.79" />
            @elseif ($hasil->status == 'Tersedia')
                <a href="#" data-toggle="modal" data-target="#modalBooking-grandsardahblokd16">
                    <rect x="88.6" y="1012.01" style="fill:#ffff;stroke:#000000;stroke-miterlimit:10;"
                        width="93.35" height="39.79" />
                </a>
            @endif
        @empty
            <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="grandsardahblokd16">
                <rect x="88.6" y="1012.01" style="fill:#ffff;stroke:#000000;stroke-miterlimit:10;" width="93.35"
                    height="39.79" />
            </a>
        @endforelse


        @forelse ($siteplan->where('code_product', 'grandsardahblokd17') as $hasil)
            @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <rect x="88.6" y="1051.75" style="fill:#ffc107; stroke:#000000;stroke-miterlimit:10;" width="93.35"
                    height="39.79" />
            @elseif ($hasil->status == 'Terjual')
                <rect x="88.6" y="1051.75" style=" fill:#f50505; stroke:#000000;stroke-miterlimit:10;"
                    width="93.35" height="39.79" />
            @elseif ($hasil->status == 'Tersedia')
                <a href="#" data-toggle="modal" data-target="#modalBooking-grandsardahblokd17">
                    <rect x="88.6" y="1051.75" style="fill:#ffff;stroke:#000000;stroke-miterlimit:10;"
                        width="93.35" height="39.79" />
                </a>
            @endif
        @empty
            <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="grandsardahblokd17">
                <rect x="88.6" y="1051.75" style="fill:#ffff;stroke:#000000;stroke-miterlimit:10;" width="93.35"
                    height="39.79" />
            </a>
        @endforelse



        @forelse ($siteplan->where('code_product', 'grandsardahblokd18') as $hasil)
            @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <rect x="88.6" y="1090.83" style="fill:#ffc107; stroke:#000000;stroke-miterlimit:10;" width="93.35"
                    height="39.79" />
            @elseif ($hasil->status == 'Terjual')
                <rect x="88.6" y="1090.83" style="fill:#f50505; stroke:#000000;stroke-miterlimit:10;" width="93.35"
                    height="39.79" />
            @elseif ($hasil->status == 'Tersedia')
                <a href="#" data-toggle="modal" data-target="#modalBooking-grandsardahblokd18">
                    <rect x="88.6" y="1090.83" style="fill:#ffff;stroke:#000000;stroke-miterlimit:10;"
                        width="93.35" height="39.79" />
                </a>
            @endif
        @empty
            <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="grandsardahblokd18">
                <rect x="88.6" y="1090.83" style="fill:#ffff;stroke:#000000;stroke-miterlimit:10;" width="93.35"
                    height="39.79" />
            </a>
        @endforelse


        @forelse ($siteplan->where('code_product', 'grandsardahblokd19') as $hasil)
            @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <rect x="88.6" y="1130.63" style="fill:#ffc107;  stroke:#000000;stroke-miterlimit:10;"
                    width="93.35" height="39.79" />
            @elseif ($hasil->status == 'Terjual')
                <rect x="88.6" y="1130.63" style="fill:#f50505; stroke:#000000;stroke-miterlimit:10;" width="93.35"
                    height="39.79" />
            @elseif ($hasil->status == 'Tersedia')
                <a href="#" data-toggle="modal" data-target="#modalBooking-grandsardahblokd19">
                    <rect x="88.6" y="1130.63" style="fill:#ffff;stroke:#000000;stroke-miterlimit:10;"
                        width="93.35" height="39.79" />
                </a>
            @endif
        @empty
            <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="grandsardahblokd19">
                <rect x="88.6" y="1130.63" style="fill:#ffff;stroke:#000000;stroke-miterlimit:10;" width="93.35"
                    height="39.79" />
            </a>
        @endforelse


        @forelse ($siteplan->where('code_product', 'grandsardahblokd20') as $hasil)
            @if ($hasil->status == 'Booking' or $hasil->status == 'Pending' or $hasil->status == 'Pending')
                <rect x="88.6" y="1170.42" style="fill:#ffc107; stroke:#000000;stroke-miterlimit:10;" width="93.35"
                    height="39.79" />
            @elseif ($hasil->status == 'Terjual')
                <rect x="88.6" y="1170.42" style="fill:#f50505; stroke:#000000;stroke-miterlimit:10;" width="93.35"
                    height="39.79" />
            @elseif ($hasil->status == 'Tersedia')
                <a href="#" data-toggle="modal" data-target="#modalBooking-grandsardahblokd20">
                    <rect x="88.6" y="1170.42" style="fill:#ffff;stroke:#000000;stroke-miterlimit:10;"
                        width="93.35" height="39.79" />
                </a>
            @endif
        @empty
            <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="grandsardahblokd20">
                <rect x="88.6" y="1170.42" style="fill:#ffff;stroke:#000000;stroke-miterlimit:10;" width="93.35"
                    height="39.79" />
            </a>
        @endforelse



        <text transform="matrix(1 0 0 1 108.6912 448.3723)" class="st7 st8">BLOK D1</text>
        <text transform="matrix(1 0 0 1 107.1023 487.5445)" class="st7 st8">BLOK D2</text>
        <text transform="matrix(1 0 0 1 106.9834 526.384)" class="st7 st8">BLOK D3</text>
        <text transform="matrix(1 0 0 1 106.6123 567.9704)" class="st7 st8">BLOK D4</text>
        <text transform="matrix(1 0 0 1 106.6685 606.7791)" class="st7 st8">BLOK D5</text>
        <text transform="matrix(1 0 0 1 106.6472 645.864)" class="st7 st8">BLOK D6</text>
        <text transform="matrix(1 0 0 1 107.2219 685.0361)" class="st7 st8">BLOK D7</text>
        <text transform="matrix(1 0 0 1 106.6752 723.8757)" class="st7 st8">BLOK D8</text>
        <text transform="matrix(1 0 0 1 106.6962 765.462)" class="st7 st8">BLOK D9</text>
        <text transform="matrix(1 0 0 1 104.2045 804.2708)" class="st7 st8">BLOK D10</text>
        <text transform="matrix(1 0 0 1 106.2412 838.8458)" class="st7 st8">BLOK D11</text>
        <text transform="matrix(1 0 0 1 104.6523 878.0181)" class="st7 st8">BLOK D12</text>
        <text transform="matrix(1 0 0 1 104.5334 916.8575)" class="st7 st8">BLOK D13</text>
        <text transform="matrix(1 0 0 1 104.1628 958.444)" class="st7 st8">BLOK D14</text>
        <text transform="matrix(1 0 0 1 104.2184 997.2526)" class="st7 st8">BLOK D15</text>
        <text transform="matrix(1 0 0 1 104.1972 1036.3374)" class="st7 st8">BLOK D16</text>
        <text transform="matrix(1 0 0 1 104.7713 1075.5096)" class="st7 st8">BLOK D17</text>
        <text transform="matrix(1 0 0 1 104.2257 1114.3491)" class="st7 st8">BLOK D18</text>
        <text transform="matrix(1 0 0 1 104.2467 1155.9355)" class="st7 st8">BLOK D19</text>
        <text transform="matrix(1 0 0 1 102.6153 1194.7443)" class="st7 st8">BLOK D20</text>

        <rect x="271.13" y="55.77" class="st14" width="22.55" height="2.04" />
        <rect x="307.25" y="55.77" class="st14" width="22.55" height="2.04" />
        <rect x="343.38" y="55.77" class="st14" width="22.55" height="2.04" />
        <rect x="49.43" y="56.79" class="st14" width="22.55" height="2.04" />
        <rect x="527" y="56.79" class="st14" width="22.55" height="2.04" />
    </g>
    <g id="Layer_2">
    </g>
</svg>
