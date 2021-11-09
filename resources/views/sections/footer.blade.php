<div class="page-footer">
    @include('sections.footer-category')
    <div class="copyright">
        {{ Str::slug($setting->title, '-') }}&copy;{{ date('Y') }}<a href="{{route('author')}}"> | @orhanurullah</a>
    </div>
</div>