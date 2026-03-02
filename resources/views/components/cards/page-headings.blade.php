<div class="page-headings-card">

    @unless(empty($pageHeadings[0]))

        <h1>
            {!!$pageHeadings[0]!!}
        </h1>

    @endunless

    @unless(empty($pageHeadings[1]))

        @if(str_contains($pageHeadings[1], '\n'))

            <h2>
                {!!str_replace('\n', '<br>', $pageHeadings[1])!!}
            </h2>

        @else

            <h2>
                {!!$pageHeadings[1]!!}
            </h2>

        @endif

    @endunless

</div>