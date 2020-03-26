<!-- Slider Area -->
<div class="slide-area slide-area-3 fix" data-stellar-background-ratio="0.6">
    <div class="container">

        <!-- Title -->
        <div class="row slide-content text-center">
            <h2 class="title2">Le Coronavirus <!-- (COVID‑19) --> en République du Congo</h2>
            <h4>Site d'information non officiel</h4>
        </div>
        <!-- /Title -->

        <!-- Counter area -->
        <div class="row counters">
            @foreach ($page->counters as $counter)
            <div class="col-xs-4 col-md-3">
                <div class="fun_text">
                   <span class="counter-icon">
                        <img src="{{ $counter->iconpath }}" alt="{{ $counter->text }}">
                    </span>
                    <span class="counter">{{ $counter->n }}</span>
                    <h4>{{ $counter->text }}</h4>
                </div>
            </div>
            @endforeach
        </div>
        <!-- /Counter area -->

    </div>
</div>
<!-- /Slider Area -->
