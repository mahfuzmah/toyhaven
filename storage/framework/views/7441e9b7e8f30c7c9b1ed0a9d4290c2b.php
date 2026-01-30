<div class="search-modal modal fade" id="searchmodal">
    <div class="modal-dialog mw-100 m-0">
        <div class="modal-content body-bg border-0 rounded-0">
            <div class="modal-body p-0">
                <div class="container">
                    <div class="search-content ptb-30">
                        <div class="search-box d-flex flex-row-reverse">
                            <button type="button" class="d-block search-close body-secondary-color icon-16"
                                    data-bs-dismiss="modal" aria-label="Close"><i
                                    class="ri-close-large-line d-block lh-1"></i></button>
                            <form method="get" action="javascript:void(0)" class="search-form w-100">
                                <div class="search-bar position-relative">
                                    <div class="form-search d-flex flex-row-reverse">
                                        <input type="search" name="search-input" id="headerSearchMobile"
                                               class="w-100 search-input search-input-handler h-auto ptb-0 plr-15 bg-transparent border-0"
                                               value="" placeholder="Search here" required>

                                        <button type="submit" onclick="window.location.href='#'"
                                                class="d-block search-btn body-secondary-color icon-16"
                                                aria-label="Go to search" disabled><i
                                                class="ri-search-line d-block lh-1"></i></button>
                                    </div>

                                    <div
                                        class="search-results position-absolute top-100 start-0 end-0 body-bg z-1 border-full border-radius box-shadow"
                                        id="mobileSearchResults"
                                        style="max-height: 80vh; overflow-y: auto; display: none;">
                                        <div class="search-for ptb-10 plr-15 beb">Start typing to see results...</div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><?php /**PATH C:\toyhaven\resources\views/website/includes/search.blade.php ENDPATH**/ ?>