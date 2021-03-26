<div class="code-area my-4">
    <div class="example-info">
        <div class="example-title ps-3">
            <h6>Bu Bir Deneme Başlığıdır</h6>
        </div>
        <div class="example-show">
            <a href="@if(isset($codepath)) {{ $codepath }} @endif" target="_blank"><button type="submit" class="copybutton">İzle</button></a>
        </div>
    </div>
    <pre class="">
        <code class="">
            {!! $post->content !!}
      </code>
  </pre>
</div>