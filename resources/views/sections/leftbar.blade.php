<div class="leftbar" id="leftbar">
    <div class="category-area">
        <!-- Mobile Menu -->
        <div class="category-nav">

            <!-- Mobile Menu Button -->
            <div id="open"  class="menu-buton d-lg-none d-block">
                <img  onclick="openNav();" title="Liste" id="menu-image" class="animate__animated animate__backInDown" src="{{ asset('images/menu.png') }}" width="45" height="45"  alt="{{ __('Menu') }}">
                <img  onclick="closeNav();" title="Kapat" id="menu-close-image" class="animate__animated animate__backInDown" src="{{ asset('images/close.png') }}" width="45" height="45"  alt="{{ __('Kapat') }}">
            </div>
            <!-- Mobile Menu Button End -->
             <!-- Mobile Sidebar Menu -->
            @include('sections.nav', ['categories' => $categories, 'setting' => $setting])
            <!-- Mobile Sidebar End -->
        </div>
        <!-- Mobile Menu End -->
        <!-- Kategoriler -->
        @include('sections.menubar', ['categories' => $categories])
    </div>
</div>
