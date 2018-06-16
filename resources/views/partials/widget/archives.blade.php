<div class="p-3">
    <h4 class="font-italic">Archives</h4>
    <ol class="list-unstyled mb-0">
        @foreach ($archives as $archive)
        <li>
            <a href="/?month={{ $archive['month'] }}&year={{ $archive['year'] }}">{{ $archive['month'] . ' ' . $archive['year'] }}</a>
        </li>
        @endforeach
    </ol>
</div>
