<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Pengingat Cicilan</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body,
        table,
        td,
        a {
            -webkit-text-size-adjust: 100%;
            -ms-text-size-adjust: 100%;
        }

        table,
        td {
            mso-table-lspace: 0pt;
            mso-table-rspace: 0pt;
            border-collapse: collapse;
        }

        img {
            border: 0;
            height: auto;
            line-height: 100%;
            outline: none;
            text-decoration: none;
        }

        body {
            background-color: #F5F5F5;
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif;
            font-size: 14px;
            color: #424242;
        }

        .wrapper {
            width: 100%;
            background-color: #F5F5F5;
            padding: 32px 16px;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #FFFFFF;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.08);
        }

        /* ── Header ── */
        .header {
            background-color: #D81D76;
            padding: 28px 32px;
            text-align: center;
        }

        .header-brand {
            font-size: 22px;
            font-weight: 700;
            color: #FFFFFF;
            letter-spacing: 0.3px;
        }

        .header-tagline {
            font-size: 12px;
            color: rgba(255, 255, 255, 0.75);
            margin-top: 4px;
        }

        /* ── Body ── */
        .body {
            padding: 32px;
        }

        .greeting {
            font-size: 16px;
            font-weight: 600;
            color: #0A0A0A;
            margin-bottom: 8px;
        }

        .intro {
            font-size: 14px;
            color: #616161;
            line-height: 1.6;
            margin-bottom: 24px;
        }

        .custom-message {
            background-color: #FBE8F1;
            border-left: 4px solid #D81D76;
            border-radius: 0 8px 8px 0;
            padding: 14px 16px;
            font-size: 14px;
            color: #424242;
            line-height: 1.6;
            margin-bottom: 24px;
        }

        .section-title {
            font-size: 13px;
            font-weight: 600;
            color: #9E9E9E;
            text-transform: uppercase;
            letter-spacing: 0.8px;
            margin-bottom: 12px;
        }

        .table-wrapper {
            border-radius: 8px;
            overflow: hidden;
            border: 1px solid #EDEDED;
            margin-bottom: 16px;
        }

        .installment-table {
            width: 100%;
            border-collapse: collapse;
            font-size: 13px;
        }

        .installment-table thead tr {
            background-color: #FBE8F1;
        }

        .installment-table thead th {
            padding: 11px 14px;
            text-align: left;
            font-size: 12px;
            font-weight: 600;
            color: #AE1679;
            white-space: nowrap;
        }

        .installment-table tbody tr {
            border-top: 1px solid #EDEDED;
        }

        .installment-table tbody tr:nth-child(even) {
            background-color: #FAFAFA;
        }

        .installment-table tbody td {
            padding: 12px 14px;
            color: #424242;
            vertical-align: middle;
        }

        .badge {
            display: inline-block;
            padding: 3px 10px;
            border-radius: 20px;
            font-size: 11px;
            font-weight: 600;
            white-space: nowrap;
        }

        .badge-unpaid {
            background-color: #FDF8D1;
            color: #928510;
            border: 1px solid #FBF2A3;
        }

        .badge-rejected {
            background-color: #F7C3CD;
            color: #B00020;
            border: 1px solid #FFD9E0;
        }

        .info-box {
            background-color: #F5F5F5;
            border-radius: 8px;
            padding: 14px 16px;
            font-size: 13px;
            color: #757575;
            line-height: 1.6;
            margin-bottom: 28px;
        }

        .info-box strong {
            color: #424242;
        }

        .divider {
            border: none;
            border-top: 1px solid #EDEDED;
            margin: 24px 0;
        }

        .footer {
            background-color: #0A0A0A;
            padding: 24px 32px;
            text-align: center;
        }

        .footer-brand {
            font-size: 14px;
            font-weight: 700;
            color: #D81D76;
            margin-bottom: 6px;
        }

        .footer-text {
            font-size: 12px;
            color: #757575;
            line-height: 1.6;
        }

        .footer-note {
            font-size: 11px;
            color: #616161;
            margin-top: 12px;
            padding-top: 12px;
            border-top: 1px solid #1a1a1a;
        }

        @media only screen and (max-width: 480px) {
            .body {
                padding: 20px 16px;
            }

            .header {
                padding: 20px 16px;
            }

            .installment-table {
                font-size: 11px !important;
            }

            .installment-table thead th,
            .installment-table tbody td {
                padding: 8px 6px !important;
            }

            .col-invoice {
                display: none !important;
            }

            .total-label {
                display: block !important;
                text-align: center !important;
                width: 100% !important;
                margin-bottom: 6px !important;
            }

            .total-value {
                display: block !important;
                text-align: center !important;
                width: 100% !important;
            }
        }
    </style>
</head>

<body>
    <div class="wrapper">
        <div class="container">
            <div class="header">
                <div class="header-brand">{{ config('app.name') }}</div>
                <div class="header-tagline">Teman Investasi Anda</div>
            </div>

            <div class="body">

                <p class="greeting">Halo, {{ $member->nama }} 👋</p>
                <p class="intro">
                    Kami ingin mengingatkan bahwa Anda memiliki
                    <strong>{{ $installments->count() }} cicilan</strong>
                    yang belum diselesaikan. Mohon segera lakukan pembayaran.
                </p>

                @if (!empty($customBody))
                <div class="custom-message">{{ $customBody }}</div>
                @endif

                <div class="table-wrapper">
                    <table class="installment-table">
                        <thead>
                            <tr>
                                <th>Cicilan</th>
                                <th class="col-invoice">No. Transaksi</th>
                                <th>Bulan</th>
                                <th>Jumlah</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($installments as $installment)
                            <tr>
                                <td>#{{ $installment->no_cicilan }}</td>
                                <td class="col-invoice" style="color: #9E9E9E; font-size: 12px;">
                                    {{ $installment->no_transaksi }}
                                </td>
                                <td>
                                    {{ $installment->tanggal_cicilan_label }}
                                </td>
                                <td style="font-weight: 600; white-space: nowrap;">
                                    Rp{{ number_format($installment->harga_cicilan, 0, ',', '.') }}
                                </td>
                                <td>
                                    @if ($installment->isBelumDibayar())
                                    <span class="badge badge-unpaid">Belum Dibayar</span>
                                    @elseif ($installment->isDitolak())
                                    <span class="badge badge-rejected">Ditolak</span>
                                    @endif
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <table width="100%" style="margin-bottom: 28px;">
                    <tr>
                        <td style="background-color: #D81D76; border-radius: 8px; padding: 14px 16px;">
                            <table width="100%">
                                <tr>
                                    <td class="total-label" style="font-size: 13px; font-weight: 600; color: rgba(255,255,255,0.85);">
                                        Total yang Harus Dibayar
                                    </td>
                                    <td class="total-value"
                                        style="text-align: right; font-size: 16px; font-weight: 700; color: #FFFFFF; white-space: nowrap;">
                                        Rp {{ number_format($installments->sum('harga_cicilan'), 0, ',', '.') }}
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>

                <div class="info-box">
                    <strong>Catatan:</strong> Email ini dikirim secara otomatis oleh sistem.
                    Jika Anda sudah melakukan pembayaran, mohon abaikan email ini.
                    Untuk pertanyaan, silakan hubungi Admin kami.
                </div>

                <hr class="divider" />

                <p style="font-size: 13px; color: #9E9E9E; text-align: center; line-height: 1.6;">
                    Terima kasih telah mempercayakan kebutuhan properti Anda kepada<br />
                    <strong style="color: #D81D76;">{{ config('app.name') }}</strong>
                </p>

            </div>

            <div class="footer">
                <div class="footer-note">
                    &copy; {{ date('Y') }} {{ config('app.name') }}. All rights reserved.
                </div>
            </div>

        </div>
    </div>
</body>

</html>