@unless ($breadcrumbs->isEmpty())

    <ul class="breadcrumbs">

        @foreach ($breadcrumbs as $breadcrumb)

            @if (!is_null($breadcrumb->url) && !$loop->last)
                <li class="breadcrumbs-item">
                    <a href="{{ $breadcrumb->url }}">{{ $breadcrumb->title }}</a>
                    <i class="seoicon-right-arrow"></i>
                </li>
            @else
                <li class="breadcrumbs-item active">
                    <span>{{ $breadcrumb->title }}</span>
                    <i class="seoicon-right-arrow"></i>
                </li>
            @endif

        @endforeach
    </ul>

@endunless
