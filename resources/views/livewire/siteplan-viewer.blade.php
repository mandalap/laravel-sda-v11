<div x-data="siteplanViewer({{ Js::from($statusMap) }})" x-init="init()" wire:poll.30s="refreshStatus">
    @if ($hasSiteplan && $svgContent)
        <div id="siteplan-container" class="w-full overflow-auto">
            <div class="flex items-center justify-center">
                {!! $svgContent !!}
            </div>
        </div>

        <div class="flex flex-wrap justify-center items-center gap-4 mt-4 text-xs">
            <div class="flex items-center gap-1.5">
                <span class="inline-block w-4 h-4 rounded-sm border border-gray-400 bg-white"></span>
                <span>Tersedia</span>
            </div>
            <div class="flex items-center gap-1.5">
                <span class="inline-block w-4 h-4 rounded-sm bg-yellow-400"></span>
                <span>Booking</span>
            </div>
            <div class="flex items-center gap-1.5">
                <span class="inline-block w-4 h-4 rounded-sm bg-red-600"></span>
                <span>Terjual</span>
            </div>
        </div>
    @elseif ($hasSiteplan && !$svgContent)
        <div class="flex items-center justify-center h-48 text-gray-400">
            <p>Siteplan tidak ditemukan.</p>
        </div>
    @else
        <div class="flex items-center justify-center h-48 text-gray-400">
            <p>Siteplan belum tersedia untuk project ini.</p>
        </div>
    @endif
</div>

<script>
    document.addEventListener('alpine:init', () => {
        Alpine.data('siteplanViewer', (statusMap) => ({
            colorMap: {
                'Tersedia': '#f8f8f8',
                'Booking': '#ffc107',
                'Pending': '#ffc107',
                'Terjual': '#f50505',
            },
            init() {
                this.$nextTick(() => {
                    this.applyColors();
                    this.bindClickEvents();
                });

                setTimeout(() => {
                    this.applyColors();
                    this.bindClickEvents();
                }, 300);

                this.$wire.on('statusMapUpdated', ({
                    statusMap: newMap
                }) => {
                    statusMap = newMap;
                    this.$nextTick(() => {
                        this.applyColors();
                        this.bindClickEvents();
                    });
                });
            },

            applyColors() {
                Object.entries(statusMap).forEach(([codeProduct, status]) => {
                    const el = document.getElementById(codeProduct);
                    if (!el) return;

                    const color = this.colorMap[status] ?? '#f8f8f8';

                    const tagName = el.tagName.toLowerCase();
                    if (['rect', 'path', 'polygon', 'circle'].includes(tagName)) {
                        el.style.fill = color;
                    } else {
                        const paths = el.querySelectorAll('path, rect, polygon, circle');
                        paths.forEach(path => {
                            if (path.closest('text') === null) {
                                path.style.fill = color;
                            }
                        });
                    }

                    el.dataset.status = status;
                    el.dataset.codeProduct = codeProduct;
                });
            },

            bindClickEvents() {
                Object.entries(statusMap).forEach(([codeProduct, status]) => {
                    const el = document.getElementById(codeProduct);
                    if (!el || status !== 'Tersedia') return;

                    el.style.cursor = 'pointer';
                    el.addEventListener('click', () => {
                        window.dispatchEvent(new CustomEvent(
                            'siteplan-block-clicked', {
                                detail: {
                                    codeProduct,
                                    status
                                }
                            }));
                    });
                });
            },
        }));
    });
</script>
