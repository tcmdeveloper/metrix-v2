<x-layout.template :page-headings="$pageHeadings" :breadcrumbs="$breadcrumbs" :container-class="$containerClass">

    
    {{-- GRID --}}

    <div class="grid grid-cols-3 gap-4">


        @foreach($criminal_cases as $criminal_case)


            {{-- CONTENT LIST ITEM --}}

            <x-cards.content-list-item :resource="$criminal_case" class="content-list-item-vertical" />

        @endforeach

    </div>

</x-layout.template>