<!-- mobile-menu start -->
<div class="mobile-menu d-xl-none position-fixed top-0 bottom-0 body-bg z-index-5 invisible box-shadow"
     id="mobile-menu">
    <div class="mobile-contents d-flex flex-column">
        <div class="menu-close ptb-10 plr-15 beb">
            <button type="button" class="menu-close-btn d-block body-secondary-color icon-16 ms-auto"
                    aria-label="Menu close"><i class="ri-close-large-line d-block lh-1"></i></button>
        </div>
        <div class="mobilemenu-content beb">
            <div class="main-wrap">
                <ul class="menu-ul">
                    <li class="menu-li bst">
                        <div class="menu-btn d-flex flex-row-reverse">
                            <button type="button" class="width-48 icon-16 ptb-10 bsl" data-bs-toggle="collapse"
                                    data-bs-target="#menu-home" aria-expanded="false"
                                    aria-label="Menu accordion"></button>
                            <span class="width-calc-48 ptb-10 plr-15">
                                <a href="{{ route('home') }}" class="d-inline-block body-color">Home</a>
                            </span>
                        </div>
                    </li>
                    <li class="menu-li bst">
                        <div class="menu-btn d-flex flex-row-reverse">
                            <button type="button" class="width-48 icon-16 ptb-10 bsl"
                                    data-bs-toggle="collapse" data-bs-target="#menu-shop"
                                    aria-expanded="false" aria-label="Menu accordion">
                                <i class="ri-add-line d-block lh-1"></i>
                            </button>
                            <span class="width-calc-48 ptb-10 plr-15"><a href="#" class="d-inline-block body-color">Shop</a></span>
                        </div>
                        <div class="menu-dropdown collapse" id="menu-shop">
                            <ul class="menudrop-ul">
                                @foreach($categories as $category)
                                    <li class="menudrop-li bst">
                                        <div class="menu-btn d-flex flex-row-reverse">
                                            <button type="button" class="width-48 icon-16 ptb-10 bsl"
                                                    data-bs-toggle="collapse"
                                                    data-bs-target="#menu-cat-{{ $category->id }}"
                                                    aria-expanded="false" aria-label="Menu accordion">
                                                <i class="ri-add-line d-block lh-1"></i>
                                            </button>
                                            <span class="width-calc-48 ptb-10 psl-20 per-15">
                                                <a href="{{ route('category', ['id' => $category->id]) }}"
                                                   class="d-inline-block body-color">{{ $category->name }}</a>
                                            </span>
                                        </div>
                                        <div class="menusub-dropdown collapse" id="menu-cat-{{ $category->id }}">
                                            <ul class="menusub-ul">
                                                @foreach($category->subCategory as $subCategory)
                                                    <li class="menusub-li bst">
                                                        <span class="d-block ptb-10 psl-25 per-15">
                                                            <a href="{{ route('subCategory', ['id' => $subCategory->id]) }}"
                                                               class="d-inline-block body-color">{{ $subCategory->name }}</a>
                                                        </span>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </li>

                    <li class="menu-li bst">
                        <div class="menu-btn d-flex flex-row-reverse">
                            <button type="button" class="width-48 icon-16 ptb-10 bsl" data-bs-toggle="collapse"
                                    data-bs-target="#menu-blog" aria-expanded="false" aria-label="Menu accordion">
                                <i class="ri-add-line d-block lh-1"></i>
                            </button>
                            <span class="width-calc-48 ptb-10 plr-15">
                                <a href="#" class="d-inline-block body-color">By Age</a>
                            </span>
                        </div>
                        <div class="menu-dropdown collapse" id="menu-blog">
                            <ul class="menudrop-ul">
                                <li class="menudrop-li bst">
                                    <span class="d-block ptb-10 psl-20 per-15">
                                        <a href="{{ route('product.age',['age'=>1]) }}" class="d-inline-block body-color">0-12 Months</a>
                                    </span>
                                    <span class="d-block ptb-10 psl-20 per-15">
                                        <a href="{{ route('product.age',['age'=>2]) }}" class="d-inline-block body-color">1-3 Years</a>
                                    </span>
                                    <span class="d-block ptb-10 psl-20 per-15">
                                        <a href="{{ route('product.age',['age'=>3]) }}" class="d-inline-block body-color">3-6 Years</a>
                                    </span>
                                    <span class="d-block ptb-10 psl-20 per-15">
                                        <a href="{{ route('product.age',['age'=>4]) }}" class="d-inline-block body-color">6-12 Years</a>
                                    </span>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- mobile-menu end -->
