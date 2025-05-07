<!-- Create multiple skeleton items for loading effect -->
@for ($i = 0; $i < 2; $i++)
    <section id="Skeleton" class="relative flex flex-col gap-4 px-5 mt-5 mb-3 skeleton-item">
        <div class="card">
            <div
                class="flex flex-col md:flex-row rounded-[20px] md:rounded-[30px] border border-[#F1F2F6] p-3 gap-4 bg-white">
                <!-- Image placeholder -->
                <div
                    class="w-full md:w-[500px] h-[200px] md:h-[183px] rounded-[20px] md:rounded-[30px] bg-gray-200 animate-pulse">
                </div>

                <!-- Content placeholder -->
                <div class="flex flex-col gap-3 w-full p-2 md:p-0">
                    <!-- Title placeholder -->
                    <div class="h-4 bg-gray-200 rounded w-3/4 animate-pulse"></div>
                    <!-- Address placeholder -->
                    <div class="h-3 bg-gray-200 rounded w-1/2 animate-pulse"></div>

                    <hr class="border-[#F1F2F6]">

                    <!-- Info placeholders -->
                    <div class="grid grid-cols-2 md:grid-cols-1 gap-2 md:gap-[6px]">
                        <div class="flex items-center gap-2">
                            <div class="w-4 h-4 md:w-5 md:h-5 bg-gray-200 rounded-full animate-pulse"></div>
                            <div class="h-3 bg-gray-200 rounded w-2/3 animate-pulse"></div>
                        </div>
                        <div class="flex items-center gap-2">
                            <div class="w-4 h-4 md:w-5 md:h-5 bg-gray-200 rounded-full animate-pulse"></div>
                            <div class="h-3 bg-gray-200 rounded w-1/2 animate-pulse"></div>
                        </div>
                        <div class="flex items-center gap-2">
                            <div class="w-4 h-4 md:w-5 md:h-5 bg-gray-200 rounded-full animate-pulse"></div>
                            <div class="h-3 bg-gray-200 rounded w-3/4 animate-pulse"></div>
                        </div>
                    </div>

                    <hr class="border-[#F1F2F6]">

                    <!-- Price placeholder -->
                    <div class="mt-1">
                        <div class="h-5 bg-gray-200 rounded w-1/3 animate-pulse"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endfor
