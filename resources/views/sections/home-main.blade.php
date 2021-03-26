<div class="home-page-content my-4 mb-5">
    @forelse($categories as $category)
    <div class="home-category-show">
        <div class="home-category-title">
            <h3> {{ $category->title }} </h3>
        </div>
        <div class="home-category-main">
            <div class="home-category-image">
                <img src="{{ asset('images/'. $category->slug .'.png') }}" width="250" height="200"  alt="{{ $category->title }}">
            </div>
            <div class="home-category-info">
                <div class="home-category-excerpt">
                    {{ $category->excerpt }}
                </div>
                <div class="mt-5">
                    <a href=" {{ route('categories.show', ['slug' => $category->slug]) }}  "><button class="btn main-button">Daha Fazla</button></a>
                </div>
            </div>
        </div>
    </div>
    <hr>
    @empty
    <p>Henüz Kategori Yok</p>
    @endforelse
</div>