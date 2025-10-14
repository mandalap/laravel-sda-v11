<div class="w-full">
    <div class="flex flex-col gap-4 rounded-2xl border border-custom-gray-40 p-3 shadow-sm">
        <p class="text-base font-semibold text-custom-gray-100">Member Kamu</p>

        @if ($affiliatedMembers->count())
            <!-- Responsive Table -->
            <div class="overflow-x-auto">
                <table class="w-full">
                    <thead>
                        <tr class="border-b border-custom-gray-40">
                            <th class="pr-4 pb-2 text-left text-sm font-medium text-custom-gray-100">
                                Nama
                            </th>
                            <th class="px-4 pb-2 text-left text-sm font-medium text-custom-gray-100">
                                Nomor Whatsapp
                            </th>
                            <th
                                class="pl-4 pb-2 text-left text-sm font-medium text-custom-gray-100 hidden md:table-cell">
                                Tanggal Bergabung
                            </th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-custom-gray-40">
                        @foreach ($affiliatedMembers as $affiliate)
                            <tr class="hover:bg-custom-gray-10 transition-colors">
                                <td class="pr-4 py-2">
                                    <span class="text-xs font-medium text-custom-gray-90">
                                        {{ $affiliate->member->nama }}
                                    </span>
                                </td>
                                <td class="px-4 py-2">
                                    <span class="text-xs text-custom-gray-90">
                                        {{ $affiliate->member->telepon }}
                                    </span>
                                </td>
                                <td class="pl-4 py-2 hidden md:table-cell">
                                    <span class="text-xs text-custom-gray-90">
                                        {{ $affiliate->joined_at->locale('id')->isoFormat('D MMMM YYYY') }}
                                    </span>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <!-- Pagination menggunakan custom view dari vendor -->
            <div class="mt-2">
                {{ $affiliatedMembers->links() }}
            </div>
        @else
            <div class="text-center py-8">
                <svg class="w-16 h-16 mx-auto text-custom-gray-40 mb-3" fill="none" stroke="currentColor"
                    viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                        d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                </svg>
                <p class="text-custom-gray-70 text-sm">Belum ada member yang menggunakan kode referral kamu.</p>
            </div>
        @endif
    </div>
</div>
