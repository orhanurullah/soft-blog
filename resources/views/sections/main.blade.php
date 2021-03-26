<div class="main-category-info d-flex pt-3">
    <div class="main-category-image mt-2"><img src="{{ asset('images/php.png') }}" width="40" height="40" alt="{{ $category->title }}">
    </div>
    <div class="main-category-title mt-3 ms-3"> <h6>{{ $category->title }}</h6>
    </div>
</div>
<hr class="line">
<div class="main-page-content">
    <div class="main-page-title">
        <h4>{{ $category->title }}</h4>
    </div>
    <hr class="line">
    <div class="main-page-description">
        @forelse($descs as $desc)
        {!! $desc !!}
        <hr>
        @empty
        @endforelse
        @include('sections.code-show', ['category', $category])
        <hr>
        <div class="code-area my-4">
            <div class="example-info">
                <div class="example-title ps-3">
                    <h6>Basic HTML Gösterimi</h6>
                </div>
                <div class="example-show">
                 <a><button id="copyButon" type="submit" class="btn btn-info">İzle</button></a>
             </div>
         </div>
         <pre class="">
            <code class="" id="codes">

            </code>
        </pre>
    </div>
</div>
<hr>
</div>
@include('sections.page-navs')
