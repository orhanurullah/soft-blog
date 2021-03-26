@forelse($category->examples as $example)
<div class="code-area my-4">
    <div class="example-info">
        <div class="example-title ps-3">
            <h6>{{ $example->title }}</h6>
        </div>
        <div class="example-show">
            <a href="" target="_blank"><button type="submit" class="btn btn-info">İzle</button></a>
        </div>
    </div>
    <pre class="">
        <code class="language-html">
            {!! $example->content !!}
     </code>
 </pre>
</div>
@empty
@endforelse