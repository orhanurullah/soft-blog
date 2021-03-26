 <div class="main-right-content col-lg-1 d-none d-lg-block pt-5 ms-3 position-relative">
    <!-- <div class="person mb-4 d-flex-row">
        <div class="person-image">
            <img src="{{ asset('images/5.jpg') }}" width="90" height="120" alt="person" style="object-fit: cover;">
        </div>
        <div class="person-info d-flex-col">
            <span class="socail-icon"><img src="{{ asset('images/inst.png') }}"alt="social"></span>
            <span style="font-size: 12px; color:brown;">@orhanurullah</span>
        </div>
    </div> -->
    <div class="position-absolute top-10 end-0">
        <div class="company-name">
            {{ Str::slug($setting->title, '') }}
        </div>
        <hr class="line">
        @forelse($categories as $cat)
        <div class="footer-cat"><a href="{{ route('categories.show', ['slug' => $cat->slug]) }}"><span class="list-item" style="box-shadow: none;">{{ $cat->title }}</span></a></div>
        @empty
        @endforelse
        <div class="company-name">
            {{ Str::slug($setting->title, '') }}
        </div>
    </div>
</div>