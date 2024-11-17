@if ($fetchTableDetails->count() > 0)

    @foreach ($fetchTableDetails as $key => $product)
    @php
        // $fullUrl = asset('public/assets/products/' . $product->image);;
        // $baseUrl = url('/');
    @endphp

    <div class="isotope-item col-md-4 col-sm-6 mt-3">
        <article class="post format-standard blog-grid">
            <div class="entry-thumbnail">
                <img alt="{{ $product->title }}" src="{{ url('public/assets/products/').'/'.$product->image }}"/>
            </div>
            <div class="post-content">
                <h3 class="entry-title-small">
                    <a href="{{ route('pages.singleproduct',$product->slug) }}" rel="bookmark">{{ $product->title }}</a>
                </h3>

                <div class="entry-content">
                    {{-- {!! $product->description !!} --}}
                    <p>
                        <a href="{{ route('pages.singleproduct',$product->slug) }}" class="theme_button">Read More</a>
                    </p>
                </div>
                <!-- .entry-content -->

            </div><!-- .post-content -->
        </article>
        <!-- .post -->
    </div>
    @endforeach

    <!-- Render Pagination Links -->
    <div class="pagination">
        {{ $fetchTableDetails->links('pagination::bootstrap-4') }}
    </div>
@else
    <h4>No Data found in the system!</h4>
@endif
