<style>

    /* Search bar */
    .search-bar-placeholder {
        background: #f5f7f9;
        border-radius: 60px;
        padding: 0.6rem 1rem;
        display: flex;
        align-items: center;
        gap: 10px;
        color: #8a9aa8;
        font-size: 0.9rem;
        margin-bottom: 1.2rem;
        border: 1px solid #e9edf2;
    }

    .search-bar-placeholder i {
        font-size: 1.1rem;
        color: #9aabb8;
    }

    /* Bookmark */
    .bookmarked-row {
        display: flex;
        justify-content: space-between;
        align-items: baseline;
        flex-wrap: wrap;
    }

    .bookmarked-title {
        font-weight: 600;
        font-size: 0.85rem;
        letter-spacing: 0.5px;
        color: #2c4b66;
        text-transform: uppercase;
    }

    .bookmarked-count {
        font-size: 0.7rem;
        color: #8fabbd;
        background: #f0f4f8;
        padding: 0.2rem 0.6rem;
        border-radius: 30px;
    }

    /* List */
    .content-list {
        padding: 0.5rem 0;
    }

    .list-item {
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 1rem 1.8rem;
        border-bottom: 1px solid #f0f3f7;
        transition: background 0.15s;
    }

    .list-item:hover {
        background: #fbfdff;
    }

    .item-left {
        display: flex;
        align-items: baseline;
        gap: 0.75rem;
        flex-wrap: wrap;
    }

    .item-label {
        font-weight: 600;
        color: #1f5e7e;
        background: #eef3f8;
        padding: 0.2rem 0.8rem;
        border-radius: 40px;
        font-size: 0.7rem;
        letter-spacing: 0.3px;
        text-transform: uppercase;
    }

    .item-title {
        font-weight: 600;
        font-size: 1rem;
        color: #1f2f3c;
    }

    /* Button */
    .btn-apply-sm {
        border: none;
        font-size: 0.8rem;
        font-weight: 500;
        color: #1f6e8c;
        background: #eff5f9;
        padding: 0.35rem 1.1rem;
        border-radius: 50px;
        transition: all 0.2s;
        display: inline-flex;
        align-items: center;
        gap: 6px;
    }

    .btn-apply-sm i {
        font-size: 0.75rem;
    }

    .btn-apply-sm:hover {
        background: #e2ecf3;
        color: #0b4b66;
    }

    /* Modal */
    .search-modal .modal-content {
        border-radius: 1.75rem;
        border: none;
        overflow: hidden;
    }

    .search-modal .modal-header {
        border-bottom: 1px solid #eef2f8;
        padding: 1.2rem 1.6rem;
    }

    .search-modal .modal-body {
        padding: 1.6rem;
    }

    /* Responsive */
    @media (max-width: 550px) {
        .list-item {
            flex-direction: column;
            align-items: flex-start;
            gap: 0.6rem;
        }

        .item-left {
            width: 100%;
        }
    }

    #input-search {
        cursor: pointer;
    }
</style>


<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
     aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header d-flex align-items-start justify-content-between">
                <!-- Header with "Search for curricula, admissions, campuses..." and Bookmarked Pages (exact clone) -->
                <div class="row align-items-center" style="width: 97%;">
                    <div class="search-bar-placeholder w-100 d-flex justify-content-between">
                        <input
                            type="text"
                            class="form-control border-0 bg-transparent shadow-none p-0"
                            placeholder="Search for curricula, admissions, campuses..."
                            aria-label="Search for curricula, admissions, campuses..."
                            id="search-input"
                            name="search-input"
                        />
                        <i class="bi bi-search" id="input-search"></i>
                    </div>
                    <div class="bookmarked-row">
                        <span class="bookmarked-title"><i class="bi bi-bookmark-fill me-1"
                                                          style="font-size: 0.7rem;"></i> Bookmarked Pages</span>
                        <span class="bookmarked-count">4 items</span>
                    </div>
                </div>


                <button type="button" class="btn-close mt-1" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="content-list">
                    <!-- CAMPUS Centrium Square -->
                    <div class="list-item">
                        <div class="item-left">
                            <span class="item-label">CAMPUS</span>
                            <span class="item-title">Centrium Square</span>
                        </div>
                        <div>
                            <button class="btn-apply-sm search-action-trigger" data-search-term="Centrium Square">
                                <i class="bi bi-building"></i> Explore
                            </button>
                        </div>
                    </div>
                    <!-- CAMPUS Centrium Square -->
                    <div class="list-item">
                        <div class="item-left">
                            <span class="item-label">CAMPUS</span>
                            <span class="item-title">Centrium Square</span>
                        </div>
                        <div>
                            <button class="btn-apply-sm search-action-trigger" data-search-term="Centrium Square">
                                <i class="bi bi-building"></i> Explore
                            </button>
                        </div>
                    </div>
                    <!-- CAMPUS Centrium Square -->
                    <div class="list-item">
                        <div class="item-left">
                            <span class="item-label">CAMPUS</span>
                            <span class="item-title">Centrium Square</span>
                        </div>
                        <div>
                            <button class="btn-apply-sm search-action-trigger" data-search-term="Centrium Square">
                                <i class="bi bi-building"></i> Explore
                            </button>
                        </div>
                    </div>
                    <!-- CAMPUS Centrium Square -->
                    <div class="list-item">
                        <div class="item-left">
                            <span class="item-label">CAMPUS</span>
                            <span class="item-title">Centrium Square</span>
                        </div>
                        <div>
                            <button class="btn-apply-sm search-action-trigger" data-search-term="Centrium Square">
                                <i class="bi bi-building"></i> Explore
                            </button>
                        </div>
                    </div>
                    <!-- CAMPUS Centrium Square -->
                    <div class="list-item">
                        <div class="item-left">
                            <span class="item-label">CAMPUS</span>
                            <span class="item-title">Centrium Square</span>
                        </div>
                        <div>
                            <button class="btn-apply-sm search-action-trigger" data-search-term="Centrium Square">
                                <i class="bi bi-building"></i> Explore
                            </button>
                        </div>
                    </div>
                    <!-- CAMPUS Centrium Square -->
                    <div class="list-item">
                        <div class="item-left">
                            <span class="item-label">CAMPUS</span>
                            <span class="item-title">Centrium Square</span>
                        </div>
                        <div>
                            <button class="btn-apply-sm search-action-trigger" data-search-term="Centrium Square">
                                <i class="bi bi-building"></i> Explore
                            </button>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>


</div>

